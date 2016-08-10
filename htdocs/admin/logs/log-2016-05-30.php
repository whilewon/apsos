<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-05-30 21:41:13 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:41:13 --> Security Class Initialized
DEBUG - 2016-05-30 21:41:13 --> CRSF cookie Set
DEBUG - 2016-05-30 21:41:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:41:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:41:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1dbd0b951cee45748be6c8d210891779', '114.91.131.17', '2016-05-30', '21:41:14', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'fdd626190e9765f0190990324c5d109ee1e0f19d')
ERROR - 2016-05-30 21:41:14 --> Severity: Parsing Error --> syntax error, unexpected '<', expecting function (T_FUNCTION) D:\xampp\htdocs\admin\models\Order_model.php 97
DEBUG - 2016-05-30 21:41:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615674
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:24 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:42:24 --> Security Class Initialized
DEBUG - 2016-05-30 21:42:24 --> CRSF cookie Set
DEBUG - 2016-05-30 21:42:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:42:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('12ae1eb267ed4fa2b3bfed48c4c851af', '114.91.131.17', '2016-05-30', '21:42:24', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'fdd626190e9765f0190990324c5d109ee1e0f19d')
DEBUG - 2016-05-30 21:42:24 --> 查询需求订单
DEBUG - 2016-05-30 21:42:24 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-05-30 21:42:24 --> Total execution time: 0.1740
DEBUG - 2016-05-30 21:42:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615744
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:26 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:42:26 --> Security Class Initialized
DEBUG - 2016-05-30 21:42:26 --> CRSF cookie Set
DEBUG - 2016-05-30 21:42:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:42:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e8eb0d68d552431dabb5f040391bc897', '114.91.131.17', '2016-05-30', '21:42:26', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'fdd626190e9765f0190990324c5d109ee1e0f19d')
DEBUG - 2016-05-30 21:42:26 --> 查询待发货订单
DEBUG - 2016-05-30 21:42:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-05-30 21:42:26 --> Total execution time: 0.0750
DEBUG - 2016-05-30 21:42:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615746
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:27 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:42:27 --> Security Class Initialized
DEBUG - 2016-05-30 21:42:27 --> CRSF cookie Set
DEBUG - 2016-05-30 21:42:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:42:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cfa70ac2d7b34574818401499a1bc5bb', '114.91.131.17', '2016-05-30', '21:42:27', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'fdd626190e9765f0190990324c5d109ee1e0f19d')
DEBUG - 2016-05-30 21:42:27 --> 查询待审核订单
DEBUG - 2016-05-30 21:42:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 21:42:27 --> Total execution time: 0.1010
DEBUG - 2016-05-30 21:42:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615747
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:27 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:42:27 --> Security Class Initialized
DEBUG - 2016-05-30 21:42:27 --> CRSF cookie Set
DEBUG - 2016-05-30 21:42:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:42:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('875d79a43c564e3eb05c9cddb3f21ae1', '114.91.131.17', '2016-05-30', '21:42:27', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'fdd626190e9765f0190990324c5d109ee1e0f19d')
DEBUG - 2016-05-30 21:42:27 --> 查询订单
DEBUG - 2016-05-30 21:42:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 21:42:27 --> Total execution time: 0.0740
DEBUG - 2016-05-30 21:42:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615747
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:29 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:42:29 --> Security Class Initialized
DEBUG - 2016-05-30 21:42:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:42:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0d7970e0ee2240cca2fbdf23fdd5fa07', '114.91.131.17', '2016-05-30', '21:42:29', '120340234', '/admin/order', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'fdd626190e9765f0190990324c5d109ee1e0f19d')
DEBUG - 2016-05-30 21:42:29 --> 查询订单
DEBUG - 2016-05-30 21:42:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 21:42:29 --> Total execution time: 0.0920
DEBUG - 2016-05-30 21:42:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615749
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:33 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:42:33 --> Security Class Initialized
DEBUG - 2016-05-30 21:42:33 --> CRSF cookie Set
DEBUG - 2016-05-30 21:42:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:42:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('121d08cfdbf640e19c1a614c77d82289', '114.91.131.17', '2016-05-30', '21:42:33', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'fdd626190e9765f0190990324c5d109ee1e0f19d')
DEBUG - 2016-05-30 21:42:33 --> 查询待发货订单
DEBUG - 2016-05-30 21:42:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-05-30 21:42:33 --> Total execution time: 0.0830
DEBUG - 2016-05-30 21:42:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615753
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:35 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:42:35 --> Security Class Initialized
DEBUG - 2016-05-30 21:42:35 --> CRSF cookie Set
DEBUG - 2016-05-30 21:42:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:42:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9f6ccf8c637047579bb9ee42bc98b3b5', '114.91.131.17', '2016-05-30', '21:42:35', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'fdd626190e9765f0190990324c5d109ee1e0f19d')
DEBUG - 2016-05-30 21:42:35 --> 查询订单
DEBUG - 2016-05-30 21:42:35 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 21:42:35 --> Total execution time: 0.0860
DEBUG - 2016-05-30 21:42:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615755
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:36 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:42:36 --> Security Class Initialized
DEBUG - 2016-05-30 21:42:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:42:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('caddf7dad95847dc9918fed3724b97dc', '114.91.131.17', '2016-05-30', '21:42:36', '120340234', '/admin/order', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'fdd626190e9765f0190990324c5d109ee1e0f19d')
DEBUG - 2016-05-30 21:42:36 --> 查询订单
DEBUG - 2016-05-30 21:42:36 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 21:42:36 --> Total execution time: 0.0760
DEBUG - 2016-05-30 21:42:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615756
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:39 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:42:39 --> Security Class Initialized
DEBUG - 2016-05-30 21:42:39 --> CRSF cookie Set
DEBUG - 2016-05-30 21:42:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:42:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:42:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('444d30f72cc242649b130004a0d38090', '114.91.131.17', '2016-05-30', '21:42:39', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'fdd626190e9765f0190990324c5d109ee1e0f19d')
DEBUG - 2016-05-30 21:42:39 --> 查询订单
DEBUG - 2016-05-30 21:42:39 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 21:42:39 --> Total execution time: 0.0700
DEBUG - 2016-05-30 21:42:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615759
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:43:42 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:43:42 --> Security Class Initialized
DEBUG - 2016-05-30 21:43:42 --> CRSF cookie Set
DEBUG - 2016-05-30 21:43:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:43:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:43:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c9f2c4330bc9424e9f5085bea051386d', '114.91.131.17', '2016-05-30', '21:43:42', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'fdd626190e9765f0190990324c5d109ee1e0f19d')
DEBUG - 2016-05-30 21:43:42 --> 查询订单
DEBUG - 2016-05-30 21:43:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 21:43:42 --> Total execution time: 0.0760
DEBUG - 2016-05-30 21:43:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615822
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:43:43 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:43:43 --> Security Class Initialized
DEBUG - 2016-05-30 21:44:55 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:44:55 --> Security Class Initialized
DEBUG - 2016-05-30 21:44:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:44:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:44:55 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'fdd626190e9765f0190990324c5d109ee1e0f19d'
DEBUG - 2016-05-30 21:44:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('46697df7380746278cba8fcd46b0f33b', '114.91.131.17', '2016-05-30', '21:44:55', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '11cca912fb8ac7c38c4575cace462f9be93b9de2')
DEBUG - 2016-05-30 21:44:55 --> 查询订单
DEBUG - 2016-05-30 21:44:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 21:44:55 --> Total execution time: 0.1610
DEBUG - 2016-05-30 21:44:55 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('11cca912fb8ac7c38c4575cace462f9be93b9de2', '114.91.131.17', 1464615895, '__ci_last_regenerate|i:1464615895;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-05-30 21:44:56 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:44:56 --> Security Class Initialized
DEBUG - 2016-05-30 21:44:56 --> CRSF cookie Set
DEBUG - 2016-05-30 21:44:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:44:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:44:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('31133b97432d4fbcae6759a3c90c17f2', '114.91.131.17', '2016-05-30', '21:44:56', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '11cca912fb8ac7c38c4575cace462f9be93b9de2')
DEBUG - 2016-05-30 21:44:56 --> 查询订单
DEBUG - 2016-05-30 21:44:56 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 21:44:56 --> Total execution time: 0.0680
DEBUG - 2016-05-30 21:44:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615896
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:44:58 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:44:58 --> Security Class Initialized
DEBUG - 2016-05-30 21:44:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:44:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:44:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d3cc75170d154c9e9e5b4ca5913406e9', '114.91.131.17', '2016-05-30', '21:44:58', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '11cca912fb8ac7c38c4575cace462f9be93b9de2')
DEBUG - 2016-05-30 21:44:58 --> 查询订单
DEBUG - 2016-05-30 21:44:58 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 21:44:58 --> Total execution time: 0.0690
DEBUG - 2016-05-30 21:44:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615898
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:44:59 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:44:59 --> Security Class Initialized
DEBUG - 2016-05-30 21:44:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:44:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:44:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cd161c07a22742519e6984d97fd7d36e', '114.91.131.17', '2016-05-30', '21:44:59', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '11cca912fb8ac7c38c4575cace462f9be93b9de2')
DEBUG - 2016-05-30 21:44:59 --> 查询订单
DEBUG - 2016-05-30 21:44:59 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 21:44:59 --> Total execution time: 0.0750
DEBUG - 2016-05-30 21:44:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615899
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:45:00 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:45:00 --> Security Class Initialized
DEBUG - 2016-05-30 21:45:00 --> CRSF cookie Set
DEBUG - 2016-05-30 21:45:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:45:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:45:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('08c8856725fc4f9c96a551dd3b67440b', '114.91.131.17', '2016-05-30', '21:45:01', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '11cca912fb8ac7c38c4575cace462f9be93b9de2')
DEBUG - 2016-05-30 21:45:01 --> 查询待审核订单
DEBUG - 2016-05-30 21:45:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 21:45:01 --> Total execution time: 0.0720
DEBUG - 2016-05-30 21:45:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615901
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:45:02 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:45:02 --> Security Class Initialized
DEBUG - 2016-05-30 21:45:02 --> CRSF cookie Set
DEBUG - 2016-05-30 21:45:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:45:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:45:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('eb8dcfb0d7c54f0dbce5ee8e6bfd4dd7', '114.91.131.17', '2016-05-30', '21:45:02', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '11cca912fb8ac7c38c4575cace462f9be93b9de2')
DEBUG - 2016-05-30 21:45:02 --> 查询待发货订单
DEBUG - 2016-05-30 21:45:02 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-05-30 21:45:02 --> Total execution time: 0.0680
DEBUG - 2016-05-30 21:45:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615902
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:45:03 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:45:03 --> Security Class Initialized
DEBUG - 2016-05-30 21:45:03 --> CRSF cookie Set
DEBUG - 2016-05-30 21:45:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:45:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:45:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8f2343c9fa6344158d84a9be64a5f1ba', '114.91.131.17', '2016-05-30', '21:45:03', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '11cca912fb8ac7c38c4575cace462f9be93b9de2')
DEBUG - 2016-05-30 21:45:03 --> 查询需求订单
DEBUG - 2016-05-30 21:45:03 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-05-30 21:45:03 --> Total execution time: 0.0710
DEBUG - 2016-05-30 21:45:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615903
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:45:04 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:45:04 --> Security Class Initialized
DEBUG - 2016-05-30 21:45:04 --> CRSF cookie Set
DEBUG - 2016-05-30 21:45:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:45:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:45:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('88e1174b0b2044c99c3f2782bcc93f7e', '114.91.131.17', '2016-05-30', '21:45:04', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '11cca912fb8ac7c38c4575cace462f9be93b9de2')
DEBUG - 2016-05-30 21:45:04 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-05-30 21:45:04 --> Total execution time: 0.0790
DEBUG - 2016-05-30 21:45:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615904
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:45:18 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:45:18 --> Security Class Initialized
DEBUG - 2016-05-30 21:45:18 --> CRSF cookie Set
DEBUG - 2016-05-30 21:45:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:45:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:45:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('05d50588ced94abdb25361599ba6bc43', '114.91.131.17', '2016-05-30', '21:45:18', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '11cca912fb8ac7c38c4575cace462f9be93b9de2')
DEBUG - 2016-05-30 21:45:18 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-05-30 21:45:18 --> Total execution time: 0.0930
DEBUG - 2016-05-30 21:45:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615918
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:46:06 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:46:06 --> Security Class Initialized
DEBUG - 2016-05-30 21:46:06 --> CRSF cookie Set
DEBUG - 2016-05-30 21:46:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:46:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:46:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('740bd40102274f629ad9e21d1f3ba5f1', '114.91.131.17', '2016-05-30', '21:46:06', '120340234', '/admin/guest/edit/K05035', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '11cca912fb8ac7c38c4575cace462f9be93b9de2')
DEBUG - 2016-05-30 21:46:06 --> 修改客户信息：K05035
DEBUG - 2016-05-30 21:46:06 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05035' 
DEBUG - 2016-05-30 21:46:06 --> [执行的SQL语句]##############insert into apsos_user(uuid,login_code,login_pwd,user_name,phone,email,add_time,sex,enable,company)
          Select code,pycode,'c07cd18394ca7f70b23906c52103b752e578a653e07a9d49e88b72c3a2fd9157' as login_pwd,contactperson,
        (
        case
             when len(replace(handphonebp,' ',''))>11 then substring(replace(handphonebp,' ',''),1,11)
             when len(replace(handphonebp,' ',''))=11 then replace(handphonebp,' ','')
             else ''
        end
        ) as phone,
        (
        case
             when CHARINDEX('@',email) >0 then replace(email,' ','')
             else ''
        end
        )
         as email,getdate() as add_time,sex,'N',name
         from T_Guest where code='K05035'
DEBUG - 2016-05-30 21:46:06 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05035' 
DEBUG - 2016-05-30 21:46:06 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-05-30 21:46:06 --> Total execution time: 0.1490
DEBUG - 2016-05-30 21:46:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615966
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:46:21 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:46:21 --> Security Class Initialized
DEBUG - 2016-05-30 21:46:21 --> CRSF cookie Set
DEBUG - 2016-05-30 21:46:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:46:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:46:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('27e78e49e80e41669e1d9bf08726eb80', '114.91.131.17', '2016-05-30', '21:46:21', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '11cca912fb8ac7c38c4575cace462f9be93b9de2')
DEBUG - 2016-05-30 21:46:21 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-05-30 21:46:21 --> Total execution time: 0.1170
DEBUG - 2016-05-30 21:46:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615981
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:46:28 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:46:28 --> Security Class Initialized
DEBUG - 2016-05-30 21:46:28 --> CRSF cookie Set
DEBUG - 2016-05-30 21:46:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:46:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:46:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('009d5e076e494a9ea97ca7d76e76879a', '114.91.131.17', '2016-05-30', '21:46:28', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '11cca912fb8ac7c38c4575cace462f9be93b9de2')
DEBUG - 2016-05-30 21:46:28 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-05-30 21:46:28 --> Total execution time: 0.0820
DEBUG - 2016-05-30 21:46:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464615988
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:49:54 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:49:54 --> Security Class Initialized
DEBUG - 2016-05-30 21:49:54 --> CRSF cookie Set
DEBUG - 2016-05-30 21:49:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:49:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:49:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('27702234d1894fd7a78e87867cfa33e6', '114.91.131.17', '2016-05-30', '21:49:54', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '11cca912fb8ac7c38c4575cace462f9be93b9de2')
DEBUG - 2016-05-30 21:49:54 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-05-30 21:49:54 --> Total execution time: 0.0880
DEBUG - 2016-05-30 21:49:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464616194
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:50:04 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:50:04 --> Security Class Initialized
DEBUG - 2016-05-30 21:50:04 --> CRSF cookie Set
DEBUG - 2016-05-30 21:50:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:50:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:50:04 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '11cca912fb8ac7c38c4575cace462f9be93b9de2'
DEBUG - 2016-05-30 21:50:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('11ac19134d8c459f83c6840b2c1137e3', '114.91.131.17', '2016-05-30', '21:50:04', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a23436bb183df20803c60539ea73703481a9ef91')
DEBUG - 2016-05-30 21:50:04 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-05-30 21:50:04 --> Total execution time: 0.1250
DEBUG - 2016-05-30 21:50:04 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a23436bb183df20803c60539ea73703481a9ef91', '114.91.131.17', 1464616204, '__ci_last_regenerate|i:1464616204;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-05-30 21:50:11 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:50:11 --> Security Class Initialized
DEBUG - 2016-05-30 21:50:11 --> CRSF cookie Set
DEBUG - 2016-05-30 21:50:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:50:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a23436bb183df20803c60539ea73703481a9ef91'
DEBUG - 2016-05-30 21:50:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('36cfa160a9dc4250b6a200aa20582a52', '114.91.131.17', '2016-05-30', '21:50:11', '120340234', '/admin/guest/edit/K05035', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a23436bb183df20803c60539ea73703481a9ef91')
DEBUG - 2016-05-30 21:50:11 --> 修改客户信息：K05035
DEBUG - 2016-05-30 21:50:11 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05035' 
DEBUG - 2016-05-30 21:50:11 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05035' 
DEBUG - 2016-05-30 21:50:11 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-05-30 21:50:11 --> Total execution time: 0.1560
DEBUG - 2016-05-30 21:50:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464616211
WHERE id = 'a23436bb183df20803c60539ea73703481a9ef91'
DEBUG - 2016-05-30 21:50:20 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:50:20 --> Security Class Initialized
DEBUG - 2016-05-30 21:50:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:50:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a23436bb183df20803c60539ea73703481a9ef91'
DEBUG - 2016-05-30 21:50:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9e3921ed54354560a1431f1740e3d4e3', '114.91.131.17', '2016-05-30', '21:50:21', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a23436bb183df20803c60539ea73703481a9ef91')
DEBUG - 2016-05-30 21:50:21 --> 保存客户信息
DEBUG - 2016-05-30 21:50:21 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05035', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05035'
DEBUG - 2016-05-30 21:50:21 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-05-30 21:50:21 --> Total execution time: 0.1280
DEBUG - 2016-05-30 21:50:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464616221
WHERE id = 'a23436bb183df20803c60539ea73703481a9ef91'
DEBUG - 2016-05-30 21:51:03 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:51:03 --> Security Class Initialized
DEBUG - 2016-05-30 21:51:03 --> CRSF cookie Set
DEBUG - 2016-05-30 21:51:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:51:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a23436bb183df20803c60539ea73703481a9ef91'
DEBUG - 2016-05-30 21:51:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c11393ea236c4de8b42a5983c7ad65e9', '114.91.131.17', '2016-05-30', '21:51:03', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a23436bb183df20803c60539ea73703481a9ef91')
DEBUG - 2016-05-30 21:51:03 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-05-30 21:51:03 --> Total execution time: 0.1550
DEBUG - 2016-05-30 21:51:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464616263
WHERE id = 'a23436bb183df20803c60539ea73703481a9ef91'
DEBUG - 2016-05-30 21:53:55 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:53:55 --> Security Class Initialized
DEBUG - 2016-05-30 21:53:55 --> CRSF cookie Set
DEBUG - 2016-05-30 21:53:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:53:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a23436bb183df20803c60539ea73703481a9ef91'
DEBUG - 2016-05-30 21:53:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8d8940132d57466cb241b5c92b8ad9e9', '114.91.131.17', '2016-05-30', '21:53:55', '120340234', '/admin/guest/edit/K05035', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a23436bb183df20803c60539ea73703481a9ef91')
DEBUG - 2016-05-30 21:53:55 --> 修改客户信息：K05035
DEBUG - 2016-05-30 21:53:55 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05035' 
DEBUG - 2016-05-30 21:53:55 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05035' 
DEBUG - 2016-05-30 21:53:55 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-05-30 21:53:55 --> Total execution time: 0.0800
DEBUG - 2016-05-30 21:53:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464616435
WHERE id = 'a23436bb183df20803c60539ea73703481a9ef91'
DEBUG - 2016-05-30 21:55:06 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 21:55:06 --> No URI present. Default controller set.
DEBUG - 2016-05-30 21:55:06 --> CRSF cookie Set
DEBUG - 2016-05-30 21:55:06 --> Security Class Initialized
DEBUG - 2016-05-30 21:55:06 --> CRSF cookie Set
DEBUG - 2016-05-30 21:55:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 21:55:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '56aedf9dc07dc4d3b07ad8ca922c62a8b69427c6'
DEBUG - 2016-05-30 21:55:06 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('56aedf9dc07dc4d3b07ad8ca922c62a8b69427c6', '163.177.69.38', 1464616506, '__ci_last_regenerate|i:1464616506;')
DEBUG - 2016-05-30 22:15:53 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:15:53 --> No URI present. Default controller set.
DEBUG - 2016-05-30 22:15:53 --> CRSF cookie Set
DEBUG - 2016-05-30 22:15:53 --> Security Class Initialized
DEBUG - 2016-05-30 22:15:53 --> CRSF cookie Set
DEBUG - 2016-05-30 22:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:15:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:15:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a05b62a66ad25f63708c81bdfe76f01600fa9cb6', '114.91.131.17', 1464617753, '__ci_last_regenerate|i:1464617753;')
DEBUG - 2016-05-30 22:15:54 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:15:54 --> Security Class Initialized
DEBUG - 2016-05-30 22:15:54 --> CRSF cookie Set
DEBUG - 2016-05-30 22:15:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:15:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:15:54 --> Total execution time: 0.0650
DEBUG - 2016-05-30 22:15:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464617754
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:16:18 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:18 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:18 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:18 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:18 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:18 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:18 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:18 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:18 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:18 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:18 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:18 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:18 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:18 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:18 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:18 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:18 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:18 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:18 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:18 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:19 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:19 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:19 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:19 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:19 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:19 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:19 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:19 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:19 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:19 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:19 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:19 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:19 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:19 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:19 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:19 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:20 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:20 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:20 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:20 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:50 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:50 --> No URI present. Default controller set.
DEBUG - 2016-05-30 22:16:50 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:50 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:16:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:16:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464617810
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:16:50 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:50 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:50 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:16:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:16:50 --> Total execution time: 0.0640
DEBUG - 2016-05-30 22:16:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464617810
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:16:51 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:51 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:51 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:51 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:51 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:51 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:51 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:51 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:51 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:51 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:51 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:51 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:52 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:53 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:53 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:53 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:53 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:53 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:53 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:53 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:53 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:53 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:53 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:53 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:53 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:53 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:53 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:53 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:53 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:53 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:53 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:53 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:53 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:53 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:16:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:53 --> 404 Page Not Found: AdminUserLogin/assets
ERROR - 2016-05-30 22:16:53 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:16:53 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:16:53 --> Security Class Initialized
DEBUG - 2016-05-30 22:16:53 --> CRSF cookie Set
DEBUG - 2016-05-30 22:16:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-05-30 22:16:53 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-05-30 22:17:15 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:17:15 --> Security Class Initialized
DEBUG - 2016-05-30 22:17:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:17:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:17:15 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-05-30 22:17:15 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-05-30 22:17:15 --> 登录返回结果数：1
DEBUG - 2016-05-30 22:17:15 --> 成功登录
DEBUG - 2016-05-30 22:17:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464617835, data = '__ci_last_regenerate|i:1464617753;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:17:15 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:17:15 --> No URI present. Default controller set.
DEBUG - 2016-05-30 22:17:15 --> Security Class Initialized
DEBUG - 2016-05-30 22:17:15 --> CRSF cookie Set
DEBUG - 2016-05-30 22:17:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:17:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:17:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4fabe9239ad942c4bb9bf3370d34cf7a', '114.91.131.17', '2016-05-30', '22:17:15', '120340235', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6')
DEBUG - 2016-05-30 22:17:15 --> Total execution time: 0.0770
DEBUG - 2016-05-30 22:17:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464617835
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:18:23 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:18:23 --> No URI present. Default controller set.
DEBUG - 2016-05-30 22:18:23 --> Security Class Initialized
DEBUG - 2016-05-30 22:18:23 --> CRSF cookie Set
DEBUG - 2016-05-30 22:18:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:18:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:18:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dd036196bfef472ca64d1f62743eb3db', '114.91.131.17', '2016-05-30', '22:18:23', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6')
DEBUG - 2016-05-30 22:18:23 --> Total execution time: 0.0820
DEBUG - 2016-05-30 22:18:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464617903
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:19:17 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:19:17 --> Security Class Initialized
DEBUG - 2016-05-30 22:19:17 --> CRSF cookie Set
DEBUG - 2016-05-30 22:19:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:19:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:19:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bf720ed8af884ea59f052b16cba7fce8', '114.91.131.17', '2016-05-30', '22:19:17', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6')
DEBUG - 2016-05-30 22:19:17 --> 查询订单
DEBUG - 2016-05-30 22:19:17 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 22:19:17 --> Total execution time: 0.0800
DEBUG - 2016-05-30 22:19:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464617957
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:19:39 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:19:39 --> Security Class Initialized
DEBUG - 2016-05-30 22:19:39 --> CRSF cookie Set
DEBUG - 2016-05-30 22:19:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:19:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:19:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5743bbb88db441d39bfe728fdaa33d4a', '114.91.131.17', '2016-05-30', '22:19:39', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6')
DEBUG - 2016-05-30 22:19:39 --> 查询待审核订单
DEBUG - 2016-05-30 22:19:39 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 22:19:39 --> Total execution time: 0.0960
DEBUG - 2016-05-30 22:19:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464617979
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:20:33 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:20:33 --> Security Class Initialized
DEBUG - 2016-05-30 22:20:33 --> CRSF cookie Set
DEBUG - 2016-05-30 22:20:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:20:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:20:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3e8e582e82534a8a9165be419087df9e', '114.91.131.17', '2016-05-30', '22:20:33', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6')
DEBUG - 2016-05-30 22:20:33 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-05-30 22:20:33 --> Total execution time: 0.1080
DEBUG - 2016-05-30 22:20:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464618033
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:21:12 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:21:12 --> Security Class Initialized
DEBUG - 2016-05-30 22:21:12 --> CRSF cookie Set
DEBUG - 2016-05-30 22:21:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:21:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:21:12 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a05b62a66ad25f63708c81bdfe76f01600fa9cb6'
DEBUG - 2016-05-30 22:21:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c382f7b4403b4da8b0d54b7776c760fa', '114.91.131.17', '2016-05-30', '22:21:12', '120340235', '/admin/guest/edit/K05035', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2ba91430714603987bae6b3dfb47956ff2c524e8')
DEBUG - 2016-05-30 22:21:12 --> 修改客户信息：K05035
DEBUG - 2016-05-30 22:21:12 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05035' 
DEBUG - 2016-05-30 22:21:12 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05035' 
DEBUG - 2016-05-30 22:21:12 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-05-30 22:21:12 --> Total execution time: 0.0890
DEBUG - 2016-05-30 22:21:12 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2ba91430714603987bae6b3dfb47956ff2c524e8', '114.91.131.17', 1464618072, '__ci_last_regenerate|i:1464618072;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-05-30 22:21:45 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:21:45 --> Security Class Initialized
DEBUG - 2016-05-30 22:21:45 --> CRSF cookie Set
DEBUG - 2016-05-30 22:21:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:21:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:21:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9137eba941ff4a628c2d23532b9b001a', '114.91.131.17', '2016-05-30', '22:21:45', '120340235', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2ba91430714603987bae6b3dfb47956ff2c524e8')
DEBUG - 2016-05-30 22:21:45 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-05-30 22:21:45 --> Total execution time: 0.0720
DEBUG - 2016-05-30 22:21:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464618105
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:22:07 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:22:07 --> Security Class Initialized
DEBUG - 2016-05-30 22:22:07 --> CRSF cookie Set
DEBUG - 2016-05-30 22:22:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:22:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:22:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e17be706cffd4006be3605451a40e818', '114.91.131.17', '2016-05-30', '22:22:07', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2ba91430714603987bae6b3dfb47956ff2c524e8')
DEBUG - 2016-05-30 22:22:07 --> 查询待审核订单
DEBUG - 2016-05-30 22:22:07 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 22:22:07 --> Total execution time: 0.0720
DEBUG - 2016-05-30 22:22:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464618127
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:22:50 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:22:50 --> Security Class Initialized
DEBUG - 2016-05-30 22:22:50 --> CRSF cookie Set
DEBUG - 2016-05-30 22:22:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:22:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:22:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('63e660ba4c4d45d6a893f315183769c5', '114.91.131.17', '2016-05-30', '22:22:50', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2ba91430714603987bae6b3dfb47956ff2c524e8')
DEBUG - 2016-05-30 22:22:50 --> 查询订单
DEBUG - 2016-05-30 22:22:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 22:22:50 --> Total execution time: 0.0760
DEBUG - 2016-05-30 22:22:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464618170
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:22:53 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:22:53 --> Security Class Initialized
DEBUG - 2016-05-30 22:22:53 --> CRSF cookie Set
DEBUG - 2016-05-30 22:22:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:22:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:22:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('32eb8ca8eff9427087d5d342e60ee9da', '114.91.131.17', '2016-05-30', '22:22:53', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2ba91430714603987bae6b3dfb47956ff2c524e8')
DEBUG - 2016-05-30 22:22:53 --> 查询待审核订单
DEBUG - 2016-05-30 22:22:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 22:22:53 --> Total execution time: 0.0830
DEBUG - 2016-05-30 22:22:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464618173
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:23:19 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:23:19 --> Security Class Initialized
DEBUG - 2016-05-30 22:23:19 --> CRSF cookie Set
DEBUG - 2016-05-30 22:23:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:23:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:23:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a6927226fef84d739ac16fe1be94f62f', '114.91.131.17', '2016-05-30', '22:23:19', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2ba91430714603987bae6b3dfb47956ff2c524e8')
DEBUG - 2016-05-30 22:23:19 --> 查询待审核订单
DEBUG - 2016-05-30 22:23:19 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 22:23:19 --> Total execution time: 0.0790
DEBUG - 2016-05-30 22:23:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464618199
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:23:20 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:23:20 --> Security Class Initialized
DEBUG - 2016-05-30 22:23:20 --> CRSF cookie Set
DEBUG - 2016-05-30 22:23:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:23:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:23:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6f9af205cfa04aca9592a3ffd93752be', '114.91.131.17', '2016-05-30', '22:23:20', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2ba91430714603987bae6b3dfb47956ff2c524e8')
DEBUG - 2016-05-30 22:23:20 --> 查询待审核订单
DEBUG - 2016-05-30 22:23:20 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 22:23:20 --> Total execution time: 0.0820
DEBUG - 2016-05-30 22:23:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464618200
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:31:51 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:31:51 --> Security Class Initialized
DEBUG - 2016-05-30 22:31:51 --> CRSF cookie Set
DEBUG - 2016-05-30 22:31:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:31:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:31:51 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '2ba91430714603987bae6b3dfb47956ff2c524e8'
DEBUG - 2016-05-30 22:31:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6dccc7203640461390178e59f75f855c', '114.91.131.17', '2016-05-30', '22:31:51', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '34d8a195b2936b55e36fde179a868849a416b391')
DEBUG - 2016-05-30 22:31:51 --> 查询订单
DEBUG - 2016-05-30 22:31:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 22:31:51 --> Total execution time: 0.1290
DEBUG - 2016-05-30 22:31:51 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('34d8a195b2936b55e36fde179a868849a416b391', '114.91.131.17', 1464618711, '__ci_last_regenerate|i:1464618711;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-05-30 22:33:09 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:33:09 --> Security Class Initialized
DEBUG - 2016-05-30 22:33:09 --> CRSF cookie Set
DEBUG - 2016-05-30 22:33:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:33:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '34d8a195b2936b55e36fde179a868849a416b391'
DEBUG - 2016-05-30 22:33:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('51c1790797d64be294a2307792756726', '114.91.131.17', '2016-05-30', '22:33:09', '120340235', '/admin/order/check/3b9a6a997abe48ebb7551bd3370471e0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '34d8a195b2936b55e36fde179a868849a416b391')
DEBUG - 2016-05-30 22:33:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='3b9a6a997abe48ebb7551bd3370471e0'
DEBUG - 2016-05-30 22:33:09 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='3b9a6a997abe48ebb7551bd3370471e0' order by create_date_time desc
DEBUG - 2016-05-30 22:33:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='3b9a6a997abe48ebb7551bd3370471e0'
DEBUG - 2016-05-30 22:33:09 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='3b9a6a997abe48ebb7551bd3370471e0') t1
        left join (select * from t_outbody where outno='X160530018') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 22:33:09 --> Total execution time: 0.2060
DEBUG - 2016-05-30 22:33:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464618789
WHERE id = '34d8a195b2936b55e36fde179a868849a416b391'
DEBUG - 2016-05-30 22:35:09 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:35:09 --> Security Class Initialized
DEBUG - 2016-05-30 22:35:10 --> CRSF cookie Set
DEBUG - 2016-05-30 22:35:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:35:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '34d8a195b2936b55e36fde179a868849a416b391'
DEBUG - 2016-05-30 22:35:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bbf9be0351fb4bfdaf3da78df440c02a', '114.91.131.17', '2016-05-30', '22:35:10', '120340235', '/admin/order/check/3b9a6a997abe48ebb7551bd3370471e0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '34d8a195b2936b55e36fde179a868849a416b391')
DEBUG - 2016-05-30 22:35:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='3b9a6a997abe48ebb7551bd3370471e0'
DEBUG - 2016-05-30 22:35:10 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='3b9a6a997abe48ebb7551bd3370471e0' order by create_date_time desc
DEBUG - 2016-05-30 22:35:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='3b9a6a997abe48ebb7551bd3370471e0'
DEBUG - 2016-05-30 22:35:10 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='3b9a6a997abe48ebb7551bd3370471e0') t1
        left join (select * from t_outbody where outno='X160530018') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 22:35:10 --> Total execution time: 0.0990
