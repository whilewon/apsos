<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-08 10:08:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:08:28 --> CRSF cookie Set
DEBUG - 2016-07-08 10:08:28 --> Security Class Initialized
DEBUG - 2016-07-08 10:08:28 --> CRSF cookie Set
DEBUG - 2016-07-08 10:08:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:08:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:08:30 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('76a3fe7ed672ed4e4876a102fee5279c02c3b992', '114.91.128.23', 1467943710, '__ci_last_regenerate|i:1467943710;')
DEBUG - 2016-07-08 10:08:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:08:30 --> Security Class Initialized
DEBUG - 2016-07-08 10:08:30 --> CRSF cookie Set
DEBUG - 2016-07-08 10:08:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:08:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:08:30 --> Total execution time: 0.2130
DEBUG - 2016-07-08 10:08:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467943710
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:08:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:08:35 --> Security Class Initialized
DEBUG - 2016-07-08 10:08:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:08:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:08:35 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-08 10:08:35 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-08 10:08:35 --> 登录返回结果数：0
DEBUG - 2016-07-08 10:08:35 --> Total execution time: 0.1480
DEBUG - 2016-07-08 10:08:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467943715
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:08:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:08:47 --> Security Class Initialized
DEBUG - 2016-07-08 10:08:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:08:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:08:47 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-08 10:08:47 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-08 10:08:47 --> 登录返回结果数：1
DEBUG - 2016-07-08 10:08:47 --> 成功登录
DEBUG - 2016-07-08 10:08:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467943727, data = '__ci_last_regenerate|i:1467943710;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:08:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:08:47 --> Security Class Initialized
DEBUG - 2016-07-08 10:08:47 --> CRSF cookie Set
DEBUG - 2016-07-08 10:08:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:08:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:08:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a8eade804b2544bbb4c568972da9d33a', '114.91.128.23', '2016-07-08', '10:08:47', '120340234', '/admin/backhome', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '76a3fe7ed672ed4e4876a102fee5279c02c3b992')
DEBUG - 2016-07-08 10:08:47 --> Total execution time: 0.2190
DEBUG - 2016-07-08 10:08:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467943727
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:08:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:08:54 --> Security Class Initialized
DEBUG - 2016-07-08 10:08:54 --> CRSF cookie Set
DEBUG - 2016-07-08 10:08:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:08:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:08:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('922b8418db1243ad931027d636fc57b9', '114.91.128.23', '2016-07-08', '10:08:54', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '76a3fe7ed672ed4e4876a102fee5279c02c3b992')
DEBUG - 2016-07-08 10:08:54 --> 查询待审核订单
DEBUG - 2016-07-08 10:08:54 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-08 10:08:54 --> Total execution time: 0.2080
DEBUG - 2016-07-08 10:08:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467943734
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:08:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:08:56 --> Security Class Initialized
DEBUG - 2016-07-08 10:08:56 --> CRSF cookie Set
DEBUG - 2016-07-08 10:08:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:08:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:08:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a5fb11fc81fb48949ecbf3528bca1f63', '114.91.128.23', '2016-07-08', '10:08:56', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '76a3fe7ed672ed4e4876a102fee5279c02c3b992')
DEBUG - 2016-07-08 10:08:56 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:08:56 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 10:08:56 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:08:56 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 10:08:56 --> Total execution time: 0.3140
DEBUG - 2016-07-08 10:08:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467943736
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:09:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:09:01 --> Security Class Initialized
DEBUG - 2016-07-08 10:09:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:09:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:09:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a77f12b77c184297b6533e75ab352397', '114.91.128.23', '2016-07-08', '10:09:01', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '76a3fe7ed672ed4e4876a102fee5279c02c3b992')
DEBUG - 2016-07-08 10:09:01 --> 审核订单
DEBUG - 2016-07-08 10:09:01 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'a253b9fd54da4fc48aaa078da96c8d7d'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-08 10:09:01 --> 过程调用语句：  execute USP_APSOS_outorder 'a253b9fd54da4fc48aaa078da96c8d7d'
ERROR - 2016-07-08 10:09:08 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-08 10:09:08 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-08 10:09:08 --> Total execution time: 6.8304
DEBUG - 2016-07-08 10:09:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467943748
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:09:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:09:08 --> Security Class Initialized
DEBUG - 2016-07-08 10:09:08 --> CRSF cookie Set
DEBUG - 2016-07-08 10:09:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:09:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:09:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e776e5bb9da04d91b799d67b15406dd9', '114.91.128.23', '2016-07-08', '10:09:08', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '76a3fe7ed672ed4e4876a102fee5279c02c3b992')
DEBUG - 2016-07-08 10:09:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:09:08 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 10:09:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:09:08 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 10:09:08 --> Total execution time: 0.1280
DEBUG - 2016-07-08 10:09:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467943748
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:09:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:09:16 --> Security Class Initialized
DEBUG - 2016-07-08 10:09:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:09:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:09:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3b250d9f49c74dad8a8e14830adf36f2', '114.91.128.23', '2016-07-08', '10:09:16', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '76a3fe7ed672ed4e4876a102fee5279c02c3b992')
DEBUG - 2016-07-08 10:09:16 --> 审核订单
DEBUG - 2016-07-08 10:09:16 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'a253b9fd54da4fc48aaa078da96c8d7d'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-08 10:09:16 --> 过程调用语句：  execute USP_APSOS_outorder 'a253b9fd54da4fc48aaa078da96c8d7d'
ERROR - 2016-07-08 10:09:17 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-08 10:09:17 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-08 10:09:17 --> Total execution time: 0.8150
DEBUG - 2016-07-08 10:09:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467943757
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:09:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:09:17 --> Security Class Initialized
DEBUG - 2016-07-08 10:09:17 --> CRSF cookie Set
DEBUG - 2016-07-08 10:09:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:09:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:09:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5dfd96eeedfd4df9b7b4255e4bbae9fd', '114.91.128.23', '2016-07-08', '10:09:17', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '76a3fe7ed672ed4e4876a102fee5279c02c3b992')
DEBUG - 2016-07-08 10:09:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:09:18 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 10:09:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:09:18 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 10:09:18 --> Total execution time: 0.4890
DEBUG - 2016-07-08 10:09:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467943758
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:30:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:30:30 --> Security Class Initialized
DEBUG - 2016-07-08 10:30:30 --> CRSF cookie Set
DEBUG - 2016-07-08 10:30:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:30:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:30:30 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '76a3fe7ed672ed4e4876a102fee5279c02c3b992'
DEBUG - 2016-07-08 10:30:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('25c01ea79bbb4c01bf05111d7593be2b', '114.91.128.23', '2016-07-08', '10:30:30', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:30:30 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:30:30 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 10:30:30 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:30:30 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 10:30:30 --> Total execution time: 0.1350
DEBUG - 2016-07-08 10:30:30 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('108d6b54c8de9bf393cdc58407d4263efcfddcb2', '114.91.128.23', 1467945030, '__ci_last_regenerate|i:1467945030;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-08 10:32:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:32:06 --> Security Class Initialized
DEBUG - 2016-07-08 10:32:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:32:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:32:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('127ae9a8f2c640d7b44cea5a3f38c138', '114.91.128.23', '2016-07-08', '10:32:06', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:32:06 --> 审核订单
DEBUG - 2016-07-08 10:32:06 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'a253b9fd54da4fc48aaa078da96c8d7d'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-08 10:32:06 --> 过程调用语句：  execute USP_APSOS_outorder 'a253b9fd54da4fc48aaa078da96c8d7d'
ERROR - 2016-07-08 10:32:07 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-08 10:32:07 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-08 10:32:07 --> Total execution time: 0.9631
DEBUG - 2016-07-08 10:32:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945127
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:32:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:32:07 --> Security Class Initialized
DEBUG - 2016-07-08 10:32:07 --> CRSF cookie Set
DEBUG - 2016-07-08 10:32:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:32:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:32:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cbcbe0421a7644618482f98c0e0da986', '114.91.128.23', '2016-07-08', '10:32:07', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:32:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:32:07 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 10:32:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:32:07 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 10:32:07 --> Total execution time: 0.1120
DEBUG - 2016-07-08 10:32:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945127
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:32:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:32:31 --> Security Class Initialized
DEBUG - 2016-07-08 10:32:31 --> CRSF cookie Set
DEBUG - 2016-07-08 10:32:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:32:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:32:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6fa5a2597c6244d6bb57abbc8ea9082f', '114.91.128.23', '2016-07-08', '10:32:31', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:32:31 --> 查询待审核订单
DEBUG - 2016-07-08 10:32:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-08 10:32:31 --> Total execution time: 0.0910
DEBUG - 2016-07-08 10:32:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945151
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:32:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:32:33 --> Security Class Initialized
DEBUG - 2016-07-08 10:32:33 --> CRSF cookie Set
DEBUG - 2016-07-08 10:32:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:32:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:32:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dc6ac3ee5e57440987a2f32c7e199db7', '114.91.128.23', '2016-07-08', '10:32:33', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:32:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:32:33 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 10:32:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:32:33 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 10:32:33 --> Total execution time: 0.1080
DEBUG - 2016-07-08 10:32:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945153
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:32:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:32:38 --> Security Class Initialized
DEBUG - 2016-07-08 10:32:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:32:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:32:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7d372bd1cbe8416f85309565ad9072b5', '114.91.128.23', '2016-07-08', '10:32:38', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:32:38 --> 审核订单
DEBUG - 2016-07-08 10:32:38 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'a253b9fd54da4fc48aaa078da96c8d7d'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-08 10:32:38 --> 过程调用语句：  execute USP_APSOS_outorder 'a253b9fd54da4fc48aaa078da96c8d7d'
ERROR - 2016-07-08 10:32:38 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-08 10:32:38 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-08 10:32:38 --> Total execution time: 0.2140
DEBUG - 2016-07-08 10:32:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945158
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:32:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:32:39 --> Security Class Initialized
DEBUG - 2016-07-08 10:32:39 --> CRSF cookie Set
DEBUG - 2016-07-08 10:32:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:32:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:32:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5e92dc4eb9ed4787968e3cdf7b0119bd', '114.91.128.23', '2016-07-08', '10:32:39', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:32:39 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:32:39 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 10:32:39 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:32:39 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 10:32:39 --> Total execution time: 0.1120
DEBUG - 2016-07-08 10:32:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945159
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:33:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:33:04 --> Security Class Initialized
DEBUG - 2016-07-08 10:33:04 --> CRSF cookie Set
DEBUG - 2016-07-08 10:33:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:33:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:33:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('78b7452ca684443c86a477f1e2415e92', '114.91.128.23', '2016-07-08', '10:33:04', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:33:04 --> 查询待审核订单
DEBUG - 2016-07-08 10:33:04 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-08 10:33:04 --> Total execution time: 0.0870
DEBUG - 2016-07-08 10:33:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945184
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:33:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:33:07 --> Security Class Initialized
DEBUG - 2016-07-08 10:33:07 --> CRSF cookie Set
DEBUG - 2016-07-08 10:33:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:33:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:33:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dd5eb79a739640e99bb73c9352e12a67', '114.91.128.23', '2016-07-08', '10:33:07', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:33:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:33:07 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 10:33:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:33:07 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 10:33:07 --> Total execution time: 0.1250
DEBUG - 2016-07-08 10:33:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945187
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:33:12 --> Security Class Initialized
DEBUG - 2016-07-08 10:33:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:33:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:33:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('af18a27cca7045d2890769c8fcc5bede', '114.91.128.23', '2016-07-08', '10:33:12', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:33:12 --> 审核订单
DEBUG - 2016-07-08 10:33:12 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'a253b9fd54da4fc48aaa078da96c8d7d'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-08 10:33:12 --> 过程调用语句：  execute USP_APSOS_outorder 'a253b9fd54da4fc48aaa078da96c8d7d'
ERROR - 2016-07-08 10:33:12 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-08 10:33:12 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-08 10:33:12 --> Total execution time: 0.1200
DEBUG - 2016-07-08 10:33:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945192
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:33:12 --> Security Class Initialized
DEBUG - 2016-07-08 10:33:12 --> CRSF cookie Set
DEBUG - 2016-07-08 10:33:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:33:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:33:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e66ba170761b44908af1eec7bb00382a', '114.91.128.23', '2016-07-08', '10:33:13', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:33:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:33:13 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 10:33:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:33:13 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 10:33:13 --> Total execution time: 0.1350
DEBUG - 2016-07-08 10:33:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945193
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:33:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:33:40 --> Security Class Initialized
DEBUG - 2016-07-08 10:33:40 --> CRSF cookie Set
DEBUG - 2016-07-08 10:33:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:33:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:33:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d6ac06dd5d104065b42f477c9521a4c9', '114.91.128.23', '2016-07-08', '10:33:40', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:33:40 --> 查询待审核订单
DEBUG - 2016-07-08 10:33:40 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-08 10:33:40 --> Total execution time: 0.0980
DEBUG - 2016-07-08 10:33:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945220
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:33:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:33:43 --> Security Class Initialized
DEBUG - 2016-07-08 10:33:43 --> CRSF cookie Set
DEBUG - 2016-07-08 10:33:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:33:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:33:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('02e0c18868454bd0a1d6aba1aa5918cb', '114.91.128.23', '2016-07-08', '10:33:43', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:33:43 --> 查询订单
DEBUG - 2016-07-08 10:33:43 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-08 10:33:43 --> Total execution time: 0.0990
DEBUG - 2016-07-08 10:33:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945223
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:33:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:33:43 --> CRSF cookie Set
DEBUG - 2016-07-08 10:33:43 --> Security Class Initialized
DEBUG - 2016-07-08 10:33:43 --> CRSF cookie Set
DEBUG - 2016-07-08 10:33:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:33:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7a7f9192002c68c73b06f69f9c3210adf51d95f4'
DEBUG - 2016-07-08 10:33:43 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7a7f9192002c68c73b06f69f9c3210adf51d95f4', '180.153.161.55', 1467945223, '__ci_last_regenerate|i:1467945223;')
DEBUG - 2016-07-08 10:33:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:33:51 --> CRSF cookie Set
DEBUG - 2016-07-08 10:33:51 --> Security Class Initialized
DEBUG - 2016-07-08 10:33:51 --> CRSF cookie Set
DEBUG - 2016-07-08 10:33:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:33:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3363c0492e79d19790cc230d21dd755eb3c928e3'
DEBUG - 2016-07-08 10:33:51 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3363c0492e79d19790cc230d21dd755eb3c928e3', '101.226.33.224', 1467945231, '__ci_last_regenerate|i:1467945231;')
DEBUG - 2016-07-08 10:33:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:33:51 --> Security Class Initialized
DEBUG - 2016-07-08 10:33:51 --> CRSF cookie Set
DEBUG - 2016-07-08 10:33:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:33:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3363c0492e79d19790cc230d21dd755eb3c928e3'
DEBUG - 2016-07-08 10:33:51 --> Total execution time: 0.0720
DEBUG - 2016-07-08 10:33:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945231
WHERE id = '3363c0492e79d19790cc230d21dd755eb3c928e3'
DEBUG - 2016-07-08 10:34:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:34:04 --> Security Class Initialized
DEBUG - 2016-07-08 10:34:04 --> CRSF cookie Set
DEBUG - 2016-07-08 10:34:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:34:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:34:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('548464a517fe46a49576029b1176abc9', '114.91.128.23', '2016-07-08', '10:34:04', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:34:04 --> 查询待审核订单
DEBUG - 2016-07-08 10:34:04 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-08 10:34:04 --> Total execution time: 0.0740
DEBUG - 2016-07-08 10:34:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945244
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:34:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:34:07 --> Security Class Initialized
DEBUG - 2016-07-08 10:34:07 --> CRSF cookie Set
DEBUG - 2016-07-08 10:34:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:34:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:34:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ec1bdde60e824465b8032c8a5e522b05', '114.91.128.23', '2016-07-08', '10:34:07', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '108d6b54c8de9bf393cdc58407d4263efcfddcb2')
DEBUG - 2016-07-08 10:34:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:34:07 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 10:34:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:34:07 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 10:34:07 --> Total execution time: 0.0990
DEBUG - 2016-07-08 10:34:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945247
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:36:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:36:18 --> Security Class Initialized
DEBUG - 2016-07-08 10:36:18 --> CRSF cookie Set
DEBUG - 2016-07-08 10:36:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:36:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:36:18 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '108d6b54c8de9bf393cdc58407d4263efcfddcb2'
DEBUG - 2016-07-08 10:36:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e7a60a2c2a7e49f9b09382dd7db45b98', '114.91.128.23', '2016-07-08', '10:36:18', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'e649007cd3045b24eacee50a13f58af8110b356e')
DEBUG - 2016-07-08 10:36:18 --> 查询待审核订单
DEBUG - 2016-07-08 10:36:18 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-08 10:36:18 --> Total execution time: 0.0790
DEBUG - 2016-07-08 10:36:18 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e649007cd3045b24eacee50a13f58af8110b356e', '114.91.128.23', 1467945378, '__ci_last_regenerate|i:1467945378;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-08 10:36:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:36:22 --> Security Class Initialized
DEBUG - 2016-07-08 10:36:22 --> CRSF cookie Set
DEBUG - 2016-07-08 10:36:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:36:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e649007cd3045b24eacee50a13f58af8110b356e'
DEBUG - 2016-07-08 10:36:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d4434695ed9947c6be27f840c73a6f19', '114.91.128.23', '2016-07-08', '10:36:22', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'e649007cd3045b24eacee50a13f58af8110b356e')
DEBUG - 2016-07-08 10:36:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:36:22 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 10:36:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:36:22 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 10:36:22 --> Total execution time: 0.1130
DEBUG - 2016-07-08 10:36:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945382
WHERE id = 'e649007cd3045b24eacee50a13f58af8110b356e'
DEBUG - 2016-07-08 10:36:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:36:29 --> Security Class Initialized
DEBUG - 2016-07-08 10:36:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:36:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e649007cd3045b24eacee50a13f58af8110b356e'
DEBUG - 2016-07-08 10:36:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ad7a04db3e6b4078a9d7b373235f08d8', '114.91.128.23', '2016-07-08', '10:36:29', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'e649007cd3045b24eacee50a13f58af8110b356e')
DEBUG - 2016-07-08 10:36:29 --> 审核订单
DEBUG - 2016-07-08 10:36:29 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'a253b9fd54da4fc48aaa078da96c8d7d'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-08 10:36:29 --> 过程调用语句：  execute USP_APSOS_outorder 'a253b9fd54da4fc48aaa078da96c8d7d'
ERROR - 2016-07-08 10:36:29 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-08 10:36:29 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-08 10:36:29 --> Total execution time: 0.1150
DEBUG - 2016-07-08 10:36:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945389
WHERE id = 'e649007cd3045b24eacee50a13f58af8110b356e'
DEBUG - 2016-07-08 10:36:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:36:29 --> Security Class Initialized
DEBUG - 2016-07-08 10:36:29 --> CRSF cookie Set
DEBUG - 2016-07-08 10:36:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:36:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e649007cd3045b24eacee50a13f58af8110b356e'
DEBUG - 2016-07-08 10:36:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('15dd6146f5a54d31ab5a888a23c7af51', '114.91.128.23', '2016-07-08', '10:36:29', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'e649007cd3045b24eacee50a13f58af8110b356e')
DEBUG - 2016-07-08 10:36:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:36:29 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 10:36:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 10:36:29 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 10:36:29 --> Total execution time: 0.1230
DEBUG - 2016-07-08 10:36:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945389
WHERE id = 'e649007cd3045b24eacee50a13f58af8110b356e'
DEBUG - 2016-07-08 10:36:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 10:36:55 --> Security Class Initialized
DEBUG - 2016-07-08 10:36:55 --> CRSF cookie Set
DEBUG - 2016-07-08 10:36:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 10:36:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e649007cd3045b24eacee50a13f58af8110b356e'
DEBUG - 2016-07-08 10:36:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('060e518f8da94d2285738ff5f262803b', '114.91.128.23', '2016-07-08', '10:36:55', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'e649007cd3045b24eacee50a13f58af8110b356e')
DEBUG - 2016-07-08 10:36:55 --> 查询待审核订单
DEBUG - 2016-07-08 10:36:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-08 10:36:55 --> Total execution time: 0.0980
DEBUG - 2016-07-08 10:36:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467945415
WHERE id = 'e649007cd3045b24eacee50a13f58af8110b356e'
DEBUG - 2016-07-08 19:19:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:16 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:16 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:16 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c97e808031e1a81ee6cd1e512a37b0410372e758'
DEBUG - 2016-07-08 19:19:17 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c97e808031e1a81ee6cd1e512a37b0410372e758', '114.91.128.23', 1467976757, '__ci_last_regenerate|i:1467976757;')
DEBUG - 2016-07-08 19:19:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:18 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:18 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:18 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:18 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('48d168bd0df622b898773acafc625a306f311ea9', '114.91.128.23', 1467976758, '__ci_last_regenerate|i:1467976758;')
DEBUG - 2016-07-08 19:19:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:18 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:18 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:18 --> Total execution time: 0.2496
DEBUG - 2016-07-08 19:19:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467976758
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:28 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:28 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-08 19:19:28 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-08 19:19:28 --> 登录返回结果数：1
DEBUG - 2016-07-08 19:19:28 --> 成功登录
DEBUG - 2016-07-08 19:19:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467976768, data = '__ci_last_regenerate|i:1467976758;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:29 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:29 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('925c5627ae0e4e4ea029f0453a3c2b79', '114.91.128.23', '2016-07-08', '19:19:29', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '48d168bd0df622b898773acafc625a306f311ea9')
DEBUG - 2016-07-08 19:19:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 19:19:29 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 19:19:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 19:19:29 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 19:19:29 --> Total execution time: 0.3900
DEBUG - 2016-07-08 19:19:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467976769
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:32 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:32 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:32 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b563e800af1648957b9652491201e133eb867588'
DEBUG - 2016-07-08 19:19:32 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-08 19:19:32 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-08 19:19:32 --> 登录返回结果数：0
DEBUG - 2016-07-08 19:19:32 --> Total execution time: 0.1092
DEBUG - 2016-07-08 19:19:32 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b563e800af1648957b9652491201e133eb867588', '180.153.211.190', 1467976772, '__ci_last_regenerate|i:1467976772;')
DEBUG - 2016-07-08 19:19:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:35 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:35 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:35 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'be5bff92294f858bab4259d9f0e071243dccf961'
DEBUG - 2016-07-08 19:19:35 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-08 19:19:35 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-08 19:19:35 --> 登录返回结果数：0
DEBUG - 2016-07-08 19:19:35 --> Total execution time: 0.0780
DEBUG - 2016-07-08 19:19:35 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('be5bff92294f858bab4259d9f0e071243dccf961', '180.153.214.182', 1467976775, '__ci_last_regenerate|i:1467976775;')
DEBUG - 2016-07-08 19:19:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:39 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('144d76daba5844548943f762ed939b95', '114.91.128.23', '2016-07-08', '19:19:39', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '48d168bd0df622b898773acafc625a306f311ea9')
DEBUG - 2016-07-08 19:19:39 --> 审核订单
DEBUG - 2016-07-08 19:19:39 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'a253b9fd54da4fc48aaa078da96c8d7d'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-08 19:19:39 --> 过程调用语句：  execute USP_APSOS_outorder 'a253b9fd54da4fc48aaa078da96c8d7d'
ERROR - 2016-07-08 19:19:40 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-08 19:19:40 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-08 19:19:40 --> Total execution time: 1.1544
DEBUG - 2016-07-08 19:19:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467976780
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:40 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:40 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('53b3003898ba47b1b9384048f3319e3c', '114.91.128.23', '2016-07-08', '19:19:40', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '48d168bd0df622b898773acafc625a306f311ea9')
DEBUG - 2016-07-08 19:19:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 19:19:40 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 19:19:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 19:19:40 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 19:19:40 --> Total execution time: 0.1716
DEBUG - 2016-07-08 19:19:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467976780
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:44 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:44 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:44 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:44 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:44 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f5cc5e4bc03d442fb5f173121f99068e', '114.91.128.23', '2016-07-08', '19:19:44', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '48d168bd0df622b898773acafc625a306f311ea9')
DEBUG - 2016-07-08 19:19:44 --> 查询待审核订单
DEBUG - 2016-07-08 19:19:44 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-08 19:19:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9c23ab636ab77ea7707ae5db6ab57e4571fba020'
DEBUG - 2016-07-08 19:19:44 --> Total execution time: 0.2028
DEBUG - 2016-07-08 19:19:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467976784
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:44 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9c23ab636ab77ea7707ae5db6ab57e4571fba020', '101.226.51.226', 1467976784, '__ci_last_regenerate|i:1467976784;')
DEBUG - 2016-07-08 19:19:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:45 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:45 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:45 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ae357c4ff022e247ec0bea8896b23bcabebdb79e'
DEBUG - 2016-07-08 19:19:45 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ae357c4ff022e247ec0bea8896b23bcabebdb79e', '180.153.201.215', 1467976785, '__ci_last_regenerate|i:1467976785;')
DEBUG - 2016-07-08 19:19:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:45 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:45 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ae357c4ff022e247ec0bea8896b23bcabebdb79e'
DEBUG - 2016-07-08 19:19:45 --> Total execution time: 0.0780
DEBUG - 2016-07-08 19:19:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467976785
WHERE id = 'ae357c4ff022e247ec0bea8896b23bcabebdb79e'
DEBUG - 2016-07-08 19:19:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:19:46 --> Security Class Initialized
DEBUG - 2016-07-08 19:19:46 --> CRSF cookie Set
DEBUG - 2016-07-08 19:19:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:19:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:19:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c71e92fd9f0a4c1885d01040f19496fe', '114.91.128.23', '2016-07-08', '19:19:47', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '48d168bd0df622b898773acafc625a306f311ea9')
DEBUG - 2016-07-08 19:19:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 19:19:47 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-08 19:19:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-08 19:19:47 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-08 19:19:47 --> Total execution time: 0.1092
DEBUG - 2016-07-08 19:19:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467976787
WHERE id = '48d168bd0df622b898773acafc625a306f311ea9'
DEBUG - 2016-07-08 19:23:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:23:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:23:33 --> CRSF cookie Set
DEBUG - 2016-07-08 19:23:33 --> Security Class Initialized
DEBUG - 2016-07-08 19:23:33 --> CRSF cookie Set
DEBUG - 2016-07-08 19:23:33 --> Security Class Initialized
DEBUG - 2016-07-08 19:23:33 --> CRSF cookie Set
DEBUG - 2016-07-08 19:23:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:23:33 --> CRSF cookie Set
DEBUG - 2016-07-08 19:23:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:23:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:23:33 --> No URI present. Default controller set.
DEBUG - 2016-07-08 19:23:33 --> CRSF cookie Set
DEBUG - 2016-07-08 19:23:33 --> Security Class Initialized
DEBUG - 2016-07-08 19:23:33 --> CRSF cookie Set
DEBUG - 2016-07-08 19:23:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01b1ea7fd378e18bf7cf4f3090adca6d134d40f5'
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '789806c9f9fbc33138b48b550537216469afc2a9'
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '58d5820dcc59c7398b023b2f630fb91799534d8e'
DEBUG - 2016-07-08 19:23:33 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-08 19:23:33 --> 登录返回结果数：0
DEBUG - 2016-07-08 19:23:33 --> Total execution time: 0.1560
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('789806c9f9fbc33138b48b550537216469afc2a9', '180.153.211.190', 1467977013, '__ci_last_regenerate|i:1467977013;')
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('58d5820dcc59c7398b023b2f630fb91799534d8e', '180.153.211.190', 1467977013, '__ci_last_regenerate|i:1467977013;')
DEBUG - 2016-07-08 19:23:33 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-08 19:23:33 --> 登录返回结果数：0
DEBUG - 2016-07-08 19:23:33 --> Total execution time: 0.2808
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('01b1ea7fd378e18bf7cf4f3090adca6d134d40f5', '180.153.211.190', 1467977013, '__ci_last_regenerate|i:1467977013;')
DEBUG - 2016-07-08 19:23:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:23:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-08 19:23:33 --> CRSF cookie Set
DEBUG - 2016-07-08 19:23:33 --> CRSF cookie Set
DEBUG - 2016-07-08 19:23:33 --> Security Class Initialized
DEBUG - 2016-07-08 19:23:33 --> Security Class Initialized
DEBUG - 2016-07-08 19:23:33 --> CRSF cookie Set
DEBUG - 2016-07-08 19:23:33 --> CRSF cookie Set
DEBUG - 2016-07-08 19:23:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:23:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e21df0681618d417f4bb2e7417ad89bdde43a7d2'
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e572edb9300baf725ad38a2f35e8d6fef2d53835'
DEBUG - 2016-07-08 19:23:33 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-08 19:23:33 --> 登录返回结果数：0
DEBUG - 2016-07-08 19:23:33 --> Total execution time: 0.1248
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e21df0681618d417f4bb2e7417ad89bdde43a7d2', '180.153.211.190', 1467977013, '__ci_last_regenerate|i:1467977013;')
DEBUG - 2016-07-08 19:23:33 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-08 19:23:33 --> 登录返回结果数：0
DEBUG - 2016-07-08 19:23:33 --> Total execution time: 0.1560
DEBUG - 2016-07-08 19:23:33 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e572edb9300baf725ad38a2f35e8d6fef2d53835', '180.153.211.190', 1467977013, '__ci_last_regenerate|i:1467977013;')
