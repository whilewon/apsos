<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-21 12:04:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:01 --> No URI present. Default controller set.
DEBUG - 2016-06-21 12:04:01 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:01 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:01 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:01 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0873e830963cc942fa7435442f43e9a1d998b6f0', '114.91.131.17', 1466481841, '__ci_last_regenerate|i:1466481841;')
DEBUG - 2016-06-21 12:04:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:02 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:02 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:02 --> Total execution time: 0.1320
DEBUG - 2016-06-21 12:04:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481842
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:04 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:04 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-21 12:04:04 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-21 12:04:04 --> 登录返回结果数：1
DEBUG - 2016-06-21 12:04:04 --> 成功登录
DEBUG - 2016-06-21 12:04:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481844, data = '__ci_last_regenerate|i:1466481841;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:04 --> No URI present. Default controller set.
DEBUG - 2016-06-21 12:04:04 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:04 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4553e180e77747c4b89d086c5632f57d', '114.91.131.17', '2016-06-21', '12:04:04', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:04 --> Total execution time: 0.1370
DEBUG - 2016-06-21 12:04:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481844
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:07 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:07 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1431ff8157c547538637cd9438c79541', '114.91.131.17', '2016-06-21', '12:04:07', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:07 --> 查询待审核订单
DEBUG - 2016-06-21 12:04:07 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:04:07 --> Total execution time: 0.1890
DEBUG - 2016-06-21 12:04:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481847
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:11 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:11 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e0c3b365abae475dadf050bf0f77de4d', '114.91.131.17', '2016-06-21', '12:04:11', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:04:11 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:04:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:04:11 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:04:11 --> Total execution time: 0.1260
DEBUG - 2016-06-21 12:04:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481851
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:17 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d3c56080f76848b18badc05996236b48', '114.91.131.17', '2016-06-21', '12:04:17', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:17 --> 审核订单
DEBUG - 2016-06-21 12:04:17 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '9608e7694c17436fb9747b119aefef13'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-21 12:04:17 --> 过程调用语句：  execute USP_APSOS_outorder '9608e7694c17436fb9747b119aefef13'
ERROR - 2016-06-21 12:04:22 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-21 12:04:22 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-21 12:04:22 --> Total execution time: 4.8013
DEBUG - 2016-06-21 12:04:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481862
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:22 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:22 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:22 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('82182d9d2b504c979d39d646a4666670', '114.91.131.17', '2016-06-21', '12:04:22', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:04:22 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:04:22 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:04:22 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:04:22 --> Total execution time: 0.0990
DEBUG - 2016-06-21 12:04:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481862
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:31 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('13b21052fcad4733a108055f02895531', '114.91.131.17', '2016-06-21', '12:04:31', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:31 --> 审核订单
DEBUG - 2016-06-21 12:04:31 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '9608e7694c17436fb9747b119aefef13'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-21 12:04:31 --> 过程调用语句：  execute USP_APSOS_outorder '9608e7694c17436fb9747b119aefef13'
ERROR - 2016-06-21 12:04:31 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-21 12:04:31 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-21 12:04:31 --> Total execution time: 0.1300
DEBUG - 2016-06-21 12:04:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481871
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:31 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:31 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('935b31ca1026425db6cd2299714f4f9a', '114.91.131.17', '2016-06-21', '12:04:31', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:04:31 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:04:31 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:04:31 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:04:31 --> Total execution time: 0.1240
DEBUG - 2016-06-21 12:04:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481871
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:35 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:35 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:35 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('32e2852d70714f54be3f8abac3339cad', '114.91.131.17', '2016-06-21', '12:04:35', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:35 --> 查询订单
DEBUG - 2016-06-21 12:04:35 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-21 12:04:35 --> Total execution time: 0.7600
DEBUG - 2016-06-21 12:04:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481875
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:37 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:37 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:37 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('971e6cc1c9944a0b9e2dc2745cafb3df', '114.91.131.17', '2016-06-21', '12:04:37', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:37 --> 查询待审核订单
DEBUG - 2016-06-21 12:04:37 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:04:37 --> Total execution time: 0.0770
DEBUG - 2016-06-21 12:04:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481877
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:39 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:39 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:39 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('abf36909368b45f5ad62b9f71f1a6d19', '114.91.131.17', '2016-06-21', '12:04:40', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-21 12:04:40 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-21 12:04:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-21 12:04:40 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:04:40 --> Total execution time: 0.1110
DEBUG - 2016-06-21 12:04:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481880
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:47 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('18523ab65c90467fb868912ab93f4cd0', '114.91.131.17', '2016-06-21', '12:04:47', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:47 --> 审核订单
DEBUG - 2016-06-21 12:04:47 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-21 12:04:47 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-21 12:04:48 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-21 12:04:48 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-21 12:04:48 --> Total execution time: 1.6831
DEBUG - 2016-06-21 12:04:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481888
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:48 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:48 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a0619509600f4fdeb77b1cb665a5f826', '114.91.131.17', '2016-06-21', '12:04:48', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-21 12:04:48 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-21 12:04:48 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-21 12:04:48 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:04:48 --> Total execution time: 0.1070
DEBUG - 2016-06-21 12:04:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481888
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:52 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:52 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('70503b0f3f40466ea41fa1c26a76561e', '114.91.131.17', '2016-06-21', '12:04:52', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:52 --> 查询待审核订单
DEBUG - 2016-06-21 12:04:52 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:04:52 --> Total execution time: 0.0810
DEBUG - 2016-06-21 12:04:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481892
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:04:56 --> Security Class Initialized
DEBUG - 2016-06-21 12:04:56 --> CRSF cookie Set
DEBUG - 2016-06-21 12:04:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:04:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:04:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8d68255b552c4747ba3e80e94487e3a5', '114.91.131.17', '2016-06-21', '12:04:56', '120340235', '/admin/order/check/7106f9c4f77c4981a5131802b931cb29', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:04:56 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7106f9c4f77c4981a5131802b931cb29'
DEBUG - 2016-06-21 12:04:56 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7106f9c4f77c4981a5131802b931cb29' order by create_date_time desc
DEBUG - 2016-06-21 12:04:56 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7106f9c4f77c4981a5131802b931cb29'
DEBUG - 2016-06-21 12:04:56 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7106f9c4f77c4981a5131802b931cb29'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:04:56 --> Total execution time: 0.0960
DEBUG - 2016-06-21 12:04:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481896
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:05:00 --> Security Class Initialized
DEBUG - 2016-06-21 12:05:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:05:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6f01817b455547c0a26df76d2d22df1e', '114.91.131.17', '2016-06-21', '12:05:00', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:05:00 --> 审核订单
DEBUG - 2016-06-21 12:05:00 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '7106f9c4f77c4981a5131802b931cb29'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-21 12:05:00 --> 过程调用语句：  execute USP_APSOS_outorder '7106f9c4f77c4981a5131802b931cb29'
DEBUG - 2016-06-21 12:05:01 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340235', '7106f9c4f77c4981a5131802b931cb29', '2', '', 'bde27436775348f49277709f5644ec04', '2016-06-21 12:05:01')
DEBUG - 2016-06-21 12:05:01 --> 该订单状态更新成功:2
DEBUG - 2016-06-21 12:05:01 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7106f9c4f77c4981a5131802b931cb29'
DEBUG - 2016-06-21 12:05:01 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05035'
DEBUG - 2016-06-21 12:05:03 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-21 12:05:03 --> Total execution time: 2.8682
DEBUG - 2016-06-21 12:05:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481903
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:03 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:05:03 --> Security Class Initialized
DEBUG - 2016-06-21 12:05:03 --> CRSF cookie Set
DEBUG - 2016-06-21 12:05:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:05:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2f528a30c3c145049bf8984522702576', '114.91.131.17', '2016-06-21', '12:05:03', '120340235', '/admin/order/check/7106f9c4f77c4981a5131802b931cb29', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:05:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7106f9c4f77c4981a5131802b931cb29'
DEBUG - 2016-06-21 12:05:03 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='7106f9c4f77c4981a5131802b931cb29' order by create_date_time desc
DEBUG - 2016-06-21 12:05:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='7106f9c4f77c4981a5131802b931cb29'
DEBUG - 2016-06-21 12:05:03 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='7106f9c4f77c4981a5131802b931cb29'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:05:03 --> Total execution time: 0.0850
DEBUG - 2016-06-21 12:05:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481903
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:05:11 --> Security Class Initialized
DEBUG - 2016-06-21 12:05:11 --> CRSF cookie Set
DEBUG - 2016-06-21 12:05:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:05:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bed29fb72c6743789734692817a5a7ff', '114.91.131.17', '2016-06-21', '12:05:11', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:05:11 --> 查询待发货订单
DEBUG - 2016-06-21 12:05:11 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-21 12:05:12 --> Total execution time: 0.1830
DEBUG - 2016-06-21 12:05:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481912
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:13 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:05:13 --> Security Class Initialized
DEBUG - 2016-06-21 12:05:13 --> CRSF cookie Set
DEBUG - 2016-06-21 12:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:05:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:13 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b259e6d0614c4dacb0e9dec7b3043cb4', '114.91.131.17', '2016-06-21', '12:05:13', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:05:13 --> 查询待审核订单
DEBUG - 2016-06-21 12:05:13 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:05:13 --> Total execution time: 0.0930
DEBUG - 2016-06-21 12:05:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481913
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:05:14 --> Security Class Initialized
DEBUG - 2016-06-21 12:05:14 --> CRSF cookie Set
DEBUG - 2016-06-21 12:05:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:05:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('86040b461fb64604bbc9d86069c2c942', '114.91.131.17', '2016-06-21', '12:05:14', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:05:14 --> 查询待审核订单
DEBUG - 2016-06-21 12:05:14 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:05:14 --> Total execution time: 0.1000
DEBUG - 2016-06-21 12:05:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481914
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:16 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:05:16 --> Security Class Initialized
DEBUG - 2016-06-21 12:05:16 --> CRSF cookie Set
DEBUG - 2016-06-21 12:05:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:05:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('068014de35294526b7c7c3d7a1a777f8', '114.91.131.17', '2016-06-21', '12:05:16', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:05:16 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:05:16 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:05:16 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:05:16 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:05:16 --> Total execution time: 0.0980
DEBUG - 2016-06-21 12:05:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481916
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:05:23 --> Security Class Initialized
DEBUG - 2016-06-21 12:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:05:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('42513a1f369c42ae93179ca144b962c1', '114.91.131.17', '2016-06-21', '12:05:24', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:05:24 --> 审核订单
DEBUG - 2016-06-21 12:05:24 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '9608e7694c17436fb9747b119aefef13'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-21 12:05:24 --> 过程调用语句：  execute USP_APSOS_outorder '9608e7694c17436fb9747b119aefef13'
ERROR - 2016-06-21 12:05:24 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-21 12:05:24 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-21 12:05:24 --> Total execution time: 1.0121
DEBUG - 2016-06-21 12:05:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481924
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:05:25 --> Security Class Initialized
DEBUG - 2016-06-21 12:05:25 --> CRSF cookie Set
DEBUG - 2016-06-21 12:05:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:05:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:05:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c0d984a6150d426f8e8807bcde4da386', '114.91.131.17', '2016-06-21', '12:05:25', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:05:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:05:25 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:05:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:05:25 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:05:25 --> Total execution time: 0.0950
DEBUG - 2016-06-21 12:05:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466481925
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:08:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:08:57 --> Security Class Initialized
DEBUG - 2016-06-21 12:08:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:08:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:08:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b5a92377360345c3b6a656f3f7b24dbc', '114.91.131.17', '2016-06-21', '12:08:57', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:08:57 --> 审核订单
DEBUG - 2016-06-21 12:08:57 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '9608e7694c17436fb9747b119aefef13'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-21 12:08:57 --> 过程调用语句：  execute USP_APSOS_outorder '9608e7694c17436fb9747b119aefef13'
ERROR - 2016-06-21 12:08:57 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-21 12:08:57 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-21 12:08:57 --> Total execution time: 0.1800
DEBUG - 2016-06-21 12:08:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482137
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:08:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:08:58 --> Security Class Initialized
DEBUG - 2016-06-21 12:08:58 --> CRSF cookie Set
DEBUG - 2016-06-21 12:08:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:08:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:08:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4be6c72d6d3d41c0ba88143881dc3d2d', '114.91.131.17', '2016-06-21', '12:08:58', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:08:58 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:08:58 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:08:58 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:08:58 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:08:58 --> Total execution time: 0.1040
DEBUG - 2016-06-21 12:08:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482138
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:09:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:09:00 --> Security Class Initialized
DEBUG - 2016-06-21 12:09:00 --> CRSF cookie Set
DEBUG - 2016-06-21 12:09:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:09:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:09:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('eec3aaa2ac784679acf325c0500c9c48', '114.91.131.17', '2016-06-21', '12:09:00', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0873e830963cc942fa7435442f43e9a1d998b6f0')
DEBUG - 2016-06-21 12:09:00 --> 查询待审核订单
DEBUG - 2016-06-21 12:09:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:09:00 --> Total execution time: 0.0910
DEBUG - 2016-06-21 12:09:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482140
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:09:03 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:09:03 --> Security Class Initialized
DEBUG - 2016-06-21 12:09:03 --> CRSF cookie Set
DEBUG - 2016-06-21 12:09:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:09:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:09:03 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '0873e830963cc942fa7435442f43e9a1d998b6f0'
DEBUG - 2016-06-21 12:09:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e0c4297dd1f04200b944a1ce5285f61e', '114.91.131.17', '2016-06-21', '12:09:03', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:09:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:09:03 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:09:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:09:03 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:09:03 --> Total execution time: 0.1020
DEBUG - 2016-06-21 12:09:03 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('54d6212626214d5c2d775b8213b47f235b1099d4', '114.91.131.17', 1466482143, '__ci_last_regenerate|i:1466482143;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-21 12:09:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:09:05 --> Security Class Initialized
DEBUG - 2016-06-21 12:09:05 --> CRSF cookie Set
DEBUG - 2016-06-21 12:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:09:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:09:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a347321d482f4062810e896c5549522d', '114.91.131.17', '2016-06-21', '12:09:05', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13?uuid=9608e7694c17436fb9747b119aefef13&consignee_name=%E6%9D%A8%E5%BF%A0%E5%9B%BD&telphone=13671903982&address=%E4%B8%8A%E6%B5%B7%E5%B8%82%E6%9B%B9%E5%AE%89%E8%B7%AF1926%E5%8F%B737%E5%B9%A2107%E5%AE%A4', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:09:05 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:09:05 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:09:06 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:09:06 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:09:06 --> Total execution time: 0.0980
DEBUG - 2016-06-21 12:09:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482146
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:09:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:09:10 --> Security Class Initialized
DEBUG - 2016-06-21 12:09:10 --> CRSF cookie Set
DEBUG - 2016-06-21 12:09:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:09:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:09:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d5db962e12444528bc0884c96c4e099b', '114.91.131.17', '2016-06-21', '12:09:10', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13?uuid=9608e7694c17436fb9747b119aefef13&consignee_name=%E6%9D%A8%E5%BF%A0%E5%9B%BD&telphone=13671903982&address=%E4%B8%8A%E6%B5%B7%E5%B8%82%E6%9B%B9%E5%AE%89%E8%B7%AF1926%E5%8F%B737%E5%B9%A2107%E5%AE%A4', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:09:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:09:10 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:09:10 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:09:10 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:09:11 --> Total execution time: 0.1100
DEBUG - 2016-06-21 12:09:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482151
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:09:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:09:20 --> Security Class Initialized
DEBUG - 2016-06-21 12:09:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:09:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:09:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6466160630614f20a7ac138e099c7f47', '114.91.131.17', '2016-06-21', '12:09:20', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:09:20 --> 审核订单
DEBUG - 2016-06-21 12:09:20 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '9608e7694c17436fb9747b119aefef13'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-21 12:09:20 --> 过程调用语句：  execute USP_APSOS_outorder '9608e7694c17436fb9747b119aefef13'
ERROR - 2016-06-21 12:09:20 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-21 12:09:20 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-21 12:09:20 --> Total execution time: 0.1670
DEBUG - 2016-06-21 12:09:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482160
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:09:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:09:21 --> Security Class Initialized
DEBUG - 2016-06-21 12:09:21 --> CRSF cookie Set
DEBUG - 2016-06-21 12:09:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:09:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:09:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e62dd18a8f754475b6e9d97748b8693d', '114.91.131.17', '2016-06-21', '12:09:21', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13?uuid=9608e7694c17436fb9747b119aefef13&consignee_name=%E6%9D%A8%E5%BF%A0%E5%9B%BD&telphone=13671903982&address=%E4%B8%8A%E6%B5%B7%E5%B8%82%E6%9B%B9%E5%AE%89%E8%B7%AF1926%E5%8F%B737%E5%B9%A2107%E5%AE%A4', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:09:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:09:21 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:09:21 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:09:21 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:09:21 --> Total execution time: 0.1430
DEBUG - 2016-06-21 12:09:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482161
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:09:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:09:25 --> Security Class Initialized
DEBUG - 2016-06-21 12:09:25 --> CRSF cookie Set
DEBUG - 2016-06-21 12:09:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:09:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:09:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2b6f4f3b9919437f989ef2971d1fbe73', '114.91.131.17', '2016-06-21', '12:09:25', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:09:25 --> 查询待审核订单
DEBUG - 2016-06-21 12:09:25 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:09:25 --> Total execution time: 0.0910
DEBUG - 2016-06-21 12:09:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482165
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:09:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:09:26 --> Security Class Initialized
DEBUG - 2016-06-21 12:09:26 --> CRSF cookie Set
DEBUG - 2016-06-21 12:09:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:09:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:09:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f55603248db64beb9e1b50b51a1b945e', '114.91.131.17', '2016-06-21', '12:09:26', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:09:26 --> 查询待审核订单
DEBUG - 2016-06-21 12:09:26 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:09:26 --> Total execution time: 0.0800
DEBUG - 2016-06-21 12:09:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482166
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:11:38 --> Security Class Initialized
DEBUG - 2016-06-21 12:11:38 --> CRSF cookie Set
DEBUG - 2016-06-21 12:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:11:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:11:38 --> Security Class Initialized
DEBUG - 2016-06-21 12:11:38 --> CRSF cookie Set
DEBUG - 2016-06-21 12:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bd1785aeec6941318b892d5612b3eb69', '114.91.131.17', '2016-06-21', '12:11:38', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c33e9e233ea54c24a1990f83a270b4bc', '114.91.131.17', '2016-06-21', '12:11:38', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:11:38 --> Total execution time: 0.1180
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482298
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:11:38 --> Total execution time: 0.1160
DEBUG - 2016-06-21 12:11:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482298
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:11:44 --> Security Class Initialized
DEBUG - 2016-06-21 12:11:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:11:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7efa9b32fd324483975d9c5816e27d28', '114.91.131.17', '2016-06-21', '12:11:44', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:11:44 --> 审核订单
DEBUG - 2016-06-21 12:11:44 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '9608e7694c17436fb9747b119aefef13'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-21 12:11:44 --> 过程调用语句：  execute USP_APSOS_outorder '9608e7694c17436fb9747b119aefef13'
ERROR - 2016-06-21 12:11:45 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-21 12:11:45 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-21 12:11:45 --> Total execution time: 0.8951
DEBUG - 2016-06-21 12:11:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482305
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:11:45 --> Security Class Initialized
DEBUG - 2016-06-21 12:11:45 --> CRSF cookie Set
DEBUG - 2016-06-21 12:11:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:11:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f622c3646d8d4cdbbbeb5a63b1a22afd', '114.91.131.17', '2016-06-21', '12:11:45', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:11:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:11:45 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:11:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:11:45 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:11:45 --> Total execution time: 0.0980
DEBUG - 2016-06-21 12:11:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482305
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:47 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:11:47 --> Security Class Initialized
DEBUG - 2016-06-21 12:11:47 --> CRSF cookie Set
DEBUG - 2016-06-21 12:11:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:11:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bdd056337c7444ccb8e358a550c6bad4', '114.91.131.17', '2016-06-21', '12:11:47', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:11:47 --> 查询待审核订单
DEBUG - 2016-06-21 12:11:47 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:11:47 --> Total execution time: 0.0860
DEBUG - 2016-06-21 12:11:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482307
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:11:49 --> Security Class Initialized
DEBUG - 2016-06-21 12:11:49 --> CRSF cookie Set
DEBUG - 2016-06-21 12:11:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:11:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f2673d7247cc4520ae934b9863ba90bb', '114.91.131.17', '2016-06-21', '12:11:49', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:11:49 --> 查询待审核订单
DEBUG - 2016-06-21 12:11:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:11:49 --> Total execution time: 0.0910
DEBUG - 2016-06-21 12:11:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482309
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:11:50 --> Security Class Initialized
DEBUG - 2016-06-21 12:11:50 --> CRSF cookie Set
DEBUG - 2016-06-21 12:11:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:11:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('71a5f7556ce24dfea58a72949c8cc7cd', '114.91.131.17', '2016-06-21', '12:11:50', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:11:50 --> 查询待审核订单
DEBUG - 2016-06-21 12:11:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:11:50 --> Total execution time: 0.1010
DEBUG - 2016-06-21 12:11:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482310
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:11:51 --> Security Class Initialized
DEBUG - 2016-06-21 12:11:51 --> CRSF cookie Set
DEBUG - 2016-06-21 12:11:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:11:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('055226138d694306850296ace4a0eb03', '114.91.131.17', '2016-06-21', '12:11:51', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:11:51 --> 查询订单
DEBUG - 2016-06-21 12:11:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-21 12:11:51 --> Total execution time: 0.1140
DEBUG - 2016-06-21 12:11:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482311
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:11:54 --> Security Class Initialized
DEBUG - 2016-06-21 12:11:54 --> CRSF cookie Set
DEBUG - 2016-06-21 12:11:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:11:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4c866a7f6c9b465686d1b45d6772f299', '114.91.131.17', '2016-06-21', '12:11:54', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:11:54 --> 查询待审核订单
DEBUG - 2016-06-21 12:11:54 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:11:54 --> Total execution time: 0.0890
DEBUG - 2016-06-21 12:11:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482314
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:11:56 --> Security Class Initialized
DEBUG - 2016-06-21 12:11:56 --> CRSF cookie Set
DEBUG - 2016-06-21 12:11:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:11:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:11:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c06dfa3651be4e9da0dfe2fb44742abc', '114.91.131.17', '2016-06-21', '12:11:56', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:11:56 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-21 12:11:56 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-21 12:11:56 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-21 12:11:56 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:11:56 --> Total execution time: 0.1000
DEBUG - 2016-06-21 12:11:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482316
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:12:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:12:02 --> Security Class Initialized
DEBUG - 2016-06-21 12:12:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:12:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:12:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2251a2b2a1cb4a26ba44f847de241c44', '114.91.131.17', '2016-06-21', '12:12:02', '120340235', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:12:02 --> 审核订单
DEBUG - 2016-06-21 12:12:02 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = 'da40b2559bfa443faedc2ebd1e55bb93'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-06-21 12:12:02 --> 过程调用语句：  execute USP_APSOS_outorder 'da40b2559bfa443faedc2ebd1e55bb93'
ERROR - 2016-06-21 12:12:03 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\admin\models\Order_model.php 241
DEBUG - 2016-06-21 12:12:03 --> {"json_header":{"state":false,"msg":"\u751f\u6210\u5b9e\u53d1\u8d27\u5355\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5"},"json_data":[]}
DEBUG - 2016-06-21 12:12:03 --> Total execution time: 0.5800
DEBUG - 2016-06-21 12:12:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482323
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:12:03 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:12:03 --> Security Class Initialized
DEBUG - 2016-06-21 12:12:03 --> CRSF cookie Set
DEBUG - 2016-06-21 12:12:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:12:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:12:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6fcc47258c544f4bb1ccc85d6b9fb0ba', '114.91.131.17', '2016-06-21', '12:12:03', '120340235', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:12:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-21 12:12:03 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-06-21 12:12:03 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-06-21 12:12:03 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:12:03 --> Total execution time: 0.0870
DEBUG - 2016-06-21 12:12:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482323
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:12:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:12:07 --> Security Class Initialized
DEBUG - 2016-06-21 12:12:07 --> CRSF cookie Set
DEBUG - 2016-06-21 12:12:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:12:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:12:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('002645cd13824debbef954d1dedc1ecc', '114.91.131.17', '2016-06-21', '12:12:07', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '54d6212626214d5c2d775b8213b47f235b1099d4')
DEBUG - 2016-06-21 12:12:07 --> 查询待发货订单
DEBUG - 2016-06-21 12:12:07 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-06-21 12:12:07 --> Total execution time: 0.0840
DEBUG - 2016-06-21 12:12:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466482327
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:47:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:47:00 --> Security Class Initialized
DEBUG - 2016-06-21 12:47:00 --> CRSF cookie Set
DEBUG - 2016-06-21 12:47:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:47:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:47:00 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '54d6212626214d5c2d775b8213b47f235b1099d4'
DEBUG - 2016-06-21 12:47:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5afdcc91baf74ceeb52a579492aeef1f', '114.91.131.17', '2016-06-21', '12:47:00', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad035122a682614ea5673175978203f44ffbfb5d')
DEBUG - 2016-06-21 12:47:00 --> 查询待审核订单
DEBUG - 2016-06-21 12:47:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:47:00 --> Total execution time: 0.1690
DEBUG - 2016-06-21 12:47:00 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ad035122a682614ea5673175978203f44ffbfb5d', '114.91.131.17', 1466484420, '__ci_last_regenerate|i:1466484420;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-21 12:47:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:47:01 --> Security Class Initialized
DEBUG - 2016-06-21 12:47:01 --> CRSF cookie Set
DEBUG - 2016-06-21 12:47:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:47:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad035122a682614ea5673175978203f44ffbfb5d'
DEBUG - 2016-06-21 12:47:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cd578a6a757a4248af649f08eac4d89f', '114.91.131.17', '2016-06-21', '12:47:01', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad035122a682614ea5673175978203f44ffbfb5d')
DEBUG - 2016-06-21 12:47:01 --> 查询待审核订单
DEBUG - 2016-06-21 12:47:01 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-21 12:47:01 --> Total execution time: 0.1070
DEBUG - 2016-06-21 12:47:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466484421
WHERE id = 'ad035122a682614ea5673175978203f44ffbfb5d'
DEBUG - 2016-06-21 12:47:02 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 12:47:02 --> Security Class Initialized
DEBUG - 2016-06-21 12:47:02 --> CRSF cookie Set
DEBUG - 2016-06-21 12:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 12:47:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad035122a682614ea5673175978203f44ffbfb5d'
DEBUG - 2016-06-21 12:47:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a8539b869e7145718e51f7f4f2009519', '114.91.131.17', '2016-06-21', '12:47:02', '120340235', '/admin/order/check/9608e7694c17436fb9747b119aefef13', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ad035122a682614ea5673175978203f44ffbfb5d')
DEBUG - 2016-06-21 12:47:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:47:02 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='9608e7694c17436fb9747b119aefef13' order by create_date_time desc
DEBUG - 2016-06-21 12:47:02 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='9608e7694c17436fb9747b119aefef13'
DEBUG - 2016-06-21 12:47:02 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='9608e7694c17436fb9747b119aefef13'    order by t1.lno asc
        
DEBUG - 2016-06-21 12:47:02 --> Total execution time: 0.1020
DEBUG - 2016-06-21 12:47:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466484422
WHERE id = 'ad035122a682614ea5673175978203f44ffbfb5d'
DEBUG - 2016-06-21 16:28:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 16:28:20 --> CRSF cookie Set
DEBUG - 2016-06-21 16:28:20 --> Security Class Initialized
DEBUG - 2016-06-21 16:28:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 16:28:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '22a7a4c16678496cd22d3dad74755dc62af90868'
DEBUG - 2016-06-21 16:28:20 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('22a7a4c16678496cd22d3dad74755dc62af90868', '114.91.131.17', 1466497700, '')
DEBUG - 2016-06-21 16:28:20 --> UTF-8 Support Enabled
DEBUG - 2016-06-21 16:28:20 --> Security Class Initialized
DEBUG - 2016-06-21 16:28:20 --> CRSF cookie Set
DEBUG - 2016-06-21 16:28:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-21 16:28:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '22a7a4c16678496cd22d3dad74755dc62af90868'
DEBUG - 2016-06-21 16:28:20 --> Total execution time: 0.2808
DEBUG - 2016-06-21 16:28:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466497700
WHERE id = '22a7a4c16678496cd22d3dad74755dc62af90868'
