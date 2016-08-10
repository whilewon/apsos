<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-30 10:50:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:50:57 --> CRSF cookie Set
DEBUG - 2016-07-30 10:50:57 --> Security Class Initialized
DEBUG - 2016-07-30 10:50:57 --> CRSF cookie Set
DEBUG - 2016-07-30 10:50:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:50:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:50:58 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a08450267b6d13a3dd7f9ec698e5f1bb54aba218', '114.91.137.232', 1469847058, '__ci_last_regenerate|i:1469847057;')
DEBUG - 2016-07-30 10:50:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:50:58 --> Security Class Initialized
DEBUG - 2016-07-30 10:50:58 --> CRSF cookie Set
DEBUG - 2016-07-30 10:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:50:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:50:58 --> Total execution time: 0.1248
DEBUG - 2016-07-30 10:50:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847058
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:51:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:51:18 --> Security Class Initialized
DEBUG - 2016-07-30 10:51:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:51:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:51:18 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-30 10:51:18 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-30 10:51:19 --> 登录返回结果数：1
DEBUG - 2016-07-30 10:51:19 --> 成功登录
DEBUG - 2016-07-30 10:51:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847079, data = '__ci_last_regenerate|i:1469847057;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:51:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:51:19 --> Security Class Initialized
DEBUG - 2016-07-30 10:51:19 --> CRSF cookie Set
DEBUG - 2016-07-30 10:51:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:51:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:51:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3689f44d3f3548789e8367c3411c69a5', '114.91.137.232', '2016-07-30', '10:51:19', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:51:19 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-30 10:51:19 --> Total execution time: 0.2964
DEBUG - 2016-07-30 10:51:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847079
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:51:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:51:23 --> Security Class Initialized
DEBUG - 2016-07-30 10:51:23 --> CRSF cookie Set
DEBUG - 2016-07-30 10:51:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:51:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:51:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7e52044e7cb843b9953529b4a8ffa364', '114.91.137.232', '2016-07-30', '10:51:23', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:51:23 --> 查询待审核订单
DEBUG - 2016-07-30 10:51:23 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-30 10:51:23 --> Total execution time: 0.1872
DEBUG - 2016-07-30 10:51:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847083
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:52:08 --> Security Class Initialized
DEBUG - 2016-07-30 10:52:08 --> CRSF cookie Set
DEBUG - 2016-07-30 10:52:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:52:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f62b776824fa4996a210b202aad5ff4a', '114.91.137.232', '2016-07-30', '10:52:08', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:52:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:52:08 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-30 10:52:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:52:08 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-30 10:52:08 --> Total execution time: 0.3744
DEBUG - 2016-07-30 10:52:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847128
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:52:37 --> Security Class Initialized
DEBUG - 2016-07-30 10:52:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:52:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('66bda852b49741d6ac94fc7f62be4bce', '114.91.137.232', '2016-07-30', '10:52:37', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:52:37 --> 审核订单
DEBUG - 2016-07-30 10:52:37 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '219f5787748b43f98ecbcf930a5fb3f2'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 10:52:37 --> 过程调用语句：  execute USP_APSOS_outorder '219f5787748b43f98ecbcf930a5fb3f2'
ERROR - 2016-07-30 10:52:38 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-30 10:52:38 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-30 10:52:38 --> Total execution time: 1.0608
DEBUG - 2016-07-30 10:52:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847158
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:52:38 --> Security Class Initialized
DEBUG - 2016-07-30 10:52:38 --> CRSF cookie Set
DEBUG - 2016-07-30 10:52:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:52:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0277db43ad7945858be3dfbcfaf982ad', '114.91.137.232', '2016-07-30', '10:52:38', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:52:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:52:38 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-30 10:52:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:52:39 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-30 10:52:39 --> Total execution time: 0.1092
DEBUG - 2016-07-30 10:52:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847159
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:52:45 --> Security Class Initialized
DEBUG - 2016-07-30 10:52:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:52:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0178d1a4c8a1412ba38b27a1ed1cb4e2', '114.91.137.232', '2016-07-30', '10:52:45', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:52:45 --> 审核订单
DEBUG - 2016-07-30 10:52:45 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '219f5787748b43f98ecbcf930a5fb3f2'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 10:52:45 --> 过程调用语句：  execute USP_APSOS_outorder '219f5787748b43f98ecbcf930a5fb3f2'
ERROR - 2016-07-30 10:52:45 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-30 10:52:45 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-30 10:52:45 --> Total execution time: 0.0936
DEBUG - 2016-07-30 10:52:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847165
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:52:46 --> Security Class Initialized
DEBUG - 2016-07-30 10:52:46 --> CRSF cookie Set
DEBUG - 2016-07-30 10:52:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:52:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2d9ff724d68d43d6b5ceb559fe72efcf', '114.91.137.232', '2016-07-30', '10:52:46', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:52:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:52:46 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-30 10:52:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:52:46 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-30 10:52:46 --> Total execution time: 0.0936
DEBUG - 2016-07-30 10:52:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847166
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:52:51 --> Security Class Initialized
DEBUG - 2016-07-30 10:52:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:52:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5cf4bf498ace43bf8ad222a228345eab', '114.91.137.232', '2016-07-30', '10:52:51', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:52:51 --> 审核订单
DEBUG - 2016-07-30 10:52:51 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '219f5787748b43f98ecbcf930a5fb3f2'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 10:52:51 --> 过程调用语句：  execute USP_APSOS_outorder '219f5787748b43f98ecbcf930a5fb3f2'
ERROR - 2016-07-30 10:52:51 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-30 10:52:51 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-30 10:52:51 --> Total execution time: 0.0936
DEBUG - 2016-07-30 10:52:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847171
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:52:51 --> Security Class Initialized
DEBUG - 2016-07-30 10:52:51 --> CRSF cookie Set
DEBUG - 2016-07-30 10:52:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:52:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:52:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9a07e922571749f3ac5586e901e251c5', '114.91.137.232', '2016-07-30', '10:52:51', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:52:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:52:51 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-30 10:52:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:52:51 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-30 10:52:51 --> Total execution time: 0.0936
DEBUG - 2016-07-30 10:52:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847171
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:01 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9d06df8f954a469f8a2c51f82da2c931', '114.91.137.232', '2016-07-30', '10:53:01', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:53:01 --> 审核订单
DEBUG - 2016-07-30 10:53:01 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '219f5787748b43f98ecbcf930a5fb3f2'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 10:53:01 --> 过程调用语句：  execute USP_APSOS_outorder '219f5787748b43f98ecbcf930a5fb3f2'
ERROR - 2016-07-30 10:53:01 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-30 10:53:01 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-30 10:53:01 --> Total execution time: 0.1560
DEBUG - 2016-07-30 10:53:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847181
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:01 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:01 --> CRSF cookie Set
DEBUG - 2016-07-30 10:53:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('747cc764b1984937b2db27b6d70c2ac5', '114.91.137.232', '2016-07-30', '10:53:01', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:53:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:53:01 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-30 10:53:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:53:01 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-30 10:53:01 --> Total execution time: 0.0936
DEBUG - 2016-07-30 10:53:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847181
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:05 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6d49908f6b9e4b8fb8e8ceca6247579f', '114.91.137.232', '2016-07-30', '10:53:05', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:53:05 --> 审核订单
DEBUG - 2016-07-30 10:53:05 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '219f5787748b43f98ecbcf930a5fb3f2'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 10:53:05 --> 过程调用语句：  execute USP_APSOS_outorder '219f5787748b43f98ecbcf930a5fb3f2'
ERROR - 2016-07-30 10:53:05 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-30 10:53:05 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-30 10:53:05 --> Total execution time: 0.1092
DEBUG - 2016-07-30 10:53:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847185
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:05 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:05 --> CRSF cookie Set
DEBUG - 2016-07-30 10:53:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('860854d00d1244c19de746908f6ac5f3', '114.91.137.232', '2016-07-30', '10:53:05', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:53:05 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:53:05 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-30 10:53:05 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:53:05 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-30 10:53:05 --> Total execution time: 0.0936
DEBUG - 2016-07-30 10:53:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847185
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:09 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1b5da475abc74519b15532f90442e96f', '114.91.137.232', '2016-07-30', '10:53:09', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:53:09 --> 审核订单
DEBUG - 2016-07-30 10:53:09 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '219f5787748b43f98ecbcf930a5fb3f2'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 10:53:09 --> 过程调用语句：  execute USP_APSOS_outorder '219f5787748b43f98ecbcf930a5fb3f2'
ERROR - 2016-07-30 10:53:09 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-30 10:53:09 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-30 10:53:09 --> Total execution time: 0.1092
DEBUG - 2016-07-30 10:53:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847189
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:09 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:09 --> CRSF cookie Set
DEBUG - 2016-07-30 10:53:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('aa5272d7d7bc457ab9606f95f2097af3', '114.91.137.232', '2016-07-30', '10:53:09', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:53:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:53:09 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-30 10:53:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:53:09 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-30 10:53:09 --> Total execution time: 0.0936
DEBUG - 2016-07-30 10:53:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847189
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:12 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8a6e57f08e694560a4bb25b2d24c31c3', '114.91.137.232', '2016-07-30', '10:53:12', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:53:12 --> 审核订单
DEBUG - 2016-07-30 10:53:12 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '219f5787748b43f98ecbcf930a5fb3f2'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 10:53:12 --> 过程调用语句：  execute USP_APSOS_outorder '219f5787748b43f98ecbcf930a5fb3f2'
ERROR - 2016-07-30 10:53:12 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-30 10:53:12 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-30 10:53:12 --> Total execution time: 0.1092
DEBUG - 2016-07-30 10:53:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847192
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:12 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:12 --> CRSF cookie Set
DEBUG - 2016-07-30 10:53:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dea7ff2486f24b1294c862a7c1a5555b', '114.91.137.232', '2016-07-30', '10:53:12', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:53:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:53:12 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-30 10:53:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:53:12 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-30 10:53:12 --> Total execution time: 0.1092
DEBUG - 2016-07-30 10:53:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847192
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:18 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4194e28d1f4c44f78de7a895d6a28317', '114.91.137.232', '2016-07-30', '10:53:18', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:53:18 --> 审核订单
DEBUG - 2016-07-30 10:53:18 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '219f5787748b43f98ecbcf930a5fb3f2'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 10:53:18 --> 过程调用语句：  execute USP_APSOS_outorder '219f5787748b43f98ecbcf930a5fb3f2'
ERROR - 2016-07-30 10:53:18 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-30 10:53:18 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-30 10:53:18 --> Total execution time: 0.0936
DEBUG - 2016-07-30 10:53:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847198
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:18 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:18 --> CRSF cookie Set
DEBUG - 2016-07-30 10:53:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('66adea2562fa4e43a75037e5e94683de', '114.91.137.232', '2016-07-30', '10:53:18', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:53:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:53:18 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-30 10:53:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:53:18 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-30 10:53:18 --> Total execution time: 0.0936
DEBUG - 2016-07-30 10:53:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847198
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:21 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b2112d01e06c471297067cb1971de34a', '114.91.137.232', '2016-07-30', '10:53:21', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:53:21 --> 审核订单
DEBUG - 2016-07-30 10:53:21 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '219f5787748b43f98ecbcf930a5fb3f2'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 10:53:21 --> 过程调用语句：  execute USP_APSOS_outorder '219f5787748b43f98ecbcf930a5fb3f2'
ERROR - 2016-07-30 10:53:21 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-30 10:53:21 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-30 10:53:21 --> Total execution time: 0.0936
DEBUG - 2016-07-30 10:53:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847201
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:21 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:21 --> CRSF cookie Set
DEBUG - 2016-07-30 10:53:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ddb6d32c881d449ba3feead44a21aefa', '114.91.137.232', '2016-07-30', '10:53:21', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:53:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:53:21 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-30 10:53:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-30 10:53:21 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-30 10:53:21 --> Total execution time: 0.0936
DEBUG - 2016-07-30 10:53:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847201
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:27 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:27 --> CRSF cookie Set
DEBUG - 2016-07-30 10:53:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('075844341e4748dcb82b25c63543406a', '114.91.137.232', '2016-07-30', '10:53:27', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218')
DEBUG - 2016-07-30 10:53:27 --> 查询待审核订单
DEBUG - 2016-07-30 10:53:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-30 10:53:27 --> Total execution time: 0.0780
DEBUG - 2016-07-30 10:53:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847207
WHERE id = 'a08450267b6d13a3dd7f9ec698e5f1bb54aba218'
DEBUG - 2016-07-30 10:53:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:58 --> CRSF cookie Set
DEBUG - 2016-07-30 10:53:58 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:58 --> CRSF cookie Set
DEBUG - 2016-07-30 10:53:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'edfd6b7308564b42f792e7c908d91408e9697215'
DEBUG - 2016-07-30 10:53:58 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('edfd6b7308564b42f792e7c908d91408e9697215', '101.226.33.216', 1469847238, '__ci_last_regenerate|i:1469847238;')
DEBUG - 2016-07-30 10:53:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:53:58 --> Security Class Initialized
DEBUG - 2016-07-30 10:53:58 --> CRSF cookie Set
DEBUG - 2016-07-30 10:53:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:53:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'edfd6b7308564b42f792e7c908d91408e9697215'
DEBUG - 2016-07-30 10:53:58 --> Total execution time: 0.1248
DEBUG - 2016-07-30 10:53:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847238
WHERE id = 'edfd6b7308564b42f792e7c908d91408e9697215'
DEBUG - 2016-07-30 10:55:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:55:08 --> CRSF cookie Set
DEBUG - 2016-07-30 10:55:08 --> Security Class Initialized
DEBUG - 2016-07-30 10:55:08 --> CRSF cookie Set
DEBUG - 2016-07-30 10:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:55:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:55:08 --> CRSF cookie Set
DEBUG - 2016-07-30 10:55:08 --> Security Class Initialized
DEBUG - 2016-07-30 10:55:08 --> CRSF cookie Set
DEBUG - 2016-07-30 10:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:55:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e202c0f2972af3a478d0cb1e3f141a37ad6b908'
DEBUG - 2016-07-30 10:55:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c5c15911e38eaf75913d0337aff6b7bf685675a'
DEBUG - 2016-07-30 10:55:08 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2e202c0f2972af3a478d0cb1e3f141a37ad6b908', '101.226.51.227', 1469847308, '__ci_last_regenerate|i:1469847308;')
DEBUG - 2016-07-30 10:55:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:55:08 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7c5c15911e38eaf75913d0337aff6b7bf685675a', '140.207.124.102', 1469847308, '__ci_last_regenerate|i:1469847308;')
DEBUG - 2016-07-30 10:55:08 --> CRSF cookie Set
DEBUG - 2016-07-30 10:55:08 --> Security Class Initialized
DEBUG - 2016-07-30 10:55:08 --> CRSF cookie Set
DEBUG - 2016-07-30 10:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:55:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bb304e0f9893c834f1e9ea8a6dcfe13184d08377'
DEBUG - 2016-07-30 10:55:08 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('bb304e0f9893c834f1e9ea8a6dcfe13184d08377', '101.226.102.97', 1469847308, '__ci_last_regenerate|i:1469847308;')
DEBUG - 2016-07-30 10:55:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:55:08 --> Security Class Initialized
DEBUG - 2016-07-30 10:55:08 --> CRSF cookie Set
DEBUG - 2016-07-30 10:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:55:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bb304e0f9893c834f1e9ea8a6dcfe13184d08377'
DEBUG - 2016-07-30 10:55:08 --> Total execution time: 0.0624
DEBUG - 2016-07-30 10:55:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847308
WHERE id = 'bb304e0f9893c834f1e9ea8a6dcfe13184d08377'
DEBUG - 2016-07-30 10:55:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:55:08 --> Security Class Initialized
DEBUG - 2016-07-30 10:55:08 --> CRSF cookie Set
DEBUG - 2016-07-30 10:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:55:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 10:55:08 --> Security Class Initialized
DEBUG - 2016-07-30 10:55:08 --> CRSF cookie Set
DEBUG - 2016-07-30 10:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 10:55:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c5c15911e38eaf75913d0337aff6b7bf685675a'
DEBUG - 2016-07-30 10:55:08 --> Total execution time: 0.0780
DEBUG - 2016-07-30 10:55:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847308
WHERE id = '7c5c15911e38eaf75913d0337aff6b7bf685675a'
DEBUG - 2016-07-30 10:55:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e202c0f2972af3a478d0cb1e3f141a37ad6b908'
DEBUG - 2016-07-30 10:55:08 --> Total execution time: 0.0624
DEBUG - 2016-07-30 10:55:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469847308
WHERE id = '2e202c0f2972af3a478d0cb1e3f141a37ad6b908'
DEBUG - 2016-07-30 16:42:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 16:42:33 --> No URI present. Default controller set.
DEBUG - 2016-07-30 16:42:33 --> CRSF cookie Set
DEBUG - 2016-07-30 16:42:33 --> Security Class Initialized
DEBUG - 2016-07-30 16:42:33 --> CRSF cookie Set
DEBUG - 2016-07-30 16:42:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-30 16:42:33 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:33 --> Unable to connect to the database
ERROR - 2016-07-30 16:42:33 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:33 --> Unable to connect to the database
ERROR - 2016-07-30 16:42:33 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:33 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:33 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
ERROR - 2016-07-30 16:42:33 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-30 16:42:33 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:33 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:33 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a45bc1fe8d0714e39b15cb2809a3d75dfb545454', '192.168.9.137', 1469868153, '__ci_last_regenerate|i:1469868153;')
ERROR - 2016-07-30 16:42:33 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:42:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 16:42:34 --> Security Class Initialized
DEBUG - 2016-07-30 16:42:34 --> CRSF cookie Set
DEBUG - 2016-07-30 16:42:34 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-30 16:42:34 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:34 --> Unable to connect to the database
ERROR - 2016-07-30 16:42:34 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:34 --> Unable to connect to the database
ERROR - 2016-07-30 16:42:34 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:34 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:34 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
ERROR - 2016-07-30 16:42:34 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:42:34 --> Total execution time: 0.3125
ERROR - 2016-07-30 16:42:34 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:34 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:34 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a45bc1fe8d0714e39b15cb2809a3d75dfb545454', '192.168.9.137', 1469868154, '__ci_last_regenerate|i:1469868154;')
ERROR - 2016-07-30 16:42:34 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:42:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 16:42:43 --> Security Class Initialized
DEBUG - 2016-07-30 16:42:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-30 16:42:43 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:43 --> Unable to connect to the database
ERROR - 2016-07-30 16:42:43 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:43 --> Unable to connect to the database
ERROR - 2016-07-30 16:42:43 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:43 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:43 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
ERROR - 2016-07-30 16:42:43 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:42:43 --> 检查用户密码，新密文:6b1c6efe7e9820f0725f5437a42a8501d8546421ceb16eef07a33765bab3328f
ERROR - 2016-07-30 16:42:43 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:43 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:43 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '6b1c6efe7e9820f0725f5437a42a8501d8546421ceb16eef07a33765bab3328f'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
ERROR - 2016-07-30 16:42:43 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-30 16:42:43 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:42:43 --> 登录返回结果数：
ERROR - 2016-07-30 16:42:43 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:42:43 --> Total execution time: 0.1250
ERROR - 2016-07-30 16:42:43 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:43 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:43 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a45bc1fe8d0714e39b15cb2809a3d75dfb545454', '192.168.9.137', 1469868163, '__ci_last_regenerate|i:1469868163;')
ERROR - 2016-07-30 16:42:43 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:42:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 16:42:47 --> Security Class Initialized
DEBUG - 2016-07-30 16:42:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-30 16:42:47 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:47 --> Unable to connect to the database
ERROR - 2016-07-30 16:42:47 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:47 --> Unable to connect to the database
ERROR - 2016-07-30 16:42:47 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:48 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:48 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
ERROR - 2016-07-30 16:42:48 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:42:48 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
ERROR - 2016-07-30 16:42:48 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:48 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:48 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
ERROR - 2016-07-30 16:42:48 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-30 16:42:48 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:42:48 --> 登录返回结果数：
ERROR - 2016-07-30 16:42:48 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:42:48 --> Total execution time: 0.1094
ERROR - 2016-07-30 16:42:48 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:48 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:48 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a45bc1fe8d0714e39b15cb2809a3d75dfb545454', '192.168.9.137', 1469868168, '__ci_last_regenerate|i:1469868168;')
ERROR - 2016-07-30 16:42:48 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:42:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 16:42:51 --> Security Class Initialized
DEBUG - 2016-07-30 16:42:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-30 16:42:51 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:51 --> Unable to connect to the database
ERROR - 2016-07-30 16:42:51 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:51 --> Unable to connect to the database
ERROR - 2016-07-30 16:42:51 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:51 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:51 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
ERROR - 2016-07-30 16:42:51 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:42:52 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
ERROR - 2016-07-30 16:42:52 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:52 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:52 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
ERROR - 2016-07-30 16:42:52 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-30 16:42:52 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:42:52 --> 登录返回结果数：
ERROR - 2016-07-30 16:42:52 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:42:52 --> Total execution time: 0.1094
ERROR - 2016-07-30 16:42:52 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:52 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:52 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a45bc1fe8d0714e39b15cb2809a3d75dfb545454', '192.168.9.137', 1469868172, '__ci_last_regenerate|i:1469868172;')
ERROR - 2016-07-30 16:42:52 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:42:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 16:42:58 --> Security Class Initialized
DEBUG - 2016-07-30 16:42:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-30 16:42:58 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:58 --> Unable to connect to the database
ERROR - 2016-07-30 16:42:58 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:58 --> Unable to connect to the database
ERROR - 2016-07-30 16:42:58 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:58 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:58 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
ERROR - 2016-07-30 16:42:58 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:42:58 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
ERROR - 2016-07-30 16:42:58 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:58 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:58 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'baiwanhui'
OR phone = 'baiwanhui'
OR email = 'baiwanhui'
 )
ERROR - 2016-07-30 16:42:58 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-30 16:42:58 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:42:58 --> 登录返回结果数：
ERROR - 2016-07-30 16:42:58 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:42:58 --> Total execution time: 0.1094
ERROR - 2016-07-30 16:42:58 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:42:58 --> Unable to connect to the database
DEBUG - 2016-07-30 16:42:58 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a45bc1fe8d0714e39b15cb2809a3d75dfb545454', '192.168.9.137', 1469868178, '__ci_last_regenerate|i:1469868178;')
ERROR - 2016-07-30 16:42:58 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:43:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 16:43:05 --> Security Class Initialized
DEBUG - 2016-07-30 16:43:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-30 16:43:05 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:43:05 --> Unable to connect to the database
ERROR - 2016-07-30 16:43:05 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:43:05 --> Unable to connect to the database
ERROR - 2016-07-30 16:43:05 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:43:05 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:43:05 --> Unable to connect to the database
DEBUG - 2016-07-30 16:43:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
ERROR - 2016-07-30 16:43:05 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:43:05 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
ERROR - 2016-07-30 16:43:05 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:43:05 --> Unable to connect to the database
DEBUG - 2016-07-30 16:43:05 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
ERROR - 2016-07-30 16:43:05 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-30 16:43:05 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:43:05 --> 登录返回结果数：
ERROR - 2016-07-30 16:43:05 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:43:05 --> Total execution time: 0.1094
ERROR - 2016-07-30 16:43:05 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:43:05 --> Unable to connect to the database
DEBUG - 2016-07-30 16:43:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a45bc1fe8d0714e39b15cb2809a3d75dfb545454', '192.168.9.137', 1469868185, '__ci_last_regenerate|i:1469868185;')
ERROR - 2016-07-30 16:43:05 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:43:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 16:43:11 --> Security Class Initialized
DEBUG - 2016-07-30 16:43:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-30 16:43:11 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:43:11 --> Unable to connect to the database
ERROR - 2016-07-30 16:43:11 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:43:11 --> Unable to connect to the database
ERROR - 2016-07-30 16:43:11 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:43:11 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:43:11 --> Unable to connect to the database
DEBUG - 2016-07-30 16:43:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
ERROR - 2016-07-30 16:43:11 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:43:11 --> 检查用户密码，新密文:319d1965df77e0bc070574257ead5bb4993db4517e259b6e22abfc8c0b357ce5
ERROR - 2016-07-30 16:43:11 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:43:11 --> Unable to connect to the database
DEBUG - 2016-07-30 16:43:11 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '319d1965df77e0bc070574257ead5bb4993db4517e259b6e22abfc8c0b357ce5'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
ERROR - 2016-07-30 16:43:11 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-30 16:43:11 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:43:11 --> 登录返回结果数：
ERROR - 2016-07-30 16:43:11 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:43:11 --> Total execution time: 0.1094
ERROR - 2016-07-30 16:43:11 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:43:11 --> Unable to connect to the database
DEBUG - 2016-07-30 16:43:11 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a45bc1fe8d0714e39b15cb2809a3d75dfb545454', '192.168.9.137', 1469868191, '__ci_last_regenerate|i:1469868191;')
ERROR - 2016-07-30 16:43:11 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:45:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 16:45:12 --> No URI present. Default controller set.
DEBUG - 2016-07-30 16:45:12 --> CRSF cookie Set
DEBUG - 2016-07-30 16:45:12 --> Security Class Initialized
DEBUG - 2016-07-30 16:45:12 --> CRSF cookie Set
DEBUG - 2016-07-30 16:45:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:12 --> Unable to connect to the database
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:12 --> Unable to connect to the database
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:12 --> Unable to connect to the database
DEBUG - 2016-07-30 16:45:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b2081e4bf0a84c82cb189360bacd6fe555e09a0f'
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:12 --> Unable to connect to the database
DEBUG - 2016-07-30 16:45:12 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b2081e4bf0a84c82cb189360bacd6fe555e09a0f', '192.168.9.137', 1469868312, '__ci_last_regenerate|i:1469868312;')
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:45:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 16:45:12 --> Security Class Initialized
DEBUG - 2016-07-30 16:45:12 --> CRSF cookie Set
DEBUG - 2016-07-30 16:45:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:12 --> Unable to connect to the database
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:12 --> Unable to connect to the database
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:12 --> Unable to connect to the database
DEBUG - 2016-07-30 16:45:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b2081e4bf0a84c82cb189360bacd6fe555e09a0f'
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:45:12 --> Total execution time: 0.0938
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:12 --> Unable to connect to the database
DEBUG - 2016-07-30 16:45:12 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b2081e4bf0a84c82cb189360bacd6fe555e09a0f', '192.168.9.137', 1469868312, '__ci_last_regenerate|i:1469868312;')
ERROR - 2016-07-30 16:45:12 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:45:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 16:45:17 --> Security Class Initialized
DEBUG - 2016-07-30 16:45:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-30 16:45:17 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:17 --> Unable to connect to the database
ERROR - 2016-07-30 16:45:17 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:17 --> Unable to connect to the database
ERROR - 2016-07-30 16:45:17 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:17 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:17 --> Unable to connect to the database
DEBUG - 2016-07-30 16:45:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b2081e4bf0a84c82cb189360bacd6fe555e09a0f'
ERROR - 2016-07-30 16:45:17 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 16:45:17 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
ERROR - 2016-07-30 16:45:17 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:17 --> Unable to connect to the database
DEBUG - 2016-07-30 16:45:17 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
ERROR - 2016-07-30 16:45:17 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-30 16:45:17 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:45:17 --> 登录返回结果数：
ERROR - 2016-07-30 16:45:17 --> Severity: Warning --> odbc_num_rows() expects parameter 1 to be resource, null given D:\xampp\htdocs\system\database\drivers\odbc\odbc_result.php 64
DEBUG - 2016-07-30 16:45:17 --> Total execution time: 0.1250
ERROR - 2016-07-30 16:45:17 --> Severity: Warning --> odbc_connect():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 125
ERROR - 2016-07-30 16:45:17 --> Unable to connect to the database
DEBUG - 2016-07-30 16:45:17 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b2081e4bf0a84c82cb189360bacd6fe555e09a0f', '192.168.9.137', 1469868317, '__ci_last_regenerate|i:1469868317;')
ERROR - 2016-07-30 16:45:17 --> Severity: Warning --> odbc_exec() expects parameter 1 to be resource, boolean given D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
DEBUG - 2016-07-30 17:07:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:07:34 --> Security Class Initialized
DEBUG - 2016-07-30 17:07:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:07:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:07:34 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-30 17:07:34 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-30 17:07:34 --> 登录返回结果数：0
DEBUG - 2016-07-30 17:07:34 --> Total execution time: 0.2813
DEBUG - 2016-07-30 17:07:34 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a45bc1fe8d0714e39b15cb2809a3d75dfb545454', '192.168.9.137', 1469869654, '__ci_last_regenerate|i:1469869654;')
DEBUG - 2016-07-30 17:07:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:07:39 --> Security Class Initialized
DEBUG - 2016-07-30 17:07:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:07:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:07:40 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-30 17:07:40 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-30 17:07:40 --> 登录返回结果数：1
DEBUG - 2016-07-30 17:07:40 --> 成功登录
DEBUG - 2016-07-30 17:07:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469869660, data = '__ci_last_regenerate|i:1469869654;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:07:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:07:40 --> Security Class Initialized
DEBUG - 2016-07-30 17:07:40 --> CRSF cookie Set
DEBUG - 2016-07-30 17:07:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:07:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:07:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b1af1b234c6740acbb2888f5b1993904', '192.168.9.137', '2016-07-30', '17:07:40', '120340234', '/admin/backhome', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454')
DEBUG - 2016-07-30 17:07:40 --> Total execution time: 0.1406
DEBUG - 2016-07-30 17:07:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469869660
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:07:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:07:52 --> Security Class Initialized
DEBUG - 2016-07-30 17:07:52 --> CRSF cookie Set
DEBUG - 2016-07-30 17:07:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:07:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:07:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a30f2721cfbc4c9abebcece68196e626', '192.168.9.137', '2016-07-30', '17:07:52', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454')
DEBUG - 2016-07-30 17:07:52 --> 查询待审核订单
DEBUG - 2016-07-30 17:07:52 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-30 17:07:52 --> Total execution time: 0.1875
DEBUG - 2016-07-30 17:07:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469869672
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:07:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:07:58 --> Security Class Initialized
DEBUG - 2016-07-30 17:07:58 --> CRSF cookie Set
DEBUG - 2016-07-30 17:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:07:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:07:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9efa0cec65ee4ee6b0307250cc7484df', '192.168.9.137', '2016-07-30', '17:07:58', '120340234', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454')
DEBUG - 2016-07-30 17:07:58 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-07-30 17:07:58 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-07-30 17:07:58 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-07-30 17:07:58 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-07-30 17:07:58 --> Total execution time: 0.2188
DEBUG - 2016-07-30 17:07:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469869678
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:08:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:08:03 --> Security Class Initialized
DEBUG - 2016-07-30 17:08:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:08:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:08:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e307a74520d948b6af3f24f102f76a69', '192.168.9.137', '2016-07-30', '17:08:03', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454')
DEBUG - 2016-07-30 17:08:03 --> 审核订单
DEBUG - 2016-07-30 17:08:03 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 17:08:03 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-07-30 17:08:11 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340234', 'da40b2559bfa443faedc2ebd1e55bb93', '2', '', 'c62b625249494afa8cfc1b0b59ae30de', '2016-07-30 17:08:11')
DEBUG - 2016-07-30 17:08:11 --> 该订单状态更新成功:2
DEBUG - 2016-07-30 17:08:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-07-30 17:08:11 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05038'
DEBUG - 2016-07-30 17:08:27 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-30 17:08:27 --> Total execution time: 24.1094
DEBUG - 2016-07-30 17:08:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469869707
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:08:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:08:28 --> Security Class Initialized
DEBUG - 2016-07-30 17:08:28 --> CRSF cookie Set
DEBUG - 2016-07-30 17:08:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:08:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:08:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fa76dd58fbe643bda2a778aa474f1d32', '192.168.9.137', '2016-07-30', '17:08:28', '120340234', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454')
DEBUG - 2016-07-30 17:08:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-07-30 17:08:28 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-07-30 17:08:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-07-30 17:08:28 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-07-30 17:08:28 --> Total execution time: 0.1250
DEBUG - 2016-07-30 17:08:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469869708
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:09:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:09:11 --> Security Class Initialized
DEBUG - 2016-07-30 17:09:11 --> CRSF cookie Set
DEBUG - 2016-07-30 17:09:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:09:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:09:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4161f880833543ff89fd5cd99fcd4b94', '192.168.9.137', '2016-07-30', '17:09:11', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454')
DEBUG - 2016-07-30 17:09:11 --> 查询待审核订单
DEBUG - 2016-07-30 17:09:11 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-30 17:09:11 --> Total execution time: 0.1250
DEBUG - 2016-07-30 17:09:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469869751
WHERE id = 'a45bc1fe8d0714e39b15cb2809a3d75dfb545454'
DEBUG - 2016-07-30 17:09:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:09:29 --> Security Class Initialized
DEBUG - 2016-07-30 17:09:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:09:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b2081e4bf0a84c82cb189360bacd6fe555e09a0f'
DEBUG - 2016-07-30 17:09:29 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-30 17:09:29 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-30 17:09:29 --> 登录返回结果数：0
DEBUG - 2016-07-30 17:09:29 --> Total execution time: 0.0781
DEBUG - 2016-07-30 17:09:29 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b2081e4bf0a84c82cb189360bacd6fe555e09a0f', '192.168.9.137', 1469869769, '__ci_last_regenerate|i:1469869769;')
DEBUG - 2016-07-30 17:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:09:33 --> Security Class Initialized
DEBUG - 2016-07-30 17:09:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:09:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b2081e4bf0a84c82cb189360bacd6fe555e09a0f'
DEBUG - 2016-07-30 17:09:33 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-30 17:09:33 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-30 17:09:33 --> 登录返回结果数：1
DEBUG - 2016-07-30 17:09:33 --> 成功登录
DEBUG - 2016-07-30 17:09:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469869773, data = '__ci_last_regenerate|i:1469869769;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'b2081e4bf0a84c82cb189360bacd6fe555e09a0f'
DEBUG - 2016-07-30 17:09:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:09:34 --> Security Class Initialized
DEBUG - 2016-07-30 17:09:34 --> CRSF cookie Set
DEBUG - 2016-07-30 17:09:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:09:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b2081e4bf0a84c82cb189360bacd6fe555e09a0f'
DEBUG - 2016-07-30 17:09:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3f4f598f899347368b6ca9b4622dab36', '192.168.9.137', '2016-07-30', '17:09:34', '120340234', '/admin/backhome', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', 'b2081e4bf0a84c82cb189360bacd6fe555e09a0f')
DEBUG - 2016-07-30 17:09:34 --> Total execution time: 0.0781
DEBUG - 2016-07-30 17:09:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469869774
WHERE id = 'b2081e4bf0a84c82cb189360bacd6fe555e09a0f'
DEBUG - 2016-07-30 17:17:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:17:35 --> Security Class Initialized
DEBUG - 2016-07-30 17:17:35 --> CRSF cookie Set
DEBUG - 2016-07-30 17:17:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:17:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b2081e4bf0a84c82cb189360bacd6fe555e09a0f'
DEBUG - 2016-07-30 17:17:35 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'b2081e4bf0a84c82cb189360bacd6fe555e09a0f'
DEBUG - 2016-07-30 17:17:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c405b82d4e7c4e82a1322aa0654eae8d', '192.168.9.137', '2016-07-30', '17:17:35', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '2f527fc7b2cb8a81457c1663b8758556adefa2fc')
DEBUG - 2016-07-30 17:17:35 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-30 17:17:35 --> Total execution time: 0.1719
DEBUG - 2016-07-30 17:17:35 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2f527fc7b2cb8a81457c1663b8758556adefa2fc', '192.168.9.137', 1469870255, '__ci_last_regenerate|i:1469870255;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-30 17:17:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:17:39 --> Security Class Initialized
DEBUG - 2016-07-30 17:17:39 --> CRSF cookie Set
DEBUG - 2016-07-30 17:17:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:17:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2f527fc7b2cb8a81457c1663b8758556adefa2fc'
DEBUG - 2016-07-30 17:17:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e68f769d19c845b7baeabe89bd874993', '192.168.9.137', '2016-07-30', '17:17:39', '120340234', '/admin/user/add', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '2f527fc7b2cb8a81457c1663b8758556adefa2fc')
DEBUG - 2016-07-30 17:17:39 --> Total execution time: 0.1406
DEBUG - 2016-07-30 17:17:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469870259
WHERE id = '2f527fc7b2cb8a81457c1663b8758556adefa2fc'
DEBUG - 2016-07-30 17:17:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:17:41 --> Security Class Initialized
DEBUG - 2016-07-30 17:17:41 --> CRSF cookie Set
DEBUG - 2016-07-30 17:17:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:17:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2f527fc7b2cb8a81457c1663b8758556adefa2fc'
DEBUG - 2016-07-30 17:17:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2ca731370cc74dc184e22cac57c4b1c4', '192.168.9.137', '2016-07-30', '17:17:41', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '2f527fc7b2cb8a81457c1663b8758556adefa2fc')
DEBUG - 2016-07-30 17:17:41 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-30 17:17:41 --> Total execution time: 0.1094
DEBUG - 2016-07-30 17:17:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469870261
WHERE id = '2f527fc7b2cb8a81457c1663b8758556adefa2fc'
DEBUG - 2016-07-30 17:26:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:26:45 --> Security Class Initialized
DEBUG - 2016-07-30 17:26:45 --> CRSF cookie Set
DEBUG - 2016-07-30 17:26:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:26:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2f527fc7b2cb8a81457c1663b8758556adefa2fc'
DEBUG - 2016-07-30 17:26:45 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '2f527fc7b2cb8a81457c1663b8758556adefa2fc'
DEBUG - 2016-07-30 17:26:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4ea6b677f6a341768cafc8d81195c81e', '192.168.9.137', '2016-07-30', '17:26:45', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '43a4929c1d9bd1c3d651ba54eed290b7c72e0028')
DEBUG - 2016-07-30 17:26:45 --> 查询待审核订单
DEBUG - 2016-07-30 17:26:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-30 17:26:45 --> Total execution time: 0.1406
DEBUG - 2016-07-30 17:26:45 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('43a4929c1d9bd1c3d651ba54eed290b7c72e0028', '192.168.9.137', 1469870805, '__ci_last_regenerate|i:1469870805;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-30 17:26:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:26:48 --> Security Class Initialized
DEBUG - 2016-07-30 17:26:48 --> CRSF cookie Set
DEBUG - 2016-07-30 17:26:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:26:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '43a4929c1d9bd1c3d651ba54eed290b7c72e0028'
DEBUG - 2016-07-30 17:26:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4390b9a4996d46ca938e58bbc9cd96c0', '192.168.9.137', '2016-07-30', '17:26:48', '120340234', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '43a4929c1d9bd1c3d651ba54eed290b7c72e0028')
DEBUG - 2016-07-30 17:26:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 17:26:48 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-07-30 17:26:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 17:26:48 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-07-30 17:26:48 --> Total execution time: 0.1406
DEBUG - 2016-07-30 17:26:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469870808
WHERE id = '43a4929c1d9bd1c3d651ba54eed290b7c72e0028'
DEBUG - 2016-07-30 17:26:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:26:56 --> Security Class Initialized
DEBUG - 2016-07-30 17:26:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:26:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '43a4929c1d9bd1c3d651ba54eed290b7c72e0028'
DEBUG - 2016-07-30 17:26:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('12b904ab1c7946e2ac70035fcad57e96', '192.168.9.137', '2016-07-30', '17:26:56', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '43a4929c1d9bd1c3d651ba54eed290b7c72e0028')
DEBUG - 2016-07-30 17:26:57 --> 审核订单
DEBUG - 2016-07-30 17:26:57 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '9608e7694c17436fb9747b119aefef13'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 17:26:57 --> 过程调用语句：  execute USP_APSOS_outorder '9608e7694c17436fb9747b119aefef13'
ERROR - 2016-07-30 17:27:04 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-30 17:27:04 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-30 17:27:04 --> Total execution time: 7.6250
DEBUG - 2016-07-30 17:27:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469870824
WHERE id = '43a4929c1d9bd1c3d651ba54eed290b7c72e0028'
DEBUG - 2016-07-30 17:27:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:27:04 --> Security Class Initialized
DEBUG - 2016-07-30 17:27:04 --> CRSF cookie Set
DEBUG - 2016-07-30 17:27:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:27:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '43a4929c1d9bd1c3d651ba54eed290b7c72e0028'
DEBUG - 2016-07-30 17:27:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1360862ddd414d6fb87a5e062f52b5f9', '192.168.9.137', '2016-07-30', '17:27:04', '120340234', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '43a4929c1d9bd1c3d651ba54eed290b7c72e0028')
DEBUG - 2016-07-30 17:27:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 17:27:04 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-07-30 17:27:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 17:27:04 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-07-30 17:27:04 --> Total execution time: 0.0781
DEBUG - 2016-07-30 17:27:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469870824
WHERE id = '43a4929c1d9bd1c3d651ba54eed290b7c72e0028'
DEBUG - 2016-07-30 17:32:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:32:40 --> Security Class Initialized
DEBUG - 2016-07-30 17:32:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:32:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '43a4929c1d9bd1c3d651ba54eed290b7c72e0028'
DEBUG - 2016-07-30 17:32:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e374742de76b481ebd744902c5ee1244', '192.168.9.137', '2016-07-30', '17:32:40', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '43a4929c1d9bd1c3d651ba54eed290b7c72e0028')
DEBUG - 2016-07-30 17:32:40 --> 审核订单
DEBUG - 2016-07-30 17:32:40 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '9608e7694c17436fb9747b119aefef13'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 17:32:40 --> 过程调用语句：  execute USP_APSOS_outorder '9608e7694c17436fb9747b119aefef13'
ERROR - 2016-07-30 17:32:40 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-30 17:32:40 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-30 17:32:40 --> Total execution time: 0.1406
DEBUG - 2016-07-30 17:32:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469871160
WHERE id = '43a4929c1d9bd1c3d651ba54eed290b7c72e0028'
DEBUG - 2016-07-30 17:32:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:32:40 --> Security Class Initialized
DEBUG - 2016-07-30 17:32:40 --> CRSF cookie Set
DEBUG - 2016-07-30 17:32:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:32:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '43a4929c1d9bd1c3d651ba54eed290b7c72e0028'
DEBUG - 2016-07-30 17:32:40 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '43a4929c1d9bd1c3d651ba54eed290b7c72e0028'
DEBUG - 2016-07-30 17:32:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('59319fca8ca2417eb9bd972d3032845b', '192.168.9.137', '2016-07-30', '17:32:40', '120340234', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '6e02f4368334d55be8437826e03e1ad268033e43')
DEBUG - 2016-07-30 17:32:41 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 17:32:41 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-07-30 17:32:41 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 17:32:41 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-07-30 17:32:41 --> Total execution time: 0.8438
DEBUG - 2016-07-30 17:32:41 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6e02f4368334d55be8437826e03e1ad268033e43', '192.168.9.137', 1469871161, '__ci_last_regenerate|i:1469871160;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-30 17:41:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 17:41:41 --> Security Class Initialized
DEBUG - 2016-07-30 17:41:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 17:41:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6e02f4368334d55be8437826e03e1ad268033e43'
DEBUG - 2016-07-30 17:41:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('20777560bc8a426292c2d5d66ec1e805', '192.168.9.137', '2016-07-30', '17:41:41', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '6e02f4368334d55be8437826e03e1ad268033e43')
DEBUG - 2016-07-30 17:41:41 --> 审核订单
DEBUG - 2016-07-30 17:41:41 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '9608e7694c17436fb9747b119aefef13'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 17:41:41 --> 过程调用语句：  execute USP_APSOS_outorder '9608e7694c17436fb9747b119aefef13'
ERROR - 2016-07-30 17:41:41 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 242
ERROR - 2016-07-30 17:41:41 --> Severity: Error --> Call to undefined method CI_DB_odbc_driver::_error_message() D:\xampp\htdocs\admin\models\Order_model.php 247
DEBUG - 2016-07-30 17:41:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469871701
WHERE id = '6e02f4368334d55be8437826e03e1ad268033e43'
DEBUG - 2016-07-30 19:19:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:19:08 --> Security Class Initialized
DEBUG - 2016-07-30 19:19:08 --> CRSF cookie Set
DEBUG - 2016-07-30 19:19:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:19:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6e02f4368334d55be8437826e03e1ad268033e43'
DEBUG - 2016-07-30 19:19:08 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '6e02f4368334d55be8437826e03e1ad268033e43'
DEBUG - 2016-07-30 19:19:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fc5a735120ea4b1c85d3710c98c64285', '192.168.9.137', '2016-07-30', '19:19:08', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:19:08 --> 查询待审核订单
DEBUG - 2016-07-30 19:19:08 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-30 19:19:08 --> Total execution time: 0.1406
DEBUG - 2016-07-30 19:19:08 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('580b2387ed662f37755f354743db74ced7563bbb', '192.168.9.137', 1469877548, '__ci_last_regenerate|i:1469877548;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-30 19:19:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:19:11 --> Security Class Initialized
DEBUG - 2016-07-30 19:19:11 --> CRSF cookie Set
DEBUG - 2016-07-30 19:19:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:19:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:19:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8ef59f98214648ccaada894ddcfdfa05', '192.168.9.137', '2016-07-30', '19:19:11', '120340234', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:19:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 19:19:11 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-07-30 19:19:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 19:19:11 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-07-30 19:19:11 --> Total execution time: 0.1563
DEBUG - 2016-07-30 19:19:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877551
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:19:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:19:22 --> Security Class Initialized
DEBUG - 2016-07-30 19:19:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:19:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:19:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2c92d311870b4f09b03e0da36f87f115', '192.168.9.137', '2016-07-30', '19:19:22', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:19:22 --> 审核订单
DEBUG - 2016-07-30 19:19:22 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '9608e7694c17436fb9747b119aefef13'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 19:19:22 --> 过程调用语句：  execute USP_APSOS_outorder '9608e7694c17436fb9747b119aefef13'
ERROR - 2016-07-30 19:19:22 --> Severity: Error --> Call to undefined method CI_DB_odbc_driver::_error_message() D:\xampp\htdocs\admin\models\Order_model.php 247
DEBUG - 2016-07-30 19:19:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877562
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
ERROR - 2016-07-30 19:19:22 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-30 19:19:22 --> Query error: [Microsoft][ODBC SQL Server Driver]����ռ�ߵ�����һ�� hstmt - Invalid query: UPDATE apsos_sessions SET timestamp = 1469877562
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:19:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:19:42 --> Security Class Initialized
DEBUG - 2016-07-30 19:19:42 --> CRSF cookie Set
DEBUG - 2016-07-30 19:19:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:19:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:19:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('53a20aeab76445509fae62330647a8dd', '192.168.9.137', '2016-07-30', '19:19:42', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:19:42 --> 查询待审核订单
DEBUG - 2016-07-30 19:19:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-30 19:19:42 --> Total execution time: 0.1250
DEBUG - 2016-07-30 19:19:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877582
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:19:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:19:48 --> Security Class Initialized
DEBUG - 2016-07-30 19:19:48 --> CRSF cookie Set
DEBUG - 2016-07-30 19:19:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:19:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:19:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8d2045a690cf4621b5fae197e7725ae4', '192.168.9.137', '2016-07-30', '19:19:48', '120340234', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:19:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 19:19:48 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-07-30 19:19:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 19:19:48 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-07-30 19:19:48 --> Total execution time: 0.1406
DEBUG - 2016-07-30 19:19:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877588
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:19:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:19:56 --> Security Class Initialized
DEBUG - 2016-07-30 19:19:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:19:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:19:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b7fcb02c71d94d5491c100041677182b', '192.168.9.137', '2016-07-30', '19:19:56', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:19:56 --> 审核订单
DEBUG - 2016-07-30 19:19:56 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '9608e7694c17436fb9747b119aefef13'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 19:19:56 --> 过程调用语句：  execute USP_APSOS_outorder '9608e7694c17436fb9747b119aefef13'
ERROR - 2016-07-30 19:19:56 --> Severity: Error --> Call to undefined method CI_DB_odbc_driver::_error_message() D:\xampp\htdocs\admin\models\Order_model.php 247
DEBUG - 2016-07-30 19:19:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877596
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
ERROR - 2016-07-30 19:19:56 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-30 19:19:56 --> Query error: [Microsoft][ODBC SQL Server Driver]����ռ�ߵ�����һ�� hstmt - Invalid query: UPDATE apsos_sessions SET timestamp = 1469877596
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:20:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:20:46 --> Security Class Initialized
DEBUG - 2016-07-30 19:20:46 --> CRSF cookie Set
DEBUG - 2016-07-30 19:20:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:20:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:20:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('947bfa1293f246b48bfad2a5dc2fcfc7', '192.168.9.137', '2016-07-30', '19:20:46', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:20:46 --> 查询待审核订单
DEBUG - 2016-07-30 19:20:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-30 19:20:46 --> Total execution time: 0.1250
DEBUG - 2016-07-30 19:20:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877646
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:20:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:20:48 --> Security Class Initialized
DEBUG - 2016-07-30 19:20:48 --> CRSF cookie Set
DEBUG - 2016-07-30 19:20:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:20:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:20:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('66339b5a0b9a4021a3ec1ee4ed5bc977', '192.168.9.137', '2016-07-30', '19:20:48', '120340234', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:20:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 19:20:48 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-07-30 19:20:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 19:20:48 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-07-30 19:20:48 --> Total execution time: 0.1094
DEBUG - 2016-07-30 19:20:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877648
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:20:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:20:53 --> Security Class Initialized
DEBUG - 2016-07-30 19:20:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8ef147fe34b6451aa5bec468b2ad9465', '192.168.9.137', '2016-07-30', '19:20:53', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:20:53 --> 审核订单
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '9608e7694c17436fb9747b119aefef13'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 19:20:53 --> 过程调用语句：  execute USP_APSOS_outorder '9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340234', '9608e7694c17436fb9747b119aefef13', '2', '', '2b107f5f0e72430a81b93e5ba0c19a4f', '2016-07-30 19:20:53')
DEBUG - 2016-07-30 19:20:53 --> 该订单状态更新成功:2
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-07-30 19:20:53 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-30 19:20:53 --> Total execution time: 0.1406
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877653
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:20:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:20:53 --> Security Class Initialized
DEBUG - 2016-07-30 19:20:53 --> CRSF cookie Set
DEBUG - 2016-07-30 19:20:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b96db91a3f8844c5a8f6458ddb87399f', '192.168.9.137', '2016-07-30', '19:20:53', '120340234', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-07-30 19:20:53 --> Total execution time: 0.1406
DEBUG - 2016-07-30 19:20:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877653
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:21:00 --> Security Class Initialized
DEBUG - 2016-07-30 19:21:00 --> CRSF cookie Set
DEBUG - 2016-07-30 19:21:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:21:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b91bdf54f63747e58325d4b8023561f7', '192.168.9.137', '2016-07-30', '19:21:00', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:21:00 --> 查询待审核订单
DEBUG - 2016-07-30 19:21:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-30 19:21:00 --> Total execution time: 0.0781
DEBUG - 2016-07-30 19:21:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877660
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:21:02 --> Security Class Initialized
DEBUG - 2016-07-30 19:21:02 --> CRSF cookie Set
DEBUG - 2016-07-30 19:21:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:21:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ea90aeb0ec334154a4e0806e893f4244', '192.168.9.137', '2016-07-30', '19:21:02', '120340234', '/admin/order/check/5acb8fb9fbc549169bd849ea3faf4da6', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:21:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='5acb8fb9fbc549169bd849ea3faf4da6'
DEBUG - 2016-07-30 19:21:02 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='5acb8fb9fbc549169bd849ea3faf4da6' order by create_date_time desc
DEBUG - 2016-07-30 19:21:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='5acb8fb9fbc549169bd849ea3faf4da6'
DEBUG - 2016-07-30 19:21:02 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='5acb8fb9fbc549169bd849ea3faf4da6'    order by t1.lno asc
        
DEBUG - 2016-07-30 19:21:02 --> Total execution time: 0.1250
DEBUG - 2016-07-30 19:21:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877662
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:21:07 --> Security Class Initialized
DEBUG - 2016-07-30 19:21:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:21:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e754913499d6497a9d884d1a049220dd', '192.168.9.137', '2016-07-30', '19:21:07', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:21:07 --> 审核订单
DEBUG - 2016-07-30 19:21:07 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '5acb8fb9fbc549169bd849ea3faf4da6'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 19:21:07 --> 过程调用语句：  execute USP_APSOS_outorder '5acb8fb9fbc549169bd849ea3faf4da6'
DEBUG - 2016-07-30 19:21:10 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340234', '5acb8fb9fbc549169bd849ea3faf4da6', '2', '', 'a095e831c7eb4f9d8cfcb81552c2cfb1', '2016-07-30 19:21:10')
DEBUG - 2016-07-30 19:21:10 --> 该订单状态更新成功:2
DEBUG - 2016-07-30 19:21:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='5acb8fb9fbc549169bd849ea3faf4da6'
DEBUG - 2016-07-30 19:21:10 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05279'
DEBUG - 2016-07-30 19:21:10 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-30 19:21:10 --> Total execution time: 2.5469
DEBUG - 2016-07-30 19:21:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877670
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:21:10 --> Security Class Initialized
DEBUG - 2016-07-30 19:21:10 --> CRSF cookie Set
DEBUG - 2016-07-30 19:21:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:21:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e3b59fcea4bb4bd584629ea1b72fffa2', '192.168.9.137', '2016-07-30', '19:21:10', '120340234', '/admin/order/check/5acb8fb9fbc549169bd849ea3faf4da6', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:21:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='5acb8fb9fbc549169bd849ea3faf4da6'
DEBUG - 2016-07-30 19:21:10 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='5acb8fb9fbc549169bd849ea3faf4da6' order by create_date_time desc
DEBUG - 2016-07-30 19:21:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='5acb8fb9fbc549169bd849ea3faf4da6'
DEBUG - 2016-07-30 19:21:10 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='5acb8fb9fbc549169bd849ea3faf4da6'    order by t1.lno asc
        
DEBUG - 2016-07-30 19:21:10 --> Total execution time: 0.0781
DEBUG - 2016-07-30 19:21:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877670
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:21:23 --> Security Class Initialized
DEBUG - 2016-07-30 19:21:23 --> CRSF cookie Set
DEBUG - 2016-07-30 19:21:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:21:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c50e72482fa4424cadf0afea36101709', '192.168.9.137', '2016-07-30', '19:21:23', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:21:23 --> 查询待发货订单
DEBUG - 2016-07-30 19:21:23 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-30 19:21:23 --> Total execution time: 0.1563
DEBUG - 2016-07-30 19:21:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877683
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:21:44 --> Security Class Initialized
DEBUG - 2016-07-30 19:21:44 --> CRSF cookie Set
DEBUG - 2016-07-30 19:21:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:21:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8ff6fa7ef764424d98ea45b265ab8249', '192.168.9.137', '2016-07-30', '19:21:44', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:21:44 --> 查询待审核订单
DEBUG - 2016-07-30 19:21:44 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-30 19:21:44 --> Total execution time: 0.1094
DEBUG - 2016-07-30 19:21:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877704
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:21:47 --> Security Class Initialized
DEBUG - 2016-07-30 19:21:47 --> CRSF cookie Set
DEBUG - 2016-07-30 19:21:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:21:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b9f2baec2ffa42ecb8013e5f1f4bf288', '192.168.9.137', '2016-07-30', '19:21:47', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:21:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-30 19:21:47 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-30 19:21:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-30 19:21:47 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-30 19:21:47 --> Total execution time: 0.0938
DEBUG - 2016-07-30 19:21:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877707
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:21:52 --> Security Class Initialized
DEBUG - 2016-07-30 19:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:21:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e3831126610343ebbabb9daf9bbbc79b', '192.168.9.137', '2016-07-30', '19:21:52', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:21:52 --> 审核订单
DEBUG - 2016-07-30 19:21:52 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'a253b9fd54da4fc48aaa078da96c8d7d'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-30 19:21:52 --> 过程调用语句：  execute USP_APSOS_outorder 'a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-30 19:21:53 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340234', 'a253b9fd54da4fc48aaa078da96c8d7d', '2', '', '49148285096d455193a6929471c10020', '2016-07-30 19:21:53')
DEBUG - 2016-07-30 19:21:53 --> 该订单状态更新成功:2
DEBUG - 2016-07-30 19:21:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-30 19:21:53 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05038'
DEBUG - 2016-07-30 19:21:53 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-30 19:21:53 --> Total execution time: 1.4219
DEBUG - 2016-07-30 19:21:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877713
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:21:53 --> Security Class Initialized
DEBUG - 2016-07-30 19:21:53 --> CRSF cookie Set
DEBUG - 2016-07-30 19:21:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:21:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3203f84db3104fb68f334c50669b0002', '192.168.9.137', '2016-07-30', '19:21:53', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:21:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-30 19:21:53 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-30 19:21:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-30 19:21:53 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-30 19:21:53 --> Total execution time: 0.1406
DEBUG - 2016-07-30 19:21:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877713
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:21:58 --> Security Class Initialized
DEBUG - 2016-07-30 19:21:58 --> CRSF cookie Set
DEBUG - 2016-07-30 19:21:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:21:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:21:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cc468168b8ab47978b8367237767ea49', '192.168.9.137', '2016-07-30', '19:21:58', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:21:58 --> 查询待发货订单
DEBUG - 2016-07-30 19:21:58 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-30 19:21:58 --> Total execution time: 1.5938
DEBUG - 2016-07-30 19:21:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877718
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:22:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:22:09 --> Security Class Initialized
DEBUG - 2016-07-30 19:22:09 --> CRSF cookie Set
DEBUG - 2016-07-30 19:22:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:22:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:22:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e1266421964742ba99fac98096b1655f', '192.168.9.137', '2016-07-30', '19:22:09', '120340234', '/admin/order/traffic/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:22:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-30 19:22:09 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-30 19:22:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-30 19:22:09 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-30 19:22:09 --> Total execution time: 0.1406
DEBUG - 2016-07-30 19:22:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877729
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:22:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:22:43 --> Security Class Initialized
DEBUG - 2016-07-30 19:22:43 --> CRSF cookie Set
DEBUG - 2016-07-30 19:22:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:22:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:22:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ffeae70bed8d4e3fa7431e5e348b0e34', '192.168.9.137', '2016-07-30', '19:22:43', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:22:43 --> 查询需求订单
DEBUG - 2016-07-30 19:22:43 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-30 19:22:43 --> Total execution time: 0.1719
DEBUG - 2016-07-30 19:22:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877763
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:22:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:22:52 --> Security Class Initialized
DEBUG - 2016-07-30 19:22:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:22:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:22:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dc88d3f4d23e42138e5434f2fcbbac63', '192.168.9.137', '2016-07-30', '19:22:52', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:22:52 --> 查询需求订单
DEBUG - 2016-07-30 19:22:52 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-30 19:22:52 --> Total execution time: 0.1563
DEBUG - 2016-07-30 19:22:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877772
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:22:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:22:57 --> Security Class Initialized
DEBUG - 2016-07-30 19:22:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:22:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:22:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cd346855ede24e41b1d33fdf36d5f397', '192.168.9.137', '2016-07-30', '19:22:57', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:22:57 --> 查询需求订单
DEBUG - 2016-07-30 19:22:57 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-07-30 00:00:00' 
ERROR - 2016-07-30 19:22:57 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-30 19:22:57 --> Query error: [Microsoft][ODBC SQL Server Driver][SQL Server]�ڹؼ��� 'and' �������﷨���� - Invalid query: select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-07-30 00:00:00' 
ERROR - 2016-07-30 19:22:57 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Order_model.php 85
DEBUG - 2016-07-30 19:22:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877777
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:23:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:23:02 --> Security Class Initialized
DEBUG - 2016-07-30 19:23:02 --> CRSF cookie Set
DEBUG - 2016-07-30 19:23:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:23:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:23:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('34c22e78ec0e4d73a5bf891902f46fa6', '192.168.9.137', '2016-07-30', '19:23:02', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:23:02 --> 查询需求订单
DEBUG - 2016-07-30 19:23:02 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-30 19:23:02 --> Total execution time: 0.1094
DEBUG - 2016-07-30 19:23:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877782
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:23:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:23:05 --> Security Class Initialized
DEBUG - 2016-07-30 19:23:05 --> CRSF cookie Set
DEBUG - 2016-07-30 19:23:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:23:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:23:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fa255ab9204045e0a965a5322f2d34ef', '192.168.9.137', '2016-07-30', '19:23:05', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:23:05 --> 查询订单
DEBUG - 2016-07-30 19:23:05 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-30 19:23:05 --> Total execution time: 0.1406
DEBUG - 2016-07-30 19:23:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877785
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:23:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:23:14 --> Security Class Initialized
DEBUG - 2016-07-30 19:23:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:23:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:23:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('17e19b92fd024caa9c1a7f69960cdf4b', '192.168.9.137', '2016-07-30', '19:23:14', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:23:14 --> 查询订单
DEBUG - 2016-07-30 19:23:14 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='5'  order by create_date_time asc
DEBUG - 2016-07-30 19:23:14 --> Total execution time: 0.1094
DEBUG - 2016-07-30 19:23:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877794
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:23:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:23:19 --> Security Class Initialized
DEBUG - 2016-07-30 19:23:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:23:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:23:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b0e51dceca9f4de386eebcbc21cafacb', '192.168.9.137', '2016-07-30', '19:23:19', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:23:19 --> 查询订单
DEBUG - 2016-07-30 19:23:19 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='3'  order by create_date_time asc
DEBUG - 2016-07-30 19:23:19 --> Total execution time: 0.1250
DEBUG - 2016-07-30 19:23:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877799
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:23:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:23:21 --> Security Class Initialized
DEBUG - 2016-07-30 19:23:21 --> CRSF cookie Set
DEBUG - 2016-07-30 19:23:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:23:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:23:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1642629b972245b29162ed55246fde12', '192.168.9.137', '2016-07-30', '19:23:21', '120340234', '/admin/order/index/aab58df429c94699b895396d664d5f6c', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:23:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-07-30 19:23:21 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aab58df429c94699b895396d664d5f6c' order by create_date_time desc
DEBUG - 2016-07-30 19:23:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-07-30 19:23:21 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-07-30 19:23:21 --> Total execution time: 0.1406
DEBUG - 2016-07-30 19:23:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877801
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:23:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-30 19:23:23 --> Security Class Initialized
DEBUG - 2016-07-30 19:23:23 --> CRSF cookie Set
DEBUG - 2016-07-30 19:23:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-30 19:23:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
DEBUG - 2016-07-30 19:23:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('75758ad929db4b55a73011dfad9221b4', '192.168.9.137', '2016-07-30', '19:23:23', '120340234', '/admin/order/true/aab58df429c94699b895396d664d5f6c', 'Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0', '580b2387ed662f37755f354743db74ced7563bbb')
DEBUG - 2016-07-30 19:23:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-07-30 19:23:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-07-30 19:23:23 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-07-30 19:23:23 --> Total execution time: 0.1563
DEBUG - 2016-07-30 19:23:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469877803
WHERE id = '580b2387ed662f37755f354743db74ced7563bbb'
