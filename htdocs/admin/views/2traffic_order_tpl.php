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
    <h2>{title}</h2>
    <p>订单号：{order_id}</p>
    <p>{remark}</p>
    <div>请点击以下些链接，查看订单详细</div>
    <a href="{url}">{url}</a>
</body>
</html>