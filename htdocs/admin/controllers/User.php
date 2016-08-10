<?php

class User extends Admin_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model("user_model");
    }


    function index(){
        $this->data['pagebody'] = 'user/list'; 
        $this->data['users']=$this->user_model->select();
        $this->render();
    }


    function add(){
        $this->data['pagebody'] = 'user/add'; 
        $this->render();
    }


    function save(){
        log_message("debug","保存操作员信息");
        $this->data['pagebody'] = 'user/list';
        $data=array(
            'login_code'=>$this->input->post('login_code'),
            'phone'=>$this->input->post('phone'),
            'email'=>$this->input->post('email'),
            'qq'=>$this->input->post('qq'),
            'user_name'=>$this->input->post('user_name'),
            'group_id'=>$this->input->post('group_id')
        );
        $this->user_model->insert($data);
        $this->index();
    }


    function remove($uuid){
        log_message("debug","删除操作员");
        $this->data['pagebody'] = 'user/list';
        $this->user_model->delete($uuid);
        $this->index();
    }


    function edit(){
        $this->data['pagebody'] = 'user/edit';
        $admin_user_id=$this->input->post('uuid');
        $this->data['users']=$this->user_model->getUser($admin_user_id);
        $this->render();
    }



}