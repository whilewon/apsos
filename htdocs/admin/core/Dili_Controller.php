<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class Admin_Controller extends CI_Controller
{

	protected $data = array(); // parameters for view components
	protected $json_header = array('state'=>null,'msg'=>'');
	protected $json_data = array();
	protected $id;   // identifier for our content
	protected $user_id;
	/**
     * 构造函数
     *
     * @access  public
     * @return  void
     */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('accesslog_model');
		//$this->load->library('session');
		//$this->settings->load('backend');
		//$this->load->switch_theme(setting('backend_theme'));
        //$this->_check_http_auth();
		//$this->_check_login();
		//$this->load->library('acl');
		//$this->load->library('plugin_manager');

		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->helper('security');
		//$this->load->driver('cache');
		//$this->_check_http_auth();

		$this->json_header = array('state'=>null,'msg'=>'','key'=>'');
		$this->json_data = array();
		$this->data = array();
		$this->_check_login();


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

		if($this->config->item('accesslog')){
			$curr_session_id=session_id();
			$this->accesslog_model->add($this->user_id,$curr_session_id,$_SERVER);
		}

	}
	/**
	 * Render this page
	 */
	function render()
	{
		//$user_id=$this->session->userdata('admin_user')->uuid;
		//$product_count=$this->cart_model->_getProductNum($user_id);
		//$this->session->set_userdata('product_count', $product_count);

		if($this->input->is_ajax_request()) //ajax 请求
		{
			//$this->json_data['product_count']=$this->session->userdata('product_count')->product_count;
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
			/*foreach ($choices['menudata'] as &$menuitem)
			{
				$menu_link="";
				if(empty($menuitem['childtag'])){
					$menu_link=str_replace($url_suffix,'',ltrim($menuitem['link'], '/ '));
				}else{
					$menu_link=(strpos($menuitem['childtag'],'href="'.uri_string().$url_suffix.'"'))?uri_string():"--";
				}
				$menuitem['active'] = ($menu_link == uri_string()) ? 'active' : '';
			}
			$this->data['menubar'] = $this->parser->parse('template/menubar',  $choices, true);
			*/

			//$this->data['footerbar'] = $this->parser->parse('template/menubar', $this->config->item('footer_choices'), true);*/

			$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);

			// title for all but the homepage
			//$layout = empty($this->data['title']) ? 'jumbotitle' : 'title';
			$this->data['footer'] = $this->parser->parse('template/footer' , $this->data, true);

			// 构建网页
			$this->data['data'] = &$this->data;
			$this->parser->parse('template/main', $this->data);
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
		if ( ! $this->session->userdata('admin_user'))
		{
			$direct_url='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			redirect( 'AdminUserLogin/login?url='.$direct_url);
		}
		else
		{
			//$data['user_id']	= $this->tank_auth->get_user_id();
			//$data['username']	= $this->tank_auth->get_username();

			$user=$this->session->userdata('admin_user');
			$this->user_id=$user->uuid;
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
