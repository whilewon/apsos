<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2015/8/28
 * Time: 23:23
 */

require_once('ChineseUtils.php');

//测试
$chineseUtils=new ChineseUtils();
$ret_chinese_pinyin=$chineseUtils->Pinyin("中华人民共和国");

//echo $ret_chinese_pinyin;//第二个参数“1”可随意设置即为utf8编码


#$first_tier_type=file_get_contents("https://www.baidu.com/s?tn=monline_6_dg&wd=%E5%A4%9A%E8%82%89%E6%A4%8D%E7%89%A9&usm=3&ie=utf-8&rsv_cq=%E8%8A%B1%E5%8D%89&rsv_dl=0_left_exactqa_6839");
#echo $first_tier_type;


$url = 'https://www.baidu.com/s?tn=monline_6_dg&wd=%E5%A4%9A%E8%82%89%E6%A4%8D%E7%89%A9&usm=3&ie=utf-8&rsv_cq=%E8%8A%B1%E5%8D%89&rsv_dl=0_left_exactqa_6839';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
/*curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);*/
$result = curl_exec($ch);

echo $result;





