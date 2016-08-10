<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-4-24
 * Time: ����3:17
 */
class Order extends Admin_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("order_model");
    }

    function index()
    {
        log_message("debug","查询订单");
        $this->data['pagebody'] = 'order/order'; //跳转至页面
        $data=array();
        $data['start_date_time']=$this->input->post('start_date_time');
        $data['end_date_time']=$this->input->post('end_date_time');
        $data['order_status']=$this->input->post('order_status');
        $data['out_order_id']=$this->input->post('out_order_id');
        $data['company']=$this->input->post('company');
        $this->data['orders']=$this->order_model->getOrders($data);
        $this->data['form_data']=$data;
        $this->render();
    }

    /*function addOrder()
    {
        log_message("debug","提交订单操作");
        $product_ids=$this->input->post('product_ids');
        $user_id=$this->user_id;
        $this->json_header = $this->order_model->addOrder($user_id,$product_ids);
        $this->render();
    }*/

    function showDetail($order_id)
    {
        $this->data['pagebody'] = 'order/order_detail'; //跳转至页面
        $this->data['one_order']=$this->order_model->getOneOrder($order_id);
        $param_data=array();
        $param_data['order_id']=$order_id;
        $this->data['order_check']=$this->order_model->getOrderCheck($param_data);
        $this->data['order_details']=$this->order_model->getOrderDetail($order_id);
        $this->render();
    }
    function showTureDetail($order_id)
    {
        $this->data['pagebody'] = 'order/true_order_detail'; //跳转至页面
        $this->data['one_order']=$this->order_model->getOneOrder($order_id);
        $this->data['order_details']=$this->order_model->getOrderDetail($order_id);
        $this->render();
    }



    function updateOrderConsigneeInfo()
    {
        log_message("debug","更新订单收货人信息");
        $user_id=$this->user_id;
        $order_id=$this->input->post('uuid');
        $data=array();
        $data['consignee_name']=$this->input->post('consignee_name');
        $data['telphone']		=$this->input->post('telphone');
        $data['address']		=$this->input->post('address');
        $data['uuid']		    =$this->input->post('uuid');

        $this->json_header = $this->order_model->updateOrderConsigneeInfo($user_id,$order_id,$data);
        $this->render();
    }

    function checkProcess($order_id)
    {
        $this->data['pagebody'] = 'order/check_process'; //跳转至页面
        $this->data['one_order']=$this->order_model->getOneOrder($order_id);
        $param_data=array();
        $param_data['order_id']=$order_id;
        $this->data['order_check']=$this->order_model->getOrderCheck($param_data);
        $this->data['order_details']=$this->order_model->getOrderDetail($order_id);
        $this->render();
    }
    function trafficProcess($order_id)
    {
        $this->data['pagebody'] = 'order/traffic_process'; //跳转至页面
        $this->data['one_order']=$this->order_model->getOneOrder($order_id);
        $param_data=array();
        $param_data['order_id']=$order_id;
        $this->data['order_check']=$this->order_model->getOrderCheck($param_data);
        $this->data['order_details']=$this->order_model->getOrderDetail($order_id);
        $this->render();
    }

    function checkOrder()
    {
        log_message("debug","审核订单");
        $data=array();
        $data['check_user_id']=$this->user_id;
        $data['order_id']=$this->input->post('order_id');
        $data['order_status']=$this->input->post('status');
        $data['remark']=$this->input->post('remark1');

        $this->json_header = $this->order_model->updateOrderStatus($data);

        if($this->json_header['state']==true)
        {
            //获取实发货单
            $order_id=$data['order_id'];
            $one_order=$this->order_model->getOneOrder($order_id);
            $GLOBAL_ORDER_STATUS=eval(ORDER_STATUS);

            $this->load->model("guest_model");
            $order_user=$this->guest_model->getGuestAccount($one_order['user_id']);
            $mail_data=array();

            $mail_data['site_short_title']=$this->data['site_short_title'];

            $mail_data['guest_name']=iconv('GBK','UTF-8',$one_order['company']);

            $mail_data['order_id']=$one_order['out_order_id'];

            $mail_data['order_status_name']=$GLOBAL_ORDER_STATUS[$one_order['order_status']];

            $mail_data['remark']='';
            $mail_data['title']='待付款';

            if(empty($one_order['true_total_price'])){
                $mail_data['remark']='很抱歉，目前库存不足。货到后，我们会另行通知。';
                $mail_data['title']='审核不通过';
            }
            $mail_data['url']=DOMAIN_BASE_URL.'order/detail/'.$order_id;

            $send_mail_html=$this->parser->parse('2traffic_order_tpl',  $mail_data, true);

            //email 构造>>>>>>>>>>>>>>>
            $this->load->library('email');

            $this->email->subject('单号:'.$mail_data['order_id']);

            $this->email->from($this->data['site_owner_email'], $mail_data['site_short_title']);

            $this->email->to($order_user->email);

            $this->email->message($send_mail_html);

            $this->email->send();
            //email 构造<<<<<<<<<<<<<<<<<


        }
        $this->render();
    }

    function check(){
        log_message("debug","查询待审核订单");
        $this->data['pagebody'] = 'order/check'; //跳转至页面
        $data=array();
        $data['order_status']='1';
        $this->data['orders']=$this->order_model->getOrders($data);
        $this->data['form_data']=$data;
        $this->render();
    }

    function traffic(){
        log_message("debug","查询待发货订单");
        $this->data['pagebody'] = 'order/traffic'; //跳转至页面
        $data=array();
        $data['order_status']='2';
        $this->data['orders']=$this->order_model->getOrders($data);
        $this->data['form_data']=$data;
        $this->render();
    }
    function requirement(){
        log_message("debug","查询需求订单");
        $this->data['pagebody'] = 'order/requirement'; //跳转至页面
        $data=array();
        $data['product_name']=$this->input->post('product_name');
        $data['start_date_time']=$this->input->post('start_date_time');
        $data['end_date_time']=$this->input->post('end_date_time');
        $this->data['orders']=$this->order_model->getRequirementOrders($data);
        $this->data['form_data']=$data;
        $this->render();
    }



}