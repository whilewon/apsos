<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-07 11:00:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:00:53 --> CRSF cookie Set
DEBUG - 2016-06-07 11:00:53 --> Security Class Initialized
DEBUG - 2016-06-07 11:00:53 --> CRSF cookie Set
DEBUG - 2016-06-07 11:00:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:00:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:00:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('625bf2b9f754f3e3039ceeff30a3b8f1027b70c2', '114.91.131.17', 1465268453, '__ci_last_regenerate|i:1465268453;')
DEBUG - 2016-06-07 11:00:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:00:54 --> Security Class Initialized
DEBUG - 2016-06-07 11:00:54 --> CRSF cookie Set
DEBUG - 2016-06-07 11:00:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:00:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:00:54 --> Total execution time: 0.1248
DEBUG - 2016-06-07 11:00:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268454
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:01:01 --> Security Class Initialized
DEBUG - 2016-06-07 11:01:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:01:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:01 --> 检查用户密码，新密文:c3205771a65e210c6e255359159cfed86ffa2e557ee911ac40a1152a5aa3f359
DEBUG - 2016-06-07 11:01:01 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c3205771a65e210c6e255359159cfed86ffa2e557ee911ac40a1152a5aa3f359'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-07 11:01:01 --> 登录返回结果数：0
DEBUG - 2016-06-07 11:01:01 --> Total execution time: 0.0780
DEBUG - 2016-06-07 11:01:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268461
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:01:07 --> Security Class Initialized
DEBUG - 2016-06-07 11:01:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:01:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:07 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-07 11:01:07 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-07 11:01:07 --> 登录返回结果数：1
DEBUG - 2016-06-07 11:01:07 --> 成功登录
DEBUG - 2016-06-07 11:01:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268467, data = '__ci_last_regenerate|i:1465268453;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:01:07 --> Security Class Initialized
DEBUG - 2016-06-07 11:01:07 --> CRSF cookie Set
DEBUG - 2016-06-07 11:01:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:01:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('97ba2d6ef7984276985f0f036e824b1a', '114.91.131.17', '2016-06-07', '11:01:07', '120340235', '/admin/backhome', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2')
DEBUG - 2016-06-07 11:01:07 --> Total execution time: 0.0936
DEBUG - 2016-06-07 11:01:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268467
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:01:13 --> Security Class Initialized
DEBUG - 2016-06-07 11:01:13 --> CRSF cookie Set
DEBUG - 2016-06-07 11:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:01:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b1f27347d8534feab07ea7f898757e54', '114.91.131.17', '2016-06-07', '11:01:13', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2')
DEBUG - 2016-06-07 11:01:13 --> 查询待审核订单
DEBUG - 2016-06-07 11:01:13 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-07 11:01:13 --> Total execution time: 0.1248
DEBUG - 2016-06-07 11:01:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268473
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:01:24 --> Security Class Initialized
DEBUG - 2016-06-07 11:01:24 --> CRSF cookie Set
DEBUG - 2016-06-07 11:01:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:01:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7828b18fd76a4a1ba946b36885496924', '114.91.131.17', '2016-06-07', '11:01:24', '120340235', '/admin/order/check/fdea996d1f2943ceb798419d0bc8db18', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2')
DEBUG - 2016-06-07 11:01:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='fdea996d1f2943ceb798419d0bc8db18'
DEBUG - 2016-06-07 11:01:24 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='fdea996d1f2943ceb798419d0bc8db18' order by create_date_time desc
DEBUG - 2016-06-07 11:01:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='fdea996d1f2943ceb798419d0bc8db18'
DEBUG - 2016-06-07 11:01:24 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='fdea996d1f2943ceb798419d0bc8db18'    order by t1.lno asc
        
