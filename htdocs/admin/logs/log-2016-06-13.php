<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-13 10:24:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:24:50 --> CRSF cookie Set
DEBUG - 2016-06-13 10:24:50 --> Security Class Initialized
DEBUG - 2016-06-13 10:24:50 --> CRSF cookie Set
DEBUG - 2016-06-13 10:24:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:24:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:24:50 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('107f1135ece6c6f300768b76657bd005871571fc', '114.91.131.17', 1465784690, '__ci_last_regenerate|i:1465784690;')
DEBUG - 2016-06-13 10:24:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:24:51 --> Security Class Initialized
DEBUG - 2016-06-13 10:24:51 --> CRSF cookie Set
DEBUG - 2016-06-13 10:24:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:24:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:24:51 --> Total execution time: 0.1090
DEBUG - 2016-06-13 10:24:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465784691
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:24:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:24:55 --> Security Class Initialized
DEBUG - 2016-06-13 10:24:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:24:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:24:55 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-13 10:24:55 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-13 10:24:55 --> 登录返回结果数：1
DEBUG - 2016-06-13 10:24:55 --> 成功登录
DEBUG - 2016-06-13 10:24:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465784695, data = '__ci_last_regenerate|i:1465784690;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:24:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:24:55 --> Security Class Initialized
DEBUG - 2016-06-13 10:24:55 --> CRSF cookie Set
DEBUG - 2016-06-13 10:24:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:24:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:24:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('648ef210ae464d40a9f91c91a61cae29', '114.91.131.17', '2016-06-13', '10:24:55', '120340235', '/admin/order/check/d6f96325271947c6afd3746afe5a5d6d', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '107f1135ece6c6f300768b76657bd005871571fc')
DEBUG - 2016-06-13 10:24:55 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 10:24:55 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='d6f96325271947c6afd3746afe5a5d6d' order by create_date_time desc
DEBUG - 2016-06-13 10:24:55 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 10:24:55 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='d6f96325271947c6afd3746afe5a5d6d'    order by t1.lno asc
        
DEBUG - 2016-06-13 10:24:55 --> Total execution time: 0.1300
DEBUG - 2016-06-13 10:24:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465784695
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:24:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:24:58 --> Security Class Initialized
DEBUG - 2016-06-13 10:24:58 --> CRSF cookie Set
DEBUG - 2016-06-13 10:24:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:24:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:24:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d7958410430b42178aec8d491d885f2a', '114.91.131.17', '2016-06-13', '10:24:58', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '107f1135ece6c6f300768b76657bd005871571fc')
DEBUG - 2016-06-13 10:24:58 --> 查询待审核订单
DEBUG - 2016-06-13 10:24:58 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-13 10:24:58 --> Total execution time: 0.0960
DEBUG - 2016-06-13 10:24:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465784698
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:24:59 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:24:59 --> Security Class Initialized
DEBUG - 2016-06-13 10:24:59 --> CRSF cookie Set
DEBUG - 2016-06-13 10:24:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:24:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:24:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e35d8583cca749f9b718952bc0b43216', '114.91.131.17', '2016-06-13', '10:24:59', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '107f1135ece6c6f300768b76657bd005871571fc')
DEBUG - 2016-06-13 10:24:59 --> 查询待审核订单
DEBUG - 2016-06-13 10:24:59 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-13 10:24:59 --> Total execution time: 0.0800
DEBUG - 2016-06-13 10:24:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465784699
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:25:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:25:06 --> Security Class Initialized
DEBUG - 2016-06-13 10:25:06 --> CRSF cookie Set
DEBUG - 2016-06-13 10:25:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:25:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:25:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9b9ae54f6a5a43a4a4f8a9a57b8bd81e', '114.91.131.17', '2016-06-13', '10:25:06', '120340235', '/admin/order/check/d6f96325271947c6afd3746afe5a5d6d', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '107f1135ece6c6f300768b76657bd005871571fc')
DEBUG - 2016-06-13 10:25:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 10:25:06 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='d6f96325271947c6afd3746afe5a5d6d' order by create_date_time desc
DEBUG - 2016-06-13 10:25:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 10:25:06 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='d6f96325271947c6afd3746afe5a5d6d'    order by t1.lno asc
        
