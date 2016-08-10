<?php
//
// +------------------------------------------------------------------------+
// | PHP Version 5                                                          |
// +------------------------------------------------------------------------+
// | Copyright (c) All rights reserved.                                     |
// +------------------------------------------------------------------------+
// | This source file is subject to version 3.00 of the PHP License,        |
// | that is available at http://www.php.net/license/3_0.txt.               |
// | If you did not receive a copy of the PHP license and are unable to     |
// | obtain it through the world-wide-web, please send a note to            |
// | license@php.net so we can mail you a copy immediately.                 |
// +------------------------------------------------------------------------+
// | Author:                                                                |
// +------------------------------------------------------------------------+
//
// $Id$
//


/**
* @author       Administrator
*/
class User_model extends  MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取一个用户信息
     * @param $LoginCode
     * @param string $Enable
     * @return null
     */
    function getUser($uuid,$Enable='Y')
    {
        $query = $this->db->query(
            "select t1.*,
        t2.email AS admin_email,
        t2.qq AS admin_qq,
        t2.phone AS admin_phone,
        t2.user_name AS admin_user_name
        FROM APSOS_user t1 left JOIN admin_user t2 ON t1.admin_user_id=t2.uuid
        where t1.uuid=? and t1.enable=?",array($uuid,$Enable));
        if( $query->num_rows()==1){
            return $query->result_array()[0];
        }else{
            return null;
        }

    }

    /**
     * 获取用户地址
     * @param $LoginCode
     * @param string $Enable
     * @return null
     */
    function getUserAddresses($LoginCode,$Enable='Y')
    {

        return null;
    }

    /**
     * 检查登录
     * @param $Login_code 登录帐号
     * @param $Login_pwd  登录密码
     */
    public function checkLogin($Login_code,$Login_pwd)
    {
        $hash_pwd=hash('sha256', $Login_pwd);
        $query=$this->db->select('*')->from('APSOS_user')
                ->where('enable', 'Y')
                ->where('login_pwd', $hash_pwd)
                ->group_start()
                    ->where('login_code',$Login_code)
                    ->or_where('phone',  $Login_code)
                    ->or_where('email',  $Login_code)
                ->group_end()
            ->get();
        log_message("debug","登录返回结果数：".$query->num_rows());
        if( $query->num_rows()==1){
            $row=$query->row();

            $query = $this->db->query(
                "select t1.*,
                t2.email AS admin_email,
                t2.qq AS admin_qq,
                t2.phone AS admin_phone,
                t2.user_name AS admin_user_name
                FROM APSOS_user t1 left JOIN admin_user t2 ON t1.admin_user_id=t2.uuid
                where t1.uuid=? and t1.enable=?",array($row->uuid,'Y'));
            if( $query->num_rows()==1){
                return $query->row();
            }else{
                return null;
            }
        }else{
            return false;
        }
    }

    /**
     * 修改密码
     * @param $uuid
     * @param $oldpwd
     * @param $newpwd
     * @return bool
     */
    public function updatePWD($uuid,$oldpwd,$newpwd,$renewpwd)
    {
        if($renewpwd!=$newpwd)
        {
            return array('state'=>false,'msg'=>'新密码和确认密码不一致');
        }
        $query=$this->db->get_where("APSOS_user",array("uuid"=>$uuid,"login_pwd"=>hash('sha256',$oldpwd )));

        if( $query->num_rows()==1){
           // $table_name=$this->db->dbprefix('user');
            //$this->db->set('login_pwd', 'field+1', FALSE);
            $this->db->where('uuid', $uuid);
            if($this->db->update("APSOS_user",array("login_pwd"=>hash('sha256',$newpwd ))))
            {
                return array('state'=>true,'msg'=>'密码修改成功');
            }else
            {
                return array('state'=>false,'msg'=>'密码修改失败，请重试！');
            }

        }else{
            return array('state'=>false,'msg'=>'旧密码错误，请重新输入');
        }
    }

    /**
     * 更新账户资料信息
     * @param $uuid
     * @param $data
     * @return array
     */
    public function update($data)
    {
        $uuid=$data['uuid'];
        if(empty($uuid)==TRUE)
        {
            return array('state'=>false,'msg'=>'非法操作');
        }
        if(empty($data['email'])){
            return array('state'=>false,'msg'=>'邮箱不能为空！');
        }

        $query=$this->db->get_where("APSOS_user",array('uuid'=>$uuid));
        if( $query->num_rows()==1){

            $query=$this->db->select('*')->from('APSOS_user')
                ->group_start()
                ->where('login_code',$data['login_code'])
                ->or_where('phone',  $data['phone'])
                ->or_where('email',  $data['email'])
                ->group_end()
                ->where_not_in('uuid',$uuid)
                ->get();
            if( $query->num_rows()==1){
                return array('state'=>false,'msg'=>'个人资料更新失败：帐号或手机号或email已经存在！');
            }
            $this->db->where('uuid', $uuid);
            if($this->db->update("apsos_user",$data))
            {
                return array('state'=>true,'msg'=>'个人资料更新成功');
            }else
            {
                return array('state'=>false,'msg'=>'个人资料更新失败，请重试！');
            }

        }else{
            return array('state'=>false,'msg'=>'非法操作');
        }
    }
}

?>