DEBUG - 2016-06-07 11:01:24 --> Total execution time: 0.1092
DEBUG - 2016-06-07 11:01:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268484
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:01:53 --> Security Class Initialized
DEBUG - 2016-06-07 11:01:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:01:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bea285665cca4c068e90601ce81f1f04', '114.91.131.17', '2016-06-07', '11:01:53', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2')
DEBUG - 2016-06-07 11:01:53 --> 审核订单
DEBUG - 2016-06-07 11:01:53 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'fdea996d1f2943ceb798419d0bc8db18'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-07 11:01:53 --> 过程调用语句：  execute USP_APSOS_outorder 'fdea996d1f2943ceb798419d0bc8db18'
DEBUG - 2016-06-07 11:01:55 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'fdea996d1f2943ceb798419d0bc8db18', '2', '', '4588fa2caf0c460aa6f9a8515e787aca', '2016-06-07 11:01:55')
DEBUG - 2016-06-07 11:01:55 --> 该订单状态更新成功:2
DEBUG - 2016-06-07 11:01:55 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='fdea996d1f2943ceb798419d0bc8db18'
DEBUG - 2016-06-07 11:01:55 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-06-07 11:01:58 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-07 11:01:58 --> Total execution time: 4.5084
DEBUG - 2016-06-07 11:01:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268518
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:01:58 --> Security Class Initialized
DEBUG - 2016-06-07 11:01:58 --> CRSF cookie Set
DEBUG - 2016-06-07 11:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:01:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:01:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d5bc92f608b1416f9b59eac4fb65033a', '114.91.131.17', '2016-06-07', '11:01:58', '120340235', '/admin/order/check/fdea996d1f2943ceb798419d0bc8db18', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2')
DEBUG - 2016-06-07 11:01:58 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='fdea996d1f2943ceb798419d0bc8db18'
DEBUG - 2016-06-07 11:01:58 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='fdea996d1f2943ceb798419d0bc8db18' order by create_date_time desc
DEBUG - 2016-06-07 11:01:58 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='fdea996d1f2943ceb798419d0bc8db18'
DEBUG - 2016-06-07 11:01:58 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='fdea996d1f2943ceb798419d0bc8db18'    order by t1.lno asc
        
DEBUG - 2016-06-07 11:01:58 --> Total execution time: 0.0780
DEBUG - 2016-06-07 11:01:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268518
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:02:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:02:04 --> Security Class Initialized
DEBUG - 2016-06-07 11:02:04 --> CRSF cookie Set
DEBUG - 2016-06-07 11:02:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:02:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:02:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('31e822e27adf4a7590e3b1a13bd2d2e8', '114.91.131.17', '2016-06-07', '11:02:04', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2')
DEBUG - 2016-06-07 11:02:04 --> 查询待审核订单
DEBUG - 2016-06-07 11:02:04 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-07 11:02:04 --> Total execution time: 0.0780
DEBUG - 2016-06-07 11:02:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268524
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:02:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:02:07 --> Security Class Initialized
DEBUG - 2016-06-07 11:02:07 --> CRSF cookie Set
DEBUG - 2016-06-07 11:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:02:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:02:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b7a951b9d3b24834bcf51c62b44f5dad', '114.91.131.17', '2016-06-07', '11:02:07', '120340235', '/admin/order/check/21fdf60f26cc458cb2452538da9cb2a1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2')
DEBUG - 2016-06-07 11:02:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-07 11:02:07 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='21fdf60f26cc458cb2452538da9cb2a1' order by create_date_time desc
DEBUG - 2016-06-07 11:02:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-07 11:02:07 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='21fdf60f26cc458cb2452538da9cb2a1'    order by t1.lno asc
        
DEBUG - 2016-06-07 11:02:07 --> Total execution time: 0.0780
DEBUG - 2016-06-07 11:02:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268527
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:02:12 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:02:12 --> Security Class Initialized
DEBUG - 2016-06-07 11:02:12 --> CRSF cookie Set
DEBUG - 2016-06-07 11:02:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:02:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:02:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8e2bb763611e4853bde0cc4e792b9263', '114.91.131.17', '2016-06-07', '11:02:12', '120340235', '/admin/order/check/21fdf60f26cc458cb2452538da9cb2a1?uuid=21fdf60f26cc458cb2452538da9cb2a1&consignee_name=%E6%9D%A8%E5%BF%A0%E5%9B%BD&telphone=13671903982&address=%E4%B8%8A%E6%B5%B7%E5%B8%82%E6%9B%B9%E5%AE%89%E8%B7%AF1926%E5%8F%B737%E5%B9%A2107%E5%AE%A4', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2')
DEBUG - 2016-06-07 11:02:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-07 11:02:12 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='21fdf60f26cc458cb2452538da9cb2a1' order by create_date_time desc
DEBUG - 2016-06-07 11:02:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-07 11:02:12 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='21fdf60f26cc458cb2452538da9cb2a1'    order by t1.lno asc
        
