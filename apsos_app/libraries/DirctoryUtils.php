<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2015/9/10
 * Time: 1:02
 */

$module_basic_path="";

$modual_dir=array(
     /*一级 子系统*/
     new my_module("","contentmgr","网站管理") ,

    #################################################
     /*二级 模块大类*/
     new my_module("","sitesetting","网站配置") ,

     /*三级 模块小类*/
     new my_module("sitesetting","siteinfo","基础信息") ,
     new my_module("sitesetting","emailinfo","邮件配置") ,
     new my_module("sitesetting","ipinfo","IP黑白名单") ,
     new my_module("sitesetting","sendnotice","发送通知配置") ,
     new my_module("sitesetting","dbmgr","数据库备份还原") ,
     new my_module("sitesetting","cachemgr","缓存管理") ,
     new my_module("sitesetting","onkeymove","一键搬家") ,


   #################################################
     /*二级 模块大类*/
     new my_module("","sitecontentmgr","内容管理") ,

     /*三级 模块小类*/
     new my_module("sitecontentmgr","article","文章管理") ,
     new my_module("sitecontentmgr","notice","公示管理") ,

   #################################################
     /*二级 模块大类*/
     new my_module("","sitemonitor","网站监控") ,

     /*三级 模块小类*/
     new my_module("sitemonitor","log","日志监控") ,
     new my_module("sitemonitor","access","访问监控") ,


     #################################################
     /*二级 模块大类*/
     new my_module(""," statistics","统计") ,

     /*三级 模块小类*/
     new my_module("statistics","favorite","收藏统计") ,
     new my_module("statistics","user","用户统计") ,
     new my_module("statistics","sell","销量统计") ,
     new my_module("statistics","product","产品统计") ,
     new my_module("statistics","orderback","退货统计") ,
     new my_module("statistics","click","点击量统计") ,
);
function create_dir($p_modual_dir){
    if(isset($module_basic_path)&&empty($module_basic_path)){
        $module_basic_path = dirname(__DIR__);
    }
    if($p_modual_dir){

    }
}

function _test_create_dir(){

}