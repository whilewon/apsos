<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-08 10:27:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 10:27:53 --> No URI present. Default controller set.
DEBUG - 2016-06-08 10:27:53 --> CRSF cookie Set
DEBUG - 2016-06-08 10:27:53 --> Security Class Initialized
DEBUG - 2016-06-08 10:27:53 --> CRSF cookie Set
DEBUG - 2016-06-08 10:27:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 10:27:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:27:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0dface787820f6e8b51c926c29c5aaa30db07ee1', '114.91.131.17', 1465352873, '__ci_last_regenerate|i:1465352873;')
DEBUG - 2016-06-08 10:27:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 10:27:53 --> Security Class Initialized
DEBUG - 2016-06-08 10:27:53 --> CRSF cookie Set
DEBUG - 2016-06-08 10:27:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 10:27:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:27:53 --> Total execution time: 0.0980
DEBUG - 2016-06-08 10:27:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465352873
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:27:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 10:27:56 --> Security Class Initialized
DEBUG - 2016-06-08 10:27:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 10:27:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:27:56 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-08 10:27:56 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-08 10:27:56 --> 登录返回结果数：1
DEBUG - 2016-06-08 10:27:56 --> 成功登录
DEBUG - 2016-06-08 10:27:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465352876, data = '__ci_last_regenerate|i:1465352873;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:27:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 10:27:56 --> No URI present. Default controller set.
DEBUG - 2016-06-08 10:27:56 --> Security Class Initialized
DEBUG - 2016-06-08 10:27:56 --> CRSF cookie Set
DEBUG - 2016-06-08 10:27:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 10:27:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:27:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('59cc9d8bfce046cdbc5b95e579c2ce7e', '114.91.131.17', '2016-06-08', '10:27:56', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0dface787820f6e8b51c926c29c5aaa30db07ee1')
DEBUG - 2016-06-08 10:27:56 --> Total execution time: 0.1150
DEBUG - 2016-06-08 10:27:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465352876
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:28:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 10:28:11 --> No URI present. Default controller set.
DEBUG - 2016-06-08 10:28:11 --> Security Class Initialized
DEBUG - 2016-06-08 10:28:11 --> CRSF cookie Set
DEBUG - 2016-06-08 10:28:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 10:28:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:28:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cea988aba72a477c966b901ad42e562e', '114.91.131.17', '2016-06-08', '10:28:11', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0dface787820f6e8b51c926c29c5aaa30db07ee1')
DEBUG - 2016-06-08 10:28:11 --> Total execution time: 0.1060
DEBUG - 2016-06-08 10:28:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465352891
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:29:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 10:29:11 --> Security Class Initialized
DEBUG - 2016-06-08 10:29:11 --> CRSF cookie Set
DEBUG - 2016-06-08 10:29:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 10:29:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:29:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('56bfb7ae4c5f4f1384fcce22d9300520', '114.91.131.17', '2016-06-08', '10:29:11', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0dface787820f6e8b51c926c29c5aaa30db07ee1')
DEBUG - 2016-06-08 10:29:11 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-08 10:29:11 --> Total execution time: 0.1900
DEBUG - 2016-06-08 10:29:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465352951
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:29:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 10:29:13 --> Security Class Initialized
DEBUG - 2016-06-08 10:29:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 10:29:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:29:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b89c2eb8d345470bb18ed19fc82f6443', '114.91.131.17', '2016-06-08', '10:29:13', '120340235', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0dface787820f6e8b51c926c29c5aaa30db07ee1')
DEBUG - 2016-06-08 10:29:13 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%����%' order by enable desc
DEBUG - 2016-06-08 10:29:13 --> Total execution time: 0.1690
DEBUG - 2016-06-08 10:29:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465352953
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:29:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 10:29:17 --> Security Class Initialized
DEBUG - 2016-06-08 10:29:17 --> CRSF cookie Set
DEBUG - 2016-06-08 10:29:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 10:29:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:29:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('daa9bf75fbf34633ad44b9e2d7c90d7b', '114.91.131.17', '2016-06-08', '10:29:17', '120340235', '/admin/guest/edit/K05038', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0dface787820f6e8b51c926c29c5aaa30db07ee1')
DEBUG - 2016-06-08 10:29:17 --> 修改客户信息：K05038
DEBUG - 2016-06-08 10:29:17 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05038' 
DEBUG - 2016-06-08 10:29:17 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05038' 
DEBUG - 2016-06-08 10:29:17 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-08 10:29:17 --> Total execution time: 0.1170
DEBUG - 2016-06-08 10:29:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465352957
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:29:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 10:29:43 --> Security Class Initialized
DEBUG - 2016-06-08 10:29:43 --> CRSF cookie Set
DEBUG - 2016-06-08 10:29:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 10:29:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:29:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('11de9f95ce17470d98fb7b4195bf4bd8', '114.91.131.17', '2016-06-08', '10:29:43', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0dface787820f6e8b51c926c29c5aaa30db07ee1')
DEBUG - 2016-06-08 10:29:43 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-08 10:29:43 --> Total execution time: 0.1050
DEBUG - 2016-06-08 10:29:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465352983
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 10:29:49 --> Security Class Initialized
DEBUG - 2016-06-08 10:29:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 10:29:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 10:29:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c6cd342fa0d64ddfad79486ddc5b1664', '114.91.131.17', '2016-06-08', '10:29:50', '120340235', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0dface787820f6e8b51c926c29c5aaa30db07ee1')
DEBUG - 2016-06-08 10:29:50 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%����%' order by enable desc
DEBUG - 2016-06-08 10:29:50 --> Total execution time: 0.0960
DEBUG - 2016-06-08 10:29:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465352990
WHERE id = '0dface787820f6e8b51c926c29c5aaa30db07ee1'
DEBUG - 2016-06-08 16:04:12 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:04:12 --> CRSF cookie Set
DEBUG - 2016-06-08 16:04:12 --> Security Class Initialized
DEBUG - 2016-06-08 16:04:12 --> CRSF cookie Set
DEBUG - 2016-06-08 16:04:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:04:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:12 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('036023fffe4290d549b17b9aa47835485f2d1348', '114.91.131.17', 1465373052, '__ci_last_regenerate|i:1465373052;')
DEBUG - 2016-06-08 16:04:12 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:04:12 --> Security Class Initialized
DEBUG - 2016-06-08 16:04:12 --> CRSF cookie Set
DEBUG - 2016-06-08 16:04:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:04:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:12 --> Total execution time: 0.1550
DEBUG - 2016-06-08 16:04:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373052
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:04:14 --> Security Class Initialized
DEBUG - 2016-06-08 16:04:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:04:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:14 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-08 16:04:14 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-08 16:04:14 --> 登录返回结果数：1
DEBUG - 2016-06-08 16:04:14 --> 成功登录
DEBUG - 2016-06-08 16:04:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373054, data = '__ci_last_regenerate|i:1465373052;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:04:14 --> Security Class Initialized
DEBUG - 2016-06-08 16:04:14 --> CRSF cookie Set
DEBUG - 2016-06-08 16:04:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:04:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f9958bd6576d4eaf8836bcb1d673ab82', '114.91.131.17', '2016-06-08', '16:04:14', '120340235', '/admin/order/check/83d6465d95154a7ea845b0ef6a76eb9b', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '036023fffe4290d549b17b9aa47835485f2d1348')
DEBUG - 2016-06-08 16:04:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-08 16:04:14 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='83d6465d95154a7ea845b0ef6a76eb9b' order by create_date_time desc
DEBUG - 2016-06-08 16:04:14 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-08 16:04:14 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='83d6465d95154a7ea845b0ef6a76eb9b'    order by t1.lno asc
        
DEBUG - 2016-06-08 16:04:14 --> Total execution time: 0.1340
DEBUG - 2016-06-08 16:04:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373054
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:04:24 --> Security Class Initialized
DEBUG - 2016-06-08 16:04:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:04:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1db4106fcfd0466bad80a616876fd063', '114.91.131.17', '2016-06-08', '16:04:24', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '036023fffe4290d549b17b9aa47835485f2d1348')
DEBUG - 2016-06-08 16:04:24 --> 审核订单
DEBUG - 2016-06-08 16:04:24 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '83d6465d95154a7ea845b0ef6a76eb9b'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-08 16:04:24 --> 过程调用语句：  execute USP_APSOS_outorder '83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-08 16:04:26 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '83d6465d95154a7ea845b0ef6a76eb9b', '2', '', '82b66d2cfe2a498c9562679472c256a0', '2016-06-08 16:04:26')
DEBUG - 2016-06-08 16:04:26 --> 该订单状态更新成功:2
DEBUG - 2016-06-08 16:04:26 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-08 16:04:26 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05038'
DEBUG - 2016-06-08 16:04:27 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-08 16:04:27 --> Total execution time: 3.1262
DEBUG - 2016-06-08 16:04:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373067
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:04:27 --> Security Class Initialized
DEBUG - 2016-06-08 16:04:27 --> CRSF cookie Set
DEBUG - 2016-06-08 16:04:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:04:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e01aafa150e547f4b2bb47122c3b5f56', '114.91.131.17', '2016-06-08', '16:04:28', '120340235', '/admin/order/check/83d6465d95154a7ea845b0ef6a76eb9b', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '036023fffe4290d549b17b9aa47835485f2d1348')
DEBUG - 2016-06-08 16:04:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-08 16:04:28 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='83d6465d95154a7ea845b0ef6a76eb9b' order by create_date_time desc
DEBUG - 2016-06-08 16:04:28 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-08 16:04:28 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='83d6465d95154a7ea845b0ef6a76eb9b'    order by t1.lno asc
        
DEBUG - 2016-06-08 16:04:28 --> Total execution time: 0.1110
DEBUG - 2016-06-08 16:04:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373068
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:36 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:04:36 --> Security Class Initialized
DEBUG - 2016-06-08 16:04:36 --> CRSF cookie Set
DEBUG - 2016-06-08 16:04:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:04:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('17ca364b95a84fd381ffe4b1a0adaf87', '114.91.131.17', '2016-06-08', '16:04:36', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '036023fffe4290d549b17b9aa47835485f2d1348')
DEBUG - 2016-06-08 16:04:36 --> 查询待发货订单
DEBUG - 2016-06-08 16:04:36 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-08 16:04:36 --> Total execution time: 0.1160
DEBUG - 2016-06-08 16:04:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373076
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:04:40 --> Security Class Initialized
DEBUG - 2016-06-08 16:04:40 --> CRSF cookie Set
DEBUG - 2016-06-08 16:04:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:04:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3e8edf6f2e3f4516b241d65032f6dde8', '114.91.131.17', '2016-06-08', '16:04:40', '120340235', '/admin/order/traffic/fdea996d1f2943ceb798419d0bc8db18', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '036023fffe4290d549b17b9aa47835485f2d1348')
DEBUG - 2016-06-08 16:04:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='fdea996d1f2943ceb798419d0bc8db18'
DEBUG - 2016-06-08 16:04:40 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='fdea996d1f2943ceb798419d0bc8db18' order by create_date_time desc
DEBUG - 2016-06-08 16:04:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='fdea996d1f2943ceb798419d0bc8db18'
DEBUG - 2016-06-08 16:04:40 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='fdea996d1f2943ceb798419d0bc8db18'    order by t1.lno asc
        
DEBUG - 2016-06-08 16:04:40 --> Total execution time: 0.1140
DEBUG - 2016-06-08 16:04:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373080
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:04:54 --> Security Class Initialized
DEBUG - 2016-06-08 16:04:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('29785f6c7d714056b1c5b6c6e530b82e', '114.91.131.17', '2016-06-08', '16:04:54', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '036023fffe4290d549b17b9aa47835485f2d1348')
DEBUG - 2016-06-08 16:04:54 --> 审核订单
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = 'fdea996d1f2943ceb798419d0bc8db18'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', 'fdea996d1f2943ceb798419d0bc8db18', '3', '', '950802c81ca5430eb5db0905aa7f0345', '2016-06-08 16:04:54')
DEBUG - 2016-06-08 16:04:54 --> 该订单状态更新成功:3
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='fdea996d1f2943ceb798419d0bc8db18'
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-06-08 16:04:54 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-08 16:04:54 --> Total execution time: 0.7120
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373094
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:04:54 --> Security Class Initialized
DEBUG - 2016-06-08 16:04:54 --> CRSF cookie Set
DEBUG - 2016-06-08 16:04:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('15f42671fba14e5e9490e28a84d13ab4', '114.91.131.17', '2016-06-08', '16:04:54', '120340235', '/admin/order/traffic/fdea996d1f2943ceb798419d0bc8db18', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '036023fffe4290d549b17b9aa47835485f2d1348')
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='fdea996d1f2943ceb798419d0bc8db18'
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='fdea996d1f2943ceb798419d0bc8db18' order by create_date_time desc
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='fdea996d1f2943ceb798419d0bc8db18'
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='fdea996d1f2943ceb798419d0bc8db18'    order by t1.lno asc
        
DEBUG - 2016-06-08 16:04:54 --> Total execution time: 0.0950
DEBUG - 2016-06-08 16:04:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373094
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:05:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:05:11 --> Security Class Initialized
DEBUG - 2016-06-08 16:05:11 --> CRSF cookie Set
DEBUG - 2016-06-08 16:05:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:05:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:05:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('583400af5c744836afaeb7ab41e61114', '114.91.131.17', '2016-06-08', '16:05:11', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '036023fffe4290d549b17b9aa47835485f2d1348')
DEBUG - 2016-06-08 16:05:11 --> 查询待发货订单
DEBUG - 2016-06-08 16:05:11 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-08 16:05:11 --> Total execution time: 0.1110
DEBUG - 2016-06-08 16:05:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373111
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:05:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:05:13 --> Security Class Initialized
DEBUG - 2016-06-08 16:05:13 --> CRSF cookie Set
DEBUG - 2016-06-08 16:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:05:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:05:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3bb37724a5ad47efb68e7f6436d5cf52', '114.91.131.17', '2016-06-08', '16:05:13', '120340235', '/admin/order/traffic/21fdf60f26cc458cb2452538da9cb2a1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '036023fffe4290d549b17b9aa47835485f2d1348')
DEBUG - 2016-06-08 16:05:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-08 16:05:13 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='21fdf60f26cc458cb2452538da9cb2a1' order by create_date_time desc
DEBUG - 2016-06-08 16:05:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-08 16:05:13 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='21fdf60f26cc458cb2452538da9cb2a1'    order by t1.lno asc
        
