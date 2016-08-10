<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-22 10:47:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 10:47:29 --> No URI present. Default controller set.
DEBUG - 2016-06-22 10:47:29 --> CRSF cookie Set
DEBUG - 2016-06-22 10:47:29 --> Security Class Initialized
DEBUG - 2016-06-22 10:47:29 --> CRSF cookie Set
DEBUG - 2016-06-22 10:47:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 10:47:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 10:47:30 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('1dc071692fa9b67f2d1988de2ce7a37fde44d0de', '114.91.131.17', 1466563650, '__ci_last_regenerate|i:1466563650;')
DEBUG - 2016-06-22 10:47:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 10:47:31 --> Security Class Initialized
DEBUG - 2016-06-22 10:47:31 --> CRSF cookie Set
DEBUG - 2016-06-22 10:47:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 10:47:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 10:47:31 --> Total execution time: 0.2340
DEBUG - 2016-06-22 10:47:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466563651
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 10:47:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 10:47:33 --> Security Class Initialized
DEBUG - 2016-06-22 10:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 10:47:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 10:47:33 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-22 10:47:33 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-22 10:47:33 --> 登录返回结果数：1
DEBUG - 2016-06-22 10:47:33 --> 成功登录
DEBUG - 2016-06-22 10:47:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466563653, data = '__ci_last_regenerate|i:1466563650;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 10:47:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 10:47:33 --> No URI present. Default controller set.
DEBUG - 2016-06-22 10:47:33 --> Security Class Initialized
DEBUG - 2016-06-22 10:47:33 --> CRSF cookie Set
DEBUG - 2016-06-22 10:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 10:47:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 10:47:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b6dce6f235fb4c75a328e65d86327d47', '114.91.131.17', '2016-06-22', '10:47:33', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1dc071692fa9b67f2d1988de2ce7a37fde44d0de')
DEBUG - 2016-06-22 10:47:33 --> Total execution time: 0.2790
DEBUG - 2016-06-22 10:47:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466563653
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 10:47:37 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 10:47:37 --> Security Class Initialized
DEBUG - 2016-06-22 10:47:37 --> CRSF cookie Set
DEBUG - 2016-06-22 10:47:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 10:47:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 10:47:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0f8d53a93e574f10827cf0536568319b', '114.91.131.17', '2016-06-22', '10:47:37', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1dc071692fa9b67f2d1988de2ce7a37fde44d0de')
DEBUG - 2016-06-22 10:47:37 --> 查询订单
DEBUG - 2016-06-22 10:47:37 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-22 10:47:37 --> Total execution time: 0.2500
DEBUG - 2016-06-22 10:47:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466563657
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 10:47:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 10:47:42 --> Security Class Initialized
DEBUG - 2016-06-22 10:47:42 --> CRSF cookie Set
DEBUG - 2016-06-22 10:47:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 10:47:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 10:47:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('542ab02450624c019046a41a62354e7e', '114.91.131.17', '2016-06-22', '10:47:42', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1dc071692fa9b67f2d1988de2ce7a37fde44d0de')
DEBUG - 2016-06-22 10:47:42 --> 查询待审核订单
DEBUG - 2016-06-22 10:47:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-22 10:47:42 --> Total execution time: 0.1110
DEBUG - 2016-06-22 10:47:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466563662
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 10:47:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 10:47:45 --> Security Class Initialized
DEBUG - 2016-06-22 10:47:45 --> CRSF cookie Set
DEBUG - 2016-06-22 10:47:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 10:47:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 10:47:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b413099bb68e4523bf9b3541a51f5b2a', '114.91.131.17', '2016-06-22', '10:47:45', '120340235', '/admin/order/check/fbcf6cf1cc8e4bacaff1c7218b23884e', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1dc071692fa9b67f2d1988de2ce7a37fde44d0de')
DEBUG - 2016-06-22 10:47:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='fbcf6cf1cc8e4bacaff1c7218b23884e'
DEBUG - 2016-06-22 10:47:45 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='fbcf6cf1cc8e4bacaff1c7218b23884e' order by create_date_time desc
DEBUG - 2016-06-22 10:47:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='fbcf6cf1cc8e4bacaff1c7218b23884e'
DEBUG - 2016-06-22 10:47:45 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='fbcf6cf1cc8e4bacaff1c7218b23884e'    order by t1.lno asc
        