DEBUG - 2016-06-13 10:25:06 --> Total execution time: 0.0950
DEBUG - 2016-06-13 10:25:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465784706
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:25:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:25:21 --> Security Class Initialized
DEBUG - 2016-06-13 10:25:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:25:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:25:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1a4f78a30f16430db1b823ce41cc2b7e', '114.91.131.17', '2016-06-13', '10:25:21', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '107f1135ece6c6f300768b76657bd005871571fc')
DEBUG - 2016-06-13 10:25:21 --> 审核订单
DEBUG - 2016-06-13 10:25:21 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'd6f96325271947c6afd3746afe5a5d6d'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-13 10:25:21 --> 过程调用语句：  execute USP_APSOS_outorder 'd6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 10:25:22 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'd6f96325271947c6afd3746afe5a5d6d', '2', '', '2b39692a25e34022b3624a1416ae8a86', '2016-06-13 10:25:22')
DEBUG - 2016-06-13 10:25:22 --> 该订单状态更新成功:2
DEBUG - 2016-06-13 10:25:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 10:25:22 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05055'
DEBUG - 2016-06-13 10:25:24 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-13 10:25:24 --> Total execution time: 2.5461
DEBUG - 2016-06-13 10:25:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465784724
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:25:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:25:24 --> Security Class Initialized
DEBUG - 2016-06-13 10:25:24 --> CRSF cookie Set
DEBUG - 2016-06-13 10:25:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:25:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:25:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9326d0cd807f4bd1ae69991bf3ca2754', '114.91.131.17', '2016-06-13', '10:25:24', '120340235', '/admin/order/check/d6f96325271947c6afd3746afe5a5d6d', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '107f1135ece6c6f300768b76657bd005871571fc')
DEBUG - 2016-06-13 10:25:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 10:25:24 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='d6f96325271947c6afd3746afe5a5d6d' order by create_date_time desc
DEBUG - 2016-06-13 10:25:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 10:25:24 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='d6f96325271947c6afd3746afe5a5d6d'    order by t1.lno asc
        
DEBUG - 2016-06-13 10:25:24 --> Total execution time: 0.0960
DEBUG - 2016-06-13 10:25:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465784724
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:25:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:25:27 --> Security Class Initialized
DEBUG - 2016-06-13 10:25:27 --> CRSF cookie Set
DEBUG - 2016-06-13 10:25:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:25:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:25:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b244d19808ad4dfe832c6df0806345c5', '114.91.131.17', '2016-06-13', '10:25:27', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '107f1135ece6c6f300768b76657bd005871571fc')
DEBUG - 2016-06-13 10:25:27 --> 查询待发货订单
DEBUG - 2016-06-13 10:25:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-13 10:25:27 --> Total execution time: 0.0960
DEBUG - 2016-06-13 10:25:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465784727
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:25:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:25:31 --> Security Class Initialized
DEBUG - 2016-06-13 10:25:31 --> CRSF cookie Set
DEBUG - 2016-06-13 10:25:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:25:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:25:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c08b103a291f4500b268a06a32ec4334', '114.91.131.17', '2016-06-13', '10:25:31', '120340235', '/admin/order/traffic/83d6465d95154a7ea845b0ef6a76eb9b', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '107f1135ece6c6f300768b76657bd005871571fc')
DEBUG - 2016-06-13 10:25:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-13 10:25:31 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='83d6465d95154a7ea845b0ef6a76eb9b' order by create_date_time desc
DEBUG - 2016-06-13 10:25:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-13 10:25:31 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='83d6465d95154a7ea845b0ef6a76eb9b'    order by t1.lno asc
        
