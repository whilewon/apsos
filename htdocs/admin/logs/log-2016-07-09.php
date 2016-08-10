<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-09 15:46:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-09 15:46:20 --> CRSF cookie Set
DEBUG - 2016-07-09 15:46:20 --> Security Class Initialized
DEBUG - 2016-07-09 15:46:20 --> CRSF cookie Set
DEBUG - 2016-07-09 15:46:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-09 15:46:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-09 15:46:20 --> CRSF cookie Set
DEBUG - 2016-07-09 15:46:20 --> Security Class Initialized
DEBUG - 2016-07-09 15:46:20 --> CRSF cookie Set
DEBUG - 2016-07-09 15:46:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-09 15:46:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-09 15:46:20 --> CRSF cookie Set
DEBUG - 2016-07-09 15:46:20 --> Security Class Initialized
DEBUG - 2016-07-09 15:46:20 --> CRSF cookie Set
DEBUG - 2016-07-09 15:46:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-09 15:46:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8d26df54d805fffb14ccec3a1adda413642e938d'
DEBUG - 2016-07-09 15:46:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2689b9dae2541923a47e8aa11156b78b62079d09'
DEBUG - 2016-07-09 15:46:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '57935c814f2ca47cc11ea02da16954eb8ba7b8c4'
DEBUG - 2016-07-09 15:46:21 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('57935c814f2ca47cc11ea02da16954eb8ba7b8c4', '114.91.128.23', 1468050381, '__ci_last_regenerate|i:1468050381;')
DEBUG - 2016-07-09 15:46:21 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8d26df54d805fffb14ccec3a1adda413642e938d', '101.226.66.192', 1468050381, '__ci_last_regenerate|i:1468050381;')
DEBUG - 2016-07-09 15:46:21 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2689b9dae2541923a47e8aa11156b78b62079d09', '180.153.206.17', 1468050381, '__ci_last_regenerate|i:1468050381;')
DEBUG - 2016-07-09 15:46:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-09 15:46:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-09 15:46:21 --> Security Class Initialized
DEBUG - 2016-07-09 15:46:21 --> Security Class Initialized
DEBUG - 2016-07-09 15:46:21 --> CRSF cookie Set
DEBUG - 2016-07-09 15:46:21 --> CRSF cookie Set
DEBUG - 2016-07-09 15:46:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-09 15:46:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-09 15:46:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8d26df54d805fffb14ccec3a1adda413642e938d'
DEBUG - 2016-07-09 15:46:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '57935c814f2ca47cc11ea02da16954eb8ba7b8c4'
DEBUG - 2016-07-09 15:46:21 --> Total execution time: 0.2028
DEBUG - 2016-07-09 15:46:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468050381
WHERE id = '57935c814f2ca47cc11ea02da16954eb8ba7b8c4'
DEBUG - 2016-07-09 15:46:21 --> Total execution time: 0.1716
DEBUG - 2016-07-09 15:46:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468050381
WHERE id = '8d26df54d805fffb14ccec3a1adda413642e938d'
DEBUG - 2016-07-09 15:46:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-09 15:46:30 --> Security Class Initialized
DEBUG - 2016-07-09 15:46:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-09 15:46:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '57935c814f2ca47cc11ea02da16954eb8ba7b8c4'
DEBUG - 2016-07-09 15:46:30 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-09 15:46:30 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-09 15:46:30 --> 登录返回结果数：1
DEBUG - 2016-07-09 15:46:30 --> 成功登录
DEBUG - 2016-07-09 15:46:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468050390, data = '__ci_last_regenerate|i:1468050381;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '57935c814f2ca47cc11ea02da16954eb8ba7b8c4'
DEBUG - 2016-07-09 15:46:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-09 15:46:30 --> Security Class Initialized
DEBUG - 2016-07-09 15:46:30 --> CRSF cookie Set
DEBUG - 2016-07-09 15:46:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-09 15:46:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '57935c814f2ca47cc11ea02da16954eb8ba7b8c4'
DEBUG - 2016-07-09 15:46:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c600b738581b419faa05cf762a5bbf94', '114.91.128.23', '2016-07-09', '15:46:30', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '57935c814f2ca47cc11ea02da16954eb8ba7b8c4')
DEBUG - 2016-07-09 15:46:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-09 15:46:31 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-09 15:46:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-09 15:46:31 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-09 15:46:31 --> Total execution time: 0.4680
DEBUG - 2016-07-09 15:46:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468050391
WHERE id = '57935c814f2ca47cc11ea02da16954eb8ba7b8c4'
DEBUG - 2016-07-09 15:46:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-09 15:46:38 --> Security Class Initialized
DEBUG - 2016-07-09 15:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-09 15:46:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '57935c814f2ca47cc11ea02da16954eb8ba7b8c4'
DEBUG - 2016-07-09 15:46:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9b9489d24256484fa79dc7ce3c246b2b', '114.91.128.23', '2016-07-09', '15:46:38', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '57935c814f2ca47cc11ea02da16954eb8ba7b8c4')
DEBUG - 2016-07-09 15:46:38 --> 审核订单
DEBUG - 2016-07-09 15:46:38 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'a253b9fd54da4fc48aaa078da96c8d7d'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-09 15:46:38 --> 过程调用语句：  execute USP_APSOS_outorder 'a253b9fd54da4fc48aaa078da96c8d7d'
ERROR - 2016-07-09 15:46:43 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-09 15:46:43 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-09 15:46:43 --> Total execution time: 5.5380
DEBUG - 2016-07-09 15:46:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468050403
WHERE id = '57935c814f2ca47cc11ea02da16954eb8ba7b8c4'
DEBUG - 2016-07-09 15:46:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-09 15:46:43 --> Security Class Initialized
DEBUG - 2016-07-09 15:46:43 --> CRSF cookie Set
DEBUG - 2016-07-09 15:46:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-09 15:46:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '57935c814f2ca47cc11ea02da16954eb8ba7b8c4'
DEBUG - 2016-07-09 15:46:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5bc39c68ad5340039813ad3c206cd120', '114.91.128.23', '2016-07-09', '15:46:43', '120340234', '/admin/order/check/a253b9fd54da4fc48aaa078da96c8d7d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '57935c814f2ca47cc11ea02da16954eb8ba7b8c4')
DEBUG - 2016-07-09 15:46:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-09 15:46:43 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a253b9fd54da4fc48aaa078da96c8d7d' order by create_date_time desc
DEBUG - 2016-07-09 15:46:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a253b9fd54da4fc48aaa078da96c8d7d'
DEBUG - 2016-07-09 15:46:43 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a253b9fd54da4fc48aaa078da96c8d7d'    order by t1.lno asc
        
