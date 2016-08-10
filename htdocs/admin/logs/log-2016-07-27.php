<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-27 09:35:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:30 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:30 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:30 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48f0451e9504bc1ad7a400f353fcdc30c947bf2a'
DEBUG - 2016-07-27 09:35:30 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('48f0451e9504bc1ad7a400f353fcdc30c947bf2a', '114.91.137.232', 1469583330, '__ci_last_regenerate|i:1469583330;')
DEBUG - 2016-07-27 09:35:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:30 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:30 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48f0451e9504bc1ad7a400f353fcdc30c947bf2a'
DEBUG - 2016-07-27 09:35:30 --> Total execution time: 0.1010
DEBUG - 2016-07-27 09:35:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469583330
WHERE id = '48f0451e9504bc1ad7a400f353fcdc30c947bf2a'
DEBUG - 2016-07-27 09:35:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:32 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:32 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:32 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dbeb24f8753b310196a6722f140a10d1e96c9fcb'
DEBUG - 2016-07-27 09:35:32 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('dbeb24f8753b310196a6722f140a10d1e96c9fcb', '101.226.33.228', 1469583332, '__ci_last_regenerate|i:1469583332;')
DEBUG - 2016-07-27 09:35:36 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:36 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:36 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:36 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1db18442c193cd2827c190596edc0e727c9c6a91'
DEBUG - 2016-07-27 09:35:36 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('1db18442c193cd2827c190596edc0e727c9c6a91', '101.226.51.230', 1469583336, '__ci_last_regenerate|i:1469583336;')
DEBUG - 2016-07-27 09:35:36 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:36 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:36 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1db18442c193cd2827c190596edc0e727c9c6a91'
DEBUG - 2016-07-27 09:35:36 --> Total execution time: 0.0660
DEBUG - 2016-07-27 09:35:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469583336
WHERE id = '1db18442c193cd2827c190596edc0e727c9c6a91'
DEBUG - 2016-07-27 09:35:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:39 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48f0451e9504bc1ad7a400f353fcdc30c947bf2a'
DEBUG - 2016-07-27 09:35:40 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-27 09:35:40 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-27 09:35:40 --> 登录返回结果数：1
DEBUG - 2016-07-27 09:35:40 --> 成功登录
DEBUG - 2016-07-27 09:35:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469583340, data = '__ci_last_regenerate|i:1469583330;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '48f0451e9504bc1ad7a400f353fcdc30c947bf2a'
DEBUG - 2016-07-27 09:35:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:40 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:40 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48f0451e9504bc1ad7a400f353fcdc30c947bf2a'
DEBUG - 2016-07-27 09:35:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('55b4a8f92ffd4e5e95f4030d5ca6dddb', '114.91.137.232', '2016-07-27', '09:35:40', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '48f0451e9504bc1ad7a400f353fcdc30c947bf2a')
DEBUG - 2016-07-27 09:35:40 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-27 09:35:40 --> Total execution time: 0.2070
DEBUG - 2016-07-27 09:35:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469583340
WHERE id = '48f0451e9504bc1ad7a400f353fcdc30c947bf2a'
DEBUG - 2016-07-27 09:35:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:42 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:42 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:42 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c4c7338011580a7528533aa51d12aa63ff150ebc'
DEBUG - 2016-07-27 09:35:42 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-27 09:35:42 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-27 09:35:42 --> 登录返回结果数：0
DEBUG - 2016-07-27 09:35:42 --> Total execution time: 0.0760
DEBUG - 2016-07-27 09:35:42 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c4c7338011580a7528533aa51d12aa63ff150ebc', '180.153.201.212', 1469583342, '__ci_last_regenerate|i:1469583342;')
DEBUG - 2016-07-27 09:35:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:45 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:45 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48f0451e9504bc1ad7a400f353fcdc30c947bf2a'
DEBUG - 2016-07-27 09:35:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('74c78f1dfad24b659f26ba9962579bb2', '114.91.137.232', '2016-07-27', '09:35:45', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '48f0451e9504bc1ad7a400f353fcdc30c947bf2a')
DEBUG - 2016-07-27 09:35:45 --> 查询待审核订单
DEBUG - 2016-07-27 09:35:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 09:35:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:45 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:45 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:45 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:45 --> Total execution time: 0.1760
DEBUG - 2016-07-27 09:35:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469583345
WHERE id = '48f0451e9504bc1ad7a400f353fcdc30c947bf2a'
DEBUG - 2016-07-27 09:35:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b516329d42623d6691f1d827af40ad87dc0b95ef'
DEBUG - 2016-07-27 09:35:45 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b516329d42623d6691f1d827af40ad87dc0b95ef', '180.163.2.117', 1469583345, '__ci_last_regenerate|i:1469583345;')
DEBUG - 2016-07-27 09:35:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:45 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:45 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b516329d42623d6691f1d827af40ad87dc0b95ef'
DEBUG - 2016-07-27 09:35:45 --> Total execution time: 0.0790
DEBUG - 2016-07-27 09:35:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469583345
WHERE id = 'b516329d42623d6691f1d827af40ad87dc0b95ef'
DEBUG - 2016-07-27 09:35:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:46 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:46 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:46 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7b3e189bffe466b6fb5962b312f15cf366830489'
DEBUG - 2016-07-27 09:35:46 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7b3e189bffe466b6fb5962b312f15cf366830489', '101.226.69.108', 1469583346, '__ci_last_regenerate|i:1469583346;')
DEBUG - 2016-07-27 09:35:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:49 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:49 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:49 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dcf9b256d4540966b3b1f07c7d06d123c6c165d6'
DEBUG - 2016-07-27 09:35:49 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-27 09:35:49 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-27 09:35:49 --> 登录返回结果数：0
DEBUG - 2016-07-27 09:35:49 --> Total execution time: 0.0910
DEBUG - 2016-07-27 09:35:49 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('dcf9b256d4540966b3b1f07c7d06d123c6c165d6', '180.153.163.211', 1469583349, '__ci_last_regenerate|i:1469583349;')
DEBUG - 2016-07-27 09:35:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 09:35:51 --> Security Class Initialized
DEBUG - 2016-07-27 09:35:51 --> CRSF cookie Set
DEBUG - 2016-07-27 09:35:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 09:35:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48f0451e9504bc1ad7a400f353fcdc30c947bf2a'
DEBUG - 2016-07-27 09:35:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dcc4cff895e94e02a004f4c17920c7b5', '114.91.137.232', '2016-07-27', '09:35:51', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '48f0451e9504bc1ad7a400f353fcdc30c947bf2a')
DEBUG - 2016-07-27 09:35:51 --> 查询待审核订单
DEBUG - 2016-07-27 09:35:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 09:35:51 --> Total execution time: 0.0820
DEBUG - 2016-07-27 09:35:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469583351
WHERE id = '48f0451e9504bc1ad7a400f353fcdc30c947bf2a'
DEBUG - 2016-07-27 10:46:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 10:46:27 --> Security Class Initialized
DEBUG - 2016-07-27 10:46:27 --> CRSF cookie Set
DEBUG - 2016-07-27 10:46:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 10:46:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48f0451e9504bc1ad7a400f353fcdc30c947bf2a'
DEBUG - 2016-07-27 10:46:29 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '48f0451e9504bc1ad7a400f353fcdc30c947bf2a'
DEBUG - 2016-07-27 10:46:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('91c34704c21841728d081cb8f5aabb0d', '114.91.137.232', '2016-07-27', '10:46:29', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'b65d648b768e2487477503b657cfefeafe5d374e')
DEBUG - 2016-07-27 10:46:29 --> 查询待审核订单
DEBUG - 2016-07-27 10:46:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 10:46:29 --> Total execution time: 2.1528
DEBUG - 2016-07-27 10:46:29 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b65d648b768e2487477503b657cfefeafe5d374e', '114.91.137.232', 1469587589, '__ci_last_regenerate|i:1469587589;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-27 11:56:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 11:56:20 --> Security Class Initialized
DEBUG - 2016-07-27 11:56:20 --> CRSF cookie Set
DEBUG - 2016-07-27 11:56:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 11:56:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b65d648b768e2487477503b657cfefeafe5d374e'
DEBUG - 2016-07-27 11:56:20 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'b65d648b768e2487477503b657cfefeafe5d374e'
DEBUG - 2016-07-27 11:56:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('57cf2458df044476b53ac3ea24100e99', '114.91.137.232', '2016-07-27', '11:56:20', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '3ecd3f1be495532b3b9954dee32198dc3c9df571')
DEBUG - 2016-07-27 11:56:20 --> 查询待审核订单
DEBUG - 2016-07-27 11:56:20 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 11:56:20 --> Total execution time: 0.6970
DEBUG - 2016-07-27 11:56:20 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3ecd3f1be495532b3b9954dee32198dc3c9df571', '114.91.137.232', 1469591780, '__ci_last_regenerate|i:1469591780;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-27 13:14:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:21 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:21 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:21 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:21 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('425a61a551a3bd8f5f9df77b82a7e63081ab1ed4', '114.91.137.232', 1469596461, '__ci_last_regenerate|i:1469596461;')
DEBUG - 2016-07-27 13:14:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:21 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:21 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:21 --> Total execution time: 0.1750
DEBUG - 2016-07-27 13:14:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596461
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:45 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:45 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-27 13:14:45 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-27 13:14:45 --> 登录返回结果数：1
DEBUG - 2016-07-27 13:14:45 --> 成功登录
DEBUG - 2016-07-27 13:14:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596485, data = '__ci_last_regenerate|i:1469596461;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:46 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:46 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('45193aaebe6b4616b5d5e4c14d34e87d', '114.91.137.232', '2016-07-27', '13:14:46', '120340234', '/admin/order/check/8049d786fe88453f8abf87baa8f13a8f', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8049d786fe88453f8abf87baa8f13a8f'
DEBUG - 2016-07-27 13:14:46 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8049d786fe88453f8abf87baa8f13a8f' order by create_date_time desc
DEBUG - 2016-07-27 13:14:46 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8049d786fe88453f8abf87baa8f13a8f'
DEBUG - 2016-07-27 13:14:46 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8049d786fe88453f8abf87baa8f13a8f'    order by t1.lno asc
        
