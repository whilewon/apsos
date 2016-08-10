<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-30 09:54:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:54:14 --> No URI present. Default controller set.
DEBUG - 2016-06-30 09:54:14 --> CRSF cookie Set
DEBUG - 2016-06-30 09:54:14 --> Security Class Initialized
DEBUG - 2016-06-30 09:54:14 --> CRSF cookie Set
DEBUG - 2016-06-30 09:54:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:54:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:54:15 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5fd4b3bf86224b326654e310eecd3fceb7b3b73d', '61.129.119.106', 1467251655, '__ci_last_regenerate|i:1467251655;')
DEBUG - 2016-06-30 09:54:16 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:54:16 --> Security Class Initialized
DEBUG - 2016-06-30 09:54:16 --> CRSF cookie Set
DEBUG - 2016-06-30 09:54:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:54:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:54:17 --> Total execution time: 0.3934
DEBUG - 2016-06-30 09:54:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467251657
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:54:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:54:54 --> Security Class Initialized
DEBUG - 2016-06-30 09:54:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:54:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:54:54 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-06-30 09:54:54 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-06-30 09:54:55 --> 登录返回结果数：1
DEBUG - 2016-06-30 09:54:55 --> 成功登录
DEBUG - 2016-06-30 09:54:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467251695, data = '__ci_last_regenerate|i:1467251655;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:54:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:54:55 --> No URI present. Default controller set.
DEBUG - 2016-06-30 09:54:55 --> Security Class Initialized
DEBUG - 2016-06-30 09:54:55 --> CRSF cookie Set
DEBUG - 2016-06-30 09:54:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:54:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:54:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0fa43121b45645f1b072e466035c0a2d', '61.129.119.106', '2016-06-30', '09:54:55', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '5fd4b3bf86224b326654e310eecd3fceb7b3b73d')
DEBUG - 2016-06-30 09:54:55 --> Total execution time: 0.2440
DEBUG - 2016-06-30 09:54:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467251695
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:55:08 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:55:08 --> Security Class Initialized
DEBUG - 2016-06-30 09:55:08 --> CRSF cookie Set
DEBUG - 2016-06-30 09:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:55:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:55:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e9672cdcf47a45399a033be0fc761894', '61.129.119.106', '2016-06-30', '09:55:08', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '5fd4b3bf86224b326654e310eecd3fceb7b3b73d')
DEBUG - 2016-06-30 09:55:08 --> 查询订单
DEBUG - 2016-06-30 09:55:08 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-30 09:55:08 --> Total execution time: 0.3950
DEBUG - 2016-06-30 09:55:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467251708
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:55:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:55:20 --> Security Class Initialized
DEBUG - 2016-06-30 09:55:20 --> CRSF cookie Set
DEBUG - 2016-06-30 09:55:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:55:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:55:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b6a34ea4d6374399b3b0ed2a977abff8', '61.129.119.106', '2016-06-30', '09:55:20', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '5fd4b3bf86224b326654e310eecd3fceb7b3b73d')
DEBUG - 2016-06-30 09:55:20 --> 查询待审核订单
DEBUG - 2016-06-30 09:55:20 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-30 09:55:20 --> Total execution time: 0.2340
DEBUG - 2016-06-30 09:55:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467251720
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:55:37 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:55:37 --> Security Class Initialized
DEBUG - 2016-06-30 09:55:37 --> CRSF cookie Set
DEBUG - 2016-06-30 09:55:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:55:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:55:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('859410c5f6eb407481a711b0b166e3c1', '61.129.119.106', '2016-06-30', '09:55:37', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '5fd4b3bf86224b326654e310eecd3fceb7b3b73d')
DEBUG - 2016-06-30 09:55:37 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-30 09:55:38 --> Total execution time: 0.1092
DEBUG - 2016-06-30 09:55:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467251738
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:55:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:55:42 --> Security Class Initialized
DEBUG - 2016-06-30 09:55:42 --> CRSF cookie Set
DEBUG - 2016-06-30 09:55:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:55:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:55:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9bdbec6636f34cfd8c847762cd576a6b', '61.129.119.106', '2016-06-30', '09:55:42', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '5fd4b3bf86224b326654e310eecd3fceb7b3b73d')
DEBUG - 2016-06-30 09:55:42 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-30 09:55:42 --> Total execution time: 0.2086
DEBUG - 2016-06-30 09:55:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467251742
WHERE id = '5fd4b3bf86224b326654e310eecd3fceb7b3b73d'
DEBUG - 2016-06-30 09:57:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:57:04 --> No URI present. Default controller set.
DEBUG - 2016-06-30 09:57:04 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:04 --> Security Class Initialized
DEBUG - 2016-06-30 09:57:04 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:57:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:57:04 --> No URI present. Default controller set.
DEBUG - 2016-06-30 09:57:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '40948074ad60ec7442ced6128f6cd314b67d2a37'
DEBUG - 2016-06-30 09:57:04 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:04 --> Security Class Initialized
DEBUG - 2016-06-30 09:57:04 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:04 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('40948074ad60ec7442ced6128f6cd314b67d2a37', '180.153.214.180', 1467251824, '__ci_last_regenerate|i:1467251824;')
DEBUG - 2016-06-30 09:57:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:57:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6c8f4b426dbdaac79d1881fabeea3c0ae747c435'
DEBUG - 2016-06-30 09:57:04 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6c8f4b426dbdaac79d1881fabeea3c0ae747c435', '113.108.21.69', 1467251824, '__ci_last_regenerate|i:1467251824;')
DEBUG - 2016-06-30 09:57:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:57:04 --> Security Class Initialized
DEBUG - 2016-06-30 09:57:04 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:57:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '40948074ad60ec7442ced6128f6cd314b67d2a37'
DEBUG - 2016-06-30 09:57:04 --> Total execution time: 0.0780
DEBUG - 2016-06-30 09:57:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467251824
WHERE id = '40948074ad60ec7442ced6128f6cd314b67d2a37'
DEBUG - 2016-06-30 09:57:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:57:04 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:04 --> Security Class Initialized
DEBUG - 2016-06-30 09:57:04 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:57:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e1dc61bdb3e151f7944176a2be92ae37a64cf749'
DEBUG - 2016-06-30 09:57:04 --> Total execution time: 0.0624
DEBUG - 2016-06-30 09:57:04 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e1dc61bdb3e151f7944176a2be92ae37a64cf749', '113.108.21.69', 1467251824, '__ci_last_regenerate|i:1467251824;')
DEBUG - 2016-06-30 09:57:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:57:04 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:04 --> Security Class Initialized
DEBUG - 2016-06-30 09:57:05 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:57:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'df171722a141a169f7a979e74db6fd109399a82f'
DEBUG - 2016-06-30 09:57:05 --> Total execution time: 0.0936
DEBUG - 2016-06-30 09:57:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('df171722a141a169f7a979e74db6fd109399a82f', '112.64.235.91', 1467251825, '__ci_last_regenerate|i:1467251825;')
DEBUG - 2016-06-30 09:57:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:57:05 --> No URI present. Default controller set.
DEBUG - 2016-06-30 09:57:05 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:05 --> Security Class Initialized
DEBUG - 2016-06-30 09:57:05 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:57:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7b54c7ea05ba6d5a2c953c0c3f853ab7588d84d5'
DEBUG - 2016-06-30 09:57:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7b54c7ea05ba6d5a2c953c0c3f853ab7588d84d5', '101.226.33.224', 1467251825, '__ci_last_regenerate|i:1467251825;')
DEBUG - 2016-06-30 09:57:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:57:05 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:05 --> Security Class Initialized
DEBUG - 2016-06-30 09:57:05 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:57:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '776cd8061da4d1c28a3280f3218664d5bdaa655f'
DEBUG - 2016-06-30 09:57:05 --> Total execution time: 0.0780
DEBUG - 2016-06-30 09:57:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('776cd8061da4d1c28a3280f3218664d5bdaa655f', '101.226.64.174', 1467251825, '__ci_last_regenerate|i:1467251825;')
DEBUG - 2016-06-30 09:57:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:57:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:57:05 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:05 --> Security Class Initialized
DEBUG - 2016-06-30 09:57:05 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:57:05 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:05 --> Security Class Initialized
DEBUG - 2016-06-30 09:57:05 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:57:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:57:05 --> No URI present. Default controller set.
DEBUG - 2016-06-30 09:57:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0fb9fe206e2de3dc91c1d616af6a24f4a1904001'
DEBUG - 2016-06-30 09:57:05 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:05 --> Security Class Initialized
DEBUG - 2016-06-30 09:57:05 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:57:05 --> Total execution time: 0.1092
DEBUG - 2016-06-30 09:57:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0fb9fe206e2de3dc91c1d616af6a24f4a1904001', '101.226.66.173', 1467251825, '__ci_last_regenerate|i:1467251825;')
DEBUG - 2016-06-30 09:57:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'adc8d1d0ac193b7f7095d2a62bafbbb3b7cec9ca'
DEBUG - 2016-06-30 09:57:05 --> Total execution time: 0.1248
DEBUG - 2016-06-30 09:57:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('adc8d1d0ac193b7f7095d2a62bafbbb3b7cec9ca', '180.153.214.181', 1467251825, '__ci_last_regenerate|i:1467251825;')
DEBUG - 2016-06-30 09:57:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '864cb61af0811af7e4ef744b6e10e2478a2a77ad'
DEBUG - 2016-06-30 09:57:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('864cb61af0811af7e4ef744b6e10e2478a2a77ad', '101.226.65.105', 1467251825, '__ci_last_regenerate|i:1467251825;')
DEBUG - 2016-06-30 09:57:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:57:06 --> No URI present. Default controller set.
DEBUG - 2016-06-30 09:57:06 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:06 --> Security Class Initialized
DEBUG - 2016-06-30 09:57:06 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:57:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:57:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '233b7fa83c4324af472333ccf2d1bc8056c04188'
DEBUG - 2016-06-30 09:57:06 --> Security Class Initialized
DEBUG - 2016-06-30 09:57:06 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:57:06 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('233b7fa83c4324af472333ccf2d1bc8056c04188', '180.153.206.19', 1467251826, '__ci_last_regenerate|i:1467251826;')
DEBUG - 2016-06-30 09:57:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '864cb61af0811af7e4ef744b6e10e2478a2a77ad'
DEBUG - 2016-06-30 09:57:06 --> Total execution time: 0.0780
DEBUG - 2016-06-30 09:57:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467251826
WHERE id = '864cb61af0811af7e4ef744b6e10e2478a2a77ad'
DEBUG - 2016-06-30 09:57:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 09:57:07 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:07 --> Security Class Initialized
DEBUG - 2016-06-30 09:57:07 --> CRSF cookie Set
DEBUG - 2016-06-30 09:57:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 09:57:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '87aafb49b985133b7468de91b3036a9e163a18c0'
DEBUG - 2016-06-30 09:57:07 --> Total execution time: 0.0780
DEBUG - 2016-06-30 09:57:07 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('87aafb49b985133b7468de91b3036a9e163a18c0', '112.64.235.247', 1467251827, '__ci_last_regenerate|i:1467251827;')
DEBUG - 2016-06-30 10:00:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 10:00:06 --> No URI present. Default controller set.
DEBUG - 2016-06-30 10:00:06 --> CRSF cookie Set
DEBUG - 2016-06-30 10:00:06 --> Security Class Initialized
DEBUG - 2016-06-30 10:00:06 --> CRSF cookie Set
DEBUG - 2016-06-30 10:00:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 10:00:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2d6a88488a546ed018cf1c33bc28c490d5b969dd'
DEBUG - 2016-06-30 10:00:06 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2d6a88488a546ed018cf1c33bc28c490d5b969dd', '119.147.146.189', 1467252006, '__ci_last_regenerate|i:1467252006;')
DEBUG - 2016-06-30 10:00:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 10:00:06 --> Security Class Initialized
DEBUG - 2016-06-30 10:00:06 --> CRSF cookie Set
DEBUG - 2016-06-30 10:00:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 10:00:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2d6a88488a546ed018cf1c33bc28c490d5b969dd'
DEBUG - 2016-06-30 10:00:06 --> Total execution time: 0.0780
DEBUG - 2016-06-30 10:00:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467252006
WHERE id = '2d6a88488a546ed018cf1c33bc28c490d5b969dd'
DEBUG - 2016-06-30 10:00:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 10:00:07 --> Security Class Initialized
DEBUG - 2016-06-30 10:00:07 --> CRSF cookie Set
DEBUG - 2016-06-30 10:00:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 10:00:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2d6a88488a546ed018cf1c33bc28c490d5b969dd'
DEBUG - 2016-06-30 10:00:07 --> Total execution time: 0.0780
DEBUG - 2016-06-30 10:00:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467252007
WHERE id = '2d6a88488a546ed018cf1c33bc28c490d5b969dd'
DEBUG - 2016-06-30 10:00:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 10:00:07 --> Security Class Initialized
DEBUG - 2016-06-30 10:00:07 --> CRSF cookie Set
DEBUG - 2016-06-30 10:00:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-06-30 10:00:07 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-06-30 10:03:32 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 10:03:32 --> CRSF cookie Set
DEBUG - 2016-06-30 10:03:32 --> Security Class Initialized
DEBUG - 2016-06-30 10:03:32 --> CRSF cookie Set
DEBUG - 2016-06-30 10:03:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-06-30 10:03:32 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-06-30 10:03:32 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 10:03:32 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 10:03:32 --> CRSF cookie Set
DEBUG - 2016-06-30 10:03:32 --> Security Class Initialized
DEBUG - 2016-06-30 10:03:32 --> CRSF cookie Set
DEBUG - 2016-06-30 10:03:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 10:03:32 --> UTF-8 Support Enabled
ERROR - 2016-06-30 10:03:32 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-06-30 10:03:32 --> CRSF cookie Set
DEBUG - 2016-06-30 10:03:32 --> CRSF cookie Set
DEBUG - 2016-06-30 10:03:32 --> Security Class Initialized
DEBUG - 2016-06-30 10:03:32 --> Security Class Initialized
DEBUG - 2016-06-30 10:03:32 --> CRSF cookie Set
DEBUG - 2016-06-30 10:03:32 --> CRSF cookie Set
DEBUG - 2016-06-30 10:03:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-06-30 10:03:32 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-06-30 10:03:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 10:03:32 --> UTF-8 Support Enabled
ERROR - 2016-06-30 10:03:32 --> 404 Page Not Found: AdminUserLogin/assets
DEBUG - 2016-06-30 10:03:32 --> No URI present. Default controller set.
DEBUG - 2016-06-30 10:03:32 --> CRSF cookie Set
DEBUG - 2016-06-30 10:03:32 --> Security Class Initialized
DEBUG - 2016-06-30 10:03:32 --> CRSF cookie Set
DEBUG - 2016-06-30 10:03:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 10:03:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '64b6a3c8acbb0e697cd6e861ba5052aac28f6c35'
DEBUG - 2016-06-30 10:03:32 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('64b6a3c8acbb0e697cd6e861ba5052aac28f6c35', '101.226.66.173', 1467252212, '__ci_last_regenerate|i:1467252212;')
DEBUG - 2016-06-30 10:04:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 10:04:33 --> No URI present. Default controller set.
DEBUG - 2016-06-30 10:04:33 --> CRSF cookie Set
DEBUG - 2016-06-30 10:04:33 --> Security Class Initialized
DEBUG - 2016-06-30 10:04:33 --> CRSF cookie Set
DEBUG - 2016-06-30 10:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 10:04:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '69d77aca2fdae5eb603b32a4dd8aa42084e1f61d'
DEBUG - 2016-06-30 10:04:33 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('69d77aca2fdae5eb603b32a4dd8aa42084e1f61d', '114.91.132.3', 1467252273, '__ci_last_regenerate|i:1467252273;')
DEBUG - 2016-06-30 10:04:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 10:04:33 --> Security Class Initialized
DEBUG - 2016-06-30 10:04:33 --> CRSF cookie Set
DEBUG - 2016-06-30 10:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 10:04:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '69d77aca2fdae5eb603b32a4dd8aa42084e1f61d'
DEBUG - 2016-06-30 10:04:33 --> Total execution time: 0.0624
DEBUG - 2016-06-30 10:04:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467252273
WHERE id = '69d77aca2fdae5eb603b32a4dd8aa42084e1f61d'
DEBUG - 2016-06-30 10:08:36 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 10:08:36 --> No URI present. Default controller set.
DEBUG - 2016-06-30 10:08:36 --> CRSF cookie Set
DEBUG - 2016-06-30 10:08:36 --> Security Class Initialized
DEBUG - 2016-06-30 10:08:36 --> CRSF cookie Set
DEBUG - 2016-06-30 10:08:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 10:08:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd562037c64ad70ec4fb06dde6af40691cab52f7d'
DEBUG - 2016-06-30 10:08:36 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d562037c64ad70ec4fb06dde6af40691cab52f7d', '171.8.167.76', 1467252516, '__ci_last_regenerate|i:1467252516;')
DEBUG - 2016-06-30 10:08:36 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 10:08:36 --> CRSF cookie Set
DEBUG - 2016-06-30 10:08:36 --> Security Class Initialized
DEBUG - 2016-06-30 10:08:36 --> CRSF cookie Set
DEBUG - 2016-06-30 10:08:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 10:08:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '64c6ed13bdd92f5cd1afb5167563ff3320b5081e'
DEBUG - 2016-06-30 10:08:36 --> Total execution time: 0.0780
DEBUG - 2016-06-30 10:08:36 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('64c6ed13bdd92f5cd1afb5167563ff3320b5081e', '171.8.167.76', 1467252516, '__ci_last_regenerate|i:1467252516;')
DEBUG - 2016-06-30 10:08:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 10:08:44 --> No URI present. Default controller set.
DEBUG - 2016-06-30 10:08:44 --> CRSF cookie Set
DEBUG - 2016-06-30 10:08:44 --> Security Class Initialized
DEBUG - 2016-06-30 10:08:44 --> CRSF cookie Set
DEBUG - 2016-06-30 10:08:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 10:08:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9833e75f353fe11514a88c8a82ec24c149a41969'
DEBUG - 2016-06-30 10:08:44 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9833e75f353fe11514a88c8a82ec24c149a41969', '220.181.132.194', 1467252524, '__ci_last_regenerate|i:1467252524;')
DEBUG - 2016-06-30 10:08:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 10:08:44 --> Security Class Initialized
DEBUG - 2016-06-30 10:08:44 --> CRSF cookie Set
DEBUG - 2016-06-30 10:08:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 10:08:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9833e75f353fe11514a88c8a82ec24c149a41969'
DEBUG - 2016-06-30 10:08:44 --> Total execution time: 0.0780
DEBUG - 2016-06-30 10:08:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467252524
WHERE id = '9833e75f353fe11514a88c8a82ec24c149a41969'
DEBUG - 2016-06-30 16:34:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:34:47 --> No URI present. Default controller set.
DEBUG - 2016-06-30 16:34:47 --> CRSF cookie Set
DEBUG - 2016-06-30 16:34:47 --> Security Class Initialized
DEBUG - 2016-06-30 16:34:47 --> CRSF cookie Set
DEBUG - 2016-06-30 16:34:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:34:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:34:48 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('24980f02873e3b85c902a09364b3d433457ba3df', '114.91.132.3', 1467275688, '__ci_last_regenerate|i:1467275688;')
DEBUG - 2016-06-30 16:34:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:34:49 --> Security Class Initialized
DEBUG - 2016-06-30 16:34:49 --> CRSF cookie Set
DEBUG - 2016-06-30 16:34:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:34:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:34:49 --> Total execution time: 0.2340
DEBUG - 2016-06-30 16:34:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467275689
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:34:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:34:56 --> Security Class Initialized
DEBUG - 2016-06-30 16:34:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:34:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:34:56 --> 检查用户密码，新密文:f9ef66d1c6e1233e6547f328199b13cd09de73d116f907ea7924450713e7b5df
DEBUG - 2016-06-30 16:34:56 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'f9ef66d1c6e1233e6547f328199b13cd09de73d116f907ea7924450713e7b5df'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:34:56 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:34:56 --> Total execution time: 0.2900
DEBUG - 2016-06-30 16:34:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467275696
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:35:03 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:35:03 --> Security Class Initialized
DEBUG - 2016-06-30 16:35:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:35:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:35:04 --> 检查用户密码，新密文:4b7fa6bf8de7d87f67cb1505b8b0839227b4364d28a7c5e4c6d1beb661b89847
DEBUG - 2016-06-30 16:35:04 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '4b7fa6bf8de7d87f67cb1505b8b0839227b4364d28a7c5e4c6d1beb661b89847'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:35:04 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:35:04 --> Total execution time: 0.2140
DEBUG - 2016-06-30 16:35:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467275704
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:35:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:35:13 --> Security Class Initialized
DEBUG - 2016-06-30 16:35:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:35:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:35:13 --> 检查用户密码，新密文:086f3559cb2841800a66ade28af082a8be1ba88187750e5ff178fca44b9bd594
DEBUG - 2016-06-30 16:35:13 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '086f3559cb2841800a66ade28af082a8be1ba88187750e5ff178fca44b9bd594'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:35:13 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:35:13 --> Total execution time: 0.1290
DEBUG - 2016-06-30 16:35:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467275713
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:35:30 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:35:30 --> Security Class Initialized
DEBUG - 2016-06-30 16:35:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:35:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:35:30 --> 检查用户密码，新密文:ea766deb77fd5c9011faef441b0fc6a919f1a1a94e3ab1e237983a7784f2bf39
DEBUG - 2016-06-30 16:35:30 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'ea766deb77fd5c9011faef441b0fc6a919f1a1a94e3ab1e237983a7784f2bf39'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:35:30 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:35:30 --> Total execution time: 0.0910
DEBUG - 2016-06-30 16:35:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467275730
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:37:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:37:42 --> Security Class Initialized
DEBUG - 2016-06-30 16:37:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:37:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:37:42 --> 检查用户密码，新密文:f6faf47d08be4e4a9ce7ed4145aa682b3b7e5386da513cace9f236e730224507
DEBUG - 2016-06-30 16:37:43 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'f6faf47d08be4e4a9ce7ed4145aa682b3b7e5386da513cace9f236e730224507'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:37:43 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:37:43 --> Total execution time: 0.1110
DEBUG - 2016-06-30 16:37:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467275863
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:40:08 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:40:08 --> Security Class Initialized
DEBUG - 2016-06-30 16:40:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:40:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:40:08 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '24980f02873e3b85c902a09364b3d433457ba3df'
DEBUG - 2016-06-30 16:40:08 --> 检查用户密码，新密文:a25507ccecaafc8b918168cf7a2461c8f1da4bcffc20ddc113b390952a7237ac
DEBUG - 2016-06-30 16:40:08 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'a25507ccecaafc8b918168cf7a2461c8f1da4bcffc20ddc113b390952a7237ac'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:40:08 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:40:08 --> Total execution time: 0.1330
DEBUG - 2016-06-30 16:40:08 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3f63ddfbbb0c01a7e944008a63955a1431dc0d32', '114.91.132.3', 1467276008, '__ci_last_regenerate|i:1467276008;')
DEBUG - 2016-06-30 16:40:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:40:14 --> Security Class Initialized
DEBUG - 2016-06-30 16:40:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:40:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3f63ddfbbb0c01a7e944008a63955a1431dc0d32'
DEBUG - 2016-06-30 16:40:14 --> 检查用户密码，新密文:4b7fa6bf8de7d87f67cb1505b8b0839227b4364d28a7c5e4c6d1beb661b89847
DEBUG - 2016-06-30 16:40:14 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '4b7fa6bf8de7d87f67cb1505b8b0839227b4364d28a7c5e4c6d1beb661b89847'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:40:14 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:40:14 --> Total execution time: 0.1310
DEBUG - 2016-06-30 16:40:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276014
WHERE id = '3f63ddfbbb0c01a7e944008a63955a1431dc0d32'
DEBUG - 2016-06-30 16:40:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:40:28 --> Security Class Initialized
DEBUG - 2016-06-30 16:40:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:40:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3f63ddfbbb0c01a7e944008a63955a1431dc0d32'
DEBUG - 2016-06-30 16:40:28 --> 检查用户密码，新密文:4b7fa6bf8de7d87f67cb1505b8b0839227b4364d28a7c5e4c6d1beb661b89847
DEBUG - 2016-06-30 16:40:28 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '4b7fa6bf8de7d87f67cb1505b8b0839227b4364d28a7c5e4c6d1beb661b89847'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:40:29 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:40:29 --> Total execution time: 0.1250
DEBUG - 2016-06-30 16:40:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276029
WHERE id = '3f63ddfbbb0c01a7e944008a63955a1431dc0d32'
DEBUG - 2016-06-30 16:45:16 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:45:16 --> Security Class Initialized
DEBUG - 2016-06-30 16:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:45:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3f63ddfbbb0c01a7e944008a63955a1431dc0d32'
DEBUG - 2016-06-30 16:45:16 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '3f63ddfbbb0c01a7e944008a63955a1431dc0d32'
DEBUG - 2016-06-30 16:45:16 --> 检查用户密码，新密文:ca0b672cb552794eec09032ccf2abc3b47c4ad247b22ead1408d2e475dd890e8
DEBUG - 2016-06-30 16:45:16 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'ca0b672cb552794eec09032ccf2abc3b47c4ad247b22ead1408d2e475dd890e8'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:45:16 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:45:16 --> Total execution time: 0.1180
DEBUG - 2016-06-30 16:45:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ddfbf6c7da6dbb6b933eff8f91e2be90a57e8d99', '114.91.132.3', 1467276316, '__ci_last_regenerate|i:1467276316;')
DEBUG - 2016-06-30 16:47:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:47:50 --> Security Class Initialized
DEBUG - 2016-06-30 16:47:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:47:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ddfbf6c7da6dbb6b933eff8f91e2be90a57e8d99'
DEBUG - 2016-06-30 16:47:50 --> 检查用户密码，新密文:f9ef66d1c6e1233e6547f328199b13cd09de73d116f907ea7924450713e7b5df
DEBUG - 2016-06-30 16:47:50 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'f9ef66d1c6e1233e6547f328199b13cd09de73d116f907ea7924450713e7b5df'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:47:50 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:47:50 --> Total execution time: 0.1020
DEBUG - 2016-06-30 16:47:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276470
WHERE id = 'ddfbf6c7da6dbb6b933eff8f91e2be90a57e8d99'
DEBUG - 2016-06-30 16:52:09 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:52:09 --> Security Class Initialized
DEBUG - 2016-06-30 16:52:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:52:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ddfbf6c7da6dbb6b933eff8f91e2be90a57e8d99'
DEBUG - 2016-06-30 16:52:09 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'ddfbf6c7da6dbb6b933eff8f91e2be90a57e8d99'
DEBUG - 2016-06-30 16:52:09 --> 检查用户密码，新密文:b674c1c17549b0fa48be960983e170ac7d7ad8892c7fbb2d74283a2caa6cf653
DEBUG - 2016-06-30 16:52:09 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'b674c1c17549b0fa48be960983e170ac7d7ad8892c7fbb2d74283a2caa6cf653'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:52:09 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:52:09 --> Total execution time: 0.0860
DEBUG - 2016-06-30 16:52:09 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('55311b09c8dfaa6a8442e2713c8d99d180c08afd', '114.91.132.3', 1467276729, '__ci_last_regenerate|i:1467276729;')
DEBUG - 2016-06-30 16:52:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:52:15 --> Security Class Initialized
DEBUG - 2016-06-30 16:52:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:52:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:52:15 --> 检查用户密码，新密文:f9ef66d1c6e1233e6547f328199b13cd09de73d116f907ea7924450713e7b5df
DEBUG - 2016-06-30 16:52:15 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'f9ef66d1c6e1233e6547f328199b13cd09de73d116f907ea7924450713e7b5df'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:52:15 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:52:15 --> Total execution time: 0.0840
DEBUG - 2016-06-30 16:52:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276735
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:52:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:52:24 --> Security Class Initialized
DEBUG - 2016-06-30 16:52:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:52:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:52:24 --> 检查用户密码，新密文:c3205771a65e210c6e255359159cfed86ffa2e557ee911ac40a1152a5aa3f359
DEBUG - 2016-06-30 16:52:24 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c3205771a65e210c6e255359159cfed86ffa2e557ee911ac40a1152a5aa3f359'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:52:24 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:52:24 --> Total execution time: 0.1150
DEBUG - 2016-06-30 16:52:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276744
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:52:35 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:52:35 --> Security Class Initialized
DEBUG - 2016-06-30 16:52:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:52:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:52:35 --> 检查用户密码，新密文:a25507ccecaafc8b918168cf7a2461c8f1da4bcffc20ddc113b390952a7237ac
DEBUG - 2016-06-30 16:52:35 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'a25507ccecaafc8b918168cf7a2461c8f1da4bcffc20ddc113b390952a7237ac'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:52:35 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:52:35 --> Total execution time: 0.0910
DEBUG - 2016-06-30 16:52:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276755
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:52:43 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:52:43 --> Security Class Initialized
DEBUG - 2016-06-30 16:52:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:52:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:52:44 --> 检查用户密码，新密文:891c2fec75bb9f4759d99a5111ef721dec2ba8df06513e5fcfecae7721a2a794
DEBUG - 2016-06-30 16:52:44 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '891c2fec75bb9f4759d99a5111ef721dec2ba8df06513e5fcfecae7721a2a794'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:52:44 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:52:44 --> Total execution time: 0.1160
DEBUG - 2016-06-30 16:52:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276764
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:53:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:53:44 --> No URI present. Default controller set.
DEBUG - 2016-06-30 16:53:44 --> CRSF cookie Set
DEBUG - 2016-06-30 16:53:44 --> Security Class Initialized
DEBUG - 2016-06-30 16:53:44 --> CRSF cookie Set
DEBUG - 2016-06-30 16:53:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:53:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '93a820c15b7495f06291992de61aa7ca8c71f712'
DEBUG - 2016-06-30 16:53:45 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('93a820c15b7495f06291992de61aa7ca8c71f712', '113.108.21.69', 1467276825, '__ci_last_regenerate|i:1467276825;')
DEBUG - 2016-06-30 16:53:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:53:45 --> CRSF cookie Set
DEBUG - 2016-06-30 16:53:45 --> Security Class Initialized
DEBUG - 2016-06-30 16:53:45 --> CRSF cookie Set
DEBUG - 2016-06-30 16:53:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:53:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9ba1e2813583ad82179fb5c145daaec5abddf475'
DEBUG - 2016-06-30 16:53:45 --> Total execution time: 0.1210
DEBUG - 2016-06-30 16:53:45 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9ba1e2813583ad82179fb5c145daaec5abddf475', '113.108.21.69', 1467276825, '__ci_last_regenerate|i:1467276825;')
DEBUG - 2016-06-30 16:53:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:53:46 --> CRSF cookie Set
DEBUG - 2016-06-30 16:53:46 --> Security Class Initialized
DEBUG - 2016-06-30 16:53:46 --> CRSF cookie Set
DEBUG - 2016-06-30 16:53:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:53:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '07fc195109090e872c7ad8bdd1000b85b2e6566b'
DEBUG - 2016-06-30 16:53:46 --> Total execution time: 0.0740
DEBUG - 2016-06-30 16:53:46 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('07fc195109090e872c7ad8bdd1000b85b2e6566b', '112.90.82.218', 1467276826, '__ci_last_regenerate|i:1467276826;')
DEBUG - 2016-06-30 16:53:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:53:56 --> No URI present. Default controller set.
DEBUG - 2016-06-30 16:53:56 --> CRSF cookie Set
DEBUG - 2016-06-30 16:53:56 --> Security Class Initialized
DEBUG - 2016-06-30 16:53:56 --> CRSF cookie Set
DEBUG - 2016-06-30 16:53:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:53:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:53:56 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('077407eb5c3820e8f43855cb81cb48c45f96648c', '61.129.119.106', 1467276836, '__ci_last_regenerate|i:1467276836;')
DEBUG - 2016-06-30 16:53:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:53:56 --> Security Class Initialized
DEBUG - 2016-06-30 16:53:56 --> CRSF cookie Set
DEBUG - 2016-06-30 16:53:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:53:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:53:56 --> Total execution time: 0.0870
DEBUG - 2016-06-30 16:53:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276836
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:54:10 --> Security Class Initialized
DEBUG - 2016-06-30 16:54:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:54:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:10 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-06-30 16:54:10 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-06-30 16:54:10 --> 登录返回结果数：1
DEBUG - 2016-06-30 16:54:10 --> 成功登录
DEBUG - 2016-06-30 16:54:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276850, data = '__ci_last_regenerate|i:1467276836;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:54:10 --> No URI present. Default controller set.
DEBUG - 2016-06-30 16:54:10 --> Security Class Initialized
DEBUG - 2016-06-30 16:54:10 --> CRSF cookie Set
DEBUG - 2016-06-30 16:54:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:54:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2773c6c5398247a18581dae2c3539b9b', '61.129.119.106', '2016-06-30', '16:54:10', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '077407eb5c3820e8f43855cb81cb48c45f96648c')
DEBUG - 2016-06-30 16:54:10 --> Total execution time: 0.2190
DEBUG - 2016-06-30 16:54:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276850
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:54:23 --> Security Class Initialized
DEBUG - 2016-06-30 16:54:23 --> CRSF cookie Set
DEBUG - 2016-06-30 16:54:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:54:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9f480f4cb74c4b91b7b15c953ae62aea', '61.129.119.106', '2016-06-30', '16:54:23', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '077407eb5c3820e8f43855cb81cb48c45f96648c')
DEBUG - 2016-06-30 16:54:23 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-30 16:54:23 --> Total execution time: 0.2610
DEBUG - 2016-06-30 16:54:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276863
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:30 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:54:30 --> Security Class Initialized
DEBUG - 2016-06-30 16:54:30 --> CRSF cookie Set
DEBUG - 2016-06-30 16:54:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:54:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('33687a7fbd01434c9646db1936398f07', '61.129.119.106', '2016-06-30', '16:54:31', '120340234', '/admin/account/changeProfile', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '077407eb5c3820e8f43855cb81cb48c45f96648c')
DEBUG - 2016-06-30 16:54:31 --> [执行的SQL语句]##############select * from admin_user where uuid='120340234' and enable='Y'
DEBUG - 2016-06-30 16:54:31 --> Total execution time: 0.2000
DEBUG - 2016-06-30 16:54:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276871
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:39 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:54:39 --> Security Class Initialized
DEBUG - 2016-06-30 16:54:39 --> CRSF cookie Set
DEBUG - 2016-06-30 16:54:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:54:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276879, data = '__ci_last_regenerate|i:1467276836;'
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:54:40 --> Security Class Initialized
DEBUG - 2016-06-30 16:54:40 --> CRSF cookie Set
DEBUG - 2016-06-30 16:54:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:54:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:40 --> Total execution time: 0.0860
DEBUG - 2016-06-30 16:54:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276880
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:54:48 --> Security Class Initialized
DEBUG - 2016-06-30 16:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:54:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:48 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-06-30 16:54:48 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:54:48 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:54:48 --> Total execution time: 0.1030
DEBUG - 2016-06-30 16:54:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276888
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:54:54 --> Security Class Initialized
DEBUG - 2016-06-30 16:54:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:54:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:54:54 --> 检查用户密码，新密文:c3205771a65e210c6e255359159cfed86ffa2e557ee911ac40a1152a5aa3f359
DEBUG - 2016-06-30 16:54:54 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c3205771a65e210c6e255359159cfed86ffa2e557ee911ac40a1152a5aa3f359'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-06-30 16:54:54 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:54:54 --> Total execution time: 0.1000
DEBUG - 2016-06-30 16:54:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276894
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:55:03 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:55:03 --> Security Class Initialized
DEBUG - 2016-06-30 16:55:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:55:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:55:03 --> 检查用户密码，新密文:d4bf4f416874e4943b480c7f0d7bb9246431aed233a4dfe772c2749dc0c247ca
DEBUG - 2016-06-30 16:55:03 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'd4bf4f416874e4943b480c7f0d7bb9246431aed233a4dfe772c2749dc0c247ca'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:55:03 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:55:03 --> Total execution time: 0.1010
DEBUG - 2016-06-30 16:55:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467276903
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:56:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:56:50 --> Security Class Initialized
DEBUG - 2016-06-30 16:56:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:56:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:56:50 --> 检查用户密码，新密文:ebecb6fc97b46b926d07596dcc1681c500d5f5a58fd1e874de08ddc1997deeca
DEBUG - 2016-06-30 16:56:50 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'ebecb6fc97b46b926d07596dcc1681c500d5f5a58fd1e874de08ddc1997deeca'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:56:50 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:56:50 --> Total execution time: 0.0940
DEBUG - 2016-06-30 16:56:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277010
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:57:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:57:05 --> Security Class Initialized
DEBUG - 2016-06-30 16:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:57:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:57:05 --> 检查用户密码，新密文:4b7fa6bf8de7d87f67cb1505b8b0839227b4364d28a7c5e4c6d1beb661b89847
DEBUG - 2016-06-30 16:57:05 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '4b7fa6bf8de7d87f67cb1505b8b0839227b4364d28a7c5e4c6d1beb661b89847'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:57:05 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:57:05 --> Total execution time: 0.0890
DEBUG - 2016-06-30 16:57:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277025
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:57:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:57:13 --> Security Class Initialized
DEBUG - 2016-06-30 16:57:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:57:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:57:13 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '55311b09c8dfaa6a8442e2713c8d99d180c08afd'
DEBUG - 2016-06-30 16:57:13 --> 检查用户密码，新密文:4b7fa6bf8de7d87f67cb1505b8b0839227b4364d28a7c5e4c6d1beb661b89847
DEBUG - 2016-06-30 16:57:13 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '4b7fa6bf8de7d87f67cb1505b8b0839227b4364d28a7c5e4c6d1beb661b89847'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 16:57:13 --> 登录返回结果数：0
DEBUG - 2016-06-30 16:57:13 --> Total execution time: 0.2400
DEBUG - 2016-06-30 16:57:13 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('eea55b112efcd6f6d883151fd07aaf9665664d0d', '114.91.132.3', 1467277033, '__ci_last_regenerate|i:1467277033;')
DEBUG - 2016-06-30 16:59:34 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:59:34 --> Security Class Initialized
DEBUG - 2016-06-30 16:59:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:59:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:59:34 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '077407eb5c3820e8f43855cb81cb48c45f96648c'
DEBUG - 2016-06-30 16:59:34 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-06-30 16:59:34 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-06-30 16:59:34 --> 登录返回结果数：1
DEBUG - 2016-06-30 16:59:34 --> 成功登录
DEBUG - 2016-06-30 16:59:34 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8c296d2c73adc4dc59c2118503d1477f3f44c8d3', '61.129.119.106', 1467277174, '__ci_last_regenerate|i:1467277174;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-30 16:59:35 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:59:35 --> Security Class Initialized
DEBUG - 2016-06-30 16:59:35 --> CRSF cookie Set
DEBUG - 2016-06-30 16:59:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:59:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c296d2c73adc4dc59c2118503d1477f3f44c8d3'
DEBUG - 2016-06-30 16:59:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9edc0c1067874946a8990d12b0e8a95f', '61.129.119.106', '2016-06-30', '16:59:35', '120340234', '/admin/backhome', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '8c296d2c73adc4dc59c2118503d1477f3f44c8d3')
DEBUG - 2016-06-30 16:59:35 --> Total execution time: 0.0890
DEBUG - 2016-06-30 16:59:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277175
WHERE id = '8c296d2c73adc4dc59c2118503d1477f3f44c8d3'
DEBUG - 2016-06-30 16:59:39 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 16:59:39 --> Security Class Initialized
DEBUG - 2016-06-30 16:59:39 --> CRSF cookie Set
DEBUG - 2016-06-30 16:59:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 16:59:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c296d2c73adc4dc59c2118503d1477f3f44c8d3'
DEBUG - 2016-06-30 16:59:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f4c6994564094eebb9657f38bc3f61d3', '61.129.119.106', '2016-06-30', '16:59:39', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', '8c296d2c73adc4dc59c2118503d1477f3f44c8d3')
DEBUG - 2016-06-30 16:59:39 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-30 16:59:39 --> Total execution time: 0.1240
DEBUG - 2016-06-30 16:59:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277179
WHERE id = '8c296d2c73adc4dc59c2118503d1477f3f44c8d3'
DEBUG - 2016-06-30 17:02:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:02:55 --> Security Class Initialized
DEBUG - 2016-06-30 17:02:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:02:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'eea55b112efcd6f6d883151fd07aaf9665664d0d'
DEBUG - 2016-06-30 17:02:55 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'eea55b112efcd6f6d883151fd07aaf9665664d0d'
DEBUG - 2016-06-30 17:02:55 --> 检查用户密码，新密文:81c7cf0f6a8dd7e886b56f0b9700fc59d5cbf07c810c8db34baae550a6c0f51b
DEBUG - 2016-06-30 17:02:55 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '81c7cf0f6a8dd7e886b56f0b9700fc59d5cbf07c810c8db34baae550a6c0f51b'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 17:02:55 --> 登录返回结果数：0
DEBUG - 2016-06-30 17:02:55 --> Total execution time: 0.1030
DEBUG - 2016-06-30 17:02:55 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('dcca3fc54a4b006778f511c48da4b1cdf83a6a10', '114.91.132.3', 1467277375, '__ci_last_regenerate|i:1467277375;')
DEBUG - 2016-06-30 17:03:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:03:02 --> Security Class Initialized
DEBUG - 2016-06-30 17:03:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:03:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:03:02 --> 检查用户密码，新密文:000a9f623162fae7464ce55b0ae100885c9a6af475fd4592e33b06f5fe97ea69
DEBUG - 2016-06-30 17:03:02 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '000a9f623162fae7464ce55b0ae100885c9a6af475fd4592e33b06f5fe97ea69'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 17:03:02 --> 登录返回结果数：0
DEBUG - 2016-06-30 17:03:02 --> Total execution time: 0.1180
DEBUG - 2016-06-30 17:03:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277382
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:03:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:03:15 --> Security Class Initialized
DEBUG - 2016-06-30 17:03:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:03:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:03:15 --> 检查用户密码，新密文:000a9f623162fae7464ce55b0ae100885c9a6af475fd4592e33b06f5fe97ea69
DEBUG - 2016-06-30 17:03:15 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '000a9f623162fae7464ce55b0ae100885c9a6af475fd4592e33b06f5fe97ea69'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-30 17:03:15 --> 登录返回结果数：0
DEBUG - 2016-06-30 17:03:15 --> Total execution time: 0.0940
DEBUG - 2016-06-30 17:03:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277395
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:03:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:03:49 --> Security Class Initialized
DEBUG - 2016-06-30 17:03:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:03:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:03:49 --> 检查用户密码，新密文:cb00d2a8f5b408ec9826ad84f5363c0c55ef7a04f7241e995687535227dda887
DEBUG - 2016-06-30 17:03:49 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'cb00d2a8f5b408ec9826ad84f5363c0c55ef7a04f7241e995687535227dda887'
AND   (
login_code = 'BWH'
OR phone = 'BWH'
OR email = 'BWH'
 )