DEBUG - 2016-06-08 16:05:13 --> Total execution time: 0.1140
DEBUG - 2016-06-08 16:05:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373113
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:05:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:05:17 --> Security Class Initialized
DEBUG - 2016-06-08 16:05:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:05:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:05:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5c12d20e2ace46ddaafaa4c1c48dfe2d', '114.91.131.17', '2016-06-08', '16:05:17', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '036023fffe4290d549b17b9aa47835485f2d1348')
DEBUG - 2016-06-08 16:05:17 --> 审核订单
DEBUG - 2016-06-08 16:05:17 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '3'
WHERE uuid = '21fdf60f26cc458cb2452538da9cb2a1'
AND   (
order_status = '2'
 )
DEBUG - 2016-06-08 16:05:17 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '21fdf60f26cc458cb2452538da9cb2a1', '3', '', 'f06e60b9b56b471a9049bed98d72fcd8', '2016-06-08 16:05:17')
DEBUG - 2016-06-08 16:05:17 --> 该订单状态更新成功:3
DEBUG - 2016-06-08 16:05:17 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-08 16:05:17 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-06-08 16:05:18 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-08 16:05:18 --> Total execution time: 1.1051
DEBUG - 2016-06-08 16:05:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373118
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:05:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:05:18 --> Security Class Initialized
DEBUG - 2016-06-08 16:05:18 --> CRSF cookie Set
DEBUG - 2016-06-08 16:05:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:05:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:05:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cee322710d974d569ba488ecd3ce7f2c', '114.91.131.17', '2016-06-08', '16:05:18', '120340235', '/admin/order/traffic/21fdf60f26cc458cb2452538da9cb2a1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '036023fffe4290d549b17b9aa47835485f2d1348')
DEBUG - 2016-06-08 16:05:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-08 16:05:18 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='21fdf60f26cc458cb2452538da9cb2a1' order by create_date_time desc
DEBUG - 2016-06-08 16:05:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='21fdf60f26cc458cb2452538da9cb2a1'
DEBUG - 2016-06-08 16:05:18 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='21fdf60f26cc458cb2452538da9cb2a1'    order by t1.lno asc
        
