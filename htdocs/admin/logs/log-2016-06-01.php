<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-01 10:49:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:49:53 --> No URI present. Default controller set.
DEBUG - 2016-06-01 10:49:53 --> CRSF cookie Set
DEBUG - 2016-06-01 10:49:53 --> Security Class Initialized
DEBUG - 2016-06-01 10:49:53 --> CRSF cookie Set
DEBUG - 2016-06-01 10:49:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:49:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:49:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9988f5dc32dcba2fc478a6b8b830bf067882be02', '114.91.131.17', 1464749393, '__ci_last_regenerate|i:1464749393;')
DEBUG - 2016-06-01 10:49:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:49:53 --> Security Class Initialized
DEBUG - 2016-06-01 10:49:53 --> CRSF cookie Set
DEBUG - 2016-06-01 10:49:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:49:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:49:53 --> Total execution time: 0.1000
DEBUG - 2016-06-01 10:49:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749393
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:50:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:50:06 --> Security Class Initialized
DEBUG - 2016-06-01 10:50:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:50:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:50:06 --> 检查用户密码，新密文:5a0562fc5404d682f4a690bec182b1e10dc6a307fc2f91ce044122aa0dbef6fd
DEBUG - 2016-06-01 10:50:06 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '5a0562fc5404d682f4a690bec182b1e10dc6a307fc2f91ce044122aa0dbef6fd'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-01 10:50:06 --> 登录返回结果数：0
DEBUG - 2016-06-01 10:50:06 --> Total execution time: 0.0820
DEBUG - 2016-06-01 10:50:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749406
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:50:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:50:29 --> Security Class Initialized
DEBUG - 2016-06-01 10:50:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:50:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:50:29 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-01 10:50:29 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-01 10:50:30 --> 登录返回结果数：1
DEBUG - 2016-06-01 10:50:30 --> 成功登录
DEBUG - 2016-06-01 10:50:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749430, data = '__ci_last_regenerate|i:1464749393;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:50:30 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:50:30 --> Security Class Initialized
DEBUG - 2016-06-01 10:50:30 --> CRSF cookie Set
DEBUG - 2016-06-01 10:50:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:50:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:50:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('52e732bf9c104e39b593917c7df0dfb6', '114.91.131.17', '2016-06-01', '10:50:30', '120340235', '/admin/backhome', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '9988f5dc32dcba2fc478a6b8b830bf067882be02')
DEBUG - 2016-06-01 10:50:30 --> Total execution time: 0.1140
DEBUG - 2016-06-01 10:50:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749430
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:50:34 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:50:34 --> Security Class Initialized
DEBUG - 2016-06-01 10:50:34 --> CRSF cookie Set
DEBUG - 2016-06-01 10:50:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:50:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:50:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1a56a1a082f3411992dee4649133f2f2', '114.91.131.17', '2016-06-01', '10:50:34', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '9988f5dc32dcba2fc478a6b8b830bf067882be02')
DEBUG - 2016-06-01 10:50:34 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-01 10:50:35 --> Total execution time: 0.1720
DEBUG - 2016-06-01 10:50:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749435
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:52:39 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:52:39 --> No URI present. Default controller set.
DEBUG - 2016-06-01 10:52:39 --> Security Class Initialized
DEBUG - 2016-06-01 10:52:39 --> CRSF cookie Set
DEBUG - 2016-06-01 10:52:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:52:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:52:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e62679596d8b469aa39e9620ef9ae767', '114.91.131.17', '2016-06-01', '10:52:39', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '9988f5dc32dcba2fc478a6b8b830bf067882be02')
DEBUG - 2016-06-01 10:52:39 --> Total execution time: 0.0770
DEBUG - 2016-06-01 10:52:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749559
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:52:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:52:43 --> Security Class Initialized
DEBUG - 2016-06-01 10:52:43 --> CRSF cookie Set
DEBUG - 2016-06-01 10:52:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:52:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:52:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('de8fd4bfc83a4c328385e530adfeeb5f', '114.91.131.17', '2016-06-01', '10:52:43', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '9988f5dc32dcba2fc478a6b8b830bf067882be02')
DEBUG - 2016-06-01 10:52:43 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-01 10:52:44 --> Total execution time: 0.0980
DEBUG - 2016-06-01 10:52:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749564
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:53:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:53:07 --> No URI present. Default controller set.
DEBUG - 2016-06-01 10:53:07 --> CRSF cookie Set
DEBUG - 2016-06-01 10:53:07 --> Security Class Initialized
DEBUG - 2016-06-01 10:53:07 --> CRSF cookie Set
DEBUG - 2016-06-01 10:53:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:53:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b373458740ef26412e1cb3dcecaee2f1d08fd382'
DEBUG - 2016-06-01 10:53:07 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b373458740ef26412e1cb3dcecaee2f1d08fd382', '180.168.179.118', 1464749587, '__ci_last_regenerate|i:1464749587;')
DEBUG - 2016-06-01 10:53:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:53:07 --> Security Class Initialized
DEBUG - 2016-06-01 10:53:07 --> CRSF cookie Set
DEBUG - 2016-06-01 10:53:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:53:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b373458740ef26412e1cb3dcecaee2f1d08fd382'
DEBUG - 2016-06-01 10:53:07 --> Total execution time: 0.0690
DEBUG - 2016-06-01 10:53:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749587
WHERE id = 'b373458740ef26412e1cb3dcecaee2f1d08fd382'
DEBUG - 2016-06-01 10:53:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:53:11 --> Security Class Initialized
DEBUG - 2016-06-01 10:53:11 --> CRSF cookie Set
DEBUG - 2016-06-01 10:53:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:53:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:53:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ba3eed0d70424335bd0d048c06165e50', '114.91.131.17', '2016-06-01', '10:53:11', '120340235', '/admin/guest/edit/K05035', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '9988f5dc32dcba2fc478a6b8b830bf067882be02')
DEBUG - 2016-06-01 10:53:11 --> 修改客户信息：K05035
DEBUG - 2016-06-01 10:53:11 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05035' 
DEBUG - 2016-06-01 10:53:11 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05035' 
DEBUG - 2016-06-01 10:53:11 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-01 10:53:11 --> Total execution time: 0.1070
DEBUG - 2016-06-01 10:53:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749591
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:54:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:54:25 --> No URI present. Default controller set.
DEBUG - 2016-06-01 10:54:25 --> CRSF cookie Set
DEBUG - 2016-06-01 10:54:25 --> Security Class Initialized
DEBUG - 2016-06-01 10:54:25 --> CRSF cookie Set
DEBUG - 2016-06-01 10:54:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:54:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ccdf60cc03fbad8b79a0b2eef2a416bf3b83a8e4'
DEBUG - 2016-06-01 10:54:25 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ccdf60cc03fbad8b79a0b2eef2a416bf3b83a8e4', '171.8.167.66', 1464749665, '__ci_last_regenerate|i:1464749665;')
DEBUG - 2016-06-01 10:54:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:54:50 --> No URI present. Default controller set.
DEBUG - 2016-06-01 10:54:50 --> CRSF cookie Set
DEBUG - 2016-06-01 10:54:50 --> Security Class Initialized
DEBUG - 2016-06-01 10:54:50 --> CRSF cookie Set
DEBUG - 2016-06-01 10:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:54:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6383e23de64ca1562b2ec592977d54c08d9eb129'
DEBUG - 2016-06-01 10:54:50 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6383e23de64ca1562b2ec592977d54c08d9eb129', '171.8.167.71', 1464749690, '__ci_last_regenerate|i:1464749690;')
DEBUG - 2016-06-01 10:55:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:55:00 --> CRSF cookie Set
DEBUG - 2016-06-01 10:55:00 --> Security Class Initialized
DEBUG - 2016-06-01 10:55:00 --> CRSF cookie Set
DEBUG - 2016-06-01 10:55:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:55:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a27e67d53438d60fbc8739e3f1ecdcf6dcb55b2e'
DEBUG - 2016-06-01 10:55:01 --> Total execution time: 0.0760
DEBUG - 2016-06-01 10:55:01 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a27e67d53438d60fbc8739e3f1ecdcf6dcb55b2e', '171.8.167.71', 1464749701, '__ci_last_regenerate|i:1464749701;')
DEBUG - 2016-06-01 10:55:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:55:20 --> No URI present. Default controller set.
DEBUG - 2016-06-01 10:55:20 --> CRSF cookie Set
DEBUG - 2016-06-01 10:55:20 --> Security Class Initialized
DEBUG - 2016-06-01 10:55:20 --> CRSF cookie Set
DEBUG - 2016-06-01 10:55:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:55:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bb85ea15796eb1ebd333d87ba80282982c00a0fa'
DEBUG - 2016-06-01 10:55:20 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('bb85ea15796eb1ebd333d87ba80282982c00a0fa', '220.181.132.196', 1464749720, '__ci_last_regenerate|i:1464749720;')
DEBUG - 2016-06-01 10:55:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:55:20 --> Security Class Initialized
DEBUG - 2016-06-01 10:55:20 --> CRSF cookie Set
DEBUG - 2016-06-01 10:55:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:55:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bb85ea15796eb1ebd333d87ba80282982c00a0fa'
DEBUG - 2016-06-01 10:55:20 --> Total execution time: 0.0680
DEBUG - 2016-06-01 10:55:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749720
WHERE id = 'bb85ea15796eb1ebd333d87ba80282982c00a0fa'
DEBUG - 2016-06-01 10:58:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:58:05 --> Security Class Initialized
DEBUG - 2016-06-01 10:58:05 --> CRSF cookie Set
DEBUG - 2016-06-01 10:58:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:58:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:58:05 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '9988f5dc32dcba2fc478a6b8b830bf067882be02'
DEBUG - 2016-06-01 10:58:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8274ea4099e3488588f34386ae461de1', '114.91.131.17', '2016-06-01', '10:58:05', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '177d5efe7866e27146ea8c20c30dc01111be6061')
DEBUG - 2016-06-01 10:58:05 --> 查询待审核订单
DEBUG - 2016-06-01 10:58:05 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-01 10:58:05 --> Total execution time: 0.1560
DEBUG - 2016-06-01 10:58:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('177d5efe7866e27146ea8c20c30dc01111be6061', '114.91.131.17', 1464749885, '__ci_last_regenerate|i:1464749885;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-01 10:58:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:58:22 --> Security Class Initialized
DEBUG - 2016-06-01 10:58:22 --> CRSF cookie Set
DEBUG - 2016-06-01 10:58:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:58:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:58:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('454fd5c47a9742ab80ec0387a43434cf', '114.91.131.17', '2016-06-01', '10:58:22', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '177d5efe7866e27146ea8c20c30dc01111be6061')
DEBUG - 2016-06-01 10:58:22 --> 查询待审核订单
DEBUG - 2016-06-01 10:58:22 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-01 10:58:22 --> Total execution time: 0.0710
DEBUG - 2016-06-01 10:58:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749902
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:58:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:58:23 --> Security Class Initialized
DEBUG - 2016-06-01 10:58:23 --> CRSF cookie Set
DEBUG - 2016-06-01 10:58:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:58:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:58:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('714f6d6e31d641c18d5b92a6ea533d4f', '114.91.131.17', '2016-06-01', '10:58:23', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '177d5efe7866e27146ea8c20c30dc01111be6061')
DEBUG - 2016-06-01 10:58:23 --> 查询待发货订单
DEBUG - 2016-06-01 10:58:23 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-01 10:58:23 --> Total execution time: 0.0770
DEBUG - 2016-06-01 10:58:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749903
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:58:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:58:24 --> Security Class Initialized
DEBUG - 2016-06-01 10:58:24 --> CRSF cookie Set
DEBUG - 2016-06-01 10:58:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:58:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:58:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('db403783391e416a8a04ea5bfa99e25a', '114.91.131.17', '2016-06-01', '10:58:24', '120340235', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '177d5efe7866e27146ea8c20c30dc01111be6061')
DEBUG - 2016-06-01 10:58:24 --> 查询需求订单
DEBUG - 2016-06-01 10:58:24 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-06-01 10:58:24 --> Total execution time: 0.1090
DEBUG - 2016-06-01 10:58:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749904
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:58:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:58:25 --> Security Class Initialized
DEBUG - 2016-06-01 10:58:25 --> CRSF cookie Set
DEBUG - 2016-06-01 10:58:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:58:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:58:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b1791f4a580d4a6ebd70d532c21bdfab', '114.91.131.17', '2016-06-01', '10:58:25', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '177d5efe7866e27146ea8c20c30dc01111be6061')
DEBUG - 2016-06-01 10:58:25 --> 查询待发货订单
DEBUG - 2016-06-01 10:58:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-01 10:58:25 --> Total execution time: 0.0720
DEBUG - 2016-06-01 10:58:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749905
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:58:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:58:26 --> Security Class Initialized
DEBUG - 2016-06-01 10:58:26 --> CRSF cookie Set
DEBUG - 2016-06-01 10:58:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:58:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:58:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ff110aea4aff4c55837c0fb053658a71', '114.91.131.17', '2016-06-01', '10:58:26', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '177d5efe7866e27146ea8c20c30dc01111be6061')
DEBUG - 2016-06-01 10:58:26 --> 查询待审核订单
DEBUG - 2016-06-01 10:58:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-01 10:58:26 --> Total execution time: 0.0740
DEBUG - 2016-06-01 10:58:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749906
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:58:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:58:44 --> Security Class Initialized
DEBUG - 2016-06-01 10:58:44 --> CRSF cookie Set
DEBUG - 2016-06-01 10:58:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:58:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:58:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7fde990fae6540d08f8ff3c50638149f', '114.91.131.17', '2016-06-01', '10:58:44', '120340235', '/admin/account/changeProfile', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '177d5efe7866e27146ea8c20c30dc01111be6061')
DEBUG - 2016-06-01 10:58:44 --> [执行的SQL语句]##############select * from admin_user where uuid='120340235' and enable='Y'
DEBUG - 2016-06-01 10:58:44 --> Total execution time: 0.1140
DEBUG - 2016-06-01 10:58:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749924
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:59:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:59:14 --> Security Class Initialized
DEBUG - 2016-06-01 10:59:14 --> CRSF cookie Set
DEBUG - 2016-06-01 10:59:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:59:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:59:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('36ae4df7c53f43f8b753a7a83201dfdd', '114.91.131.17', '2016-06-01', '10:59:14', '120340235', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '177d5efe7866e27146ea8c20c30dc01111be6061')
DEBUG - 2016-06-01 10:59:14 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-01 10:59:14 --> Total execution time: 0.1040
DEBUG - 2016-06-01 10:59:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749954
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:59:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-01 10:59:25 --> Security Class Initialized
DEBUG - 2016-06-01 10:59:25 --> CRSF cookie Set
DEBUG - 2016-06-01 10:59:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-01 10:59:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
DEBUG - 2016-06-01 10:59:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('10b894c5b6984206836d5969cee6bcc4', '114.91.131.17', '2016-06-01', '10:59:25', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '177d5efe7866e27146ea8c20c30dc01111be6061')
DEBUG - 2016-06-01 10:59:25 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-01 10:59:25 --> Total execution time: 0.0970
DEBUG - 2016-06-01 10:59:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464749965
WHERE id = '177d5efe7866e27146ea8c20c30dc01111be6061'