DEBUG - 2016-06-07 11:02:12 --> Total execution time: 0.1092
DEBUG - 2016-06-07 11:02:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268532
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:02:19 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:02:19 --> Security Class Initialized
DEBUG - 2016-06-07 11:02:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:02:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:02:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9190808e439a47878a56f6a0daa2cec4', '114.91.131.17', '2016-06-07', '11:02:19', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2')
DEBUG - 2016-06-07 11:02:19 --> 审核订单
DEBUG - 2016-06-07 11:02:19 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '21fdf60f26cc458cb2452538da9cb2a1'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-07 11:02:19 --> 过程调用语句：  execute USP_APSOS_outorder '21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-07 11:02:19 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '21fdf60f26cc458cb2452538da9cb2a1', '2', '', '40707efbd302465a8c7bef5a6d2bac75', '2016-06-07 11:02:19')
DEBUG - 2016-06-07 11:02:19 --> 该订单状态更新成功:2
DEBUG - 2016-06-07 11:02:19 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-07 11:02:19 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-06-07 11:02:20 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-07 11:02:20 --> Total execution time: 0.8424
DEBUG - 2016-06-07 11:02:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268540
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:02:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:02:20 --> Security Class Initialized
DEBUG - 2016-06-07 11:02:20 --> CRSF cookie Set
DEBUG - 2016-06-07 11:02:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:02:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:02:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e8f481fdde4b4fe28bf2356673b4d7f0', '114.91.131.17', '2016-06-07', '11:02:20', '120340235', '/admin/order/check/21fdf60f26cc458cb2452538da9cb2a1?uuid=21fdf60f26cc458cb2452538da9cb2a1&consignee_name=%E6%9D%A8%E5%BF%A0%E5%9B%BD&telphone=13671903982&address=%E4%B8%8A%E6%B5%B7%E5%B8%82%E6%9B%B9%E5%AE%89%E8%B7%AF1926%E5%8F%B737%E5%B9%A2107%E5%AE%A4', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2')
DEBUG - 2016-06-07 11:02:20 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-07 11:02:20 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='21fdf60f26cc458cb2452538da9cb2a1' order by create_date_time desc
DEBUG - 2016-06-07 11:02:20 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-07 11:02:20 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='21fdf60f26cc458cb2452538da9cb2a1'    order by t1.lno asc
        
