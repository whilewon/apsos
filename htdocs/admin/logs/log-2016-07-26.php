<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-26 10:52:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:52:51 --> CRSF cookie Set
DEBUG - 2016-07-26 10:52:51 --> Security Class Initialized
DEBUG - 2016-07-26 10:52:51 --> CRSF cookie Set
DEBUG - 2016-07-26 10:52:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:52:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:52:51 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f5111404838075d0e07dd4d8639a95345781dcab', '114.91.129.78', 1469501571, '__ci_last_regenerate|i:1469501571;')
DEBUG - 2016-07-26 10:52:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:52:51 --> Security Class Initialized
DEBUG - 2016-07-26 10:52:51 --> CRSF cookie Set
DEBUG - 2016-07-26 10:52:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:52:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:52:51 --> Total execution time: 0.1010
DEBUG - 2016-07-26 10:52:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501571
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:00 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:00 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-26 10:53:00 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-26 10:53:00 --> 登录返回结果数：1
DEBUG - 2016-07-26 10:53:00 --> 成功登录
DEBUG - 2016-07-26 10:53:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501580, data = '__ci_last_regenerate|i:1469501571;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:00 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:00 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ba776a3a89234f33b18c7442b455264b', '114.91.129.78', '2016-07-26', '10:53:00', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:00 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-26 10:53:00 --> Total execution time: 0.1910
DEBUG - 2016-07-26 10:53:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501580
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:04 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:04 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d99c892ac6844a0d868cd05a84ab3f74', '114.91.129.78', '2016-07-26', '10:53:04', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:04 --> 查询待审核订单
DEBUG - 2016-07-26 10:53:04 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-26 10:53:05 --> Total execution time: 0.1930
DEBUG - 2016-07-26 10:53:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501585
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:08 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:08 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c294e6cae0064bf595808c0e5d6c8a8b', '114.91.129.78', '2016-07-26', '10:53:08', '120340234', '/admin/order/check/bf4a8f5009414d71958ee5b901b2e98a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 10:53:08 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='bf4a8f5009414d71958ee5b901b2e98a' order by create_date_time desc
DEBUG - 2016-07-26 10:53:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 10:53:08 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='bf4a8f5009414d71958ee5b901b2e98a'    order by t1.lno asc
        
DEBUG - 2016-07-26 10:53:08 --> Total execution time: 0.4170
DEBUG - 2016-07-26 10:53:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501588
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:13 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f500ec448c1847aba66043e646897c90', '114.91.129.78', '2016-07-26', '10:53:13', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:13 --> 审核订单
DEBUG - 2016-07-26 10:53:13 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'bf4a8f5009414d71958ee5b901b2e98a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-26 10:53:13 --> 过程调用语句：  execute USP_APSOS_outorder 'bf4a8f5009414d71958ee5b901b2e98a'
ERROR - 2016-07-26 10:53:16 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-26 10:53:16 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-26 10:53:16 --> Total execution time: 3.1662
DEBUG - 2016-07-26 10:53:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501596
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:16 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:16 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1d248657d2734cc488ecec8ef1d462df', '114.91.129.78', '2016-07-26', '10:53:16', '120340234', '/admin/order/check/bf4a8f5009414d71958ee5b901b2e98a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:16 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 10:53:16 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='bf4a8f5009414d71958ee5b901b2e98a' order by create_date_time desc
DEBUG - 2016-07-26 10:53:16 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 10:53:16 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='bf4a8f5009414d71958ee5b901b2e98a'    order by t1.lno asc
        
DEBUG - 2016-07-26 10:53:16 --> Total execution time: 0.1180
DEBUG - 2016-07-26 10:53:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501596
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:20 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:20 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f835da63064741ce877908694fc19320', '114.91.129.78', '2016-07-26', '10:53:20', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:20 --> 查询待审核订单
DEBUG - 2016-07-26 10:53:20 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-26 10:53:20 --> Total execution time: 0.1010
DEBUG - 2016-07-26 10:53:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501600
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:22 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:22 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f4afb1f812e14501bcf48f70636d587d', '114.91.129.78', '2016-07-26', '10:53:22', '120340234', '/admin/order/check/e9fcda1bfe1d4d879cfcedd8ff2af732', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e9fcda1bfe1d4d879cfcedd8ff2af732'
DEBUG - 2016-07-26 10:53:22 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e9fcda1bfe1d4d879cfcedd8ff2af732' order by create_date_time desc
DEBUG - 2016-07-26 10:53:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e9fcda1bfe1d4d879cfcedd8ff2af732'
DEBUG - 2016-07-26 10:53:22 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e9fcda1bfe1d4d879cfcedd8ff2af732'    order by t1.lno asc
        