DEBUG - 2016-07-09 15:46:43 --> Total execution time: 0.0936
DEBUG - 2016-07-09 15:46:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1468050403
WHERE id = '57935c814f2ca47cc11ea02da16954eb8ba7b8c4'
DEBUG - 2016-07-09 15:57:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-09 15:57:09 --> Security Class Initialized
DEBUG - 2016-07-09 15:57:09 --> CRSF cookie Set
DEBUG - 2016-07-09 15:57:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-09 15:57:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '57935c814f2ca47cc11ea02da16954eb8ba7b8c4'
DEBUG - 2016-07-09 15:57:09 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '57935c814f2ca47cc11ea02da16954eb8ba7b8c4'
DEBUG - 2016-07-09 15:57:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a6ff13285b624f8d82424dbe6d587273', '114.91.128.23', '2016-07-09', '15:57:09', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'c8742e028dc667092aa55b69e36a146c6230b66b')
DEBUG - 2016-07-09 15:57:09 --> 查询待审核订单
DEBUG - 2016-07-09 15:57:09 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-09 15:57:09 --> Total execution time: 0.1092
DEBUG - 2016-07-09 15:57:09 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c8742e028dc667092aa55b69e36a146c6230b66b', '114.91.128.23', 1468051029, '__ci_last_regenerate|i:1468051029;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
