<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-13 15:10:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:25 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:25 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:25 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:26 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6647bf0352742035f250025f67f8935566d2cf53', '114.91.129.78', 1468393826, '__ci_last_regenerate|i:1468393826;')
DEBUG - 2016-07-13 15:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:26 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:26 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:27 --> Total execution time: 0.2110
DEBUG - 2016-07-13 15:10:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393827
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:40 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:40 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-13 15:10:40 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-13 15:10:40 --> 登录返回结果数：1
DEBUG - 2016-07-13 15:10:40 --> 成功登录
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393840, data = '__ci_last_regenerate|i:1468393826;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:41 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:41 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9c0b157c63184461aa5292645163baa3', '114.91.129.78', '2016-07-13', '15:10:41', '120340234', '/admin/order/check/439f0e7428d2487ea41c2775ea0beabd', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='439f0e7428d2487ea41c2775ea0beabd'
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='439f0e7428d2487ea41c2775ea0beabd' order by create_date_time desc
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='439f0e7428d2487ea41c2775ea0beabd'
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='439f0e7428d2487ea41c2775ea0beabd'    order by t1.lno asc
        
DEBUG - 2016-07-13 15:10:41 --> Total execution time: 0.5810
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393841
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:41 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:41 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ef8f5756b46e4e8c966da26307992464', '114.91.129.78', '2016-07-13', '15:10:41', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:41 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:41 --> Total execution time: 0.1430
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393841
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:41 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:41 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('25c804810b9243d6b85799f2ba35e466', '114.91.129.78', '2016-07-13', '15:10:41', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:42 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:42 --> Total execution time: 0.1040
DEBUG - 2016-07-13 15:10:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393842
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:42 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:42 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('db54baec9fc448b685d426c2fabdbf3f', '114.91.129.78', '2016-07-13', '15:10:42', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:42 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:42 --> Total execution time: 0.1180
DEBUG - 2016-07-13 15:10:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393842
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:43 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:43 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a529ca0b96b74a1480287577cfa4e79d', '114.91.129.78', '2016-07-13', '15:10:43', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:43 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:43 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:43 --> Total execution time: 0.1310
DEBUG - 2016-07-13 15:10:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393843
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:43 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:43 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('006b61eb77414b349b499d94943b2f32', '114.91.129.78', '2016-07-13', '15:10:43', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:43 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:43 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:43 --> Total execution time: 0.0950
DEBUG - 2016-07-13 15:10:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393843
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:43 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:43 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('14735bedd49c45518b683d21b60ea1b7', '114.91.129.78', '2016-07-13', '15:10:43', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:43 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:43 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:43 --> Total execution time: 0.1450
DEBUG - 2016-07-13 15:10:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393843
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:44 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:44 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f64dffe8a76c4ba2ac50d8270dcfc81b', '114.91.129.78', '2016-07-13', '15:10:44', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:44 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:44 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:44 --> Total execution time: 0.1440
DEBUG - 2016-07-13 15:10:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393844
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:44 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:44 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('159e6b6911904ceda1e5ccf81791049b', '114.91.129.78', '2016-07-13', '15:10:44', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:44 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:44 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:44 --> Total execution time: 0.1080
DEBUG - 2016-07-13 15:10:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393844
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:44 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:44 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f75c640ef57b4406a0a670aad79aeb64', '114.91.129.78', '2016-07-13', '15:10:44', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:44 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:44 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:44 --> Total execution time: 0.0900
DEBUG - 2016-07-13 15:10:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393844
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:44 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:44 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bc9b1578e8d54013ab7c96eb06873202', '114.91.129.78', '2016-07-13', '15:10:45', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:45 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:45 --> Total execution time: 0.1230
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393845
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:45 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:45 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ae8320df5746415c9d015c720d0db818', '114.91.129.78', '2016-07-13', '15:10:45', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:45 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:45 --> Total execution time: 0.0990
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393845
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:45 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:45 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('18deee23d33a4de7be832e9802835f27', '114.91.129.78', '2016-07-13', '15:10:45', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:45 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:45 --> Total execution time: 0.1070
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393845
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:45 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:45 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('efea81165dd54528a3e1edfd769c1bc1', '114.91.129.78', '2016-07-13', '15:10:45', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:45 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:45 --> Total execution time: 0.1030
DEBUG - 2016-07-13 15:10:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393845
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:46 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:46 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0af330b25c4a4ad48e3a50626ff0d4ef', '114.91.129.78', '2016-07-13', '15:10:46', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:46 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:46 --> Total execution time: 0.0930
DEBUG - 2016-07-13 15:10:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393846
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:46 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:46 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('41ef863739a242f5b6a898bc769e144b', '114.91.129.78', '2016-07-13', '15:10:46', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:46 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:46 --> Total execution time: 0.0920
DEBUG - 2016-07-13 15:10:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393846
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-13 15:10:46 --> Security Class Initialized
DEBUG - 2016-07-13 15:10:46 --> CRSF cookie Set
DEBUG - 2016-07-13 15:10:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-13 15:10:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
DEBUG - 2016-07-13 15:10:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6592aff77f12481e89f54a7394bdad6e', '114.91.129.78', '2016-07-13', '15:10:46', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6647bf0352742035f250025f67f8935566d2cf53')
DEBUG - 2016-07-13 15:10:46 --> 查询待审核订单
DEBUG - 2016-07-13 15:10:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-13 15:10:46 --> Total execution time: 0.0890
DEBUG - 2016-07-13 15:10:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468393846
WHERE id = '6647bf0352742035f250025f67f8935566d2cf53'
