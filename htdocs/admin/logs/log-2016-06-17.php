<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-17 09:30:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:30:24 --> CRSF cookie Set
DEBUG - 2016-06-17 09:30:24 --> Security Class Initialized
DEBUG - 2016-06-17 09:30:24 --> CRSF cookie Set
DEBUG - 2016-06-17 09:30:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:30:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7545d5f81948d63947b9607f2bc93b2222b1894d'
DEBUG - 2016-06-17 09:30:25 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7545d5f81948d63947b9607f2bc93b2222b1894d', '114.91.131.17', 1466127025, '__ci_last_regenerate|i:1466127025;')
DEBUG - 2016-06-17 09:30:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:30:26 --> Security Class Initialized
DEBUG - 2016-06-17 09:30:26 --> CRSF cookie Set
DEBUG - 2016-06-17 09:30:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:30:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7545d5f81948d63947b9607f2bc93b2222b1894d'
DEBUG - 2016-06-17 09:30:26 --> Total execution time: 0.3744
DEBUG - 2016-06-17 09:30:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127026
WHERE id = '7545d5f81948d63947b9607f2bc93b2222b1894d'
DEBUG - 2016-06-17 09:30:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:30:28 --> Security Class Initialized
DEBUG - 2016-06-17 09:30:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:30:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7545d5f81948d63947b9607f2bc93b2222b1894d'
DEBUG - 2016-06-17 09:30:28 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-17 09:30:28 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-17 09:30:28 --> 登录返回结果数：1
DEBUG - 2016-06-17 09:30:28 --> 成功登录
DEBUG - 2016-06-17 09:30:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127028, data = '__ci_last_regenerate|i:1466127025;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '7545d5f81948d63947b9607f2bc93b2222b1894d'
DEBUG - 2016-06-17 09:30:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:30:28 --> Security Class Initialized
DEBUG - 2016-06-17 09:30:28 --> CRSF cookie Set
DEBUG - 2016-06-17 09:30:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:30:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7545d5f81948d63947b9607f2bc93b2222b1894d'
DEBUG - 2016-06-17 09:30:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('20d9786a9a9344af904984ef435df016', '114.91.131.17', '2016-06-17', '09:30:28', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7545d5f81948d63947b9607f2bc93b2222b1894d')
DEBUG - 2016-06-17 09:30:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-17 09:30:28 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-17 09:30:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-17 09:30:28 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:30:28 --> Total execution time: 0.3900
DEBUG - 2016-06-17 09:30:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127028
WHERE id = '7545d5f81948d63947b9607f2bc93b2222b1894d'
DEBUG - 2016-06-17 09:36:39 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:36:39 --> Security Class Initialized
DEBUG - 2016-06-17 09:36:39 --> CRSF cookie Set
DEBUG - 2016-06-17 09:36:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:36:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7545d5f81948d63947b9607f2bc93b2222b1894d'
DEBUG - 2016-06-17 09:36:39 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '7545d5f81948d63947b9607f2bc93b2222b1894d'
DEBUG - 2016-06-17 09:36:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('045013b4015448d5ade7b02dbd3b183e', '114.91.131.17', '2016-06-17', '09:36:39', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8eecfbb1f0c386ef5211e878206a2fb91fb41720')
DEBUG - 2016-06-17 09:36:39 --> 查询订单
DEBUG - 2016-06-17 09:36:39 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-17 09:36:40 --> Total execution time: 0.4056
DEBUG - 2016-06-17 09:36:40 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8eecfbb1f0c386ef5211e878206a2fb91fb41720', '114.91.131.17', 1466127400, '__ci_last_regenerate|i:1466127399;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-17 09:36:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:36:44 --> Security Class Initialized
DEBUG - 2016-06-17 09:36:44 --> CRSF cookie Set
DEBUG - 2016-06-17 09:36:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:36:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8eecfbb1f0c386ef5211e878206a2fb91fb41720'
DEBUG - 2016-06-17 09:36:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('411746e99f4f4061ae80ced6b03b7665', '114.91.131.17', '2016-06-17', '09:36:44', '120340235', '/admin/order/index/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8eecfbb1f0c386ef5211e878206a2fb91fb41720')
DEBUG - 2016-06-17 09:36:44 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-17 09:36:44 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-17 09:36:44 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-17 09:36:44 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:36:45 --> Total execution time: 0.1560
DEBUG - 2016-06-17 09:36:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127405
WHERE id = '8eecfbb1f0c386ef5211e878206a2fb91fb41720'
DEBUG - 2016-06-17 09:36:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:36:52 --> Security Class Initialized
DEBUG - 2016-06-17 09:36:52 --> CRSF cookie Set
DEBUG - 2016-06-17 09:36:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:36:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8eecfbb1f0c386ef5211e878206a2fb91fb41720'
DEBUG - 2016-06-17 09:36:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('301c40a10900476a9d67f9041b8ba7a8', '114.91.131.17', '2016-06-17', '09:36:52', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8eecfbb1f0c386ef5211e878206a2fb91fb41720')
DEBUG - 2016-06-17 09:36:52 --> 查询待发货订单
DEBUG - 2016-06-17 09:36:52 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 09:36:52 --> Total execution time: 0.1268
DEBUG - 2016-06-17 09:36:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127412
WHERE id = '8eecfbb1f0c386ef5211e878206a2fb91fb41720'
DEBUG - 2016-06-17 09:37:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:37:04 --> Security Class Initialized
DEBUG - 2016-06-17 09:37:04 --> CRSF cookie Set
DEBUG - 2016-06-17 09:37:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:37:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8eecfbb1f0c386ef5211e878206a2fb91fb41720'
DEBUG - 2016-06-17 09:37:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('46e09a8dbcd84e1583cb0a43fdaaa4c0', '114.91.131.17', '2016-06-17', '09:37:04', '120340235', '/admin/order/traffic/0fd260640a3249aea0b6821c91f3f444', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8eecfbb1f0c386ef5211e878206a2fb91fb41720')
DEBUG - 2016-06-17 09:37:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-17 09:37:04 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0fd260640a3249aea0b6821c91f3f444' order by create_date_time desc
DEBUG - 2016-06-17 09:37:04 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-17 09:37:04 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0fd260640a3249aea0b6821c91f3f444'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:37:04 --> Total execution time: 0.1092
DEBUG - 2016-06-17 09:37:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127424
WHERE id = '8eecfbb1f0c386ef5211e878206a2fb91fb41720'
DEBUG - 2016-06-17 09:37:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:37:11 --> Security Class Initialized
DEBUG - 2016-06-17 09:37:11 --> CRSF cookie Set
DEBUG - 2016-06-17 09:37:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:37:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8eecfbb1f0c386ef5211e878206a2fb91fb41720'
DEBUG - 2016-06-17 09:37:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2d95b7f57a0d4a38b85ece5d88a6b643', '114.91.131.17', '2016-06-17', '09:37:11', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8eecfbb1f0c386ef5211e878206a2fb91fb41720')
DEBUG - 2016-06-17 09:37:11 --> 查询待审核订单
DEBUG - 2016-06-17 09:37:11 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:37:11 --> Total execution time: 0.1248
DEBUG - 2016-06-17 09:37:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127431
WHERE id = '8eecfbb1f0c386ef5211e878206a2fb91fb41720'
DEBUG - 2016-06-17 09:37:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:37:15 --> Security Class Initialized
DEBUG - 2016-06-17 09:37:15 --> CRSF cookie Set
DEBUG - 2016-06-17 09:37:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:37:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8eecfbb1f0c386ef5211e878206a2fb91fb41720'
DEBUG - 2016-06-17 09:37:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('76b50ea6f5f140c4bdec8902215f20c6', '114.91.131.17', '2016-06-17', '09:37:15', '120340235', '/admin/order/check/e71823512f2a48bbb32dae54092ddd02', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '8eecfbb1f0c386ef5211e878206a2fb91fb41720')
DEBUG - 2016-06-17 09:37:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-17 09:37:15 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='e71823512f2a48bbb32dae54092ddd02' order by create_date_time desc
DEBUG - 2016-06-17 09:37:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='e71823512f2a48bbb32dae54092ddd02'
DEBUG - 2016-06-17 09:37:15 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='e71823512f2a48bbb32dae54092ddd02'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:37:15 --> Total execution time: 0.1248
DEBUG - 2016-06-17 09:37:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127435
WHERE id = '8eecfbb1f0c386ef5211e878206a2fb91fb41720'
DEBUG - 2016-06-17 09:45:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:45:02 --> Security Class Initialized
DEBUG - 2016-06-17 09:45:02 --> CRSF cookie Set
DEBUG - 2016-06-17 09:45:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:45:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8eecfbb1f0c386ef5211e878206a2fb91fb41720'
DEBUG - 2016-06-17 09:45:02 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '8eecfbb1f0c386ef5211e878206a2fb91fb41720'
DEBUG - 2016-06-17 09:45:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a4dd155654754522a181c8fb7b7a038c', '114.91.131.17', '2016-06-17', '09:45:02', '120340235', '/admin/order/check/4ad461fb647146a3827a62a6b8f9a6dd', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:45:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:45:02 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:45:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:45:02 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:45:02 --> Total execution time: 0.1860
DEBUG - 2016-06-17 09:45:02 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('89c32ab8bf8239d3a72330e0c27497a8855fc139', '114.91.131.17', 1466127902, '__ci_last_regenerate|i:1466127902;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-17 09:45:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:45:06 --> Security Class Initialized
DEBUG - 2016-06-17 09:45:06 --> CRSF cookie Set
DEBUG - 2016-06-17 09:45:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:45:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:45:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1bc62ae367c74bf7b0622743a6c6bc9d', '114.91.131.17', '2016-06-17', '09:45:06', '120340235', '/admin/order/check/4ad461fb647146a3827a62a6b8f9a6dd?uuid=4ad461fb647146a3827a62a6b8f9a6dd&consignee_name=%E6%9D%A8%E6%B3%A2&telphone=13608887934&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:45:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:45:06 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:45:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:45:06 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:45:06 --> Total execution time: 0.1030
DEBUG - 2016-06-17 09:45:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127906
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:45:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:45:13 --> Security Class Initialized
DEBUG - 2016-06-17 09:45:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:45:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:45:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('303b12d2d01a41a2a42707f7ad34e229', '114.91.131.17', '2016-06-17', '09:45:13', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:45:13 --> 审核订单
DEBUG - 2016-06-17 09:45:13 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '4ad461fb647146a3827a62a6b8f9a6dd'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-17 09:45:13 --> 过程调用语句：  execute USP_APSOS_outorder '4ad461fb647146a3827a62a6b8f9a6dd'
ERROR - 2016-06-17 09:45:13 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-17 09:45:13 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-17 09:45:13 --> Total execution time: 0.4880
DEBUG - 2016-06-17 09:45:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127913
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:45:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:45:14 --> Security Class Initialized
DEBUG - 2016-06-17 09:45:14 --> CRSF cookie Set
DEBUG - 2016-06-17 09:45:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:45:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:45:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5947856d96b84f429fb16187820c9106', '114.91.131.17', '2016-06-17', '09:45:14', '120340235', '/admin/order/check/4ad461fb647146a3827a62a6b8f9a6dd?uuid=4ad461fb647146a3827a62a6b8f9a6dd&consignee_name=%E6%9D%A8%E6%B3%A2&telphone=13608887934&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:45:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:45:14 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:45:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:45:14 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:45:14 --> Total execution time: 0.1040
DEBUG - 2016-06-17 09:45:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127914
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:45:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:45:25 --> Security Class Initialized
DEBUG - 2016-06-17 09:45:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:45:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:45:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d23df4e3936841aab333e64abe165992', '114.91.131.17', '2016-06-17', '09:45:25', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:45:25 --> 审核订单
DEBUG - 2016-06-17 09:45:25 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '4ad461fb647146a3827a62a6b8f9a6dd'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-17 09:45:25 --> 过程调用语句：  execute USP_APSOS_outorder '4ad461fb647146a3827a62a6b8f9a6dd'
ERROR - 2016-06-17 09:45:25 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-17 09:45:25 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-17 09:45:25 --> Total execution time: 0.7330
DEBUG - 2016-06-17 09:45:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127925
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:45:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:45:26 --> Security Class Initialized
DEBUG - 2016-06-17 09:45:26 --> CRSF cookie Set
DEBUG - 2016-06-17 09:45:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:45:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:45:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e35a9ba1f9ad4c96b3e64527da6cbcd1', '114.91.131.17', '2016-06-17', '09:45:26', '120340235', '/admin/order/check/4ad461fb647146a3827a62a6b8f9a6dd?uuid=4ad461fb647146a3827a62a6b8f9a6dd&consignee_name=%E6%9D%A8%E6%B3%A2&telphone=13608887934&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:45:26 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:45:26 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:45:26 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:45:26 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:45:26 --> Total execution time: 0.0990
DEBUG - 2016-06-17 09:45:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127926
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:46:21 --> Security Class Initialized
DEBUG - 2016-06-17 09:46:21 --> CRSF cookie Set
DEBUG - 2016-06-17 09:46:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:46:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('37d72b36094e4cf0bf936299810977f9', '114.91.131.17', '2016-06-17', '09:46:21', '120340235', '/admin/order/check/4ad461fb647146a3827a62a6b8f9a6dd?uuid=4ad461fb647146a3827a62a6b8f9a6dd&consignee_name=%E6%9D%A8%E6%B3%A2&telphone=13608887934&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:46:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:46:21 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:46:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:46:21 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:46:21 --> Total execution time: 0.1080
DEBUG - 2016-06-17 09:46:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127981
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:46:27 --> Security Class Initialized
DEBUG - 2016-06-17 09:46:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:46:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('47cee94f13724a479845c9c346ee5453', '114.91.131.17', '2016-06-17', '09:46:27', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:46:27 --> 审核订单
DEBUG - 2016-06-17 09:46:27 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '4ad461fb647146a3827a62a6b8f9a6dd'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-17 09:46:27 --> 过程调用语句：  execute USP_APSOS_outorder '4ad461fb647146a3827a62a6b8f9a6dd'
ERROR - 2016-06-17 09:46:27 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-17 09:46:27 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-17 09:46:27 --> Total execution time: 0.1080
DEBUG - 2016-06-17 09:46:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127987
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:46:27 --> Security Class Initialized
DEBUG - 2016-06-17 09:46:27 --> CRSF cookie Set
DEBUG - 2016-06-17 09:46:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:46:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3e6299156cc847129c21852809242a0b', '114.91.131.17', '2016-06-17', '09:46:27', '120340235', '/admin/order/check/4ad461fb647146a3827a62a6b8f9a6dd?uuid=4ad461fb647146a3827a62a6b8f9a6dd&consignee_name=%E6%9D%A8%E6%B3%A2&telphone=13608887934&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:46:27 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:46:27 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:46:27 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:46:27 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:46:27 --> Total execution time: 0.1170
DEBUG - 2016-06-17 09:46:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466127987
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:46:46 --> Security Class Initialized
DEBUG - 2016-06-17 09:46:46 --> CRSF cookie Set
DEBUG - 2016-06-17 09:46:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:46:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d29949f10b7349388819562be674a964', '114.91.131.17', '2016-06-17', '09:46:46', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:46:46 --> 查询待审核订单
DEBUG - 2016-06-17 09:46:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:46:46 --> Total execution time: 0.1000
DEBUG - 2016-06-17 09:46:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128006
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:46:47 --> Security Class Initialized
DEBUG - 2016-06-17 09:46:47 --> CRSF cookie Set
DEBUG - 2016-06-17 09:46:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:46:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('27b204025b2d4f8e815177e09c2749f7', '114.91.131.17', '2016-06-17', '09:46:47', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:46:47 --> 查询待审核订单
DEBUG - 2016-06-17 09:46:47 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:46:47 --> Total execution time: 0.0940
DEBUG - 2016-06-17 09:46:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128007
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:46:49 --> Security Class Initialized
DEBUG - 2016-06-17 09:46:49 --> CRSF cookie Set
DEBUG - 2016-06-17 09:46:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:46:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fe92288ada8f43debe66ffb08e851da6', '114.91.131.17', '2016-06-17', '09:46:49', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:46:49 --> 查询待审核订单
DEBUG - 2016-06-17 09:46:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:46:49 --> Total execution time: 0.0820
DEBUG - 2016-06-17 09:46:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128009
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:46:51 --> Security Class Initialized
DEBUG - 2016-06-17 09:46:51 --> CRSF cookie Set
DEBUG - 2016-06-17 09:46:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:46:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('68218e8ce5e44066909aff07917a3e0c', '114.91.131.17', '2016-06-17', '09:46:51', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:46:51 --> 查询待审核订单
DEBUG - 2016-06-17 09:46:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:46:51 --> Total execution time: 0.0830
DEBUG - 2016-06-17 09:46:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128011
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:46:53 --> Security Class Initialized
DEBUG - 2016-06-17 09:46:53 --> CRSF cookie Set
DEBUG - 2016-06-17 09:46:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:46:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('58e8d942443440c888eb9708a2dc5634', '114.91.131.17', '2016-06-17', '09:46:53', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:46:53 --> 查询待审核订单
DEBUG - 2016-06-17 09:46:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:46:53 --> Total execution time: 0.0840
DEBUG - 2016-06-17 09:46:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128013
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:46:55 --> Security Class Initialized
DEBUG - 2016-06-17 09:46:55 --> CRSF cookie Set
DEBUG - 2016-06-17 09:46:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:46:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6df1bd73d7f84137932e5d7702fbc9e0', '114.91.131.17', '2016-06-17', '09:46:55', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:46:55 --> 查询待审核订单
DEBUG - 2016-06-17 09:46:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:46:55 --> Total execution time: 0.0950
DEBUG - 2016-06-17 09:46:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128015
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:46:57 --> Security Class Initialized
DEBUG - 2016-06-17 09:46:57 --> CRSF cookie Set
DEBUG - 2016-06-17 09:46:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:46:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:46:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bd66dcdcc71045828c5122535b45b86d', '114.91.131.17', '2016-06-17', '09:46:57', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:46:57 --> 查询订单
DEBUG - 2016-06-17 09:46:57 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-17 09:46:57 --> Total execution time: 0.1240
DEBUG - 2016-06-17 09:46:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128017
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:01 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:01 --> CRSF cookie Set
DEBUG - 2016-06-17 09:47:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fcf1e822380b45449f0904399c077f1b', '114.91.131.17', '2016-06-17', '09:47:01', '120340235', '/admin/order/index/4ad461fb647146a3827a62a6b8f9a6dd', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:01 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:47:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:01 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:47:01 --> Total execution time: 0.1000
DEBUG - 2016-06-17 09:47:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128021
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:12 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:12 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:12 --> CRSF cookie Set
DEBUG - 2016-06-17 09:47:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('910eb553f38548fd8a2c7c872f1369f7', '114.91.131.17', '2016-06-17', '09:47:12', '120340235', '/admin/order/index/4ad461fb647146a3827a62a6b8f9a6dd?uuid=4ad461fb647146a3827a62a6b8f9a6dd&consignee_name=%E6%9D%A8%E6%B3%A2&telphone=13608887934&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:12 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:47:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:12 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:47:12 --> Total execution time: 0.0990
DEBUG - 2016-06-17 09:47:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128032
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:14 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:14 --> CRSF cookie Set
DEBUG - 2016-06-17 09:47:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:14 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:14 --> CRSF cookie Set
DEBUG - 2016-06-17 09:47:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:14 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:14 --> CRSF cookie Set
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8b6dab7ad6ce4bbb80ae44254363d07b', '114.91.131.17', '2016-06-17', '09:47:14', '120340235', '/admin/order/index/4ad461fb647146a3827a62a6b8f9a6dd?uuid=4ad461fb647146a3827a62a6b8f9a6dd&consignee_name=%E6%9D%A8%E6%B3%A2&telphone=13608887934&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5d43888bab2f49f3a4ab743f5bfd5c00', '114.91.131.17', '2016-06-17', '09:47:14', '120340235', '/admin/order/index/4ad461fb647146a3827a62a6b8f9a6dd?uuid=4ad461fb647146a3827a62a6b8f9a6dd&consignee_name=%E6%9D%A8%E6%B3%A2&telphone=13608887934&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('80bc6a372f314322ba0fe21919c10875', '114.91.131.17', '2016-06-17', '09:47:14', '120340235', '/admin/order/index/4ad461fb647146a3827a62a6b8f9a6dd?uuid=4ad461fb647146a3827a62a6b8f9a6dd&consignee_name=%E6%9D%A8%E6%B3%A2&telphone=13608887934&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:47:14 --> Total execution time: 0.1440
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128034
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:14 --> Total execution time: 0.1900
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128034
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:14 --> Total execution time: 0.1070
DEBUG - 2016-06-17 09:47:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128034
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:23 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:23 --> CRSF cookie Set
DEBUG - 2016-06-17 09:47:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6591204b3af0451a9d30ddb1c923d9de', '114.91.131.17', '2016-06-17', '09:47:23', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:23 --> 查询待发货订单
DEBUG - 2016-06-17 09:47:23 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 09:47:23 --> Total execution time: 0.1270
DEBUG - 2016-06-17 09:47:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128043
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:27 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:27 --> CRSF cookie Set
DEBUG - 2016-06-17 09:47:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d364e41cb8594fd59dddac8477331c31', '114.91.131.17', '2016-06-17', '09:47:27', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:27 --> 查询待发货订单
DEBUG - 2016-06-17 09:47:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 09:47:27 --> Total execution time: 0.0740
DEBUG - 2016-06-17 09:47:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128047
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:28 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:28 --> CRSF cookie Set
DEBUG - 2016-06-17 09:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:28 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:28 --> CRSF cookie Set
DEBUG - 2016-06-17 09:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b0b62dccef054f7d924bdb8d71f9f792', '114.91.131.17', '2016-06-17', '09:47:28', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6dc3c3160012490f9a655227109716f7', '114.91.131.17', '2016-06-17', '09:47:28', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:28 --> 查询待审核订单
DEBUG - 2016-06-17 09:47:28 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:47:28 --> Total execution time: 0.1160
DEBUG - 2016-06-17 09:47:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128048
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:28 --> 查询待审核订单
DEBUG - 2016-06-17 09:47:28 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:47:28 --> Total execution time: 0.2330
DEBUG - 2016-06-17 09:47:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128048
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:29 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:29 --> CRSF cookie Set
DEBUG - 2016-06-17 09:47:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7d9b1ac2e55e4dfa910e6a645c48c43f', '114.91.131.17', '2016-06-17', '09:47:29', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:29 --> 查询待审核订单
DEBUG - 2016-06-17 09:47:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:47:29 --> Total execution time: 0.0840
DEBUG - 2016-06-17 09:47:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128049
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:33 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:33 --> CRSF cookie Set
DEBUG - 2016-06-17 09:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5180366ee9cc47f4a652e8b12d66eb39', '114.91.131.17', '2016-06-17', '09:47:33', '120340235', '/admin/order/check/4ad461fb647146a3827a62a6b8f9a6dd', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:33 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:47:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:33 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:47:33 --> Total execution time: 0.1120
DEBUG - 2016-06-17 09:47:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128053
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:40 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c5fea072388d496cb3cf4c0de3a7f320', '114.91.131.17', '2016-06-17', '09:47:40', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:40 --> 审核订单
DEBUG - 2016-06-17 09:47:40 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '4ad461fb647146a3827a62a6b8f9a6dd'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-17 09:47:40 --> 过程调用语句：  execute USP_APSOS_outorder '4ad461fb647146a3827a62a6b8f9a6dd'
ERROR - 2016-06-17 09:47:40 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-17 09:47:40 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-17 09:47:40 --> Total execution time: 0.1340
DEBUG - 2016-06-17 09:47:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128060
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:40 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:40 --> CRSF cookie Set
DEBUG - 2016-06-17 09:47:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('224dadb2e51a427687efc7e65efbf482', '114.91.131.17', '2016-06-17', '09:47:40', '120340235', '/admin/order/check/4ad461fb647146a3827a62a6b8f9a6dd', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:40 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:47:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:47:40 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:47:40 --> Total execution time: 0.1280
DEBUG - 2016-06-17 09:47:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128060
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:47:46 --> Security Class Initialized
DEBUG - 2016-06-17 09:47:46 --> CRSF cookie Set
DEBUG - 2016-06-17 09:47:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:47:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:47:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('422161b22b494752bbc2a706586fb6f5', '114.91.131.17', '2016-06-17', '09:47:46', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '89c32ab8bf8239d3a72330e0c27497a8855fc139')
DEBUG - 2016-06-17 09:47:46 --> 查询待发货订单
DEBUG - 2016-06-17 09:47:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 09:47:46 --> Total execution time: 0.1090
DEBUG - 2016-06-17 09:47:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128066
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:50:35 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:50:35 --> Security Class Initialized
DEBUG - 2016-06-17 09:50:35 --> CRSF cookie Set
DEBUG - 2016-06-17 09:50:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:50:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:50:35 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '89c32ab8bf8239d3a72330e0c27497a8855fc139'
DEBUG - 2016-06-17 09:50:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('674b473be10644e1b76a633649a51618', '114.91.131.17', '2016-06-17', '09:50:35', '120340235', '/admin/order/check/b4fb776d617b4f64820a929edfb1548b', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a94f95e0c69cdc3444c756f04bd5fd9aab428e39')
DEBUG - 2016-06-17 09:50:35 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b4fb776d617b4f64820a929edfb1548b'
DEBUG - 2016-06-17 09:50:35 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='b4fb776d617b4f64820a929edfb1548b' order by create_date_time desc
DEBUG - 2016-06-17 09:50:35 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b4fb776d617b4f64820a929edfb1548b'
DEBUG - 2016-06-17 09:50:35 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='b4fb776d617b4f64820a929edfb1548b'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:50:35 --> Total execution time: 0.0930
DEBUG - 2016-06-17 09:50:35 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a94f95e0c69cdc3444c756f04bd5fd9aab428e39', '114.91.131.17', 1466128235, '__ci_last_regenerate|i:1466128235;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-17 09:50:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:50:42 --> Security Class Initialized
DEBUG - 2016-06-17 09:50:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:50:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a94f95e0c69cdc3444c756f04bd5fd9aab428e39'
DEBUG - 2016-06-17 09:50:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d0363d4f507e4089953b07ff5b8d3d85', '114.91.131.17', '2016-06-17', '09:50:42', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a94f95e0c69cdc3444c756f04bd5fd9aab428e39')
DEBUG - 2016-06-17 09:50:42 --> 审核订单
DEBUG - 2016-06-17 09:50:42 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'b4fb776d617b4f64820a929edfb1548b'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-17 09:50:42 --> 过程调用语句：  execute USP_APSOS_outorder 'b4fb776d617b4f64820a929edfb1548b'
DEBUG - 2016-06-17 09:50:42 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'b4fb776d617b4f64820a929edfb1548b', '2', '', '1ce0d0f4498d4623b644da1d81b9e1c7', '2016-06-17 09:50:42')
DEBUG - 2016-06-17 09:50:42 --> 该订单状态更新成功:2
DEBUG - 2016-06-17 09:50:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b4fb776d617b4f64820a929edfb1548b'
DEBUG - 2016-06-17 09:50:43 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05037'
DEBUG - 2016-06-17 09:50:44 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-17 09:50:44 --> Total execution time: 1.5271
DEBUG - 2016-06-17 09:50:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128244
WHERE id = 'a94f95e0c69cdc3444c756f04bd5fd9aab428e39'
DEBUG - 2016-06-17 09:50:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:50:44 --> Security Class Initialized
DEBUG - 2016-06-17 09:50:44 --> CRSF cookie Set
DEBUG - 2016-06-17 09:50:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:50:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a94f95e0c69cdc3444c756f04bd5fd9aab428e39'
DEBUG - 2016-06-17 09:50:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('501547cb76924cef88a1e9494024d621', '114.91.131.17', '2016-06-17', '09:50:44', '120340235', '/admin/order/check/b4fb776d617b4f64820a929edfb1548b', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'a94f95e0c69cdc3444c756f04bd5fd9aab428e39')
DEBUG - 2016-06-17 09:50:44 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b4fb776d617b4f64820a929edfb1548b'
DEBUG - 2016-06-17 09:50:44 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='b4fb776d617b4f64820a929edfb1548b' order by create_date_time desc
DEBUG - 2016-06-17 09:50:44 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b4fb776d617b4f64820a929edfb1548b'
DEBUG - 2016-06-17 09:50:44 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='b4fb776d617b4f64820a929edfb1548b'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:50:44 --> Total execution time: 0.0950
DEBUG - 2016-06-17 09:50:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128244
WHERE id = 'a94f95e0c69cdc3444c756f04bd5fd9aab428e39'
DEBUG - 2016-06-17 09:56:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:56:33 --> Security Class Initialized
DEBUG - 2016-06-17 09:56:33 --> CRSF cookie Set
DEBUG - 2016-06-17 09:56:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:56:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a94f95e0c69cdc3444c756f04bd5fd9aab428e39'
DEBUG - 2016-06-17 09:56:33 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a94f95e0c69cdc3444c756f04bd5fd9aab428e39'
DEBUG - 2016-06-17 09:56:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('07c9840b1cc44f5e866d4ee83b2cc7ab', '114.91.131.17', '2016-06-17', '09:56:33', '120340235', '/admin/order/check/7d4b5e6ee61a4c2a817db045dcc9b806', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:56:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 09:56:33 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7d4b5e6ee61a4c2a817db045dcc9b806' order by create_date_time desc
DEBUG - 2016-06-17 09:56:33 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 09:56:33 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7d4b5e6ee61a4c2a817db045dcc9b806'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:56:33 --> Total execution time: 0.1230
DEBUG - 2016-06-17 09:56:33 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0611f543b2912c2de5dd495e4c63ba285db7a7aa', '114.91.131.17', 1466128593, '__ci_last_regenerate|i:1466128593;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-17 09:56:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:56:40 --> Security Class Initialized
DEBUG - 2016-06-17 09:56:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:56:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:56:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1e705d7f1bfe44a6a296e16b1e9bd0b0', '114.91.131.17', '2016-06-17', '09:56:40', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:56:40 --> 审核订单
DEBUG - 2016-06-17 09:56:40 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '7d4b5e6ee61a4c2a817db045dcc9b806'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-17 09:56:40 --> 过程调用语句：  execute USP_APSOS_outorder '7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 09:56:40 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '7d4b5e6ee61a4c2a817db045dcc9b806', '2', '', '684658cf4c1d40e695dbe7eba95011b8', '2016-06-17 09:56:40')
DEBUG - 2016-06-17 09:56:40 --> 该订单状态更新成功:2
DEBUG - 2016-06-17 09:56:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 09:56:40 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05037'
DEBUG - 2016-06-17 09:56:41 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-17 09:56:41 --> Total execution time: 0.7110
DEBUG - 2016-06-17 09:56:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128601
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:56:41 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:56:41 --> Security Class Initialized
DEBUG - 2016-06-17 09:56:41 --> CRSF cookie Set
DEBUG - 2016-06-17 09:56:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:56:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:56:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('070866d0d23346f0981fcabea2e623ef', '114.91.131.17', '2016-06-17', '09:56:41', '120340235', '/admin/order/check/7d4b5e6ee61a4c2a817db045dcc9b806', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:56:41 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 09:56:41 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7d4b5e6ee61a4c2a817db045dcc9b806' order by create_date_time desc
DEBUG - 2016-06-17 09:56:41 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 09:56:41 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7d4b5e6ee61a4c2a817db045dcc9b806'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:56:41 --> Total execution time: 0.0800
DEBUG - 2016-06-17 09:56:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128601
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:57:18 --> Security Class Initialized
DEBUG - 2016-06-17 09:57:18 --> CRSF cookie Set
DEBUG - 2016-06-17 09:57:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:57:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('21035f0be03740b3862b33e7e05f5204', '114.91.131.17', '2016-06-17', '09:57:19', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:57:19 --> 查询待审核订单
DEBUG - 2016-06-17 09:57:19 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:57:19 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:57:19 --> Total execution time: 0.0870
DEBUG - 2016-06-17 09:57:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128639
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:19 --> Security Class Initialized
DEBUG - 2016-06-17 09:57:19 --> CRSF cookie Set
DEBUG - 2016-06-17 09:57:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:57:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b8a77ba1ad12495fa3ef30d6f9c46bd2', '114.91.131.17', '2016-06-17', '09:57:19', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:57:19 --> 查询待审核订单
DEBUG - 2016-06-17 09:57:19 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:57:19 --> Total execution time: 0.0760
DEBUG - 2016-06-17 09:57:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128639
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:57:20 --> Security Class Initialized
DEBUG - 2016-06-17 09:57:20 --> CRSF cookie Set
DEBUG - 2016-06-17 09:57:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:57:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b52b773538d4471799493c7720ae82a6', '114.91.131.17', '2016-06-17', '09:57:20', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:57:20 --> 查询待审核订单
DEBUG - 2016-06-17 09:57:20 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:57:20 --> Total execution time: 0.0990
DEBUG - 2016-06-17 09:57:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128640
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:57:21 --> Security Class Initialized
DEBUG - 2016-06-17 09:57:21 --> CRSF cookie Set
DEBUG - 2016-06-17 09:57:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:57:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dd2499cf200d42d283a0adef9b66bba6', '114.91.131.17', '2016-06-17', '09:57:21', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:57:21 --> 查询待审核订单
DEBUG - 2016-06-17 09:57:21 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:57:21 --> Total execution time: 0.1010
DEBUG - 2016-06-17 09:57:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128641
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:57:29 --> Security Class Initialized
DEBUG - 2016-06-17 09:57:29 --> CRSF cookie Set
DEBUG - 2016-06-17 09:57:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:57:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3e0aed62848d43a99125b42848b3b8ac', '114.91.131.17', '2016-06-17', '09:57:29', '120340235', '/admin/order/check/b4fb776d617b4f64820a929edfb1548b', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:57:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b4fb776d617b4f64820a929edfb1548b'
DEBUG - 2016-06-17 09:57:29 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='b4fb776d617b4f64820a929edfb1548b' order by create_date_time desc
DEBUG - 2016-06-17 09:57:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b4fb776d617b4f64820a929edfb1548b'
DEBUG - 2016-06-17 09:57:29 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='b4fb776d617b4f64820a929edfb1548b'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:57:29 --> Total execution time: 0.1080
DEBUG - 2016-06-17 09:57:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128649
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:37 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:57:37 --> Security Class Initialized
DEBUG - 2016-06-17 09:57:37 --> CRSF cookie Set
DEBUG - 2016-06-17 09:57:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:57:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6af9317a4f0d4fd3b10120f2ad957d3e', '114.91.131.17', '2016-06-17', '09:57:37', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:57:37 --> 查询待审核订单
DEBUG - 2016-06-17 09:57:37 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:57:37 --> Total execution time: 0.0880
DEBUG - 2016-06-17 09:57:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128657
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:41 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:57:41 --> Security Class Initialized
DEBUG - 2016-06-17 09:57:41 --> CRSF cookie Set
DEBUG - 2016-06-17 09:57:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:57:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8b97e9066e4445c7b0d717dc3770750a', '114.91.131.17', '2016-06-17', '09:57:42', '120340235', '/admin/order/check/4ad461fb647146a3827a62a6b8f9a6dd', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:57:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:57:42 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:57:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:57:42 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:57:42 --> Total execution time: 0.0850
DEBUG - 2016-06-17 09:57:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128662
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:57:50 --> Security Class Initialized
DEBUG - 2016-06-17 09:57:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:57:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ed3f52f9c129480cb828b29731480036', '114.91.131.17', '2016-06-17', '09:57:50', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:57:50 --> 审核订单
DEBUG - 2016-06-17 09:57:50 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '4ad461fb647146a3827a62a6b8f9a6dd'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-17 09:57:50 --> 过程调用语句：  execute USP_APSOS_outorder '4ad461fb647146a3827a62a6b8f9a6dd'
ERROR - 2016-06-17 09:57:50 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-17 09:57:50 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-17 09:57:50 --> Total execution time: 0.5790
DEBUG - 2016-06-17 09:57:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128670
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:57:50 --> Security Class Initialized
DEBUG - 2016-06-17 09:57:50 --> CRSF cookie Set
DEBUG - 2016-06-17 09:57:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:57:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:57:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('11fdbf10793d49529ea4c9b1033feea5', '114.91.131.17', '2016-06-17', '09:57:50', '120340235', '/admin/order/check/4ad461fb647146a3827a62a6b8f9a6dd', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:57:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:57:50 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='4ad461fb647146a3827a62a6b8f9a6dd' order by create_date_time desc
DEBUG - 2016-06-17 09:57:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='4ad461fb647146a3827a62a6b8f9a6dd'
DEBUG - 2016-06-17 09:57:50 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='4ad461fb647146a3827a62a6b8f9a6dd'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:57:50 --> Total execution time: 0.1170
DEBUG - 2016-06-17 09:57:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128670
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:58:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:58:04 --> Security Class Initialized
DEBUG - 2016-06-17 09:58:04 --> CRSF cookie Set
DEBUG - 2016-06-17 09:58:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:58:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:58:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b5dd6249f1e6429a872ee9c01a56ee6d', '114.91.131.17', '2016-06-17', '09:58:04', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:58:04 --> 查询待审核订单
DEBUG - 2016-06-17 09:58:04 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:58:04 --> Total execution time: 0.0860
DEBUG - 2016-06-17 09:58:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128684
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:58:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:58:06 --> Security Class Initialized
DEBUG - 2016-06-17 09:58:06 --> CRSF cookie Set
DEBUG - 2016-06-17 09:58:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:58:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:58:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a883b2d0d73b4b7cbbfe4c8b3416240f', '114.91.131.17', '2016-06-17', '09:58:06', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:58:06 --> 查询待发货订单
DEBUG - 2016-06-17 09:58:06 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 09:58:06 --> Total execution time: 0.0910
DEBUG - 2016-06-17 09:58:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128686
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:58:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:58:23 --> Security Class Initialized
DEBUG - 2016-06-17 09:58:23 --> CRSF cookie Set
DEBUG - 2016-06-17 09:58:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:58:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:58:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c3fce60484954293a88d34bbf0822281', '114.91.131.17', '2016-06-17', '09:58:23', '120340235', '/admin/order/traffic/7d4b5e6ee61a4c2a817db045dcc9b806', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:58:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 09:58:24 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7d4b5e6ee61a4c2a817db045dcc9b806' order by create_date_time desc
DEBUG - 2016-06-17 09:58:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 09:58:24 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7d4b5e6ee61a4c2a817db045dcc9b806'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:58:24 --> Total execution time: 1.1111
DEBUG - 2016-06-17 09:58:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128704
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:08 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:59:08 --> Security Class Initialized
DEBUG - 2016-06-17 09:59:08 --> CRSF cookie Set
DEBUG - 2016-06-17 09:59:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:59:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('230cc13deb9c4ab9a8f10aa14b9b8452', '114.91.131.17', '2016-06-17', '09:59:08', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:59:08 --> 查询待审核订单
DEBUG - 2016-06-17 09:59:08 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:59:08 --> Total execution time: 0.0800
DEBUG - 2016-06-17 09:59:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128748
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:59:10 --> Security Class Initialized
DEBUG - 2016-06-17 09:59:10 --> CRSF cookie Set
DEBUG - 2016-06-17 09:59:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:59:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('75b8cd0926044f669038fca2ac45497d', '114.91.131.17', '2016-06-17', '09:59:10', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:59:10 --> 查询待审核订单
DEBUG - 2016-06-17 09:59:10 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:59:10 --> Total execution time: 0.0940
DEBUG - 2016-06-17 09:59:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128750
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:12 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:59:12 --> Security Class Initialized
DEBUG - 2016-06-17 09:59:12 --> CRSF cookie Set
DEBUG - 2016-06-17 09:59:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:59:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fa886dd2f270479cae130f1dd7c29bbd', '114.91.131.17', '2016-06-17', '09:59:12', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:59:12 --> 查询待发货订单
DEBUG - 2016-06-17 09:59:12 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 09:59:12 --> Total execution time: 0.0940
DEBUG - 2016-06-17 09:59:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128752
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:59:14 --> Security Class Initialized
DEBUG - 2016-06-17 09:59:14 --> CRSF cookie Set
DEBUG - 2016-06-17 09:59:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:59:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5cbff8560e2e4dcc81f9fdfa8d98a324', '114.91.131.17', '2016-06-17', '09:59:14', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:59:14 --> 查询待发货订单
DEBUG - 2016-06-17 09:59:14 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 09:59:14 --> Total execution time: 0.0770
DEBUG - 2016-06-17 09:59:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128754
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:59:18 --> Security Class Initialized
DEBUG - 2016-06-17 09:59:18 --> CRSF cookie Set
DEBUG - 2016-06-17 09:59:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:59:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e17b160de50a4126a1eddec4fe1da9cb', '114.91.131.17', '2016-06-17', '09:59:18', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:59:18 --> 查询待审核订单
DEBUG - 2016-06-17 09:59:18 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 09:59:18 --> Total execution time: 0.0770
DEBUG - 2016-06-17 09:59:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128758
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:59:24 --> Security Class Initialized
DEBUG - 2016-06-17 09:59:24 --> CRSF cookie Set
DEBUG - 2016-06-17 09:59:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:59:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1c0874c354df4df4a13b3350963e9944', '114.91.131.17', '2016-06-17', '09:59:24', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:59:24 --> 查询待发货订单
DEBUG - 2016-06-17 09:59:24 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 09:59:24 --> Total execution time: 0.0880
DEBUG - 2016-06-17 09:59:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128764
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:35 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:59:35 --> Security Class Initialized
DEBUG - 2016-06-17 09:59:35 --> CRSF cookie Set
DEBUG - 2016-06-17 09:59:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:59:35 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 09:59:35 --> Security Class Initialized
DEBUG - 2016-06-17 09:59:35 --> CRSF cookie Set
DEBUG - 2016-06-17 09:59:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('18c06a95bcca4e3397c0f01282636f09', '114.91.131.17', '2016-06-17', '09:59:35', '120340235', '/admin/order/traffic/7d4b5e6ee61a4c2a817db045dcc9b806', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('22f4b1761ea54714ba7df3142a2d5be3', '114.91.131.17', '2016-06-17', '09:59:35', '120340235', '/admin/order/traffic/7d4b5e6ee61a4c2a817db045dcc9b806', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0611f543b2912c2de5dd495e4c63ba285db7a7aa')
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7d4b5e6ee61a4c2a817db045dcc9b806' order by create_date_time desc
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7d4b5e6ee61a4c2a817db045dcc9b806'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:59:35 --> Total execution time: 0.1420
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128775
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7d4b5e6ee61a4c2a817db045dcc9b806' order by create_date_time desc
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7d4b5e6ee61a4c2a817db045dcc9b806'    order by t1.lno asc
        
DEBUG - 2016-06-17 09:59:35 --> Total execution time: 0.1190
DEBUG - 2016-06-17 09:59:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466128775
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 10:05:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:05:51 --> Security Class Initialized
DEBUG - 2016-06-17 10:05:51 --> CRSF cookie Set
DEBUG - 2016-06-17 10:05:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:05:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 10:05:51 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '0611f543b2912c2de5dd495e4c63ba285db7a7aa'
DEBUG - 2016-06-17 10:05:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d6176288fca340eca0648189ca7f2dd7', '114.91.131.17', '2016-06-17', '10:05:51', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:05:51 --> 查询待审核订单
DEBUG - 2016-06-17 10:05:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 10:05:51 --> Total execution time: 0.1020
DEBUG - 2016-06-17 10:05:51 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('fea8e7bbd706b487952bae6d12d1b588d3a0f873', '114.91.131.17', 1466129151, '__ci_last_regenerate|i:1466129151;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-17 10:07:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:07:45 --> Security Class Initialized
DEBUG - 2016-06-17 10:07:45 --> CRSF cookie Set
DEBUG - 2016-06-17 10:07:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:07:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:07:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0a11440e180d4d4bbccb31e236f73cd0', '114.91.131.17', '2016-06-17', '10:07:45', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:07:45 --> 查询待发货订单
DEBUG - 2016-06-17 10:07:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 10:07:45 --> Total execution time: 0.1040
DEBUG - 2016-06-17 10:07:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129265
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:07:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:07:53 --> Security Class Initialized
DEBUG - 2016-06-17 10:07:53 --> CRSF cookie Set
DEBUG - 2016-06-17 10:07:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:07:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:07:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1bfc078a32d64120bd024e37977f14f8', '114.91.131.17', '2016-06-17', '10:07:53', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:07:53 --> 查询待审核订单
DEBUG - 2016-06-17 10:07:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 10:07:53 --> Total execution time: 0.0910
DEBUG - 2016-06-17 10:07:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129273
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:07:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:07:53 --> Security Class Initialized
DEBUG - 2016-06-17 10:07:53 --> CRSF cookie Set
DEBUG - 2016-06-17 10:07:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:07:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:07:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('297d58f35cd14b028c290587b319aae5', '114.91.131.17', '2016-06-17', '10:07:53', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:07:53 --> 查询待审核订单
DEBUG - 2016-06-17 10:07:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 10:07:53 --> Total execution time: 0.0790
DEBUG - 2016-06-17 10:07:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129273
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:07:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:07:55 --> Security Class Initialized
DEBUG - 2016-06-17 10:07:55 --> CRSF cookie Set
DEBUG - 2016-06-17 10:07:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:07:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:07:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1d7e676de7474fc38d9087799df487d3', '114.91.131.17', '2016-06-17', '10:07:55', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:07:55 --> 查询待审核订单
DEBUG - 2016-06-17 10:07:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 10:07:55 --> Total execution time: 0.0810
DEBUG - 2016-06-17 10:07:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129275
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:07:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:07:58 --> Security Class Initialized
DEBUG - 2016-06-17 10:07:58 --> CRSF cookie Set
DEBUG - 2016-06-17 10:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:07:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:07:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6ab9df6a8e3942fd84a7007de6c96a00', '114.91.131.17', '2016-06-17', '10:07:58', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:07:58 --> 查询待审核订单
DEBUG - 2016-06-17 10:07:58 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 10:07:58 --> Total execution time: 0.1000
DEBUG - 2016-06-17 10:07:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129278
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:07:59 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:07:59 --> Security Class Initialized
DEBUG - 2016-06-17 10:07:59 --> CRSF cookie Set
DEBUG - 2016-06-17 10:07:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:07:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:07:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('988553606ee743208173704ae813ef8a', '114.91.131.17', '2016-06-17', '10:07:59', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:07:59 --> 查询订单
DEBUG - 2016-06-17 10:07:59 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-17 10:07:59 --> Total execution time: 0.0930
DEBUG - 2016-06-17 10:07:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129279
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:08:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:08:05 --> Security Class Initialized
DEBUG - 2016-06-17 10:08:05 --> CRSF cookie Set
DEBUG - 2016-06-17 10:08:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:08:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:08:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9ee188b32ef247b69a74dcb4f6be6773', '114.91.131.17', '2016-06-17', '10:08:05', '120340235', '/admin/order/index/7d4b5e6ee61a4c2a817db045dcc9b806', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:08:05 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 10:08:05 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7d4b5e6ee61a4c2a817db045dcc9b806' order by create_date_time desc
DEBUG - 2016-06-17 10:08:05 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 10:08:05 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7d4b5e6ee61a4c2a817db045dcc9b806'    order by t1.lno asc
        
DEBUG - 2016-06-17 10:08:05 --> Total execution time: 0.1040
DEBUG - 2016-06-17 10:08:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129285
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:08:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:08:24 --> Security Class Initialized
DEBUG - 2016-06-17 10:08:24 --> CRSF cookie Set
DEBUG - 2016-06-17 10:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:08:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:08:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d9273bcde65244c3a818d8980ae55e26', '114.91.131.17', '2016-06-17', '10:08:24', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:08:24 --> 查询订单
DEBUG - 2016-06-17 10:08:24 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-17 10:08:24 --> Total execution time: 0.0780
DEBUG - 2016-06-17 10:08:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129304
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:08:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:08:31 --> Security Class Initialized
DEBUG - 2016-06-17 10:08:31 --> CRSF cookie Set
DEBUG - 2016-06-17 10:08:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:08:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:08:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fd7f21238f764b358e1f145d2d7e1b76', '114.91.131.17', '2016-06-17', '10:08:31', '120340235', '/admin/order/index/7d4b5e6ee61a4c2a817db045dcc9b806', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:08:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 10:08:31 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7d4b5e6ee61a4c2a817db045dcc9b806' order by create_date_time desc
DEBUG - 2016-06-17 10:08:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 10:08:31 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7d4b5e6ee61a4c2a817db045dcc9b806'    order by t1.lno asc
        
DEBUG - 2016-06-17 10:08:31 --> Total execution time: 0.0810
DEBUG - 2016-06-17 10:08:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129311
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:08:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:08:46 --> Security Class Initialized
DEBUG - 2016-06-17 10:08:46 --> CRSF cookie Set
DEBUG - 2016-06-17 10:08:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:08:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:08:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d130da73b026466e95960eb53fc62c9f', '114.91.131.17', '2016-06-17', '10:08:46', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:08:46 --> 查询待发货订单
DEBUG - 2016-06-17 10:08:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 10:08:46 --> Total execution time: 0.0770
DEBUG - 2016-06-17 10:08:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129326
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:09:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:09:05 --> Security Class Initialized
DEBUG - 2016-06-17 10:09:05 --> CRSF cookie Set
DEBUG - 2016-06-17 10:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:09:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:09:05 --> Security Class Initialized
DEBUG - 2016-06-17 10:09:05 --> CRSF cookie Set
DEBUG - 2016-06-17 10:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:09:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:09:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:09:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3df1d7f29893499088db7aaba705fd63', '114.91.131.17', '2016-06-17', '10:09:05', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:09:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('337229c3d3b04ce5b43d55e1f645ff75', '114.91.131.17', '2016-06-17', '10:09:05', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:09:05 --> 查询待审核订单
DEBUG - 2016-06-17 10:09:05 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 10:09:05 --> 查询待审核订单
DEBUG - 2016-06-17 10:09:05 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 10:09:05 --> Total execution time: 0.1020
DEBUG - 2016-06-17 10:09:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129345
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:09:05 --> Total execution time: 0.0730
DEBUG - 2016-06-17 10:09:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129345
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:09:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:09:06 --> Security Class Initialized
DEBUG - 2016-06-17 10:09:06 --> CRSF cookie Set
DEBUG - 2016-06-17 10:09:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:09:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:09:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ea983c8fe6a44abea33d3bed3860d2bf', '114.91.131.17', '2016-06-17', '10:09:06', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:09:06 --> 查询待审核订单
DEBUG - 2016-06-17 10:09:06 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 10:09:06 --> Total execution time: 0.0920
DEBUG - 2016-06-17 10:09:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129346
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:09:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:09:07 --> Security Class Initialized
DEBUG - 2016-06-17 10:09:07 --> CRSF cookie Set
DEBUG - 2016-06-17 10:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:09:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:09:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('26279f311e294f4a8c1332f323c1bb4d', '114.91.131.17', '2016-06-17', '10:09:07', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:09:07 --> 查询待审核订单
DEBUG - 2016-06-17 10:09:07 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 10:09:07 --> Total execution time: 0.0810
DEBUG - 2016-06-17 10:09:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129347
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:09:08 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 10:09:08 --> Security Class Initialized
DEBUG - 2016-06-17 10:09:08 --> CRSF cookie Set
DEBUG - 2016-06-17 10:09:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 10:09:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 10:09:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bd765c4579d94d1ba0f07d621ab23c4a', '114.91.131.17', '2016-06-17', '10:09:08', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'fea8e7bbd706b487952bae6d12d1b588d3a0f873')
DEBUG - 2016-06-17 10:09:08 --> 查询待审核订单
DEBUG - 2016-06-17 10:09:08 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 10:09:08 --> Total execution time: 0.0930
DEBUG - 2016-06-17 10:09:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466129348
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 11:47:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:47:10 --> Security Class Initialized
DEBUG - 2016-06-17 11:47:10 --> CRSF cookie Set
DEBUG - 2016-06-17 11:47:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:47:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 11:47:10 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'fea8e7bbd706b487952bae6d12d1b588d3a0f873'
DEBUG - 2016-06-17 11:47:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4b018a3829164ee5b8dcb7cd610db38d', '114.91.131.17', '2016-06-17', '11:47:11', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:47:11 --> 查询订单
DEBUG - 2016-06-17 11:47:11 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-17 11:47:11 --> Total execution time: 0.2000
DEBUG - 2016-06-17 11:47:11 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('01f6e84261d55ea416b67f38b39ed5456df72457', '114.91.131.17', 1466135231, '__ci_last_regenerate|i:1466135230;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-17 11:47:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:47:15 --> Security Class Initialized
DEBUG - 2016-06-17 11:47:15 --> CRSF cookie Set
DEBUG - 2016-06-17 11:47:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:47:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3423693bed284c769ac4df5db9e430ad', '114.91.131.17', '2016-06-17', '11:47:15', '120340235', '/admin/order/index/0d76dbed536d45ba857f382a9db1edb2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:47:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:47:15 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0d76dbed536d45ba857f382a9db1edb2' order by create_date_time desc
DEBUG - 2016-06-17 11:47:15 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:47:15 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0d76dbed536d45ba857f382a9db1edb2'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:47:15 --> Total execution time: 0.2230
DEBUG - 2016-06-17 11:47:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135235
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:47:22 --> Security Class Initialized
DEBUG - 2016-06-17 11:47:22 --> CRSF cookie Set
DEBUG - 2016-06-17 11:47:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:47:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('65eb9d8b99d545bb87b8eed8296b1623', '114.91.131.17', '2016-06-17', '11:47:22', '120340235', '/admin/order/index/0d76dbed536d45ba857f382a9db1edb2?uuid=0d76dbed536d45ba857f382a9db1edb2&consignee_name=%E6%9D%A8%E6%B3%A2&telphone=13608887934&address=%E6%98%86%E6%98%8E%E5%B8%82%E7%BB%8F%E5%BC%80%E5%8C%BA%E5%9B%BD%E9%99%85%E6%B1%BD%E8%BD%A6%E5%9F%8E%E6%96%AF%E5%B7%B4%E9%B2%814S%E5%BA%97%E5%AF%B9%E9%9D%A2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:47:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:47:22 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0d76dbed536d45ba857f382a9db1edb2' order by create_date_time desc
DEBUG - 2016-06-17 11:47:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:47:22 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0d76dbed536d45ba857f382a9db1edb2'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:47:22 --> Total execution time: 0.1530
DEBUG - 2016-06-17 11:47:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135242
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:47:27 --> Security Class Initialized
DEBUG - 2016-06-17 11:47:27 --> CRSF cookie Set
DEBUG - 2016-06-17 11:47:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:47:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fc5726ce673c4b79bdf22a899b365e6b', '114.91.131.17', '2016-06-17', '11:47:27', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:47:27 --> 查询待审核订单
DEBUG - 2016-06-17 11:47:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 11:47:27 --> Total execution time: 0.1900
DEBUG - 2016-06-17 11:47:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135247
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:30 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:47:30 --> Security Class Initialized
DEBUG - 2016-06-17 11:47:30 --> CRSF cookie Set
DEBUG - 2016-06-17 11:47:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:47:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2dc29acd18134775aea9d28c089c01f2', '114.91.131.17', '2016-06-17', '11:47:30', '120340235', '/admin/order/check/0d76dbed536d45ba857f382a9db1edb2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:47:30 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:47:30 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0d76dbed536d45ba857f382a9db1edb2' order by create_date_time desc
DEBUG - 2016-06-17 11:47:30 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:47:30 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0d76dbed536d45ba857f382a9db1edb2'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:47:30 --> Total execution time: 0.1160
DEBUG - 2016-06-17 11:47:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135250
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:36 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:47:36 --> Security Class Initialized
DEBUG - 2016-06-17 11:47:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:47:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('33b4aa29fab34f399cb8a0ffc3270196', '114.91.131.17', '2016-06-17', '11:47:36', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:47:36 --> 审核订单
DEBUG - 2016-06-17 11:47:36 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '0d76dbed536d45ba857f382a9db1edb2'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-17 11:47:36 --> 过程调用语句：  execute USP_APSOS_outorder '0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:47:36 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '0d76dbed536d45ba857f382a9db1edb2', '2', '', '1b8d285550464ce48de437f708ac856a', '2016-06-17 11:47:36')
DEBUG - 2016-06-17 11:47:36 --> 该订单状态更新成功:2
DEBUG - 2016-06-17 11:47:36 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:47:36 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05037'
DEBUG - 2016-06-17 11:47:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:47:46 --> Security Class Initialized
DEBUG - 2016-06-17 11:47:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:47:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7af8ac6c6ea4472b8df7d1a9f48cec41', '114.91.131.17', '2016-06-17', '11:47:46', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:47:46 --> 审核订单
DEBUG - 2016-06-17 11:47:46 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '0d76dbed536d45ba857f382a9db1edb2'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-17 11:47:46 --> 过程调用语句：  execute USP_APSOS_outorder '0d76dbed536d45ba857f382a9db1edb2'
ERROR - 2016-06-17 11:47:46 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-17 11:47:46 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-17 11:47:46 --> Total execution time: 0.3200
DEBUG - 2016-06-17 11:47:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135266
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:47:46 --> Security Class Initialized
DEBUG - 2016-06-17 11:47:46 --> CRSF cookie Set
DEBUG - 2016-06-17 11:47:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:47:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8014ac44661943d6ad3f6efe560720d6', '114.91.131.17', '2016-06-17', '11:47:47', '120340235', '/admin/order/check/0d76dbed536d45ba857f382a9db1edb2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:47:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:47:47 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-17 11:47:47 --> Total execution time: 10.6766
DEBUG - 2016-06-17 11:47:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135267
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:47 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0d76dbed536d45ba857f382a9db1edb2' order by create_date_time desc
DEBUG - 2016-06-17 11:47:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:47:47 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0d76dbed536d45ba857f382a9db1edb2'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:47:47 --> Total execution time: 0.1430
DEBUG - 2016-06-17 11:47:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135267
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:47:51 --> Security Class Initialized
DEBUG - 2016-06-17 11:47:51 --> CRSF cookie Set
DEBUG - 2016-06-17 11:47:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:47:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:47:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('052c4b252cf5495398b4f641c6692cc8', '114.91.131.17', '2016-06-17', '11:47:51', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:47:51 --> 查询待发货订单
DEBUG - 2016-06-17 11:47:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 11:47:51 --> Total execution time: 0.1280
DEBUG - 2016-06-17 11:47:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135271
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:50:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:50:43 --> Security Class Initialized
DEBUG - 2016-06-17 11:50:43 --> CRSF cookie Set
DEBUG - 2016-06-17 11:50:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:50:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:50:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ac2dd65109584d71a8969f7f456e9485', '114.91.131.17', '2016-06-17', '11:50:43', '120340235', '/admin/order/traffic/0d76dbed536d45ba857f382a9db1edb2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:50:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:50:43 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0d76dbed536d45ba857f382a9db1edb2' order by create_date_time desc
DEBUG - 2016-06-17 11:50:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:50:43 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0d76dbed536d45ba857f382a9db1edb2'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:50:43 --> Total execution time: 0.3640
DEBUG - 2016-06-17 11:50:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135443
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:50:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:50:48 --> Security Class Initialized
DEBUG - 2016-06-17 11:50:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:50:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:50:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d4c0ad4fb6c14c8593d0b37f83de6c59', '114.91.131.17', '2016-06-17', '11:50:48', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:50:48 --> 审核订单
DEBUG - 2016-06-17 11:50:48 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = '0d76dbed536d45ba857f382a9db1edb2'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-17 11:50:48 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '0d76dbed536d45ba857f382a9db1edb2', '3', '', 'ba3ecc93548d4050a3b534f4d7054f06', '2016-06-17 11:50:48')
DEBUG - 2016-06-17 11:50:48 --> 该订单状态更新成功:3
DEBUG - 2016-06-17 11:50:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:50:48 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05037'
ERROR - 2016-06-17 11:50:53 --> Severity: Warning --> fsockopen():  D:\xampp\htdocs\system\libraries\Email.php 1950
DEBUG - 2016-06-17 11:50:53 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-17 11:50:53 --> Total execution time: 5.3783
DEBUG - 2016-06-17 11:50:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135453
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:50:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:50:53 --> Security Class Initialized
DEBUG - 2016-06-17 11:50:53 --> CRSF cookie Set
DEBUG - 2016-06-17 11:50:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:50:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:50:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0d1850f726b94cb3b7121a429a6ad2ae', '114.91.131.17', '2016-06-17', '11:50:53', '120340235', '/admin/order/traffic/0d76dbed536d45ba857f382a9db1edb2', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:50:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:50:53 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0d76dbed536d45ba857f382a9db1edb2' order by create_date_time desc
DEBUG - 2016-06-17 11:50:53 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0d76dbed536d45ba857f382a9db1edb2'
DEBUG - 2016-06-17 11:50:53 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0d76dbed536d45ba857f382a9db1edb2'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:50:53 --> Total execution time: 0.1260
DEBUG - 2016-06-17 11:50:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135453
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:09 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:51:09 --> Security Class Initialized
DEBUG - 2016-06-17 11:51:09 --> CRSF cookie Set
DEBUG - 2016-06-17 11:51:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:51:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f243d4b704e146f994fea0b209d6a607', '114.91.131.17', '2016-06-17', '11:51:09', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:51:09 --> 查询待发货订单
DEBUG - 2016-06-17 11:51:09 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 11:51:09 --> Total execution time: 0.2010
DEBUG - 2016-06-17 11:51:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135469
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:51:13 --> Security Class Initialized
DEBUG - 2016-06-17 11:51:13 --> CRSF cookie Set
DEBUG - 2016-06-17 11:51:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:51:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f54e5b5e44254fa3bf4022ae559cb99c', '114.91.131.17', '2016-06-17', '11:51:13', '120340235', '/admin/order/traffic/b4fb776d617b4f64820a929edfb1548b', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:51:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b4fb776d617b4f64820a929edfb1548b'
DEBUG - 2016-06-17 11:51:13 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='b4fb776d617b4f64820a929edfb1548b' order by create_date_time desc
DEBUG - 2016-06-17 11:51:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b4fb776d617b4f64820a929edfb1548b'
DEBUG - 2016-06-17 11:51:13 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='b4fb776d617b4f64820a929edfb1548b'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:51:13 --> Total execution time: 0.2230
DEBUG - 2016-06-17 11:51:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135473
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:51:22 --> Security Class Initialized
DEBUG - 2016-06-17 11:51:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:51:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('327daf9da08140fe854fb5b03f3700c3', '114.91.131.17', '2016-06-17', '11:51:22', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:51:22 --> 审核订单
DEBUG - 2016-06-17 11:51:22 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = 'b4fb776d617b4f64820a929edfb1548b'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-17 11:51:22 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'b4fb776d617b4f64820a929edfb1548b', '3', '', '3bb31bff61b24d8391657944dad72437', '2016-06-17 11:51:22')
DEBUG - 2016-06-17 11:51:22 --> 该订单状态更新成功:3
DEBUG - 2016-06-17 11:51:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b4fb776d617b4f64820a929edfb1548b'
DEBUG - 2016-06-17 11:51:22 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05037'
DEBUG - 2016-06-17 11:51:24 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-17 11:51:24 --> Total execution time: 2.0001
DEBUG - 2016-06-17 11:51:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135484
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:51:24 --> Security Class Initialized
DEBUG - 2016-06-17 11:51:24 --> CRSF cookie Set
DEBUG - 2016-06-17 11:51:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:51:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('424c4ce4670b41299626fd889c90154a', '114.91.131.17', '2016-06-17', '11:51:24', '120340235', '/admin/order/traffic/b4fb776d617b4f64820a929edfb1548b', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:51:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b4fb776d617b4f64820a929edfb1548b'
DEBUG - 2016-06-17 11:51:24 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='b4fb776d617b4f64820a929edfb1548b' order by create_date_time desc
DEBUG - 2016-06-17 11:51:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='b4fb776d617b4f64820a929edfb1548b'
DEBUG - 2016-06-17 11:51:24 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='b4fb776d617b4f64820a929edfb1548b'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:51:24 --> Total execution time: 0.1800
DEBUG - 2016-06-17 11:51:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135484
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:51:27 --> Security Class Initialized
DEBUG - 2016-06-17 11:51:27 --> CRSF cookie Set
DEBUG - 2016-06-17 11:51:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:51:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d99fc093bce34ff39b965de47c6df754', '114.91.131.17', '2016-06-17', '11:51:27', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:51:27 --> 查询待发货订单
DEBUG - 2016-06-17 11:51:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 11:51:27 --> Total execution time: 0.1240
DEBUG - 2016-06-17 11:51:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135487
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:30 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:51:30 --> Security Class Initialized
DEBUG - 2016-06-17 11:51:30 --> CRSF cookie Set
DEBUG - 2016-06-17 11:51:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:51:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a1f28680ed894129aa45d190cd3d8346', '114.91.131.17', '2016-06-17', '11:51:30', '120340235', '/admin/order/traffic/0fd260640a3249aea0b6821c91f3f444', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:51:30 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-17 11:51:30 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0fd260640a3249aea0b6821c91f3f444' order by create_date_time desc
DEBUG - 2016-06-17 11:51:30 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-17 11:51:30 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0fd260640a3249aea0b6821c91f3f444'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:51:30 --> Total execution time: 0.1600
DEBUG - 2016-06-17 11:51:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135490
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:37 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:51:37 --> Security Class Initialized
DEBUG - 2016-06-17 11:51:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:51:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2aa36ff9f24e4e9fb18b2399ad35cf41', '114.91.131.17', '2016-06-17', '11:51:37', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:51:37 --> 审核订单
DEBUG - 2016-06-17 11:51:37 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = '0fd260640a3249aea0b6821c91f3f444'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-17 11:51:37 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '0fd260640a3249aea0b6821c91f3f444', '3', '', '2622d91b8c69401991598fd05f9e7043', '2016-06-17 11:51:37')
DEBUG - 2016-06-17 11:51:37 --> 该订单状态更新成功:3
DEBUG - 2016-06-17 11:51:37 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-17 11:51:37 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05037'
DEBUG - 2016-06-17 11:51:38 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-17 11:51:38 --> Total execution time: 0.7910
DEBUG - 2016-06-17 11:51:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135498
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:51:38 --> Security Class Initialized
DEBUG - 2016-06-17 11:51:38 --> CRSF cookie Set
DEBUG - 2016-06-17 11:51:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:51:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('73126269cdf04e579bc446b37b80c1ef', '114.91.131.17', '2016-06-17', '11:51:38', '120340235', '/admin/order/traffic/0fd260640a3249aea0b6821c91f3f444', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:51:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-17 11:51:38 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='0fd260640a3249aea0b6821c91f3f444' order by create_date_time desc
DEBUG - 2016-06-17 11:51:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='0fd260640a3249aea0b6821c91f3f444'
DEBUG - 2016-06-17 11:51:38 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='0fd260640a3249aea0b6821c91f3f444'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:51:38 --> Total execution time: 0.1190
DEBUG - 2016-06-17 11:51:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135498
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:51:40 --> Security Class Initialized
DEBUG - 2016-06-17 11:51:40 --> CRSF cookie Set
DEBUG - 2016-06-17 11:51:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:51:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('32559eee30a24120af5874d31652b1dc', '114.91.131.17', '2016-06-17', '11:51:40', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:51:40 --> 查询待发货订单
DEBUG - 2016-06-17 11:51:40 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 11:51:40 --> Total execution time: 0.0880
DEBUG - 2016-06-17 11:51:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135500
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:51:43 --> Security Class Initialized
DEBUG - 2016-06-17 11:51:43 --> CRSF cookie Set
DEBUG - 2016-06-17 11:51:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:51:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:51:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bb6940476b4c4b4d96522979bc20a4fb', '114.91.131.17', '2016-06-17', '11:51:43', '120340235', '/admin/order/traffic/7d4b5e6ee61a4c2a817db045dcc9b806', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:51:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 11:51:43 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7d4b5e6ee61a4c2a817db045dcc9b806' order by create_date_time desc
DEBUG - 2016-06-17 11:51:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 11:51:43 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7d4b5e6ee61a4c2a817db045dcc9b806'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:51:43 --> Total execution time: 0.1550
DEBUG - 2016-06-17 11:51:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135503
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:52:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:52:10 --> Security Class Initialized
DEBUG - 2016-06-17 11:52:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:52:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:52:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('500ea57268ad43bc9b912d84f584f4bc', '114.91.131.17', '2016-06-17', '11:52:10', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '01f6e84261d55ea416b67f38b39ed5456df72457')
DEBUG - 2016-06-17 11:52:10 --> 审核订单
DEBUG - 2016-06-17 11:52:10 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '8'
WHERE uuid = '7d4b5e6ee61a4c2a817db045dcc9b806'
AND   (
order_status = '1'
OR order_status = '2'
OR order_status = '3'
 )
DEBUG - 2016-06-17 11:52:10 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '7d4b5e6ee61a4c2a817db045dcc9b806', '8', '������ʾ����', '8f8e9ff770b64361bb8ad805fb6e6089', '2016-06-17 11:52:10')
DEBUG - 2016-06-17 11:52:10 --> 该订单状态更新成功:8
DEBUG - 2016-06-17 11:52:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 11:52:10 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05037'
DEBUG - 2016-06-17 11:52:11 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-17 11:52:11 --> Total execution time: 0.8180
DEBUG - 2016-06-17 11:52:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135531
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:52:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:52:11 --> Security Class Initialized
DEBUG - 2016-06-17 11:52:11 --> CRSF cookie Set
DEBUG - 2016-06-17 11:52:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:52:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:52:11 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '01f6e84261d55ea416b67f38b39ed5456df72457'
DEBUG - 2016-06-17 11:52:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0e540a88edc94483b8067ad3f2af55e9', '114.91.131.17', '2016-06-17', '11:52:11', '120340235', '/admin/order/traffic/7d4b5e6ee61a4c2a817db045dcc9b806', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2e1f33d997e23a2ee482a2be3da194826d15d8e6')
DEBUG - 2016-06-17 11:52:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 11:52:11 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7d4b5e6ee61a4c2a817db045dcc9b806' order by create_date_time desc
DEBUG - 2016-06-17 11:52:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 11:52:11 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7d4b5e6ee61a4c2a817db045dcc9b806'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:52:11 --> Total execution time: 0.1040
DEBUG - 2016-06-17 11:52:11 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2e1f33d997e23a2ee482a2be3da194826d15d8e6', '114.91.131.17', 1466135531, '__ci_last_regenerate|i:1466135531;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-17 11:52:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:52:26 --> Security Class Initialized
DEBUG - 2016-06-17 11:52:26 --> CRSF cookie Set
DEBUG - 2016-06-17 11:52:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:52:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:52:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cb395c66abf44a40acd0f1b328e076b3', '114.91.131.17', '2016-06-17', '11:52:26', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2e1f33d997e23a2ee482a2be3da194826d15d8e6')
DEBUG - 2016-06-17 11:52:26 --> 查询待发货订单
DEBUG - 2016-06-17 11:52:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 11:52:26 --> Total execution time: 0.1070
DEBUG - 2016-06-17 11:52:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135546
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:52:34 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:52:34 --> Security Class Initialized
DEBUG - 2016-06-17 11:52:34 --> CRSF cookie Set
DEBUG - 2016-06-17 11:52:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:52:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:52:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('849ffd87081c400daaba5771624fd9b9', '114.91.131.17', '2016-06-17', '11:52:34', '120340235', '/admin/order/traffic/db1fd10cf5d14dd3bd1bd692dc96e029', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2e1f33d997e23a2ee482a2be3da194826d15d8e6')
DEBUG - 2016-06-17 11:52:34 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-17 11:52:34 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='db1fd10cf5d14dd3bd1bd692dc96e029' order by create_date_time desc
DEBUG - 2016-06-17 11:52:34 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-17 11:52:34 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='db1fd10cf5d14dd3bd1bd692dc96e029'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:52:34 --> Total execution time: 0.1270
DEBUG - 2016-06-17 11:52:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135554
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:52:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:52:47 --> Security Class Initialized
DEBUG - 2016-06-17 11:52:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:52:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:52:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ab8830fc28714fab8103884fda558a4b', '114.91.131.17', '2016-06-17', '11:52:47', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2e1f33d997e23a2ee482a2be3da194826d15d8e6')
DEBUG - 2016-06-17 11:52:47 --> 审核订单
DEBUG - 2016-06-17 11:52:47 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = 'db1fd10cf5d14dd3bd1bd692dc96e029'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-17 11:52:47 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'db1fd10cf5d14dd3bd1bd692dc96e029', '3', '', 'ef88ddbbeacc48569c0dfe5def14d35f', '2016-06-17 11:52:47')
DEBUG - 2016-06-17 11:52:47 --> 该订单状态更新成功:3
DEBUG - 2016-06-17 11:52:47 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-17 11:52:47 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05033'
DEBUG - 2016-06-17 11:52:48 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-17 11:52:48 --> Total execution time: 1.2481
DEBUG - 2016-06-17 11:52:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135568
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:52:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:52:49 --> Security Class Initialized
DEBUG - 2016-06-17 11:52:49 --> CRSF cookie Set
DEBUG - 2016-06-17 11:52:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:52:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:52:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2bd6b948173b49e0ba872b54ef54b7d6', '114.91.131.17', '2016-06-17', '11:52:49', '120340235', '/admin/order/traffic/db1fd10cf5d14dd3bd1bd692dc96e029', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2e1f33d997e23a2ee482a2be3da194826d15d8e6')
DEBUG - 2016-06-17 11:52:49 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-17 11:52:49 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='db1fd10cf5d14dd3bd1bd692dc96e029' order by create_date_time desc
DEBUG - 2016-06-17 11:52:49 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-17 11:52:49 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='db1fd10cf5d14dd3bd1bd692dc96e029'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:52:49 --> Total execution time: 0.1120
DEBUG - 2016-06-17 11:52:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135569
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:52:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:52:54 --> Security Class Initialized
DEBUG - 2016-06-17 11:52:54 --> CRSF cookie Set
DEBUG - 2016-06-17 11:52:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:52:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:52:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fe3987b7ecb04141b6f4ce3008a53914', '114.91.131.17', '2016-06-17', '11:52:54', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2e1f33d997e23a2ee482a2be3da194826d15d8e6')
DEBUG - 2016-06-17 11:52:54 --> 查询待发货订单
DEBUG - 2016-06-17 11:52:54 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 11:52:54 --> Total execution time: 0.0970
DEBUG - 2016-06-17 11:52:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135574
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:52:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:52:56 --> Security Class Initialized
DEBUG - 2016-06-17 11:52:56 --> CRSF cookie Set
DEBUG - 2016-06-17 11:52:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:52:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:52:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cbae20ae55954c8890c1ffe35b2dd872', '114.91.131.17', '2016-06-17', '11:52:56', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2e1f33d997e23a2ee482a2be3da194826d15d8e6')
DEBUG - 2016-06-17 11:52:56 --> 查询待审核订单
DEBUG - 2016-06-17 11:52:56 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 11:52:56 --> Total execution time: 0.0850
DEBUG - 2016-06-17 11:52:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135576
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:52:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:52:57 --> Security Class Initialized
DEBUG - 2016-06-17 11:52:57 --> CRSF cookie Set
DEBUG - 2016-06-17 11:52:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:52:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:52:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d83ffceebc2a4819a6c03f3293b3aca1', '114.91.131.17', '2016-06-17', '11:52:57', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2e1f33d997e23a2ee482a2be3da194826d15d8e6')
DEBUG - 2016-06-17 11:52:57 --> 查询订单
DEBUG - 2016-06-17 11:52:57 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-17 11:52:57 --> Total execution time: 0.0760
DEBUG - 2016-06-17 11:52:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135577
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:53:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:53:02 --> Security Class Initialized
DEBUG - 2016-06-17 11:53:02 --> CRSF cookie Set
DEBUG - 2016-06-17 11:53:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:53:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:53:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('045800e18dba4199a23ddaebffe59912', '114.91.131.17', '2016-06-17', '11:53:02', '120340235', '/admin/order/index/7d4b5e6ee61a4c2a817db045dcc9b806', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2e1f33d997e23a2ee482a2be3da194826d15d8e6')
DEBUG - 2016-06-17 11:53:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 11:53:02 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7d4b5e6ee61a4c2a817db045dcc9b806' order by create_date_time desc
DEBUG - 2016-06-17 11:53:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-06-17 11:53:02 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7d4b5e6ee61a4c2a817db045dcc9b806'    order by t1.lno asc
        
DEBUG - 2016-06-17 11:53:02 --> Total execution time: 0.1240
DEBUG - 2016-06-17 11:53:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135582
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:53:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 11:53:22 --> Security Class Initialized
DEBUG - 2016-06-17 11:53:22 --> CRSF cookie Set
DEBUG - 2016-06-17 11:53:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 11:53:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 11:53:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('468d79a3f0144fad8f8426729be19a70', '114.91.131.17', '2016-06-17', '11:53:22', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2e1f33d997e23a2ee482a2be3da194826d15d8e6')
DEBUG - 2016-06-17 11:53:22 --> 查询订单
DEBUG - 2016-06-17 11:53:22 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-17 11:53:22 --> Total execution time: 0.1100
DEBUG - 2016-06-17 11:53:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466135602
WHERE id = '2e1f33d997e23a2ee482a2be3da194826d15d8e6'
DEBUG - 2016-06-17 17:15:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:15:32 --> CRSF cookie Set
DEBUG - 2016-06-17 17:15:32 --> Security Class Initialized
DEBUG - 2016-06-17 17:15:32 --> CRSF cookie Set
DEBUG - 2016-06-17 17:15:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:15:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:15:41 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d8887978236904a58068e0ebbc3f1cbb77722b53', '114.91.131.17', 1466154941, '__ci_last_regenerate|i:1466154941;')
DEBUG - 2016-06-17 17:15:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:15:43 --> Security Class Initialized
DEBUG - 2016-06-17 17:15:43 --> CRSF cookie Set
DEBUG - 2016-06-17 17:15:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:15:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:15:45 --> Total execution time: 1.5661
DEBUG - 2016-06-17 17:15:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466154945
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:15:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:15:47 --> Security Class Initialized
DEBUG - 2016-06-17 17:15:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:15:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:15:48 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-17 17:15:48 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-17 17:15:48 --> 登录返回结果数：1
DEBUG - 2016-06-17 17:15:48 --> 成功登录
DEBUG - 2016-06-17 17:15:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466154948, data = '__ci_last_regenerate|i:1466154941;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:15:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:15:48 --> Security Class Initialized
DEBUG - 2016-06-17 17:15:48 --> CRSF cookie Set
DEBUG - 2016-06-17 17:15:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:15:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:15:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1749bd2294454be49265bebffcd6de64', '114.91.131.17', '2016-06-17', '17:15:49', '120340235', '/admin/order/check/15ac9586d0c543d2bc5cfd8278c03651', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:15:49 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-17 17:15:49 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='15ac9586d0c543d2bc5cfd8278c03651' order by create_date_time desc
DEBUG - 2016-06-17 17:15:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-17 17:15:50 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='15ac9586d0c543d2bc5cfd8278c03651'    order by t1.lno asc
        
DEBUG - 2016-06-17 17:15:51 --> Total execution time: 2.9502
DEBUG - 2016-06-17 17:15:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466154951
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:15:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:15:56 --> Security Class Initialized
DEBUG - 2016-06-17 17:15:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:15:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:15:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6dfb26df824a4570a3f25322d01c39b2', '114.91.131.17', '2016-06-17', '17:15:56', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:15:56 --> 审核订单
DEBUG - 2016-06-17 17:15:56 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '15ac9586d0c543d2bc5cfd8278c03651'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-17 17:15:56 --> 过程调用语句：  execute USP_APSOS_outorder '15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-17 17:16:02 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '15ac9586d0c543d2bc5cfd8278c03651', '2', '', 'e923fb58a7b447eaabfbda6224059017', '2016-06-17 17:16:02')
DEBUG - 2016-06-17 17:16:02 --> 该订单状态更新成功:2
DEBUG - 2016-06-17 17:16:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-17 17:16:02 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05055'
DEBUG - 2016-06-17 17:16:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:16:05 --> Security Class Initialized
DEBUG - 2016-06-17 17:16:05 --> CRSF cookie Set
DEBUG - 2016-06-17 17:16:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:16:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:16:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:05 --> Security Class Initialized
DEBUG - 2016-06-17 17:16:05 --> CRSF cookie Set
DEBUG - 2016-06-17 17:16:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:16:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('50d49ed4aa6e4e26aac5b5a700f4bf9f', '114.91.131.17', '2016-06-17', '17:16:05', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:16:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:06 --> 查询待审核订单
DEBUG - 2016-06-17 17:16:06 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 17:16:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7771af4621274bab818455c2650361ad', '114.91.131.17', '2016-06-17', '17:16:06', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:16:06 --> 查询待审核订单
DEBUG - 2016-06-17 17:16:06 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 17:16:06 --> Total execution time: 1.1471
DEBUG - 2016-06-17 17:16:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466154966
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:06 --> Total execution time: 1.4461
DEBUG - 2016-06-17 17:16:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466154966
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:08 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-17 17:16:08 --> Total execution time: 12.6537
DEBUG - 2016-06-17 17:16:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466154968
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:16:11 --> Security Class Initialized
DEBUG - 2016-06-17 17:16:11 --> CRSF cookie Set
DEBUG - 2016-06-17 17:16:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:16:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9796b2dca4d346ec91461aa4cf602fe7', '114.91.131.17', '2016-06-17', '17:16:11', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:16:12 --> 查询待审核订单
DEBUG - 2016-06-17 17:16:12 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 17:16:12 --> Total execution time: 0.2130
DEBUG - 2016-06-17 17:16:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466154972
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:16:13 --> Security Class Initialized
DEBUG - 2016-06-17 17:16:13 --> CRSF cookie Set
DEBUG - 2016-06-17 17:16:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:16:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e7a46595ebb1403ea35389714a2c9d3a', '114.91.131.17', '2016-06-17', '17:16:13', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:16:13 --> 查询待审核订单
DEBUG - 2016-06-17 17:16:13 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-17 17:16:13 --> Total execution time: 0.2010
DEBUG - 2016-06-17 17:16:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466154973
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:16:15 --> Security Class Initialized
DEBUG - 2016-06-17 17:16:15 --> CRSF cookie Set
DEBUG - 2016-06-17 17:16:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:16:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('88efc5fd20fd4a33936adfde9411718c', '114.91.131.17', '2016-06-17', '17:16:15', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:16:15 --> 查询待发货订单
DEBUG - 2016-06-17 17:16:15 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 17:16:16 --> Total execution time: 0.7590
DEBUG - 2016-06-17 17:16:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466154976
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:16 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:16:16 --> Security Class Initialized
DEBUG - 2016-06-17 17:16:16 --> CRSF cookie Set
DEBUG - 2016-06-17 17:16:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:16:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f78cb9594e6949779e6e0a0edf9c2f35', '114.91.131.17', '2016-06-17', '17:16:16', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:16:16 --> 查询待发货订单
DEBUG - 2016-06-17 17:16:16 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 17:16:16 --> Total execution time: 0.1760
DEBUG - 2016-06-17 17:16:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466154976
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:16:17 --> Security Class Initialized
DEBUG - 2016-06-17 17:16:17 --> CRSF cookie Set
DEBUG - 2016-06-17 17:16:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:16:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('657f32ec790647f3824c5d718361802d', '114.91.131.17', '2016-06-17', '17:16:17', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:16:17 --> 查询待发货订单
DEBUG - 2016-06-17 17:16:17 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 17:16:17 --> Total execution time: 0.2230
DEBUG - 2016-06-17 17:16:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466154977
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:16:18 --> Security Class Initialized
DEBUG - 2016-06-17 17:16:18 --> CRSF cookie Set
DEBUG - 2016-06-17 17:16:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:16:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('801d99c14a194a519ba5ee25a469feb2', '114.91.131.17', '2016-06-17', '17:16:18', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:16:18 --> 查询待发货订单
DEBUG - 2016-06-17 17:16:18 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 17:16:18 --> Total execution time: 0.1690
DEBUG - 2016-06-17 17:16:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466154978
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:16:20 --> Security Class Initialized
DEBUG - 2016-06-17 17:16:20 --> CRSF cookie Set
DEBUG - 2016-06-17 17:16:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:16:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:16:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('288552903c304ec6b5c832b55b238d60', '114.91.131.17', '2016-06-17', '17:16:20', '120340235', '/admin/order/traffic/15ac9586d0c543d2bc5cfd8278c03651', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:16:20 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-17 17:16:20 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='15ac9586d0c543d2bc5cfd8278c03651' order by create_date_time desc
DEBUG - 2016-06-17 17:16:20 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-17 17:16:21 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='15ac9586d0c543d2bc5cfd8278c03651'    order by t1.lno asc
        
DEBUG - 2016-06-17 17:16:21 --> Total execution time: 0.3510
DEBUG - 2016-06-17 17:16:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466154981
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:18:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:18:22 --> Security Class Initialized
DEBUG - 2016-06-17 17:18:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:18:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:18:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ca04b97efb6a49b3969543fc23dcfa72', '114.91.131.17', '2016-06-17', '17:18:22', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:18:22 --> 审核订单
DEBUG - 2016-06-17 17:18:22 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = '15ac9586d0c543d2bc5cfd8278c03651'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-17 17:18:22 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '15ac9586d0c543d2bc5cfd8278c03651', '3', '', '0b946de01c9840b9b834cd4dd0412cf2', '2016-06-17 17:18:22')
DEBUG - 2016-06-17 17:18:22 --> 该订单状态更新成功:3
DEBUG - 2016-06-17 17:18:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-17 17:18:22 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05055'
DEBUG - 2016-06-17 17:18:23 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-17 17:18:23 --> Total execution time: 1.0452
DEBUG - 2016-06-17 17:18:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466155103
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:18:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:18:23 --> Security Class Initialized
DEBUG - 2016-06-17 17:18:23 --> CRSF cookie Set
DEBUG - 2016-06-17 17:18:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:18:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:18:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3bd52e402658405aa4cdefccd0e164bd', '114.91.131.17', '2016-06-17', '17:18:23', '120340235', '/admin/order/traffic/15ac9586d0c543d2bc5cfd8278c03651', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:18:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-17 17:18:23 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='15ac9586d0c543d2bc5cfd8278c03651' order by create_date_time desc
DEBUG - 2016-06-17 17:18:23 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='15ac9586d0c543d2bc5cfd8278c03651'
DEBUG - 2016-06-17 17:18:23 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='15ac9586d0c543d2bc5cfd8278c03651'    order by t1.lno asc
        
DEBUG - 2016-06-17 17:18:23 --> Total execution time: 0.1404
DEBUG - 2016-06-17 17:18:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466155103
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:20:16 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:20:17 --> Security Class Initialized
DEBUG - 2016-06-17 17:20:17 --> CRSF cookie Set
DEBUG - 2016-06-17 17:20:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:20:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:20:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('25a617a7f43a4bd38ef4ecd3016e0c8c', '114.91.131.17', '2016-06-17', '17:20:17', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:20:17 --> 查询待发货订单
DEBUG - 2016-06-17 17:20:17 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 17:20:17 --> Total execution time: 0.0780
DEBUG - 2016-06-17 17:20:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466155217
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:20:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:20:18 --> Security Class Initialized
DEBUG - 2016-06-17 17:20:18 --> CRSF cookie Set
DEBUG - 2016-06-17 17:20:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:20:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:20:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f0d5457234a44b808009d99957a75ee8', '114.91.131.17', '2016-06-17', '17:20:18', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:20:18 --> 查询待发货订单
DEBUG - 2016-06-17 17:20:18 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-17 17:20:18 --> Total execution time: 0.1092
DEBUG - 2016-06-17 17:20:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466155218
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:20:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-17 17:20:18 --> Security Class Initialized
DEBUG - 2016-06-17 17:20:18 --> CRSF cookie Set
DEBUG - 2016-06-17 17:20:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-17 17:20:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
DEBUG - 2016-06-17 17:20:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b2ab49480ca1402f8ccbd583b59d9ed2', '114.91.131.17', '2016-06-17', '17:20:18', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd8887978236904a58068e0ebbc3f1cbb77722b53')
DEBUG - 2016-06-17 17:20:18 --> 查询订单
DEBUG - 2016-06-17 17:20:18 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-17 17:20:19 --> Total execution time: 0.1872
DEBUG - 2016-06-17 17:20:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466155219
WHERE id = 'd8887978236904a58068e0ebbc3f1cbb77722b53'