DEBUG - 2016-05-30 22:35:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464618910
WHERE id = '34d8a195b2936b55e36fde179a868849a416b391'
DEBUG - 2016-05-30 22:36:11 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:36:12 --> Security Class Initialized
DEBUG - 2016-05-30 22:36:12 --> CRSF cookie Set
DEBUG - 2016-05-30 22:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:36:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '34d8a195b2936b55e36fde179a868849a416b391'
DEBUG - 2016-05-30 22:36:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b79582f63646465ca91fefe8d90ee324', '114.91.131.17', '2016-05-30', '22:36:12', '120340235', '/admin/order/check/3b9a6a997abe48ebb7551bd3370471e0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '34d8a195b2936b55e36fde179a868849a416b391')
DEBUG - 2016-05-30 22:36:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='3b9a6a997abe48ebb7551bd3370471e0'
DEBUG - 2016-05-30 22:36:12 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='3b9a6a997abe48ebb7551bd3370471e0' order by create_date_time desc
DEBUG - 2016-05-30 22:36:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='3b9a6a997abe48ebb7551bd3370471e0'
DEBUG - 2016-05-30 22:36:12 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='3b9a6a997abe48ebb7551bd3370471e0') t1
        left join (select * from t_outbody where outno='X160530018') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 22:36:12 --> Total execution time: 0.0760
