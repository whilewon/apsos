<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-15 10:42:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 10:42:53 --> CRSF cookie Set
DEBUG - 2016-06-15 10:42:53 --> Security Class Initialized
DEBUG - 2016-06-15 10:42:53 --> CRSF cookie Set
DEBUG - 2016-06-15 10:42:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 10:42:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:42:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c57bb90640806a79322f08e8c809f7e2e110ac13', '114.91.131.17', 1465958573, '__ci_last_regenerate|i:1465958573;')
DEBUG - 2016-06-15 10:42:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 10:42:53 --> Security Class Initialized
DEBUG - 2016-06-15 10:42:53 --> CRSF cookie Set
DEBUG - 2016-06-15 10:42:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 10:42:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:42:53 --> Total execution time: 0.1560
DEBUG - 2016-06-15 10:42:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465958573
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:42:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 10:42:55 --> Security Class Initialized
DEBUG - 2016-06-15 10:42:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 10:42:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:42:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 10:42:55 --> Security Class Initialized
DEBUG - 2016-06-15 10:42:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 10:42:55 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-15 10:42:55 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-15 10:42:55 --> 登录返回结果数：1
DEBUG - 2016-06-15 10:42:55 --> 成功登录
DEBUG - 2016-06-15 10:42:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465958575, data = '__ci_last_regenerate|i:1465958573;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:42:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:42:55 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-15 10:42:55 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-15 10:42:55 --> 登录返回结果数：1
DEBUG - 2016-06-15 10:42:55 --> 成功登录
DEBUG - 2016-06-15 10:42:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465958575
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:42:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 10:42:55 --> Security Class Initialized
DEBUG - 2016-06-15 10:42:55 --> CRSF cookie Set
DEBUG - 2016-06-15 10:42:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 10:42:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:42:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2880f5fde579427ead067fad14159ae9', '114.91.131.17', '2016-06-15', '10:42:55', '120340235', '/admin/order/check/d6531353f317459a907ff4e941d27314', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'c57bb90640806a79322f08e8c809f7e2e110ac13')
DEBUG - 2016-06-15 10:42:55 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6531353f317459a907ff4e941d27314'
DEBUG - 2016-06-15 10:42:56 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='d6531353f317459a907ff4e941d27314' order by create_date_time desc
DEBUG - 2016-06-15 10:42:56 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6531353f317459a907ff4e941d27314'
DEBUG - 2016-06-15 10:42:56 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='d6531353f317459a907ff4e941d27314'    order by t1.lno asc
        
DEBUG - 2016-06-15 10:42:56 --> Total execution time: 0.2058
DEBUG - 2016-06-15 10:42:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465958576
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 10:43:06 --> Security Class Initialized
DEBUG - 2016-06-15 10:43:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 10:43:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('29d6c9f3de164034809a00875870b6f4', '114.91.131.17', '2016-06-15', '10:43:06', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'c57bb90640806a79322f08e8c809f7e2e110ac13')
DEBUG - 2016-06-15 10:43:06 --> 审核订单
DEBUG - 2016-06-15 10:43:06 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'd6531353f317459a907ff4e941d27314'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-15 10:43:06 --> 过程调用语句：  execute USP_APSOS_outorder 'd6531353f317459a907ff4e941d27314'
DEBUG - 2016-06-15 10:43:07 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'd6531353f317459a907ff4e941d27314', '2', '', 'ebb43aeb3aa94dd5a540a55e5073f489', '2016-06-15 10:43:07')
DEBUG - 2016-06-15 10:43:07 --> 该订单状态更新成功:2
DEBUG - 2016-06-15 10:43:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6531353f317459a907ff4e941d27314'
DEBUG - 2016-06-15 10:43:07 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-06-15 10:43:07 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-15 10:43:07 --> Total execution time: 1.3104
DEBUG - 2016-06-15 10:43:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465958587
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 10:43:07 --> Security Class Initialized
DEBUG - 2016-06-15 10:43:07 --> CRSF cookie Set
DEBUG - 2016-06-15 10:43:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 10:43:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('46771167acd945d3bf4c736bc40cf7f2', '114.91.131.17', '2016-06-15', '10:43:07', '120340235', '/admin/order/check/d6531353f317459a907ff4e941d27314', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'c57bb90640806a79322f08e8c809f7e2e110ac13')
DEBUG - 2016-06-15 10:43:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6531353f317459a907ff4e941d27314'
DEBUG - 2016-06-15 10:43:07 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='d6531353f317459a907ff4e941d27314' order by create_date_time desc
DEBUG - 2016-06-15 10:43:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6531353f317459a907ff4e941d27314'
DEBUG - 2016-06-15 10:43:07 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='d6531353f317459a907ff4e941d27314'    order by t1.lno asc
        
