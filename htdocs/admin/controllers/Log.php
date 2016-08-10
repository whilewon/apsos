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

    /**
     * 后台日志
     */
    function backlog(){
        $this->data['pagebody'] = 'log/backlog';
        $this->data['guests']=$this->guest_model->getUsers();
        $this->render();
    }

    /**
     * 前台日志
     */
    function frontlog(){
        $this->data['pagebody'] = 'log/frontlog';
        $this->render();
    }

    /**
     * 系统日志
     */
    function systemlog(){
        $this->data['pagebody'] = 'log/systemlog';
        $this->render();
    }

}