DEBUG - 2016-06-30 17:03:49 --> 登录返回结果数：0
DEBUG - 2016-06-30 17:03:49 --> Total execution time: 0.0970
DEBUG - 2016-06-30 17:03:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277429
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:03 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:04:03 --> Security Class Initialized
DEBUG - 2016-06-30 17:04:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:04:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:03 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-06-30 17:04:03 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-06-30 17:04:03 --> 登录返回结果数：1
DEBUG - 2016-06-30 17:04:03 --> 成功登录
DEBUG - 2016-06-30 17:04:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277443, data = '__ci_last_regenerate|i:1467277375;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:03 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:04:03 --> Security Class Initialized
DEBUG - 2016-06-30 17:04:03 --> CRSF cookie Set
DEBUG - 2016-06-30 17:04:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:04:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3b9d37c090da42b0bd5b78fde9348919', '114.91.132.3', '2016-06-30', '17:04:03', '120340234', '/admin/backhome', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10')
DEBUG - 2016-06-30 17:04:03 --> Total execution time: 0.1120
DEBUG - 2016-06-30 17:04:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277443
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:04:07 --> Security Class Initialized
DEBUG - 2016-06-30 17:04:07 --> CRSF cookie Set
DEBUG - 2016-06-30 17:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:04:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c6d19f32008c4689ab5e4774e3c64904', '114.91.132.3', '2016-06-30', '17:04:07', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10')
DEBUG - 2016-06-30 17:04:07 --> 查询订单
DEBUG - 2016-06-30 17:04:07 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-30 17:04:08 --> Total execution time: 0.3090
DEBUG - 2016-06-30 17:04:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277448
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:12 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:04:13 --> Security Class Initialized
DEBUG - 2016-06-30 17:04:13 --> CRSF cookie Set
DEBUG - 2016-06-30 17:04:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:04:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6f8e2972dfd3400284c2436ec781df8e', '114.91.132.3', '2016-06-30', '17:04:13', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10')
DEBUG - 2016-06-30 17:04:13 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-30 17:04:13 --> Total execution time: 0.3240
DEBUG - 2016-06-30 17:04:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277453
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:04:24 --> Security Class Initialized
DEBUG - 2016-06-30 17:04:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:04:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c547242ad4e245b68cf09f26849f3a15', '114.91.132.3', '2016-06-30', '17:04:25', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10')
DEBUG - 2016-06-30 17:04:25 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%����%' order by enable desc
DEBUG - 2016-06-30 17:04:25 --> Total execution time: 0.2150
DEBUG - 2016-06-30 17:04:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277465
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:04:29 --> Security Class Initialized
DEBUG - 2016-06-30 17:04:29 --> CRSF cookie Set
DEBUG - 2016-06-30 17:04:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:04:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4a4da9af319f425e80db17151bbb3b20', '114.91.132.3', '2016-06-30', '17:04:29', '120340234', '/admin/guest/edit/K05034', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10')
DEBUG - 2016-06-30 17:04:29 --> 修改客户信息：K05034
DEBUG - 2016-06-30 17:04:29 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05034' 
DEBUG - 2016-06-30 17:04:29 --> [执行的SQL语句]##############insert into apsos_user(uuid,login_code,login_pwd,user_name,phone,email,add_time,sex,enable,company)
          Select code,pycode,'c07cd18394ca7f70b23906c52103b752e578a653e07a9d49e88b72c3a2fd9157' as login_pwd,contactperson,
        (
        case
             when len(replace(handphonebp,' ',''))>11 then substring(replace(handphonebp,' ',''),1,11)
             when len(replace(handphonebp,' ',''))=11 then replace(handphonebp,' ','')
             else ''
        end
        ) as phone,
        (
        case
             when CHARINDEX('@',email) >0 then replace(email,' ','')
             else ''
        end
        )
         as email,getdate() as add_time,sex,'N',name
         from T_Guest where code='K05034'