DEBUG - 2016-07-27 13:14:46 --> Total execution time: 0.4010
DEBUG - 2016-07-27 13:14:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596486
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:46 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:46 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8f0cb00b40834c289a69a4c9778bc7eb', '114.91.137.232', '2016-07-27', '13:14:46', '120340234', '/admin/order/check/assets/bootstrap/css/bootstrap.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:46 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:46 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:46 --> Total execution time: 0.2550
DEBUG - 2016-07-27 13:14:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596486
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:47 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:47 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5327ad1ce58e4e5697fe3fa7967eef3a', '114.91.137.232', '2016-07-27', '13:14:47', '120340234', '/admin/order/check/assets/fonts/font-awesome/4.5.0/font-awesome.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:47 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:47 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:47 --> Total execution time: 0.1540
DEBUG - 2016-07-27 13:14:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596487
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:47 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:47 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('49fc52c48dcf413db1dfc039c74e87c0', '114.91.137.232', '2016-07-27', '13:14:47', '120340234', '/admin/order/check/assets/fonts/ionicons/ionicons.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:47 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:47 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:47 --> Total execution time: 0.1230
DEBUG - 2016-07-27 13:14:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596487
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:47 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:47 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f25d72f8e98f4584b93b17babd953253', '114.91.137.232', '2016-07-27', '13:14:48', '120340234', '/admin/order/check/assets/adminlte/css/AdminLTE.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:48 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:48 --> Total execution time: 0.1380
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596488
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:48 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:48 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('555754ef7d354874a769bd1c20f3bea0', '114.91.137.232', '2016-07-27', '13:14:48', '120340234', '/admin/order/check/assets/adminlte/css/skins/_all-skins.min.css', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:48 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:48 --> Total execution time: 0.1030
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596488
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:48 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:48 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('65bfacd09be14088a5a1c5086b3baab9', '114.91.137.232', '2016-07-27', '13:14:48', '120340234', '/admin/order/check/assets/js/html5shiv.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:48 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:48 --> Total execution time: 0.1450
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596488
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:48 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:48 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4f4f7c8559294cb7ba46297de298b24a', '114.91.137.232', '2016-07-27', '13:14:48', '120340234', '/admin/order/check/assets/js/respond.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:48 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:48 --> Total execution time: 0.1870
DEBUG - 2016-07-27 13:14:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596488
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:49 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:49 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2fbede0cc08140599c7e273463ce73d5', '114.91.137.232', '2016-07-27', '13:14:49', '120340234', '/admin/order/check/assets/plugins/jQuery/jQuery-2.1.4.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:49 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:49 --> Total execution time: 0.1130
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596489
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:49 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:49 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2ca1a081bb5148429df499f6b855dcb7', '114.91.137.232', '2016-07-27', '13:14:49', '120340234', '/admin/order/check/assets/js/common.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:49 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:49 --> Total execution time: 0.1500
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596489
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:49 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:49 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:49 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:49 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c083718424b44578bf9714efb768be23', '114.91.137.232', '2016-07-27', '13:14:49', '120340234', '/admin/order/check/assets/myapp/images/logo.png', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:49 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9884594ecdf149e6b4a8a3884e7bdd58', '114.91.137.232', '2016-07-27', '13:14:49', '120340234', '/admin/order/check/assets/bootstrap/js/bootstrap.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:49 --> Total execution time: 0.3760
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596489
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:49 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:49 --> Total execution time: 0.3140
DEBUG - 2016-07-27 13:14:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596489
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:50 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:50 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('43f71315095a4dbaaee040fa655b028f', '114.91.137.232', '2016-07-27', '13:14:50', '120340234', '/admin/order/check/assets/plugins/fastclick/fastclick.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:50 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:50 --> Total execution time: 0.3950
DEBUG - 2016-07-27 13:14:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596490
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:50 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:50 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a3989c99f5ad4aa78a1819f97d4e8779', '114.91.137.232', '2016-07-27', '13:14:50', '120340234', '/admin/order/check/assets/adminlte/js/app.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:50 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:50 --> Total execution time: 0.1950
DEBUG - 2016-07-27 13:14:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596490
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:51 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:51 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('926fd2e3eea44cdb8c95e1f632544039', '114.91.137.232', '2016-07-27', '13:14:51', '120340234', '/admin/order/check/assets/plugins/sparkline/jquery.sparkline.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:51 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:51 --> Total execution time: 0.2280
DEBUG - 2016-07-27 13:14:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596491
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:51 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:51 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('35f3af8e827842438db0d79814d86bf6', '114.91.137.232', '2016-07-27', '13:14:51', '120340234', '/admin/order/check/assets/plugins/slimScroll/jquery.slimscroll.min.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:51 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:51 --> Total execution time: 0.1250
DEBUG - 2016-07-27 13:14:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596491
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:14:51 --> Security Class Initialized
DEBUG - 2016-07-27 13:14:51 --> CRSF cookie Set
DEBUG - 2016-07-27 13:14:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:14:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:14:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('be3fccb3b4344661acc22cae5b217e2a', '114.91.137.232', '2016-07-27', '13:14:52', '120340234', '/admin/order/check/assets/adminlte/js/demo.js', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4')
DEBUG - 2016-07-27 13:14:52 --> 查询待审核订单
DEBUG - 2016-07-27 13:14:52 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:14:52 --> Total execution time: 0.1310
DEBUG - 2016-07-27 13:14:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596492
WHERE id = '425a61a551a3bd8f5f9df77b82a7e63081ab1ed4'
DEBUG - 2016-07-27 13:15:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:15:12 --> Security Class Initialized
DEBUG - 2016-07-27 13:15:12 --> CRSF cookie Set
DEBUG - 2016-07-27 13:15:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:15:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3ecd3f1be495532b3b9954dee32198dc3c9df571'
DEBUG - 2016-07-27 13:15:12 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '3ecd3f1be495532b3b9954dee32198dc3c9df571'
DEBUG - 2016-07-27 13:15:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a88f89217f014c748185ddfe89ff0ea4', '114.91.137.232', '2016-07-27', '13:15:12', '120340234', '/admin/order/check/8049d786fe88453f8abf87baa8f13a8f', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68')
DEBUG - 2016-07-27 13:15:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8049d786fe88453f8abf87baa8f13a8f'
DEBUG - 2016-07-27 13:15:12 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8049d786fe88453f8abf87baa8f13a8f' order by create_date_time desc
DEBUG - 2016-07-27 13:15:12 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8049d786fe88453f8abf87baa8f13a8f'
DEBUG - 2016-07-27 13:15:12 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8049d786fe88453f8abf87baa8f13a8f'    order by t1.lno asc
        
DEBUG - 2016-07-27 13:15:12 --> Total execution time: 0.2560
DEBUG - 2016-07-27 13:15:12 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a4e71bf6ce4a29c40c391b39b4d0fa441f180f68', '114.91.137.232', 1469596512, '__ci_last_regenerate|i:1469596512;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-27 13:15:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:15:18 --> Security Class Initialized
DEBUG - 2016-07-27 13:15:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:15:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 13:15:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('87442b17ae3d457389cd0a1039862f88', '114.91.137.232', '2016-07-27', '13:15:18', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68')
DEBUG - 2016-07-27 13:15:18 --> 审核订单
DEBUG - 2016-07-27 13:15:18 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '8049d786fe88453f8abf87baa8f13a8f'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-27 13:15:18 --> 过程调用语句：  execute USP_APSOS_outorder '8049d786fe88453f8abf87baa8f13a8f'
DEBUG - 2016-07-27 13:15:24 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340234', '8049d786fe88453f8abf87baa8f13a8f', '2', '', 'b01a043d31b04a1794e1be56937ed538', '2016-07-27 13:15:24')
DEBUG - 2016-07-27 13:15:24 --> 该订单状态更新成功:2
DEBUG - 2016-07-27 13:15:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8049d786fe88453f8abf87baa8f13a8f'
DEBUG - 2016-07-27 13:15:24 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05038'
DEBUG - 2016-07-27 13:15:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:15:26 --> Security Class Initialized
DEBUG - 2016-07-27 13:15:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:15:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 13:15:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('06ded3c98228488ea5a1401ebdd276af', '114.91.137.232', '2016-07-27', '13:15:26', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68')
DEBUG - 2016-07-27 13:15:27 --> 审核订单
DEBUG - 2016-07-27 13:15:27 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '8049d786fe88453f8abf87baa8f13a8f'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-27 13:15:27 --> 过程调用语句：  execute USP_APSOS_outorder '8049d786fe88453f8abf87baa8f13a8f'
ERROR - 2016-07-27 13:15:27 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-07-27 13:15:27 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-07-27 13:15:27 --> Total execution time: 0.6000
DEBUG - 2016-07-27 13:15:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596527
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 13:15:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:15:27 --> Security Class Initialized
DEBUG - 2016-07-27 13:15:27 --> CRSF cookie Set
DEBUG - 2016-07-27 13:15:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:15:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 13:15:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c2ae2bef650a460483b97250ccd5b11f', '114.91.137.232', '2016-07-27', '13:15:27', '120340234', '/admin/order/check/8049d786fe88453f8abf87baa8f13a8f', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68')
DEBUG - 2016-07-27 13:15:27 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8049d786fe88453f8abf87baa8f13a8f'
DEBUG - 2016-07-27 13:15:27 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='8049d786fe88453f8abf87baa8f13a8f' order by create_date_time desc
DEBUG - 2016-07-27 13:15:27 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='8049d786fe88453f8abf87baa8f13a8f'
DEBUG - 2016-07-27 13:15:27 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='8049d786fe88453f8abf87baa8f13a8f'    order by t1.lno asc
        
DEBUG - 2016-07-27 13:15:27 --> Total execution time: 0.1670
DEBUG - 2016-07-27 13:15:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596527
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 13:15:29 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-27 13:15:29 --> Total execution time: 11.6717
DEBUG - 2016-07-27 13:15:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596529
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 13:15:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 13:15:31 --> Security Class Initialized
DEBUG - 2016-07-27 13:15:31 --> CRSF cookie Set
DEBUG - 2016-07-27 13:15:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 13:15:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 13:15:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a0fcf01b86f24853b751fd8a0c1a87f2', '114.91.137.232', '2016-07-27', '13:15:31', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68')
DEBUG - 2016-07-27 13:15:31 --> 查询待审核订单
DEBUG - 2016-07-27 13:15:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 13:15:31 --> Total execution time: 0.1270
DEBUG - 2016-07-27 13:15:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469596531
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 15:08:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 15:08:38 --> Security Class Initialized
DEBUG - 2016-07-27 15:08:38 --> CRSF cookie Set
DEBUG - 2016-07-27 15:08:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 15:08:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 15:08:40 --> Security Class Initialized
DEBUG - 2016-07-27 15:08:40 --> CRSF cookie Set
DEBUG - 2016-07-27 15:08:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 15:08:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 15:08:40 --> Security Class Initialized
DEBUG - 2016-07-27 15:08:40 --> CRSF cookie Set
DEBUG - 2016-07-27 15:08:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 15:08:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 15:08:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 15:08:41 --> Security Class Initialized
DEBUG - 2016-07-27 15:08:41 --> CRSF cookie Set
DEBUG - 2016-07-27 15:08:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 15:08:41 --> Security Class Initialized
DEBUG - 2016-07-27 15:08:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 15:08:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 15:08:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 15:08:41 --> CRSF cookie Set
DEBUG - 2016-07-27 15:08:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 15:08:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 15:08:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 15:08:41 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 15:08:41 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 15:08:41 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 15:08:41 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 15:08:41 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a4e71bf6ce4a29c40c391b39b4d0fa441f180f68'
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('aad93686a5574214bf3826bc372dc801', '114.91.137.232', '2016-07-27', '15:08:42', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '1f6fb934e489f252994027b1b52735ba958c3c72')
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2699ec4bb5da4fa6b6c7a5fe3e980afe', '114.91.137.232', '2016-07-27', '15:08:42', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '923385c2153b93623f311b7c36bf0577bc77f62b')
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2ea1f1a51b7f4e7498b643da8e0d5200', '114.91.137.232', '2016-07-27', '15:08:42', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'd676c444886fd6b8d7949e046ad4bf6f617318f5')
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ddb5bd146d554eed87fac92a617ebf2c', '114.91.137.232', '2016-07-27', '15:08:42', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '6184e6a88441534fb34c874e15ca577aa865398a')
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ec47d49c66154612ab97a896f86ba671', '114.91.137.232', '2016-07-27', '15:08:42', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'b24fd3b0154352780dc8f1f53e03f27e7e2d4774')
DEBUG - 2016-07-27 15:08:42 --> 查询待审核订单
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 15:08:42 --> 查询待审核订单
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 15:08:42 --> 查询待审核订单
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 15:08:42 --> 查询待审核订单
DEBUG - 2016-07-27 15:08:42 --> 查询待审核订单
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 15:08:42 --> Total execution time: 2.4001
DEBUG - 2016-07-27 15:08:42 --> Total execution time: 1.0591
DEBUG - 2016-07-27 15:08:42 --> Total execution time: 1.1841
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6184e6a88441534fb34c874e15ca577aa865398a', '114.91.137.232', 1469603322, '__ci_last_regenerate|i:1469603321;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d676c444886fd6b8d7949e046ad4bf6f617318f5', '114.91.137.232', 1469603322, '__ci_last_regenerate|i:1469603321;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b24fd3b0154352780dc8f1f53e03f27e7e2d4774', '114.91.137.232', 1469603322, '__ci_last_regenerate|i:1469603321;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-27 15:08:42 --> Total execution time: 4.4913
DEBUG - 2016-07-27 15:08:42 --> Total execution time: 2.4241
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('1f6fb934e489f252994027b1b52735ba958c3c72', '114.91.137.232', 1469603322, '__ci_last_regenerate|i:1469603321;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-27 15:08:42 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('923385c2153b93623f311b7c36bf0577bc77f62b', '114.91.137.232', 1469603322, '__ci_last_regenerate|i:1469603321;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-27 15:08:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 15:08:45 --> Security Class Initialized
DEBUG - 2016-07-27 15:08:45 --> CRSF cookie Set
DEBUG - 2016-07-27 15:08:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 15:08:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd676c444886fd6b8d7949e046ad4bf6f617318f5'
DEBUG - 2016-07-27 15:08:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('07e8375a2e014f4483f364c6ea41ab1f', '114.91.137.232', '2016-07-27', '15:08:45', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'd676c444886fd6b8d7949e046ad4bf6f617318f5')
DEBUG - 2016-07-27 15:08:45 --> 查询待审核订单
DEBUG - 2016-07-27 15:08:45 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 15:08:45 --> Total execution time: 0.1120
DEBUG - 2016-07-27 15:08:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469603325
WHERE id = 'd676c444886fd6b8d7949e046ad4bf6f617318f5'
DEBUG - 2016-07-27 15:59:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 15:59:30 --> Security Class Initialized
DEBUG - 2016-07-27 15:59:30 --> CRSF cookie Set
DEBUG - 2016-07-27 15:59:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 15:59:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd676c444886fd6b8d7949e046ad4bf6f617318f5'
DEBUG - 2016-07-27 15:59:30 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'd676c444886fd6b8d7949e046ad4bf6f617318f5'
DEBUG - 2016-07-27 15:59:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1d88701731d34460a0555bed72a19714', '114.91.137.232', '2016-07-27', '15:59:30', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '713219cfd5214f5f2d9e8f3f7acff89cff3144ad')
DEBUG - 2016-07-27 15:59:30 --> 查询待审核订单
DEBUG - 2016-07-27 15:59:30 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 15:59:30 --> Total execution time: 0.1420
DEBUG - 2016-07-27 15:59:30 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('713219cfd5214f5f2d9e8f3f7acff89cff3144ad', '114.91.137.232', 1469606370, '__ci_last_regenerate|i:1469606370;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-27 15:59:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 15:59:31 --> Security Class Initialized
DEBUG - 2016-07-27 15:59:31 --> CRSF cookie Set
DEBUG - 2016-07-27 15:59:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 15:59:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '713219cfd5214f5f2d9e8f3f7acff89cff3144ad'
DEBUG - 2016-07-27 15:59:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2450dad5d8fc41cdaf89e585c8626821', '114.91.137.232', '2016-07-27', '15:59:31', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', '713219cfd5214f5f2d9e8f3f7acff89cff3144ad')
DEBUG - 2016-07-27 15:59:31 --> 查询待审核订单
DEBUG - 2016-07-27 15:59:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 15:59:31 --> Total execution time: 0.1280
DEBUG - 2016-07-27 15:59:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469606371
WHERE id = '713219cfd5214f5f2d9e8f3f7acff89cff3144ad'
DEBUG - 2016-07-27 19:12:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 19:12:24 --> CRSF cookie Set
DEBUG - 2016-07-27 19:12:24 --> Security Class Initialized
DEBUG - 2016-07-27 19:12:24 --> CRSF cookie Set
DEBUG - 2016-07-27 19:12:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 19:12:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bbc9919e3fbc6bc5ddef7c39ec4d27de70c97685'
DEBUG - 2016-07-27 19:12:25 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('bbc9919e3fbc6bc5ddef7c39ec4d27de70c97685', '114.91.137.232', 1469617945, '__ci_last_regenerate|i:1469617945;')
DEBUG - 2016-07-27 19:12:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 19:12:25 --> Security Class Initialized
DEBUG - 2016-07-27 19:12:25 --> CRSF cookie Set
DEBUG - 2016-07-27 19:12:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 19:12:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bbc9919e3fbc6bc5ddef7c39ec4d27de70c97685'
DEBUG - 2016-07-27 19:12:25 --> Total execution time: 0.0936
DEBUG - 2016-07-27 19:12:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469617945
WHERE id = 'bbc9919e3fbc6bc5ddef7c39ec4d27de70c97685'
DEBUG - 2016-07-27 19:12:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 19:12:25 --> CRSF cookie Set
DEBUG - 2016-07-27 19:12:25 --> Security Class Initialized
DEBUG - 2016-07-27 19:12:25 --> CRSF cookie Set
DEBUG - 2016-07-27 19:12:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 19:12:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '283f90ab290e008178785871d11e3bda37f5ac25'
DEBUG - 2016-07-27 19:12:25 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('283f90ab290e008178785871d11e3bda37f5ac25', '101.226.66.172', 1469617945, '__ci_last_regenerate|i:1469617945;')
DEBUG - 2016-07-27 19:12:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 19:12:32 --> CRSF cookie Set
DEBUG - 2016-07-27 19:12:32 --> Security Class Initialized
DEBUG - 2016-07-27 19:12:32 --> CRSF cookie Set
DEBUG - 2016-07-27 19:12:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 19:12:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 19:12:32 --> Security Class Initialized
DEBUG - 2016-07-27 19:12:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3d5604a5a6ef3a665f17d688d66aea43246afeb9'
DEBUG - 2016-07-27 19:12:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 19:12:32 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3d5604a5a6ef3a665f17d688d66aea43246afeb9', '180.153.205.254', 1469617952, '__ci_last_regenerate|i:1469617952;')
DEBUG - 2016-07-27 19:12:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bbc9919e3fbc6bc5ddef7c39ec4d27de70c97685'
DEBUG - 2016-07-27 19:12:32 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-27 19:12:32 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-27 19:12:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 19:12:32 --> Security Class Initialized
DEBUG - 2016-07-27 19:12:32 --> CRSF cookie Set
DEBUG - 2016-07-27 19:12:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 19:12:32 --> 登录返回结果数：1
DEBUG - 2016-07-27 19:12:32 --> 成功登录
DEBUG - 2016-07-27 19:12:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469617952, data = '__ci_last_regenerate|i:1469617945;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'bbc9919e3fbc6bc5ddef7c39ec4d27de70c97685'
DEBUG - 2016-07-27 19:12:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3d5604a5a6ef3a665f17d688d66aea43246afeb9'
DEBUG - 2016-07-27 19:12:32 --> Total execution time: 0.0624
DEBUG - 2016-07-27 19:12:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469617952
WHERE id = '3d5604a5a6ef3a665f17d688d66aea43246afeb9'
DEBUG - 2016-07-27 19:12:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 19:12:32 --> Security Class Initialized
DEBUG - 2016-07-27 19:12:32 --> CRSF cookie Set
DEBUG - 2016-07-27 19:12:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 19:12:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bbc9919e3fbc6bc5ddef7c39ec4d27de70c97685'
DEBUG - 2016-07-27 19:12:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1981249fadc64efeaa62581a18670f7b', '114.91.137.232', '2016-07-27', '19:12:32', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'bbc9919e3fbc6bc5ddef7c39ec4d27de70c97685')
DEBUG - 2016-07-27 19:12:32 --> 查询待审核订单
DEBUG - 2016-07-27 19:12:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 19:12:32 --> Total execution time: 0.1404
DEBUG - 2016-07-27 19:12:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469617952
WHERE id = 'bbc9919e3fbc6bc5ddef7c39ec4d27de70c97685'
DEBUG - 2016-07-27 19:12:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-27 19:12:35 --> Security Class Initialized
DEBUG - 2016-07-27 19:12:35 --> CRSF cookie Set
DEBUG - 2016-07-27 19:12:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-27 19:12:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bbc9919e3fbc6bc5ddef7c39ec4d27de70c97685'
DEBUG - 2016-07-27 19:12:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4663c868e9a34377879373165d5c13de', '114.91.137.232', '2016-07-27', '19:12:35', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36 Core/1.47.640.400 QQBrowser/9.4.8309.400', 'bbc9919e3fbc6bc5ddef7c39ec4d27de70c97685')
DEBUG - 2016-07-27 19:12:35 --> 查询待审核订单
DEBUG - 2016-07-27 19:12:35 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-27 19:12:35 --> Total execution time: 0.1092
DEBUG - 2016-07-27 19:12:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1469617955
WHERE id = 'bbc9919e3fbc6bc5ddef7c39ec4d27de70c97685'
