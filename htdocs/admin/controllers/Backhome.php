<?php

class BackHome extends Admin_Controller
{
    public function __construct(){
        parent::__construct();
    }

    function index(){
        $this->data['pagebody'] = 'index'; //��ת��ҳ��
        $this->render();
    }

}