<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-5-9
 * Time: 上午7:57
 */

class AdminUserLogin extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model("user_model");
        $this->data = array();
        //$this->load->library('captcha');
        $this->load->library('session');
        $this->load->library('email');
        $this->load->helper('cookie');
        $this->data['title'] = $this->config->item('site_info')['site_title']['value'];
    }

    /**
     * 进入登录页
     */
    function login(){
        $this->load->view("login", $this->data);
    }

    /**
     * 执行登录
     */
    function doLogin(){
        $uname        = $this->input->post('admin_uname');
        $upwd         = $this->input->post('admin_upwd');
        $checkcode    = $this->input->post('admin_checkcode');
        $rememberpwd    = $this->input->post('admin_rememberpwd');
        $dest_url=$this->input->post("dest_url");
        if (IS_CAPTURE && !$this->validteCheckcode()) {
            $this->data['ret_error'] = "验证码不正确";
            $this->data['uname']=$uname;
            $this->data['upwd']=$upwd;
            $this->load->view("login", $this->data);
        } else {
            $this->_checkLogin($uname,$upwd,$rememberpwd,$dest_url);
        }
    }
    /**
     * 验证登录信息
     * @param $_uname
     * @param $_upwd
     */
    function _checkLogin($_uname,$_upwd,$_rememberpwd=null,$desct_url=null)
    {
        //用户名/密码 是否正确
        $user = $this->user_model->checkLogin($_uname,$_upwd);
        if (!empty($user)) {

            log_message("debug","成功登录" );
            //session中存放
            $this->session->set_userdata('admin_user', $user);
            //如果勾选 记住密码
            if(!empty($_rememberpwd)){
                //7天有效期
                set_cookie("spsos_admin_uname", $_uname, time()+3600*24*7);
                set_cookie("spsos_admin_upwd", $_upwd, time()+3600*24*7);
            }
            if(empty($desct_url)==false){
                redirect($desct_url);
            }else{
                redirect("backhome");
            }

        } else {
            $this->data['ret_error'] = "用户名或密码不正确";
            $this->load->view("login", $this->data);
        }
    }

    /**
     * 是否已经登录
     * @param $data
     */
    function isLogined($data)
    {
        $curr_user=$this->session->userdata("admin_user");
        //如果写  if(empty($this->session->userdata("curr_user")))
        //  则报错：Can't use method return value in write context in  ，因为empty是检查变量，而不是函数
        if(empty($curr_user)){
            $cookie_uname=get_cookie('spsos_uname');
            $cookie_upwd=get_cookie('spsos_uname');
            if(empty($cookie_uname) || empty($cookie_upwd))
            {
                //$this->data['ret_error'] = "登录已超时，请重新登录";
                $this->load->view("login", $this->data);
            }
            else
            {
                $this->_checkLogin($cookie_uname,$cookie_upwd);
            }
        }else{
            redirect("backhome");
        }

    }

    /**
     * 找回密码页面
     */
    function findPwd()
    {

        log_message("debug","进入找回密码页面");
        $this->load->view("findpwd", $this->data);
    }
    /**
     * 找回密码页面
     */
    function doFindPwd()
    {

        log_message("debug","找回密码操作>>>>>>");
        log_message("debug","找回密码的邮箱".$this->input->post('email'));
        //email是否存在

        //发送email
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.163.com';
        $config['smtp_user'] = 'whilewon@163.com';
        $config['smtp_pass'] = 'xiaobai0524!@#';
        $config['mailtype'] = 'html';
        $config['validate'] = true;
        $config['priority'] = 1;
        $config['crlf'] = "\r\n";
        //$config['smtp_port'] = 25;
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $this->email->initialize($config);



        $this->email->from('whilewon@163.com', '白万辉');
        $this->email->to('736835275@qq.com');
        $this->email->cc('2723474494@qq.com');
        //$this->email->bcc('them@their-example.com');
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        $this->email->send();
        log_message("debug","发送邮件结束");
        //返回发送结果
        log_message("debug","找回密码操作<<<<<<<<<");
        $this->load->view("findpwd", $this->data);
    }

    /**
     * 获取验证码
     */
    public function getCheckcode()
    {

        $code = $this->captcha->getCaptcha();
        log_message('debug','获取验证码：'.$code);
        $this->session->set_userdata('code', $code);
        $this->captcha->showImg();
    }

    /**
     * 检查验证码是否正确
     * @return bool
     */
    function validteCheckcode()
    {
        $code = $this->input->post('checkcode');
        log_message("debug","输入的验证码：".$code);
        $code2 = strtolower($this->session->userdata('code'));
        log_message("debug","session中的验证码：".$code2);
        if (strtolower($code) != $code2) {
            //验证码不正确
            log_message("error","检查验证码错误");
            return false;
        } else {
            log_message("error","检查验证码通过");
            return true;
        }
    }
    /**
     * 退出
     */
    function logout()
    {
        //清空session
        $this->session->unset_userdata("admin_user");
        redirect("AdminUserLogin/login");
    }

}