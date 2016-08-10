<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-12 09:04:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:04:24 --> CRSF cookie Set
DEBUG - 2016-07-12 09:04:24 --> Security Class Initialized
DEBUG - 2016-07-12 09:04:24 --> CRSF cookie Set
DEBUG - 2016-07-12 09:04:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:04:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:04:24 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f', '114.91.129.78', 1468285464, '__ci_last_regenerate|i:1468285464;')
DEBUG - 2016-07-12 09:04:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:04:24 --> Security Class Initialized
DEBUG - 2016-07-12 09:04:24 --> CRSF cookie Set
DEBUG - 2016-07-12 09:04:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:04:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:04:25 --> Total execution time: 0.1560
DEBUG - 2016-07-12 09:04:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285465
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:04:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:04:35 --> Security Class Initialized
DEBUG - 2016-07-12 09:04:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:04:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:04:35 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-12 09:04:35 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-12 09:04:35 --> 登录返回结果数：0
DEBUG - 2016-07-12 09:04:35 --> Total execution time: 0.1716
DEBUG - 2016-07-12 09:04:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285475
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:04:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:04:45 --> Security Class Initialized
DEBUG - 2016-07-12 09:04:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:04:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:04:45 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-12 09:04:45 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-12 09:04:45 --> 登录返回结果数：1
DEBUG - 2016-07-12 09:04:45 --> 成功登录
DEBUG - 2016-07-12 09:04:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285485, data = '__ci_last_regenerate|i:1468285464;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:04:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:04:45 --> Security Class Initialized
DEBUG - 2016-07-12 09:04:45 --> CRSF cookie Set
DEBUG - 2016-07-12 09:04:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:04:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:04:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2653f40e09934e61aa7bec1e39478da1', '114.91.129.78', '2016-07-12', '09:04:45', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:04:45 --> Total execution time: 0.2340
DEBUG - 2016-07-12 09:04:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285485
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:05:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:05:59 --> Security Class Initialized
DEBUG - 2016-07-12 09:05:59 --> CRSF cookie Set
DEBUG - 2016-07-12 09:05:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:05:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:05:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2da8a93789984347a7026cafd0a64e04', '114.91.129.78', '2016-07-12', '09:05:59', '120340234', '/admin/order/check/988e96d752f240baaa0bbc53363b1e58', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:05:59 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='988e96d752f240baaa0bbc53363b1e58'
DEBUG - 2016-07-12 09:05:59 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='988e96d752f240baaa0bbc53363b1e58' order by create_date_time desc
DEBUG - 2016-07-12 09:05:59 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='988e96d752f240baaa0bbc53363b1e58'
DEBUG - 2016-07-12 09:05:59 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='988e96d752f240baaa0bbc53363b1e58'    order by t1.lno asc
        
