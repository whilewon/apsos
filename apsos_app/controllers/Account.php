<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *帐号户管理
 */
class Account  extends Application {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	/**
	 * 修改资料信息 页面
	 */
	function changeProfile()
	{
		$this->data['pagebody'] = 'account/change_profile'; //跳转至页面
		$curr_user=$this->session->userdata('curr_user');
		$uuid=$curr_user->uuid;
		$this->data['account']=$this->user_model->getUser($uuid);
		$this->render();
	}

    function doChangeProfile()
	{
		$this->data['pagebody'] = 'account/change_profile'; //跳转至页面
		$data=array();
		$data['uuid']=$this->user_id;
		$data['login_code']=$this->input->post('login_code');
		$user_name=$this->input->post('user_name');
		$data['user_name']=iconv('utf-8', "GB2312//IGNORE", $user_name);
		$data['phone']=$this->input->post('phone');
		$data['email']=$this->input->post('email');
		$this->data['ret']=$this->user_model->update($data);
		$this->changeProfile();
	}


	/**
	 * 修改密码
	 */
	function changepwd()
	{

		$this->data['pagebody'] = 'account/change_pwd'; //跳转至页面
		$this->render();
	}
	/**
	 * 修改密码 ajax
	 */
	function doChangepwd()
	{
		$this->data['pagebody'] = 'account/change_pwd'; //跳转至页面
		$uuid= $this->user_id;
		$oldpwd=$this->input->post('oldpwd');
		$newpwd=$this->input->post('newpwd');
		$renewpwd=$this->input->post('renewpwd');
		$this->data['ret']=$this->user_model->updatePWD($uuid,$oldpwd,$newpwd,$renewpwd);

		$this->render();
	}


	/**
	 * 退出
	 */
	function logout()
	{
		//清空session
		$this->session->unset_userdata("curr_user");
		$this->session->unset_userdata("curr_guest");
		redirect("UserLogin/login");
	}

}
