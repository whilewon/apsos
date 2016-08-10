<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-21 10:55:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:55:57 --> CRSF cookie Set
DEBUG - 2016-07-21 10:55:57 --> Security Class Initialized
DEBUG - 2016-07-21 10:55:57 --> CRSF cookie Set
DEBUG - 2016-07-21 10:55:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:55:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8a1958d2769f65225d5d0d75de01ac85ea666869'
DEBUG - 2016-07-21 10:55:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8a1958d2769f65225d5d0d75de01ac85ea666869', '114.91.129.78', 1469069757, '__ci_last_regenerate|i:1469069757;')
DEBUG - 2016-07-21 10:55:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:55:57 --> Security Class Initialized
DEBUG - 2016-07-21 10:55:57 --> CRSF cookie Set
DEBUG - 2016-07-21 10:55:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:55:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8a1958d2769f65225d5d0d75de01ac85ea666869'
DEBUG - 2016-07-21 10:55:57 --> Total execution time: 0.2100
DEBUG - 2016-07-21 10:55:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469069757
WHERE id = '8a1958d2769f65225d5d0d75de01ac85ea666869'
DEBUG - 2016-07-21 10:56:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:56:04 --> Security Class Initialized
DEBUG - 2016-07-21 10:56:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:56:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8a1958d2769f65225d5d0d75de01ac85ea666869'
DEBUG - 2016-07-21 10:56:04 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-21 10:56:04 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-21 10:56:04 --> 登录返回结果数：1
DEBUG - 2016-07-21 10:56:04 --> 成功登录
DEBUG - 2016-07-21 10:56:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469069764, data = '__ci_last_regenerate|i:1469069757;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '8a1958d2769f65225d5d0d75de01ac85ea666869'
DEBUG - 2016-07-21 10:56:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:56:05 --> Security Class Initialized
DEBUG - 2016-07-21 10:56:05 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:56:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8a1958d2769f65225d5d0d75de01ac85ea666869'
DEBUG - 2016-07-21 10:56:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e8a870b425504b32a8eb70a061b648f9', '114.91.129.78', '2016-07-21', '10:56:05', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '8a1958d2769f65225d5d0d75de01ac85ea666869')
DEBUG - 2016-07-21 10:56:05 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-21 10:56:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:56:05 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:05 --> Security Class Initialized
DEBUG - 2016-07-21 10:56:05 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:56:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '737feea40a7e77a0c2278a1bcda70cd7bebd2096'
DEBUG - 2016-07-21 10:56:05 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-21 10:56:05 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-21 10:56:05 --> 登录返回结果数：0
DEBUG - 2016-07-21 10:56:05 --> Total execution time: 0.0710
DEBUG - 2016-07-21 10:56:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('737feea40a7e77a0c2278a1bcda70cd7bebd2096', '180.153.214.199', 1469069765, '__ci_last_regenerate|i:1469069765;')
DEBUG - 2016-07-21 10:56:05 --> Total execution time: 0.2540
DEBUG - 2016-07-21 10:56:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469069765
WHERE id = '8a1958d2769f65225d5d0d75de01ac85ea666869'
DEBUG - 2016-07-21 10:56:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:56:05 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:05 --> Security Class Initialized
DEBUG - 2016-07-21 10:56:05 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:56:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c9c9f635eeb7f38b2856e02b34e326c28d8f3013'
DEBUG - 2016-07-21 10:56:05 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-21 10:56:05 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-21 10:56:05 --> 登录返回结果数：0
DEBUG - 2016-07-21 10:56:05 --> Total execution time: 0.0950
DEBUG - 2016-07-21 10:56:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c9c9f635eeb7f38b2856e02b34e326c28d8f3013', '180.153.214.190', 1469069765, '__ci_last_regenerate|i:1469069765;')
DEBUG - 2016-07-21 10:56:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:56:09 --> Security Class Initialized
DEBUG - 2016-07-21 10:56:09 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:56:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8a1958d2769f65225d5d0d75de01ac85ea666869'
DEBUG - 2016-07-21 10:56:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('128383bcaa2545c29043e8ddf01350f9', '114.91.129.78', '2016-07-21', '10:56:09', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '8a1958d2769f65225d5d0d75de01ac85ea666869')
DEBUG - 2016-07-21 10:56:09 --> 查询订单
DEBUG - 2016-07-21 10:56:09 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-21 10:56:09 --> Total execution time: 0.2790
DEBUG - 2016-07-21 10:56:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469069769
WHERE id = '8a1958d2769f65225d5d0d75de01ac85ea666869'
DEBUG - 2016-07-21 10:56:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:56:10 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:10 --> Security Class Initialized
DEBUG - 2016-07-21 10:56:10 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:56:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:56:10 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:10 --> Security Class Initialized
DEBUG - 2016-07-21 10:56:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ab6cc370e40eac68031099fca8c1dc82aab77957'
DEBUG - 2016-07-21 10:56:10 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:56:10 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ab6cc370e40eac68031099fca8c1dc82aab77957', '180.153.206.25', 1469069770, '__ci_last_regenerate|i:1469069770;')
DEBUG - 2016-07-21 10:56:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '82f9227b263e5a7cfe6c9fbb8454ca1d352eab90'
DEBUG - 2016-07-21 10:56:10 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('82f9227b263e5a7cfe6c9fbb8454ca1d352eab90', '112.64.235.89', 1469069770, '__ci_last_regenerate|i:1469069770;')
DEBUG - 2016-07-21 10:56:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:56:10 --> Security Class Initialized
DEBUG - 2016-07-21 10:56:10 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:56:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ab6cc370e40eac68031099fca8c1dc82aab77957'
DEBUG - 2016-07-21 10:56:10 --> Total execution time: 0.0770
DEBUG - 2016-07-21 10:56:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469069770
WHERE id = 'ab6cc370e40eac68031099fca8c1dc82aab77957'
DEBUG - 2016-07-21 10:56:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:56:17 --> Security Class Initialized
DEBUG - 2016-07-21 10:56:17 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:56:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8a1958d2769f65225d5d0d75de01ac85ea666869'
DEBUG - 2016-07-21 10:56:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b25ccc6a19fd4c339566c5f7180fd166', '114.91.129.78', '2016-07-21', '10:56:17', '120340234', '/admin/order/index/7d4b5e6ee61a4c2a817db045dcc9b806', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '8a1958d2769f65225d5d0d75de01ac85ea666869')
DEBUG - 2016-07-21 10:56:17 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-07-21 10:56:17 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7d4b5e6ee61a4c2a817db045dcc9b806' order by create_date_time desc
DEBUG - 2016-07-21 10:56:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:56:17 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:17 --> Security Class Initialized
DEBUG - 2016-07-21 10:56:17 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:56:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:56:17 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:17 --> Security Class Initialized
DEBUG - 2016-07-21 10:56:17 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:56:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f43511566499bc979da2ad2a08c89932a8f37c46'
DEBUG - 2016-07-21 10:56:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9a446bd079b73c513f5cedf503708f906fb55edb'
DEBUG - 2016-07-21 10:56:17 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f43511566499bc979da2ad2a08c89932a8f37c46', '180.153.214.200', 1469069777, '__ci_last_regenerate|i:1469069777;')
DEBUG - 2016-07-21 10:56:17 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7d4b5e6ee61a4c2a817db045dcc9b806'
DEBUG - 2016-07-21 10:56:17 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7d4b5e6ee61a4c2a817db045dcc9b806'    order by t1.lno asc
        
