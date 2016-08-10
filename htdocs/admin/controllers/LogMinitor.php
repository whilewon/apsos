<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-4-24
 */
class LogMinitor extends Admin_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("guest_model");
    }

    function index(){
        $this->data['pagebody'] = 'guest/list'; 
        $this->data['guests']=$this->guest_model->getUsers();
        $this->render();
    }

    /**
     * �󶨿ͻ�����
     */
    function bindGuest(){
        $this->data['pagebody'] = 'guest/list'; 

        $this->render();
    }

    /**
     * ��󶨿ͻ�����
     */
    function unbindGuest(){
        $this->data['pagebody'] = 'guest/list'; 
        $this->render();
    }

}