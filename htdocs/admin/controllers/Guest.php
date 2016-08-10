<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-4-24
 * Time: ����3:17
 */
class Guest extends Admin_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("guest_model");
    }

    function index(){
        $this->data['pagebody'] = 'guest/list';
        $data=array();
        $data['guest_name']=$this->input->post('guest_name');
        $data['contract_user_name']=$this->input->post('contract_user_name');
        $data['enable']=$this->input->post('enable');
        $this->data['guests']=$this->guest_model->getGuests($data);
        $this->data['form_data']=$data;
        $this->render();
    }

    /**
     * 编辑客户信息
     */
    function edit($guest_id){
        $this->data['pagebody'] = 'guest/edit';
        log_message("debug","修改客户信息：".$guest_id);
        $this->data['guest']=$this->guest_model->getGuest($guest_id);
        $this->load->model("user_model");
        $this->data['admin_users']=$this->user_model->select();
        $this->data['default_guest_pwd']=$this->config->item('default_guest_pwd');
        $this->render();
    }

    /**
     * 保存客户信息
     */
    function save(){
        log_message("debug","保存客户信息");
        $data=array();
        $data['uuid']=$this->input->post("uuid");
        $data['enable']=$this->input->post("enable");
        $data['user_type']=$this->input->post("user_type");
        $data['admin_user_id']=$this->input->post("admin_user_id");
        $this->json_header=$this->guest_model->updateGuest($data);
        $this->render();
    }

    /**
     * 重置客户密码
     */
    function resetpwd(){
        log_message("debug","重置客户密码");
        $data=array();
        $default_guest_pwd=$this->config->item('default_guest_pwd');
        $data['uuid']=$this->input->post("uuid");
        $data['login_pwd']=hash('sha256',$default_guest_pwd );
        $this->json_header=$this->guest_model->updateGuest($data);
        $this->render();
    }

}