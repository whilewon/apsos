<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-20 09:12:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:12:54 --> CRSF cookie Set
DEBUG - 2016-06-20 09:12:54 --> Security Class Initialized
DEBUG - 2016-06-20 09:12:54 --> CRSF cookie Set
DEBUG - 2016-06-20 09:12:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-06-20 09:12:54 --> 404 Page Not Found: Userlogin/dologin.html
DEBUG - 2016-06-20 09:13:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:13:00 --> No URI present. Default controller set.
DEBUG - 2016-06-20 09:13:00 --> Security Class Initialized
DEBUG - 2016-06-20 09:13:00 --> CRSF cookie Set
DEBUG - 2016-06-20 09:13:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:13:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:13:00 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d9762eb86ee408646fb1a5e868d70627a5a8e9a3', '27.152.95.50', 1466385180, '__ci_last_regenerate|i:1466385180;')
DEBUG - 2016-06-20 09:13:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:13:00 --> Security Class Initialized
DEBUG - 2016-06-20 09:13:00 --> CRSF cookie Set
DEBUG - 2016-06-20 09:13:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:13:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:13:00 --> Total execution time: 0.0936
DEBUG - 2016-06-20 09:13:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385180
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:13:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:13:17 --> Security Class Initialized
DEBUG - 2016-06-20 09:13:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:13:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:13:17 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-06-20 09:13:17 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-06-20 09:13:17 --> 登录返回结果数：1
DEBUG - 2016-06-20 09:13:17 --> 成功登录
DEBUG - 2016-06-20 09:13:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385197, data = '__ci_last_regenerate|i:1466385180;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:13:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:13:17 --> No URI present. Default controller set.
DEBUG - 2016-06-20 09:13:17 --> Security Class Initialized
DEBUG - 2016-06-20 09:13:17 --> CRSF cookie Set
DEBUG - 2016-06-20 09:13:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:13:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:13:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b89b778a3ab949b6950da97c49b76b1a', '27.152.95.50', '2016-06-20', '09:13:18', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3')
DEBUG - 2016-06-20 09:13:18 --> Total execution time: 0.1716
DEBUG - 2016-06-20 09:13:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385198
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:13:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:13:31 --> Security Class Initialized
DEBUG - 2016-06-20 09:13:31 --> CRSF cookie Set
DEBUG - 2016-06-20 09:13:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:13:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:13:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2930f32518c04eebb78bf6afabcea207', '27.152.95.50', '2016-06-20', '09:13:31', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3')
DEBUG - 2016-06-20 09:13:31 --> 查询订单
DEBUG - 2016-06-20 09:13:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 09:13:31 --> Total execution time: 0.1872
DEBUG - 2016-06-20 09:13:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385211
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:13:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:13:38 --> Security Class Initialized
DEBUG - 2016-06-20 09:13:38 --> CRSF cookie Set
DEBUG - 2016-06-20 09:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:13:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:13:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8b396c35516b4646985192415ae7ba93', '27.152.95.50', '2016-06-20', '09:13:38', '120340234', '/admin/order/index/7d4b5e6ee61a4c2a817db045dcc9b806', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3')
DEBUG - 2016-06-20 09:13:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-20 09:13:38 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7d4b5e6ee61a4c2a817db045dcc9b806' order by create_date_time desc
DEBUG - 2016-06-20 09:13:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-20 09:13:38 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7d4b5e6ee61a4c2a817db045dcc9b806'    order by t1.lno asc
        
DEBUG - 2016-06-20 09:13:39 --> Total execution time: 0.2964
DEBUG - 2016-06-20 09:13:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385219
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:14:12 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:14:12 --> Security Class Initialized
DEBUG - 2016-06-20 09:14:12 --> CRSF cookie Set
DEBUG - 2016-06-20 09:14:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:14:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:14:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c3ff3f74f48a458885edfb6f827599a6', '27.152.95.50', '2016-06-20', '09:14:12', '120340234', '/admin/order/true/7d4b5e6ee61a4c2a817db045dcc9b806', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3')
DEBUG - 2016-06-20 09:14:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-20 09:14:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-20 09:14:12 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7d4b5e6ee61a4c2a817db045dcc9b806'    order by t1.lno asc
        
