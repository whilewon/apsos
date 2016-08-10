<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-23 10:17:50 --> UTF-8 Support Enabled
DEBUG - 2016-06-23 10:17:50 --> No URI present. Default controller set.
DEBUG - 2016-06-23 10:17:50 --> CRSF cookie Set
DEBUG - 2016-06-23 10:17:50 --> Security Class Initialized
DEBUG - 2016-06-23 10:17:50 --> CRSF cookie Set
DEBUG - 2016-06-23 10:17:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-23 10:17:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f84d95871a3c60fb71007a218bcc6440a52d5c19'
DEBUG - 2016-06-23 10:17:51 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f84d95871a3c60fb71007a218bcc6440a52d5c19', '114.91.131.17', 1466648271, '__ci_last_regenerate|i:1466648271;')
DEBUG - 2016-06-23 10:17:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-23 10:17:52 --> Security Class Initialized
DEBUG - 2016-06-23 10:17:52 --> CRSF cookie Set
DEBUG - 2016-06-23 10:17:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-23 10:17:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f84d95871a3c60fb71007a218bcc6440a52d5c19'
DEBUG - 2016-06-23 10:17:52 --> Total execution time: 0.2010
DEBUG - 2016-06-23 10:17:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466648272
WHERE id = 'f84d95871a3c60fb71007a218bcc6440a52d5c19'
DEBUG - 2016-06-23 10:17:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-23 10:17:54 --> Security Class Initialized
DEBUG - 2016-06-23 10:17:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-23 10:17:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f84d95871a3c60fb71007a218bcc6440a52d5c19'
DEBUG - 2016-06-23 10:17:54 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-23 10:17:54 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-23 10:17:54 --> 登录返回结果数：1
DEBUG - 2016-06-23 10:17:54 --> 成功登录
DEBUG - 2016-06-23 10:17:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466648274, data = '__ci_last_regenerate|i:1466648271;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'f84d95871a3c60fb71007a218bcc6440a52d5c19'
DEBUG - 2016-06-23 10:17:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-23 10:17:54 --> No URI present. Default controller set.
DEBUG - 2016-06-23 10:17:54 --> Security Class Initialized
DEBUG - 2016-06-23 10:17:54 --> CRSF cookie Set
DEBUG - 2016-06-23 10:17:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-23 10:17:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f84d95871a3c60fb71007a218bcc6440a52d5c19'
DEBUG - 2016-06-23 10:17:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4451ac5d46f04e659948598ab008c50c', '114.91.131.17', '2016-06-23', '10:17:54', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f84d95871a3c60fb71007a218bcc6440a52d5c19')
DEBUG - 2016-06-23 10:17:54 --> Total execution time: 0.2220
DEBUG - 2016-06-23 10:17:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466648274
WHERE id = 'f84d95871a3c60fb71007a218bcc6440a52d5c19'
DEBUG - 2016-06-23 10:17:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-23 10:17:57 --> Security Class Initialized
DEBUG - 2016-06-23 10:17:57 --> CRSF cookie Set
DEBUG - 2016-06-23 10:17:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-23 10:17:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f84d95871a3c60fb71007a218bcc6440a52d5c19'
DEBUG - 2016-06-23 10:17:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('66c4e0013f274c6292b5d60db3851900', '114.91.131.17', '2016-06-23', '10:17:57', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f84d95871a3c60fb71007a218bcc6440a52d5c19')
DEBUG - 2016-06-23 10:17:57 --> 查询订单
DEBUG - 2016-06-23 10:17:57 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-23 10:17:57 --> Total execution time: 0.2000
DEBUG - 2016-06-23 10:17:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466648277
WHERE id = 'f84d95871a3c60fb71007a218bcc6440a52d5c19'
DEBUG - 2016-06-23 10:18:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-23 10:18:07 --> Security Class Initialized
DEBUG - 2016-06-23 10:18:07 --> CRSF cookie Set
DEBUG - 2016-06-23 10:18:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-23 10:18:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f84d95871a3c60fb71007a218bcc6440a52d5c19'
DEBUG - 2016-06-23 10:18:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f211476f9c734be084293e6d8b9b2c92', '114.91.131.17', '2016-06-23', '10:18:07', '120340235', '/admin/order/index/db1fd10cf5d14dd3bd1bd692dc96e029', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f84d95871a3c60fb71007a218bcc6440a52d5c19')
DEBUG - 2016-06-23 10:18:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-23 10:18:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-23 10:18:07 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='db1fd10cf5d14dd3bd1bd692dc96e029' order by create_date_time desc
DEBUG - 2016-06-23 10:18:07 --> Security Class Initialized
DEBUG - 2016-06-23 10:18:07 --> CRSF cookie Set
DEBUG - 2016-06-23 10:18:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-23 10:18:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-23 10:18:07 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='db1fd10cf5d14dd3bd1bd692dc96e029'    order by t1.lno asc
        
DEBUG - 2016-06-23 10:18:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f84d95871a3c60fb71007a218bcc6440a52d5c19'
DEBUG - 2016-06-23 10:18:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dead003775fd463eb8fdfd439a8ad735', '114.91.131.17', '2016-06-23', '10:18:07', '120340235', '/admin/order/index/db1fd10cf5d14dd3bd1bd692dc96e029', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f84d95871a3c60fb71007a218bcc6440a52d5c19')
DEBUG - 2016-06-23 10:18:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-23 10:18:07 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='db1fd10cf5d14dd3bd1bd692dc96e029' order by create_date_time desc
DEBUG - 2016-06-23 10:18:07 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='db1fd10cf5d14dd3bd1bd692dc96e029'
DEBUG - 2016-06-23 10:18:07 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='db1fd10cf5d14dd3bd1bd692dc96e029'    order by t1.lno asc
        
DEBUG - 2016-06-23 10:18:08 --> Total execution time: 0.3040
DEBUG - 2016-06-23 10:18:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466648288
WHERE id = 'f84d95871a3c60fb71007a218bcc6440a52d5c19'
DEBUG - 2016-06-23 10:18:08 --> Total execution time: 0.2090
DEBUG - 2016-06-23 10:18:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1466648288
WHERE id = 'f84d95871a3c60fb71007a218bcc6440a52d5c19'