DEBUG - 2016-05-30 22:36:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464618972
WHERE id = '34d8a195b2936b55e36fde179a868849a416b391'
DEBUG - 2016-05-30 22:45:07 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 22:45:07 --> Security Class Initialized
DEBUG - 2016-05-30 22:45:07 --> CRSF cookie Set
DEBUG - 2016-05-30 22:45:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 22:45:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '34d8a195b2936b55e36fde179a868849a416b391'
DEBUG - 2016-05-30 22:45:07 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '34d8a195b2936b55e36fde179a868849a416b391'
DEBUG - 2016-05-30 22:45:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('99ea4fee344645378cf97b538cd2e074', '114.91.131.17', '2016-05-30', '22:45:07', '120340235', '/admin/order/check/c317bbf5157b4d37837e9f167559433d', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f66cca628eb95ad9024236c9ac418737d40fb54f')
DEBUG - 2016-05-30 22:45:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='c317bbf5157b4d37837e9f167559433d'
DEBUG - 2016-05-30 22:45:07 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='c317bbf5157b4d37837e9f167559433d' order by create_date_time desc
DEBUG - 2016-05-30 22:45:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='c317bbf5157b4d37837e9f167559433d'
DEBUG - 2016-05-30 22:45:07 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='c317bbf5157b4d37837e9f167559433d') t1
        left join (select * from t_outbody where outno='X160530020') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 22:45:07 --> Total execution time: 0.0950
