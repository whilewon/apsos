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
class BatchOrder extends Application
{

    function __construct()
    {
        parent::__construct();
        $this->load->library(array('PHPExcel', 'PHPExcel/IOFactory'));
        $this->load->model('batch_order_model');
        $this->load->model('order_model');
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function upload()
    {
        $this->data['pagebody'] = 'batchorder/upload'; //跳转至页面
        $this->render();
    }


    /**
     *上传操作
     */
    function doUpload()
    {
        log_message("debug", "上传开始");
        $config['upload_path'] = realpath(DOMAIN_BASE_URL) . 'upload/';
        log_message("debug", $config['upload_path']);
        $config['allowed_types'] = 'xls|xlsx';
        $config['file_name'] = time() . 'product_list_file.xls';
        //$config['encrypt_name']    = TRUE;
        $config['max_size'] = 0; //允许上传文件大小的最大值（单位 KB），设置为 0 表示无限制注意：大多数 PHP 会有它们自己的限制值，定义在 php.ini 文件中通常是默认的 2 MB （2048 KB）。
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);
        $user_id=$this->user_id;

        if (!$this->upload->do_upload('product_list_file')) {
            $this->data['ret_error'] = $this->upload->display_errors();
            $this->data['pagebody'] = 'batchorder/upload'; //跳转至页面
            $this->render();
            return;
        } else {


            $file_full_path=$this->upload->data('file_path').$config['file_name'];

            $ret_data=$this->batch_order_model->parseXls($user_id,$file_full_path);
            if(empty($ret_data))
            {
                $this->data['ret_error'] = '上传excel中没有正确的数据';
                $this->data['pagebody'] = 'batchorder/upload'; //跳转至页面
                $this->render();
                return; //必须要有return ;否则页面会 同一页面会重复显示
            }
            else
            {
                $this->data['upload_products']=$ret_data;
                $this->data['pagebody'] = 'batchorder/check_upload'; //跳转至页面
                $this->render();
                return;
            }
        }
    }

    function addOrder()
    {
        log_message("debug","批量下单 --提交订单操作");
        $product_ids=$this->input->post('product_ids');
        $product_nums=$this->input->post('product_nums');
        $user_id=$this->user_id;
        $this->json_header = $this->order_model->batchAddOrder($user_id,$product_ids,$product_nums);

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

}
