<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-3-6
 * Time: 上午8:24
 */
class DownFile extends Application
{
		function __construct()
		{
			parent::__construct();
			$this->load->helper('download');
		}

		function index($filename)
		{
			force_download(DOMAIN_BASE_URL.icon("UTF-8","ISO-8859-1",$filename), NULL);

		}

}