DEBUG - 2016-07-26 10:53:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:22 --> Total execution time: 0.1430
DEBUG - 2016-07-26 10:53:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501602
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:22 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:22 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:22 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '64550273515ec8720d794739d22ffc8f7face435'
DEBUG - 2016-07-26 10:53:22 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('64550273515ec8720d794739d22ffc8f7face435', '101.226.33.201', 1469501602, '__ci_last_regenerate|i:1469501602;')
DEBUG - 2016-07-26 10:53:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:22 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:22 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:22 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e368e684f8914a0d2ff1779f8f50d5e11e502807'
DEBUG - 2016-07-26 10:53:22 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e368e684f8914a0d2ff1779f8f50d5e11e502807', '101.226.33.202', 1469501602, '__ci_last_regenerate|i:1469501602;')
DEBUG - 2016-07-26 10:53:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:22 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:22 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e368e684f8914a0d2ff1779f8f50d5e11e502807'
DEBUG - 2016-07-26 10:53:22 --> Total execution time: 0.0680
DEBUG - 2016-07-26 10:53:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501602
WHERE id = 'e368e684f8914a0d2ff1779f8f50d5e11e502807'
DEBUG - 2016-07-26 10:53:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:25 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('904bf96e4b964d1ca6908d4705a92029', '114.91.129.78', '2016-07-26', '10:53:25', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:25 --> 审核订单
DEBUG - 2016-07-26 10:53:25 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e9fcda1bfe1d4d879cfcedd8ff2af732'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-26 10:53:25 --> 过程调用语句：  execute USP_APSOS_outorder 'e9fcda1bfe1d4d879cfcedd8ff2af732'
DEBUG - 2016-07-26 10:53:25 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340234', 'e9fcda1bfe1d4d879cfcedd8ff2af732', '2', '', '3824eb2830a148c5bbf29e76f5fe319a', '2016-07-26 10:53:25')
DEBUG - 2016-07-26 10:53:25 --> 该订单状态更新成功:2
DEBUG - 2016-07-26 10:53:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e9fcda1bfe1d4d879cfcedd8ff2af732'
DEBUG - 2016-07-26 10:53:25 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-07-26 10:53:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:27 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:27 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6ba4ea8323824102bc2abab8da51ce58', '114.91.129.78', '2016-07-26', '10:53:27', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:27 --> 查询待审核订单
DEBUG - 2016-07-26 10:53:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-26 10:53:27 --> Total execution time: 0.0970
DEBUG - 2016-07-26 10:53:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501607
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:28 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-26 10:53:28 --> Total execution time: 3.3862
DEBUG - 2016-07-26 10:53:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501608
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:29 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:29 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7489edbdb2f440b9a80e9faebd8f0367', '114.91.129.78', '2016-07-26', '10:53:29', '120340234', '/admin/order/check/13122cd6eb9f4888b3f8edb469eca427', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='13122cd6eb9f4888b3f8edb469eca427'
DEBUG - 2016-07-26 10:53:29 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='13122cd6eb9f4888b3f8edb469eca427' order by create_date_time desc
DEBUG - 2016-07-26 10:53:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='13122cd6eb9f4888b3f8edb469eca427'
DEBUG - 2016-07-26 10:53:29 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='13122cd6eb9f4888b3f8edb469eca427'    order by t1.lno asc
        
DEBUG - 2016-07-26 10:53:29 --> Total execution time: 0.1020
DEBUG - 2016-07-26 10:53:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501609
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:30 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:30 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:30 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '82dde527f815a821f0a65db022f9d9de38012362'
DEBUG - 2016-07-26 10:53:30 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('82dde527f815a821f0a65db022f9d9de38012362', '101.226.33.204', 1469501610, '__ci_last_regenerate|i:1469501610;')
DEBUG - 2016-07-26 10:53:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:32 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('87d3eaa525b24c39b85a7c7025d90f72', '114.91.129.78', '2016-07-26', '10:53:32', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:32 --> 审核订单
DEBUG - 2016-07-26 10:53:32 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '13122cd6eb9f4888b3f8edb469eca427'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-26 10:53:32 --> 过程调用语句：  execute USP_APSOS_outorder '13122cd6eb9f4888b3f8edb469eca427'
DEBUG - 2016-07-26 10:53:32 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340234', '13122cd6eb9f4888b3f8edb469eca427', '2', '', 'c7196f1a88c44e6a84122a7c899f335c', '2016-07-26 10:53:32')
DEBUG - 2016-07-26 10:53:32 --> 该订单状态更新成功:2
DEBUG - 2016-07-26 10:53:32 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='13122cd6eb9f4888b3f8edb469eca427'
DEBUG - 2016-07-26 10:53:32 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-07-26 10:53:33 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-26 10:53:33 --> Total execution time: 0.6920
DEBUG - 2016-07-26 10:53:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501613
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:33 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:33 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('016d70fc80b0466cab38c2e526b45296', '114.91.129.78', '2016-07-26', '10:53:33', '120340234', '/admin/order/check/13122cd6eb9f4888b3f8edb469eca427', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='13122cd6eb9f4888b3f8edb469eca427'
DEBUG - 2016-07-26 10:53:33 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='13122cd6eb9f4888b3f8edb469eca427' order by create_date_time desc
DEBUG - 2016-07-26 10:53:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='13122cd6eb9f4888b3f8edb469eca427'
DEBUG - 2016-07-26 10:53:33 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='13122cd6eb9f4888b3f8edb469eca427'    order by t1.lno asc
        
DEBUG - 2016-07-26 10:53:33 --> Total execution time: 0.0980
DEBUG - 2016-07-26 10:53:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501613
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:37 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:37 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:37 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0b4098921f803a21f0ce76c4b2fe000424a5e826'
DEBUG - 2016-07-26 10:53:37 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0b4098921f803a21f0ce76c4b2fe000424a5e826', '180.153.163.190', 1469501617, '__ci_last_regenerate|i:1469501617;')
DEBUG - 2016-07-26 10:53:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:37 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:37 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:37 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:37 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0b4098921f803a21f0ce76c4b2fe000424a5e826'
DEBUG - 2016-07-26 10:53:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:37 --> Total execution time: 0.0980
DEBUG - 2016-07-26 10:53:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501617
WHERE id = '0b4098921f803a21f0ce76c4b2fe000424a5e826'
DEBUG - 2016-07-26 10:53:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('890ba60d715c4357b0a11890fe6cd5da', '114.91.129.78', '2016-07-26', '10:53:37', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:37 --> 查询待审核订单
DEBUG - 2016-07-26 10:53:37 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-26 10:53:37 --> Total execution time: 0.1510
DEBUG - 2016-07-26 10:53:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501617
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:41 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:41 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a32a21715f3049268d6ed65a4154cfa4', '114.91.129.78', '2016-07-26', '10:53:41', '120340234', '/admin/order/check/bf4a8f5009414d71958ee5b901b2e98a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:41 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 10:53:41 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='bf4a8f5009414d71958ee5b901b2e98a' order by create_date_time desc
DEBUG - 2016-07-26 10:53:41 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 10:53:41 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='bf4a8f5009414d71958ee5b901b2e98a'    order by t1.lno asc
        
DEBUG - 2016-07-26 10:53:41 --> Total execution time: 0.1370
DEBUG - 2016-07-26 10:53:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501621
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:45 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('622f44d5fbd442429018bd4b98449486', '114.91.129.78', '2016-07-26', '10:53:45', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:45 --> 审核订单
DEBUG - 2016-07-26 10:53:45 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'bf4a8f5009414d71958ee5b901b2e98a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-26 10:53:45 --> 过程调用语句：  execute USP_APSOS_outorder 'bf4a8f5009414d71958ee5b901b2e98a'
ERROR - 2016-07-26 10:53:46 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-26 10:53:46 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-26 10:53:46 --> Total execution time: 0.8150
DEBUG - 2016-07-26 10:53:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501626
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:46 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:46 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4b4c2e7622cc4be18555f26ec63921cc', '114.91.129.78', '2016-07-26', '10:53:46', '120340234', '/admin/order/check/bf4a8f5009414d71958ee5b901b2e98a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 10:53:46 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='bf4a8f5009414d71958ee5b901b2e98a' order by create_date_time desc
DEBUG - 2016-07-26 10:53:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 10:53:46 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='bf4a8f5009414d71958ee5b901b2e98a'    order by t1.lno asc
        
DEBUG - 2016-07-26 10:53:46 --> Total execution time: 0.1370
DEBUG - 2016-07-26 10:53:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501626
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:53:55 --> Security Class Initialized
DEBUG - 2016-07-26 10:53:55 --> CRSF cookie Set
DEBUG - 2016-07-26 10:53:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:53:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:53:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('30d35fd2fa344b4eb80dfa55a20b4f55', '114.91.129.78', '2016-07-26', '10:53:55', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:53:55 --> 查询待审核订单
DEBUG - 2016-07-26 10:53:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-26 10:53:55 --> Total execution time: 0.1010
DEBUG - 2016-07-26 10:53:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501635
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:56:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:56:12 --> Security Class Initialized
DEBUG - 2016-07-26 10:56:12 --> CRSF cookie Set
DEBUG - 2016-07-26 10:56:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:56:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:56:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d1248156b86c46029d0a17ec2c740d6e', '114.91.129.78', '2016-07-26', '10:56:12', '120340234', '/admin/order/check/bf4a8f5009414d71958ee5b901b2e98a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:56:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 10:56:12 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='bf4a8f5009414d71958ee5b901b2e98a' order by create_date_time desc
DEBUG - 2016-07-26 10:56:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 10:56:12 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='bf4a8f5009414d71958ee5b901b2e98a'    order by t1.lno asc
        
DEBUG - 2016-07-26 10:56:12 --> Total execution time: 0.1070
DEBUG - 2016-07-26 10:56:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501772
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:56:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:56:17 --> Security Class Initialized
DEBUG - 2016-07-26 10:56:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:56:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:56:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('552088bf226842688771550930547022', '114.91.129.78', '2016-07-26', '10:56:17', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:56:17 --> 审核订单
DEBUG - 2016-07-26 10:56:17 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'bf4a8f5009414d71958ee5b901b2e98a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-26 10:56:17 --> 过程调用语句：  execute USP_APSOS_outorder 'bf4a8f5009414d71958ee5b901b2e98a'
ERROR - 2016-07-26 10:56:17 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-26 10:56:17 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-26 10:56:17 --> Total execution time: 0.6670
DEBUG - 2016-07-26 10:56:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501777
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:56:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:56:17 --> Security Class Initialized
DEBUG - 2016-07-26 10:56:17 --> CRSF cookie Set
DEBUG - 2016-07-26 10:56:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:56:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:56:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('63751e5ab8954dcfa259a5351e0b8558', '114.91.129.78', '2016-07-26', '10:56:18', '120340234', '/admin/order/check/bf4a8f5009414d71958ee5b901b2e98a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:56:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 10:56:18 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='bf4a8f5009414d71958ee5b901b2e98a' order by create_date_time desc
DEBUG - 2016-07-26 10:56:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 10:56:18 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='bf4a8f5009414d71958ee5b901b2e98a'    order by t1.lno asc
        
DEBUG - 2016-07-26 10:56:18 --> Total execution time: 0.1040
DEBUG - 2016-07-26 10:56:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501778
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:56:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 10:56:20 --> Security Class Initialized
DEBUG - 2016-07-26 10:56:20 --> CRSF cookie Set
DEBUG - 2016-07-26 10:56:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 10:56:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 10:56:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0cc84ef241eb446688c946355891af7a', '114.91.129.78', '2016-07-26', '10:56:20', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'f5111404838075d0e07dd4d8639a95345781dcab')
DEBUG - 2016-07-26 10:56:20 --> 查询待审核订单
DEBUG - 2016-07-26 10:56:20 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-26 10:56:20 --> Total execution time: 0.0910
DEBUG - 2016-07-26 10:56:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469501780
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 11:12:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 11:12:10 --> Security Class Initialized
DEBUG - 2016-07-26 11:12:10 --> CRSF cookie Set
DEBUG - 2016-07-26 11:12:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 11:12:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 11:12:10 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'f5111404838075d0e07dd4d8639a95345781dcab'
DEBUG - 2016-07-26 11:12:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('38fa86ce26d44cef941926c7e20a4c86', '114.91.129.78', '2016-07-26', '11:12:10', '120340234', '/admin/order/check/bf4a8f5009414d71958ee5b901b2e98a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '0200d3048ac562f7541f54d7ad857b23eac6d6cc')
DEBUG - 2016-07-26 11:12:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 11:12:10 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='bf4a8f5009414d71958ee5b901b2e98a' order by create_date_time desc
DEBUG - 2016-07-26 11:12:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 11:12:10 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='bf4a8f5009414d71958ee5b901b2e98a'    order by t1.lno asc
        
DEBUG - 2016-07-26 11:12:10 --> Total execution time: 0.1560
DEBUG - 2016-07-26 11:12:10 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0200d3048ac562f7541f54d7ad857b23eac6d6cc', '114.91.129.78', 1469502730, '__ci_last_regenerate|i:1469502730;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-26 12:06:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 12:06:54 --> Security Class Initialized
DEBUG - 2016-07-26 12:06:54 --> CRSF cookie Set
DEBUG - 2016-07-26 12:06:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 12:06:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0200d3048ac562f7541f54d7ad857b23eac6d6cc'
DEBUG - 2016-07-26 12:06:54 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '0200d3048ac562f7541f54d7ad857b23eac6d6cc'
DEBUG - 2016-07-26 12:06:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('145e0556cf5a40a3a7aa58d1c67b6f5d', '114.91.129.78', '2016-07-26', '12:06:54', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '0d8bd8f9a4be089c8b4227f0c875aaa178d196e1')
DEBUG - 2016-07-26 12:06:54 --> 查询待审核订单
DEBUG - 2016-07-26 12:06:54 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-26 12:06:54 --> Total execution time: 0.2184
DEBUG - 2016-07-26 12:06:54 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0d8bd8f9a4be089c8b4227f0c875aaa178d196e1', '114.91.129.78', 1469506014, '__ci_last_regenerate|i:1469506014;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-26 12:06:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 12:06:57 --> Security Class Initialized
DEBUG - 2016-07-26 12:06:57 --> CRSF cookie Set
DEBUG - 2016-07-26 12:06:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 12:06:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0d8bd8f9a4be089c8b4227f0c875aaa178d196e1'
DEBUG - 2016-07-26 12:06:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5c23c206bf694275ba611d91f76f1c9a', '114.91.129.78', '2016-07-26', '12:06:57', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '0d8bd8f9a4be089c8b4227f0c875aaa178d196e1')
DEBUG - 2016-07-26 12:06:57 --> 查询待审核订单
DEBUG - 2016-07-26 12:06:57 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-26 12:06:57 --> Total execution time: 0.0936
DEBUG - 2016-07-26 12:06:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469506017
WHERE id = '0d8bd8f9a4be089c8b4227f0c875aaa178d196e1'
DEBUG - 2016-07-26 13:19:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 13:19:41 --> Security Class Initialized
DEBUG - 2016-07-26 13:19:41 --> CRSF cookie Set
DEBUG - 2016-07-26 13:19:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 13:19:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0d8bd8f9a4be089c8b4227f0c875aaa178d196e1'
DEBUG - 2016-07-26 13:19:42 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '0d8bd8f9a4be089c8b4227f0c875aaa178d196e1'
DEBUG - 2016-07-26 13:19:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('661021e2f93c429f8e6255762be4d926', '114.91.129.78', '2016-07-26', '13:19:42', '120340234', '/admin/order/check/bf4a8f5009414d71958ee5b901b2e98a', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '5656bf337015c05716e2543a366f7e826ed86493')
DEBUG - 2016-07-26 13:19:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 13:19:42 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='bf4a8f5009414d71958ee5b901b2e98a' order by create_date_time desc
DEBUG - 2016-07-26 13:19:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='bf4a8f5009414d71958ee5b901b2e98a'
DEBUG - 2016-07-26 13:19:42 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='bf4a8f5009414d71958ee5b901b2e98a'    order by t1.lno asc
        
DEBUG - 2016-07-26 13:19:42 --> Total execution time: 0.1872
DEBUG - 2016-07-26 13:19:42 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5656bf337015c05716e2543a366f7e826ed86493', '114.91.129.78', 1469510382, '__ci_last_regenerate|i:1469510382;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-26 13:56:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-26 13:56:03 --> Security Class Initialized
DEBUG - 2016-07-26 13:56:03 --> CRSF cookie Set
DEBUG - 2016-07-26 13:56:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-26 13:56:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5656bf337015c05716e2543a366f7e826ed86493'
DEBUG - 2016-07-26 13:56:03 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '5656bf337015c05716e2543a366f7e826ed86493'
DEBUG - 2016-07-26 13:56:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('32efeaa35a7c462aa4ebd1d4756e4fb1', '114.91.129.78', '2016-07-26', '13:56:03', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'd22e79e734739d910982701a881c7f379dca841f')
DEBUG - 2016-07-26 13:56:03 --> 查询待审核订单
DEBUG - 2016-07-26 13:56:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-26 13:56:03 --> Total execution time: 0.1092
DEBUG - 2016-07-26 13:56:03 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d22e79e734739d910982701a881c7f379dca841f', '114.91.129.78', 1469512563, '__ci_last_regenerate|i:1469512563;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