DEBUG - 2016-06-20 09:14:12 --> Total execution time: 0.1092
DEBUG - 2016-06-20 09:14:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385252
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:14:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:14:26 --> Security Class Initialized
DEBUG - 2016-06-20 09:14:26 --> CRSF cookie Set
DEBUG - 2016-06-20 09:14:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:14:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:14:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('31c5e824a84f4c9593ec8be65dc3d51a', '27.152.95.50', '2016-06-20', '09:14:26', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3')
DEBUG - 2016-06-20 09:14:26 --> 查询订单
DEBUG - 2016-06-20 09:14:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 09:14:26 --> Total execution time: 0.0936
DEBUG - 2016-06-20 09:14:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385266
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:14:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:14:43 --> Security Class Initialized
DEBUG - 2016-06-20 09:14:43 --> CRSF cookie Set
DEBUG - 2016-06-20 09:14:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:14:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:14:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('60eb2e1fbe554de1bbb2d50b859b62eb', '27.152.95.50', '2016-06-20', '09:14:43', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3')
DEBUG - 2016-06-20 09:14:43 --> 查询待发货订单
DEBUG - 2016-06-20 09:14:43 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-20 09:14:43 --> Total execution time: 0.0780
DEBUG - 2016-06-20 09:14:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385283
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:14:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:14:46 --> Security Class Initialized
DEBUG - 2016-06-20 09:14:46 --> CRSF cookie Set
DEBUG - 2016-06-20 09:14:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:14:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:14:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6dec5ed80f17486894317bbee8a7efec', '27.152.95.50', '2016-06-20', '09:14:46', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3')
DEBUG - 2016-06-20 09:14:46 --> 查询待审核订单
DEBUG - 2016-06-20 09:14:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 09:14:46 --> Total execution time: 0.0936
DEBUG - 2016-06-20 09:14:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385286
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:14:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:14:50 --> Security Class Initialized
DEBUG - 2016-06-20 09:14:50 --> CRSF cookie Set
DEBUG - 2016-06-20 09:14:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:14:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:14:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('122a68e244814168b3d296314c09e991', '27.152.95.50', '2016-06-20', '09:14:50', '120340234', '/admin/order/check/e2fe562068924354864325b5fbf32b9a', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3')
DEBUG - 2016-06-20 09:14:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 09:14:50 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e2fe562068924354864325b5fbf32b9a' order by create_date_time desc
DEBUG - 2016-06-20 09:14:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 09:14:50 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e2fe562068924354864325b5fbf32b9a'    order by t1.lno asc
        
DEBUG - 2016-06-20 09:14:50 --> Total execution time: 0.1404
DEBUG - 2016-06-20 09:14:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385290
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:15:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:15:01 --> Security Class Initialized
DEBUG - 2016-06-20 09:15:01 --> CRSF cookie Set
DEBUG - 2016-06-20 09:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:15:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:15:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8c5f91fa073843aea5baa97d810ae3c1', '27.152.95.50', '2016-06-20', '09:15:01', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3')
DEBUG - 2016-06-20 09:15:01 --> 查询订单
DEBUG - 2016-06-20 09:15:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 09:15:01 --> Total execution time: 0.0780
DEBUG - 2016-06-20 09:15:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385301
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:15:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:15:22 --> Security Class Initialized
DEBUG - 2016-06-20 09:15:22 --> CRSF cookie Set
DEBUG - 2016-06-20 09:15:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:15:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:15:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e40a843b9e4c4ed98671d1409e5d4d47', '27.152.95.50', '2016-06-20', '09:15:22', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3')
DEBUG - 2016-06-20 09:15:22 --> 查询订单
DEBUG - 2016-06-20 09:15:22 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 09:15:22 --> Total execution time: 0.0936
DEBUG - 2016-06-20 09:15:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385322
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:15:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:15:31 --> Security Class Initialized
DEBUG - 2016-06-20 09:15:31 --> CRSF cookie Set
DEBUG - 2016-06-20 09:15:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:15:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:15:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385331, data = '__ci_last_regenerate|i:1466385180;'
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:15:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 09:15:31 --> Security Class Initialized
DEBUG - 2016-06-20 09:15:31 --> CRSF cookie Set
DEBUG - 2016-06-20 09:15:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 09:15:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 09:15:31 --> Total execution time: 0.0780
DEBUG - 2016-06-20 09:15:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466385331
WHERE id = 'd9762eb86ee408646fb1a5e868d70627a5a8e9a3'
DEBUG - 2016-06-20 14:01:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:01:15 --> No URI present. Default controller set.
DEBUG - 2016-06-20 14:01:15 --> CRSF cookie Set
DEBUG - 2016-06-20 14:01:15 --> Security Class Initialized
DEBUG - 2016-06-20 14:01:15 --> CRSF cookie Set
DEBUG - 2016-06-20 14:01:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:01:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:01:15 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5baea0cddd623f568fe4c505f0f75d8e55d500bc', '114.91.131.17', 1466402475, '__ci_last_regenerate|i:1466402475;')
DEBUG - 2016-06-20 14:01:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:01:15 --> Security Class Initialized
DEBUG - 2016-06-20 14:01:15 --> CRSF cookie Set
DEBUG - 2016-06-20 14:01:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:01:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:01:15 --> Total execution time: 0.1190
DEBUG - 2016-06-20 14:01:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402475
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:01:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:01:17 --> Security Class Initialized
DEBUG - 2016-06-20 14:01:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:01:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:01:18 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-20 14:01:18 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-20 14:01:18 --> 登录返回结果数：1
DEBUG - 2016-06-20 14:01:18 --> 成功登录
DEBUG - 2016-06-20 14:01:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402478, data = '__ci_last_regenerate|i:1466402475;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:01:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:01:18 --> No URI present. Default controller set.
DEBUG - 2016-06-20 14:01:18 --> Security Class Initialized
DEBUG - 2016-06-20 14:01:18 --> CRSF cookie Set
DEBUG - 2016-06-20 14:01:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:01:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:01:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('691664a9de0d4f4ea02aeb6287394c4f', '114.91.131.17', '2016-06-20', '14:01:18', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5baea0cddd623f568fe4c505f0f75d8e55d500bc')
DEBUG - 2016-06-20 14:01:18 --> Total execution time: 0.1280
DEBUG - 2016-06-20 14:01:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402478
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:01:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:01:48 --> No URI present. Default controller set.
DEBUG - 2016-06-20 14:01:48 --> Security Class Initialized
DEBUG - 2016-06-20 14:01:48 --> CRSF cookie Set
DEBUG - 2016-06-20 14:01:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:01:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:01:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0a4184d6e1384409aba3ff130166b0be', '114.91.131.17', '2016-06-20', '14:01:48', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5baea0cddd623f568fe4c505f0f75d8e55d500bc')
DEBUG - 2016-06-20 14:01:48 --> Total execution time: 0.0930
DEBUG - 2016-06-20 14:01:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402508
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:01:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:01:53 --> Security Class Initialized
DEBUG - 2016-06-20 14:01:53 --> CRSF cookie Set
DEBUG - 2016-06-20 14:01:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:01:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:01:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ccabacfddbbe420ba4d9dc75b1d0b30a', '114.91.131.17', '2016-06-20', '14:01:53', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5baea0cddd623f568fe4c505f0f75d8e55d500bc')
DEBUG - 2016-06-20 14:01:53 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-20 14:01:53 --> Total execution time: 0.1680
DEBUG - 2016-06-20 14:01:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402513
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:02:09 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:02:09 --> Security Class Initialized
DEBUG - 2016-06-20 14:02:09 --> CRSF cookie Set
DEBUG - 2016-06-20 14:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:02:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:02:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fdc945d49db4442aa20b0ffa28f29735', '114.91.131.17', '2016-06-20', '14:02:09', '120340235', '/admin/guest/edit/K05038', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5baea0cddd623f568fe4c505f0f75d8e55d500bc')
DEBUG - 2016-06-20 14:02:09 --> 修改客户信息：K05038
DEBUG - 2016-06-20 14:02:09 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05038' 
DEBUG - 2016-06-20 14:02:09 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05038' 
DEBUG - 2016-06-20 14:02:09 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-20 14:02:09 --> Total execution time: 0.1220
DEBUG - 2016-06-20 14:02:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402529
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:02:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:02:14 --> Security Class Initialized
DEBUG - 2016-06-20 14:02:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:02:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:02:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d652575c664740c6a527d6c48292d04a', '114.91.131.17', '2016-06-20', '14:02:14', '120340235', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5baea0cddd623f568fe4c505f0f75d8e55d500bc')
DEBUG - 2016-06-20 14:02:14 --> 保存客户信息
DEBUG - 2016-06-20 14:02:14 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05038', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05038'
DEBUG - 2016-06-20 14:02:14 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-20 14:02:14 --> Total execution time: 0.0910
DEBUG - 2016-06-20 14:02:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402534
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:03:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:03:31 --> Security Class Initialized
DEBUG - 2016-06-20 14:03:31 --> CRSF cookie Set
DEBUG - 2016-06-20 14:03:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:03:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:03:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('82726ab818354383aa5004c4939311c7', '114.91.131.17', '2016-06-20', '14:03:32', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5baea0cddd623f568fe4c505f0f75d8e55d500bc')
DEBUG - 2016-06-20 14:03:32 --> 查询订单
DEBUG - 2016-06-20 14:03:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 14:03:32 --> Total execution time: 0.2420
DEBUG - 2016-06-20 14:03:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402612
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:05:03 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:05:03 --> Security Class Initialized
DEBUG - 2016-06-20 14:05:03 --> CRSF cookie Set
DEBUG - 2016-06-20 14:05:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:05:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:05:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('653a2d2fd1c14e5bbcb310c91f340798', '114.91.131.17', '2016-06-20', '14:05:03', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5baea0cddd623f568fe4c505f0f75d8e55d500bc')
DEBUG - 2016-06-20 14:05:03 --> 查询订单
DEBUG - 2016-06-20 14:05:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 14:05:03 --> Total execution time: 0.0960
DEBUG - 2016-06-20 14:05:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402703
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:05:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:05:42 --> Security Class Initialized
DEBUG - 2016-06-20 14:05:42 --> CRSF cookie Set
DEBUG - 2016-06-20 14:05:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:05:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:05:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('55445fff366e4cb4b59744bb506fb9fc', '114.91.131.17', '2016-06-20', '14:05:43', '120340235', '/admin/order/index/f54c7bd08e3145af9dfeef5275407152', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5baea0cddd623f568fe4c505f0f75d8e55d500bc')
DEBUG - 2016-06-20 14:05:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:05:43 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='f54c7bd08e3145af9dfeef5275407152' order by create_date_time desc
DEBUG - 2016-06-20 14:05:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:05:43 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='f54c7bd08e3145af9dfeef5275407152'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:05:43 --> Total execution time: 0.1470
DEBUG - 2016-06-20 14:05:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402743
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:05:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:05:56 --> Security Class Initialized
DEBUG - 2016-06-20 14:05:56 --> CRSF cookie Set
DEBUG - 2016-06-20 14:05:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:05:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:05:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6838befac32e47d5b31653ce904bb10c', '114.91.131.17', '2016-06-20', '14:05:56', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5baea0cddd623f568fe4c505f0f75d8e55d500bc')
DEBUG - 2016-06-20 14:05:56 --> 查询待审核订单
DEBUG - 2016-06-20 14:05:56 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:05:56 --> Total execution time: 0.1530
DEBUG - 2016-06-20 14:05:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402756
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:06:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:06:01 --> Security Class Initialized
DEBUG - 2016-06-20 14:06:01 --> CRSF cookie Set
DEBUG - 2016-06-20 14:06:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:06:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:06:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('334b358ff3db42ac8cc97b8021165dd5', '114.91.131.17', '2016-06-20', '14:06:01', '120340235', '/admin/order/check/f54c7bd08e3145af9dfeef5275407152', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5baea0cddd623f568fe4c505f0f75d8e55d500bc')
DEBUG - 2016-06-20 14:06:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:06:01 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='f54c7bd08e3145af9dfeef5275407152' order by create_date_time desc
DEBUG - 2016-06-20 14:06:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:06:01 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='f54c7bd08e3145af9dfeef5275407152'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:06:01 --> Total execution time: 0.1110
DEBUG - 2016-06-20 14:06:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402761
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:06:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:06:07 --> Security Class Initialized
DEBUG - 2016-06-20 14:06:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:06:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:06:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('07919ae0762649afa17740ce390bfc12', '114.91.131.17', '2016-06-20', '14:06:08', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5baea0cddd623f568fe4c505f0f75d8e55d500bc')
DEBUG - 2016-06-20 14:06:08 --> 审核订单
DEBUG - 2016-06-20 14:06:08 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'f54c7bd08e3145af9dfeef5275407152'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:06:08 --> 过程调用语句：  execute USP_APSOS_outorder 'f54c7bd08e3145af9dfeef5275407152'
ERROR - 2016-06-20 14:06:12 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:06:12 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:06:12 --> Total execution time: 4.9783
DEBUG - 2016-06-20 14:06:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402772
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:06:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:06:13 --> Security Class Initialized
DEBUG - 2016-06-20 14:06:13 --> CRSF cookie Set
DEBUG - 2016-06-20 14:06:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:06:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:06:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('03bfb88aec6c47c6b90501d5bb2bc745', '114.91.131.17', '2016-06-20', '14:06:13', '120340235', '/admin/order/check/f54c7bd08e3145af9dfeef5275407152', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5baea0cddd623f568fe4c505f0f75d8e55d500bc')
DEBUG - 2016-06-20 14:06:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:06:13 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='f54c7bd08e3145af9dfeef5275407152' order by create_date_time desc
DEBUG - 2016-06-20 14:06:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:06:13 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='f54c7bd08e3145af9dfeef5275407152'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:06:13 --> Total execution time: 0.1040
DEBUG - 2016-06-20 14:06:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402773
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:06:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:06:49 --> Security Class Initialized
DEBUG - 2016-06-20 14:06:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:06:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:06:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9e528f62b0f74fe7bfdecdc3943bf80b', '114.91.131.17', '2016-06-20', '14:06:49', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5baea0cddd623f568fe4c505f0f75d8e55d500bc')
DEBUG - 2016-06-20 14:06:50 --> 审核订单
DEBUG - 2016-06-20 14:06:50 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'f54c7bd08e3145af9dfeef5275407152'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:06:50 --> 过程调用语句：  execute USP_APSOS_outorder 'f54c7bd08e3145af9dfeef5275407152'
ERROR - 2016-06-20 14:06:50 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:06:50 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:06:50 --> Total execution time: 0.8400
DEBUG - 2016-06-20 14:06:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402810
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:06:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:06:50 --> Security Class Initialized
DEBUG - 2016-06-20 14:06:50 --> CRSF cookie Set
DEBUG - 2016-06-20 14:06:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:06:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:06:50 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '5baea0cddd623f568fe4c505f0f75d8e55d500bc'
DEBUG - 2016-06-20 14:06:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6a3c741c9fc5457aaa9d11222109636c', '114.91.131.17', '2016-06-20', '14:06:50', '120340235', '/admin/order/check/f54c7bd08e3145af9dfeef5275407152', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:06:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:06:50 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='f54c7bd08e3145af9dfeef5275407152' order by create_date_time desc
DEBUG - 2016-06-20 14:06:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:06:50 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='f54c7bd08e3145af9dfeef5275407152'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:06:50 --> Total execution time: 0.0960
DEBUG - 2016-06-20 14:06:50 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('243f652617d38dc0a5cee843589969d8b794b4e8', '114.91.131.17', 1466402810, '__ci_last_regenerate|i:1466402810;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-20 14:06:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:06:58 --> Security Class Initialized
DEBUG - 2016-06-20 14:06:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:06:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:06:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c9391de3442c480c9770b4c6f7e7d008', '114.91.131.17', '2016-06-20', '14:06:58', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:06:58 --> 审核订单
DEBUG - 2016-06-20 14:06:58 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'f54c7bd08e3145af9dfeef5275407152'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:06:58 --> 过程调用语句：  execute USP_APSOS_outorder 'f54c7bd08e3145af9dfeef5275407152'
ERROR - 2016-06-20 14:06:58 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:06:58 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:06:58 --> Total execution time: 0.8140
DEBUG - 2016-06-20 14:06:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402818
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:06:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:06:58 --> Security Class Initialized
DEBUG - 2016-06-20 14:06:58 --> CRSF cookie Set
DEBUG - 2016-06-20 14:06:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:06:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:06:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7b4086ff409040c186b50036aef31ca6', '114.91.131.17', '2016-06-20', '14:06:58', '120340235', '/admin/order/check/f54c7bd08e3145af9dfeef5275407152', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:06:59 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:06:59 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='f54c7bd08e3145af9dfeef5275407152' order by create_date_time desc
DEBUG - 2016-06-20 14:06:59 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:06:59 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='f54c7bd08e3145af9dfeef5275407152'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:06:59 --> Total execution time: 0.1160
DEBUG - 2016-06-20 14:06:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402819
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:07:01 --> Security Class Initialized
DEBUG - 2016-06-20 14:07:01 --> CRSF cookie Set
DEBUG - 2016-06-20 14:07:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:07:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a39037236b0543f78385c27e2a637e06', '114.91.131.17', '2016-06-20', '14:07:01', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:07:01 --> 查询待审核订单
DEBUG - 2016-06-20 14:07:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:07:01 --> Total execution time: 0.0890
DEBUG - 2016-06-20 14:07:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402821
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:07:07 --> Security Class Initialized
DEBUG - 2016-06-20 14:07:07 --> CRSF cookie Set
DEBUG - 2016-06-20 14:07:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:07:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ccc059288af848b1b9491f7b7196f44e', '114.91.131.17', '2016-06-20', '14:07:07', '120340235', '/admin/order/check/f54c7bd08e3145af9dfeef5275407152', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:07:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:07:07 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='f54c7bd08e3145af9dfeef5275407152' order by create_date_time desc
DEBUG - 2016-06-20 14:07:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:07:07 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='f54c7bd08e3145af9dfeef5275407152'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:07:07 --> Total execution time: 0.0950
DEBUG - 2016-06-20 14:07:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402827
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:07:13 --> Security Class Initialized
DEBUG - 2016-06-20 14:07:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:07:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a57bb8624a6d42e3ba86f70631a5b282', '114.91.131.17', '2016-06-20', '14:07:13', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:07:13 --> 审核订单
DEBUG - 2016-06-20 14:07:13 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'f54c7bd08e3145af9dfeef5275407152'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:07:13 --> 过程调用语句：  execute USP_APSOS_outorder 'f54c7bd08e3145af9dfeef5275407152'
ERROR - 2016-06-20 14:07:13 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:07:13 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:07:13 --> Total execution time: 0.1180
DEBUG - 2016-06-20 14:07:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402833
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:07:14 --> Security Class Initialized
DEBUG - 2016-06-20 14:07:14 --> CRSF cookie Set
DEBUG - 2016-06-20 14:07:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:07:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1966e2e921954952a1c58464a44e8622', '114.91.131.17', '2016-06-20', '14:07:14', '120340235', '/admin/order/check/f54c7bd08e3145af9dfeef5275407152', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:07:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:07:14 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='f54c7bd08e3145af9dfeef5275407152' order by create_date_time desc
DEBUG - 2016-06-20 14:07:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:07:14 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='f54c7bd08e3145af9dfeef5275407152'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:07:14 --> Total execution time: 0.1200
DEBUG - 2016-06-20 14:07:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402834
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:07:18 --> Security Class Initialized
DEBUG - 2016-06-20 14:07:18 --> CRSF cookie Set
DEBUG - 2016-06-20 14:07:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:07:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bada2294d8074d17b2d491e635ce0803', '114.91.131.17', '2016-06-20', '14:07:18', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:07:18 --> 查询待审核订单
DEBUG - 2016-06-20 14:07:18 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:07:18 --> Total execution time: 0.0860
DEBUG - 2016-06-20 14:07:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402838
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:07:22 --> Security Class Initialized
DEBUG - 2016-06-20 14:07:22 --> CRSF cookie Set
DEBUG - 2016-06-20 14:07:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:07:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('af9a32056db545bb9e85a3eee639481a', '114.91.131.17', '2016-06-20', '14:07:22', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:07:22 --> 查询待审核订单
DEBUG - 2016-06-20 14:07:22 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:07:22 --> Total execution time: 0.0950
DEBUG - 2016-06-20 14:07:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402842
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:07:23 --> Security Class Initialized
DEBUG - 2016-06-20 14:07:23 --> CRSF cookie Set
DEBUG - 2016-06-20 14:07:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:07:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d4c7a1b5b4424588877fc4b19e9d0c2c', '114.91.131.17', '2016-06-20', '14:07:23', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:07:23 --> 查询订单
DEBUG - 2016-06-20 14:07:23 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 14:07:23 --> Total execution time: 0.0840
DEBUG - 2016-06-20 14:07:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402843
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:07:27 --> Security Class Initialized
DEBUG - 2016-06-20 14:07:27 --> CRSF cookie Set
DEBUG - 2016-06-20 14:07:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:07:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3eabc76ea2ba47e9a3a4f4f50ed06dfe', '114.91.131.17', '2016-06-20', '14:07:27', '120340235', '/admin/order/index/f54c7bd08e3145af9dfeef5275407152', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:07:27 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:07:27 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='f54c7bd08e3145af9dfeef5275407152' order by create_date_time desc
DEBUG - 2016-06-20 14:07:27 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='f54c7bd08e3145af9dfeef5275407152'
DEBUG - 2016-06-20 14:07:27 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='f54c7bd08e3145af9dfeef5275407152'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:07:27 --> Total execution time: 0.1040
DEBUG - 2016-06-20 14:07:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402847
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:07:55 --> Security Class Initialized
DEBUG - 2016-06-20 14:07:55 --> CRSF cookie Set
DEBUG - 2016-06-20 14:07:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:07:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:07:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d82a506614bc424190a08d522c505e30', '114.91.131.17', '2016-06-20', '14:07:55', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:07:55 --> 查询订单
DEBUG - 2016-06-20 14:07:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 14:07:55 --> Total execution time: 0.1210
DEBUG - 2016-06-20 14:07:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402875
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:09:05 --> Security Class Initialized
DEBUG - 2016-06-20 14:09:05 --> CRSF cookie Set
DEBUG - 2016-06-20 14:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:09:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('44436ac778014ee2894fab4876829517', '114.91.131.17', '2016-06-20', '14:09:05', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:09:05 --> 查询订单
DEBUG - 2016-06-20 14:09:05 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 14:09:05 --> Total execution time: 0.0980
DEBUG - 2016-06-20 14:09:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402945
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:09:07 --> Security Class Initialized
DEBUG - 2016-06-20 14:09:07 --> CRSF cookie Set
DEBUG - 2016-06-20 14:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:09:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6e3090e34fbd4044917ac33d53707b68', '114.91.131.17', '2016-06-20', '14:09:07', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:09:07 --> 查询订单
DEBUG - 2016-06-20 14:09:07 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 14:09:07 --> Total execution time: 0.0900
DEBUG - 2016-06-20 14:09:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402947
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:09:13 --> Security Class Initialized
DEBUG - 2016-06-20 14:09:13 --> CRSF cookie Set
DEBUG - 2016-06-20 14:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:09:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('df757a112a4441b3962ba816c10dc815', '114.91.131.17', '2016-06-20', '14:09:13', '120340235', '/admin/order/index/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:09:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:09:13 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:09:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:09:13 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:09:13 --> Total execution time: 0.1030
DEBUG - 2016-06-20 14:09:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402953
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:09:20 --> Security Class Initialized
DEBUG - 2016-06-20 14:09:20 --> CRSF cookie Set
DEBUG - 2016-06-20 14:09:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:09:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9e77041d23884900a24ffc04a928107d', '114.91.131.17', '2016-06-20', '14:09:20', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:09:20 --> 查询待审核订单
DEBUG - 2016-06-20 14:09:20 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:09:20 --> Total execution time: 0.0800
DEBUG - 2016-06-20 14:09:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402960
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:09:22 --> Security Class Initialized
DEBUG - 2016-06-20 14:09:22 --> CRSF cookie Set
DEBUG - 2016-06-20 14:09:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:09:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e5cc01a8e1344a2f94f6363dc414340c', '114.91.131.17', '2016-06-20', '14:09:22', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:09:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:09:22 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:09:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:09:22 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:09:22 --> Total execution time: 0.1100
DEBUG - 2016-06-20 14:09:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402962
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:09:29 --> Security Class Initialized
DEBUG - 2016-06-20 14:09:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:09:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c0ffcaa6d3d94da3b4529433c8d16239', '114.91.131.17', '2016-06-20', '14:09:29', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:09:29 --> 审核订单
DEBUG - 2016-06-20 14:09:29 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:09:29 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:09:29 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:09:29 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:09:29 --> Total execution time: 0.1260
DEBUG - 2016-06-20 14:09:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402969
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:09:29 --> Security Class Initialized
DEBUG - 2016-06-20 14:09:29 --> CRSF cookie Set
DEBUG - 2016-06-20 14:09:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:09:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('62dddd717078440cbd8a982bbf0345fd', '114.91.131.17', '2016-06-20', '14:09:29', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:09:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:09:29 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:09:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:09:29 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:09:29 --> Total execution time: 0.1610
DEBUG - 2016-06-20 14:09:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402969
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:09:31 --> Security Class Initialized
DEBUG - 2016-06-20 14:09:31 --> CRSF cookie Set
DEBUG - 2016-06-20 14:09:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:09:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c197738e3c354d818c15142675daf1a9', '114.91.131.17', '2016-06-20', '14:09:31', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:09:31 --> 查询待审核订单
DEBUG - 2016-06-20 14:09:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:09:31 --> Total execution time: 0.0960
DEBUG - 2016-06-20 14:09:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402971
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:09:33 --> Security Class Initialized
DEBUG - 2016-06-20 14:09:33 --> CRSF cookie Set
DEBUG - 2016-06-20 14:09:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:09:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f87029896ac84627a7c07202cb95389a', '114.91.131.17', '2016-06-20', '14:09:33', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:09:33 --> 查询待审核订单
DEBUG - 2016-06-20 14:09:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:09:33 --> Total execution time: 0.0970
DEBUG - 2016-06-20 14:09:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402973
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:09:43 --> Security Class Initialized
DEBUG - 2016-06-20 14:09:43 --> CRSF cookie Set
DEBUG - 2016-06-20 14:09:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:09:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dbe8e06007994419be539f84c1665d4b', '114.91.131.17', '2016-06-20', '14:09:43', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:09:43 --> 查询订单
DEBUG - 2016-06-20 14:09:43 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 14:09:43 --> Total execution time: 0.1020
DEBUG - 2016-06-20 14:09:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402983
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:09:47 --> Security Class Initialized
DEBUG - 2016-06-20 14:09:47 --> CRSF cookie Set
DEBUG - 2016-06-20 14:09:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:09:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:09:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9f6fed694c3846f298c5e678d8c02d17', '114.91.131.17', '2016-06-20', '14:09:47', '120340235', '/admin/order/index/e2fe562068924354864325b5fbf32b9a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:09:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 14:09:47 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e2fe562068924354864325b5fbf32b9a' order by create_date_time desc
DEBUG - 2016-06-20 14:09:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 14:09:47 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e2fe562068924354864325b5fbf32b9a'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:09:47 --> Total execution time: 0.1590
DEBUG - 2016-06-20 14:09:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466402987
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:09 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:10:09 --> Security Class Initialized
DEBUG - 2016-06-20 14:10:09 --> CRSF cookie Set
DEBUG - 2016-06-20 14:10:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:10:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3325fc0ee0a3419e9178119e5b907a3f', '114.91.131.17', '2016-06-20', '14:10:09', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:10:09 --> 查询待审核订单
DEBUG - 2016-06-20 14:10:09 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:10:09 --> Total execution time: 0.0940
DEBUG - 2016-06-20 14:10:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403009
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:10:11 --> Security Class Initialized
DEBUG - 2016-06-20 14:10:11 --> CRSF cookie Set
DEBUG - 2016-06-20 14:10:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:10:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0e7a2ad43aae4b6ebf76a2e7df193b9b', '114.91.131.17', '2016-06-20', '14:10:11', '120340235', '/admin/order/check/e2fe562068924354864325b5fbf32b9a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:10:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 14:10:11 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e2fe562068924354864325b5fbf32b9a' order by create_date_time desc
DEBUG - 2016-06-20 14:10:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 14:10:11 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e2fe562068924354864325b5fbf32b9a'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:10:11 --> Total execution time: 0.1020
DEBUG - 2016-06-20 14:10:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403011
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:10:14 --> Security Class Initialized
DEBUG - 2016-06-20 14:10:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:10:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3e45ef014f2a4b78860d55031aa894e4', '114.91.131.17', '2016-06-20', '14:10:14', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:10:14 --> 审核订单
DEBUG - 2016-06-20 14:10:14 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e2fe562068924354864325b5fbf32b9a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:10:14 --> 过程调用语句：  execute USP_APSOS_outorder 'e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 14:10:15 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'e2fe562068924354864325b5fbf32b9a', '2', '', 'f0a71f1417aa4246a576a3293a1f7788', '2016-06-20 14:10:15')
DEBUG - 2016-06-20 14:10:15 --> 该订单状态更新成功:2
DEBUG - 2016-06-20 14:10:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 14:10:15 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05055'
DEBUG - 2016-06-20 14:10:15 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-20 14:10:15 --> Total execution time: 0.6990
DEBUG - 2016-06-20 14:10:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403015
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:10:15 --> Security Class Initialized
DEBUG - 2016-06-20 14:10:15 --> CRSF cookie Set
DEBUG - 2016-06-20 14:10:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:10:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('55c5bd9f4ee342ecbd9609ca865a195a', '114.91.131.17', '2016-06-20', '14:10:15', '120340235', '/admin/order/check/e2fe562068924354864325b5fbf32b9a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:10:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 14:10:15 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e2fe562068924354864325b5fbf32b9a' order by create_date_time desc
DEBUG - 2016-06-20 14:10:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 14:10:15 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e2fe562068924354864325b5fbf32b9a'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:10:15 --> Total execution time: 0.0840
DEBUG - 2016-06-20 14:10:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403015
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:10:31 --> Security Class Initialized
DEBUG - 2016-06-20 14:10:31 --> CRSF cookie Set
DEBUG - 2016-06-20 14:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:10:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d8245f8ee6ec4c6faa0057c814cb0ed7', '114.91.131.17', '2016-06-20', '14:10:31', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:10:31 --> 查询待发货订单
DEBUG - 2016-06-20 14:10:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-20 14:10:31 --> Total execution time: 0.1150
DEBUG - 2016-06-20 14:10:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403031
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:10:33 --> Security Class Initialized
DEBUG - 2016-06-20 14:10:33 --> CRSF cookie Set
DEBUG - 2016-06-20 14:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:10:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0b31800c9a7d487188f5af28656e0e99', '114.91.131.17', '2016-06-20', '14:10:33', '120340235', '/admin/order/traffic/e2fe562068924354864325b5fbf32b9a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:10:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 14:10:33 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e2fe562068924354864325b5fbf32b9a' order by create_date_time desc
DEBUG - 2016-06-20 14:10:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 14:10:33 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e2fe562068924354864325b5fbf32b9a'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:10:34 --> Total execution time: 0.1130
DEBUG - 2016-06-20 14:10:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403034
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:10:38 --> Security Class Initialized
DEBUG - 2016-06-20 14:10:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:10:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('31cb3e7acf9748ea9f98c609d32a5eec', '114.91.131.17', '2016-06-20', '14:10:38', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:10:38 --> 审核订单
DEBUG - 2016-06-20 14:10:38 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = 'e2fe562068924354864325b5fbf32b9a'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-20 14:10:38 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'e2fe562068924354864325b5fbf32b9a', '3', '', '7d509816804544a5a4606634454664c2', '2016-06-20 14:10:38')
DEBUG - 2016-06-20 14:10:38 --> 该订单状态更新成功:3
DEBUG - 2016-06-20 14:10:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 14:10:38 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05055'
DEBUG - 2016-06-20 14:10:39 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-20 14:10:39 --> Total execution time: 0.9401
DEBUG - 2016-06-20 14:10:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403039
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:39 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:10:39 --> Security Class Initialized
DEBUG - 2016-06-20 14:10:39 --> CRSF cookie Set
DEBUG - 2016-06-20 14:10:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:10:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e523acf17aa5454da6d87ab186034eb6', '114.91.131.17', '2016-06-20', '14:10:39', '120340235', '/admin/order/traffic/e2fe562068924354864325b5fbf32b9a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:10:39 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 14:10:39 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e2fe562068924354864325b5fbf32b9a' order by create_date_time desc
DEBUG - 2016-06-20 14:10:39 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-20 14:10:39 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e2fe562068924354864325b5fbf32b9a'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:10:39 --> Total execution time: 0.0850
DEBUG - 2016-06-20 14:10:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403039
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:10:45 --> Security Class Initialized
DEBUG - 2016-06-20 14:10:45 --> CRSF cookie Set
DEBUG - 2016-06-20 14:10:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:10:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('aa08715d2473429fa70f8e9806a5ec53', '114.91.131.17', '2016-06-20', '14:10:45', '120340235', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:10:45 --> 查询需求订单
DEBUG - 2016-06-20 14:10:45 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-06-20 14:10:45 --> Total execution time: 0.1690
DEBUG - 2016-06-20 14:10:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403045
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:10:47 --> Security Class Initialized
DEBUG - 2016-06-20 14:10:47 --> CRSF cookie Set
DEBUG - 2016-06-20 14:10:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:10:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7bba77f30d2847b6b28e58e2007972d0', '114.91.131.17', '2016-06-20', '14:10:47', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:10:47 --> 查询订单
DEBUG - 2016-06-20 14:10:47 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 14:10:47 --> Total execution time: 0.0910
DEBUG - 2016-06-20 14:10:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403047
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:10:48 --> Security Class Initialized
DEBUG - 2016-06-20 14:10:48 --> CRSF cookie Set
DEBUG - 2016-06-20 14:10:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:10:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a1b1057441c2446b8a3725fd6250108a', '114.91.131.17', '2016-06-20', '14:10:48', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:10:48 --> 查询待审核订单
DEBUG - 2016-06-20 14:10:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:10:48 --> Total execution time: 0.0990
DEBUG - 2016-06-20 14:10:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403048
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:10:51 --> Security Class Initialized
DEBUG - 2016-06-20 14:10:51 --> CRSF cookie Set
DEBUG - 2016-06-20 14:10:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:10:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:10:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8edad1fecf7b44609f955cec98609eaa', '114.91.131.17', '2016-06-20', '14:10:51', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:10:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:10:51 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:10:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:10:51 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:10:52 --> Total execution time: 0.0980
DEBUG - 2016-06-20 14:10:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403052
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:11:01 --> Security Class Initialized
DEBUG - 2016-06-20 14:11:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:11:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e26b6a2d8d5b4ba89937ef852626e1c1', '114.91.131.17', '2016-06-20', '14:11:02', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:11:02 --> 审核订单
DEBUG - 2016-06-20 14:11:02 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:11:02 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:11:02 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:11:02 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:11:02 --> Total execution time: 0.2050
DEBUG - 2016-06-20 14:11:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403062
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:11:02 --> Security Class Initialized
DEBUG - 2016-06-20 14:11:02 --> CRSF cookie Set
DEBUG - 2016-06-20 14:11:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:11:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8ed41ce4984e44d8b4af079eca01d17e', '114.91.131.17', '2016-06-20', '14:11:02', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:11:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:11:02 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:11:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:11:02 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:11:03 --> Total execution time: 0.1030
DEBUG - 2016-06-20 14:11:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403063
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:11:05 --> Security Class Initialized
DEBUG - 2016-06-20 14:11:05 --> CRSF cookie Set
DEBUG - 2016-06-20 14:11:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:11:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d17ea2edf04240fc9e5d5f7f919e12cb', '114.91.131.17', '2016-06-20', '14:11:05', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93?uuid=da40b2559bfa443faedc2ebd1e55bb93&consignee_name=%E4%BD%95%E5%BB%BA%E5%8D%8E&telphone=13711202870&address=%E5%B9%BF%E5%B7%9E%E5%B8%82%E5%B9%BF%E5%9B%AD%E4%B8%9C%E8%B7%AF%E9%87%91%E9%B8%A1%E5%B2%AD3%E5%8F%B7%E5%A4%A7%E9%97%A8%E4%B8%9C%E9%9D%A2C4', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:11:05 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:11:05 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:11:05 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:11:05 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:11:05 --> Total execution time: 0.1040
DEBUG - 2016-06-20 14:11:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403065
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:11:44 --> Security Class Initialized
DEBUG - 2016-06-20 14:11:44 --> CRSF cookie Set
DEBUG - 2016-06-20 14:11:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:11:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a52c6eb1fdc14573a8bf7b8c835a8b2f', '114.91.131.17', '2016-06-20', '14:11:44', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:11:44 --> 查询待审核订单
DEBUG - 2016-06-20 14:11:44 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:11:44 --> Total execution time: 0.0900
DEBUG - 2016-06-20 14:11:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403104
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:11:45 --> Security Class Initialized
DEBUG - 2016-06-20 14:11:45 --> CRSF cookie Set
DEBUG - 2016-06-20 14:11:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:11:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9b61205ed5574f86ba3e77d37ded115c', '114.91.131.17', '2016-06-20', '14:11:45', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:11:45 --> 查询待审核订单
DEBUG - 2016-06-20 14:11:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:11:45 --> Total execution time: 0.0860
DEBUG - 2016-06-20 14:11:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403105
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:11:46 --> Security Class Initialized
DEBUG - 2016-06-20 14:11:46 --> CRSF cookie Set
DEBUG - 2016-06-20 14:11:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:11:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8d3fa3daa4944f76a69881c89fed49a7', '114.91.131.17', '2016-06-20', '14:11:46', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:11:46 --> 查询待审核订单
DEBUG - 2016-06-20 14:11:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:11:46 --> Total execution time: 0.0880
DEBUG - 2016-06-20 14:11:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403106
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:11:47 --> Security Class Initialized
DEBUG - 2016-06-20 14:11:47 --> CRSF cookie Set
DEBUG - 2016-06-20 14:11:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:11:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:11:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c0ee8b8b87794fdf8ec3bda389bcc6f4', '114.91.131.17', '2016-06-20', '14:11:47', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:11:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:11:47 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:11:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:11:47 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:11:47 --> Total execution time: 0.1020
DEBUG - 2016-06-20 14:11:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403107
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:12:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:12:52 --> Security Class Initialized
DEBUG - 2016-06-20 14:12:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:12:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:12:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d41247a49e2a43ebb61cbba11e91d3b8', '114.91.131.17', '2016-06-20', '14:12:52', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '243f652617d38dc0a5cee843589969d8b794b4e8')
DEBUG - 2016-06-20 14:12:52 --> 审核订单
DEBUG - 2016-06-20 14:12:52 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:12:52 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:12:52 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:12:52 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:12:52 --> Total execution time: 0.1200
DEBUG - 2016-06-20 14:12:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403172
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:12:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:12:52 --> Security Class Initialized
DEBUG - 2016-06-20 14:12:52 --> CRSF cookie Set
DEBUG - 2016-06-20 14:12:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:12:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:12:52 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '243f652617d38dc0a5cee843589969d8b794b4e8'
DEBUG - 2016-06-20 14:12:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dfda68b53cc34f879b50dd2e49309e1c', '114.91.131.17', '2016-06-20', '14:12:52', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'db430b760f3d92e69879c54d0e8e451d3991a8a0')
DEBUG - 2016-06-20 14:12:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:12:53 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:12:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:12:53 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:12:53 --> Total execution time: 0.7290
DEBUG - 2016-06-20 14:12:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('db430b760f3d92e69879c54d0e8e451d3991a8a0', '114.91.131.17', 1466403173, '__ci_last_regenerate|i:1466403172;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-20 14:12:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:12:57 --> Security Class Initialized
DEBUG - 2016-06-20 14:12:57 --> CRSF cookie Set
DEBUG - 2016-06-20 14:12:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:12:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:12:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('251c8c85f07c4f78856bfa4f612d0f20', '114.91.131.17', '2016-06-20', '14:12:57', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93?uuid=da40b2559bfa443faedc2ebd1e55bb93&consignee_name=%E5%B9%BF%E5%B7%9E%E6%B7%BB%E9%92%9C&telphone=13711202870&address=%E5%B9%BF%E5%B7%9E%E5%B8%82%E5%B9%BF%E5%9B%AD%E4%B8%9C%E8%B7%AF%E9%87%91%E9%B8%A1%E5%B2%AD3%E5%8F%B7%E5%A4%A7%E9%97%A8%E4%B8%9C%E9%9D%A2c4', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'db430b760f3d92e69879c54d0e8e451d3991a8a0')
DEBUG - 2016-06-20 14:12:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:12:57 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:12:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:12:57 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:12:57 --> Total execution time: 0.1090
DEBUG - 2016-06-20 14:12:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403177
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:13:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:13:06 --> Security Class Initialized
DEBUG - 2016-06-20 14:13:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:13:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:13:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('35a69c449a9840ff8380d16f90321663', '114.91.131.17', '2016-06-20', '14:13:06', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'db430b760f3d92e69879c54d0e8e451d3991a8a0')
DEBUG - 2016-06-20 14:13:06 --> 审核订单
DEBUG - 2016-06-20 14:13:06 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:13:06 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:13:06 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:13:06 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:13:06 --> Total execution time: 0.1600
DEBUG - 2016-06-20 14:13:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403186
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:13:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:13:06 --> Security Class Initialized
DEBUG - 2016-06-20 14:13:06 --> CRSF cookie Set
DEBUG - 2016-06-20 14:13:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:13:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:13:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f9d76bae84c24c7e87530345d1aea8a7', '114.91.131.17', '2016-06-20', '14:13:06', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93?uuid=da40b2559bfa443faedc2ebd1e55bb93&consignee_name=%E5%B9%BF%E5%B7%9E%E6%B7%BB%E9%92%9C&telphone=13711202870&address=%E5%B9%BF%E5%B7%9E%E5%B8%82%E5%B9%BF%E5%9B%AD%E4%B8%9C%E8%B7%AF%E9%87%91%E9%B8%A1%E5%B2%AD3%E5%8F%B7%E5%A4%A7%E9%97%A8%E4%B8%9C%E9%9D%A2c4', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'db430b760f3d92e69879c54d0e8e451d3991a8a0')
DEBUG - 2016-06-20 14:13:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:13:06 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:13:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:13:06 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:13:06 --> Total execution time: 0.0950
DEBUG - 2016-06-20 14:13:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403186
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:13:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:13:13 --> Security Class Initialized
DEBUG - 2016-06-20 14:13:13 --> CRSF cookie Set
DEBUG - 2016-06-20 14:13:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:13:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:13:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('28f631184eb34aee98ba30560949e365', '114.91.131.17', '2016-06-20', '14:13:13', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'db430b760f3d92e69879c54d0e8e451d3991a8a0')
DEBUG - 2016-06-20 14:13:13 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-20 14:13:13 --> Total execution time: 0.0800
DEBUG - 2016-06-20 14:13:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403193
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:13:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:13:31 --> Security Class Initialized
DEBUG - 2016-06-20 14:13:31 --> CRSF cookie Set
DEBUG - 2016-06-20 14:13:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:13:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:13:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9d09658c4dad44cb964adb6fcfc7a304', '114.91.131.17', '2016-06-20', '14:13:31', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'db430b760f3d92e69879c54d0e8e451d3991a8a0')
DEBUG - 2016-06-20 14:13:31 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-20 14:13:31 --> Total execution time: 0.0860
DEBUG - 2016-06-20 14:13:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403211
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:13:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:13:49 --> Security Class Initialized
DEBUG - 2016-06-20 14:13:49 --> CRSF cookie Set
DEBUG - 2016-06-20 14:13:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:13:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:13:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('56eaac2c5cf940d6b09fa091967f17ae', '114.91.131.17', '2016-06-20', '14:13:49', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'db430b760f3d92e69879c54d0e8e451d3991a8a0')
DEBUG - 2016-06-20 14:13:49 --> 查询待审核订单
DEBUG - 2016-06-20 14:13:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:13:49 --> Total execution time: 0.1030
DEBUG - 2016-06-20 14:13:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403229
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:13:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:13:51 --> Security Class Initialized
DEBUG - 2016-06-20 14:13:51 --> CRSF cookie Set
DEBUG - 2016-06-20 14:13:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:13:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:13:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('591197331dd2472ebdf9e22d47f6ae98', '114.91.131.17', '2016-06-20', '14:13:51', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'db430b760f3d92e69879c54d0e8e451d3991a8a0')
DEBUG - 2016-06-20 14:13:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:13:51 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:13:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:13:51 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:13:51 --> Total execution time: 0.0990
DEBUG - 2016-06-20 14:13:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403231
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:14:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:14:07 --> Security Class Initialized
DEBUG - 2016-06-20 14:14:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:14:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:14:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8f24b9c4f34c4aa1b877c6b43ac24366', '114.91.131.17', '2016-06-20', '14:14:07', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'db430b760f3d92e69879c54d0e8e451d3991a8a0')
DEBUG - 2016-06-20 14:14:07 --> 审核订单
DEBUG - 2016-06-20 14:14:07 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:14:07 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:14:07 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:14:07 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:14:07 --> Total execution time: 0.8290
DEBUG - 2016-06-20 14:14:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403247
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:14:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:14:07 --> Security Class Initialized
DEBUG - 2016-06-20 14:14:07 --> CRSF cookie Set
DEBUG - 2016-06-20 14:14:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:14:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:14:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c6f06070d10c4d18be2de3c85f040b3b', '114.91.131.17', '2016-06-20', '14:14:07', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'db430b760f3d92e69879c54d0e8e451d3991a8a0')
DEBUG - 2016-06-20 14:14:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:14:07 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:14:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:14:07 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:14:07 --> Total execution time: 0.0870
DEBUG - 2016-06-20 14:14:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403247
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:19:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:19:22 --> Security Class Initialized
DEBUG - 2016-06-20 14:19:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:19:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:19:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('05866d49b04a477b9f8c2e09c9ac4524', '114.91.131.17', '2016-06-20', '14:19:22', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'db430b760f3d92e69879c54d0e8e451d3991a8a0')
DEBUG - 2016-06-20 14:19:22 --> 审核订单
DEBUG - 2016-06-20 14:19:22 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:19:22 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:19:23 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:19:23 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:19:23 --> Total execution time: 0.7750
DEBUG - 2016-06-20 14:19:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403563
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:19:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:19:23 --> Security Class Initialized
DEBUG - 2016-06-20 14:19:23 --> CRSF cookie Set
DEBUG - 2016-06-20 14:19:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:19:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:19:23 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'db430b760f3d92e69879c54d0e8e451d3991a8a0'
DEBUG - 2016-06-20 14:19:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d6de56faec214363923d2bf905e00cb9', '114.91.131.17', '2016-06-20', '14:19:23', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:19:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:19:23 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:19:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:19:23 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:19:23 --> Total execution time: 0.0900
DEBUG - 2016-06-20 14:19:23 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a5f4291c8b8333ffb90ec904c0edacbd3e72c021', '114.91.131.17', 1466403563, '__ci_last_regenerate|i:1466403563;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-20 14:20:12 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:12 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:12 --> CRSF cookie Set
DEBUG - 2016-06-20 14:20:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3751e6b8e81a4fe1b07600bf134f36fe', '114.91.131.17', '2016-06-20', '14:20:12', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:12 --> 查询待审核订单
DEBUG - 2016-06-20 14:20:12 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:20:12 --> Total execution time: 0.0890
DEBUG - 2016-06-20 14:20:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403612
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:13 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:13 --> CRSF cookie Set
DEBUG - 2016-06-20 14:20:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f739feb9e5154f7a9252da644d09fb8c', '114.91.131.17', '2016-06-20', '14:20:13', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:13 --> 查询待审核订单
DEBUG - 2016-06-20 14:20:13 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:20:13 --> Total execution time: 0.0930
DEBUG - 2016-06-20 14:20:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403613
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:14 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:14 --> CRSF cookie Set
DEBUG - 2016-06-20 14:20:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('870e48015d4a424396de3936f2760651', '114.91.131.17', '2016-06-20', '14:20:14', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:14 --> 查询待审核订单
DEBUG - 2016-06-20 14:20:14 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:20:14 --> Total execution time: 0.0850
DEBUG - 2016-06-20 14:20:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403614
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:15 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:15 --> CRSF cookie Set
DEBUG - 2016-06-20 14:20:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('30cdeb5706a44263b84a972a7d4c9262', '114.91.131.17', '2016-06-20', '14:20:15', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:15 --> 查询待审核订单
DEBUG - 2016-06-20 14:20:15 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:20:15 --> Total execution time: 0.1010
DEBUG - 2016-06-20 14:20:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403615
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:20 --> No URI present. Default controller set.
DEBUG - 2016-06-20 14:20:20 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:20 --> CRSF cookie Set
DEBUG - 2016-06-20 14:20:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a4834c653a1d45398c6c93e6b21704ce', '114.91.131.17', '2016-06-20', '14:20:20', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:20 --> Total execution time: 0.0770
DEBUG - 2016-06-20 14:20:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403620
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:23 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:23 --> CRSF cookie Set
DEBUG - 2016-06-20 14:20:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bd8ae79d77204252910d92424ebb2eb5', '114.91.131.17', '2016-06-20', '14:20:23', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:23 --> 查询待审核订单
DEBUG - 2016-06-20 14:20:23 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:20:23 --> Total execution time: 0.1130
DEBUG - 2016-06-20 14:20:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403623
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:23 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:23 --> CRSF cookie Set
DEBUG - 2016-06-20 14:20:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('810038f0240f4bf585aaf3fbd9dc968d', '114.91.131.17', '2016-06-20', '14:20:23', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:23 --> 查询待审核订单
DEBUG - 2016-06-20 14:20:23 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:20:23 --> Total execution time: 0.0850
DEBUG - 2016-06-20 14:20:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403623
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:25 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:25 --> CRSF cookie Set
DEBUG - 2016-06-20 14:20:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a2d5c6901af443408a3a2e35036d6b02', '114.91.131.17', '2016-06-20', '14:20:25', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:20:25 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:20:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:20:25 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:20:25 --> Total execution time: 0.0960
DEBUG - 2016-06-20 14:20:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403625
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:31 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d166dae06925411b8bc2fa3228f9c56f', '114.91.131.17', '2016-06-20', '14:20:31', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:31 --> 审核订单
DEBUG - 2016-06-20 14:20:31 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:20:31 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:20:31 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:20:31 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:20:31 --> Total execution time: 0.1410
DEBUG - 2016-06-20 14:20:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403631
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:32 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:32 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:32 --> CRSF cookie Set
DEBUG - 2016-06-20 14:20:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('305daca38a4749b2956aa80c930fd465', '114.91.131.17', '2016-06-20', '14:20:32', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:32 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:20:32 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:20:32 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:20:32 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:20:32 --> Total execution time: 0.0950
DEBUG - 2016-06-20 14:20:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403632
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:44 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4543abd4a0234c90972b97ffead4da5c', '114.91.131.17', '2016-06-20', '14:20:44', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:44 --> 审核订单
DEBUG - 2016-06-20 14:20:44 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:20:44 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:20:45 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:20:45 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:20:45 --> Total execution time: 0.7410
DEBUG - 2016-06-20 14:20:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403645
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:45 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:45 --> CRSF cookie Set
DEBUG - 2016-06-20 14:20:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e0f900905a7a41c288ad7388c81e9103', '114.91.131.17', '2016-06-20', '14:20:45', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:20:45 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:20:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:20:45 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:20:45 --> Total execution time: 0.1020
DEBUG - 2016-06-20 14:20:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403645
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:53 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('16ca8b0b50a94906a7ead7d29bf0842b', '114.91.131.17', '2016-06-20', '14:20:53', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:53 --> 审核订单
DEBUG - 2016-06-20 14:20:53 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:20:53 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:20:54 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:20:54 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:20:54 --> Total execution time: 0.7610
DEBUG - 2016-06-20 14:20:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403654
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:20:54 --> Security Class Initialized
DEBUG - 2016-06-20 14:20:54 --> CRSF cookie Set
DEBUG - 2016-06-20 14:20:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:20:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:20:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('173b84f07ad949488bc30c69c817b205', '114.91.131.17', '2016-06-20', '14:20:54', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:20:54 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:20:54 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:20:54 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:20:54 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:20:54 --> Total execution time: 0.1180
DEBUG - 2016-06-20 14:20:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403654
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:21:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:21:18 --> No URI present. Default controller set.
DEBUG - 2016-06-20 14:21:18 --> Security Class Initialized
DEBUG - 2016-06-20 14:21:18 --> CRSF cookie Set
DEBUG - 2016-06-20 14:21:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:21:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:21:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c51e4dd8531a4485a74201d89190ee46', '114.91.131.17', '2016-06-20', '14:21:18', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:21:18 --> Total execution time: 0.0840
DEBUG - 2016-06-20 14:21:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403678
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:21:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:21:47 --> Security Class Initialized
DEBUG - 2016-06-20 14:21:47 --> CRSF cookie Set
DEBUG - 2016-06-20 14:21:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:21:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:21:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d12ff7cfee6d46819abf2d8e51c434d6', '114.91.131.17', '2016-06-20', '14:21:47', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:21:47 --> 查询订单
DEBUG - 2016-06-20 14:21:47 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 14:21:47 --> Total execution time: 0.0820
DEBUG - 2016-06-20 14:21:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403707
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:21:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:21:51 --> Security Class Initialized
DEBUG - 2016-06-20 14:21:51 --> CRSF cookie Set
DEBUG - 2016-06-20 14:21:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:21:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:21:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('781d6b28410042b5a88326c5866e17dd', '114.91.131.17', '2016-06-20', '14:21:51', '120340235', '/admin/order/index/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:21:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:21:51 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:21:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:21:51 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:21:51 --> Total execution time: 0.0940
DEBUG - 2016-06-20 14:21:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403711
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:22:01 --> Security Class Initialized
DEBUG - 2016-06-20 14:22:01 --> CRSF cookie Set
DEBUG - 2016-06-20 14:22:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:22:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('71be03bbd5764409925ee953172f17e1', '114.91.131.17', '2016-06-20', '14:22:01', '120340235', '/admin/order/index/da40b2559bfa443faedc2ebd1e55bb93?uuid=da40b2559bfa443faedc2ebd1e55bb93&consignee_name=%E5%B9%BF%E5%B7%9E%E6%B7%BB%E9%92%9C&telphone=13711202870&address=%E5%B9%BF%E5%B7%9E%E5%B8%82%E5%B9%BF%E5%9B%AD%E4%B8%9C%E8%B7%AF%E9%87%91%E9%B8%A1%E5%B2%AD3%E5%8F%B7%E5%A4%A7%E9%97%A8%E4%B8%9C%E9%9D%A2c4', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:22:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:22:01 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:22:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:22:01 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:22:02 --> Total execution time: 0.1250
DEBUG - 2016-06-20 14:22:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403722
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:22:10 --> Security Class Initialized
DEBUG - 2016-06-20 14:22:10 --> CRSF cookie Set
DEBUG - 2016-06-20 14:22:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:22:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bbbb598845d24fa09efebcc52fcf1704', '114.91.131.17', '2016-06-20', '14:22:10', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:22:10 --> 查询订单
DEBUG - 2016-06-20 14:22:10 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 14:22:10 --> Total execution time: 0.0870
DEBUG - 2016-06-20 14:22:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403730
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:22:11 --> Security Class Initialized
DEBUG - 2016-06-20 14:22:11 --> CRSF cookie Set
DEBUG - 2016-06-20 14:22:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:22:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('23cbdbc1b90d45ab80477ac493836d07', '114.91.131.17', '2016-06-20', '14:22:12', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:22:12 --> 查询订单
DEBUG - 2016-06-20 14:22:12 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 14:22:12 --> Total execution time: 0.0800
DEBUG - 2016-06-20 14:22:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403732
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:22:15 --> Security Class Initialized
DEBUG - 2016-06-20 14:22:15 --> CRSF cookie Set
DEBUG - 2016-06-20 14:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:22:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ccc7623d737c48c596dba7f53eaf3e7e', '114.91.131.17', '2016-06-20', '14:22:15', '120340235', '/admin/order/index/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:22:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:22:15 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:22:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:22:15 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:22:15 --> Total execution time: 0.0920
DEBUG - 2016-06-20 14:22:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403735
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:22:29 --> Security Class Initialized
DEBUG - 2016-06-20 14:22:29 --> CRSF cookie Set
DEBUG - 2016-06-20 14:22:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:22:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a4f4c0cf28e943bc9df37158d44e6919', '114.91.131.17', '2016-06-20', '14:22:29', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:22:29 --> 查询待审核订单
DEBUG - 2016-06-20 14:22:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:22:29 --> Total execution time: 0.0840
DEBUG - 2016-06-20 14:22:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403749
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:22:31 --> Security Class Initialized
DEBUG - 2016-06-20 14:22:31 --> CRSF cookie Set
DEBUG - 2016-06-20 14:22:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:22:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6ffa523ec2644221b7fcd8138c9bfca7', '114.91.131.17', '2016-06-20', '14:22:31', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:22:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:22:31 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:22:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:22:31 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:22:31 --> Total execution time: 0.0960
DEBUG - 2016-06-20 14:22:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403751
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:22:44 --> Security Class Initialized
DEBUG - 2016-06-20 14:22:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:22:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c71506f9acd94caf85c2cc9c9fe988ca', '114.91.131.17', '2016-06-20', '14:22:44', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:22:44 --> 审核订单
DEBUG - 2016-06-20 14:22:44 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:22:44 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:22:45 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:22:45 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:22:45 --> Total execution time: 0.9621
DEBUG - 2016-06-20 14:22:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403765
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:22:45 --> Security Class Initialized
DEBUG - 2016-06-20 14:22:45 --> CRSF cookie Set
DEBUG - 2016-06-20 14:22:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:22:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2b47a3697bb64e739c92947241387da6', '114.91.131.17', '2016-06-20', '14:22:45', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:22:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:22:45 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:22:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:22:45 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:22:45 --> Total execution time: 0.1070
DEBUG - 2016-06-20 14:22:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403765
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:22:57 --> No URI present. Default controller set.
DEBUG - 2016-06-20 14:22:57 --> Security Class Initialized
DEBUG - 2016-06-20 14:22:57 --> CRSF cookie Set
DEBUG - 2016-06-20 14:22:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:22:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:22:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9bfda5d983c04f698e34046908003266', '114.91.131.17', '2016-06-20', '14:22:57', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:22:57 --> Total execution time: 0.0820
DEBUG - 2016-06-20 14:22:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403777
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:23:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:23:01 --> Security Class Initialized
DEBUG - 2016-06-20 14:23:01 --> CRSF cookie Set
DEBUG - 2016-06-20 14:23:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:23:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:23:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('751d900f8a944f89945da04631705ec6', '114.91.131.17', '2016-06-20', '14:23:01', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:23:01 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-20 14:23:01 --> Total execution time: 0.0840
DEBUG - 2016-06-20 14:23:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403781
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:23:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:23:05 --> Security Class Initialized
DEBUG - 2016-06-20 14:23:05 --> CRSF cookie Set
DEBUG - 2016-06-20 14:23:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:23:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:23:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bc0abbca7744464b93601feaafcb4565', '114.91.131.17', '2016-06-20', '14:23:05', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:23:05 --> 查询待审核订单
DEBUG - 2016-06-20 14:23:05 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:23:05 --> Total execution time: 0.0770
DEBUG - 2016-06-20 14:23:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403785
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:23:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:23:07 --> Security Class Initialized
DEBUG - 2016-06-20 14:23:07 --> CRSF cookie Set
DEBUG - 2016-06-20 14:23:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:23:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:23:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('feba388a13984922aba5e5a1b74ee7c9', '114.91.131.17', '2016-06-20', '14:23:07', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:23:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:23:07 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:23:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:23:07 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:23:07 --> Total execution time: 0.1000
DEBUG - 2016-06-20 14:23:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403787
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:25:34 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:25:34 --> Security Class Initialized
DEBUG - 2016-06-20 14:25:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:25:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:25:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('14bf9492d97444c4b0c9b63841ea6a4e', '114.91.131.17', '2016-06-20', '14:25:34', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021')
DEBUG - 2016-06-20 14:25:34 --> 审核订单
DEBUG - 2016-06-20 14:25:34 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:25:34 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:25:35 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:25:35 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:25:35 --> Total execution time: 0.4150
DEBUG - 2016-06-20 14:25:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403935
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:25:35 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:25:35 --> Security Class Initialized
DEBUG - 2016-06-20 14:25:35 --> CRSF cookie Set
DEBUG - 2016-06-20 14:25:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:25:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:25:35 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a5f4291c8b8333ffb90ec904c0edacbd3e72c021'
DEBUG - 2016-06-20 14:25:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5b9782d76a584c9f97724be2a8182f88', '114.91.131.17', '2016-06-20', '14:25:35', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:25:35 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:25:35 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:25:35 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:25:35 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:25:35 --> Total execution time: 0.0930
DEBUG - 2016-06-20 14:25:35 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('89b1fe3ea92cf9ed6cafc120ae90072e183985cc', '114.91.131.17', 1466403935, '__ci_last_regenerate|i:1466403935;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-20 14:25:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:25:48 --> Security Class Initialized
DEBUG - 2016-06-20 14:25:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:25:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:25:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5d5999b6ecef4d4d8c44908aef7b7ea7', '114.91.131.17', '2016-06-20', '14:25:48', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:25:48 --> 审核订单
DEBUG - 2016-06-20 14:25:48 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:25:48 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:25:48 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:25:48 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:25:48 --> Total execution time: 0.7740
DEBUG - 2016-06-20 14:25:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403948
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:25:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:25:48 --> Security Class Initialized
DEBUG - 2016-06-20 14:25:48 --> CRSF cookie Set
DEBUG - 2016-06-20 14:25:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:25:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:25:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fa88dd7d47b4418984c482c106a8ddec', '114.91.131.17', '2016-06-20', '14:25:48', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:25:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:25:48 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:25:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:25:48 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:25:48 --> Total execution time: 0.0860
DEBUG - 2016-06-20 14:25:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466403948
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:27:21 --> Security Class Initialized
DEBUG - 2016-06-20 14:27:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:27:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1603c21ad7b649a69ac917421cb65717', '114.91.131.17', '2016-06-20', '14:27:21', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:27:21 --> 审核订单
DEBUG - 2016-06-20 14:27:21 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:27:21 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:27:21 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:27:21 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:27:21 --> Total execution time: 0.1220
DEBUG - 2016-06-20 14:27:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404041
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:27:21 --> Security Class Initialized
DEBUG - 2016-06-20 14:27:21 --> CRSF cookie Set
DEBUG - 2016-06-20 14:27:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:27:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e79b76452c5e4c37acfe591c77a32b65', '114.91.131.17', '2016-06-20', '14:27:21', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:27:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:27:21 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:27:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:27:21 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:27:21 --> Total execution time: 0.2940
DEBUG - 2016-06-20 14:27:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404041
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:27:25 --> Security Class Initialized
DEBUG - 2016-06-20 14:27:25 --> CRSF cookie Set
DEBUG - 2016-06-20 14:27:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:27:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3897f2d2445a42d4b0013e21ecc74f6e', '114.91.131.17', '2016-06-20', '14:27:25', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:27:25 --> 查询待审核订单
DEBUG - 2016-06-20 14:27:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:27:25 --> Total execution time: 0.0870
DEBUG - 2016-06-20 14:27:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404045
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:27:27 --> Security Class Initialized
DEBUG - 2016-06-20 14:27:27 --> CRSF cookie Set
DEBUG - 2016-06-20 14:27:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:27:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('47652b03d54144f283b0df1955c7f861', '114.91.131.17', '2016-06-20', '14:27:27', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:27:27 --> 查询待审核订单
DEBUG - 2016-06-20 14:27:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:27:27 --> Total execution time: 0.0970
DEBUG - 2016-06-20 14:27:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404047
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:27:28 --> Security Class Initialized
DEBUG - 2016-06-20 14:27:28 --> CRSF cookie Set
DEBUG - 2016-06-20 14:27:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:27:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0db34b294a204783852ca6a9267a4aba', '114.91.131.17', '2016-06-20', '14:27:28', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:27:28 --> 查询待审核订单
DEBUG - 2016-06-20 14:27:28 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:27:28 --> Total execution time: 0.0800
DEBUG - 2016-06-20 14:27:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404048
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:32 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:27:32 --> Security Class Initialized
DEBUG - 2016-06-20 14:27:32 --> CRSF cookie Set
DEBUG - 2016-06-20 14:27:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:27:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7dbabfbb0f774c96b7992d7e56117ea0', '114.91.131.17', '2016-06-20', '14:27:32', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:27:32 --> 查询待审核订单
DEBUG - 2016-06-20 14:27:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:27:32 --> Total execution time: 0.0760
DEBUG - 2016-06-20 14:27:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404052
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:27:33 --> Security Class Initialized
DEBUG - 2016-06-20 14:27:33 --> CRSF cookie Set
DEBUG - 2016-06-20 14:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:27:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8fc7b9d357384e299d91005e965424f7', '114.91.131.17', '2016-06-20', '14:27:33', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:27:33 --> 查询待审核订单
DEBUG - 2016-06-20 14:27:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:27:33 --> Total execution time: 0.0830
DEBUG - 2016-06-20 14:27:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404053
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:27:33 --> Security Class Initialized
DEBUG - 2016-06-20 14:27:33 --> CRSF cookie Set
DEBUG - 2016-06-20 14:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:27:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d4b7592fafa74c278b24b7ce7abd0f4e', '114.91.131.17', '2016-06-20', '14:27:33', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:27:33 --> 查询待审核订单
DEBUG - 2016-06-20 14:27:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:27:33 --> Total execution time: 0.0770
DEBUG - 2016-06-20 14:27:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404053
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:35 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:27:35 --> Security Class Initialized
DEBUG - 2016-06-20 14:27:35 --> CRSF cookie Set
DEBUG - 2016-06-20 14:27:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:27:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('eaaf4f91f32b4822804b849b18a4479e', '114.91.131.17', '2016-06-20', '14:27:35', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:27:35 --> 查询待审核订单
DEBUG - 2016-06-20 14:27:35 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:27:35 --> Total execution time: 0.0910
DEBUG - 2016-06-20 14:27:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404055
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:27:38 --> Security Class Initialized
DEBUG - 2016-06-20 14:27:38 --> CRSF cookie Set
DEBUG - 2016-06-20 14:27:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:27:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0179f417eb9043f889e9adec6a4e03c5', '114.91.131.17', '2016-06-20', '14:27:38', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:27:38 --> 查询待审核订单
DEBUG - 2016-06-20 14:27:38 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:27:38 --> Total execution time: 0.0880
DEBUG - 2016-06-20 14:27:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404058
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:27:42 --> Security Class Initialized
DEBUG - 2016-06-20 14:27:42 --> CRSF cookie Set
DEBUG - 2016-06-20 14:27:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:27:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cd11898a97644724b6249735bb1506e8', '114.91.131.17', '2016-06-20', '14:27:42', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:27:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:27:42 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:27:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:27:42 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:27:42 --> Total execution time: 0.1180
DEBUG - 2016-06-20 14:27:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404062
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:27:48 --> Security Class Initialized
DEBUG - 2016-06-20 14:27:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:27:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e167979fc84f45408881cdbd59c45c71', '114.91.131.17', '2016-06-20', '14:27:48', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:27:48 --> 审核订单
DEBUG - 2016-06-20 14:27:48 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:27:48 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:27:49 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:27:49 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:27:49 --> Total execution time: 0.6720
DEBUG - 2016-06-20 14:27:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404069
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:27:49 --> Security Class Initialized
DEBUG - 2016-06-20 14:27:49 --> CRSF cookie Set
DEBUG - 2016-06-20 14:27:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:27:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:27:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b9f0d4da90e745fc83aa6083de854638', '114.91.131.17', '2016-06-20', '14:27:49', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89b1fe3ea92cf9ed6cafc120ae90072e183985cc')
DEBUG - 2016-06-20 14:27:49 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:27:49 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:27:49 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:27:49 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:27:49 --> Total execution time: 0.3690
DEBUG - 2016-06-20 14:27:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404069
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:34:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:34:24 --> Security Class Initialized
DEBUG - 2016-06-20 14:34:24 --> CRSF cookie Set
DEBUG - 2016-06-20 14:34:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:34:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:34:24 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '89b1fe3ea92cf9ed6cafc120ae90072e183985cc'
DEBUG - 2016-06-20 14:34:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('734ef9cf66e1498abe271ae9296ea7b1', '114.91.131.17', '2016-06-20', '14:34:24', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:34:24 --> 查询订单
DEBUG - 2016-06-20 14:34:24 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 14:34:24 --> Total execution time: 0.0800
DEBUG - 2016-06-20 14:34:24 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4d57b2a6471d9f441dce6167fbf10cb50e961764', '114.91.131.17', 1466404464, '__ci_last_regenerate|i:1466404464;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-20 14:34:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:34:48 --> Security Class Initialized
DEBUG - 2016-06-20 14:34:48 --> CRSF cookie Set
DEBUG - 2016-06-20 14:34:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:34:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:34:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('66f3d048d5f64190b0b2be8d0f67a1a8', '114.91.131.17', '2016-06-20', '14:34:48', '120340235', '/admin/order/index/83d6465d95154a7ea845b0ef6a76eb9b', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:34:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-20 14:34:48 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='83d6465d95154a7ea845b0ef6a76eb9b' order by create_date_time desc
DEBUG - 2016-06-20 14:34:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-20 14:34:48 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='83d6465d95154a7ea845b0ef6a76eb9b'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:34:48 --> Total execution time: 0.1310
DEBUG - 2016-06-20 14:34:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404488
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:36:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:36:33 --> Security Class Initialized
DEBUG - 2016-06-20 14:36:33 --> CRSF cookie Set
DEBUG - 2016-06-20 14:36:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:36:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:36:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('20e53d3ca7da4f2da79e1d6a5f03e269', '114.91.131.17', '2016-06-20', '14:36:33', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:36:33 --> 查询订单
DEBUG - 2016-06-20 14:36:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-20 14:36:33 --> Total execution time: 0.0930
DEBUG - 2016-06-20 14:36:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404593
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:36:34 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:36:34 --> Security Class Initialized
DEBUG - 2016-06-20 14:36:34 --> CRSF cookie Set
DEBUG - 2016-06-20 14:36:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:36:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:36:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('522d25c9315a464abe3dc3b566e954bc', '114.91.131.17', '2016-06-20', '14:36:34', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:36:34 --> 查询待审核订单
DEBUG - 2016-06-20 14:36:34 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:36:34 --> Total execution time: 0.0810
DEBUG - 2016-06-20 14:36:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404594
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:36:35 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:36:35 --> Security Class Initialized
DEBUG - 2016-06-20 14:36:35 --> CRSF cookie Set
DEBUG - 2016-06-20 14:36:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:36:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:36:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f43330ac3cb74bd09bf1643b8faa089e', '114.91.131.17', '2016-06-20', '14:36:35', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:36:35 --> 查询待审核订单
DEBUG - 2016-06-20 14:36:35 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:36:35 --> Total execution time: 0.1000
DEBUG - 2016-06-20 14:36:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404595
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:36:36 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:36:36 --> Security Class Initialized
DEBUG - 2016-06-20 14:36:36 --> CRSF cookie Set
DEBUG - 2016-06-20 14:36:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:36:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:36:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('947b04a70bbc427d8633ada0c8d16332', '114.91.131.17', '2016-06-20', '14:36:36', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:36:36 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:36:36 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:36:36 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:36:36 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:36:36 --> Total execution time: 0.1020
DEBUG - 2016-06-20 14:36:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404596
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:36:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:36:42 --> Security Class Initialized
DEBUG - 2016-06-20 14:36:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:36:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:36:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5f4a4844411a45e8ad45bc69aaa5fcf6', '114.91.131.17', '2016-06-20', '14:36:42', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:36:42 --> 审核订单
DEBUG - 2016-06-20 14:36:42 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:36:42 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:36:42 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:36:42 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:36:42 --> Total execution time: 0.1890
DEBUG - 2016-06-20 14:36:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404602
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:36:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:36:43 --> Security Class Initialized
DEBUG - 2016-06-20 14:36:43 --> CRSF cookie Set
DEBUG - 2016-06-20 14:36:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:36:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:36:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8db2226263fb432fab0955fa51b3e140', '114.91.131.17', '2016-06-20', '14:36:43', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:36:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:36:43 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:36:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:36:43 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:36:43 --> Total execution time: 0.8080
DEBUG - 2016-06-20 14:36:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404603
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:37:39 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:37:39 --> Security Class Initialized
DEBUG - 2016-06-20 14:37:39 --> CRSF cookie Set
DEBUG - 2016-06-20 14:37:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:37:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:37:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('848ee468d7884836809c4b8c0327b8bc', '114.91.131.17', '2016-06-20', '14:37:39', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:37:39 --> 查询待发货订单
DEBUG - 2016-06-20 14:37:39 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-20 14:37:39 --> Total execution time: 0.0910
DEBUG - 2016-06-20 14:37:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404659
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:37:41 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:37:41 --> Security Class Initialized
DEBUG - 2016-06-20 14:37:41 --> CRSF cookie Set
DEBUG - 2016-06-20 14:37:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:37:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:37:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bdf5d84d0aca498d8a5c39f0121d285f', '114.91.131.17', '2016-06-20', '14:37:41', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:37:41 --> 查询待审核订单
DEBUG - 2016-06-20 14:37:41 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:37:41 --> Total execution time: 0.0800
DEBUG - 2016-06-20 14:37:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404661
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:37:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:37:42 --> Security Class Initialized
DEBUG - 2016-06-20 14:37:42 --> CRSF cookie Set
DEBUG - 2016-06-20 14:37:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:37:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:37:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5611d0919d1541d580ead4386cc6a430', '114.91.131.17', '2016-06-20', '14:37:42', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:37:42 --> 查询待审核订单
DEBUG - 2016-06-20 14:37:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:37:42 --> Total execution time: 0.0830
DEBUG - 2016-06-20 14:37:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404662
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:37:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:37:52 --> Security Class Initialized
DEBUG - 2016-06-20 14:37:52 --> CRSF cookie Set
DEBUG - 2016-06-20 14:37:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:37:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:37:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0e9346a6723d413fbac17993a5c08e65', '114.91.131.17', '2016-06-20', '14:37:52', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:37:52 --> 查询待审核订单
DEBUG - 2016-06-20 14:37:52 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:37:52 --> Total execution time: 0.0850
DEBUG - 2016-06-20 14:37:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404672
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:37:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:37:53 --> Security Class Initialized
DEBUG - 2016-06-20 14:37:53 --> CRSF cookie Set
DEBUG - 2016-06-20 14:37:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:37:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:37:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a67a6ce9f39348ae84d9914aad7a77f5', '114.91.131.17', '2016-06-20', '14:37:53', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:37:53 --> 查询待审核订单
DEBUG - 2016-06-20 14:37:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-20 14:37:53 --> Total execution time: 0.0850
DEBUG - 2016-06-20 14:37:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404673
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:37:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:37:54 --> Security Class Initialized
DEBUG - 2016-06-20 14:37:54 --> CRSF cookie Set
DEBUG - 2016-06-20 14:37:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:37:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:37:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c9ac8a5577764abb9cb1f060209c0e7c', '114.91.131.17', '2016-06-20', '14:37:55', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:37:55 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:37:55 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:37:55 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:37:55 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:37:55 --> Total execution time: 0.0900
DEBUG - 2016-06-20 14:37:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404675
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:38:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:38:02 --> Security Class Initialized
DEBUG - 2016-06-20 14:38:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:38:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:38:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9046b289f1e843aaa49d6a4628d786a7', '114.91.131.17', '2016-06-20', '14:38:02', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:38:02 --> 审核订单
DEBUG - 2016-06-20 14:38:02 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 14:38:02 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 14:38:02 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 14:38:02 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 14:38:02 --> Total execution time: 0.5280
DEBUG - 2016-06-20 14:38:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404682
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:38:03 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 14:38:03 --> Security Class Initialized
DEBUG - 2016-06-20 14:38:03 --> CRSF cookie Set
DEBUG - 2016-06-20 14:38:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 14:38:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 14:38:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('159bcb64a4cb40f3970a9ff5da7b498e', '114.91.131.17', '2016-06-20', '14:38:03', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 14:38:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:38:03 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 14:38:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 14:38:03 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 14:38:03 --> Total execution time: 0.1170
DEBUG - 2016-06-20 14:38:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466404683
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 16:20:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 16:20:44 --> Security Class Initialized
DEBUG - 2016-06-20 16:20:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 16:20:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 16:20:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6329f059a3f540089405a4b79c4787c8', '114.91.131.17', '2016-06-20', '16:20:46', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d57b2a6471d9f441dce6167fbf10cb50e961764')
DEBUG - 2016-06-20 16:20:46 --> 审核订单
DEBUG - 2016-06-20 16:20:46 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-20 16:20:46 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-20 16:20:49 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-20 16:20:49 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-20 16:20:49 --> Total execution time: 5.0703
DEBUG - 2016-06-20 16:20:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466410849
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 16:20:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-20 16:20:49 --> Security Class Initialized
DEBUG - 2016-06-20 16:20:49 --> CRSF cookie Set
DEBUG - 2016-06-20 16:20:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-20 16:20:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 16:20:49 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '4d57b2a6471d9f441dce6167fbf10cb50e961764'
DEBUG - 2016-06-20 16:20:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c1ee14d4e04341fe93867f974dbc15c1', '114.91.131.17', '2016-06-20', '16:20:49', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '88f4a5f0bc2c9a5ada20d2729b46f8db7556639b')
DEBUG - 2016-06-20 16:20:49 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 16:20:49 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-20 16:20:49 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-20 16:20:49 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-20 16:20:50 --> Total execution time: 0.7900
DEBUG - 2016-06-20 16:20:50 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('88f4a5f0bc2c9a5ada20d2729b46f8db7556639b', '114.91.131.17', 1466410850, '__ci_last_regenerate|i:1466410849;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
