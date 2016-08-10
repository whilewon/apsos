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
class Home extends Application
{

    protected $search_condition=array();

    function __construct()
    {
        parent::__construct();
        $this->load->model("category_model");
        $this->load->model("product_stock_model");

    }

    function index()
    {
        log_message('debug', '首页:库存产品的展示');

        //获取 产品分类1
        $this->data['category1'] = $this->category_model->getGategory1();
        //获取 产品分类2
        $this->data['category2'] = $this->category_model->getGategory2();
        //获取 库存产品信息
        $this->data['stock_products'] = array();
        //$this->product_stock_model->getStockProducts($this->input,$this->session->userdata('curr_user')->Uuid);


        $search_condition = array();
        $search_condition['user_id'] = '';
        $search_condition['category1'] ='';
        $search_condition['category2'] = '';
        $search_condition['standard_code'] = '';
        $search_condition['product_code'] = '';
        $search_condition['product_name'] = '';
        $search_condition['active_tab'] = '';

        $this->data['search_condition'] =$search_condition ;
        $this->data['pagebody'] = 'home'; //跳转至页面
        $this->render();

    }

    function getStockProducts()
    {
        log_message('debug', '首页:查询产品');

        //获取 产品分类1
        $this->data['category1'] = $this->category_model->getGategory1();
        //获取 产品分类2
        $this->data['category2'] = $this->category_model->getGategory2();
        //获取 库存产品信息
        $search_condition = array();
        $search_condition['user_id'] = $this->user_id;
        log_message("debug","用户ID:".$this->user_id);
        $search_condition['category1'] = $this->input->post('category1');
        $search_condition['category2'] = $this->input->post('category2');
        $search_condition['standard_code'] = $this->input->post('standard_code');
        $search_condition['product_code'] = $this->input->post('product_code');
        $search_condition['product_name'] = $this->input->post('product_name');
        $search_condition['active_tab'] = $this->input->post('active_tab');

        //$this->setPagination('home/getStockProducts',800);  //设置分页信息

        $this->data['stock_products'] = $this->product_stock_model->getStockProducts($search_condition);
        $this->data['search_condition'] = $search_condition;

        $this->data['pagebody'] = 'home'; //跳转至页面

        $this->render();

    }

}
