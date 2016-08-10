<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-25 10:37:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 10:37:04 --> CRSF cookie Set
DEBUG - 2016-07-25 10:37:04 --> Security Class Initialized
DEBUG - 2016-07-25 10:37:04 --> CRSF cookie Set
DEBUG - 2016-07-25 10:37:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 10:37:04 --> 404 Page Not Found: Configphp/index
DEBUG - 2016-07-25 11:26:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:17 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:17 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:17 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:17 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c1761c076c6d208fb127acb88ed3a514718b7025', '114.91.129.78', 1469417177, '__ci_last_regenerate|i:1469417177;')
DEBUG - 2016-07-25 11:26:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:17 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:17 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:18 --> Total execution time: 0.1090
DEBUG - 2016-07-25 11:26:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417178
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:28 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:28 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-25 11:26:28 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-25 11:26:28 --> 登录返回结果数：1
DEBUG - 2016-07-25 11:26:28 --> 成功登录
DEBUG - 2016-07-25 11:26:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417188, data = '__ci_last_regenerate|i:1469417177;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:28 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:28 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9a9d3e7795a54fa689bb39ddce9b06dd', '114.91.129.78', '2016-07-25', '11:26:28', '120340234', '/admin/order/check/387b2ddd154a4ad394d10393e351098f', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='387b2ddd154a4ad394d10393e351098f'
DEBUG - 2016-07-25 11:26:28 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='387b2ddd154a4ad394d10393e351098f' order by create_date_time desc
DEBUG - 2016-07-25 11:26:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='387b2ddd154a4ad394d10393e351098f'
DEBUG - 2016-07-25 11:26:28 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='387b2ddd154a4ad394d10393e351098f'    order by t1.lno asc
        
