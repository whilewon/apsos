<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-14 13:06:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:06:42 --> CRSF cookie Set
DEBUG - 2016-06-14 13:06:42 --> Security Class Initialized
DEBUG - 2016-06-14 13:06:42 --> CRSF cookie Set
DEBUG - 2016-06-14 13:06:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:06:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:06:42 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e14164cf996ac3f769bacb08315dd446f24b3af1', '114.91.131.17', 1465880802, '__ci_last_regenerate|i:1465880802;')
DEBUG - 2016-06-14 13:06:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:06:42 --> Security Class Initialized
DEBUG - 2016-06-14 13:06:42 --> CRSF cookie Set
DEBUG - 2016-06-14 13:06:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:06:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:06:42 --> Total execution time: 0.0936
DEBUG - 2016-06-14 13:06:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880802
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:06:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:06:45 --> Security Class Initialized
DEBUG - 2016-06-14 13:06:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:06:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:06:45 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-14 13:06:45 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-14 13:06:45 --> 登录返回结果数：1
DEBUG - 2016-06-14 13:06:45 --> 成功登录
DEBUG - 2016-06-14 13:06:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880805, data = '__ci_last_regenerate|i:1465880802;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:06:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:06:45 --> Security Class Initialized
DEBUG - 2016-06-14 13:06:45 --> CRSF cookie Set
DEBUG - 2016-06-14 13:06:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:06:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:06:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('08e4d427302f417db4e247121f3d190e', '114.91.131.17', '2016-06-14', '13:06:45', '120340235', '/admin/order/check/b3079c179ab044ac82f85f4a846a778a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:06:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 13:06:45 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='b3079c179ab044ac82f85f4a846a778a' order by create_date_time desc
DEBUG - 2016-06-14 13:06:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 13:06:45 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='b3079c179ab044ac82f85f4a846a778a'    order by t1.lno asc
        
DEBUG - 2016-06-14 13:06:45 --> Total execution time: 0.1716
DEBUG - 2016-06-14 13:06:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880805
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:06:59 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:06:59 --> Security Class Initialized
DEBUG - 2016-06-14 13:06:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:06:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:06:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7b714c5dfb4b48848618d4779a17b423', '114.91.131.17', '2016-06-14', '13:06:59', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:06:59 --> 审核订单
DEBUG - 2016-06-14 13:06:59 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'b3079c179ab044ac82f85f4a846a778a'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-14 13:06:59 --> 过程调用语句：  execute USP_APSOS_outorder 'b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 13:07:03 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'b3079c179ab044ac82f85f4a846a778a', '2', '', '8643dd628e8c48ad8a912e16e8191a22', '2016-06-14 13:07:03')
DEBUG - 2016-06-14 13:07:03 --> 该订单状态更新成功:2
DEBUG - 2016-06-14 13:07:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 13:07:03 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-06-14 13:07:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:07:04 --> Security Class Initialized
DEBUG - 2016-06-14 13:07:04 --> CRSF cookie Set
DEBUG - 2016-06-14 13:07:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:07:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:07:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('597a5bb1076d4c6cbac22c3fcbabeb0f', '114.91.131.17', '2016-06-14', '13:07:04', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:07:04 --> 查询待发货订单
DEBUG - 2016-06-14 13:07:04 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-14 13:07:04 --> Total execution time: 0.1092
DEBUG - 2016-06-14 13:07:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880824
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:07:04 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-14 13:07:04 --> Total execution time: 5.2572
DEBUG - 2016-06-14 13:07:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880824
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:07:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:07:18 --> Security Class Initialized
DEBUG - 2016-06-14 13:07:18 --> CRSF cookie Set
DEBUG - 2016-06-14 13:07:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:07:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:07:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2b6b5d697cbf4df58c77fe5622548c44', '114.91.131.17', '2016-06-14', '13:07:18', '120340235', '/admin/order/traffic/83d6465d95154a7ea845b0ef6a76eb9b', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:07:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-14 13:07:18 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='83d6465d95154a7ea845b0ef6a76eb9b' order by create_date_time desc
DEBUG - 2016-06-14 13:07:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-14 13:07:18 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='83d6465d95154a7ea845b0ef6a76eb9b'    order by t1.lno asc
        
DEBUG - 2016-06-14 13:07:18 --> Total execution time: 0.1092
DEBUG - 2016-06-14 13:07:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880838
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:07:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:07:33 --> Security Class Initialized
DEBUG - 2016-06-14 13:07:33 --> CRSF cookie Set
DEBUG - 2016-06-14 13:07:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:07:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:07:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8f35da7a873d41acb345879836ef2f0d', '114.91.131.17', '2016-06-14', '13:07:33', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:07:33 --> 查询待发货订单
DEBUG - 2016-06-14 13:07:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-14 13:07:33 --> Total execution time: 0.0780
DEBUG - 2016-06-14 13:07:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880853
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:07:34 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:07:34 --> Security Class Initialized
DEBUG - 2016-06-14 13:07:34 --> CRSF cookie Set
DEBUG - 2016-06-14 13:07:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:07:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:07:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('245ea22ca58948829456159d5050047a', '114.91.131.17', '2016-06-14', '13:07:34', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:07:34 --> 查询待发货订单
DEBUG - 2016-06-14 13:07:34 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-14 13:07:34 --> Total execution time: 0.1092
DEBUG - 2016-06-14 13:07:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880854
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:07:41 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:07:41 --> Security Class Initialized
DEBUG - 2016-06-14 13:07:41 --> CRSF cookie Set
DEBUG - 2016-06-14 13:07:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:07:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:07:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('97bb24684c50443792055741ebb525eb', '114.91.131.17', '2016-06-14', '13:07:41', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:07:41 --> 查询订单
DEBUG - 2016-06-14 13:07:41 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-14 13:07:41 --> Total execution time: 0.0936
DEBUG - 2016-06-14 13:07:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880861
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:07:59 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:08:00 --> Security Class Initialized
DEBUG - 2016-06-14 13:08:00 --> CRSF cookie Set
DEBUG - 2016-06-14 13:08:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:08:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('df0c2b1b2677460a976d5a3bb8b77a0e', '114.91.131.17', '2016-06-14', '13:08:00', '120340235', '/admin/order/index/aad9abd680b64466ad6d54f2b081b89f', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:08:00 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aad9abd680b64466ad6d54f2b081b89f'
DEBUG - 2016-06-14 13:08:00 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aad9abd680b64466ad6d54f2b081b89f' order by create_date_time desc
DEBUG - 2016-06-14 13:08:00 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aad9abd680b64466ad6d54f2b081b89f'
DEBUG - 2016-06-14 13:08:00 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aad9abd680b64466ad6d54f2b081b89f'    order by t1.lno asc
        
DEBUG - 2016-06-14 13:08:00 --> Total execution time: 0.1404
DEBUG - 2016-06-14 13:08:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880880
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:08 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:08:08 --> Security Class Initialized
DEBUG - 2016-06-14 13:08:08 --> CRSF cookie Set
DEBUG - 2016-06-14 13:08:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:08:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f3a3705bab1741f1b5b2895182f2afa2', '114.91.131.17', '2016-06-14', '13:08:08', '120340235', '/admin/order/index/aad9abd680b64466ad6d54f2b081b89f?uuid=aad9abd680b64466ad6d54f2b081b89f&consignee_name=%E6%9D%A8%E5%BF%A0%E5%9B%BD&telphone=13671903982&address=%E4%B8%8A%E6%B5%B7%E5%B8%82%E5%8D%9A%E5%9B%AD%E8%B7%AF999%E5%8F%B711%E6%A0%8B115', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:08:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aad9abd680b64466ad6d54f2b081b89f'
DEBUG - 2016-06-14 13:08:08 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aad9abd680b64466ad6d54f2b081b89f' order by create_date_time desc
DEBUG - 2016-06-14 13:08:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aad9abd680b64466ad6d54f2b081b89f'
DEBUG - 2016-06-14 13:08:08 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aad9abd680b64466ad6d54f2b081b89f'    order by t1.lno asc
        
DEBUG - 2016-06-14 13:08:08 --> Total execution time: 0.0780
DEBUG - 2016-06-14 13:08:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880888
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:08:21 --> Security Class Initialized
DEBUG - 2016-06-14 13:08:21 --> CRSF cookie Set
DEBUG - 2016-06-14 13:08:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:08:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0508d5199af64d34b9d472da2614c900', '114.91.131.17', '2016-06-14', '13:08:21', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:08:21 --> 查询待发货订单
DEBUG - 2016-06-14 13:08:21 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-14 13:08:21 --> Total execution time: 0.0780
DEBUG - 2016-06-14 13:08:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880901
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:08:24 --> Security Class Initialized
DEBUG - 2016-06-14 13:08:24 --> CRSF cookie Set
DEBUG - 2016-06-14 13:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:08:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('83373fc4fb8b4b86bbcdb579a39b3060', '114.91.131.17', '2016-06-14', '13:08:25', '120340235', '/admin/order/traffic/b3079c179ab044ac82f85f4a846a778a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:08:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 13:08:25 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='b3079c179ab044ac82f85f4a846a778a' order by create_date_time desc
DEBUG - 2016-06-14 13:08:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 13:08:25 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='b3079c179ab044ac82f85f4a846a778a'    order by t1.lno asc
        
DEBUG - 2016-06-14 13:08:25 --> Total execution time: 0.0936
DEBUG - 2016-06-14 13:08:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880905
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:08:29 --> Security Class Initialized
DEBUG - 2016-06-14 13:08:29 --> CRSF cookie Set
DEBUG - 2016-06-14 13:08:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:08:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('066ac65cf5614b55a893b999be51ba25', '114.91.131.17', '2016-06-14', '13:08:29', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:08:29 --> 查询待审核订单
DEBUG - 2016-06-14 13:08:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-14 13:08:29 --> Total execution time: 0.0936
DEBUG - 2016-06-14 13:08:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880909
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:08:31 --> Security Class Initialized
DEBUG - 2016-06-14 13:08:31 --> CRSF cookie Set
DEBUG - 2016-06-14 13:08:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:08:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('763e5ea838f94d0190a30b829c169670', '114.91.131.17', '2016-06-14', '13:08:32', '120340235', '/admin/order/check/aad9abd680b64466ad6d54f2b081b89f', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:08:32 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aad9abd680b64466ad6d54f2b081b89f'
DEBUG - 2016-06-14 13:08:32 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aad9abd680b64466ad6d54f2b081b89f' order by create_date_time desc
DEBUG - 2016-06-14 13:08:32 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aad9abd680b64466ad6d54f2b081b89f'
DEBUG - 2016-06-14 13:08:32 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aad9abd680b64466ad6d54f2b081b89f'    order by t1.lno asc
        
DEBUG - 2016-06-14 13:08:32 --> Total execution time: 0.0936
DEBUG - 2016-06-14 13:08:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880912
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:08:38 --> Security Class Initialized
DEBUG - 2016-06-14 13:08:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:08:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6c6eb343e0b44e51aeeae676fa6fb74a', '114.91.131.17', '2016-06-14', '13:08:38', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:08:38 --> 审核订单
DEBUG - 2016-06-14 13:08:38 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'aad9abd680b64466ad6d54f2b081b89f'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-14 13:08:38 --> 过程调用语句：  execute USP_APSOS_outorder 'aad9abd680b64466ad6d54f2b081b89f'
DEBUG - 2016-06-14 13:08:38 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'aad9abd680b64466ad6d54f2b081b89f', '2', '', '3a28c35c3322447d83942d236ac8a858', '2016-06-14 13:08:38')
DEBUG - 2016-06-14 13:08:38 --> 该订单状态更新成功:2
DEBUG - 2016-06-14 13:08:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aad9abd680b64466ad6d54f2b081b89f'
DEBUG - 2016-06-14 13:08:38 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-06-14 13:08:39 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-14 13:08:39 --> Total execution time: 1.0296
DEBUG - 2016-06-14 13:08:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880919
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:39 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:08:39 --> Security Class Initialized
DEBUG - 2016-06-14 13:08:39 --> CRSF cookie Set
DEBUG - 2016-06-14 13:08:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:08:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b30f08f5357c4fefa06f0b7914553cda', '114.91.131.17', '2016-06-14', '13:08:39', '120340235', '/admin/order/check/aad9abd680b64466ad6d54f2b081b89f', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:08:39 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aad9abd680b64466ad6d54f2b081b89f'
DEBUG - 2016-06-14 13:08:39 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aad9abd680b64466ad6d54f2b081b89f' order by create_date_time desc
DEBUG - 2016-06-14 13:08:39 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aad9abd680b64466ad6d54f2b081b89f'
DEBUG - 2016-06-14 13:08:39 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aad9abd680b64466ad6d54f2b081b89f'    order by t1.lno asc
        
DEBUG - 2016-06-14 13:08:39 --> Total execution time: 0.0936
DEBUG - 2016-06-14 13:08:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880919
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:08:42 --> Security Class Initialized
DEBUG - 2016-06-14 13:08:42 --> CRSF cookie Set
DEBUG - 2016-06-14 13:08:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:08:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('44f9b408d5ba4193a4d4d97674f0eeb9', '114.91.131.17', '2016-06-14', '13:08:42', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:08:42 --> 查询待审核订单
DEBUG - 2016-06-14 13:08:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-14 13:08:42 --> Total execution time: 0.0780
DEBUG - 2016-06-14 13:08:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880922
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:08:51 --> Security Class Initialized
DEBUG - 2016-06-14 13:08:51 --> CRSF cookie Set
DEBUG - 2016-06-14 13:08:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:08:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('885e9103963048d7ae040483dec47972', '114.91.131.17', '2016-06-14', '13:08:51', '120340235', '/admin/order/check/e2fe562068924354864325b5fbf32b9a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:08:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-14 13:08:51 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e2fe562068924354864325b5fbf32b9a' order by create_date_time desc
DEBUG - 2016-06-14 13:08:51 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-14 13:08:51 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e2fe562068924354864325b5fbf32b9a'    order by t1.lno asc
        
DEBUG - 2016-06-14 13:08:51 --> Total execution time: 0.1092
DEBUG - 2016-06-14 13:08:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880931
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:08:55 --> Security Class Initialized
DEBUG - 2016-06-14 13:08:55 --> CRSF cookie Set
DEBUG - 2016-06-14 13:08:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:08:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('45a32d31c3d7428ca167c119c747f55b', '114.91.131.17', '2016-06-14', '13:08:56', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:08:56 --> 查询待审核订单
DEBUG - 2016-06-14 13:08:56 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-14 13:08:56 --> Total execution time: 0.0780
DEBUG - 2016-06-14 13:08:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880936
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:08:56 --> Security Class Initialized
DEBUG - 2016-06-14 13:08:56 --> CRSF cookie Set
DEBUG - 2016-06-14 13:08:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:08:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:08:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('15ab1ef38ff44789ad72248bb2effdad', '114.91.131.17', '2016-06-14', '13:08:56', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:08:56 --> 查询订单
DEBUG - 2016-06-14 13:08:56 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-14 13:08:56 --> Total execution time: 0.0780
DEBUG - 2016-06-14 13:08:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880937
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:09:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:09:22 --> Security Class Initialized
DEBUG - 2016-06-14 13:09:22 --> CRSF cookie Set
DEBUG - 2016-06-14 13:09:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:09:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:09:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fe744f9bd235431899a7e44648d83809', '114.91.131.17', '2016-06-14', '13:09:22', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:09:22 --> 查询订单
DEBUG - 2016-06-14 13:09:22 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-14 13:09:22 --> Total execution time: 0.0780
DEBUG - 2016-06-14 13:09:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880962
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:09:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:09:22 --> Security Class Initialized
DEBUG - 2016-06-14 13:09:22 --> CRSF cookie Set
DEBUG - 2016-06-14 13:09:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:09:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:09:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('44448002f1c4421491d5b77f42dd0228', '114.91.131.17', '2016-06-14', '13:09:22', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:09:22 --> 查询订单
DEBUG - 2016-06-14 13:09:22 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-14 13:09:22 --> Total execution time: 0.0936
DEBUG - 2016-06-14 13:09:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880962
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:09:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 13:09:27 --> Security Class Initialized
DEBUG - 2016-06-14 13:09:27 --> CRSF cookie Set
DEBUG - 2016-06-14 13:09:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 13:09:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 13:09:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3c20d1f3b40f44e5a29b56c415060d67', '114.91.131.17', '2016-06-14', '13:09:27', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e14164cf996ac3f769bacb08315dd446f24b3af1')
DEBUG - 2016-06-14 13:09:27 --> 查询待发货订单
DEBUG - 2016-06-14 13:09:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-14 13:09:27 --> Total execution time: 0.0936
DEBUG - 2016-06-14 13:09:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465880967
WHERE id = 'e14164cf996ac3f769bacb08315dd446f24b3af1'
DEBUG - 2016-06-14 15:08:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:08:22 --> Security Class Initialized
DEBUG - 2016-06-14 15:08:22 --> CRSF cookie Set
DEBUG - 2016-06-14 15:08:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:08:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:23 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('362e46603da250ffcd28e9f82d5cba3a9df9de52', '114.91.131.17', 1465888103, '__ci_last_regenerate|i:1465888103;')
DEBUG - 2016-06-14 15:08:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:08:23 --> Security Class Initialized
DEBUG - 2016-06-14 15:08:23 --> CRSF cookie Set
DEBUG - 2016-06-14 15:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:08:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:23 --> Total execution time: 0.1092
DEBUG - 2016-06-14 15:08:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888103
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:08:24 --> Security Class Initialized
DEBUG - 2016-06-14 15:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:08:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:24 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-14 15:08:24 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-14 15:08:24 --> 登录返回结果数：1
DEBUG - 2016-06-14 15:08:24 --> 成功登录
DEBUG - 2016-06-14 15:08:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888104, data = '__ci_last_regenerate|i:1465888103;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:08:24 --> Security Class Initialized
DEBUG - 2016-06-14 15:08:24 --> CRSF cookie Set
DEBUG - 2016-06-14 15:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:08:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0828bda92f9844aa922a05a93b787698', '114.91.131.17', '2016-06-14', '15:08:24', '120340235', '/admin/order/check/b3079c179ab044ac82f85f4a846a778a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '362e46603da250ffcd28e9f82d5cba3a9df9de52')
DEBUG - 2016-06-14 15:08:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 15:08:24 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='b3079c179ab044ac82f85f4a846a778a' order by create_date_time desc
DEBUG - 2016-06-14 15:08:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 15:08:24 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='b3079c179ab044ac82f85f4a846a778a'    order by t1.lno asc
        
DEBUG - 2016-06-14 15:08:24 --> Total execution time: 0.1092
DEBUG - 2016-06-14 15:08:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888104
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:08:40 --> Security Class Initialized
DEBUG - 2016-06-14 15:08:40 --> CRSF cookie Set
DEBUG - 2016-06-14 15:08:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:08:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('00d911e36c7e471b883986c621f2c6d1', '114.91.131.17', '2016-06-14', '15:08:40', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '362e46603da250ffcd28e9f82d5cba3a9df9de52')
DEBUG - 2016-06-14 15:08:40 --> 查询待审核订单
DEBUG - 2016-06-14 15:08:40 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-14 15:08:40 --> Total execution time: 0.1092
DEBUG - 2016-06-14 15:08:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888120
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:08:42 --> Security Class Initialized
DEBUG - 2016-06-14 15:08:42 --> CRSF cookie Set
DEBUG - 2016-06-14 15:08:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:08:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d9777a49cd0045048b449e9c25a7f533', '114.91.131.17', '2016-06-14', '15:08:42', '120340235', '/admin/order/check/e2fe562068924354864325b5fbf32b9a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '362e46603da250ffcd28e9f82d5cba3a9df9de52')
DEBUG - 2016-06-14 15:08:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-14 15:08:42 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e2fe562068924354864325b5fbf32b9a' order by create_date_time desc
DEBUG - 2016-06-14 15:08:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e2fe562068924354864325b5fbf32b9a'
DEBUG - 2016-06-14 15:08:42 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e2fe562068924354864325b5fbf32b9a'    order by t1.lno asc
        
DEBUG - 2016-06-14 15:08:42 --> Total execution time: 0.0780
DEBUG - 2016-06-14 15:08:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888122
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:08:48 --> Security Class Initialized
DEBUG - 2016-06-14 15:08:48 --> CRSF cookie Set
DEBUG - 2016-06-14 15:08:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:08:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('75d74d6b1a384bd9987fa31c05d5321b', '114.91.131.17', '2016-06-14', '15:08:48', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '362e46603da250ffcd28e9f82d5cba3a9df9de52')
DEBUG - 2016-06-14 15:08:48 --> 查询待发货订单
DEBUG - 2016-06-14 15:08:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-14 15:08:48 --> Total execution time: 0.0780
DEBUG - 2016-06-14 15:08:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888128
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:08:55 --> Security Class Initialized
DEBUG - 2016-06-14 15:08:55 --> CRSF cookie Set
DEBUG - 2016-06-14 15:08:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1b489c2990994f3f90c521e6fd3251e5', '114.91.131.17', '2016-06-14', '15:08:55', '120340235', '/admin/order/traffic/b3079c179ab044ac82f85f4a846a778a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '362e46603da250ffcd28e9f82d5cba3a9df9de52')
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='b3079c179ab044ac82f85f4a846a778a' order by create_date_time desc
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='b3079c179ab044ac82f85f4a846a778a'    order by t1.lno asc
        
DEBUG - 2016-06-14 15:08:55 --> Total execution time: 0.1092
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888135
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:08:55 --> Security Class Initialized
DEBUG - 2016-06-14 15:08:55 --> CRSF cookie Set
DEBUG - 2016-06-14 15:08:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('311c16ba32de42ef8314d88020ca2d49', '114.91.131.17', '2016-06-14', '15:08:55', '120340235', '/admin/order/traffic/b3079c179ab044ac82f85f4a846a778a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '362e46603da250ffcd28e9f82d5cba3a9df9de52')
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='b3079c179ab044ac82f85f4a846a778a' order by create_date_time desc
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='b3079c179ab044ac82f85f4a846a778a'    order by t1.lno asc
        
DEBUG - 2016-06-14 15:08:55 --> Total execution time: 0.0936
DEBUG - 2016-06-14 15:08:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888135
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:09:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:09:15 --> Security Class Initialized
DEBUG - 2016-06-14 15:09:15 --> CRSF cookie Set
DEBUG - 2016-06-14 15:09:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:09:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:09:15 --> Security Class Initialized
DEBUG - 2016-06-14 15:09:15 --> CRSF cookie Set
DEBUG - 2016-06-14 15:09:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:09:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:09:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8ae51a16a1664ee9848ab6a641bb3261', '114.91.131.17', '2016-06-14', '15:09:15', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '362e46603da250ffcd28e9f82d5cba3a9df9de52')
DEBUG - 2016-06-14 15:09:15 --> 查询待审核订单
DEBUG - 2016-06-14 15:09:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:09:15 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-14 15:09:15 --> Total execution time: 0.0780
DEBUG - 2016-06-14 15:09:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888155
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:09:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('92ec2ad757b440a9a588574938d43378', '114.91.131.17', '2016-06-14', '15:09:15', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '362e46603da250ffcd28e9f82d5cba3a9df9de52')
DEBUG - 2016-06-14 15:09:15 --> 查询待审核订单
DEBUG - 2016-06-14 15:09:15 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-14 15:09:15 --> Total execution time: 0.0780
DEBUG - 2016-06-14 15:09:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888155
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:09:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:09:20 --> Security Class Initialized
DEBUG - 2016-06-14 15:09:20 --> CRSF cookie Set
DEBUG - 2016-06-14 15:09:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:09:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:09:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('10663b7e493d4d4085288d6a09a85c1b', '114.91.131.17', '2016-06-14', '15:09:20', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '362e46603da250ffcd28e9f82d5cba3a9df9de52')
DEBUG - 2016-06-14 15:09:20 --> 查询待审核订单
DEBUG - 2016-06-14 15:09:20 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-14 15:09:20 --> Total execution time: 0.0780
DEBUG - 2016-06-14 15:09:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888160
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:09:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:09:21 --> Security Class Initialized
DEBUG - 2016-06-14 15:09:21 --> CRSF cookie Set
DEBUG - 2016-06-14 15:09:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:09:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:09:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('30d63828d0d648018bfea73aa530110c', '114.91.131.17', '2016-06-14', '15:09:21', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '362e46603da250ffcd28e9f82d5cba3a9df9de52')
DEBUG - 2016-06-14 15:09:21 --> 查询待审核订单
DEBUG - 2016-06-14 15:09:21 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-14 15:09:21 --> Total execution time: 0.0780
DEBUG - 2016-06-14 15:09:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888161
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:09:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:09:58 --> Security Class Initialized
DEBUG - 2016-06-14 15:09:58 --> CRSF cookie Set
DEBUG - 2016-06-14 15:09:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:09:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:09:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e5852ea40d4445e7bcf7fcc8b581e29e', '114.91.131.17', '2016-06-14', '15:09:58', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '362e46603da250ffcd28e9f82d5cba3a9df9de52')
DEBUG - 2016-06-14 15:09:58 --> 查询订单
DEBUG - 2016-06-14 15:09:58 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-14 15:09:58 --> Total execution time: 0.0936
DEBUG - 2016-06-14 15:09:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888198
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:11:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 15:11:58 --> Security Class Initialized
DEBUG - 2016-06-14 15:11:58 --> CRSF cookie Set
DEBUG - 2016-06-14 15:11:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 15:11:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 15:11:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ff8829435ca14aa6a300302a8401f824', '114.91.131.17', '2016-06-14', '15:11:59', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '362e46603da250ffcd28e9f82d5cba3a9df9de52')
DEBUG - 2016-06-14 15:11:59 --> 查询订单
DEBUG - 2016-06-14 15:11:59 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-14 15:11:59 --> Total execution time: 0.0780
DEBUG - 2016-06-14 15:11:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465888319
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 16:11:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 16:11:42 --> Security Class Initialized
DEBUG - 2016-06-14 16:11:42 --> CRSF cookie Set
DEBUG - 2016-06-14 16:11:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 16:11:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 16:11:42 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '362e46603da250ffcd28e9f82d5cba3a9df9de52'
DEBUG - 2016-06-14 16:11:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1ddade22a98b498db10736b4cee7efd4', '114.91.131.17', '2016-06-14', '16:11:42', '120340235', '/admin/order/traffic/83d6465d95154a7ea845b0ef6a76eb9b', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192')
DEBUG - 2016-06-14 16:11:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-14 16:11:42 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='83d6465d95154a7ea845b0ef6a76eb9b' order by create_date_time desc
DEBUG - 2016-06-14 16:11:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-14 16:11:42 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='83d6465d95154a7ea845b0ef6a76eb9b'    order by t1.lno asc
        
DEBUG - 2016-06-14 16:11:42 --> Total execution time: 0.6240
DEBUG - 2016-06-14 16:11:42 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192', '114.91.131.17', 1465891902, '__ci_last_regenerate|i:1465891902;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-14 16:11:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 16:11:55 --> Security Class Initialized
DEBUG - 2016-06-14 16:11:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 16:11:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192'
DEBUG - 2016-06-14 16:11:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('56a4cfdd1e2647b78731942b03d6a28e', '114.91.131.17', '2016-06-14', '16:11:55', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192')
DEBUG - 2016-06-14 16:11:55 --> 审核订单
DEBUG - 2016-06-14 16:11:55 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = '83d6465d95154a7ea845b0ef6a76eb9b'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-14 16:11:55 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '83d6465d95154a7ea845b0ef6a76eb9b', '3', '', 'a2db19547cf245eca28a49a8f10cf28b', '2016-06-14 16:11:55')
DEBUG - 2016-06-14 16:11:55 --> 该订单状态更新成功:3
DEBUG - 2016-06-14 16:11:55 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-14 16:11:55 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05038'
DEBUG - 2016-06-14 16:12:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 16:12:00 --> Security Class Initialized
DEBUG - 2016-06-14 16:12:00 --> CRSF cookie Set
DEBUG - 2016-06-14 16:12:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 16:12:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192'
DEBUG - 2016-06-14 16:12:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('15b77a7802e44a088efe4ba01576c9de', '114.91.131.17', '2016-06-14', '16:12:00', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192')
DEBUG - 2016-06-14 16:12:00 --> 查询待发货订单
DEBUG - 2016-06-14 16:12:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-14 16:12:00 --> Total execution time: 0.1560
DEBUG - 2016-06-14 16:12:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465891920
WHERE id = 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192'
DEBUG - 2016-06-14 16:12:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 16:12:06 --> Security Class Initialized
DEBUG - 2016-06-14 16:12:06 --> CRSF cookie Set
DEBUG - 2016-06-14 16:12:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 16:12:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192'
DEBUG - 2016-06-14 16:12:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('55b3782b90bf4600a357cdfc015a7010', '114.91.131.17', '2016-06-14', '16:12:06', '120340235', '/admin/order/traffic/aad9abd680b64466ad6d54f2b081b89f', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192')
DEBUG - 2016-06-14 16:12:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aad9abd680b64466ad6d54f2b081b89f'
DEBUG - 2016-06-14 16:12:06 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aad9abd680b64466ad6d54f2b081b89f' order by create_date_time desc
DEBUG - 2016-06-14 16:12:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aad9abd680b64466ad6d54f2b081b89f'
DEBUG - 2016-06-14 16:12:06 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aad9abd680b64466ad6d54f2b081b89f'    order by t1.lno asc
        
DEBUG - 2016-06-14 16:12:06 --> Total execution time: 0.1092
DEBUG - 2016-06-14 16:12:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465891926
WHERE id = 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192'
DEBUG - 2016-06-14 16:12:06 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-14 16:12:06 --> Total execution time: 11.4816
DEBUG - 2016-06-14 16:12:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465891926
WHERE id = 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192'
DEBUG - 2016-06-14 16:12:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 16:12:10 --> Security Class Initialized
DEBUG - 2016-06-14 16:12:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 16:12:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192'
DEBUG - 2016-06-14 16:12:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('987c7f7d544846b0b4374c692acb0532', '114.91.131.17', '2016-06-14', '16:12:10', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192')
DEBUG - 2016-06-14 16:12:10 --> 审核订单
DEBUG - 2016-06-14 16:12:10 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = 'aad9abd680b64466ad6d54f2b081b89f'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-14 16:12:10 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'aad9abd680b64466ad6d54f2b081b89f', '3', '', 'd0cd4e82e6084f71b9b1d61960ba3491', '2016-06-14 16:12:10')
DEBUG - 2016-06-14 16:12:10 --> 该订单状态更新成功:3
DEBUG - 2016-06-14 16:12:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aad9abd680b64466ad6d54f2b081b89f'
DEBUG - 2016-06-14 16:12:10 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-06-14 16:12:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 16:12:15 --> Security Class Initialized
DEBUG - 2016-06-14 16:12:15 --> CRSF cookie Set
DEBUG - 2016-06-14 16:12:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 16:12:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192'
DEBUG - 2016-06-14 16:12:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d87dd590588449119ebf85257ecae18d', '114.91.131.17', '2016-06-14', '16:12:15', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192')
DEBUG - 2016-06-14 16:12:15 --> 查询待发货订单
DEBUG - 2016-06-14 16:12:15 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-14 16:12:15 --> Total execution time: 0.0780
DEBUG - 2016-06-14 16:12:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465891935
WHERE id = 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192'
DEBUG - 2016-06-14 16:12:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-14 16:12:17 --> Security Class Initialized
DEBUG - 2016-06-14 16:12:17 --> CRSF cookie Set
DEBUG - 2016-06-14 16:12:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-14 16:12:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192'
DEBUG - 2016-06-14 16:12:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0a0b6317adac486180405f7bb41eb138', '114.91.131.17', '2016-06-14', '16:12:17', '120340235', '/admin/order/traffic/b3079c179ab044ac82f85f4a846a778a', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192')
DEBUG - 2016-06-14 16:12:17 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 16:12:17 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='b3079c179ab044ac82f85f4a846a778a' order by create_date_time desc
DEBUG - 2016-06-14 16:12:17 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b3079c179ab044ac82f85f4a846a778a'
DEBUG - 2016-06-14 16:12:17 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='b3079c179ab044ac82f85f4a846a778a'    order by t1.lno asc
        
DEBUG - 2016-06-14 16:12:17 --> Total execution time: 0.1248
DEBUG - 2016-06-14 16:12:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465891937
WHERE id = 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192'
DEBUG - 2016-06-14 16:12:20 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-14 16:12:20 --> Total execution time: 10.2308
DEBUG - 2016-06-14 16:12:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465891940
WHERE id = 'aed66c3ed2bcb4a8945fe2b3b70642fa39a6c192'
