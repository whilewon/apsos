<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-5-24
 * Time: 上午9:46
 */

$config['accesslog'] = true;
// 网站基础信息
$config['site_info'] = array(
    //版权
    'copyright' => array('label' => '版权所有', 'value' => '白万辉'),
    //网站所属人
    'site_title' => array('label' => '系统名称', 'value' => '凯洱奇汽车配件自助订单系统'),
    'site_short_title' => array('label' => '系统简称', 'value' => '凯洱奇APSOS'),
    'site_owner_name' => array('label' => '公司名称', 'value' => '凯洱奇汽车配件有限公司'),
    'site_owner_logo' => array('label' => '公司logo', 'value' => ''),
    'site_owner_address' => array('label' => '公司地址', 'value' => ''),
    'site_owner_site' => array('label' => '公司网站', 'value' => 'http://www.hmcauto.cn/'),
    'site_owner_email' => array('label' => '公司邮箱', 'value' => 'whilewon@163.com'),
    'site_owner_phone' =>array(
        array('class'=>'button button-small icon-phone text-red','label' => '客服小王（021-52650276）', 'value' => '021-52650276'),
        array('class'=>'button button-small icon-phone text-red','label' => '客服小雪(021-52650278)', 'value' => '021-52650278')
    ) ,
    'site_owner_qq' => array(
        array('class'=>'button button-small icon-qq text-main','label' => '客服QQ（小王）', 'value' => '3249203412'),
        array('class'=>'button button-small icon-qq text-main','label' => '客服QQ（小雪）', 'value' => '2712211927')
    ),
    //开发者
    'developer_name' => array('label' => '开发者', 'value' => '白万辉'),
    'developer_email' => array('label' => '邮箱', 'value' => 'whilewon@163.com'),
    //'developer_phone'=> array('label' => '手机号', 'value' => '13774388214'),
    'developer_qq' => array('label' => 'QQ', 'value' => '736835275'),
    'developer_site' => array('label' => '网址', 'value' => 'http://taopenhua.com')
);