<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-18 09:00:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:00:11 --> CRSF cookie Set
DEBUG - 2016-07-18 09:00:11 --> Security Class Initialized
DEBUG - 2016-07-18 09:00:11 --> CRSF cookie Set
DEBUG - 2016-07-18 09:00:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:00:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:00:13 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('78db2ba3633680ccff1c77cd194e1de5b2d7a87c', '114.91.129.78', 1468803613, '__ci_last_regenerate|i:1468803613;')
DEBUG - 2016-07-18 09:00:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:00:13 --> Security Class Initialized
DEBUG - 2016-07-18 09:00:13 --> CRSF cookie Set
DEBUG - 2016-07-18 09:00:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:00:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:00:13 --> Total execution time: 0.2652
DEBUG - 2016-07-18 09:00:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803613
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:01:57 --> Security Class Initialized
DEBUG - 2016-07-18 09:01:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:01:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:57 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-18 09:01:57 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-18 09:01:57 --> 登录返回结果数：1
DEBUG - 2016-07-18 09:01:57 --> 成功登录
DEBUG - 2016-07-18 09:01:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803717, data = '__ci_last_regenerate|i:1468803613;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:01:58 --> Security Class Initialized
DEBUG - 2016-07-18 09:01:58 --> CRSF cookie Set
DEBUG - 2016-07-18 09:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('355ee6b535fa4b9ab6ae625393494cf2', '114.91.129.78', '2016-07-18', '09:01:58', '120340234', '/admin/order/check/a098faaa699e49ed8158a99ad39b3826', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a098faaa699e49ed8158a99ad39b3826'
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a098faaa699e49ed8158a99ad39b3826' order by create_date_time desc
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a098faaa699e49ed8158a99ad39b3826'
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a098faaa699e49ed8158a99ad39b3826'    order by t1.lno asc
        
DEBUG - 2016-07-18 09:01:58 --> Total execution time: 0.6864
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803718
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:01:58 --> Security Class Initialized
DEBUG - 2016-07-18 09:01:58 --> CRSF cookie Set
DEBUG - 2016-07-18 09:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('67cab6a604e348108518bad4ad3351be', '114.91.129.78', '2016-07-18', '09:01:58', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:01:58 --> 查询待审核订单
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:01:58 --> Total execution time: 0.1092
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803718
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:01:58 --> Security Class Initialized
DEBUG - 2016-07-18 09:01:58 --> CRSF cookie Set
DEBUG - 2016-07-18 09:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('18e289534c0c492c88a60df2997d19ff', '114.91.129.78', '2016-07-18', '09:01:58', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:01:58 --> 查询待审核订单
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:01:58 --> Total execution time: 0.0936
DEBUG - 2016-07-18 09:01:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803718
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:01:59 --> Security Class Initialized
DEBUG - 2016-07-18 09:01:59 --> CRSF cookie Set
DEBUG - 2016-07-18 09:01:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:01:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a7dd4fd5bcbd48ee9afd45d5615fe23e', '114.91.129.78', '2016-07-18', '09:01:59', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:01:59 --> 查询待审核订单
DEBUG - 2016-07-18 09:01:59 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:01:59 --> Total execution time: 0.0780
DEBUG - 2016-07-18 09:01:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803719
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:01:59 --> Security Class Initialized
DEBUG - 2016-07-18 09:01:59 --> CRSF cookie Set
DEBUG - 2016-07-18 09:01:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:01:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('722653d266c645f1b3d6fcc0d574ea5b', '114.91.129.78', '2016-07-18', '09:01:59', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:01:59 --> 查询待审核订单
DEBUG - 2016-07-18 09:01:59 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:01:59 --> Total execution time: 0.1092
DEBUG - 2016-07-18 09:01:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803719
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:01:59 --> Security Class Initialized
DEBUG - 2016-07-18 09:01:59 --> CRSF cookie Set
DEBUG - 2016-07-18 09:01:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:01:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:01:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4661001fcabf4834a184d8fb396aa962', '114.91.129.78', '2016-07-18', '09:01:59', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:02:00 --> 查询待审核订单
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:02:00 --> Total execution time: 0.1092
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803720
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:02:00 --> Security Class Initialized
DEBUG - 2016-07-18 09:02:00 --> CRSF cookie Set
DEBUG - 2016-07-18 09:02:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d8660ca7ab494343bcdb6b0c917ae6b1', '114.91.129.78', '2016-07-18', '09:02:00', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:02:00 --> 查询待审核订单
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:02:00 --> Total execution time: 0.0936
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803720
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:02:00 --> Security Class Initialized
DEBUG - 2016-07-18 09:02:00 --> CRSF cookie Set
DEBUG - 2016-07-18 09:02:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ec0bc7b7810147bf8f5a095ff44bb33b', '114.91.129.78', '2016-07-18', '09:02:00', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:02:00 --> 查询待审核订单
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:02:00 --> Total execution time: 0.0936
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803720
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:02:00 --> Security Class Initialized
DEBUG - 2016-07-18 09:02:00 --> CRSF cookie Set
DEBUG - 2016-07-18 09:02:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e22a4e615e7c42cf8a6ae54e9d4f833e', '114.91.129.78', '2016-07-18', '09:02:00', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:02:00 --> 查询待审核订单
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:02:00 --> Total execution time: 0.1092
DEBUG - 2016-07-18 09:02:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803720
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:02:01 --> Security Class Initialized
DEBUG - 2016-07-18 09:02:01 --> CRSF cookie Set
DEBUG - 2016-07-18 09:02:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('23940bd61688489b8d246d5d626ed843', '114.91.129.78', '2016-07-18', '09:02:01', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:02:01 --> 查询待审核订单
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:02:01 --> Total execution time: 0.1248
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803721
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:02:01 --> Security Class Initialized
DEBUG - 2016-07-18 09:02:01 --> CRSF cookie Set
DEBUG - 2016-07-18 09:02:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c2bc45fd52cb414b9b4d0f3f2a33629e', '114.91.129.78', '2016-07-18', '09:02:01', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:02:01 --> 查询待审核订单
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:02:01 --> Total execution time: 0.1092
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803721
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:02:01 --> Security Class Initialized
DEBUG - 2016-07-18 09:02:01 --> CRSF cookie Set
DEBUG - 2016-07-18 09:02:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('897f714c7eb84996a3873331d8b1b178', '114.91.129.78', '2016-07-18', '09:02:01', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:02:01 --> 查询待审核订单
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:02:01 --> Total execution time: 0.1404
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803721
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:02:01 --> Security Class Initialized
DEBUG - 2016-07-18 09:02:01 --> CRSF cookie Set
DEBUG - 2016-07-18 09:02:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e385de2580a742c7952999a4381a4282', '114.91.129.78', '2016-07-18', '09:02:01', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:02:01 --> 查询待审核订单
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:02:01 --> Total execution time: 0.0936
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803721
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:02:01 --> Security Class Initialized
DEBUG - 2016-07-18 09:02:01 --> CRSF cookie Set
DEBUG - 2016-07-18 09:02:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e40154329acd41b597bb16557d65d416', '114.91.129.78', '2016-07-18', '09:02:01', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:02:01 --> 查询待审核订单
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:02:01 --> Total execution time: 0.1092
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803721
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:02:01 --> Security Class Initialized
DEBUG - 2016-07-18 09:02:01 --> CRSF cookie Set
DEBUG - 2016-07-18 09:02:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d6c3b8ce1cdf4d159317824d4ed3e81a', '114.91.129.78', '2016-07-18', '09:02:01', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:02:01 --> 查询待审核订单
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:02:01 --> Total execution time: 0.0780
DEBUG - 2016-07-18 09:02:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803721
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:02:03 --> Security Class Initialized
DEBUG - 2016-07-18 09:02:03 --> CRSF cookie Set
DEBUG - 2016-07-18 09:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:02:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('042c6ae4ef73438c808c36cb3645158f', '114.91.129.78', '2016-07-18', '09:02:03', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:02:03 --> 查询待审核订单
DEBUG - 2016-07-18 09:02:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:02:03 --> Total execution time: 0.0936
DEBUG - 2016-07-18 09:02:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803723
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 09:02:03 --> Security Class Initialized
DEBUG - 2016-07-18 09:02:03 --> CRSF cookie Set
DEBUG - 2016-07-18 09:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 09:02:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 09:02:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('127ba16a6665471e91e97d6e85dd2ddc', '114.91.129.78', '2016-07-18', '09:02:03', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '78db2ba3633680ccff1c77cd194e1de5b2d7a87c')
DEBUG - 2016-07-18 09:02:03 --> 查询待审核订单
DEBUG - 2016-07-18 09:02:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 09:02:03 --> Total execution time: 0.1092
DEBUG - 2016-07-18 09:02:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468803723
WHERE id = '78db2ba3633680ccff1c77cd194e1de5b2d7a87c'
DEBUG - 2016-07-18 11:26:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:16 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:16 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:16 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('372828bc9fed9aed4d57c2bcae5beff0681959e0', '114.91.129.78', 1468812376, '__ci_last_regenerate|i:1468812376;')
DEBUG - 2016-07-18 11:26:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:16 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:16 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:16 --> Total execution time: 0.1248
DEBUG - 2016-07-18 11:26:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468812376
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:21 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:21 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:21 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a8223a2f4226ff96ad0291ed9df6798f86124eb5'
DEBUG - 2016-07-18 11:26:21 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a8223a2f4226ff96ad0291ed9df6798f86124eb5', '101.226.65.104', 1468812381, '__ci_last_regenerate|i:1468812381;')
DEBUG - 2016-07-18 11:26:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:25 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:25 --> 检查用户密码，新密文:95cdf6b98b17710fee716ec1e60c40d470fa329f2a6df8fec715d2a973c959ac
DEBUG - 2016-07-18 11:26:25 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '95cdf6b98b17710fee716ec1e60c40d470fa329f2a6df8fec715d2a973c959ac'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-18 11:26:25 --> 登录返回结果数：0
DEBUG - 2016-07-18 11:26:25 --> Total execution time: 0.0780
DEBUG - 2016-07-18 11:26:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468812385
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:25 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:25 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:25 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '98b78f44519a0f514bae41389d6a0a7a6794a75d'
DEBUG - 2016-07-18 11:26:25 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-18 11:26:25 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-18 11:26:25 --> 登录返回结果数：0
DEBUG - 2016-07-18 11:26:25 --> Total execution time: 0.1404
DEBUG - 2016-07-18 11:26:25 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('98b78f44519a0f514bae41389d6a0a7a6794a75d', '101.226.33.225', 1468812385, '__ci_last_regenerate|i:1468812385;')
DEBUG - 2016-07-18 11:26:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:26 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:26 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:26 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fd54b81f8ab9c60c63ce0e059bec9b2320b5be91'
DEBUG - 2016-07-18 11:26:26 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('fd54b81f8ab9c60c63ce0e059bec9b2320b5be91', '180.153.206.26', 1468812386, '__ci_last_regenerate|i:1468812386;')
DEBUG - 2016-07-18 11:26:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:26 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:26 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fd54b81f8ab9c60c63ce0e059bec9b2320b5be91'
DEBUG - 2016-07-18 11:26:26 --> Total execution time: 0.0780
DEBUG - 2016-07-18 11:26:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468812386
WHERE id = 'fd54b81f8ab9c60c63ce0e059bec9b2320b5be91'
DEBUG - 2016-07-18 11:26:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:34 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:34 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-18 11:26:34 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-18 11:26:34 --> 登录返回结果数：1
DEBUG - 2016-07-18 11:26:34 --> 成功登录
DEBUG - 2016-07-18 11:26:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468812394, data = '__ci_last_regenerate|i:1468812376;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:34 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:34 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:34 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:34 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:34 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a28f1c6fdff644d1b0894aa40281379e', '114.91.129.78', '2016-07-18', '11:26:34', '120340234', '/admin/backhome', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '372828bc9fed9aed4d57c2bcae5beff0681959e0')
DEBUG - 2016-07-18 11:26:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '55d17747de8fd8c95b8de2ddcc084f0db23f3a2f'
DEBUG - 2016-07-18 11:26:34 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-18 11:26:34 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-18 11:26:34 --> 登录返回结果数：0
DEBUG - 2016-07-18 11:26:34 --> Total execution time: 0.1716
DEBUG - 2016-07-18 11:26:34 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('55d17747de8fd8c95b8de2ddcc084f0db23f3a2f', '101.226.33.237', 1468812394, '__ci_last_regenerate|i:1468812394;')
DEBUG - 2016-07-18 11:26:34 --> Total execution time: 0.2184
DEBUG - 2016-07-18 11:26:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468812394
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:40 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:40 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('058a681210c947ff86df6263a627aaf1', '114.91.129.78', '2016-07-18', '11:26:40', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '372828bc9fed9aed4d57c2bcae5beff0681959e0')
DEBUG - 2016-07-18 11:26:40 --> 查询待审核订单
DEBUG - 2016-07-18 11:26:40 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 11:26:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:40 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:40 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:40 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c4d3b67aad193d7fd0954dba0d84759b51873d01'
DEBUG - 2016-07-18 11:26:40 --> Total execution time: 0.1872
DEBUG - 2016-07-18 11:26:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468812400
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:40 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c4d3b67aad193d7fd0954dba0d84759b51873d01', '112.65.193.14', 1468812400, '__ci_last_regenerate|i:1468812400;')
DEBUG - 2016-07-18 11:26:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:40 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:40 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c4d3b67aad193d7fd0954dba0d84759b51873d01'
DEBUG - 2016-07-18 11:26:40 --> Total execution time: 0.0780
DEBUG - 2016-07-18 11:26:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468812400
WHERE id = 'c4d3b67aad193d7fd0954dba0d84759b51873d01'
DEBUG - 2016-07-18 11:26:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:41 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:41 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:41 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '79ac1b2d784048e4086357efd596f5e3fc618725'
DEBUG - 2016-07-18 11:26:41 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('79ac1b2d784048e4086357efd596f5e3fc618725', '101.226.66.174', 1468812401, '__ci_last_regenerate|i:1468812401;')
DEBUG - 2016-07-18 11:26:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:44 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:44 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b26b2cd929b14d668a4cbc5270e7d08c', '114.91.129.78', '2016-07-18', '11:26:44', '120340234', '/admin/order/check/1faa0983e10e4d6b966aa6b033ab78c7', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '372828bc9fed9aed4d57c2bcae5beff0681959e0')
DEBUG - 2016-07-18 11:26:44 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='1faa0983e10e4d6b966aa6b033ab78c7'
DEBUG - 2016-07-18 11:26:44 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='1faa0983e10e4d6b966aa6b033ab78c7' order by create_date_time desc
DEBUG - 2016-07-18 11:26:44 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='1faa0983e10e4d6b966aa6b033ab78c7'
DEBUG - 2016-07-18 11:26:44 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='1faa0983e10e4d6b966aa6b033ab78c7'    order by t1.lno asc
        
DEBUG - 2016-07-18 11:26:44 --> Total execution time: 0.2340
DEBUG - 2016-07-18 11:26:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468812404
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:46 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:46 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:46 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'decde137e15ed5315c311c2c1dba82994a852dc7'
DEBUG - 2016-07-18 11:26:46 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('decde137e15ed5315c311c2c1dba82994a852dc7', '180.153.163.190', 1468812406, '__ci_last_regenerate|i:1468812406;')
DEBUG - 2016-07-18 11:26:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:47 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:47 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:47 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '41c6f8b2984d8046e4d7f8efcb63ea32e96da3cb'
DEBUG - 2016-07-18 11:26:47 --> Total execution time: 0.0624
DEBUG - 2016-07-18 11:26:47 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('41c6f8b2984d8046e4d7f8efcb63ea32e96da3cb', '180.153.163.190', 1468812407, '__ci_last_regenerate|i:1468812407;')
DEBUG - 2016-07-18 11:26:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:51 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('83d049a00c204c039f61e3626228269e', '114.91.129.78', '2016-07-18', '11:26:51', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '372828bc9fed9aed4d57c2bcae5beff0681959e0')
DEBUG - 2016-07-18 11:26:51 --> 审核订单
DEBUG - 2016-07-18 11:26:51 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '1faa0983e10e4d6b966aa6b033ab78c7'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-18 11:26:51 --> 过程调用语句：  execute USP_APSOS_outorder '1faa0983e10e4d6b966aa6b033ab78c7'
DEBUG - 2016-07-18 11:26:55 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340234', '1faa0983e10e4d6b966aa6b033ab78c7', '2', '', 'b26600c958454cca904f186e8efd88df', '2016-07-18 11:26:55')
DEBUG - 2016-07-18 11:26:55 --> 该订单状态更新成功:2
DEBUG - 2016-07-18 11:26:55 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='1faa0983e10e4d6b966aa6b033ab78c7'
DEBUG - 2016-07-18 11:26:55 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-07-18 11:26:57 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-18 11:26:57 --> Total execution time: 6.4116
DEBUG - 2016-07-18 11:26:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468812417
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:57 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:57 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:26:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5eef938681cb4790b19d9da7e4c3e45d', '114.91.129.78', '2016-07-18', '11:26:57', '120340234', '/admin/order/check/1faa0983e10e4d6b966aa6b033ab78c7', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '372828bc9fed9aed4d57c2bcae5beff0681959e0')
DEBUG - 2016-07-18 11:26:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:26:58 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:58 --> Security Class Initialized
DEBUG - 2016-07-18 11:26:58 --> CRSF cookie Set
DEBUG - 2016-07-18 11:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:26:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a3dd68204e27c91db48eb57b6dc94da0d39852de'
DEBUG - 2016-07-18 11:26:58 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a3dd68204e27c91db48eb57b6dc94da0d39852de', '180.153.211.190', 1468812418, '__ci_last_regenerate|i:1468812418;')
DEBUG - 2016-07-18 11:26:58 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='1faa0983e10e4d6b966aa6b033ab78c7'
DEBUG - 2016-07-18 11:26:58 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='1faa0983e10e4d6b966aa6b033ab78c7' order by create_date_time desc
DEBUG - 2016-07-18 11:26:58 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='1faa0983e10e4d6b966aa6b033ab78c7'
DEBUG - 2016-07-18 11:26:58 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='1faa0983e10e4d6b966aa6b033ab78c7'    order by t1.lno asc
        
DEBUG - 2016-07-18 11:26:58 --> Total execution time: 0.9672
DEBUG - 2016-07-18 11:26:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468812418
WHERE id = '372828bc9fed9aed4d57c2bcae5beff0681959e0'
DEBUG - 2016-07-18 11:27:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:27:06 --> CRSF cookie Set
DEBUG - 2016-07-18 11:27:06 --> Security Class Initialized
DEBUG - 2016-07-18 11:27:06 --> CRSF cookie Set
DEBUG - 2016-07-18 11:27:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:27:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b0ed44a53594d4b8c3a7c899f056e04de90477ff'
DEBUG - 2016-07-18 11:27:06 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b0ed44a53594d4b8c3a7c899f056e04de90477ff', '180.153.214.152', 1468812426, '__ci_last_regenerate|i:1468812426;')
DEBUG - 2016-07-18 11:27:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:27:07 --> Security Class Initialized
DEBUG - 2016-07-18 11:27:07 --> CRSF cookie Set
DEBUG - 2016-07-18 11:27:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:27:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b0ed44a53594d4b8c3a7c899f056e04de90477ff'
DEBUG - 2016-07-18 11:27:07 --> Total execution time: 0.0780
DEBUG - 2016-07-18 11:27:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468812427
WHERE id = 'b0ed44a53594d4b8c3a7c899f056e04de90477ff'
DEBUG - 2016-07-18 11:27:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:27:11 --> CRSF cookie Set
DEBUG - 2016-07-18 11:27:11 --> Security Class Initialized
DEBUG - 2016-07-18 11:27:11 --> CRSF cookie Set
DEBUG - 2016-07-18 11:27:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:27:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5009b02238c4e24230ed566332187c86a24497dd'
DEBUG - 2016-07-18 11:27:11 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5009b02238c4e24230ed566332187c86a24497dd', '180.153.163.190', 1468812431, '__ci_last_regenerate|i:1468812431;')
DEBUG - 2016-07-18 11:27:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:27:11 --> CRSF cookie Set
DEBUG - 2016-07-18 11:27:11 --> Security Class Initialized
DEBUG - 2016-07-18 11:27:11 --> CRSF cookie Set
DEBUG - 2016-07-18 11:27:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:27:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '53b4007ff51b4d32a4b5a2611f6d0561ec054dc1'
DEBUG - 2016-07-18 11:27:11 --> Total execution time: 0.0780
DEBUG - 2016-07-18 11:27:11 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('53b4007ff51b4d32a4b5a2611f6d0561ec054dc1', '180.153.163.190', 1468812431, '__ci_last_regenerate|i:1468812431;')
DEBUG - 2016-07-18 11:30:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:30:34 --> CRSF cookie Set
DEBUG - 2016-07-18 11:30:34 --> Security Class Initialized
DEBUG - 2016-07-18 11:30:34 --> CRSF cookie Set
DEBUG - 2016-07-18 11:30:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:30:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '42b181bcc8d9bdde6694ceddb7358f361ab17571'
DEBUG - 2016-07-18 11:30:34 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('42b181bcc8d9bdde6694ceddb7358f361ab17571', '119.147.146.189', 1468812634, '__ci_last_regenerate|i:1468812634;')
DEBUG - 2016-07-18 11:30:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:30:34 --> Security Class Initialized
DEBUG - 2016-07-18 11:30:34 --> CRSF cookie Set
DEBUG - 2016-07-18 11:30:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:30:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '42b181bcc8d9bdde6694ceddb7358f361ab17571'
DEBUG - 2016-07-18 11:30:34 --> Total execution time: 0.0624
DEBUG - 2016-07-18 11:30:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468812634
WHERE id = '42b181bcc8d9bdde6694ceddb7358f361ab17571'
DEBUG - 2016-07-18 11:30:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:30:35 --> Security Class Initialized
DEBUG - 2016-07-18 11:30:35 --> CRSF cookie Set
DEBUG - 2016-07-18 11:30:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 11:30:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '42b181bcc8d9bdde6694ceddb7358f361ab17571'
DEBUG - 2016-07-18 11:30:35 --> Total execution time: 0.0624
DEBUG - 2016-07-18 11:30:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468812635
WHERE id = '42b181bcc8d9bdde6694ceddb7358f361ab17571'
DEBUG - 2016-07-18 11:30:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 11:30:35 --> Security Class Initialized
DEBUG - 2016-07-18 11:30:35 --> CRSF cookie Set
DEBUG - 2016-07-18 11:30:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-18 11:30:35 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-07-18 13:55:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:28 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:28 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:28 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:28 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('013b96cedad7c67872d9f2462493e759ed57c8ce', '114.91.129.78', 1468821328, '__ci_last_regenerate|i:1468821328;')
DEBUG - 2016-07-18 13:55:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:28 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:28 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:28 --> Total execution time: 0.1830
DEBUG - 2016-07-18 13:55:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468821328
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:37 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:38 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-18 13:55:38 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-18 13:55:38 --> 登录返回结果数：1
DEBUG - 2016-07-18 13:55:38 --> 成功登录
DEBUG - 2016-07-18 13:55:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468821338, data = '__ci_last_regenerate|i:1468821328;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:38 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:38 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0c76587023e64d939db31b664f53ea10', '114.91.129.78', '2016-07-18', '13:55:38', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '013b96cedad7c67872d9f2462493e759ed57c8ce')
DEBUG - 2016-07-18 13:55:38 --> 查询待审核订单
DEBUG - 2016-07-18 13:55:38 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 13:55:38 --> Total execution time: 0.2710
DEBUG - 2016-07-18 13:55:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468821338
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:40 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:40 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('29f9d9b93c21482e822b486cb95ee56b', '114.91.129.78', '2016-07-18', '13:55:40', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '013b96cedad7c67872d9f2462493e759ed57c8ce')
DEBUG - 2016-07-18 13:55:40 --> 查询待审核订单
DEBUG - 2016-07-18 13:55:40 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 13:55:40 --> Total execution time: 0.1410
DEBUG - 2016-07-18 13:55:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468821340
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:42 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:42 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('91966c8e79a84425be7ae82162d253a6', '114.91.129.78', '2016-07-18', '13:55:42', '120340234', '/admin/order/check/0cd1e6dc07c14cada59858aefa7dd337', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '013b96cedad7c67872d9f2462493e759ed57c8ce')
DEBUG - 2016-07-18 13:55:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0cd1e6dc07c14cada59858aefa7dd337'
DEBUG - 2016-07-18 13:55:42 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0cd1e6dc07c14cada59858aefa7dd337' order by create_date_time desc
DEBUG - 2016-07-18 13:55:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0cd1e6dc07c14cada59858aefa7dd337'
DEBUG - 2016-07-18 13:55:42 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0cd1e6dc07c14cada59858aefa7dd337'    order by t1.lno asc
        
DEBUG - 2016-07-18 13:55:42 --> Total execution time: 0.1530
DEBUG - 2016-07-18 13:55:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468821342
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:42 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:42 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:42 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '098d8452c5f756b471cab1d3d5d0d2c0da7784be'
DEBUG - 2016-07-18 13:55:42 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('098d8452c5f756b471cab1d3d5d0d2c0da7784be', '180.153.214.152', 1468821342, '__ci_last_regenerate|i:1468821342;')
DEBUG - 2016-07-18 13:55:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:46 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ed51fc23c7b641bc8bde21a57e05a937', '114.91.129.78', '2016-07-18', '13:55:46', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '013b96cedad7c67872d9f2462493e759ed57c8ce')
DEBUG - 2016-07-18 13:55:46 --> 审核订单
DEBUG - 2016-07-18 13:55:46 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '0cd1e6dc07c14cada59858aefa7dd337'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-18 13:55:46 --> 过程调用语句：  execute USP_APSOS_outorder '0cd1e6dc07c14cada59858aefa7dd337'
DEBUG - 2016-07-18 13:55:47 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340234', '0cd1e6dc07c14cada59858aefa7dd337', '2', '', 'e4774e90189f4b028e64e63440d5be2c', '2016-07-18 13:55:47')
DEBUG - 2016-07-18 13:55:47 --> 该订单状态更新成功:2
DEBUG - 2016-07-18 13:55:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0cd1e6dc07c14cada59858aefa7dd337'
DEBUG - 2016-07-18 13:55:47 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-07-18 13:55:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:49 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:49 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:49 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4a4a9f74920a32dc8f865d280b5fd926df076e02'
DEBUG - 2016-07-18 13:55:49 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4a4a9f74920a32dc8f865d280b5fd926df076e02', '180.153.201.216', 1468821349, '__ci_last_regenerate|i:1468821349;')
DEBUG - 2016-07-18 13:55:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:49 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:49 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4a4a9f74920a32dc8f865d280b5fd926df076e02'
DEBUG - 2016-07-18 13:55:50 --> Total execution time: 0.1280
DEBUG - 2016-07-18 13:55:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468821350
WHERE id = '4a4a9f74920a32dc8f865d280b5fd926df076e02'
DEBUG - 2016-07-18 13:55:50 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-18 13:55:50 --> Total execution time: 3.8632
DEBUG - 2016-07-18 13:55:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468821350
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:50 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:50 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fd2c10a81270470b805c0dc27fdd84f5', '114.91.129.78', '2016-07-18', '13:55:50', '120340234', '/admin/order/check/0cd1e6dc07c14cada59858aefa7dd337', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '013b96cedad7c67872d9f2462493e759ed57c8ce')
DEBUG - 2016-07-18 13:55:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0cd1e6dc07c14cada59858aefa7dd337'
DEBUG - 2016-07-18 13:55:50 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0cd1e6dc07c14cada59858aefa7dd337' order by create_date_time desc
DEBUG - 2016-07-18 13:55:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0cd1e6dc07c14cada59858aefa7dd337'
DEBUG - 2016-07-18 13:55:50 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0cd1e6dc07c14cada59858aefa7dd337'    order by t1.lno asc
        
DEBUG - 2016-07-18 13:55:50 --> Total execution time: 0.1660
DEBUG - 2016-07-18 13:55:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468821350
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:51 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:51 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:51 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '26ae3749ed48aa202a9ebac76f9ff4b0e5008ac2'
DEBUG - 2016-07-18 13:55:51 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('26ae3749ed48aa202a9ebac76f9ff4b0e5008ac2', '180.153.206.25', 1468821351, '__ci_last_regenerate|i:1468821351;')
DEBUG - 2016-07-18 13:55:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:52 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:52 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('839977db7f3f42d89055cd47d006da32', '114.91.129.78', '2016-07-18', '13:55:52', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '013b96cedad7c67872d9f2462493e759ed57c8ce')
DEBUG - 2016-07-18 13:55:52 --> 查询待审核订单
DEBUG - 2016-07-18 13:55:52 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 13:55:52 --> Total execution time: 0.1100
DEBUG - 2016-07-18 13:55:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468821352
WHERE id = '013b96cedad7c67872d9f2462493e759ed57c8ce'
DEBUG - 2016-07-18 13:55:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:52 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:52 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:52 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9925b049d6c9ab989922e720db4b6dc4e795c76b'
DEBUG - 2016-07-18 13:55:52 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9925b049d6c9ab989922e720db4b6dc4e795c76b', '101.226.89.119', 1468821352, '__ci_last_regenerate|i:1468821352;')
DEBUG - 2016-07-18 13:55:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:58 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:58 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:58 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9cf10c3e57054c2c5df0d0253337724f43ef76c8'
DEBUG - 2016-07-18 13:55:58 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9cf10c3e57054c2c5df0d0253337724f43ef76c8', '180.153.163.210', 1468821358, '__ci_last_regenerate|i:1468821358;')
DEBUG - 2016-07-18 13:55:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:55:58 --> Security Class Initialized
DEBUG - 2016-07-18 13:55:58 --> CRSF cookie Set
DEBUG - 2016-07-18 13:55:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:55:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9cf10c3e57054c2c5df0d0253337724f43ef76c8'
DEBUG - 2016-07-18 13:55:58 --> Total execution time: 0.1070
DEBUG - 2016-07-18 13:55:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468821358
WHERE id = '9cf10c3e57054c2c5df0d0253337724f43ef76c8'
DEBUG - 2016-07-18 13:56:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:56:00 --> CRSF cookie Set
DEBUG - 2016-07-18 13:56:00 --> Security Class Initialized
DEBUG - 2016-07-18 13:56:00 --> CRSF cookie Set
DEBUG - 2016-07-18 13:56:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:56:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '47eeb45ed45fb41622387b1e2717e00b2c149e9e'
DEBUG - 2016-07-18 13:56:00 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('47eeb45ed45fb41622387b1e2717e00b2c149e9e', '180.153.214.191', 1468821360, '__ci_last_regenerate|i:1468821360;')
DEBUG - 2016-07-18 13:56:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 13:56:01 --> Security Class Initialized
DEBUG - 2016-07-18 13:56:01 --> CRSF cookie Set
DEBUG - 2016-07-18 13:56:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 13:56:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '47eeb45ed45fb41622387b1e2717e00b2c149e9e'
DEBUG - 2016-07-18 13:56:01 --> Total execution time: 0.1260
DEBUG - 2016-07-18 13:56:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468821361
WHERE id = '47eeb45ed45fb41622387b1e2717e00b2c149e9e'
DEBUG - 2016-07-18 15:41:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:41:40 --> CRSF cookie Set
DEBUG - 2016-07-18 15:41:40 --> Security Class Initialized
DEBUG - 2016-07-18 15:41:40 --> CRSF cookie Set
DEBUG - 2016-07-18 15:41:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:41:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:41:42 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('356953ab51bd265710865610dddeaf812532e7f6', '114.91.129.78', 1468827702, '__ci_last_regenerate|i:1468827701;')
DEBUG - 2016-07-18 15:41:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:41:42 --> Security Class Initialized
DEBUG - 2016-07-18 15:41:42 --> CRSF cookie Set
DEBUG - 2016-07-18 15:41:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:41:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:41:42 --> Total execution time: 0.2970
DEBUG - 2016-07-18 15:41:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827702
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:19 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:19 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-18 15:42:19 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-18 15:42:19 --> 登录返回结果数：1
DEBUG - 2016-07-18 15:42:19 --> 成功登录
DEBUG - 2016-07-18 15:42:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827739, data = '__ci_last_regenerate|i:1468827701;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:19 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:19 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3f8047d8b65e44e795dddf177cfdb50f', '114.91.129.78', '2016-07-18', '15:42:19', '120340234', '/admin/order/check/0cd1e6dc07c14cada59858aefa7dd337', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:19 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0cd1e6dc07c14cada59858aefa7dd337'
DEBUG - 2016-07-18 15:42:19 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0cd1e6dc07c14cada59858aefa7dd337' order by create_date_time desc
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0cd1e6dc07c14cada59858aefa7dd337'
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0cd1e6dc07c14cada59858aefa7dd337'    order by t1.lno asc
        
DEBUG - 2016-07-18 15:42:20 --> Total execution time: 0.6860
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827740
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:20 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:20 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8b5677f621e24fc585f48ecc055aa8f2', '114.91.129.78', '2016-07-18', '15:42:20', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:20 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:20 --> Total execution time: 0.2050
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827740
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:20 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:20 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4a1619abaa85426dbcfc423f295ecf44', '114.91.129.78', '2016-07-18', '15:42:20', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:20 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:20 --> Total execution time: 0.1010
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827740
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:20 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:20 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('74d5f6ebb35e4a97b1f1540328d44022', '114.91.129.78', '2016-07-18', '15:42:20', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:20 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:20 --> Total execution time: 0.1070
DEBUG - 2016-07-18 15:42:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827740
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:20 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:20 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ff18a8d21cd14b59b29c3e84fe387125', '114.91.129.78', '2016-07-18', '15:42:21', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:21 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:21 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:21 --> Total execution time: 0.0830
DEBUG - 2016-07-18 15:42:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827741
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:22 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:22 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:22 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE timestamp < 1468820542
DEBUG - 2016-07-18 15:42:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('21e4c08c618f48cbb16dc9ec2ab83d8f', '114.91.129.78', '2016-07-18', '15:42:24', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:24 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:24 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:24 --> Total execution time: 2.6862
DEBUG - 2016-07-18 15:42:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827744
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:24 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:24 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cc455f929b81419c959187bbe7eaf3cc', '114.91.129.78', '2016-07-18', '15:42:25', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:25 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:25 --> Total execution time: 0.1500
DEBUG - 2016-07-18 15:42:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827745
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:25 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:25 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('746c52ea1bbf474daca9343dcf33dbc2', '114.91.129.78', '2016-07-18', '15:42:25', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:25 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:25 --> Total execution time: 0.1650
DEBUG - 2016-07-18 15:42:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827745
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:26 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:26 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('330cfa5458f24875871f3bec4f6dfc56', '114.91.129.78', '2016-07-18', '15:42:26', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:26 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:26 --> Total execution time: 0.0990
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827746
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:26 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:26 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ead01be3a623474f88c7b7054def1157', '114.91.129.78', '2016-07-18', '15:42:26', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:26 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:26 --> Total execution time: 0.1020
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827746
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:26 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:26 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:26 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:26 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('36379498868e4af7b99592e5226e208b', '114.91.129.78', '2016-07-18', '15:42:26', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:26 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:26 --> Total execution time: 0.1350
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827746
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f8a1f14fd84743308b12bd29f67a8e7b', '114.91.129.78', '2016-07-18', '15:42:26', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:26 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:26 --> Total execution time: 0.1410
DEBUG - 2016-07-18 15:42:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827746
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:27 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:27 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e2fa954838bf4a2fa00d1d6cf9bcbb9e', '114.91.129.78', '2016-07-18', '15:42:27', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:27 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:27 --> Total execution time: 0.1630
DEBUG - 2016-07-18 15:42:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827747
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:28 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:28 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cc5cf47a627743dd801b158c80ef4195', '114.91.129.78', '2016-07-18', '15:42:28', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:28 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:28 --> Total execution time: 0.1340
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827748
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:28 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:28 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('52b8ada1540e41dca11053ea3cad34fa', '114.91.129.78', '2016-07-18', '15:42:28', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:28 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:28 --> Total execution time: 0.1230
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827748
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:28 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:28 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8a86bfa61adf4e9b9e36652955162d0a', '114.91.129.78', '2016-07-18', '15:42:28', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:28 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:28 --> Total execution time: 0.1190
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827748
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 15:42:28 --> Security Class Initialized
DEBUG - 2016-07-18 15:42:28 --> CRSF cookie Set
DEBUG - 2016-07-18 15:42:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('27df90f15ccc45b09b0949f643054a24', '114.91.129.78', '2016-07-18', '15:42:28', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '356953ab51bd265710865610dddeaf812532e7f6')
DEBUG - 2016-07-18 15:42:28 --> 查询待审核订单
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 15:42:28 --> Total execution time: 0.1130
DEBUG - 2016-07-18 15:42:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468827748
WHERE id = '356953ab51bd265710865610dddeaf812532e7f6'
DEBUG - 2016-07-18 19:10:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:10:50 --> CRSF cookie Set
DEBUG - 2016-07-18 19:10:50 --> Security Class Initialized
DEBUG - 2016-07-18 19:10:50 --> CRSF cookie Set
DEBUG - 2016-07-18 19:10:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:10:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:10:50 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('74f7b89208c5e4101987d18bf9c866dd153b1d67', '114.91.129.78', 1468840250, '__ci_last_regenerate|i:1468840250;')
DEBUG - 2016-07-18 19:10:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:10:50 --> Security Class Initialized
DEBUG - 2016-07-18 19:10:50 --> CRSF cookie Set
DEBUG - 2016-07-18 19:10:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:10:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:10:50 --> Total execution time: 0.1248
DEBUG - 2016-07-18 19:10:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468840250
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:10:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:10:52 --> Security Class Initialized
DEBUG - 2016-07-18 19:10:52 --> CRSF cookie Set
DEBUG - 2016-07-18 19:10:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:10:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:10:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468840252
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:10:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:10:52 --> Security Class Initialized
DEBUG - 2016-07-18 19:10:52 --> CRSF cookie Set
DEBUG - 2016-07-18 19:10:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:10:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:10:52 --> Total execution time: 0.0624
DEBUG - 2016-07-18 19:10:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468840252
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:10:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:10:52 --> CRSF cookie Set
DEBUG - 2016-07-18 19:10:52 --> Security Class Initialized
DEBUG - 2016-07-18 19:10:52 --> CRSF cookie Set
DEBUG - 2016-07-18 19:10:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:10:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1db860d7d1cfcc41847b6f23aebb3b0ef7c7a302'
DEBUG - 2016-07-18 19:10:52 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('1db860d7d1cfcc41847b6f23aebb3b0ef7c7a302', '180.153.201.79', 1468840252, '__ci_last_regenerate|i:1468840252;')
DEBUG - 2016-07-18 19:10:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:10:56 --> CRSF cookie Set
DEBUG - 2016-07-18 19:10:56 --> Security Class Initialized
DEBUG - 2016-07-18 19:10:56 --> CRSF cookie Set
DEBUG - 2016-07-18 19:10:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:10:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9aad4ef1e13e0cbfe84203e17f6eb7ccc490755b'
DEBUG - 2016-07-18 19:10:56 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9aad4ef1e13e0cbfe84203e17f6eb7ccc490755b', '180.153.214.176', 1468840256, '__ci_last_regenerate|i:1468840256;')
DEBUG - 2016-07-18 19:10:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:10:56 --> Security Class Initialized
DEBUG - 2016-07-18 19:10:56 --> CRSF cookie Set
DEBUG - 2016-07-18 19:10:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:10:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9aad4ef1e13e0cbfe84203e17f6eb7ccc490755b'
DEBUG - 2016-07-18 19:10:56 --> Total execution time: 0.0624
DEBUG - 2016-07-18 19:10:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468840256
WHERE id = '9aad4ef1e13e0cbfe84203e17f6eb7ccc490755b'
DEBUG - 2016-07-18 19:11:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:11:03 --> Security Class Initialized
DEBUG - 2016-07-18 19:11:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:11:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:11:03 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-18 19:11:03 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-18 19:11:03 --> 登录返回结果数：1
DEBUG - 2016-07-18 19:11:03 --> 成功登录
DEBUG - 2016-07-18 19:11:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468840263, data = '__ci_last_regenerate|i:1468840250;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:11:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:11:03 --> Security Class Initialized
DEBUG - 2016-07-18 19:11:03 --> CRSF cookie Set
DEBUG - 2016-07-18 19:11:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:11:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:11:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c680e0b811d84b0d81a3d2f66aebd3df', '114.91.129.78', '2016-07-18', '19:11:03', '120340234', '/admin/order/check/2fb0c50dfff14df89f7dbd437a2a223a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '74f7b89208c5e4101987d18bf9c866dd153b1d67')
DEBUG - 2016-07-18 19:11:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='2fb0c50dfff14df89f7dbd437a2a223a'
DEBUG - 2016-07-18 19:11:03 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='2fb0c50dfff14df89f7dbd437a2a223a' order by create_date_time desc
DEBUG - 2016-07-18 19:11:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='2fb0c50dfff14df89f7dbd437a2a223a'
DEBUG - 2016-07-18 19:11:03 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='2fb0c50dfff14df89f7dbd437a2a223a'    order by t1.lno asc
        
DEBUG - 2016-07-18 19:11:04 --> Total execution time: 0.5148
DEBUG - 2016-07-18 19:11:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468840264
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:11:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:11:13 --> Security Class Initialized
DEBUG - 2016-07-18 19:11:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:11:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:11:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9a369b5626204d9a93f818681c0c895b', '114.91.129.78', '2016-07-18', '19:11:13', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '74f7b89208c5e4101987d18bf9c866dd153b1d67')
DEBUG - 2016-07-18 19:11:13 --> 审核订单
DEBUG - 2016-07-18 19:11:13 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '2fb0c50dfff14df89f7dbd437a2a223a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-18 19:11:13 --> 过程调用语句：  execute USP_APSOS_outorder '2fb0c50dfff14df89f7dbd437a2a223a'
DEBUG - 2016-07-18 19:11:17 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340234', '2fb0c50dfff14df89f7dbd437a2a223a', '2', '', '3753a8420c0c4d97aa46fc2569823395', '2016-07-18 19:11:17')
DEBUG - 2016-07-18 19:11:17 --> 该订单状态更新成功:2
DEBUG - 2016-07-18 19:11:17 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='2fb0c50dfff14df89f7dbd437a2a223a'
DEBUG - 2016-07-18 19:11:17 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-07-18 19:11:21 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-18 19:11:21 --> Total execution time: 8.3460
DEBUG - 2016-07-18 19:11:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468840281
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:11:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:11:21 --> Security Class Initialized
DEBUG - 2016-07-18 19:11:21 --> CRSF cookie Set
DEBUG - 2016-07-18 19:11:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:11:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:11:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7fd5eae7c92d41fb8b0c3fd87c48903e', '114.91.129.78', '2016-07-18', '19:11:21', '120340234', '/admin/order/check/2fb0c50dfff14df89f7dbd437a2a223a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '74f7b89208c5e4101987d18bf9c866dd153b1d67')
DEBUG - 2016-07-18 19:11:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:11:21 --> CRSF cookie Set
DEBUG - 2016-07-18 19:11:21 --> Security Class Initialized
DEBUG - 2016-07-18 19:11:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='2fb0c50dfff14df89f7dbd437a2a223a'
DEBUG - 2016-07-18 19:11:21 --> CRSF cookie Set
DEBUG - 2016-07-18 19:11:21 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='2fb0c50dfff14df89f7dbd437a2a223a' order by create_date_time desc
DEBUG - 2016-07-18 19:11:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:11:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='2fb0c50dfff14df89f7dbd437a2a223a'
DEBUG - 2016-07-18 19:11:21 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='2fb0c50dfff14df89f7dbd437a2a223a'    order by t1.lno asc
        
DEBUG - 2016-07-18 19:11:21 --> Total execution time: 0.1092
DEBUG - 2016-07-18 19:11:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468840281
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:11:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f7578ac4ea297e7c707d6e54f4f5ce74c5f52ef'
DEBUG - 2016-07-18 19:11:21 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6f7578ac4ea297e7c707d6e54f4f5ce74c5f52ef', '180.153.206.24', 1468840281, '__ci_last_regenerate|i:1468840281;')
DEBUG - 2016-07-18 19:11:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:11:25 --> Security Class Initialized
DEBUG - 2016-07-18 19:11:25 --> CRSF cookie Set
DEBUG - 2016-07-18 19:11:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:11:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:11:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6060976a95a74a6d8ee6f579071aa964', '114.91.129.78', '2016-07-18', '19:11:25', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '74f7b89208c5e4101987d18bf9c866dd153b1d67')
DEBUG - 2016-07-18 19:11:25 --> 查询待审核订单
DEBUG - 2016-07-18 19:11:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-18 19:11:25 --> Total execution time: 0.1716
DEBUG - 2016-07-18 19:11:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468840285
WHERE id = '74f7b89208c5e4101987d18bf9c866dd153b1d67'
DEBUG - 2016-07-18 19:11:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:11:29 --> CRSF cookie Set
DEBUG - 2016-07-18 19:11:29 --> Security Class Initialized
DEBUG - 2016-07-18 19:11:29 --> CRSF cookie Set
DEBUG - 2016-07-18 19:11:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:11:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5ba0e2a7877ec59dc6d429dda201b7f2b69dbf74'
DEBUG - 2016-07-18 19:11:29 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5ba0e2a7877ec59dc6d429dda201b7f2b69dbf74', '101.226.89.117', 1468840289, '__ci_last_regenerate|i:1468840289;')
DEBUG - 2016-07-18 19:11:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-18 19:11:29 --> Security Class Initialized
DEBUG - 2016-07-18 19:11:29 --> CRSF cookie Set
DEBUG - 2016-07-18 19:11:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-18 19:11:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5ba0e2a7877ec59dc6d429dda201b7f2b69dbf74'
DEBUG - 2016-07-18 19:11:29 --> Total execution time: 0.0780
DEBUG - 2016-07-18 19:11:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468840289
WHERE id = '5ba0e2a7877ec59dc6d429dda201b7f2b69dbf74'
