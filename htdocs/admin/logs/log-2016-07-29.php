<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-29 10:23:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:23:30 --> CRSF cookie Set
DEBUG - 2016-07-29 10:23:30 --> Security Class Initialized
DEBUG - 2016-07-29 10:23:30 --> CRSF cookie Set
DEBUG - 2016-07-29 10:23:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:23:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:30 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77', '114.91.137.232', 1469759010, '__ci_last_regenerate|i:1469759010;')
DEBUG - 2016-07-29 10:23:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:23:30 --> Security Class Initialized
DEBUG - 2016-07-29 10:23:30 --> CRSF cookie Set
DEBUG - 2016-07-29 10:23:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:23:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:30 --> Total execution time: 0.1092
DEBUG - 2016-07-29 10:23:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759010
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:23:38 --> Security Class Initialized
DEBUG - 2016-07-29 10:23:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:23:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:38 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-29 10:23:38 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-29 10:23:38 --> 登录返回结果数：1
DEBUG - 2016-07-29 10:23:38 --> 成功登录
DEBUG - 2016-07-29 10:23:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759018, data = '__ci_last_regenerate|i:1469759010;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:23:38 --> Security Class Initialized
DEBUG - 2016-07-29 10:23:38 --> CRSF cookie Set
DEBUG - 2016-07-29 10:23:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:23:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2c183c833d004fd18eec7f17ec1c1436', '114.91.137.232', '2016-07-29', '10:23:38', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:23:38 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-29 10:23:38 --> Total execution time: 0.1560
DEBUG - 2016-07-29 10:23:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759018
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:23:41 --> Security Class Initialized
DEBUG - 2016-07-29 10:23:41 --> CRSF cookie Set
DEBUG - 2016-07-29 10:23:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:23:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1a69eb62489b4d7894c515f489e07337', '114.91.137.232', '2016-07-29', '10:23:42', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:23:42 --> 查询待审核订单
DEBUG - 2016-07-29 10:23:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:23:42 --> Total execution time: 0.2028
DEBUG - 2016-07-29 10:23:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759022
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:23:46 --> Security Class Initialized
DEBUG - 2016-07-29 10:23:46 --> CRSF cookie Set
DEBUG - 2016-07-29 10:23:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:23:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('60a3a43f9e754a8c8fb2f774541c1033', '114.91.137.232', '2016-07-29', '10:23:46', '120340234', '/admin/order/check/be33a89de87a45738a1b662c1ed8d821', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:23:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:23:46 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='be33a89de87a45738a1b662c1ed8d821' order by create_date_time desc
DEBUG - 2016-07-29 10:23:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:23:46 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='be33a89de87a45738a1b662c1ed8d821'    order by t1.lno asc
        
DEBUG - 2016-07-29 10:23:46 --> Total execution time: 0.1248
DEBUG - 2016-07-29 10:23:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759026
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:23:52 --> Security Class Initialized
DEBUG - 2016-07-29 10:23:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:23:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f68f75734de643dfa2a70174f40b2b36', '114.91.137.232', '2016-07-29', '10:23:52', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:23:52 --> 审核订单
DEBUG - 2016-07-29 10:23:52 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'be33a89de87a45738a1b662c1ed8d821'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-29 10:23:52 --> 过程调用语句：  execute USP_APSOS_outorder 'be33a89de87a45738a1b662c1ed8d821'
ERROR - 2016-07-29 10:23:57 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-29 10:23:57 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-29 10:23:57 --> Total execution time: 5.1636
DEBUG - 2016-07-29 10:23:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759037
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:23:57 --> Security Class Initialized
DEBUG - 2016-07-29 10:23:57 --> CRSF cookie Set
DEBUG - 2016-07-29 10:23:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:23:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:23:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8a5a7c51bd0847ba9f5125c75a2c6b42', '114.91.137.232', '2016-07-29', '10:23:57', '120340234', '/admin/order/check/be33a89de87a45738a1b662c1ed8d821', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:23:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:23:57 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='be33a89de87a45738a1b662c1ed8d821' order by create_date_time desc
DEBUG - 2016-07-29 10:23:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:23:57 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='be33a89de87a45738a1b662c1ed8d821'    order by t1.lno asc
        
DEBUG - 2016-07-29 10:23:57 --> Total execution time: 0.1248
DEBUG - 2016-07-29 10:23:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759037
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:03 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('edff14a67a0e46f88da537c0e9b6095c', '114.91.137.232', '2016-07-29', '10:24:03', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:24:03 --> 审核订单
DEBUG - 2016-07-29 10:24:03 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'be33a89de87a45738a1b662c1ed8d821'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-29 10:24:03 --> 过程调用语句：  execute USP_APSOS_outorder 'be33a89de87a45738a1b662c1ed8d821'
ERROR - 2016-07-29 10:24:03 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-29 10:24:03 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-29 10:24:03 --> Total execution time: 0.1560
DEBUG - 2016-07-29 10:24:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759043
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:04 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:04 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f46ffea32c4741d5b05ab4fa6883ae13', '114.91.137.232', '2016-07-29', '10:24:04', '120340234', '/admin/order/check/be33a89de87a45738a1b662c1ed8d821', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:24:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:24:04 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='be33a89de87a45738a1b662c1ed8d821' order by create_date_time desc
DEBUG - 2016-07-29 10:24:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:24:04 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='be33a89de87a45738a1b662c1ed8d821'    order by t1.lno asc
        
DEBUG - 2016-07-29 10:24:04 --> Total execution time: 0.0936
DEBUG - 2016-07-29 10:24:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759044
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:07 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:07 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4ba256f8f4bd4fc08c8bb30804419954', '114.91.137.232', '2016-07-29', '10:24:07', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:24:07 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:07 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:07 --> Total execution time: 0.0780
DEBUG - 2016-07-29 10:24:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759047
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:09 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:09 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2388b984713a4d14a835b2182c8e253d', '114.91.137.232', '2016-07-29', '10:24:09', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:24:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-29 10:24:09 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-29 10:24:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-29 10:24:09 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-29 10:24:09 --> Total execution time: 0.1092
DEBUG - 2016-07-29 10:24:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759049
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:13 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('94821b8440264d78b4650745fdb04e55', '114.91.137.232', '2016-07-29', '10:24:13', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:24:13 --> 审核订单
DEBUG - 2016-07-29 10:24:13 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '219f5787748b43f98ecbcf930a5fb3f2'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-29 10:24:13 --> 过程调用语句：  execute USP_APSOS_outorder '219f5787748b43f98ecbcf930a5fb3f2'
ERROR - 2016-07-29 10:24:13 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-29 10:24:13 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-29 10:24:13 --> Total execution time: 0.4680
DEBUG - 2016-07-29 10:24:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759053
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:13 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:13 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('33ba16ae2da54695a85c5db3090dc48a', '114.91.137.232', '2016-07-29', '10:24:13', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:24:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-29 10:24:13 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-29 10:24:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-29 10:24:13 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-29 10:24:13 --> Total execution time: 0.0936
DEBUG - 2016-07-29 10:24:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759053
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:15 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:15 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8d822c3c7ad74a7792df6ab6b7e90e43', '114.91.137.232', '2016-07-29', '10:24:15', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:24:15 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:15 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:15 --> Total execution time: 0.0780
DEBUG - 2016-07-29 10:24:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759055
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:17 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:17 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b209a6f651664e5d9167e422ab7a3879', '114.91.137.232', '2016-07-29', '10:24:17', '120340234', '/admin/order/check/be33a89de87a45738a1b662c1ed8d821', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:24:17 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:24:17 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='be33a89de87a45738a1b662c1ed8d821' order by create_date_time desc
DEBUG - 2016-07-29 10:24:17 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:24:17 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='be33a89de87a45738a1b662c1ed8d821'    order by t1.lno asc
        
DEBUG - 2016-07-29 10:24:17 --> Total execution time: 0.1092
DEBUG - 2016-07-29 10:24:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759057
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:17 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:17 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:17 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:17 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4f966521686e562d0eb8e0a0f671434724c590eb', '114.91.137.232', 1469759057, '__ci_last_regenerate|i:1469759057;')
DEBUG - 2016-07-29 10:24:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:17 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:17 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:17 --> Total execution time: 0.0624
DEBUG - 2016-07-29 10:24:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759057
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:22 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('54be70d0431d4b53891259195f6b8492', '114.91.137.232', '2016-07-29', '10:24:22', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:24:22 --> 审核订单
DEBUG - 2016-07-29 10:24:22 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'be33a89de87a45738a1b662c1ed8d821'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-29 10:24:22 --> 过程调用语句：  execute USP_APSOS_outorder 'be33a89de87a45738a1b662c1ed8d821'
ERROR - 2016-07-29 10:24:22 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-29 10:24:22 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-29 10:24:22 --> Total execution time: 0.6396
DEBUG - 2016-07-29 10:24:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759062
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:23 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:23 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fc6e5d4d16054d45ba9620b9973c6b53', '114.91.137.232', '2016-07-29', '10:24:23', '120340234', '/admin/order/check/be33a89de87a45738a1b662c1ed8d821', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77')
DEBUG - 2016-07-29 10:24:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:24:23 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='be33a89de87a45738a1b662c1ed8d821' order by create_date_time desc
DEBUG - 2016-07-29 10:24:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:24:23 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='be33a89de87a45738a1b662c1ed8d821'    order by t1.lno asc
        
DEBUG - 2016-07-29 10:24:23 --> Total execution time: 0.1248
DEBUG - 2016-07-29 10:24:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759063
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:24:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:42 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:42 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-29 10:24:42 --> 登录返回结果数：1
DEBUG - 2016-07-29 10:24:42 --> 成功登录
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759082, data = '__ci_last_regenerate|i:1469759057;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:42 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:42 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('783a7205373a4f759e6789d9a8edad3e', '114.91.137.232', '2016-07-29', '10:24:42', '120340234', '/admin/order/check/a098faaa699e49ed8158a99ad39b3826', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a098faaa699e49ed8158a99ad39b3826'
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a098faaa699e49ed8158a99ad39b3826' order by create_date_time desc
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a098faaa699e49ed8158a99ad39b3826'
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a098faaa699e49ed8158a99ad39b3826'    order by t1.lno asc
        
DEBUG - 2016-07-29 10:24:42 --> Total execution time: 0.0936
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759082
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:42 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:42 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2801c63634c54c5da7feff7248e06585', '114.91.137.232', '2016-07-29', '10:24:42', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:42 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:42 --> Total execution time: 0.0780
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759082
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:42 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:42 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5eb55ab3803946cfb1adbd55f4781779', '114.91.137.232', '2016-07-29', '10:24:42', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:42 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:42 --> Total execution time: 0.0780
DEBUG - 2016-07-29 10:24:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759082
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:43 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:43 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f6e9ef4bb94448458d350c1f3d74e694', '114.91.137.232', '2016-07-29', '10:24:43', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:43 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:43 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:43 --> Total execution time: 0.0780
DEBUG - 2016-07-29 10:24:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759083
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:43 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:43 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f801135625a14de4957f1352d0284edd', '114.91.137.232', '2016-07-29', '10:24:43', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:43 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:43 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:43 --> Total execution time: 0.0780
DEBUG - 2016-07-29 10:24:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759083
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:43 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:43 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7cadb2ae711d4e9790f8cbe84576ca53', '114.91.137.232', '2016-07-29', '10:24:43', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:43 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:43 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:44 --> Total execution time: 0.0936
DEBUG - 2016-07-29 10:24:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759084
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:44 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:44 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2355922334964845a20be8a1d64511fd', '114.91.137.232', '2016-07-29', '10:24:44', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:44 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:44 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:44 --> Total execution time: 0.0780
DEBUG - 2016-07-29 10:24:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759084
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:44 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:44 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e436b1964dc64fe8acfba6b999527ea7', '114.91.137.232', '2016-07-29', '10:24:44', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:44 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:44 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:44 --> Total execution time: 0.0780
DEBUG - 2016-07-29 10:24:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759084
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:45 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:45 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4655532b1909476cafa4705fb9619ac7', '114.91.137.232', '2016-07-29', '10:24:45', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:45 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:45 --> Total execution time: 0.0936
DEBUG - 2016-07-29 10:24:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759085
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:45 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:45 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f6ea0ea035874f6ca6c7bb0c65a937ed', '114.91.137.232', '2016-07-29', '10:24:45', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:45 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:45 --> Total execution time: 0.0780
DEBUG - 2016-07-29 10:24:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759085
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:46 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:46 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ebeb23942afb435e90f98cd29cf54988', '114.91.137.232', '2016-07-29', '10:24:46', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:46 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:46 --> Total execution time: 0.0936
DEBUG - 2016-07-29 10:24:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759086
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:46 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:46 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d974fcd8435c44c486ba05a89ac93299', '114.91.137.232', '2016-07-29', '10:24:46', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:46 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:46 --> Total execution time: 0.0936
DEBUG - 2016-07-29 10:24:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759086
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:46 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:46 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5325507dc86649c19ef97ea5fdafc460', '114.91.137.232', '2016-07-29', '10:24:46', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:46 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:46 --> Total execution time: 0.0936
DEBUG - 2016-07-29 10:24:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759086
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:47 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:47 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e9c74cc12633482e85b289c43023c093', '114.91.137.232', '2016-07-29', '10:24:47', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:47 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:47 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:47 --> Total execution time: 0.0936
DEBUG - 2016-07-29 10:24:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759087
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:47 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:47 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5eb0d134588649a49259bada653e4b2c', '114.91.137.232', '2016-07-29', '10:24:48', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:48 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:48 --> Total execution time: 0.0780
DEBUG - 2016-07-29 10:24:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759088
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:48 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:48 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('083b9dca8a2a4ba1899c6665cc20ce78', '114.91.137.232', '2016-07-29', '10:24:48', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:48 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:48 --> Total execution time: 0.0624
DEBUG - 2016-07-29 10:24:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759088
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:24:48 --> Security Class Initialized
DEBUG - 2016-07-29 10:24:48 --> CRSF cookie Set
DEBUG - 2016-07-29 10:24:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:24:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:24:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('10abceb2dd7842e8bcbe8f2685c2662c', '114.91.137.232', '2016-07-29', '10:24:48', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4f966521686e562d0eb8e0a0f671434724c590eb')
DEBUG - 2016-07-29 10:24:48 --> 查询待审核订单
DEBUG - 2016-07-29 10:24:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:24:48 --> Total execution time: 0.0936
DEBUG - 2016-07-29 10:24:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759088
WHERE id = '4f966521686e562d0eb8e0a0f671434724c590eb'
DEBUG - 2016-07-29 10:26:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:26:30 --> CRSF cookie Set
DEBUG - 2016-07-29 10:26:30 --> Security Class Initialized
DEBUG - 2016-07-29 10:26:30 --> CRSF cookie Set
DEBUG - 2016-07-29 10:26:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:26:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa56566041ca1df7bf7692fd6df0f4de846542fc'
DEBUG - 2016-07-29 10:26:30 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('aa56566041ca1df7bf7692fd6df0f4de846542fc', '180.153.81.203', 1469759190, '__ci_last_regenerate|i:1469759190;')
DEBUG - 2016-07-29 10:26:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:26:30 --> Security Class Initialized
DEBUG - 2016-07-29 10:26:30 --> CRSF cookie Set
DEBUG - 2016-07-29 10:26:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:26:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa56566041ca1df7bf7692fd6df0f4de846542fc'
DEBUG - 2016-07-29 10:26:30 --> Total execution time: 0.0780
DEBUG - 2016-07-29 10:26:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759190
WHERE id = 'aa56566041ca1df7bf7692fd6df0f4de846542fc'
DEBUG - 2016-07-29 10:26:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:26:43 --> CRSF cookie Set
DEBUG - 2016-07-29 10:26:43 --> Security Class Initialized
DEBUG - 2016-07-29 10:26:43 --> CRSF cookie Set
DEBUG - 2016-07-29 10:26:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:26:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3d59a29ed7b9efc5b24862a80c478d2243a23819'
DEBUG - 2016-07-29 10:26:43 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3d59a29ed7b9efc5b24862a80c478d2243a23819', '180.153.206.21', 1469759203, '__ci_last_regenerate|i:1469759203;')
DEBUG - 2016-07-29 10:26:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:26:45 --> Security Class Initialized
DEBUG - 2016-07-29 10:26:45 --> CRSF cookie Set
DEBUG - 2016-07-29 10:26:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:26:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3d59a29ed7b9efc5b24862a80c478d2243a23819'
DEBUG - 2016-07-29 10:26:45 --> Total execution time: 0.0624
DEBUG - 2016-07-29 10:26:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759205
WHERE id = '3d59a29ed7b9efc5b24862a80c478d2243a23819'
DEBUG - 2016-07-29 10:26:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:26:54 --> CRSF cookie Set
DEBUG - 2016-07-29 10:26:54 --> Security Class Initialized
DEBUG - 2016-07-29 10:26:54 --> CRSF cookie Set
DEBUG - 2016-07-29 10:26:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:26:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9a89a710fd7e6a40e562dc14bba511eda82f084'
DEBUG - 2016-07-29 10:26:54 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d9a89a710fd7e6a40e562dc14bba511eda82f084', '180.153.206.38', 1469759214, '__ci_last_regenerate|i:1469759214;')
DEBUG - 2016-07-29 10:26:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:26:54 --> Security Class Initialized
DEBUG - 2016-07-29 10:26:54 --> CRSF cookie Set
DEBUG - 2016-07-29 10:26:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:26:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd9a89a710fd7e6a40e562dc14bba511eda82f084'
DEBUG - 2016-07-29 10:26:55 --> Total execution time: 0.0780
DEBUG - 2016-07-29 10:26:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759215
WHERE id = 'd9a89a710fd7e6a40e562dc14bba511eda82f084'
DEBUG - 2016-07-29 10:27:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:27:17 --> CRSF cookie Set
DEBUG - 2016-07-29 10:27:17 --> Security Class Initialized
DEBUG - 2016-07-29 10:27:17 --> CRSF cookie Set
DEBUG - 2016-07-29 10:27:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:27:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '28be80a6eb04bdc23e77dda0743ed42f29917d56'
DEBUG - 2016-07-29 10:27:17 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('28be80a6eb04bdc23e77dda0743ed42f29917d56', '180.153.163.186', 1469759237, '__ci_last_regenerate|i:1469759237;')
DEBUG - 2016-07-29 10:27:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:27:17 --> Security Class Initialized
DEBUG - 2016-07-29 10:27:17 --> CRSF cookie Set
DEBUG - 2016-07-29 10:27:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:27:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '28be80a6eb04bdc23e77dda0743ed42f29917d56'
DEBUG - 2016-07-29 10:27:17 --> Total execution time: 0.0780
DEBUG - 2016-07-29 10:27:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469759237
WHERE id = '28be80a6eb04bdc23e77dda0743ed42f29917d56'
DEBUG - 2016-07-29 10:49:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:49:00 --> Security Class Initialized
DEBUG - 2016-07-29 10:49:00 --> CRSF cookie Set
DEBUG - 2016-07-29 10:49:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:49:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:49:00 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'c69fbebe7ba5e5221fcd5f83dccd44b4ecf58c77'
DEBUG - 2016-07-29 10:49:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b73a519a51c14995aedf0c96f7c2cfba', '114.91.137.232', '2016-07-29', '10:49:00', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '2281f0d1b501404d9d9c2ca8332c259fe6f647d7')
DEBUG - 2016-07-29 10:49:00 --> 查询待审核订单
DEBUG - 2016-07-29 10:49:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:49:00 --> Total execution time: 0.1438
DEBUG - 2016-07-29 10:49:00 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2281f0d1b501404d9d9c2ca8332c259fe6f647d7', '114.91.137.232', 1469760540, '__ci_last_regenerate|i:1469760540;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-29 10:49:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:49:02 --> Security Class Initialized
DEBUG - 2016-07-29 10:49:02 --> CRSF cookie Set
DEBUG - 2016-07-29 10:49:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:49:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2281f0d1b501404d9d9c2ca8332c259fe6f647d7'
DEBUG - 2016-07-29 10:49:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('39294271812043ba9a18c0c59ff570e9', '114.91.137.232', '2016-07-29', '10:49:02', '120340234', '/admin/order/check/be33a89de87a45738a1b662c1ed8d821', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '2281f0d1b501404d9d9c2ca8332c259fe6f647d7')
DEBUG - 2016-07-29 10:49:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:49:02 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='be33a89de87a45738a1b662c1ed8d821' order by create_date_time desc
DEBUG - 2016-07-29 10:49:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:49:02 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='be33a89de87a45738a1b662c1ed8d821'    order by t1.lno asc
        
DEBUG - 2016-07-29 10:49:02 --> Total execution time: 0.1268
DEBUG - 2016-07-29 10:49:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469760542
WHERE id = '2281f0d1b501404d9d9c2ca8332c259fe6f647d7'
DEBUG - 2016-07-29 10:49:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:49:07 --> Security Class Initialized
DEBUG - 2016-07-29 10:49:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:49:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2281f0d1b501404d9d9c2ca8332c259fe6f647d7'
DEBUG - 2016-07-29 10:49:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1fe5c3473d4148bfb5b473d215a7a595', '114.91.137.232', '2016-07-29', '10:49:07', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '2281f0d1b501404d9d9c2ca8332c259fe6f647d7')
DEBUG - 2016-07-29 10:49:07 --> 审核订单
DEBUG - 2016-07-29 10:49:07 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'be33a89de87a45738a1b662c1ed8d821'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-29 10:49:07 --> 过程调用语句：  execute USP_APSOS_outorder 'be33a89de87a45738a1b662c1ed8d821'
ERROR - 2016-07-29 10:49:08 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-29 10:49:08 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-29 10:49:08 --> Total execution time: 0.3346
DEBUG - 2016-07-29 10:49:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469760548
WHERE id = '2281f0d1b501404d9d9c2ca8332c259fe6f647d7'
DEBUG - 2016-07-29 10:49:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:49:09 --> Security Class Initialized
DEBUG - 2016-07-29 10:49:09 --> CRSF cookie Set
DEBUG - 2016-07-29 10:49:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:49:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2281f0d1b501404d9d9c2ca8332c259fe6f647d7'
DEBUG - 2016-07-29 10:49:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e2fae5f2c66946459e033091aebfd9c9', '114.91.137.232', '2016-07-29', '10:49:09', '120340234', '/admin/order/check/be33a89de87a45738a1b662c1ed8d821', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '2281f0d1b501404d9d9c2ca8332c259fe6f647d7')
DEBUG - 2016-07-29 10:49:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:49:09 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='be33a89de87a45738a1b662c1ed8d821' order by create_date_time desc
DEBUG - 2016-07-29 10:49:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 10:49:09 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='be33a89de87a45738a1b662c1ed8d821'    order by t1.lno asc
        
DEBUG - 2016-07-29 10:49:09 --> Total execution time: 0.3924
DEBUG - 2016-07-29 10:49:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469760549
WHERE id = '2281f0d1b501404d9d9c2ca8332c259fe6f647d7'
DEBUG - 2016-07-29 10:49:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 10:49:13 --> Security Class Initialized
DEBUG - 2016-07-29 10:49:13 --> CRSF cookie Set
DEBUG - 2016-07-29 10:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 10:49:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2281f0d1b501404d9d9c2ca8332c259fe6f647d7'
DEBUG - 2016-07-29 10:49:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4365ff2f66fc4358a02ff8ce5606ece2', '114.91.137.232', '2016-07-29', '10:49:13', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '2281f0d1b501404d9d9c2ca8332c259fe6f647d7')
DEBUG - 2016-07-29 10:49:13 --> 查询待审核订单
DEBUG - 2016-07-29 10:49:13 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 10:49:13 --> Total execution time: 0.1098
DEBUG - 2016-07-29 10:49:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469760553
WHERE id = '2281f0d1b501404d9d9c2ca8332c259fe6f647d7'
DEBUG - 2016-07-29 13:13:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 13:13:40 --> CRSF cookie Set
DEBUG - 2016-07-29 13:13:40 --> Security Class Initialized
DEBUG - 2016-07-29 13:13:40 --> CRSF cookie Set
DEBUG - 2016-07-29 13:13:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 13:13:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:13:41 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ba4a054665a724510aa9e2ed8e83b357744c8bab', '114.91.137.232', 1469769221, '__ci_last_regenerate|i:1469769221;')
DEBUG - 2016-07-29 13:13:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 13:13:42 --> Security Class Initialized
DEBUG - 2016-07-29 13:13:42 --> CRSF cookie Set
DEBUG - 2016-07-29 13:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 13:13:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:13:42 --> Total execution time: 0.4090
DEBUG - 2016-07-29 13:13:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469769222
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:13:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 13:13:54 --> Security Class Initialized
DEBUG - 2016-07-29 13:13:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 13:13:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:13:54 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-29 13:13:54 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-29 13:13:54 --> 登录返回结果数：1
DEBUG - 2016-07-29 13:13:54 --> 成功登录
DEBUG - 2016-07-29 13:13:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469769234, data = '__ci_last_regenerate|i:1469769221;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:13:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 13:13:54 --> Security Class Initialized
DEBUG - 2016-07-29 13:13:54 --> CRSF cookie Set
DEBUG - 2016-07-29 13:13:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 13:13:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:13:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b0225338244a4767acadd24d05c7606b', '114.91.137.232', '2016-07-29', '13:13:54', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'ba4a054665a724510aa9e2ed8e83b357744c8bab')
DEBUG - 2016-07-29 13:13:54 --> 查询待审核订单
DEBUG - 2016-07-29 13:13:54 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 13:13:55 --> Total execution time: 0.3660
DEBUG - 2016-07-29 13:13:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469769235
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:13:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 13:13:57 --> Security Class Initialized
DEBUG - 2016-07-29 13:13:57 --> CRSF cookie Set
DEBUG - 2016-07-29 13:13:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 13:13:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:13:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ea6cdf8ad8d24baaad84967a7b1509c8', '114.91.137.232', '2016-07-29', '13:13:57', '120340234', '/admin/order/check/be33a89de87a45738a1b662c1ed8d821', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'ba4a054665a724510aa9e2ed8e83b357744c8bab')
DEBUG - 2016-07-29 13:13:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 13:13:57 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='be33a89de87a45738a1b662c1ed8d821' order by create_date_time desc
DEBUG - 2016-07-29 13:13:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 13:13:57 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='be33a89de87a45738a1b662c1ed8d821'    order by t1.lno asc
        
DEBUG - 2016-07-29 13:13:57 --> Total execution time: 0.4340
DEBUG - 2016-07-29 13:13:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469769237
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:14:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 13:14:05 --> Security Class Initialized
DEBUG - 2016-07-29 13:14:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 13:14:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:14:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('55912cff79c147e6a570f22cd6687c21', '114.91.137.232', '2016-07-29', '13:14:05', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'ba4a054665a724510aa9e2ed8e83b357744c8bab')
DEBUG - 2016-07-29 13:14:05 --> 审核订单
DEBUG - 2016-07-29 13:14:05 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'be33a89de87a45738a1b662c1ed8d821'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-29 13:14:05 --> 过程调用语句：  execute USP_APSOS_outorder 'be33a89de87a45738a1b662c1ed8d821'
ERROR - 2016-07-29 13:14:08 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-29 13:14:08 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-29 13:14:08 --> Total execution time: 3.3512
DEBUG - 2016-07-29 13:14:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469769248
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:14:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 13:14:08 --> Security Class Initialized
DEBUG - 2016-07-29 13:14:08 --> CRSF cookie Set
DEBUG - 2016-07-29 13:14:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 13:14:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:14:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('73aabae2d12441c08e441b8b78c79fd6', '114.91.137.232', '2016-07-29', '13:14:08', '120340234', '/admin/order/check/be33a89de87a45738a1b662c1ed8d821', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'ba4a054665a724510aa9e2ed8e83b357744c8bab')
DEBUG - 2016-07-29 13:14:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 13:14:09 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='be33a89de87a45738a1b662c1ed8d821' order by create_date_time desc
DEBUG - 2016-07-29 13:14:09 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='be33a89de87a45738a1b662c1ed8d821'
DEBUG - 2016-07-29 13:14:09 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='be33a89de87a45738a1b662c1ed8d821'    order by t1.lno asc
        
DEBUG - 2016-07-29 13:14:09 --> Total execution time: 0.9571
DEBUG - 2016-07-29 13:14:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469769249
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:14:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 13:14:55 --> Security Class Initialized
DEBUG - 2016-07-29 13:14:55 --> CRSF cookie Set
DEBUG - 2016-07-29 13:14:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 13:14:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:14:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('243958fb6fa74069b70037e554a2bd01', '114.91.137.232', '2016-07-29', '13:14:55', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'ba4a054665a724510aa9e2ed8e83b357744c8bab')
DEBUG - 2016-07-29 13:14:55 --> 查询待审核订单
DEBUG - 2016-07-29 13:14:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 13:14:55 --> Total execution time: 0.1370
DEBUG - 2016-07-29 13:14:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469769295
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:14:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 13:14:59 --> Security Class Initialized
DEBUG - 2016-07-29 13:14:59 --> CRSF cookie Set
DEBUG - 2016-07-29 13:14:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 13:14:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:14:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fb90e4c391bc48b6bfcb603a42b6d674', '114.91.137.232', '2016-07-29', '13:14:59', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'ba4a054665a724510aa9e2ed8e83b357744c8bab')
DEBUG - 2016-07-29 13:14:59 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-29 13:14:59 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-29 13:14:59 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-29 13:14:59 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-29 13:14:59 --> Total execution time: 0.2110
DEBUG - 2016-07-29 13:14:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469769299
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:15:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 13:15:02 --> Security Class Initialized
DEBUG - 2016-07-29 13:15:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 13:15:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:15:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4972c2b10d9f4d9c87dd26520e3fcb77', '114.91.137.232', '2016-07-29', '13:15:02', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'ba4a054665a724510aa9e2ed8e83b357744c8bab')
DEBUG - 2016-07-29 13:15:02 --> 审核订单
DEBUG - 2016-07-29 13:15:02 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '219f5787748b43f98ecbcf930a5fb3f2'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-29 13:15:02 --> 过程调用语句：  execute USP_APSOS_outorder '219f5787748b43f98ecbcf930a5fb3f2'
ERROR - 2016-07-29 13:15:03 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-29 13:15:03 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-29 13:15:03 --> Total execution time: 0.2390
DEBUG - 2016-07-29 13:15:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469769303
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:15:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 13:15:04 --> Security Class Initialized
DEBUG - 2016-07-29 13:15:04 --> CRSF cookie Set
DEBUG - 2016-07-29 13:15:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 13:15:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:15:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2a1a9f0b99ad4cebbebb5153ea321e7f', '114.91.137.232', '2016-07-29', '13:15:04', '120340234', '/admin/order/check/219f5787748b43f98ecbcf930a5fb3f2', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'ba4a054665a724510aa9e2ed8e83b357744c8bab')
DEBUG - 2016-07-29 13:15:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-29 13:15:04 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='219f5787748b43f98ecbcf930a5fb3f2' order by create_date_time desc
DEBUG - 2016-07-29 13:15:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='219f5787748b43f98ecbcf930a5fb3f2'
DEBUG - 2016-07-29 13:15:04 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='219f5787748b43f98ecbcf930a5fb3f2'    order by t1.lno asc
        
DEBUG - 2016-07-29 13:15:04 --> Total execution time: 0.4820
DEBUG - 2016-07-29 13:15:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469769304
WHERE id = 'ba4a054665a724510aa9e2ed8e83b357744c8bab'
DEBUG - 2016-07-29 13:17:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 13:17:02 --> CRSF cookie Set
DEBUG - 2016-07-29 13:17:02 --> Security Class Initialized
DEBUG - 2016-07-29 13:17:02 --> CRSF cookie Set
DEBUG - 2016-07-29 13:17:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 13:17:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '63664c661aecc35ff4493b2099029300f278b2da'
DEBUG - 2016-07-29 13:17:02 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-29 13:17:02 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-29 13:17:02 --> 登录返回结果数：0
DEBUG - 2016-07-29 13:17:02 --> Total execution time: 0.1330
DEBUG - 2016-07-29 13:17:02 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('63664c661aecc35ff4493b2099029300f278b2da', '180.153.214.181', 1469769422, '__ci_last_regenerate|i:1469769422;')
DEBUG - 2016-07-29 15:21:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 15:21:55 --> CRSF cookie Set
DEBUG - 2016-07-29 15:21:55 --> Security Class Initialized
DEBUG - 2016-07-29 15:21:55 --> CRSF cookie Set
DEBUG - 2016-07-29 15:21:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 15:21:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e509b154ad4b04fd3c0c8c64a9dd6e0d052e1859'
DEBUG - 2016-07-29 15:21:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 15:21:57 --> CRSF cookie Set
DEBUG - 2016-07-29 15:21:57 --> Security Class Initialized
DEBUG - 2016-07-29 15:21:57 --> CRSF cookie Set
DEBUG - 2016-07-29 15:21:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 15:21:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e509b154ad4b04fd3c0c8c64a9dd6e0d052e1859', '114.91.137.232', 1469776917, '__ci_last_regenerate|i:1469776917;')
DEBUG - 2016-07-29 15:21:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8d10a1d433f71b8f8632431eedd26d163dc75fab'
DEBUG - 2016-07-29 15:21:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8d10a1d433f71b8f8632431eedd26d163dc75fab', '114.91.137.232', 1469776917, '__ci_last_regenerate|i:1469776917;')
DEBUG - 2016-07-29 15:21:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 15:21:57 --> Security Class Initialized
DEBUG - 2016-07-29 15:21:57 --> CRSF cookie Set
DEBUG - 2016-07-29 15:21:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 15:21:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8d10a1d433f71b8f8632431eedd26d163dc75fab'
DEBUG - 2016-07-29 15:21:57 --> Total execution time: 0.3240
DEBUG - 2016-07-29 15:21:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469776917
WHERE id = '8d10a1d433f71b8f8632431eedd26d163dc75fab'
DEBUG - 2016-07-29 15:21:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 15:21:57 --> CRSF cookie Set
DEBUG - 2016-07-29 15:21:57 --> Security Class Initialized
DEBUG - 2016-07-29 15:21:57 --> CRSF cookie Set
DEBUG - 2016-07-29 15:21:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 15:21:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cd2bcf84d2f5822bd7fb686aacace8d451053e53'
DEBUG - 2016-07-29 15:21:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('cd2bcf84d2f5822bd7fb686aacace8d451053e53', '119.147.146.189', 1469776917, '__ci_last_regenerate|i:1469776917;')
DEBUG - 2016-07-29 15:21:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 15:21:58 --> Security Class Initialized
DEBUG - 2016-07-29 15:21:58 --> CRSF cookie Set
DEBUG - 2016-07-29 15:21:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 15:21:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cd2bcf84d2f5822bd7fb686aacace8d451053e53'
DEBUG - 2016-07-29 15:21:58 --> Total execution time: 0.0840
DEBUG - 2016-07-29 15:21:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469776918
WHERE id = 'cd2bcf84d2f5822bd7fb686aacace8d451053e53'
DEBUG - 2016-07-29 15:21:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 15:21:58 --> Security Class Initialized
DEBUG - 2016-07-29 15:21:58 --> CRSF cookie Set
DEBUG - 2016-07-29 15:21:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 15:21:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cd2bcf84d2f5822bd7fb686aacace8d451053e53'
DEBUG - 2016-07-29 15:21:58 --> Total execution time: 0.0770
DEBUG - 2016-07-29 15:21:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469776918
WHERE id = 'cd2bcf84d2f5822bd7fb686aacace8d451053e53'
DEBUG - 2016-07-29 15:21:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 15:21:58 --> Security Class Initialized
DEBUG - 2016-07-29 15:21:58 --> CRSF cookie Set
DEBUG - 2016-07-29 15:21:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-29 15:21:58 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-07-29 15:22:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 15:22:12 --> Security Class Initialized
DEBUG - 2016-07-29 15:22:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 15:22:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8d10a1d433f71b8f8632431eedd26d163dc75fab'
DEBUG - 2016-07-29 15:22:13 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-29 15:22:13 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-29 15:22:13 --> 登录返回结果数：1
DEBUG - 2016-07-29 15:22:13 --> 成功登录
DEBUG - 2016-07-29 15:22:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469776933, data = '__ci_last_regenerate|i:1469776917;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '8d10a1d433f71b8f8632431eedd26d163dc75fab'
DEBUG - 2016-07-29 15:22:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 15:22:13 --> Security Class Initialized
DEBUG - 2016-07-29 15:22:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 15:22:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8d10a1d433f71b8f8632431eedd26d163dc75fab'
DEBUG - 2016-07-29 15:22:13 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-29 15:22:13 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-29 15:22:13 --> 登录返回结果数：1
DEBUG - 2016-07-29 15:22:13 --> 成功登录
DEBUG - 2016-07-29 15:22:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469776933
WHERE id = '8d10a1d433f71b8f8632431eedd26d163dc75fab'
DEBUG - 2016-07-29 15:22:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 15:22:13 --> Security Class Initialized
DEBUG - 2016-07-29 15:22:13 --> CRSF cookie Set
DEBUG - 2016-07-29 15:22:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 15:22:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8d10a1d433f71b8f8632431eedd26d163dc75fab'
DEBUG - 2016-07-29 15:22:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('34620e271c604ccb8b950edc87f202f2', '114.91.137.232', '2016-07-29', '15:22:13', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '8d10a1d433f71b8f8632431eedd26d163dc75fab')
DEBUG - 2016-07-29 15:22:13 --> 查询待审核订单
DEBUG - 2016-07-29 15:22:13 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 15:22:13 --> Total execution time: 0.3440
DEBUG - 2016-07-29 15:22:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469776933
WHERE id = '8d10a1d433f71b8f8632431eedd26d163dc75fab'
DEBUG - 2016-07-29 18:47:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 18:47:58 --> CRSF cookie Set
DEBUG - 2016-07-29 18:47:58 --> Security Class Initialized
DEBUG - 2016-07-29 18:47:58 --> CRSF cookie Set
DEBUG - 2016-07-29 18:47:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 18:47:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '33144cf35eafe71eae8fc465788795278f832e8b'
DEBUG - 2016-07-29 18:47:59 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('33144cf35eafe71eae8fc465788795278f832e8b', '114.91.137.232', 1469789279, '__ci_last_regenerate|i:1469789279;')
DEBUG - 2016-07-29 18:47:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 18:47:59 --> Security Class Initialized
DEBUG - 2016-07-29 18:47:59 --> CRSF cookie Set
DEBUG - 2016-07-29 18:47:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 18:47:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '33144cf35eafe71eae8fc465788795278f832e8b'
DEBUG - 2016-07-29 18:47:59 --> Total execution time: 0.1560
DEBUG - 2016-07-29 18:47:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469789279
WHERE id = '33144cf35eafe71eae8fc465788795278f832e8b'
DEBUG - 2016-07-29 18:48:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 18:48:06 --> Security Class Initialized
DEBUG - 2016-07-29 18:48:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 18:48:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '33144cf35eafe71eae8fc465788795278f832e8b'
DEBUG - 2016-07-29 18:48:06 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-29 18:48:06 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-29 18:48:06 --> 登录返回结果数：1
DEBUG - 2016-07-29 18:48:06 --> 成功登录
DEBUG - 2016-07-29 18:48:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469789286, data = '__ci_last_regenerate|i:1469789279;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '33144cf35eafe71eae8fc465788795278f832e8b'
DEBUG - 2016-07-29 18:48:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-29 18:48:06 --> Security Class Initialized
DEBUG - 2016-07-29 18:48:06 --> CRSF cookie Set
DEBUG - 2016-07-29 18:48:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-29 18:48:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '33144cf35eafe71eae8fc465788795278f832e8b'
DEBUG - 2016-07-29 18:48:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('954b0a58f08942489603b3f73ea27a5e', '114.91.137.232', '2016-07-29', '18:48:06', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '33144cf35eafe71eae8fc465788795278f832e8b')
DEBUG - 2016-07-29 18:48:06 --> 查询待审核订单
DEBUG - 2016-07-29 18:48:06 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-29 18:48:06 --> Total execution time: 0.2652
DEBUG - 2016-07-29 18:48:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469789286
WHERE id = '33144cf35eafe71eae8fc465788795278f832e8b'