DEBUG - 2016-07-25 11:26:28 --> Total execution time: 0.1480
DEBUG - 2016-07-25 11:26:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417188
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:28 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:28 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0c951c9a77ac475a90294fbe190982e8', '114.91.129.78', '2016-07-25', '11:26:29', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:29 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:29 --> Total execution time: 0.0980
DEBUG - 2016-07-25 11:26:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417189
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:29 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:29 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7ee6a40bb3624f1fa91b5242015b1737', '114.91.129.78', '2016-07-25', '11:26:29', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:29 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:29 --> Total execution time: 0.0760
DEBUG - 2016-07-25 11:26:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417189
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:30 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:30 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c7b931632a9b4fb89f320e1d6e9cd620', '114.91.129.78', '2016-07-25', '11:26:30', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:30 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:30 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:30 --> Total execution time: 0.1100
DEBUG - 2016-07-25 11:26:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417190
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:30 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:30 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3f177d9bfa30414b88fed19055213baf', '114.91.129.78', '2016-07-25', '11:26:30', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:30 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:30 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:30 --> Total execution time: 0.0880
DEBUG - 2016-07-25 11:26:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417190
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:30 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:30 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('094dcd2fa427471d98a3cdcc9c0c75b2', '114.91.129.78', '2016-07-25', '11:26:30', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:30 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:30 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:30 --> Total execution time: 0.0750
DEBUG - 2016-07-25 11:26:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417190
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:31 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:31 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2bb816f250cc43d2b1b607e58ab80e9a', '114.91.129.78', '2016-07-25', '11:26:31', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:31 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:31 --> Total execution time: 0.0980
DEBUG - 2016-07-25 11:26:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417191
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:31 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:31 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('15e017510e1843ebb669518e0a3e6f5d', '114.91.129.78', '2016-07-25', '11:26:31', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:31 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:31 --> Total execution time: 0.1080
DEBUG - 2016-07-25 11:26:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417191
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:31 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:31 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b79e1bf037e04f37ae0264f6ce329701', '114.91.129.78', '2016-07-25', '11:26:31', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:31 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:31 --> Total execution time: 0.0890
DEBUG - 2016-07-25 11:26:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417191
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:31 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:31 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2b8d89204e5c470a9142d5f153319514', '114.91.129.78', '2016-07-25', '11:26:32', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:32 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:32 --> Total execution time: 0.0850
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417192
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:32 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:32 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1edb0ebe10a54756aee6936f19b0cd26', '114.91.129.78', '2016-07-25', '11:26:32', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:32 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:32 --> Total execution time: 0.0820
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417192
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:32 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:32 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('092da5fd3cb247868eae9f3e613bb856', '114.91.129.78', '2016-07-25', '11:26:32', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:32 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:32 --> Total execution time: 0.0750
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417192
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:32 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:32 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bdb74cb8cfa9415fb7a210755349b1d5', '114.91.129.78', '2016-07-25', '11:26:32', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:32 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:32 --> Total execution time: 0.0940
DEBUG - 2016-07-25 11:26:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417192
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:32 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:32 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fcaf8e0181b349a2a8d17b17afe01c95', '114.91.129.78', '2016-07-25', '11:26:33', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:33 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:33 --> Total execution time: 0.0740
DEBUG - 2016-07-25 11:26:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417193
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:33 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:33 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2af70c5551eb4b40844694fd5aa32e1a', '114.91.129.78', '2016-07-25', '11:26:33', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:33 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:33 --> Total execution time: 0.0900
DEBUG - 2016-07-25 11:26:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417193
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:33 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:33 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1206216391664675a31203ae1c955360', '114.91.129.78', '2016-07-25', '11:26:33', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:33 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:34 --> Total execution time: 0.0930
DEBUG - 2016-07-25 11:26:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417194
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:34 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:34 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0f104dc1966e494b90b77a7148af46b5', '114.91.129.78', '2016-07-25', '11:26:34', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:34 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:34 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:34 --> Total execution time: 0.0880
DEBUG - 2016-07-25 11:26:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417194
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:42 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:42 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d627da6c98884d6d92f5d0c0dd1ee654', '114.91.129.78', '2016-07-25', '11:26:42', '120340234', '/admin/order/check', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:42 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:42 --> Total execution time: 0.0960
DEBUG - 2016-07-25 11:26:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417202
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:42 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:42 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:42 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:42 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:42 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:42 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:42 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:42 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:42 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:42 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:42 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:42 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:42 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:42 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:42 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:42 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:43 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:43 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:43 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:43 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:43 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:43 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:43 --> 404 Page Not Found: Order/assets
ERROR - 2016-07-25 11:26:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:43 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:43 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:43 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:43 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:43 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:43 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:43 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:43 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:43 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:43 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 11:26:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-25 11:26:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:51 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:51 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('279e15947b644df79920a6eeec48d9bc', '114.91.129.78', '2016-07-25', '11:26:51', '120340234', '/admin/order/check/387b2ddd154a4ad394d10393e351098f', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='387b2ddd154a4ad394d10393e351098f'
DEBUG - 2016-07-25 11:26:51 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='387b2ddd154a4ad394d10393e351098f' order by create_date_time desc
DEBUG - 2016-07-25 11:26:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='387b2ddd154a4ad394d10393e351098f'
DEBUG - 2016-07-25 11:26:51 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='387b2ddd154a4ad394d10393e351098f'    order by t1.lno asc
        
DEBUG - 2016-07-25 11:26:51 --> Total execution time: 0.1030
DEBUG - 2016-07-25 11:26:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417211
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:51 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:51 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8fc9216e48f347a6afdc8a081940b223', '114.91.129.78', '2016-07-25', '11:26:51', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:51 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:51 --> Total execution time: 0.0820
DEBUG - 2016-07-25 11:26:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417211
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:51 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:51 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('57a2f0befa074de0ba2d0f7ed2ed971a', '114.91.129.78', '2016-07-25', '11:26:52', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:52 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:52 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:52 --> Total execution time: 0.0920
DEBUG - 2016-07-25 11:26:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417212
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:53 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:53 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('287d181604c44b36bf3a67c682e9f905', '114.91.129.78', '2016-07-25', '11:26:53', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:53 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:53 --> Total execution time: 0.0960
DEBUG - 2016-07-25 11:26:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417213
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:53 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:53 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a4fa67ca03b647ee9840785703a57b8b', '114.91.129.78', '2016-07-25', '11:26:53', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:53 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:53 --> Total execution time: 0.1010
DEBUG - 2016-07-25 11:26:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417213
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:53 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:53 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ec3557d586694342b6281e9c171a11a3', '114.91.129.78', '2016-07-25', '11:26:53', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:53 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:53 --> Total execution time: 0.0940
DEBUG - 2016-07-25 11:26:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417213
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:54 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:54 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('18da8e90ed7643448434905347355d3b', '114.91.129.78', '2016-07-25', '11:26:54', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:54 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:54 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:54 --> Total execution time: 0.1300
DEBUG - 2016-07-25 11:26:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417214
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:54 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:54 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cc3e8d6cb80d4b5baa380cc1e037ca73', '114.91.129.78', '2016-07-25', '11:26:54', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:54 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:54 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:54 --> Total execution time: 0.0810
DEBUG - 2016-07-25 11:26:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417214
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:54 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:54 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4ebb6be0b5bd4e5a892962bdd64b04c3', '114.91.129.78', '2016-07-25', '11:26:54', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:54 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:54 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:54 --> Total execution time: 0.0860
DEBUG - 2016-07-25 11:26:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417214
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:55 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:55 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e166b1c323ae4e2b9eb542a1261e2f5b', '114.91.129.78', '2016-07-25', '11:26:55', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:55 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:55 --> Total execution time: 0.0990
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417215
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:55 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:55 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:55 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:55 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e41b4b820f604c9ba22eddaee1ab5e11', '114.91.129.78', '2016-07-25', '11:26:55', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:55 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:55 --> Total execution time: 0.0990
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417215
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('411bcaf6c00340f38537820ba39837ee', '114.91.129.78', '2016-07-25', '11:26:55', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:55 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:55 --> Total execution time: 0.1360
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417215
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:55 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:55 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('62ad9e953c574f3aace999df91e72780', '114.91.129.78', '2016-07-25', '11:26:55', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:55 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:55 --> Total execution time: 0.0910
DEBUG - 2016-07-25 11:26:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417215
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:56 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:56 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('81ff605ea5424f299d4c8185d7834bfa', '114.91.129.78', '2016-07-25', '11:26:56', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:56 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:56 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:56 --> Total execution time: 0.0910
DEBUG - 2016-07-25 11:26:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417216
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:56 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:56 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('efc2069d03014980a904b63d2aa620fe', '114.91.129.78', '2016-07-25', '11:26:56', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:56 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:56 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:56 --> Total execution time: 0.0790
DEBUG - 2016-07-25 11:26:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417216
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:57 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:57 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('86ee7577c02349c292e94610c12837fe', '114.91.129.78', '2016-07-25', '11:26:57', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:57 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:57 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:57 --> Total execution time: 0.0880
DEBUG - 2016-07-25 11:26:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417217
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:26:57 --> Security Class Initialized
DEBUG - 2016-07-25 11:26:57 --> CRSF cookie Set
DEBUG - 2016-07-25 11:26:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:26:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:26:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('931be98aa6354cdd92f8a8b43dd73ba7', '114.91.129.78', '2016-07-25', '11:26:57', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1761c076c6d208fb127acb88ed3a514718b7025')
DEBUG - 2016-07-25 11:26:57 --> 查询待审核订单
DEBUG - 2016-07-25 11:26:57 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 11:26:57 --> Total execution time: 0.0850
DEBUG - 2016-07-25 11:26:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417217
WHERE id = 'c1761c076c6d208fb127acb88ed3a514718b7025'
DEBUG - 2016-07-25 11:30:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:30:52 --> CRSF cookie Set
DEBUG - 2016-07-25 11:30:52 --> Security Class Initialized
DEBUG - 2016-07-25 11:30:52 --> CRSF cookie Set
DEBUG - 2016-07-25 11:30:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:30:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '80c93f20147365b2908f29735712c12551f80bdf'
DEBUG - 2016-07-25 11:30:52 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('80c93f20147365b2908f29735712c12551f80bdf', '114.91.129.78', 1469417452, '__ci_last_regenerate|i:1469417452;')
DEBUG - 2016-07-25 11:30:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:30:52 --> Security Class Initialized
DEBUG - 2016-07-25 11:30:52 --> CRSF cookie Set
DEBUG - 2016-07-25 11:30:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:30:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '80c93f20147365b2908f29735712c12551f80bdf'
DEBUG - 2016-07-25 11:30:52 --> Total execution time: 0.0690
DEBUG - 2016-07-25 11:30:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417452
WHERE id = '80c93f20147365b2908f29735712c12551f80bdf'
DEBUG - 2016-07-25 11:30:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:30:53 --> CRSF cookie Set
DEBUG - 2016-07-25 11:30:53 --> Security Class Initialized
DEBUG - 2016-07-25 11:30:53 --> CRSF cookie Set
DEBUG - 2016-07-25 11:30:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:30:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78cb0c6a351dbd788106fae7f99dcfdcbf7a876a'
DEBUG - 2016-07-25 11:30:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('78cb0c6a351dbd788106fae7f99dcfdcbf7a876a', '101.226.66.175', 1469417453, '__ci_last_regenerate|i:1469417453;')
DEBUG - 2016-07-25 11:31:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:31:02 --> CRSF cookie Set
DEBUG - 2016-07-25 11:31:02 --> Security Class Initialized
DEBUG - 2016-07-25 11:31:02 --> CRSF cookie Set
DEBUG - 2016-07-25 11:31:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:31:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9b9f93ed5b00c741b92f045c9f73342446a4e234'
DEBUG - 2016-07-25 11:31:02 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9b9f93ed5b00c741b92f045c9f73342446a4e234', '180.153.201.217', 1469417462, '__ci_last_regenerate|i:1469417462;')
DEBUG - 2016-07-25 11:31:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 11:31:02 --> Security Class Initialized
DEBUG - 2016-07-25 11:31:02 --> CRSF cookie Set
DEBUG - 2016-07-25 11:31:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 11:31:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9b9f93ed5b00c741b92f045c9f73342446a4e234'
DEBUG - 2016-07-25 11:31:02 --> Total execution time: 0.0800
DEBUG - 2016-07-25 11:31:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469417462
WHERE id = '9b9f93ed5b00c741b92f045c9f73342446a4e234'
DEBUG - 2016-07-25 13:05:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:05:20 --> Security Class Initialized
DEBUG - 2016-07-25 13:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:05:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '80c93f20147365b2908f29735712c12551f80bdf'
DEBUG - 2016-07-25 13:05:20 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '80c93f20147365b2908f29735712c12551f80bdf'
DEBUG - 2016-07-25 13:05:20 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-25 13:05:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:05:20 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-25 13:05:20 --> CRSF cookie Set
DEBUG - 2016-07-25 13:05:20 --> Security Class Initialized
DEBUG - 2016-07-25 13:05:20 --> CRSF cookie Set
DEBUG - 2016-07-25 13:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:05:20 --> 登录返回结果数：1
DEBUG - 2016-07-25 13:05:20 --> 成功登录
DEBUG - 2016-07-25 13:05:20 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('073e2a5821b76485cbba62aa64500c3764c4a06e', '114.91.129.78', 1469423120, '__ci_last_regenerate|i:1469423120;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-25 13:05:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b0e23c03bfa5a27a9b5a54b2f58ce9792b623db0'
DEBUG - 2016-07-25 13:05:20 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-25 13:05:20 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-25 13:05:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:05:20 --> Security Class Initialized
DEBUG - 2016-07-25 13:05:20 --> CRSF cookie Set
DEBUG - 2016-07-25 13:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:05:20 --> 登录返回结果数：0
DEBUG - 2016-07-25 13:05:20 --> Total execution time: 0.1600
DEBUG - 2016-07-25 13:05:20 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b0e23c03bfa5a27a9b5a54b2f58ce9792b623db0', '101.226.66.192', 1469423120, '__ci_last_regenerate|i:1469423120;')
DEBUG - 2016-07-25 13:05:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:05:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6391c38bba384292a97a9761682a0bd4', '114.91.129.78', '2016-07-25', '13:05:20', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '073e2a5821b76485cbba62aa64500c3764c4a06e')
DEBUG - 2016-07-25 13:05:20 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-25 13:05:21 --> Total execution time: 0.2280
DEBUG - 2016-07-25 13:05:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469423121
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:05:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:05:28 --> CRSF cookie Set
DEBUG - 2016-07-25 13:05:28 --> Security Class Initialized
DEBUG - 2016-07-25 13:05:28 --> CRSF cookie Set
DEBUG - 2016-07-25 13:05:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:05:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1695b0153f2c7e804abf5b59c753515209153863'
DEBUG - 2016-07-25 13:05:28 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-25 13:05:28 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-25 13:05:28 --> 登录返回结果数：0
DEBUG - 2016-07-25 13:05:28 --> Total execution time: 0.0780
DEBUG - 2016-07-25 13:05:28 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('1695b0153f2c7e804abf5b59c753515209153863', '101.226.33.219', 1469423128, '__ci_last_regenerate|i:1469423128;')
DEBUG - 2016-07-25 13:05:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:05:32 --> Security Class Initialized
DEBUG - 2016-07-25 13:05:32 --> CRSF cookie Set
DEBUG - 2016-07-25 13:05:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:05:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:05:32 --> CRSF cookie Set
DEBUG - 2016-07-25 13:05:32 --> Security Class Initialized
DEBUG - 2016-07-25 13:05:32 --> CRSF cookie Set
DEBUG - 2016-07-25 13:05:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:05:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:05:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dca3e4ba1ec72656bc31173445d1d0538d73f1c4'
DEBUG - 2016-07-25 13:05:32 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('dca3e4ba1ec72656bc31173445d1d0538d73f1c4', '180.153.163.208', 1469423132, '__ci_last_regenerate|i:1469423132;')
DEBUG - 2016-07-25 13:05:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8e78db279aaf43d29358bc9a26ae23ad', '114.91.129.78', '2016-07-25', '13:05:32', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '073e2a5821b76485cbba62aa64500c3764c4a06e')
DEBUG - 2016-07-25 13:05:32 --> 查询待审核订单
DEBUG - 2016-07-25 13:05:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 13:05:32 --> Total execution time: 0.3980
DEBUG - 2016-07-25 13:05:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469423132
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:05:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:05:32 --> CRSF cookie Set
DEBUG - 2016-07-25 13:05:32 --> Security Class Initialized
DEBUG - 2016-07-25 13:05:32 --> CRSF cookie Set
DEBUG - 2016-07-25 13:05:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:05:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8907efeebeab618e0760e041192522c54a1e783e'
DEBUG - 2016-07-25 13:05:32 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8907efeebeab618e0760e041192522c54a1e783e', '180.153.214.182', 1469423132, '__ci_last_regenerate|i:1469423132;')
DEBUG - 2016-07-25 13:05:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:05:32 --> Security Class Initialized
DEBUG - 2016-07-25 13:05:32 --> CRSF cookie Set
DEBUG - 2016-07-25 13:05:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:05:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8907efeebeab618e0760e041192522c54a1e783e'
DEBUG - 2016-07-25 13:05:32 --> Total execution time: 0.0930
DEBUG - 2016-07-25 13:05:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469423132
WHERE id = '8907efeebeab618e0760e041192522c54a1e783e'
DEBUG - 2016-07-25 13:06:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:06:28 --> Security Class Initialized
DEBUG - 2016-07-25 13:06:28 --> CRSF cookie Set
DEBUG - 2016-07-25 13:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:06:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:06:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1fa460b07ba9470681bdcd80f0744679', '114.91.129.78', '2016-07-25', '13:06:28', '120340234', '/admin/order/check/387b2ddd154a4ad394d10393e351098f', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '073e2a5821b76485cbba62aa64500c3764c4a06e')
DEBUG - 2016-07-25 13:06:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='387b2ddd154a4ad394d10393e351098f'
DEBUG - 2016-07-25 13:06:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:06:28 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='387b2ddd154a4ad394d10393e351098f' order by create_date_time desc
DEBUG - 2016-07-25 13:06:28 --> CRSF cookie Set
DEBUG - 2016-07-25 13:06:28 --> Security Class Initialized
DEBUG - 2016-07-25 13:06:28 --> CRSF cookie Set
DEBUG - 2016-07-25 13:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:06:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '950135943cafc69a25eced4fd8a7531156dd8379'
DEBUG - 2016-07-25 13:06:28 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('950135943cafc69a25eced4fd8a7531156dd8379', '101.226.66.181', 1469423188, '__ci_last_regenerate|i:1469423188;')
DEBUG - 2016-07-25 13:06:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='387b2ddd154a4ad394d10393e351098f'
DEBUG - 2016-07-25 13:06:28 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='387b2ddd154a4ad394d10393e351098f'    order by t1.lno asc
        
DEBUG - 2016-07-25 13:06:28 --> Total execution time: 0.3290
DEBUG - 2016-07-25 13:06:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469423188
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:06:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:06:34 --> CRSF cookie Set
DEBUG - 2016-07-25 13:06:34 --> Security Class Initialized
DEBUG - 2016-07-25 13:06:34 --> CRSF cookie Set
DEBUG - 2016-07-25 13:06:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:06:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3d2c333d7d3171293ce1d1ebeef768ce2ba9f3b2'
DEBUG - 2016-07-25 13:06:34 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3d2c333d7d3171293ce1d1ebeef768ce2ba9f3b2', '101.226.33.240', 1469423194, '__ci_last_regenerate|i:1469423194;')
DEBUG - 2016-07-25 13:06:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:06:34 --> Security Class Initialized
DEBUG - 2016-07-25 13:06:34 --> CRSF cookie Set
DEBUG - 2016-07-25 13:06:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:06:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3d2c333d7d3171293ce1d1ebeef768ce2ba9f3b2'
DEBUG - 2016-07-25 13:06:34 --> Total execution time: 0.0730
DEBUG - 2016-07-25 13:06:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469423194
WHERE id = '3d2c333d7d3171293ce1d1ebeef768ce2ba9f3b2'
DEBUG - 2016-07-25 13:06:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:06:41 --> Security Class Initialized
DEBUG - 2016-07-25 13:06:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:06:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:06:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3b95e4f806e24028a2e4e1d25b78687a', '114.91.129.78', '2016-07-25', '13:06:41', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '073e2a5821b76485cbba62aa64500c3764c4a06e')
DEBUG - 2016-07-25 13:06:41 --> 审核订单
DEBUG - 2016-07-25 13:06:41 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '387b2ddd154a4ad394d10393e351098f'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-25 13:06:41 --> 过程调用语句：  execute USP_APSOS_outorder '387b2ddd154a4ad394d10393e351098f'
DEBUG - 2016-07-25 13:06:44 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340234', '387b2ddd154a4ad394d10393e351098f', '2', '', '57deff1c99254d96aba6a57676828f98', '2016-07-25 13:06:44')
DEBUG - 2016-07-25 13:06:44 --> 该订单状态更新成功:2
DEBUG - 2016-07-25 13:06:44 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='387b2ddd154a4ad394d10393e351098f'
DEBUG - 2016-07-25 13:06:44 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05245'
DEBUG - 2016-07-25 13:06:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:06:45 --> Security Class Initialized
DEBUG - 2016-07-25 13:06:46 --> CRSF cookie Set
DEBUG - 2016-07-25 13:06:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:06:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:06:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('11644bcf73b147b58a1bae8afab3e265', '114.91.129.78', '2016-07-25', '13:06:46', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '073e2a5821b76485cbba62aa64500c3764c4a06e')
DEBUG - 2016-07-25 13:06:46 --> 查询待审核订单
DEBUG - 2016-07-25 13:06:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 13:06:46 --> Total execution time: 0.0960
DEBUG - 2016-07-25 13:06:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469423206
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:06:47 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-25 13:06:47 --> Total execution time: 5.7953
DEBUG - 2016-07-25 13:06:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469423207
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:07:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:07:05 --> Security Class Initialized
DEBUG - 2016-07-25 13:07:05 --> CRSF cookie Set
DEBUG - 2016-07-25 13:07:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:07:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:07:05 --> CRSF cookie Set
DEBUG - 2016-07-25 13:07:05 --> Security Class Initialized
DEBUG - 2016-07-25 13:07:05 --> CRSF cookie Set
DEBUG - 2016-07-25 13:07:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:07:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:07:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7785570a77824af4b072c47ded5d44d0', '114.91.129.78', '2016-07-25', '13:07:05', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '073e2a5821b76485cbba62aa64500c3764c4a06e')
DEBUG - 2016-07-25 13:07:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'eb5da3e8ecc690b30e39bc6bcd97f37fa9519c66'
DEBUG - 2016-07-25 13:07:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('eb5da3e8ecc690b30e39bc6bcd97f37fa9519c66', '180.153.214.192', 1469423225, '__ci_last_regenerate|i:1469423225;')
DEBUG - 2016-07-25 13:07:05 --> 查询订单
DEBUG - 2016-07-25 13:07:05 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-25 13:07:05 --> Total execution time: 0.1690
DEBUG - 2016-07-25 13:07:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469423225
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:07:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:07:15 --> CRSF cookie Set
DEBUG - 2016-07-25 13:07:15 --> Security Class Initialized
DEBUG - 2016-07-25 13:07:15 --> CRSF cookie Set
DEBUG - 2016-07-25 13:07:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:07:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bbfc654d11174949a13d391401b6613b862524d9'
DEBUG - 2016-07-25 13:07:15 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('bbfc654d11174949a13d391401b6613b862524d9', '180.153.214.180', 1469423235, '__ci_last_regenerate|i:1469423235;')
DEBUG - 2016-07-25 13:07:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:07:15 --> Security Class Initialized
DEBUG - 2016-07-25 13:07:15 --> CRSF cookie Set
DEBUG - 2016-07-25 13:07:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:07:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bbfc654d11174949a13d391401b6613b862524d9'
DEBUG - 2016-07-25 13:07:15 --> Total execution time: 0.0910
DEBUG - 2016-07-25 13:07:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469423235
WHERE id = 'bbfc654d11174949a13d391401b6613b862524d9'
DEBUG - 2016-07-25 13:07:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:07:17 --> Security Class Initialized
DEBUG - 2016-07-25 13:07:17 --> CRSF cookie Set
DEBUG - 2016-07-25 13:07:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:07:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:07:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9817d4e692564c5d898ee3bea1dec9a7', '114.91.129.78', '2016-07-25', '13:07:17', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '073e2a5821b76485cbba62aa64500c3764c4a06e')
DEBUG - 2016-07-25 13:07:17 --> 查询待审核订单
DEBUG - 2016-07-25 13:07:17 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 13:07:17 --> Total execution time: 0.1130
DEBUG - 2016-07-25 13:07:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469423237
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:09:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:09:53 --> CRSF cookie Set
DEBUG - 2016-07-25 13:09:53 --> Security Class Initialized
DEBUG - 2016-07-25 13:09:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:09:53 --> CRSF cookie Set
DEBUG - 2016-07-25 13:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:09:53 --> CRSF cookie Set
DEBUG - 2016-07-25 13:09:53 --> Security Class Initialized
DEBUG - 2016-07-25 13:09:53 --> CRSF cookie Set
DEBUG - 2016-07-25 13:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:09:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:09:53 --> CRSF cookie Set
DEBUG - 2016-07-25 13:09:53 --> Security Class Initialized
DEBUG - 2016-07-25 13:09:53 --> CRSF cookie Set
DEBUG - 2016-07-25 13:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:09:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:09:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:09:53 --> CRSF cookie Set
DEBUG - 2016-07-25 13:09:53 --> Security Class Initialized
DEBUG - 2016-07-25 13:09:53 --> CRSF cookie Set
DEBUG - 2016-07-25 13:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:09:53 --> No URI present. Default controller set.
DEBUG - 2016-07-25 13:09:53 --> CRSF cookie Set
DEBUG - 2016-07-25 13:09:53 --> Security Class Initialized
DEBUG - 2016-07-25 13:09:53 --> CRSF cookie Set
DEBUG - 2016-07-25 13:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aea3fb2af1c66faaa7fab7e85b3b5dffd7340fb8'
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ac8e8dc6bd81e3170bde3ff96639d9f355aab5c0'
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6077ef32e3fde9eef0c8a7a9fe5fcc7cb43aa589'
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c6c455d86f97c9ae630d49b0bf94445fe4fda7f4'
DEBUG - 2016-07-25 13:09:53 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-25 13:09:53 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-25 13:09:53 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c6c455d86f97c9ae630d49b0bf94445fe4fda7f4', '101.226.66.192', 1469423393, '__ci_last_regenerate|i:1469423393;')
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-25 13:09:53 --> 登录返回结果数：0
DEBUG - 2016-07-25 13:09:53 --> Total execution time: 0.1760
DEBUG - 2016-07-25 13:09:53 --> 登录返回结果数：0
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('aea3fb2af1c66faaa7fab7e85b3b5dffd7340fb8', '101.226.66.192', 1469423393, '__ci_last_regenerate|i:1469423393;')
DEBUG - 2016-07-25 13:09:53 --> Total execution time: 0.1980
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6077ef32e3fde9eef0c8a7a9fe5fcc7cb43aa589', '101.226.66.192', 1469423393, '__ci_last_regenerate|i:1469423393;')
DEBUG - 2016-07-25 13:09:53 --> 登录返回结果数：0
DEBUG - 2016-07-25 13:09:53 --> Total execution time: 0.1800
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ac8e8dc6bd81e3170bde3ff96639d9f355aab5c0', '101.226.66.192', 1469423393, '__ci_last_regenerate|i:1469423393;')
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9189c89eb86498c3800b85dbb1a1c20fbc13edbf'
DEBUG - 2016-07-25 13:09:53 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-25 13:09:53 --> 登录返回结果数：0
DEBUG - 2016-07-25 13:09:53 --> Total execution time: 0.1390
DEBUG - 2016-07-25 13:09:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9189c89eb86498c3800b85dbb1a1c20fbc13edbf', '101.226.66.192', 1469423393, '__ci_last_regenerate|i:1469423393;')
DEBUG - 2016-07-25 13:42:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:42:39 --> Security Class Initialized
DEBUG - 2016-07-25 13:42:39 --> CRSF cookie Set
DEBUG - 2016-07-25 13:42:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:42:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:42:40 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '073e2a5821b76485cbba62aa64500c3764c4a06e'
DEBUG - 2016-07-25 13:42:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('62db2810f4fd45d7a62688a79ea2f73d', '114.91.129.78', '2016-07-25', '13:42:40', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '3329c862cba80e81e627bbf3b636176cd988d7cd')
DEBUG - 2016-07-25 13:42:40 --> 查询订单
DEBUG - 2016-07-25 13:42:40 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-25 13:42:40 --> Total execution time: 0.3920
DEBUG - 2016-07-25 13:42:40 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3329c862cba80e81e627bbf3b636176cd988d7cd', '114.91.129.78', 1469425360, '__ci_last_regenerate|i:1469425360;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-25 13:43:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:43:18 --> Security Class Initialized
DEBUG - 2016-07-25 13:43:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:43:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3329c862cba80e81e627bbf3b636176cd988d7cd'
DEBUG - 2016-07-25 13:43:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0ce61031f9c7404baaa8c88ce4ee4125', '114.91.129.78', '2016-07-25', '13:43:18', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '3329c862cba80e81e627bbf3b636176cd988d7cd')
DEBUG - 2016-07-25 13:43:18 --> 查询订单
DEBUG - 2016-07-25 13:43:18 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and create_date_time>'2016-07-25 00:00:00' order by create_date_time asc
DEBUG - 2016-07-25 13:43:18 --> Total execution time: 0.2460
DEBUG - 2016-07-25 13:43:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469425398
WHERE id = '3329c862cba80e81e627bbf3b636176cd988d7cd'
DEBUG - 2016-07-25 13:43:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:43:24 --> Security Class Initialized
DEBUG - 2016-07-25 13:43:24 --> CRSF cookie Set
DEBUG - 2016-07-25 13:43:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:43:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3329c862cba80e81e627bbf3b636176cd988d7cd'
DEBUG - 2016-07-25 13:43:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('22a3888be2894558b5adee443a0cccfd', '114.91.129.78', '2016-07-25', '13:43:24', '120340234', '/admin/order/index/387b2ddd154a4ad394d10393e351098f', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '3329c862cba80e81e627bbf3b636176cd988d7cd')
DEBUG - 2016-07-25 13:43:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='387b2ddd154a4ad394d10393e351098f'
DEBUG - 2016-07-25 13:43:24 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='387b2ddd154a4ad394d10393e351098f' order by create_date_time desc
DEBUG - 2016-07-25 13:43:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='387b2ddd154a4ad394d10393e351098f'
DEBUG - 2016-07-25 13:43:24 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='387b2ddd154a4ad394d10393e351098f'    order by t1.lno asc
        
DEBUG - 2016-07-25 13:43:25 --> Total execution time: 0.6390
DEBUG - 2016-07-25 13:43:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469425405
WHERE id = '3329c862cba80e81e627bbf3b636176cd988d7cd'
DEBUG - 2016-07-25 13:43:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:43:28 --> CRSF cookie Set
DEBUG - 2016-07-25 13:43:28 --> Security Class Initialized
DEBUG - 2016-07-25 13:43:28 --> CRSF cookie Set
DEBUG - 2016-07-25 13:43:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:43:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd3b3948f9d7c8dfc21011a2b60d2e14746c19bcb'
DEBUG - 2016-07-25 13:43:28 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d3b3948f9d7c8dfc21011a2b60d2e14746c19bcb', '180.153.214.192', 1469425408, '__ci_last_regenerate|i:1469425408;')
DEBUG - 2016-07-25 13:43:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:43:32 --> CRSF cookie Set
DEBUG - 2016-07-25 13:43:32 --> Security Class Initialized
DEBUG - 2016-07-25 13:43:32 --> CRSF cookie Set
DEBUG - 2016-07-25 13:43:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:43:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8ecaead087d54d5a9c0f3f3512adda9e289c75b4'
DEBUG - 2016-07-25 13:43:32 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8ecaead087d54d5a9c0f3f3512adda9e289c75b4', '180.153.206.20', 1469425412, '__ci_last_regenerate|i:1469425412;')
DEBUG - 2016-07-25 13:43:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 13:43:32 --> Security Class Initialized
DEBUG - 2016-07-25 13:43:32 --> CRSF cookie Set
DEBUG - 2016-07-25 13:43:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 13:43:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8ecaead087d54d5a9c0f3f3512adda9e289c75b4'
DEBUG - 2016-07-25 13:43:32 --> Total execution time: 0.1990
DEBUG - 2016-07-25 13:43:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469425412
WHERE id = '8ecaead087d54d5a9c0f3f3512adda9e289c75b4'
DEBUG - 2016-07-25 14:29:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:32 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:32 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:32 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7a608f92d97ec87189fc6149afb2273429109d8b'
DEBUG - 2016-07-25 14:29:32 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7a608f92d97ec87189fc6149afb2273429109d8b', '114.91.129.78', 1469428172, '__ci_last_regenerate|i:1469428172;')
DEBUG - 2016-07-25 14:29:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:32 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:32 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7a608f92d97ec87189fc6149afb2273429109d8b'
DEBUG - 2016-07-25 14:29:33 --> Total execution time: 0.1820
DEBUG - 2016-07-25 14:29:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428173
WHERE id = '7a608f92d97ec87189fc6149afb2273429109d8b'
DEBUG - 2016-07-25 14:29:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:46 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:46 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:46 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a030f3c102713963eba83e97f569843d321d5da3'
DEBUG - 2016-07-25 14:29:46 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a030f3c102713963eba83e97f569843d321d5da3', '101.226.51.226', 1469428186, '__ci_last_regenerate|i:1469428186;')
DEBUG - 2016-07-25 14:29:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:47 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:47 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:47 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c61e74388aa6fcd041c5f3b47490a0c0d62b7d08'
DEBUG - 2016-07-25 14:29:47 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c61e74388aa6fcd041c5f3b47490a0c0d62b7d08', '101.226.68.215', 1469428187, '__ci_last_regenerate|i:1469428187;')
DEBUG - 2016-07-25 14:29:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:47 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:47 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:47 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:47 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:47 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:47 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d3038a21ecc50ad049b172a8df1091645d74c34'
DEBUG - 2016-07-25 14:29:47 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4d3038a21ecc50ad049b172a8df1091645d74c34', '112.90.82.218', 1469428187, '__ci_last_regenerate|i:1469428187;')
DEBUG - 2016-07-25 14:29:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9dfaf01b566cd357c3318982cf10698768dccadb'
DEBUG - 2016-07-25 14:29:47 --> Total execution time: 0.1920
DEBUG - 2016-07-25 14:29:47 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9dfaf01b566cd357c3318982cf10698768dccadb', '101.226.68.215', 1469428187, '__ci_last_regenerate|i:1469428187;')
DEBUG - 2016-07-25 14:29:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:47 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:47 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:47 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a619e7b94ea51d183f77070c8526a80873622072'
DEBUG - 2016-07-25 14:29:47 --> Total execution time: 0.0870
DEBUG - 2016-07-25 14:29:47 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a619e7b94ea51d183f77070c8526a80873622072', '112.90.82.218', 1469428187, '__ci_last_regenerate|i:1469428187;')
DEBUG - 2016-07-25 14:29:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:48 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:48 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:48 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f018f40328f9e0e5a0d6f0cc4ebd5234ffb1508'
DEBUG - 2016-07-25 14:29:48 --> Total execution time: 0.1140
DEBUG - 2016-07-25 14:29:48 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6f018f40328f9e0e5a0d6f0cc4ebd5234ffb1508', '101.226.64.174', 1469428188, '__ci_last_regenerate|i:1469428188;')
DEBUG - 2016-07-25 14:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:49 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:49 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:49 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8968dea9003c3a11ed8a8b473786762a19d366b4'
DEBUG - 2016-07-25 14:29:49 --> Total execution time: 0.0830
DEBUG - 2016-07-25 14:29:49 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8968dea9003c3a11ed8a8b473786762a19d366b4', '180.153.206.17', 1469428189, '__ci_last_regenerate|i:1469428189;')
DEBUG - 2016-07-25 14:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:49 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:49 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:49 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ee46a57d60535f61dd75362abfdcd02eb7eda570'
DEBUG - 2016-07-25 14:29:49 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ee46a57d60535f61dd75362abfdcd02eb7eda570', '180.153.161.55', 1469428189, '__ci_last_regenerate|i:1469428189;')
DEBUG - 2016-07-25 14:29:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:52 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:52 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:52 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '58435d4f6de14e3bafb6e63b49cc2c3b8f5e7261'
DEBUG - 2016-07-25 14:29:52 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('58435d4f6de14e3bafb6e63b49cc2c3b8f5e7261', '101.226.33.238', 1469428192, '__ci_last_regenerate|i:1469428192;')
DEBUG - 2016-07-25 14:29:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:52 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:52 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '58435d4f6de14e3bafb6e63b49cc2c3b8f5e7261'
DEBUG - 2016-07-25 14:29:52 --> Total execution time: 0.0910
DEBUG - 2016-07-25 14:29:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428192
WHERE id = '58435d4f6de14e3bafb6e63b49cc2c3b8f5e7261'
DEBUG - 2016-07-25 14:29:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:52 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:52 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:52 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8b532d3d5ffc43c790ea33e3b221794e4672d7c8'
DEBUG - 2016-07-25 14:29:52 --> Total execution time: 0.0790
DEBUG - 2016-07-25 14:29:52 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8b532d3d5ffc43c790ea33e3b221794e4672d7c8', '101.226.89.115', 1469428192, '__ci_last_regenerate|i:1469428192;')
DEBUG - 2016-07-25 14:29:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:53 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:53 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:53 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ce54602a95f81af8fa5cd2efa81880f5fd935beb'
DEBUG - 2016-07-25 14:29:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ce54602a95f81af8fa5cd2efa81880f5fd935beb', '101.226.89.115', 1469428193, '__ci_last_regenerate|i:1469428193;')
DEBUG - 2016-07-25 14:29:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:29:53 --> Security Class Initialized
DEBUG - 2016-07-25 14:29:53 --> CRSF cookie Set
DEBUG - 2016-07-25 14:29:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:29:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ce54602a95f81af8fa5cd2efa81880f5fd935beb'
DEBUG - 2016-07-25 14:29:53 --> Total execution time: 0.1470
DEBUG - 2016-07-25 14:29:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428193
WHERE id = 'ce54602a95f81af8fa5cd2efa81880f5fd935beb'
DEBUG - 2016-07-25 14:30:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:30:24 --> CRSF cookie Set
DEBUG - 2016-07-25 14:30:24 --> Security Class Initialized
DEBUG - 2016-07-25 14:30:24 --> CRSF cookie Set
DEBUG - 2016-07-25 14:30:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:30:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'df656cd08c0b84627fc7a2fd3a8e1c017c75fe38'
DEBUG - 2016-07-25 14:30:24 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('df656cd08c0b84627fc7a2fd3a8e1c017c75fe38', '123.232.156.53', 1469428224, '__ci_last_regenerate|i:1469428224;')
DEBUG - 2016-07-25 14:30:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:30:27 --> Security Class Initialized
DEBUG - 2016-07-25 14:30:27 --> CRSF cookie Set
DEBUG - 2016-07-25 14:30:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:30:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'df656cd08c0b84627fc7a2fd3a8e1c017c75fe38'
DEBUG - 2016-07-25 14:30:27 --> Total execution time: 0.1150
DEBUG - 2016-07-25 14:30:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428227
WHERE id = 'df656cd08c0b84627fc7a2fd3a8e1c017c75fe38'
DEBUG - 2016-07-25 14:30:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:30:28 --> CRSF cookie Set
DEBUG - 2016-07-25 14:30:28 --> Security Class Initialized
DEBUG - 2016-07-25 14:30:28 --> CRSF cookie Set
DEBUG - 2016-07-25 14:30:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:30:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ccfbd21799af1bbc0f8d99f49b0286dfe6fb8f98'
DEBUG - 2016-07-25 14:30:28 --> Total execution time: 0.1140
DEBUG - 2016-07-25 14:30:28 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ccfbd21799af1bbc0f8d99f49b0286dfe6fb8f98', '101.226.33.203', 1469428228, '__ci_last_regenerate|i:1469428228;')
DEBUG - 2016-07-25 14:30:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:30:29 --> CRSF cookie Set
DEBUG - 2016-07-25 14:30:29 --> Security Class Initialized
DEBUG - 2016-07-25 14:30:29 --> CRSF cookie Set
DEBUG - 2016-07-25 14:30:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:30:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '73250f4e6a3861a0eca644be4fd3ba932bc9823f'
DEBUG - 2016-07-25 14:30:29 --> Total execution time: 0.1840
DEBUG - 2016-07-25 14:30:29 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('73250f4e6a3861a0eca644be4fd3ba932bc9823f', '101.226.89.122', 1469428229, '__ci_last_regenerate|i:1469428229;')
DEBUG - 2016-07-25 14:30:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:30:33 --> CRSF cookie Set
DEBUG - 2016-07-25 14:30:33 --> Security Class Initialized
DEBUG - 2016-07-25 14:30:33 --> CRSF cookie Set
DEBUG - 2016-07-25 14:30:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:30:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'df8daac65a76c913ae933440828d31172cdb740c'
DEBUG - 2016-07-25 14:30:33 --> Total execution time: 0.1650
DEBUG - 2016-07-25 14:30:33 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('df8daac65a76c913ae933440828d31172cdb740c', '180.153.206.20', 1469428233, '__ci_last_regenerate|i:1469428233;')
DEBUG - 2016-07-25 14:30:36 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:30:36 --> CRSF cookie Set
DEBUG - 2016-07-25 14:30:36 --> Security Class Initialized
DEBUG - 2016-07-25 14:30:36 --> CRSF cookie Set
DEBUG - 2016-07-25 14:30:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:30:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c93ba0616f6dba43da18294e5f72eeb46c5c9a63'
DEBUG - 2016-07-25 14:30:36 --> Total execution time: 0.0820
DEBUG - 2016-07-25 14:30:36 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c93ba0616f6dba43da18294e5f72eeb46c5c9a63', '180.153.214.182', 1469428236, '__ci_last_regenerate|i:1469428236;')
DEBUG - 2016-07-25 14:31:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:31:35 --> CRSF cookie Set
DEBUG - 2016-07-25 14:31:35 --> Security Class Initialized
DEBUG - 2016-07-25 14:31:35 --> CRSF cookie Set
DEBUG - 2016-07-25 14:31:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:31:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9fccc5f24d6f41771a8a33062f51fd9b4964d516'
DEBUG - 2016-07-25 14:31:35 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9fccc5f24d6f41771a8a33062f51fd9b4964d516', '123.232.156.53', 1469428295, '__ci_last_regenerate|i:1469428295;')
DEBUG - 2016-07-25 14:31:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:31:35 --> Security Class Initialized
DEBUG - 2016-07-25 14:31:35 --> CRSF cookie Set
DEBUG - 2016-07-25 14:31:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:31:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9fccc5f24d6f41771a8a33062f51fd9b4964d516'
DEBUG - 2016-07-25 14:31:35 --> Total execution time: 0.0930
DEBUG - 2016-07-25 14:31:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428295
WHERE id = '9fccc5f24d6f41771a8a33062f51fd9b4964d516'
DEBUG - 2016-07-25 14:35:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:35:33 --> Security Class Initialized
DEBUG - 2016-07-25 14:35:33 --> CRSF cookie Set
DEBUG - 2016-07-25 14:35:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:35:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3329c862cba80e81e627bbf3b636176cd988d7cd'
DEBUG - 2016-07-25 14:35:33 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '3329c862cba80e81e627bbf3b636176cd988d7cd'
DEBUG - 2016-07-25 14:35:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('abd64c74dcf34060b85d55deeb94c799', '114.91.129.78', '2016-07-25', '14:35:33', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '69c82fec52771bad88d5ae6ca61bef91e04c6d46')
DEBUG - 2016-07-25 14:35:33 --> 查询订单
DEBUG - 2016-07-25 14:35:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-25 14:35:33 --> Total execution time: 0.2330
DEBUG - 2016-07-25 14:35:33 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('69c82fec52771bad88d5ae6ca61bef91e04c6d46', '114.91.129.78', 1469428533, '__ci_last_regenerate|i:1469428533;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-25 14:35:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:35:33 --> CRSF cookie Set
DEBUG - 2016-07-25 14:35:33 --> Security Class Initialized
DEBUG - 2016-07-25 14:35:33 --> CRSF cookie Set
DEBUG - 2016-07-25 14:35:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:35:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ee52c27d378d46319e22400d1eb4fc1be7e5ba2a'
DEBUG - 2016-07-25 14:35:33 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ee52c27d378d46319e22400d1eb4fc1be7e5ba2a', '101.226.89.123', 1469428533, '__ci_last_regenerate|i:1469428533;')
DEBUG - 2016-07-25 14:35:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:35:40 --> Security Class Initialized
DEBUG - 2016-07-25 14:35:40 --> CRSF cookie Set
DEBUG - 2016-07-25 14:35:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:35:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:35:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('80ff22d0386c43d288958f982424bd45', '114.91.129.78', '2016-07-25', '14:35:40', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '69c82fec52771bad88d5ae6ca61bef91e04c6d46')
DEBUG - 2016-07-25 14:35:40 --> 查询待审核订单
DEBUG - 2016-07-25 14:35:40 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 14:35:40 --> Total execution time: 0.5010
DEBUG - 2016-07-25 14:35:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428540
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:35:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:35:41 --> CRSF cookie Set
DEBUG - 2016-07-25 14:35:41 --> Security Class Initialized
DEBUG - 2016-07-25 14:35:41 --> CRSF cookie Set
DEBUG - 2016-07-25 14:35:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:35:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7643e17c93135c70d7d2df5bb70d097bc90b057e'
DEBUG - 2016-07-25 14:35:41 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7643e17c93135c70d7d2df5bb70d097bc90b057e', '180.153.211.172', 1469428541, '__ci_last_regenerate|i:1469428541;')
DEBUG - 2016-07-25 14:35:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:35:41 --> Security Class Initialized
DEBUG - 2016-07-25 14:35:41 --> CRSF cookie Set
DEBUG - 2016-07-25 14:35:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:35:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7643e17c93135c70d7d2df5bb70d097bc90b057e'
DEBUG - 2016-07-25 14:35:41 --> Total execution time: 0.1170
DEBUG - 2016-07-25 14:35:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428541
WHERE id = '7643e17c93135c70d7d2df5bb70d097bc90b057e'
DEBUG - 2016-07-25 14:35:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:35:49 --> Security Class Initialized
DEBUG - 2016-07-25 14:35:49 --> CRSF cookie Set
DEBUG - 2016-07-25 14:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:35:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:35:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:35:49 --> CRSF cookie Set
DEBUG - 2016-07-25 14:35:49 --> Security Class Initialized
DEBUG - 2016-07-25 14:35:49 --> CRSF cookie Set
DEBUG - 2016-07-25 14:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:35:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c85723557f3241fc88a826d5a3d89346', '114.91.129.78', '2016-07-25', '14:35:49', '120340234', '/admin/order/check/bf4a8f5009414d71958ee5b901b2e98a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '69c82fec52771bad88d5ae6ca61bef91e04c6d46')
DEBUG - 2016-07-25 14:35:49 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-25 14:35:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '070751d5233755dbb0214782defe4e7dc98daa50'
DEBUG - 2016-07-25 14:35:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:35:49 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='bf4a8f5009414d71958ee5b901b2e98a' order by create_date_time desc
DEBUG - 2016-07-25 14:35:49 --> CRSF cookie Set
DEBUG - 2016-07-25 14:35:49 --> Security Class Initialized
DEBUG - 2016-07-25 14:35:49 --> CRSF cookie Set
DEBUG - 2016-07-25 14:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:35:49 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('070751d5233755dbb0214782defe4e7dc98daa50', '112.65.193.14', 1469428549, '__ci_last_regenerate|i:1469428549;')
DEBUG - 2016-07-25 14:35:49 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-25 14:35:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '87fc6d65cac7a392a1576cc52757d31f547b96f3'
DEBUG - 2016-07-25 14:35:49 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='bf4a8f5009414d71958ee5b901b2e98a'    order by t1.lno asc
        
DEBUG - 2016-07-25 14:35:49 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('87fc6d65cac7a392a1576cc52757d31f547b96f3', '101.226.89.117', 1469428549, '__ci_last_regenerate|i:1469428549;')
DEBUG - 2016-07-25 14:35:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:35:49 --> Security Class Initialized
DEBUG - 2016-07-25 14:35:49 --> Total execution time: 0.4100
DEBUG - 2016-07-25 14:35:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428549
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:35:49 --> CRSF cookie Set
DEBUG - 2016-07-25 14:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:35:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '070751d5233755dbb0214782defe4e7dc98daa50'
DEBUG - 2016-07-25 14:35:49 --> Total execution time: 0.1050
DEBUG - 2016-07-25 14:35:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428549
WHERE id = '070751d5233755dbb0214782defe4e7dc98daa50'
DEBUG - 2016-07-25 14:35:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:35:54 --> Security Class Initialized
DEBUG - 2016-07-25 14:35:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:35:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:35:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ba550097d7014fc5b788f693f3a06907', '114.91.129.78', '2016-07-25', '14:35:54', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '69c82fec52771bad88d5ae6ca61bef91e04c6d46')
DEBUG - 2016-07-25 14:35:54 --> 审核订单
DEBUG - 2016-07-25 14:35:54 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'bf4a8f5009414d71958ee5b901b2e98a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-25 14:35:54 --> 过程调用语句：  execute USP_APSOS_outorder 'bf4a8f5009414d71958ee5b901b2e98a'
ERROR - 2016-07-25 14:36:00 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-25 14:36:00 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-25 14:36:00 --> Total execution time: 6.5614
DEBUG - 2016-07-25 14:36:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428560
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:36:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:36:01 --> Security Class Initialized
DEBUG - 2016-07-25 14:36:01 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:36:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:36:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8e24f3da1e204748a94c3f231a5b6c15', '114.91.129.78', '2016-07-25', '14:36:01', '120340234', '/admin/order/check/bf4a8f5009414d71958ee5b901b2e98a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '69c82fec52771bad88d5ae6ca61bef91e04c6d46')
DEBUG - 2016-07-25 14:36:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-25 14:36:01 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='bf4a8f5009414d71958ee5b901b2e98a' order by create_date_time desc
DEBUG - 2016-07-25 14:36:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-25 14:36:01 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='bf4a8f5009414d71958ee5b901b2e98a'    order by t1.lno asc
        
DEBUG - 2016-07-25 14:36:01 --> Total execution time: 0.1610
DEBUG - 2016-07-25 14:36:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428561
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:36:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:36:02 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:02 --> Security Class Initialized
DEBUG - 2016-07-25 14:36:02 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:36:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7f1f8a93d96b81fe4233f61bd781640b7dbfc1cd'
DEBUG - 2016-07-25 14:36:02 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7f1f8a93d96b81fe4233f61bd781640b7dbfc1cd', '180.153.163.190', 1469428562, '__ci_last_regenerate|i:1469428562;')
DEBUG - 2016-07-25 14:36:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:36:02 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:02 --> Security Class Initialized
DEBUG - 2016-07-25 14:36:02 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:36:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '903f60128ee9310863a8a756d123591e636aebf6'
DEBUG - 2016-07-25 14:36:02 --> Total execution time: 0.0870
DEBUG - 2016-07-25 14:36:02 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('903f60128ee9310863a8a756d123591e636aebf6', '180.153.163.190', 1469428562, '__ci_last_regenerate|i:1469428562;')
DEBUG - 2016-07-25 14:36:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:36:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:36:51 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:51 --> Security Class Initialized
DEBUG - 2016-07-25 14:36:51 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:36:51 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:51 --> Security Class Initialized
DEBUG - 2016-07-25 14:36:51 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:36:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:36:51 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:51 --> Security Class Initialized
DEBUG - 2016-07-25 14:36:51 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:36:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '52bf93a78fad62dd6da173401f6d96beeabc7a58'
DEBUG - 2016-07-25 14:36:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:36:51 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:51 --> Security Class Initialized
DEBUG - 2016-07-25 14:36:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d10b633264a8d49d7ffa697f1091505d5fcd0da'
DEBUG - 2016-07-25 14:36:51 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:36:51 --> Total execution time: 0.1390
DEBUG - 2016-07-25 14:36:51 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4d10b633264a8d49d7ffa697f1091505d5fcd0da', '101.226.89.122', 1469428611, '__ci_last_regenerate|i:1469428611;')
DEBUG - 2016-07-25 14:36:51 --> Total execution time: 0.1590
DEBUG - 2016-07-25 14:36:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8f27dd3f2fbfcdb86750c5c66d9587bcf25a3555'
DEBUG - 2016-07-25 14:36:51 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('52bf93a78fad62dd6da173401f6d96beeabc7a58', '101.226.89.122', 1469428611, '__ci_last_regenerate|i:1469428611;')
DEBUG - 2016-07-25 14:36:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:36:52 --> No URI present. Default controller set.
DEBUG - 2016-07-25 14:36:52 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:52 --> Security Class Initialized
DEBUG - 2016-07-25 14:36:52 --> Total execution time: 0.2270
DEBUG - 2016-07-25 14:36:52 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8f27dd3f2fbfcdb86750c5c66d9587bcf25a3555', '101.226.89.122', 1469428612, '__ci_last_regenerate|i:1469428612;')
DEBUG - 2016-07-25 14:36:52 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:36:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b1ed132d5528a1bff424b3e7e3a9bfd72497486e'
DEBUG - 2016-07-25 14:36:52 --> Total execution time: 0.2340
DEBUG - 2016-07-25 14:36:52 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b1ed132d5528a1bff424b3e7e3a9bfd72497486e', '101.226.89.122', 1469428612, '__ci_last_regenerate|i:1469428612;')
DEBUG - 2016-07-25 14:36:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '021ef6610693f588c3e7a50b9ce71ec217b6f5fc'
DEBUG - 2016-07-25 14:36:52 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('021ef6610693f588c3e7a50b9ce71ec217b6f5fc', '101.226.89.122', 1469428612, '__ci_last_regenerate|i:1469428612;')
DEBUG - 2016-07-25 14:36:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:36:57 --> Security Class Initialized
DEBUG - 2016-07-25 14:36:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:36:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:36:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('333cb889f1264192bf19ff8620d8ca9c', '114.91.129.78', '2016-07-25', '14:36:57', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '69c82fec52771bad88d5ae6ca61bef91e04c6d46')
DEBUG - 2016-07-25 14:36:57 --> 审核订单
DEBUG - 2016-07-25 14:36:57 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'bf4a8f5009414d71958ee5b901b2e98a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-25 14:36:57 --> 过程调用语句：  execute USP_APSOS_outorder 'bf4a8f5009414d71958ee5b901b2e98a'
ERROR - 2016-07-25 14:36:57 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-25 14:36:57 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-25 14:36:57 --> Total execution time: 0.7000
DEBUG - 2016-07-25 14:36:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428617
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:36:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:36:57 --> Security Class Initialized
DEBUG - 2016-07-25 14:36:57 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:36:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:36:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f960f98b1fa94797bd74b0ba8e0265fc', '114.91.129.78', '2016-07-25', '14:36:57', '120340234', '/admin/order/check/bf4a8f5009414d71958ee5b901b2e98a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '69c82fec52771bad88d5ae6ca61bef91e04c6d46')
DEBUG - 2016-07-25 14:36:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-25 14:36:57 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='bf4a8f5009414d71958ee5b901b2e98a' order by create_date_time desc
DEBUG - 2016-07-25 14:36:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-25 14:36:57 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='bf4a8f5009414d71958ee5b901b2e98a'    order by t1.lno asc
        
DEBUG - 2016-07-25 14:36:57 --> Total execution time: 0.1010
DEBUG - 2016-07-25 14:36:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428617
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:36:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:36:58 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:58 --> Security Class Initialized
DEBUG - 2016-07-25 14:36:58 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:36:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:36:58 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:58 --> Security Class Initialized
DEBUG - 2016-07-25 14:36:58 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:36:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '327463b811744a157d897ca4a3d78387321e9b60'
DEBUG - 2016-07-25 14:36:58 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('327463b811744a157d897ca4a3d78387321e9b60', '101.226.33.218', 1469428618, '__ci_last_regenerate|i:1469428618;')
DEBUG - 2016-07-25 14:36:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0cdf13190cbc7c5b56571c0db3077933d97586f9'
DEBUG - 2016-07-25 14:36:58 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0cdf13190cbc7c5b56571c0db3077933d97586f9', '112.65.193.14', 1469428618, '__ci_last_regenerate|i:1469428618;')
DEBUG - 2016-07-25 14:36:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:36:58 --> Security Class Initialized
DEBUG - 2016-07-25 14:36:58 --> CRSF cookie Set
DEBUG - 2016-07-25 14:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:36:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '327463b811744a157d897ca4a3d78387321e9b60'
DEBUG - 2016-07-25 14:36:58 --> Total execution time: 0.0880
DEBUG - 2016-07-25 14:36:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428618
WHERE id = '327463b811744a157d897ca4a3d78387321e9b60'
DEBUG - 2016-07-25 14:37:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:37:00 --> Security Class Initialized
DEBUG - 2016-07-25 14:37:00 --> CRSF cookie Set
DEBUG - 2016-07-25 14:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:37:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:37:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('eb534b11e4764b2482c1b56d5ac1d226', '114.91.129.78', '2016-07-25', '14:37:00', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '69c82fec52771bad88d5ae6ca61bef91e04c6d46')
DEBUG - 2016-07-25 14:37:00 --> 查询待审核订单
DEBUG - 2016-07-25 14:37:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-25 14:37:00 --> Total execution time: 0.0990
DEBUG - 2016-07-25 14:37:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428620
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:37:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:37:04 --> Security Class Initialized
DEBUG - 2016-07-25 14:37:04 --> CRSF cookie Set
DEBUG - 2016-07-25 14:37:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:37:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:37:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f579f2fbcbf04e1eba99b7f77005aa18', '114.91.129.78', '2016-07-25', '14:37:04', '120340234', '/admin/order/check/bf4a8f5009414d71958ee5b901b2e98a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '69c82fec52771bad88d5ae6ca61bef91e04c6d46')
DEBUG - 2016-07-25 14:37:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-25 14:37:04 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='bf4a8f5009414d71958ee5b901b2e98a' order by create_date_time desc
DEBUG - 2016-07-25 14:37:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-25 14:37:04 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='bf4a8f5009414d71958ee5b901b2e98a'    order by t1.lno asc
        
DEBUG - 2016-07-25 14:37:04 --> Total execution time: 0.1050
DEBUG - 2016-07-25 14:37:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428624
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:37:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:37:09 --> Security Class Initialized
DEBUG - 2016-07-25 14:37:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:37:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:37:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('76b1bfe7d5b8425bb86ff7a33c458f26', '114.91.129.78', '2016-07-25', '14:37:09', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '69c82fec52771bad88d5ae6ca61bef91e04c6d46')
DEBUG - 2016-07-25 14:37:09 --> 审核订单
DEBUG - 2016-07-25 14:37:09 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'bf4a8f5009414d71958ee5b901b2e98a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-25 14:37:09 --> 过程调用语句：  execute USP_APSOS_outorder 'bf4a8f5009414d71958ee5b901b2e98a'
ERROR - 2016-07-25 14:37:09 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-25 14:37:09 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-25 14:37:09 --> Total execution time: 0.1420
DEBUG - 2016-07-25 14:37:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428629
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:37:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:37:11 --> Security Class Initialized
DEBUG - 2016-07-25 14:37:11 --> CRSF cookie Set
DEBUG - 2016-07-25 14:37:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:37:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:37:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('280a033d2de44fcfb5c62b559a0ab342', '114.91.129.78', '2016-07-25', '14:37:11', '120340234', '/admin/order/check/bf4a8f5009414d71958ee5b901b2e98a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '69c82fec52771bad88d5ae6ca61bef91e04c6d46')
DEBUG - 2016-07-25 14:37:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-25 14:37:11 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='bf4a8f5009414d71958ee5b901b2e98a' order by create_date_time desc
DEBUG - 2016-07-25 14:37:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-25 14:37:11 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='bf4a8f5009414d71958ee5b901b2e98a'    order by t1.lno asc
        
DEBUG - 2016-07-25 14:37:11 --> Total execution time: 0.1060
DEBUG - 2016-07-25 14:37:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469428631
WHERE id = '69c82fec52771bad88d5ae6ca61bef91e04c6d46'
DEBUG - 2016-07-25 14:39:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:39:50 --> CRSF cookie Set
DEBUG - 2016-07-25 14:39:50 --> Security Class Initialized
DEBUG - 2016-07-25 14:39:50 --> CRSF cookie Set
DEBUG - 2016-07-25 14:39:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:39:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:39:50 --> CRSF cookie Set
DEBUG - 2016-07-25 14:39:50 --> Security Class Initialized
DEBUG - 2016-07-25 14:39:50 --> CRSF cookie Set
DEBUG - 2016-07-25 14:39:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 14:39:50 --> 404 Page Not Found: AdminUserLogin/assets
ERROR - 2016-07-25 14:39:50 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-07-25 14:39:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:39:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:39:50 --> No URI present. Default controller set.
DEBUG - 2016-07-25 14:39:50 --> CRSF cookie Set
DEBUG - 2016-07-25 14:39:50 --> Security Class Initialized
DEBUG - 2016-07-25 14:39:50 --> CRSF cookie Set
DEBUG - 2016-07-25 14:39:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:39:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:39:50 --> CRSF cookie Set
DEBUG - 2016-07-25 14:39:50 --> Security Class Initialized
ERROR - 2016-07-25 14:39:50 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-07-25 14:39:50 --> CRSF cookie Set
DEBUG - 2016-07-25 14:39:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:39:50 --> CRSF cookie Set
DEBUG - 2016-07-25 14:39:50 --> Security Class Initialized
DEBUG - 2016-07-25 14:39:50 --> CRSF cookie Set
DEBUG - 2016-07-25 14:39:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-25 14:39:50 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-07-25 14:39:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '53e6f02ec9dccba73cae4e31aae44e027b4e7725'
DEBUG - 2016-07-25 14:39:50 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('53e6f02ec9dccba73cae4e31aae44e027b4e7725', '180.153.206.17', 1469428790, '__ci_last_regenerate|i:1469428790;')
DEBUG - 2016-07-25 14:48:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:48:31 --> Security Class Initialized
DEBUG - 2016-07-25 14:48:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:48:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9fccc5f24d6f41771a8a33062f51fd9b4964d516'
DEBUG - 2016-07-25 14:48:31 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '9fccc5f24d6f41771a8a33062f51fd9b4964d516'
DEBUG - 2016-07-25 14:48:31 --> 检查用户密码，新密文:c07cd18394ca7f70b23906c52103b752e578a653e07a9d49e88b72c3a2fd9157
DEBUG - 2016-07-25 14:48:31 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c07cd18394ca7f70b23906c52103b752e578a653e07a9d49e88b72c3a2fd9157'
AND   (
login_code = ' jnhrqcpjyxgs'
OR phone = ' jnhrqcpjyxgs'
OR email = ' jnhrqcpjyxgs'
 )
DEBUG - 2016-07-25 14:48:31 --> 登录返回结果数：0
DEBUG - 2016-07-25 14:48:31 --> Total execution time: 0.1740
DEBUG - 2016-07-25 14:48:31 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3927070afca37974161056daf534b1cc2d03a422', '123.232.156.53', 1469429311, '__ci_last_regenerate|i:1469429311;')
DEBUG - 2016-07-25 14:48:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:48:52 --> Security Class Initialized
DEBUG - 2016-07-25 14:48:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:48:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3927070afca37974161056daf534b1cc2d03a422'
DEBUG - 2016-07-25 14:48:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:48:52 --> 检查用户密码，新密文:c07cd18394ca7f70b23906c52103b752e578a653e07a9d49e88b72c3a2fd9157
DEBUG - 2016-07-25 14:48:52 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c07cd18394ca7f70b23906c52103b752e578a653e07a9d49e88b72c3a2fd9157'
AND   (
login_code = '  jnhrqcpjyxgs'
OR phone = '  jnhrqcpjyxgs'
OR email = '  jnhrqcpjyxgs'
 )
DEBUG - 2016-07-25 14:48:52 --> CRSF cookie Set
DEBUG - 2016-07-25 14:48:52 --> 登录返回结果数：0
DEBUG - 2016-07-25 14:48:52 --> Security Class Initialized
DEBUG - 2016-07-25 14:48:52 --> Total execution time: 0.1000
DEBUG - 2016-07-25 14:48:52 --> CRSF cookie Set
DEBUG - 2016-07-25 14:48:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469429332
WHERE id = '3927070afca37974161056daf534b1cc2d03a422'
DEBUG - 2016-07-25 14:48:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:48:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1f4fea753452cac00a22e45572a0e4b47552e37e'
DEBUG - 2016-07-25 14:48:52 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-25 14:48:52 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-25 14:48:52 --> 登录返回结果数：0
DEBUG - 2016-07-25 14:48:52 --> Total execution time: 0.1660
DEBUG - 2016-07-25 14:48:52 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('1f4fea753452cac00a22e45572a0e4b47552e37e', '101.226.89.115', 1469429332, '__ci_last_regenerate|i:1469429332;')
DEBUG - 2016-07-25 14:48:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:48:59 --> CRSF cookie Set
DEBUG - 2016-07-25 14:48:59 --> Security Class Initialized
DEBUG - 2016-07-25 14:48:59 --> CRSF cookie Set
DEBUG - 2016-07-25 14:48:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:48:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c6467d407424e42357986f069ac83a34b11bc04c'
DEBUG - 2016-07-25 14:48:59 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-25 14:48:59 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-25 14:48:59 --> 登录返回结果数：0
DEBUG - 2016-07-25 14:48:59 --> Total execution time: 0.0840
DEBUG - 2016-07-25 14:48:59 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c6467d407424e42357986f069ac83a34b11bc04c', '180.153.206.31', 1469429339, '__ci_last_regenerate|i:1469429339;')
DEBUG - 2016-07-25 14:50:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:50:59 --> Security Class Initialized
DEBUG - 2016-07-25 14:50:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:50:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3927070afca37974161056daf534b1cc2d03a422'
DEBUG - 2016-07-25 14:50:59 --> 检查用户密码，新密文:173922002ca8ed6b6d4d2421d84696f6886a45b847e71c5c653ad93a42bcedf6
DEBUG - 2016-07-25 14:50:59 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '173922002ca8ed6b6d4d2421d84696f6886a45b847e71c5c653ad93a42bcedf6'
AND   (
login_code = ' jnhrqcpjyxgs  '
OR phone = ' jnhrqcpjyxgs  '
OR email = ' jnhrqcpjyxgs  '
 )
DEBUG - 2016-07-25 14:50:59 --> 登录返回结果数：0
DEBUG - 2016-07-25 14:50:59 --> Total execution time: 0.1220
DEBUG - 2016-07-25 14:50:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469429459
WHERE id = '3927070afca37974161056daf534b1cc2d03a422'
DEBUG - 2016-07-25 14:55:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:55:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:55:37 --> CRSF cookie Set
DEBUG - 2016-07-25 14:55:37 --> Security Class Initialized
DEBUG - 2016-07-25 14:55:37 --> CRSF cookie Set
DEBUG - 2016-07-25 14:55:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:55:37 --> CRSF cookie Set
DEBUG - 2016-07-25 14:55:37 --> Security Class Initialized
DEBUG - 2016-07-25 14:55:37 --> CRSF cookie Set
DEBUG - 2016-07-25 14:55:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:55:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:55:37 --> CRSF cookie Set
DEBUG - 2016-07-25 14:55:37 --> Security Class Initialized
DEBUG - 2016-07-25 14:55:37 --> CRSF cookie Set
DEBUG - 2016-07-25 14:55:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:55:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:55:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 14:55:37 --> No URI present. Default controller set.
DEBUG - 2016-07-25 14:55:37 --> CRSF cookie Set
DEBUG - 2016-07-25 14:55:37 --> Security Class Initialized
DEBUG - 2016-07-25 14:55:37 --> CRSF cookie Set
DEBUG - 2016-07-25 14:55:37 --> CRSF cookie Set
DEBUG - 2016-07-25 14:55:37 --> Security Class Initialized
DEBUG - 2016-07-25 14:55:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:55:37 --> CRSF cookie Set
DEBUG - 2016-07-25 14:55:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 14:55:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd5dd85adff07ce7a79b85cb556af0df9247d8be3'
DEBUG - 2016-07-25 14:55:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9449d777a06a9846f80dc6562695979ba3a317e8'
DEBUG - 2016-07-25 14:55:37 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9449d777a06a9846f80dc6562695979ba3a317e8', '101.226.89.115', 1469429737, '__ci_last_regenerate|i:1469429737;')
DEBUG - 2016-07-25 14:55:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '133e5657996b283bfa81aaf1190024f3e17d520d'
DEBUG - 2016-07-25 14:55:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '59af2c4861125bf5af10c2e418813a9e06dfb01c'
DEBUG - 2016-07-25 14:55:37 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-25 14:55:37 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-25 14:55:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1324271fc5ad3bdc0ca2369ebd3362b3153915c3'
DEBUG - 2016-07-25 14:55:37 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-25 14:55:37 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-25 14:55:37 --> 登录返回结果数：0
DEBUG - 2016-07-25 14:55:37 --> Total execution time: 0.1970
DEBUG - 2016-07-25 14:55:37 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('133e5657996b283bfa81aaf1190024f3e17d520d', '101.226.89.115', 1469429737, '__ci_last_regenerate|i:1469429737;')
DEBUG - 2016-07-25 14:55:37 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-25 14:55:38 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-25 14:55:38 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-25 14:55:38 --> 登录返回结果数：0
DEBUG - 2016-07-25 14:55:38 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-25 14:55:38 --> Total execution time: 0.2380
DEBUG - 2016-07-25 14:55:38 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d5dd85adff07ce7a79b85cb556af0df9247d8be3', '101.226.89.115', 1469429738, '__ci_last_regenerate|i:1469429737;')
DEBUG - 2016-07-25 14:55:38 --> 登录返回结果数：0
DEBUG - 2016-07-25 14:55:38 --> 登录返回结果数：0
DEBUG - 2016-07-25 14:55:38 --> Total execution time: 0.1790
DEBUG - 2016-07-25 14:55:38 --> Total execution time: 0.2470
DEBUG - 2016-07-25 14:55:38 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('59af2c4861125bf5af10c2e418813a9e06dfb01c', '101.226.89.115', 1469429738, '__ci_last_regenerate|i:1469429737;')
DEBUG - 2016-07-25 14:55:38 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('1324271fc5ad3bdc0ca2369ebd3362b3153915c3', '101.226.89.115', 1469429738, '__ci_last_regenerate|i:1469429737;')
DEBUG - 2016-07-25 19:44:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 19:44:51 --> CRSF cookie Set
DEBUG - 2016-07-25 19:44:51 --> Security Class Initialized
DEBUG - 2016-07-25 19:44:51 --> CRSF cookie Set
DEBUG - 2016-07-25 19:44:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 19:44:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5657b9358af3cee88f0757d678c9921e7094c0f4'
DEBUG - 2016-07-25 19:44:51 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5657b9358af3cee88f0757d678c9921e7094c0f4', '114.91.129.78', 1469447091, '__ci_last_regenerate|i:1469447091;')
DEBUG - 2016-07-25 19:44:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-25 19:44:51 --> Security Class Initialized
DEBUG - 2016-07-25 19:44:51 --> CRSF cookie Set
DEBUG - 2016-07-25 19:44:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-25 19:44:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5657b9358af3cee88f0757d678c9921e7094c0f4'
DEBUG - 2016-07-25 19:44:51 --> Total execution time: 0.1092
DEBUG - 2016-07-25 19:44:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469447091
WHERE id = '5657b9358af3cee88f0757d678c9921e7094c0f4'