DEBUG - 2016-06-08 16:05:18 --> Total execution time: 0.0950
DEBUG - 2016-06-08 16:05:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373118
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:05:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:05:21 --> Security Class Initialized
DEBUG - 2016-06-08 16:05:21 --> CRSF cookie Set
DEBUG - 2016-06-08 16:05:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:05:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:05:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('86e40617236445df950753ac54730345', '114.91.131.17', '2016-06-08', '16:05:21', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '036023fffe4290d549b17b9aa47835485f2d1348')
DEBUG - 2016-06-08 16:05:21 --> 查询待发货订单
DEBUG - 2016-06-08 16:05:21 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-08 16:05:21 --> Total execution time: 0.0800
DEBUG - 2016-06-08 16:05:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465373121
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:21:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:21:13 --> Security Class Initialized
DEBUG - 2016-06-08 16:21:13 --> CRSF cookie Set
DEBUG - 2016-06-08 16:21:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:21:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:21:13 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '036023fffe4290d549b17b9aa47835485f2d1348'
DEBUG - 2016-06-08 16:21:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6c9b6cc8689446d2ace268bcbfb728c5', '114.91.131.17', '2016-06-08', '16:21:13', '120340235', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d62466c77fa472be8343337925927435f015519')
DEBUG - 2016-06-08 16:21:13 --> 查询需求订单
DEBUG - 2016-06-08 16:21:13 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-06-08 16:21:13 --> Total execution time: 0.1400
DEBUG - 2016-06-08 16:21:13 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5d62466c77fa472be8343337925927435f015519', '114.91.131.17', 1465374073, '__ci_last_regenerate|i:1465374073;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-08 16:21:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:21:24 --> Security Class Initialized
DEBUG - 2016-06-08 16:21:24 --> CRSF cookie Set
DEBUG - 2016-06-08 16:21:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:21:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:21:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7dbf978a245c4dbda1441ef0a9060602', '114.91.131.17', '2016-06-08', '16:21:24', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d62466c77fa472be8343337925927435f015519')
DEBUG - 2016-06-08 16:21:24 --> 查询待审核订单
DEBUG - 2016-06-08 16:21:24 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-08 16:21:25 --> Total execution time: 0.0960
DEBUG - 2016-06-08 16:21:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465374085
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:21:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:21:25 --> Security Class Initialized
DEBUG - 2016-06-08 16:21:25 --> CRSF cookie Set
DEBUG - 2016-06-08 16:21:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:21:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:21:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('971aa8bf2ac247728a702e9d820f48e3', '114.91.131.17', '2016-06-08', '16:21:25', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d62466c77fa472be8343337925927435f015519')
DEBUG - 2016-06-08 16:21:25 --> 查询待发货订单
DEBUG - 2016-06-08 16:21:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-08 16:21:25 --> Total execution time: 0.0850
DEBUG - 2016-06-08 16:21:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465374085
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:21:30 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:21:30 --> Security Class Initialized
DEBUG - 2016-06-08 16:21:30 --> CRSF cookie Set
DEBUG - 2016-06-08 16:21:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:21:30 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:21:30 --> Security Class Initialized
DEBUG - 2016-06-08 16:21:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:21:30 --> CRSF cookie Set
DEBUG - 2016-06-08 16:21:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:21:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cbf42d5a607e414f857f7b7cba377e66', '114.91.131.17', '2016-06-08', '16:21:30', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d62466c77fa472be8343337925927435f015519')
DEBUG - 2016-06-08 16:21:30 --> 查询订单
DEBUG - 2016-06-08 16:21:30 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-08 16:21:30 --> Total execution time: 0.1130
DEBUG - 2016-06-08 16:21:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465374090
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:21:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:21:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c731b93245c6435387475aea564faadc', '114.91.131.17', '2016-06-08', '16:21:30', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d62466c77fa472be8343337925927435f015519')
DEBUG - 2016-06-08 16:21:30 --> 查询订单
DEBUG - 2016-06-08 16:21:30 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-08 16:21:30 --> Total execution time: 0.0860
DEBUG - 2016-06-08 16:21:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465374090
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:22:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:22:02 --> Security Class Initialized
DEBUG - 2016-06-08 16:22:02 --> CRSF cookie Set
DEBUG - 2016-06-08 16:22:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:22:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:22:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5b748ca70add4549a8060388fdb32708', '114.91.131.17', '2016-06-08', '16:22:02', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d62466c77fa472be8343337925927435f015519')
DEBUG - 2016-06-08 16:22:02 --> 查询待发货订单
DEBUG - 2016-06-08 16:22:02 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-08 16:22:02 --> Total execution time: 0.0880
DEBUG - 2016-06-08 16:22:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465374122
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:22:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:22:11 --> Security Class Initialized
DEBUG - 2016-06-08 16:22:11 --> CRSF cookie Set
DEBUG - 2016-06-08 16:22:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:22:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:22:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('25e52a03b25a4d1181972d99f14396ba', '114.91.131.17', '2016-06-08', '16:22:11', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d62466c77fa472be8343337925927435f015519')
DEBUG - 2016-06-08 16:22:11 --> 查询订单
DEBUG - 2016-06-08 16:22:11 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-08 16:22:11 --> Total execution time: 0.1020
DEBUG - 2016-06-08 16:22:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465374131
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:22:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:22:13 --> Security Class Initialized
DEBUG - 2016-06-08 16:22:13 --> CRSF cookie Set
DEBUG - 2016-06-08 16:22:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:22:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:22:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dbc414278cd5450e8f4d9bb654c7a3f0', '114.91.131.17', '2016-06-08', '16:22:13', '120340235', '/admin/order/index/aab58df429c94699b895396d664d5f6c', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d62466c77fa472be8343337925927435f015519')
DEBUG - 2016-06-08 16:22:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-08 16:22:13 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aab58df429c94699b895396d664d5f6c' order by create_date_time desc
DEBUG - 2016-06-08 16:22:13 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-08 16:22:13 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-06-08 16:22:13 --> Total execution time: 0.1020
DEBUG - 2016-06-08 16:22:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465374133
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:22:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:22:17 --> Security Class Initialized
DEBUG - 2016-06-08 16:22:17 --> CRSF cookie Set
DEBUG - 2016-06-08 16:22:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:22:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:22:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('968e76947c3f4f658fe0c418b69e34f6', '114.91.131.17', '2016-06-08', '16:22:17', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d62466c77fa472be8343337925927435f015519')
DEBUG - 2016-06-08 16:22:17 --> 查询订单
DEBUG - 2016-06-08 16:22:17 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-08 16:22:17 --> Total execution time: 0.0820
DEBUG - 2016-06-08 16:22:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465374137
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:22:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:22:18 --> Security Class Initialized
DEBUG - 2016-06-08 16:22:18 --> CRSF cookie Set
DEBUG - 2016-06-08 16:22:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:22:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:22:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('204db2be7a6a4f1b80936cfb352a9820', '114.91.131.17', '2016-06-08', '16:22:18', '120340235', '/admin/order/index/6f9e040ffa07471d97a52f5f2abf26b3', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d62466c77fa472be8343337925927435f015519')
DEBUG - 2016-06-08 16:22:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='6f9e040ffa07471d97a52f5f2abf26b3'
DEBUG - 2016-06-08 16:22:18 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='6f9e040ffa07471d97a52f5f2abf26b3' order by create_date_time desc
DEBUG - 2016-06-08 16:22:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='6f9e040ffa07471d97a52f5f2abf26b3'
DEBUG - 2016-06-08 16:22:18 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='6f9e040ffa07471d97a52f5f2abf26b3'    order by t1.lno asc
        
DEBUG - 2016-06-08 16:22:18 --> Total execution time: 0.0990
DEBUG - 2016-06-08 16:22:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465374138
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:24:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:24:38 --> Security Class Initialized
DEBUG - 2016-06-08 16:24:38 --> CRSF cookie Set
DEBUG - 2016-06-08 16:24:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:24:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:24:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3239f37d0f284ee1b435fc8da4678ac8', '114.91.131.17', '2016-06-08', '16:24:38', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d62466c77fa472be8343337925927435f015519')
DEBUG - 2016-06-08 16:24:38 --> 查询待发货订单
DEBUG - 2016-06-08 16:24:38 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-08 16:24:38 --> Total execution time: 0.0850
DEBUG - 2016-06-08 16:24:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465374278
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:24:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:24:40 --> Security Class Initialized
DEBUG - 2016-06-08 16:24:40 --> CRSF cookie Set
DEBUG - 2016-06-08 16:24:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:24:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:24:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7aa538430b7e433585b2553d546dbb22', '114.91.131.17', '2016-06-08', '16:24:40', '120340235', '/admin/order/traffic/83d6465d95154a7ea845b0ef6a76eb9b', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5d62466c77fa472be8343337925927435f015519')
DEBUG - 2016-06-08 16:24:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-08 16:24:40 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='83d6465d95154a7ea845b0ef6a76eb9b' order by create_date_time desc
DEBUG - 2016-06-08 16:24:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-08 16:24:40 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='83d6465d95154a7ea845b0ef6a76eb9b'    order by t1.lno asc
        
