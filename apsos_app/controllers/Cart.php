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
class Cart extends Application
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('cart_model');
    }
    /**
     * 进入购物车查询界面
     */
    function index()
    {

        $this->data['pagebody'] = 'cart/cart_products'; //跳转至页面

        $search_condition = array();
        $search_condition['user_id'] = $this->user_id;
        $this->data['cart_products'] = $this->cart_model->_getProducts($search_condition);
        $this->render();
    }

    /**
     * 加入购物车
     */
    function addProduct()
    {
        log_message("debug", "开始加入购物车");
        $product_id = $this->input->post("product_id");
        $product_num = $this->input->post("product_num");


        $search_condition = array();
        $search_condition['user_id'] = $this->user_id;
        $search_condition['product_id'] = $product_id;
        $search_condition['product_num'] =$product_num;

        log_message("debug", "加入产品到购物车，产品ID：" . $product_id . ",数量：" . $product_num);
        $this->json_header=$this->cart_model->_insertProduct($search_condition);
        $this->render();
    }

    /**
     * 编辑购物车
     */
    function editProduct()
    {
        log_message("debug", "更新购物车");
        $product_num = $this->input->post("product_num");
        $product_uuid = $this->input->post("product_uuid");
        $updateResult = $this->cart_model->_updateProduct($product_uuid, $product_num);
        if ($updateResult) {
            $this->json_header = array('state' => true, 'msg' => '保存成功');
            $this->render();
        } else {
            $this->json_header = array('state' => false, 'msg' => '保存失败，请重试');
            $this->render();
        }

    }

    /**
     * 删除购物车
     */
    function delProduct()
    {
        log_message("debug", "删除产品");
        $product_uuid=$this->input->post("product_uuid");
        $this->json_header = $this->cart_model->_delProduct($product_uuid);
        $this->render();
    }
    /**
     * 购物车
     */
    function delMoreProduct()
    {
        log_message("debug", "批量删除购物车产品");
        $product_uuids=$this->input->post("product_uuids");
        $this->json_header = $this->cart_model->_delMoreProduct($product_uuids);
        $this->render();
    }


}
