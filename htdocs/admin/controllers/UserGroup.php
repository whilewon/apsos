<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-4-24
 * Time: 下午3:17
 */
class User extends Admin_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("guest_model");
    }

    function index(){
        $this->data['pagebody'] = 'guest/list'; //跳转至页面
        $this->data['guests']=$this->guest_model->getUsers();
        $this->render();
    }

    /**
     * 绑定客户操作
     */
    function bindGuest(){
        $this->data['pagebody'] = 'guest/list'; //跳转至页面

        $this->render();
    }

    /**
     * 解绑定客户操作
     */
    function unbindGuest(){
        $this->data['pagebody'] = 'guest/list'; //跳转至页面
        $this->render();
    }

}