DEBUG - 2016-07-21 10:56:17 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9a446bd079b73c513f5cedf503708f906fb55edb', '180.153.163.187', 1469069777, '__ci_last_regenerate|i:1469069777;')
DEBUG - 2016-07-21 10:56:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 10:56:17 --> Security Class Initialized
DEBUG - 2016-07-21 10:56:17 --> CRSF cookie Set
DEBUG - 2016-07-21 10:56:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 10:56:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9a446bd079b73c513f5cedf503708f906fb55edb'
DEBUG - 2016-07-21 10:56:17 --> Total execution time: 0.1760
DEBUG - 2016-07-21 10:56:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469069777
WHERE id = '9a446bd079b73c513f5cedf503708f906fb55edb'
DEBUG - 2016-07-21 10:56:18 --> Total execution time: 0.6620
DEBUG - 2016-07-21 10:56:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469069778
WHERE id = '8a1958d2769f65225d5d0d75de01ac85ea666869'
DEBUG - 2016-07-21 11:03:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 11:03:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 11:03:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 11:03:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 11:03:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 11:03:15 --> No URI present. Default controller set.
DEBUG - 2016-07-21 11:03:15 --> CRSF cookie Set
DEBUG - 2016-07-21 11:03:15 --> Security Class Initialized
DEBUG - 2016-07-21 11:03:15 --> CRSF cookie Set
DEBUG - 2016-07-21 11:03:15 --> Security Class Initialized
DEBUG - 2016-07-21 11:03:15 --> CRSF cookie Set
DEBUG - 2016-07-21 11:03:15 --> Security Class Initialized
DEBUG - 2016-07-21 11:03:15 --> CRSF cookie Set
DEBUG - 2016-07-21 11:03:15 --> Security Class Initialized
DEBUG - 2016-07-21 11:03:15 --> CRSF cookie Set
DEBUG - 2016-07-21 11:03:15 --> Security Class Initialized
DEBUG - 2016-07-21 11:03:15 --> CRSF cookie Set
DEBUG - 2016-07-21 11:03:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 11:03:15 --> CRSF cookie Set
DEBUG - 2016-07-21 11:03:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 11:03:15 --> CRSF cookie Set
DEBUG - 2016-07-21 11:03:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 11:03:15 --> CRSF cookie Set
DEBUG - 2016-07-21 11:03:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 11:03:15 --> CRSF cookie Set
DEBUG - 2016-07-21 11:03:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 11:03:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '294c4653136f321ad9e6f69c9f0ffc1ac95704db'
DEBUG - 2016-07-21 11:03:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f8ceae0d899394759fad82539030276902118ac2'
DEBUG - 2016-07-21 11:03:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '98dee4b7f84e4e37ab3e758e97edbc0917c972cb'
DEBUG - 2016-07-21 11:03:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3b8c69547c6a5cbe9393afc2b403a80b51fe7b57'
DEBUG - 2016-07-21 11:03:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f74a752d3e581467eabf632f778418aeec4e3664'
DEBUG - 2016-07-21 11:03:16 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-21 11:03:16 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-21 11:03:16 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-21 11:03:16 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-21 11:03:16 --> 登录返回结果数：0
DEBUG - 2016-07-21 11:03:16 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-21 11:03:16 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-21 11:03:16 --> Total execution time: 0.9121
DEBUG - 2016-07-21 11:03:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f8ceae0d899394759fad82539030276902118ac2', '180.153.214.190', 1469070196, '__ci_last_regenerate|i:1469070196;')
DEBUG - 2016-07-21 11:03:16 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-21 11:03:16 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-21 11:03:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('294c4653136f321ad9e6f69c9f0ffc1ac95704db', '180.153.214.190', 1469070196, '__ci_last_regenerate|i:1469070196;')
DEBUG - 2016-07-21 11:03:16 --> 登录返回结果数：0
DEBUG - 2016-07-21 11:03:16 --> Total execution time: 0.9681
DEBUG - 2016-07-21 11:03:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f74a752d3e581467eabf632f778418aeec4e3664', '180.153.214.190', 1469070196, '__ci_last_regenerate|i:1469070196;')
DEBUG - 2016-07-21 11:03:16 --> 登录返回结果数：0
DEBUG - 2016-07-21 11:03:16 --> Total execution time: 0.9761
DEBUG - 2016-07-21 11:03:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('98dee4b7f84e4e37ab3e758e97edbc0917c972cb', '180.153.214.190', 1469070196, '__ci_last_regenerate|i:1469070196;')
DEBUG - 2016-07-21 11:03:16 --> 登录返回结果数：0
DEBUG - 2016-07-21 11:03:16 --> Total execution time: 0.9841
DEBUG - 2016-07-21 11:03:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3b8c69547c6a5cbe9393afc2b403a80b51fe7b57', '180.153.214.190', 1469070196, '__ci_last_regenerate|i:1469070196;')
DEBUG - 2016-07-21 13:26:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:26:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:26:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:26:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:26:58 --> CRSF cookie Set
DEBUG - 2016-07-21 13:26:58 --> CRSF cookie Set
DEBUG - 2016-07-21 13:26:58 --> Security Class Initialized
DEBUG - 2016-07-21 13:26:58 --> CRSF cookie Set
DEBUG - 2016-07-21 13:26:58 --> Security Class Initialized
DEBUG - 2016-07-21 13:26:58 --> CRSF cookie Set
DEBUG - 2016-07-21 13:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:26:58 --> CRSF cookie Set
DEBUG - 2016-07-21 13:26:58 --> Security Class Initialized
DEBUG - 2016-07-21 13:26:58 --> Security Class Initialized
DEBUG - 2016-07-21 13:26:58 --> CRSF cookie Set
DEBUG - 2016-07-21 13:26:58 --> CRSF cookie Set
DEBUG - 2016-07-21 13:26:58 --> CRSF cookie Set
DEBUG - 2016-07-21 13:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:26:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:26:58 --> CRSF cookie Set
DEBUG - 2016-07-21 13:26:58 --> Security Class Initialized
DEBUG - 2016-07-21 13:26:58 --> CRSF cookie Set
DEBUG - 2016-07-21 13:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:26:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:26:59 --> CRSF cookie Set
DEBUG - 2016-07-21 13:26:59 --> Security Class Initialized
DEBUG - 2016-07-21 13:26:59 --> CRSF cookie Set
DEBUG - 2016-07-21 13:26:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:27:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c66210dd480167ac1ed96cac81e87d9ddfe8fb2f'
DEBUG - 2016-07-21 13:27:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4b19b4f8338d88188ddf927fc37d85177ea38c79'
DEBUG - 2016-07-21 13:27:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:27:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5bf888d52a82513b503497bce9695f1826446f70'
DEBUG - 2016-07-21 13:27:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0f8a55f44eae6d81831b5856a3edf88d6542498e'
DEBUG - 2016-07-21 13:27:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4c3576fb9c4a69703609e410230aecb58bedd749'
DEBUG - 2016-07-21 13:27:00 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4b19b4f8338d88188ddf927fc37d85177ea38c79', '114.91.129.78', 1469078820, '__ci_last_regenerate|i:1469078820;')
DEBUG - 2016-07-21 13:27:00 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4c3576fb9c4a69703609e410230aecb58bedd749', '114.91.129.78', 1469078820, '__ci_last_regenerate|i:1469078820;')
DEBUG - 2016-07-21 13:27:00 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5bf888d52a82513b503497bce9695f1826446f70', '114.91.129.78', 1469078820, '__ci_last_regenerate|i:1469078820;')
DEBUG - 2016-07-21 13:27:00 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a2d06578c16e707bd88d5fd64f49e83912e0702b', '114.91.129.78', 1469078820, '__ci_last_regenerate|i:1469078820;')
DEBUG - 2016-07-21 13:27:00 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c66210dd480167ac1ed96cac81e87d9ddfe8fb2f', '101.226.33.217', 1469078820, '__ci_last_regenerate|i:1469078820;')
DEBUG - 2016-07-21 13:27:00 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0f8a55f44eae6d81831b5856a3edf88d6542498e', '112.64.235.247', 1469078820, '__ci_last_regenerate|i:1469078820;')
DEBUG - 2016-07-21 13:27:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:27:00 --> Security Class Initialized
DEBUG - 2016-07-21 13:27:00 --> CRSF cookie Set
DEBUG - 2016-07-21 13:27:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:27:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:27:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:27:01 --> Security Class Initialized
DEBUG - 2016-07-21 13:27:01 --> CRSF cookie Set
DEBUG - 2016-07-21 13:27:01 --> Total execution time: 0.3276
DEBUG - 2016-07-21 13:27:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:27:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469078821
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:27:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c66210dd480167ac1ed96cac81e87d9ddfe8fb2f'
DEBUG - 2016-07-21 13:27:01 --> Total execution time: 0.0936
DEBUG - 2016-07-21 13:27:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469078821
WHERE id = 'c66210dd480167ac1ed96cac81e87d9ddfe8fb2f'
DEBUG - 2016-07-21 13:27:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:27:09 --> Security Class Initialized
DEBUG - 2016-07-21 13:27:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:27:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:27:09 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-21 13:27:09 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-21 13:27:09 --> 登录返回结果数：1
DEBUG - 2016-07-21 13:27:09 --> 成功登录
DEBUG - 2016-07-21 13:27:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469078829, data = '__ci_last_regenerate|i:1469078820;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:27:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:27:09 --> Security Class Initialized
DEBUG - 2016-07-21 13:27:09 --> CRSF cookie Set
DEBUG - 2016-07-21 13:27:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:27:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:27:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b3f51e87877446d9852f6e70cbca66bb', '114.91.129.78', '2016-07-21', '13:27:09', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a2d06578c16e707bd88d5fd64f49e83912e0702b')
DEBUG - 2016-07-21 13:27:09 --> 查询待审核订单
DEBUG - 2016-07-21 13:27:09 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-21 13:27:09 --> Total execution time: 0.2808
DEBUG - 2016-07-21 13:27:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469078829
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:27:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:27:12 --> Security Class Initialized
DEBUG - 2016-07-21 13:27:12 --> CRSF cookie Set
DEBUG - 2016-07-21 13:27:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:27:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:27:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c467d51913174da2961118c1a4039363', '114.91.129.78', '2016-07-21', '13:27:12', '120340234', '/admin/order/check/a28d212fe138477a83ee28197850e74d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a2d06578c16e707bd88d5fd64f49e83912e0702b')
DEBUG - 2016-07-21 13:27:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a28d212fe138477a83ee28197850e74d'
DEBUG - 2016-07-21 13:27:12 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a28d212fe138477a83ee28197850e74d' order by create_date_time desc
DEBUG - 2016-07-21 13:27:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a28d212fe138477a83ee28197850e74d'
DEBUG - 2016-07-21 13:27:12 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a28d212fe138477a83ee28197850e74d'    order by t1.lno asc
        