DEBUG - 2016-06-07 11:02:20 --> Total execution time: 0.0936
DEBUG - 2016-06-07 11:02:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268540
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:04:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:04:22 --> Security Class Initialized
DEBUG - 2016-06-07 11:04:22 --> CRSF cookie Set
DEBUG - 2016-06-07 11:04:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:04:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:04:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6bf33e8108594e40aed3eda71f041e5e', '114.91.131.17', '2016-06-07', '11:04:23', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2')
DEBUG - 2016-06-07 11:04:23 --> 查询订单
DEBUG - 2016-06-07 11:04:23 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-07 11:04:23 --> Total execution time: 0.1092
DEBUG - 2016-06-07 11:04:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268663
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:04:36 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:04:36 --> Security Class Initialized
DEBUG - 2016-06-07 11:04:36 --> CRSF cookie Set
DEBUG - 2016-06-07 11:04:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:04:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:04:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('710eb70ceb2641b7ae0f8eae9ab76737', '114.91.131.17', '2016-06-07', '11:04:36', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2')
DEBUG - 2016-06-07 11:04:36 --> 查询待发货订单
DEBUG - 2016-06-07 11:04:36 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-07 11:04:36 --> Total execution time: 0.1092
DEBUG - 2016-06-07 11:04:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465268676
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:45:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:45:11 --> Security Class Initialized
DEBUG - 2016-06-07 11:45:11 --> CRSF cookie Set
DEBUG - 2016-06-07 11:45:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:45:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:45:11 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '625bf2b9f754f3e3039ceeff30a3b8f1027b70c2'
DEBUG - 2016-06-07 11:45:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('25db1c5215e141fc96fd2df08e55b3b0', '114.91.131.17', '2016-06-07', '11:45:11', '120340235', '/admin/order/traffic/6f9e040ffa07471d97a52f5f2abf26b3', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7bdce7832b25a0e249263a2bfb30d0368b24043e')
DEBUG - 2016-06-07 11:45:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='6f9e040ffa07471d97a52f5f2abf26b3'
DEBUG - 2016-06-07 11:45:11 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='6f9e040ffa07471d97a52f5f2abf26b3' order by create_date_time desc
DEBUG - 2016-06-07 11:45:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='6f9e040ffa07471d97a52f5f2abf26b3'
DEBUG - 2016-06-07 11:45:11 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='6f9e040ffa07471d97a52f5f2abf26b3'    order by t1.lno asc
        
DEBUG - 2016-06-07 11:45:11 --> Total execution time: 0.1404
DEBUG - 2016-06-07 11:45:11 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7bdce7832b25a0e249263a2bfb30d0368b24043e', '114.91.131.17', 1465271111, '__ci_last_regenerate|i:1465271111;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-07 11:45:32 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:45:32 --> Security Class Initialized
DEBUG - 2016-06-07 11:45:32 --> CRSF cookie Set
DEBUG - 2016-06-07 11:45:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:45:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:45:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1e2e1d73e2974feaaefdede06c298183', '114.91.131.17', '2016-06-07', '11:45:32', '120340235', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7bdce7832b25a0e249263a2bfb30d0368b24043e')
DEBUG - 2016-06-07 11:45:32 --> 查询需求订单
DEBUG - 2016-06-07 11:45:32 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-06-07 11:45:33 --> Total execution time: 0.4680
DEBUG - 2016-06-07 11:45:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465271133
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:45:41 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:45:41 --> Security Class Initialized
DEBUG - 2016-06-07 11:45:41 --> CRSF cookie Set
DEBUG - 2016-06-07 11:45:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:45:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:45:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('56137625f8bb42cb93bd6bde23fe1bda', '114.91.131.17', '2016-06-07', '11:45:41', '120340235', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7bdce7832b25a0e249263a2bfb30d0368b24043e')
DEBUG - 2016-06-07 11:45:41 --> 查询需求订单
DEBUG - 2016-06-07 11:45:41 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-06-07 11:45:41 --> Total execution time: 0.1100
DEBUG - 2016-06-07 11:45:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465271141
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:45:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:45:46 --> Security Class Initialized
DEBUG - 2016-06-07 11:45:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:45:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:45:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('38cd9ea3797140b38f6ed353c8a46c90', '114.91.131.17', '2016-06-07', '11:45:46', '120340235', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7bdce7832b25a0e249263a2bfb30d0368b24043e')
DEBUG - 2016-06-07 11:45:46 --> 查询需求订单
DEBUG - 2016-06-07 11:45:46 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-05-31 00:00:00' and create_date_time<'2016-06-07 23:59:59' 
ERROR - 2016-06-07 11:45:46 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-06-07 11:45:46 --> Query error: [Microsoft][ODBC SQL Server Driver][SQL Server]�ڹؼ��� 'and' �������﷨���� - Invalid query: select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-05-31 00:00:00' and create_date_time<'2016-06-07 23:59:59' 
ERROR - 2016-06-07 11:45:46 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Order_model.php 85
DEBUG - 2016-06-07 11:45:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465271146
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:45:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:45:58 --> Security Class Initialized
DEBUG - 2016-06-07 11:45:58 --> CRSF cookie Set
DEBUG - 2016-06-07 11:45:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:45:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:45:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ac827af616fd4e139f7798380d9894cf', '114.91.131.17', '2016-06-07', '11:45:59', '120340235', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7bdce7832b25a0e249263a2bfb30d0368b24043e')
DEBUG - 2016-06-07 11:45:59 --> 查询需求订单
DEBUG - 2016-06-07 11:45:59 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-06-07 11:45:59 --> Total execution time: 0.0780
DEBUG - 2016-06-07 11:45:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465271159
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:46:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:46:40 --> Security Class Initialized
DEBUG - 2016-06-07 11:46:40 --> CRSF cookie Set
DEBUG - 2016-06-07 11:46:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:46:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:46:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bbfabf35c75f4fa6945948f320b47fa7', '114.91.131.17', '2016-06-07', '11:46:40', '120340235', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7bdce7832b25a0e249263a2bfb30d0368b24043e')
DEBUG - 2016-06-07 11:46:40 --> 查询需求订单
DEBUG - 2016-06-07 11:46:40 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-06-07 11:46:40 --> Total execution time: 0.0936
DEBUG - 2016-06-07 11:46:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465271200
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:46:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:46:42 --> Security Class Initialized
DEBUG - 2016-06-07 11:46:42 --> CRSF cookie Set
DEBUG - 2016-06-07 11:46:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:46:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:46:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c504ea76ab2e4d2bab5529d2c75470ea', '114.91.131.17', '2016-06-07', '11:46:42', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7bdce7832b25a0e249263a2bfb30d0368b24043e')
DEBUG - 2016-06-07 11:46:42 --> 查询订单
DEBUG - 2016-06-07 11:46:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-07 11:46:42 --> Total execution time: 0.0936
DEBUG - 2016-06-07 11:46:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465271202
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:46:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:46:51 --> Security Class Initialized
DEBUG - 2016-06-07 11:46:51 --> CRSF cookie Set
DEBUG - 2016-06-07 11:46:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:46:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:46:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9ab1196657454c1e88731297d5736bc4', '114.91.131.17', '2016-06-07', '11:46:51', '120340235', '/admin/order/index/aab58df429c94699b895396d664d5f6c', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7bdce7832b25a0e249263a2bfb30d0368b24043e')
DEBUG - 2016-06-07 11:46:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-07 11:46:51 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aab58df429c94699b895396d664d5f6c' order by create_date_time desc
DEBUG - 2016-06-07 11:46:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-07 11:46:51 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-06-07 11:46:51 --> Total execution time: 0.1872
DEBUG - 2016-06-07 11:46:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465271211
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:47:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:47:00 --> Security Class Initialized
DEBUG - 2016-06-07 11:47:00 --> CRSF cookie Set
DEBUG - 2016-06-07 11:47:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:47:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:47:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fbc8bf2d2dd04142ad99ff3836ffe10c', '114.91.131.17', '2016-06-07', '11:47:00', '120340235', '/admin/order/true/aab58df429c94699b895396d664d5f6c', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7bdce7832b25a0e249263a2bfb30d0368b24043e')
DEBUG - 2016-06-07 11:47:00 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-07 11:47:00 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-07 11:47:00 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-06-07 11:47:00 --> Total execution time: 0.1248
DEBUG - 2016-06-07 11:47:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465271220
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:47:41 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:47:41 --> Security Class Initialized
DEBUG - 2016-06-07 11:47:41 --> CRSF cookie Set
DEBUG - 2016-06-07 11:47:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:47:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:47:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1f662494f7bd45b9bf32ac63c622dde2', '114.91.131.17', '2016-06-07', '11:47:41', '120340235', '/admin/order/true/aab58df429c94699b895396d664d5f6c', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7bdce7832b25a0e249263a2bfb30d0368b24043e')
DEBUG - 2016-06-07 11:47:41 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-07 11:47:41 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-07 11:47:41 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-06-07 11:47:41 --> Total execution time: 0.0936
DEBUG - 2016-06-07 11:47:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465271261
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:47:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 11:47:53 --> Security Class Initialized
DEBUG - 2016-06-07 11:47:53 --> CRSF cookie Set
DEBUG - 2016-06-07 11:47:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 11:47:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 11:47:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f14690ebaa1a413492f76bbfd8614e81', '114.91.131.17', '2016-06-07', '11:47:53', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7bdce7832b25a0e249263a2bfb30d0368b24043e')
DEBUG - 2016-06-07 11:47:53 --> 查询订单
DEBUG - 2016-06-07 11:47:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-07 11:47:53 --> Total execution time: 0.0780
DEBUG - 2016-06-07 11:47:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465271273
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 12:13:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 12:13:06 --> Security Class Initialized
DEBUG - 2016-06-07 12:13:06 --> CRSF cookie Set
DEBUG - 2016-06-07 12:13:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 12:13:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 12:13:06 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '7bdce7832b25a0e249263a2bfb30d0368b24043e'
DEBUG - 2016-06-07 12:13:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ce0c04cbdf154337af9a00c15d0a772f', '114.91.131.17', '2016-06-07', '12:13:06', '120340235', '/admin/order/check/21fdf60f26cc458cb2452538da9cb2a1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'cd8d761f049bb215853ca09696385de85860f360')
DEBUG - 2016-06-07 12:13:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-07 12:13:06 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='21fdf60f26cc458cb2452538da9cb2a1' order by create_date_time desc
DEBUG - 2016-06-07 12:13:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-07 12:13:06 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='21fdf60f26cc458cb2452538da9cb2a1'    order by t1.lno asc
        
