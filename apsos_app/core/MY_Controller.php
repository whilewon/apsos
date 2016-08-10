<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	CodeIgniter Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014-2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 */
 class Application extends CI_Controller {

	protected $data = array(); // parameters for view components
	protected $json_header = array('state'=>null,'msg'=>'');
    protected $json_data = array();
	protected $id;   // identifier for our content
	protected $user_id;

	/**
	 * Constructor.
	 * Establish view parameters & set a couple up
	 */

	function __construct()
	{
	/*	
echo "<br>".$_SERVER['PHP_SELF'];#当前正在执行脚本的文件名，与 document root相关
echo "<br>".$_SERVER['argv'];#传递给该脚本的参数。
echo "<br>".$_SERVER['argc']; #包含传递给程序的命令行参数的个数（如果运行在命令行模式）。
echo "<br>".$_SERVER['GATEWAY_INTERFACE']; #服务器使用的 CGI 规范的版本。例如，“CGI/1.1”。
echo "<br>".$_SERVER['SERVER_NAME']; #当前运行脚本所在服务器主机的名称。
echo "<br>".$_SERVER['SERVER_SOFTWARE']; #服务器标识的字串，在响应请求时的头部中给出。
echo "<br>".$_SERVER['SERVER_PROTOCOL']; #请求页面时通信协议的名称和版本。例如，“HTTP/1.0”。
echo "<br>".$_SERVER['REQUEST_METHOD']; #访问页面时的请求方法。例如：“GET”、“HEAD”，“POST”，“PUT”。
echo "<br>查询(query):	".$_SERVER['QUERY_STRING']; #查询(query)的字符串。
echo "<br>当前运行脚本所在的文档根目录:".$_SERVER['DOCUMENT_ROOT']; #当前运行脚本所在的文档根目录。在服务器配置文件中定义。
echo "<br>当前请求的 Accept:".$_SERVER['HTTP_ACCEPT']; #当前请求的 Accept: 头部的内容。
echo "<br>当前请求的 Accept-Charset:".$_SERVER['HTTP_ACCEPT_CHARSET']; #当前请求的 Accept-Charset: 头部的内容。例如：“iso-8859-1,*,utf-8”。
echo "<br>当前请求的 Accept-Encoding:".$_SERVER['HTTP_ACCEPT_ENCODING']; #当前请求的 Accept-Encoding: 头部的内容。例如：“gzip”。
echo "<br>".$_SERVER['HTTP_ACCEPT_LANGUAGE'];#当前请求的 Accept-Language: 头部的内容。例如：“en”。
echo "<br>".$_SERVER['HTTP_CONNECTION']; #当前请求的 Connection: 头部的内容。例如：“Keep-Alive”。
echo "<br>当前请求的 Host:".$_SERVER['HTTP_HOST']; #当前请求的 Host: 头部的内容。
echo "<br>当前页面的前一页面:".$_SERVER['HTTP_REFERER']; #链接到当前页面的前一页面的 URL 地址。
echo "<br>当前请求的 User_Agent:".$_SERVER['HTTP_USER_AGENT']; #当前请求的 User_Agent: 头部的内容。
echo "<br>".$_SERVER['HTTPS'];# — 如果通过https访问,则被设为一个非空的值(on)，否则返回off
echo "<br>前页面用户的 IP:".$_SERVER['REMOTE_ADDR']; #正在浏览当前页面用户的 IP 地址。
echo "<br>".$_SERVER['REMOTE_HOST']; #正在浏览当前页面用户的主机名。
echo "<br>".$_SERVER['REMOTE_PORT']; #用户连接到服务器时所使用的端口。
echo "<br>".$_SERVER['SCRIPT_FILENAME']; #当前执行脚本的绝对路径名。
echo "<br>".$_SERVER['SERVER_ADMIN']; #管理员信息
echo "<br>".$_SERVER['SERVER_PORT'];  #服务器所使用的端口
echo "<br>".$_SERVER['SERVER_SIGNATURE']; #包含服务器版本和虚拟主机名的字符串。
echo "<br>".$_SERVER['PATH_TRANSLATED']; #当前脚本所在文件系统（不是文档根目录）的基本路径。
echo "<br>".$_SERVER['SCRIPT_NAME']; #包含当前脚本的路径。这在页面需要指向自己时非常有用。
echo "<br>访问此页面所需的 URI:".$_SERVER['REQUEST_URI']; #访问此页面所需的 URI。例如，“/index.html”。
echo "<br>".$_SERVER['PHP_AUTH_USER']; #当 PHP 运行在 Apache 模块方式下，并且正在使用 HTTP 认证功能，这个变量便是用户输入的用户名。
echo "<br>".$_SERVER['PHP_AUTH_PW'];  #当 PHP 运行在 Apache 模块方式下，并且正在使用 HTTP 认证功能，这个变量便是用户输入的密码。
echo "<br>".$_SERVER['AUTH_TYPE'];  #当 PHP 运行在 Apache 模块方式下，并且正在使用 HTTP 认证功能，这个变量便是认证的类型。
*/
		parent::__construct();
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->model('cart_model');
		$this->load->model('accesslog_model');
		$this->load->helper('security');
        //$this->load->driver('cache');
		//$this->_check_http_auth();

		$this->json_header = array('state'=>null,'msg'=>'','key'=>'');
		$this->json_data = array();
		$this->data = array();
		$this->_check_login();
		$this->user_id=$this->session->userdata('curr_user')->uuid;

		$this->data['site_title'] = $site_info=$this->config->item('site_info')['site_title']['value'];
		$this->data['site_short_title'] = $site_info=$this->config->item('site_info')['site_short_title']['value'];
		$this->data['developer_name'] = $site_info=$this->config->item('site_info')['developer_name']['value'];
		$this->data['developer_email'] = $site_info=$this->config->item('site_info')['developer_email']['value'];
		$this->data['developer_qq'] = $site_info=$this->config->item('site_info')['developer_qq']['value'];
		$this->data['developer_site'] = $site_info=$this->config->item('site_info')['developer_site']['value'];
		$this->data['site_owner_qq'] = $site_info=$this->config->item('site_info')['site_owner_qq'];
		$this->data['site_owner_phone'] = $site_info=$this->config->item('site_info')['site_owner_phone'];
		$this->data['site_owner_email'] = $site_info=$this->config->item('site_info')['site_owner_email']['value'];
		$this->errors = array();
		// Prevent some security threats, per Kevin
		// Turn on IE8-IE9 XSS prevention tools
		$this->output->set_header('X-XSS-Protection: 1; mode=block');
		// Don't allow any pages to be framed - Defends against CSRF
		$this->output->set_header('X-Frame-Options: DENY');
		// prevent mime based attacks
		$this->output->set_header('X-Content-Type-Options: nosniff');

		if($site_info=$this->config->item('accesslog')) {
			$curr_session_id = session_id();
			$this->accesslog_model->add($this->user_id, $curr_session_id, $_SERVER);
		}
	}

	/**
	 * Render this page
	 */
	function render()
	{

		$product_count=$this->cart_model->_getProductNum($this->user_id);
		$this->session->set_userdata('product_count', $product_count);

		if($this->input->is_ajax_request()) //ajax 请求
		{
			$this->json_data['product_count']=$this->session->userdata('product_count')->product_count;
			$this->output_json();
		}else
		{
			if (!isset($this->data['pagetitle']))
			{
				$this->data['pagetitle'] = $this->data['site_title'];
			}
			// 菜单
            $choices = $this->config->item('menu_choices');
			$url_suffix=$this->config->item('url_suffix');
            foreach ($choices['menudata'] as &$menuitem)
            {
				$menu_link="";
				if(empty($menuitem['childtag'])){
					$menu_link=str_replace($url_suffix,'',ltrim($menuitem['link'], '/ '));
				}else{
					$menu_link=(strpos($menuitem['childtag'],'href="'.uri_string().$url_suffix.'"'))?uri_string():"--";
				}
                $menuitem['active'] = ($menu_link == uri_string()) ? 'active' : '';
            }
            $this->data['menubar'] = $this->parser->parse('theme/menubar',  $choices, true);


            //$this->data['footerbar'] = $this->parser->parse('theme/menubar', $this->config->item('footer_choices'), true);*/

			$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);

			// title for all but the homepage
			//$layout = empty($this->data['title']) ? 'jumbotitle' : 'title';
			$this->data['footer'] = $this->parser->parse('theme/footer' , $this->data, true);

			// 构建网页
			$this->data['data'] = &$this->data;
			$this->parser->parse('theme/site_template', $this->data);
		}
	}

	/**
	 * 检查http auth
	 *
	 * @access  protected
	 * @return  void
	 */
	protected function _check_http_auth()
	{
			$user = $this->input->server('PHP_AUTH_USER');
			$passwword = $this->input->server('PHP_AUTH_PW');
			if (! $user or ! $passwword or $user != setting('backend_http_auth_user') or $passwword != setting('backend_http_auth_password')) {
				header('WWW-Authenticate: Basic realm="Welcome to this Private DiliCMS Realm!"');
				header('HTTP/1.0 401 Unauthorized');
				echo '您没有权限访问这里.';
				exit;
			}
	}

	// ------------------------------------------------------------------------

	/**
	 * 检查用户是否登录
	 *
	 * @access  protected
	 * @return  void
	 */
	protected function _check_login()
	{

		/*if(!$this->tank_auth->is_logged_in())
		{
			redirect( 'userlogin/login');
		}*/
		if ( ! $this->session->userdata('curr_user'))
		{
			$direct_url='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];

			redirect( 'userlogin/login?url='.$direct_url);
		}
		else
		{
			//$data['user_id']	= $this->tank_auth->get_user_id();
			//$data['username']	= $this->tank_auth->get_username();

			$user=$this->session->userdata('curr_user');

			if(empty($user->email)
				&&
				(
					strstr($_SERVER["REQUEST_URI"],"account/changeProfile")==false &&
					strstr($_SERVER["REQUEST_URI"],"account/doChangeProfile")==false

				)){
				log_message("debug","客户：".$user->uuid.'的邮箱为空，跳至个人信息页');
				redirect( 'account/changeProfile');
			}
			/*$this->_admin = $this->user_mdl->get_full_user_by_username($this->session->userdata('uid'), 'uid');
			if ($this->_admin->status != 1)
			{
				$this->session->set_flashdata('error', "此帐号已被冻结,请联系管理员!");
				redirect(setting('backend_access_point') . '/login');
			}*/
		}
	}

	 function output_json()
	 {
		 //$this->output->set_content_type('application/json;charset=utf-8');
		 if(empty($this->data['json']))
		 {


		 }
		 $myjson=array(
			 'json_header'=>$this->json_header,
			 'json_data'=>$this->json_data
		 );

		 log_message("debug",json_encode($myjson));
		 echo json_encode($myjson);
		 return;

	 }

	 /**
	  * 设置分页配置
	  * @param string $pagination_url 分页跳转URL
	  * @param int $total_rows   总行数
	  * @param int $per_page     每页记录数
	  */
	 public function setPagination($pagination_url='',$total_rows=0,$per_page=10)
 	 {
		 if($pagination_url==''||$total_rows==0){
			 $this->data['pagination']='';
			 return;
		 }

		 $config['reuse_query_string'] = TRUE;
		 $config['base_url'] = site_url('').$pagination_url;
		 $config['total_rows'] = $total_rows;
		 $config['per_page'] = 20;
		 $config['num_links'] = 4;
		 $config['use_page_numbers'] = TRUE;

		 $config['first_url'] = '';

		 $config['full_tag_open'] = '<ul class="pagination pagination-big">';
		 $config['full_tag_close'] = '</ul>';

		 $config['first_tag_open'] = '<li>';
		 $config['first_tag_close'] = '</li>';

		 $config['prev_tag_open'] = '<li>';
		 $config['prev_tag_close'] = '</li>';

		 $config['cur_tag_open'] = '<li class="disabled"><a href="#">';
		 $config['cur_tag_close'] = '</a></li>';

		 $config['num_tag_open'] = '<li>';
		 $config['num_tag_close'] = '</li>';

		 $config['next_tag_open'] = '<li>';
		 $config['next_tag_close'] = '</li>';

		 $config['last_tag_open'] = '<li>';
		 $config['last_tag_close'] = '</li>';

		 $this->pagination->initialize($config);

		 $this->data['pagination']=$this->pagination->create_links();
 	 }
}