DEBUG - 2016-07-21 13:27:12 --> Total execution time: 0.2340
DEBUG - 2016-07-21 13:27:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469078832
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:27:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:27:17 --> Security Class Initialized
DEBUG - 2016-07-21 13:27:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:27:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:27:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('80b4b882e7fe4e189ad39147145da5c9', '114.91.129.78', '2016-07-21', '13:27:17', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a2d06578c16e707bd88d5fd64f49e83912e0702b')
DEBUG - 2016-07-21 13:27:17 --> 审核订单
DEBUG - 2016-07-21 13:27:17 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'a28d212fe138477a83ee28197850e74d'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-21 13:27:17 --> 过程调用语句：  execute USP_APSOS_outorder 'a28d212fe138477a83ee28197850e74d'
ERROR - 2016-07-21 13:27:22 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-21 13:27:22 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-21 13:27:22 --> Total execution time: 5.5536
DEBUG - 2016-07-21 13:27:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469078842
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:27:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:27:22 --> Security Class Initialized
DEBUG - 2016-07-21 13:27:22 --> CRSF cookie Set
DEBUG - 2016-07-21 13:27:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:27:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:27:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ed2b9599f9f44e7ab149ece1acfb0208', '114.91.129.78', '2016-07-21', '13:27:22', '120340234', '/admin/order/check/a28d212fe138477a83ee28197850e74d', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a2d06578c16e707bd88d5fd64f49e83912e0702b')
DEBUG - 2016-07-21 13:27:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a28d212fe138477a83ee28197850e74d'
DEBUG - 2016-07-21 13:27:22 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='a28d212fe138477a83ee28197850e74d' order by create_date_time desc
DEBUG - 2016-07-21 13:27:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='a28d212fe138477a83ee28197850e74d'
DEBUG - 2016-07-21 13:27:22 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='a28d212fe138477a83ee28197850e74d'    order by t1.lno asc
        