DEBUG - 2016-06-07 12:13:06 --> Total execution time: 0.1092
DEBUG - 2016-06-07 12:13:06 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('cd8d761f049bb215853ca09696385de85860f360', '114.91.131.17', 1465272786, '__ci_last_regenerate|i:1465272786;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-07 12:21:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 12:21:57 --> Security Class Initialized
DEBUG - 2016-06-07 12:21:57 --> CRSF cookie Set
DEBUG - 2016-06-07 12:21:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 12:21:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:21:57 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:21:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ef9a03b5c3c2444da7e915615ba8d638', '114.91.131.17', '2016-06-07', '12:21:57', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0fd2f948d37e25698a464fdbfad0189cd89472d9')
DEBUG - 2016-06-07 12:21:57 --> 查询待发货订单
DEBUG - 2016-06-07 12:21:57 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-07 12:21:57 --> Total execution time: 0.1060
DEBUG - 2016-06-07 12:21:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0fd2f948d37e25698a464fdbfad0189cd89472d9', '114.91.131.17', 1465273317, '__ci_last_regenerate|i:1465273317;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-07 12:21:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 12:21:57 --> Security Class Initialized
DEBUG - 2016-06-07 12:21:57 --> CRSF cookie Set
DEBUG - 2016-06-07 12:21:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 12:21:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:21:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('cd8d761f049bb215853ca09696385de85860f360', '114.91.131.17', 1465273317, '__ci_last_regenerate|i:1465273317;')
DEBUG - 2016-06-07 12:21:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 12:21:57 --> Security Class Initialized
DEBUG - 2016-06-07 12:21:57 --> CRSF cookie Set
DEBUG - 2016-06-07 12:21:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 12:21:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:21:57 --> Total execution time: 0.1780
DEBUG - 2016-06-07 12:21:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465273317
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:21:59 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 12:21:59 --> Security Class Initialized
DEBUG - 2016-06-07 12:21:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 12:21:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:21:59 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-07 12:21:59 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-07 12:21:59 --> 登录返回结果数：1
DEBUG - 2016-06-07 12:21:59 --> 成功登录
DEBUG - 2016-06-07 12:21:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465273319, data = '__ci_last_regenerate|i:1465273317;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:21:59 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 12:21:59 --> Security Class Initialized
DEBUG - 2016-06-07 12:21:59 --> CRSF cookie Set
DEBUG - 2016-06-07 12:21:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 12:21:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:21:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('88642d14f6594b739774ae60fba0bf7e', '114.91.131.17', '2016-06-07', '12:21:59', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'cd8d761f049bb215853ca09696385de85860f360')
DEBUG - 2016-06-07 12:21:59 --> 查询待发货订单
DEBUG - 2016-06-07 12:21:59 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-07 12:21:59 --> Total execution time: 0.1230
DEBUG - 2016-06-07 12:21:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465273319
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:22:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 12:22:02 --> Security Class Initialized
DEBUG - 2016-06-07 12:22:02 --> CRSF cookie Set
DEBUG - 2016-06-07 12:22:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 12:22:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:22:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('be659bebf7c8456fb52463cf7129131b', '114.91.131.17', '2016-06-07', '12:22:02', '120340235', '/admin/order/traffic/6f9e040ffa07471d97a52f5f2abf26b3', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'cd8d761f049bb215853ca09696385de85860f360')
DEBUG - 2016-06-07 12:22:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='6f9e040ffa07471d97a52f5f2abf26b3'
DEBUG - 2016-06-07 12:22:02 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='6f9e040ffa07471d97a52f5f2abf26b3' order by create_date_time desc
DEBUG - 2016-06-07 12:22:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='6f9e040ffa07471d97a52f5f2abf26b3'
DEBUG - 2016-06-07 12:22:02 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='6f9e040ffa07471d97a52f5f2abf26b3'    order by t1.lno asc
        
