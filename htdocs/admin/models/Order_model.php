<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-5-7
 * Time: 上午12:00
 */

class Order_model extends  Dili_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 订单信息
     * @param $user_id
     * @return mixed
     */
    function getOrders($data=null)
    {
        $where_array=array();
        $query_sql="select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid ";
        $orderby_sql=" order by create_date_time asc";

        if(!empty($data['company'])){
            $where_array[]=$data['company'];
            $company=iconv('UTF-8','GBK',$this->db->escape_like_str($data['company']));
            $query_sql=$query_sql." and t1.company like '%" . $company . "%'";
        }
        if(!empty($data['order_status'])){
            $where_array[]=$data['order_status'];
            $query_sql=$query_sql." and order_status=? ";
        }

        if(!empty($data['start_date_time'])){
            $where_array[]=$data['start_date_time'].' 00:00:00';
            $query_sql=$query_sql." and create_date_time>?";
        }
        if(!empty($data['end_date_time'])){
            $where_array[]=$data['end_date_time'].' 23:59:59';
            $query_sql=$query_sql." and create_date_time<?";
        }
        if(!empty($data['out_order_id'])){
            $query_sql=$query_sql." and out_order_id like '%" . $this->db->escape_like_str($data['out_order_id']) . "%'";
        }
        $query=$this->db->query($query_sql.$orderby_sql,$where_array);
        return  $query->result_array();
    }

    /**
     * 需求订单信息
     */
    function getRequirementOrders($data=null)
    {
        $where_array=array();
        $query_sql="select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01";
        $orderby_sql=" ";
        if(!empty($data['company'])){
            $where_array[]=$data['company'];
            $company=iconv('UTF-8','GBK',$this->db->escape_like_str($data['company']));
            $query_sql=$query_sql." and t3.company like '%" . $company . "%'";
        }
        if(!empty($data['order_status'])){
            $where_array[]=$data['order_status'];
            $query_sql=$query_sql." and order_status=? ";
        }

        if(!empty($data['start_date_time'])){
            $where_array[]=$data['start_date_time'].' 00:00:00';
            $query_sql=$query_sql." and create_date_time>?";
        }
        if(!empty($data['end_date_time'])){
            $where_array[]=$data['end_date_time'].' 23:59:59';
            $query_sql=$query_sql." and create_date_time<?";
        }
        if(!empty($data['out_order_id'])){
            $query_sql=$query_sql." and out_order_id like '%" . $this->db->escape_like_str($data['out_order_id']) . "%'";
        }
        $query=$this->db->query($query_sql.$orderby_sql,$where_array);
        return  $query->result_array();
    }

    function getOneOrder($order_id)
    {
        $query=$this->db->query("select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid=?",array($order_id));
        if($query->result_array()&& count($query->result_array())==1){
            return $query->result_array()[0];
        }
        return  array();
    }


    /**
     * 订单明细
     * @param $order_uuid
     * @return string
     */
    function getOrderDetail($order_id)
    {

        $oneOrder=$this->getOneOrder($order_id);
        $sql="select t1.* from  apsos_order_detail t1 where t1.order_id='".$order_id."'    order by t1.lno asc
        ";
        $query=$this->db->query($sql);
        return  $query->result_array();
    }

    /**
     * 获取订单总金额
     * @param $order_uuid
     * @return float
     */
    function updateOrderStatus($data=null)
    {
        $order_id=$data['order_id'];
        $order_status=$data['order_status'];
        $remark=$data['remark'];
        $this->db->trans_start();
        $this->db->set('order_status', $order_status);
        $this->db->where('uuid', $order_id);

        if($order_status=='2'){ //审核通过

            $this->db->group_start();
            $this->db->where('order_status', '1'); //已提交
            $this->db->or_where('order_status', '8');//审核不通过
            $this->db->group_end();

        }else  if($order_status=='8'){ //审核不通过

            $this->db->group_start();
            $this->db->where('order_status', '1'); //已提交
            $this->db->or_where('order_status', '2');//审核通过
            $this->db->or_where('order_status', '3');//发货审核通过
            $this->db->group_end();
        }else  if($order_status=='3'){ //发货审核通过

            $this->db->group_start();
            $this->db->where('order_status', '2'); //审核已提交
            $this->db->group_end();
        }
        else  if($order_status=='6'){ //取消

            $this->db->where('order_status', '1'); //已提交

        }if($order_status=='7'){ //删除

            $this->db->where('order_status', '6'); //已取消

        }
        $this->db->update('apsos_order');
        if($this->db->trans_status() === TRUE)
        {


            if($order_status=='2'){
                $addOutOrderResult=$this->addOutOrder($order_id);
                $addOutOrderResult=iconv('GBK','UTF-8',$addOutOrderResult);

                if(empty($addOutOrderResult))
                {
                    $ret=  array('state' => false, 'msg' => '生成实发货单失败，请重试');
                    $this->db->trans_rollback();
                    return $ret;
                }else if(strstr($addOutOrderResult,"ERROR")==true)
                {

                    $ret=  array('state' => false, 'msg' => $addOutOrderResult);
                    $this->db->trans_rollback();
                    return $ret;
                }else if(strstr($addOutOrderResult,"WARN")==TRUE)
                {


                    $ret=  array('state' => true, 'msg' => $addOutOrderResult);
                    $this->db->set('order_status', '8');
                    $this->db->where('uuid', $order_id);
                    $this->db->update('apsos_order');
                    $data['order_status']='8';
                    $data['remark']=$addOutOrderResult;
                    $this->addOrderCheck($data);//添加审核信息
                    $this->db->trans_complete();
                    return $ret;
                }
            }
            $this->addOrderCheck($data);//添加审核信息
            log_message("debug","该订单状态更新成功:".$order_status);
            $ret= array('state' => true, 'msg' => '操作成功');
            $this->db->trans_complete();
            return $ret;
        }
        else
        {
            log_message("debug","该订单状态更新失败".$order_status);
            $ret=array('state' => false, 'msg' => '操作失败');
            $this->db->trans_rollback();
            return $ret;
        }
    }

    /**
     * 更新订单收货人信息
     * @param $user_id
     * @param $order_id
     * @param $data
     * @return array
     */
    function updateOrderConsigneeInfo($user_id,$order_id,$data)
    {
        $this->db->set('to_where', iconv('UTF-8','GBK',$data['address']));
        $this->db->set('receive_user_name', iconv('UTF-8','GBK',$data['consignee_name']));
        $this->db->set('receive_user_phone', iconv('UTF-8','GBK',$data['telphone']));
        $this->db->where('user_id', $user_id);
        $this->db->where('uuid', $order_id);
        $this->db->update('apsos_order');
        if($this->db->trans_status() === TRUE)
        {
            log_message("debug","该订单收货人信息更新成功:".$order_id);
            $ret= array('state' => true, 'msg' => '操作成功');
            return $ret;
        }
        else
        {
            log_message("debug","该订单收货人信息更新成功".$order_id);
            $ret=array('state' => false, 'msg' => '操作失败');
            return $ret;
        }
    }

    function addOutOrder($order_id)
    {
        //获取订单信息

        $sql = "  execute USP_APSOS_outorder '".$order_id."'";
        log_message("debug","过程调用语句：".$sql);
        $query = odbc_exec($this->db->conn_id, $sql);
        if($query){
            while(odbc_fetch_row($query))
            {
                $create_true_order_result = odbc_result($query, 1);
                $out_order_id=$create_true_order_result;
            }
        }else{
            return null;
        }
        return $out_order_id;
    }

    /**
     * 获取订单审核信息
     */
    function getOrderCheck($data=null)
    {
        $where_array=array();
        $query_sql="select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id=?";
        $orderby_sql=" order by create_date_time desc";

        $where_array[]=$data['order_id'];

        $query=$this->db->query($query_sql.$orderby_sql,$where_array);
        return  $query->result_array();
    }


    /**
     * 插入订单审核信息
     * @param $user_id
     * @return mixed
     */
    function addOrderCheck($data=null)
    {
        $data['uuid']= com_create_guid();
        if(empty( $data['remark'])==false){
            $data['remark']=iconv('UTF-8','GBK',$data['remark']);
        }
        $data['create_date_time']= date('Y-m-d H:i:s',time());
        $this->db->insert("apsos_order_check",$data);
    }
}