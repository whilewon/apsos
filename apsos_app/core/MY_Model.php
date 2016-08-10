<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-3-2
 * Time: 上午6:36
 */
class MY_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();  //模型中一般都会做 数据库操作，所以在此进行加载数据库，但是这个是针对单数据库的加载
        $this->load->helper("uuid");
    }

}