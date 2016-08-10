<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-4-24
 * Time: ����3:38
 */
class Guest_model extends Dili_Model
{
    public function __construct(){
        parent::__construct();
    }

     function getGuests($data=null){
        $wheredata=array();
        $where="";
        $sql="
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 ";

         if(!empty($data['guest_name'])){
            $guest_name=iconv('utf-8', "GB2312//IGNORE", $data['guest_name']);
            $where = $where . " AND a.name like '%" . $this->db->escape_like_str($guest_name) . "%' ";
        }
        if(!empty($data['contract_user_name'])){
            $contactperson=iconv('utf-8', "GB2312//IGNORE", $data['contract_user_name']);
            $where = $where . " AND a.contactperson like '%" . $this->db->escape_like_str($contactperson) . "%' ";
        }
        if(!empty($data['enable'])){
            $wheredata[]=$data['enable'];
            $where = $where . " AND b.enable=? ";
        }

        /*if(empty($where) ){
            log_message("debug",'默认是展示有效的客户');
            $where = $where . " AND b.enable='Y' ";
        }*/

        $orderby="order by enable desc";

        $query=$this->db->query($sql.$where.$orderby,$wheredata);

        return $query->result_array();
    }

    function getGuest($guest_id){
        $default_guest_pwd=$this->config->item('default_guest_pwd');
        $sha_pwd=hash('sha256', $default_guest_pwd);
        $sql="
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= ? ";

        $query=$this->db->query($sql,array($guest_id));

        if($query->num_rows()==0){
            $insert_sql="insert into apsos_user(uuid,login_code,login_pwd,user_name,phone,email,add_time,sex,enable,company)
          Select code,pycode,'".$sha_pwd."' as login_pwd,contactperson,
        (
        case
             when len(replace(handphonebp,' ',''))>11 then substring(replace(handphonebp,' ',''),1,11)
             when len(replace(handphonebp,' ',''))=11 then replace(handphonebp,' ','')
             else ''
        end
        ) as phone,
        (
        case
             when CHARINDEX('@',email) >0 then replace(email,' ','')
             else ''
        end
        )
         as email,getdate() as add_time,sex,'N',name
         from T_Guest where code='".$guest_id."'";
            $this->db->query($insert_sql);
        }
        $query=$this->db->query($sql,array($guest_id));

        return $query->result_array();
    }
    function updateGuest($data){
        $this->db->where("uuid",$data['uuid']);

        if( $this->db->update("apsos_user",$data))
        {
            $ret= array('state' => true, 'msg' => '更新成功');
            return $ret;
        }else{
            $ret= array('state' => false, 'msg' => '更新失败');
            return $ret;
        }
    }

    function getGuestAccount($uuid){

        $sql="select * from apsos_user where uuid=?";

        $query=$this->db->query($sql,array($uuid));
        if( $query->num_rows()==1){
            return $query->row();
        }
        return null;
    }

}