DEBUG - 2016-07-12 09:06:00 --> Total execution time: 0.4056
DEBUG - 2016-07-12 09:06:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285560
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:00 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:00 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('20fc2538d67547c98421d0c4eafb7ab7', '114.91.129.78', '2016-07-12', '09:06:00', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:00 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:00 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285560
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:00 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:00 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3ea34c0e051f491b9701f65e7b18b0cb', '114.91.129.78', '2016-07-12', '09:06:00', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:00 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:00 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285560
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:00 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:00 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1593ecdf2b9d43d0a073da070ad16ef3', '114.91.129.78', '2016-07-12', '09:06:00', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:00 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:00 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285560
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:01 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:01 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d7b91ced2e82426b8ceb6d6e9f8fcc12', '114.91.129.78', '2016-07-12', '09:06:01', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:01 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:01 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285561
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:01 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:01 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6f60780d4ffc482a8586651898021a8e', '114.91.129.78', '2016-07-12', '09:06:01', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:01 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:01 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285561
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:01 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:01 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b2093536e6c8404f879d83255002817e', '114.91.129.78', '2016-07-12', '09:06:01', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:01 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:01 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285561
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:01 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:01 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7308a98e2d744842afad401b23b39f4c', '114.91.129.78', '2016-07-12', '09:06:01', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:01 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:01 --> Total execution time: 0.1092
DEBUG - 2016-07-12 09:06:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285561
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:02 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:02 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d5073b8f399b44c0ad3eaf96eaf71739', '114.91.129.78', '2016-07-12', '09:06:02', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:02 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:02 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285562
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:02 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:02 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b1aee3be4df7468983a0ff7f6037720d', '114.91.129.78', '2016-07-12', '09:06:02', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:02 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:02 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285562
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:02 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:02 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bc33c03348cf4d43a69002efe2e9bddc', '114.91.129.78', '2016-07-12', '09:06:02', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:02 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:02 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285562
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:02 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:02 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('923e8a4c8f024be7a1359f6e813452d3', '114.91.129.78', '2016-07-12', '09:06:02', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:02 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:02 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285562
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:03 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:03 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d6926dd4686449fabdbeb7033fb0b689', '114.91.129.78', '2016-07-12', '09:06:03', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:03 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:03 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285563
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:03 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:03 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f3b2315d25dc43168f1a4daf4f19cbdc', '114.91.129.78', '2016-07-12', '09:06:03', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:03 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:03 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285563
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:03 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:03 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('512c07dd2d834e93b2cdc0fa436b1474', '114.91.129.78', '2016-07-12', '09:06:03', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:03 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:03 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285563
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:03 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:03 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d5a48e6152a44443af08cee8960bc07a', '114.91.129.78', '2016-07-12', '09:06:03', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:03 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:03 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285563
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:04 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:04 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e93ef350cfd74e1384c35927f59b2450', '114.91.129.78', '2016-07-12', '09:06:04', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:04 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:04 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:04 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285564
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:12 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:12 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7ee7a109a3194758b93d06e5a9c0bedf', '114.91.129.78', '2016-07-12', '09:06:12', '120340234', '/admin/order/check/988e96d752f240baaa0bbc53363b1e58', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='988e96d752f240baaa0bbc53363b1e58'
DEBUG - 2016-07-12 09:06:12 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='988e96d752f240baaa0bbc53363b1e58' order by create_date_time desc
DEBUG - 2016-07-12 09:06:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='988e96d752f240baaa0bbc53363b1e58'
DEBUG - 2016-07-12 09:06:12 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='988e96d752f240baaa0bbc53363b1e58'    order by t1.lno asc
        
DEBUG - 2016-07-12 09:06:12 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285572
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:12 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:12 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('95d4ee5d809a47a3b6fa0463e8953667', '114.91.129.78', '2016-07-12', '09:06:12', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:12 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:12 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:12 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285572
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:13 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:13 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fa95dc74c23448c5a4f4dd6cebb21c2f', '114.91.129.78', '2016-07-12', '09:06:13', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:13 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:13 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:13 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285573
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:13 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:13 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d36e16d8613b466d8e7e9e52239689cd', '114.91.129.78', '2016-07-12', '09:06:13', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:13 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:13 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:13 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285573
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:14 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:14 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('11b301b068364e92802ddcd49b00140e', '114.91.129.78', '2016-07-12', '09:06:14', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:14 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:14 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285574
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:14 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:14 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e2b3518d674f45e1904814ea25d72e6b', '114.91.129.78', '2016-07-12', '09:06:14', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:14 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:14 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285574
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:14 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:14 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1afd2d2498344c6fb6d8de4bcebf6fc6', '114.91.129.78', '2016-07-12', '09:06:14', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:14 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:14 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285574
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:14 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:14 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5388cd4286674d75a563923509abf462', '114.91.129.78', '2016-07-12', '09:06:14', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:14 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:14 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285574
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:15 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:15 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('feb07b343e6d42e1a953132face2609c', '114.91.129.78', '2016-07-12', '09:06:15', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:15 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:15 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285575
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:15 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:15 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1fe6152cdc594b05b21cf21463262756', '114.91.129.78', '2016-07-12', '09:06:15', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:15 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:15 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285575
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:15 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:15 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:15 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:15 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1010ecb755c848419bda3a83654cec60', '114.91.129.78', '2016-07-12', '09:06:15', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dff99cf5ecf84dffba3ba3c329cc5ec9', '114.91.129.78', '2016-07-12', '09:06:15', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:15 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:15 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:15 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:15 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285575
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285575
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:16 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:16 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a53c7d4551374fbb86ed76c88535136f', '114.91.129.78', '2016-07-12', '09:06:16', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:16 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:16 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285576
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:16 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:16 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('909bce72b6de47fa939bc74a944b0a22', '114.91.129.78', '2016-07-12', '09:06:16', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:16 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:16 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285576
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:16 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:16 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('14dd94ba2b824040aac354589929f84b', '114.91.129.78', '2016-07-12', '09:06:16', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:16 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:16 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285576
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:16 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:16 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1d4e8623bc244750822b6979e5633932', '114.91.129.78', '2016-07-12', '09:06:16', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:16 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:16 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285576
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:17 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:17 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('19e6ca956b3e41bea88176951cd56681', '114.91.129.78', '2016-07-12', '09:06:17', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:17 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:17 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:17 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285577
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:25 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:25 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a39460493e524a03a77808d0905ea7fe', '114.91.129.78', '2016-07-12', '09:06:25', '120340234', '/admin/order/check/988e96d752f240baaa0bbc53363b1e58', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='988e96d752f240baaa0bbc53363b1e58'
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='988e96d752f240baaa0bbc53363b1e58' order by create_date_time desc
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='988e96d752f240baaa0bbc53363b1e58'
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='988e96d752f240baaa0bbc53363b1e58'    order by t1.lno asc
        
DEBUG - 2016-07-12 09:06:25 --> Total execution time: 0.5616
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285585
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:25 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:25 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dadde18e1a314c65b4d43d44342fa538', '114.91.129.78', '2016-07-12', '09:06:25', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:25 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:25 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285585
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:25 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:25 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('211a062b4c4442c2a79f317aae6fd9e1', '114.91.129.78', '2016-07-12', '09:06:25', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:25 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:25 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285585
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:25 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:25 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f2730a4ce61d4d4f822673840191b884', '114.91.129.78', '2016-07-12', '09:06:25', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:25 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:25 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285585
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:25 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:25 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3b0a667f183d452a87643e68d90ec88b', '114.91.129.78', '2016-07-12', '09:06:26', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:26 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:26 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285586
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:26 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:26 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e63951a00b2340b1af0e634a45918274', '114.91.129.78', '2016-07-12', '09:06:26', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:26 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:26 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285586
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:27 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:27 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a88ba3c0592d47a39190b870794decb2', '114.91.129.78', '2016-07-12', '09:06:27', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:27 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:27 --> Total execution time: 0.1092
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285587
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:27 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:27 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b30d47ee4553410cbdc9f6d49355866a', '114.91.129.78', '2016-07-12', '09:06:27', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:27 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:27 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285587
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:27 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:27 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ee0fd32a296a48d08df826d1b169f3db', '114.91.129.78', '2016-07-12', '09:06:27', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:27 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:27 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285587
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:27 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:27 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9b49d4abc2dd498dbb81c2edf657b55c', '114.91.129.78', '2016-07-12', '09:06:27', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:27 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:27 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285587
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:28 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:28 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:28 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:28 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7c27e9e862f04bcfb8ec389db6b0f442', '114.91.129.78', '2016-07-12', '09:06:28', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('232a0885323b4823a4bf3ee064b2ccb1', '114.91.129.78', '2016-07-12', '09:06:28', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:28 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:28 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:28 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:28 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285588
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285588
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:28 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:28 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b87e001c961949249a55c6218b63103c', '114.91.129.78', '2016-07-12', '09:06:28', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:28 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:28 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285588
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:28 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:28 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5e9ed245ddb64518a4145d9d5dac7b37', '114.91.129.78', '2016-07-12', '09:06:28', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:28 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:28 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285588
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:29 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:29 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7b0cadb18ca1439bb318200259db1c41', '114.91.129.78', '2016-07-12', '09:06:29', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:29 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:29 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285589
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:29 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:29 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5b3861975cbc4b33872b390f324ed9c1', '114.91.129.78', '2016-07-12', '09:06:29', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:29 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:29 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285589
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:29 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:29 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fce5335f174b408a8cd00d8512eac1f9', '114.91.129.78', '2016-07-12', '09:06:29', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:29 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:29 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285589
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:30 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:30 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6a79ca21f46744f4bc979095b083f855', '114.91.129.78', '2016-07-12', '09:06:30', '120340234', '/admin/order/check/988e96d752f240baaa0bbc53363b1e58', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='988e96d752f240baaa0bbc53363b1e58'
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='988e96d752f240baaa0bbc53363b1e58' order by create_date_time desc
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='988e96d752f240baaa0bbc53363b1e58'
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='988e96d752f240baaa0bbc53363b1e58'    order by t1.lno asc
        
DEBUG - 2016-07-12 09:06:30 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285590
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:30 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:30 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('589e6f36b4ba414b9d6049834a48a2ff', '114.91.129.78', '2016-07-12', '09:06:30', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:30 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:30 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285590
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:30 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:30 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7fcf4e7a28c849bb86a5c633b4fc14b2', '114.91.129.78', '2016-07-12', '09:06:30', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:30 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:30 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285590
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:30 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:30 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('41237a8398f4490883c14bcb2f1eda13', '114.91.129.78', '2016-07-12', '09:06:30', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:30 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:30 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285590
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:31 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:31 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ec46c491b97a456b969771ec7b1d2d74', '114.91.129.78', '2016-07-12', '09:06:31', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:31 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:31 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285591
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:31 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:31 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('515853adcd85496d811dd5207f9cf54e', '114.91.129.78', '2016-07-12', '09:06:31', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:31 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:31 --> Total execution time: 0.1092
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285591
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:31 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:31 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dd3b021068514d5f9d4231a31c907f72', '114.91.129.78', '2016-07-12', '09:06:31', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:31 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:31 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285591
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:31 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:31 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bdc5ceda7e7e4b80aee727b5fc74bf4c', '114.91.129.78', '2016-07-12', '09:06:31', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:31 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:31 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285591
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:31 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:31 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('75d4798290f443bd95551b7c207430ed', '114.91.129.78', '2016-07-12', '09:06:31', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:31 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:31 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285591
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:31 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:31 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('36cf6f71977f4fd19d2ba3a98810fa35', '114.91.129.78', '2016-07-12', '09:06:32', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:32 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:32 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285592
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:32 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:32 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:32 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:32 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b7b0040a982b4c63b13626601e02b5fd', '114.91.129.78', '2016-07-12', '09:06:32', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:32 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:32 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285592
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a0cb373a8c174a879368acfef35ec6f5', '114.91.129.78', '2016-07-12', '09:06:32', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:32 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:32 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285592
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:33 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:33 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9d72d65106fc4f5da2bb71215d6b2f6e', '114.91.129.78', '2016-07-12', '09:06:33', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:33 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:33 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285593
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:33 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:33 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('416badc644f048f89edde0d27590930c', '114.91.129.78', '2016-07-12', '09:06:33', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:33 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:33 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285593
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:33 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:33 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('34e82f456edb475184251f31044598e4', '114.91.129.78', '2016-07-12', '09:06:33', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:33 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:33 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285593
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:34 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:34 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2d23b4823aac4743ae8b2a589d2b4781', '114.91.129.78', '2016-07-12', '09:06:34', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:34 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:34 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:34 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285594
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:34 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:34 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7d80d9824d904d2098fe620935a2ab95', '114.91.129.78', '2016-07-12', '09:06:34', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:34 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:34 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:34 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285594
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:35 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:35 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-12 09:06:35 --> 404 Page Not Found: Log/systemlog
DEBUG - 2016-07-12 09:06:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:45 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:45 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a23e1eed58f848759f1c413cafd42da8', '114.91.129.78', '2016-07-12', '09:06:45', '120340234', '/admin/order/check/988e96d752f240baaa0bbc53363b1e58', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='988e96d752f240baaa0bbc53363b1e58'
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='988e96d752f240baaa0bbc53363b1e58' order by create_date_time desc
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='988e96d752f240baaa0bbc53363b1e58'
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='988e96d752f240baaa0bbc53363b1e58'    order by t1.lno asc
        
DEBUG - 2016-07-12 09:06:45 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285605
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:45 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:45 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('efe2eae71d0a4a828cc3e9455f4f545f', '114.91.129.78', '2016-07-12', '09:06:45', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:45 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:45 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285605
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:45 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:45 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b24bd227f7f146079ed275e933d1d363', '114.91.129.78', '2016-07-12', '09:06:45', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:45 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:45 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285605
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:45 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:45 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c61fee7e18574763b08780bc6b70ba80', '114.91.129.78', '2016-07-12', '09:06:45', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:45 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:45 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285605
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:46 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:46 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('81d553d04e56489b8310b55720332c62', '114.91.129.78', '2016-07-12', '09:06:46', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:46 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:46 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285606
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:46 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:46 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('729bfd4f745c41088801e89b9a071cdc', '114.91.129.78', '2016-07-12', '09:06:46', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:46 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:46 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285606
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:47 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:47 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3475b06df55d4681b79795c5312cffd6', '114.91.129.78', '2016-07-12', '09:06:47', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:47 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:47 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:47 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285607
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:47 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:47 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1213f4e2c44d4d8f8fe777b0a4e7e973', '114.91.129.78', '2016-07-12', '09:06:47', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:47 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:47 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:47 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285607
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:48 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:48 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d78ba411d73c4a6995faf583b42e7dee', '114.91.129.78', '2016-07-12', '09:06:48', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:48 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:48 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285608
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:48 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:48 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cc960feb84fc4504a63866a62f5f5b8b', '114.91.129.78', '2016-07-12', '09:06:48', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:48 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:48 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285608
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:48 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:48 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:48 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:48 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fbc3b1607e214052b7152fabab09d809', '114.91.129.78', '2016-07-12', '09:06:48', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:48 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:48 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285608
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b4f9049655ed44eeb89ce95695c169d0', '114.91.129.78', '2016-07-12', '09:06:48', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:48 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:48 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285608
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:49 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:49 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c59e42d949ec4f3eb9fb1ddd8b75da01', '114.91.129.78', '2016-07-12', '09:06:49', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:49 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:49 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285609
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:49 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:49 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('da602eaa9fbd43a9a0546a111035a9b3', '114.91.129.78', '2016-07-12', '09:06:49', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:49 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:49 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:06:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285609
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:49 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:49 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4c614f2013c345e383c6c37bb30d3693', '114.91.129.78', '2016-07-12', '09:06:49', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:49 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:49 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285609
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:50 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:50 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('01bf5c277f414a4d80e7733c8133cbf7', '114.91.129.78', '2016-07-12', '09:06:50', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:50 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:50 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:06:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285610
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:06:50 --> Security Class Initialized
DEBUG - 2016-07-12 09:06:50 --> CRSF cookie Set
DEBUG - 2016-07-12 09:06:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:06:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:06:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('97a99dd38bb0413fa6a30aaa55609165', '114.91.129.78', '2016-07-12', '09:06:50', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:06:50 --> 查询待审核订单
DEBUG - 2016-07-12 09:06:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:06:50 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:06:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285610
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:08 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:08 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f3fa2b04a0a448dbafefc76e90c458b1', '114.91.129.78', '2016-07-12', '09:07:08', '120340234', '/admin/order/check/439f0e7428d2487ea41c2775ea0beabd', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='439f0e7428d2487ea41c2775ea0beabd'
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='439f0e7428d2487ea41c2775ea0beabd' order by create_date_time desc
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='439f0e7428d2487ea41c2775ea0beabd'
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='439f0e7428d2487ea41c2775ea0beabd'    order by t1.lno asc
        
DEBUG - 2016-07-12 09:07:08 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285628
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:08 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:08 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('074e78bbc60f4e89a2b20a59f20cee90', '114.91.129.78', '2016-07-12', '09:07:08', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:08 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:08 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285628
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:08 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:08 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('11c80ce2478246d09cad6b1e3a54015c', '114.91.129.78', '2016-07-12', '09:07:08', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:08 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:08 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285628
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:08 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:08 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('edeead29bf8e49c18fd5907d7cbb5630', '114.91.129.78', '2016-07-12', '09:07:08', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:08 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:08 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285628
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:08 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:08 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('759b564e01f14150aa01dd32dc551615', '114.91.129.78', '2016-07-12', '09:07:08', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:08 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:08 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285628
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:09 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:09 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9e75bb1015f649d4a7413d656a7fa973', '114.91.129.78', '2016-07-12', '09:07:09', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:09 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:09 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:09 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:07:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285629
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:09 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:09 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('355f301501e341cdb347382b971ce68b', '114.91.129.78', '2016-07-12', '09:07:09', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:09 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:09 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:09 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:07:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285629
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:10 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:10 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4adb01280607445a9577d84a08dca3f8', '114.91.129.78', '2016-07-12', '09:07:10', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:10 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:10 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285630
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:10 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:10 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2a4bfe9ca5ac431698463ad3f365eb41', '114.91.129.78', '2016-07-12', '09:07:10', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:10 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:10 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285630
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:10 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:10 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4da1dee6d56f4fe28b2fc4a53286b52f', '114.91.129.78', '2016-07-12', '09:07:10', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:10 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:10 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285630
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:10 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:10 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:10 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:10 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ffe7bd124dc649d0bc1ab0e9295a0018', '114.91.129.78', '2016-07-12', '09:07:10', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:10 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6f111a5744f045d2a61fdc86c85889cc', '114.91.129.78', '2016-07-12', '09:07:10', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:10 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:10 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285630
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:10 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:07:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285630
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:11 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:11 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fb3f4dad75dd47668d324f5d305a13e8', '114.91.129.78', '2016-07-12', '09:07:11', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:11 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:11 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:11 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:07:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285631
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:11 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:11 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('27f1e35594ba41a5ad3a4eb95f7f03cc', '114.91.129.78', '2016-07-12', '09:07:11', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:11 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:11 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:11 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:07:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285631
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:11 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:11 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c966af18aff54715a78f5aa885fd8daf', '114.91.129.78', '2016-07-12', '09:07:11', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:11 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:11 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:11 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285631
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:12 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:12 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4dfb8fc1051a4b57973a75412dfcceb4', '114.91.129.78', '2016-07-12', '09:07:12', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:12 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:12 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:12 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285632
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:12 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:12 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('34f668d062bd491faf13b89013c1b511', '114.91.129.78', '2016-07-12', '09:07:12', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:12 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:12 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:12 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:07:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285632
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:49 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:49 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3bd238908fbb472f938bed4a1ec7ddb7', '114.91.129.78', '2016-07-12', '09:07:49', '120340234', '/admin/order/check/439f0e7428d2487ea41c2775ea0beabd', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:49 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='439f0e7428d2487ea41c2775ea0beabd'
DEBUG - 2016-07-12 09:07:49 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='439f0e7428d2487ea41c2775ea0beabd' order by create_date_time desc
DEBUG - 2016-07-12 09:07:49 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='439f0e7428d2487ea41c2775ea0beabd'
DEBUG - 2016-07-12 09:07:49 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='439f0e7428d2487ea41c2775ea0beabd'    order by t1.lno asc
        
DEBUG - 2016-07-12 09:07:49 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:07:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285669
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:49 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:49 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('85e6c5744ee24bb7af08e1e36d52abbb', '114.91.129.78', '2016-07-12', '09:07:49', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:49 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:49 --> Total execution time: 0.1092
DEBUG - 2016-07-12 09:07:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285669
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:50 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:50 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8ee99dd6d76b4918aea88001cae4ad05', '114.91.129.78', '2016-07-12', '09:07:50', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:50 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:50 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:07:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285670
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:50 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:50 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6936b0ae59af4deca1feea96b06eade5', '114.91.129.78', '2016-07-12', '09:07:50', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:50 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:50 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285670
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:50 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:50 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2e18e83f77b34271ae629708a421a84e', '114.91.129.78', '2016-07-12', '09:07:50', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:50 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:50 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:07:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285670
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:51 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:51 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('020d878d0351434f80f5c78b7e779254', '114.91.129.78', '2016-07-12', '09:07:51', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:51 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:51 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285671
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:51 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:51 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5c1a2805220e44308931fe63cf319ece', '114.91.129.78', '2016-07-12', '09:07:51', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:51 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:51 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285671
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:51 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:51 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2d73185220614662b1ca62340330bcd3', '114.91.129.78', '2016-07-12', '09:07:51', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:51 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:51 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285671
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:51 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:51 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('19c2a72906d8427abd7a7be3d9337f88', '114.91.129.78', '2016-07-12', '09:07:51', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:51 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:51 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:07:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285671
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:51 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:51 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6921ccf89eb14c52b6e7667f8c91edba', '114.91.129.78', '2016-07-12', '09:07:52', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:52 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:52 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:52 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:07:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285672
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:52 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:52 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:52 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:52 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4fa5e52637cf4d14b0de0ed8aec44302', '114.91.129.78', '2016-07-12', '09:07:52', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('87b9f80162fd44b4b2fcc01693cce445', '114.91.129.78', '2016-07-12', '09:07:52', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:52 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:52 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:52 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:52 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:52 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:52 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:07:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285672
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285672
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:53 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:53 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5b9d16daa2a54963839da024df00594b', '114.91.129.78', '2016-07-12', '09:07:53', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:53 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:53 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285673
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:53 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:53 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d8bfb71e6db24cf79fc6c39aa587b2ff', '114.91.129.78', '2016-07-12', '09:07:53', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:53 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:53 --> Total execution time: 0.0936
DEBUG - 2016-07-12 09:07:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285673
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:53 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:53 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('385ce2b0a1e749d0ab02a361a0a80df9', '114.91.129.78', '2016-07-12', '09:07:53', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:53 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:53 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:07:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285673
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:54 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:54 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9eb01cb467774ae2b24708e305f2be90', '114.91.129.78', '2016-07-12', '09:07:54', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:54 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:54 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:54 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285674
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:07:54 --> Security Class Initialized
DEBUG - 2016-07-12 09:07:54 --> CRSF cookie Set
DEBUG - 2016-07-12 09:07:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:07:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:07:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('718b3f574b364a83aed1b1a05fbc7a15', '114.91.129.78', '2016-07-12', '09:07:54', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:07:54 --> 查询待审核订单
DEBUG - 2016-07-12 09:07:54 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:07:54 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:07:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285674
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:21 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:21 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9edad9f0cc954cbea86082a71814823c', '114.91.129.78', '2016-07-12', '09:08:22', '120340234', '/admin/order/check/439f0e7428d2487ea41c2775ea0beabd', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='439f0e7428d2487ea41c2775ea0beabd'
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='439f0e7428d2487ea41c2775ea0beabd' order by create_date_time desc
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='439f0e7428d2487ea41c2775ea0beabd'
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='439f0e7428d2487ea41c2775ea0beabd'    order by t1.lno asc
        
DEBUG - 2016-07-12 09:08:22 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285702
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:22 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:22 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b1fe297eff5444928abd8f727ba76313', '114.91.129.78', '2016-07-12', '09:08:22', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:22 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:22 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285702
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:22 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:22 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5a3eaea66d974b0ebe334f3b6888b9f5', '114.91.129.78', '2016-07-12', '09:08:22', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:22 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:22 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285702
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:22 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:22 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3d6b86e898e44f348c3f0e594fd84564', '114.91.129.78', '2016-07-12', '09:08:22', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:22 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:22 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:08:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285702
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:23 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:23 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b15953bdb7de4d7b9cd875176dc1b33e', '114.91.129.78', '2016-07-12', '09:08:23', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:23 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:23 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285703
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:23 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:23 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('adc21bf8371e46d0924c7a9e2dac3220', '114.91.129.78', '2016-07-12', '09:08:23', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:23 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:23 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285703
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:23 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:23 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a1ea89ddbe904a19b906b7fbe0cc062c', '114.91.129.78', '2016-07-12', '09:08:23', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:23 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:23 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285703
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:23 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:23 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d30aafe3d4e14f81b8ddeb970d5b4823', '114.91.129.78', '2016-07-12', '09:08:23', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:23 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:23 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:08:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285703
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:24 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:24 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('608b2ccc3f23492c80ce635308dfaf49', '114.91.129.78', '2016-07-12', '09:08:24', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:24 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:24 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285704
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:24 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:24 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9a1ef27287e64206873d3206ddc090ca', '114.91.129.78', '2016-07-12', '09:08:24', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:24 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:24 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285704
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:24 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:24 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:24 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:24 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fa06edf2d5804570bc765a030450991a', '114.91.129.78', '2016-07-12', '09:08:24', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:24 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0f484925b83f4228a9bc76b67a413052', '114.91.129.78', '2016-07-12', '09:08:24', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:24 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285704
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:24 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:24 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:08:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285704
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:25 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:25 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('98582cde4f1b4786954d9f5fd4c4da8d', '114.91.129.78', '2016-07-12', '09:08:25', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:25 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:25 --> Total execution time: 0.0624
DEBUG - 2016-07-12 09:08:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285705
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:25 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:25 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d18e8fb2260e499790506c84fdc38bcb', '114.91.129.78', '2016-07-12', '09:08:25', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:25 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:25 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:08:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285705
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-12 09:08:25 --> Security Class Initialized
DEBUG - 2016-07-12 09:08:25 --> CRSF cookie Set
DEBUG - 2016-07-12 09:08:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-12 09:08:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
DEBUG - 2016-07-12 09:08:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c38960ebedb1454f8dec922a0b165e1e', '114.91.129.78', '2016-07-12', '09:08:25', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f')
DEBUG - 2016-07-12 09:08:25 --> 查询待审核订单
DEBUG - 2016-07-12 09:08:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-12 09:08:25 --> Total execution time: 0.0780
DEBUG - 2016-07-12 09:08:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468285705
WHERE id = '8c1cf32d6063b47c1e39b9d0d1c9aa7a51c69e3f'