DEBUG - 2016-06-15 10:43:07 --> Total execution time: 0.1092
DEBUG - 2016-06-15 10:43:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465958587
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:16 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 10:43:16 --> Security Class Initialized
DEBUG - 2016-06-15 10:43:16 --> CRSF cookie Set
DEBUG - 2016-06-15 10:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 10:43:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('64e2a25e2bf94247bef46476eae023fe', '114.91.131.17', '2016-06-15', '10:43:16', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'c57bb90640806a79322f08e8c809f7e2e110ac13')
DEBUG - 2016-06-15 10:43:16 --> 查询待发货订单
DEBUG - 2016-06-15 10:43:16 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-15 10:43:16 --> Total execution time: 0.1248
DEBUG - 2016-06-15 10:43:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465958596
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 10:43:21 --> Security Class Initialized
DEBUG - 2016-06-15 10:43:21 --> CRSF cookie Set
DEBUG - 2016-06-15 10:43:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 10:43:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a059a6f9f88949f384e5234021d9f61c', '114.91.131.17', '2016-06-15', '10:43:21', '120340235', '/admin/order/traffic/b3079c179ab044ac82f85f4a846a778a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'c57bb90640806a79322f08e8c809f7e2e110ac13')
DEBUG - 2016-06-15 10:43:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-15 10:43:21 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='b3079c179ab044ac82f85f4a846a778a' order by create_date_time desc
DEBUG - 2016-06-15 10:43:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-15 10:43:21 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='b3079c179ab044ac82f85f4a846a778a'    order by t1.lno asc
        
DEBUG - 2016-06-15 10:43:22 --> Total execution time: 0.1248
DEBUG - 2016-06-15 10:43:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465958602
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 10:43:27 --> Security Class Initialized
DEBUG - 2016-06-15 10:43:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 10:43:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4d27a36308c343c399fc85d8b3657cf7', '114.91.131.17', '2016-06-15', '10:43:27', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'c57bb90640806a79322f08e8c809f7e2e110ac13')
DEBUG - 2016-06-15 10:43:28 --> 审核订单
DEBUG - 2016-06-15 10:43:28 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = 'b3079c179ab044ac82f85f4a846a778a'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-15 10:43:28 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'b3079c179ab044ac82f85f4a846a778a', '3', '', 'f8966add5b6e467788980ecd2f3d5268', '2016-06-15 10:43:28')
DEBUG - 2016-06-15 10:43:28 --> 该订单状态更新成功:3
DEBUG - 2016-06-15 10:43:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-15 10:43:28 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-06-15 10:43:29 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-15 10:43:29 --> Total execution time: 1.1126
DEBUG - 2016-06-15 10:43:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465958609
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 10:43:29 --> Security Class Initialized
DEBUG - 2016-06-15 10:43:29 --> CRSF cookie Set
DEBUG - 2016-06-15 10:43:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 10:43:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b2b228fe3de548b2a9dc07873fa05af2', '114.91.131.17', '2016-06-15', '10:43:29', '120340235', '/admin/order/traffic/b3079c179ab044ac82f85f4a846a778a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'c57bb90640806a79322f08e8c809f7e2e110ac13')
DEBUG - 2016-06-15 10:43:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-15 10:43:29 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='b3079c179ab044ac82f85f4a846a778a' order by create_date_time desc
DEBUG - 2016-06-15 10:43:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-15 10:43:29 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='b3079c179ab044ac82f85f4a846a778a'    order by t1.lno asc
        
