<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-28 10:21:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 10:21:59 --> CRSF cookie Set
DEBUG - 2016-07-28 10:21:59 --> Security Class Initialized
DEBUG - 2016-07-28 10:21:59 --> CRSF cookie Set
DEBUG - 2016-07-28 10:21:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 10:22:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '936018d6bccef0e452fccb370a1d1e22461a25b6'
DEBUG - 2016-07-28 10:22:01 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('936018d6bccef0e452fccb370a1d1e22461a25b6', '114.91.137.232', 1469672521, '__ci_last_regenerate|i:1469672521;')
DEBUG - 2016-07-28 10:22:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 10:22:01 --> Security Class Initialized
DEBUG - 2016-07-28 10:22:01 --> CRSF cookie Set
DEBUG - 2016-07-28 10:22:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 10:22:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '936018d6bccef0e452fccb370a1d1e22461a25b6'
DEBUG - 2016-07-28 10:22:01 --> Total execution time: 0.3460
DEBUG - 2016-07-28 10:22:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469672521
WHERE id = '936018d6bccef0e452fccb370a1d1e22461a25b6'
DEBUG - 2016-07-28 10:22:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 10:22:20 --> Security Class Initialized
DEBUG - 2016-07-28 10:22:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 10:22:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '936018d6bccef0e452fccb370a1d1e22461a25b6'
DEBUG - 2016-07-28 10:22:20 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-28 10:22:20 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-28 10:22:20 --> 登录返回结果数：1
DEBUG - 2016-07-28 10:22:20 --> 成功登录
DEBUG - 2016-07-28 10:22:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469672540, data = '__ci_last_regenerate|i:1469672521;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '936018d6bccef0e452fccb370a1d1e22461a25b6'
DEBUG - 2016-07-28 10:22:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 10:22:20 --> Security Class Initialized
DEBUG - 2016-07-28 10:22:20 --> CRSF cookie Set
DEBUG - 2016-07-28 10:22:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 10:22:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '936018d6bccef0e452fccb370a1d1e22461a25b6'
DEBUG - 2016-07-28 10:22:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('24e36ab844944552bb01386923c064e3', '114.91.137.232', '2016-07-28', '10:22:20', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '936018d6bccef0e452fccb370a1d1e22461a25b6')
DEBUG - 2016-07-28 10:22:20 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-28 10:22:20 --> Total execution time: 0.3320
DEBUG - 2016-07-28 10:22:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469672540
WHERE id = '936018d6bccef0e452fccb370a1d1e22461a25b6'
DEBUG - 2016-07-28 10:22:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 10:22:24 --> Security Class Initialized
DEBUG - 2016-07-28 10:22:24 --> CRSF cookie Set
DEBUG - 2016-07-28 10:22:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 10:22:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '936018d6bccef0e452fccb370a1d1e22461a25b6'
DEBUG - 2016-07-28 10:22:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f0005f34abf342d79425ff0abce354a9', '114.91.137.232', '2016-07-28', '10:22:24', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '936018d6bccef0e452fccb370a1d1e22461a25b6')
DEBUG - 2016-07-28 10:22:24 --> 查询待审核订单
DEBUG - 2016-07-28 10:22:24 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 10:22:24 --> Total execution time: 0.2230
DEBUG - 2016-07-28 10:22:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469672544
WHERE id = '936018d6bccef0e452fccb370a1d1e22461a25b6'
DEBUG - 2016-07-28 11:18:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:18:05 --> CRSF cookie Set
DEBUG - 2016-07-28 11:18:05 --> Security Class Initialized
DEBUG - 2016-07-28 11:18:05 --> CRSF cookie Set
DEBUG - 2016-07-28 11:18:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:18:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e4ca9e74e7d5fdab6fa55f4725ca5ac792fe61d0'
DEBUG - 2016-07-28 11:18:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e4ca9e74e7d5fdab6fa55f4725ca5ac792fe61d0', '114.91.137.232', 1469675885, '__ci_last_regenerate|i:1469675885;')
DEBUG - 2016-07-28 11:18:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:18:05 --> Security Class Initialized
DEBUG - 2016-07-28 11:18:05 --> CRSF cookie Set
DEBUG - 2016-07-28 11:18:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:18:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e4ca9e74e7d5fdab6fa55f4725ca5ac792fe61d0'
DEBUG - 2016-07-28 11:18:05 --> Total execution time: 0.1380
DEBUG - 2016-07-28 11:18:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469675885
WHERE id = 'e4ca9e74e7d5fdab6fa55f4725ca5ac792fe61d0'
DEBUG - 2016-07-28 11:21:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:21:53 --> No URI present. Default controller set.
DEBUG - 2016-07-28 11:21:53 --> CRSF cookie Set
DEBUG - 2016-07-28 11:21:53 --> Security Class Initialized
DEBUG - 2016-07-28 11:21:53 --> CRSF cookie Set
DEBUG - 2016-07-28 11:21:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:21:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:21:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('fb20a031df10e0b68081a1ad0e89394346019121', '180.168.179.118', 1469676113, '__ci_last_regenerate|i:1469676113;')
DEBUG - 2016-07-28 11:21:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:21:53 --> Security Class Initialized
DEBUG - 2016-07-28 11:21:53 --> CRSF cookie Set
DEBUG - 2016-07-28 11:21:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:21:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:21:53 --> Total execution time: 0.0770
DEBUG - 2016-07-28 11:21:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676113
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:21:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:21:56 --> CRSF cookie Set
DEBUG - 2016-07-28 11:21:56 --> Security Class Initialized
DEBUG - 2016-07-28 11:21:56 --> CRSF cookie Set
DEBUG - 2016-07-28 11:21:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:21:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e310ae9ec7cb51841971450bc716a3ae308f1cc5'
DEBUG - 2016-07-28 11:21:56 --> Total execution time: 0.0820
DEBUG - 2016-07-28 11:21:56 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e310ae9ec7cb51841971450bc716a3ae308f1cc5', '101.226.33.226', 1469676116, '__ci_last_regenerate|i:1469676116;')
DEBUG - 2016-07-28 11:22:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:06 --> No URI present. Default controller set.
DEBUG - 2016-07-28 11:22:06 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:06 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:06 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:22:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '943a5653fee0bd555e580e390764f26f5b307d35'
DEBUG - 2016-07-28 11:22:06 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('943a5653fee0bd555e580e390764f26f5b307d35', '101.226.66.180', 1469676126, '__ci_last_regenerate|i:1469676126;')
DEBUG - 2016-07-28 11:22:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:06 --> No URI present. Default controller set.
DEBUG - 2016-07-28 11:22:06 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:06 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:06 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:22:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '209e3dbe3ce5c4899efaedffe9bb9bf46b95131f'
DEBUG - 2016-07-28 11:22:06 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('209e3dbe3ce5c4899efaedffe9bb9bf46b95131f', '101.226.64.174', 1469676126, '__ci_last_regenerate|i:1469676126;')
DEBUG - 2016-07-28 11:22:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:06 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:06 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:06 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:22:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dff770687d857ba0674f9f545e81abf649ea0a9d'
DEBUG - 2016-07-28 11:22:06 --> Total execution time: 0.0730
DEBUG - 2016-07-28 11:22:06 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('dff770687d857ba0674f9f545e81abf649ea0a9d', '101.226.64.174', 1469676126, '__ci_last_regenerate|i:1469676126;')
DEBUG - 2016-07-28 11:22:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:08 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:08 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:08 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:22:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8b9b1879b31520172098d13af12a3f9684fde7ea'
DEBUG - 2016-07-28 11:22:08 --> Total execution time: 0.0750
DEBUG - 2016-07-28 11:22:08 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8b9b1879b31520172098d13af12a3f9684fde7ea', '101.226.64.174', 1469676128, '__ci_last_regenerate|i:1469676128;')
DEBUG - 2016-07-28 11:22:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:14 --> No URI present. Default controller set.
DEBUG - 2016-07-28 11:22:14 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:14 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:14 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:22:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '156756078b0b2ef86d38b5711ea3003818ddb183'
DEBUG - 2016-07-28 11:22:14 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('156756078b0b2ef86d38b5711ea3003818ddb183', '180.153.214.192', 1469676134, '__ci_last_regenerate|i:1469676134;')
DEBUG - 2016-07-28 11:22:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:15 --> No URI present. Default controller set.
DEBUG - 2016-07-28 11:22:15 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:15 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:15 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:22:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f6821c5a384d15853e44874b4401821e307c5876'
DEBUG - 2016-07-28 11:22:15 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f6821c5a384d15853e44874b4401821e307c5876', '101.226.99.195', 1469676135, '__ci_last_regenerate|i:1469676135;')
DEBUG - 2016-07-28 11:22:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:15 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:15 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:22:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f6821c5a384d15853e44874b4401821e307c5876'
DEBUG - 2016-07-28 11:22:15 --> Total execution time: 0.0800
DEBUG - 2016-07-28 11:22:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676135
WHERE id = 'f6821c5a384d15853e44874b4401821e307c5876'
DEBUG - 2016-07-28 11:22:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:52 --> No URI present. Default controller set.
DEBUG - 2016-07-28 11:22:52 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:52 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:22:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:22:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676172
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:22:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:52 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:52 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:22:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:22:52 --> Total execution time: 0.0770
DEBUG - 2016-07-28 11:22:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676172
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:22:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:59 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:59 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:59 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:59 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:59 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:22:59 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:22:59 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:59 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:59 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:22:59 --> 404 Page Not Found: AdminUserLogin/assets
ERROR - 2016-07-28 11:22:59 --> 404 Page Not Found: AdminUserLogin/assets
ERROR - 2016-07-28 11:22:59 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-07-28 11:22:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:22:59 --> No URI present. Default controller set.
DEBUG - 2016-07-28 11:22:59 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:59 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:59 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:22:59 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-07-28 11:22:59 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:59 --> Security Class Initialized
DEBUG - 2016-07-28 11:22:59 --> CRSF cookie Set
DEBUG - 2016-07-28 11:22:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:22:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f46cfe0dd3c5ede81083f2b06cc00800b9193328'
DEBUG - 2016-07-28 11:22:59 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f46cfe0dd3c5ede81083f2b06cc00800b9193328', '101.226.33.226', 1469676179, '__ci_last_regenerate|i:1469676179;')
DEBUG - 2016-07-28 11:23:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:02 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:23:02 --> 检查用户密码，新密文:6b1c6efe7e9820f0725f5437a42a8501d8546421ceb16eef07a33765bab3328f
DEBUG - 2016-07-28 11:23:02 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '6b1c6efe7e9820f0725f5437a42a8501d8546421ceb16eef07a33765bab3328f'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-28 11:23:02 --> 登录返回结果数：0
DEBUG - 2016-07-28 11:23:02 --> Total execution time: 0.1330
DEBUG - 2016-07-28 11:23:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676182
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:23:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:02 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:02 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:02 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18ffd698b46e43af234d19b238f2f16e4da88a28'
DEBUG - 2016-07-28 11:23:02 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-28 11:23:02 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-28 11:23:02 --> 登录返回结果数：0
DEBUG - 2016-07-28 11:23:02 --> Total execution time: 0.0830
DEBUG - 2016-07-28 11:23:02 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('18ffd698b46e43af234d19b238f2f16e4da88a28', '101.226.93.233', 1469676182, '__ci_last_regenerate|i:1469676182;')
DEBUG - 2016-07-28 11:23:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:08 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:23:08 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-28 11:23:08 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-28 11:23:08 --> 登录返回结果数：1
DEBUG - 2016-07-28 11:23:08 --> 成功登录
DEBUG - 2016-07-28 11:23:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676188, data = '__ci_last_regenerate|i:1469676113;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:23:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:08 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:08 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:23:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e08916aa69d8434ca8f1e43b0a740082', '180.168.179.118', '2016-07-28', '11:23:08', '120340234', '/admin/backhome', 'Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko', 'fb20a031df10e0b68081a1ad0e89394346019121')
DEBUG - 2016-07-28 11:23:08 --> Total execution time: 0.1380
DEBUG - 2016-07-28 11:23:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676188
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:23:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:12 --> No URI present. Default controller set.
DEBUG - 2016-07-28 11:23:12 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:12 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e4ca9e74e7d5fdab6fa55f4725ca5ac792fe61d0'
DEBUG - 2016-07-28 11:23:12 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'e4ca9e74e7d5fdab6fa55f4725ca5ac792fe61d0'
DEBUG - 2016-07-28 11:23:12 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('38879ff68c68a3ac18329d6379071f778d3912ee', '114.91.137.232', 1469676192, '__ci_last_regenerate|i:1469676192;')
DEBUG - 2016-07-28 11:23:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:12 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:12 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '38879ff68c68a3ac18329d6379071f778d3912ee'
DEBUG - 2016-07-28 11:23:12 --> Total execution time: 0.0690
DEBUG - 2016-07-28 11:23:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676192
WHERE id = '38879ff68c68a3ac18329d6379071f778d3912ee'
DEBUG - 2016-07-28 11:23:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:13 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:13 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:13 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '64fd83e22bf4c2032cf7dd0d206fecb87779e782'
DEBUG - 2016-07-28 11:23:13 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('64fd83e22bf4c2032cf7dd0d206fecb87779e782', '101.226.69.108', 1469676193, '__ci_last_regenerate|i:1469676193;')
DEBUG - 2016-07-28 11:23:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:19 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:19 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:19 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a2b0639e27d1ab53287daeafcc566827bbe89d1f'
DEBUG - 2016-07-28 11:23:19 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-28 11:23:19 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-28 11:23:19 --> 登录返回结果数：0
DEBUG - 2016-07-28 11:23:19 --> Total execution time: 0.0780
DEBUG - 2016-07-28 11:23:19 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a2b0639e27d1ab53287daeafcc566827bbe89d1f', '180.153.206.35', 1469676199, '__ci_last_regenerate|i:1469676199;')
DEBUG - 2016-07-28 11:23:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:21 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:21 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:23:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a87d029cd91847098cb273823b88e6d3', '180.168.179.118', '2016-07-28', '11:23:21', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko', 'fb20a031df10e0b68081a1ad0e89394346019121')
DEBUG - 2016-07-28 11:23:21 --> 查询订单
DEBUG - 2016-07-28 11:23:21 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:23:21 --> Total execution time: 0.1410
DEBUG - 2016-07-28 11:23:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676201
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:23:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:22 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:22 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:22 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:23 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:23 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:23 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:23 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:23 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:23 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:24 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:24 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:24 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '206d82135983d3d1c38dd832da0814c86bee4f49'
DEBUG - 2016-07-28 11:23:24 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('206d82135983d3d1c38dd832da0814c86bee4f49', '101.226.51.226', 1469676204, '__ci_last_regenerate|i:1469676204;')
DEBUG - 2016-07-28 11:23:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:25 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:25 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:25 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:25 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:25 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:25 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:25 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:25 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:25 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:25 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:25 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:25 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:25 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:25 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:25 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:25 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:25 --> 404 Page Not Found: Order/assets
ERROR - 2016-07-28 11:23:25 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:25 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:25 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:25 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:26 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:26 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:26 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:26 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:26 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:26 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:26 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:26 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:26 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:26 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:26 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:26 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:26 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:26 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:26 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:26 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:26 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:26 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:26 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:26 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:23:26 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:23:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:27 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:27 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:27 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b99a3be91b3e76e89dd36a8987e4277b91f62f03'
DEBUG - 2016-07-28 11:23:27 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b99a3be91b3e76e89dd36a8987e4277b91f62f03', '101.226.66.181', 1469676207, '__ci_last_regenerate|i:1469676207;')
DEBUG - 2016-07-28 11:23:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:27 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:27 --> CRSF cookie Set
DEBUG - 2016-07-28 11:23:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b99a3be91b3e76e89dd36a8987e4277b91f62f03'
DEBUG - 2016-07-28 11:23:27 --> Total execution time: 0.0830
DEBUG - 2016-07-28 11:23:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676207
WHERE id = 'b99a3be91b3e76e89dd36a8987e4277b91f62f03'
DEBUG - 2016-07-28 11:23:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:23:58 --> Security Class Initialized
DEBUG - 2016-07-28 11:23:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:23:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '38879ff68c68a3ac18329d6379071f778d3912ee'
DEBUG - 2016-07-28 11:23:58 --> 检查用户密码，新密文:c07cd18394ca7f70b23906c52103b752e578a653e07a9d49e88b72c3a2fd9157
DEBUG - 2016-07-28 11:23:58 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c07cd18394ca7f70b23906c52103b752e578a653e07a9d49e88b72c3a2fd9157'
AND   (
login_code = ' wlmqsaltljyqcpjjxb'
OR phone = ' wlmqsaltljyqcpjjxb'
OR email = ' wlmqsaltljyqcpjjxb'
 )
