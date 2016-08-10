<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-16 15:09:12 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:09:12 --> CRSF cookie Set
DEBUG - 2016-06-16 15:09:12 --> Security Class Initialized
DEBUG - 2016-06-16 15:09:12 --> CRSF cookie Set
DEBUG - 2016-06-16 15:09:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:09:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:09:13 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ad04089df5200bf1cd319b254ea2a5377403652d', '114.91.131.17', 1466060953, '__ci_last_regenerate|i:1466060953;')
DEBUG - 2016-06-16 15:09:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:09:13 --> Security Class Initialized
DEBUG - 2016-06-16 15:09:13 --> CRSF cookie Set
DEBUG - 2016-06-16 15:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:09:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:09:13 --> Total execution time: 0.1830
DEBUG - 2016-06-16 15:09:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466060953
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:09:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:09:15 --> Security Class Initialized
DEBUG - 2016-06-16 15:09:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:09:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:09:15 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-16 15:09:15 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-16 15:09:15 --> 登录返回结果数：1
DEBUG - 2016-06-16 15:09:15 --> 成功登录
DEBUG - 2016-06-16 15:09:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466060955, data = '__ci_last_regenerate|i:1466060953;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:09:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:09:15 --> Security Class Initialized
DEBUG - 2016-06-16 15:09:15 --> CRSF cookie Set
DEBUG - 2016-06-16 15:09:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:09:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:09:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2bf1f22ccc354e8b8e325c63760b2f0c', '114.91.131.17', '2016-06-16', '15:09:15', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:09:16 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:09:16 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:09:16 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:09:16 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:09:16 --> Total execution time: 0.4770
DEBUG - 2016-06-16 15:09:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466060956
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:09:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:09:44 --> Security Class Initialized
DEBUG - 2016-06-16 15:09:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:09:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:09:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('94788c06a64d41ca82710191638f2934', '114.91.131.17', '2016-06-16', '15:09:44', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:09:44 --> 审核订单
DEBUG - 2016-06-16 15:09:44 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:09:44 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:09:50 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:09:50 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:09:50 --> Total execution time: 5.6323
DEBUG - 2016-06-16 15:09:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466060990
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:09:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:09:50 --> Security Class Initialized
DEBUG - 2016-06-16 15:09:50 --> CRSF cookie Set
DEBUG - 2016-06-16 15:09:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:09:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:09:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('10eccec169174b8cad704fc85cfac6a7', '114.91.131.17', '2016-06-16', '15:09:50', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:09:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:09:50 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:09:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:09:50 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:09:50 --> Total execution time: 0.2380
DEBUG - 2016-06-16 15:09:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466060990
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:00 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b3f04f3631b841f8be024b23aa06f0f4', '114.91.131.17', '2016-06-16', '15:10:00', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:00 --> 审核订单
DEBUG - 2016-06-16 15:10:00 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:10:00 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:10:00 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:10:00 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:10:00 --> Total execution time: 0.2110
DEBUG - 2016-06-16 15:10:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061000
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:00 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:00 --> CRSF cookie Set
DEBUG - 2016-06-16 15:10:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1d217fd8a30f426c9d263888b0245596', '114.91.131.17', '2016-06-16', '15:10:00', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:00 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:10:00 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:10:00 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:10:00 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:10:00 --> Total execution time: 0.1970
DEBUG - 2016-06-16 15:10:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061000
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:11 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a02f752f2dd64a1bacad7a618d8f956d', '114.91.131.17', '2016-06-16', '15:10:11', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:11 --> 审核订单
DEBUG - 2016-06-16 15:10:11 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:10:11 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:10:11 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:10:11 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:10:11 --> Total execution time: 0.1570
DEBUG - 2016-06-16 15:10:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061011
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:11 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:11 --> CRSF cookie Set
DEBUG - 2016-06-16 15:10:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cde38ff8d0124438917810851e5cbe52', '114.91.131.17', '2016-06-16', '15:10:11', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:10:11 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:10:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:10:12 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:10:12 --> Total execution time: 0.7840
DEBUG - 2016-06-16 15:10:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061012
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:15 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:15 --> CRSF cookie Set
DEBUG - 2016-06-16 15:10:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('babac7b1487b4a9aac04661c54d9f74d', '114.91.131.17', '2016-06-16', '15:10:15', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02?uuid=e71823512f2a48bbb32dae54092ddd02&consignee_name=%E6%AF%95%E6%AD%A3%E5%B9%B3&telphone=13700627609&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:10:15 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:10:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:10:15 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:10:15 --> Total execution time: 0.2270
DEBUG - 2016-06-16 15:10:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061015
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:22 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c24be4f77d5c4ba5b651a65a62c84eb7', '114.91.131.17', '2016-06-16', '15:10:22', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:22 --> 审核订单
DEBUG - 2016-06-16 15:10:22 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:10:22 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:10:22 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:10:22 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:10:22 --> Total execution time: 0.1910
DEBUG - 2016-06-16 15:10:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061022
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:23 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:23 --> CRSF cookie Set
DEBUG - 2016-06-16 15:10:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('eacecf1513be4ac88a8b5fe951b57830', '114.91.131.17', '2016-06-16', '15:10:23', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02?uuid=e71823512f2a48bbb32dae54092ddd02&consignee_name=%E6%AF%95%E6%AD%A3%E5%B9%B3&telphone=13700627609&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:10:23 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:10:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:10:23 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:10:23 --> Total execution time: 0.1700
DEBUG - 2016-06-16 15:10:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061023
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:26 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:26 --> CRSF cookie Set
DEBUG - 2016-06-16 15:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9f0fb33bdb0f4376a1fe0ae9ae1a081d', '114.91.131.17', '2016-06-16', '15:10:26', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:26 --> 查询待审核订单
DEBUG - 2016-06-16 15:10:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:10:26 --> Total execution time: 0.1120
DEBUG - 2016-06-16 15:10:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061026
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:27 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:27 --> CRSF cookie Set
DEBUG - 2016-06-16 15:10:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9c7ca69a20984781b6bee27baee78fbe', '114.91.131.17', '2016-06-16', '15:10:27', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:27 --> 查询待审核订单
DEBUG - 2016-06-16 15:10:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:10:27 --> Total execution time: 0.1030
DEBUG - 2016-06-16 15:10:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061027
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:33 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:33 --> CRSF cookie Set
DEBUG - 2016-06-16 15:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('322c79f63a0b47e4b385c95afecf6734', '114.91.131.17', '2016-06-16', '15:10:33', '120340235', '/admin/order/check/0fd260640a3249aea0b6821c91f3f444', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-16 15:10:33 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0fd260640a3249aea0b6821c91f3f444' order by create_date_time desc
DEBUG - 2016-06-16 15:10:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-16 15:10:33 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0fd260640a3249aea0b6821c91f3f444'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:10:33 --> Total execution time: 0.1830
DEBUG - 2016-06-16 15:10:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061033
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:39 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:39 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('19e8a12458ff435ebaafef885cba8f9c', '114.91.131.17', '2016-06-16', '15:10:39', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:39 --> 审核订单
DEBUG - 2016-06-16 15:10:39 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '0fd260640a3249aea0b6821c91f3f444'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:10:39 --> 过程调用语句：  execute USP_APSOS_outorder '0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-16 15:10:40 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '0fd260640a3249aea0b6821c91f3f444', '2', '', 'd9d5af7ba12845568eea631d1cf03103', '2016-06-16 15:10:40')
DEBUG - 2016-06-16 15:10:40 --> 该订单状态更新成功:2
DEBUG - 2016-06-16 15:10:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-16 15:10:40 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05037'
DEBUG - 2016-06-16 15:10:42 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-16 15:10:42 --> Total execution time: 3.1292
DEBUG - 2016-06-16 15:10:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061042
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:43 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:43 --> CRSF cookie Set
DEBUG - 2016-06-16 15:10:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8ebfecc8aabc4548ae2e1912cb59817e', '114.91.131.17', '2016-06-16', '15:10:43', '120340235', '/admin/order/check/0fd260640a3249aea0b6821c91f3f444', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-16 15:10:43 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0fd260640a3249aea0b6821c91f3f444' order by create_date_time desc
DEBUG - 2016-06-16 15:10:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-16 15:10:43 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0fd260640a3249aea0b6821c91f3f444'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:10:43 --> Total execution time: 0.1190
DEBUG - 2016-06-16 15:10:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061043
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:47 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:47 --> CRSF cookie Set
DEBUG - 2016-06-16 15:10:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f8fdbdea2ea145afb78677308193736a', '114.91.131.17', '2016-06-16', '15:10:47', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:47 --> 查询待审核订单
DEBUG - 2016-06-16 15:10:47 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:10:47 --> Total execution time: 0.1210
DEBUG - 2016-06-16 15:10:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061047
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:49 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:49 --> CRSF cookie Set
DEBUG - 2016-06-16 15:10:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1fedd6df1bf145f68ee886193321406d', '114.91.131.17', '2016-06-16', '15:10:50', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:10:50 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:10:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:10:50 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:10:50 --> Total execution time: 0.1460
DEBUG - 2016-06-16 15:10:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061050
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:58 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f5e84be3237f4df7a6e7a15f7f0a7488', '114.91.131.17', '2016-06-16', '15:10:58', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:58 --> 审核订单
DEBUG - 2016-06-16 15:10:58 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:10:58 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:10:59 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:10:59 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:10:59 --> Total execution time: 0.9721
DEBUG - 2016-06-16 15:10:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061059
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:59 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:10:59 --> Security Class Initialized
DEBUG - 2016-06-16 15:10:59 --> CRSF cookie Set
DEBUG - 2016-06-16 15:10:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:10:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:10:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('588ac694dd7f4185ae3236350d5d85b8', '114.91.131.17', '2016-06-16', '15:10:59', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:10:59 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:10:59 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:10:59 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:10:59 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:10:59 --> Total execution time: 0.1780
DEBUG - 2016-06-16 15:10:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061059
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:09 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:11:09 --> Security Class Initialized
DEBUG - 2016-06-16 15:11:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:11:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('57e220c3a0254322b5df008f8e5871af', '114.91.131.17', '2016-06-16', '15:11:10', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:11:10 --> 审核订单
DEBUG - 2016-06-16 15:11:10 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:11:10 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:11:10 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:11:10 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:11:10 --> Total execution time: 0.1680
DEBUG - 2016-06-16 15:11:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061070
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:11:10 --> Security Class Initialized
DEBUG - 2016-06-16 15:11:10 --> CRSF cookie Set
DEBUG - 2016-06-16 15:11:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:11:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7dc4db94cd29441faff6ea318baaeae4', '114.91.131.17', '2016-06-16', '15:11:10', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:11:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:11:10 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:11:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:11:10 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:11:11 --> Total execution time: 1.2811
DEBUG - 2016-06-16 15:11:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061071
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:11:22 --> Security Class Initialized
DEBUG - 2016-06-16 15:11:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:11:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c1deff62418345b88e69cda70d2c5131', '114.91.131.17', '2016-06-16', '15:11:22', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:11:22 --> 审核订单
DEBUG - 2016-06-16 15:11:22 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:11:22 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:11:22 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:11:22 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:11:22 --> Total execution time: 0.2120
DEBUG - 2016-06-16 15:11:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061082
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:11:23 --> Security Class Initialized
DEBUG - 2016-06-16 15:11:23 --> CRSF cookie Set
DEBUG - 2016-06-16 15:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:11:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1d9edfafd4f74219aad4f186948ce921', '114.91.131.17', '2016-06-16', '15:11:23', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:11:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:11:23 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:11:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:11:23 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:11:23 --> Total execution time: 0.1470
DEBUG - 2016-06-16 15:11:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061083
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:11:25 --> Security Class Initialized
DEBUG - 2016-06-16 15:11:25 --> CRSF cookie Set
DEBUG - 2016-06-16 15:11:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:11:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('21be753ad2744ff8bdd497a92705c30b', '114.91.131.17', '2016-06-16', '15:11:25', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:11:25 --> 查询待审核订单
DEBUG - 2016-06-16 15:11:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:11:25 --> Total execution time: 0.1070
DEBUG - 2016-06-16 15:11:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061085
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:11:27 --> Security Class Initialized
DEBUG - 2016-06-16 15:11:27 --> CRSF cookie Set
DEBUG - 2016-06-16 15:11:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:11:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('26edc726805d4856a4e8d970340d8fb0', '114.91.131.17', '2016-06-16', '15:11:27', '120340235', '/admin/order/check/e2fe562068924354864325b5fbf32b9a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:11:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-16 15:11:28 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e2fe562068924354864325b5fbf32b9a' order by create_date_time desc
DEBUG - 2016-06-16 15:11:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-16 15:11:28 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e2fe562068924354864325b5fbf32b9a'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:11:28 --> Total execution time: 0.1680
DEBUG - 2016-06-16 15:11:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061088
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:11:28 --> Security Class Initialized
DEBUG - 2016-06-16 15:11:28 --> CRSF cookie Set
DEBUG - 2016-06-16 15:11:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:11:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2851bd8620854179878e2280a5bba9c4', '114.91.131.17', '2016-06-16', '15:11:28', '120340235', '/admin/order/check/e2fe562068924354864325b5fbf32b9a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:11:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-16 15:11:28 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e2fe562068924354864325b5fbf32b9a' order by create_date_time desc
DEBUG - 2016-06-16 15:11:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-16 15:11:28 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e2fe562068924354864325b5fbf32b9a'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:11:28 --> Total execution time: 0.1580
DEBUG - 2016-06-16 15:11:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061088
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:36 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:11:36 --> Security Class Initialized
DEBUG - 2016-06-16 15:11:36 --> CRSF cookie Set
DEBUG - 2016-06-16 15:11:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:11:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f153bf000ed0462cb2e11e85103feb6b', '114.91.131.17', '2016-06-16', '15:11:36', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:11:36 --> 查询待审核订单
DEBUG - 2016-06-16 15:11:36 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:11:36 --> Total execution time: 0.1170
DEBUG - 2016-06-16 15:11:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061096
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:11:40 --> Security Class Initialized
DEBUG - 2016-06-16 15:11:40 --> CRSF cookie Set
DEBUG - 2016-06-16 15:11:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:11:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0413c8f741464e42978b8405cc9141f7', '114.91.131.17', '2016-06-16', '15:11:40', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:11:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:11:40 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:11:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:11:40 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:11:40 --> Total execution time: 0.1340
DEBUG - 2016-06-16 15:11:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061100
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:11:50 --> Security Class Initialized
DEBUG - 2016-06-16 15:11:50 --> CRSF cookie Set
DEBUG - 2016-06-16 15:11:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:11:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5ae61e256b9c4c398ee04de61ebb8967', '114.91.131.17', '2016-06-16', '15:11:50', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:11:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:11:51 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:11:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:11:51 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:11:51 --> Total execution time: 0.1250
DEBUG - 2016-06-16 15:11:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061111
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:11:57 --> Security Class Initialized
DEBUG - 2016-06-16 15:11:57 --> CRSF cookie Set
DEBUG - 2016-06-16 15:11:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:11:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:11:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('74712c130ab54ba0a4c732ae716979df', '114.91.131.17', '2016-06-16', '15:11:57', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02?uuid=e71823512f2a48bbb32dae54092ddd02&consignee_name=%E6%AF%95%E6%AD%A3%E5%B9%B3&telphone=13700627609&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:11:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:11:57 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:11:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:11:57 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:11:58 --> Total execution time: 0.1190
DEBUG - 2016-06-16 15:11:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061118
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:12:14 --> Security Class Initialized
DEBUG - 2016-06-16 15:12:14 --> CRSF cookie Set
DEBUG - 2016-06-16 15:12:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:12:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e81ea01643fe4bf2995ba779c8ac5d33', '114.91.131.17', '2016-06-16', '15:12:14', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02?uuid=e71823512f2a48bbb32dae54092ddd02&consignee_name=%E6%AF%95%E6%AD%A3%E5%B9%B3&telphone=&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:12:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:12:14 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:12:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:12:14 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:12:14 --> Total execution time: 0.1920
DEBUG - 2016-06-16 15:12:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061134
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:12:31 --> Security Class Initialized
DEBUG - 2016-06-16 15:12:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:12:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d9cfbde6eed2444c81897ec62baf6289', '114.91.131.17', '2016-06-16', '15:12:31', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:12:31 --> 审核订单
DEBUG - 2016-06-16 15:12:31 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:12:31 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:12:31 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:12:31 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:12:31 --> Total execution time: 0.1990
DEBUG - 2016-06-16 15:12:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061151
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:12:31 --> Security Class Initialized
DEBUG - 2016-06-16 15:12:31 --> CRSF cookie Set
DEBUG - 2016-06-16 15:12:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:12:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6253af544e934c3e96367dd8aaf7930f', '114.91.131.17', '2016-06-16', '15:12:31', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02?uuid=e71823512f2a48bbb32dae54092ddd02&consignee_name=%E6%AF%95%E6%AD%A3%E5%B9%B3&telphone=&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:12:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:12:31 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:12:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:12:31 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:12:31 --> Total execution time: 0.0960
DEBUG - 2016-06-16 15:12:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061151
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:37 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:12:37 --> Security Class Initialized
DEBUG - 2016-06-16 15:12:37 --> CRSF cookie Set
DEBUG - 2016-06-16 15:12:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:12:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('93a584106be742dda3782d994359de66', '114.91.131.17', '2016-06-16', '15:12:37', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:12:37 --> 查询待审核订单
DEBUG - 2016-06-16 15:12:37 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:12:37 --> Total execution time: 0.0980
DEBUG - 2016-06-16 15:12:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061157
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:12:40 --> Security Class Initialized
DEBUG - 2016-06-16 15:12:40 --> CRSF cookie Set
DEBUG - 2016-06-16 15:12:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:12:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c573a9a3973742bbb336b85227851a44', '114.91.131.17', '2016-06-16', '15:12:40', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:12:40 --> 查询待审核订单
DEBUG - 2016-06-16 15:12:40 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:12:40 --> Total execution time: 0.1140
DEBUG - 2016-06-16 15:12:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061160
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:12:46 --> Security Class Initialized
DEBUG - 2016-06-16 15:12:46 --> CRSF cookie Set
DEBUG - 2016-06-16 15:12:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:12:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('247a66244c794ae9bc2aca3246f9822b', '114.91.131.17', '2016-06-16', '15:12:46', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:12:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:12:46 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:12:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:12:46 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:12:46 --> Total execution time: 0.1850
DEBUG - 2016-06-16 15:12:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061166
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:12:51 --> Security Class Initialized
DEBUG - 2016-06-16 15:12:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:12:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bc5eb68c39614bf88ebef1a85c93a8e5', '114.91.131.17', '2016-06-16', '15:12:51', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:12:51 --> 审核订单
DEBUG - 2016-06-16 15:12:51 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:12:51 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:12:52 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:12:52 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:12:52 --> Total execution time: 0.6140
DEBUG - 2016-06-16 15:12:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061172
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:12:52 --> Security Class Initialized
DEBUG - 2016-06-16 15:12:52 --> CRSF cookie Set
DEBUG - 2016-06-16 15:12:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:12:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:12:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('43406e015e144b309c215449ec8e4f0f', '114.91.131.17', '2016-06-16', '15:12:52', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:12:52 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:12:52 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:12:52 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:12:52 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:12:52 --> Total execution time: 0.1100
DEBUG - 2016-06-16 15:12:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061172
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:13:06 --> Security Class Initialized
DEBUG - 2016-06-16 15:13:06 --> CRSF cookie Set
DEBUG - 2016-06-16 15:13:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:13:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e7e3851598c34d45b2b23fbc00021984', '114.91.131.17', '2016-06-16', '15:13:06', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:13:06 --> 查询待审核订单
DEBUG - 2016-06-16 15:13:06 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:13:06 --> Total execution time: 0.0880
DEBUG - 2016-06-16 15:13:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061186
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:13:07 --> Security Class Initialized
DEBUG - 2016-06-16 15:13:07 --> CRSF cookie Set
DEBUG - 2016-06-16 15:13:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:13:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2a67e86045154ee5866886e3d5942f8c', '114.91.131.17', '2016-06-16', '15:13:07', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:13:07 --> 查询待审核订单
DEBUG - 2016-06-16 15:13:07 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:13:07 --> Total execution time: 0.1520
DEBUG - 2016-06-16 15:13:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061187
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:08 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:13:08 --> Security Class Initialized
DEBUG - 2016-06-16 15:13:08 --> CRSF cookie Set
DEBUG - 2016-06-16 15:13:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:13:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('17f6bc3fb4f846deb0dea4b3375f0d76', '114.91.131.17', '2016-06-16', '15:13:08', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:13:08 --> 查询待审核订单
DEBUG - 2016-06-16 15:13:08 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:13:08 --> Total execution time: 0.1090
DEBUG - 2016-06-16 15:13:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061188
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:09 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:13:09 --> Security Class Initialized
DEBUG - 2016-06-16 15:13:09 --> CRSF cookie Set
DEBUG - 2016-06-16 15:13:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:13:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fdd70e99fc2a49a6a11999370759e627', '114.91.131.17', '2016-06-16', '15:13:09', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:13:09 --> 查询待审核订单
DEBUG - 2016-06-16 15:13:09 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:13:09 --> Total execution time: 0.1000
DEBUG - 2016-06-16 15:13:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061189
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:13:10 --> Security Class Initialized
DEBUG - 2016-06-16 15:13:10 --> CRSF cookie Set
DEBUG - 2016-06-16 15:13:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:13:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5003e89949474b24b8cc82187f3e26f0', '114.91.131.17', '2016-06-16', '15:13:10', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:13:10 --> 查询待发货订单
DEBUG - 2016-06-16 15:13:10 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-16 15:13:10 --> Total execution time: 0.1520
DEBUG - 2016-06-16 15:13:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061190
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:13:13 --> Security Class Initialized
DEBUG - 2016-06-16 15:13:13 --> CRSF cookie Set
DEBUG - 2016-06-16 15:13:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:13:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a1a0db24c3234ebb87ce8630507675c5', '114.91.131.17', '2016-06-16', '15:13:13', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:13:13 --> 查询待审核订单
DEBUG - 2016-06-16 15:13:13 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:13:13 --> Total execution time: 0.1160
DEBUG - 2016-06-16 15:13:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061193
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:13:15 --> Security Class Initialized
DEBUG - 2016-06-16 15:13:15 --> CRSF cookie Set
DEBUG - 2016-06-16 15:13:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:13:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b1e226b5e3df45a38b487c463946123e', '114.91.131.17', '2016-06-16', '15:13:15', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:13:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:13:15 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:13:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:13:15 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:13:15 --> Total execution time: 0.1320
DEBUG - 2016-06-16 15:13:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061195
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:16 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:13:16 --> Security Class Initialized
DEBUG - 2016-06-16 15:13:16 --> CRSF cookie Set
DEBUG - 2016-06-16 15:13:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:13:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a8cc02eb6de2471b8a1f556813588924', '114.91.131.17', '2016-06-16', '15:13:16', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:13:16 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:13:16 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:13:16 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:13:16 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:13:16 --> Total execution time: 0.1590
DEBUG - 2016-06-16 15:13:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061196
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:13:28 --> Security Class Initialized
DEBUG - 2016-06-16 15:13:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:13:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('209baa86477c4cdaa9fb8ac3d8ddd3ca', '114.91.131.17', '2016-06-16', '15:13:28', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:13:28 --> 审核订单
DEBUG - 2016-06-16 15:13:28 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:13:28 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:13:29 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:13:29 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:13:29 --> Total execution time: 1.1711
DEBUG - 2016-06-16 15:13:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061209
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:13:29 --> Security Class Initialized
DEBUG - 2016-06-16 15:13:29 --> CRSF cookie Set
DEBUG - 2016-06-16 15:13:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:13:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:13:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('81fb7c6b6cad4252ad579bede8c8084c', '114.91.131.17', '2016-06-16', '15:13:29', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:13:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:13:29 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:13:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:13:29 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:13:29 --> Total execution time: 0.1730
DEBUG - 2016-06-16 15:13:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061209
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:14:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:14:10 --> Security Class Initialized
DEBUG - 2016-06-16 15:14:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:14:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:14:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f58dcb92b4df4c41baf7bb6f34895725', '114.91.131.17', '2016-06-16', '15:14:10', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:14:10 --> 审核订单
DEBUG - 2016-06-16 15:14:10 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:14:10 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:14:10 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:14:10 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:14:10 --> Total execution time: 0.1440
DEBUG - 2016-06-16 15:14:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061250
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:14:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:14:10 --> Security Class Initialized
DEBUG - 2016-06-16 15:14:10 --> CRSF cookie Set
DEBUG - 2016-06-16 15:14:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:14:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:14:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('202da5f3840c4be6ac22451893c2b29b', '114.91.131.17', '2016-06-16', '15:14:10', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad04089df5200bf1cd319b254ea2a5377403652d')
DEBUG - 2016-06-16 15:14:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:14:10 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:14:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:14:10 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:14:10 --> Total execution time: 0.1150
DEBUG - 2016-06-16 15:14:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061250
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:14:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:14:15 --> Security Class Initialized
DEBUG - 2016-06-16 15:14:15 --> CRSF cookie Set
DEBUG - 2016-06-16 15:14:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:14:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:14:15 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'ad04089df5200bf1cd319b254ea2a5377403652d'
DEBUG - 2016-06-16 15:14:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b9f11898372a48f280d9544864e89f1b', '114.91.131.17', '2016-06-16', '15:14:15', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02?uuid=e71823512f2a48bbb32dae54092ddd02&consignee_name=%E6%AF%95%E6%AD%A3%E5%B9%B3&telphone=13700627609&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:14:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:14:15 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:14:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:14:15 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:14:15 --> Total execution time: 0.1480
DEBUG - 2016-06-16 15:14:15 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('285f81d87511ce6d87420ee22db45f70fe7a0d9c', '114.91.131.17', 1466061255, '__ci_last_regenerate|i:1466061255;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-16 15:14:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:14:20 --> Security Class Initialized
DEBUG - 2016-06-16 15:14:20 --> CRSF cookie Set
DEBUG - 2016-06-16 15:14:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:14:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:14:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('212160e12c0142a3abba5ccb4242ce5c', '114.91.131.17', '2016-06-16', '15:14:20', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02?uuid=e71823512f2a48bbb32dae54092ddd02&consignee_name=%E6%AF%95%E6%AD%A3%E5%B9%B3&telphone=13700627609&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:14:20 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:14:20 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:14:20 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:14:20 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:14:20 --> Total execution time: 0.1090
DEBUG - 2016-06-16 15:14:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061260
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:14:59 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:14:59 --> Security Class Initialized
DEBUG - 2016-06-16 15:14:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:14:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:14:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e99026076fcf47cd888a50c75ca27a05', '114.91.131.17', '2016-06-16', '15:14:59', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:14:59 --> 审核订单
DEBUG - 2016-06-16 15:14:59 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:14:59 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:15:00 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:15:00 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:15:00 --> Total execution time: 0.7800
DEBUG - 2016-06-16 15:15:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061300
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:15:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:15:00 --> Security Class Initialized
DEBUG - 2016-06-16 15:15:00 --> CRSF cookie Set
DEBUG - 2016-06-16 15:15:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:15:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:15:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d18acac0569c4182a120ba0832469e1c', '114.91.131.17', '2016-06-16', '15:15:00', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02?uuid=e71823512f2a48bbb32dae54092ddd02&consignee_name=%E6%AF%95%E6%AD%A3%E5%B9%B3&telphone=13700627609&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:15:00 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:15:00 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:15:00 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:15:00 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:15:00 --> Total execution time: 0.1560
DEBUG - 2016-06-16 15:15:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061300
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:32 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:16:32 --> Security Class Initialized
DEBUG - 2016-06-16 15:16:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:16:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e8bb6d71a5bc4ea5b8a357bf4854d29b', '114.91.131.17', '2016-06-16', '15:16:32', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:16:32 --> 审核订单
DEBUG - 2016-06-16 15:16:32 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:16:32 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:16:33 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:16:33 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:16:33 --> Total execution time: 0.1092
DEBUG - 2016-06-16 15:16:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061393
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:16:33 --> Security Class Initialized
DEBUG - 2016-06-16 15:16:33 --> CRSF cookie Set
DEBUG - 2016-06-16 15:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:16:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b26f285800a74ec7961bfac04cd0db96', '114.91.131.17', '2016-06-16', '15:16:33', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02?uuid=e71823512f2a48bbb32dae54092ddd02&consignee_name=%E6%AF%95%E6%AD%A3%E5%B9%B3&telphone=13700627609&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:16:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:16:33 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:16:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:16:33 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:16:33 --> Total execution time: 0.0936
DEBUG - 2016-06-16 15:16:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061393
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:16:38 --> Security Class Initialized
DEBUG - 2016-06-16 15:16:38 --> CRSF cookie Set
DEBUG - 2016-06-16 15:16:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:16:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1a23209f54ca48d98406f8c4fd727f08', '114.91.131.17', '2016-06-16', '15:16:38', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:16:38 --> 查询待审核订单
DEBUG - 2016-06-16 15:16:38 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:16:38 --> Total execution time: 0.0936
DEBUG - 2016-06-16 15:16:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061398
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:39 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:16:39 --> Security Class Initialized
DEBUG - 2016-06-16 15:16:39 --> CRSF cookie Set
DEBUG - 2016-06-16 15:16:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:16:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1ac3bc159bca4c0e89867b3a91308550', '114.91.131.17', '2016-06-16', '15:16:39', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:16:39 --> 查询待审核订单
DEBUG - 2016-06-16 15:16:39 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:16:39 --> Total execution time: 0.0780
DEBUG - 2016-06-16 15:16:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061399
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:16:40 --> Security Class Initialized
DEBUG - 2016-06-16 15:16:40 --> CRSF cookie Set
DEBUG - 2016-06-16 15:16:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:16:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bfafe8e944414c648c51a883e6ee63ec', '114.91.131.17', '2016-06-16', '15:16:40', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:16:40 --> 查询待审核订单
DEBUG - 2016-06-16 15:16:40 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:16:40 --> Total execution time: 0.1092
DEBUG - 2016-06-16 15:16:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061400
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:16:40 --> Security Class Initialized
DEBUG - 2016-06-16 15:16:40 --> CRSF cookie Set
DEBUG - 2016-06-16 15:16:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:16:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7dd2d760e03e4e5cb78528a7952002fc', '114.91.131.17', '2016-06-16', '15:16:40', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:16:40 --> 查询待审核订单
DEBUG - 2016-06-16 15:16:40 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:16:40 --> Total execution time: 0.0936
DEBUG - 2016-06-16 15:16:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061400
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:16:42 --> Security Class Initialized
DEBUG - 2016-06-16 15:16:42 --> CRSF cookie Set
DEBUG - 2016-06-16 15:16:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:16:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:16:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('45b9d5fbb6da486a918a15b1936c07c2', '114.91.131.17', '2016-06-16', '15:16:42', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:16:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:16:42 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:16:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:16:42 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:16:42 --> Total execution time: 0.1092
DEBUG - 2016-06-16 15:16:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061402
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:17:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:17:21 --> Security Class Initialized
DEBUG - 2016-06-16 15:17:21 --> CRSF cookie Set
DEBUG - 2016-06-16 15:17:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:17:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:17:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f06a5f6e34fc48f8b26ecdfa54081014', '114.91.131.17', '2016-06-16', '15:17:21', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:17:21 --> 查询待审核订单
DEBUG - 2016-06-16 15:17:21 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:17:21 --> Total execution time: 0.0936
DEBUG - 2016-06-16 15:17:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061441
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:17:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:17:21 --> Security Class Initialized
DEBUG - 2016-06-16 15:17:21 --> CRSF cookie Set
DEBUG - 2016-06-16 15:17:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:17:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:17:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ddb9eebfc7d24ba0bdec5ed1e64c6e54', '114.91.131.17', '2016-06-16', '15:17:21', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:17:21 --> 查询待审核订单
DEBUG - 2016-06-16 15:17:21 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:17:21 --> Total execution time: 0.0780
DEBUG - 2016-06-16 15:17:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061441
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:17:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:17:23 --> Security Class Initialized
DEBUG - 2016-06-16 15:17:23 --> CRSF cookie Set
DEBUG - 2016-06-16 15:17:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:17:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:17:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('57285fd0cb35473cb890a3d6ce3b31d9', '114.91.131.17', '2016-06-16', '15:17:23', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:17:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:17:23 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:17:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:17:23 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:17:23 --> Total execution time: 0.0936
DEBUG - 2016-06-16 15:17:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061443
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:19:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:19:33 --> Security Class Initialized
DEBUG - 2016-06-16 15:19:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:19:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:19:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3feadbebb1264de8af7a8d12721385d7', '114.91.131.17', '2016-06-16', '15:19:33', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '285f81d87511ce6d87420ee22db45f70fe7a0d9c')
DEBUG - 2016-06-16 15:19:33 --> 审核订单
DEBUG - 2016-06-16 15:19:33 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:19:33 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:19:33 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:19:33 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:19:33 --> Total execution time: 0.3650
DEBUG - 2016-06-16 15:19:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061573
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:19:34 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:19:34 --> Security Class Initialized
DEBUG - 2016-06-16 15:19:34 --> CRSF cookie Set
DEBUG - 2016-06-16 15:19:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:19:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:19:34 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '285f81d87511ce6d87420ee22db45f70fe7a0d9c'
DEBUG - 2016-06-16 15:19:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('82502c074b204bd89159731f3c8a8551', '114.91.131.17', '2016-06-16', '15:19:34', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '3a4ce4008fe1ef555b843d59dc8971cbd748328b')
DEBUG - 2016-06-16 15:19:34 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:19:34 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:19:34 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:19:34 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:19:34 --> Total execution time: 0.8871
DEBUG - 2016-06-16 15:19:34 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3a4ce4008fe1ef555b843d59dc8971cbd748328b', '114.91.131.17', 1466061574, '__ci_last_regenerate|i:1466061574;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-16 15:21:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:21:11 --> Security Class Initialized
DEBUG - 2016-06-16 15:21:11 --> CRSF cookie Set
DEBUG - 2016-06-16 15:21:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:21:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3a4ce4008fe1ef555b843d59dc8971cbd748328b'
DEBUG - 2016-06-16 15:21:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c0ddfbd16ca04b1a986fbc74c9433c81', '114.91.131.17', '2016-06-16', '15:21:11', '120340235', '/admin/order/check/0fd260640a3249aea0b6821c91f3f444', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '3a4ce4008fe1ef555b843d59dc8971cbd748328b')
DEBUG - 2016-06-16 15:21:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-16 15:21:11 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0fd260640a3249aea0b6821c91f3f444' order by create_date_time desc
DEBUG - 2016-06-16 15:21:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-16 15:21:11 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0fd260640a3249aea0b6821c91f3f444'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:21:11 --> Total execution time: 0.2010
DEBUG - 2016-06-16 15:21:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061671
WHERE id = '3a4ce4008fe1ef555b843d59dc8971cbd748328b'
DEBUG - 2016-06-16 15:21:16 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:21:16 --> Security Class Initialized
DEBUG - 2016-06-16 15:21:16 --> CRSF cookie Set
DEBUG - 2016-06-16 15:21:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:21:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3a4ce4008fe1ef555b843d59dc8971cbd748328b'
DEBUG - 2016-06-16 15:21:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('63bcc34a01434cb7b18001b20f2845bf', '114.91.131.17', '2016-06-16', '15:21:16', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '3a4ce4008fe1ef555b843d59dc8971cbd748328b')
DEBUG - 2016-06-16 15:21:16 --> 查询待发货订单
DEBUG - 2016-06-16 15:21:16 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-16 15:21:16 --> Total execution time: 0.0860
DEBUG - 2016-06-16 15:21:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061676
WHERE id = '3a4ce4008fe1ef555b843d59dc8971cbd748328b'
DEBUG - 2016-06-16 15:21:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:21:22 --> Security Class Initialized
DEBUG - 2016-06-16 15:21:22 --> CRSF cookie Set
DEBUG - 2016-06-16 15:21:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:21:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3a4ce4008fe1ef555b843d59dc8971cbd748328b'
DEBUG - 2016-06-16 15:21:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6b53f33e51dd44e39c9b90f92210d60b', '114.91.131.17', '2016-06-16', '15:21:22', '120340235', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '3a4ce4008fe1ef555b843d59dc8971cbd748328b')
DEBUG - 2016-06-16 15:21:22 --> 查询需求订单
DEBUG - 2016-06-16 15:21:22 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-06-16 15:21:22 --> Total execution time: 0.1260
DEBUG - 2016-06-16 15:21:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061682
WHERE id = '3a4ce4008fe1ef555b843d59dc8971cbd748328b'
DEBUG - 2016-06-16 15:21:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:21:38 --> Security Class Initialized
DEBUG - 2016-06-16 15:21:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:21:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3a4ce4008fe1ef555b843d59dc8971cbd748328b'
DEBUG - 2016-06-16 15:21:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ffe8c3a958314b93b2240391a9580f2e', '114.91.131.17', '2016-06-16', '15:21:38', '120340235', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '3a4ce4008fe1ef555b843d59dc8971cbd748328b')
DEBUG - 2016-06-16 15:21:38 --> 查询需求订单
DEBUG - 2016-06-16 15:21:38 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-06-09 00:00:00' and create_date_time<'2016-06-16 23:59:59' 
ERROR - 2016-06-16 15:21:38 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-06-16 15:21:38 --> Query error: [Microsoft][ODBC SQL Server Driver][SQL Server]�ڹؼ��� 'and' �������﷨���� - Invalid query: select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-06-09 00:00:00' and create_date_time<'2016-06-16 23:59:59' 
ERROR - 2016-06-16 15:21:38 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Order_model.php 85
DEBUG - 2016-06-16 15:21:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466061698
WHERE id = '3a4ce4008fe1ef555b843d59dc8971cbd748328b'
DEBUG - 2016-06-16 15:28:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:28:17 --> CRSF cookie Set
DEBUG - 2016-06-16 15:28:17 --> Security Class Initialized
DEBUG - 2016-06-16 15:28:17 --> CRSF cookie Set
DEBUG - 2016-06-16 15:28:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-06-16 15:28:17 --> 404 Page Not Found: Order/detail
DEBUG - 2016-06-16 15:28:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:28:24 --> Security Class Initialized
DEBUG - 2016-06-16 15:28:24 --> CRSF cookie Set
DEBUG - 2016-06-16 15:28:24 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-06-16 15:28:24 --> 404 Page Not Found: Order/detail
DEBUG - 2016-06-16 15:28:30 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:28:30 --> Security Class Initialized
DEBUG - 2016-06-16 15:28:30 --> CRSF cookie Set
DEBUG - 2016-06-16 15:28:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-06-16 15:28:30 --> 404 Page Not Found: Order/detail
DEBUG - 2016-06-16 15:28:41 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:28:41 --> No URI present. Default controller set.
DEBUG - 2016-06-16 15:28:41 --> Security Class Initialized
DEBUG - 2016-06-16 15:28:41 --> CRSF cookie Set
DEBUG - 2016-06-16 15:28:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:28:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:28:41 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('de456356c350d7b5fb21dbd46faaa7bd44e5e3b9', '27.152.93.89', 1466062121, '__ci_last_regenerate|i:1466062121;')
DEBUG - 2016-06-16 15:28:41 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:28:41 --> Security Class Initialized
DEBUG - 2016-06-16 15:28:41 --> CRSF cookie Set
DEBUG - 2016-06-16 15:28:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:28:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:28:41 --> Total execution time: 0.1700
DEBUG - 2016-06-16 15:28:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062121
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:29:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:29:15 --> Security Class Initialized
DEBUG - 2016-06-16 15:29:15 --> CRSF cookie Set
DEBUG - 2016-06-16 15:29:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:29:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:29:15 --> CRSF cookie Set
DEBUG - 2016-06-16 15:29:15 --> Security Class Initialized
DEBUG - 2016-06-16 15:29:15 --> CRSF cookie Set
DEBUG - 2016-06-16 15:29:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:29:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3a4ce4008fe1ef555b843d59dc8971cbd748328b'
DEBUG - 2016-06-16 15:29:15 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '3a4ce4008fe1ef555b843d59dc8971cbd748328b'
DEBUG - 2016-06-16 15:29:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14d73a17933c0d9485a969d8f5a70244d974452'
DEBUG - 2016-06-16 15:29:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('074043659e964a0a9960667b80bfef7d', '114.91.131.17', '2016-06-16', '15:29:15', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d23eb0c04db02938af8511107b31eae25e25073')
DEBUG - 2016-06-16 15:29:15 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e14d73a17933c0d9485a969d8f5a70244d974452', '14.17.18.144', 1466062155, '__ci_last_regenerate|i:1466062155;')
DEBUG - 2016-06-16 15:29:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:29:15 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:29:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:29:15 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:29:16 --> Total execution time: 0.2120
DEBUG - 2016-06-16 15:29:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5d23eb0c04db02938af8511107b31eae25e25073', '114.91.131.17', 1466062156, '__ci_last_regenerate|i:1466062155;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-16 15:29:16 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:29:16 --> Security Class Initialized
DEBUG - 2016-06-16 15:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:29:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:29:16 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-06-16 15:29:16 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-06-16 15:29:16 --> 登录返回结果数：1
DEBUG - 2016-06-16 15:29:16 --> 成功登录
DEBUG - 2016-06-16 15:29:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062156, data = '__ci_last_regenerate|i:1466062121;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:29:16 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:29:16 --> No URI present. Default controller set.
DEBUG - 2016-06-16 15:29:16 --> Security Class Initialized
DEBUG - 2016-06-16 15:29:16 --> CRSF cookie Set
DEBUG - 2016-06-16 15:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:29:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:29:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('232125a45a8e42a4b1504d3fa807bf15', '27.152.93.89', '2016-06-16', '15:29:16', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9')
DEBUG - 2016-06-16 15:29:17 --> Total execution time: 0.2560
DEBUG - 2016-06-16 15:29:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062157
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:29:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:29:23 --> No URI present. Default controller set.
DEBUG - 2016-06-16 15:29:23 --> Security Class Initialized
DEBUG - 2016-06-16 15:29:23 --> CRSF cookie Set
DEBUG - 2016-06-16 15:29:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:29:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:29:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a57cdaf755bf411685bfc622b2ee0f85', '27.152.93.89', '2016-06-16', '15:29:24', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9')
DEBUG - 2016-06-16 15:29:24 --> Total execution time: 0.0780
DEBUG - 2016-06-16 15:29:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062164
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:29:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:29:28 --> No URI present. Default controller set.
DEBUG - 2016-06-16 15:29:28 --> Security Class Initialized
DEBUG - 2016-06-16 15:29:28 --> CRSF cookie Set
DEBUG - 2016-06-16 15:29:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:29:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:29:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('78758244717147179f53fc6fa779815d', '27.152.93.89', '2016-06-16', '15:29:28', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9')
DEBUG - 2016-06-16 15:29:28 --> Total execution time: 0.1010
DEBUG - 2016-06-16 15:29:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062168
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:29:36 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:29:36 --> Security Class Initialized
DEBUG - 2016-06-16 15:29:36 --> CRSF cookie Set
DEBUG - 2016-06-16 15:29:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:29:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d23eb0c04db02938af8511107b31eae25e25073'
DEBUG - 2016-06-16 15:29:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f636e53fce734f16bd67e8abe18ce61c', '114.91.131.17', '2016-06-16', '15:29:36', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02?uuid=e71823512f2a48bbb32dae54092ddd02&consignee_name=%E6%AF%95%E6%AD%A3%E5%B9%B3&telphone=13700627609&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d23eb0c04db02938af8511107b31eae25e25073')
DEBUG - 2016-06-16 15:29:36 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:29:36 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:29:36 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:29:36 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:29:36 --> Total execution time: 0.1000
DEBUG - 2016-06-16 15:29:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062176
WHERE id = '5d23eb0c04db02938af8511107b31eae25e25073'
DEBUG - 2016-06-16 15:29:37 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:29:37 --> Security Class Initialized
DEBUG - 2016-06-16 15:29:37 --> CRSF cookie Set
DEBUG - 2016-06-16 15:29:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:29:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:29:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5dc4b5dca1d64616801449a81b0dbafa', '27.152.93.89', '2016-06-16', '15:29:37', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9')
DEBUG - 2016-06-16 15:29:38 --> 查询待审核订单
DEBUG - 2016-06-16 15:29:38 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:29:38 --> Total execution time: 0.1120
DEBUG - 2016-06-16 15:29:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062178
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:29:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:29:44 --> Security Class Initialized
DEBUG - 2016-06-16 15:29:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:29:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d23eb0c04db02938af8511107b31eae25e25073'
DEBUG - 2016-06-16 15:29:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7d71f7c066ff4873a16b57370802da08', '114.91.131.17', '2016-06-16', '15:29:44', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d23eb0c04db02938af8511107b31eae25e25073')
DEBUG - 2016-06-16 15:29:44 --> 审核订单
DEBUG - 2016-06-16 15:29:44 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:29:44 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:29:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:29:44 --> Security Class Initialized
DEBUG - 2016-06-16 15:29:44 --> CRSF cookie Set
DEBUG - 2016-06-16 15:29:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:29:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:29:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('133c4602a3034a2faafc0cbea5b27bef', '27.152.93.89', '2016-06-16', '15:29:44', '120340234', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9')
DEBUG - 2016-06-16 15:29:44 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:29:45 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:29:45 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:29:45 --> Total execution time: 0.8100
DEBUG - 2016-06-16 15:29:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062185
WHERE id = '5d23eb0c04db02938af8511107b31eae25e25073'
DEBUG - 2016-06-16 15:29:45 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:29:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:29:45 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:29:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:29:45 --> Security Class Initialized
DEBUG - 2016-06-16 15:29:45 --> CRSF cookie Set
DEBUG - 2016-06-16 15:29:45 --> Total execution time: 1.3511
DEBUG - 2016-06-16 15:29:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:29:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062185
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:29:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d23eb0c04db02938af8511107b31eae25e25073'
DEBUG - 2016-06-16 15:29:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('019b673a96354ab4994777346f8aabe0', '114.91.131.17', '2016-06-16', '15:29:46', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02?uuid=e71823512f2a48bbb32dae54092ddd02&consignee_name=%E6%AF%95%E6%AD%A3%E5%B9%B3&telphone=13700627609&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d23eb0c04db02938af8511107b31eae25e25073')
DEBUG - 2016-06-16 15:29:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:29:46 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:29:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:29:46 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:29:46 --> Total execution time: 0.1680
DEBUG - 2016-06-16 15:29:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062186
WHERE id = '5d23eb0c04db02938af8511107b31eae25e25073'
DEBUG - 2016-06-16 15:29:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:29:53 --> Security Class Initialized
DEBUG - 2016-06-16 15:29:53 --> CRSF cookie Set
DEBUG - 2016-06-16 15:29:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:29:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d23eb0c04db02938af8511107b31eae25e25073'
DEBUG - 2016-06-16 15:29:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a4bbce91b3c14c1da836b355871a1f8c', '114.91.131.17', '2016-06-16', '15:29:53', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d23eb0c04db02938af8511107b31eae25e25073')
DEBUG - 2016-06-16 15:29:53 --> 查询待审核订单
DEBUG - 2016-06-16 15:29:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:29:53 --> Total execution time: 0.1060
DEBUG - 2016-06-16 15:29:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062193
WHERE id = '5d23eb0c04db02938af8511107b31eae25e25073'
DEBUG - 2016-06-16 15:30:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:30:11 --> Security Class Initialized
DEBUG - 2016-06-16 15:30:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:30:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:30:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('569c4dc59ede43448e0837626a8bb0ea', '27.152.93.89', '2016-06-16', '15:30:11', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9')
DEBUG - 2016-06-16 15:30:11 --> 审核订单
DEBUG - 2016-06-16 15:30:11 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:30:11 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:30:11 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:30:11 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:30:11 --> Total execution time: 0.1630
DEBUG - 2016-06-16 15:30:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062211
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:30:12 --> Security Class Initialized
DEBUG - 2016-06-16 15:30:12 --> CRSF cookie Set
DEBUG - 2016-06-16 15:30:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:30:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:30:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0bd2318e4fb44fb282ccbba207e200a4', '27.152.93.89', '2016-06-16', '15:30:12', '120340234', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9')
DEBUG - 2016-06-16 15:30:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:30:12 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:30:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:30:12 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:30:12 --> Total execution time: 0.1290
DEBUG - 2016-06-16 15:30:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062212
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:31:36 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:31:36 --> Security Class Initialized
DEBUG - 2016-06-16 15:31:36 --> CRSF cookie Set
DEBUG - 2016-06-16 15:31:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:31:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:31:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9f858cd6340042cab87b6338863034dc', '27.152.93.89', '2016-06-16', '15:31:36', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9')
DEBUG - 2016-06-16 15:31:36 --> 查询需求订单
DEBUG - 2016-06-16 15:31:36 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-06-16 15:31:36 --> Total execution time: 0.0840
DEBUG - 2016-06-16 15:31:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062296
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:32:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:32:31 --> Security Class Initialized
DEBUG - 2016-06-16 15:32:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:32:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:32:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('43225477e2b5484b8fe9ad0d77796aed', '27.152.93.89', '2016-06-16', '15:32:31', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9')
DEBUG - 2016-06-16 15:32:31 --> 查询需求订单
DEBUG - 2016-06-16 15:32:31 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-06-16 00:00:00' and create_date_time<'2016-06-16 23:59:59' 
ERROR - 2016-06-16 15:32:31 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-06-16 15:32:31 --> Query error: [Microsoft][ODBC SQL Server Driver][SQL Server]�ڹؼ��� 'and' �������﷨���� - Invalid query: select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-06-16 00:00:00' and create_date_time<'2016-06-16 23:59:59' 
ERROR - 2016-06-16 15:32:31 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Order_model.php 85
DEBUG - 2016-06-16 15:32:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062351
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:32:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:32:40 --> Security Class Initialized
DEBUG - 2016-06-16 15:32:40 --> CRSF cookie Set
DEBUG - 2016-06-16 15:32:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:32:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:32:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('74a771a42bd64dd2a3ca5f1df048ed65', '27.152.93.89', '2016-06-16', '15:32:40', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9')
DEBUG - 2016-06-16 15:32:40 --> 查询需求订单
DEBUG - 2016-06-16 15:32:40 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-06-16 15:32:40 --> Total execution time: 0.0840
DEBUG - 2016-06-16 15:32:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466062360
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:44:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:44:01 --> Security Class Initialized
DEBUG - 2016-06-16 15:44:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:44:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d23eb0c04db02938af8511107b31eae25e25073'
DEBUG - 2016-06-16 15:44:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('34fba8b32c1340bc8651c9fc3c5884b6', '114.91.131.17', '2016-06-16', '15:44:02', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d23eb0c04db02938af8511107b31eae25e25073')
DEBUG - 2016-06-16 15:44:02 --> 审核订单
DEBUG - 2016-06-16 15:44:02 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 15:44:02 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 15:44:02 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 15:44:02 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 15:44:02 --> Total execution time: 0.5400
DEBUG - 2016-06-16 15:44:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466063042
WHERE id = '5d23eb0c04db02938af8511107b31eae25e25073'
DEBUG - 2016-06-16 15:44:03 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:44:03 --> Security Class Initialized
DEBUG - 2016-06-16 15:44:03 --> CRSF cookie Set
DEBUG - 2016-06-16 15:44:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:44:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d23eb0c04db02938af8511107b31eae25e25073'
DEBUG - 2016-06-16 15:44:03 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '5d23eb0c04db02938af8511107b31eae25e25073'
DEBUG - 2016-06-16 15:44:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cf163ef88f0047318262c01096248e2f', '114.91.131.17', '2016-06-16', '15:44:03', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'b37160f628ee9356c704b0549812c38680e55b9a')
DEBUG - 2016-06-16 15:44:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:44:03 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:44:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:44:03 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:44:03 --> Total execution time: 0.1230
DEBUG - 2016-06-16 15:44:03 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b37160f628ee9356c704b0549812c38680e55b9a', '114.91.131.17', 1466063043, '__ci_last_regenerate|i:1466063043;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-16 15:53:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:53:48 --> Security Class Initialized
DEBUG - 2016-06-16 15:53:48 --> CRSF cookie Set
DEBUG - 2016-06-16 15:53:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:53:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:53:48 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'de456356c350d7b5fb21dbd46faaa7bd44e5e3b9'
DEBUG - 2016-06-16 15:53:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('eb32181dcd124f259c96ca9cda048fc4', '27.152.93.89', '2016-06-16', '15:53:48', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '9581c52a568e41d9963542db8fffd9cab046f08c')
DEBUG - 2016-06-16 15:53:48 --> 查询待审核订单
DEBUG - 2016-06-16 15:53:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 15:53:48 --> Total execution time: 0.1240
DEBUG - 2016-06-16 15:53:48 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9581c52a568e41d9963542db8fffd9cab046f08c', '27.152.93.89', 1466063628, '__ci_last_regenerate|i:1466063628;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-16 15:53:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:53:52 --> Security Class Initialized
DEBUG - 2016-06-16 15:53:52 --> CRSF cookie Set
DEBUG - 2016-06-16 15:53:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:53:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9581c52a568e41d9963542db8fffd9cab046f08c'
DEBUG - 2016-06-16 15:53:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('978fd05298764ac391ad97b78b79053b', '27.152.93.89', '2016-06-16', '15:53:52', '120340234', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '9581c52a568e41d9963542db8fffd9cab046f08c')
DEBUG - 2016-06-16 15:53:52 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:53:52 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 15:53:52 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 15:53:52 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 15:53:52 --> Total execution time: 0.1350
DEBUG - 2016-06-16 15:53:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466063632
WHERE id = '9581c52a568e41d9963542db8fffd9cab046f08c'
DEBUG - 2016-06-16 15:57:41 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:57:41 --> Security Class Initialized
DEBUG - 2016-06-16 15:57:41 --> CRSF cookie Set
DEBUG - 2016-06-16 15:57:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:57:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9581c52a568e41d9963542db8fffd9cab046f08c'
DEBUG - 2016-06-16 15:57:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466063862, data = '__ci_last_regenerate|i:1466063628;'
WHERE id = '9581c52a568e41d9963542db8fffd9cab046f08c'
DEBUG - 2016-06-16 15:57:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 15:57:42 --> Security Class Initialized
DEBUG - 2016-06-16 15:57:42 --> CRSF cookie Set
DEBUG - 2016-06-16 15:57:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 15:57:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9581c52a568e41d9963542db8fffd9cab046f08c'
DEBUG - 2016-06-16 15:57:42 --> Total execution time: 0.0800
DEBUG - 2016-06-16 15:57:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466063862
WHERE id = '9581c52a568e41d9963542db8fffd9cab046f08c'
DEBUG - 2016-06-16 16:09:41 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:09:41 --> Security Class Initialized
DEBUG - 2016-06-16 16:09:41 --> CRSF cookie Set
DEBUG - 2016-06-16 16:09:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:09:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b37160f628ee9356c704b0549812c38680e55b9a'
DEBUG - 2016-06-16 16:09:41 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'b37160f628ee9356c704b0549812c38680e55b9a'
DEBUG - 2016-06-16 16:09:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2d1e27e9d6874c5e85afc0aa4fed4876', '114.91.131.17', '2016-06-16', '16:09:41', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:09:41 --> 查询待审核订单
DEBUG - 2016-06-16 16:09:41 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 16:09:41 --> Total execution time: 0.0820
DEBUG - 2016-06-16 16:09:41 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8951eb74dcde2e69416b679c75a6fed043eebb30', '114.91.131.17', 1466064581, '__ci_last_regenerate|i:1466064581;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-16 16:09:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:09:44 --> Security Class Initialized
DEBUG - 2016-06-16 16:09:44 --> CRSF cookie Set
DEBUG - 2016-06-16 16:09:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:09:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:09:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('620dc6c249fe4b00904fb2b4c1b7dfa5', '114.91.131.17', '2016-06-16', '16:09:44', '120340235', '/admin/order/check/96dbd24728e14d75bd57d8616077ec8a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:09:44 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:09:44 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='96dbd24728e14d75bd57d8616077ec8a' order by create_date_time desc
DEBUG - 2016-06-16 16:09:44 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:09:44 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='96dbd24728e14d75bd57d8616077ec8a'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:09:44 --> Total execution time: 0.1050
DEBUG - 2016-06-16 16:09:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466064584
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:09:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:09:53 --> Security Class Initialized
DEBUG - 2016-06-16 16:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:09:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:09:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('393a7a1d623942f49bdab934bcb5f00c', '114.91.131.17', '2016-06-16', '16:09:53', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:09:53 --> 审核订单
DEBUG - 2016-06-16 16:09:53 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '96dbd24728e14d75bd57d8616077ec8a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 16:09:53 --> 过程调用语句：  execute USP_APSOS_outorder '96dbd24728e14d75bd57d8616077ec8a'
ERROR - 2016-06-16 16:09:54 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 16:09:54 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 16:09:54 --> Total execution time: 0.9861
DEBUG - 2016-06-16 16:09:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466064594
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:09:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:09:54 --> Security Class Initialized
DEBUG - 2016-06-16 16:09:54 --> CRSF cookie Set
DEBUG - 2016-06-16 16:09:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:09:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:09:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b92f46a948744bcc9bc319c697b80f91', '114.91.131.17', '2016-06-16', '16:09:54', '120340235', '/admin/order/check/96dbd24728e14d75bd57d8616077ec8a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:09:54 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:09:54 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='96dbd24728e14d75bd57d8616077ec8a' order by create_date_time desc
DEBUG - 2016-06-16 16:09:54 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:09:54 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='96dbd24728e14d75bd57d8616077ec8a'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:09:54 --> Total execution time: 0.0890
DEBUG - 2016-06-16 16:09:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466064594
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:10:01 --> Security Class Initialized
DEBUG - 2016-06-16 16:10:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:10:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e99e2eba29dc4a9699cbf60984048495', '114.91.131.17', '2016-06-16', '16:10:01', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:10:01 --> 审核订单
DEBUG - 2016-06-16 16:10:01 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '96dbd24728e14d75bd57d8616077ec8a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 16:10:01 --> 过程调用语句：  execute USP_APSOS_outorder '96dbd24728e14d75bd57d8616077ec8a'
ERROR - 2016-06-16 16:10:01 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 16:10:01 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 16:10:01 --> Total execution time: 0.1110
DEBUG - 2016-06-16 16:10:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466064601
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:10:01 --> Security Class Initialized
DEBUG - 2016-06-16 16:10:01 --> CRSF cookie Set
DEBUG - 2016-06-16 16:10:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:10:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c1d30d2bfde24d0599d0516a3d450359', '114.91.131.17', '2016-06-16', '16:10:01', '120340235', '/admin/order/check/96dbd24728e14d75bd57d8616077ec8a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:10:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:10:01 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='96dbd24728e14d75bd57d8616077ec8a' order by create_date_time desc
DEBUG - 2016-06-16 16:10:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:10:01 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='96dbd24728e14d75bd57d8616077ec8a'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:10:01 --> Total execution time: 0.0990
DEBUG - 2016-06-16 16:10:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466064601
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:10:11 --> Security Class Initialized
DEBUG - 2016-06-16 16:10:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:10:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('74167dbc1df646f8afbacbfdb5e50552', '114.91.131.17', '2016-06-16', '16:10:11', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:10:11 --> 审核订单
DEBUG - 2016-06-16 16:10:11 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '96dbd24728e14d75bd57d8616077ec8a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 16:10:11 --> 过程调用语句：  execute USP_APSOS_outorder '96dbd24728e14d75bd57d8616077ec8a'
ERROR - 2016-06-16 16:10:11 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 16:10:11 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 16:10:11 --> Total execution time: 0.1130
DEBUG - 2016-06-16 16:10:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466064611
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:10:11 --> Security Class Initialized
DEBUG - 2016-06-16 16:10:11 --> CRSF cookie Set
DEBUG - 2016-06-16 16:10:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:10:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5c0739b870594ae7914eeb3d89671f04', '114.91.131.17', '2016-06-16', '16:10:11', '120340235', '/admin/order/check/96dbd24728e14d75bd57d8616077ec8a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:10:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:10:11 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='96dbd24728e14d75bd57d8616077ec8a' order by create_date_time desc
DEBUG - 2016-06-16 16:10:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:10:11 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='96dbd24728e14d75bd57d8616077ec8a'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:10:11 --> Total execution time: 0.0860
DEBUG - 2016-06-16 16:10:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466064611
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:10:24 --> Security Class Initialized
DEBUG - 2016-06-16 16:10:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:10:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dd841751fa2140b4bc78defb5ec59930', '114.91.131.17', '2016-06-16', '16:10:24', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:10:24 --> 审核订单
DEBUG - 2016-06-16 16:10:24 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '96dbd24728e14d75bd57d8616077ec8a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 16:10:24 --> 过程调用语句：  execute USP_APSOS_outorder '96dbd24728e14d75bd57d8616077ec8a'
ERROR - 2016-06-16 16:10:24 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 16:10:24 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 16:10:24 --> Total execution time: 0.1060
DEBUG - 2016-06-16 16:10:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466064624
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:10:25 --> Security Class Initialized
DEBUG - 2016-06-16 16:10:25 --> CRSF cookie Set
DEBUG - 2016-06-16 16:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:10:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('49658ef5cc4b438d924adc5d638f7f21', '114.91.131.17', '2016-06-16', '16:10:25', '120340235', '/admin/order/check/96dbd24728e14d75bd57d8616077ec8a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:10:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:10:25 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='96dbd24728e14d75bd57d8616077ec8a' order by create_date_time desc
DEBUG - 2016-06-16 16:10:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:10:25 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='96dbd24728e14d75bd57d8616077ec8a'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:10:25 --> Total execution time: 0.0970
DEBUG - 2016-06-16 16:10:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466064625
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:36 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:10:36 --> Security Class Initialized
DEBUG - 2016-06-16 16:10:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:10:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('22c2e07578514c998fc771ac1239b5f0', '114.91.131.17', '2016-06-16', '16:10:36', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:10:36 --> 审核订单
DEBUG - 2016-06-16 16:10:36 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '96dbd24728e14d75bd57d8616077ec8a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 16:10:36 --> 过程调用语句：  execute USP_APSOS_outorder '96dbd24728e14d75bd57d8616077ec8a'
ERROR - 2016-06-16 16:10:36 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 16:10:36 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 16:10:36 --> Total execution time: 0.1090
DEBUG - 2016-06-16 16:10:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466064636
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:37 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:10:37 --> Security Class Initialized
DEBUG - 2016-06-16 16:10:37 --> CRSF cookie Set
DEBUG - 2016-06-16 16:10:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:10:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fd954e9480b54d01a353b1296a243647', '114.91.131.17', '2016-06-16', '16:10:37', '120340235', '/admin/order/check/96dbd24728e14d75bd57d8616077ec8a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:10:37 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:10:37 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='96dbd24728e14d75bd57d8616077ec8a' order by create_date_time desc
DEBUG - 2016-06-16 16:10:37 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:10:37 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='96dbd24728e14d75bd57d8616077ec8a'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:10:37 --> Total execution time: 0.0950
DEBUG - 2016-06-16 16:10:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466064637
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:10:49 --> Security Class Initialized
DEBUG - 2016-06-16 16:10:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:10:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('072be5ca81954aae97a9f6ba55f0a3e3', '114.91.131.17', '2016-06-16', '16:10:49', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:10:49 --> 审核订单
DEBUG - 2016-06-16 16:10:49 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '96dbd24728e14d75bd57d8616077ec8a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 16:10:49 --> 过程调用语句：  execute USP_APSOS_outorder '96dbd24728e14d75bd57d8616077ec8a'
ERROR - 2016-06-16 16:10:49 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 16:10:49 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 16:10:49 --> Total execution time: 0.1080
DEBUG - 2016-06-16 16:10:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466064649
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:10:50 --> Security Class Initialized
DEBUG - 2016-06-16 16:10:50 --> CRSF cookie Set
DEBUG - 2016-06-16 16:10:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:10:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:10:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7df63e359e7e43ed868123076bc227b4', '114.91.131.17', '2016-06-16', '16:10:50', '120340235', '/admin/order/check/96dbd24728e14d75bd57d8616077ec8a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8951eb74dcde2e69416b679c75a6fed043eebb30')
DEBUG - 2016-06-16 16:10:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:10:50 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='96dbd24728e14d75bd57d8616077ec8a' order by create_date_time desc
DEBUG - 2016-06-16 16:10:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:10:50 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='96dbd24728e14d75bd57d8616077ec8a'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:10:50 --> Total execution time: 0.0950
DEBUG - 2016-06-16 16:10:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466064650
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:37:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:37:25 --> Security Class Initialized
DEBUG - 2016-06-16 16:37:25 --> CRSF cookie Set
DEBUG - 2016-06-16 16:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:37:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:37:25 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '8951eb74dcde2e69416b679c75a6fed043eebb30'
DEBUG - 2016-06-16 16:37:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f73f69618ced4c3dbaa9a30b061ecd7c', '114.91.131.17', '2016-06-16', '16:37:25', '120340235', '/admin/order/check/96dbd24728e14d75bd57d8616077ec8a?uuid=96dbd24728e14d75bd57d8616077ec8a&consignee_name=%E4%BA%8E%E9%9B%B7&telphone=13904655045&address=%E5%93%88%E5%B0%94%E6%BB%A8%E5%B8%82%E5%8D%97%E5%B2%97%E5%8C%BA%E5%AE%A3%E5%8C%96%E8%A1%9758-2%E5%8F%B7', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:37:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:37:25 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='96dbd24728e14d75bd57d8616077ec8a' order by create_date_time desc
DEBUG - 2016-06-16 16:37:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:37:25 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='96dbd24728e14d75bd57d8616077ec8a'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:37:25 --> Total execution time: 0.1390
DEBUG - 2016-06-16 16:37:25 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4ca7a373261afa3bbdbb70c2e208156176c4ab26', '114.91.131.17', 1466066245, '__ci_last_regenerate|i:1466066245;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-16 16:37:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:37:31 --> Security Class Initialized
DEBUG - 2016-06-16 16:37:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:37:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:37:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('276f84dee5e44474a7128aa33eb53d1e', '114.91.131.17', '2016-06-16', '16:37:31', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:37:31 --> 审核订单
DEBUG - 2016-06-16 16:37:31 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '96dbd24728e14d75bd57d8616077ec8a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 16:37:31 --> 过程调用语句：  execute USP_APSOS_outorder '96dbd24728e14d75bd57d8616077ec8a'
ERROR - 2016-06-16 16:37:31 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 16:37:31 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 16:37:31 --> Total execution time: 0.1130
DEBUG - 2016-06-16 16:37:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066251
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:37:32 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:37:32 --> Security Class Initialized
DEBUG - 2016-06-16 16:37:32 --> CRSF cookie Set
DEBUG - 2016-06-16 16:37:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:37:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:37:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('03f640b8b8864e9fa83f585d2818d5ab', '114.91.131.17', '2016-06-16', '16:37:32', '120340235', '/admin/order/check/96dbd24728e14d75bd57d8616077ec8a?uuid=96dbd24728e14d75bd57d8616077ec8a&consignee_name=%E4%BA%8E%E9%9B%B7&telphone=13904655045&address=%E5%93%88%E5%B0%94%E6%BB%A8%E5%B8%82%E5%8D%97%E5%B2%97%E5%8C%BA%E5%AE%A3%E5%8C%96%E8%A1%9758-2%E5%8F%B7', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:37:32 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:37:32 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='96dbd24728e14d75bd57d8616077ec8a' order by create_date_time desc
DEBUG - 2016-06-16 16:37:32 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 16:37:32 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='96dbd24728e14d75bd57d8616077ec8a'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:37:32 --> Total execution time: 0.1070
DEBUG - 2016-06-16 16:37:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066252
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:38:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:38:53 --> Security Class Initialized
DEBUG - 2016-06-16 16:38:53 --> CRSF cookie Set
DEBUG - 2016-06-16 16:38:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:38:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:38:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9cd1a4aab4774327a86bf29201dd08a9', '114.91.131.17', '2016-06-16', '16:38:53', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:38:53 --> 查询待审核订单
DEBUG - 2016-06-16 16:38:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 16:38:53 --> Total execution time: 0.1000
DEBUG - 2016-06-16 16:38:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066333
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:39:02 --> Security Class Initialized
DEBUG - 2016-06-16 16:39:02 --> CRSF cookie Set
DEBUG - 2016-06-16 16:39:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:39:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c3be26f863594597b3ec108711e4e61a', '114.91.131.17', '2016-06-16', '16:39:02', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:39:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 16:39:02 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 16:39:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 16:39:02 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:39:02 --> Total execution time: 0.1150
DEBUG - 2016-06-16 16:39:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066342
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:39:14 --> Security Class Initialized
DEBUG - 2016-06-16 16:39:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:39:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4808bdd4ddc64c199e1a9f6e6c3ed3f4', '114.91.131.17', '2016-06-16', '16:39:14', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:39:14 --> 审核订单
DEBUG - 2016-06-16 16:39:14 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 16:39:14 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 16:39:14 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 16:39:14 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 16:39:14 --> Total execution time: 0.3880
DEBUG - 2016-06-16 16:39:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066354
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:39:15 --> Security Class Initialized
DEBUG - 2016-06-16 16:39:15 --> CRSF cookie Set
DEBUG - 2016-06-16 16:39:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:39:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('28b6d041bcc64988836d7d635dfccab4', '114.91.131.17', '2016-06-16', '16:39:15', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:39:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 16:39:15 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 16:39:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 16:39:15 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:39:15 --> Total execution time: 0.1180
DEBUG - 2016-06-16 16:39:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066355
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:39:18 --> Security Class Initialized
DEBUG - 2016-06-16 16:39:18 --> CRSF cookie Set
DEBUG - 2016-06-16 16:39:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:39:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('314e60650ec14ea18a35b2d38c70e61f', '114.91.131.17', '2016-06-16', '16:39:18', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:39:18 --> 查询待发货订单
DEBUG - 2016-06-16 16:39:18 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-16 16:39:18 --> Total execution time: 0.1830
DEBUG - 2016-06-16 16:39:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066358
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:39:25 --> Security Class Initialized
DEBUG - 2016-06-16 16:39:25 --> CRSF cookie Set
DEBUG - 2016-06-16 16:39:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:39:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9dc1dfcc10f748b88d79a60e9ec53359', '114.91.131.17', '2016-06-16', '16:39:25', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:39:25 --> 查询订单
DEBUG - 2016-06-16 16:39:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-16 16:39:25 --> Total execution time: 0.1160
DEBUG - 2016-06-16 16:39:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066365
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:39 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:39:39 --> Security Class Initialized
DEBUG - 2016-06-16 16:39:39 --> CRSF cookie Set
DEBUG - 2016-06-16 16:39:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:39:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('34bfabf9582f4f68962c906515854087', '114.91.131.17', '2016-06-16', '16:39:39', '120340235', '/admin/order/index/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:39:39 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 16:39:39 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 16:39:39 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 16:39:39 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:39:39 --> Total execution time: 0.1330
DEBUG - 2016-06-16 16:39:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066379
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:39:57 --> Security Class Initialized
DEBUG - 2016-06-16 16:39:57 --> CRSF cookie Set
DEBUG - 2016-06-16 16:39:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:39:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:39:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b20e79aedcf74ed68486a68d7f7c2598', '114.91.131.17', '2016-06-16', '16:39:57', '120340235', '/admin/order/index/e71823512f2a48bbb32dae54092ddd02?uuid=e71823512f2a48bbb32dae54092ddd02&consignee_name=%E6%AF%95%E6%AD%A3%E5%B9%B3&telphone=13700627609&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:39:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 16:39:57 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 16:39:57 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 16:39:57 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:39:57 --> Total execution time: 0.1150
DEBUG - 2016-06-16 16:39:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066397
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:40:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:40:01 --> Security Class Initialized
DEBUG - 2016-06-16 16:40:01 --> CRSF cookie Set
DEBUG - 2016-06-16 16:40:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:40:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:40:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fbf9f904ce394fb7b976de6d9eacbfaa', '114.91.131.17', '2016-06-16', '16:40:01', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:40:01 --> 查询待发货订单
DEBUG - 2016-06-16 16:40:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-16 16:40:01 --> Total execution time: 0.0910
DEBUG - 2016-06-16 16:40:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066401
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:40:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:40:02 --> Security Class Initialized
DEBUG - 2016-06-16 16:40:02 --> CRSF cookie Set
DEBUG - 2016-06-16 16:40:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:40:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:40:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('00a7931ffb764b6cabe730d505069657', '114.91.131.17', '2016-06-16', '16:40:03', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:40:03 --> 查询待审核订单
DEBUG - 2016-06-16 16:40:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 16:40:03 --> Total execution time: 0.0820
DEBUG - 2016-06-16 16:40:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066403
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:40:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:40:05 --> Security Class Initialized
DEBUG - 2016-06-16 16:40:05 --> CRSF cookie Set
DEBUG - 2016-06-16 16:40:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:40:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:40:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7ca02ab8e9a94fa5921369159e874014', '114.91.131.17', '2016-06-16', '16:40:05', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:40:05 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 16:40:05 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 16:40:05 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 16:40:05 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:40:05 --> Total execution time: 0.1250
DEBUG - 2016-06-16 16:40:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066405
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:40:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 16:40:10 --> Security Class Initialized
DEBUG - 2016-06-16 16:40:10 --> CRSF cookie Set
DEBUG - 2016-06-16 16:40:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 16:40:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 16:40:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a7195eae1d094fe8b070828b7efd8282', '114.91.131.17', '2016-06-16', '16:40:10', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02?uuid=e71823512f2a48bbb32dae54092ddd02&consignee_name=%E6%AF%95%E6%AD%A3%E5%B9%B3&telphone=13700627609&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4ca7a373261afa3bbdbb70c2e208156176c4ab26')
DEBUG - 2016-06-16 16:40:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 16:40:10 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 16:40:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 16:40:10 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 16:40:10 --> Total execution time: 0.1400
DEBUG - 2016-06-16 16:40:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466066410
WHERE id = '4ca7a373261afa3bbdbb70c2e208156176c4ab26'
DEBUG - 2016-06-16 18:45:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:45:58 --> CRSF cookie Set
DEBUG - 2016-06-16 18:45:58 --> Security Class Initialized
DEBUG - 2016-06-16 18:45:58 --> CRSF cookie Set
DEBUG - 2016-06-16 18:45:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:45:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:45:58 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7c35a9a3712e562ace30e303df8533e2c2e65858', '27.152.95.0', 1466073958, '__ci_last_regenerate|i:1466073958;')
DEBUG - 2016-06-16 18:45:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:45:58 --> Security Class Initialized
DEBUG - 2016-06-16 18:45:58 --> CRSF cookie Set
DEBUG - 2016-06-16 18:45:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:45:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:45:58 --> Total execution time: 0.1300
DEBUG - 2016-06-16 18:45:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466073958
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:46:04 --> Security Class Initialized
DEBUG - 2016-06-16 18:46:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:46:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:04 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-06-16 18:46:04 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-06-16 18:46:04 --> 登录返回结果数：1
DEBUG - 2016-06-16 18:46:05 --> 成功登录
DEBUG - 2016-06-16 18:46:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466073965, data = '__ci_last_regenerate|i:1466073958;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:46:05 --> Security Class Initialized
DEBUG - 2016-06-16 18:46:05 --> CRSF cookie Set
DEBUG - 2016-06-16 18:46:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:46:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('300e855023da4162b3b594681d4df2ed', '27.152.95.0', '2016-06-16', '18:46:05', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '7c35a9a3712e562ace30e303df8533e2c2e65858')
DEBUG - 2016-06-16 18:46:05 --> 查询待审核订单
DEBUG - 2016-06-16 18:46:05 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 18:46:05 --> Total execution time: 0.2000
DEBUG - 2016-06-16 18:46:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466073965
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:46:13 --> Security Class Initialized
DEBUG - 2016-06-16 18:46:13 --> CRSF cookie Set
DEBUG - 2016-06-16 18:46:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:46:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('af7ec1e0caf648a3b041a100dede7c2e', '27.152.95.0', '2016-06-16', '18:46:13', '120340234', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '7c35a9a3712e562ace30e303df8533e2c2e65858')
DEBUG - 2016-06-16 18:46:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 18:46:13 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 18:46:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 18:46:13 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 18:46:13 --> Total execution time: 0.3200
DEBUG - 2016-06-16 18:46:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466073973
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:46:21 --> Security Class Initialized
DEBUG - 2016-06-16 18:46:21 --> CRSF cookie Set
DEBUG - 2016-06-16 18:46:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:46:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a75fc12937cf4e7a82a3d018eb647fab', '27.152.95.0', '2016-06-16', '18:46:21', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '7c35a9a3712e562ace30e303df8533e2c2e65858')
DEBUG - 2016-06-16 18:46:21 --> 查询待审核订单
DEBUG - 2016-06-16 18:46:21 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 18:46:21 --> Total execution time: 0.1900
DEBUG - 2016-06-16 18:46:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466073981
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:46:24 --> Security Class Initialized
DEBUG - 2016-06-16 18:46:24 --> CRSF cookie Set
DEBUG - 2016-06-16 18:46:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:46:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('77deb1c2aaee473ea55896c500af6510', '27.152.95.0', '2016-06-16', '18:46:24', '120340234', '/admin/order/check/96dbd24728e14d75bd57d8616077ec8a', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '7c35a9a3712e562ace30e303df8533e2c2e65858')
DEBUG - 2016-06-16 18:46:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 18:46:25 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='96dbd24728e14d75bd57d8616077ec8a' order by create_date_time desc
DEBUG - 2016-06-16 18:46:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 18:46:25 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='96dbd24728e14d75bd57d8616077ec8a'    order by t1.lno asc
        
DEBUG - 2016-06-16 18:46:25 --> Total execution time: 0.2400
DEBUG - 2016-06-16 18:46:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466073985
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:41 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:46:41 --> Security Class Initialized
DEBUG - 2016-06-16 18:46:41 --> CRSF cookie Set
DEBUG - 2016-06-16 18:46:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:46:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bd6d3813e87a45448127a0f0b6a1e43e', '27.152.95.0', '2016-06-16', '18:46:41', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '7c35a9a3712e562ace30e303df8533e2c2e65858')
DEBUG - 2016-06-16 18:46:41 --> 查询待发货订单
DEBUG - 2016-06-16 18:46:41 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-16 18:46:41 --> Total execution time: 0.1900
DEBUG - 2016-06-16 18:46:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466074001
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:46:43 --> Security Class Initialized
DEBUG - 2016-06-16 18:46:43 --> CRSF cookie Set
DEBUG - 2016-06-16 18:46:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:46:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c60380ea1930488185081be639ab108c', '27.152.95.0', '2016-06-16', '18:46:43', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '7c35a9a3712e562ace30e303df8533e2c2e65858')
DEBUG - 2016-06-16 18:46:43 --> 查询待审核订单
DEBUG - 2016-06-16 18:46:43 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 18:46:43 --> Total execution time: 0.0800
DEBUG - 2016-06-16 18:46:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466074003
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:46:47 --> Security Class Initialized
DEBUG - 2016-06-16 18:46:47 --> CRSF cookie Set
DEBUG - 2016-06-16 18:46:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:46:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('23a202db0aca4860bac8c279a373ba47', '27.152.95.0', '2016-06-16', '18:46:47', '120340234', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '7c35a9a3712e562ace30e303df8533e2c2e65858')
DEBUG - 2016-06-16 18:46:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 18:46:47 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 18:46:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 18:46:47 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 18:46:47 --> Total execution time: 0.1100
DEBUG - 2016-06-16 18:46:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466074007
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:46:58 --> Security Class Initialized
DEBUG - 2016-06-16 18:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:46:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bdf15490211f4102a38e615fb0701e07', '27.152.95.0', '2016-06-16', '18:46:58', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '7c35a9a3712e562ace30e303df8533e2c2e65858')
DEBUG - 2016-06-16 18:46:58 --> 审核订单
DEBUG - 2016-06-16 18:46:58 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 18:46:58 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 18:46:59 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 18:46:59 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 18:46:59 --> Total execution time: 0.4600
DEBUG - 2016-06-16 18:46:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466074019
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:59 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:46:59 --> Security Class Initialized
DEBUG - 2016-06-16 18:46:59 --> CRSF cookie Set
DEBUG - 2016-06-16 18:46:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:46:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:46:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('12df94e5399c4b818fa8be0f36d1db8e', '27.152.95.0', '2016-06-16', '18:46:59', '120340234', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '7c35a9a3712e562ace30e303df8533e2c2e65858')
DEBUG - 2016-06-16 18:46:59 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 18:46:59 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 18:46:59 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 18:46:59 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 18:46:59 --> Total execution time: 0.1400
DEBUG - 2016-06-16 18:46:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466074019
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 18:56:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:56:26 --> No URI present. Default controller set.
DEBUG - 2016-06-16 18:56:26 --> CRSF cookie Set
DEBUG - 2016-06-16 18:56:26 --> Security Class Initialized
DEBUG - 2016-06-16 18:56:26 --> CRSF cookie Set
DEBUG - 2016-06-16 18:56:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:56:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:56:27 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5444d3b4e70f87ef9b4b6722ae976a1b96947d02', '114.91.131.17', 1466074587, '__ci_last_regenerate|i:1466074587;')
DEBUG - 2016-06-16 18:56:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:56:27 --> Security Class Initialized
DEBUG - 2016-06-16 18:56:27 --> CRSF cookie Set
DEBUG - 2016-06-16 18:56:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:56:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:56:27 --> Total execution time: 0.1090
DEBUG - 2016-06-16 18:56:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466074587
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:56:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:56:44 --> Security Class Initialized
DEBUG - 2016-06-16 18:56:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:56:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:56:44 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-06-16 18:56:44 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-06-16 18:56:44 --> 登录返回结果数：1
DEBUG - 2016-06-16 18:56:44 --> 成功登录
DEBUG - 2016-06-16 18:56:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466074604, data = '__ci_last_regenerate|i:1466074587;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:56:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:56:45 --> No URI present. Default controller set.
DEBUG - 2016-06-16 18:56:45 --> Security Class Initialized
DEBUG - 2016-06-16 18:56:45 --> CRSF cookie Set
DEBUG - 2016-06-16 18:56:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:56:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:56:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('86ff607147eb41ecb0e36ac71a336147', '114.91.131.17', '2016-06-16', '18:56:45', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '5444d3b4e70f87ef9b4b6722ae976a1b96947d02')
DEBUG - 2016-06-16 18:56:45 --> Total execution time: 0.1400
DEBUG - 2016-06-16 18:56:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466074605
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:56:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:56:51 --> Security Class Initialized
DEBUG - 2016-06-16 18:56:51 --> CRSF cookie Set
DEBUG - 2016-06-16 18:56:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:56:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:56:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f5c83c57a6f94f4dbdeaa80e1592ee37', '114.91.131.17', '2016-06-16', '18:56:51', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '5444d3b4e70f87ef9b4b6722ae976a1b96947d02')
DEBUG - 2016-06-16 18:56:51 --> 查询待审核订单
DEBUG - 2016-06-16 18:56:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 18:56:51 --> Total execution time: 0.1480
DEBUG - 2016-06-16 18:56:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466074611
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:56:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:56:56 --> Security Class Initialized
DEBUG - 2016-06-16 18:56:56 --> CRSF cookie Set
DEBUG - 2016-06-16 18:56:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:56:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:56:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2b0032d9b7124dcbb65cf48d997ead7d', '114.91.131.17', '2016-06-16', '18:56:56', '120340234', '/admin/order/check/96dbd24728e14d75bd57d8616077ec8a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '5444d3b4e70f87ef9b4b6722ae976a1b96947d02')
DEBUG - 2016-06-16 18:56:56 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 18:56:56 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='96dbd24728e14d75bd57d8616077ec8a' order by create_date_time desc
DEBUG - 2016-06-16 18:56:56 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 18:56:56 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='96dbd24728e14d75bd57d8616077ec8a'    order by t1.lno asc
        
DEBUG - 2016-06-16 18:56:56 --> Total execution time: 0.1120
DEBUG - 2016-06-16 18:56:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466074616
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:57:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:57:10 --> Security Class Initialized
DEBUG - 2016-06-16 18:57:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:57:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:57:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f107727b1f43418eae0d3036f1483ae5', '114.91.131.17', '2016-06-16', '18:57:10', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '5444d3b4e70f87ef9b4b6722ae976a1b96947d02')
DEBUG - 2016-06-16 18:57:10 --> 审核订单
DEBUG - 2016-06-16 18:57:10 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '96dbd24728e14d75bd57d8616077ec8a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 18:57:10 --> 过程调用语句：  execute USP_APSOS_outorder '96dbd24728e14d75bd57d8616077ec8a'
ERROR - 2016-06-16 18:57:10 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 18:57:10 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 18:57:10 --> Total execution time: 0.6000
DEBUG - 2016-06-16 18:57:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466074630
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:57:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:57:10 --> Security Class Initialized
DEBUG - 2016-06-16 18:57:10 --> CRSF cookie Set
DEBUG - 2016-06-16 18:57:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:57:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:57:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f15d86eb0e074f75a5ffe5f46d8036b6', '114.91.131.17', '2016-06-16', '18:57:10', '120340234', '/admin/order/check/96dbd24728e14d75bd57d8616077ec8a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '5444d3b4e70f87ef9b4b6722ae976a1b96947d02')
DEBUG - 2016-06-16 18:57:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 18:57:10 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='96dbd24728e14d75bd57d8616077ec8a' order by create_date_time desc
DEBUG - 2016-06-16 18:57:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 18:57:10 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='96dbd24728e14d75bd57d8616077ec8a'    order by t1.lno asc
        
DEBUG - 2016-06-16 18:57:10 --> Total execution time: 0.1110
DEBUG - 2016-06-16 18:57:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466074630
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 18:58:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:58:25 --> No URI present. Default controller set.
DEBUG - 2016-06-16 18:58:25 --> CRSF cookie Set
DEBUG - 2016-06-16 18:58:25 --> Security Class Initialized
DEBUG - 2016-06-16 18:58:25 --> CRSF cookie Set
DEBUG - 2016-06-16 18:58:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:58:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '76fc52c44dd3e009686b91d203e8ac1a126674b3'
DEBUG - 2016-06-16 18:58:26 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('76fc52c44dd3e009686b91d203e8ac1a126674b3', '182.140.230.18', 1466074706, '__ci_last_regenerate|i:1466074706;')
DEBUG - 2016-06-16 18:58:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:58:26 --> CRSF cookie Set
DEBUG - 2016-06-16 18:58:26 --> Security Class Initialized
DEBUG - 2016-06-16 18:58:26 --> CRSF cookie Set
DEBUG - 2016-06-16 18:58:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:58:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd288bd55d174eac39388ed1a7e0614db30d782f8'
DEBUG - 2016-06-16 18:58:26 --> Total execution time: 0.0900
DEBUG - 2016-06-16 18:58:26 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d288bd55d174eac39388ed1a7e0614db30d782f8', '182.140.230.18', 1466074706, '__ci_last_regenerate|i:1466074706;')
DEBUG - 2016-06-16 18:58:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:58:46 --> No URI present. Default controller set.
DEBUG - 2016-06-16 18:58:46 --> CRSF cookie Set
DEBUG - 2016-06-16 18:58:46 --> Security Class Initialized
DEBUG - 2016-06-16 18:58:46 --> CRSF cookie Set
DEBUG - 2016-06-16 18:58:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:58:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd0dd066183342d77a31ad59c7de1f707c48bb38b'
DEBUG - 2016-06-16 18:58:46 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d0dd066183342d77a31ad59c7de1f707c48bb38b', '220.181.132.194', 1466074726, '__ci_last_regenerate|i:1466074726;')
DEBUG - 2016-06-16 18:58:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 18:58:46 --> Security Class Initialized
DEBUG - 2016-06-16 18:58:46 --> CRSF cookie Set
DEBUG - 2016-06-16 18:58:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 18:58:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd0dd066183342d77a31ad59c7de1f707c48bb38b'
DEBUG - 2016-06-16 18:58:46 --> Total execution time: 0.0920
DEBUG - 2016-06-16 18:58:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466074726
WHERE id = 'd0dd066183342d77a31ad59c7de1f707c48bb38b'
DEBUG - 2016-06-16 19:09:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:09:07 --> Security Class Initialized
DEBUG - 2016-06-16 19:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:09:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 19:09:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('61e23cdeb78c4994a696dea78dd36559', '114.91.131.17', '2016-06-16', '19:09:07', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '5444d3b4e70f87ef9b4b6722ae976a1b96947d02')
DEBUG - 2016-06-16 19:09:07 --> 审核订单
DEBUG - 2016-06-16 19:09:07 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '96dbd24728e14d75bd57d8616077ec8a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 19:09:07 --> 过程调用语句：  execute USP_APSOS_outorder '96dbd24728e14d75bd57d8616077ec8a'
ERROR - 2016-06-16 19:09:07 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 19:09:07 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 19:09:07 --> Total execution time: 0.2730
DEBUG - 2016-06-16 19:09:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466075347
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 19:09:08 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:09:08 --> Security Class Initialized
DEBUG - 2016-06-16 19:09:08 --> CRSF cookie Set
DEBUG - 2016-06-16 19:09:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:09:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 19:09:08 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '5444d3b4e70f87ef9b4b6722ae976a1b96947d02'
DEBUG - 2016-06-16 19:09:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('92af91e018c8428e91c92b9438ee7d0f', '114.91.131.17', '2016-06-16', '19:09:08', '120340234', '/admin/order/check/96dbd24728e14d75bd57d8616077ec8a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '93931088b5737e9b5fd5d1a2bdf78191bc43aab7')
DEBUG - 2016-06-16 19:09:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 19:09:08 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='96dbd24728e14d75bd57d8616077ec8a' order by create_date_time desc
DEBUG - 2016-06-16 19:09:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='96dbd24728e14d75bd57d8616077ec8a'
DEBUG - 2016-06-16 19:09:08 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='96dbd24728e14d75bd57d8616077ec8a'    order by t1.lno asc
        
DEBUG - 2016-06-16 19:09:08 --> Total execution time: 0.1190
DEBUG - 2016-06-16 19:09:08 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('93931088b5737e9b5fd5d1a2bdf78191bc43aab7', '114.91.131.17', 1466075348, '__ci_last_regenerate|i:1466075348;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-16 19:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:10:31 --> Security Class Initialized
DEBUG - 2016-06-16 19:10:31 --> CRSF cookie Set
DEBUG - 2016-06-16 19:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:10:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 19:10:31 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '7c35a9a3712e562ace30e303df8533e2c2e65858'
DEBUG - 2016-06-16 19:10:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d54ce781585b4a99b6c55f62485a2c48', '27.152.95.0', '2016-06-16', '19:10:31', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '2e67de4b5012a1a8d939548e6e4290c601178784')
DEBUG - 2016-06-16 19:10:31 --> 查询待审核订单
DEBUG - 2016-06-16 19:10:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 19:10:31 --> Total execution time: 0.1200
DEBUG - 2016-06-16 19:10:31 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2e67de4b5012a1a8d939548e6e4290c601178784', '27.152.95.0', 1466075431, '__ci_last_regenerate|i:1466075431;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-16 19:11:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:11:03 --> Security Class Initialized
DEBUG - 2016-06-16 19:11:03 --> CRSF cookie Set
DEBUG - 2016-06-16 19:11:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:11:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e67de4b5012a1a8d939548e6e4290c601178784'
DEBUG - 2016-06-16 19:11:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('02bba27c39fe471e9eaa5028fa1d5ff9', '27.152.95.0', '2016-06-16', '19:11:03', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '2e67de4b5012a1a8d939548e6e4290c601178784')
DEBUG - 2016-06-16 19:11:03 --> 查询待发货订单
DEBUG - 2016-06-16 19:11:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-16 19:11:03 --> Total execution time: 0.1000
DEBUG - 2016-06-16 19:11:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466075463
WHERE id = '2e67de4b5012a1a8d939548e6e4290c601178784'
DEBUG - 2016-06-16 19:11:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:11:05 --> Security Class Initialized
DEBUG - 2016-06-16 19:11:05 --> CRSF cookie Set
DEBUG - 2016-06-16 19:11:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:11:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e67de4b5012a1a8d939548e6e4290c601178784'
DEBUG - 2016-06-16 19:11:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a7ac35e1e50e4ebe8201a4950ff17780', '27.152.95.0', '2016-06-16', '19:11:05', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '2e67de4b5012a1a8d939548e6e4290c601178784')
DEBUG - 2016-06-16 19:11:05 --> 查询待审核订单
DEBUG - 2016-06-16 19:11:05 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 19:11:05 --> Total execution time: 0.0800
DEBUG - 2016-06-16 19:11:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466075465
WHERE id = '2e67de4b5012a1a8d939548e6e4290c601178784'
DEBUG - 2016-06-16 19:31:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:31:46 --> CRSF cookie Set
DEBUG - 2016-06-16 19:31:46 --> Security Class Initialized
DEBUG - 2016-06-16 19:31:46 --> CRSF cookie Set
DEBUG - 2016-06-16 19:31:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:31:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:31:46 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8', '114.91.131.17', 1466076706, '__ci_last_regenerate|i:1466076706;')
DEBUG - 2016-06-16 19:31:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:31:46 --> Security Class Initialized
DEBUG - 2016-06-16 19:31:46 --> CRSF cookie Set
DEBUG - 2016-06-16 19:31:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:31:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:31:46 --> Total execution time: 0.0624
DEBUG - 2016-06-16 19:31:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466076706
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:31:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:31:47 --> Security Class Initialized
DEBUG - 2016-06-16 19:31:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:31:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:31:47 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-16 19:31:47 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-16 19:31:47 --> 登录返回结果数：1
DEBUG - 2016-06-16 19:31:47 --> 成功登录
DEBUG - 2016-06-16 19:31:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466076707, data = '__ci_last_regenerate|i:1466076706;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:31:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:31:47 --> Security Class Initialized
DEBUG - 2016-06-16 19:31:47 --> CRSF cookie Set
DEBUG - 2016-06-16 19:31:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:31:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:31:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3722814ccb4c48d0962ea4326cb8fea4', '114.91.131.17', '2016-06-16', '19:31:47', '120340235', '/admin/order/check/0fd260640a3249aea0b6821c91f3f444', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8')
DEBUG - 2016-06-16 19:31:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-16 19:31:47 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0fd260640a3249aea0b6821c91f3f444' order by create_date_time desc
DEBUG - 2016-06-16 19:31:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-16 19:31:47 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0fd260640a3249aea0b6821c91f3f444'    order by t1.lno asc
        
DEBUG - 2016-06-16 19:31:47 --> Total execution time: 0.0936
DEBUG - 2016-06-16 19:31:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466076707
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:31:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:31:54 --> Security Class Initialized
DEBUG - 2016-06-16 19:31:54 --> CRSF cookie Set
DEBUG - 2016-06-16 19:31:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:31:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:31:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5410cba190f84892913d575300a0e907', '114.91.131.17', '2016-06-16', '19:31:54', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8')
DEBUG - 2016-06-16 19:31:54 --> 查询待审核订单
DEBUG - 2016-06-16 19:31:54 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 19:31:54 --> Total execution time: 0.1092
DEBUG - 2016-06-16 19:31:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466076714
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:33:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:33:47 --> Security Class Initialized
DEBUG - 2016-06-16 19:33:47 --> CRSF cookie Set
DEBUG - 2016-06-16 19:33:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:33:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:33:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3149a703f3044809953b452bf74def0b', '114.91.131.17', '2016-06-16', '19:33:47', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8')
DEBUG - 2016-06-16 19:33:47 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-16 19:33:47 --> Total execution time: 0.3900
DEBUG - 2016-06-16 19:33:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466076827
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:34:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:34:06 --> Security Class Initialized
DEBUG - 2016-06-16 19:34:06 --> CRSF cookie Set
DEBUG - 2016-06-16 19:34:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:34:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:34:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d1e19b6bb7c64f43b712db06ada1f0d5', '114.91.131.17', '2016-06-16', '19:34:07', '120340235', '/admin/guest/edit/K05037', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8')
DEBUG - 2016-06-16 19:34:07 --> 修改客户信息：K05037
DEBUG - 2016-06-16 19:34:07 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05037' 
DEBUG - 2016-06-16 19:34:07 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05037' 
DEBUG - 2016-06-16 19:34:07 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-16 19:34:07 --> Total execution time: 0.1404
DEBUG - 2016-06-16 19:34:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466076847
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:34:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:34:23 --> Security Class Initialized
DEBUG - 2016-06-16 19:34:23 --> CRSF cookie Set
DEBUG - 2016-06-16 19:34:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:34:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:34:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0aca9943afed40c59fc560c7492c3f44', '114.91.131.17', '2016-06-16', '19:34:23', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8')
DEBUG - 2016-06-16 19:34:23 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-16 19:34:23 --> Total execution time: 0.0936
DEBUG - 2016-06-16 19:34:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466076863
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:34:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:34:40 --> Security Class Initialized
DEBUG - 2016-06-16 19:34:40 --> CRSF cookie Set
DEBUG - 2016-06-16 19:34:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:34:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:34:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ebdfa50739ad44528a5f6115d85c0616', '114.91.131.17', '2016-06-16', '19:34:40', '120340235', '/admin/guest/edit/K05033', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8')
DEBUG - 2016-06-16 19:34:40 --> 修改客户信息：K05033
DEBUG - 2016-06-16 19:34:40 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05033' 
DEBUG - 2016-06-16 19:34:40 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05033' 
DEBUG - 2016-06-16 19:34:40 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-16 19:34:40 --> Total execution time: 0.1404
DEBUG - 2016-06-16 19:34:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466076880
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:37:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:37:28 --> Security Class Initialized
DEBUG - 2016-06-16 19:37:28 --> CRSF cookie Set
DEBUG - 2016-06-16 19:37:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:37:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:37:28 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'b531b1f8535be5eb1d57b3f3beaa3bdb495ef6e8'
DEBUG - 2016-06-16 19:37:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e8b2d5028dcc4d58bb17a14d4883f60d', '114.91.131.17', '2016-06-16', '19:37:28', '120340235', '/admin/order/check/db1fd10cf5d14dd3bd1bd692dc96e029', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e559242eb38deb41fb30f3ab876652ca3323631e')
DEBUG - 2016-06-16 19:37:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-16 19:37:28 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='db1fd10cf5d14dd3bd1bd692dc96e029' order by create_date_time desc
DEBUG - 2016-06-16 19:37:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-16 19:37:28 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='db1fd10cf5d14dd3bd1bd692dc96e029'    order by t1.lno asc
        
DEBUG - 2016-06-16 19:37:28 --> Total execution time: 0.0936
DEBUG - 2016-06-16 19:37:28 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e559242eb38deb41fb30f3ab876652ca3323631e', '114.91.131.17', 1466077048, '__ci_last_regenerate|i:1466077048;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-16 19:37:37 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:37:37 --> Security Class Initialized
DEBUG - 2016-06-16 19:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:37:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e559242eb38deb41fb30f3ab876652ca3323631e'
DEBUG - 2016-06-16 19:37:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('58b442cb3c6f4aa28af52708033e386f', '114.91.131.17', '2016-06-16', '19:37:37', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e559242eb38deb41fb30f3ab876652ca3323631e')
DEBUG - 2016-06-16 19:37:37 --> 审核订单
DEBUG - 2016-06-16 19:37:37 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'db1fd10cf5d14dd3bd1bd692dc96e029'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 19:37:37 --> 过程调用语句：  execute USP_APSOS_outorder 'db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-16 19:37:38 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'db1fd10cf5d14dd3bd1bd692dc96e029', '2', '', '5b6a4c92267a427cbe63b5642a1461fe', '2016-06-16 19:37:38')
DEBUG - 2016-06-16 19:37:38 --> 该订单状态更新成功:2
DEBUG - 2016-06-16 19:37:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-16 19:37:38 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05033'
DEBUG - 2016-06-16 19:37:38 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-16 19:37:38 --> Total execution time: 0.9672
DEBUG - 2016-06-16 19:37:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077058
WHERE id = 'e559242eb38deb41fb30f3ab876652ca3323631e'
DEBUG - 2016-06-16 19:37:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:37:38 --> Security Class Initialized
DEBUG - 2016-06-16 19:37:38 --> CRSF cookie Set
DEBUG - 2016-06-16 19:37:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:37:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e559242eb38deb41fb30f3ab876652ca3323631e'
DEBUG - 2016-06-16 19:37:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d7868b784b884d8db08cbf0da8b8fd4a', '114.91.131.17', '2016-06-16', '19:37:38', '120340235', '/admin/order/check/db1fd10cf5d14dd3bd1bd692dc96e029', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e559242eb38deb41fb30f3ab876652ca3323631e')
DEBUG - 2016-06-16 19:37:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-16 19:37:38 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='db1fd10cf5d14dd3bd1bd692dc96e029' order by create_date_time desc
DEBUG - 2016-06-16 19:37:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-16 19:37:38 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='db1fd10cf5d14dd3bd1bd692dc96e029'    order by t1.lno asc
        
DEBUG - 2016-06-16 19:37:38 --> Total execution time: 0.0780
DEBUG - 2016-06-16 19:37:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077058
WHERE id = 'e559242eb38deb41fb30f3ab876652ca3323631e'
DEBUG - 2016-06-16 19:43:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:43:57 --> Security Class Initialized
DEBUG - 2016-06-16 19:43:57 --> CRSF cookie Set
DEBUG - 2016-06-16 19:43:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:43:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e559242eb38deb41fb30f3ab876652ca3323631e'
DEBUG - 2016-06-16 19:43:57 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'e559242eb38deb41fb30f3ab876652ca3323631e'
DEBUG - 2016-06-16 19:43:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('45f503137d6e4f2aa96fedcffc72d749', '114.91.131.17', '2016-06-16', '19:43:57', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:43:57 --> 查询待审核订单
DEBUG - 2016-06-16 19:43:57 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 19:43:57 --> Total execution time: 0.1092
DEBUG - 2016-06-16 19:43:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4d69509e8dd8f9394a03d780434de1cdc1296e4b', '114.91.131.17', 1466077437, '__ci_last_regenerate|i:1466077437;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-16 19:44:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:44:00 --> Security Class Initialized
DEBUG - 2016-06-16 19:44:00 --> CRSF cookie Set
DEBUG - 2016-06-16 19:44:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:44:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:44:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9e1ce2874d67441cba82776bec0eb201', '114.91.131.17', '2016-06-16', '19:44:00', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:44:00 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 19:44:00 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 19:44:00 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 19:44:00 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 19:44:00 --> Total execution time: 0.1248
DEBUG - 2016-06-16 19:44:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077440
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:44:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:44:07 --> Security Class Initialized
DEBUG - 2016-06-16 19:44:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:44:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:44:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c2650f9fb76741b3a86836a567765f9b', '114.91.131.17', '2016-06-16', '19:44:07', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:44:07 --> 审核订单
DEBUG - 2016-06-16 19:44:07 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 19:44:07 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 19:44:07 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 19:44:07 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 19:44:07 --> Total execution time: 0.1092
DEBUG - 2016-06-16 19:44:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077447
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:44:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:44:07 --> Security Class Initialized
DEBUG - 2016-06-16 19:44:07 --> CRSF cookie Set
DEBUG - 2016-06-16 19:44:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:44:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:44:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a8f2925a96ec49e191074899cc133d6b', '114.91.131.17', '2016-06-16', '19:44:07', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:44:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 19:44:07 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 19:44:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 19:44:07 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 19:44:07 --> Total execution time: 0.0936
DEBUG - 2016-06-16 19:44:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077447
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:44:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:44:14 --> Security Class Initialized
DEBUG - 2016-06-16 19:44:14 --> CRSF cookie Set
DEBUG - 2016-06-16 19:44:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:44:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:44:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('15f7d91e01764d93967fb824ee733581', '114.91.131.17', '2016-06-16', '19:44:14', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:44:14 --> 查询待审核订单
DEBUG - 2016-06-16 19:44:14 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 19:44:14 --> Total execution time: 0.0780
DEBUG - 2016-06-16 19:44:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077454
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:44:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:44:21 --> Security Class Initialized
DEBUG - 2016-06-16 19:44:21 --> CRSF cookie Set
DEBUG - 2016-06-16 19:44:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:44:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:44:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6cee63f0e96540c3acb9bec193b58bbe', '114.91.131.17', '2016-06-16', '19:44:21', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:44:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 19:44:21 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 19:44:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 19:44:21 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 19:44:21 --> Total execution time: 0.0936
DEBUG - 2016-06-16 19:44:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077461
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:44:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:44:29 --> Security Class Initialized
DEBUG - 2016-06-16 19:44:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:44:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:44:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('47c09cda1d9e45f188e4da412cc32f69', '114.91.131.17', '2016-06-16', '19:44:29', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:44:29 --> 审核订单
DEBUG - 2016-06-16 19:44:29 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'e71823512f2a48bbb32dae54092ddd02'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-16 19:44:29 --> 过程调用语句：  execute USP_APSOS_outorder 'e71823512f2a48bbb32dae54092ddd02'
ERROR - 2016-06-16 19:44:29 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-16 19:44:29 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-16 19:44:29 --> Total execution time: 0.0936
DEBUG - 2016-06-16 19:44:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077469
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:44:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:44:29 --> Security Class Initialized
DEBUG - 2016-06-16 19:44:29 --> CRSF cookie Set
DEBUG - 2016-06-16 19:44:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:44:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:44:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2a034cc7a0ea446497eef8a0587bad8a', '114.91.131.17', '2016-06-16', '19:44:29', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:44:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 19:44:29 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 19:44:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 19:44:29 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 19:44:29 --> Total execution time: 0.0936
DEBUG - 2016-06-16 19:44:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077469
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:45:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:45:42 --> Security Class Initialized
DEBUG - 2016-06-16 19:45:42 --> CRSF cookie Set
DEBUG - 2016-06-16 19:45:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:45:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:45:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f6dc610498d243c0b5d0cca073331cde', '114.91.131.17', '2016-06-16', '19:45:42', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:45:42 --> 查询待审核订单
DEBUG - 2016-06-16 19:45:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 19:45:42 --> Total execution time: 0.0936
DEBUG - 2016-06-16 19:45:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077542
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:45:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:45:43 --> Security Class Initialized
DEBUG - 2016-06-16 19:45:43 --> CRSF cookie Set
DEBUG - 2016-06-16 19:45:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:45:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:45:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1ab699fe94f14916a26faae2277b1126', '114.91.131.17', '2016-06-16', '19:45:43', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:45:44 --> 查询待审核订单
DEBUG - 2016-06-16 19:45:44 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 19:45:44 --> Total execution time: 0.0936
DEBUG - 2016-06-16 19:45:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077544
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:45:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:45:45 --> Security Class Initialized
DEBUG - 2016-06-16 19:45:45 --> CRSF cookie Set
DEBUG - 2016-06-16 19:45:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:45:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:45:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7ffcfeec778c43eb9452828d366a9394', '114.91.131.17', '2016-06-16', '19:45:45', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:45:45 --> 查询待发货订单
DEBUG - 2016-06-16 19:45:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-16 19:45:45 --> Total execution time: 0.0936
DEBUG - 2016-06-16 19:45:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077545
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:45:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:45:56 --> Security Class Initialized
DEBUG - 2016-06-16 19:45:56 --> CRSF cookie Set
DEBUG - 2016-06-16 19:45:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:45:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:45:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2e48ffb8acf0480e974e875b59fa89de', '114.91.131.17', '2016-06-16', '19:45:56', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:45:56 --> 查询待审核订单
DEBUG - 2016-06-16 19:45:56 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-16 19:45:56 --> Total execution time: 0.0780
DEBUG - 2016-06-16 19:45:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077556
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:45:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:45:58 --> Security Class Initialized
DEBUG - 2016-06-16 19:45:58 --> CRSF cookie Set
DEBUG - 2016-06-16 19:45:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:45:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:45:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('04bc7fdb009048c6aac6d569f2c500c4', '114.91.131.17', '2016-06-16', '19:45:58', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:45:58 --> 查询订单
DEBUG - 2016-06-16 19:45:58 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-16 19:45:58 --> Total execution time: 0.1092
DEBUG - 2016-06-16 19:45:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077558
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:46:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:46:04 --> Security Class Initialized
DEBUG - 2016-06-16 19:46:04 --> CRSF cookie Set
DEBUG - 2016-06-16 19:46:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:46:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:46:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7e4d35e0fe824156b0563deefe44c557', '114.91.131.17', '2016-06-16', '19:46:05', '120340235', '/admin/order/index/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:46:05 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 19:46:05 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-16 19:46:05 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-16 19:46:05 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-16 19:46:05 --> Total execution time: 0.1092
DEBUG - 2016-06-16 19:46:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077565
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:47:19 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:47:19 --> Security Class Initialized
DEBUG - 2016-06-16 19:47:19 --> CRSF cookie Set
DEBUG - 2016-06-16 19:47:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:47:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:47:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e72aa797d6724bb2af4fb3357526f3e2', '114.91.131.17', '2016-06-16', '19:47:19', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:47:19 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-16 19:47:19 --> Total execution time: 0.0936
DEBUG - 2016-06-16 19:47:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077639
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:47:34 --> UTF-8 Support Enabled
DEBUG - 2016-06-16 19:47:34 --> Security Class Initialized
DEBUG - 2016-06-16 19:47:34 --> CRSF cookie Set
DEBUG - 2016-06-16 19:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-16 19:47:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
DEBUG - 2016-06-16 19:47:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b29c1e9f0b914c77b670f0cd4bea4e46', '114.91.131.17', '2016-06-16', '19:47:34', '120340235', '/admin/guest/edit/K05037', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4d69509e8dd8f9394a03d780434de1cdc1296e4b')
DEBUG - 2016-06-16 19:47:34 --> 修改客户信息：K05037
DEBUG - 2016-06-16 19:47:34 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05037' 
DEBUG - 2016-06-16 19:47:34 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05037' 
DEBUG - 2016-06-16 19:47:34 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-16 19:47:34 --> Total execution time: 0.0936
DEBUG - 2016-06-16 19:47:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466077654
WHERE id = '4d69509e8dd8f9394a03d780434de1cdc1296e4b'