DEBUG - 2016-06-15 10:43:29 --> Total execution time: 0.1092
DEBUG - 2016-06-15 10:43:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465958609
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 10:43:38 --> Security Class Initialized
DEBUG - 2016-06-15 10:43:38 --> CRSF cookie Set
DEBUG - 2016-06-15 10:43:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 10:43:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a33382390b084babae2760ad015fd9ac', '114.91.131.17', '2016-06-15', '10:43:38', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'c57bb90640806a79322f08e8c809f7e2e110ac13')
DEBUG - 2016-06-15 10:43:38 --> 查询待审核订单
DEBUG - 2016-06-15 10:43:38 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-15 10:43:38 --> Total execution time: 0.0936
DEBUG - 2016-06-15 10:43:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465958618
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 10:43:43 --> Security Class Initialized
DEBUG - 2016-06-15 10:43:43 --> CRSF cookie Set
DEBUG - 2016-06-15 10:43:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 10:43:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 10:43:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8586ce34094643b4bdd88cd066e637bb', '114.91.131.17', '2016-06-15', '10:43:43', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'c57bb90640806a79322f08e8c809f7e2e110ac13')
DEBUG - 2016-06-15 10:43:43 --> 查询待发货订单
DEBUG - 2016-06-15 10:43:43 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-15 10:43:43 --> Total execution time: 0.0936
DEBUG - 2016-06-15 10:43:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465958623
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 11:21:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 11:21:20 --> Security Class Initialized
DEBUG - 2016-06-15 11:21:20 --> CRSF cookie Set
DEBUG - 2016-06-15 11:21:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 11:21:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 11:21:20 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'c57bb90640806a79322f08e8c809f7e2e110ac13'
DEBUG - 2016-06-15 11:21:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c6b47181be6c411cbf5f2cc1aff70d72', '114.91.131.17', '2016-06-15', '11:21:20', '120340235', '/admin/order/traffic/d6531353f317459a907ff4e941d27314', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ef9c8614327c506e15f90850c0602c89fb00ca78')
DEBUG - 2016-06-15 11:21:20 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6531353f317459a907ff4e941d27314'
DEBUG - 2016-06-15 11:21:20 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='d6531353f317459a907ff4e941d27314' order by create_date_time desc
DEBUG - 2016-06-15 11:21:20 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6531353f317459a907ff4e941d27314'
DEBUG - 2016-06-15 11:21:20 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='d6531353f317459a907ff4e941d27314'    order by t1.lno asc
        
DEBUG - 2016-06-15 11:21:20 --> Total execution time: 0.0936
DEBUG - 2016-06-15 11:21:20 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ef9c8614327c506e15f90850c0602c89fb00ca78', '114.91.131.17', 1465960880, '__ci_last_regenerate|i:1465960880;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-15 11:21:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 11:21:26 --> Security Class Initialized
DEBUG - 2016-06-15 11:21:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 11:21:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ef9c8614327c506e15f90850c0602c89fb00ca78'
DEBUG - 2016-06-15 11:21:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8ef051e3f6e24e4f8c87408db1f7fcd9', '114.91.131.17', '2016-06-15', '11:21:26', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ef9c8614327c506e15f90850c0602c89fb00ca78')
DEBUG - 2016-06-15 11:21:26 --> 审核订单
DEBUG - 2016-06-15 11:21:26 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = 'd6531353f317459a907ff4e941d27314'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-15 11:21:26 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'd6531353f317459a907ff4e941d27314', '3', '', '708e8dbb90254cc48381d67c80f9f574', '2016-06-15 11:21:26')
DEBUG - 2016-06-15 11:21:26 --> 该订单状态更新成功:3
DEBUG - 2016-06-15 11:21:26 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6531353f317459a907ff4e941d27314'
DEBUG - 2016-06-15 11:21:26 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-06-15 11:21:28 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-15 11:21:28 --> Total execution time: 2.0124
DEBUG - 2016-06-15 11:21:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465960888
WHERE id = 'ef9c8614327c506e15f90850c0602c89fb00ca78'
DEBUG - 2016-06-15 11:21:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-15 11:21:28 --> Security Class Initialized
DEBUG - 2016-06-15 11:21:28 --> CRSF cookie Set
DEBUG - 2016-06-15 11:21:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-15 11:21:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ef9c8614327c506e15f90850c0602c89fb00ca78'
DEBUG - 2016-06-15 11:21:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('aeeb065ab76543c882070a3e46bba69b', '114.91.131.17', '2016-06-15', '11:21:28', '120340235', '/admin/order/traffic/d6531353f317459a907ff4e941d27314', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ef9c8614327c506e15f90850c0602c89fb00ca78')
DEBUG - 2016-06-15 11:21:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6531353f317459a907ff4e941d27314'
DEBUG - 2016-06-15 11:21:28 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='d6531353f317459a907ff4e941d27314' order by create_date_time desc
DEBUG - 2016-06-15 11:21:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='d6531353f317459a907ff4e941d27314'
DEBUG - 2016-06-15 11:21:28 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='d6531353f317459a907ff4e941d27314'    order by t1.lno asc
        
DEBUG - 2016-06-15 11:21:28 --> Total execution time: 0.1092
DEBUG - 2016-06-15 11:21:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465960888
WHERE id = 'ef9c8614327c506e15f90850c0602c89fb00ca78'
