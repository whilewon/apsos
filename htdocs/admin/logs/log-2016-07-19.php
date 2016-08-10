<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-19 09:29:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 09:29:37 --> CRSF cookie Set
DEBUG - 2016-07-19 09:29:37 --> Security Class Initialized
DEBUG - 2016-07-19 09:29:37 --> CRSF cookie Set
DEBUG - 2016-07-19 09:29:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 09:29:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '12509c161afb9a3abdcfb101c30d09937a97ff71'
DEBUG - 2016-07-19 09:29:37 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('12509c161afb9a3abdcfb101c30d09937a97ff71', '114.91.129.78', 1468891777, '__ci_last_regenerate|i:1468891777;')
DEBUG - 2016-07-19 09:29:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 09:29:37 --> Security Class Initialized
DEBUG - 2016-07-19 09:29:37 --> CRSF cookie Set
DEBUG - 2016-07-19 09:29:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 09:29:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '12509c161afb9a3abdcfb101c30d09937a97ff71'
DEBUG - 2016-07-19 09:29:37 --> Total execution time: 0.0936
DEBUG - 2016-07-19 09:29:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468891777
WHERE id = '12509c161afb9a3abdcfb101c30d09937a97ff71'
DEBUG - 2016-07-19 09:30:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 09:30:09 --> Security Class Initialized
DEBUG - 2016-07-19 09:30:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 09:30:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '12509c161afb9a3abdcfb101c30d09937a97ff71'
DEBUG - 2016-07-19 09:30:09 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-19 09:30:09 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-19 09:30:09 --> 登录返回结果数：1
DEBUG - 2016-07-19 09:30:09 --> 成功登录
DEBUG - 2016-07-19 09:30:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468891809, data = '__ci_last_regenerate|i:1468891777;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '12509c161afb9a3abdcfb101c30d09937a97ff71'
DEBUG - 2016-07-19 09:30:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 09:30:09 --> Security Class Initialized
DEBUG - 2016-07-19 09:30:09 --> CRSF cookie Set
DEBUG - 2016-07-19 09:30:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 09:30:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '12509c161afb9a3abdcfb101c30d09937a97ff71'
DEBUG - 2016-07-19 09:30:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fe634d9432b449e3bc33ca5144a360ba', '114.91.129.78', '2016-07-19', '09:30:09', '120340234', '/admin/order/check/2fb0c50dfff14df89f7dbd437a2a223a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '12509c161afb9a3abdcfb101c30d09937a97ff71')
DEBUG - 2016-07-19 09:30:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='2fb0c50dfff14df89f7dbd437a2a223a'
DEBUG - 2016-07-19 09:30:09 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='2fb0c50dfff14df89f7dbd437a2a223a' order by create_date_time desc
DEBUG - 2016-07-19 09:30:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='2fb0c50dfff14df89f7dbd437a2a223a'
DEBUG - 2016-07-19 09:30:09 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='2fb0c50dfff14df89f7dbd437a2a223a'    order by t1.lno asc
        