DEBUG - 2016-06-13 10:25:31 --> Total execution time: 0.1170
DEBUG - 2016-06-13 10:25:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465784731
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:25:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:25:46 --> Security Class Initialized
DEBUG - 2016-06-13 10:25:46 --> CRSF cookie Set
DEBUG - 2016-06-13 10:25:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:25:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:25:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6d22d8a3649848b0a2b0c2c1182ebbbb', '114.91.131.17', '2016-06-13', '10:25:46', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '107f1135ece6c6f300768b76657bd005871571fc')
DEBUG - 2016-06-13 10:25:46 --> 查询待发货订单
DEBUG - 2016-06-13 10:25:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-13 10:25:46 --> Total execution time: 0.0780
DEBUG - 2016-06-13 10:25:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465784746
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:32:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:32:13 --> Security Class Initialized
DEBUG - 2016-06-13 10:32:13 --> CRSF cookie Set
DEBUG - 2016-06-13 10:32:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:32:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:32:13 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '107f1135ece6c6f300768b76657bd005871571fc'
DEBUG - 2016-06-13 10:32:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f362585307af44f39d25610fb71e2b48', '114.91.131.17', '2016-06-13', '10:32:13', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'eed8d4a76b4857a406673dff2eb46d79e8471680')
DEBUG - 2016-06-13 10:32:13 --> 查询待发货订单
DEBUG - 2016-06-13 10:32:13 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-13 10:32:13 --> Total execution time: 0.0780
DEBUG - 2016-06-13 10:32:13 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('eed8d4a76b4857a406673dff2eb46d79e8471680', '114.91.131.17', 1465785133, '__ci_last_regenerate|i:1465785133;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-13 10:32:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:32:15 --> Security Class Initialized
DEBUG - 2016-06-13 10:32:15 --> CRSF cookie Set
DEBUG - 2016-06-13 10:32:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:32:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'eed8d4a76b4857a406673dff2eb46d79e8471680'
DEBUG - 2016-06-13 10:32:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e790d3240c374615982e891892d71aee', '114.91.131.17', '2016-06-13', '10:32:15', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'eed8d4a76b4857a406673dff2eb46d79e8471680')
DEBUG - 2016-06-13 10:32:15 --> 查询待发货订单
DEBUG - 2016-06-13 10:32:15 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-13 10:32:15 --> Total execution time: 0.0940
DEBUG - 2016-06-13 10:32:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465785135
WHERE id = 'eed8d4a76b4857a406673dff2eb46d79e8471680'
DEBUG - 2016-06-13 10:32:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:32:17 --> Security Class Initialized
DEBUG - 2016-06-13 10:32:17 --> CRSF cookie Set
DEBUG - 2016-06-13 10:32:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:32:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'eed8d4a76b4857a406673dff2eb46d79e8471680'
DEBUG - 2016-06-13 10:32:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('010e26ab7cc34e59aa242e55b25d00c8', '114.91.131.17', '2016-06-13', '10:32:17', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'eed8d4a76b4857a406673dff2eb46d79e8471680')
DEBUG - 2016-06-13 10:32:17 --> 查询待发货订单
DEBUG - 2016-06-13 10:32:17 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-13 10:32:17 --> Total execution time: 0.0790
DEBUG - 2016-06-13 10:32:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465785137
WHERE id = 'eed8d4a76b4857a406673dff2eb46d79e8471680'
DEBUG - 2016-06-13 10:32:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:32:18 --> Security Class Initialized
DEBUG - 2016-06-13 10:32:18 --> CRSF cookie Set
DEBUG - 2016-06-13 10:32:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:32:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'eed8d4a76b4857a406673dff2eb46d79e8471680'
DEBUG - 2016-06-13 10:32:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0bbd8f24a6254ed182b9847287b3d53e', '114.91.131.17', '2016-06-13', '10:32:18', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'eed8d4a76b4857a406673dff2eb46d79e8471680')
DEBUG - 2016-06-13 10:32:18 --> 查询待发货订单
DEBUG - 2016-06-13 10:32:18 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-13 10:32:18 --> Total execution time: 0.0800
DEBUG - 2016-06-13 10:32:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465785138
WHERE id = 'eed8d4a76b4857a406673dff2eb46d79e8471680'
DEBUG - 2016-06-13 10:32:19 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 10:32:19 --> Security Class Initialized
DEBUG - 2016-06-13 10:32:19 --> CRSF cookie Set
DEBUG - 2016-06-13 10:32:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 10:32:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'eed8d4a76b4857a406673dff2eb46d79e8471680'
DEBUG - 2016-06-13 10:32:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b714340c45f44a0b87d06e94c574cb16', '114.91.131.17', '2016-06-13', '10:32:19', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'eed8d4a76b4857a406673dff2eb46d79e8471680')
DEBUG - 2016-06-13 10:32:19 --> 查询订单
DEBUG - 2016-06-13 10:32:19 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-13 10:32:19 --> Total execution time: 0.0890
DEBUG - 2016-06-13 10:32:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465785139
WHERE id = 'eed8d4a76b4857a406673dff2eb46d79e8471680'
DEBUG - 2016-06-13 11:37:12 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 11:37:12 --> Security Class Initialized
DEBUG - 2016-06-13 11:37:12 --> CRSF cookie Set
DEBUG - 2016-06-13 11:37:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 11:37:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'eed8d4a76b4857a406673dff2eb46d79e8471680'
DEBUG - 2016-06-13 11:37:12 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'eed8d4a76b4857a406673dff2eb46d79e8471680'
DEBUG - 2016-06-13 11:37:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('945d7f2ea7aa4de3a27a569d5273656d', '114.91.131.17', '2016-06-13', '11:37:12', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '84862b97b1f65c7e108086e90be70f1c90e8546c')
DEBUG - 2016-06-13 11:37:12 --> 查询待发货订单
DEBUG - 2016-06-13 11:37:12 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-13 11:37:12 --> Total execution time: 0.1220
DEBUG - 2016-06-13 11:37:12 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('84862b97b1f65c7e108086e90be70f1c90e8546c', '114.91.131.17', 1465789032, '__ci_last_regenerate|i:1465789032;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-13 11:37:16 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 11:37:16 --> Security Class Initialized
DEBUG - 2016-06-13 11:37:16 --> CRSF cookie Set
DEBUG - 2016-06-13 11:37:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 11:37:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 11:37:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5cefecf7e57742db831616dfb7863279', '114.91.131.17', '2016-06-13', '11:37:16', '120340235', '/admin/order/traffic/d6f96325271947c6afd3746afe5a5d6d', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '84862b97b1f65c7e108086e90be70f1c90e8546c')
DEBUG - 2016-06-13 11:37:16 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 11:37:16 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='d6f96325271947c6afd3746afe5a5d6d' order by create_date_time desc
DEBUG - 2016-06-13 11:37:16 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 11:37:16 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='d6f96325271947c6afd3746afe5a5d6d'    order by t1.lno asc
        
DEBUG - 2016-06-13 11:37:16 --> Total execution time: 0.1030
DEBUG - 2016-06-13 11:37:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465789036
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 11:37:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 11:37:50 --> Security Class Initialized
DEBUG - 2016-06-13 11:37:50 --> CRSF cookie Set
DEBUG - 2016-06-13 11:37:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 11:37:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 11:37:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f2b6349b3e7d488a9f49f3c790339441', '114.91.131.17', '2016-06-13', '11:37:50', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '84862b97b1f65c7e108086e90be70f1c90e8546c')
DEBUG - 2016-06-13 11:37:50 --> 查询待发货订单
DEBUG - 2016-06-13 11:37:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-13 11:37:50 --> Total execution time: 0.0830
DEBUG - 2016-06-13 11:37:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465789070
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 11:37:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 11:37:53 --> Security Class Initialized
DEBUG - 2016-06-13 11:37:53 --> CRSF cookie Set
DEBUG - 2016-06-13 11:37:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 11:37:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 11:37:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('90ca76811e924e069a6f93046c427c2f', '114.91.131.17', '2016-06-13', '11:37:53', '120340235', '/admin/order/traffic/d6f96325271947c6afd3746afe5a5d6d', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '84862b97b1f65c7e108086e90be70f1c90e8546c')
DEBUG - 2016-06-13 11:37:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 11:37:53 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='d6f96325271947c6afd3746afe5a5d6d' order by create_date_time desc
DEBUG - 2016-06-13 11:37:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 11:37:53 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='d6f96325271947c6afd3746afe5a5d6d'    order by t1.lno asc
        
DEBUG - 2016-06-13 11:37:53 --> Total execution time: 0.1040
DEBUG - 2016-06-13 11:37:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465789073
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 11:37:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 11:37:57 --> Security Class Initialized
DEBUG - 2016-06-13 11:37:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 11:37:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 11:37:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c9c976aa97d7427c9469fb1891a0d603', '114.91.131.17', '2016-06-13', '11:37:57', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '84862b97b1f65c7e108086e90be70f1c90e8546c')
DEBUG - 2016-06-13 11:37:57 --> 审核订单
DEBUG - 2016-06-13 11:37:57 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = 'd6f96325271947c6afd3746afe5a5d6d'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-13 11:37:57 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'd6f96325271947c6afd3746afe5a5d6d', '3', '', '79db97420f0647b9850df80eddbdc305', '2016-06-13 11:37:57')
DEBUG - 2016-06-13 11:37:57 --> 该订单状态更新成功:3
DEBUG - 2016-06-13 11:37:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 11:37:57 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05055'
DEBUG - 2016-06-13 11:38:00 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-13 11:38:00 --> Total execution time: 3.1612
DEBUG - 2016-06-13 11:38:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465789080
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 11:38:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 11:38:01 --> Security Class Initialized
DEBUG - 2016-06-13 11:38:01 --> CRSF cookie Set
DEBUG - 2016-06-13 11:38:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 11:38:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 11:38:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f1e44a525cf4477c9dc2c090af76b401', '114.91.131.17', '2016-06-13', '11:38:01', '120340235', '/admin/order/traffic/d6f96325271947c6afd3746afe5a5d6d', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '84862b97b1f65c7e108086e90be70f1c90e8546c')
DEBUG - 2016-06-13 11:38:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 11:38:01 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='d6f96325271947c6afd3746afe5a5d6d' order by create_date_time desc
DEBUG - 2016-06-13 11:38:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6f96325271947c6afd3746afe5a5d6d'
DEBUG - 2016-06-13 11:38:01 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='d6f96325271947c6afd3746afe5a5d6d'    order by t1.lno asc
        
DEBUG - 2016-06-13 11:38:01 --> Total execution time: 0.1000
DEBUG - 2016-06-13 11:38:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465789081
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 11:38:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 11:38:01 --> Security Class Initialized
DEBUG - 2016-06-13 11:38:01 --> CRSF cookie Set
DEBUG - 2016-06-13 11:38:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 11:38:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 11:38:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2ab2f052f8114ce7925048dcc006d951', '114.91.131.17', '2016-06-13', '11:38:01', '120340235', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '84862b97b1f65c7e108086e90be70f1c90e8546c')
DEBUG - 2016-06-13 11:38:01 --> 查询需求订单
DEBUG - 2016-06-13 11:38:01 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-06-13 11:38:01 --> Total execution time: 0.1210
DEBUG - 2016-06-13 11:38:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465789081
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 11:39:34 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 11:39:34 --> Security Class Initialized
DEBUG - 2016-06-13 11:39:34 --> CRSF cookie Set
DEBUG - 2016-06-13 11:39:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 11:39:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 11:39:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3e97ddb3a383438398a4dbf738cf536d', '114.91.131.17', '2016-06-13', '11:39:34', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '84862b97b1f65c7e108086e90be70f1c90e8546c')
DEBUG - 2016-06-13 11:39:34 --> 查询订单
DEBUG - 2016-06-13 11:39:34 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-13 11:39:35 --> Total execution time: 0.1860
DEBUG - 2016-06-13 11:39:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465789175
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 13:24:08 --> UTF-8 Support Enabled
DEBUG - 2016-06-13 13:24:08 --> Security Class Initialized
DEBUG - 2016-06-13 13:24:08 --> CRSF cookie Set
DEBUG - 2016-06-13 13:24:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-13 13:24:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 13:24:08 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '84862b97b1f65c7e108086e90be70f1c90e8546c'
DEBUG - 2016-06-13 13:24:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1a754bc4421d47e5b6a3e15719f695a6', '114.91.131.17', '2016-06-13', '13:24:08', '120340235', '/admin/order/check/e2fe562068924354864325b5fbf32b9a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '16534278047c1c66d00a6fd380756f980da6697d')
DEBUG - 2016-06-13 13:24:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-13 13:24:08 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e2fe562068924354864325b5fbf32b9a' order by create_date_time desc
DEBUG - 2016-06-13 13:24:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-13 13:24:08 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e2fe562068924354864325b5fbf32b9a'    order by t1.lno asc
        
DEBUG - 2016-06-13 13:24:08 --> Total execution time: 0.1740
DEBUG - 2016-06-13 13:24:08 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('16534278047c1c66d00a6fd380756f980da6697d', '114.91.131.17', 1465795448, '__ci_last_regenerate|i:1465795448;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