DEBUG - 2016-06-08 16:24:40 --> Total execution time: 0.0980
DEBUG - 2016-06-08 16:24:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465374280
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:27:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:27:27 --> No URI present. Default controller set.
DEBUG - 2016-06-08 16:27:27 --> Security Class Initialized
DEBUG - 2016-06-08 16:27:27 --> CRSF cookie Set
DEBUG - 2016-06-08 16:27:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:27:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:27:27 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:27:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4c1f46975e3242c1bb320b2301bd7e36', '114.91.131.17', '2016-06-08', '16:27:27', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'bde93c0bbb7d4c2cbfa14197928c3767a0c7422e')
DEBUG - 2016-06-08 16:27:27 --> Total execution time: 0.1350
DEBUG - 2016-06-08 16:27:27 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('bde93c0bbb7d4c2cbfa14197928c3767a0c7422e', '114.91.131.17', 1465374447, '__ci_last_regenerate|i:1465374447;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-08 16:27:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:27:28 --> No URI present. Default controller set.
DEBUG - 2016-06-08 16:27:28 --> Security Class Initialized
DEBUG - 2016-06-08 16:27:28 --> CRSF cookie Set
DEBUG - 2016-06-08 16:27:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:27:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5d62466c77fa472be8343337925927435f015519'
DEBUG - 2016-06-08 16:27:28 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5d62466c77fa472be8343337925927435f015519', '114.91.131.17', 1465374448, '__ci_last_regenerate|i:1465374448;')
DEBUG - 2016-06-08 16:27:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 16:27:28 --> Security Class Initialized
DEBUG - 2016-06-08 16:27:28 --> CRSF cookie Set
DEBUG - 2016-06-08 16:27:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 16:27:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bde93c0bbb7d4c2cbfa14197928c3767a0c7422e'
DEBUG - 2016-06-08 16:27:28 --> Total execution time: 0.0730
DEBUG - 2016-06-08 16:27:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465374448, data = '__ci_last_regenerate|i:1465374447;'
WHERE id = 'bde93c0bbb7d4c2cbfa14197928c3767a0c7422e'
DEBUG - 2016-06-08 17:10:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 17:10:24 --> Security Class Initialized
DEBUG - 2016-06-08 17:10:24 --> CRSF cookie Set
DEBUG - 2016-06-08 17:10:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 17:10:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bde93c0bbb7d4c2cbfa14197928c3767a0c7422e'
DEBUG - 2016-06-08 17:10:24 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'bde93c0bbb7d4c2cbfa14197928c3767a0c7422e'
DEBUG - 2016-06-08 17:10:24 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6e15f45367dcb0418b3713a6a7ce1ce589293f4a', '114.91.131.17', 1465377024, '__ci_last_regenerate|i:1465377024;')
DEBUG - 2016-06-08 17:10:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 17:10:24 --> Security Class Initialized
DEBUG - 2016-06-08 17:10:24 --> CRSF cookie Set
DEBUG - 2016-06-08 17:10:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 17:10:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6e15f45367dcb0418b3713a6a7ce1ce589293f4a'
DEBUG - 2016-06-08 17:10:24 --> Total execution time: 0.0720
DEBUG - 2016-06-08 17:10:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465377024
WHERE id = '6e15f45367dcb0418b3713a6a7ce1ce589293f4a'
DEBUG - 2016-06-08 17:10:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 17:10:27 --> Security Class Initialized
DEBUG - 2016-06-08 17:10:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 17:10:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6e15f45367dcb0418b3713a6a7ce1ce589293f4a'
DEBUG - 2016-06-08 17:10:27 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-08 17:10:27 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-08 17:10:27 --> 登录返回结果数：1
DEBUG - 2016-06-08 17:10:27 --> 成功登录
DEBUG - 2016-06-08 17:10:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465377027, data = '__ci_last_regenerate|i:1465377024;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '6e15f45367dcb0418b3713a6a7ce1ce589293f4a'
DEBUG - 2016-06-08 17:10:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 17:10:27 --> Security Class Initialized
DEBUG - 2016-06-08 17:10:27 --> CRSF cookie Set
DEBUG - 2016-06-08 17:10:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 17:10:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6e15f45367dcb0418b3713a6a7ce1ce589293f4a'
DEBUG - 2016-06-08 17:10:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d8023f9dab42417a8e67812aa50b9e51', '114.91.131.17', '2016-06-08', '17:10:27', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '6e15f45367dcb0418b3713a6a7ce1ce589293f4a')
DEBUG - 2016-06-08 17:10:27 --> 查询待发货订单
DEBUG - 2016-06-08 17:10:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-08 17:10:27 --> Total execution time: 0.0770
DEBUG - 2016-06-08 17:10:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465377027
WHERE id = '6e15f45367dcb0418b3713a6a7ce1ce589293f4a'
DEBUG - 2016-06-08 22:38:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 22:38:44 --> CRSF cookie Set
DEBUG - 2016-06-08 22:38:44 --> Security Class Initialized
DEBUG - 2016-06-08 22:38:44 --> CRSF cookie Set
DEBUG - 2016-06-08 22:38:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 22:38:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd227f03cc761da8c55f66d2a19c29bb276b6566e'
DEBUG - 2016-06-08 22:38:44 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d227f03cc761da8c55f66d2a19c29bb276b6566e', '114.91.131.17', 1465396724, '__ci_last_regenerate|i:1465396724;')
DEBUG - 2016-06-08 22:38:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 22:38:44 --> Security Class Initialized
DEBUG - 2016-06-08 22:38:44 --> CRSF cookie Set
DEBUG - 2016-06-08 22:38:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 22:38:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd227f03cc761da8c55f66d2a19c29bb276b6566e'
DEBUG - 2016-06-08 22:38:44 --> Total execution time: 0.0700
DEBUG - 2016-06-08 22:38:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465396724
WHERE id = 'd227f03cc761da8c55f66d2a19c29bb276b6566e'
DEBUG - 2016-06-08 22:38:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 22:38:48 --> Security Class Initialized
DEBUG - 2016-06-08 22:38:48 --> CRSF cookie Set
DEBUG - 2016-06-08 22:38:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 22:38:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd227f03cc761da8c55f66d2a19c29bb276b6566e'
DEBUG - 2016-06-08 22:38:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465396728
WHERE id = 'd227f03cc761da8c55f66d2a19c29bb276b6566e'
DEBUG - 2016-06-08 22:38:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 22:38:48 --> Security Class Initialized
DEBUG - 2016-06-08 22:38:48 --> CRSF cookie Set
DEBUG - 2016-06-08 22:38:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 22:38:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd227f03cc761da8c55f66d2a19c29bb276b6566e'
DEBUG - 2016-06-08 22:38:48 --> Total execution time: 0.0680
DEBUG - 2016-06-08 22:38:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465396728
WHERE id = 'd227f03cc761da8c55f66d2a19c29bb276b6566e'
DEBUG - 2016-06-08 22:38:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 22:38:50 --> Security Class Initialized
DEBUG - 2016-06-08 22:38:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 22:38:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd227f03cc761da8c55f66d2a19c29bb276b6566e'
DEBUG - 2016-06-08 22:38:50 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-08 22:38:50 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-08 22:38:50 --> 登录返回结果数：1
DEBUG - 2016-06-08 22:38:50 --> 成功登录
DEBUG - 2016-06-08 22:38:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465396730, data = '__ci_last_regenerate|i:1465396724;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'd227f03cc761da8c55f66d2a19c29bb276b6566e'
DEBUG - 2016-06-08 22:38:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-08 22:38:50 --> Security Class Initialized
DEBUG - 2016-06-08 22:38:50 --> CRSF cookie Set
DEBUG - 2016-06-08 22:38:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-08 22:38:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd227f03cc761da8c55f66d2a19c29bb276b6566e'
DEBUG - 2016-06-08 22:38:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('204a086a79ea4f84bf2ac3f5d53fe133', '114.91.131.17', '2016-06-08', '22:38:50', '120340235', '/admin/order/traffic/83d6465d95154a7ea845b0ef6a76eb9b', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'd227f03cc761da8c55f66d2a19c29bb276b6566e')
DEBUG - 2016-06-08 22:38:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-08 22:38:50 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='83d6465d95154a7ea845b0ef6a76eb9b' order by create_date_time desc
DEBUG - 2016-06-08 22:38:50 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='83d6465d95154a7ea845b0ef6a76eb9b'
DEBUG - 2016-06-08 22:38:50 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='83d6465d95154a7ea845b0ef6a76eb9b'    order by t1.lno asc
        
DEBUG - 2016-06-08 22:38:50 --> Total execution time: 0.0910
DEBUG - 2016-06-08 22:38:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1465396730
WHERE id = 'd227f03cc761da8c55f66d2a19c29bb276b6566e'
