<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-06-03 09:11:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:11:57 --> No URI present. Default controller set.
DEBUG - 2016-06-03 09:11:57 --> CRSF cookie Set
DEBUG - 2016-06-03 09:11:57 --> Security Class Initialized
DEBUG - 2016-06-03 09:11:57 --> CRSF cookie Set
DEBUG - 2016-06-03 09:11:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:11:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:11:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b', '180.168.179.118', 1464916317, '__ci_last_regenerate|i:1464916317;')
DEBUG - 2016-06-03 09:11:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:11:57 --> Security Class Initialized
DEBUG - 2016-06-03 09:11:57 --> CRSF cookie Set
DEBUG - 2016-06-03 09:11:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:11:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:11:57 --> Total execution time: 0.1248
DEBUG - 2016-06-03 09:11:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916317
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:12:03 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:12:03 --> Security Class Initialized
DEBUG - 2016-06-03 09:12:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:12:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:12:03 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-06-03 09:12:03 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-06-03 09:12:03 --> 登录返回结果数：1
DEBUG - 2016-06-03 09:12:03 --> 成功登录
DEBUG - 2016-06-03 09:12:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916323, data = '__ci_last_regenerate|i:1464916317;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:12:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:12:04 --> No URI present. Default controller set.
DEBUG - 2016-06-03 09:12:04 --> Security Class Initialized
DEBUG - 2016-06-03 09:12:04 --> CRSF cookie Set
DEBUG - 2016-06-03 09:12:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:12:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:12:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a1958268b57f408c82f1dceb85ac980a', '180.168.179.118', '2016-06-03', '09:12:04', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b')
DEBUG - 2016-06-03 09:12:04 --> Total execution time: 0.1404
DEBUG - 2016-06-03 09:12:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916324
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:12:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:12:10 --> Security Class Initialized
DEBUG - 2016-06-03 09:12:10 --> CRSF cookie Set
DEBUG - 2016-06-03 09:12:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:12:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:12:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e1682f58dc5a41b29777b83ae5f219a3', '180.168.179.118', '2016-06-03', '09:12:10', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b')
DEBUG - 2016-06-03 09:12:10 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-03 09:12:10 --> Total execution time: 0.1560
DEBUG - 2016-06-03 09:12:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916330
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:12:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:12:28 --> Security Class Initialized
DEBUG - 2016-06-03 09:12:28 --> CRSF cookie Set
DEBUG - 2016-06-03 09:12:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:12:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:12:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ebaf2348927b4a17942d1d91d397cd0d', '180.168.179.118', '2016-06-03', '09:12:28', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b')
DEBUG - 2016-06-03 09:12:28 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:12:28 --> Total execution time: 0.3120
DEBUG - 2016-06-03 09:12:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916348
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:13:15 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:13:15 --> Security Class Initialized
DEBUG - 2016-06-03 09:13:15 --> CRSF cookie Set
DEBUG - 2016-06-03 09:13:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:13:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:13:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a219d542ee7149ddadcd5c8c736bda23', '180.168.179.118', '2016-06-03', '09:13:15', '120340234', '/admin/guest/edit/K05038', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b')
DEBUG - 2016-06-03 09:13:15 --> 修改客户信息：K05038
DEBUG - 2016-06-03 09:13:15 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05038' 
DEBUG - 2016-06-03 09:13:15 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05038' 
DEBUG - 2016-06-03 09:13:15 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-03 09:13:15 --> Total execution time: 0.1404
DEBUG - 2016-06-03 09:13:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916395
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:14:30 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:14:30 --> Security Class Initialized
DEBUG - 2016-06-03 09:14:30 --> CRSF cookie Set
DEBUG - 2016-06-03 09:14:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:14:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:14:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('298f824596ac4cdf8eb0efdfed625cb9', '180.168.179.118', '2016-06-03', '09:14:30', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b')
DEBUG - 2016-06-03 09:14:30 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:14:31 --> Total execution time: 0.1248
DEBUG - 2016-06-03 09:14:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916471
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:14:32 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:14:32 --> CRSF cookie Set
DEBUG - 2016-06-03 09:14:32 --> Security Class Initialized
DEBUG - 2016-06-03 09:14:32 --> CRSF cookie Set
DEBUG - 2016-06-03 09:14:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:14:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:14:32 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6bec9823bb21048718857200b1ada92fa4a8777e', '114.91.131.17', 1464916472, '__ci_last_regenerate|i:1464916472;')
DEBUG - 2016-06-03 09:14:32 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:14:32 --> Security Class Initialized
DEBUG - 2016-06-03 09:14:32 --> CRSF cookie Set
DEBUG - 2016-06-03 09:14:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:14:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:14:32 --> Total execution time: 0.0780
DEBUG - 2016-06-03 09:14:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916472
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:14:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:14:38 --> Security Class Initialized
DEBUG - 2016-06-03 09:14:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:14:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:14:38 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-03 09:14:38 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-03 09:14:38 --> 登录返回结果数：1
DEBUG - 2016-06-03 09:14:38 --> 成功登录
DEBUG - 2016-06-03 09:14:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916478, data = '__ci_last_regenerate|i:1464916472;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:14:38 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:14:38 --> Security Class Initialized
DEBUG - 2016-06-03 09:14:38 --> CRSF cookie Set
DEBUG - 2016-06-03 09:14:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:14:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:14:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c1f5012fd1e34a55bff39175585ccbe3', '114.91.131.17', '2016-06-03', '09:14:38', '120340235', '/admin/order/check/aab58df429c94699b895396d664d5f6c', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '6bec9823bb21048718857200b1ada92fa4a8777e')
DEBUG - 2016-06-03 09:14:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 09:14:38 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aab58df429c94699b895396d664d5f6c' order by create_date_time desc
DEBUG - 2016-06-03 09:14:38 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 09:14:38 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-06-03 09:14:38 --> Total execution time: 0.3744
DEBUG - 2016-06-03 09:14:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916478
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:14:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:14:51 --> Security Class Initialized
DEBUG - 2016-06-03 09:14:51 --> CRSF cookie Set
DEBUG - 2016-06-03 09:14:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:14:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:14:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('91e2a918d7eb4d1e9a65f4fdb8760dc3', '114.91.131.17', '2016-06-03', '09:14:51', '120340235', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '6bec9823bb21048718857200b1ada92fa4a8777e')
DEBUG - 2016-06-03 09:14:51 --> 查询待审核订单
DEBUG - 2016-06-03 09:14:51 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-03 09:14:51 --> Total execution time: 0.1890
DEBUG - 2016-06-03 09:14:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916491
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:14:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:14:52 --> Security Class Initialized
DEBUG - 2016-06-03 09:14:52 --> CRSF cookie Set
DEBUG - 2016-06-03 09:14:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:14:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:14:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('737e921da746463a972eb0138fdfeea7', '114.91.131.17', '2016-06-03', '09:14:52', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '6bec9823bb21048718857200b1ada92fa4a8777e')
DEBUG - 2016-06-03 09:14:52 --> 查询订单
DEBUG - 2016-06-03 09:14:52 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-03 09:14:52 --> Total execution time: 0.4230
DEBUG - 2016-06-03 09:14:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916492
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:14:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:14:56 --> Security Class Initialized
DEBUG - 2016-06-03 09:14:56 --> CRSF cookie Set
DEBUG - 2016-06-03 09:14:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:14:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:14:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('11936e0b458246d79609f32d0d264be0', '114.91.131.17', '2016-06-03', '09:14:56', '120340235', '/admin/order/index/aab58df429c94699b895396d664d5f6c', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '6bec9823bb21048718857200b1ada92fa4a8777e')
DEBUG - 2016-06-03 09:14:56 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 09:14:56 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aab58df429c94699b895396d664d5f6c' order by create_date_time desc
DEBUG - 2016-06-03 09:14:56 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 09:14:56 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-06-03 09:14:56 --> Total execution time: 0.4090
DEBUG - 2016-06-03 09:14:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916496
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:15:08 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:15:08 --> Security Class Initialized
DEBUG - 2016-06-03 09:15:08 --> CRSF cookie Set
DEBUG - 2016-06-03 09:15:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:15:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:15:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e609c1af848e443f9ad1ac93e51623c5', '114.91.131.17', '2016-06-03', '09:15:08', '120340235', '/admin/order/true/aab58df429c94699b895396d664d5f6c', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '6bec9823bb21048718857200b1ada92fa4a8777e')
DEBUG - 2016-06-03 09:15:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 09:15:08 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 09:15:08 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-06-03 09:15:08 --> Total execution time: 0.1248
DEBUG - 2016-06-03 09:15:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916508
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:19:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:19:52 --> Security Class Initialized
DEBUG - 2016-06-03 09:19:52 --> CRSF cookie Set
DEBUG - 2016-06-03 09:19:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:19:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:19:52 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '6bec9823bb21048718857200b1ada92fa4a8777e'
DEBUG - 2016-06-03 09:19:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1e57cf06471d4d92a76baa088696bbdb', '114.91.131.17', '2016-06-03', '09:19:52', '120340235', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'afba0e952f3a0564c6305827716d88eeaed1e758')
DEBUG - 2016-06-03 09:19:52 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-03 09:19:52 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:19:52 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('afba0e952f3a0564c6305827716d88eeaed1e758', '114.91.131.17', 1464916792, '__ci_last_regenerate|i:1464916792;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-03 09:19:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:19:56 --> Security Class Initialized
DEBUG - 2016-06-03 09:19:56 --> CRSF cookie Set
DEBUG - 2016-06-03 09:19:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:19:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:19:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d538ce6245f14f9280135e4f6b9e7693', '114.91.131.17', '2016-06-03', '09:19:56', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'afba0e952f3a0564c6305827716d88eeaed1e758')
DEBUG - 2016-06-03 09:19:56 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:19:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:19:56 --> Total execution time: 0.1092
DEBUG - 2016-06-03 09:19:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916796
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:19:56 --> Security Class Initialized
DEBUG - 2016-06-03 09:19:56 --> CRSF cookie Set
DEBUG - 2016-06-03 09:19:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:19:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:19:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a5f594ae87cc46c1bc33bd2c8221c1a4', '114.91.131.17', '2016-06-03', '09:19:56', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'afba0e952f3a0564c6305827716d88eeaed1e758')
DEBUG - 2016-06-03 09:19:56 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:19:57 --> Total execution time: 0.1092
DEBUG - 2016-06-03 09:19:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916797
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:20:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:20:05 --> Security Class Initialized
DEBUG - 2016-06-03 09:20:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:20:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:20:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0b6fab754f5e4c9a9c01c307ff41dc8c', '114.91.131.17', '2016-06-03', '09:20:05', '120340235', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'afba0e952f3a0564c6305827716d88eeaed1e758')
DEBUG - 2016-06-03 09:20:05 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%����%'order by a.name asc
DEBUG - 2016-06-03 09:20:05 --> Total execution time: 0.1872
DEBUG - 2016-06-03 09:20:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916805
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:20:08 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:20:08 --> Security Class Initialized
DEBUG - 2016-06-03 09:20:08 --> CRSF cookie Set
DEBUG - 2016-06-03 09:20:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:20:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:20:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9e8cdb1c261742129ddd87c54a8fa022', '114.91.131.17', '2016-06-03', '09:20:08', '120340235', '/admin/guest/edit/K05037', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'afba0e952f3a0564c6305827716d88eeaed1e758')
DEBUG - 2016-06-03 09:20:08 --> 修改客户信息：K05037
DEBUG - 2016-06-03 09:20:08 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05037' 
DEBUG - 2016-06-03 09:20:08 --> [执行的SQL语句]##############insert into apsos_user(uuid,login_code,login_pwd,user_name,phone,email,add_time,sex,enable,company)
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
         from T_Guest where code='K05037'
DEBUG - 2016-06-03 09:20:08 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05037' 
DEBUG - 2016-06-03 09:20:08 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-03 09:20:08 --> Total execution time: 0.1092
DEBUG - 2016-06-03 09:20:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916808
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:20:19 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:20:19 --> Security Class Initialized
DEBUG - 2016-06-03 09:20:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:20:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:20:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f10f1fa6c93c40a180be809471af9f6e', '114.91.131.17', '2016-06-03', '09:20:19', '120340235', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'afba0e952f3a0564c6305827716d88eeaed1e758')
DEBUG - 2016-06-03 09:20:19 --> 保存客户信息
DEBUG - 2016-06-03 09:20:19 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05037', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05037'
DEBUG - 2016-06-03 09:20:19 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-03 09:20:19 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:20:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916819
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:20:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:20:28 --> Security Class Initialized
DEBUG - 2016-06-03 09:20:28 --> CRSF cookie Set
DEBUG - 2016-06-03 09:20:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:20:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:20:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('32cddf34741f40ac92e3777166be98ea', '114.91.131.17', '2016-06-03', '09:20:28', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'afba0e952f3a0564c6305827716d88eeaed1e758')
DEBUG - 2016-06-03 09:20:28 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:20:28 --> Total execution time: 0.1404
DEBUG - 2016-06-03 09:20:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916828
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:20:34 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:20:34 --> Security Class Initialized
DEBUG - 2016-06-03 09:20:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:20:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:20:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f221592703c542dd9a840e83d29ee883', '114.91.131.17', '2016-06-03', '09:20:34', '120340235', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'afba0e952f3a0564c6305827716d88eeaed1e758')
DEBUG - 2016-06-03 09:20:34 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%����%'order by a.name asc
DEBUG - 2016-06-03 09:20:34 --> Total execution time: 0.0780
DEBUG - 2016-06-03 09:20:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916834
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:21:32 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:21:32 --> Security Class Initialized
DEBUG - 2016-06-03 09:21:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:21:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:21:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('16b4b3621b1f417c928e262f70c75219', '114.91.131.17', '2016-06-03', '09:21:32', '120340235', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'afba0e952f3a0564c6305827716d88eeaed1e758')
DEBUG - 2016-06-03 09:21:32 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%������%'order by a.name asc
DEBUG - 2016-06-03 09:21:32 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:21:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464916892
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:27:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:27:17 --> Security Class Initialized
DEBUG - 2016-06-03 09:27:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:27:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:27:17 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'afba0e952f3a0564c6305827716d88eeaed1e758'
DEBUG - 2016-06-03 09:27:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6dac2502e71e4291b9748e7384e4f897', '114.91.131.17', '2016-06-03', '09:27:17', '120340235', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ec54657110f760d0af7749baabb4faf515805455')
DEBUG - 2016-06-03 09:27:17 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%����%'order by a.name asc
DEBUG - 2016-06-03 09:27:17 --> Total execution time: 0.0956
DEBUG - 2016-06-03 09:27:17 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ec54657110f760d0af7749baabb4faf515805455', '114.91.131.17', 1464917237, '__ci_last_regenerate|i:1464917237;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-03 09:30:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:30:42 --> Security Class Initialized
DEBUG - 2016-06-03 09:30:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:30:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ec54657110f760d0af7749baabb4faf515805455'
DEBUG - 2016-06-03 09:30:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('aa1a133611bc43b8acc1abf317e6516f', '114.91.131.17', '2016-06-03', '09:30:42', '120340235', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ec54657110f760d0af7749baabb4faf515805455')
DEBUG - 2016-06-03 09:30:42 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%����%'order by a.name asc
DEBUG - 2016-06-03 09:30:42 --> Total execution time: 0.1092
DEBUG - 2016-06-03 09:30:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464917442
WHERE id = 'ec54657110f760d0af7749baabb4faf515805455'
DEBUG - 2016-06-03 09:30:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:30:48 --> Security Class Initialized
DEBUG - 2016-06-03 09:30:48 --> CRSF cookie Set
DEBUG - 2016-06-03 09:30:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:30:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ec54657110f760d0af7749baabb4faf515805455'
DEBUG - 2016-06-03 09:30:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f102a2ef4cf442a8beeb769513e5807f', '114.91.131.17', '2016-06-03', '09:30:48', '120340235', '/admin/guest/edit/K05055', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ec54657110f760d0af7749baabb4faf515805455')
DEBUG - 2016-06-03 09:30:48 --> 修改客户信息：K05055
DEBUG - 2016-06-03 09:30:48 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05055' 
DEBUG - 2016-06-03 09:30:48 --> [执行的SQL语句]##############insert into apsos_user(uuid,login_code,login_pwd,user_name,phone,email,add_time,sex,enable,company)
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
         from T_Guest where code='K05055'
DEBUG - 2016-06-03 09:30:48 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05055' 
DEBUG - 2016-06-03 09:30:48 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-03 09:30:48 --> Total execution time: 0.0780
DEBUG - 2016-06-03 09:30:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464917448
WHERE id = 'ec54657110f760d0af7749baabb4faf515805455'
DEBUG - 2016-06-03 09:30:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:30:57 --> Security Class Initialized
DEBUG - 2016-06-03 09:30:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:30:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ec54657110f760d0af7749baabb4faf515805455'
DEBUG - 2016-06-03 09:30:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f66f499a985a4962b87d7775db8e487b', '114.91.131.17', '2016-06-03', '09:30:57', '120340235', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ec54657110f760d0af7749baabb4faf515805455')
DEBUG - 2016-06-03 09:30:57 --> 保存客户信息
DEBUG - 2016-06-03 09:30:57 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05055', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05055'
DEBUG - 2016-06-03 09:30:57 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-06-03 09:30:57 --> Total execution time: 0.0780
DEBUG - 2016-06-03 09:30:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464917457
WHERE id = 'ec54657110f760d0af7749baabb4faf515805455'
DEBUG - 2016-06-03 09:30:59 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:30:59 --> Security Class Initialized
DEBUG - 2016-06-03 09:30:59 --> CRSF cookie Set
DEBUG - 2016-06-03 09:30:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:30:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ec54657110f760d0af7749baabb4faf515805455'
DEBUG - 2016-06-03 09:30:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8847c58d4eef4b3dbdbe0f0b4d683195', '114.91.131.17', '2016-06-03', '09:30:59', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ec54657110f760d0af7749baabb4faf515805455')
DEBUG - 2016-06-03 09:30:59 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:30:59 --> Total execution time: 0.1092
DEBUG - 2016-06-03 09:30:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464917459
WHERE id = 'ec54657110f760d0af7749baabb4faf515805455'
DEBUG - 2016-06-03 09:31:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:31:28 --> Security Class Initialized
DEBUG - 2016-06-03 09:31:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:31:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ec54657110f760d0af7749baabb4faf515805455'
DEBUG - 2016-06-03 09:31:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5ad26afc0a0d476d903f2c00269b3ec5', '114.91.131.17', '2016-06-03', '09:31:28', '120340235', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'ec54657110f760d0af7749baabb4faf515805455')
DEBUG - 2016-06-03 09:31:28 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%����%'order by a.name asc
DEBUG - 2016-06-03 09:31:28 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:31:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464917488
WHERE id = 'ec54657110f760d0af7749baabb4faf515805455'
DEBUG - 2016-06-03 09:34:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:34:21 --> Security Class Initialized
DEBUG - 2016-06-03 09:34:21 --> CRSF cookie Set
DEBUG - 2016-06-03 09:34:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:34:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ec54657110f760d0af7749baabb4faf515805455'
DEBUG - 2016-06-03 09:34:22 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'ec54657110f760d0af7749baabb4faf515805455'
DEBUG - 2016-06-03 09:34:22 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c9f51384b7a447399d4d44ed8d79a661', '114.91.131.17', '2016-06-03', '09:34:22', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0b40c2d540578df2539c4308a66327e81c7cc20d')
DEBUG - 2016-06-03 09:34:22 --> 查询订单
DEBUG - 2016-06-03 09:34:22 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-03 09:34:22 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:34:22 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0b40c2d540578df2539c4308a66327e81c7cc20d', '114.91.131.17', 1464917662, '__ci_last_regenerate|i:1464917662;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-03 09:34:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:34:24 --> Security Class Initialized
DEBUG - 2016-06-03 09:34:24 --> CRSF cookie Set
DEBUG - 2016-06-03 09:34:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:34:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0b40c2d540578df2539c4308a66327e81c7cc20d'
DEBUG - 2016-06-03 09:34:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bfd2ce2658ea4a32a44fc20f777ca4e4', '114.91.131.17', '2016-06-03', '09:34:24', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0b40c2d540578df2539c4308a66327e81c7cc20d')
DEBUG - 2016-06-03 09:34:24 --> 查询订单
DEBUG - 2016-06-03 09:34:24 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-03 09:34:24 --> Total execution time: 0.0780
DEBUG - 2016-06-03 09:34:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464917664
WHERE id = '0b40c2d540578df2539c4308a66327e81c7cc20d'
DEBUG - 2016-06-03 09:34:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:34:25 --> Security Class Initialized
DEBUG - 2016-06-03 09:34:25 --> CRSF cookie Set
DEBUG - 2016-06-03 09:34:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:34:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0b40c2d540578df2539c4308a66327e81c7cc20d'
DEBUG - 2016-06-03 09:34:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0f0776be198f4daeb1d656732a516b53', '114.91.131.17', '2016-06-03', '09:34:25', '120340235', '/admin/order/index/aab58df429c94699b895396d664d5f6c', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0b40c2d540578df2539c4308a66327e81c7cc20d')
DEBUG - 2016-06-03 09:34:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 09:34:25 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aab58df429c94699b895396d664d5f6c' order by create_date_time desc
DEBUG - 2016-06-03 09:34:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 09:34:25 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-06-03 09:34:25 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:34:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464917665
WHERE id = '0b40c2d540578df2539c4308a66327e81c7cc20d'
DEBUG - 2016-06-03 09:37:37 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:37:37 --> Security Class Initialized
DEBUG - 2016-06-03 09:37:37 --> CRSF cookie Set
DEBUG - 2016-06-03 09:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:37:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0b40c2d540578df2539c4308a66327e81c7cc20d'
DEBUG - 2016-06-03 09:37:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cb40ab66677142daa959c5359a5a39a4', '114.91.131.17', '2016-06-03', '09:37:37', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0b40c2d540578df2539c4308a66327e81c7cc20d')
DEBUG - 2016-06-03 09:37:37 --> 查询订单
DEBUG - 2016-06-03 09:37:37 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-03 09:37:37 --> Total execution time: 0.0780
DEBUG - 2016-06-03 09:37:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464917857
WHERE id = '0b40c2d540578df2539c4308a66327e81c7cc20d'
DEBUG - 2016-06-03 09:37:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:37:40 --> Security Class Initialized
DEBUG - 2016-06-03 09:37:40 --> CRSF cookie Set
DEBUG - 2016-06-03 09:37:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:37:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0b40c2d540578df2539c4308a66327e81c7cc20d'
DEBUG - 2016-06-03 09:37:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8327fbd762f842b9a530d18c5dc4d6b7', '114.91.131.17', '2016-06-03', '09:37:40', '120340235', '/admin/order/index/aab58df429c94699b895396d664d5f6c', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '0b40c2d540578df2539c4308a66327e81c7cc20d')
DEBUG - 2016-06-03 09:37:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 09:37:40 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aab58df429c94699b895396d664d5f6c' order by create_date_time desc
DEBUG - 2016-06-03 09:37:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 09:37:40 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-06-03 09:37:40 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:37:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464917860
WHERE id = '0b40c2d540578df2539c4308a66327e81c7cc20d'
DEBUG - 2016-06-03 09:38:59 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:38:59 --> Security Class Initialized
DEBUG - 2016-06-03 09:38:59 --> CRSF cookie Set
DEBUG - 2016-06-03 09:38:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:38:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:38:59 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'bcfe43ae4c3ed13eef232c15e9a3350d20bfcf4b'
DEBUG - 2016-06-03 09:38:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('81b868fc36ac47f0a5137602e5049f32', '180.168.179.118', '2016-06-03', '09:38:59', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '5fbc355e2738b3bb57fee45474e43854e925e44f')
DEBUG - 2016-06-03 09:38:59 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:38:59 --> Total execution time: 0.1092
DEBUG - 2016-06-03 09:38:59 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5fbc355e2738b3bb57fee45474e43854e925e44f', '180.168.179.118', 1464917939, '__ci_last_regenerate|i:1464917939;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-03 09:39:11 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:39:11 --> Security Class Initialized
DEBUG - 2016-06-03 09:39:11 --> CRSF cookie Set
DEBUG - 2016-06-03 09:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:39:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:39:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c2704c36ae16420b9daff354fb08b968', '180.168.179.118', '2016-06-03', '09:39:11', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '5fbc355e2738b3bb57fee45474e43854e925e44f')
DEBUG - 2016-06-03 09:39:11 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:39:11 --> Total execution time: 0.1248
DEBUG - 2016-06-03 09:39:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464917951
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:39:32 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:39:32 --> Security Class Initialized
DEBUG - 2016-06-03 09:39:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:39:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:39:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e9d086ccfcd34781958d15001c26f7c5', '180.168.179.118', '2016-06-03', '09:39:32', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '5fbc355e2738b3bb57fee45474e43854e925e44f')
DEBUG - 2016-06-03 09:39:32 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:39:32 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:39:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464917972
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:40:49 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:40:49 --> Security Class Initialized
DEBUG - 2016-06-03 09:40:49 --> CRSF cookie Set
DEBUG - 2016-06-03 09:40:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:40:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0b40c2d540578df2539c4308a66327e81c7cc20d'
DEBUG - 2016-06-03 09:40:49 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '0b40c2d540578df2539c4308a66327e81c7cc20d'
DEBUG - 2016-06-03 09:40:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8e7be524f87f4308bc976208dd06dc61', '114.91.131.17', '2016-06-03', '09:40:49', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7c2cff424a50fa5f4b7fdd443db2c958cef2a693')
DEBUG - 2016-06-03 09:40:49 --> 查询订单
DEBUG - 2016-06-03 09:40:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-03 09:40:49 --> Total execution time: 0.0780
DEBUG - 2016-06-03 09:40:49 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7c2cff424a50fa5f4b7fdd443db2c958cef2a693', '114.91.131.17', 1464918049, '__ci_last_regenerate|i:1464918049;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-03 09:40:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:40:52 --> Security Class Initialized
DEBUG - 2016-06-03 09:40:52 --> CRSF cookie Set
DEBUG - 2016-06-03 09:40:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:40:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c2cff424a50fa5f4b7fdd443db2c958cef2a693'
DEBUG - 2016-06-03 09:40:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ee6ae7d00bfc409b873615087bb5d28f', '114.91.131.17', '2016-06-03', '09:40:52', '120340235', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '7c2cff424a50fa5f4b7fdd443db2c958cef2a693')
DEBUG - 2016-06-03 09:40:52 --> 查询订单
DEBUG - 2016-06-03 09:40:52 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-03 09:40:52 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:40:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918052
WHERE id = '7c2cff424a50fa5f4b7fdd443db2c958cef2a693'
DEBUG - 2016-06-03 09:42:01 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:42:01 --> Security Class Initialized
DEBUG - 2016-06-03 09:42:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:42:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:42:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b07df62a970f419e85d81750df5b6833', '180.168.179.118', '2016-06-03', '09:42:01', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '5fbc355e2738b3bb57fee45474e43854e925e44f')
DEBUG - 2016-06-03 09:42:01 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:42:01 --> Total execution time: 0.1092
DEBUG - 2016-06-03 09:42:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918121
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:42:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:42:10 --> Security Class Initialized
DEBUG - 2016-06-03 09:42:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:42:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:42:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('600693ca8c0e4e10976e41b959ae3bf3', '180.168.179.118', '2016-06-03', '09:42:10', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '5fbc355e2738b3bb57fee45474e43854e925e44f')
DEBUG - 2016-06-03 09:42:10 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:42:10 --> Total execution time: 0.0946
DEBUG - 2016-06-03 09:42:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918130
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:43:07 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:43:07 --> Security Class Initialized
DEBUG - 2016-06-03 09:43:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:43:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:43:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d31268ac93ff485d902685581e662816', '180.168.179.118', '2016-06-03', '09:43:07', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '5fbc355e2738b3bb57fee45474e43854e925e44f')
DEBUG - 2016-06-03 09:43:07 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:43:07 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:43:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918187
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:43:16 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:43:16 --> Security Class Initialized
DEBUG - 2016-06-03 09:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:43:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:43:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9f8561a457144e1cae629c59b0b114bd', '180.168.179.118', '2016-06-03', '09:43:16', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '5fbc355e2738b3bb57fee45474e43854e925e44f')
DEBUG - 2016-06-03 09:43:16 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:43:16 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:43:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918196
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:45:36 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:45:36 --> Security Class Initialized
DEBUG - 2016-06-03 09:45:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:45:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:45:36 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '5fbc355e2738b3bb57fee45474e43854e925e44f'
DEBUG - 2016-06-03 09:45:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('74418ed0d16e452289360190e04c5ae5', '180.168.179.118', '2016-06-03', '09:45:36', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '40b946e95284b95f928f322197a05ce781f276f3')
DEBUG - 2016-06-03 09:45:36 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=?order by a.name asc
ERROR - 2016-06-03 09:45:36 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-06-03 09:45:36 --> Query error: [Microsoft][ODBC SQL Server Driver]COUNT �ֶβ���ȷ���﷨���� - Invalid query: 
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=?order by a.name asc
ERROR - 2016-06-03 09:45:36 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Guest_model.php 46
DEBUG - 2016-06-03 09:45:36 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('40b946e95284b95f928f322197a05ce781f276f3', '180.168.179.118', 1464918336, '__ci_last_regenerate|i:1464918336;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-03 09:46:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:46:42 --> No URI present. Default controller set.
DEBUG - 2016-06-03 09:46:42 --> Security Class Initialized
DEBUG - 2016-06-03 09:46:42 --> CRSF cookie Set
DEBUG - 2016-06-03 09:46:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:46:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:46:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5c4b40ce64ec46a588842cd6db76ae17', '180.168.179.118', '2016-06-03', '09:46:42', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '40b946e95284b95f928f322197a05ce781f276f3')
DEBUG - 2016-06-03 09:46:42 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:46:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918402
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:46:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:46:45 --> Security Class Initialized
DEBUG - 2016-06-03 09:46:45 --> CRSF cookie Set
DEBUG - 2016-06-03 09:46:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:46:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:46:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d0e11d9fc3b94456be0d7bf22e5de8c0', '180.168.179.118', '2016-06-03', '09:46:45', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '40b946e95284b95f928f322197a05ce781f276f3')
DEBUG - 2016-06-03 09:46:45 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:46:45 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:46:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918405
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:47:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:47:00 --> Security Class Initialized
DEBUG - 2016-06-03 09:47:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:47:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:47:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e9f50b371d5f426a86aa6fe2514cff7b', '180.168.179.118', '2016-06-03', '09:47:00', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '40b946e95284b95f928f322197a05ce781f276f3')
DEBUG - 2016-06-03 09:47:00 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=?order by a.name asc
ERROR - 2016-06-03 09:47:00 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-06-03 09:47:00 --> Query error: [Microsoft][ODBC SQL Server Driver]COUNT �ֶβ���ȷ���﷨���� - Invalid query: 
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=?order by a.name asc
ERROR - 2016-06-03 09:47:00 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Guest_model.php 46
DEBUG - 2016-06-03 09:47:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918420
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:47:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:47:52 --> No URI present. Default controller set.
DEBUG - 2016-06-03 09:47:52 --> Security Class Initialized
DEBUG - 2016-06-03 09:47:52 --> CRSF cookie Set
DEBUG - 2016-06-03 09:47:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:47:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:47:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c05971cd552047188f2a3f0303e87d6a', '180.168.179.118', '2016-06-03', '09:47:52', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '40b946e95284b95f928f322197a05ce781f276f3')
DEBUG - 2016-06-03 09:47:52 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:47:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918472
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:47:55 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:47:55 --> Security Class Initialized
DEBUG - 2016-06-03 09:47:55 --> CRSF cookie Set
DEBUG - 2016-06-03 09:47:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:47:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:47:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fbb26a583cff406ba98287109bf63de6', '180.168.179.118', '2016-06-03', '09:47:55', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '40b946e95284b95f928f322197a05ce781f276f3')
DEBUG - 2016-06-03 09:47:55 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:47:55 --> Total execution time: 0.1092
DEBUG - 2016-06-03 09:47:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918475
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:48:08 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:48:08 --> Security Class Initialized
DEBUG - 2016-06-03 09:48:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:48:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:48:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('233523e10fa84fd9b1cba613cc93283e', '180.168.179.118', '2016-06-03', '09:48:08', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '40b946e95284b95f928f322197a05ce781f276f3')
DEBUG - 2016-06-03 09:48:08 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=?order by a.name asc
ERROR - 2016-06-03 09:48:08 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-06-03 09:48:08 --> Query error: [Microsoft][ODBC SQL Server Driver]COUNT �ֶβ���ȷ���﷨���� - Invalid query: 
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=?order by a.name asc
ERROR - 2016-06-03 09:48:08 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Guest_model.php 46
DEBUG - 2016-06-03 09:48:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918488
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:50:34 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:50:34 --> Security Class Initialized
DEBUG - 2016-06-03 09:50:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:50:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:50:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('09a7862e0f1e4087a2b5bb94170c1fb4', '180.168.179.118', '2016-06-03', '09:50:34', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '40b946e95284b95f928f322197a05ce781f276f3')
DEBUG - 2016-06-03 09:50:34 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y'order by a.name asc
DEBUG - 2016-06-03 09:50:34 --> Total execution time: 0.0780
DEBUG - 2016-06-03 09:50:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918634
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:50:37 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:50:37 --> Security Class Initialized
DEBUG - 2016-06-03 09:50:37 --> CRSF cookie Set
DEBUG - 2016-06-03 09:50:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:50:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:50:37 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '40b946e95284b95f928f322197a05ce781f276f3'
DEBUG - 2016-06-03 09:50:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2af61fa7f4db4b3b8a57b34e1db2ca6e', '180.168.179.118', '2016-06-03', '09:50:37', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4')
DEBUG - 2016-06-03 09:50:37 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:50:37 --> Total execution time: 0.1102
DEBUG - 2016-06-03 09:50:37 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e936d2c643296bdd4abb4cc491dbd00e47b51ee4', '180.168.179.118', 1464918637, '__ci_last_regenerate|i:1464918637;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-03 09:50:46 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:50:46 --> Security Class Initialized
DEBUG - 2016-06-03 09:50:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:50:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4'
DEBUG - 2016-06-03 09:50:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0569c15ee5f948bcaf74dc2363105472', '180.168.179.118', '2016-06-03', '09:50:46', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4')
DEBUG - 2016-06-03 09:50:46 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='N'order by a.name asc
DEBUG - 2016-06-03 09:50:46 --> Total execution time: 0.0780
DEBUG - 2016-06-03 09:50:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918646
WHERE id = 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4'
DEBUG - 2016-06-03 09:51:32 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:51:32 --> Security Class Initialized
DEBUG - 2016-06-03 09:51:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:51:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4'
DEBUG - 2016-06-03 09:51:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e7421c7060c7402b888d17899aae9b92', '180.168.179.118', '2016-06-03', '09:51:32', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4')
DEBUG - 2016-06-03 09:51:32 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y'order by a.name asc
DEBUG - 2016-06-03 09:51:32 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:51:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918692
WHERE id = 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4'
DEBUG - 2016-06-03 09:53:53 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:53:53 --> Security Class Initialized
DEBUG - 2016-06-03 09:53:53 --> CRSF cookie Set
DEBUG - 2016-06-03 09:53:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:53:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4'
DEBUG - 2016-06-03 09:53:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4c4c2f1b335b49f59eaa290d0fa7d7fe', '180.168.179.118', '2016-06-03', '09:53:53', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4')
DEBUG - 2016-06-03 09:53:53 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:53:53 --> Total execution time: 0.1092
DEBUG - 2016-06-03 09:53:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918833
WHERE id = 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4'
DEBUG - 2016-06-03 09:54:00 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:54:00 --> Security Class Initialized
DEBUG - 2016-06-03 09:54:00 --> CRSF cookie Set
DEBUG - 2016-06-03 09:54:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:54:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4'
DEBUG - 2016-06-03 09:54:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9787e3ab173142dcaed8c2d93581108f', '180.168.179.118', '2016-06-03', '09:54:00', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4')
DEBUG - 2016-06-03 09:54:00 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 09:54:00 --> Total execution time: 0.0936
DEBUG - 2016-06-03 09:54:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918840
WHERE id = 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4'
DEBUG - 2016-06-03 09:56:12 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:56:12 --> Security Class Initialized
DEBUG - 2016-06-03 09:56:12 --> CRSF cookie Set
DEBUG - 2016-06-03 09:56:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:56:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4'
DEBUG - 2016-06-03 09:56:12 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'e936d2c643296bdd4abb4cc491dbd00e47b51ee4'
DEBUG - 2016-06-03 09:56:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e85f249fbfda4082b9181d97b6c1cd68', '180.168.179.118', '2016-06-03', '09:56:12', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '78fc748eee505cbe0c8765302cc85ca29337c401')
DEBUG - 2016-06-03 09:56:12 --> 默认是展示有效的客户
DEBUG - 2016-06-03 09:56:12 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=Yorder by a.name asc
ERROR - 2016-06-03 09:56:12 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-06-03 09:56:12 --> Query error: [Microsoft][ODBC SQL Server Driver][SQL Server]�ڹؼ��� 'by' �������﷨���� - Invalid query: 
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=Yorder by a.name asc
ERROR - 2016-06-03 09:56:12 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Guest_model.php 47
DEBUG - 2016-06-03 09:56:12 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('78fc748eee505cbe0c8765302cc85ca29337c401', '180.168.179.118', 1464918972, '__ci_last_regenerate|i:1464918972;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-03 09:56:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:56:17 --> Security Class Initialized
DEBUG - 2016-06-03 09:56:17 --> CRSF cookie Set
DEBUG - 2016-06-03 09:56:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:56:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 09:56:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bbf67c0608bc4f2ab1ad7068821b4396', '180.168.179.118', '2016-06-03', '09:56:17', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '78fc748eee505cbe0c8765302cc85ca29337c401')
DEBUG - 2016-06-03 09:56:17 --> 默认是展示有效的客户
DEBUG - 2016-06-03 09:56:17 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=Yorder by a.name asc
ERROR - 2016-06-03 09:56:17 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-06-03 09:56:17 --> Query error: [Microsoft][ODBC SQL Server Driver][SQL Server]�ڹؼ��� 'by' �������﷨���� - Invalid query: 
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=Yorder by a.name asc
ERROR - 2016-06-03 09:56:17 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Guest_model.php 47
DEBUG - 2016-06-03 09:56:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918977
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 09:56:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:56:21 --> No URI present. Default controller set.
DEBUG - 2016-06-03 09:56:21 --> Security Class Initialized
DEBUG - 2016-06-03 09:56:21 --> CRSF cookie Set
DEBUG - 2016-06-03 09:56:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:56:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 09:56:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('590fcd0d085d425b9fba9be12727f3e6', '180.168.179.118', '2016-06-03', '09:56:21', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '78fc748eee505cbe0c8765302cc85ca29337c401')
DEBUG - 2016-06-03 09:56:21 --> Total execution time: 0.0808
DEBUG - 2016-06-03 09:56:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918981
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 09:56:24 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:56:24 --> Security Class Initialized
DEBUG - 2016-06-03 09:56:24 --> CRSF cookie Set
DEBUG - 2016-06-03 09:56:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:56:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 09:56:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('17dd162885cc4cdba9731746e31024a8', '180.168.179.118', '2016-06-03', '09:56:24', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '78fc748eee505cbe0c8765302cc85ca29337c401')
DEBUG - 2016-06-03 09:56:24 --> 默认是展示有效的客户
DEBUG - 2016-06-03 09:56:24 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=Yorder by a.name asc
ERROR - 2016-06-03 09:56:24 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-06-03 09:56:24 --> Query error: [Microsoft][ODBC SQL Server Driver][SQL Server]�ڹؼ��� 'by' �������﷨���� - Invalid query: 
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=Yorder by a.name asc
ERROR - 2016-06-03 09:56:24 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Guest_model.php 47
DEBUG - 2016-06-03 09:56:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464918984
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 09:58:10 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:58:10 --> Security Class Initialized
DEBUG - 2016-06-03 09:58:10 --> CRSF cookie Set
DEBUG - 2016-06-03 09:58:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:58:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 09:58:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e44b5ce2055c4f1caabe9bd1608c8bbf', '180.168.179.118', '2016-06-03', '09:58:10', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '78fc748eee505cbe0c8765302cc85ca29337c401')
DEBUG - 2016-06-03 09:58:10 --> 默认是展示有效的客户
DEBUG - 2016-06-03 09:58:10 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=Yorder by a.name asc
ERROR - 2016-06-03 09:58:10 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-06-03 09:58:10 --> Query error: [Microsoft][ODBC SQL Server Driver][SQL Server]�ڹؼ��� 'by' �������﷨���� - Invalid query: 
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable=Yorder by a.name asc
ERROR - 2016-06-03 09:58:10 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Guest_model.php 47
DEBUG - 2016-06-03 09:58:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919090
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 09:58:42 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:58:42 --> Security Class Initialized
DEBUG - 2016-06-03 09:58:42 --> CRSF cookie Set
DEBUG - 2016-06-03 09:58:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:58:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 09:58:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d322027552724fda8e5e58e586ae72ed', '180.168.179.118', '2016-06-03', '09:58:42', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '78fc748eee505cbe0c8765302cc85ca29337c401')
DEBUG - 2016-06-03 09:58:42 --> 默认是展示有效的客户
DEBUG - 2016-06-03 09:58:42 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 09:58:42 --> Total execution time: 0.0780
DEBUG - 2016-06-03 09:58:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919122
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 09:58:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 09:58:58 --> Security Class Initialized
DEBUG - 2016-06-03 09:58:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 09:58:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 09:58:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('128900135c3a4d518928cf1016dfa747', '180.168.179.118', '2016-06-03', '09:58:58', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '78fc748eee505cbe0c8765302cc85ca29337c401')
DEBUG - 2016-06-03 09:58:58 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='N' order by a.name asc
DEBUG - 2016-06-03 09:58:58 --> Total execution time: 0.0780
DEBUG - 2016-06-03 09:58:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919138
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 10:00:36 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:00:36 --> Security Class Initialized
DEBUG - 2016-06-03 10:00:36 --> CRSF cookie Set
DEBUG - 2016-06-03 10:00:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:00:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 10:00:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e4c581db539d4b9bb6b2ac478181df2c', '180.168.179.118', '2016-06-03', '10:00:36', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '78fc748eee505cbe0c8765302cc85ca29337c401')
DEBUG - 2016-06-03 10:00:36 --> 查询订单
DEBUG - 2016-06-03 10:00:36 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-03 10:00:36 --> Total execution time: 0.0780
DEBUG - 2016-06-03 10:00:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919236
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 10:00:40 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:00:40 --> Security Class Initialized
DEBUG - 2016-06-03 10:00:40 --> CRSF cookie Set
DEBUG - 2016-06-03 10:00:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:00:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 10:00:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('594d0b396a514fe99207348f76cd13ff', '180.168.179.118', '2016-06-03', '10:00:40', '120340234', '/admin/order/index/aab58df429c94699b895396d664d5f6c', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '78fc748eee505cbe0c8765302cc85ca29337c401')
DEBUG - 2016-06-03 10:00:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 10:00:40 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aab58df429c94699b895396d664d5f6c' order by create_date_time desc
DEBUG - 2016-06-03 10:00:40 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 10:00:40 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-06-03 10:00:40 --> Total execution time: 0.0936
DEBUG - 2016-06-03 10:00:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919240
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 10:00:57 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:00:57 --> Security Class Initialized
DEBUG - 2016-06-03 10:00:57 --> CRSF cookie Set
DEBUG - 2016-06-03 10:00:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:00:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 10:00:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('23992866f95b4a6f97ae2428c17d51b8', '180.168.179.118', '2016-06-03', '10:00:57', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '78fc748eee505cbe0c8765302cc85ca29337c401')
DEBUG - 2016-06-03 10:00:57 --> 默认是展示有效的客户
DEBUG - 2016-06-03 10:00:57 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 10:00:57 --> Total execution time: 0.0780
DEBUG - 2016-06-03 10:00:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919257
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 10:02:28 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:02:28 --> Security Class Initialized
DEBUG - 2016-06-03 10:02:28 --> CRSF cookie Set
DEBUG - 2016-06-03 10:02:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:02:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 10:02:28 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '78fc748eee505cbe0c8765302cc85ca29337c401'
DEBUG - 2016-06-03 10:02:28 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f06ef261af6b465d875ae74201ccb7e2', '180.168.179.118', '2016-06-03', '10:02:28', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '6fac74681d97955e106e3bf8ce6eafe9b9ca6157')
DEBUG - 2016-06-03 10:02:28 --> 默认是展示有效的客户
DEBUG - 2016-06-03 10:02:28 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 10:02:28 --> Total execution time: 0.0936
DEBUG - 2016-06-03 10:02:28 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6fac74681d97955e106e3bf8ce6eafe9b9ca6157', '180.168.179.118', 1464919348, '__ci_last_regenerate|i:1464919348;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-03 10:03:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:03:52 --> Security Class Initialized
DEBUG - 2016-06-03 10:03:52 --> CRSF cookie Set
DEBUG - 2016-06-03 10:03:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:03:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:03:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fa5a1d85b6e8423c9ba02afc9cf3c463', '180.168.179.118', '2016-06-03', '10:03:52', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '6fac74681d97955e106e3bf8ce6eafe9b9ca6157')
DEBUG - 2016-06-03 10:03:52 --> 默认是展示有效的客户
DEBUG - 2016-06-03 10:03:52 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 10:03:52 --> Total execution time: 0.0936
DEBUG - 2016-06-03 10:03:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919432
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:23 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:04:23 --> Security Class Initialized
DEBUG - 2016-06-03 10:04:23 --> CRSF cookie Set
DEBUG - 2016-06-03 10:04:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:04:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('520c7dc5d9b64713a730088e48b01b1a', '180.168.179.118', '2016-06-03', '10:04:23', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '6fac74681d97955e106e3bf8ce6eafe9b9ca6157')
DEBUG - 2016-06-03 10:04:23 --> 默认是展示有效的客户
DEBUG - 2016-06-03 10:04:23 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 10:04:23 --> Total execution time: 0.0936
DEBUG - 2016-06-03 10:04:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919463
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:04:27 --> Security Class Initialized
DEBUG - 2016-06-03 10:04:27 --> CRSF cookie Set
DEBUG - 2016-06-03 10:04:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:04:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('375e10d90cb14c1990b5b2692a128222', '180.168.179.118', '2016-06-03', '10:04:27', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '6fac74681d97955e106e3bf8ce6eafe9b9ca6157')
DEBUG - 2016-06-03 10:04:27 --> 默认是展示有效的客户
DEBUG - 2016-06-03 10:04:27 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 10:04:27 --> Total execution time: 0.0780
DEBUG - 2016-06-03 10:04:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919467
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:30 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:04:30 --> Security Class Initialized
DEBUG - 2016-06-03 10:04:30 --> CRSF cookie Set
DEBUG - 2016-06-03 10:04:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:04:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b148c39332ca4547aaaa3140c12df7e6', '180.168.179.118', '2016-06-03', '10:04:30', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '6fac74681d97955e106e3bf8ce6eafe9b9ca6157')
DEBUG - 2016-06-03 10:04:30 --> 默认是展示有效的客户
DEBUG - 2016-06-03 10:04:30 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 10:04:30 --> Total execution time: 0.0936
DEBUG - 2016-06-03 10:04:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919470
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:44 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:04:44 --> Security Class Initialized
DEBUG - 2016-06-03 10:04:44 --> CRSF cookie Set
DEBUG - 2016-06-03 10:04:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:04:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('cfac1a4ba3c748bfadccb3bd681c89d2', '180.168.179.118', '2016-06-03', '10:04:44', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '6fac74681d97955e106e3bf8ce6eafe9b9ca6157')
DEBUG - 2016-06-03 10:04:44 --> 默认是展示有效的客户
DEBUG - 2016-06-03 10:04:44 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 10:04:44 --> Total execution time: 0.0936
DEBUG - 2016-06-03 10:04:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919484
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:04:48 --> Security Class Initialized
DEBUG - 2016-06-03 10:04:48 --> CRSF cookie Set
DEBUG - 2016-06-03 10:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:04:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('43a711e4a54b4f079e3231d6faff8466', '180.168.179.118', '2016-06-03', '10:04:48', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '6fac74681d97955e106e3bf8ce6eafe9b9ca6157')
DEBUG - 2016-06-03 10:04:48 --> 默认是展示有效的客户
DEBUG - 2016-06-03 10:04:48 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 10:04:48 --> Total execution time: 0.0936
DEBUG - 2016-06-03 10:04:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919488
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:04:52 --> Security Class Initialized
DEBUG - 2016-06-03 10:04:52 --> CRSF cookie Set
DEBUG - 2016-06-03 10:04:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:04:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('198251ae60274e99b6e02e4ba9466f4e', '180.168.179.118', '2016-06-03', '10:04:52', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '6fac74681d97955e106e3bf8ce6eafe9b9ca6157')
DEBUG - 2016-06-03 10:04:52 --> 默认是展示有效的客户
DEBUG - 2016-06-03 10:04:52 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 10:04:52 --> Total execution time: 0.1210
DEBUG - 2016-06-03 10:04:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919492
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:56 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:04:56 --> Security Class Initialized
DEBUG - 2016-06-03 10:04:56 --> CRSF cookie Set
DEBUG - 2016-06-03 10:04:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:04:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:04:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b4e447309ba7483690d58574eae8e82b', '180.168.179.118', '2016-06-03', '10:04:56', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '6fac74681d97955e106e3bf8ce6eafe9b9ca6157')
DEBUG - 2016-06-03 10:04:56 --> 默认是展示有效的客户
DEBUG - 2016-06-03 10:04:56 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 10:04:56 --> Total execution time: 0.0780
DEBUG - 2016-06-03 10:04:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919496
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:06:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:06:26 --> Security Class Initialized
DEBUG - 2016-06-03 10:06:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:06:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:06:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('623f9cb8f39d4d84baad96917b568783', '180.168.179.118', '2016-06-03', '10:06:26', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '6fac74681d97955e106e3bf8ce6eafe9b9ca6157')
DEBUG - 2016-06-03 10:06:26 --> 默认是展示有效的客户
DEBUG - 2016-06-03 10:06:26 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 10:06:26 --> Total execution time: 0.0780
DEBUG - 2016-06-03 10:06:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919586
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:06:29 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:06:29 --> Security Class Initialized
DEBUG - 2016-06-03 10:06:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:06:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:06:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('aece1f0af1be40e3a358633a55bd4274', '180.168.179.118', '2016-06-03', '10:06:29', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '6fac74681d97955e106e3bf8ce6eafe9b9ca6157')
DEBUG - 2016-06-03 10:06:29 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 10:06:29 --> Total execution time: 0.0780
DEBUG - 2016-06-03 10:06:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919589
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:07:05 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:07:05 --> Security Class Initialized
DEBUG - 2016-06-03 10:07:05 --> CRSF cookie Set
DEBUG - 2016-06-03 10:07:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:07:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:07:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8f6602db2cdd410294f14ba30ebc7b44', '180.168.179.118', '2016-06-03', '10:07:05', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '6fac74681d97955e106e3bf8ce6eafe9b9ca6157')
DEBUG - 2016-06-03 10:07:05 --> 默认是展示有效的客户
DEBUG - 2016-06-03 10:07:05 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND b.enable='Y' order by a.name asc
DEBUG - 2016-06-03 10:07:05 --> Total execution time: 0.0946
DEBUG - 2016-06-03 10:07:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919625
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:07:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:07:31 --> Security Class Initialized
DEBUG - 2016-06-03 10:07:31 --> CRSF cookie Set
DEBUG - 2016-06-03 10:07:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:07:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:07:31 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '6fac74681d97955e106e3bf8ce6eafe9b9ca6157'
DEBUG - 2016-06-03 10:07:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8c34986e73ad4ba5990af0f0c38cca33', '180.168.179.118', '2016-06-03', '10:07:31', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '48b50008f1875e0498a615f5b7b36e6d4f154e1f')
DEBUG - 2016-06-03 10:07:31 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 10:07:31 --> Total execution time: 0.1044
DEBUG - 2016-06-03 10:07:31 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('48b50008f1875e0498a615f5b7b36e6d4f154e1f', '180.168.179.118', 1464919651, '__ci_last_regenerate|i:1464919651;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-03 10:07:51 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:07:51 --> Security Class Initialized
DEBUG - 2016-06-03 10:07:51 --> CRSF cookie Set
DEBUG - 2016-06-03 10:07:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:07:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:07:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d0fd118ddff84b7d8385b3199821a00d', '180.168.179.118', '2016-06-03', '10:07:51', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '48b50008f1875e0498a615f5b7b36e6d4f154e1f')
DEBUG - 2016-06-03 10:07:51 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by a.name asc
DEBUG - 2016-06-03 10:07:51 --> Total execution time: 0.0936
DEBUG - 2016-06-03 10:07:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919671
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:09:14 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:09:14 --> Security Class Initialized
DEBUG - 2016-06-03 10:09:14 --> CRSF cookie Set
DEBUG - 2016-06-03 10:09:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:09:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:09:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('42e55712cc6c48539eacadb16b8f929a', '180.168.179.118', '2016-06-03', '10:09:14', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '48b50008f1875e0498a615f5b7b36e6d4f154e1f')
DEBUG - 2016-06-03 10:09:14 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable asc
DEBUG - 2016-06-03 10:09:14 --> Total execution time: 0.0780
DEBUG - 2016-06-03 10:09:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919754
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:09:26 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:09:26 --> Security Class Initialized
DEBUG - 2016-06-03 10:09:26 --> CRSF cookie Set
DEBUG - 2016-06-03 10:09:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:09:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:09:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('053a316aba3b46e68f2fdf39dc4864bd', '180.168.179.118', '2016-06-03', '10:09:26', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '48b50008f1875e0498a615f5b7b36e6d4f154e1f')
DEBUG - 2016-06-03 10:09:26 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable asc
DEBUG - 2016-06-03 10:09:26 --> Total execution time: 0.0780
DEBUG - 2016-06-03 10:09:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919766
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:11:08 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:11:08 --> Security Class Initialized
DEBUG - 2016-06-03 10:11:08 --> CRSF cookie Set
DEBUG - 2016-06-03 10:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:11:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:11:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('90b5123056344865bb8449e8806618a5', '180.168.179.118', '2016-06-03', '10:11:08', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '48b50008f1875e0498a615f5b7b36e6d4f154e1f')
DEBUG - 2016-06-03 10:11:08 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable asc
DEBUG - 2016-06-03 10:11:08 --> Total execution time: 0.3320
DEBUG - 2016-06-03 10:11:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919868
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:11:33 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:11:33 --> Security Class Initialized
DEBUG - 2016-06-03 10:11:33 --> CRSF cookie Set
DEBUG - 2016-06-03 10:11:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:11:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:11:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a9beefded39d472586f044523c872cf2', '180.168.179.118', '2016-06-03', '10:11:33', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '48b50008f1875e0498a615f5b7b36e6d4f154e1f')
DEBUG - 2016-06-03 10:11:33 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable asc
DEBUG - 2016-06-03 10:11:33 --> Total execution time: 0.1030
DEBUG - 2016-06-03 10:11:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919893
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:12:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:12:04 --> Security Class Initialized
DEBUG - 2016-06-03 10:12:04 --> CRSF cookie Set
DEBUG - 2016-06-03 10:12:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:12:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:12:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3fef81b69b9644b1a0ba3bed68b02909', '180.168.179.118', '2016-06-03', '10:12:04', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '48b50008f1875e0498a615f5b7b36e6d4f154e1f')
DEBUG - 2016-06-03 10:12:04 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable asc
DEBUG - 2016-06-03 10:12:04 --> Total execution time: 0.0850
DEBUG - 2016-06-03 10:12:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919924
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:12:09 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:12:09 --> Security Class Initialized
DEBUG - 2016-06-03 10:12:09 --> CRSF cookie Set
DEBUG - 2016-06-03 10:12:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:12:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:12:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5c07c0c573da4df8b3efcdd0ae03100c', '180.168.179.118', '2016-06-03', '10:12:09', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '48b50008f1875e0498a615f5b7b36e6d4f154e1f')
DEBUG - 2016-06-03 10:12:09 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable asc
DEBUG - 2016-06-03 10:12:09 --> Total execution time: 0.0910
DEBUG - 2016-06-03 10:12:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464919929
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:13:17 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:13:17 --> Security Class Initialized
DEBUG - 2016-06-03 10:13:17 --> CRSF cookie Set
DEBUG - 2016-06-03 10:13:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:13:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:13:17 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '48b50008f1875e0498a615f5b7b36e6d4f154e1f'
DEBUG - 2016-06-03 10:13:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4b8556662e0a4dcf804b55358f28bd92', '180.168.179.118', '2016-06-03', '10:13:17', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '04fbbbab539c6288e05af67aa1dc94355eb3bb68')
ERROR - 2016-06-03 10:13:18 --> Severity: error --> Exception: D:\xampp\htdocs\admin\models/Guest_model.php exists, but doesn't declare class Guest_model D:\xampp\htdocs\system\core\Loader.php 306
DEBUG - 2016-06-03 10:13:18 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('04fbbbab539c6288e05af67aa1dc94355eb3bb68', '180.168.179.118', 1464919998, '__ci_last_regenerate|i:1464919997;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-03 10:13:25 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:13:25 --> Security Class Initialized
DEBUG - 2016-06-03 10:13:25 --> CRSF cookie Set
DEBUG - 2016-06-03 10:13:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:13:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:13:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9c491a26a6ba48fa855f7c1896bed8d8', '180.168.179.118', '2016-06-03', '10:13:25', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '04fbbbab539c6288e05af67aa1dc94355eb3bb68')
DEBUG - 2016-06-03 10:13:25 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-03 10:13:25 --> Total execution time: 0.1060
DEBUG - 2016-06-03 10:13:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464920005
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:15:27 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:15:27 --> No URI present. Default controller set.
DEBUG - 2016-06-03 10:15:27 --> Security Class Initialized
DEBUG - 2016-06-03 10:15:27 --> CRSF cookie Set
DEBUG - 2016-06-03 10:15:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:15:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:15:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('74ce634d4fdf45de9caa863c9a60159e', '180.168.179.118', '2016-06-03', '10:15:27', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '04fbbbab539c6288e05af67aa1dc94355eb3bb68')
DEBUG - 2016-06-03 10:15:27 --> Total execution time: 0.1010
DEBUG - 2016-06-03 10:15:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464920127
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:15:36 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:15:36 --> Security Class Initialized
DEBUG - 2016-06-03 10:15:36 --> CRSF cookie Set
DEBUG - 2016-06-03 10:15:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:15:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:15:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a48ea0edf3fc4f19a8d79b2e03bbab82', '180.168.179.118', '2016-06-03', '10:15:36', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '04fbbbab539c6288e05af67aa1dc94355eb3bb68')
DEBUG - 2016-06-03 10:15:36 --> 查询待审核订单
DEBUG - 2016-06-03 10:15:36 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-06-03 10:15:36 --> Total execution time: 0.1380
DEBUG - 2016-06-03 10:15:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464920136
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:15:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:15:49 --> Security Class Initialized
DEBUG - 2016-06-03 10:15:49 --> CRSF cookie Set
DEBUG - 2016-06-03 10:15:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:15:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:15:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('23a8713bdc2f4e61b2ad7a6dc137fbf0', '180.168.179.118', '2016-06-03', '10:15:49', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '04fbbbab539c6288e05af67aa1dc94355eb3bb68')
DEBUG - 2016-06-03 10:15:49 --> 查询订单
DEBUG - 2016-06-03 10:15:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-06-03 10:15:49 --> Total execution time: 0.1570
DEBUG - 2016-06-03 10:15:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464920149
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:15:54 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:15:54 --> Security Class Initialized
DEBUG - 2016-06-03 10:15:54 --> CRSF cookie Set
DEBUG - 2016-06-03 10:15:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:15:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:15:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7bf578706c0043708a5bc44de7bcc6f3', '180.168.179.118', '2016-06-03', '10:15:54', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '04fbbbab539c6288e05af67aa1dc94355eb3bb68')
DEBUG - 2016-06-03 10:15:54 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-03 10:15:54 --> Total execution time: 0.1230
DEBUG - 2016-06-03 10:15:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464920154
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:15:58 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:15:58 --> Security Class Initialized
DEBUG - 2016-06-03 10:15:59 --> CRSF cookie Set
DEBUG - 2016-06-03 10:15:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:15:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:15:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d265cbb6dc054dc9b7cfcc7f2be3baf1', '180.168.179.118', '2016-06-03', '10:15:59', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '04fbbbab539c6288e05af67aa1dc94355eb3bb68')
DEBUG - 2016-06-03 10:15:59 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-03 10:15:59 --> Total execution time: 0.0810
DEBUG - 2016-06-03 10:15:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464920159
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:16:21 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:16:21 --> Security Class Initialized
DEBUG - 2016-06-03 10:16:21 --> CRSF cookie Set
DEBUG - 2016-06-03 10:16:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:16:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:16:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a5262ac8a8b64c51be53a503702c80ef', '180.168.179.118', '2016-06-03', '10:16:21', '120340234', '/admin/guest/edit/K05042', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '04fbbbab539c6288e05af67aa1dc94355eb3bb68')
DEBUG - 2016-06-03 10:16:21 --> 修改客户信息：K05042
DEBUG - 2016-06-03 10:16:21 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05042' 
DEBUG - 2016-06-03 10:16:22 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05042' 
DEBUG - 2016-06-03 10:16:22 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-03 10:16:22 --> Total execution time: 0.1410
DEBUG - 2016-06-03 10:16:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464920182
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:16:31 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:16:31 --> Security Class Initialized
DEBUG - 2016-06-03 10:16:31 --> CRSF cookie Set
DEBUG - 2016-06-03 10:16:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:16:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:16:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b2aace72e5174b61b0bb72724b0aaeaa', '180.168.179.118', '2016-06-03', '10:16:31', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', '04fbbbab539c6288e05af67aa1dc94355eb3bb68')
DEBUG - 2016-06-03 10:16:31 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-03 10:16:31 --> Total execution time: 0.1130
DEBUG - 2016-06-03 10:16:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464920191
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:16:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:16:48 --> Security Class Initialized
DEBUG - 2016-06-03 10:16:48 --> CRSF cookie Set
DEBUG - 2016-06-03 10:16:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:16:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:16:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464920208, data = '__ci_last_regenerate|i:1464919997;'
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:16:48 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 10:16:48 --> Security Class Initialized
DEBUG - 2016-06-03 10:16:48 --> CRSF cookie Set
DEBUG - 2016-06-03 10:16:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 10:16:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 10:16:48 --> Total execution time: 0.0830
DEBUG - 2016-06-03 10:16:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464920208
WHERE id = '04fbbbab539c6288e05af67aa1dc94355eb3bb68'
DEBUG - 2016-06-03 17:09:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 17:09:45 --> CRSF cookie Set
DEBUG - 2016-06-03 17:09:45 --> Security Class Initialized
DEBUG - 2016-06-03 17:09:45 --> CRSF cookie Set
DEBUG - 2016-06-03 17:09:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 17:09:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e6318cdd950620b21cf5fbe30c3595957ae40b2'
DEBUG - 2016-06-03 17:09:45 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3e6318cdd950620b21cf5fbe30c3595957ae40b2', '114.91.131.17', 1464944985, '__ci_last_regenerate|i:1464944985;')
DEBUG - 2016-06-03 17:09:45 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 17:09:45 --> Security Class Initialized
DEBUG - 2016-06-03 17:09:45 --> CRSF cookie Set
DEBUG - 2016-06-03 17:09:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 17:09:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e6318cdd950620b21cf5fbe30c3595957ae40b2'
DEBUG - 2016-06-03 17:09:45 --> Total execution time: 0.1360
DEBUG - 2016-06-03 17:09:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464944985
WHERE id = '3e6318cdd950620b21cf5fbe30c3595957ae40b2'
DEBUG - 2016-06-03 17:09:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 17:09:52 --> Security Class Initialized
DEBUG - 2016-06-03 17:09:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 17:09:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e6318cdd950620b21cf5fbe30c3595957ae40b2'
DEBUG - 2016-06-03 17:09:52 --> 检查用户密码，新密文:76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff
DEBUG - 2016-06-03 17:09:52 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-06-03 17:09:52 --> 登录返回结果数：1
DEBUG - 2016-06-03 17:09:52 --> 成功登录
DEBUG - 2016-06-03 17:09:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464944992, data = '__ci_last_regenerate|i:1464944985;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '3e6318cdd950620b21cf5fbe30c3595957ae40b2'
DEBUG - 2016-06-03 17:09:52 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 17:09:52 --> Security Class Initialized
DEBUG - 2016-06-03 17:09:52 --> CRSF cookie Set
DEBUG - 2016-06-03 17:09:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 17:09:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e6318cdd950620b21cf5fbe30c3595957ae40b2'
DEBUG - 2016-06-03 17:09:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('874ca9cf3e9443278cb5ea60e65f75e3', '114.91.131.17', '2016-06-03', '17:09:52', '120340235', '/admin/order/index/aab58df429c94699b895396d664d5f6c', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '3e6318cdd950620b21cf5fbe30c3595957ae40b2')
DEBUG - 2016-06-03 17:09:52 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 17:09:52 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='aab58df429c94699b895396d664d5f6c' order by create_date_time desc
DEBUG - 2016-06-03 17:09:52 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='aab58df429c94699b895396d664d5f6c'
DEBUG - 2016-06-03 17:09:52 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='aab58df429c94699b895396d664d5f6c'    order by t1.lno asc
        
DEBUG - 2016-06-03 17:09:52 --> Total execution time: 0.1920
DEBUG - 2016-06-03 17:09:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464944992
WHERE id = '3e6318cdd950620b21cf5fbe30c3595957ae40b2'
DEBUG - 2016-06-03 18:41:30 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 18:41:30 --> No URI present. Default controller set.
DEBUG - 2016-06-03 18:41:30 --> Security Class Initialized
DEBUG - 2016-06-03 18:41:30 --> CRSF cookie Set
DEBUG - 2016-06-03 18:41:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 18:41:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e6318cdd950620b21cf5fbe30c3595957ae40b2'
DEBUG - 2016-06-03 18:41:30 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '3e6318cdd950620b21cf5fbe30c3595957ae40b2'
DEBUG - 2016-06-03 18:41:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('19da80c070d04ef98a2398c4c426c73c', '114.91.131.17', '2016-06-03', '18:41:30', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '737aa4a24bdfb54942c7e86e3e9695d3bb415614')
DEBUG - 2016-06-03 18:41:30 --> Total execution time: 0.1248
DEBUG - 2016-06-03 18:41:30 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('737aa4a24bdfb54942c7e86e3e9695d3bb415614', '114.91.131.17', 1464950490, '__ci_last_regenerate|i:1464950490;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-03 18:44:04 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 18:44:05 --> No URI present. Default controller set.
DEBUG - 2016-06-03 18:44:05 --> Security Class Initialized
DEBUG - 2016-06-03 18:44:05 --> CRSF cookie Set
DEBUG - 2016-06-03 18:44:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 18:44:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '737aa4a24bdfb54942c7e86e3e9695d3bb415614'
DEBUG - 2016-06-03 18:44:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c5ecb4ad0c5c45a39530c45772479b50', '114.91.131.17', '2016-06-03', '18:44:05', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '737aa4a24bdfb54942c7e86e3e9695d3bb415614')
DEBUG - 2016-06-03 18:44:05 --> Total execution time: 0.0780
DEBUG - 2016-06-03 18:44:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464950645
WHERE id = '737aa4a24bdfb54942c7e86e3e9695d3bb415614'
DEBUG - 2016-06-03 18:46:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 18:46:18 --> No URI present. Default controller set.
DEBUG - 2016-06-03 18:46:18 --> Security Class Initialized
DEBUG - 2016-06-03 18:46:18 --> CRSF cookie Set
DEBUG - 2016-06-03 18:46:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 18:46:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '737aa4a24bdfb54942c7e86e3e9695d3bb415614'
DEBUG - 2016-06-03 18:46:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a89e61099bcd48c5bc4facb545cadac3', '114.91.131.17', '2016-06-03', '18:46:18', '120340235', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '737aa4a24bdfb54942c7e86e3e9695d3bb415614')
DEBUG - 2016-06-03 18:46:18 --> Total execution time: 0.0780
DEBUG - 2016-06-03 18:46:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464950778
WHERE id = '737aa4a24bdfb54942c7e86e3e9695d3bb415614'
DEBUG - 2016-06-03 18:46:30 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 18:46:30 --> Security Class Initialized
DEBUG - 2016-06-03 18:46:30 --> CRSF cookie Set
DEBUG - 2016-06-03 18:46:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 18:46:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '737aa4a24bdfb54942c7e86e3e9695d3bb415614'
DEBUG - 2016-06-03 18:46:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('03a7e2d6932b46f4aa1f4490197fa8c4', '114.91.131.17', '2016-06-03', '18:46:30', '120340235', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '737aa4a24bdfb54942c7e86e3e9695d3bb415614')
DEBUG - 2016-06-03 18:46:30 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-06-03 18:46:30 --> Total execution time: 0.2028
DEBUG - 2016-06-03 18:46:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1464950790
WHERE id = '737aa4a24bdfb54942c7e86e3e9695d3bb415614'
DEBUG - 2016-06-03 18:46:35 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 18:46:35 --> Security Class Initialized
DEBUG - 2016-06-03 18:46:35 --> CRSF cookie Set
DEBUG - 2016-06-03 18:46:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 18:46:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '737aa4a24bdfb54942c7e86e3e9695d3bb415614'
DEBUG - 2016-06-03 18:46:35 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '737aa4a24bdfb54942c7e86e3e9695d3bb415614'
DEBUG - 2016-06-03 18:46:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1ef06e4328214ebd99eb6199b5905a05', '114.91.131.17', '2016-06-03', '18:46:35', '120340235', '/admin/guest/edit/K05038', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'f0c491e7dab02a2b5437ff087746ef288f8516d7')
DEBUG - 2016-06-03 18:46:35 --> 修改客户信息：K05038
DEBUG - 2016-06-03 18:46:35 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05038' 
DEBUG - 2016-06-03 18:46:36 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05038' 
DEBUG - 2016-06-03 18:46:36 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-06-03 18:46:36 --> Total execution time: 0.1872
DEBUG - 2016-06-03 18:46:36 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f0c491e7dab02a2b5437ff087746ef288f8516d7', '114.91.131.17', 1464950796, '__ci_last_regenerate|i:1464950795;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-06-03 19:02:18 --> UTF-8 Support Enabled
DEBUG - 2016-06-03 19:02:18 --> Security Class Initialized
DEBUG - 2016-06-03 19:02:18 --> CRSF cookie Set
DEBUG - 2016-06-03 19:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-06-03 19:02:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f0c491e7dab02a2b5437ff087746ef288f8516d7'
DEBUG - 2016-06-03 19:02:18 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'f0c491e7dab02a2b5437ff087746ef288f8516d7'
DEBUG - 2016-06-03 19:02:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8468672c980742e5be7c4e401d57ec3a', '114.91.131.17', '2016-06-03', '19:02:18', '120340235', '/admin/order/check/6f9e040ffa07471d97a52f5f2abf26b3', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '61a99b3b4c274eaca53e82a5fb85c915b2416260')
DEBUG - 2016-06-03 19:02:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='6f9e040ffa07471d97a52f5f2abf26b3'
DEBUG - 2016-06-03 19:02:18 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='6f9e040ffa07471d97a52f5f2abf26b3' order by create_date_time desc
DEBUG - 2016-06-03 19:02:18 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='6f9e040ffa07471d97a52f5f2abf26b3'
DEBUG - 2016-06-03 19:02:18 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='6f9e040ffa07471d97a52f5f2abf26b3'    order by t1.lno asc
        
DEBUG - 2016-06-03 19:02:18 --> Total execution time: 0.1092
DEBUG - 2016-06-03 19:02:18 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('61a99b3b4c274eaca53e82a5fb85c915b2416260', '114.91.131.17', 1464951738, '__ci_last_regenerate|i:1464951738;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"76624fd44104c62c3be52161c568ffa1d11f687a709c83364d25bec83c459aff";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
