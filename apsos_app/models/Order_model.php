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
class Order_model extends  MY_Model
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
    function getOrders($user_id,$data=null)
    {
         $where_array=array();
         $query_sql="select top 20 t1.*  from apsos_order t1 where  t1.user_id=? ";
         $orderby_sql=" order by create_date_time desc";
         $where_array[]=$user_id;

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
        $query=$this->db->query("select *  from apsos_order where uuid=?",array($order_id));
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
        $sql="select *  from apsos_order_detail  where order_id=? order by lno asc";
        $query=$this->db->query($sql, array($order_id));
        return  $query->result_array();
    }


    /**
     * 从购物车提交订单
     * @param $user_id
     * @param $product_ids
     * @return array
     */
    function addOrder($user_id,$product_ids)
    {
        if (empty($user_id)|| empty($product_ids)) {
            log_message("debug","非法操作，传递的参数为空");
            $ret=  array('state' => false, 'msg' => '非法操作');
            return $ret;
        }
        $order_id=com_create_guid();
        $this->db->trans_start();

        $escpe_product_ids=$this->db->escape_like_str($product_ids);
        log_message("debug","转义后的产品编号：".$escpe_product_ids);
        $product_id_array= explode(',',$escpe_product_ids);
        $order_total_price=0;
        //循环下达的产品>>>>>>>>>>>>>>>>>>>
        for($i=0;$i<count($product_id_array);$i++)
        {
            //查找库存>>>>>>>>>>
            $this->load->model("cart_model");
            $search_condition=array();
            $search_condition['product_id']=$product_id_array[$i];
            $search_condition['user_id']=$user_id;
            $this->load->model("cart_model");
            $cart_products= $this->cart_model->_getProducts($search_condition);
            //查找库存<<<<<<<<<<<<<

            //校验产品的数据是否合法  >>>>>>>>>>>>>>>>>>>
            if(!empty($cart_products)&&count($cart_products)==1) //在库存中找到产品
            {
                $simple_cart_product=$cart_products[0];
                /*if($simple_cart_product['product_num']>$simple_cart_product['onhandfreeqty'])
                {
                    log_message("debug",
                        '产品编号：'.$simple_cart_product['product_id'].
                        ',产品名称：'.$simple_cart_product['descrition'].
                        ',购买数量：' .$simple_cart_product['product_num'].',库存不足');
                    $ret=  array('state' => false,'msg' => '库存不足');
                    $this->db->trans_rollback();
                    return $ret;
                }*/

                $detail_row = array(
                    'uuid'=>com_create_guid(),
                    'order_id' => $order_id,
                    'lno' => $simple_cart_product['lno'],
                    'product_id' => $simple_cart_product['product_id'],
                    'product_name' => $simple_cart_product['descrition'],
                    'product_type1' => $simple_cart_product['type1code'],
                    'product_type2' =>  $simple_cart_product['type2code'],
                    'product_price' =>  $simple_cart_product['nowprice'],
                    'product_num' =>  $simple_cart_product['product_num'],
                    'remark' =>  ''
                );
                $this->db->insert('apsos_order_detail', $detail_row);
                $order_total_price=$order_total_price+(int)$detail_row['product_num']*$detail_row['product_price'];

                //移动购物记录到购物车历史表中
                $this->cart_model->_delProductByUserIdAndProductId($user_id,$simple_cart_product['product_id']);

            }else if(count($cart_products)>1)
            {
                log_message("debug",'检查到购物车有多条同种产品，请合并后重试');
                $this->db->trans_rollback();
                $ret=  array('state' => false, 'msg' => '检查到购物车有多条同种产品，请合并后重试：');
                return $ret;
            }else
            {
                log_message("debug",'该产品已下架');
                $ret=  array('state' => false, 'msg' => '非法操作');
                $this->db->trans_rollback();
                return $ret;
            }
            //校验产品的数据是否合法  <<<<<<<<<<<<<<<<<<
        }//循环下达的产品<<<<<<<<<<<<<<<<

        //获取外部订单号
        $out_order_id =$this->getOutOrderId();//$this->addOutOrder($user_id,$order_data['uuid']);//'test'.date('Y-m-d H:i:s',time());//
        if(empty($out_order_id))
        {
            $ret=  array('state' => false, 'msg' => '下单失败，请重试');
            $this->db->trans_rollback();
            return $ret;
        }
        if(strpos($out_order_id,"ERROR")==TRUE)
        {
            log_message("debug","生成外部订单号异常，异常信息： ".$out_order_id);
            $ret=  array('state' => false, 'msg' => '订单号生成失败');
            $this->db->trans_rollback();
            return $ret;
        }
        $this->load->model('account_model');
        $guest=$this->account_model->getGuest($user_id);
        //添加apsos_order 准备数据 >>>>>
        $order_data = array(
            'uuid'=>$order_id,
            'create_date_time' => date('Y-m-d H:i:s',time()),
            'order_status' => '1',
            'user_id' => $user_id,
            'to_where' => $guest->guest_address,
            'receive_user_phone'=>$guest->handphonebp,
            'receive_user_name'=>$guest->contactperson,
            'out_order_id'=>$out_order_id,
            'order_total_price'=>$order_total_price
        );
        $this->db->insert('APSOS_order', $order_data);
        //添加apsos_order 准备数据  <<<<<<<<
        //更新订单总金额

        $update_data=array("out_order_id"=>$out_order_id,"order_total_price"=>$order_total_price);
        $this->db->where("uuid",$order_data['uuid']);
        $this->db->update('APSOS_order', $update_data);


         if($this->db->trans_status() === TRUE)
         {
             log_message("debug","下单成功");
             $ret= array('state' => true, 'msg' => '下单成功',"key"=>$order_data['uuid']);
             $this->db->trans_complete();

             return $ret;
         }
        else
        {
            log_message("debug","下单失败");
            $ret=array('state' => false, 'msg' => '下单失败');
            $this->db->trans_complete();
            return $ret;
        }

    }


    /**
     * 从批量下单 提交订单
     * @param $user_id
     * @param $product_ids
     * @return array
     */
    function batchAddOrder($user_id,$product_ids,$product_nums)
    {
        if (empty($user_id)|| empty($product_ids)||empty($product_nums)) {
            log_message("debug","非法操作，传递的参数为空");
            $ret=  array('state' => false, 'msg' => '非法操作');
            return $ret;
        }

        $this->db->trans_start();
        //apsos uuid
        $order_id=com_create_guid();

        $escpe_product_ids=$this->db->escape_like_str($product_ids);
        $escpe_product_nums=$this->db->escape_like_str($product_nums);
        log_message("debug","转义后的产品编号：".$escpe_product_ids);
        $product_id_array= explode(',',$escpe_product_ids);
        $product_nums_array= explode(',',$escpe_product_nums);
        $order_total_price=0;
        //循环下达的产品>>>>>>>>>>>>>>>>>>>
        for($i=0;$i<count($product_id_array);$i++)
        {
            //查找库存>>>>>>>>>>
            $this->load->model("product_stock_model");
            $stock_product=
                $this->product_stock_model->
                getOneStockProduct($user_id,null,null,$product_id_array[$i]);
            //查找库存<<<<<<<<<<<<<

            //校验产品的数据是否合法  >>>>>>>>>>>>>>>>>>>
            if(!empty($stock_product)) //在库存中找到产品
            {
                $detail_row = array(
                    'uuid'=>com_create_guid(),
                    'order_id' => $order_id,
                    'lno' => $stock_product->lno,
                    'product_id' => $stock_product->id,
                    'product_name' => $stock_product->descrition,
                    'product_type1' => $stock_product->type1code,
                    'product_type2' =>  $stock_product->type2code,
                    'product_price' =>  $stock_product->firstprice,
                    'product_num' =>  $product_nums_array[$i],
                    'remark' =>  ''
                );
                $this->db->insert('apsos_order_detail', $detail_row);
            }
            else
            {
                log_message("debug",'该产品已下架');
                $ret=  array('state' => false, 'msg' => '非法操作');
                $this->db->trans_rollback();
                return $ret;
            }
            $order_total_price=($order_total_price+(int)$product_nums_array[$i]*$stock_product->firstprice);
            //校验产品的数据是否合法  <<<<<<<<<<<<<<<<<<
        }//循环下达的产品<<<<<<<<<<<<<<<<

        //获取外部订单号
        $out_order_id =$this->getOutOrderId();
        if(empty($out_order_id))
        {
            $ret=  array('state' => false, 'msg' => '下单失败，请重试');
            $this->db->trans_rollback();
            return $ret;
        }
        if(strpos($out_order_id,"ERROR")==TRUE)
        {
            log_message("debug","生成外部订单号异常，异常信息： ".$out_order_id);
            $ret=  array('state' => false, 'msg' => '订单号生成失败');
            $this->db->trans_rollback();
            return $ret;
        }
        //添加apsos_order 准备数据 >>>>>
        $this->load->model('account_model');
        $guest=$this->account_model->getGuest($user_id);
        $order_data = array(
            'uuid'=>$order_id,
            'create_date_time' => date('Y-m-d H:i:s',time()),
            'order_status' => '1',
            'user_id' => $user_id,
            'to_where' => $guest->guest_address,
            'receive_user_phone'=>$guest->handphonebp,
            'receive_user_name'=>$guest->contactperson,
            'out_order_id'=>$out_order_id,
            'order_total_price'=>$order_total_price
        );
        $this->db->insert('APSOS_order', $order_data);

        //添加apsos_order 准备数据  <<<<<<<<

        if($this->db->trans_status() === TRUE)
        {
            log_message("debug","下单成功");
            $ret= array('state' => true, 'msg' => '下单成功',"key"=>$order_data['uuid']);
            $this->db->trans_complete();

            return $ret;
        }
        else
        {
            log_message("debug","下单失败");
            $ret=array('state' => false, 'msg' => '下单失败');
            $this->db->trans_complete();
            return $ret;
        }

    }

    /**
     * 获取订单总金额
     * @param $order_uuid
     * @return float
     */
    function updateOrderStatus($data)
    {
        $order_id=$data['order_id'];
        $order_status=$data['order_status'];
        $this->db->trans_start();
        $this->db->set('order_status', $order_status);
        $this->db->where('uuid', $order_id);

        if($order_status=='6'){ //取消

            $this->db->where('order_status', '1'); //已提交

        }if($order_status=='7'){ //删除

            $this->db->where('order_status', '6'); //已取消

        }
        $this->db->update('apsos_order');

        //添加审核数据
        $this->addOrderCheck($data);

        if($this->db->trans_status() === TRUE)
        {
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

    function getOutOrderId()
    {
        $out_order_id='';
        $sql = "  execute SP_GetBillNo 'OXS','A01','_X',14,'每日','二类'";
        $query = odbc_exec($this->db->conn_id, $sql);

        while(odbc_fetch_row($query))
        {
            // "odbc_result" = "FieldByNumber(Index)",
            // "Index" starts with 1 not 0 !!! :
            $out_order_id = odbc_result($query, 1);
            //因为我也不知道 这个返回查询结果的列名是是什么，只知道取第一个
            log_message("debug",'外部订单号生成：'.$out_order_id); //如果有 ‘Error’字符说明错误
        }
        if(strpos($out_order_id,"Error")==TRUE){
            $out_order_id='';
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
        if(empty($check_data['remark'])==false){
            $data['remark']=iconv('UTF-8','GBK',$data['remark']);
        }
        $data['create_date_time']= date('Y-m-d H:i:s',time());
        $this->db->insert("apsos_order_check",$data);
    }
}

?>