DEBUG - 2016-06-07 12:22:02 --> Total execution time: 0.1110
DEBUG - 2016-06-07 12:22:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465273322
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:22:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 12:22:25 --> Security Class Initialized
DEBUG - 2016-06-07 12:22:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 12:22:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:22:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5b0ddfa130684ae18b30ce90bb60b22d', '114.91.131.17', '2016-06-07', '12:22:26', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'cd8d761f049bb215853ca09696385de85860f360')
DEBUG - 2016-06-07 12:22:26 --> 审核订单
DEBUG - 2016-06-07 12:22:26 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = '6f9e040ffa07471d97a52f5f2abf26b3'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-07 12:22:26 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '6f9e040ffa07471d97a52f5f2abf26b3', '3', '', '26cbf12b11c24586b8d8115d1e29ce66', '2016-06-07 12:22:26')
DEBUG - 2016-06-07 12:22:26 --> 该订单状态更新成功:3
DEBUG - 2016-06-07 12:22:26 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='6f9e040ffa07471d97a52f5f2abf26b3'
DEBUG - 2016-06-07 12:22:26 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05038'
DEBUG - 2016-06-07 12:22:28 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-07 12:22:28 --> Total execution time: 2.9112
DEBUG - 2016-06-07 12:22:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465273348
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:22:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 12:22:28 --> Security Class Initialized
DEBUG - 2016-06-07 12:22:28 --> CRSF cookie Set
DEBUG - 2016-06-07 12:22:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 12:22:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 12:22:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c45918c26a9d410e924e8695a407a559', '114.91.131.17', '2016-06-07', '12:22:28', '120340235', '/admin/order/traffic/6f9e040ffa07471d97a52f5f2abf26b3', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'cd8d761f049bb215853ca09696385de85860f360')
DEBUG - 2016-06-07 12:22:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='6f9e040ffa07471d97a52f5f2abf26b3'
DEBUG - 2016-06-07 12:22:28 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='6f9e040ffa07471d97a52f5f2abf26b3' order by create_date_time desc
DEBUG - 2016-06-07 12:22:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='6f9e040ffa07471d97a52f5f2abf26b3'
DEBUG - 2016-06-07 12:22:29 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='6f9e040ffa07471d97a52f5f2abf26b3'    order by t1.lno asc
        