DEBUG - 2016-06-22 10:47:45 --> Total execution time: 0.3000
DEBUG - 2016-06-22 10:47:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466563665
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 11:14:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 11:14:51 --> Security Class Initialized
DEBUG - 2016-06-22 11:14:51 --> CRSF cookie Set
DEBUG - 2016-06-22 11:14:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 11:14:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 11:14:51 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '1dc071692fa9b67f2d1988de2ce7a37fde44d0de'
DEBUG - 2016-06-22 11:14:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0c67216d0324471f98d33fdb910a8cde', '114.91.131.17', '2016-06-22', '11:14:51', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a1dcf67eb5f8cf5ab03db859097011769d75514a')
DEBUG - 2016-06-22 11:14:51 --> 查询待审核订单
DEBUG - 2016-06-22 11:14:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-22 11:14:51 --> Total execution time: 0.2964
DEBUG - 2016-06-22 11:14:51 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a1dcf67eb5f8cf5ab03db859097011769d75514a', '114.91.131.17', 1466565291, '__ci_last_regenerate|i:1466565291;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-22 11:14:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 11:14:54 --> Security Class Initialized
DEBUG - 2016-06-22 11:14:54 --> CRSF cookie Set
DEBUG - 2016-06-22 11:14:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 11:14:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1dcf67eb5f8cf5ab03db859097011769d75514a'
DEBUG - 2016-06-22 11:14:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3a3d400792174daea68f6b777051e471', '114.91.131.17', '2016-06-22', '11:14:54', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a1dcf67eb5f8cf5ab03db859097011769d75514a')
DEBUG - 2016-06-22 11:14:54 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-22 11:14:54 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-22 11:14:54 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-22 11:14:54 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-22 11:14:54 --> Total execution time: 0.1716
DEBUG - 2016-06-22 11:14:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466565294
WHERE id = 'a1dcf67eb5f8cf5ab03db859097011769d75514a'
DEBUG - 2016-06-22 11:15:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 11:15:01 --> Security Class Initialized
DEBUG - 2016-06-22 11:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 11:15:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1dcf67eb5f8cf5ab03db859097011769d75514a'
DEBUG - 2016-06-22 11:15:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1bc65a7636fe4a20925e7743262b32d2', '114.91.131.17', '2016-06-22', '11:15:01', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a1dcf67eb5f8cf5ab03db859097011769d75514a')
DEBUG - 2016-06-22 11:15:01 --> 审核订单
DEBUG - 2016-06-22 11:15:01 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '9608e7694c17436fb9747b119aefef13'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-22 11:15:01 --> 过程调用语句：  execute USP_APSOS_outorder '9608e7694c17436fb9747b119aefef13'
ERROR - 2016-06-22 11:15:04 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-22 11:15:04 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-22 11:15:04 --> Total execution time: 2.9328
DEBUG - 2016-06-22 11:15:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466565304
WHERE id = 'a1dcf67eb5f8cf5ab03db859097011769d75514a'
DEBUG - 2016-06-22 11:15:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 11:15:04 --> Security Class Initialized
DEBUG - 2016-06-22 11:15:04 --> CRSF cookie Set
DEBUG - 2016-06-22 11:15:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 11:15:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1dcf67eb5f8cf5ab03db859097011769d75514a'
DEBUG - 2016-06-22 11:15:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4bb3b04b671b44dd8255a1b1543ba477', '114.91.131.17', '2016-06-22', '11:15:04', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a1dcf67eb5f8cf5ab03db859097011769d75514a')
DEBUG - 2016-06-22 11:15:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-22 11:15:04 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-22 11:15:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-22 11:15:04 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-22 11:15:05 --> Total execution time: 0.7956
DEBUG - 2016-06-22 11:15:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466565305
WHERE id = 'a1dcf67eb5f8cf5ab03db859097011769d75514a'
DEBUG - 2016-06-22 12:53:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 12:53:33 --> Security Class Initialized
DEBUG - 2016-06-22 12:53:33 --> CRSF cookie Set
DEBUG - 2016-06-22 12:53:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 12:53:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1dcf67eb5f8cf5ab03db859097011769d75514a'
DEBUG - 2016-06-22 12:53:33 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a1dcf67eb5f8cf5ab03db859097011769d75514a'
DEBUG - 2016-06-22 12:53:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('125d31088ad04231bb44a7bf03e08c76', '114.91.131.17', '2016-06-22', '12:53:33', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4f7348606e3ca9db95f59a5000232b4ac5942c94')
DEBUG - 2016-06-22 12:53:33 --> 查询订单
DEBUG - 2016-06-22 12:53:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-22 12:53:34 --> Total execution time: 0.4190
DEBUG - 2016-06-22 12:53:34 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4f7348606e3ca9db95f59a5000232b4ac5942c94', '114.91.131.17', 1466571214, '__ci_last_regenerate|i:1466571213;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-22 12:53:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 12:53:47 --> Security Class Initialized
DEBUG - 2016-06-22 12:53:47 --> CRSF cookie Set
DEBUG - 2016-06-22 12:53:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 12:53:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f7348606e3ca9db95f59a5000232b4ac5942c94'
DEBUG - 2016-06-22 12:53:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('59b36a262e9d4aaab99333e6fe026051', '114.91.131.17', '2016-06-22', '12:53:47', '120340235', '/admin/order/index/15ac9586d0c543d2bc5cfd8278c03651', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4f7348606e3ca9db95f59a5000232b4ac5942c94')
DEBUG - 2016-06-22 12:53:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-22 12:53:47 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='15ac9586d0c543d2bc5cfd8278c03651' order by create_date_time desc
DEBUG - 2016-06-22 12:53:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-22 12:53:47 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='15ac9586d0c543d2bc5cfd8278c03651'    order by t1.lno asc
        
DEBUG - 2016-06-22 12:53:47 --> Total execution time: 0.2810
DEBUG - 2016-06-22 12:53:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466571227
WHERE id = '4f7348606e3ca9db95f59a5000232b4ac5942c94'
DEBUG - 2016-06-22 12:58:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 12:58:25 --> Security Class Initialized
DEBUG - 2016-06-22 12:58:25 --> CRSF cookie Set
DEBUG - 2016-06-22 12:58:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 12:58:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f7348606e3ca9db95f59a5000232b4ac5942c94'
DEBUG - 2016-06-22 12:58:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ac0712c1eeb24d94977fadeb48c2db6b', '114.91.131.17', '2016-06-22', '12:58:25', '120340235', '/admin/order/true/15ac9586d0c543d2bc5cfd8278c03651', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '4f7348606e3ca9db95f59a5000232b4ac5942c94')
DEBUG - 2016-06-22 12:58:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-22 12:58:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-22 12:58:25 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='15ac9586d0c543d2bc5cfd8278c03651'    order by t1.lno asc
        
DEBUG - 2016-06-22 12:58:25 --> Total execution time: 0.1150
DEBUG - 2016-06-22 12:58:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466571505
WHERE id = '4f7348606e3ca9db95f59a5000232b4ac5942c94'
DEBUG - 2016-06-22 12:58:41 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 12:58:41 --> Security Class Initialized
DEBUG - 2016-06-22 12:58:41 --> CRSF cookie Set
DEBUG - 2016-06-22 12:58:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 12:58:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f7348606e3ca9db95f59a5000232b4ac5942c94'
DEBUG - 2016-06-22 12:58:41 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '4f7348606e3ca9db95f59a5000232b4ac5942c94'
DEBUG - 2016-06-22 12:58:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6497e53af7b848bdbd26f12eed951a17', '114.91.131.17', '2016-06-22', '12:58:41', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'b83cd1ee9d20a868af037a030b7f4072ad0018dc')
DEBUG - 2016-06-22 12:58:41 --> 查询订单
DEBUG - 2016-06-22 12:58:41 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-22 12:58:41 --> Total execution time: 0.1000
DEBUG - 2016-06-22 12:58:41 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b83cd1ee9d20a868af037a030b7f4072ad0018dc', '114.91.131.17', 1466571521, '__ci_last_regenerate|i:1466571521;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-22 12:58:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 12:58:45 --> Security Class Initialized
DEBUG - 2016-06-22 12:58:45 --> CRSF cookie Set
DEBUG - 2016-06-22 12:58:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 12:58:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b83cd1ee9d20a868af037a030b7f4072ad0018dc'
DEBUG - 2016-06-22 12:58:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('22c8426f7b7247c8b821b2a1ceadcf83', '114.91.131.17', '2016-06-22', '12:58:45', '120340235', '/admin/order/index/15ac9586d0c543d2bc5cfd8278c03651', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'b83cd1ee9d20a868af037a030b7f4072ad0018dc')
DEBUG - 2016-06-22 12:58:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-22 12:58:45 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='15ac9586d0c543d2bc5cfd8278c03651' order by create_date_time desc
DEBUG - 2016-06-22 12:58:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-22 12:58:45 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='15ac9586d0c543d2bc5cfd8278c03651'    order by t1.lno asc
        
DEBUG - 2016-06-22 12:58:45 --> Total execution time: 0.1130
DEBUG - 2016-06-22 12:58:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466571525
WHERE id = 'b83cd1ee9d20a868af037a030b7f4072ad0018dc'
DEBUG - 2016-06-22 13:03:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 13:03:49 --> Security Class Initialized
DEBUG - 2016-06-22 13:03:49 --> CRSF cookie Set
DEBUG - 2016-06-22 13:03:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 13:03:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b83cd1ee9d20a868af037a030b7f4072ad0018dc'
DEBUG - 2016-06-22 13:03:49 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'b83cd1ee9d20a868af037a030b7f4072ad0018dc'
DEBUG - 2016-06-22 13:03:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('608dbad407fb466a985155591723cf96', '114.91.131.17', '2016-06-22', '13:03:49', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2e87f60767ce8cbc284248c439093b32b9e3db4a')
DEBUG - 2016-06-22 13:03:49 --> 查询订单
DEBUG - 2016-06-22 13:03:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-22 13:03:49 --> Total execution time: 0.1160
DEBUG - 2016-06-22 13:03:49 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2e87f60767ce8cbc284248c439093b32b9e3db4a', '114.91.131.17', 1466571829, '__ci_last_regenerate|i:1466571829;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-22 13:18:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 13:18:58 --> Security Class Initialized
DEBUG - 2016-06-22 13:18:58 --> CRSF cookie Set
DEBUG - 2016-06-22 13:18:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 13:18:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e87f60767ce8cbc284248c439093b32b9e3db4a'
DEBUG - 2016-06-22 13:18:58 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '2e87f60767ce8cbc284248c439093b32b9e3db4a'
DEBUG - 2016-06-22 13:18:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b4cfac6dce434479bd734fd006652c5b', '114.91.131.17', '2016-06-22', '13:18:58', '120340235', '/admin/order/index/15ac9586d0c543d2bc5cfd8278c03651', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'c49d0f7a14d987518e7d4a446a7bff9e554beb6a')
DEBUG - 2016-06-22 13:18:58 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-22 13:18:58 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='15ac9586d0c543d2bc5cfd8278c03651' order by create_date_time desc
DEBUG - 2016-06-22 13:18:58 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-22 13:18:58 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='15ac9586d0c543d2bc5cfd8278c03651'    order by t1.lno asc
        
DEBUG - 2016-06-22 13:18:58 --> Total execution time: 0.1260
DEBUG - 2016-06-22 13:18:58 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c49d0f7a14d987518e7d4a446a7bff9e554beb6a', '114.91.131.17', 1466572738, '__ci_last_regenerate|i:1466572738;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-22 13:32:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-22 13:32:06 --> Security Class Initialized
DEBUG - 2016-06-22 13:32:06 --> CRSF cookie Set
DEBUG - 2016-06-22 13:32:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-22 13:32:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c49d0f7a14d987518e7d4a446a7bff9e554beb6a'
DEBUG - 2016-06-22 13:32:07 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'c49d0f7a14d987518e7d4a446a7bff9e554beb6a'
DEBUG - 2016-06-22 13:32:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c64a812482c549ea84e53762db188a3c', '114.91.131.17', '2016-06-22', '13:32:07', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'bbd5bb2ce1ff5584fd4c3f109b43ac9052b3068f')
DEBUG - 2016-06-22 13:32:07 --> 查询订单
DEBUG - 2016-06-22 13:32:07 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-22 13:32:07 --> Total execution time: 0.1170
DEBUG - 2016-06-22 13:32:07 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('bbd5bb2ce1ff5584fd4c3f109b43ac9052b3068f', '114.91.131.17', 1466573527, '__ci_last_regenerate|i:1466573527;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