DEBUG - 2016-06-30 17:04:29 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05034' 
DEBUG - 2016-06-30 17:04:30 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-30 17:04:30 --> Total execution time: 0.1780
DEBUG - 2016-06-30 17:04:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277470
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:04:53 --> Security Class Initialized
DEBUG - 2016-06-30 17:04:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:04:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('093e1825d7b64d5aad900da6cb111f89', '114.91.132.3', '2016-06-30', '17:04:54', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10')
DEBUG - 2016-06-30 17:04:54 --> 保存客户信息
DEBUG - 2016-06-30 17:04:54 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05034', enable = 'N', user_type = 'A', admin_user_id = ''
WHERE uuid = 'K05034'
DEBUG - 2016-06-30 17:04:54 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-30 17:04:54 --> Total execution time: 0.1250
DEBUG - 2016-06-30 17:04:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277494
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:04:58 --> Security Class Initialized
DEBUG - 2016-06-30 17:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:04:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:04:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1c093a8d4a2b4d16ad5b81a882eb0f1c', '114.91.132.3', '2016-06-30', '17:04:58', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10')
DEBUG - 2016-06-30 17:04:58 --> 保存客户信息
DEBUG - 2016-06-30 17:04:58 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05034', enable = 'N', user_type = 'A', admin_user_id = ''
WHERE uuid = 'K05034'
DEBUG - 2016-06-30 17:04:58 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-30 17:04:58 --> Total execution time: 0.1240
DEBUG - 2016-06-30 17:04:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277498
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:05:06 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:05:06 --> Security Class Initialized
DEBUG - 2016-06-30 17:05:06 --> CRSF cookie Set
DEBUG - 2016-06-30 17:05:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:05:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:05:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('90b6c1d9335a46a9afe9fcde100a7a7a', '114.91.132.3', '2016-06-30', '17:05:06', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10')
DEBUG - 2016-06-30 17:05:06 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-30 17:05:06 --> Total execution time: 0.1210
DEBUG - 2016-06-30 17:05:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277506
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:05:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:05:10 --> Security Class Initialized
DEBUG - 2016-06-30 17:05:10 --> CRSF cookie Set
DEBUG - 2016-06-30 17:05:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:05:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:05:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d42e036920714b4fa5cf973f1b8ea4b0', '114.91.132.3', '2016-06-30', '17:05:10', '120340234', '/admin/guest/edit/K05034', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10')
DEBUG - 2016-06-30 17:05:10 --> 修改客户信息：K05034
DEBUG - 2016-06-30 17:05:10 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05034' 
DEBUG - 2016-06-30 17:05:10 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05034' 
DEBUG - 2016-06-30 17:05:10 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-30 17:05:10 --> Total execution time: 0.1350
DEBUG - 2016-06-30 17:05:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277510
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:05:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:05:15 --> Security Class Initialized
DEBUG - 2016-06-30 17:05:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:05:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:05:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b4d50f10dc5544b3a0387e07427b706d', '114.91.132.3', '2016-06-30', '17:05:15', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10')
DEBUG - 2016-06-30 17:05:15 --> 保存客户信息
DEBUG - 2016-06-30 17:05:15 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05034', enable = 'Y', user_type = 'A', admin_user_id = ''
WHERE uuid = 'K05034'
DEBUG - 2016-06-30 17:05:15 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-30 17:05:15 --> Total execution time: 0.1190
DEBUG - 2016-06-30 17:05:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277515
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:05:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:05:22 --> Security Class Initialized
DEBUG - 2016-06-30 17:05:22 --> CRSF cookie Set
DEBUG - 2016-06-30 17:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:05:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:05:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('858737fc3555424283a114315048c40c', '114.91.132.3', '2016-06-30', '17:05:22', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10')
DEBUG - 2016-06-30 17:05:22 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-30 17:05:22 --> Total execution time: 0.1190
DEBUG - 2016-06-30 17:05:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277522
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:06:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:06:01 --> Security Class Initialized
DEBUG - 2016-06-30 17:06:01 --> CRSF cookie Set
DEBUG - 2016-06-30 17:06:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:06:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:06:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('40c355ccb2f145409b420bbfb6863970', '114.91.132.3', '2016-06-30', '17:06:01', '120340234', '/admin/guest/edit/K05034', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10')
DEBUG - 2016-06-30 17:06:01 --> 修改客户信息：K05034
DEBUG - 2016-06-30 17:06:01 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05034' 
DEBUG - 2016-06-30 17:06:01 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05034' 
DEBUG - 2016-06-30 17:06:01 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-30 17:06:01 --> Total execution time: 0.1950
DEBUG - 2016-06-30 17:06:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277561
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:06:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:06:07 --> Security Class Initialized
DEBUG - 2016-06-30 17:06:07 --> CRSF cookie Set
DEBUG - 2016-06-30 17:06:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:06:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8c296d2c73adc4dc59c2118503d1477f3f44c8d3'
DEBUG - 2016-06-30 17:06:07 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '8c296d2c73adc4dc59c2118503d1477f3f44c8d3'
DEBUG - 2016-06-30 17:06:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('06eee491383942ee8097d0b8290e8f1a', '61.129.119.106', '2016-06-30', '17:06:07', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586', 'da96982699176969a1fbabf1fd126cd59646be31')
DEBUG - 2016-06-30 17:06:07 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-30 17:06:07 --> Total execution time: 0.1120
DEBUG - 2016-06-30 17:06:07 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('da96982699176969a1fbabf1fd126cd59646be31', '61.129.119.106', 1467277567, '__ci_last_regenerate|i:1467277567;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-30 17:06:39 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:06:39 --> Security Class Initialized
DEBUG - 2016-06-30 17:06:39 --> CRSF cookie Set
DEBUG - 2016-06-30 17:06:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:06:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:06:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('eb387067d7ab4479b7a1d6ff64135994', '114.91.132.3', '2016-06-30', '17:06:39', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10')
DEBUG - 2016-06-30 17:06:39 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-30 17:06:40 --> Total execution time: 0.1690
DEBUG - 2016-06-30 17:06:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277600
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:08:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:08:13 --> Security Class Initialized
DEBUG - 2016-06-30 17:08:13 --> CRSF cookie Set
DEBUG - 2016-06-30 17:08:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:08:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:08:13 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'dcca3fc54a4b006778f511c48da4b1cdf83a6a10'
DEBUG - 2016-06-30 17:08:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0674e7e87cdd46839bca7b65fb41f89e', '114.91.132.3', '2016-06-30', '17:08:13', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '383e856344da4eb92f196eb007d7e743e98db28e')
DEBUG - 2016-06-30 17:08:13 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-30 17:08:13 --> Total execution time: 0.1340
DEBUG - 2016-06-30 17:08:13 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('383e856344da4eb92f196eb007d7e743e98db28e', '114.91.132.3', 1467277693, '__ci_last_regenerate|i:1467277693;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-30 17:08:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:08:15 --> Security Class Initialized
DEBUG - 2016-06-30 17:08:15 --> CRSF cookie Set
DEBUG - 2016-06-30 17:08:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:08:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '383e856344da4eb92f196eb007d7e743e98db28e'
DEBUG - 2016-06-30 17:08:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6fb91142fc6d46428d1718e299b2268e', '114.91.132.3', '2016-06-30', '17:08:15', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '383e856344da4eb92f196eb007d7e743e98db28e')
DEBUG - 2016-06-30 17:08:15 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-30 17:08:15 --> Total execution time: 0.1150
DEBUG - 2016-06-30 17:08:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277695
WHERE id = '383e856344da4eb92f196eb007d7e743e98db28e'
DEBUG - 2016-06-30 17:08:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:08:17 --> Security Class Initialized
DEBUG - 2016-06-30 17:08:17 --> CRSF cookie Set
DEBUG - 2016-06-30 17:08:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:08:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '383e856344da4eb92f196eb007d7e743e98db28e'
DEBUG - 2016-06-30 17:08:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('82c2540c834b46e48d09676025671d6f', '114.91.132.3', '2016-06-30', '17:08:17', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '383e856344da4eb92f196eb007d7e743e98db28e')
DEBUG - 2016-06-30 17:08:17 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-30 17:08:17 --> Total execution time: 0.1160
DEBUG - 2016-06-30 17:08:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277697
WHERE id = '383e856344da4eb92f196eb007d7e743e98db28e'
DEBUG - 2016-06-30 17:08:19 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:08:19 --> Security Class Initialized
DEBUG - 2016-06-30 17:08:19 --> CRSF cookie Set
DEBUG - 2016-06-30 17:08:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:08:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '383e856344da4eb92f196eb007d7e743e98db28e'
DEBUG - 2016-06-30 17:08:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('32b0f837ad544865b555ce965b1f37a1', '114.91.132.3', '2016-06-30', '17:08:19', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '383e856344da4eb92f196eb007d7e743e98db28e')
DEBUG - 2016-06-30 17:08:19 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-30 17:08:19 --> Total execution time: 0.1260
DEBUG - 2016-06-30 17:08:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277699
WHERE id = '383e856344da4eb92f196eb007d7e743e98db28e'
DEBUG - 2016-06-30 17:08:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:08:24 --> Security Class Initialized
DEBUG - 2016-06-30 17:08:24 --> CRSF cookie Set
DEBUG - 2016-06-30 17:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:08:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '383e856344da4eb92f196eb007d7e743e98db28e'
DEBUG - 2016-06-30 17:08:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('37140f0dd3424875a72c83c46b74e758', '114.91.132.3', '2016-06-30', '17:08:24', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '383e856344da4eb92f196eb007d7e743e98db28e')
DEBUG - 2016-06-30 17:08:24 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-30 17:08:24 --> Total execution time: 0.2100
DEBUG - 2016-06-30 17:08:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467277704
WHERE id = '383e856344da4eb92f196eb007d7e743e98db28e'
DEBUG - 2016-06-30 17:15:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:15:53 --> Security Class Initialized
DEBUG - 2016-06-30 17:15:53 --> CRSF cookie Set
DEBUG - 2016-06-30 17:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:15:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '383e856344da4eb92f196eb007d7e743e98db28e'
DEBUG - 2016-06-30 17:15:53 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '383e856344da4eb92f196eb007d7e743e98db28e'
DEBUG - 2016-06-30 17:15:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('88dfe024261b4418915816f0add01a91', '114.91.132.3', '2016-06-30', '17:15:53', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'b8a0a1ca4cce2515df1909d833f91de0349bde80')
DEBUG - 2016-06-30 17:15:53 --> 查询待审核订单
DEBUG - 2016-06-30 17:15:53 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-30 17:15:53 --> Total execution time: 0.2230
DEBUG - 2016-06-30 17:15:53 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b8a0a1ca4cce2515df1909d833f91de0349bde80', '114.91.132.3', 1467278153, '__ci_last_regenerate|i:1467278153;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-30 17:15:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-30 17:15:57 --> Security Class Initialized
DEBUG - 2016-06-30 17:15:57 --> CRSF cookie Set
DEBUG - 2016-06-30 17:15:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-30 17:15:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b8a0a1ca4cce2515df1909d833f91de0349bde80'
DEBUG - 2016-06-30 17:15:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5af115c8a4204c409e80abd61856a23d', '114.91.132.3', '2016-06-30', '17:15:57', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'b8a0a1ca4cce2515df1909d833f91de0349bde80')
DEBUG - 2016-06-30 17:15:57 --> 查询订单
DEBUG - 2016-06-30 17:15:57 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-30 17:15:57 --> Total execution time: 0.2610
DEBUG - 2016-06-30 17:15:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467278157
WHERE id = 'b8a0a1ca4cce2515df1909d833f91de0349bde80'