DEBUG - 2016-07-28 11:23:58 --> 登录返回结果数：0
DEBUG - 2016-07-28 11:23:58 --> Total execution time: 0.0910
DEBUG - 2016-07-28 11:23:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676238
WHERE id = '38879ff68c68a3ac18329d6379071f778d3912ee'
DEBUG - 2016-07-28 11:24:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:40 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:40 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:24:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:24:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6ac12738e6bd4e4bb9d2ef22093e6dc5', '180.168.179.118', '2016-07-28', '11:24:40', '120340234', '/admin/order/index', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', 'fb20a031df10e0b68081a1ad0e89394346019121')
DEBUG - 2016-07-28 11:24:40 --> 查询订单
DEBUG - 2016-07-28 11:24:40 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:24:40 --> Total execution time: 0.1090
DEBUG - 2016-07-28 11:24:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676280
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:24:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:41 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:41 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:41 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:41 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:41 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:41 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:41 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:41 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:41 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:41 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:41 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:41 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:42 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:42 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:42 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:42 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:42 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:42 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:42 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:42 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:42 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:42 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:42 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:42 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:42 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:42 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:24:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:42 --> 404 Page Not Found: Order/assets
ERROR - 2016-07-28 11:24:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:43 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:43 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:43 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:43 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:43 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:43 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:43 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:43 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:43 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:43 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:44 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:44 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:44 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:44 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:44 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:44 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:44 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:44 --> CRSF cookie Set
DEBUG - 2016-07-28 11:24:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:24:44 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:24:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:24:55 --> Security Class Initialized
DEBUG - 2016-07-28 11:24:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:24:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '38879ff68c68a3ac18329d6379071f778d3912ee'
DEBUG - 2016-07-28 11:24:55 --> 检查用户密码，新密文:c07cd18394ca7f70b23906c52103b752e578a653e07a9d49e88b72c3a2fd9157
DEBUG - 2016-07-28 11:24:55 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c07cd18394ca7f70b23906c52103b752e578a653e07a9d49e88b72c3a2fd9157'
AND   (
login_code = 'wlmqsaltljyqcpjjxb'
OR phone = 'wlmqsaltljyqcpjjxb'
OR email = 'wlmqsaltljyqcpjjxb'
 )