DEBUG - 2016-07-19 09:30:09 --> Total execution time: 0.1872
DEBUG - 2016-07-19 09:30:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468891809
WHERE id = '12509c161afb9a3abdcfb101c30d09937a97ff71'
DEBUG - 2016-07-19 09:30:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 09:30:11 --> Security Class Initialized
DEBUG - 2016-07-19 09:30:11 --> CRSF cookie Set
DEBUG - 2016-07-19 09:30:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 09:30:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '12509c161afb9a3abdcfb101c30d09937a97ff71'
DEBUG - 2016-07-19 09:30:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8cb78b203a144040aba8f2e2f4cddaa8', '114.91.129.78', '2016-07-19', '09:30:11', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '12509c161afb9a3abdcfb101c30d09937a97ff71')
DEBUG - 2016-07-19 09:30:11 --> 查询待审核订单
DEBUG - 2016-07-19 09:30:11 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-19 09:30:11 --> Total execution time: 0.1248
DEBUG - 2016-07-19 09:30:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468891811
WHERE id = '12509c161afb9a3abdcfb101c30d09937a97ff71'
DEBUG - 2016-07-19 12:49:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 12:49:19 --> CRSF cookie Set
DEBUG - 2016-07-19 12:49:19 --> Security Class Initialized
DEBUG - 2016-07-19 12:49:19 --> CRSF cookie Set
DEBUG - 2016-07-19 12:49:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 12:49:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '30b8ba454cb07bd93d1f32a29a091fefda5249a2'
DEBUG - 2016-07-19 12:49:19 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('30b8ba454cb07bd93d1f32a29a091fefda5249a2', '114.91.129.78', 1468903759, '__ci_last_regenerate|i:1468903759;')
DEBUG - 2016-07-19 12:49:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 12:49:19 --> Security Class Initialized
DEBUG - 2016-07-19 12:49:19 --> CRSF cookie Set
DEBUG - 2016-07-19 12:49:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 12:49:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '30b8ba454cb07bd93d1f32a29a091fefda5249a2'
DEBUG - 2016-07-19 12:49:19 --> Total execution time: 0.1870
DEBUG - 2016-07-19 12:49:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468903759
WHERE id = '30b8ba454cb07bd93d1f32a29a091fefda5249a2'
DEBUG - 2016-07-19 12:49:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 12:49:34 --> Security Class Initialized
DEBUG - 2016-07-19 12:49:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 12:49:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '30b8ba454cb07bd93d1f32a29a091fefda5249a2'
DEBUG - 2016-07-19 12:49:34 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-19 12:49:34 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-19 12:49:34 --> 登录返回结果数：1
DEBUG - 2016-07-19 12:49:34 --> 成功登录
DEBUG - 2016-07-19 12:49:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468903774, data = '__ci_last_regenerate|i:1468903759;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '30b8ba454cb07bd93d1f32a29a091fefda5249a2'
DEBUG - 2016-07-19 12:49:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 12:49:34 --> Security Class Initialized
DEBUG - 2016-07-19 12:49:34 --> CRSF cookie Set
DEBUG - 2016-07-19 12:49:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 12:49:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '30b8ba454cb07bd93d1f32a29a091fefda5249a2'
DEBUG - 2016-07-19 12:49:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('911279b990824b20a496dc0b9b0dc95a', '114.91.129.78', '2016-07-19', '12:49:34', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '30b8ba454cb07bd93d1f32a29a091fefda5249a2')
DEBUG - 2016-07-19 12:49:34 --> 查询待审核订单
DEBUG - 2016-07-19 12:49:34 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-19 12:49:34 --> Total execution time: 0.3330
DEBUG - 2016-07-19 12:49:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468903774
WHERE id = '30b8ba454cb07bd93d1f32a29a091fefda5249a2'
DEBUG - 2016-07-19 12:49:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 12:49:39 --> Security Class Initialized
DEBUG - 2016-07-19 12:49:39 --> CRSF cookie Set
DEBUG - 2016-07-19 12:49:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 12:49:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '30b8ba454cb07bd93d1f32a29a091fefda5249a2'
DEBUG - 2016-07-19 12:49:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e07a4559c6f7463f8d06726be93960fd', '114.91.129.78', '2016-07-19', '12:49:39', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '30b8ba454cb07bd93d1f32a29a091fefda5249a2')
DEBUG - 2016-07-19 12:49:39 --> 查询待审核订单
DEBUG - 2016-07-19 12:49:39 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-19 12:49:39 --> Total execution time: 0.1040
DEBUG - 2016-07-19 12:49:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468903779
WHERE id = '30b8ba454cb07bd93d1f32a29a091fefda5249a2'
DEBUG - 2016-07-19 18:35:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 18:35:41 --> CRSF cookie Set
DEBUG - 2016-07-19 18:35:41 --> Security Class Initialized
DEBUG - 2016-07-19 18:35:41 --> CRSF cookie Set
DEBUG - 2016-07-19 18:35:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 18:35:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f'
DEBUG - 2016-07-19 18:35:41 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('cdab7ac86f2a6665d6511363df5518d4e33f7c8f', '114.91.129.78', 1468924541, '__ci_last_regenerate|i:1468924541;')
DEBUG - 2016-07-19 18:35:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 18:35:41 --> Security Class Initialized
DEBUG - 2016-07-19 18:35:41 --> CRSF cookie Set
DEBUG - 2016-07-19 18:35:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 18:35:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f'
DEBUG - 2016-07-19 18:35:42 --> Total execution time: 0.0936
DEBUG - 2016-07-19 18:35:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468924542
WHERE id = 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f'
DEBUG - 2016-07-19 18:35:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 18:35:50 --> Security Class Initialized
DEBUG - 2016-07-19 18:35:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 18:35:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f'
DEBUG - 2016-07-19 18:35:50 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-19 18:35:50 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-19 18:35:50 --> 登录返回结果数：1
DEBUG - 2016-07-19 18:35:50 --> 成功登录
DEBUG - 2016-07-19 18:35:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468924550, data = '__ci_last_regenerate|i:1468924541;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f'
DEBUG - 2016-07-19 18:35:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 18:35:50 --> Security Class Initialized
DEBUG - 2016-07-19 18:35:50 --> CRSF cookie Set
DEBUG - 2016-07-19 18:35:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 18:35:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f'
DEBUG - 2016-07-19 18:35:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('502fc38773aa4f07a180e4cb22b05a9c', '114.91.129.78', '2016-07-19', '18:35:50', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f')
DEBUG - 2016-07-19 18:35:50 --> 查询待审核订单
DEBUG - 2016-07-19 18:35:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-19 18:35:50 --> Total execution time: 0.1872
DEBUG - 2016-07-19 18:35:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468924550
WHERE id = 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f'
DEBUG - 2016-07-19 18:35:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 18:35:53 --> Security Class Initialized
DEBUG - 2016-07-19 18:35:53 --> CRSF cookie Set
DEBUG - 2016-07-19 18:35:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 18:35:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f'
DEBUG - 2016-07-19 18:35:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3a90bdc09eb64bc48295e911d5583cb6', '114.91.129.78', '2016-07-19', '18:35:53', '120340234', '/admin/order/check/be5b66c864e04d5c990fe01c7088db80', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f')
DEBUG - 2016-07-19 18:35:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be5b66c864e04d5c990fe01c7088db80'
DEBUG - 2016-07-19 18:35:53 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='be5b66c864e04d5c990fe01c7088db80' order by create_date_time desc
DEBUG - 2016-07-19 18:35:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be5b66c864e04d5c990fe01c7088db80'
DEBUG - 2016-07-19 18:35:53 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='be5b66c864e04d5c990fe01c7088db80'    order by t1.lno asc
        
