<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email
| -------------------------------------------------------------------------
| This file lets you define parameters for sending emails.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/libraries/email.html
|
*/
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


/* End of file email.php */
/* Location: ./application/config/email.php */