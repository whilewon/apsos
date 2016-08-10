<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * controllers/welcome.php
 *
 * 首页
 *
 * template driven
 *
 */
class Order extends Application {

	function __construct()
	{
		parent::__construct();
		$this->load->model('order_model');

	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		log_message("debug","查询订单");
		$this->data['pagebody'] = 'order/order'; //跳转至页面
		$data=array();
		$data['start_date_time']=$this->input->post('start_date_time');
		$data['end_date_time']=$this->input->post('end_date_time');
		$data['order_status']=$this->input->post('order_status');
		$data['date_time_range']=$this->input->post('date_time_range');
		$data['out_order_id']=$this->input->post('out_order_id');
		$this->data['orders']=$this->order_model->getOrders($this->user_id,$data);
		$this->data['form_data']=$data;
		$this->render();
	}

	function addOrder()
	{
		log_message("debug","提交订单操作");
		$product_ids=$this->input->post('product_ids');
		$user_id=$this->user_id;
		$this->json_header = $this->order_model->addOrder($user_id,$product_ids);

		$admin_email=$this->session->userdata('curr_user')->admin_email;
		if($this->json_header['state']==true &&
			empty($admin_email)==false)
		{

			log_message("debug",$admin_email);
			$order_id=$this->json_header['key'];

			$one_order=$this->order_model->getOneOrder($order_id);

			$GLOBAL_ORDER_STATUS=eval(ORDER_STATUS);

			$mail_data=array();

			$mail_data['site_short_title']=$this->data['site_short_title'];

			$mail_data['guest_name']=iconv('GBK','UTF-8',$this->session->userdata('curr_user')->company);

			$mail_data['order_id']=$one_order['out_order_id'];

			$mail_data['order_status_name']=$GLOBAL_ORDER_STATUS[$one_order['order_status']];

			$mail_data['order_date_time']=$one_order['create_date_time'];

			$mail_data['url']=DOMAIN_ADMIN_URL.'order/check/'.$order_id;

			$send_mail_html=$this->parser->parse('2check_order_tpl',  $mail_data, true);

			//email 构造>>>>>>>>>>>>>>>
			$this->load->library('email');

			$this->email->subject('单号:'.$mail_data['order_id']);

			$this->email->from($this->data['site_owner_email'], $mail_data['site_short_title']);

			$this->email->to($admin_email);
			$this->email->message($send_mail_html);

			$this->email->send();
			//email 构造<<<<<<<<<<<<<<<<<
		}
		$this->render();
	}

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


	function cancelOrder()
	{
		log_message("debug","取消订单");

		$data=array();
		$data['check_user_id']=$this->user_id;
		$data['order_id']=$this->input->post('uuid');
		$data['order_status']='6';
		$data['remark']='';

		$this->json_header = $this->order_model->updateOrderStatus($data);
		$this->render();
	}

	function removeOrder()
	{
		log_message("debug","删除订单");
		$data=array();
		$data['check_user_id']=$this->user_id;
		$data['order_id']=$this->input->post('uuid');
		$data['order_status']='7';
		$data['remark']='';

		$this->json_header = $this->order_model->updateOrderStatus($data);
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
}