DEBUG - 2016-06-07 12:22:29 --> Total execution time: 0.1070
DEBUG - 2016-06-07 12:22:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465273349
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 13:06:41 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 13:06:41 --> Security Class Initialized
DEBUG - 2016-06-07 13:06:41 --> CRSF cookie Set
DEBUG - 2016-06-07 13:06:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 13:06:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 13:06:41 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'cd8d761f049bb215853ca09696385de85860f360'
DEBUG - 2016-06-07 13:06:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6c51c3c997ce41fa999b6cc67c8fb793', '114.91.131.17', '2016-06-07', '13:06:41', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65')
DEBUG - 2016-06-07 13:06:41 --> 查询待审核订单
DEBUG - 2016-06-07 13:06:41 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-07 13:06:41 --> Total execution time: 0.1990
DEBUG - 2016-06-07 13:06:41 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65', '114.91.131.17', 1465276001, '__ci_last_regenerate|i:1465276001;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-07 13:06:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 13:06:43 --> Security Class Initialized
DEBUG - 2016-06-07 13:06:43 --> CRSF cookie Set
DEBUG - 2016-06-07 13:06:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 13:06:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65'
DEBUG - 2016-06-07 13:06:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c41a63409bfd475abf4e770aa461f43b', '114.91.131.17', '2016-06-07', '13:06:43', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65')
DEBUG - 2016-06-07 13:06:43 --> 查询待审核订单
DEBUG - 2016-06-07 13:06:43 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-07 13:06:43 --> Total execution time: 0.0880
DEBUG - 2016-06-07 13:06:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465276003
WHERE id = 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65'
DEBUG - 2016-06-07 13:06:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 13:06:43 --> Security Class Initialized
DEBUG - 2016-06-07 13:06:43 --> CRSF cookie Set
DEBUG - 2016-06-07 13:06:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 13:06:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65'
DEBUG - 2016-06-07 13:06:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3e0e2bf5fcba4a769d7da3de40160e70', '114.91.131.17', '2016-06-07', '13:06:43', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65')
DEBUG - 2016-06-07 13:06:43 --> 查询待审核订单
DEBUG - 2016-06-07 13:06:43 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-07 13:06:43 --> Total execution time: 0.1350
DEBUG - 2016-06-07 13:06:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465276003
WHERE id = 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65'
DEBUG - 2016-06-07 13:06:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 13:06:58 --> Security Class Initialized
DEBUG - 2016-06-07 13:06:58 --> CRSF cookie Set
DEBUG - 2016-06-07 13:06:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 13:06:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65'
DEBUG - 2016-06-07 13:06:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('047a2240e19241cc9b65f1296e5db021', '114.91.131.17', '2016-06-07', '13:06:58', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65')
DEBUG - 2016-06-07 13:06:58 --> 查询订单
DEBUG - 2016-06-07 13:06:58 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-07 13:06:58 --> Total execution time: 0.1820
DEBUG - 2016-06-07 13:06:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465276018
WHERE id = 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65'
DEBUG - 2016-06-07 13:07:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 13:07:00 --> Security Class Initialized
DEBUG - 2016-06-07 13:07:00 --> CRSF cookie Set
DEBUG - 2016-06-07 13:07:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 13:07:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65'
DEBUG - 2016-06-07 13:07:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0d6d3d35f8cc43ad82792a7607745e2f', '114.91.131.17', '2016-06-07', '13:07:00', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65')
DEBUG - 2016-06-07 13:07:00 --> 查询订单
DEBUG - 2016-06-07 13:07:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-07 13:07:00 --> Total execution time: 0.1700
DEBUG - 2016-06-07 13:07:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465276020
WHERE id = 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65'
DEBUG - 2016-06-07 13:07:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 13:07:02 --> Security Class Initialized
DEBUG - 2016-06-07 13:07:02 --> CRSF cookie Set
DEBUG - 2016-06-07 13:07:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 13:07:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65'
DEBUG - 2016-06-07 13:07:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7abc30c47ec84c0e8f71d638c5b86bb2', '114.91.131.17', '2016-06-07', '13:07:02', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65')
DEBUG - 2016-06-07 13:07:02 --> 查询订单
DEBUG - 2016-06-07 13:07:02 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-07 13:07:02 --> Total execution time: 0.1510
DEBUG - 2016-06-07 13:07:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465276022
WHERE id = 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65'
DEBUG - 2016-06-07 13:07:03 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 13:07:03 --> Security Class Initialized
DEBUG - 2016-06-07 13:07:03 --> CRSF cookie Set
DEBUG - 2016-06-07 13:07:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 13:07:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65'
DEBUG - 2016-06-07 13:07:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('462da817a3344356bb3e05628c537234', '114.91.131.17', '2016-06-07', '13:07:03', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65')
DEBUG - 2016-06-07 13:07:03 --> 查询订单
DEBUG - 2016-06-07 13:07:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-07 13:07:03 --> Total execution time: 0.1150
DEBUG - 2016-06-07 13:07:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465276023
WHERE id = 'ab433a0cd7d1d52ed1a9a14b75b896d3aff4ec65'
DEBUG - 2016-06-07 15:44:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 15:44:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 15:44:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 15:44:25 --> No URI present. Default controller set.
DEBUG - 2016-06-07 15:44:25 --> No URI present. Default controller set.
DEBUG - 2016-06-07 15:44:25 --> No URI present. Default controller set.
DEBUG - 2016-06-07 15:44:25 --> CRSF cookie Set
DEBUG - 2016-06-07 15:44:25 --> CRSF cookie Set
DEBUG - 2016-06-07 15:44:25 --> Security Class Initialized
DEBUG - 2016-06-07 15:44:25 --> Security Class Initialized
DEBUG - 2016-06-07 15:44:25 --> CRSF cookie Set
DEBUG - 2016-06-07 15:44:25 --> Security Class Initialized
DEBUG - 2016-06-07 15:44:25 --> CRSF cookie Set
DEBUG - 2016-06-07 15:44:25 --> CRSF cookie Set
DEBUG - 2016-06-07 15:44:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 15:44:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 15:44:25 --> CRSF cookie Set
DEBUG - 2016-06-07 15:44:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 15:44:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 15:44:26 --> No URI present. Default controller set.
DEBUG - 2016-06-07 15:44:26 --> CRSF cookie Set
DEBUG - 2016-06-07 15:44:26 --> Security Class Initialized
DEBUG - 2016-06-07 15:44:26 --> CRSF cookie Set
DEBUG - 2016-06-07 15:44:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 15:44:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cead0cd66f9d06bbab89a88d83ac0910b3a58cfe'
DEBUG - 2016-06-07 15:44:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5c6d167cd4a06ace90e9ed95d87d26e45cfa2936'
DEBUG - 2016-06-07 15:44:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3b0085eaca280a5cf0daf9e4d174d27e034e6f8b'
DEBUG - 2016-06-07 15:44:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e27ca7bc3cc254009cefb1276ff22897a2c80b7'
DEBUG - 2016-06-07 15:44:26 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3e27ca7bc3cc254009cefb1276ff22897a2c80b7', '101.226.33.208', 1465285466, '__ci_last_regenerate|i:1465285466;')
DEBUG - 2016-06-07 15:44:26 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3b0085eaca280a5cf0daf9e4d174d27e034e6f8b', '119.147.207.158', 1465285466, '__ci_last_regenerate|i:1465285466;')
DEBUG - 2016-06-07 15:44:26 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5c6d167cd4a06ace90e9ed95d87d26e45cfa2936', '101.226.227.95', 1465285466, '__ci_last_regenerate|i:1465285466;')
DEBUG - 2016-06-07 15:44:26 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('cead0cd66f9d06bbab89a88d83ac0910b3a58cfe', '183.232.120.53', 1465285466, '__ci_last_regenerate|i:1465285466;')
DEBUG - 2016-06-07 15:44:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-07 15:44:27 --> CRSF cookie Set
DEBUG - 2016-06-07 15:44:27 --> Security Class Initialized
DEBUG - 2016-06-07 15:44:27 --> CRSF cookie Set
DEBUG - 2016-06-07 15:44:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-07 15:44:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9f65f50ed7b3aefc267273a82187a8e49f7c978b'
DEBUG - 2016-06-07 15:44:27 --> Total execution time: 0.1910
DEBUG - 2016-06-07 15:44:27 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9f65f50ed7b3aefc267273a82187a8e49f7c978b', '101.226.227.95', 1465285467, '__ci_last_regenerate|i:1465285467;')