DEBUG - 2016-05-30 22:45:07 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f66cca628eb95ad9024236c9ac418737d40fb54f', '114.91.131.17', 1464619507, '__ci_last_regenerate|i:1464619507;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-05-30 23:12:48 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:12:48 --> Security Class Initialized
DEBUG - 2016-05-30 23:12:48 --> CRSF cookie Set
DEBUG - 2016-05-30 23:12:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:12:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f66cca628eb95ad9024236c9ac418737d40fb54f'
DEBUG - 2016-05-30 23:12:48 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'f66cca628eb95ad9024236c9ac418737d40fb54f'
DEBUG - 2016-05-30 23:12:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b26f67cc942c49d8a0cbb87fa075dd9e', '114.91.131.17', '2016-05-30', '23:12:48', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:12:48 --> 查询待审核订单
DEBUG - 2016-05-30 23:12:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 23:12:48 --> Total execution time: 0.1430
DEBUG - 2016-05-30 23:12:48 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f226e62de39fd4ab7272ec50cf4991e8e9f8935b', '114.91.131.17', 1464621168, '__ci_last_regenerate|i:1464621168;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-05-30 23:12:49 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:12:49 --> Security Class Initialized
DEBUG - 2016-05-30 23:12:49 --> CRSF cookie Set
DEBUG - 2016-05-30 23:12:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:12:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:12:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c8d2137c175d4c698f51163f09d79af1', '114.91.131.17', '2016-05-30', '23:12:49', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:12:49 --> 查询待审核订单
DEBUG - 2016-05-30 23:12:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 23:12:49 --> Total execution time: 0.0810
DEBUG - 2016-05-30 23:12:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621169
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:12:50 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:12:50 --> Security Class Initialized
DEBUG - 2016-05-30 23:12:50 --> CRSF cookie Set
DEBUG - 2016-05-30 23:12:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:12:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:12:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3e65fea45be04e73a91c9abdc8cbc300', '114.91.131.17', '2016-05-30', '23:12:50', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:12:50 --> 查询待审核订单
DEBUG - 2016-05-30 23:12:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 23:12:50 --> Total execution time: 0.0710
DEBUG - 2016-05-30 23:12:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621170
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:12:55 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:12:55 --> Security Class Initialized
DEBUG - 2016-05-30 23:12:55 --> CRSF cookie Set
DEBUG - 2016-05-30 23:12:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:12:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:12:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('13880fa689894de2b3618080246eacb4', '114.91.131.17', '2016-05-30', '23:12:55', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:12:55 --> 查询待审核订单
DEBUG - 2016-05-30 23:12:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 23:12:55 --> Total execution time: 0.0700
DEBUG - 2016-05-30 23:12:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621175
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:13:11 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:13:11 --> Security Class Initialized
DEBUG - 2016-05-30 23:13:11 --> CRSF cookie Set
DEBUG - 2016-05-30 23:13:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:13:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:13:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8e23f2afea5249b384185baad7275861', '114.91.131.17', '2016-05-30', '23:13:11', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:13:11 --> 查询待审核订单
DEBUG - 2016-05-30 23:13:11 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 23:13:11 --> Total execution time: 0.0830
DEBUG - 2016-05-30 23:13:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621191
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:13:18 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:13:18 --> Security Class Initialized
DEBUG - 2016-05-30 23:13:18 --> CRSF cookie Set
DEBUG - 2016-05-30 23:13:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:13:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:13:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('004a6e202a914dbbae6e4b2a02e3bb02', '114.91.131.17', '2016-05-30', '23:13:18', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:13:18 --> 查询订单
DEBUG - 2016-05-30 23:13:18 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 23:13:18 --> Total execution time: 0.0880
DEBUG - 2016-05-30 23:13:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621198
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:13:22 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:13:22 --> Security Class Initialized
DEBUG - 2016-05-30 23:13:22 --> CRSF cookie Set
DEBUG - 2016-05-30 23:13:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:13:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:13:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d2123375079f4168859507caf08a75e8', '114.91.131.17', '2016-05-30', '23:13:22', '120340235', '/admin/order/index/62d657b644bf4db299d752a176edee91', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:13:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:13:22 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='62d657b644bf4db299d752a176edee91' order by create_date_time desc
DEBUG - 2016-05-30 23:13:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:13:22 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='62d657b644bf4db299d752a176edee91') t1
        left join (select * from t_outbody where outno='X160530021') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 23:13:22 --> Total execution time: 0.1370
DEBUG - 2016-05-30 23:13:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621202
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:13:29 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:13:29 --> Security Class Initialized
DEBUG - 2016-05-30 23:13:29 --> CRSF cookie Set
DEBUG - 2016-05-30 23:13:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:13:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:13:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0db2a2d37f8f4bf798d4b190db7fd57e', '114.91.131.17', '2016-05-30', '23:13:30', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:13:30 --> 查询待审核订单
DEBUG - 2016-05-30 23:13:30 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 23:13:30 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:13:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621210
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:13:46 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:13:46 --> Security Class Initialized
DEBUG - 2016-05-30 23:13:46 --> CRSF cookie Set
DEBUG - 2016-05-30 23:13:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:13:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:13:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('19aa307955a94472b07a897e6adf9d98', '114.91.131.17', '2016-05-30', '23:13:46', '120340235', '/admin/order/check/62d657b644bf4db299d752a176edee91', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:13:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:13:46 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='62d657b644bf4db299d752a176edee91' order by create_date_time desc
DEBUG - 2016-05-30 23:13:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:13:46 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='62d657b644bf4db299d752a176edee91') t1
        left join (select * from t_outbody where outno='X160530021') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 23:13:46 --> Total execution time: 0.0820
DEBUG - 2016-05-30 23:13:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621226
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:15:04 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:15:04 --> Security Class Initialized
DEBUG - 2016-05-30 23:15:04 --> CRSF cookie Set
DEBUG - 2016-05-30 23:15:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:15:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:15:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cfb174e6a46b4b40b36de1d5bcded727', '114.91.131.17', '2016-05-30', '23:15:04', '120340235', '/admin/order/check/62d657b644bf4db299d752a176edee91', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:15:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:15:04 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='62d657b644bf4db299d752a176edee91' order by create_date_time desc
DEBUG - 2016-05-30 23:15:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:15:04 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='62d657b644bf4db299d752a176edee91') t1
        left join (select * from t_outbody where outno='X160530021') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 23:15:04 --> Total execution time: 0.1010
