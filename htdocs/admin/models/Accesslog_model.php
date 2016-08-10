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
* @author    winston bai
*/
class Accesslog_model extends  Dili_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function add($user_id,$curr_session_id,$server)
    {
        $data = array(
            'uuid'=>com_create_guid(),
            'ip' =>$server['REMOTE_ADDR'],
            'ip_date' => date('Y-m-d',time()),
            'ip_time' => date('H:i:s',time()),
            'user_id' => $user_id,
            'func_code' =>  $server['REQUEST_URI'],
            'terminal_info'=>$server['HTTP_USER_AGENT'],
            'session_id'  =>$curr_session_id
        );
        $this->db->insert('apsos_accesslog', $data);

    }

    function getList($user_id)
    {
        $whereArray=array();
        if($user_id){
            $whereArray['user_id']=$user_id;
        }
        $query=$this->db->query('apsos_accesslog',$whereArray);
        return $query-result_array();
    }
    function clear($user_id){
        $whereArray=array();
        if($user_id){
            $whereArray['user_id']=$user_id;
        }
        $this->db->delete('apsos_accesslog',$whereArray);
    }
}

?>