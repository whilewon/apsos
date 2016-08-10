<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-02 08:50:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 08:50:37 --> CRSF cookie Set
DEBUG - 2016-07-02 08:50:37 --> Security Class Initialized
DEBUG - 2016-07-02 08:50:37 --> CRSF cookie Set
DEBUG - 2016-07-02 08:50:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 08:50:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:50:37 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('41c3ac2299a44c9a3fd2f78250ca3e6f052a0989', '114.111.166.13', 1467420637, '__ci_last_regenerate|i:1467420637;')
DEBUG - 2016-07-02 08:50:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 08:50:38 --> Security Class Initialized
DEBUG - 2016-07-02 08:50:38 --> CRSF cookie Set
DEBUG - 2016-07-02 08:50:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 08:50:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:50:38 --> Total execution time: 0.0624
DEBUG - 2016-07-02 08:50:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467420638
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:51:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 08:51:35 --> Security Class Initialized
DEBUG - 2016-07-02 08:51:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 08:51:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:51:35 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-02 08:51:35 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-02 08:51:35 --> 登录返回结果数：1
DEBUG - 2016-07-02 08:51:35 --> 成功登录
DEBUG - 2016-07-02 08:51:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467420695, data = '__ci_last_regenerate|i:1467420637;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:51:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 08:51:35 --> Security Class Initialized
DEBUG - 2016-07-02 08:51:35 --> CRSF cookie Set
DEBUG - 2016-07-02 08:51:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 08:51:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:51:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2e32a4d4484a4d17a65677c11f31b55a', '114.111.166.13', '2016-07-02', '08:51:35', '120340234', '/admin/order/index', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989')
DEBUG - 2016-07-02 08:51:35 --> 查询订单
DEBUG - 2016-07-02 08:51:35 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-02 08:51:35 --> Total execution time: 0.1560
DEBUG - 2016-07-02 08:51:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467420695
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:51:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 08:51:41 --> Security Class Initialized
DEBUG - 2016-07-02 08:51:41 --> CRSF cookie Set
DEBUG - 2016-07-02 08:51:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 08:51:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:51:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2e0a29bb894b4425bf38e1ee9ddc705b', '114.111.166.13', '2016-07-02', '08:51:41', '120340234', '/admin/guest', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989')
DEBUG - 2016-07-02 08:51:41 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-02 08:51:41 --> Total execution time: 0.1404
DEBUG - 2016-07-02 08:51:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467420701
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:51:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 08:51:59 --> Security Class Initialized
DEBUG - 2016-07-02 08:51:59 --> CRSF cookie Set
DEBUG - 2016-07-02 08:51:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 08:51:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:51:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8d903c4b127549ea8a9481bbbf4b0faf', '114.111.166.13', '2016-07-02', '08:51:59', '120340234', '/admin/guest/edit/K05034', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989')
DEBUG - 2016-07-02 08:51:59 --> 修改客户信息：K05034
DEBUG - 2016-07-02 08:51:59 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05034' 
DEBUG - 2016-07-02 08:51:59 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05034' 
DEBUG - 2016-07-02 08:51:59 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-02 08:51:59 --> Total execution time: 0.0936
DEBUG - 2016-07-02 08:51:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467420719
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:52:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 08:52:05 --> Security Class Initialized
DEBUG - 2016-07-02 08:52:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 08:52:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:52:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('375406fc2e214417b4892960173f21ae', '114.111.166.13', '2016-07-02', '08:52:05', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989')
DEBUG - 2016-07-02 08:52:05 --> 保存客户信息
DEBUG - 2016-07-02 08:52:05 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05034', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05034'
DEBUG - 2016-07-02 08:52:05 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-02 08:52:05 --> Total execution time: 0.0936
DEBUG - 2016-07-02 08:52:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467420725
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:52:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 08:52:12 --> Security Class Initialized
DEBUG - 2016-07-02 08:52:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 08:52:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:52:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('174a0260c080471184e80463fd4e1df8', '114.111.166.13', '2016-07-02', '08:52:12', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989')
DEBUG - 2016-07-02 08:52:12 --> 保存客户信息
DEBUG - 2016-07-02 08:52:12 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05034', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05034'
DEBUG - 2016-07-02 08:52:12 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-02 08:52:12 --> Total execution time: 0.0780
DEBUG - 2016-07-02 08:52:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467420732
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:52:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 08:52:15 --> Security Class Initialized
DEBUG - 2016-07-02 08:52:15 --> CRSF cookie Set
DEBUG - 2016-07-02 08:52:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 08:52:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:52:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('122963c6c5f3464aa85393e7d0b58100', '114.111.166.13', '2016-07-02', '08:52:15', '120340234', '/admin/guest', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989')
DEBUG - 2016-07-02 08:52:15 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-02 08:52:15 --> Total execution time: 0.0936
DEBUG - 2016-07-02 08:52:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467420735
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:53:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 08:53:44 --> Security Class Initialized
DEBUG - 2016-07-02 08:53:44 --> CRSF cookie Set
DEBUG - 2016-07-02 08:53:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 08:53:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:53:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c4e78324d10d405e9f2b3e96beb1d199', '114.111.166.13', '2016-07-02', '08:53:44', '120340234', '/admin/guest/edit/K05034', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989')
DEBUG - 2016-07-02 08:53:44 --> 修改客户信息：K05034
DEBUG - 2016-07-02 08:53:44 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05034' 
DEBUG - 2016-07-02 08:53:44 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05034' 
DEBUG - 2016-07-02 08:53:44 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-02 08:53:44 --> Total execution time: 0.0780
DEBUG - 2016-07-02 08:53:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467420824
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:53:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 08:53:46 --> Security Class Initialized
DEBUG - 2016-07-02 08:53:46 --> CRSF cookie Set
DEBUG - 2016-07-02 08:53:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 08:53:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:53:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cd5a4ce925564cfbad5bb8118ebd5210', '114.111.166.13', '2016-07-02', '08:53:46', '120340234', '/admin/guest', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989')
DEBUG - 2016-07-02 08:53:46 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-02 08:53:46 --> Total execution time: 0.0936
DEBUG - 2016-07-02 08:53:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467420826
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:53:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 08:53:54 --> Security Class Initialized
DEBUG - 2016-07-02 08:53:54 --> CRSF cookie Set
DEBUG - 2016-07-02 08:53:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 08:53:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 08:53:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0186a52b34cc4fd892663ce3af45d92d', '114.111.166.13', '2016-07-02', '08:53:54', '120340234', '/admin/order/index', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989')
DEBUG - 2016-07-02 08:53:54 --> 查询订单
DEBUG - 2016-07-02 08:53:54 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-02 08:53:54 --> Total execution time: 0.0780
DEBUG - 2016-07-02 08:53:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467420834
WHERE id = '41c3ac2299a44c9a3fd2f78250ca3e6f052a0989'
DEBUG - 2016-07-02 21:43:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 21:43:24 --> CRSF cookie Set
DEBUG - 2016-07-02 21:43:24 --> Security Class Initialized
DEBUG - 2016-07-02 21:43:24 --> CRSF cookie Set
DEBUG - 2016-07-02 21:43:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 21:43:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '633c2b95bd14770a783bfc005f2b9a5a1b8ea5ca'
DEBUG - 2016-07-02 21:43:24 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('633c2b95bd14770a783bfc005f2b9a5a1b8ea5ca', '114.111.166.13', 1467467004, '__ci_last_regenerate|i:1467467004;')
DEBUG - 2016-07-02 21:43:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-02 21:43:24 --> Security Class Initialized
DEBUG - 2016-07-02 21:43:24 --> CRSF cookie Set
DEBUG - 2016-07-02 21:43:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-02 21:43:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '633c2b95bd14770a783bfc005f2b9a5a1b8ea5ca'
DEBUG - 2016-07-02 21:43:24 --> Total execution time: 0.0624
DEBUG - 2016-07-02 21:43:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467467004
WHERE id = '633c2b95bd14770a783bfc005f2b9a5a1b8ea5ca'