DEBUG - 2016-05-30 23:15:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621304
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:15:40 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:15:40 --> Security Class Initialized
DEBUG - 2016-05-30 23:15:40 --> CRSF cookie Set
DEBUG - 2016-05-30 23:15:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:15:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:15:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7dde8e03110e4f1aabaeee8fcbd138db', '114.91.131.17', '2016-05-30', '23:15:40', '120340235', '/admin/order/check/c317bbf5157b4d37837e9f167559433d', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:15:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='c317bbf5157b4d37837e9f167559433d'
DEBUG - 2016-05-30 23:15:40 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='c317bbf5157b4d37837e9f167559433d' order by create_date_time desc
DEBUG - 2016-05-30 23:15:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='c317bbf5157b4d37837e9f167559433d'
DEBUG - 2016-05-30 23:15:40 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='c317bbf5157b4d37837e9f167559433d') t1
        left join (select * from t_outbody where outno='') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 23:15:40 --> Total execution time: 0.0790
DEBUG - 2016-05-30 23:15:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621340
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:16:17 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:16:17 --> Security Class Initialized
DEBUG - 2016-05-30 23:16:17 --> CRSF cookie Set
DEBUG - 2016-05-30 23:16:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:16:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:16:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('41a5f81bbc494013af5f2970b0c6bee8', '114.91.131.17', '2016-05-30', '23:16:17', '120340235', '/admin/order/check/62d657b644bf4db299d752a176edee91', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:16:17 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:16:17 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='62d657b644bf4db299d752a176edee91' order by create_date_time desc
DEBUG - 2016-05-30 23:16:17 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:16:17 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='62d657b644bf4db299d752a176edee91') t1
        left join (select * from t_outbody where outno='X160530021') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 23:16:17 --> Total execution time: 0.0930
DEBUG - 2016-05-30 23:16:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621377
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:16:36 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:16:36 --> Security Class Initialized
DEBUG - 2016-05-30 23:16:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:16:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:16:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('94e609245fd64931a3ba0136ed7296be', '114.91.131.17', '2016-05-30', '23:16:36', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:16:36 --> 审核订单
DEBUG - 2016-05-30 23:16:36 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '62d657b644bf4db299d752a176edee91'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-05-30 23:16:36 --> 过程调用语句：  execute USP_APSOS_outorder '62d657b644bf4db299d752a176edee91'
ERROR - 2016-05-30 23:16:36 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 242
DEBUG - 2016-05-30 23:16:36 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-05-30 23:16:36 --> Total execution time: 0.1550
DEBUG - 2016-05-30 23:16:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621396
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:16:36 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:16:36 --> Security Class Initialized
DEBUG - 2016-05-30 23:16:36 --> CRSF cookie Set
DEBUG - 2016-05-30 23:16:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:16:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:16:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7f32a3ed7278476d80549b147b8285fd', '114.91.131.17', '2016-05-30', '23:16:36', '120340235', '/admin/order/check/62d657b644bf4db299d752a176edee91', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:16:36 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:16:36 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='62d657b644bf4db299d752a176edee91' order by create_date_time desc
DEBUG - 2016-05-30 23:16:36 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:16:36 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='62d657b644bf4db299d752a176edee91') t1
        left join (select * from t_outbody where outno='X160530021') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 23:16:36 --> Total execution time: 0.0790
DEBUG - 2016-05-30 23:16:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621396
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:18:10 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:18:10 --> No URI present. Default controller set.
DEBUG - 2016-05-30 23:18:10 --> CRSF cookie Set
DEBUG - 2016-05-30 23:18:10 --> Security Class Initialized
DEBUG - 2016-05-30 23:18:10 --> CRSF cookie Set
DEBUG - 2016-05-30 23:18:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:18:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:10 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b93f64753af18c218dac0d90fcf5f99fbfafcb69', '114.91.131.17', 1464621490, '__ci_last_regenerate|i:1464621490;')
DEBUG - 2016-05-30 23:18:10 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:18:10 --> Security Class Initialized
DEBUG - 2016-05-30 23:18:10 --> CRSF cookie Set
DEBUG - 2016-05-30 23:18:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:18:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:10 --> Total execution time: 0.0640
DEBUG - 2016-05-30 23:18:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621490
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:18 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:18:18 --> Security Class Initialized
DEBUG - 2016-05-30 23:18:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:18:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:18 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-05-30 23:18:18 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-05-30 23:18:18 --> 登录返回结果数：1
DEBUG - 2016-05-30 23:18:18 --> 成功登录
DEBUG - 2016-05-30 23:18:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621498, data = '__ci_last_regenerate|i:1464621490;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:18 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:18:18 --> No URI present. Default controller set.
DEBUG - 2016-05-30 23:18:18 --> Security Class Initialized
DEBUG - 2016-05-30 23:18:18 --> CRSF cookie Set
DEBUG - 2016-05-30 23:18:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:18:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('18845241d6034600906d34a2675d152e', '114.91.131.17', '2016-05-30', '23:18:18', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'b93f64753af18c218dac0d90fcf5f99fbfafcb69')
DEBUG - 2016-05-30 23:18:18 --> Total execution time: 0.0760
DEBUG - 2016-05-30 23:18:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621498
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:25 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:18:25 --> Security Class Initialized
DEBUG - 2016-05-30 23:18:25 --> CRSF cookie Set
DEBUG - 2016-05-30 23:18:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:18:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f13e2cb6b63343fa9d4aa6802e6c2d1f', '114.91.131.17', '2016-05-30', '23:18:25', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'b93f64753af18c218dac0d90fcf5f99fbfafcb69')
DEBUG - 2016-05-30 23:18:25 --> 查询待审核订单
DEBUG - 2016-05-30 23:18:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 23:18:25 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:18:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621505
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:31 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:18:31 --> Security Class Initialized
DEBUG - 2016-05-30 23:18:31 --> CRSF cookie Set
DEBUG - 2016-05-30 23:18:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:18:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('db8d43812f304608a0df0a9790d10a71', '114.91.131.17', '2016-05-30', '23:18:31', '120340235', '/admin/order/check/62d657b644bf4db299d752a176edee91', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'b93f64753af18c218dac0d90fcf5f99fbfafcb69')
DEBUG - 2016-05-30 23:18:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:18:31 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='62d657b644bf4db299d752a176edee91' order by create_date_time desc
DEBUG - 2016-05-30 23:18:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:18:31 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='62d657b644bf4db299d752a176edee91') t1
        left join (select * from t_outbody where outno='X160530021') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 23:18:31 --> Total execution time: 0.0850
DEBUG - 2016-05-30 23:18:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621511
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:38 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:18:38 --> Security Class Initialized
DEBUG - 2016-05-30 23:18:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:18:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('64a5a666df3c45dd9ec942aafb13e9ec', '114.91.131.17', '2016-05-30', '23:18:38', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'b93f64753af18c218dac0d90fcf5f99fbfafcb69')
DEBUG - 2016-05-30 23:18:38 --> 审核订单
DEBUG - 2016-05-30 23:18:38 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '62d657b644bf4db299d752a176edee91'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-05-30 23:18:38 --> 过程调用语句：  execute USP_APSOS_outorder '62d657b644bf4db299d752a176edee91'
ERROR - 2016-05-30 23:18:38 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 242
DEBUG - 2016-05-30 23:18:38 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-05-30 23:18:38 --> Total execution time: 0.0790
DEBUG - 2016-05-30 23:18:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621518
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:38 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:18:38 --> Security Class Initialized
DEBUG - 2016-05-30 23:18:38 --> CRSF cookie Set
DEBUG - 2016-05-30 23:18:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:18:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:18:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('65dd3fe4acfd43828c9e769bb66c3e3e', '114.91.131.17', '2016-05-30', '23:18:38', '120340235', '/admin/order/check/62d657b644bf4db299d752a176edee91', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'b93f64753af18c218dac0d90fcf5f99fbfafcb69')
DEBUG - 2016-05-30 23:18:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:18:38 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='62d657b644bf4db299d752a176edee91' order by create_date_time desc
DEBUG - 2016-05-30 23:18:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:18:38 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='62d657b644bf4db299d752a176edee91') t1
        left join (select * from t_outbody where outno='X160530021') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 23:18:38 --> Total execution time: 0.0890
DEBUG - 2016-05-30 23:18:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621518
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:20:40 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:20:40 --> Security Class Initialized
DEBUG - 2016-05-30 23:20:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:20:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:20:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8e2657fca20343d182851c8c7adc0f2b', '114.91.131.17', '2016-05-30', '23:20:40', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b')
DEBUG - 2016-05-30 23:20:40 --> 审核订单
DEBUG - 2016-05-30 23:20:40 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '62d657b644bf4db299d752a176edee91'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-05-30 23:20:40 --> 过程调用语句：  execute USP_APSOS_outorder '62d657b644bf4db299d752a176edee91'
ERROR - 2016-05-30 23:20:40 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 242
DEBUG - 2016-05-30 23:20:40 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-05-30 23:20:40 --> Total execution time: 0.0970
DEBUG - 2016-05-30 23:20:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621640
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:20:40 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:20:40 --> Security Class Initialized
DEBUG - 2016-05-30 23:20:40 --> CRSF cookie Set
DEBUG - 2016-05-30 23:20:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:20:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:20:40 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'f226e62de39fd4ab7272ec50cf4991e8e9f8935b'
DEBUG - 2016-05-30 23:20:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bdcfcd82c6714059832307241d188618', '114.91.131.17', '2016-05-30', '23:20:40', '120340235', '/admin/order/check/62d657b644bf4db299d752a176edee91', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fed21c76783b56068c6f7bf7c7c24ecd22c07918')
DEBUG - 2016-05-30 23:20:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:20:40 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='62d657b644bf4db299d752a176edee91' order by create_date_time desc
DEBUG - 2016-05-30 23:20:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:20:40 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='62d657b644bf4db299d752a176edee91') t1
        left join (select * from t_outbody where outno='X160530021') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 23:20:40 --> Total execution time: 0.0900