DEBUG - 2016-07-19 18:35:53 --> Total execution time: 0.1248
DEBUG - 2016-07-19 18:35:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468924553
WHERE id = 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f'
DEBUG - 2016-07-19 18:36:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 18:36:00 --> Security Class Initialized
DEBUG - 2016-07-19 18:36:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 18:36:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f'
DEBUG - 2016-07-19 18:36:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('50e55186be6142208c618498cd867207', '114.91.129.78', '2016-07-19', '18:36:00', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f')
DEBUG - 2016-07-19 18:36:00 --> 审核订单
DEBUG - 2016-07-19 18:36:00 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'be5b66c864e04d5c990fe01c7088db80'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-19 18:36:00 --> 过程调用语句：  execute USP_APSOS_outorder 'be5b66c864e04d5c990fe01c7088db80'
DEBUG - 2016-07-19 18:36:01 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340234', 'be5b66c864e04d5c990fe01c7088db80', '2', '', 'ffddc6f3f40247708a04a66bf4c09423', '2016-07-19 18:36:01')
DEBUG - 2016-07-19 18:36:01 --> 该订单状态更新成功:2
DEBUG - 2016-07-19 18:36:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be5b66c864e04d5c990fe01c7088db80'
DEBUG - 2016-07-19 18:36:02 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05038'
DEBUG - 2016-07-19 18:36:05 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-19 18:36:05 --> Total execution time: 5.6472
DEBUG - 2016-07-19 18:36:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468924565
WHERE id = 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f'
DEBUG - 2016-07-19 18:36:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-19 18:36:06 --> Security Class Initialized
DEBUG - 2016-07-19 18:36:06 --> CRSF cookie Set
DEBUG - 2016-07-19 18:36:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-19 18:36:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f'
DEBUG - 2016-07-19 18:36:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e672b749a5b545e69d57b34405ac3b57', '114.91.129.78', '2016-07-19', '18:36:06', '120340234', '/admin/order/check/be5b66c864e04d5c990fe01c7088db80', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f')
DEBUG - 2016-07-19 18:36:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be5b66c864e04d5c990fe01c7088db80'
DEBUG - 2016-07-19 18:36:06 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='be5b66c864e04d5c990fe01c7088db80' order by create_date_time desc
DEBUG - 2016-07-19 18:36:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be5b66c864e04d5c990fe01c7088db80'
DEBUG - 2016-07-19 18:36:06 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='be5b66c864e04d5c990fe01c7088db80'    order by t1.lno asc
        
DEBUG - 2016-07-19 18:36:06 --> Total execution time: 0.1092
DEBUG - 2016-07-19 18:36:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468924566
WHERE id = 'cdab7ac86f2a6665d6511363df5518d4e33f7c8f'
