<?php
//
// +------------------------------------------------------------------------+
// | PHP Version 5                                                          |
// +------------------------------------------------------------------------+
// | Copyright (c) All rights reserved.                                     |
// +------------------------------------------------------------------------+
// | This source file is subject to version 3.00 of the PHP License,        |
// | that is available at http://www.php.net/license/3_0.txt.               |
// | If you did not receive a copy of the PHP license and are unable to     |
// | obtain it through the world-wide-web, please send a note to            |
// | license@php.net so we can mail you a copy immediately.                 |
// +------------------------------------------------------------------------+
// | Author:                                                                |
// +------------------------------------------------------------------------+
//
// $Id$
//


/**
* @author       Administrator
*/
class Category_model extends  MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取分类1
     * @return mixed
     */
    function getGategory1()
    {

        $query=$this->db->get_where("APSOS_category",array('Pid'=>'0'));
        return $query->result_array();
    }

    /**
     * 获取分类2
     * @return mixed
     */
    function getGategory2()
    {
        //$this->db->where()

        $query=$this->db->get_where("APSOS_category");

        return $query->result_array();
    }


}

?>