DEBUG - 2016-05-30 23:20:40 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('fed21c76783b56068c6f7bf7c7c24ecd22c07918', '114.91.131.17', 1464621640, '__ci_last_regenerate|i:1464621640;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-05-30 23:23:52 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:23:52 --> Security Class Initialized
DEBUG - 2016-05-30 23:23:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:23:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:23:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('40f24f14b63842f8bd06d0eaf0f0e9fa', '114.91.131.17', '2016-05-30', '23:23:52', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'b93f64753af18c218dac0d90fcf5f99fbfafcb69')
DEBUG - 2016-05-30 23:23:52 --> 审核订单
DEBUG - 2016-05-30 23:23:52 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '62d657b644bf4db299d752a176edee91'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-05-30 23:23:52 --> 过程调用语句：  execute USP_APSOS_outorder '62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:23:53 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '62d657b644bf4db299d752a176edee91', '2', '', 'fd9c2ac283e94955b54bddddc6ac4faa', '2016-05-30 23:23:53')
DEBUG - 2016-05-30 23:23:53 --> 该订单状态更新成功:2
DEBUG - 2016-05-30 23:23:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:23:53 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-05-30 23:23:56 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-05-30 23:23:56 --> Total execution time: 4.6703
DEBUG - 2016-05-30 23:23:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621836
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:23:56 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:23:56 --> Security Class Initialized
DEBUG - 2016-05-30 23:23:56 --> CRSF cookie Set
DEBUG - 2016-05-30 23:23:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:23:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:23:57 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'b93f64753af18c218dac0d90fcf5f99fbfafcb69'
DEBUG - 2016-05-30 23:23:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('89d513fd5de24dc587dca098de820561', '114.91.131.17', '2016-05-30', '23:23:57', '120340235', '/admin/order/check/62d657b644bf4db299d752a176edee91', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '5364330bda0132e4e296f82aff8a5b3a6be3ae2b')
DEBUG - 2016-05-30 23:23:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:23:57 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='62d657b644bf4db299d752a176edee91' order by create_date_time desc
DEBUG - 2016-05-30 23:23:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:23:57 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='62d657b644bf4db299d752a176edee91') t1
        left join (select * from t_outbody where outno='X160530021') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 23:23:57 --> Total execution time: 0.1030
DEBUG - 2016-05-30 23:23:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5364330bda0132e4e296f82aff8a5b3a6be3ae2b', '114.91.131.17', 1464621837, '__ci_last_regenerate|i:1464621837;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-05-30 23:24:13 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:24:13 --> Security Class Initialized
DEBUG - 2016-05-30 23:24:13 --> CRSF cookie Set
DEBUG - 2016-05-30 23:24:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:24:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:24:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b57ef32fe8684a718d26dadc9325944b', '114.91.131.17', '2016-05-30', '23:24:13', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '5364330bda0132e4e296f82aff8a5b3a6be3ae2b')
DEBUG - 2016-05-30 23:24:13 --> 查询待审核订单
DEBUG - 2016-05-30 23:24:13 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 23:24:13 --> Total execution time: 0.0970
DEBUG - 2016-05-30 23:24:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621853
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:24:15 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:24:15 --> Security Class Initialized
DEBUG - 2016-05-30 23:24:15 --> CRSF cookie Set
DEBUG - 2016-05-30 23:24:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:24:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:24:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d967b8b1bff04bfbb17c5db5fcacbd7e', '114.91.131.17', '2016-05-30', '23:24:15', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '5364330bda0132e4e296f82aff8a5b3a6be3ae2b')
DEBUG - 2016-05-30 23:24:15 --> 查询订单
DEBUG - 2016-05-30 23:24:15 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 23:24:15 --> Total execution time: 0.0920
DEBUG - 2016-05-30 23:24:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464621855
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:32:22 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:32:22 --> Security Class Initialized
DEBUG - 2016-05-30 23:32:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:32:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fed21c76783b56068c6f7bf7c7c24ecd22c07918'
DEBUG - 2016-05-30 23:32:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d36958d6c47741dfa1d2b44814d4de5b', '114.91.131.17', '2016-05-30', '23:32:25', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fed21c76783b56068c6f7bf7c7c24ecd22c07918')
DEBUG - 2016-05-30 23:32:25 --> 审核订单
DEBUG - 2016-05-30 23:32:25 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '62d657b644bf4db299d752a176edee91'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-05-30 23:32:26 --> 过程调用语句：  execute USP_APSOS_outorder '62d657b644bf4db299d752a176edee91'
ERROR - 2016-05-30 23:32:29 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 242
DEBUG - 2016-05-30 23:32:29 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-05-30 23:32:29 --> Total execution time: 7.4256
DEBUG - 2016-05-30 23:32:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622349
WHERE id = 'fed21c76783b56068c6f7bf7c7c24ecd22c07918'
DEBUG - 2016-05-30 23:32:29 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:32:29 --> Security Class Initialized
DEBUG - 2016-05-30 23:32:29 --> CRSF cookie Set
DEBUG - 2016-05-30 23:32:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:32:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fed21c76783b56068c6f7bf7c7c24ecd22c07918'
DEBUG - 2016-05-30 23:32:29 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'fed21c76783b56068c6f7bf7c7c24ecd22c07918'
DEBUG - 2016-05-30 23:32:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fff1b6fecbe349229b87b3694d6edc13', '114.91.131.17', '2016-05-30', '23:32:29', '120340235', '/admin/order/check/62d657b644bf4db299d752a176edee91', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd3406dacf9b64d98006527cb58c5926840bd8ba7')
DEBUG - 2016-05-30 23:32:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:32:30 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='62d657b644bf4db299d752a176edee91' order by create_date_time desc
DEBUG - 2016-05-30 23:32:30 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:32:30 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='62d657b644bf4db299d752a176edee91') t1
        left join (select * from t_outbody where outno='X160530021') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 23:32:30 --> Total execution time: 0.9984
