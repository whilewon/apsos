<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-2-27
 * Time: 下午1:58
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        p {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h2>待审核订单</h2>
    <p>客户：{guest_name}</p>
    <p>单号：{order_id}</p>
    <p>订单状态：{order_status_name}</p>
    <p>下单时间：{order_date_time}</p>

    <div>请点击以下链接，进行审核</div>
    <a href="{url}">{url}</a>
</body>
</html>