DEBUG - 2016-07-28 11:24:55 --> 登录返回结果数：0
DEBUG - 2016-07-28 11:24:55 --> Total execution time: 0.0740
DEBUG - 2016-07-28 11:24:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676295
WHERE id = '38879ff68c68a3ac18329d6379071f778d3912ee'
DEBUG - 2016-07-28 11:25:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:25:17 --> Security Class Initialized
DEBUG - 2016-07-28 11:25:17 --> CRSF cookie Set
DEBUG - 2016-07-28 11:25:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:25:17 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:25:33 --> Security Class Initialized
DEBUG - 2016-07-28 11:25:33 --> CRSF cookie Set
DEBUG - 2016-07-28 11:25:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-28 11:25:33 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-28 11:29:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:29:48 --> Security Class Initialized
DEBUG - 2016-07-28 11:29:48 --> CRSF cookie Set
DEBUG - 2016-07-28 11:29:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:29:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:29:48 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'fb20a031df10e0b68081a1ad0e89394346019121'
DEBUG - 2016-07-28 11:29:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c3c212edde2f4690975a3f4f326283d1', '180.168.179.118', '2016-07-28', '11:29:48', '120340234', '/admin/order/index/aab58df429c94699b895396d664d5f6c', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:29:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:29:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-07-28 11:29:48 --> CRSF cookie Set
DEBUG - 2016-07-28 11:29:48 --> Security Class Initialized
DEBUG - 2016-07-28 11:29:48 --> CRSF cookie Set
DEBUG - 2016-07-28 11:29:48 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aab58df429c94699b895396d664d5f6c' order by create_date_time desc
DEBUG - 2016-07-28 11:29:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:29:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2fe549cda5a1a72297989ca80c127f50d880a894'
DEBUG - 2016-07-28 11:29:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-07-28 11:29:48 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-07-28 11:29:48 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2fe549cda5a1a72297989ca80c127f50d880a894', '112.64.235.90', 1469676588, '__ci_last_regenerate|i:1469676588;')
DEBUG - 2016-07-28 11:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:29:49 --> Security Class Initialized
DEBUG - 2016-07-28 11:29:49 --> CRSF cookie Set
DEBUG - 2016-07-28 11:29:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:29:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2fe549cda5a1a72297989ca80c127f50d880a894'
DEBUG - 2016-07-28 11:29:49 --> Total execution time: 0.0750
DEBUG - 2016-07-28 11:29:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676589
WHERE id = '2fe549cda5a1a72297989ca80c127f50d880a894'
DEBUG - 2016-07-28 11:29:49 --> Total execution time: 0.4250
DEBUG - 2016-07-28 11:29:49 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6f803e929233b986125aac19513d25a4623ac287', '180.168.179.118', 1469676589, '__ci_last_regenerate|i:1469676588;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-28 11:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:29:49 --> Security Class Initialized
DEBUG - 2016-07-28 11:29:49 --> CRSF cookie Set
DEBUG - 2016-07-28 11:29:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:29:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('53cbad6a8ec245e4b43f0923655add15', '180.168.179.118', '2016-07-28', '11:29:49', '120340234', '/admin/order/index/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:29:49 --> 查询订单
DEBUG - 2016-07-28 11:29:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:29:49 --> Total execution time: 0.0900
DEBUG - 2016-07-28 11:29:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676589
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:29:51 --> Security Class Initialized
DEBUG - 2016-07-28 11:29:51 --> CRSF cookie Set
DEBUG - 2016-07-28 11:29:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:29:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d6e9d4d7c904467c8b669b1c1aceaf29', '180.168.179.118', '2016-07-28', '11:29:51', '120340234', '/admin/order/index/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:29:51 --> 查询订单
DEBUG - 2016-07-28 11:29:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:29:51 --> Total execution time: 0.0960
DEBUG - 2016-07-28 11:29:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676591
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:29:52 --> Security Class Initialized
DEBUG - 2016-07-28 11:29:52 --> CRSF cookie Set
DEBUG - 2016-07-28 11:29:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:29:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7c2324b6f376463aa65e18711aabdbbc', '180.168.179.118', '2016-07-28', '11:29:52', '120340234', '/admin/order/index/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:29:52 --> 查询订单
DEBUG - 2016-07-28 11:29:52 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:29:52 --> Total execution time: 0.0990
DEBUG - 2016-07-28 11:29:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676592
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:29:53 --> Security Class Initialized
DEBUG - 2016-07-28 11:29:53 --> CRSF cookie Set
DEBUG - 2016-07-28 11:29:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:29:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('18eb5fee54624ef297d8d96748f20044', '180.168.179.118', '2016-07-28', '11:29:53', '120340234', '/admin/order/index/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:29:53 --> 查询订单
DEBUG - 2016-07-28 11:29:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:29:53 --> Total execution time: 0.0970
DEBUG - 2016-07-28 11:29:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676593
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:29:55 --> Security Class Initialized
DEBUG - 2016-07-28 11:29:55 --> CRSF cookie Set
DEBUG - 2016-07-28 11:29:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:29:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('15b6fd459fec4ad0a82d8bd7ffae64df', '180.168.179.118', '2016-07-28', '11:29:55', '120340234', '/admin/order/index/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:29:55 --> 查询订单
DEBUG - 2016-07-28 11:29:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:29:55 --> Total execution time: 0.1130
DEBUG - 2016-07-28 11:29:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676595
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:29:56 --> Security Class Initialized
DEBUG - 2016-07-28 11:29:56 --> CRSF cookie Set
DEBUG - 2016-07-28 11:29:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:29:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b524e66cb7034817acbe5f75748a53bb', '180.168.179.118', '2016-07-28', '11:29:56', '120340234', '/admin/order/index/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:29:56 --> 查询订单
DEBUG - 2016-07-28 11:29:56 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:29:56 --> Total execution time: 0.1050
DEBUG - 2016-07-28 11:29:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676596
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:29:57 --> Security Class Initialized
DEBUG - 2016-07-28 11:29:57 --> CRSF cookie Set
DEBUG - 2016-07-28 11:29:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:29:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1e1b9854ed4d42949befd2722f90c442', '180.168.179.118', '2016-07-28', '11:29:57', '120340234', '/admin/order/index/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:29:57 --> 查询订单
DEBUG - 2016-07-28 11:29:57 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:29:57 --> Total execution time: 0.1020
DEBUG - 2016-07-28 11:29:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676597
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:29:58 --> Security Class Initialized
DEBUG - 2016-07-28 11:29:58 --> CRSF cookie Set
DEBUG - 2016-07-28 11:29:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:29:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('45049d3a15ab423fbf163860967a7624', '180.168.179.118', '2016-07-28', '11:29:58', '120340234', '/admin/order/index/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:29:58 --> 查询订单
DEBUG - 2016-07-28 11:29:58 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:29:58 --> Total execution time: 0.0940
DEBUG - 2016-07-28 11:29:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676598
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:29:59 --> Security Class Initialized
DEBUG - 2016-07-28 11:29:59 --> CRSF cookie Set
DEBUG - 2016-07-28 11:29:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:29:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:29:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('db19292179474a38a4f3278c3a469d2b', '180.168.179.118', '2016-07-28', '11:29:59', '120340234', '/admin/order/index/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:29:59 --> 查询订单
DEBUG - 2016-07-28 11:29:59 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:29:59 --> Total execution time: 0.0960
DEBUG - 2016-07-28 11:29:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676599
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:30:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:30:00 --> Security Class Initialized
DEBUG - 2016-07-28 11:30:00 --> CRSF cookie Set
DEBUG - 2016-07-28 11:30:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:30:00 --> Security Class Initialized
DEBUG - 2016-07-28 11:30:00 --> CRSF cookie Set
DEBUG - 2016-07-28 11:30:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:30:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cb7e1d91294f4984b3b1da04c1d4b4cc', '180.168.179.118', '2016-07-28', '11:30:00', '120340234', '/admin/order/index/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:30:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bd479ed81fe34a80a9952ea3b4f7f5b5', '180.168.179.118', '2016-07-28', '11:30:00', '120340234', '/admin/order/index/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:30:00 --> 查询订单
DEBUG - 2016-07-28 11:30:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:30:00 --> 查询订单
DEBUG - 2016-07-28 11:30:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:30:00 --> Total execution time: 0.1060
DEBUG - 2016-07-28 11:30:00 --> Total execution time: 0.1120
DEBUG - 2016-07-28 11:30:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676600
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676600
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:30:01 --> Security Class Initialized
DEBUG - 2016-07-28 11:30:01 --> CRSF cookie Set
DEBUG - 2016-07-28 11:30:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:30:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('489cb7e98b1c4cefb1f3a60e160bb7aa', '180.168.179.118', '2016-07-28', '11:30:01', '120340234', '/admin/order/index/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:30:01 --> 查询订单
DEBUG - 2016-07-28 11:30:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:30:01 --> Total execution time: 0.0990
DEBUG - 2016-07-28 11:30:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676601
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:30:02 --> Security Class Initialized
DEBUG - 2016-07-28 11:30:02 --> CRSF cookie Set
DEBUG - 2016-07-28 11:30:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:30:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c5b04beb820d4960a6803fc60ddf7838', '180.168.179.118', '2016-07-28', '11:30:02', '120340234', '/admin/order/index/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:30:02 --> 查询订单
DEBUG - 2016-07-28 11:30:02 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:30:02 --> Total execution time: 0.1290
DEBUG - 2016-07-28 11:30:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676602
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:30:03 --> Security Class Initialized
DEBUG - 2016-07-28 11:30:03 --> CRSF cookie Set
DEBUG - 2016-07-28 11:30:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:30:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4b1ae46b232348a98ac06a9ea8e0ab42', '180.168.179.118', '2016-07-28', '11:30:03', '120340234', '/admin/order/index/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:30:03 --> 查询订单
DEBUG - 2016-07-28 11:30:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:30:03 --> Total execution time: 0.0910
DEBUG - 2016-07-28 11:30:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676603
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:30:04 --> Security Class Initialized
DEBUG - 2016-07-28 11:30:04 --> CRSF cookie Set
DEBUG - 2016-07-28 11:30:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:30:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a9546a60a66d42128c76c88a65bae9b8', '180.168.179.118', '2016-07-28', '11:30:04', '120340234', '/admin/order/index/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:30:04 --> 查询订单
DEBUG - 2016-07-28 11:30:04 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:30:04 --> Total execution time: 0.0990
DEBUG - 2016-07-28 11:30:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676604
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 11:30:05 --> Security Class Initialized
DEBUG - 2016-07-28 11:30:05 --> CRSF cookie Set
DEBUG - 2016-07-28 11:30:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 11:30:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 11:30:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cb366835546c4e19b4c9ca98b2ecaf0c', '180.168.179.118', '2016-07-28', '11:30:05', '120340234', '/admin/order/index/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', '6f803e929233b986125aac19513d25a4623ac287')
DEBUG - 2016-07-28 11:30:05 --> 查询订单
DEBUG - 2016-07-28 11:30:05 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-28 11:30:05 --> Total execution time: 0.0920
DEBUG - 2016-07-28 11:30:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469676605
WHERE id = '6f803e929233b986125aac19513d25a4623ac287'
DEBUG - 2016-07-28 12:11:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 12:11:27 --> Security Class Initialized
DEBUG - 2016-07-28 12:11:27 --> CRSF cookie Set
DEBUG - 2016-07-28 12:11:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 12:11:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '936018d6bccef0e452fccb370a1d1e22461a25b6'
DEBUG - 2016-07-28 12:11:27 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '936018d6bccef0e452fccb370a1d1e22461a25b6'
DEBUG - 2016-07-28 12:11:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9ad59367a85c4f73b0dfe25abca72d33', '114.91.137.232', '2016-07-28', '12:11:27', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f')
DEBUG - 2016-07-28 12:11:27 --> 查询待审核订单
DEBUG - 2016-07-28 12:11:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 12:11:27 --> Total execution time: 0.4790
DEBUG - 2016-07-28 12:11:27 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f', '114.91.137.232', 1469679087, '__ci_last_regenerate|i:1469679087;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-28 12:11:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 12:11:29 --> Security Class Initialized
DEBUG - 2016-07-28 12:11:29 --> CRSF cookie Set
DEBUG - 2016-07-28 12:11:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 12:11:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f'
DEBUG - 2016-07-28 12:11:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3ed96e9ee4474f0fb4de896cfe190204', '114.91.137.232', '2016-07-28', '12:11:29', '120340234', '/admin/order/check/8b4d72e982f34be7bd1601fbc365e309', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f')
DEBUG - 2016-07-28 12:11:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 12:11:29 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8b4d72e982f34be7bd1601fbc365e309' order by create_date_time desc
DEBUG - 2016-07-28 12:11:29 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 12:11:29 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8b4d72e982f34be7bd1601fbc365e309'    order by t1.lno asc
        
DEBUG - 2016-07-28 12:11:29 --> Total execution time: 0.2030
DEBUG - 2016-07-28 12:11:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469679089
WHERE id = 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f'
DEBUG - 2016-07-28 12:11:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 12:11:30 --> CRSF cookie Set
DEBUG - 2016-07-28 12:11:30 --> Security Class Initialized
DEBUG - 2016-07-28 12:11:30 --> CRSF cookie Set
DEBUG - 2016-07-28 12:11:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 12:11:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b826481386f4daecb144d921e1d79d1ad7fcd417'
DEBUG - 2016-07-28 12:11:30 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b826481386f4daecb144d921e1d79d1ad7fcd417', '112.64.235.254', 1469679090, '__ci_last_regenerate|i:1469679090;')
DEBUG - 2016-07-28 12:11:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 12:11:33 --> Security Class Initialized
DEBUG - 2016-07-28 12:11:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 12:11:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f'
DEBUG - 2016-07-28 12:11:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('02ae3b13a62e46aaa37f6ac36b027a37', '114.91.137.232', '2016-07-28', '12:11:33', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f')
DEBUG - 2016-07-28 12:11:33 --> 审核订单
DEBUG - 2016-07-28 12:11:34 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '8b4d72e982f34be7bd1601fbc365e309'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-28 12:11:34 --> 过程调用语句：  execute USP_APSOS_outorder '8b4d72e982f34be7bd1601fbc365e309'
ERROR - 2016-07-28 12:11:37 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-28 12:11:37 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-28 12:11:37 --> Total execution time: 3.3002
DEBUG - 2016-07-28 12:11:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469679097
WHERE id = 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f'
DEBUG - 2016-07-28 12:11:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 12:11:37 --> Security Class Initialized
DEBUG - 2016-07-28 12:11:37 --> CRSF cookie Set
DEBUG - 2016-07-28 12:11:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 12:11:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f'
DEBUG - 2016-07-28 12:11:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('937f921d9aa4453da9b84ceefe154f65', '114.91.137.232', '2016-07-28', '12:11:37', '120340234', '/admin/order/check/8b4d72e982f34be7bd1601fbc365e309', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f')
DEBUG - 2016-07-28 12:11:37 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 12:11:37 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8b4d72e982f34be7bd1601fbc365e309' order by create_date_time desc
DEBUG - 2016-07-28 12:11:37 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 12:11:37 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8b4d72e982f34be7bd1601fbc365e309'    order by t1.lno asc
        
DEBUG - 2016-07-28 12:11:37 --> Total execution time: 0.3450
DEBUG - 2016-07-28 12:11:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469679097
WHERE id = 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f'
DEBUG - 2016-07-28 12:17:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 12:17:20 --> Security Class Initialized
DEBUG - 2016-07-28 12:17:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 12:17:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f'
DEBUG - 2016-07-28 12:17:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('28b4408991cc4c14880bd9c81dbe0347', '114.91.137.232', '2016-07-28', '12:17:20', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f')
DEBUG - 2016-07-28 12:17:20 --> 审核订单
DEBUG - 2016-07-28 12:17:20 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '8b4d72e982f34be7bd1601fbc365e309'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-28 12:17:20 --> 过程调用语句：  execute USP_APSOS_outorder '8b4d72e982f34be7bd1601fbc365e309'
ERROR - 2016-07-28 12:17:20 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-28 12:17:20 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-28 12:17:20 --> Total execution time: 0.1990
DEBUG - 2016-07-28 12:17:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469679440
WHERE id = 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f'
DEBUG - 2016-07-28 12:17:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 12:17:20 --> Security Class Initialized
DEBUG - 2016-07-28 12:17:20 --> CRSF cookie Set
DEBUG - 2016-07-28 12:17:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 12:17:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f'
DEBUG - 2016-07-28 12:17:20 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'ee8082aedfcf6c14eaf4b8d3ff46d46e5cde414f'
DEBUG - 2016-07-28 12:17:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4bcfb438bf1c49f8945d662b6e006ae0', '114.91.137.232', '2016-07-28', '12:17:20', '120340234', '/admin/order/check/8b4d72e982f34be7bd1601fbc365e309', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '9669b040ac5cd0b5718f70486affd30efef15ee2')
DEBUG - 2016-07-28 12:17:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 12:17:21 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8b4d72e982f34be7bd1601fbc365e309' order by create_date_time desc
DEBUG - 2016-07-28 12:17:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 12:17:21 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8b4d72e982f34be7bd1601fbc365e309'    order by t1.lno asc
        
DEBUG - 2016-07-28 12:17:21 --> Total execution time: 0.8681
DEBUG - 2016-07-28 12:17:21 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9669b040ac5cd0b5718f70486affd30efef15ee2', '114.91.137.232', 1469679441, '__ci_last_regenerate|i:1469679440;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-28 13:14:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:14:16 --> Security Class Initialized
DEBUG - 2016-07-28 13:14:16 --> CRSF cookie Set
DEBUG - 2016-07-28 13:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:14:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9669b040ac5cd0b5718f70486affd30efef15ee2'
DEBUG - 2016-07-28 13:14:16 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '9669b040ac5cd0b5718f70486affd30efef15ee2'
DEBUG - 2016-07-28 13:14:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('099313354de2482e981671b2c6ae858c', '114.91.137.232', '2016-07-28', '13:14:16', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '60266f311ae1ba38f2e69e8c8d3ff92abde03284')
DEBUG - 2016-07-28 13:14:16 --> 查询待审核订单
DEBUG - 2016-07-28 13:14:16 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:14:16 --> Total execution time: 0.1510
DEBUG - 2016-07-28 13:14:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('60266f311ae1ba38f2e69e8c8d3ff92abde03284', '114.91.137.232', 1469682856, '__ci_last_regenerate|i:1469682856;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-28 13:14:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:14:18 --> Security Class Initialized
DEBUG - 2016-07-28 13:14:18 --> CRSF cookie Set
DEBUG - 2016-07-28 13:14:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:14:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:14:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0b8c4897f3a14eb8bee09b0f0cf08ce2', '114.91.137.232', '2016-07-28', '13:14:18', '120340234', '/admin/order/check/8b4d72e982f34be7bd1601fbc365e309', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '60266f311ae1ba38f2e69e8c8d3ff92abde03284')
DEBUG - 2016-07-28 13:14:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:14:18 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8b4d72e982f34be7bd1601fbc365e309' order by create_date_time desc
DEBUG - 2016-07-28 13:14:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:14:18 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8b4d72e982f34be7bd1601fbc365e309'    order by t1.lno asc
        
DEBUG - 2016-07-28 13:14:18 --> Total execution time: 0.1560
DEBUG - 2016-07-28 13:14:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469682858
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:14:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:14:21 --> Security Class Initialized
DEBUG - 2016-07-28 13:14:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:14:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:14:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9578ee5de8fa4bab997fecc1c81a5c70', '114.91.137.232', '2016-07-28', '13:14:21', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '60266f311ae1ba38f2e69e8c8d3ff92abde03284')
DEBUG - 2016-07-28 13:14:21 --> 审核订单
DEBUG - 2016-07-28 13:14:21 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '8b4d72e982f34be7bd1601fbc365e309'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-28 13:14:21 --> 过程调用语句：  execute USP_APSOS_outorder '8b4d72e982f34be7bd1601fbc365e309'
ERROR - 2016-07-28 13:14:21 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-28 13:14:21 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-28 13:14:21 --> Total execution time: 0.2480
DEBUG - 2016-07-28 13:14:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469682861
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:14:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:14:21 --> Security Class Initialized
DEBUG - 2016-07-28 13:14:21 --> CRSF cookie Set
DEBUG - 2016-07-28 13:14:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:14:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:14:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9b6b1352112f4498bed26b29169ec7a7', '114.91.137.232', '2016-07-28', '13:14:22', '120340234', '/admin/order/check/8b4d72e982f34be7bd1601fbc365e309', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '60266f311ae1ba38f2e69e8c8d3ff92abde03284')
DEBUG - 2016-07-28 13:14:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:14:22 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8b4d72e982f34be7bd1601fbc365e309' order by create_date_time desc
DEBUG - 2016-07-28 13:14:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:14:22 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8b4d72e982f34be7bd1601fbc365e309'    order by t1.lno asc
        
DEBUG - 2016-07-28 13:14:22 --> Total execution time: 0.5090
DEBUG - 2016-07-28 13:14:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469682862
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:17:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:17:00 --> Security Class Initialized
DEBUG - 2016-07-28 13:17:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:17:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:17:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('af750707ca324c8f9fe155ff4a9d7d4a', '114.91.137.232', '2016-07-28', '13:17:00', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '60266f311ae1ba38f2e69e8c8d3ff92abde03284')
DEBUG - 2016-07-28 13:17:00 --> 审核订单
DEBUG - 2016-07-28 13:17:00 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '8b4d72e982f34be7bd1601fbc365e309'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-28 13:17:00 --> 过程调用语句：  execute USP_APSOS_outorder '8b4d72e982f34be7bd1601fbc365e309'
ERROR - 2016-07-28 13:17:00 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-28 13:17:00 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-28 13:17:00 --> Total execution time: 0.1810
DEBUG - 2016-07-28 13:17:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683020
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:17:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:17:01 --> Security Class Initialized
DEBUG - 2016-07-28 13:17:01 --> CRSF cookie Set
DEBUG - 2016-07-28 13:17:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:17:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:17:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d93be13b7df646ed955500c0a4e49bf0', '114.91.137.232', '2016-07-28', '13:17:01', '120340234', '/admin/order/check/8b4d72e982f34be7bd1601fbc365e309', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '60266f311ae1ba38f2e69e8c8d3ff92abde03284')
DEBUG - 2016-07-28 13:17:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:17:01 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8b4d72e982f34be7bd1601fbc365e309' order by create_date_time desc
DEBUG - 2016-07-28 13:17:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:17:01 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8b4d72e982f34be7bd1601fbc365e309'    order by t1.lno asc
        
DEBUG - 2016-07-28 13:17:01 --> Total execution time: 0.1190
DEBUG - 2016-07-28 13:17:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683021
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:17:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:17:09 --> Security Class Initialized
DEBUG - 2016-07-28 13:17:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:17:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:17:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d7addedb6fbb488ab5ec41ea65b68c09', '114.91.137.232', '2016-07-28', '13:17:09', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '60266f311ae1ba38f2e69e8c8d3ff92abde03284')
DEBUG - 2016-07-28 13:17:09 --> 审核订单
DEBUG - 2016-07-28 13:17:09 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '8b4d72e982f34be7bd1601fbc365e309'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-28 13:17:09 --> 过程调用语句：  execute USP_APSOS_outorder '8b4d72e982f34be7bd1601fbc365e309'
ERROR - 2016-07-28 13:17:09 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-28 13:17:09 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-28 13:17:09 --> Total execution time: 0.2030
DEBUG - 2016-07-28 13:17:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683029
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:17:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:17:09 --> Security Class Initialized
DEBUG - 2016-07-28 13:17:09 --> CRSF cookie Set
DEBUG - 2016-07-28 13:17:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:17:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:17:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('df1758cc71a341108d90866a347c7132', '114.91.137.232', '2016-07-28', '13:17:10', '120340234', '/admin/order/check/8b4d72e982f34be7bd1601fbc365e309', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '60266f311ae1ba38f2e69e8c8d3ff92abde03284')
DEBUG - 2016-07-28 13:17:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:17:10 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8b4d72e982f34be7bd1601fbc365e309' order by create_date_time desc
DEBUG - 2016-07-28 13:17:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:17:10 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8b4d72e982f34be7bd1601fbc365e309'    order by t1.lno asc
        
DEBUG - 2016-07-28 13:17:10 --> Total execution time: 0.1420
DEBUG - 2016-07-28 13:17:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683030
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:17:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:17:12 --> Security Class Initialized
DEBUG - 2016-07-28 13:17:12 --> CRSF cookie Set
DEBUG - 2016-07-28 13:17:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:17:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:17:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b23fe86ea605487db373c77630506c56', '114.91.137.232', '2016-07-28', '13:17:12', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '60266f311ae1ba38f2e69e8c8d3ff92abde03284')
DEBUG - 2016-07-28 13:17:12 --> 查询待审核订单
DEBUG - 2016-07-28 13:17:12 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:17:12 --> Total execution time: 0.1020
DEBUG - 2016-07-28 13:17:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683032
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:17:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:17:47 --> Security Class Initialized
DEBUG - 2016-07-28 13:17:47 --> CRSF cookie Set
DEBUG - 2016-07-28 13:17:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:17:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '38879ff68c68a3ac18329d6379071f778d3912ee'
DEBUG - 2016-07-28 13:17:47 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '38879ff68c68a3ac18329d6379071f778d3912ee'
DEBUG - 2016-07-28 13:17:47 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('18692c6539701599035742b2aec2e26cee5211ba', '114.91.137.232', 1469683067, '__ci_last_regenerate|i:1469683067;')
DEBUG - 2016-07-28 13:17:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:17:47 --> Security Class Initialized
DEBUG - 2016-07-28 13:17:47 --> CRSF cookie Set
DEBUG - 2016-07-28 13:17:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:17:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:17:47 --> Total execution time: 0.1610
DEBUG - 2016-07-28 13:17:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683067
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:25 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:26 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-28 13:18:26 --> 登录返回结果数：1
DEBUG - 2016-07-28 13:18:26 --> 成功登录
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683106, data = '__ci_last_regenerate|i:1469683067;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:26 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:26 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3e804859b1ca431786bc9bcfb84c60c4', '114.91.137.232', '2016-07-28', '13:18:26', '120340234', '/admin/order/check/8b4d72e982f34be7bd1601fbc365e309', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8b4d72e982f34be7bd1601fbc365e309' order by create_date_time desc
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8b4d72e982f34be7bd1601fbc365e309'    order by t1.lno asc
        
DEBUG - 2016-07-28 13:18:26 --> Total execution time: 0.1610
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683106
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:26 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:26 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e91bc42e679740129258d3db3a881aef', '114.91.137.232', '2016-07-28', '13:18:26', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:26 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:26 --> Total execution time: 0.1410
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683106
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:26 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:26 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bc7bc5c83f6d49b2bc7e33e998f13ca4', '114.91.137.232', '2016-07-28', '13:18:26', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:26 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:26 --> Total execution time: 0.1250
DEBUG - 2016-07-28 13:18:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683106
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:27 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:27 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f1bb3235796e49719537fb561ca71c82', '114.91.137.232', '2016-07-28', '13:18:27', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:27 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:27 --> Total execution time: 0.1420
DEBUG - 2016-07-28 13:18:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683107
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:27 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:27 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('069f158c45ad42a48c9332faf59de3eb', '114.91.137.232', '2016-07-28', '13:18:27', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:27 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:27 --> Total execution time: 0.1380
DEBUG - 2016-07-28 13:18:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683107
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:27 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:27 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f3e1a440f64f4c0ea0ce196b67a1b062', '114.91.137.232', '2016-07-28', '13:18:27', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:27 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:27 --> Total execution time: 0.1310
DEBUG - 2016-07-28 13:18:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683107
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:28 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:28 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9950f2a1466d43738b16764e18964e22', '114.91.137.232', '2016-07-28', '13:18:28', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:28 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:28 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:28 --> Total execution time: 0.1020
DEBUG - 2016-07-28 13:18:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683108
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:28 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:28 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('024cdb65ef104a32816e160dc03b3308', '114.91.137.232', '2016-07-28', '13:18:29', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:29 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:29 --> Total execution time: 0.1350
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683109
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:29 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:29 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ffae5acfac1b445dabdacd95bf1d71d3', '114.91.137.232', '2016-07-28', '13:18:29', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:29 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:29 --> Total execution time: 0.1210
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683109
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:29 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:29 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c41235c65f68443e973d64e687b5279c', '114.91.137.232', '2016-07-28', '13:18:29', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:29 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:29 --> Total execution time: 0.1380
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683109
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:29 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:29 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('207d8f9698a54732b11a02a3019014ce', '114.91.137.232', '2016-07-28', '13:18:29', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:29 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:29 --> Total execution time: 0.1460
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683109
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:29 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:29 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5a70765cd3144245b05af8ce987331a3', '114.91.137.232', '2016-07-28', '13:18:29', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:29 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:29 --> Total execution time: 0.1530
DEBUG - 2016-07-28 13:18:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683109
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:30 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:30 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3f7e73aa3af44a3fa13b2176507b41eb', '114.91.137.232', '2016-07-28', '13:18:30', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:30 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:30 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:30 --> Total execution time: 0.2660
DEBUG - 2016-07-28 13:18:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683110
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:30 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:30 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9d6cdbc4f82a492f81d068bb194f0feb', '114.91.137.232', '2016-07-28', '13:18:30', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:30 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:30 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:30 --> Total execution time: 0.1650
DEBUG - 2016-07-28 13:18:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683110
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:30 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:30 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('59df4369cce74e6f88befaebdb870fa3', '114.91.137.232', '2016-07-28', '13:18:31', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:31 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:31 --> Total execution time: 0.1510
DEBUG - 2016-07-28 13:18:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683111
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:31 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:31 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('878574b428a34f2e99e6399ece0cd71c', '114.91.137.232', '2016-07-28', '13:18:31', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:31 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:31 --> Total execution time: 0.1290
DEBUG - 2016-07-28 13:18:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683111
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:18:31 --> Security Class Initialized
DEBUG - 2016-07-28 13:18:31 --> CRSF cookie Set
DEBUG - 2016-07-28 13:18:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:18:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:18:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7a10b5048b164ef99e97ed5e15aef1e2', '114.91.137.232', '2016-07-28', '13:18:31', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '18692c6539701599035742b2aec2e26cee5211ba')
DEBUG - 2016-07-28 13:18:31 --> 查询待审核订单
DEBUG - 2016-07-28 13:18:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 13:18:31 --> Total execution time: 0.1170
DEBUG - 2016-07-28 13:18:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683111
WHERE id = '18692c6539701599035742b2aec2e26cee5211ba'
DEBUG - 2016-07-28 13:26:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:26:42 --> Security Class Initialized
DEBUG - 2016-07-28 13:26:42 --> CRSF cookie Set
DEBUG - 2016-07-28 13:26:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:26:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:26:42 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '60266f311ae1ba38f2e69e8c8d3ff92abde03284'
DEBUG - 2016-07-28 13:26:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1376387a11804438a3f9da8386812c1d', '114.91.137.232', '2016-07-28', '13:26:42', '120340234', '/admin/order/check/8b4d72e982f34be7bd1601fbc365e309', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '8d87e7830c6763a8ce0f5c1c57bde6fd9e629c01')
DEBUG - 2016-07-28 13:26:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:26:42 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8b4d72e982f34be7bd1601fbc365e309' order by create_date_time desc
DEBUG - 2016-07-28 13:26:42 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:26:42 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8b4d72e982f34be7bd1601fbc365e309'    order by t1.lno asc
        
DEBUG - 2016-07-28 13:26:42 --> Total execution time: 0.1404
DEBUG - 2016-07-28 13:26:42 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8d87e7830c6763a8ce0f5c1c57bde6fd9e629c01', '114.91.137.232', 1469683602, '__ci_last_regenerate|i:1469683602;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-28 13:26:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:26:46 --> Security Class Initialized
DEBUG - 2016-07-28 13:26:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:26:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8d87e7830c6763a8ce0f5c1c57bde6fd9e629c01'
DEBUG - 2016-07-28 13:26:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('797a509a6a6a4c45ade21d390fd867f4', '114.91.137.232', '2016-07-28', '13:26:46', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '8d87e7830c6763a8ce0f5c1c57bde6fd9e629c01')
DEBUG - 2016-07-28 13:26:46 --> 审核订单
DEBUG - 2016-07-28 13:26:46 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '8b4d72e982f34be7bd1601fbc365e309'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-28 13:26:46 --> 过程调用语句：  execute USP_APSOS_outorder '8b4d72e982f34be7bd1601fbc365e309'
ERROR - 2016-07-28 13:26:46 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-28 13:26:46 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-28 13:26:46 --> Total execution time: 0.1092
DEBUG - 2016-07-28 13:26:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683606
WHERE id = '8d87e7830c6763a8ce0f5c1c57bde6fd9e629c01'
DEBUG - 2016-07-28 13:26:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 13:26:46 --> Security Class Initialized
DEBUG - 2016-07-28 13:26:46 --> CRSF cookie Set
DEBUG - 2016-07-28 13:26:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 13:26:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8d87e7830c6763a8ce0f5c1c57bde6fd9e629c01'
DEBUG - 2016-07-28 13:26:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e7c6a7c5c0f443f08cf107cda5db314a', '114.91.137.232', '2016-07-28', '13:26:46', '120340234', '/admin/order/check/8b4d72e982f34be7bd1601fbc365e309', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '8d87e7830c6763a8ce0f5c1c57bde6fd9e629c01')
DEBUG - 2016-07-28 13:26:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:26:46 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8b4d72e982f34be7bd1601fbc365e309' order by create_date_time desc
DEBUG - 2016-07-28 13:26:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 13:26:46 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8b4d72e982f34be7bd1601fbc365e309'    order by t1.lno asc
        
DEBUG - 2016-07-28 13:26:46 --> Total execution time: 0.1092
DEBUG - 2016-07-28 13:26:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469683606
WHERE id = '8d87e7830c6763a8ce0f5c1c57bde6fd9e629c01'
DEBUG - 2016-07-28 14:44:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 14:44:35 --> Security Class Initialized
DEBUG - 2016-07-28 14:44:35 --> CRSF cookie Set
DEBUG - 2016-07-28 14:44:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 14:44:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8d87e7830c6763a8ce0f5c1c57bde6fd9e629c01'
DEBUG - 2016-07-28 14:44:36 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '8d87e7830c6763a8ce0f5c1c57bde6fd9e629c01'
DEBUG - 2016-07-28 14:44:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4434413efe0e4e18ada20377a77aaca0', '114.91.137.232', '2016-07-28', '14:44:36', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '84c38f6b912dc61a234ea3bdaf942449eef229fe')
DEBUG - 2016-07-28 14:44:36 --> 查询待审核订单
DEBUG - 2016-07-28 14:44:36 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 14:44:36 --> Total execution time: 0.4620
DEBUG - 2016-07-28 14:44:36 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('84c38f6b912dc61a234ea3bdaf942449eef229fe', '114.91.137.232', 1469688276, '__ci_last_regenerate|i:1469688276;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-28 14:44:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 14:44:38 --> Security Class Initialized
DEBUG - 2016-07-28 14:44:38 --> CRSF cookie Set
DEBUG - 2016-07-28 14:44:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 14:44:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '84c38f6b912dc61a234ea3bdaf942449eef229fe'
DEBUG - 2016-07-28 14:44:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c225a032de8745cfb6f1383aed415b4d', '114.91.137.232', '2016-07-28', '14:44:38', '120340234', '/admin/order/check/8b4d72e982f34be7bd1601fbc365e309', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '84c38f6b912dc61a234ea3bdaf942449eef229fe')
DEBUG - 2016-07-28 14:44:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 14:44:38 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8b4d72e982f34be7bd1601fbc365e309' order by create_date_time desc
DEBUG - 2016-07-28 14:44:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 14:44:38 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8b4d72e982f34be7bd1601fbc365e309'    order by t1.lno asc
        
DEBUG - 2016-07-28 14:44:38 --> Total execution time: 0.4660
DEBUG - 2016-07-28 14:44:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469688278
WHERE id = '84c38f6b912dc61a234ea3bdaf942449eef229fe'
DEBUG - 2016-07-28 14:44:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 14:44:42 --> Security Class Initialized
DEBUG - 2016-07-28 14:44:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 14:44:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '84c38f6b912dc61a234ea3bdaf942449eef229fe'
DEBUG - 2016-07-28 14:44:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4432746429ad443c8bb43c335be56323', '114.91.137.232', '2016-07-28', '14:44:42', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '84c38f6b912dc61a234ea3bdaf942449eef229fe')
DEBUG - 2016-07-28 14:44:42 --> 审核订单
DEBUG - 2016-07-28 14:44:42 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '8b4d72e982f34be7bd1601fbc365e309'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-28 14:44:42 --> 过程调用语句：  execute USP_APSOS_outorder '8b4d72e982f34be7bd1601fbc365e309'
ERROR - 2016-07-28 14:44:43 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-28 14:44:43 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-28 14:44:43 --> Total execution time: 1.0471
DEBUG - 2016-07-28 14:44:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469688283
WHERE id = '84c38f6b912dc61a234ea3bdaf942449eef229fe'
DEBUG - 2016-07-28 14:44:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 14:44:43 --> Security Class Initialized
DEBUG - 2016-07-28 14:44:43 --> CRSF cookie Set
DEBUG - 2016-07-28 14:44:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 14:44:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '84c38f6b912dc61a234ea3bdaf942449eef229fe'
DEBUG - 2016-07-28 14:44:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1cb5a758caf54f89ae154436cf363647', '114.91.137.232', '2016-07-28', '14:44:43', '120340234', '/admin/order/check/8b4d72e982f34be7bd1601fbc365e309', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '84c38f6b912dc61a234ea3bdaf942449eef229fe')
DEBUG - 2016-07-28 14:44:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 14:44:43 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8b4d72e982f34be7bd1601fbc365e309' order by create_date_time desc
DEBUG - 2016-07-28 14:44:43 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8b4d72e982f34be7bd1601fbc365e309'
DEBUG - 2016-07-28 14:44:43 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8b4d72e982f34be7bd1601fbc365e309'    order by t1.lno asc
        
DEBUG - 2016-07-28 14:44:43 --> Total execution time: 0.1290
DEBUG - 2016-07-28 14:44:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469688283
WHERE id = '84c38f6b912dc61a234ea3bdaf942449eef229fe'
DEBUG - 2016-07-28 15:00:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-28 15:00:03 --> Security Class Initialized
DEBUG - 2016-07-28 15:00:03 --> CRSF cookie Set
DEBUG - 2016-07-28 15:00:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-28 15:00:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '84c38f6b912dc61a234ea3bdaf942449eef229fe'
DEBUG - 2016-07-28 15:00:03 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '84c38f6b912dc61a234ea3bdaf942449eef229fe'
DEBUG - 2016-07-28 15:00:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c98866499b15408e9274fb0640845a93', '114.91.137.232', '2016-07-28', '15:00:03', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '293cc36ffd94bfaeee73d81ed89e8712822604d8')
DEBUG - 2016-07-28 15:00:03 --> 查询待审核订单
DEBUG - 2016-07-28 15:00:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-28 15:00:03 --> Total execution time: 0.1850
DEBUG - 2016-07-28 15:00:03 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('293cc36ffd94bfaeee73d81ed89e8712822604d8', '114.91.137.232', 1469689203, '__ci_last_regenerate|i:1469689203;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
