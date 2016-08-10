<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-4-24
 * Time: ����3:38
 */
class User_model extends Dili_Model
{
    public function __construct(){
        parent::__construct();
    }

    function select($uuid=null){
        $sql="select  * from admin_user where 1=1 ";
        $whereData=array();
        $whereSql="";
        if(empty($uuid)==FALSE){
            $whereSql=$whereSql." and uuid=?";
            array_push($whereData,$uuid);
        }
        $query=$this->db->query($sql.$whereSql,$whereData);
        return $query->result_array();
    }

    function insert($param_data){
        $data=array(
            'uuid'=>com_create_guid(),
            'login_pwd'=>hash('sha256', 'zzxdadmin123456'),
            'login_code'=>$param_data['login_code'],
            'phone'=>$param_data['phone'],
            'email'=>$param_data['email'],
            'qq'=>$param_data['qq'],
            'user_name'=>$param_data['user_name'],
            'add_time'=>date('Y-m-d H:i:s',time())
        );
        $this->db->insert("admin_user",$data);
    }
    function delete($uuid){
        $this->db->where("uuid",$uuid);
        $this->db->delete("admin_user");
    }
    function update($data){
        $uuid=$data['uuid'];
        if(empty($uuid)==TRUE)
        {
            return array('state'=>false,'msg'=>'非法操作');
        }
        $query=$this->db->get_where("admin_user",array('uuid'=>$uuid));
        if( $query->num_rows()==1){

            $query=$this->db->select('*')->from('admin_user')
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
            if($this->db->update("admin_user",$data))
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

    /**
     * 检查登录
     * @param $Login_code 登录帐号
     * @param $Login_pwd  登录密码
     */
    public function checkLogin($Login_code,$Login_pwd)
    {
        $hash_pwd=hash('sha256', $Login_pwd);
        log_message("debug","检查用户密码，新密文:".$hash_pwd);
        $query=$this->db->select('*')->from('admin_user')
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
            return $query->row();
        }else{
            return false;
        }
    }
    /**
     * 获取一个用户信息
     * @param $LoginCode
     * @param string $Enable
     * @return null
     */
    function getUser($uuid,$Enable='Y')
    {
        $query = $this->db->query("select * from admin_user where uuid=? and enable=?",array($uuid,$Enable));
        if ($query->num_rows()==1){

            return $query->row_array();
        }else{
            return null;
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
        $query=$this->db->get_where("admin_user",array("uuid"=>$uuid,"login_pwd"=>hash('sha256',$oldpwd )));

        if( $query->num_rows()==1){

            $this->db->where('uuid', $uuid);
            if($this->db->update("admin_user",array("login_pwd"=>hash('sha256',$newpwd ))))
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


}