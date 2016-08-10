<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-4-24
 * Time: ����3:17
 */
class Statistics extends Admin_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("guest_model");
    }

    function index(){
        $this->data['pagebody'] = 'guest/list'; //��ת��ҳ��
        $this->data['guests']=$this->guest_model->getUsers();
        $this->render();
    }

    /**
     * �󶨿ͻ�����
     */
    function bindGuest(){
        $this->data['pagebody'] = 'guest/list'; //��ת��ҳ��

        $this->render();
    }

    /**
     * ��󶨿ͻ�����
     */
    function unbindGuest(){
        $this->data['pagebody'] = 'guest/list'; //��ת��ҳ��
        $this->render();
    }

}