DEBUG - 2016-05-30 23:32:30 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d3406dacf9b64d98006527cb58c5926840bd8ba7', '114.91.131.17', 1464622350, '__ci_last_regenerate|i:1464622349;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-05-30 23:36:13 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:36:13 --> Security Class Initialized
DEBUG - 2016-05-30 23:36:13 --> CRSF cookie Set
DEBUG - 2016-05-30 23:36:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:36:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd3406dacf9b64d98006527cb58c5926840bd8ba7'
DEBUG - 2016-05-30 23:36:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a8c3efb4a1394f979610467c14f65a2e', '114.91.131.17', '2016-05-30', '23:36:13', '120340235', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd3406dacf9b64d98006527cb58c5926840bd8ba7')
DEBUG - 2016-05-30 23:36:13 --> 查询需求订单
DEBUG - 2016-05-30 23:36:13 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-05-30 23:36:13 --> Total execution time: 0.3744
DEBUG - 2016-05-30 23:36:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622573
WHERE id = 'd3406dacf9b64d98006527cb58c5926840bd8ba7'
DEBUG - 2016-05-30 23:37:08 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:37:08 --> Security Class Initialized
DEBUG - 2016-05-30 23:37:08 --> CRSF cookie Set
DEBUG - 2016-05-30 23:37:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:37:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd3406dacf9b64d98006527cb58c5926840bd8ba7'
DEBUG - 2016-05-30 23:37:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2e3da28ff493485ca68f121b0c17235f', '114.91.131.17', '2016-05-30', '23:37:08', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd3406dacf9b64d98006527cb58c5926840bd8ba7')
DEBUG - 2016-05-30 23:37:08 --> 查询待审核订单
DEBUG - 2016-05-30 23:37:08 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 23:37:08 --> Total execution time: 0.1092
DEBUG - 2016-05-30 23:37:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622628
WHERE id = 'd3406dacf9b64d98006527cb58c5926840bd8ba7'
DEBUG - 2016-05-30 23:37:10 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:37:10 --> Security Class Initialized
DEBUG - 2016-05-30 23:37:10 --> CRSF cookie Set
DEBUG - 2016-05-30 23:37:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:37:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd3406dacf9b64d98006527cb58c5926840bd8ba7'
DEBUG - 2016-05-30 23:37:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c1f611f4a6814475b3c8492d27e6065e', '114.91.131.17', '2016-05-30', '23:37:10', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd3406dacf9b64d98006527cb58c5926840bd8ba7')
DEBUG - 2016-05-30 23:37:10 --> 查询待发货订单
DEBUG - 2016-05-30 23:37:10 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-05-30 23:37:10 --> Total execution time: 0.0936
DEBUG - 2016-05-30 23:37:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622630
WHERE id = 'd3406dacf9b64d98006527cb58c5926840bd8ba7'
DEBUG - 2016-05-30 23:37:34 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:37:34 --> Security Class Initialized
DEBUG - 2016-05-30 23:37:34 --> CRSF cookie Set
DEBUG - 2016-05-30 23:37:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:37:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd3406dacf9b64d98006527cb58c5926840bd8ba7'
DEBUG - 2016-05-30 23:37:35 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'd3406dacf9b64d98006527cb58c5926840bd8ba7'
DEBUG - 2016-05-30 23:37:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('218dbf07181e4de2bae3e84ab51bb99e', '114.91.131.17', '2016-05-30', '23:37:35', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '342330693e40bcfd1d3e375efa390d0e5e74c9ce')
DEBUG - 2016-05-30 23:37:35 --> 查询待发货订单
DEBUG - 2016-05-30 23:37:35 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-05-30 23:37:35 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:37:35 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('342330693e40bcfd1d3e375efa390d0e5e74c9ce', '114.91.131.17', 1464622655, '__ci_last_regenerate|i:1464622655;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-05-30 23:37:36 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:37:36 --> Security Class Initialized
DEBUG - 2016-05-30 23:37:36 --> CRSF cookie Set
DEBUG - 2016-05-30 23:37:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:37:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:37:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c1147d2fbc6d461cbaeb0d82e179a4eb', '114.91.131.17', '2016-05-30', '23:37:36', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '342330693e40bcfd1d3e375efa390d0e5e74c9ce')
DEBUG - 2016-05-30 23:37:36 --> 查询待审核订单
DEBUG - 2016-05-30 23:37:36 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 23:37:36 --> Total execution time: 0.0624
DEBUG - 2016-05-30 23:37:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622656
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:37:37 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:37:37 --> Security Class Initialized
DEBUG - 2016-05-30 23:37:37 --> CRSF cookie Set
DEBUG - 2016-05-30 23:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:37:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:37:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2d98ebb33d224a5486bbb687388d3901', '114.91.131.17', '2016-05-30', '23:37:37', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '342330693e40bcfd1d3e375efa390d0e5e74c9ce')
DEBUG - 2016-05-30 23:37:37 --> 查询待审核订单
DEBUG - 2016-05-30 23:37:37 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 23:37:37 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:37:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622657
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:37:37 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:37:37 --> Security Class Initialized
DEBUG - 2016-05-30 23:37:37 --> CRSF cookie Set
DEBUG - 2016-05-30 23:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:37:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:37:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cbbe7b0fcaf148e0a55ffcee4d9c5847', '114.91.131.17', '2016-05-30', '23:37:37', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '342330693e40bcfd1d3e375efa390d0e5e74c9ce')
DEBUG - 2016-05-30 23:37:37 --> 查询待审核订单
DEBUG - 2016-05-30 23:37:37 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-05-30 23:37:37 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:37:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622657
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:37:39 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:37:39 --> Security Class Initialized
DEBUG - 2016-05-30 23:37:39 --> CRSF cookie Set
DEBUG - 2016-05-30 23:37:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:37:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:37:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fa9a75ffdc2b4e1d8888ce96c2c7b33f', '114.91.131.17', '2016-05-30', '23:37:39', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '342330693e40bcfd1d3e375efa390d0e5e74c9ce')
DEBUG - 2016-05-30 23:37:39 --> 查询待发货订单
DEBUG - 2016-05-30 23:37:39 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-05-30 23:37:39 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:37:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622659
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:37:40 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:37:40 --> Security Class Initialized
DEBUG - 2016-05-30 23:37:40 --> CRSF cookie Set
DEBUG - 2016-05-30 23:37:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:37:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:37:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2e3a451ee0bc44f789a84066c1f88803', '114.91.131.17', '2016-05-30', '23:37:40', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '342330693e40bcfd1d3e375efa390d0e5e74c9ce')
DEBUG - 2016-05-30 23:37:40 --> 查询待发货订单
DEBUG - 2016-05-30 23:37:40 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-05-30 23:37:40 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:37:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622660
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:37:41 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:37:41 --> Security Class Initialized
DEBUG - 2016-05-30 23:37:41 --> CRSF cookie Set
DEBUG - 2016-05-30 23:37:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:37:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:37:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e50b0a61dac84141b7b85335abef9017', '114.91.131.17', '2016-05-30', '23:37:41', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '342330693e40bcfd1d3e375efa390d0e5e74c9ce')
DEBUG - 2016-05-30 23:37:41 --> 查询待发货订单
DEBUG - 2016-05-30 23:37:41 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-05-30 23:37:41 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:37:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622661
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:37:42 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:37:42 --> Security Class Initialized
DEBUG - 2016-05-30 23:37:42 --> CRSF cookie Set
DEBUG - 2016-05-30 23:37:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:37:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:37:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f462414806394bdc9dbb26096abcfc54', '114.91.131.17', '2016-05-30', '23:37:42', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '342330693e40bcfd1d3e375efa390d0e5e74c9ce')
DEBUG - 2016-05-30 23:37:42 --> 查询待发货订单
DEBUG - 2016-05-30 23:37:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-05-30 23:37:42 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:37:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622662
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:40:04 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:40:04 --> Security Class Initialized
DEBUG - 2016-05-30 23:40:04 --> CRSF cookie Set
DEBUG - 2016-05-30 23:40:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:40:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:40:04 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('342330693e40bcfd1d3e375efa390d0e5e74c9ce', '114.91.131.17', 1464622804, '__ci_last_regenerate|i:1464622804;')
DEBUG - 2016-05-30 23:40:04 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:40:04 --> Security Class Initialized
DEBUG - 2016-05-30 23:40:04 --> CRSF cookie Set
DEBUG - 2016-05-30 23:40:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:40:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:40:04 --> Total execution time: 0.2340
DEBUG - 2016-05-30 23:40:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622804
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:40:16 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:40:16 --> Security Class Initialized
DEBUG - 2016-05-30 23:40:16 --> CRSF cookie Set
DEBUG - 2016-05-30 23:40:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:40:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5364330bda0132e4e296f82aff8a5b3a6be3ae2b', '114.91.131.17', 1464622816, '__ci_last_regenerate|i:1464622816;')
DEBUG - 2016-05-30 23:40:16 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:40:16 --> Security Class Initialized
DEBUG - 2016-05-30 23:40:16 --> CRSF cookie Set
DEBUG - 2016-05-30 23:40:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:40:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:16 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:40:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622816
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:24 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:40:24 --> Security Class Initialized
DEBUG - 2016-05-30 23:40:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:40:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:24 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-05-30 23:40:24 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-05-30 23:40:24 --> 登录返回结果数：1
DEBUG - 2016-05-30 23:40:24 --> 成功登录
DEBUG - 2016-05-30 23:40:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622824, data = '__ci_last_regenerate|i:1464622816;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:24 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:40:24 --> Security Class Initialized
DEBUG - 2016-05-30 23:40:24 --> CRSF cookie Set
DEBUG - 2016-05-30 23:40:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:40:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4b5d7501600b4b3384e80f65423deaed', '114.91.131.17', '2016-05-30', '23:40:24', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '5364330bda0132e4e296f82aff8a5b3a6be3ae2b')
DEBUG - 2016-05-30 23:40:24 --> 查询订单
DEBUG - 2016-05-30 23:40:24 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 23:40:24 --> Total execution time: 0.0936
DEBUG - 2016-05-30 23:40:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622824
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:28 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:40:28 --> Security Class Initialized
DEBUG - 2016-05-30 23:40:28 --> CRSF cookie Set
DEBUG - 2016-05-30 23:40:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:40:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1d163649cb62450c94cd5a761f7334b4', '114.91.131.17', '2016-05-30', '23:40:28', '120340235', '/admin/account/changeProfile', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '5364330bda0132e4e296f82aff8a5b3a6be3ae2b')
DEBUG - 2016-05-30 23:40:28 --> [执行的SQL语句]##############select * from admin_user where uuid='120340235' and enable='Y'
DEBUG - 2016-05-30 23:40:28 --> Total execution time: 0.1716
DEBUG - 2016-05-30 23:40:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622828
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:43 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:40:43 --> Security Class Initialized
DEBUG - 2016-05-30 23:40:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:40:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('492a6cd7efb54b4cb631c7db979d93c9', '114.91.131.17', '2016-05-30', '23:40:43', '120340235', '/admin/Account/doChangepwd', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '5364330bda0132e4e296f82aff8a5b3a6be3ae2b')
DEBUG - 2016-05-30 23:40:43 --> xiaobai0524||xiaobai||xiaobai
DEBUG - 2016-05-30 23:40:43 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE uuid = '120340235'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
DEBUG - 2016-05-30 23:40:43 --> [执行的SQL语句]##############UPDATE admin_user SET login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
WHERE uuid = '120340235'
DEBUG - 2016-05-30 23:40:43 --> Total execution time: 0.1248
DEBUG - 2016-05-30 23:40:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622843
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:49 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:40:49 --> Security Class Initialized
DEBUG - 2016-05-30 23:40:49 --> CRSF cookie Set
DEBUG - 2016-05-30 23:40:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:40:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622849, data = '__ci_last_regenerate|i:1464622816;'
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:49 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:40:49 --> Security Class Initialized
DEBUG - 2016-05-30 23:40:49 --> CRSF cookie Set
DEBUG - 2016-05-30 23:40:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:40:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:49 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:40:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622849
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:54 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:40:54 --> Security Class Initialized
DEBUG - 2016-05-30 23:40:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:40:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:54 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-05-30 23:40:54 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-05-30 23:40:54 --> 登录返回结果数：1
DEBUG - 2016-05-30 23:40:54 --> 成功登录
DEBUG - 2016-05-30 23:40:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622854, data = '__ci_last_regenerate|i:1464622816;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:54 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:40:54 --> Security Class Initialized
DEBUG - 2016-05-30 23:40:54 --> CRSF cookie Set
DEBUG - 2016-05-30 23:40:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:40:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:40:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('31d19a70e086449b9f81a67f0a38248d', '114.91.131.17', '2016-05-30', '23:40:54', '120340235', '/admin/backhome', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '5364330bda0132e4e296f82aff8a5b3a6be3ae2b')
DEBUG - 2016-05-30 23:40:54 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:40:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622854
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:41:11 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:41:11 --> Security Class Initialized
DEBUG - 2016-05-30 23:41:11 --> CRSF cookie Set
DEBUG - 2016-05-30 23:41:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:41:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:41:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1cbb106707db49ba98dfeb08f458aebf', '114.91.131.17', '2016-05-30', '23:41:11', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '5364330bda0132e4e296f82aff8a5b3a6be3ae2b')
DEBUG - 2016-05-30 23:41:11 --> 查询订单
DEBUG - 2016-05-30 23:41:11 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-05-30 23:41:11 --> Total execution time: 0.0936
DEBUG - 2016-05-30 23:41:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622871
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:41:18 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:41:18 --> Security Class Initialized
DEBUG - 2016-05-30 23:41:18 --> CRSF cookie Set
DEBUG - 2016-05-30 23:41:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:41:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:41:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622878, data = '__ci_last_regenerate|i:1464622816;'
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:41:18 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:41:18 --> Security Class Initialized
DEBUG - 2016-05-30 23:41:18 --> CRSF cookie Set
DEBUG - 2016-05-30 23:41:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:41:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:41:18 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:41:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622878
WHERE id = '5364330bda0132e4e296f82aff8a5b3a6be3ae2b'
DEBUG - 2016-05-30 23:42:47 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:42:47 --> Security Class Initialized
DEBUG - 2016-05-30 23:42:47 --> CRSF cookie Set
DEBUG - 2016-05-30 23:42:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:42:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:42:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622967
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:42:47 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:42:47 --> Security Class Initialized
DEBUG - 2016-05-30 23:42:47 --> CRSF cookie Set
DEBUG - 2016-05-30 23:42:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:42:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:42:47 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:42:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622967
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:42:59 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:42:59 --> Security Class Initialized
DEBUG - 2016-05-30 23:42:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:42:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:42:59 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-05-30 23:42:59 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-05-30 23:42:59 --> 登录返回结果数：1
DEBUG - 2016-05-30 23:42:59 --> 成功登录
DEBUG - 2016-05-30 23:42:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622979, data = '__ci_last_regenerate|i:1464622804;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:42:59 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:42:59 --> Security Class Initialized
DEBUG - 2016-05-30 23:42:59 --> CRSF cookie Set
DEBUG - 2016-05-30 23:42:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:43:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:43:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5692367d4395485b8337837f84e5093a', '114.91.131.17', '2016-05-30', '23:43:00', '120340235', '/admin/order/check/62d657b644bf4db299d752a176edee91', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '342330693e40bcfd1d3e375efa390d0e5e74c9ce')
DEBUG - 2016-05-30 23:43:00 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:43:00 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='62d657b644bf4db299d752a176edee91' order by create_date_time desc
DEBUG - 2016-05-30 23:43:00 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='62d657b644bf4db299d752a176edee91'
DEBUG - 2016-05-30 23:43:00 --> [执行的SQL语句]##############select t1.*,t2.lno as traffic_lno from (select * from apsos_order_detail where order_id='62d657b644bf4db299d752a176edee91') t1
        left join (select * from t_outbody where outno='') t2 on t1.product_id=t2.stockid    order by t1.lno asc
        
DEBUG - 2016-05-30 23:43:00 --> Total execution time: 0.1092
DEBUG - 2016-05-30 23:43:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464622980
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:43:23 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:43:23 --> Security Class Initialized
DEBUG - 2016-05-30 23:43:23 --> CRSF cookie Set
DEBUG - 2016-05-30 23:43:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:43:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:43:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('eeb8741337c24c899617dfeed633daba', '114.91.131.17', '2016-05-30', '23:43:23', '120340235', '/admin/account/changeProfile', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '342330693e40bcfd1d3e375efa390d0e5e74c9ce')
DEBUG - 2016-05-30 23:43:23 --> [执行的SQL语句]##############select * from admin_user where uuid='120340235' and enable='Y'
DEBUG - 2016-05-30 23:43:23 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:43:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464623003
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:44:08 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:44:08 --> Security Class Initialized
DEBUG - 2016-05-30 23:44:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:44:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:44:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c82f8c8460e3400ca5088bac9ff8c86c', '114.91.131.17', '2016-05-30', '23:44:08', '120340235', '/admin/Account/doChangepwd', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '342330693e40bcfd1d3e375efa390d0e5e74c9ce')
DEBUG - 2016-05-30 23:44:08 --> xiaobai||wnj123456||wnj123456
DEBUG - 2016-05-30 23:44:08 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE uuid = '120340235'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
DEBUG - 2016-05-30 23:44:08 --> [执行的SQL语句]##############UPDATE admin_user SET login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
WHERE uuid = '120340235'
DEBUG - 2016-05-30 23:44:08 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:44:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464623048
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:44:17 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:44:17 --> Security Class Initialized
DEBUG - 2016-05-30 23:44:17 --> CRSF cookie Set
DEBUG - 2016-05-30 23:44:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:44:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:44:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464623057, data = '__ci_last_regenerate|i:1464622804;'
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:44:17 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:44:17 --> Security Class Initialized
DEBUG - 2016-05-30 23:44:17 --> CRSF cookie Set
DEBUG - 2016-05-30 23:44:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:44:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:44:17 --> Total execution time: 0.0624
DEBUG - 2016-05-30 23:44:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464623057
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:44:26 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:44:26 --> Security Class Initialized
DEBUG - 2016-05-30 23:44:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:44:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:44:26 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-05-30 23:44:26 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-05-30 23:44:26 --> 登录返回结果数：1
DEBUG - 2016-05-30 23:44:26 --> 成功登录
DEBUG - 2016-05-30 23:44:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464623066, data = '__ci_last_regenerate|i:1464622804;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:44:27 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:44:27 --> Security Class Initialized
DEBUG - 2016-05-30 23:44:27 --> CRSF cookie Set
DEBUG - 2016-05-30 23:44:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:44:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:44:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8aa154ea92604b9a8719f781d5cac559', '114.91.131.17', '2016-05-30', '23:44:27', '120340235', '/admin/backhome', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '342330693e40bcfd1d3e375efa390d0e5e74c9ce')
DEBUG - 2016-05-30 23:44:27 --> Total execution time: 0.0624
DEBUG - 2016-05-30 23:44:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464623067
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:44:31 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:44:31 --> Security Class Initialized
DEBUG - 2016-05-30 23:44:31 --> CRSF cookie Set
DEBUG - 2016-05-30 23:44:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:44:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:44:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c7b0110e745a420f9f605b81d5de3587', '114.91.131.17', '2016-05-30', '23:44:31', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '342330693e40bcfd1d3e375efa390d0e5e74c9ce')
DEBUG - 2016-05-30 23:44:31 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-05-30 23:44:31 --> Total execution time: 0.2340
DEBUG - 2016-05-30 23:44:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464623071
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:45:57 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:45:57 --> Security Class Initialized
DEBUG - 2016-05-30 23:45:57 --> CRSF cookie Set
DEBUG - 2016-05-30 23:45:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:45:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:45:57 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '342330693e40bcfd1d3e375efa390d0e5e74c9ce'
DEBUG - 2016-05-30 23:45:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b50df1c2365e41b7bcaae1f9d6baab5f', '114.91.131.17', '2016-05-30', '23:45:57', '120340235', '/admin/guest/edit/K05042', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '056412bb0aa641e918c2de7e16142c772817427a')
DEBUG - 2016-05-30 23:45:57 --> 修改客户信息：K05042
DEBUG - 2016-05-30 23:45:57 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05042' 
DEBUG - 2016-05-30 23:45:57 --> [执行的SQL语句]##############insert into apsos_user(uuid,login_code,login_pwd,user_name,phone,email,add_time,sex,enable,company)
          Select code,pycode,'c07cd18394ca7f70b23906c52103b752e578a653e07a9d49e88b72c3a2fd9157' as login_pwd,contactperson,
        (
        case
             when len(replace(handphonebp,' ',''))>11 then substring(replace(handphonebp,' ',''),1,11)
             when len(replace(handphonebp,' ',''))=11 then replace(handphonebp,' ','')
             else ''
        end
        ) as phone,
        (
        case
             when CHARINDEX('@',email) >0 then replace(email,' ','')
             else ''
        end
        )
         as email,getdate() as add_time,sex,'N',name
         from T_Guest where code='K05042'
DEBUG - 2016-05-30 23:45:57 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05042' 
DEBUG - 2016-05-30 23:45:57 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-05-30 23:45:57 --> Total execution time: 0.1248
DEBUG - 2016-05-30 23:45:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('056412bb0aa641e918c2de7e16142c772817427a', '114.91.131.17', 1464623157, '__ci_last_regenerate|i:1464623157;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-05-30 23:46:09 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:46:09 --> Security Class Initialized
DEBUG - 2016-05-30 23:46:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:46:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '056412bb0aa641e918c2de7e16142c772817427a'
DEBUG - 2016-05-30 23:46:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7af988bccd124818bdf32f8f6d9355e2', '114.91.131.17', '2016-05-30', '23:46:09', '120340235', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '056412bb0aa641e918c2de7e16142c772817427a')
DEBUG - 2016-05-30 23:46:09 --> 保存客户信息
DEBUG - 2016-05-30 23:46:09 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05042', enable = 'N', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05042'
DEBUG - 2016-05-30 23:46:09 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-05-30 23:46:09 --> Total execution time: 0.0936
DEBUG - 2016-05-30 23:46:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464623169
WHERE id = '056412bb0aa641e918c2de7e16142c772817427a'
DEBUG - 2016-05-30 23:46:14 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:46:14 --> Security Class Initialized
DEBUG - 2016-05-30 23:46:14 --> CRSF cookie Set
DEBUG - 2016-05-30 23:46:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:46:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '056412bb0aa641e918c2de7e16142c772817427a'
DEBUG - 2016-05-30 23:46:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ccfc8ec50aa342ed973e133130c7b41e', '114.91.131.17', '2016-05-30', '23:46:14', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '056412bb0aa641e918c2de7e16142c772817427a')
DEBUG - 2016-05-30 23:46:14 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-05-30 23:46:14 --> Total execution time: 0.0936
DEBUG - 2016-05-30 23:46:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464623174
WHERE id = '056412bb0aa641e918c2de7e16142c772817427a'
DEBUG - 2016-05-30 23:46:42 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:46:42 --> Security Class Initialized
DEBUG - 2016-05-30 23:46:42 --> CRSF cookie Set
DEBUG - 2016-05-30 23:46:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:46:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '056412bb0aa641e918c2de7e16142c772817427a'
DEBUG - 2016-05-30 23:46:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b16f90cb761f4ff696850918e61c3ae9', '114.91.131.17', '2016-05-30', '23:46:42', '120340235', '/admin/guest/edit/K05042', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '056412bb0aa641e918c2de7e16142c772817427a')
DEBUG - 2016-05-30 23:46:42 --> 修改客户信息：K05042
DEBUG - 2016-05-30 23:46:42 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05042' 
DEBUG - 2016-05-30 23:46:42 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05042' 
DEBUG - 2016-05-30 23:46:42 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-05-30 23:46:42 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:46:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464623202
WHERE id = '056412bb0aa641e918c2de7e16142c772817427a'
DEBUG - 2016-05-30 23:47:57 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:47:57 --> No URI present. Default controller set.
DEBUG - 2016-05-30 23:47:57 --> Security Class Initialized
DEBUG - 2016-05-30 23:47:57 --> CRSF cookie Set
DEBUG - 2016-05-30 23:47:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:47:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '056412bb0aa641e918c2de7e16142c772817427a'
DEBUG - 2016-05-30 23:47:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('021e2027cfda4f66a8d1bb7f6ff8e706', '114.91.131.17', '2016-05-30', '23:47:57', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '056412bb0aa641e918c2de7e16142c772817427a')
DEBUG - 2016-05-30 23:47:57 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:47:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464623277
WHERE id = '056412bb0aa641e918c2de7e16142c772817427a'
DEBUG - 2016-05-30 23:48:42 --> UTF-8 Support Enabled
DEBUG - 2016-05-30 23:48:42 --> No URI present. Default controller set.
DEBUG - 2016-05-30 23:48:42 --> Security Class Initialized
DEBUG - 2016-05-30 23:48:42 --> CRSF cookie Set
DEBUG - 2016-05-30 23:48:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-30 23:48:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '056412bb0aa641e918c2de7e16142c772817427a'
DEBUG - 2016-05-30 23:48:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3b7fb8458acc4cc68d763e931651ad06', '114.91.131.17', '2016-05-30', '23:48:42', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '056412bb0aa641e918c2de7e16142c772817427a')
DEBUG - 2016-05-30 23:48:42 --> Total execution time: 0.0780
DEBUG - 2016-05-30 23:48:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464623322
WHERE id = '056412bb0aa641e918c2de7e16142c772817427a'