DEBUG - 2016-07-21 13:27:23 --> Total execution time: 0.2496
DEBUG - 2016-07-21 13:27:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469078843
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:33:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:33:01 --> Security Class Initialized
DEBUG - 2016-07-21 13:33:01 --> CRSF cookie Set
DEBUG - 2016-07-21 13:33:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:33:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:33:01 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a2d06578c16e707bd88d5fd64f49e83912e0702b'
DEBUG - 2016-07-21 13:33:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ba4baa608508432c80f1dbed1cbf4e45', '114.91.129.78', '2016-07-21', '13:33:01', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'dcadd85dfcb2b1714b5aa7cda75aec9f93a4f8ce')
DEBUG - 2016-07-21 13:33:01 --> 查询待审核订单
DEBUG - 2016-07-21 13:33:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-21 13:33:01 --> Total execution time: 0.1872
DEBUG - 2016-07-21 13:33:01 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('dcadd85dfcb2b1714b5aa7cda75aec9f93a4f8ce', '114.91.129.78', 1469079181, '__ci_last_regenerate|i:1469079181;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-21 13:33:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:33:02 --> Security Class Initialized
DEBUG - 2016-07-21 13:33:02 --> CRSF cookie Set
DEBUG - 2016-07-21 13:33:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:33:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcadd85dfcb2b1714b5aa7cda75aec9f93a4f8ce'
DEBUG - 2016-07-21 13:33:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1e095bbf385747c79d51e799bdf9d37d', '114.91.129.78', '2016-07-21', '13:33:03', '120340234', '/admin/order/check/7be946e7f7a540c6b30efc451d71ae46', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'dcadd85dfcb2b1714b5aa7cda75aec9f93a4f8ce')
DEBUG - 2016-07-21 13:33:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7be946e7f7a540c6b30efc451d71ae46'
DEBUG - 2016-07-21 13:33:03 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7be946e7f7a540c6b30efc451d71ae46' order by create_date_time desc
DEBUG - 2016-07-21 13:33:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7be946e7f7a540c6b30efc451d71ae46'
DEBUG - 2016-07-21 13:33:03 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7be946e7f7a540c6b30efc451d71ae46'    order by t1.lno asc
        
DEBUG - 2016-07-21 13:33:03 --> Total execution time: 0.2184
DEBUG - 2016-07-21 13:33:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469079183
WHERE id = 'dcadd85dfcb2b1714b5aa7cda75aec9f93a4f8ce'
DEBUG - 2016-07-21 13:33:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:33:06 --> Security Class Initialized
DEBUG - 2016-07-21 13:33:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:33:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcadd85dfcb2b1714b5aa7cda75aec9f93a4f8ce'
DEBUG - 2016-07-21 13:33:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8f7fbfc2ceeb420da36207a293633ed8', '114.91.129.78', '2016-07-21', '13:33:06', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'dcadd85dfcb2b1714b5aa7cda75aec9f93a4f8ce')
DEBUG - 2016-07-21 13:33:06 --> 审核订单
DEBUG - 2016-07-21 13:33:06 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '7be946e7f7a540c6b30efc451d71ae46'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-21 13:33:06 --> 过程调用语句：  execute USP_APSOS_outorder '7be946e7f7a540c6b30efc451d71ae46'
ERROR - 2016-07-21 13:33:06 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-21 13:33:06 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-21 13:33:06 --> Total execution time: 0.3900
DEBUG - 2016-07-21 13:33:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469079186
WHERE id = 'dcadd85dfcb2b1714b5aa7cda75aec9f93a4f8ce'
DEBUG - 2016-07-21 13:33:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 13:33:06 --> Security Class Initialized
DEBUG - 2016-07-21 13:33:06 --> CRSF cookie Set
DEBUG - 2016-07-21 13:33:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 13:33:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcadd85dfcb2b1714b5aa7cda75aec9f93a4f8ce'
DEBUG - 2016-07-21 13:33:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9dd61864fbce4f80955bbdeb1ec54978', '114.91.129.78', '2016-07-21', '13:33:06', '120340234', '/admin/order/check/7be946e7f7a540c6b30efc451d71ae46', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'dcadd85dfcb2b1714b5aa7cda75aec9f93a4f8ce')
DEBUG - 2016-07-21 13:33:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7be946e7f7a540c6b30efc451d71ae46'
DEBUG - 2016-07-21 13:33:06 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7be946e7f7a540c6b30efc451d71ae46' order by create_date_time desc
DEBUG - 2016-07-21 13:33:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7be946e7f7a540c6b30efc451d71ae46'
DEBUG - 2016-07-21 13:33:06 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7be946e7f7a540c6b30efc451d71ae46'    order by t1.lno asc
        
DEBUG - 2016-07-21 13:33:06 --> Total execution time: 0.1404
DEBUG - 2016-07-21 13:33:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469079186
WHERE id = 'dcadd85dfcb2b1714b5aa7cda75aec9f93a4f8ce'
DEBUG - 2016-07-21 19:07:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:16 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:16 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:16 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:16 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:16 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:16 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:16 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:16 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:16 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:18 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:18 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:18 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:18 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:18 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:19 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:19 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:19 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:19 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:19 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:19 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:19 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '01a68e5eaf5afda3a427a0bd35c64b10ab71c082'
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f9a3d06d95e77b89e98a3bd6abbc22d0a0c13720'
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '165361cda270e4d729ef6a778b57bbdb06c75b23'
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5145c8e4acdc4e028a9a964aa415b22b91002e6'
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9d73560309fb95851e1b8f75461ded0d3010adf4'
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ec1504d35cae84462a5e6a10127d49057953bb2d'
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '44504b5da4267dad369f1087253fed7c45cd76be'
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9d73560309fb95851e1b8f75461ded0d3010adf4', '112.64.235.90', 1469099239, '__ci_last_regenerate|i:1469099239;')
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f9a3d06d95e77b89e98a3bd6abbc22d0a0c13720', '101.226.89.116', 1469099239, '__ci_last_regenerate|i:1469099239;')
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f5145c8e4acdc4e028a9a964aa415b22b91002e6', '119.147.146.194', 1469099239, '__ci_last_regenerate|i:1469099239;')
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ec1504d35cae84462a5e6a10127d49057953bb2d', '114.91.129.78', 1469099239, '__ci_last_regenerate|i:1469099239;')
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('165361cda270e4d729ef6a778b57bbdb06c75b23', '114.91.129.78', 1469099239, '__ci_last_regenerate|i:1469099239;')
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('44504b5da4267dad369f1087253fed7c45cd76be', '114.91.129.78', 1469099239, '__ci_last_regenerate|i:1469099239;')
DEBUG - 2016-07-21 19:07:19 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('01a68e5eaf5afda3a427a0bd35c64b10ab71c082', '114.91.129.78', 1469099239, '__ci_last_regenerate|i:1469099239;')
DEBUG - 2016-07-21 19:07:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:20 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:20 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:20 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:20 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:20 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:20 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5145c8e4acdc4e028a9a964aa415b22b91002e6'
DEBUG - 2016-07-21 19:07:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '165361cda270e4d729ef6a778b57bbdb06c75b23'
DEBUG - 2016-07-21 19:07:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9d73560309fb95851e1b8f75461ded0d3010adf4'
DEBUG - 2016-07-21 19:07:20 --> Total execution time: 0.2652
DEBUG - 2016-07-21 19:07:20 --> Total execution time: 0.4992
DEBUG - 2016-07-21 19:07:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469099240
WHERE id = 'f5145c8e4acdc4e028a9a964aa415b22b91002e6'
DEBUG - 2016-07-21 19:07:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469099240
WHERE id = '165361cda270e4d729ef6a778b57bbdb06c75b23'
DEBUG - 2016-07-21 19:07:20 --> Total execution time: 0.2808
DEBUG - 2016-07-21 19:07:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469099240
WHERE id = '9d73560309fb95851e1b8f75461ded0d3010adf4'
DEBUG - 2016-07-21 19:07:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:20 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:20 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f5145c8e4acdc4e028a9a964aa415b22b91002e6'
DEBUG - 2016-07-21 19:07:21 --> Total execution time: 0.0780
DEBUG - 2016-07-21 19:07:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469099241
WHERE id = 'f5145c8e4acdc4e028a9a964aa415b22b91002e6'
DEBUG - 2016-07-21 19:07:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:21 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:21 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-21 19:07:21 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-07-21 19:07:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:28 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '165361cda270e4d729ef6a778b57bbdb06c75b23'
DEBUG - 2016-07-21 19:07:29 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-21 19:07:29 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-21 19:07:29 --> 登录返回结果数：1
DEBUG - 2016-07-21 19:07:29 --> 成功登录
DEBUG - 2016-07-21 19:07:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469099249, data = '__ci_last_regenerate|i:1469099239;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '165361cda270e4d729ef6a778b57bbdb06c75b23'
DEBUG - 2016-07-21 19:07:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:29 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:29 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '165361cda270e4d729ef6a778b57bbdb06c75b23'
DEBUG - 2016-07-21 19:07:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f8ac7856362f4788a7cea36cbf802f3f', '114.91.129.78', '2016-07-21', '19:07:29', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '165361cda270e4d729ef6a778b57bbdb06c75b23')
DEBUG - 2016-07-21 19:07:29 --> 查询待审核订单
DEBUG - 2016-07-21 19:07:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-21 19:07:29 --> Total execution time: 0.2808
DEBUG - 2016-07-21 19:07:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469099249
WHERE id = '165361cda270e4d729ef6a778b57bbdb06c75b23'
DEBUG - 2016-07-21 19:07:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-21 19:07:32 --> Security Class Initialized
DEBUG - 2016-07-21 19:07:32 --> CRSF cookie Set
DEBUG - 2016-07-21 19:07:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-21 19:07:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '165361cda270e4d729ef6a778b57bbdb06c75b23'
DEBUG - 2016-07-21 19:07:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c5863777f5ef43159be6666cc5dd4c45', '114.91.129.78', '2016-07-21', '19:07:32', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '165361cda270e4d729ef6a778b57bbdb06c75b23')
DEBUG - 2016-07-21 19:07:32 --> 查询待审核订单
DEBUG - 2016-07-21 19:07:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-21 19:07:32 --> Total execution time: 0.1092
DEBUG - 2016-07-21 19:07:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469099252
WHERE id = '165361cda270e4d729ef6a778b57bbdb06c75b23'
