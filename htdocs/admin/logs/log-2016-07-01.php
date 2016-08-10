<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-07-01 05:38:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 05:38:50 --> CRSF cookie Set
DEBUG - 2016-07-01 05:38:50 --> Security Class Initialized
DEBUG - 2016-07-01 05:38:50 --> CRSF cookie Set
DEBUG - 2016-07-01 05:38:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 05:38:50 --> 404 Page Not Found: I18n/readme.txt
DEBUG - 2016-07-01 09:29:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:29:43 --> No URI present. Default controller set.
DEBUG - 2016-07-01 09:29:43 --> CRSF cookie Set
DEBUG - 2016-07-01 09:29:43 --> Security Class Initialized
DEBUG - 2016-07-01 09:29:43 --> CRSF cookie Set
DEBUG - 2016-07-01 09:29:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:29:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:29:44 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('1b743acb293b72f21e97c2784cdf850ec17dc25e', '114.91.132.3', 1467336584, '__ci_last_regenerate|i:1467336584;')
DEBUG - 2016-07-01 09:29:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:29:44 --> Security Class Initialized
DEBUG - 2016-07-01 09:29:44 --> CRSF cookie Set
DEBUG - 2016-07-01 09:29:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:29:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:29:44 --> Total execution time: 0.1560
DEBUG - 2016-07-01 09:29:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467336584
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:29:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:29:52 --> Security Class Initialized
DEBUG - 2016-07-01 09:29:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:29:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:29:52 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 09:29:52 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 09:29:52 --> 登录返回结果数：1
DEBUG - 2016-07-01 09:29:52 --> 成功登录
DEBUG - 2016-07-01 09:29:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467336592, data = '__ci_last_regenerate|i:1467336584;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:29:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:29:52 --> No URI present. Default controller set.
DEBUG - 2016-07-01 09:29:52 --> Security Class Initialized
DEBUG - 2016-07-01 09:29:52 --> CRSF cookie Set
DEBUG - 2016-07-01 09:29:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:29:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:29:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('35422d0f9d72442590122bd94f697109', '114.91.132.3', '2016-07-01', '09:29:52', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1b743acb293b72f21e97c2784cdf850ec17dc25e')
DEBUG - 2016-07-01 09:29:52 --> Total execution time: 0.1872
DEBUG - 2016-07-01 09:29:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467336592
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:29:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:29:56 --> Security Class Initialized
DEBUG - 2016-07-01 09:29:56 --> CRSF cookie Set
DEBUG - 2016-07-01 09:29:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:29:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:29:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0397bf99386c49abae274b4a85c15aaf', '114.91.132.3', '2016-07-01', '09:29:56', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1b743acb293b72f21e97c2784cdf850ec17dc25e')
DEBUG - 2016-07-01 09:29:56 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 09:29:56 --> Total execution time: 0.2496
DEBUG - 2016-07-01 09:29:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467336596
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:30:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:30:14 --> Security Class Initialized
DEBUG - 2016-07-01 09:30:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:30:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:30:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6ce9bfcf7b7740a290458fb219e71111', '114.91.132.3', '2016-07-01', '09:30:14', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1b743acb293b72f21e97c2784cdf850ec17dc25e')
DEBUG - 2016-07-01 09:30:14 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%�Ͼ�%' order by enable desc
DEBUG - 2016-07-01 09:30:14 --> Total execution time: 0.1248
DEBUG - 2016-07-01 09:30:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467336614
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:30:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:30:19 --> Security Class Initialized
DEBUG - 2016-07-01 09:30:19 --> CRSF cookie Set
DEBUG - 2016-07-01 09:30:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:30:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:30:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d1d8c0cc98984d47801d67cb90f764be', '114.91.132.3', '2016-07-01', '09:30:19', '120340234', '/admin/guest/edit/K05279', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1b743acb293b72f21e97c2784cdf850ec17dc25e')
DEBUG - 2016-07-01 09:30:19 --> 修改客户信息：K05279
DEBUG - 2016-07-01 09:30:19 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05279' 
DEBUG - 2016-07-01 09:30:19 --> [执行的SQL语句]##############insert into apsos_user(uuid,login_code,login_pwd,user_name,phone,email,add_time,sex,enable,company)
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
         from T_Guest where code='K05279'
DEBUG - 2016-07-01 09:30:19 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05279' 
DEBUG - 2016-07-01 09:30:19 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 09:30:19 --> Total execution time: 0.1716
DEBUG - 2016-07-01 09:30:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467336619
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:30:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:30:26 --> Security Class Initialized
DEBUG - 2016-07-01 09:30:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:30:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:30:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c1d42d50ace5468da0b0bf09dcd27535', '114.91.132.3', '2016-07-01', '09:30:26', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1b743acb293b72f21e97c2784cdf850ec17dc25e')
DEBUG - 2016-07-01 09:30:26 --> 保存客户信息
DEBUG - 2016-07-01 09:30:26 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05279', enable = 'Y', user_type = 'A', admin_user_id = ''
WHERE uuid = 'K05279'
DEBUG - 2016-07-01 09:30:26 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 09:30:26 --> Total execution time: 0.0936
DEBUG - 2016-07-01 09:30:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467336626
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:30:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:30:32 --> Security Class Initialized
DEBUG - 2016-07-01 09:30:32 --> CRSF cookie Set
DEBUG - 2016-07-01 09:30:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:30:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:30:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ed5bd0cc45c34a89aeb3588bb7f20aae', '114.91.132.3', '2016-07-01', '09:30:32', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1b743acb293b72f21e97c2784cdf850ec17dc25e')
DEBUG - 2016-07-01 09:30:32 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 09:30:32 --> Total execution time: 0.0936
DEBUG - 2016-07-01 09:30:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467336632
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:30:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:30:48 --> Security Class Initialized
DEBUG - 2016-07-01 09:30:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:30:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:30:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('becc7cd17e974a62bacde4743eac3d53', '114.91.132.3', '2016-07-01', '09:30:48', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1b743acb293b72f21e97c2784cdf850ec17dc25e')
DEBUG - 2016-07-01 09:30:48 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%����%' order by enable desc
DEBUG - 2016-07-01 09:30:48 --> Total execution time: 0.0936
DEBUG - 2016-07-01 09:30:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467336648
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:30:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:30:54 --> Security Class Initialized
DEBUG - 2016-07-01 09:30:54 --> CRSF cookie Set
DEBUG - 2016-07-01 09:30:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:30:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:30:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1f390b2d5bb2431aa418411190173875', '114.91.132.3', '2016-07-01', '09:30:54', '120340234', '/admin/guest/edit/K05245', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1b743acb293b72f21e97c2784cdf850ec17dc25e')
DEBUG - 2016-07-01 09:30:54 --> 修改客户信息：K05245
DEBUG - 2016-07-01 09:30:54 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05245' 
DEBUG - 2016-07-01 09:30:54 --> [执行的SQL语句]##############insert into apsos_user(uuid,login_code,login_pwd,user_name,phone,email,add_time,sex,enable,company)
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
         from T_Guest where code='K05245'
DEBUG - 2016-07-01 09:30:54 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05245' 
DEBUG - 2016-07-01 09:30:54 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 09:30:54 --> Total execution time: 0.0936
DEBUG - 2016-07-01 09:30:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467336654
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:31:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:31:01 --> Security Class Initialized
DEBUG - 2016-07-01 09:31:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:31:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:31:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d5e9de14c7bf4ae1be2c0291905ff761', '114.91.132.3', '2016-07-01', '09:31:01', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1b743acb293b72f21e97c2784cdf850ec17dc25e')
DEBUG - 2016-07-01 09:31:01 --> 保存客户信息
DEBUG - 2016-07-01 09:31:01 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05245', enable = 'Y', user_type = 'A', admin_user_id = ''
WHERE uuid = 'K05245'
DEBUG - 2016-07-01 09:31:01 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 09:31:01 --> Total execution time: 0.0936
DEBUG - 2016-07-01 09:31:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467336661
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:31:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:31:24 --> Security Class Initialized
DEBUG - 2016-07-01 09:31:24 --> CRSF cookie Set
DEBUG - 2016-07-01 09:31:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:31:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:31:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('eafa1da5178943c2aa271b1340259a5b', '114.91.132.3', '2016-07-01', '09:31:24', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '1b743acb293b72f21e97c2784cdf850ec17dc25e')
DEBUG - 2016-07-01 09:31:24 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 09:31:24 --> Total execution time: 0.1092
DEBUG - 2016-07-01 09:31:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467336684
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:43:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:43:49 --> Security Class Initialized
DEBUG - 2016-07-01 09:43:49 --> CRSF cookie Set
DEBUG - 2016-07-01 09:43:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:43:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:43:49 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '1b743acb293b72f21e97c2784cdf850ec17dc25e'
DEBUG - 2016-07-01 09:43:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f564a6e10ed247e6b9f2655cc14975d0', '114.91.132.3', '2016-07-01', '09:43:49', '120340234', '/admin/guest/edit/K05042', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:43:49 --> 修改客户信息：K05042
DEBUG - 2016-07-01 09:43:49 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05042' 
DEBUG - 2016-07-01 09:43:49 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05042' 
DEBUG - 2016-07-01 09:43:49 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 09:43:49 --> Total execution time: 0.4690
DEBUG - 2016-07-01 09:43:49 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('03d38b6b5d9782a15260baec4bf2b5b548975702', '114.91.132.3', 1467337429, '__ci_last_regenerate|i:1467337429;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 09:43:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:43:56 --> Security Class Initialized
DEBUG - 2016-07-01 09:43:56 --> CRSF cookie Set
DEBUG - 2016-07-01 09:43:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:43:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:43:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9d5ee582934c46dfb92493773304a05c', '114.91.132.3', '2016-07-01', '09:43:56', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:43:57 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 09:43:57 --> Total execution time: 0.1080
DEBUG - 2016-07-01 09:43:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337437
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:44:07 --> Security Class Initialized
DEBUG - 2016-07-01 09:44:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:44:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7cc47e91f74d496e806ccf7dd4c03958', '114.91.132.3', '2016-07-01', '09:44:07', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:44:07 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%�ɶ�%' order by enable desc
DEBUG - 2016-07-01 09:44:07 --> Total execution time: 0.1650
DEBUG - 2016-07-01 09:44:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337447
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:44:11 --> Security Class Initialized
DEBUG - 2016-07-01 09:44:11 --> CRSF cookie Set
DEBUG - 2016-07-01 09:44:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:44:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3df55c10fc08467b95bbfd628bfe78fb', '114.91.132.3', '2016-07-01', '09:44:11', '120340234', '/admin/guest/edit/K05246', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:44:12 --> 修改客户信息：K05246
DEBUG - 2016-07-01 09:44:12 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05246' 
DEBUG - 2016-07-01 09:44:12 --> [执行的SQL语句]##############insert into apsos_user(uuid,login_code,login_pwd,user_name,phone,email,add_time,sex,enable,company)
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
         from T_Guest where code='K05246'
DEBUG - 2016-07-01 09:44:12 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05246' 
DEBUG - 2016-07-01 09:44:12 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 09:44:12 --> Total execution time: 0.1480
DEBUG - 2016-07-01 09:44:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337452
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:44:18 --> Security Class Initialized
DEBUG - 2016-07-01 09:44:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:44:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('61c926f0e5184d0d961ac7e063537a60', '114.91.132.3', '2016-07-01', '09:44:18', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:44:18 --> 保存客户信息
DEBUG - 2016-07-01 09:44:18 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05246', enable = 'Y', user_type = 'A', admin_user_id = ''
WHERE uuid = 'K05246'
DEBUG - 2016-07-01 09:44:18 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 09:44:18 --> Total execution time: 0.0990
DEBUG - 2016-07-01 09:44:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337458
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:44:23 --> Security Class Initialized
DEBUG - 2016-07-01 09:44:23 --> CRSF cookie Set
DEBUG - 2016-07-01 09:44:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:44:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('42c03ef630a143ef8b36cc2804b9177e', '114.91.132.3', '2016-07-01', '09:44:23', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:44:23 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 09:44:23 --> Total execution time: 0.0980
DEBUG - 2016-07-01 09:44:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337463
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:44:32 --> Security Class Initialized
DEBUG - 2016-07-01 09:44:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:44:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('df584e0734e24c8daeca9698c6481b4e', '114.91.132.3', '2016-07-01', '09:44:33', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:44:33 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%�Ͼ�%' order by enable desc
DEBUG - 2016-07-01 09:44:33 --> Total execution time: 0.0970
DEBUG - 2016-07-01 09:44:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337473
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:44:38 --> Security Class Initialized
DEBUG - 2016-07-01 09:44:38 --> CRSF cookie Set
DEBUG - 2016-07-01 09:44:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:44:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2a829f6ddbf94fce8615bc2aefaa64f3', '114.91.132.3', '2016-07-01', '09:44:38', '120340234', '/admin/guest/edit/K05042', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:44:38 --> 修改客户信息：K05042
DEBUG - 2016-07-01 09:44:38 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05042' 
DEBUG - 2016-07-01 09:44:38 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05042' 
DEBUG - 2016-07-01 09:44:38 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 09:44:38 --> Total execution time: 0.0880
DEBUG - 2016-07-01 09:44:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337478
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:44:47 --> Security Class Initialized
DEBUG - 2016-07-01 09:44:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:44:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:44:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c443801189d945efb1f893d8ed1cdb9b', '114.91.132.3', '2016-07-01', '09:44:47', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:44:47 --> 保存客户信息
DEBUG - 2016-07-01 09:44:47 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05042', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05042'
DEBUG - 2016-07-01 09:44:47 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 09:44:47 --> Total execution time: 0.0980
DEBUG - 2016-07-01 09:44:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337487
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:45:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:45:00 --> Security Class Initialized
DEBUG - 2016-07-01 09:45:00 --> CRSF cookie Set
DEBUG - 2016-07-01 09:45:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:45:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:45:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c911d872f294462c9cb40443b0772011', '114.91.132.3', '2016-07-01', '09:45:00', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:45:00 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 09:45:00 --> Total execution time: 0.0990
DEBUG - 2016-07-01 09:45:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337500
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:45:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:45:16 --> Security Class Initialized
DEBUG - 2016-07-01 09:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:45:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:45:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1adbe8f848a24dbf87d8c577b87f02cd', '114.91.132.3', '2016-07-01', '09:45:16', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:45:16 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%����%' order by enable desc
DEBUG - 2016-07-01 09:45:16 --> Total execution time: 0.1230
DEBUG - 2016-07-01 09:45:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337516
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:45:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:45:19 --> Security Class Initialized
DEBUG - 2016-07-01 09:45:19 --> CRSF cookie Set
DEBUG - 2016-07-01 09:45:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:45:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:45:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7126da4a0bc54673a794cebc1707cac4', '114.91.132.3', '2016-07-01', '09:45:19', '120340234', '/admin/guest/edit/K05219', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:45:19 --> 修改客户信息：K05219
DEBUG - 2016-07-01 09:45:19 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05219' 
DEBUG - 2016-07-01 09:45:19 --> [执行的SQL语句]##############insert into apsos_user(uuid,login_code,login_pwd,user_name,phone,email,add_time,sex,enable,company)
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
         from T_Guest where code='K05219'
DEBUG - 2016-07-01 09:45:19 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05219' 
DEBUG - 2016-07-01 09:45:19 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 09:45:19 --> Total execution time: 0.1060
DEBUG - 2016-07-01 09:45:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337519
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:45:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:45:29 --> Security Class Initialized
DEBUG - 2016-07-01 09:45:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:45:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:45:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8690ba33806346f79714c521ea9780fd', '114.91.132.3', '2016-07-01', '09:45:29', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:45:29 --> 保存客户信息
DEBUG - 2016-07-01 09:45:29 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05219', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05219'
DEBUG - 2016-07-01 09:45:29 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 09:45:29 --> Total execution time: 0.0890
DEBUG - 2016-07-01 09:45:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337529
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:45:36 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:45:36 --> Security Class Initialized
DEBUG - 2016-07-01 09:45:36 --> CRSF cookie Set
DEBUG - 2016-07-01 09:45:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:45:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:45:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fa2315ce6be64161adf4a7a387261501', '114.91.132.3', '2016-07-01', '09:45:36', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:45:36 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 09:45:36 --> Total execution time: 0.1030
DEBUG - 2016-07-01 09:45:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337536
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:46:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:46:00 --> Security Class Initialized
DEBUG - 2016-07-01 09:46:00 --> CRSF cookie Set
DEBUG - 2016-07-01 09:46:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:46:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:46:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a99ac8ca509742fd84ff1a061efcd125', '114.91.132.3', '2016-07-01', '09:46:00', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:46:00 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 09:46:00 --> Total execution time: 0.0890
DEBUG - 2016-07-01 09:46:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337560
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:46:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:46:02 --> Security Class Initialized
DEBUG - 2016-07-01 09:46:02 --> CRSF cookie Set
DEBUG - 2016-07-01 09:46:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:46:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:46:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5adbc3db45564d0ab6134fcfbeceeedb', '114.91.132.3', '2016-07-01', '09:46:02', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:46:02 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 09:46:02 --> Total execution time: 0.0880
DEBUG - 2016-07-01 09:46:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337562
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:46:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:46:14 --> Security Class Initialized
DEBUG - 2016-07-01 09:46:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:46:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:46:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ffdcc4dac9114c7982127d0176639c4b', '114.91.132.3', '2016-07-01', '09:46:14', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:46:14 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%����%' order by enable desc
DEBUG - 2016-07-01 09:46:14 --> Total execution time: 0.1370
DEBUG - 2016-07-01 09:46:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337574
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:46:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:46:17 --> Security Class Initialized
DEBUG - 2016-07-01 09:46:17 --> CRSF cookie Set
DEBUG - 2016-07-01 09:46:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:46:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:46:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('18b2339e5bd549a4a6d0232424b07611', '114.91.132.3', '2016-07-01', '09:46:17', '120340234', '/admin/guest/edit/K05234', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:46:17 --> 修改客户信息：K05234
DEBUG - 2016-07-01 09:46:17 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05234' 
DEBUG - 2016-07-01 09:46:17 --> [执行的SQL语句]##############insert into apsos_user(uuid,login_code,login_pwd,user_name,phone,email,add_time,sex,enable,company)
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
         from T_Guest where code='K05234'
DEBUG - 2016-07-01 09:46:17 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05234' 
DEBUG - 2016-07-01 09:46:17 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 09:46:17 --> Total execution time: 0.2780
DEBUG - 2016-07-01 09:46:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337577
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:46:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:46:26 --> Security Class Initialized
DEBUG - 2016-07-01 09:46:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:46:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:46:26 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b59f4ed89e394505b02e63ee0b87303e', '114.91.132.3', '2016-07-01', '09:46:26', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:46:26 --> 保存客户信息
DEBUG - 2016-07-01 09:46:26 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05234', enable = 'Y', user_type = 'A', admin_user_id = ''
WHERE uuid = 'K05234'
DEBUG - 2016-07-01 09:46:26 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 09:46:26 --> Total execution time: 0.1080
DEBUG - 2016-07-01 09:46:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337586
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:47:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:47:16 --> Security Class Initialized
DEBUG - 2016-07-01 09:47:16 --> CRSF cookie Set
DEBUG - 2016-07-01 09:47:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:47:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:47:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a7ef3fc2b73c42f384b9e7a4a53236ab', '114.91.132.3', '2016-07-01', '09:47:16', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:47:16 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 09:47:16 --> Total execution time: 0.1420
DEBUG - 2016-07-01 09:47:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337636
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:47:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:47:39 --> Security Class Initialized
DEBUG - 2016-07-01 09:47:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:47:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:47:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3bd6ea56ef2a4beea8c5f29b175be2fb', '114.91.132.3', '2016-07-01', '09:47:39', '120340234', '/admin/guest/index', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:47:39 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1  AND a.name like '%֣��%' order by enable desc
DEBUG - 2016-07-01 09:47:39 --> Total execution time: 0.1270
DEBUG - 2016-07-01 09:47:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337659
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:47:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:47:43 --> Security Class Initialized
DEBUG - 2016-07-01 09:47:43 --> CRSF cookie Set
DEBUG - 2016-07-01 09:47:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:47:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:47:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9f8352e4848b4fca9af82fc6f845efd7', '114.91.132.3', '2016-07-01', '09:47:43', '120340234', '/admin/guest/edit/K05212', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:47:43 --> 修改客户信息：K05212
DEBUG - 2016-07-01 09:47:43 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05212' 
DEBUG - 2016-07-01 09:47:43 --> [执行的SQL语句]##############insert into apsos_user(uuid,login_code,login_pwd,user_name,phone,email,add_time,sex,enable,company)
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
         from T_Guest where code='K05212'
DEBUG - 2016-07-01 09:47:43 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05212' 
DEBUG - 2016-07-01 09:47:43 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 09:47:43 --> Total execution time: 0.0950
DEBUG - 2016-07-01 09:47:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337663
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:47:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:47:50 --> Security Class Initialized
DEBUG - 2016-07-01 09:47:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:47:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:47:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a27595a7d4a24d098708d9d47d71592b', '114.91.132.3', '2016-07-01', '09:47:50', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:47:50 --> 保存客户信息
DEBUG - 2016-07-01 09:47:50 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05212', enable = 'Y', user_type = 'A', admin_user_id = ''
WHERE uuid = 'K05212'
DEBUG - 2016-07-01 09:47:50 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 09:47:50 --> Total execution time: 0.0960
DEBUG - 2016-07-01 09:47:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337670
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:47:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:47:56 --> Security Class Initialized
DEBUG - 2016-07-01 09:47:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:47:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:47:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ddb72e0120e74546a7cda6e0b09dfa08', '114.91.132.3', '2016-07-01', '09:47:56', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:47:56 --> 保存客户信息
DEBUG - 2016-07-01 09:47:56 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05212', enable = 'Y', user_type = 'A', admin_user_id = ''
WHERE uuid = 'K05212'
DEBUG - 2016-07-01 09:47:56 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 09:47:56 --> Total execution time: 0.0880
DEBUG - 2016-07-01 09:47:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337676
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:47:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:47:58 --> Security Class Initialized
DEBUG - 2016-07-01 09:47:58 --> CRSF cookie Set
DEBUG - 2016-07-01 09:47:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:47:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:47:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('610ff372303746249a13be61efca25a9', '114.91.132.3', '2016-07-01', '09:47:58', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '03d38b6b5d9782a15260baec4bf2b5b548975702')
DEBUG - 2016-07-01 09:47:58 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 09:47:58 --> Total execution time: 0.0850
DEBUG - 2016-07-01 09:47:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337678
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:49:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:49:54 --> Security Class Initialized
DEBUG - 2016-07-01 09:49:54 --> CRSF cookie Set
DEBUG - 2016-07-01 09:49:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:49:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:49:54 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '03d38b6b5d9782a15260baec4bf2b5b548975702'
DEBUG - 2016-07-01 09:49:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('75fa2acce9e643d2b18413d784a71df6', '114.91.132.3', '2016-07-01', '09:49:54', '120340234', '/admin/guest/edit/K05215', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2b95514f2c38af41c9d47e025e46e7d09fac06e2')
DEBUG - 2016-07-01 09:49:54 --> 修改客户信息：K05215
DEBUG - 2016-07-01 09:49:54 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05215' 
DEBUG - 2016-07-01 09:49:54 --> [执行的SQL语句]##############insert into apsos_user(uuid,login_code,login_pwd,user_name,phone,email,add_time,sex,enable,company)
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
         from T_Guest where code='K05215'
DEBUG - 2016-07-01 09:49:54 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05215' 
DEBUG - 2016-07-01 09:49:54 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 09:49:54 --> Total execution time: 0.1190
DEBUG - 2016-07-01 09:49:54 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2b95514f2c38af41c9d47e025e46e7d09fac06e2', '114.91.132.3', 1467337794, '__ci_last_regenerate|i:1467337794;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 09:50:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:50:00 --> Security Class Initialized
DEBUG - 2016-07-01 09:50:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:50:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2b95514f2c38af41c9d47e025e46e7d09fac06e2'
DEBUG - 2016-07-01 09:50:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5e0f97318e844774aa1959971d2285af', '114.91.132.3', '2016-07-01', '09:50:00', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2b95514f2c38af41c9d47e025e46e7d09fac06e2')
DEBUG - 2016-07-01 09:50:00 --> 保存客户信息
DEBUG - 2016-07-01 09:50:00 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05215', enable = 'Y', user_type = 'A', admin_user_id = ''
WHERE uuid = 'K05215'
DEBUG - 2016-07-01 09:50:00 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 09:50:00 --> Total execution time: 0.2050
DEBUG - 2016-07-01 09:50:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337800
WHERE id = '2b95514f2c38af41c9d47e025e46e7d09fac06e2'
DEBUG - 2016-07-01 09:50:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 09:50:18 --> Security Class Initialized
DEBUG - 2016-07-01 09:50:18 --> CRSF cookie Set
DEBUG - 2016-07-01 09:50:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 09:50:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2b95514f2c38af41c9d47e025e46e7d09fac06e2'
DEBUG - 2016-07-01 09:50:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3f4b1dca30e145d29ce2697a2e011c1b', '114.91.132.3', '2016-07-01', '09:50:18', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '2b95514f2c38af41c9d47e025e46e7d09fac06e2')
DEBUG - 2016-07-01 09:50:18 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 09:50:18 --> Total execution time: 0.0870
DEBUG - 2016-07-01 09:50:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467337818
WHERE id = '2b95514f2c38af41c9d47e025e46e7d09fac06e2'
DEBUG - 2016-07-01 10:03:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:03:05 --> Security Class Initialized
DEBUG - 2016-07-01 10:03:05 --> CRSF cookie Set
DEBUG - 2016-07-01 10:03:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:03:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2b95514f2c38af41c9d47e025e46e7d09fac06e2'
DEBUG - 2016-07-01 10:03:05 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '2b95514f2c38af41c9d47e025e46e7d09fac06e2'
DEBUG - 2016-07-01 10:03:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('424f8c50d25849cca7be90e970c27638', '114.91.132.3', '2016-07-01', '10:03:05', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e08029639e2ef2263fed0e201b1ad1277a6ef963')
DEBUG - 2016-07-01 10:03:05 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 10:03:05 --> Total execution time: 0.1370
DEBUG - 2016-07-01 10:03:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e08029639e2ef2263fed0e201b1ad1277a6ef963', '114.91.132.3', 1467338585, '__ci_last_regenerate|i:1467338585;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 10:03:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:03:15 --> Security Class Initialized
DEBUG - 2016-07-01 10:03:15 --> CRSF cookie Set
DEBUG - 2016-07-01 10:03:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:03:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:03:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('deb74e87d5df4c83a5443643eec2b3de', '114.91.132.3', '2016-07-01', '10:03:15', '120340234', '/admin/user/add', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e08029639e2ef2263fed0e201b1ad1277a6ef963')
DEBUG - 2016-07-01 10:03:15 --> Total execution time: 0.1080
DEBUG - 2016-07-01 10:03:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467338595
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:03:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:03:20 --> Security Class Initialized
DEBUG - 2016-07-01 10:03:20 --> CRSF cookie Set
DEBUG - 2016-07-01 10:03:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:03:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:03:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('06c4da00c98645ec9dc8bb1bb962542c', '114.91.132.3', '2016-07-01', '10:03:20', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e08029639e2ef2263fed0e201b1ad1277a6ef963')
DEBUG - 2016-07-01 10:03:20 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 10:03:20 --> Total execution time: 0.0990
DEBUG - 2016-07-01 10:03:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467338600
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:03:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:03:39 --> Security Class Initialized
DEBUG - 2016-07-01 10:03:39 --> CRSF cookie Set
DEBUG - 2016-07-01 10:03:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:03:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:03:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c769803d49d14fb19ac78ad7f1a4dae6', '114.91.132.3', '2016-07-01', '10:03:39', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e08029639e2ef2263fed0e201b1ad1277a6ef963')
DEBUG - 2016-07-01 10:03:39 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 10:03:39 --> Total execution time: 0.0970
DEBUG - 2016-07-01 10:03:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467338619
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:03:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:03:40 --> Security Class Initialized
DEBUG - 2016-07-01 10:03:40 --> CRSF cookie Set
DEBUG - 2016-07-01 10:03:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:03:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:03:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('00f2775f18b94f5697dc0ebd9f91a6e0', '114.91.132.3', '2016-07-01', '10:03:40', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e08029639e2ef2263fed0e201b1ad1277a6ef963')
DEBUG - 2016-07-01 10:03:40 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 10:03:40 --> Total execution time: 0.1000
DEBUG - 2016-07-01 10:03:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467338620
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:03:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:03:50 --> Security Class Initialized
DEBUG - 2016-07-01 10:03:50 --> CRSF cookie Set
DEBUG - 2016-07-01 10:03:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:03:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:03:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b0cdbf5a8a6b409289e51406376c77a4', '114.91.132.3', '2016-07-01', '10:03:50', '120340234', '/admin/user/add', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e08029639e2ef2263fed0e201b1ad1277a6ef963')
DEBUG - 2016-07-01 10:03:50 --> Total execution time: 0.1030
DEBUG - 2016-07-01 10:03:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467338630
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:03:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:03:56 --> Security Class Initialized
DEBUG - 2016-07-01 10:03:56 --> CRSF cookie Set
DEBUG - 2016-07-01 10:03:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:03:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:03:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c57b849b05ec4d749bb3f21eaab4cc7d', '114.91.132.3', '2016-07-01', '10:03:56', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e08029639e2ef2263fed0e201b1ad1277a6ef963')
DEBUG - 2016-07-01 10:03:56 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 10:03:56 --> Total execution time: 0.0740
DEBUG - 2016-07-01 10:03:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467338636
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:04:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:04:12 --> Security Class Initialized
DEBUG - 2016-07-01 10:04:12 --> CRSF cookie Set
DEBUG - 2016-07-01 10:04:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:04:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:04:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('edfa6998977a41c8a52a96f023f04753', '114.91.132.3', '2016-07-01', '10:04:12', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 'e08029639e2ef2263fed0e201b1ad1277a6ef963')
DEBUG - 2016-07-01 10:04:12 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 10:04:12 --> Total execution time: 0.0820
DEBUG - 2016-07-01 10:04:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467338652
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:28:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:28:24 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:28:24 --> CRSF cookie Set
DEBUG - 2016-07-01 10:28:24 --> Security Class Initialized
DEBUG - 2016-07-01 10:28:24 --> CRSF cookie Set
DEBUG - 2016-07-01 10:28:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:28:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '930ae4e48a14a55190dd52fd2724e85deea02308'
DEBUG - 2016-07-01 10:28:24 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('930ae4e48a14a55190dd52fd2724e85deea02308', '223.104.5.205', 1467340104, '__ci_last_regenerate|i:1467340104;')
DEBUG - 2016-07-01 10:28:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:28:24 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:28:24 --> CRSF cookie Set
DEBUG - 2016-07-01 10:28:24 --> Security Class Initialized
DEBUG - 2016-07-01 10:28:24 --> CRSF cookie Set
DEBUG - 2016-07-01 10:28:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:28:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:28:24 --> Security Class Initialized
DEBUG - 2016-07-01 10:28:24 --> CRSF cookie Set
DEBUG - 2016-07-01 10:28:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:28:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '431d41fb810d6f49eac5ac193341d776811c2d5f'
DEBUG - 2016-07-01 10:28:24 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('431d41fb810d6f49eac5ac193341d776811c2d5f', '112.90.82.218', 1467340104, '__ci_last_regenerate|i:1467340104;')
DEBUG - 2016-07-01 10:28:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '930ae4e48a14a55190dd52fd2724e85deea02308'
DEBUG - 2016-07-01 10:28:24 --> Total execution time: 0.1092
DEBUG - 2016-07-01 10:28:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340104
WHERE id = '930ae4e48a14a55190dd52fd2724e85deea02308'
DEBUG - 2016-07-01 10:28:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:28:24 --> CRSF cookie Set
DEBUG - 2016-07-01 10:28:24 --> Security Class Initialized
DEBUG - 2016-07-01 10:28:24 --> CRSF cookie Set
DEBUG - 2016-07-01 10:28:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:28:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2a790423eb15d8ae3bd597e5f8b1483be97cb463'
DEBUG - 2016-07-01 10:28:24 --> Total execution time: 0.0780
DEBUG - 2016-07-01 10:28:24 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2a790423eb15d8ae3bd597e5f8b1483be97cb463', '112.90.82.218', 1467340104, '__ci_last_regenerate|i:1467340104;')
DEBUG - 2016-07-01 10:28:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:28:26 --> CRSF cookie Set
DEBUG - 2016-07-01 10:28:26 --> Security Class Initialized
DEBUG - 2016-07-01 10:28:26 --> CRSF cookie Set
DEBUG - 2016-07-01 10:28:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:28:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '29b4481d3ea754bc35ba176b4638161ade54b6b6'
DEBUG - 2016-07-01 10:28:26 --> Total execution time: 0.0936
DEBUG - 2016-07-01 10:28:26 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('29b4481d3ea754bc35ba176b4638161ade54b6b6', '101.226.68.215', 1467340106, '__ci_last_regenerate|i:1467340106;')
DEBUG - 2016-07-01 10:28:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:28:48 --> Security Class Initialized
DEBUG - 2016-07-01 10:28:48 --> CRSF cookie Set
DEBUG - 2016-07-01 10:28:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:28:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:28:48 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'e08029639e2ef2263fed0e201b1ad1277a6ef963'
DEBUG - 2016-07-01 10:28:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3368bad1fb4242788f32cf4b8e840a5a', '114.91.132.3', '2016-07-01', '10:28:48', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8')
DEBUG - 2016-07-01 10:28:48 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 10:28:48 --> Total execution time: 0.0936
DEBUG - 2016-07-01 10:28:48 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8', '114.91.132.3', 1467340128, '__ci_last_regenerate|i:1467340128;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 10:28:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:28:50 --> Security Class Initialized
DEBUG - 2016-07-01 10:28:50 --> CRSF cookie Set
DEBUG - 2016-07-01 10:28:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:28:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:28:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2143cdb538d64abf97bbfb7fcf71657a', '114.91.132.3', '2016-07-01', '10:28:50', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8')
DEBUG - 2016-07-01 10:28:50 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 10:28:50 --> Total execution time: 0.0936
DEBUG - 2016-07-01 10:28:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340130
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:30:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:30:11 --> Security Class Initialized
DEBUG - 2016-07-01 10:30:11 --> CRSF cookie Set
DEBUG - 2016-07-01 10:30:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:30:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:30:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('faea7957cb744e60aa37b1c61ee25baf', '114.91.132.3', '2016-07-01', '10:30:11', '120340234', '/admin/order/check/523df1cd7693427bb4774df66c31a7a8', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8')
DEBUG - 2016-07-01 10:30:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='523df1cd7693427bb4774df66c31a7a8'
DEBUG - 2016-07-01 10:30:11 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='523df1cd7693427bb4774df66c31a7a8' order by create_date_time desc
DEBUG - 2016-07-01 10:30:11 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='523df1cd7693427bb4774df66c31a7a8'
DEBUG - 2016-07-01 10:30:11 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='523df1cd7693427bb4774df66c31a7a8'    order by t1.lno asc
        
DEBUG - 2016-07-01 10:30:11 --> Total execution time: 0.1560
DEBUG - 2016-07-01 10:30:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340211
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:30:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:30:21 --> Security Class Initialized
DEBUG - 2016-07-01 10:30:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:30:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:30:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('70f37cc8eb2944ac92d88e9f9cbe736b', '114.91.132.3', '2016-07-01', '10:30:21', '120340234', '/admin/order/checkOrder', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8')
DEBUG - 2016-07-01 10:30:21 --> 审核订单
DEBUG - 2016-07-01 10:30:21 --> [执行的SQL语句]##############UPDATE apsos_order SET order_status = '2'
WHERE uuid = '523df1cd7693427bb4774df66c31a7a8'
AND   (
order_status = '1'
OR order_status = '8'
 )
DEBUG - 2016-07-01 10:30:21 --> 过程调用语句：  execute USP_APSOS_outorder '523df1cd7693427bb4774df66c31a7a8'
DEBUG - 2016-07-01 10:30:24 --> [执行的SQL语句]##############INSERT INTO apsos_order_check (check_user_id, order_id, order_status, remark, uuid, create_date_time) VALUES ('120340234', '523df1cd7693427bb4774df66c31a7a8', '2', '', '79814d3750af4c97b07eba0fb578b72d', '2016-07-01 10:30:24')
DEBUG - 2016-07-01 10:30:24 --> 该订单状态更新成功:2
DEBUG - 2016-07-01 10:30:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='523df1cd7693427bb4774df66c31a7a8'
DEBUG - 2016-07-01 10:30:24 --> [执行的SQL语句]##############select * from apsos_user where uuid='K05038'
DEBUG - 2016-07-01 10:30:25 --> {"json_header":{"state":true,"msg":"\u64cd\u4f5c\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 10:30:25 --> Total execution time: 3.5880
DEBUG - 2016-07-01 10:30:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340225
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:30:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:30:25 --> Security Class Initialized
DEBUG - 2016-07-01 10:30:25 --> CRSF cookie Set
DEBUG - 2016-07-01 10:30:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:30:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:30:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d9328446cda049618628f30eceff3d48', '114.91.132.3', '2016-07-01', '10:30:25', '120340234', '/admin/order/check/523df1cd7693427bb4774df66c31a7a8', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8')
DEBUG - 2016-07-01 10:30:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='523df1cd7693427bb4774df66c31a7a8'
DEBUG - 2016-07-01 10:30:25 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='523df1cd7693427bb4774df66c31a7a8' order by create_date_time desc
DEBUG - 2016-07-01 10:30:25 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='523df1cd7693427bb4774df66c31a7a8'
DEBUG - 2016-07-01 10:30:25 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='523df1cd7693427bb4774df66c31a7a8'    order by t1.lno asc
        
DEBUG - 2016-07-01 10:30:25 --> Total execution time: 0.1248
DEBUG - 2016-07-01 10:30:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340225
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:31:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:31:45 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:31:45 --> CRSF cookie Set
DEBUG - 2016-07-01 10:31:45 --> Security Class Initialized
DEBUG - 2016-07-01 10:31:45 --> CRSF cookie Set
DEBUG - 2016-07-01 10:31:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:31:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:31:45 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a0c9e05e666c3b7e081ec0f47df30fde561d34b0', '192.168.4.101', 1467340305, '__ci_last_regenerate|i:1467340305;')
DEBUG - 2016-07-01 10:31:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:31:45 --> Security Class Initialized
DEBUG - 2016-07-01 10:31:45 --> CRSF cookie Set
DEBUG - 2016-07-01 10:31:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:31:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:31:45 --> Total execution time: 0.0624
DEBUG - 2016-07-01 10:31:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340305
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:10 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:32:10 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 10:32:10 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 10:32:10 --> 登录返回结果数：1
DEBUG - 2016-07-01 10:32:10 --> 成功登录
DEBUG - 2016-07-01 10:32:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340330
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:32:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:11 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:32:11 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 10:32:11 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 10:32:11 --> 登录返回结果数：1
DEBUG - 2016-07-01 10:32:11 --> 成功登录
DEBUG - 2016-07-01 10:32:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340331
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:32:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:11 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:32:11 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:11 --> CRSF cookie Set
DEBUG - 2016-07-01 10:32:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340331
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:11 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:32:11 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:11 --> CRSF cookie Set
DEBUG - 2016-07-01 10:32:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340331
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:13 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:13 --> CRSF cookie Set
DEBUG - 2016-07-01 10:32:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:13 --> Total execution time: 0.0780
DEBUG - 2016-07-01 10:32:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340333
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:27 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:32:27 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 10:32:27 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 10:32:27 --> 登录返回结果数：1
DEBUG - 2016-07-01 10:32:27 --> 成功登录
DEBUG - 2016-07-01 10:32:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340347
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:32:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:27 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:32:27 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:27 --> CRSF cookie Set
DEBUG - 2016-07-01 10:32:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340347
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:28 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:28 --> CRSF cookie Set
DEBUG - 2016-07-01 10:32:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:28 --> Total execution time: 0.0624
DEBUG - 2016-07-01 10:32:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340348
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:44 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:32:44 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 10:32:44 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 10:32:44 --> 登录返回结果数：1
DEBUG - 2016-07-01 10:32:44 --> 成功登录
DEBUG - 2016-07-01 10:32:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340364
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:32:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:44 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:32:44 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:44 --> CRSF cookie Set
DEBUG - 2016-07-01 10:32:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340364
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:45 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:45 --> CRSF cookie Set
DEBUG - 2016-07-01 10:32:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:45 --> Total execution time: 0.0624
DEBUG - 2016-07-01 10:32:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340365
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 10:32:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:47 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:32:47 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 10:32:47 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code = ''
OR phone = ''
OR email = ''
 )
DEBUG - 2016-07-01 10:32:47 --> 登录返回结果数：0
DEBUG - 2016-07-01 10:32:47 --> Total execution time: 0.0780
DEBUG - 2016-07-01 10:32:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340367, data = '__ci_last_regenerate|i:1467340128;'
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:32:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:49 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '930ae4e48a14a55190dd52fd2724e85deea02308'
DEBUG - 2016-07-01 10:32:49 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 10:32:49 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 10:32:49 --> 登录返回结果数：1
DEBUG - 2016-07-01 10:32:49 --> 成功登录
DEBUG - 2016-07-01 10:32:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340369, data = '__ci_last_regenerate|i:1467340104;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '930ae4e48a14a55190dd52fd2724e85deea02308'
DEBUG - 2016-07-01 10:32:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:32:49 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:32:49 --> Security Class Initialized
DEBUG - 2016-07-01 10:32:49 --> CRSF cookie Set
DEBUG - 2016-07-01 10:32:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:32:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '930ae4e48a14a55190dd52fd2724e85deea02308'
DEBUG - 2016-07-01 10:32:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('281957496dff4dd28bfc8e40b2ab4f36', '223.104.5.205', '2016-07-01', '10:32:49', '120340234', '/admin/', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/37.0.0.0 Mobile MQQBrowser/6.2 TBS/036524 Safari/537.36 V1_AND_SQ_6.3.7_374_YYB_D QQ/6.3.7.2795 NetType/4G WebP/0.3.0 Pixel/720', '930ae4e48a14a55190dd52fd2724e85deea02308')
DEBUG - 2016-07-01 10:32:49 --> Total execution time: 0.1092
DEBUG - 2016-07-01 10:32:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340369
WHERE id = '930ae4e48a14a55190dd52fd2724e85deea02308'
DEBUG - 2016-07-01 10:34:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:34:23 --> Security Class Initialized
DEBUG - 2016-07-01 10:34:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:34:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:34:23 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '5cd5ef888eb96df0ae20931214ac3a8a4cd3bfa8'
DEBUG - 2016-07-01 10:34:23 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 10:34:23 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 10:34:23 --> 登录返回结果数：1
DEBUG - 2016-07-01 10:34:23 --> 成功登录
DEBUG - 2016-07-01 10:34:23 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6468eb226e0c88ebca9d2ce7df90d3888136f690', '114.91.132.3', 1467340463, '__ci_last_regenerate|i:1467340463;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 10:34:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:34:23 --> Security Class Initialized
DEBUG - 2016-07-01 10:34:23 --> CRSF cookie Set
DEBUG - 2016-07-01 10:34:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:34:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6468eb226e0c88ebca9d2ce7df90d3888136f690'
DEBUG - 2016-07-01 10:34:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fe19788dfcf54e988d4a4bc0e521c5b8', '114.91.132.3', '2016-07-01', '10:34:23', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '6468eb226e0c88ebca9d2ce7df90d3888136f690')
DEBUG - 2016-07-01 10:34:23 --> Total execution time: 0.0780
DEBUG - 2016-07-01 10:34:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340463
WHERE id = '6468eb226e0c88ebca9d2ce7df90d3888136f690'
DEBUG - 2016-07-01 10:35:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:35:00 --> Security Class Initialized
DEBUG - 2016-07-01 10:35:00 --> CRSF cookie Set
DEBUG - 2016-07-01 10:35:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:35:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6468eb226e0c88ebca9d2ce7df90d3888136f690'
DEBUG - 2016-07-01 10:35:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340500, data = '__ci_last_regenerate|i:1467340463;'
WHERE id = '6468eb226e0c88ebca9d2ce7df90d3888136f690'
DEBUG - 2016-07-01 10:35:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:35:00 --> Security Class Initialized
DEBUG - 2016-07-01 10:35:00 --> CRSF cookie Set
DEBUG - 2016-07-01 10:35:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:35:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6468eb226e0c88ebca9d2ce7df90d3888136f690'
DEBUG - 2016-07-01 10:35:00 --> Total execution time: 0.0780
DEBUG - 2016-07-01 10:35:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340500
WHERE id = '6468eb226e0c88ebca9d2ce7df90d3888136f690'
DEBUG - 2016-07-01 10:35:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:35:43 --> Security Class Initialized
DEBUG - 2016-07-01 10:35:43 --> CRSF cookie Set
DEBUG - 2016-07-01 10:35:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:35:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6468eb226e0c88ebca9d2ce7df90d3888136f690'
DEBUG - 2016-07-01 10:35:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340543
WHERE id = '6468eb226e0c88ebca9d2ce7df90d3888136f690'
DEBUG - 2016-07-01 10:35:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:35:43 --> Security Class Initialized
DEBUG - 2016-07-01 10:35:43 --> CRSF cookie Set
DEBUG - 2016-07-01 10:35:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:35:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6468eb226e0c88ebca9d2ce7df90d3888136f690'
DEBUG - 2016-07-01 10:35:43 --> Total execution time: 0.0624
DEBUG - 2016-07-01 10:35:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467340543
WHERE id = '6468eb226e0c88ebca9d2ce7df90d3888136f690'
DEBUG - 2016-07-01 10:44:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:44:57 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:44:57 --> CRSF cookie Set
DEBUG - 2016-07-01 10:44:57 --> Security Class Initialized
DEBUG - 2016-07-01 10:44:57 --> CRSF cookie Set
DEBUG - 2016-07-01 10:44:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:44:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:44:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a301f7a3559402fd36d8eb123279cc6cb8512b61', '192.168.4.20', 1467341097, '__ci_last_regenerate|i:1467341097;')
DEBUG - 2016-07-01 10:44:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:44:57 --> Security Class Initialized
DEBUG - 2016-07-01 10:44:57 --> CRSF cookie Set
DEBUG - 2016-07-01 10:44:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:44:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:44:57 --> Total execution time: 0.0750
DEBUG - 2016-07-01 10:44:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341097
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:45:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:45:01 --> Security Class Initialized
DEBUG - 2016-07-01 10:45:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:45:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:45:01 --> 检查用户密码，新密文:8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92
DEBUG - 2016-07-01 10:45:01 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'
AND   (
login_code = 'yzg'
OR phone = 'yzg'
OR email = 'yzg'
 )
DEBUG - 2016-07-01 10:45:01 --> 登录返回结果数：0
DEBUG - 2016-07-01 10:45:01 --> Total execution time: 0.0846
DEBUG - 2016-07-01 10:45:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341101
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:45:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:45:10 --> Security Class Initialized
DEBUG - 2016-07-01 10:45:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:45:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:45:10 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 10:45:10 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 10:45:10 --> 登录返回结果数：1
DEBUG - 2016-07-01 10:45:10 --> 成功登录
DEBUG - 2016-07-01 10:45:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341110, data = '__ci_last_regenerate|i:1467341097;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:45:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:45:10 --> Security Class Initialized
DEBUG - 2016-07-01 10:45:10 --> CRSF cookie Set
DEBUG - 2016-07-01 10:45:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:45:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:45:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('82c4cedb8081428697b7bc06855f4bcc', '192.168.4.20', '2016-07-01', '10:45:10', '120340234', '/admin/backhome', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a301f7a3559402fd36d8eb123279cc6cb8512b61')
DEBUG - 2016-07-01 10:45:10 --> Total execution time: 0.0820
DEBUG - 2016-07-01 10:45:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341110
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:45:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:45:16 --> Security Class Initialized
DEBUG - 2016-07-01 10:45:16 --> CRSF cookie Set
DEBUG - 2016-07-01 10:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:45:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:45:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dde363a52d07424f8b81e025bd404813', '192.168.4.20', '2016-07-01', '10:45:16', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a301f7a3559402fd36d8eb123279cc6cb8512b61')
DEBUG - 2016-07-01 10:45:16 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 10:45:16 --> Total execution time: 0.1116
DEBUG - 2016-07-01 10:45:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341116
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:45:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:45:19 --> Security Class Initialized
DEBUG - 2016-07-01 10:45:19 --> CRSF cookie Set
DEBUG - 2016-07-01 10:45:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:45:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:45:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2b758be9d78d470f99a1f1e30d862ee5', '192.168.4.20', '2016-07-01', '10:45:19', '120340234', '/admin/user/add', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a301f7a3559402fd36d8eb123279cc6cb8512b61')
DEBUG - 2016-07-01 10:45:19 --> Total execution time: 0.0930
DEBUG - 2016-07-01 10:45:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341119
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:45:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:45:21 --> Security Class Initialized
DEBUG - 2016-07-01 10:45:21 --> CRSF cookie Set
DEBUG - 2016-07-01 10:45:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:45:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:45:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('29f78599720d47819120853336d4908a', '192.168.4.20', '2016-07-01', '10:45:21', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'a301f7a3559402fd36d8eb123279cc6cb8512b61')
DEBUG - 2016-07-01 10:45:21 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 10:45:21 --> Total execution time: 0.0886
DEBUG - 2016-07-01 10:45:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341121
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:52:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:52:32 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:52:32 --> CRSF cookie Set
DEBUG - 2016-07-01 10:52:32 --> Security Class Initialized
DEBUG - 2016-07-01 10:52:32 --> CRSF cookie Set
DEBUG - 2016-07-01 10:52:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:52:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:32 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a331e24f5e8eb5f2ca89a17505e2bed330b0de98', '192.168.4.20', 1467341552, '__ci_last_regenerate|i:1467341552;')
DEBUG - 2016-07-01 10:52:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:52:32 --> Security Class Initialized
DEBUG - 2016-07-01 10:52:32 --> CRSF cookie Set
DEBUG - 2016-07-01 10:52:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:52:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:32 --> Total execution time: 0.0820
DEBUG - 2016-07-01 10:52:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341552
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:52:38 --> Security Class Initialized
DEBUG - 2016-07-01 10:52:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:52:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:52:38 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a301f7a3559402fd36d8eb123279cc6cb8512b61'
DEBUG - 2016-07-01 10:52:38 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 10:52:38 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 10:52:38 --> 登录返回结果数：1
DEBUG - 2016-07-01 10:52:38 --> 成功登录
DEBUG - 2016-07-01 10:52:38 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('80b267ab23f04b1e1fbcaed800529536f3135e49', '192.168.4.20', 1467341558, '__ci_last_regenerate|i:1467341558;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 10:52:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:52:39 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:52:39 --> Security Class Initialized
DEBUG - 2016-07-01 10:52:39 --> CRSF cookie Set
DEBUG - 2016-07-01 10:52:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:52:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341559
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:52:39 --> Security Class Initialized
DEBUG - 2016-07-01 10:52:39 --> CRSF cookie Set
DEBUG - 2016-07-01 10:52:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:52:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:39 --> Total execution time: 0.0800
DEBUG - 2016-07-01 10:52:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341559
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:52:47 --> Security Class Initialized
DEBUG - 2016-07-01 10:52:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:52:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:52:48 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 10:52:48 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 10:52:48 --> 登录返回结果数：1
DEBUG - 2016-07-01 10:52:48 --> 成功登录
DEBUG - 2016-07-01 10:52:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341568
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:52:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:52:48 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:52:48 --> Security Class Initialized
DEBUG - 2016-07-01 10:52:48 --> CRSF cookie Set
DEBUG - 2016-07-01 10:52:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:52:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341568
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:52:49 --> Security Class Initialized
DEBUG - 2016-07-01 10:52:49 --> CRSF cookie Set
DEBUG - 2016-07-01 10:52:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:52:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:49 --> Total execution time: 0.0860
DEBUG - 2016-07-01 10:52:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341569
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:52:55 --> Security Class Initialized
DEBUG - 2016-07-01 10:52:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:52:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:52:56 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 10:52:56 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 10:52:56 --> 登录返回结果数：1
DEBUG - 2016-07-01 10:52:56 --> 成功登录
DEBUG - 2016-07-01 10:52:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341576
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:52:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:52:56 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:52:56 --> Security Class Initialized
DEBUG - 2016-07-01 10:52:56 --> CRSF cookie Set
DEBUG - 2016-07-01 10:52:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:52:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341576
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:52:56 --> Security Class Initialized
DEBUG - 2016-07-01 10:52:56 --> CRSF cookie Set
DEBUG - 2016-07-01 10:52:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:52:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:52:56 --> Total execution time: 0.0790
DEBUG - 2016-07-01 10:52:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341576
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:55:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:55:33 --> Security Class Initialized
DEBUG - 2016-07-01 10:55:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:55:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:55:33 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 10:55:33 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 10:55:33 --> 登录返回结果数：1
DEBUG - 2016-07-01 10:55:33 --> 成功登录
DEBUG - 2016-07-01 10:55:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341733
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:55:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:55:34 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:55:34 --> Security Class Initialized
DEBUG - 2016-07-01 10:55:34 --> CRSF cookie Set
DEBUG - 2016-07-01 10:55:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:55:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:55:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341734
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:55:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:55:35 --> Security Class Initialized
DEBUG - 2016-07-01 10:55:35 --> CRSF cookie Set
DEBUG - 2016-07-01 10:55:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:55:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:55:35 --> Total execution time: 0.0720
DEBUG - 2016-07-01 10:55:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341735
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 10:55:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:55:57 --> No URI present. Default controller set.
DEBUG - 2016-07-01 10:55:57 --> Security Class Initialized
DEBUG - 2016-07-01 10:55:57 --> CRSF cookie Set
DEBUG - 2016-07-01 10:55:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:55:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:55:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8525b5b2204c4224972c850969b9f074', '192.168.4.20', '2016-07-01', '10:55:58', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '80b267ab23f04b1e1fbcaed800529536f3135e49')
DEBUG - 2016-07-01 10:55:58 --> Total execution time: 0.1380
DEBUG - 2016-07-01 10:55:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341758
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:56:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:56:01 --> Security Class Initialized
DEBUG - 2016-07-01 10:56:01 --> CRSF cookie Set
DEBUG - 2016-07-01 10:56:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:56:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:56:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341762, data = '__ci_last_regenerate|i:1467341558;'
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:56:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:56:02 --> Security Class Initialized
DEBUG - 2016-07-01 10:56:02 --> CRSF cookie Set
DEBUG - 2016-07-01 10:56:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:56:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:56:02 --> Total execution time: 0.0940
DEBUG - 2016-07-01 10:56:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467341762
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:58:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 10:58:58 --> Security Class Initialized
DEBUG - 2016-07-01 10:58:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 10:58:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:58:58 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '80b267ab23f04b1e1fbcaed800529536f3135e49'
DEBUG - 2016-07-01 10:58:58 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 10:58:58 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'yzg'
OR phone = 'yzg'
OR email = 'yzg'
 )
DEBUG - 2016-07-01 10:58:58 --> 登录返回结果数：0
DEBUG - 2016-07-01 10:58:58 --> Total execution time: 0.1700
DEBUG - 2016-07-01 10:58:58 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('afa64a870a4a76b8d3038c970f4e0092a98609f4', '192.168.4.20', 1467341938, '__ci_last_regenerate|i:1467341938;')
DEBUG - 2016-07-01 11:00:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:00:20 --> Security Class Initialized
DEBUG - 2016-07-01 11:00:20 --> CRSF cookie Set
DEBUG - 2016-07-01 11:00:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:00:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6468eb226e0c88ebca9d2ce7df90d3888136f690'
DEBUG - 2016-07-01 11:00:20 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '6468eb226e0c88ebca9d2ce7df90d3888136f690'
DEBUG - 2016-07-01 11:00:20 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6c005e3baef2693f3b157b16c54ff78a374c3698', '114.91.132.3', 1467342020, '__ci_last_regenerate|i:1467342020;')
DEBUG - 2016-07-01 11:00:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:00:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:00:20 --> Security Class Initialized
DEBUG - 2016-07-01 11:00:20 --> CRSF cookie Set
DEBUG - 2016-07-01 11:00:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:00:20 --> CRSF cookie Set
DEBUG - 2016-07-01 11:00:20 --> Security Class Initialized
DEBUG - 2016-07-01 11:00:20 --> CRSF cookie Set
DEBUG - 2016-07-01 11:00:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:00:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '66ff6167d30dff90415f7da1aa35db275a86fbc1'
DEBUG - 2016-07-01 11:00:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6c005e3baef2693f3b157b16c54ff78a374c3698'
DEBUG - 2016-07-01 11:00:20 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('66ff6167d30dff90415f7da1aa35db275a86fbc1', '180.153.201.215', 1467342020, '__ci_last_regenerate|i:1467342020;')
DEBUG - 2016-07-01 11:00:20 --> Total execution time: 0.1680
DEBUG - 2016-07-01 11:00:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342020
WHERE id = '6c005e3baef2693f3b157b16c54ff78a374c3698'
DEBUG - 2016-07-01 11:00:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:00:20 --> Security Class Initialized
DEBUG - 2016-07-01 11:00:20 --> CRSF cookie Set
DEBUG - 2016-07-01 11:00:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:00:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '66ff6167d30dff90415f7da1aa35db275a86fbc1'
DEBUG - 2016-07-01 11:00:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:00:20 --> CRSF cookie Set
DEBUG - 2016-07-01 11:00:20 --> Security Class Initialized
DEBUG - 2016-07-01 11:00:20 --> CRSF cookie Set
DEBUG - 2016-07-01 11:00:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:00:20 --> Total execution time: 0.1470
DEBUG - 2016-07-01 11:00:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342020
WHERE id = '66ff6167d30dff90415f7da1aa35db275a86fbc1'
DEBUG - 2016-07-01 11:00:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cbad52dcfdbfeb4b1df44066731de5f2cddaa73e'
DEBUG - 2016-07-01 11:00:20 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('cbad52dcfdbfeb4b1df44066731de5f2cddaa73e', '101.226.66.181', 1467342020, '__ci_last_regenerate|i:1467342020;')
DEBUG - 2016-07-01 11:03:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:03:55 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:03:55 --> Security Class Initialized
DEBUG - 2016-07-01 11:03:55 --> CRSF cookie Set
DEBUG - 2016-07-01 11:03:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:03:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 11:03:55 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a331e24f5e8eb5f2ca89a17505e2bed330b0de98'
DEBUG - 2016-07-01 11:03:55 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('56dfc1eefeb30b1b9707dfce87ce7d7163c56104', '192.168.4.20', 1467342235, '__ci_last_regenerate|i:1467342235;')
DEBUG - 2016-07-01 11:03:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:03:55 --> Security Class Initialized
DEBUG - 2016-07-01 11:03:55 --> CRSF cookie Set
DEBUG - 2016-07-01 11:03:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:03:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '56dfc1eefeb30b1b9707dfce87ce7d7163c56104'
DEBUG - 2016-07-01 11:03:55 --> Total execution time: 0.0770
DEBUG - 2016-07-01 11:03:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342235
WHERE id = '56dfc1eefeb30b1b9707dfce87ce7d7163c56104'
DEBUG - 2016-07-01 11:04:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:04:10 --> Security Class Initialized
DEBUG - 2016-07-01 11:04:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:04:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'afa64a870a4a76b8d3038c970f4e0092a98609f4'
DEBUG - 2016-07-01 11:04:11 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'afa64a870a4a76b8d3038c970f4e0092a98609f4'
DEBUG - 2016-07-01 11:04:11 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:04:11 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:04:11 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:04:11 --> 成功登录
DEBUG - 2016-07-01 11:04:11 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('05a538d2d5276df1d780df71730b7a01299d3240', '192.168.4.20', 1467342251, '__ci_last_regenerate|i:1467342251;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 11:04:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:04:11 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:04:11 --> Security Class Initialized
DEBUG - 2016-07-01 11:04:11 --> CRSF cookie Set
DEBUG - 2016-07-01 11:04:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:04:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '56dfc1eefeb30b1b9707dfce87ce7d7163c56104'
DEBUG - 2016-07-01 11:04:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342251
WHERE id = '56dfc1eefeb30b1b9707dfce87ce7d7163c56104'
DEBUG - 2016-07-01 11:04:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:04:11 --> Security Class Initialized
DEBUG - 2016-07-01 11:04:11 --> CRSF cookie Set
DEBUG - 2016-07-01 11:04:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:04:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '56dfc1eefeb30b1b9707dfce87ce7d7163c56104'
DEBUG - 2016-07-01 11:04:11 --> Total execution time: 0.0890
DEBUG - 2016-07-01 11:04:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342251
WHERE id = '56dfc1eefeb30b1b9707dfce87ce7d7163c56104'
DEBUG - 2016-07-01 11:08:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:08:17 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:08:17 --> Security Class Initialized
DEBUG - 2016-07-01 11:08:17 --> CRSF cookie Set
DEBUG - 2016-07-01 11:08:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:08:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '05a538d2d5276df1d780df71730b7a01299d3240'
DEBUG - 2016-07-01 11:08:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c02f759ed701487abe8292eb0cedba6e', '192.168.4.20', '2016-07-01', '11:08:17', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', '05a538d2d5276df1d780df71730b7a01299d3240')
DEBUG - 2016-07-01 11:08:17 --> Total execution time: 0.1470
DEBUG - 2016-07-01 11:08:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342497
WHERE id = '05a538d2d5276df1d780df71730b7a01299d3240'
DEBUG - 2016-07-01 11:08:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:08:21 --> Security Class Initialized
DEBUG - 2016-07-01 11:08:21 --> CRSF cookie Set
DEBUG - 2016-07-01 11:08:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:08:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '05a538d2d5276df1d780df71730b7a01299d3240'
DEBUG - 2016-07-01 11:08:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342501, data = '__ci_last_regenerate|i:1467342251;'
WHERE id = '05a538d2d5276df1d780df71730b7a01299d3240'
DEBUG - 2016-07-01 11:08:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:08:21 --> Security Class Initialized
DEBUG - 2016-07-01 11:08:21 --> CRSF cookie Set
DEBUG - 2016-07-01 11:08:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:08:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '05a538d2d5276df1d780df71730b7a01299d3240'
DEBUG - 2016-07-01 11:08:21 --> Total execution time: 0.1070
DEBUG - 2016-07-01 11:08:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342501
WHERE id = '05a538d2d5276df1d780df71730b7a01299d3240'
DEBUG - 2016-07-01 11:09:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:09:32 --> Security Class Initialized
DEBUG - 2016-07-01 11:09:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:09:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '05a538d2d5276df1d780df71730b7a01299d3240'
DEBUG - 2016-07-01 11:09:32 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '05a538d2d5276df1d780df71730b7a01299d3240'
DEBUG - 2016-07-01 11:09:32 --> 检查用户密码，新密文:6941ce7bf0dc5b77b3c8876e8018830b67c60474f9ee3de608e27b390873fe31
DEBUG - 2016-07-01 11:09:32 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '6941ce7bf0dc5b77b3c8876e8018830b67c60474f9ee3de608e27b390873fe31'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:09:32 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:09:32 --> Total execution time: 0.1170
DEBUG - 2016-07-01 11:09:32 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2818d832a3f516087f1c5284f64db57611dc179a', '192.168.4.20', 1467342572, '__ci_last_regenerate|i:1467342572;')
DEBUG - 2016-07-01 11:09:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:09:42 --> Security Class Initialized
DEBUG - 2016-07-01 11:09:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:09:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:09:42 --> 检查用户密码，新密文:d4735e3a265e16eee03f59718b9b5d03019c07d8b6c51f90da3a666eec13ab35
DEBUG - 2016-07-01 11:09:42 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'd4735e3a265e16eee03f59718b9b5d03019c07d8b6c51f90da3a666eec13ab35'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:09:42 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:09:42 --> Total execution time: 0.1040
DEBUG - 2016-07-01 11:09:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342582
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:09:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:09:52 --> Security Class Initialized
DEBUG - 2016-07-01 11:09:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:09:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:09:52 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:09:52 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:09:52 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:09:52 --> 成功登录
DEBUG - 2016-07-01 11:09:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342592, data = '__ci_last_regenerate|i:1467342572;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:09:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:09:52 --> Security Class Initialized
DEBUG - 2016-07-01 11:09:52 --> CRSF cookie Set
DEBUG - 2016-07-01 11:09:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:09:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:09:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d1984ef123e34b0782f707bdbe42052f', '192.168.4.20', '2016-07-01', '11:09:53', '120340234', '/admin/backhome', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', '2818d832a3f516087f1c5284f64db57611dc179a')
DEBUG - 2016-07-01 11:09:53 --> Total execution time: 0.5710
DEBUG - 2016-07-01 11:09:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342593
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:10:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:10:00 --> Security Class Initialized
DEBUG - 2016-07-01 11:10:00 --> CRSF cookie Set
DEBUG - 2016-07-01 11:10:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:10:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:10:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342600, data = '__ci_last_regenerate|i:1467342572;'
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:10:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:10:00 --> Security Class Initialized
DEBUG - 2016-07-01 11:10:00 --> CRSF cookie Set
DEBUG - 2016-07-01 11:10:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:10:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:10:00 --> Total execution time: 0.0760
DEBUG - 2016-07-01 11:10:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342600
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:10:26 --> CRSF cookie Set
DEBUG - 2016-07-01 11:10:26 --> Security Class Initialized
DEBUG - 2016-07-01 11:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:10:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:10:26 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:10:26 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:10:26 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:10:26 --> 成功登录
DEBUG - 2016-07-01 11:10:26 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2f879721be4fecb31b243bf2a93561085ea0d517', '192.168.4.109', 1467342626, '__ci_last_regenerate|i:1467342626;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 11:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:10:26 --> Security Class Initialized
DEBUG - 2016-07-01 11:10:26 --> CRSF cookie Set
DEBUG - 2016-07-01 11:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:10:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6c005e3baef2693f3b157b16c54ff78a374c3698'
DEBUG - 2016-07-01 11:10:26 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '6c005e3baef2693f3b157b16c54ff78a374c3698'
DEBUG - 2016-07-01 11:10:26 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('73896db7668fdf688a4986a41a338e0bc1012518', '114.91.132.3', 1467342626, '__ci_last_regenerate|i:1467342626;')
DEBUG - 2016-07-01 11:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:10:26 --> Security Class Initialized
DEBUG - 2016-07-01 11:10:26 --> CRSF cookie Set
DEBUG - 2016-07-01 11:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:10:26 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:10:26 --> Total execution time: 0.0624
DEBUG - 2016-07-01 11:10:26 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342626
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:10:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:10:35 --> Security Class Initialized
DEBUG - 2016-07-01 11:10:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:10:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:10:35 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:10:35 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:10:35 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:10:35 --> 成功登录
DEBUG - 2016-07-01 11:10:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342635
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:10:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:10:35 --> Security Class Initialized
DEBUG - 2016-07-01 11:10:35 --> CRSF cookie Set
DEBUG - 2016-07-01 11:10:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:10:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:10:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342635
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:10:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:10:35 --> Security Class Initialized
DEBUG - 2016-07-01 11:10:35 --> CRSF cookie Set
DEBUG - 2016-07-01 11:10:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:10:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:10:35 --> Total execution time: 0.0780
DEBUG - 2016-07-01 11:10:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342635
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:10:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:10:55 --> Security Class Initialized
DEBUG - 2016-07-01 11:10:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:10:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:10:55 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:10:55 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:10:55 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:10:55 --> 成功登录
DEBUG - 2016-07-01 11:10:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342655
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:10:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:10:55 --> Security Class Initialized
DEBUG - 2016-07-01 11:10:55 --> CRSF cookie Set
DEBUG - 2016-07-01 11:10:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:10:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:10:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342655
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:10:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:10:55 --> Security Class Initialized
DEBUG - 2016-07-01 11:10:55 --> CRSF cookie Set
DEBUG - 2016-07-01 11:10:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:10:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:10:55 --> Total execution time: 0.0936
DEBUG - 2016-07-01 11:10:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342655
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:11:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:11:06 --> Security Class Initialized
DEBUG - 2016-07-01 11:11:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:11:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:11:06 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:11:06 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:11:06 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:11:06 --> 成功登录
DEBUG - 2016-07-01 11:11:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342666
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:11:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:11:06 --> Security Class Initialized
DEBUG - 2016-07-01 11:11:06 --> CRSF cookie Set
DEBUG - 2016-07-01 11:11:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:11:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:11:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342666
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:11:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:11:06 --> Security Class Initialized
DEBUG - 2016-07-01 11:11:06 --> CRSF cookie Set
DEBUG - 2016-07-01 11:11:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:11:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:11:06 --> Total execution time: 0.0780
DEBUG - 2016-07-01 11:11:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342666
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 11:11:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:11:23 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:11:23 --> Security Class Initialized
DEBUG - 2016-07-01 11:11:23 --> CRSF cookie Set
DEBUG - 2016-07-01 11:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:11:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '56dfc1eefeb30b1b9707dfce87ce7d7163c56104'
DEBUG - 2016-07-01 11:11:23 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '56dfc1eefeb30b1b9707dfce87ce7d7163c56104'
DEBUG - 2016-07-01 11:11:23 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d13c452e9b0af8f9f25df772b70cbbc5b0622663', '192.168.4.20', 1467342683, '__ci_last_regenerate|i:1467342683;')
DEBUG - 2016-07-01 11:11:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:11:24 --> Security Class Initialized
DEBUG - 2016-07-01 11:11:24 --> CRSF cookie Set
DEBUG - 2016-07-01 11:11:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:11:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd13c452e9b0af8f9f25df772b70cbbc5b0622663'
DEBUG - 2016-07-01 11:11:24 --> Total execution time: 0.0820
DEBUG - 2016-07-01 11:11:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342684
WHERE id = 'd13c452e9b0af8f9f25df772b70cbbc5b0622663'
DEBUG - 2016-07-01 11:11:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:11:29 --> Security Class Initialized
DEBUG - 2016-07-01 11:11:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:11:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:11:29 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:11:29 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:11:29 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:11:29 --> 成功登录
DEBUG - 2016-07-01 11:11:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342689, data = '__ci_last_regenerate|i:1467342572;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:11:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:11:29 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:11:29 --> Security Class Initialized
DEBUG - 2016-07-01 11:11:29 --> CRSF cookie Set
DEBUG - 2016-07-01 11:11:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:11:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd13c452e9b0af8f9f25df772b70cbbc5b0622663'
DEBUG - 2016-07-01 11:11:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342689
WHERE id = 'd13c452e9b0af8f9f25df772b70cbbc5b0622663'
DEBUG - 2016-07-01 11:11:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:11:30 --> Security Class Initialized
DEBUG - 2016-07-01 11:11:30 --> CRSF cookie Set
DEBUG - 2016-07-01 11:11:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:11:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd13c452e9b0af8f9f25df772b70cbbc5b0622663'
DEBUG - 2016-07-01 11:11:30 --> Total execution time: 0.0780
DEBUG - 2016-07-01 11:11:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342690
WHERE id = 'd13c452e9b0af8f9f25df772b70cbbc5b0622663'
DEBUG - 2016-07-01 11:11:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:11:35 --> Security Class Initialized
DEBUG - 2016-07-01 11:11:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:11:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:11:35 --> 检查用户密码，新密文:6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b
DEBUG - 2016-07-01 11:11:35 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:11:35 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:11:35 --> Total execution time: 0.0936
DEBUG - 2016-07-01 11:11:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342695, data = '__ci_last_regenerate|i:1467342572;'
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:11:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:11:43 --> Security Class Initialized
DEBUG - 2016-07-01 11:11:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:11:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:11:44 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:11:44 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:11:44 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:11:44 --> 成功登录
DEBUG - 2016-07-01 11:11:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342704, data = '__ci_last_regenerate|i:1467342572;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:11:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:11:44 --> Security Class Initialized
DEBUG - 2016-07-01 11:11:44 --> CRSF cookie Set
DEBUG - 2016-07-01 11:11:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:11:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:11:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('41f626414b05427d8dd13a937e0fff66', '192.168.4.20', '2016-07-01', '11:11:44', '120340234', '/admin/backhome', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', '2818d832a3f516087f1c5284f64db57611dc179a')
DEBUG - 2016-07-01 11:11:44 --> Total execution time: 0.0800
DEBUG - 2016-07-01 11:11:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342704
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:11:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:11:48 --> Security Class Initialized
DEBUG - 2016-07-01 11:11:48 --> CRSF cookie Set
DEBUG - 2016-07-01 11:11:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:11:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:11:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342708, data = '__ci_last_regenerate|i:1467342572;'
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:11:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:11:48 --> Security Class Initialized
DEBUG - 2016-07-01 11:11:48 --> CRSF cookie Set
DEBUG - 2016-07-01 11:11:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:11:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:11:48 --> Total execution time: 0.0850
DEBUG - 2016-07-01 11:11:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342708
WHERE id = '2818d832a3f516087f1c5284f64db57611dc179a'
DEBUG - 2016-07-01 11:12:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:12:51 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:12:51 --> Security Class Initialized
DEBUG - 2016-07-01 11:12:51 --> CRSF cookie Set
DEBUG - 2016-07-01 11:12:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:12:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 11:12:51 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a0c9e05e666c3b7e081ec0f47df30fde561d34b0'
DEBUG - 2016-07-01 11:12:51 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('973267bf1ad5593cd5608a95f83a7814606537c8', '192.168.4.20', 1467342771, '__ci_last_regenerate|i:1467342771;')
DEBUG - 2016-07-01 11:12:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:12:51 --> Security Class Initialized
DEBUG - 2016-07-01 11:12:51 --> CRSF cookie Set
DEBUG - 2016-07-01 11:12:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:12:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '973267bf1ad5593cd5608a95f83a7814606537c8'
DEBUG - 2016-07-01 11:12:51 --> Total execution time: 0.0780
DEBUG - 2016-07-01 11:12:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342771
WHERE id = '973267bf1ad5593cd5608a95f83a7814606537c8'
DEBUG - 2016-07-01 11:12:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:12:57 --> Security Class Initialized
DEBUG - 2016-07-01 11:12:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:12:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:12:57 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:12:57 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:12:57 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:12:57 --> 成功登录
DEBUG - 2016-07-01 11:12:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342777
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:12:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:12:57 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:12:57 --> Security Class Initialized
DEBUG - 2016-07-01 11:12:57 --> CRSF cookie Set
DEBUG - 2016-07-01 11:12:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:12:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '973267bf1ad5593cd5608a95f83a7814606537c8'
DEBUG - 2016-07-01 11:12:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342777
WHERE id = '973267bf1ad5593cd5608a95f83a7814606537c8'
DEBUG - 2016-07-01 11:12:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:12:58 --> Security Class Initialized
DEBUG - 2016-07-01 11:12:58 --> CRSF cookie Set
DEBUG - 2016-07-01 11:12:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:12:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '973267bf1ad5593cd5608a95f83a7814606537c8'
DEBUG - 2016-07-01 11:12:58 --> Total execution time: 0.0780
DEBUG - 2016-07-01 11:12:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342778
WHERE id = '973267bf1ad5593cd5608a95f83a7814606537c8'
DEBUG - 2016-07-01 11:13:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:13:10 --> Security Class Initialized
DEBUG - 2016-07-01 11:13:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:13:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:13:10 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:13:10 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:13:10 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:13:10 --> 成功登录
DEBUG - 2016-07-01 11:13:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342790
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:13:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:13:11 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:13:11 --> Security Class Initialized
DEBUG - 2016-07-01 11:13:11 --> CRSF cookie Set
DEBUG - 2016-07-01 11:13:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:13:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '973267bf1ad5593cd5608a95f83a7814606537c8'
DEBUG - 2016-07-01 11:13:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342791
WHERE id = '973267bf1ad5593cd5608a95f83a7814606537c8'
DEBUG - 2016-07-01 11:13:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:13:11 --> Security Class Initialized
DEBUG - 2016-07-01 11:13:11 --> CRSF cookie Set
DEBUG - 2016-07-01 11:13:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:13:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '973267bf1ad5593cd5608a95f83a7814606537c8'
DEBUG - 2016-07-01 11:13:11 --> Total execution time: 0.0780
DEBUG - 2016-07-01 11:13:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342791
WHERE id = '973267bf1ad5593cd5608a95f83a7814606537c8'
DEBUG - 2016-07-01 11:13:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:13:19 --> Security Class Initialized
DEBUG - 2016-07-01 11:13:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:13:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:13:19 --> 检查用户密码，新密文:bc56546de3832ff4379b3b111fefc4391bdb828a28f62d689e03c4ee08ae3969
DEBUG - 2016-07-01 11:13:19 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'bc56546de3832ff4379b3b111fefc4391bdb828a28f62d689e03c4ee08ae3969'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:13:19 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:13:19 --> Total execution time: 0.0936
DEBUG - 2016-07-01 11:13:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342799, data = '__ci_last_regenerate|i:1467342626;'
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:13:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:13:32 --> Security Class Initialized
DEBUG - 2016-07-01 11:13:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:13:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:13:32 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:13:32 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:13:32 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:13:32 --> 成功登录
DEBUG - 2016-07-01 11:13:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342812, data = '__ci_last_regenerate|i:1467342626;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:13:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:13:32 --> Security Class Initialized
DEBUG - 2016-07-01 11:13:32 --> CRSF cookie Set
DEBUG - 2016-07-01 11:13:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:13:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:13:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5eb19ca2948542ecb376abd1d53510e7', '192.168.4.109', '2016-07-01', '11:13:32', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '2f879721be4fecb31b243bf2a93561085ea0d517')
DEBUG - 2016-07-01 11:13:32 --> Total execution time: 0.0780
DEBUG - 2016-07-01 11:13:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467342812
WHERE id = '2f879721be4fecb31b243bf2a93561085ea0d517'
DEBUG - 2016-07-01 11:25:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:25:32 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:25:32 --> CRSF cookie Set
DEBUG - 2016-07-01 11:25:32 --> Security Class Initialized
DEBUG - 2016-07-01 11:25:32 --> CRSF cookie Set
DEBUG - 2016-07-01 11:25:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:25:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '289b6df6fd6f4a5ae1a700ae06452800b329176d'
DEBUG - 2016-07-01 11:25:32 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('289b6df6fd6f4a5ae1a700ae06452800b329176d', '192.168.4.20', 1467343532, '__ci_last_regenerate|i:1467343532;')
DEBUG - 2016-07-01 11:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:25:33 --> Security Class Initialized
DEBUG - 2016-07-01 11:25:33 --> CRSF cookie Set
DEBUG - 2016-07-01 11:25:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:25:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '289b6df6fd6f4a5ae1a700ae06452800b329176d'
DEBUG - 2016-07-01 11:25:33 --> Total execution time: 0.0710
DEBUG - 2016-07-01 11:25:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467343533
WHERE id = '289b6df6fd6f4a5ae1a700ae06452800b329176d'
DEBUG - 2016-07-01 11:25:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:25:35 --> CRSF cookie Set
DEBUG - 2016-07-01 11:25:35 --> Security Class Initialized
DEBUG - 2016-07-01 11:25:35 --> CRSF cookie Set
DEBUG - 2016-07-01 11:25:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:25:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '73ee7201b7b7c6290912a9e9cac20100747efcde'
DEBUG - 2016-07-01 11:25:35 --> Total execution time: 0.0780
DEBUG - 2016-07-01 11:25:35 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('73ee7201b7b7c6290912a9e9cac20100747efcde', '192.168.4.20', 1467343535, '__ci_last_regenerate|i:1467343535;')
DEBUG - 2016-07-01 11:25:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:25:38 --> CRSF cookie Set
DEBUG - 2016-07-01 11:25:38 --> Security Class Initialized
DEBUG - 2016-07-01 11:25:38 --> CRSF cookie Set
DEBUG - 2016-07-01 11:25:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:25:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '679ee7b51888390f4fd13675de0d6f0a099e53f9'
DEBUG - 2016-07-01 11:25:38 --> Total execution time: 0.0960
DEBUG - 2016-07-01 11:25:38 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('679ee7b51888390f4fd13675de0d6f0a099e53f9', '192.168.4.20', 1467343538, '__ci_last_regenerate|i:1467343538;')
DEBUG - 2016-07-01 11:25:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:25:44 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:25:44 --> CRSF cookie Set
DEBUG - 2016-07-01 11:25:44 --> Security Class Initialized
DEBUG - 2016-07-01 11:25:44 --> CRSF cookie Set
DEBUG - 2016-07-01 11:25:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:25:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7a05a073b1e2534c3d362e8e331e803f6626fbf2'
DEBUG - 2016-07-01 11:25:44 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7a05a073b1e2534c3d362e8e331e803f6626fbf2', '192.168.4.20', 1467343544, '__ci_last_regenerate|i:1467343544;')
DEBUG - 2016-07-01 11:25:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:25:45 --> Security Class Initialized
DEBUG - 2016-07-01 11:25:45 --> CRSF cookie Set
DEBUG - 2016-07-01 11:25:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:25:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7a05a073b1e2534c3d362e8e331e803f6626fbf2'
DEBUG - 2016-07-01 11:25:45 --> Total execution time: 0.0810
DEBUG - 2016-07-01 11:25:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467343545
WHERE id = '7a05a073b1e2534c3d362e8e331e803f6626fbf2'
DEBUG - 2016-07-01 11:31:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:31:33 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:31:33 --> Security Class Initialized
DEBUG - 2016-07-01 11:31:33 --> CRSF cookie Set
DEBUG - 2016-07-01 11:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:31:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7a05a073b1e2534c3d362e8e331e803f6626fbf2'
DEBUG - 2016-07-01 11:31:33 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '7a05a073b1e2534c3d362e8e331e803f6626fbf2'
DEBUG - 2016-07-01 11:31:33 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('dc720a9dfc1fc41bd3024642b37459cc8fcac56a', '192.168.4.20', 1467343893, '__ci_last_regenerate|i:1467343893;')
DEBUG - 2016-07-01 11:31:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:31:33 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:31:33 --> CRSF cookie Set
DEBUG - 2016-07-01 11:31:33 --> Security Class Initialized
DEBUG - 2016-07-01 11:31:33 --> CRSF cookie Set
DEBUG - 2016-07-01 11:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:31:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'eb477f3b9e488a38bdb333483e03ae0756fede82'
DEBUG - 2016-07-01 11:31:34 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('eb477f3b9e488a38bdb333483e03ae0756fede82', '192.168.4.20', 1467343894, '__ci_last_regenerate|i:1467343894;')
DEBUG - 2016-07-01 11:31:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:31:34 --> Security Class Initialized
DEBUG - 2016-07-01 11:31:34 --> CRSF cookie Set
DEBUG - 2016-07-01 11:31:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:31:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dc720a9dfc1fc41bd3024642b37459cc8fcac56a'
DEBUG - 2016-07-01 11:31:34 --> Total execution time: 0.0910
DEBUG - 2016-07-01 11:31:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467343894
WHERE id = 'dc720a9dfc1fc41bd3024642b37459cc8fcac56a'
DEBUG - 2016-07-01 11:31:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:31:34 --> Security Class Initialized
DEBUG - 2016-07-01 11:31:34 --> CRSF cookie Set
DEBUG - 2016-07-01 11:31:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:31:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'eb477f3b9e488a38bdb333483e03ae0756fede82'
DEBUG - 2016-07-01 11:31:34 --> Total execution time: 0.0860
DEBUG - 2016-07-01 11:31:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467343894
WHERE id = 'eb477f3b9e488a38bdb333483e03ae0756fede82'
DEBUG - 2016-07-01 11:31:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:31:34 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:31:34 --> CRSF cookie Set
DEBUG - 2016-07-01 11:31:34 --> Security Class Initialized
DEBUG - 2016-07-01 11:31:34 --> CRSF cookie Set
DEBUG - 2016-07-01 11:31:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:31:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0040366f63320c13ae9a1319d2ecf63e750d495d'
DEBUG - 2016-07-01 11:31:34 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0040366f63320c13ae9a1319d2ecf63e750d495d', '192.168.4.20', 1467343894, '__ci_last_regenerate|i:1467343894;')
DEBUG - 2016-07-01 11:31:36 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:31:36 --> CRSF cookie Set
DEBUG - 2016-07-01 11:31:36 --> Security Class Initialized
DEBUG - 2016-07-01 11:31:36 --> CRSF cookie Set
DEBUG - 2016-07-01 11:31:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:31:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4160990bc35aa415e2483e35bf5438b9184c73ee'
DEBUG - 2016-07-01 11:31:36 --> Total execution time: 0.0860
DEBUG - 2016-07-01 11:31:36 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4160990bc35aa415e2483e35bf5438b9184c73ee', '192.168.4.20', 1467343896, '__ci_last_regenerate|i:1467343896;')
DEBUG - 2016-07-01 11:31:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:31:41 --> CRSF cookie Set
DEBUG - 2016-07-01 11:31:41 --> Security Class Initialized
DEBUG - 2016-07-01 11:31:41 --> CRSF cookie Set
DEBUG - 2016-07-01 11:31:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:31:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7193015c9a58fbdbfd4e4f7345990f0ffdc3288e'
DEBUG - 2016-07-01 11:31:41 --> Total execution time: 0.0740
DEBUG - 2016-07-01 11:31:41 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7193015c9a58fbdbfd4e4f7345990f0ffdc3288e', '192.168.4.20', 1467343901, '__ci_last_regenerate|i:1467343901;')
DEBUG - 2016-07-01 11:40:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:40:01 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:40:01 --> Security Class Initialized
DEBUG - 2016-07-01 11:40:01 --> CRSF cookie Set
DEBUG - 2016-07-01 11:40:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:40:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd13c452e9b0af8f9f25df772b70cbbc5b0622663'
DEBUG - 2016-07-01 11:40:01 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'd13c452e9b0af8f9f25df772b70cbbc5b0622663'
DEBUG - 2016-07-01 11:40:01 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2d91949f7311f66cd7b947873683af25ad1ac4c2', '192.168.4.20', 1467344401, '__ci_last_regenerate|i:1467344401;')
DEBUG - 2016-07-01 11:40:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:40:02 --> Security Class Initialized
DEBUG - 2016-07-01 11:40:02 --> CRSF cookie Set
DEBUG - 2016-07-01 11:40:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:40:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2d91949f7311f66cd7b947873683af25ad1ac4c2'
DEBUG - 2016-07-01 11:40:02 --> Total execution time: 0.0800
DEBUG - 2016-07-01 11:40:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467344402
WHERE id = '2d91949f7311f66cd7b947873683af25ad1ac4c2'
DEBUG - 2016-07-01 11:48:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:48:29 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:48:29 --> CRSF cookie Set
DEBUG - 2016-07-01 11:48:29 --> Security Class Initialized
DEBUG - 2016-07-01 11:48:29 --> CRSF cookie Set
DEBUG - 2016-07-01 11:48:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:48:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7ac9dc6d9e48722e84788f72121243af1bcefb8c'
DEBUG - 2016-07-01 11:48:29 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7ac9dc6d9e48722e84788f72121243af1bcefb8c', '114.91.132.3', 1467344909, '__ci_last_regenerate|i:1467344909;')
DEBUG - 2016-07-01 11:48:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:48:29 --> Security Class Initialized
DEBUG - 2016-07-01 11:48:29 --> CRSF cookie Set
DEBUG - 2016-07-01 11:48:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:48:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7ac9dc6d9e48722e84788f72121243af1bcefb8c'
DEBUG - 2016-07-01 11:48:29 --> Total execution time: 0.0800
DEBUG - 2016-07-01 11:48:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467344909
WHERE id = '7ac9dc6d9e48722e84788f72121243af1bcefb8c'
DEBUG - 2016-07-01 11:49:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:49:10 --> Security Class Initialized
DEBUG - 2016-07-01 11:49:10 --> CRSF cookie Set
DEBUG - 2016-07-01 11:49:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:49:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2d91949f7311f66cd7b947873683af25ad1ac4c2'
DEBUG - 2016-07-01 11:49:10 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '2d91949f7311f66cd7b947873683af25ad1ac4c2'
DEBUG - 2016-07-01 11:49:10 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 11:49:10 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 11:49:10 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:49:10 --> Total execution time: 0.0970
DEBUG - 2016-07-01 11:49:10 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0', '114.91.132.3', 1467344950, '__ci_last_regenerate|i:1467344950;')
DEBUG - 2016-07-01 11:49:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:49:16 --> Security Class Initialized
DEBUG - 2016-07-01 11:49:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:49:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:16 --> 检查用户密码，新密文:2d711642b726b04401627ca9fbac32f5c8530fb1903cc4db02258717921a4881
DEBUG - 2016-07-01 11:49:16 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '2d711642b726b04401627ca9fbac32f5c8530fb1903cc4db02258717921a4881'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:49:16 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:49:16 --> Total execution time: 0.0870
DEBUG - 2016-07-01 11:49:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467344956
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:49:21 --> Security Class Initialized
DEBUG - 2016-07-01 11:49:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:49:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:21 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:49:21 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:49:21 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:49:21 --> 成功登录
DEBUG - 2016-07-01 11:49:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467344961, data = '__ci_last_regenerate|i:1467344950;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:49:21 --> Security Class Initialized
DEBUG - 2016-07-01 11:49:21 --> CRSF cookie Set
DEBUG - 2016-07-01 11:49:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:49:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b4f01c2ecc624eddafd925e06478a4c2', '114.91.132.3', '2016-07-01', '11:49:21', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0')
DEBUG - 2016-07-01 11:49:21 --> Total execution time: 0.0950
DEBUG - 2016-07-01 11:49:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467344961
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:49:25 --> Security Class Initialized
DEBUG - 2016-07-01 11:49:25 --> CRSF cookie Set
DEBUG - 2016-07-01 11:49:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:49:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a08fd9c59d994a6b98e84561d84fa19b', '114.91.132.3', '2016-07-01', '11:49:25', '120340234', '/admin/account/changeProfile', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0')
DEBUG - 2016-07-01 11:49:25 --> [执行的SQL语句]##############select * from admin_user where uuid='120340234' and enable='Y'
DEBUG - 2016-07-01 11:49:25 --> Total execution time: 0.2100
DEBUG - 2016-07-01 11:49:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467344965
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:49:42 --> Security Class Initialized
DEBUG - 2016-07-01 11:49:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:49:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c06113e5c5c746069bda75e1ed4425f8', '114.91.132.3', '2016-07-01', '11:49:42', '120340234', '/admin/Account/doChangepwd', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0')
DEBUG - 2016-07-01 11:49:42 --> xiaobai0524||xiaobai||xiaobai
DEBUG - 2016-07-01 11:49:42 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE uuid = '120340234'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
DEBUG - 2016-07-01 11:49:42 --> [执行的SQL语句]##############UPDATE admin_user SET login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
WHERE uuid = '120340234'
DEBUG - 2016-07-01 11:49:42 --> Total execution time: 0.0780
DEBUG - 2016-07-01 11:49:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467344982
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:49:45 --> Security Class Initialized
DEBUG - 2016-07-01 11:49:45 --> CRSF cookie Set
DEBUG - 2016-07-01 11:49:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:49:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467344985, data = '__ci_last_regenerate|i:1467344950;'
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:49:45 --> Security Class Initialized
DEBUG - 2016-07-01 11:49:45 --> CRSF cookie Set
DEBUG - 2016-07-01 11:49:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:49:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:45 --> Total execution time: 0.0760
DEBUG - 2016-07-01 11:49:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467344985
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:49:51 --> Security Class Initialized
DEBUG - 2016-07-01 11:49:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:49:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:51 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 11:49:51 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:49:51 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:49:51 --> 成功登录
DEBUG - 2016-07-01 11:49:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467344991, data = '__ci_last_regenerate|i:1467344950;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:49:51 --> Security Class Initialized
DEBUG - 2016-07-01 11:49:51 --> CRSF cookie Set
DEBUG - 2016-07-01 11:49:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:49:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5dcf67c722394443bb6f14f072500418', '114.91.132.3', '2016-07-01', '11:49:51', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0')
DEBUG - 2016-07-01 11:49:51 --> Total execution time: 0.0840
DEBUG - 2016-07-01 11:49:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467344991
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:49:54 --> Security Class Initialized
DEBUG - 2016-07-01 11:49:54 --> CRSF cookie Set
DEBUG - 2016-07-01 11:49:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:49:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467344994, data = '__ci_last_regenerate|i:1467344950;'
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:49:54 --> Security Class Initialized
DEBUG - 2016-07-01 11:49:54 --> CRSF cookie Set
DEBUG - 2016-07-01 11:49:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:49:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:49:54 --> Total execution time: 0.0720
DEBUG - 2016-07-01 11:49:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467344994
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:09 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:09 --> CRSF cookie Set
DEBUG - 2016-07-01 11:50:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:09 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 11:50:09 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 11:50:09 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:50:09 --> Total execution time: 0.0810
DEBUG - 2016-07-01 11:50:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345009
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:13 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:13 --> 检查用户密码，新密文:2d711642b726b04401627ca9fbac32f5c8530fb1903cc4db02258717921a4881
DEBUG - 2016-07-01 11:50:13 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '2d711642b726b04401627ca9fbac32f5c8530fb1903cc4db02258717921a4881'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:50:13 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:50:13 --> Total execution time: 0.0850
DEBUG - 2016-07-01 11:50:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345013
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:17 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:17 --> 检查用户密码，新密文:ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb
DEBUG - 2016-07-01 11:50:17 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:50:17 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:50:17 --> Total execution time: 0.0820
DEBUG - 2016-07-01 11:50:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345017
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:20 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:20 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:20 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:50:20 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:50:20 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:50:20 --> Total execution time: 0.0800
DEBUG - 2016-07-01 11:50:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345020
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:24 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:24 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 11:50:24 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:50:24 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:50:24 --> 成功登录
DEBUG - 2016-07-01 11:50:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345024, data = '__ci_last_regenerate|i:1467344950;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:24 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:24 --> CRSF cookie Set
DEBUG - 2016-07-01 11:50:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ef30fc4d6d5f4a198db77ca5fa123b0e', '114.91.132.3', '2016-07-01', '11:50:25', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0')
DEBUG - 2016-07-01 11:50:25 --> Total execution time: 0.0810
DEBUG - 2016-07-01 11:50:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345025
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:28 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:28 --> CRSF cookie Set
DEBUG - 2016-07-01 11:50:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345028, data = '__ci_last_regenerate|i:1467344950;'
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:28 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:28 --> CRSF cookie Set
DEBUG - 2016-07-01 11:50:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:28 --> Total execution time: 0.0780
DEBUG - 2016-07-01 11:50:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345028
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:32 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:32 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 11:50:32 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:50:32 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:50:32 --> 成功登录
DEBUG - 2016-07-01 11:50:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345032, data = '__ci_last_regenerate|i:1467344950;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:32 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:32 --> CRSF cookie Set
DEBUG - 2016-07-01 11:50:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c7655f49b74549f19ac71974f537f1fe', '114.91.132.3', '2016-07-01', '11:50:32', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0')
DEBUG - 2016-07-01 11:50:32 --> Total execution time: 0.0970
DEBUG - 2016-07-01 11:50:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345032
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:35 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:35 --> CRSF cookie Set
DEBUG - 2016-07-01 11:50:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345035, data = '__ci_last_regenerate|i:1467344950;'
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:35 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:35 --> CRSF cookie Set
DEBUG - 2016-07-01 11:50:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:35 --> Total execution time: 0.0910
DEBUG - 2016-07-01 11:50:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345035
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:48 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:48 --> CRSF cookie Set
DEBUG - 2016-07-01 11:50:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:49 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 11:50:49 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 11:50:49 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:50:49 --> Total execution time: 0.1150
DEBUG - 2016-07-01 11:50:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345049
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:50:55 --> Security Class Initialized
DEBUG - 2016-07-01 11:50:55 --> CRSF cookie Set
DEBUG - 2016-07-01 11:50:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:50:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:50:55 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 11:50:55 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 11:50:55 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:50:55 --> Total execution time: 0.0940
DEBUG - 2016-07-01 11:50:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345055
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:57:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:57:11 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:57:11 --> CRSF cookie Set
DEBUG - 2016-07-01 11:57:11 --> Security Class Initialized
DEBUG - 2016-07-01 11:57:11 --> CRSF cookie Set
DEBUG - 2016-07-01 11:57:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:57:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '455982423319726c57c091d0376252b9719796f1'
DEBUG - 2016-07-01 11:57:11 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('455982423319726c57c091d0376252b9719796f1', '223.104.5.205', 1467345431, '__ci_last_regenerate|i:1467345431;')
DEBUG - 2016-07-01 11:58:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:58:12 --> No URI present. Default controller set.
DEBUG - 2016-07-01 11:58:12 --> CRSF cookie Set
DEBUG - 2016-07-01 11:58:12 --> Security Class Initialized
DEBUG - 2016-07-01 11:58:12 --> CRSF cookie Set
DEBUG - 2016-07-01 11:58:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:58:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'af9231f4664036b8cb6e2fc52d7242c0480960f9'
DEBUG - 2016-07-01 11:58:12 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('af9231f4664036b8cb6e2fc52d7242c0480960f9', '223.104.5.205', 1467345492, '__ci_last_regenerate|i:1467345492;')
DEBUG - 2016-07-01 11:58:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:58:12 --> Security Class Initialized
DEBUG - 2016-07-01 11:58:12 --> CRSF cookie Set
DEBUG - 2016-07-01 11:58:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:58:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'af9231f4664036b8cb6e2fc52d7242c0480960f9'
DEBUG - 2016-07-01 11:58:12 --> Total execution time: 0.0750
DEBUG - 2016-07-01 11:58:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345492
WHERE id = 'af9231f4664036b8cb6e2fc52d7242c0480960f9'
DEBUG - 2016-07-01 11:58:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:58:49 --> Security Class Initialized
DEBUG - 2016-07-01 11:58:49 --> CRSF cookie Set
DEBUG - 2016-07-01 11:58:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:58:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:58:49 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '3e89185419f40ccc7bc7a8fb1a1a0c8e81bc58b0'
DEBUG - 2016-07-01 11:58:49 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 11:58:49 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 11:58:49 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:58:49 --> Total execution time: 0.1040
DEBUG - 2016-07-01 11:58:49 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d31e911bbc6dd65c6b7af93db17929a1b48dc6ca', '114.91.132.3', 1467345529, '__ci_last_regenerate|i:1467345529;')
DEBUG - 2016-07-01 11:59:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:59:21 --> Security Class Initialized
DEBUG - 2016-07-01 11:59:21 --> CRSF cookie Set
DEBUG - 2016-07-01 11:59:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:59:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:21 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 11:59:21 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 11:59:21 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:59:21 --> Total execution time: 0.1040
DEBUG - 2016-07-01 11:59:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345561
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:59:28 --> Security Class Initialized
DEBUG - 2016-07-01 11:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:59:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:28 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 11:59:28 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:59:28 --> 登录返回结果数：0
DEBUG - 2016-07-01 11:59:28 --> Total execution time: 0.0910
DEBUG - 2016-07-01 11:59:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345568
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:59:33 --> Security Class Initialized
DEBUG - 2016-07-01 11:59:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:59:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:33 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 11:59:33 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:59:33 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:59:33 --> 成功登录
DEBUG - 2016-07-01 11:59:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345573, data = '__ci_last_regenerate|i:1467345529;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:59:33 --> Security Class Initialized
DEBUG - 2016-07-01 11:59:33 --> CRSF cookie Set
DEBUG - 2016-07-01 11:59:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:59:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('efb80785a017497d9c5b2ae4930af15f', '114.91.132.3', '2016-07-01', '11:59:33', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca')
DEBUG - 2016-07-01 11:59:33 --> Total execution time: 0.0740
DEBUG - 2016-07-01 11:59:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345573
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:36 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:59:36 --> Security Class Initialized
DEBUG - 2016-07-01 11:59:36 --> CRSF cookie Set
DEBUG - 2016-07-01 11:59:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:59:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345576, data = '__ci_last_regenerate|i:1467345529;'
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:36 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:59:36 --> Security Class Initialized
DEBUG - 2016-07-01 11:59:36 --> CRSF cookie Set
DEBUG - 2016-07-01 11:59:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:59:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:36 --> Total execution time: 0.0770
DEBUG - 2016-07-01 11:59:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345576
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:59:44 --> Security Class Initialized
DEBUG - 2016-07-01 11:59:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:59:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:44 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 11:59:44 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 11:59:44 --> 登录返回结果数：1
DEBUG - 2016-07-01 11:59:44 --> 成功登录
DEBUG - 2016-07-01 11:59:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345584, data = '__ci_last_regenerate|i:1467345529;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:59:44 --> Security Class Initialized
DEBUG - 2016-07-01 11:59:44 --> CRSF cookie Set
DEBUG - 2016-07-01 11:59:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:59:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('040b27f77f3a42289cd89aa685fbdefa', '114.91.132.3', '2016-07-01', '11:59:44', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca')
DEBUG - 2016-07-01 11:59:44 --> Total execution time: 0.2220
DEBUG - 2016-07-01 11:59:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345584
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:59:47 --> Security Class Initialized
DEBUG - 2016-07-01 11:59:47 --> CRSF cookie Set
DEBUG - 2016-07-01 11:59:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:59:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345587, data = '__ci_last_regenerate|i:1467345529;'
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 11:59:47 --> Security Class Initialized
DEBUG - 2016-07-01 11:59:47 --> CRSF cookie Set
DEBUG - 2016-07-01 11:59:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 11:59:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 11:59:47 --> Total execution time: 0.0970
DEBUG - 2016-07-01 11:59:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345587
WHERE id = 'd31e911bbc6dd65c6b7af93db17929a1b48dc6ca'
DEBUG - 2016-07-01 12:00:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:00:57 --> Security Class Initialized
DEBUG - 2016-07-01 12:00:57 --> CRSF cookie Set
DEBUG - 2016-07-01 12:00:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:00:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 12:00:58 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '73896db7668fdf688a4986a41a338e0bc1012518'
DEBUG - 2016-07-01 12:00:58 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0a9bd01d1e28f35f66110cfe944df16907f273a1', '114.91.132.3', 1467345658, '__ci_last_regenerate|i:1467345658;')
DEBUG - 2016-07-01 12:00:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:00:58 --> Security Class Initialized
DEBUG - 2016-07-01 12:00:58 --> CRSF cookie Set
DEBUG - 2016-07-01 12:00:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:00:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:00:58 --> Total execution time: 0.0680
DEBUG - 2016-07-01 12:00:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345658
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:01:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:01:21 --> Security Class Initialized
DEBUG - 2016-07-01 12:01:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:01:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '973267bf1ad5593cd5608a95f83a7814606537c8'
DEBUG - 2016-07-01 12:01:21 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '973267bf1ad5593cd5608a95f83a7814606537c8'
DEBUG - 2016-07-01 12:01:21 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 12:01:21 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 12:01:21 --> 登录返回结果数：1
DEBUG - 2016-07-01 12:01:21 --> 成功登录
DEBUG - 2016-07-01 12:01:21 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e44daf488a2c09f0f5b3d6fa530d90bbf883e073', '114.91.132.3', 1467345681, '__ci_last_regenerate|i:1467345681;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 12:01:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:01:21 --> Security Class Initialized
DEBUG - 2016-07-01 12:01:21 --> CRSF cookie Set
DEBUG - 2016-07-01 12:01:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:01:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:01:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345681
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:01:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:01:21 --> Security Class Initialized
DEBUG - 2016-07-01 12:01:21 --> CRSF cookie Set
DEBUG - 2016-07-01 12:01:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:01:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:01:21 --> Total execution time: 0.0690
DEBUG - 2016-07-01 12:01:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345681
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:01:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:01:40 --> Security Class Initialized
DEBUG - 2016-07-01 12:01:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:01:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:01:40 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 12:01:40 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 12:01:40 --> 登录返回结果数：1
DEBUG - 2016-07-01 12:01:40 --> 成功登录
DEBUG - 2016-07-01 12:01:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345700
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:01:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:01:40 --> Security Class Initialized
DEBUG - 2016-07-01 12:01:40 --> CRSF cookie Set
DEBUG - 2016-07-01 12:01:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:01:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:01:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345700
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:01:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:01:40 --> Security Class Initialized
DEBUG - 2016-07-01 12:01:40 --> CRSF cookie Set
DEBUG - 2016-07-01 12:01:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:01:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:01:40 --> Total execution time: 0.0710
DEBUG - 2016-07-01 12:01:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345700
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:01:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:01:52 --> Security Class Initialized
DEBUG - 2016-07-01 12:01:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:01:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:01:52 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 12:01:52 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 12:01:52 --> 登录返回结果数：1
DEBUG - 2016-07-01 12:01:52 --> 成功登录
DEBUG - 2016-07-01 12:01:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345712
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:01:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:01:52 --> Security Class Initialized
DEBUG - 2016-07-01 12:01:52 --> CRSF cookie Set
DEBUG - 2016-07-01 12:01:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:01:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:01:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345712
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:01:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:01:52 --> Security Class Initialized
DEBUG - 2016-07-01 12:01:52 --> CRSF cookie Set
DEBUG - 2016-07-01 12:01:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:01:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:01:52 --> Total execution time: 0.0710
DEBUG - 2016-07-01 12:01:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345712
WHERE id = '0a9bd01d1e28f35f66110cfe944df16907f273a1'
DEBUG - 2016-07-01 12:02:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:02:10 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:02:10 --> Security Class Initialized
DEBUG - 2016-07-01 12:02:10 --> CRSF cookie Set
DEBUG - 2016-07-01 12:02:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:02:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:02:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6daf98ae64d74ba0b41d0a0d602e2a28', '114.91.132.3', '2016-07-01', '12:02:10', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073')
DEBUG - 2016-07-01 12:02:10 --> Total execution time: 0.0880
DEBUG - 2016-07-01 12:02:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345730
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:02:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:02:24 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:02:24 --> Security Class Initialized
DEBUG - 2016-07-01 12:02:24 --> CRSF cookie Set
DEBUG - 2016-07-01 12:02:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:02:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:02:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0378b802041a4bfdaedfa8549cd877ea', '114.91.132.3', '2016-07-01', '12:02:24', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073')
DEBUG - 2016-07-01 12:02:24 --> Total execution time: 0.0820
DEBUG - 2016-07-01 12:02:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345744
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:02:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:02:38 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:02:38 --> Security Class Initialized
DEBUG - 2016-07-01 12:02:38 --> CRSF cookie Set
DEBUG - 2016-07-01 12:02:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:02:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:02:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4469246b6002474b8d34ea1429827344', '114.91.132.3', '2016-07-01', '12:02:38', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073')
DEBUG - 2016-07-01 12:02:38 --> Total execution time: 0.0950
DEBUG - 2016-07-01 12:02:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345758
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:02:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:02:44 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:02:44 --> Security Class Initialized
DEBUG - 2016-07-01 12:02:44 --> CRSF cookie Set
DEBUG - 2016-07-01 12:02:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:02:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:02:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f5cbe6848ce54cebbad9d35eb8825dbd', '114.91.132.3', '2016-07-01', '12:02:44', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073')
DEBUG - 2016-07-01 12:02:44 --> Total execution time: 0.1080
DEBUG - 2016-07-01 12:02:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345764
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:02:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:02:52 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:02:52 --> Security Class Initialized
DEBUG - 2016-07-01 12:02:52 --> CRSF cookie Set
DEBUG - 2016-07-01 12:02:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:02:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:02:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ea5d6835d7c74e61b80b73c0af73db78', '114.91.132.3', '2016-07-01', '12:02:52', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073')
DEBUG - 2016-07-01 12:02:52 --> Total execution time: 0.0780
DEBUG - 2016-07-01 12:02:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345772
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:02:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:02:57 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:02:57 --> Security Class Initialized
DEBUG - 2016-07-01 12:02:57 --> CRSF cookie Set
DEBUG - 2016-07-01 12:02:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:02:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:02:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4ac591ce237f459989924776ab1a6628', '114.91.132.3', '2016-07-01', '12:02:57', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073')
DEBUG - 2016-07-01 12:02:57 --> Total execution time: 0.0950
DEBUG - 2016-07-01 12:02:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345777
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:03:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:03:01 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:03:01 --> Security Class Initialized
DEBUG - 2016-07-01 12:03:01 --> CRSF cookie Set
DEBUG - 2016-07-01 12:03:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:03:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:03:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f39319fe2abb4359b793c088b5e10868', '114.91.132.3', '2016-07-01', '12:03:01', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073')
DEBUG - 2016-07-01 12:03:01 --> Total execution time: 0.0880
DEBUG - 2016-07-01 12:03:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345781
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:03:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:03:29 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:03:29 --> Security Class Initialized
DEBUG - 2016-07-01 12:03:29 --> CRSF cookie Set
DEBUG - 2016-07-01 12:03:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:03:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:03:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('daad39bb71204293b89cf59186875057', '114.91.132.3', '2016-07-01', '12:03:29', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073')
DEBUG - 2016-07-01 12:03:29 --> Total execution time: 0.0980
DEBUG - 2016-07-01 12:03:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345809
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:03:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:03:41 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:03:41 --> Security Class Initialized
DEBUG - 2016-07-01 12:03:41 --> CRSF cookie Set
DEBUG - 2016-07-01 12:03:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:03:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:03:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3774ca07d33242beb64347614db9b072', '114.91.132.3', '2016-07-01', '12:03:41', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073')
DEBUG - 2016-07-01 12:03:41 --> Total execution time: 0.0920
DEBUG - 2016-07-01 12:03:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345821
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 12:03:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:03:57 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:03:57 --> CRSF cookie Set
DEBUG - 2016-07-01 12:03:57 --> Security Class Initialized
DEBUG - 2016-07-01 12:03:57 --> CRSF cookie Set
DEBUG - 2016-07-01 12:03:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:03:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:03:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2229c0809ae39ca4d3e8eac704e0fb95366ab9f7', '114.91.132.3', 1467345837, '__ci_last_regenerate|i:1467345837;')
DEBUG - 2016-07-01 12:03:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:03:57 --> Security Class Initialized
DEBUG - 2016-07-01 12:03:57 --> CRSF cookie Set
DEBUG - 2016-07-01 12:03:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:03:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:03:57 --> Total execution time: 0.0800
DEBUG - 2016-07-01 12:03:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345837
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:04:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:04:23 --> Security Class Initialized
DEBUG - 2016-07-01 12:04:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:04:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:04:23 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 12:04:23 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 12:04:23 --> 登录返回结果数：1
DEBUG - 2016-07-01 12:04:23 --> 成功登录
DEBUG - 2016-07-01 12:04:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345863, data = '__ci_last_regenerate|i:1467345837;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:04:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:04:24 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:04:24 --> Security Class Initialized
DEBUG - 2016-07-01 12:04:24 --> CRSF cookie Set
DEBUG - 2016-07-01 12:04:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:04:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:04:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('69fb59d0fc51469e9f0836a34642b977', '114.91.132.3', '2016-07-01', '12:04:24', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7')
DEBUG - 2016-07-01 12:04:24 --> Total execution time: 0.0930
DEBUG - 2016-07-01 12:04:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345864
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:04:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:04:57 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:04:57 --> CRSF cookie Set
DEBUG - 2016-07-01 12:04:57 --> Security Class Initialized
DEBUG - 2016-07-01 12:04:57 --> CRSF cookie Set
DEBUG - 2016-07-01 12:04:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:04:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd06cad1799563984417209d6bc4dfe76c5aee89b'
DEBUG - 2016-07-01 12:04:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d06cad1799563984417209d6bc4dfe76c5aee89b', '192.168.4.101', 1467345897, '__ci_last_regenerate|i:1467345897;')
DEBUG - 2016-07-01 12:04:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:04:57 --> Security Class Initialized
DEBUG - 2016-07-01 12:04:57 --> CRSF cookie Set
DEBUG - 2016-07-01 12:04:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:04:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd06cad1799563984417209d6bc4dfe76c5aee89b'
DEBUG - 2016-07-01 12:04:58 --> Total execution time: 0.0740
DEBUG - 2016-07-01 12:04:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345898
WHERE id = 'd06cad1799563984417209d6bc4dfe76c5aee89b'
DEBUG - 2016-07-01 12:05:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:05:03 --> Security Class Initialized
DEBUG - 2016-07-01 12:05:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:05:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:03 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 12:05:03 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 12:05:03 --> 登录返回结果数：1
DEBUG - 2016-07-01 12:05:03 --> 成功登录
DEBUG - 2016-07-01 12:05:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345903
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:05:03 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:05:03 --> Security Class Initialized
DEBUG - 2016-07-01 12:05:03 --> CRSF cookie Set
DEBUG - 2016-07-01 12:05:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:05:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd06cad1799563984417209d6bc4dfe76c5aee89b'
DEBUG - 2016-07-01 12:05:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345903
WHERE id = 'd06cad1799563984417209d6bc4dfe76c5aee89b'
DEBUG - 2016-07-01 12:05:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:05:03 --> Security Class Initialized
DEBUG - 2016-07-01 12:05:03 --> CRSF cookie Set
DEBUG - 2016-07-01 12:05:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:05:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd06cad1799563984417209d6bc4dfe76c5aee89b'
DEBUG - 2016-07-01 12:05:03 --> Total execution time: 0.0710
DEBUG - 2016-07-01 12:05:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345903
WHERE id = 'd06cad1799563984417209d6bc4dfe76c5aee89b'
DEBUG - 2016-07-01 12:05:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:05:11 --> Security Class Initialized
DEBUG - 2016-07-01 12:05:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:05:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:11 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 12:05:11 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 12:05:11 --> 登录返回结果数：1
DEBUG - 2016-07-01 12:05:11 --> 成功登录
DEBUG - 2016-07-01 12:05:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345911
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:05:11 --> No URI present. Default controller set.
DEBUG - 2016-07-01 12:05:11 --> Security Class Initialized
DEBUG - 2016-07-01 12:05:11 --> CRSF cookie Set
DEBUG - 2016-07-01 12:05:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:05:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd06cad1799563984417209d6bc4dfe76c5aee89b'
DEBUG - 2016-07-01 12:05:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345912
WHERE id = 'd06cad1799563984417209d6bc4dfe76c5aee89b'
DEBUG - 2016-07-01 12:05:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:05:12 --> Security Class Initialized
DEBUG - 2016-07-01 12:05:12 --> CRSF cookie Set
DEBUG - 2016-07-01 12:05:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:05:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd06cad1799563984417209d6bc4dfe76c5aee89b'
DEBUG - 2016-07-01 12:05:12 --> Total execution time: 0.0750
DEBUG - 2016-07-01 12:05:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345912
WHERE id = 'd06cad1799563984417209d6bc4dfe76c5aee89b'
DEBUG - 2016-07-01 12:05:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:05:17 --> Security Class Initialized
DEBUG - 2016-07-01 12:05:17 --> CRSF cookie Set
DEBUG - 2016-07-01 12:05:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:05:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5b44ec16bd194c76a67177e98d242675', '114.91.132.3', '2016-07-01', '12:05:17', '120340234', '/admin/account/changeProfile', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7')
DEBUG - 2016-07-01 12:05:17 --> [执行的SQL语句]##############select * from admin_user where uuid='120340234' and enable='Y'
DEBUG - 2016-07-01 12:05:17 --> Total execution time: 0.1380
DEBUG - 2016-07-01 12:05:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345917
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:05:21 --> Security Class Initialized
DEBUG - 2016-07-01 12:05:21 --> CRSF cookie Set
DEBUG - 2016-07-01 12:05:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:05:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('89b6c9f9c62d455bb8abc6828668450b', '114.91.132.3', '2016-07-01', '12:05:21', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7')
DEBUG - 2016-07-01 12:05:21 --> 查询需求订单
DEBUG - 2016-07-01 12:05:21 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-01 12:05:21 --> Total execution time: 0.2630
DEBUG - 2016-07-01 12:05:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345921
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:05:27 --> Security Class Initialized
DEBUG - 2016-07-01 12:05:27 --> CRSF cookie Set
DEBUG - 2016-07-01 12:05:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:05:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1238e64bf41c42aa90553351de95e10f', '114.91.132.3', '2016-07-01', '12:05:27', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7')
DEBUG - 2016-07-01 12:05:27 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 12:05:27 --> Total execution time: 0.2090
DEBUG - 2016-07-01 12:05:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345927
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:05:32 --> Security Class Initialized
DEBUG - 2016-07-01 12:05:32 --> CRSF cookie Set
DEBUG - 2016-07-01 12:05:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:05:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b01dbc5be8ef445baad712edb2839f0f', '114.91.132.3', '2016-07-01', '12:05:32', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7')
DEBUG - 2016-07-01 12:05:32 --> 查询待审核订单
DEBUG - 2016-07-01 12:05:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 12:05:32 --> Total execution time: 0.1350
DEBUG - 2016-07-01 12:05:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345932
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:05:38 --> Security Class Initialized
DEBUG - 2016-07-01 12:05:38 --> CRSF cookie Set
DEBUG - 2016-07-01 12:05:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:05:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:38 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ec28872fb845441f8ee568983e8c15cf', '114.91.132.3', '2016-07-01', '12:05:38', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7')
DEBUG - 2016-07-01 12:05:38 --> 查询待发货订单
DEBUG - 2016-07-01 12:05:38 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 12:05:38 --> Total execution time: 0.0970
DEBUG - 2016-07-01 12:05:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345938
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:46 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:05:46 --> Security Class Initialized
DEBUG - 2016-07-01 12:05:46 --> CRSF cookie Set
DEBUG - 2016-07-01 12:05:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:05:46 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:05:46 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ddfc160d303844979df41e4f55664a52', '114.91.132.3', '2016-07-01', '12:05:46', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7')
DEBUG - 2016-07-01 12:05:46 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 12:05:46 --> Total execution time: 0.2890
DEBUG - 2016-07-01 12:05:46 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467345946
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:06:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:06:59 --> Security Class Initialized
DEBUG - 2016-07-01 12:06:59 --> CRSF cookie Set
DEBUG - 2016-07-01 12:06:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:06:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:06:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fe356f56f00940d5b8ea8ccd68f4f265', '114.91.132.3', '2016-07-01', '12:06:59', '120340234', '/admin/guest/edit/K05035', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7')
DEBUG - 2016-07-01 12:06:59 --> 修改客户信息：K05035
DEBUG - 2016-07-01 12:06:59 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05035' 
DEBUG - 2016-07-01 12:06:59 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05035' 
DEBUG - 2016-07-01 12:06:59 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 12:06:59 --> Total execution time: 0.1370
DEBUG - 2016-07-01 12:06:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467346019
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:07:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 12:07:15 --> Security Class Initialized
DEBUG - 2016-07-01 12:07:15 --> CRSF cookie Set
DEBUG - 2016-07-01 12:07:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 12:07:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 12:07:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f4b9386ac8354b25a30dcc8fcf0c6156', '114.91.132.3', '2016-07-01', '12:07:15', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7')
DEBUG - 2016-07-01 12:07:15 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 12:07:15 --> Total execution time: 0.0780
DEBUG - 2016-07-01 12:07:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467346035
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 13:32:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:32:52 --> Security Class Initialized
DEBUG - 2016-07-01 13:32:52 --> CRSF cookie Set
DEBUG - 2016-07-01 13:32:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:32:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 13:32:52 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '2229c0809ae39ca4d3e8eac704e0fb95366ab9f7'
DEBUG - 2016-07-01 13:32:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('18be98fcf0c846ccac2bedc3417dc30c', '114.91.132.3', '2016-07-01', '13:32:52', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'ad2028d6eee1d0a13a295433b97df845d35cdde8')
DEBUG - 2016-07-01 13:32:52 --> 查询需求订单
DEBUG - 2016-07-01 13:32:52 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-01 13:32:52 --> Total execution time: 0.2060
DEBUG - 2016-07-01 13:32:52 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ad2028d6eee1d0a13a295433b97df845d35cdde8', '114.91.132.3', 1467351172, '__ci_last_regenerate|i:1467351172;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 13:33:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:33:00 --> Security Class Initialized
DEBUG - 2016-07-01 13:33:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:33:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 13:33:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7d2c2149dcdc4d1eaa274caab655f4df', '114.91.132.3', '2016-07-01', '13:33:00', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'ad2028d6eee1d0a13a295433b97df845d35cdde8')
DEBUG - 2016-07-01 13:33:00 --> 查询需求订单
DEBUG - 2016-07-01 13:33:00 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-06-24 00:00:00' and create_date_time<'2016-07-01 23:59:59' 
ERROR - 2016-07-01 13:33:00 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-01 13:33:00 --> Query error: [Microsoft][ODBC SQL Server Driver][SQL Server]�ڹؼ��� 'and' �������﷨���� - Invalid query: select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-06-24 00:00:00' and create_date_time<'2016-07-01 23:59:59' 
ERROR - 2016-07-01 13:33:00 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Order_model.php 85
DEBUG - 2016-07-01 13:33:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467351180
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 13:33:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:33:11 --> Security Class Initialized
DEBUG - 2016-07-01 13:33:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:33:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 13:33:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f2fe9a1efb974c1391c46bf4124a7b4b', '114.91.132.3', '2016-07-01', '13:33:11', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'ad2028d6eee1d0a13a295433b97df845d35cdde8')
DEBUG - 2016-07-01 13:33:11 --> 查询需求订单
DEBUG - 2016-07-01 13:33:11 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-06-24 00:00:00' and create_date_time<'2016-07-01 23:59:59' 
ERROR - 2016-07-01 13:33:11 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-01 13:33:11 --> Query error: [Microsoft][ODBC SQL Server Driver][SQL Server]�ڹؼ��� 'and' �������﷨���� - Invalid query: select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-06-24 00:00:00' and create_date_time<'2016-07-01 23:59:59' 
ERROR - 2016-07-01 13:33:11 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Order_model.php 85
DEBUG - 2016-07-01 13:33:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467351191
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 13:33:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:33:32 --> Security Class Initialized
DEBUG - 2016-07-01 13:33:32 --> CRSF cookie Set
DEBUG - 2016-07-01 13:33:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:33:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 13:33:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('22276d9f94fc4f5aa778635d7335d2bd', '114.91.132.3', '2016-07-01', '13:33:32', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'ad2028d6eee1d0a13a295433b97df845d35cdde8')
DEBUG - 2016-07-01 13:33:32 --> 查询需求订单
DEBUG - 2016-07-01 13:33:32 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-01 13:33:32 --> Total execution time: 0.0960
DEBUG - 2016-07-01 13:33:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467351212
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 13:50:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:50:48 --> No URI present. Default controller set.
DEBUG - 2016-07-01 13:50:48 --> Security Class Initialized
DEBUG - 2016-07-01 13:50:48 --> CRSF cookie Set
DEBUG - 2016-07-01 13:50:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:50:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 13:50:48 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'e44daf488a2c09f0f5b3d6fa530d90bbf883e073'
DEBUG - 2016-07-01 13:50:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1b9eebbc6d6c4fc9a659269c92359f81', '114.91.132.3', '2016-07-01', '13:50:48', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '285474d3370c1d2195156d15c071f506cf68b5f1')
DEBUG - 2016-07-01 13:50:48 --> Total execution time: 0.0970
DEBUG - 2016-07-01 13:50:48 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('285474d3370c1d2195156d15c071f506cf68b5f1', '114.91.132.3', 1467352248, '__ci_last_regenerate|i:1467352248;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 13:51:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:51:38 --> No URI present. Default controller set.
DEBUG - 2016-07-01 13:51:38 --> CRSF cookie Set
DEBUG - 2016-07-01 13:51:38 --> Security Class Initialized
DEBUG - 2016-07-01 13:51:38 --> CRSF cookie Set
DEBUG - 2016-07-01 13:51:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:51:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b'
DEBUG - 2016-07-01 13:51:38 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b', '114.91.132.3', 1467352298, '__ci_last_regenerate|i:1467352298;')
DEBUG - 2016-07-01 13:51:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:51:38 --> Security Class Initialized
DEBUG - 2016-07-01 13:51:38 --> CRSF cookie Set
DEBUG - 2016-07-01 13:51:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:51:38 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b'
DEBUG - 2016-07-01 13:51:38 --> Total execution time: 0.0700
DEBUG - 2016-07-01 13:51:38 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352298
WHERE id = 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b'
DEBUG - 2016-07-01 13:52:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:52:08 --> Security Class Initialized
DEBUG - 2016-07-01 13:52:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:52:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b'
DEBUG - 2016-07-01 13:52:08 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 13:52:08 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 13:52:08 --> 登录返回结果数：1
DEBUG - 2016-07-01 13:52:08 --> 成功登录
DEBUG - 2016-07-01 13:52:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352328, data = '__ci_last_regenerate|i:1467352298;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b'
DEBUG - 2016-07-01 13:52:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:52:08 --> No URI present. Default controller set.
DEBUG - 2016-07-01 13:52:08 --> Security Class Initialized
DEBUG - 2016-07-01 13:52:08 --> CRSF cookie Set
DEBUG - 2016-07-01 13:52:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:52:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b'
DEBUG - 2016-07-01 13:52:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('67fca8d0421b47888476c5a586cfce8f', '114.91.132.3', '2016-07-01', '13:52:08', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b')
DEBUG - 2016-07-01 13:52:08 --> Total execution time: 0.0840
DEBUG - 2016-07-01 13:52:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352328
WHERE id = 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b'
DEBUG - 2016-07-01 13:52:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:52:28 --> No URI present. Default controller set.
DEBUG - 2016-07-01 13:52:28 --> Security Class Initialized
DEBUG - 2016-07-01 13:52:28 --> CRSF cookie Set
DEBUG - 2016-07-01 13:52:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:52:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b'
DEBUG - 2016-07-01 13:52:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d4711cb214bf4371b2d4ce04f9d6b543', '114.91.132.3', '2016-07-01', '13:52:29', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b')
DEBUG - 2016-07-01 13:52:29 --> Total execution time: 0.1050
DEBUG - 2016-07-01 13:52:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352349
WHERE id = 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b'
DEBUG - 2016-07-01 13:52:38 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:52:38 --> No URI present. Default controller set.
DEBUG - 2016-07-01 13:52:38 --> Security Class Initialized
DEBUG - 2016-07-01 13:52:38 --> CRSF cookie Set
DEBUG - 2016-07-01 13:52:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:52:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b'
DEBUG - 2016-07-01 13:52:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('43d2337e57e84f64a4dc48dc77d46de8', '114.91.132.3', '2016-07-01', '13:52:39', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b')
DEBUG - 2016-07-01 13:52:39 --> Total execution time: 0.0880
DEBUG - 2016-07-01 13:52:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352359
WHERE id = 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b'
DEBUG - 2016-07-01 13:52:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:52:44 --> No URI present. Default controller set.
DEBUG - 2016-07-01 13:52:44 --> Security Class Initialized
DEBUG - 2016-07-01 13:52:44 --> CRSF cookie Set
DEBUG - 2016-07-01 13:52:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:52:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b'
DEBUG - 2016-07-01 13:52:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c190e2fa41c94deda86631a442cc0ad0', '114.91.132.3', '2016-07-01', '13:52:44', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b')
DEBUG - 2016-07-01 13:52:44 --> Total execution time: 0.0940
DEBUG - 2016-07-01 13:52:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352364
WHERE id = 'dbd82c9fe86f8d13e2ba8e95d0476ee461697f7b'
DEBUG - 2016-07-01 13:56:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:56:49 --> No URI present. Default controller set.
DEBUG - 2016-07-01 13:56:49 --> Security Class Initialized
DEBUG - 2016-07-01 13:56:49 --> CRSF cookie Set
DEBUG - 2016-07-01 13:56:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:56:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 13:56:49 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 13:56:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8476461f66d540f0ac8d29f24ac64496', '114.91.132.3', '2016-07-01', '13:56:49', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET4.0C; .NET4.0E; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; InfoPath.2)', '3f78ae0fe05efe7692f28592f7c5fd417f511334')
DEBUG - 2016-07-01 13:56:49 --> Total execution time: 0.1080
DEBUG - 2016-07-01 13:56:49 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('3f78ae0fe05efe7692f28592f7c5fd417f511334', '114.91.132.3', 1467352609, '__ci_last_regenerate|i:1467352609;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 13:57:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:57:09 --> No URI present. Default controller set.
DEBUG - 2016-07-01 13:57:09 --> Security Class Initialized
DEBUG - 2016-07-01 13:57:09 --> CRSF cookie Set
DEBUG - 2016-07-01 13:57:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:57:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3f78ae0fe05efe7692f28592f7c5fd417f511334'
DEBUG - 2016-07-01 13:57:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('11b2e1da50b840e08ee735ca00411236', '114.91.132.3', '2016-07-01', '13:57:09', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET4.0C; .NET4.0E; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; InfoPath.2)', '3f78ae0fe05efe7692f28592f7c5fd417f511334')
DEBUG - 2016-07-01 13:57:09 --> Total execution time: 0.0820
DEBUG - 2016-07-01 13:57:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352629
WHERE id = '3f78ae0fe05efe7692f28592f7c5fd417f511334'
DEBUG - 2016-07-01 13:57:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:57:43 --> No URI present. Default controller set.
DEBUG - 2016-07-01 13:57:43 --> Security Class Initialized
DEBUG - 2016-07-01 13:57:43 --> CRSF cookie Set
DEBUG - 2016-07-01 13:57:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:57:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3f78ae0fe05efe7692f28592f7c5fd417f511334'
DEBUG - 2016-07-01 13:57:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3d7d7355e5ad4b0fb283813aa2cb3b07', '114.91.132.3', '2016-07-01', '13:57:43', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET4.0C; .NET4.0E; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; InfoPath.2)', '3f78ae0fe05efe7692f28592f7c5fd417f511334')
DEBUG - 2016-07-01 13:57:43 --> Total execution time: 0.0830
DEBUG - 2016-07-01 13:57:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352663
WHERE id = '3f78ae0fe05efe7692f28592f7c5fd417f511334'
DEBUG - 2016-07-01 13:57:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 13:57:48 --> No URI present. Default controller set.
DEBUG - 2016-07-01 13:57:48 --> Security Class Initialized
DEBUG - 2016-07-01 13:57:48 --> CRSF cookie Set
DEBUG - 2016-07-01 13:57:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 13:57:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '3f78ae0fe05efe7692f28592f7c5fd417f511334'
DEBUG - 2016-07-01 13:57:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bc3b6816cc6a4726a3fb0b12df422890', '114.91.132.3', '2016-07-01', '13:57:48', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET4.0C; .NET4.0E; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; InfoPath.2)', '3f78ae0fe05efe7692f28592f7c5fd417f511334')
DEBUG - 2016-07-01 13:57:48 --> Total execution time: 0.0740
DEBUG - 2016-07-01 13:57:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352668
WHERE id = '3f78ae0fe05efe7692f28592f7c5fd417f511334'
DEBUG - 2016-07-01 14:00:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:00:03 --> No URI present. Default controller set.
DEBUG - 2016-07-01 14:00:03 --> CRSF cookie Set
DEBUG - 2016-07-01 14:00:03 --> Security Class Initialized
DEBUG - 2016-07-01 14:00:03 --> CRSF cookie Set
DEBUG - 2016-07-01 14:00:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:00:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:00:03 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('00bc2de05e77a9464555d51dd4eb37b816f1759d', '114.91.132.3', 1467352803, '__ci_last_regenerate|i:1467352803;')
DEBUG - 2016-07-01 14:00:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:00:03 --> Security Class Initialized
DEBUG - 2016-07-01 14:00:03 --> CRSF cookie Set
DEBUG - 2016-07-01 14:00:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:00:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:00:03 --> Total execution time: 0.1210
DEBUG - 2016-07-01 14:00:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352803
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:00:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:00:28 --> Security Class Initialized
DEBUG - 2016-07-01 14:00:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:00:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:00:28 --> 检查用户密码，新密文:b830d6cbb2262a3d3de4d5ae8a6b76d81f68dea18ed86d15dd34e7211f0be2ab
DEBUG - 2016-07-01 14:00:28 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'b830d6cbb2262a3d3de4d5ae8a6b76d81f68dea18ed86d15dd34e7211f0be2ab'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 14:00:28 --> 登录返回结果数：0
DEBUG - 2016-07-01 14:00:28 --> Total execution time: 0.0890
DEBUG - 2016-07-01 14:00:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352828
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:00:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:00:29 --> CRSF cookie Set
DEBUG - 2016-07-01 14:00:29 --> Security Class Initialized
DEBUG - 2016-07-01 14:00:29 --> CRSF cookie Set
DEBUG - 2016-07-01 14:00:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:00:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '6f8a94f5372e96b9b3a0af0dd052f8435a0d5faa'
DEBUG - 2016-07-01 14:00:29 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 14:00:29 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 14:00:29 --> 登录返回结果数：0
DEBUG - 2016-07-01 14:00:29 --> Total execution time: 0.0850
DEBUG - 2016-07-01 14:00:29 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('6f8a94f5372e96b9b3a0af0dd052f8435a0d5faa', '101.226.89.123', 1467352829, '__ci_last_regenerate|i:1467352829;')
DEBUG - 2016-07-01 14:00:36 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:00:36 --> CRSF cookie Set
DEBUG - 2016-07-01 14:00:36 --> Security Class Initialized
DEBUG - 2016-07-01 14:00:36 --> CRSF cookie Set
DEBUG - 2016-07-01 14:00:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:00:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f976e4c7a5f7400576fd053949cbb5e79684d66f'
DEBUG - 2016-07-01 14:00:36 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 14:00:36 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 14:00:36 --> 登录返回结果数：0
DEBUG - 2016-07-01 14:00:36 --> Total execution time: 0.0760
DEBUG - 2016-07-01 14:00:36 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f976e4c7a5f7400576fd053949cbb5e79684d66f', '180.153.206.32', 1467352836, '__ci_last_regenerate|i:1467352836;')
DEBUG - 2016-07-01 14:01:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:01:03 --> Security Class Initialized
DEBUG - 2016-07-01 14:01:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:01:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:01:03 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 14:01:03 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 14:01:03 --> 登录返回结果数：1
DEBUG - 2016-07-01 14:01:03 --> 成功登录
DEBUG - 2016-07-01 14:01:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352863, data = '__ci_last_regenerate|i:1467352803;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:01:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:01:03 --> Security Class Initialized
DEBUG - 2016-07-01 14:01:03 --> CRSF cookie Set
DEBUG - 2016-07-01 14:01:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:01:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:01:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('db9c4d56fca047ceb3ba8412695e0df7', '114.91.132.3', '2016-07-01', '14:01:03', '120340234', '/admin/backhome', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:01:03 --> Total execution time: 0.0700
DEBUG - 2016-07-01 14:01:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352863
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:01:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:01:28 --> CRSF cookie Set
DEBUG - 2016-07-01 14:01:28 --> Security Class Initialized
DEBUG - 2016-07-01 14:01:28 --> CRSF cookie Set
DEBUG - 2016-07-01 14:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:01:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '2ba027acd50b1648224c229ee9de7b07f920f7d6'
DEBUG - 2016-07-01 14:01:28 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('2ba027acd50b1648224c229ee9de7b07f920f7d6', '101.226.66.173', 1467352888, '__ci_last_regenerate|i:1467352888;')
DEBUG - 2016-07-01 14:01:36 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:01:36 --> CRSF cookie Set
DEBUG - 2016-07-01 14:01:36 --> Security Class Initialized
DEBUG - 2016-07-01 14:01:36 --> CRSF cookie Set
DEBUG - 2016-07-01 14:01:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:01:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cdf3903e7614e938d5ff8b17d510d5dc68534a16'
DEBUG - 2016-07-01 14:01:36 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('cdf3903e7614e938d5ff8b17d510d5dc68534a16', '101.226.66.174', 1467352896, '__ci_last_regenerate|i:1467352896;')
DEBUG - 2016-07-01 14:01:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:01:37 --> Security Class Initialized
DEBUG - 2016-07-01 14:01:37 --> CRSF cookie Set
DEBUG - 2016-07-01 14:01:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:01:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cdf3903e7614e938d5ff8b17d510d5dc68534a16'
DEBUG - 2016-07-01 14:01:37 --> Total execution time: 0.0910
DEBUG - 2016-07-01 14:01:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352897
WHERE id = 'cdf3903e7614e938d5ff8b17d510d5dc68534a16'
DEBUG - 2016-07-01 14:01:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:01:47 --> CRSF cookie Set
DEBUG - 2016-07-01 14:01:47 --> Security Class Initialized
DEBUG - 2016-07-01 14:01:47 --> CRSF cookie Set
DEBUG - 2016-07-01 14:01:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:01:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'eb24d6cf74251cfb1d35016ec083da1a4700ae55'
DEBUG - 2016-07-01 14:01:47 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('eb24d6cf74251cfb1d35016ec083da1a4700ae55', '180.153.163.190', 1467352907, '__ci_last_regenerate|i:1467352907;')
DEBUG - 2016-07-01 14:01:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:01:47 --> CRSF cookie Set
DEBUG - 2016-07-01 14:01:47 --> Security Class Initialized
DEBUG - 2016-07-01 14:01:47 --> CRSF cookie Set
DEBUG - 2016-07-01 14:01:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:01:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c2ac326235adde2ce88f9f2a94714b866da3690e'
DEBUG - 2016-07-01 14:01:47 --> Total execution time: 0.0810
DEBUG - 2016-07-01 14:01:47 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c2ac326235adde2ce88f9f2a94714b866da3690e', '180.153.163.190', 1467352907, '__ci_last_regenerate|i:1467352907;')
DEBUG - 2016-07-01 14:01:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:01:50 --> Security Class Initialized
DEBUG - 2016-07-01 14:01:50 --> CRSF cookie Set
DEBUG - 2016-07-01 14:01:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:01:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:01:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('af910595e27b4ff9b319349bebd0105a', '114.91.132.3', '2016-07-01', '14:01:50', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:01:50 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:01:50 --> Total execution time: 0.1790
DEBUG - 2016-07-01 14:01:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352910
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:02:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:44 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:44 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:02:44 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('aa72a0eb984342fea15a8d5665867f75', '114.91.132.3', '2016-07-01', '14:02:44', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:02:44 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:02:44 --> Total execution time: 0.0970
DEBUG - 2016-07-01 14:02:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352964
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:02:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:47 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:47 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:02:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('593ac6be7a554dc691af2589f1849c48', '114.91.132.3', '2016-07-01', '14:02:47', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:02:47 --> 查询订单
DEBUG - 2016-07-01 14:02:47 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-01 14:02:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:47 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:47 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:47 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:47 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:47 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:47 --> Total execution time: 0.1870
DEBUG - 2016-07-01 14:02:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352967
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:02:47 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7c340a4fe4f03c2d4a040793c18ea1b57f7f9eb3'
DEBUG - 2016-07-01 14:02:47 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7c340a4fe4f03c2d4a040793c18ea1b57f7f9eb3', '180.153.201.15', 1467352967, '__ci_last_regenerate|i:1467352967;')
DEBUG - 2016-07-01 14:02:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dbfc045c2d1cfe5a4fea883286bfa7872d21ff5a'
DEBUG - 2016-07-01 14:02:47 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('dbfc045c2d1cfe5a4fea883286bfa7872d21ff5a', '180.153.163.208', 1467352967, '__ci_last_regenerate|i:1467352967;')
DEBUG - 2016-07-01 14:02:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:48 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:48 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'dbfc045c2d1cfe5a4fea883286bfa7872d21ff5a'
DEBUG - 2016-07-01 14:02:48 --> Total execution time: 0.0700
DEBUG - 2016-07-01 14:02:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352968
WHERE id = 'dbfc045c2d1cfe5a4fea883286bfa7872d21ff5a'
DEBUG - 2016-07-01 14:02:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:55 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:55 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:55 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:02:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f14be1a0e25f40869255f1ac47847e12', '114.91.132.3', '2016-07-01', '14:02:55', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:02:55 --> 查询订单
DEBUG - 2016-07-01 14:02:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-01 14:02:55 --> Total execution time: 0.1010
DEBUG - 2016-07-01 14:02:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352975
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:02:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:57 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:57 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:02:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('753b9dd721b742678a4e40d006bb2ece', '114.91.132.3', '2016-07-01', '14:02:57', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:02:57 --> 查询待审核订单
DEBUG - 2016-07-01 14:02:57 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 14:02:57 --> Total execution time: 0.1020
DEBUG - 2016-07-01 14:02:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352977
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:02:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:57 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:57 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:57 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0511938f426e4edc9e8e3182296379123eb34210'
DEBUG - 2016-07-01 14:02:57 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('0511938f426e4edc9e8e3182296379123eb34210', '180.153.205.253', 1467352977, '__ci_last_regenerate|i:1467352977;')
DEBUG - 2016-07-01 14:02:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:57 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:57 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '0511938f426e4edc9e8e3182296379123eb34210'
DEBUG - 2016-07-01 14:02:57 --> Total execution time: 0.0790
DEBUG - 2016-07-01 14:02:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352977
WHERE id = '0511938f426e4edc9e8e3182296379123eb34210'
DEBUG - 2016-07-01 14:02:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:58 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:58 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:58 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '97f9249904291a7964b7b8e527d9f47462dfbd07'
DEBUG - 2016-07-01 14:02:58 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('97f9249904291a7964b7b8e527d9f47462dfbd07', '112.64.235.252', 1467352978, '__ci_last_regenerate|i:1467352978;')
DEBUG - 2016-07-01 14:02:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:59 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:59 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:02:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6a9d87142a604c2d8bba11385e502d7a', '114.91.132.3', '2016-07-01', '14:02:59', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:02:59 --> 查询待发货订单
DEBUG - 2016-07-01 14:02:59 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 14:02:59 --> Total execution time: 0.0990
DEBUG - 2016-07-01 14:02:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352979
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:02:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:59 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:59 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:59 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '627bfeac70b4ae447addc304a4faeb93791873f0'
DEBUG - 2016-07-01 14:02:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:59 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('627bfeac70b4ae447addc304a4faeb93791873f0', '101.226.33.206', 1467352979, '__ci_last_regenerate|i:1467352979;')
DEBUG - 2016-07-01 14:02:59 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:59 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:59 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '505bd6cbab42839028157dd7f8d1f2322f429932'
DEBUG - 2016-07-01 14:02:59 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('505bd6cbab42839028157dd7f8d1f2322f429932', '112.64.235.87', 1467352979, '__ci_last_regenerate|i:1467352979;')
DEBUG - 2016-07-01 14:02:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:02:59 --> Security Class Initialized
DEBUG - 2016-07-01 14:02:59 --> CRSF cookie Set
DEBUG - 2016-07-01 14:02:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:02:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '505bd6cbab42839028157dd7f8d1f2322f429932'
DEBUG - 2016-07-01 14:02:59 --> Total execution time: 0.0760
DEBUG - 2016-07-01 14:02:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352979
WHERE id = '505bd6cbab42839028157dd7f8d1f2322f429932'
DEBUG - 2016-07-01 14:03:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:02 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:02 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('57d8d556706d498bbe14ddb7d3cdfaf2', '114.91.132.3', '2016-07-01', '14:03:02', '120340234', '/admin/order/index', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:03:02 --> 查询订单
DEBUG - 2016-07-01 14:03:02 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-01 14:03:02 --> Total execution time: 0.0890
DEBUG - 2016-07-01 14:03:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352982
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:04 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:04 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0a3d14e440af43eaa2953bf191396002', '114.91.132.3', '2016-07-01', '14:03:04', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:03:04 --> 查询待审核订单
DEBUG - 2016-07-01 14:03:04 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 14:03:04 --> Total execution time: 0.1010
DEBUG - 2016-07-01 14:03:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352984
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:05 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:05 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('eccd4d5c9b364f4aaea9b4b0740424a2', '114.91.132.3', '2016-07-01', '14:03:05', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:03:05 --> 查询待发货订单
DEBUG - 2016-07-01 14:03:05 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 14:03:05 --> Total execution time: 0.1000
DEBUG - 2016-07-01 14:03:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352985
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:06 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:06 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5a34d96f332d48b6aa3823b00499b47e', '114.91.132.3', '2016-07-01', '14:03:06', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:03:06 --> 查询需求订单
DEBUG - 2016-07-01 14:03:06 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-01 14:03:06 --> Total execution time: 0.0850
DEBUG - 2016-07-01 14:03:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352986
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:06 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:06 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:06 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'f84306ec229480ac3ad2914feb02e140f824c760'
DEBUG - 2016-07-01 14:03:06 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('f84306ec229480ac3ad2914feb02e140f824c760', '101.226.65.108', 1467352986, '__ci_last_regenerate|i:1467352986;')
DEBUG - 2016-07-01 14:03:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:06 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:06 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:06 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b0b207c821bb0baadee272a234dc159561b7b06d'
DEBUG - 2016-07-01 14:03:06 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b0b207c821bb0baadee272a234dc159561b7b06d', '101.226.66.192', 1467352986, '__ci_last_regenerate|i:1467352986;')
DEBUG - 2016-07-01 14:03:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:07 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:07 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b0b207c821bb0baadee272a234dc159561b7b06d'
DEBUG - 2016-07-01 14:03:07 --> Total execution time: 0.0820
DEBUG - 2016-07-01 14:03:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352987
WHERE id = 'b0b207c821bb0baadee272a234dc159561b7b06d'
DEBUG - 2016-07-01 14:03:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:10 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:10 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7984da65311549bfa75c58745bf91199', '114.91.132.3', '2016-07-01', '14:03:10', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:03:10 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 14:03:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:10 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:10 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:10 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:10 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:10 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:10 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b326051f15d6e7e82dc4705f107484178e856800'
DEBUG - 2016-07-01 14:03:10 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b326051f15d6e7e82dc4705f107484178e856800', '180.153.211.190', 1467352990, '__ci_last_regenerate|i:1467352990;')
DEBUG - 2016-07-01 14:03:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1be065a5eeb7a8e36f1030f70cce49d0417615c'
DEBUG - 2016-07-01 14:03:11 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c1be065a5eeb7a8e36f1030f70cce49d0417615c', '180.153.206.31', 1467352991, '__ci_last_regenerate|i:1467352991;')
DEBUG - 2016-07-01 14:03:11 --> Total execution time: 0.4070
DEBUG - 2016-07-01 14:03:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352991
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:11 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:11 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1be065a5eeb7a8e36f1030f70cce49d0417615c'
DEBUG - 2016-07-01 14:03:11 --> Total execution time: 0.0740
DEBUG - 2016-07-01 14:03:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352991
WHERE id = 'c1be065a5eeb7a8e36f1030f70cce49d0417615c'
DEBUG - 2016-07-01 14:03:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:16 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:16 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0ba91253ab1246a38a6e19265e62baa9', '114.91.132.3', '2016-07-01', '14:03:16', '120340234', '/admin/guest/edit/K05245', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:03:16 --> 修改客户信息：K05245
DEBUG - 2016-07-01 14:03:16 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05245' 
DEBUG - 2016-07-01 14:03:16 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05245' 
DEBUG - 2016-07-01 14:03:16 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:03:16 --> Total execution time: 0.2380
DEBUG - 2016-07-01 14:03:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467352996
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:17 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:17 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:17 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e9176534ab86f18f011c1529fe9f1f8f693d95e2'
DEBUG - 2016-07-01 14:03:17 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e9176534ab86f18f011c1529fe9f1f8f693d95e2', '112.64.235.252', 1467352997, '__ci_last_regenerate|i:1467352997;')
DEBUG - 2016-07-01 14:03:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:22 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:22 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:22 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '557fdb8a49f6bae95af044f5ce52cbe0701aaf82'
DEBUG - 2016-07-01 14:03:22 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('557fdb8a49f6bae95af044f5ce52cbe0701aaf82', '101.226.66.180', 1467353002, '__ci_last_regenerate|i:1467353002;')
DEBUG - 2016-07-01 14:03:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:22 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:22 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '557fdb8a49f6bae95af044f5ce52cbe0701aaf82'
DEBUG - 2016-07-01 14:03:22 --> Total execution time: 0.0760
DEBUG - 2016-07-01 14:03:22 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353002
WHERE id = '557fdb8a49f6bae95af044f5ce52cbe0701aaf82'
DEBUG - 2016-07-01 14:03:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:24 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:24 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bccd45e3fe2c4028a37db107986801fc', '114.91.132.3', '2016-07-01', '14:03:24', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:03:24 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 14:03:24 --> Total execution time: 0.0800
DEBUG - 2016-07-01 14:03:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353004
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:30 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:30 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:30 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8e1910769596659fd2bd2fb427f9f7bfc796fd28'
DEBUG - 2016-07-01 14:03:30 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8e1910769596659fd2bd2fb427f9f7bfc796fd28', '180.153.163.190', 1467353010, '__ci_last_regenerate|i:1467353010;')
DEBUG - 2016-07-01 14:03:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:30 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:30 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:30 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e9fa2bd681cb798e90ea5f6528ddc5a67236c72f'
DEBUG - 2016-07-01 14:03:30 --> Total execution time: 0.0910
DEBUG - 2016-07-01 14:03:30 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e9fa2bd681cb798e90ea5f6528ddc5a67236c72f', '180.153.163.190', 1467353010, '__ci_last_regenerate|i:1467353010;')
DEBUG - 2016-07-01 14:03:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:03:59 --> Security Class Initialized
DEBUG - 2016-07-01 14:03:59 --> CRSF cookie Set
DEBUG - 2016-07-01 14:03:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:03:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:03:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3c7e9d7c05554f6cb792c39dbe5d93d8', '114.91.132.3', '2016-07-01', '14:03:59', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:03:59 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:03:59 --> Total execution time: 0.0960
DEBUG - 2016-07-01 14:03:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353039
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:04:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:04:04 --> Security Class Initialized
DEBUG - 2016-07-01 14:04:04 --> CRSF cookie Set
DEBUG - 2016-07-01 14:04:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:04:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:04:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4f9490ff778f448cb4951dd04007b2ac', '114.91.132.3', '2016-07-01', '14:04:04', '120340234', '/admin/user/add', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', '00bc2de05e77a9464555d51dd4eb37b816f1759d')
DEBUG - 2016-07-01 14:04:04 --> Total execution time: 0.1080
DEBUG - 2016-07-01 14:04:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353044
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:04:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:04:05 --> CRSF cookie Set
DEBUG - 2016-07-01 14:04:05 --> Security Class Initialized
DEBUG - 2016-07-01 14:04:05 --> CRSF cookie Set
DEBUG - 2016-07-01 14:04:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:04:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '69db6fc412d1926345e500d76b5e80f1de7e5f3d'
DEBUG - 2016-07-01 14:04:05 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('69db6fc412d1926345e500d76b5e80f1de7e5f3d', '180.153.206.34', 1467353045, '__ci_last_regenerate|i:1467353045;')
DEBUG - 2016-07-01 14:04:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:04:10 --> CRSF cookie Set
DEBUG - 2016-07-01 14:04:10 --> Security Class Initialized
DEBUG - 2016-07-01 14:04:10 --> CRSF cookie Set
DEBUG - 2016-07-01 14:04:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:04:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bc3e0a0069555733d013b1665d94f219c69c55e8'
DEBUG - 2016-07-01 14:04:10 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('bc3e0a0069555733d013b1665d94f219c69c55e8', '101.226.51.226', 1467353050, '__ci_last_regenerate|i:1467353050;')
DEBUG - 2016-07-01 14:04:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:04:10 --> Security Class Initialized
DEBUG - 2016-07-01 14:04:10 --> CRSF cookie Set
DEBUG - 2016-07-01 14:04:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:04:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bc3e0a0069555733d013b1665d94f219c69c55e8'
DEBUG - 2016-07-01 14:04:10 --> Total execution time: 0.0950
DEBUG - 2016-07-01 14:04:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353050
WHERE id = 'bc3e0a0069555733d013b1665d94f219c69c55e8'
DEBUG - 2016-07-01 14:06:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:06:56 --> CRSF cookie Set
DEBUG - 2016-07-01 14:06:56 --> Security Class Initialized
DEBUG - 2016-07-01 14:06:56 --> CRSF cookie Set
DEBUG - 2016-07-01 14:06:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:06:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'cc053a879bc078e041299e69e3c3f047d9ac3215'
DEBUG - 2016-07-01 14:06:56 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('cc053a879bc078e041299e69e3c3f047d9ac3215', '180.153.206.35', 1467353216, '__ci_last_regenerate|i:1467353216;')
DEBUG - 2016-07-01 14:07:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:07:01 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:01 --> Security Class Initialized
DEBUG - 2016-07-01 14:07:01 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:07:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b847a1086dea3187088a9ab820357b5ebe3a2141'
DEBUG - 2016-07-01 14:07:01 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('b847a1086dea3187088a9ab820357b5ebe3a2141', '180.153.211.172', 1467353221, '__ci_last_regenerate|i:1467353221;')
DEBUG - 2016-07-01 14:07:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:07:01 --> Security Class Initialized
DEBUG - 2016-07-01 14:07:01 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:07:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'b847a1086dea3187088a9ab820357b5ebe3a2141'
DEBUG - 2016-07-01 14:07:01 --> Total execution time: 0.0710
DEBUG - 2016-07-01 14:07:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353221
WHERE id = 'b847a1086dea3187088a9ab820357b5ebe3a2141'
DEBUG - 2016-07-01 14:07:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:07:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:07:15 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:15 --> Security Class Initialized
DEBUG - 2016-07-01 14:07:15 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:15 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:15 --> Security Class Initialized
DEBUG - 2016-07-01 14:07:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:07:15 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:07:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:07:15 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:15 --> Security Class Initialized
DEBUG - 2016-07-01 14:07:15 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:07:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:07:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:07:16 --> No URI present. Default controller set.
DEBUG - 2016-07-01 14:07:16 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:16 --> Security Class Initialized
DEBUG - 2016-07-01 14:07:16 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:07:16 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:16 --> Security Class Initialized
DEBUG - 2016-07-01 14:07:16 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '894cc938d9c2a71a998d327f2563f02cdddcd6e9'
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a2503478cf9ab12ff590d78d4e1a682d149ae265'
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '9fccbafcdf475f55fb42a82c803400702e46ff89'
DEBUG - 2016-07-01 14:07:16 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 14:07:16 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '73c45232927c67f536695c249ab3abcd59c83ddf'
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ee96ae99c064e7d230cc445f044b3d3d65994695'
DEBUG - 2016-07-01 14:07:16 --> 登录返回结果数：0
DEBUG - 2016-07-01 14:07:16 --> Total execution time: 0.2010
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('894cc938d9c2a71a998d327f2563f02cdddcd6e9', '101.226.89.123', 1467353236, '__ci_last_regenerate|i:1467353236;')
DEBUG - 2016-07-01 14:07:16 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 14:07:16 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 14:07:16 --> 登录返回结果数：0
DEBUG - 2016-07-01 14:07:16 --> Total execution time: 0.2090
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a2503478cf9ab12ff590d78d4e1a682d149ae265', '101.226.89.123', 1467353236, '__ci_last_regenerate|i:1467353236;')
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ee96ae99c064e7d230cc445f044b3d3d65994695', '101.226.89.123', 1467353236, '__ci_last_regenerate|i:1467353236;')
DEBUG - 2016-07-01 14:07:16 --> 登录返回结果数：0
DEBUG - 2016-07-01 14:07:16 --> 登录返回结果数：0
DEBUG - 2016-07-01 14:07:16 --> Total execution time: 0.1350
DEBUG - 2016-07-01 14:07:16 --> Total execution time: 0.1640
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('9fccbafcdf475f55fb42a82c803400702e46ff89', '101.226.89.123', 1467353236, '__ci_last_regenerate|i:1467353236;')
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('73c45232927c67f536695c249ab3abcd59c83ddf', '101.226.89.123', 1467353236, '__ci_last_regenerate|i:1467353236;')
DEBUG - 2016-07-01 14:07:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:07:16 --> No URI present. Default controller set.
DEBUG - 2016-07-01 14:07:16 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:16 --> Security Class Initialized
DEBUG - 2016-07-01 14:07:16 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d545ef054e2bb7f19f73d235d0e3d74d2152305'
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4d545ef054e2bb7f19f73d235d0e3d74d2152305', '101.226.33.200', 1467353236, '__ci_last_regenerate|i:1467353236;')
DEBUG - 2016-07-01 14:07:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:07:16 --> Security Class Initialized
DEBUG - 2016-07-01 14:07:16 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4d545ef054e2bb7f19f73d235d0e3d74d2152305'
DEBUG - 2016-07-01 14:07:16 --> Total execution time: 0.0770
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353236
WHERE id = '4d545ef054e2bb7f19f73d235d0e3d74d2152305'
DEBUG - 2016-07-01 14:07:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:07:16 --> No URI present. Default controller set.
DEBUG - 2016-07-01 14:07:16 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:16 --> Security Class Initialized
DEBUG - 2016-07-01 14:07:16 --> CRSF cookie Set
DEBUG - 2016-07-01 14:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '867d7822b2d1e975ded47b32f19ae205606f1734'
DEBUG - 2016-07-01 14:07:16 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('867d7822b2d1e975ded47b32f19ae205606f1734', '112.64.235.246', 1467353236, '__ci_last_regenerate|i:1467353236;')
DEBUG - 2016-07-01 14:08:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:08:41 --> Security Class Initialized
DEBUG - 2016-07-01 14:08:41 --> CRSF cookie Set
DEBUG - 2016-07-01 14:08:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:08:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:08:41 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '00bc2de05e77a9464555d51dd4eb37b816f1759d'
DEBUG - 2016-07-01 14:08:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a548d666f9504f2d8644dce27d0dd4ae', '114.91.132.3', '2016-07-01', '14:08:41', '120340234', '/admin/user/add', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'd8dc6582bddf83a8790374c92834a55e7615e614')
DEBUG - 2016-07-01 14:08:41 --> Total execution time: 0.0820
DEBUG - 2016-07-01 14:08:41 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d8dc6582bddf83a8790374c92834a55e7615e614', '114.91.132.3', 1467353321, '__ci_last_regenerate|i:1467353321;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 14:09:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:09:44 --> No URI present. Default controller set.
DEBUG - 2016-07-01 14:09:44 --> CRSF cookie Set
DEBUG - 2016-07-01 14:09:44 --> Security Class Initialized
DEBUG - 2016-07-01 14:09:44 --> CRSF cookie Set
DEBUG - 2016-07-01 14:09:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:09:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:09:44 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('a1408dd4b11322d6a9678fdf94f413ad6e328355', '223.104.5.205', 1467353384, '__ci_last_regenerate|i:1467353384;')
DEBUG - 2016-07-01 14:09:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:09:44 --> Security Class Initialized
DEBUG - 2016-07-01 14:09:44 --> CRSF cookie Set
DEBUG - 2016-07-01 14:09:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:09:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:09:44 --> Total execution time: 0.0810
DEBUG - 2016-07-01 14:09:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353384
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:09:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:09:54 --> Security Class Initialized
DEBUG - 2016-07-01 14:09:54 --> CRSF cookie Set
DEBUG - 2016-07-01 14:09:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:09:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8dc6582bddf83a8790374c92834a55e7615e614'
DEBUG - 2016-07-01 14:09:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4d3bdcf1a9434ae89c17a5fb5e9c626f', '114.91.132.3', '2016-07-01', '14:09:54', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'd8dc6582bddf83a8790374c92834a55e7615e614')
DEBUG - 2016-07-01 14:09:54 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 14:09:54 --> Total execution time: 0.1750
DEBUG - 2016-07-01 14:09:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353394
WHERE id = 'd8dc6582bddf83a8790374c92834a55e7615e614'
DEBUG - 2016-07-01 14:09:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:09:59 --> Security Class Initialized
DEBUG - 2016-07-01 14:09:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:09:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:09:59 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 14:09:59 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 14:09:59 --> 登录返回结果数：0
DEBUG - 2016-07-01 14:09:59 --> Total execution time: 0.0890
DEBUG - 2016-07-01 14:09:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353399
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:10:13 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:10:13 --> Security Class Initialized
DEBUG - 2016-07-01 14:10:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:10:13 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:10:13 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 14:10:13 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 14:10:13 --> 登录返回结果数：1
DEBUG - 2016-07-01 14:10:13 --> 成功登录
DEBUG - 2016-07-01 14:10:13 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353413, data = '__ci_last_regenerate|i:1467353384;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:10:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:10:14 --> Security Class Initialized
DEBUG - 2016-07-01 14:10:14 --> CRSF cookie Set
DEBUG - 2016-07-01 14:10:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:10:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:10:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('62cbe00721b44189a4ac67cfaf1c6784', '223.104.5.205', '2016-07-01', '14:10:14', '120340234', '/admin/backhome', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'a1408dd4b11322d6a9678fdf94f413ad6e328355')
DEBUG - 2016-07-01 14:10:14 --> Total execution time: 0.0890
DEBUG - 2016-07-01 14:10:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353414
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:10:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:10:30 --> Security Class Initialized
DEBUG - 2016-07-01 14:10:30 --> CRSF cookie Set
DEBUG - 2016-07-01 14:10:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:10:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:10:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c61cb140b9ea49f7a65c4e707a30cbb8', '223.104.5.205', '2016-07-01', '14:10:30', '120340234', '/admin/user', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'a1408dd4b11322d6a9678fdf94f413ad6e328355')
DEBUG - 2016-07-01 14:10:30 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:10:30 --> Total execution time: 0.1050
DEBUG - 2016-07-01 14:10:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353430
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:10:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:10:33 --> Security Class Initialized
DEBUG - 2016-07-01 14:10:33 --> CRSF cookie Set
DEBUG - 2016-07-01 14:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:10:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:10:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8beee8d3933442dd90489a643a933e45', '223.104.5.205', '2016-07-01', '14:10:33', '120340234', '/admin/user/add', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'a1408dd4b11322d6a9678fdf94f413ad6e328355')
DEBUG - 2016-07-01 14:10:33 --> Total execution time: 0.0830
DEBUG - 2016-07-01 14:10:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353433
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:11:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:11:00 --> Security Class Initialized
DEBUG - 2016-07-01 14:11:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:11:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:11:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('05cda35780be4a2b906e1f59db381aa2', '223.104.5.205', '2016-07-01', '14:11:00', '120340234', '/admin/user/save', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'a1408dd4b11322d6a9678fdf94f413ad6e328355')
DEBUG - 2016-07-01 14:11:00 --> 保存操作员信息
DEBUG - 2016-07-01 14:11:00 --> [执行的SQL语句]##############INSERT INTO admin_user (uuid, login_pwd, login_code, phone, email, qq, user_name, add_time) VALUES ('ad425b80281346a1a34320ff48325feb', '179febee3e966848484f5e38f115782ba5a46e70d71faf245570c39c046e7484', 'ABC', '', '', '', '小学', '2016-07-01 14:11:00')
DEBUG - 2016-07-01 14:11:00 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:11:00 --> Total execution time: 0.2000
DEBUG - 2016-07-01 14:11:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353460
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:11:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:11:25 --> Security Class Initialized
DEBUG - 2016-07-01 14:11:25 --> CRSF cookie Set
DEBUG - 2016-07-01 14:11:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:11:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:11:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('12bab798c4724fc89960ae777aca1b8a', '223.104.5.205', '2016-07-01', '14:11:25', '120340234', '/admin/user', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'a1408dd4b11322d6a9678fdf94f413ad6e328355')
DEBUG - 2016-07-01 14:11:25 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:11:25 --> Total execution time: 0.0980
DEBUG - 2016-07-01 14:11:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353485
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:11:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:11:39 --> Security Class Initialized
DEBUG - 2016-07-01 14:11:39 --> CRSF cookie Set
DEBUG - 2016-07-01 14:11:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:11:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8dc6582bddf83a8790374c92834a55e7615e614'
DEBUG - 2016-07-01 14:11:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('542016341c214504b00665098b4d9189', '114.91.132.3', '2016-07-01', '14:11:39', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'd8dc6582bddf83a8790374c92834a55e7615e614')
DEBUG - 2016-07-01 14:11:39 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:11:39 --> Total execution time: 0.0860
DEBUG - 2016-07-01 14:11:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353499
WHERE id = 'd8dc6582bddf83a8790374c92834a55e7615e614'
DEBUG - 2016-07-01 14:11:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:11:39 --> Security Class Initialized
DEBUG - 2016-07-01 14:11:39 --> CRSF cookie Set
DEBUG - 2016-07-01 14:11:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:11:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:11:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8aa6f14e9e1b4026baf20608dc994ead', '223.104.5.205', '2016-07-01', '14:11:40', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'a1408dd4b11322d6a9678fdf94f413ad6e328355')
DEBUG - 2016-07-01 14:11:40 --> 查询需求订单
DEBUG - 2016-07-01 14:11:40 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-01 14:11:40 --> Total execution time: 0.0900
DEBUG - 2016-07-01 14:11:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353500
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:11:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:11:45 --> Security Class Initialized
DEBUG - 2016-07-01 14:11:45 --> CRSF cookie Set
DEBUG - 2016-07-01 14:11:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:11:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:11:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4e300b7fe6ed46f3bd3990729336c5be', '223.104.5.205', '2016-07-01', '14:11:45', '120340234', '/admin/user', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'a1408dd4b11322d6a9678fdf94f413ad6e328355')
DEBUG - 2016-07-01 14:11:45 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:11:45 --> Total execution time: 0.0850
DEBUG - 2016-07-01 14:11:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353505
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:11:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:11:58 --> Security Class Initialized
DEBUG - 2016-07-01 14:11:58 --> CRSF cookie Set
DEBUG - 2016-07-01 14:11:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:11:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:11:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3d2e08fe235240bd88b3b9f07e1c4a79', '223.104.5.205', '2016-07-01', '14:11:58', '120340234', '/admin/order/index', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'a1408dd4b11322d6a9678fdf94f413ad6e328355')
DEBUG - 2016-07-01 14:11:58 --> 查询订单
DEBUG - 2016-07-01 14:11:58 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-01 14:11:58 --> Total execution time: 0.0940
DEBUG - 2016-07-01 14:11:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353518
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:12:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:12:17 --> Security Class Initialized
DEBUG - 2016-07-01 14:12:17 --> CRSF cookie Set
DEBUG - 2016-07-01 14:12:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:12:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:12:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2592d680327e4d4bb0dc7d111ce37d1f', '223.104.5.205', '2016-07-01', '14:12:17', '120340234', '/admin/user', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'a1408dd4b11322d6a9678fdf94f413ad6e328355')
DEBUG - 2016-07-01 14:12:17 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:12:17 --> Total execution time: 0.0910
DEBUG - 2016-07-01 14:12:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353537
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:13:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:13:19 --> Security Class Initialized
DEBUG - 2016-07-01 14:13:19 --> CRSF cookie Set
DEBUG - 2016-07-01 14:13:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:13:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8dc6582bddf83a8790374c92834a55e7615e614'
DEBUG - 2016-07-01 14:13:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('eebfd95528264b7daae26f4a97c2e771', '114.91.132.3', '2016-07-01', '14:13:19', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'd8dc6582bddf83a8790374c92834a55e7615e614')
DEBUG - 2016-07-01 14:13:19 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 14:13:19 --> Total execution time: 0.0890
DEBUG - 2016-07-01 14:13:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353599
WHERE id = 'd8dc6582bddf83a8790374c92834a55e7615e614'
DEBUG - 2016-07-01 14:16:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:16:27 --> Security Class Initialized
DEBUG - 2016-07-01 14:16:27 --> CRSF cookie Set
DEBUG - 2016-07-01 14:16:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:16:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'd8dc6582bddf83a8790374c92834a55e7615e614'
DEBUG - 2016-07-01 14:16:27 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'd8dc6582bddf83a8790374c92834a55e7615e614'
DEBUG - 2016-07-01 14:16:27 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0622bf2836d74138ac4448a1ce4fc435', '114.91.132.3', '2016-07-01', '14:16:27', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:16:27 --> 查询待审核订单
DEBUG - 2016-07-01 14:16:27 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 14:16:27 --> Total execution time: 0.0830
DEBUG - 2016-07-01 14:16:27 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('fbde95d141faa2323f0a974a515e940ba426246b', '114.91.132.3', 1467353787, '__ci_last_regenerate|i:1467353787;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 14:16:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:16:33 --> Security Class Initialized
DEBUG - 2016-07-01 14:16:33 --> CRSF cookie Set
DEBUG - 2016-07-01 14:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:16:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:16:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4d015029b756491cb2e0e3d9ffc0a1c4', '114.91.132.3', '2016-07-01', '14:16:33', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:16:33 --> 查询待发货订单
DEBUG - 2016-07-01 14:16:33 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 14:16:33 --> Total execution time: 0.0850
DEBUG - 2016-07-01 14:16:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353793
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:16:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:16:45 --> Security Class Initialized
DEBUG - 2016-07-01 14:16:45 --> CRSF cookie Set
DEBUG - 2016-07-01 14:16:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:16:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:16:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('04a6b06b81d84b029c60306c7dbcde00', '114.91.132.3', '2016-07-01', '14:16:45', '120340234', '/admin/order/traffic/523df1cd7693427bb4774df66c31a7a8', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:16:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:16:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='523df1cd7693427bb4774df66c31a7a8'
DEBUG - 2016-07-01 14:16:45 --> CRSF cookie Set
DEBUG - 2016-07-01 14:16:45 --> Security Class Initialized
DEBUG - 2016-07-01 14:16:45 --> CRSF cookie Set
DEBUG - 2016-07-01 14:16:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:16:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '978eb7e2c9af6140c95002422b725b2a189fbae4'
DEBUG - 2016-07-01 14:16:45 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('978eb7e2c9af6140c95002422b725b2a189fbae4', '101.226.33.200', 1467353805, '__ci_last_regenerate|i:1467353805;')
DEBUG - 2016-07-01 14:16:45 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='523df1cd7693427bb4774df66c31a7a8' order by create_date_time desc
DEBUG - 2016-07-01 14:16:45 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='523df1cd7693427bb4774df66c31a7a8'
DEBUG - 2016-07-01 14:16:45 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='523df1cd7693427bb4774df66c31a7a8'    order by t1.lno asc
        
DEBUG - 2016-07-01 14:16:45 --> Total execution time: 0.3400
DEBUG - 2016-07-01 14:16:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353805
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:16:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:16:50 --> CRSF cookie Set
DEBUG - 2016-07-01 14:16:50 --> Security Class Initialized
DEBUG - 2016-07-01 14:16:50 --> CRSF cookie Set
DEBUG - 2016-07-01 14:16:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:16:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '63078243ba83b3ec854da118b748e4e627d7ceea'
DEBUG - 2016-07-01 14:16:50 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('63078243ba83b3ec854da118b748e4e627d7ceea', '101.226.66.173', 1467353810, '__ci_last_regenerate|i:1467353810;')
DEBUG - 2016-07-01 14:16:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:16:50 --> Security Class Initialized
DEBUG - 2016-07-01 14:16:50 --> CRSF cookie Set
DEBUG - 2016-07-01 14:16:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:16:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '63078243ba83b3ec854da118b748e4e627d7ceea'
DEBUG - 2016-07-01 14:16:51 --> Total execution time: 0.0780
DEBUG - 2016-07-01 14:16:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353811
WHERE id = '63078243ba83b3ec854da118b748e4e627d7ceea'
DEBUG - 2016-07-01 14:17:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:17:06 --> Security Class Initialized
DEBUG - 2016-07-01 14:17:06 --> CRSF cookie Set
DEBUG - 2016-07-01 14:17:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:17:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:17:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d8139d6791a542cf844d12934eadf3f9', '114.91.132.3', '2016-07-01', '14:17:06', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:17:06 --> 查询待审核订单
DEBUG - 2016-07-01 14:17:06 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 14:17:06 --> Total execution time: 0.0990
DEBUG - 2016-07-01 14:17:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353826
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:17:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:17:17 --> Security Class Initialized
DEBUG - 2016-07-01 14:17:17 --> CRSF cookie Set
DEBUG - 2016-07-01 14:17:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:17:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:17:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1ad78de6dc14427bb6d2136fd44418d6', '114.91.132.3', '2016-07-01', '14:17:17', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:17:17 --> 查询待发货订单
DEBUG - 2016-07-01 14:17:17 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 14:17:17 --> Total execution time: 0.0880
DEBUG - 2016-07-01 14:17:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353837
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:17:23 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:17:23 --> Security Class Initialized
DEBUG - 2016-07-01 14:17:23 --> CRSF cookie Set
DEBUG - 2016-07-01 14:17:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:17:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:17:23 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5a5c9cd1bc1e4f5f862bd2d90b219d49', '114.91.132.3', '2016-07-01', '14:17:23', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:17:23 --> 查询待审核订单
DEBUG - 2016-07-01 14:17:23 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 14:17:23 --> Total execution time: 0.0930
DEBUG - 2016-07-01 14:17:23 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353843
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:17:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:17:34 --> Security Class Initialized
DEBUG - 2016-07-01 14:17:34 --> CRSF cookie Set
DEBUG - 2016-07-01 14:17:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:17:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:17:34 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c6d75f2e11a44e70a1b5320d498f50c6', '114.91.132.3', '2016-07-01', '14:17:34', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:17:34 --> 查询待发货订单
DEBUG - 2016-07-01 14:17:34 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 14:17:34 --> Total execution time: 0.0770
DEBUG - 2016-07-01 14:17:34 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353854
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:18:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:18:06 --> Security Class Initialized
DEBUG - 2016-07-01 14:18:06 --> CRSF cookie Set
DEBUG - 2016-07-01 14:18:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:18:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:18:06 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'a1408dd4b11322d6a9678fdf94f413ad6e328355'
DEBUG - 2016-07-01 14:18:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b996f308d1a94716bc2f6688fd5854ed', '223.104.5.205', '2016-07-01', '14:18:06', '120340234', '/admin/user', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '61d082f52ff04b3dafc68c6d7c2d44ec9b42856b')
DEBUG - 2016-07-01 14:18:06 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:18:06 --> Total execution time: 0.0900
DEBUG - 2016-07-01 14:18:06 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('61d082f52ff04b3dafc68c6d7c2d44ec9b42856b', '223.104.5.205', 1467353886, '__ci_last_regenerate|i:1467353886;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 14:18:06 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:18:06 --> Security Class Initialized
DEBUG - 2016-07-01 14:18:06 --> CRSF cookie Set
DEBUG - 2016-07-01 14:18:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:18:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:18:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('488a3a0034ec410da97eeac512841bb3', '114.91.132.3', '2016-07-01', '14:18:06', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:18:06 --> 查询待发货订单
DEBUG - 2016-07-01 14:18:06 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 14:18:06 --> Total execution time: 0.1000
DEBUG - 2016-07-01 14:18:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353886
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:18:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:18:16 --> Security Class Initialized
DEBUG - 2016-07-01 14:18:16 --> CRSF cookie Set
DEBUG - 2016-07-01 14:18:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:18:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '61d082f52ff04b3dafc68c6d7c2d44ec9b42856b'
DEBUG - 2016-07-01 14:18:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('46496c126d2e43efb5ed352054e974e8', '223.104.5.205', '2016-07-01', '14:18:16', '120340234', '/admin/guest', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '61d082f52ff04b3dafc68c6d7c2d44ec9b42856b')
DEBUG - 2016-07-01 14:18:16 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 14:18:16 --> Total execution time: 0.0840
DEBUG - 2016-07-01 14:18:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353896
WHERE id = '61d082f52ff04b3dafc68c6d7c2d44ec9b42856b'
DEBUG - 2016-07-01 14:18:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:18:32 --> Security Class Initialized
DEBUG - 2016-07-01 14:18:32 --> CRSF cookie Set
DEBUG - 2016-07-01 14:18:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:18:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:18:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a106bea8a76047d4b80236e6321cf1c7', '114.91.132.3', '2016-07-01', '14:18:32', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:18:32 --> 查询待审核订单
DEBUG - 2016-07-01 14:18:32 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 14:18:32 --> Total execution time: 0.0840
DEBUG - 2016-07-01 14:18:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353912
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:18:36 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:18:36 --> Security Class Initialized
DEBUG - 2016-07-01 14:18:36 --> CRSF cookie Set
DEBUG - 2016-07-01 14:18:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:18:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:18:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('576e4a41864743d3a57a54b823df70d8', '114.91.132.3', '2016-07-01', '14:18:36', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:18:36 --> 查询待发货订单
DEBUG - 2016-07-01 14:18:36 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 14:18:36 --> Total execution time: 0.0860
DEBUG - 2016-07-01 14:18:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353916
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:18:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:18:49 --> Security Class Initialized
DEBUG - 2016-07-01 14:18:49 --> CRSF cookie Set
DEBUG - 2016-07-01 14:18:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:18:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:18:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d9d03be56790489abb85e19f0121bdf4', '114.91.132.3', '2016-07-01', '14:18:49', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:18:49 --> 查询待审核订单
DEBUG - 2016-07-01 14:18:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 14:18:49 --> Total execution time: 0.0820
DEBUG - 2016-07-01 14:18:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353929
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:18:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:18:57 --> Security Class Initialized
DEBUG - 2016-07-01 14:18:57 --> CRSF cookie Set
DEBUG - 2016-07-01 14:18:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:18:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:18:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fc061743c7ef4cc48710b442a1ce55a7', '114.91.132.3', '2016-07-01', '14:18:57', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:18:57 --> 查询待发货订单
DEBUG - 2016-07-01 14:18:57 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 14:18:57 --> Total execution time: 0.0880
DEBUG - 2016-07-01 14:18:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353937
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:19:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:19:15 --> Security Class Initialized
DEBUG - 2016-07-01 14:19:15 --> CRSF cookie Set
DEBUG - 2016-07-01 14:19:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:19:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:19:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3d01ec8370134ae3a9e3d25b55348ff4', '114.91.132.3', '2016-07-01', '14:19:15', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:19:15 --> 查询待审核订单
DEBUG - 2016-07-01 14:19:15 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 14:19:15 --> Total execution time: 0.0900
DEBUG - 2016-07-01 14:19:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353955
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:19:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:19:24 --> Security Class Initialized
DEBUG - 2016-07-01 14:19:24 --> CRSF cookie Set
DEBUG - 2016-07-01 14:19:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:19:24 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:19:24 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ea4e304ba2d64948bf8635c5c5d4a9ee', '114.91.132.3', '2016-07-01', '14:19:24', '120340234', '/admin/order/check/da40b2559bfa443faedc2ebd1e55bb93', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:19:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-07-01 14:19:24 --> [执行的SQL语句]##############select  *  from apsos_order_check c,admin_user a where  c.check_user_id=a.uuid and c.order_id='da40b2559bfa443faedc2ebd1e55bb93' order by create_date_time desc
DEBUG - 2016-07-01 14:19:24 --> [执行的SQL语句]##############select t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where  t.user_id=t1.uuid and t.uuid='da40b2559bfa443faedc2ebd1e55bb93'
DEBUG - 2016-07-01 14:19:24 --> [执行的SQL语句]##############select t1.* from  apsos_order_detail t1 where t1.order_id='da40b2559bfa443faedc2ebd1e55bb93'    order by t1.lno asc
        
DEBUG - 2016-07-01 14:19:24 --> Total execution time: 0.1110
DEBUG - 2016-07-01 14:19:24 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467353964
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:19:24 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:19:24 --> CRSF cookie Set
DEBUG - 2016-07-01 14:19:24 --> Security Class Initialized
DEBUG - 2016-07-01 14:19:24 --> CRSF cookie Set
DEBUG - 2016-07-01 14:19:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:19:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'e6cf5a6f72e01cd7d1889fe967773239aad4ad6b'
DEBUG - 2016-07-01 14:19:25 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('e6cf5a6f72e01cd7d1889fe967773239aad4ad6b', '101.226.89.119', 1467353965, '__ci_last_regenerate|i:1467353965;')
DEBUG - 2016-07-01 14:20:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:20:05 --> Security Class Initialized
DEBUG - 2016-07-01 14:20:05 --> CRSF cookie Set
DEBUG - 2016-07-01 14:20:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:20:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:20:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c993edaa5baf494b84d887d289a590e6', '114.91.132.3', '2016-07-01', '14:20:05', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.69 Safari/537.36 QQBrowser/9.1.4375.400', 'fbde95d141faa2323f0a974a515e940ba426246b')
DEBUG - 2016-07-01 14:20:05 --> 查询待审核订单
DEBUG - 2016-07-01 14:20:05 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 14:20:05 --> Total execution time: 0.0790
DEBUG - 2016-07-01 14:20:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467354005
WHERE id = 'fbde95d141faa2323f0a974a515e940ba426246b'
DEBUG - 2016-07-01 14:28:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:28:28 --> Security Class Initialized
DEBUG - 2016-07-01 14:28:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:28:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:28:28 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('ad2028d6eee1d0a13a295433b97df845d35cdde8', '114.91.132.3', 1467354508, '__ci_last_regenerate|i:1467354508;')
DEBUG - 2016-07-01 14:28:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:28:28 --> Security Class Initialized
DEBUG - 2016-07-01 14:28:28 --> CRSF cookie Set
DEBUG - 2016-07-01 14:28:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:28:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:28:28 --> Total execution time: 0.0710
DEBUG - 2016-07-01 14:28:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467354508
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:28:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:28:35 --> Security Class Initialized
DEBUG - 2016-07-01 14:28:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:28:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:28:35 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 14:28:35 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 14:28:35 --> 登录返回结果数：1
DEBUG - 2016-07-01 14:28:35 --> 成功登录
DEBUG - 2016-07-01 14:28:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467354515, data = '__ci_last_regenerate|i:1467354508;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:28:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:28:35 --> Security Class Initialized
DEBUG - 2016-07-01 14:28:35 --> CRSF cookie Set
DEBUG - 2016-07-01 14:28:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:28:36 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:28:36 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b8b30270b3374a34a6ead522f14767d0', '114.91.132.3', '2016-07-01', '14:28:36', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'ad2028d6eee1d0a13a295433b97df845d35cdde8')
DEBUG - 2016-07-01 14:28:36 --> 查询需求订单
DEBUG - 2016-07-01 14:28:36 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-01 14:28:36 --> Total execution time: 0.1190
DEBUG - 2016-07-01 14:28:36 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467354516
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:28:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:28:40 --> Security Class Initialized
DEBUG - 2016-07-01 14:28:40 --> CRSF cookie Set
DEBUG - 2016-07-01 14:28:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:28:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:28:40 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e6f87542b4864c04a456ae51031c140c', '114.91.132.3', '2016-07-01', '14:28:40', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'ad2028d6eee1d0a13a295433b97df845d35cdde8')
DEBUG - 2016-07-01 14:28:40 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:28:40 --> Total execution time: 0.0970
DEBUG - 2016-07-01 14:28:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467354520
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:28:45 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:28:45 --> Security Class Initialized
DEBUG - 2016-07-01 14:28:45 --> CRSF cookie Set
DEBUG - 2016-07-01 14:28:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:28:45 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:28:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c9ebd14f2f20440e9deb0b2a03e739cf', '114.91.132.3', '2016-07-01', '14:28:45', '120340234', '/admin/user/add', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'ad2028d6eee1d0a13a295433b97df845d35cdde8')
DEBUG - 2016-07-01 14:28:45 --> Total execution time: 0.0910
DEBUG - 2016-07-01 14:28:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467354525
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:28:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:28:58 --> Security Class Initialized
DEBUG - 2016-07-01 14:28:58 --> CRSF cookie Set
DEBUG - 2016-07-01 14:28:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:28:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:28:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8d0cd4ec94d14b85bc9bd86a44b0fe0a', '114.91.132.3', '2016-07-01', '14:28:58', '120340234', '/admin/user', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'ad2028d6eee1d0a13a295433b97df845d35cdde8')
DEBUG - 2016-07-01 14:28:58 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:28:58 --> Total execution time: 0.1080
DEBUG - 2016-07-01 14:28:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467354538
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:31:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:31:25 --> Security Class Initialized
DEBUG - 2016-07-01 14:31:25 --> CRSF cookie Set
DEBUG - 2016-07-01 14:31:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:31:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '61d082f52ff04b3dafc68c6d7c2d44ec9b42856b'
DEBUG - 2016-07-01 14:31:25 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '61d082f52ff04b3dafc68c6d7c2d44ec9b42856b'
DEBUG - 2016-07-01 14:31:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c67445d487544ecf8364826ffde3c0fa', '223.104.5.205', '2016-07-01', '14:31:25', '120340234', '/admin/user', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'af843c0c8769f07471e80b8bc7f1a58ce5491a6c')
DEBUG - 2016-07-01 14:31:25 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 14:31:25 --> Total execution time: 0.0890
DEBUG - 2016-07-01 14:31:25 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('af843c0c8769f07471e80b8bc7f1a58ce5491a6c', '223.104.5.205', 1467354685, '__ci_last_regenerate|i:1467354685;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 14:31:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:31:39 --> Security Class Initialized
DEBUG - 2016-07-01 14:31:39 --> CRSF cookie Set
DEBUG - 2016-07-01 14:31:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:31:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'af843c0c8769f07471e80b8bc7f1a58ce5491a6c'
DEBUG - 2016-07-01 14:31:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8569ffcc71e64f849637b16f2cbb2eed', '223.104.5.205', '2016-07-01', '14:31:39', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'af843c0c8769f07471e80b8bc7f1a58ce5491a6c')
DEBUG - 2016-07-01 14:31:39 --> 查询待发货订单
DEBUG - 2016-07-01 14:31:39 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 14:31:39 --> Total execution time: 0.0870
DEBUG - 2016-07-01 14:31:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467354699
WHERE id = 'af843c0c8769f07471e80b8bc7f1a58ce5491a6c'
DEBUG - 2016-07-01 14:35:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 14:35:52 --> Security Class Initialized
DEBUG - 2016-07-01 14:35:52 --> CRSF cookie Set
DEBUG - 2016-07-01 14:35:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 14:35:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:35:52 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'ad2028d6eee1d0a13a295433b97df845d35cdde8'
DEBUG - 2016-07-01 14:35:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('33a83820bbef4e74a9ee919cf86392eb', '114.91.132.3', '2016-07-01', '14:35:52', '120340234', '/admin/account/changeProfile', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '7609454d8976bf23c810718fb315406e7801717e')
DEBUG - 2016-07-01 14:35:52 --> [执行的SQL语句]##############select * from admin_user where uuid='120340234' and enable='Y'
DEBUG - 2016-07-01 14:35:52 --> Total execution time: 0.0850
DEBUG - 2016-07-01 14:35:52 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('7609454d8976bf23c810718fb315406e7801717e', '114.91.132.3', 1467354952, '__ci_last_regenerate|i:1467354952;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 15:14:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 15:14:41 --> Security Class Initialized
DEBUG - 2016-07-01 15:14:41 --> CRSF cookie Set
DEBUG - 2016-07-01 15:14:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 15:14:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '7609454d8976bf23c810718fb315406e7801717e'
DEBUG - 2016-07-01 15:14:41 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '7609454d8976bf23c810718fb315406e7801717e'
DEBUG - 2016-07-01 15:14:41 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('49a10d51a0d675866abc6625bb32751bd93f6319', '114.91.132.3', 1467357281, '__ci_last_regenerate|i:1467357281;')
DEBUG - 2016-07-01 15:14:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 15:14:41 --> Security Class Initialized
DEBUG - 2016-07-01 15:14:41 --> CRSF cookie Set
DEBUG - 2016-07-01 15:14:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 15:14:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '49a10d51a0d675866abc6625bb32751bd93f6319'
DEBUG - 2016-07-01 15:14:41 --> Total execution time: 0.0700
DEBUG - 2016-07-01 15:14:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467357281
WHERE id = '49a10d51a0d675866abc6625bb32751bd93f6319'
DEBUG - 2016-07-01 18:06:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:06:14 --> No URI present. Default controller set.
DEBUG - 2016-07-01 18:06:14 --> CRSF cookie Set
DEBUG - 2016-07-01 18:06:14 --> Security Class Initialized
DEBUG - 2016-07-01 18:06:14 --> CRSF cookie Set
DEBUG - 2016-07-01 18:06:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:06:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:14 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('c1c5a029cee57b97abe3f685f566eb177885c0ae', '114.91.132.3', 1467367574, '__ci_last_regenerate|i:1467367574;')
DEBUG - 2016-07-01 18:06:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:06:14 --> Security Class Initialized
DEBUG - 2016-07-01 18:06:14 --> CRSF cookie Set
DEBUG - 2016-07-01 18:06:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:06:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:15 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:06:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367575
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:27 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:06:27 --> Security Class Initialized
DEBUG - 2016-07-01 18:06:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:06:27 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:27 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 18:06:27 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 18:06:27 --> 登录返回结果数：0
DEBUG - 2016-07-01 18:06:27 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:06:27 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367587
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:28 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:06:28 --> Security Class Initialized
DEBUG - 2016-07-01 18:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:06:28 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:28 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 18:06:28 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code = ''
OR phone = ''
OR email = ''
 )
DEBUG - 2016-07-01 18:06:28 --> 登录返回结果数：0
DEBUG - 2016-07-01 18:06:28 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:06:28 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367588
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:06:39 --> Security Class Initialized
DEBUG - 2016-07-01 18:06:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:06:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:39 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 18:06:39 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 18:06:39 --> 登录返回结果数：0
DEBUG - 2016-07-01 18:06:39 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:06:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367599
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:06:40 --> Security Class Initialized
DEBUG - 2016-07-01 18:06:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:06:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:40 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 18:06:40 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code = ''
OR phone = ''
OR email = ''
 )
DEBUG - 2016-07-01 18:06:40 --> 登录返回结果数：0
DEBUG - 2016-07-01 18:06:40 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:06:40 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367600
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:06:47 --> Security Class Initialized
DEBUG - 2016-07-01 18:06:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:06:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:47 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 18:06:47 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 18:06:47 --> 登录返回结果数：0
DEBUG - 2016-07-01 18:06:47 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:06:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367607
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:06:59 --> Security Class Initialized
DEBUG - 2016-07-01 18:06:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:06:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:06:59 --> 检查用户密码，新密文:99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566
DEBUG - 2016-07-01 18:06:59 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '99dfc6fc64795f858b4f76c6094e44e2abc8ec0f9878829a93a1f9e6a2242566'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 18:06:59 --> 登录返回结果数：0
DEBUG - 2016-07-01 18:06:59 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:06:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367619
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:07:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:07:01 --> Security Class Initialized
DEBUG - 2016-07-01 18:07:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:07:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:07:01 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 18:07:01 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code = ''
OR phone = ''
OR email = ''
 )
DEBUG - 2016-07-01 18:07:01 --> 登录返回结果数：0
DEBUG - 2016-07-01 18:07:01 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:07:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367621
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:07:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:07:21 --> Security Class Initialized
DEBUG - 2016-07-01 18:07:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:07:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:07:21 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 18:07:21 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 18:07:21 --> 登录返回结果数：1
DEBUG - 2016-07-01 18:07:21 --> 成功登录
DEBUG - 2016-07-01 18:07:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367641, data = '__ci_last_regenerate|i:1467367574;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:07:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:07:21 --> Security Class Initialized
DEBUG - 2016-07-01 18:07:21 --> CRSF cookie Set
DEBUG - 2016-07-01 18:07:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:07:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:07:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2033b66ba0a04c97a00d3104b0d5e0d0', '114.91.132.3', '2016-07-01', '18:07:21', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'c1c5a029cee57b97abe3f685f566eb177885c0ae')
DEBUG - 2016-07-01 18:07:21 --> Total execution time: 0.0624
DEBUG - 2016-07-01 18:07:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367641
WHERE id = 'c1c5a029cee57b97abe3f685f566eb177885c0ae'
DEBUG - 2016-07-01 18:11:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:00 --> No URI present. Default controller set.
DEBUG - 2016-07-01 18:11:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:11:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:11:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:00 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4f2b104479721b69bf84a50e4d2ce296ce5943a5', '114.91.132.3', 1467367860, '__ci_last_regenerate|i:1467367860;')
DEBUG - 2016-07-01 18:11:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:11:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:00 --> Total execution time: 0.0936
DEBUG - 2016-07-01 18:11:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367860
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:08 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 18:11:08 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 18:11:08 --> 登录返回结果数：1
DEBUG - 2016-07-01 18:11:08 --> 成功登录
DEBUG - 2016-07-01 18:11:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367868, data = '__ci_last_regenerate|i:1467367860;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:08 --> No URI present. Default controller set.
DEBUG - 2016-07-01 18:11:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('79ce282cb51243f9a5c0020dae81718c', '114.91.132.3', '2016-07-01', '18:11:08', '120340234', '/admin/', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:11:08 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:11:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367868
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:15 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:15 --> CRSF cookie Set
DEBUG - 2016-07-01 18:11:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ce2509477cb8448393a4cff1ffd53be2', '114.91.132.3', '2016-07-01', '18:11:15', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:11:15 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 18:11:15 --> Total execution time: 0.1560
DEBUG - 2016-07-01 18:11:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367875
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:20 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:20 --> CRSF cookie Set
DEBUG - 2016-07-01 18:11:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:20 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:20 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('99ea81e769444088be23a9cbd40fb838', '114.91.132.3', '2016-07-01', '18:11:20', '120340234', '/admin/guest/edit/K05245', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:11:20 --> 修改客户信息：K05245
DEBUG - 2016-07-01 18:11:20 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05245' 
DEBUG - 2016-07-01 18:11:20 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05245' 
DEBUG - 2016-07-01 18:11:20 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 18:11:20 --> Total execution time: 0.1404
DEBUG - 2016-07-01 18:11:20 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367880
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:30 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c844f17951d34113bdc0d3f760cd668c', '114.91.132.3', '2016-07-01', '18:11:31', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:11:31 --> 保存客户信息
DEBUG - 2016-07-01 18:11:31 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05245', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05245'
DEBUG - 2016-07-01 18:11:31 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 18:11:31 --> Total execution time: 0.1560
DEBUG - 2016-07-01 18:11:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367891
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:33 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:33 --> CRSF cookie Set
DEBUG - 2016-07-01 18:11:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:33 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5dcb94f7afa348e0bdff3fd7a5e9d875', '114.91.132.3', '2016-07-01', '18:11:33', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:11:33 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 18:11:33 --> Total execution time: 0.0936
DEBUG - 2016-07-01 18:11:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367893
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:37 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:37 --> CRSF cookie Set
DEBUG - 2016-07-01 18:11:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3d8fe1a250a64b31acc0c22ba992ac10', '114.91.132.3', '2016-07-01', '18:11:37', '120340234', '/admin/guest/edit/K05246', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:11:37 --> 修改客户信息：K05246
DEBUG - 2016-07-01 18:11:37 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05246' 
DEBUG - 2016-07-01 18:11:37 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05246' 
DEBUG - 2016-07-01 18:11:37 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 18:11:37 --> Total execution time: 0.0936
DEBUG - 2016-07-01 18:11:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367897
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:41 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:41 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:41 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:41 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9a0467cc49f2498c8eaa4fb56d545402', '114.91.132.3', '2016-07-01', '18:11:41', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:11:41 --> 保存客户信息
DEBUG - 2016-07-01 18:11:41 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05246', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05246'
DEBUG - 2016-07-01 18:11:41 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 18:11:41 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:11:41 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367901
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:11:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('eab3327831a84779a18043d612082611', '114.91.132.3', '2016-07-01', '18:11:43', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:11:43 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 18:11:43 --> Total execution time: 0.0936
DEBUG - 2016-07-01 18:11:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367903
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:47 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:47 --> CRSF cookie Set
DEBUG - 2016-07-01 18:11:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:47 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fdf03dce131945289d617c31d4814eea', '114.91.132.3', '2016-07-01', '18:11:47', '120340234', '/admin/guest/edit/K05234', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:11:47 --> 修改客户信息：K05234
DEBUG - 2016-07-01 18:11:47 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05234' 
DEBUG - 2016-07-01 18:11:47 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05234' 
DEBUG - 2016-07-01 18:11:47 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 18:11:47 --> Total execution time: 0.0936
DEBUG - 2016-07-01 18:11:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367907
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('66a29116e8f8440397036ba0b45d7b1b', '114.91.132.3', '2016-07-01', '18:11:51', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:11:51 --> 保存客户信息
DEBUG - 2016-07-01 18:11:51 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05234', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05234'
DEBUG - 2016-07-01 18:11:51 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 18:11:51 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:11:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367911
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:53 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:53 --> CRSF cookie Set
DEBUG - 2016-07-01 18:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6e975036ad954606b99972f43e9aafe9', '114.91.132.3', '2016-07-01', '18:11:53', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:11:53 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 18:11:53 --> Total execution time: 0.0936
DEBUG - 2016-07-01 18:11:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367913
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:56 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:56 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:56 --> CRSF cookie Set
DEBUG - 2016-07-01 18:11:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:56 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:56 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1b150ed295e54acf9e38ab8de67b6381', '114.91.132.3', '2016-07-01', '18:11:56', '120340234', '/admin/guest/edit/K05215', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:11:56 --> 修改客户信息：K05215
DEBUG - 2016-07-01 18:11:56 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05215' 
DEBUG - 2016-07-01 18:11:56 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05215' 
DEBUG - 2016-07-01 18:11:56 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 18:11:56 --> Total execution time: 0.1092
DEBUG - 2016-07-01 18:11:56 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367916
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:59 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:11:59 --> Security Class Initialized
DEBUG - 2016-07-01 18:11:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:11:59 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:11:59 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('001d465a880741b7af518d563a1f4359', '114.91.132.3', '2016-07-01', '18:11:59', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:11:59 --> 保存客户信息
DEBUG - 2016-07-01 18:11:59 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05215', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05215'
DEBUG - 2016-07-01 18:11:59 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 18:11:59 --> Total execution time: 0.0936
DEBUG - 2016-07-01 18:11:59 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367919
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:12:01 --> Security Class Initialized
DEBUG - 2016-07-01 18:12:01 --> CRSF cookie Set
DEBUG - 2016-07-01 18:12:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:12:01 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:01 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a3a77782e5c047368ef6afe6b7f7cc64', '114.91.132.3', '2016-07-01', '18:12:01', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:12:01 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 18:12:01 --> Total execution time: 0.0936
DEBUG - 2016-07-01 18:12:01 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367921
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:12:04 --> Security Class Initialized
DEBUG - 2016-07-01 18:12:04 --> CRSF cookie Set
DEBUG - 2016-07-01 18:12:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:12:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:04 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('bf8173d99f764a9484400e696329f386', '114.91.132.3', '2016-07-01', '18:12:04', '120340234', '/admin/guest/edit/K05212', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:12:04 --> 修改客户信息：K05212
DEBUG - 2016-07-01 18:12:04 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05212' 
DEBUG - 2016-07-01 18:12:04 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05212' 
DEBUG - 2016-07-01 18:12:04 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 18:12:04 --> Total execution time: 0.0936
DEBUG - 2016-07-01 18:12:04 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367924
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:12:07 --> Security Class Initialized
DEBUG - 2016-07-01 18:12:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:12:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0c66336b4d734c61920bba530ff55e35', '114.91.132.3', '2016-07-01', '18:12:07', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:12:07 --> 保存客户信息
DEBUG - 2016-07-01 18:12:07 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05212', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05212'
DEBUG - 2016-07-01 18:12:07 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 18:12:07 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:12:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367927
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:12:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:12:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:12:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:12:08 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:08 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d2d2201c999a45aab195a749deee21ce', '114.91.132.3', '2016-07-01', '18:12:08', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:12:08 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 18:12:08 --> Total execution time: 0.0936
DEBUG - 2016-07-01 18:12:08 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367928
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:12:11 --> Security Class Initialized
DEBUG - 2016-07-01 18:12:11 --> CRSF cookie Set
DEBUG - 2016-07-01 18:12:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:12:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('ff5ca8b7ab2f45b2884a55db93775c1f', '114.91.132.3', '2016-07-01', '18:12:11', '120340234', '/admin/guest/edit/K05279', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:12:11 --> 修改客户信息：K05279
DEBUG - 2016-07-01 18:12:11 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05279' 
DEBUG - 2016-07-01 18:12:11 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05279' 
DEBUG - 2016-07-01 18:12:11 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 18:12:11 --> Total execution time: 0.1248
DEBUG - 2016-07-01 18:12:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367931
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:12:14 --> Security Class Initialized
DEBUG - 2016-07-01 18:12:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:12:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6eb588b57a564c759d074d7354b77d72', '114.91.132.3', '2016-07-01', '18:12:14', '120340234', '/admin/guest/save', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:12:14 --> 保存客户信息
DEBUG - 2016-07-01 18:12:14 --> [执行的SQL语句]##############UPDATE apsos_user SET uuid = 'K05279', enable = 'Y', user_type = 'A', admin_user_id = '120340235'
WHERE uuid = 'K05279'
DEBUG - 2016-07-01 18:12:14 --> {"json_header":{"state":true,"msg":"\u66f4\u65b0\u6210\u529f"},"json_data":[]}
DEBUG - 2016-07-01 18:12:14 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:12:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367934
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:12:18 --> Security Class Initialized
DEBUG - 2016-07-01 18:12:18 --> CRSF cookie Set
DEBUG - 2016-07-01 18:12:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:12:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:12:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a6e262ba2de245bd82bba73e0c322841', '114.91.132.3', '2016-07-01', '18:12:19', '120340234', '/admin/guest', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', '4f2b104479721b69bf84a50e4d2ce296ce5943a5')
DEBUG - 2016-07-01 18:12:19 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 18:12:19 --> Total execution time: 0.1092
DEBUG - 2016-07-01 18:12:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467367939
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:17:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:17:29 --> Security Class Initialized
DEBUG - 2016-07-01 18:17:29 --> CRSF cookie Set
DEBUG - 2016-07-01 18:17:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:17:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:17:29 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '4f2b104479721b69bf84a50e4d2ce296ce5943a5'
DEBUG - 2016-07-01 18:17:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('5cbb7c7027bb4b7390252f7f69f945fd', '114.91.132.3', '2016-07-01', '18:17:29', '120340234', '/admin/order/check', 'Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0', 'd229032277cf9240e9b73d5743ec7f37f0da2193')
DEBUG - 2016-07-01 18:17:29 --> 查询待审核订单
DEBUG - 2016-07-01 18:17:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 18:17:29 --> Total execution time: 0.1716
DEBUG - 2016-07-01 18:17:29 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('d229032277cf9240e9b73d5743ec7f37f0da2193', '114.91.132.3', 1467368249, '__ci_last_regenerate|i:1467368249;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 18:24:40 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:24:40 --> CRSF cookie Set
DEBUG - 2016-07-01 18:24:40 --> Security Class Initialized
DEBUG - 2016-07-01 18:24:40 --> CRSF cookie Set
DEBUG - 2016-07-01 18:24:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:24:40 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:24:40 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 18:24:40 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 18:24:40 --> 登录返回结果数：0
DEBUG - 2016-07-01 18:24:40 --> Total execution time: 0.1460
DEBUG - 2016-07-01 18:24:40 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('4022c5d3b815c37ef50b4d5dbd42c227c5a965b6', '114.91.132.3', 1467368680, '__ci_last_regenerate|i:1467368680;')
DEBUG - 2016-07-01 18:24:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:24:47 --> Security Class Initialized
DEBUG - 2016-07-01 18:24:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:24:47 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:24:47 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 18:24:47 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 18:24:47 --> 登录返回结果数：1
DEBUG - 2016-07-01 18:24:47 --> 成功登录
DEBUG - 2016-07-01 18:24:47 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368687, data = '__ci_last_regenerate|i:1467368680;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:24:47 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:24:47 --> Security Class Initialized
DEBUG - 2016-07-01 18:24:47 --> CRSF cookie Set
DEBUG - 2016-07-01 18:24:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:24:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:24:48 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f17a10244ddc408ead40cdd353a8351a', '114.91.132.3', '2016-07-01', '18:24:48', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6')
DEBUG - 2016-07-01 18:24:48 --> Total execution time: 0.1404
DEBUG - 2016-07-01 18:24:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368688
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:24:51 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:24:51 --> Security Class Initialized
DEBUG - 2016-07-01 18:24:51 --> CRSF cookie Set
DEBUG - 2016-07-01 18:24:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:24:51 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:24:51 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('487643abf78c4f098026e344b8459b4c', '114.91.132.3', '2016-07-01', '18:24:51', '120340234', '/admin/user', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6')
DEBUG - 2016-07-01 18:24:51 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 18:24:51 --> Total execution time: 0.1956
DEBUG - 2016-07-01 18:24:51 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368691
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:25:15 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:25:15 --> Security Class Initialized
DEBUG - 2016-07-01 18:25:15 --> CRSF cookie Set
DEBUG - 2016-07-01 18:25:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:25:15 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:25:15 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1fb1d095ef82430da9c39c599346f70c', '114.91.132.3', '2016-07-01', '18:25:15', '120340234', '/admin/guest', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6')
DEBUG - 2016-07-01 18:25:15 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 18:25:15 --> Total execution time: 0.2268
DEBUG - 2016-07-01 18:25:15 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368715
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:25:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:25:17 --> Security Class Initialized
DEBUG - 2016-07-01 18:25:17 --> CRSF cookie Set
DEBUG - 2016-07-01 18:25:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:25:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:25:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('837c409ee4af497bb878454a63b595f3', '114.91.132.3', '2016-07-01', '18:25:17', '120340234', '/admin/guest/edit/K05033', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6')
DEBUG - 2016-07-01 18:25:17 --> 修改客户信息：K05033
DEBUG - 2016-07-01 18:25:17 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05033' 
DEBUG - 2016-07-01 18:25:17 --> [执行的SQL语句]##############
        Select  a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*
          from t_guest a , apsos_user b where a.code = b.uuid  and a.code= 'K05033' 
DEBUG - 2016-07-01 18:25:17 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 18:25:17 --> Total execution time: 0.1856
DEBUG - 2016-07-01 18:25:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368717
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:25:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:25:30 --> Security Class Initialized
DEBUG - 2016-07-01 18:25:30 --> CRSF cookie Set
DEBUG - 2016-07-01 18:25:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:25:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:25:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a6c976945b99483c96d1809a78e3706c', '114.91.132.3', '2016-07-01', '18:25:30', '120340234', '/admin/guest', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6')
DEBUG - 2016-07-01 18:25:30 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 18:25:30 --> Total execution time: 0.1236
DEBUG - 2016-07-01 18:25:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368730
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:26:11 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:26:11 --> Security Class Initialized
DEBUG - 2016-07-01 18:26:11 --> CRSF cookie Set
DEBUG - 2016-07-01 18:26:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:26:11 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:26:11 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('8e42ed4dd6b7404980c9c845a555d356', '114.91.132.3', '2016-07-01', '18:26:11', '120340234', '/admin/account/changeProfile', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6')
DEBUG - 2016-07-01 18:26:11 --> [执行的SQL语句]##############select * from admin_user where uuid='120340234' and enable='Y'
DEBUG - 2016-07-01 18:26:11 --> Total execution time: 0.2580
DEBUG - 2016-07-01 18:26:11 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368771
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:27:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:27:19 --> Security Class Initialized
DEBUG - 2016-07-01 18:27:19 --> CRSF cookie Set
DEBUG - 2016-07-01 18:27:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:27:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:27:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368839, data = '__ci_last_regenerate|i:1467368680;'
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:27:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:27:19 --> Security Class Initialized
DEBUG - 2016-07-01 18:27:19 --> CRSF cookie Set
DEBUG - 2016-07-01 18:27:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:27:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:27:19 --> Total execution time: 0.0868
DEBUG - 2016-07-01 18:27:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368839
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:27:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:27:32 --> Security Class Initialized
DEBUG - 2016-07-01 18:27:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:27:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:27:33 --> 检查用户密码，新密文:c07cd18394ca7f70b23906c52103b752e578a653e07a9d49e88b72c3a2fd9157
DEBUG - 2016-07-01 18:27:33 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c07cd18394ca7f70b23906c52103b752e578a653e07a9d49e88b72c3a2fd9157'
AND   (
login_code = 'ABC'
OR phone = 'ABC'
OR email = 'ABC'
 )
DEBUG - 2016-07-01 18:27:33 --> 登录返回结果数：0
DEBUG - 2016-07-01 18:27:33 --> Total execution time: 0.1224
DEBUG - 2016-07-01 18:27:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368853
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:27:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:27:54 --> Security Class Initialized
DEBUG - 2016-07-01 18:27:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:27:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:27:54 --> 检查用户密码，新密文:4a2292e22e49ab28650d3db9dc85ca5b2158a2a962755f44ecbdb4cd286df9bc
DEBUG - 2016-07-01 18:27:54 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = '4a2292e22e49ab28650d3db9dc85ca5b2158a2a962755f44ecbdb4cd286df9bc'
AND   (
login_code = 'ABC'
OR phone = 'ABC'
OR email = 'ABC'
 )
DEBUG - 2016-07-01 18:27:54 --> 登录返回结果数：0
DEBUG - 2016-07-01 18:27:54 --> Total execution time: 0.1100
DEBUG - 2016-07-01 18:27:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368874
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:28:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:28:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:28:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:28:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:28:50 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 18:28:50 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'ABC'
OR phone = 'ABC'
OR email = 'ABC'
 )
DEBUG - 2016-07-01 18:28:50 --> 登录返回结果数：0
DEBUG - 2016-07-01 18:28:50 --> Total execution time: 0.1100
DEBUG - 2016-07-01 18:28:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368930
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:28:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:28:54 --> Security Class Initialized
DEBUG - 2016-07-01 18:28:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:28:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:28:54 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 18:28:54 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 18:28:54 --> 登录返回结果数：1
DEBUG - 2016-07-01 18:28:54 --> 成功登录
DEBUG - 2016-07-01 18:28:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368934, data = '__ci_last_regenerate|i:1467368680;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:28:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:28:54 --> Security Class Initialized
DEBUG - 2016-07-01 18:28:54 --> CRSF cookie Set
DEBUG - 2016-07-01 18:28:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:28:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:28:54 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a36148110918477188ce94e29b6d6977', '114.91.132.3', '2016-07-01', '18:28:54', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6')
DEBUG - 2016-07-01 18:28:54 --> Total execution time: 0.0756
DEBUG - 2016-07-01 18:28:54 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368934
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:29:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:29:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:29:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368940, data = '__ci_last_regenerate|i:1467368680;'
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:29:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:29:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:29:00 --> Total execution time: 0.1212
DEBUG - 2016-07-01 18:29:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368940
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:29:04 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:04 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:29:04 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:29:04 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 18:29:04 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'wnj'
OR phone = 'wnj'
OR email = 'wnj'
 )
DEBUG - 2016-07-01 18:29:05 --> 登录返回结果数：1
DEBUG - 2016-07-01 18:29:05 --> 成功登录
DEBUG - 2016-07-01 18:29:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368945, data = '__ci_last_regenerate|i:1467368680;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:29:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:05 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:05 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:29:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:29:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('be2c254404884080928c0cf1a12ff5e3', '114.91.132.3', '2016-07-01', '18:29:05', '120340235', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6')
DEBUG - 2016-07-01 18:29:05 --> Total execution time: 0.1080
DEBUG - 2016-07-01 18:29:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368945
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:29:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:09 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:09 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:29:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:29:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('0ca046bf128f4190ac9f6e451155ba23', '114.91.132.3', '2016-07-01', '18:29:09', '120340235', '/admin/account/changeProfile', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6')
DEBUG - 2016-07-01 18:29:09 --> [执行的SQL语句]##############select * from admin_user where uuid='120340235' and enable='Y'
DEBUG - 2016-07-01 18:29:10 --> Total execution time: 1.0168
DEBUG - 2016-07-01 18:29:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368950
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:29:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:42 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:42 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:29:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:29:42 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = '4022c5d3b815c37ef50b4d5dbd42c227c5a965b6'
DEBUG - 2016-07-01 18:29:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9ea32caadef24059a94edd89b6a951c3', '114.91.132.3', '2016-07-01', '18:29:42', '120340235', '/admin/user', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:29:42 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 18:29:42 --> Total execution time: 0.1856
DEBUG - 2016-07-01 18:29:43 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('bfaa16c60b887ac4b29ed42a0df2d125c7100602', '114.91.132.3', 1467368983, '__ci_last_regenerate|i:1467368982;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340235";s:10:"login_code";s:3:"wnj";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13636472641";s:5:"email";s:17:"3249203412@qq.com";s:2:"qq";s:10:"3249203412";s:9:"user_name";s:6:"���˾�";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 18:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:49 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:29:49 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:29:49 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('060bd1dd927a4b3991fbd2024ddc053d', '114.91.132.3', '2016-07-01', '18:29:49', '120340235', '/admin/order/check', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:29:49 --> 查询待审核订单
DEBUG - 2016-07-01 18:29:49 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 18:29:49 --> Total execution time: 0.2992
DEBUG - 2016-07-01 18:29:49 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368989
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:49 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:49 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:49 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:49 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:49 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:49 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:49 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:49 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:49 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:49 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:49 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:49 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:49 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:49 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:49 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:29:49 --> Security Class Initialized
ERROR - 2016-07-01 18:29:49 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:49 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:49 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:49 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:49 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:49 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:49 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:49 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:54 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:54 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:54 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:29:54 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:29:55 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('93578dbc21754ee79cc496418cc01c5c', '114.91.132.3', '2016-07-01', '18:29:55', '120340235', '/admin/order/check', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:29:55 --> 查询待审核订单
DEBUG - 2016-07-01 18:29:55 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 18:29:55 --> Total execution time: 0.2570
DEBUG - 2016-07-01 18:29:55 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368995
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:55 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:55 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:55 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:29:55 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:29:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:29:58 --> Security Class Initialized
DEBUG - 2016-07-01 18:29:58 --> CRSF cookie Set
DEBUG - 2016-07-01 18:29:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:29:58 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:29:58 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('94be0f621a794dfa9e75f328eca14238', '114.91.132.3', '2016-07-01', '18:29:58', '120340235', '/admin/user', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:29:58 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 18:29:58 --> Total execution time: 0.1256
DEBUG - 2016-07-01 18:29:58 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467368998
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:30:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('78434a6c62e24ee798a0c0e44da26a92', '114.91.132.3', '2016-07-01', '18:30:00', '120340235', '/admin/order/check', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:30:00 --> 查询待审核订单
DEBUG - 2016-07-01 18:30:00 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 18:30:00 --> Total execution time: 0.1356
DEBUG - 2016-07-01 18:30:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369000
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:00 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:00 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:00 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:00 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:00 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:00 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:00 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:01 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:01 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:01 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:01 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:01 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:01 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:01 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:01 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:01 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:01 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:01 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:01 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:01 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:01 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:01 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:01 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:01 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:01 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:01 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:01 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:01 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:01 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:02 --> No URI present. Default controller set.
DEBUG - 2016-07-01 18:30:02 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:02 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:30:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1748dfbc05924a78aa3aaf366fe1fdd7', '114.91.132.3', '2016-07-01', '18:30:03', '120340235', '/admin/', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:30:03 --> Total execution time: 0.0956
DEBUG - 2016-07-01 18:30:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369003
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:05 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:05 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:30:05 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:05 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('01ce1eefd5a8481a8703deede188f7be', '114.91.132.3', '2016-07-01', '18:30:05', '120340235', '/admin/guest', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:30:05 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 18:30:05 --> Total execution time: 0.1056
DEBUG - 2016-07-01 18:30:05 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369005
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:07 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:07 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:30:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d2dd681cef134182bed6cdd3316eb414', '114.91.132.3', '2016-07-01', '18:30:07', '120340235', '/admin/order/check', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:30:07 --> 查询待审核订单
DEBUG - 2016-07-01 18:30:07 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 18:30:07 --> Total execution time: 0.1212
DEBUG - 2016-07-01 18:30:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369007
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:07 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:07 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:07 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:08 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:08 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:08 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:08 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:08 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:08 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:08 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:08 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:08 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:08 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:08 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:08 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:08 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:08 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:08 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:08 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:09 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:09 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:30:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b262900ffad04aa9923597345b371c04', '114.91.132.3', '2016-07-01', '18:30:09', '120340235', '/admin/guest', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:30:09 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 18:30:09 --> Total execution time: 0.1142
DEBUG - 2016-07-01 18:30:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369009
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:30:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d8a0fed0d8a741dfaf188c5a0e312640', '114.91.132.3', '2016-07-01', '18:30:12', '120340235', '/admin/order/traffic', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:30:12 --> 查询待发货订单
DEBUG - 2016-07-01 18:30:12 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 18:30:12 --> Total execution time: 0.2892
DEBUG - 2016-07-01 18:30:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369012
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:21 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:21 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:30:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('368a8a97c383487e8f8a9304314fb68c', '114.91.132.3', '2016-07-01', '18:30:21', '120340235', '/admin/order/traffic', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:30:21 --> 查询待发货订单
DEBUG - 2016-07-01 18:30:21 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 18:30:21 --> Total execution time: 0.1400
DEBUG - 2016-07-01 18:30:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369021
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:49 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:49 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:49 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:30:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('05a3aaf9b10a40cf9c88c64ec0894469', '114.91.132.3', '2016-07-01', '18:30:50', '120340235', '/admin/order/check', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:30:50 --> 查询待审核订单
DEBUG - 2016-07-01 18:30:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 18:30:50 --> Total execution time: 0.1370
DEBUG - 2016-07-01 18:30:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369050
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:30:50 --> Security Class Initialized
DEBUG - 2016-07-01 18:30:50 --> CRSF cookie Set
DEBUG - 2016-07-01 18:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:30:50 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:32 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:32 --> No URI present. Default controller set.
DEBUG - 2016-07-01 18:31:32 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:32 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:32 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:31:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '932f04edc2d6a12b01af479a93ae8eccee9f7a97'
DEBUG - 2016-07-01 18:31:32 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('932f04edc2d6a12b01af479a93ae8eccee9f7a97', '114.91.132.3', 1467369092, '__ci_last_regenerate|i:1467369092;')
DEBUG - 2016-07-01 18:31:33 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:33 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:33 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:31:33 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '932f04edc2d6a12b01af479a93ae8eccee9f7a97'
DEBUG - 2016-07-01 18:31:33 --> Total execution time: 0.0820
DEBUG - 2016-07-01 18:31:33 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369093
WHERE id = '932f04edc2d6a12b01af479a93ae8eccee9f7a97'
DEBUG - 2016-07-01 18:31:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:31:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:31:43 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 18:31:43 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 18:31:43 --> 登录返回结果数：1
DEBUG - 2016-07-01 18:31:43 --> 成功登录
DEBUG - 2016-07-01 18:31:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369103, data = '__ci_last_regenerate|i:1467368982;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:31:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:44 --> No URI present. Default controller set.
DEBUG - 2016-07-01 18:31:44 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:44 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:31:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '932f04edc2d6a12b01af479a93ae8eccee9f7a97'
DEBUG - 2016-07-01 18:31:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369104
WHERE id = '932f04edc2d6a12b01af479a93ae8eccee9f7a97'
DEBUG - 2016-07-01 18:31:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:44 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:44 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:31:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '932f04edc2d6a12b01af479a93ae8eccee9f7a97'
DEBUG - 2016-07-01 18:31:44 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:31:44 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369104
WHERE id = '932f04edc2d6a12b01af479a93ae8eccee9f7a97'
DEBUG - 2016-07-01 18:31:52 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:52 --> No URI present. Default controller set.
DEBUG - 2016-07-01 18:31:52 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:52 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:31:52 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:31:52 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('1c8b961b2d67437d864bb9d2b45eb66d', '114.91.132.3', '2016-07-01', '18:31:52', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:31:52 --> Total execution time: 0.1160
DEBUG - 2016-07-01 18:31:52 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369112
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:31:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:57 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:57 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:31:57 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:31:57 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c71807955ec848ae8de57b6dd087ed4e', '114.91.132.3', '2016-07-01', '18:31:57', '120340234', '/admin/order/requirement', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:31:57 --> 查询需求订单
DEBUG - 2016-07-01 18:31:57 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-01 18:31:57 --> Total execution time: 0.2080
DEBUG - 2016-07-01 18:31:57 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369117
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:31:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:57 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:57 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:57 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:57 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:57 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:57 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:57 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:57 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:57 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:57 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:57 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:57 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:57 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:57 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:57 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:57 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:57 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:57 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:57 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:57 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:57 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:57 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:57 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:57 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:57 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:58 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:58 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:58 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:58 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:58 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:58 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:58 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:58 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:58 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:58 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:58 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:58 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:58 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:58 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:58 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:58 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:58 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:58 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:58 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:58 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:58 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:58 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:58 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:58 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:31:58 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:31:58 --> Security Class Initialized
DEBUG - 2016-07-01 18:31:58 --> CRSF cookie Set
DEBUG - 2016-07-01 18:31:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:31:58 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:00 --> No URI present. Default controller set.
DEBUG - 2016-07-01 18:32:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:32:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:32:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('71b182fa530844f8b1832cca2602c062', '114.91.132.3', '2016-07-01', '18:32:00', '120340234', '/admin/', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:32:00 --> Total execution time: 0.1050
DEBUG - 2016-07-01 18:32:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369120
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:32:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:02 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:02 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:32:02 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:32:02 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('75882ef564f5406ba9aee7fd10f7209e', '114.91.132.3', '2016-07-01', '18:32:02', '120340234', '/admin/order/index', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:32:02 --> 查询订单
DEBUG - 2016-07-01 18:32:02 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-01 18:32:02 --> Total execution time: 0.2430
DEBUG - 2016-07-01 18:32:02 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369122
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:32:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:02 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:02 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:02 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:02 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:02 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:02 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:02 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:02 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:02 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:02 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:02 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:02 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:02 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:02 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:02 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:02 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:02 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:02 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:02 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:02 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:02 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:02 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:03 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:03 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:03 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:03 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:03 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:03 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:03 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:03 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:03 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:03 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:03 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:03 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:03 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:03 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:03 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:03 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:03 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:03 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:03 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:03 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:03 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:03 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:03 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:03 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:03 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:03 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:03 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:03 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:03 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:03 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:42 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:42 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:32:42 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:32:42 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('70474b53a4b94c84a8bfc5115c32997e', '114.91.132.3', '2016-07-01', '18:32:42', '120340234', '/admin/order/index', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:32:42 --> 查询订单
DEBUG - 2016-07-01 18:32:42 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-01 18:32:42 --> Total execution time: 0.3120
DEBUG - 2016-07-01 18:32:42 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369162
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:32:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:42 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:42 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:42 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:43 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:43 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:43 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:32:43 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:32:48 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:48 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:48 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:32:48 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:32:48 --> 检查用户密码，新密文:e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
DEBUG - 2016-07-01 18:32:48 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'
AND   (
login_code IS NULL
OR phone IS NULL
OR email IS NULL
 )
DEBUG - 2016-07-01 18:32:48 --> 登录返回结果数：0
DEBUG - 2016-07-01 18:32:48 --> Total execution time: 0.0990
DEBUG - 2016-07-01 18:32:48 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369168, data = '__ci_last_regenerate|i:1467368982;'
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:32:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:53 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:32:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:32:53 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 18:32:53 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 18:32:53 --> 登录返回结果数：1
DEBUG - 2016-07-01 18:32:53 --> 成功登录
DEBUG - 2016-07-01 18:32:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369173, data = '__ci_last_regenerate|i:1467368982;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:32:53 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:32:53 --> Security Class Initialized
DEBUG - 2016-07-01 18:32:53 --> CRSF cookie Set
DEBUG - 2016-07-01 18:32:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:32:53 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:32:53 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('113d5622255b4a01be5e815b8837334d', '114.91.132.3', '2016-07-01', '18:32:53', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:32:53 --> Total execution time: 0.1092
DEBUG - 2016-07-01 18:32:53 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369173
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:33:00 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:00 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:00 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:33:00 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:33:00 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f2dc832a58fa47008d33bbd1387e8d79', '114.91.132.3', '2016-07-01', '18:33:00', '120340234', '/admin/backhome', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:33:00 --> Total execution time: 0.1220
DEBUG - 2016-07-01 18:33:00 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369180
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:33:07 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:07 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:07 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:33:07 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:33:07 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('665cf39cbc494781807466ab2ecfbe26', '114.91.132.3', '2016-07-01', '18:33:07', '120340234', '/admin/user', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:33:07 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 18:33:07 --> Total execution time: 0.1260
DEBUG - 2016-07-01 18:33:07 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369187
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:33:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:33:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2f05f888473849c0a33e61ac5549f795', '114.91.132.3', '2016-07-01', '18:33:12', '120340234', '/admin/order/check', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:33:12 --> 查询待审核订单
DEBUG - 2016-07-01 18:33:12 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 18:33:12 --> Total execution time: 0.1356
DEBUG - 2016-07-01 18:33:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369192
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:12 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:12 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-07-01 18:33:12 --> 404 Page Not Found: Order/assets
DEBUG - 2016-07-01 18:33:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:14 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:14 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:33:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:33:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('e1f0a32dfb66437f95f081519fee878a', '114.91.132.3', '2016-07-01', '18:33:14', '120340234', '/admin/user', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:33:14 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 18:33:14 --> Total execution time: 0.1212
DEBUG - 2016-07-01 18:33:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369194
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:33:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:17 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:17 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:33:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:33:17 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b00a8127eb7f41caad2f38ddba974e59', '114.91.132.3', '2016-07-01', '18:33:17', '120340234', '/admin/guest', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)', 'bfaa16c60b887ac4b29ed42a0df2d125c7100602')
DEBUG - 2016-07-01 18:33:17 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 18:33:17 --> Total execution time: 0.2036
DEBUG - 2016-07-01 18:33:17 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369197
WHERE id = 'bfaa16c60b887ac4b29ed42a0df2d125c7100602'
DEBUG - 2016-07-01 18:33:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:22 --> No URI present. Default controller set.
DEBUG - 2016-07-01 18:33:22 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:22 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:22 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:33:22 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '595588b27982f8de9a14ee37de4e4f3a5a0c327b'
DEBUG - 2016-07-01 18:33:22 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('595588b27982f8de9a14ee37de4e4f3a5a0c327b', '182.140.230.12', 1467369202, '__ci_last_regenerate|i:1467369202;')
DEBUG - 2016-07-01 18:33:22 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:22 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:22 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:22 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:33:23 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '1d2ba88db1417b80fefe80c9a69d5f57c6c02f6d'
DEBUG - 2016-07-01 18:33:23 --> Total execution time: 0.0780
DEBUG - 2016-07-01 18:33:23 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('1d2ba88db1417b80fefe80c9a69d5f57c6c02f6d', '182.140.230.12', 1467369203, '__ci_last_regenerate|i:1467369203;')
DEBUG - 2016-07-01 18:33:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:35 --> No URI present. Default controller set.
DEBUG - 2016-07-01 18:33:35 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:35 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:35 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:33:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '597dccf1f6531c4fb65ffbcc2b1be359a2ee65d9'
DEBUG - 2016-07-01 18:33:35 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('597dccf1f6531c4fb65ffbcc2b1be359a2ee65d9', '101.199.108.118', 1467369215, '__ci_last_regenerate|i:1467369215;')
DEBUG - 2016-07-01 18:33:35 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 18:33:35 --> Security Class Initialized
DEBUG - 2016-07-01 18:33:35 --> CRSF cookie Set
DEBUG - 2016-07-01 18:33:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 18:33:35 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '597dccf1f6531c4fb65ffbcc2b1be359a2ee65d9'
DEBUG - 2016-07-01 18:33:35 --> Total execution time: 0.0936
DEBUG - 2016-07-01 18:33:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467369215
WHERE id = '597dccf1f6531c4fb65ffbcc2b1be359a2ee65d9'
DEBUG - 2016-07-01 22:48:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:48:17 --> CRSF cookie Set
DEBUG - 2016-07-01 22:48:17 --> Security Class Initialized
DEBUG - 2016-07-01 22:48:17 --> CRSF cookie Set
DEBUG - 2016-07-01 22:48:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:48:17 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:48:17 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('aa9a6924b8e3337a51f14b9d4365d0aeda111c7c', '114.111.166.13', 1467384497, '__ci_last_regenerate|i:1467384497;')
DEBUG - 2016-07-01 22:48:17 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:48:18 --> Security Class Initialized
DEBUG - 2016-07-01 22:48:18 --> CRSF cookie Set
DEBUG - 2016-07-01 22:48:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:48:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:48:18 --> Total execution time: 0.7176
DEBUG - 2016-07-01 22:48:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384498
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:49:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:49:18 --> Security Class Initialized
DEBUG - 2016-07-01 22:49:18 --> CRSF cookie Set
DEBUG - 2016-07-01 22:49:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:49:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:49:18 --> Total execution time: 0.2028
DEBUG - 2016-07-01 22:49:18 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384558
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:49:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:49:30 --> Security Class Initialized
DEBUG - 2016-07-01 22:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:49:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:49:30 --> 检查用户密码，新密文:c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd
DEBUG - 2016-07-01 22:49:30 --> [执行的SQL语句]##############SELECT *
FROM admin_user
WHERE enable = 'Y'
AND login_pwd = 'c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd'
AND   (
login_code = 'bwh'
OR phone = 'bwh'
OR email = 'bwh'
 )
DEBUG - 2016-07-01 22:49:30 --> 登录返回结果数：1
DEBUG - 2016-07-01 22:49:30 --> 成功登录
DEBUG - 2016-07-01 22:49:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384570, data = '__ci_last_regenerate|i:1467384497;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}'
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:49:30 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:49:30 --> Security Class Initialized
DEBUG - 2016-07-01 22:49:30 --> CRSF cookie Set
DEBUG - 2016-07-01 22:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:49:30 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:49:30 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('fda226814001461fa5555daaea3f36f0', '114.111.166.13', '2016-07-01', '22:49:30', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:49:30 --> 查询待发货订单
DEBUG - 2016-07-01 22:49:30 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 22:49:30 --> Total execution time: 0.2184
DEBUG - 2016-07-01 22:49:30 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384570
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:49:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:49:39 --> Security Class Initialized
DEBUG - 2016-07-01 22:49:39 --> CRSF cookie Set
DEBUG - 2016-07-01 22:49:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:49:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:49:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d8be12ddcc3a402cbbc66cf5d4b8da11', '114.111.166.13', '2016-07-01', '22:49:39', '120340234', '/admin/order/check', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:49:39 --> 查询待审核订单
DEBUG - 2016-07-01 22:49:39 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 22:49:39 --> Total execution time: 0.1404
DEBUG - 2016-07-01 22:49:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384579
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:50:09 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:50:09 --> Security Class Initialized
DEBUG - 2016-07-01 22:50:09 --> CRSF cookie Set
DEBUG - 2016-07-01 22:50:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:50:09 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:50:09 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('c3d47d74dbe54a45a1c22a385d032022', '114.111.166.13', '2016-07-01', '22:50:09', '120340234', '/admin/order/index', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:50:09 --> 查询订单
DEBUG - 2016-07-01 22:50:09 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-01 22:50:09 --> Total execution time: 0.1092
DEBUG - 2016-07-01 22:50:09 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384609
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:50:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:50:31 --> Security Class Initialized
DEBUG - 2016-07-01 22:50:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:50:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:50:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('277078e048c34b53a21b04388fb716c6', '114.111.166.13', '2016-07-01', '22:50:31', '120340234', '/admin/order/index', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:50:31 --> 查询订单
DEBUG - 2016-07-01 22:50:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-01 22:50:31 --> Total execution time: 0.1092
DEBUG - 2016-07-01 22:50:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384631
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:51:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:51:29 --> Security Class Initialized
DEBUG - 2016-07-01 22:51:29 --> CRSF cookie Set
DEBUG - 2016-07-01 22:51:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:51:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:51:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2e808a69878d42ad882f8ffa517976a6', '114.111.166.13', '2016-07-01', '22:51:29', '120340234', '/admin/order/index', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:51:29 --> 查询订单
DEBUG - 2016-07-01 22:51:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-01 22:51:29 --> Total execution time: 0.0956
DEBUG - 2016-07-01 22:51:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384689
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:51:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:51:31 --> Security Class Initialized
DEBUG - 2016-07-01 22:51:31 --> CRSF cookie Set
DEBUG - 2016-07-01 22:51:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:51:31 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:51:31 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('eacd29b77c974fc89f400c31d67bb05d', '114.111.166.13', '2016-07-01', '22:51:31', '120340234', '/admin/order/check', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:51:31 --> 查询待审核订单
DEBUG - 2016-07-01 22:51:31 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 22:51:31 --> Total execution time: 0.0936
DEBUG - 2016-07-01 22:51:31 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384691
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:51:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:51:37 --> Security Class Initialized
DEBUG - 2016-07-01 22:51:37 --> CRSF cookie Set
DEBUG - 2016-07-01 22:51:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:51:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:51:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4102285eb22b4741a90706159efa98fc', '114.111.166.13', '2016-07-01', '22:51:37', '120340234', '/admin/user', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:51:37 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 22:51:37 --> Total execution time: 0.1248
DEBUG - 2016-07-01 22:51:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384697
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:03 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:52:03 --> Security Class Initialized
DEBUG - 2016-07-01 22:52:03 --> CRSF cookie Set
DEBUG - 2016-07-01 22:52:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:52:03 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:03 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('220435a300f146ae96267b1522e7d8c6', '114.111.166.13', '2016-07-01', '22:52:03', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:52:03 --> 查询待发货订单
DEBUG - 2016-07-01 22:52:03 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 22:52:03 --> Total execution time: 0.0936
DEBUG - 2016-07-01 22:52:03 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384723
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:12 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:52:12 --> Security Class Initialized
DEBUG - 2016-07-01 22:52:12 --> CRSF cookie Set
DEBUG - 2016-07-01 22:52:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:52:12 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:12 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('2cec001ddb894cc1a909a4405a80a3db', '114.111.166.13', '2016-07-01', '22:52:12', '120340234', '/admin/user', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:52:12 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 22:52:12 --> Total execution time: 0.0780
DEBUG - 2016-07-01 22:52:12 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384732
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:14 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:52:14 --> Security Class Initialized
DEBUG - 2016-07-01 22:52:14 --> CRSF cookie Set
DEBUG - 2016-07-01 22:52:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:52:14 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:14 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('94586dc4204f40dc94c8f45c276c98b2', '114.111.166.13', '2016-07-01', '22:52:14', '120340234', '/admin/order/check', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:52:14 --> 查询待审核订单
DEBUG - 2016-07-01 22:52:14 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 22:52:14 --> Total execution time: 0.0780
DEBUG - 2016-07-01 22:52:14 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384734
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:16 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:52:16 --> Security Class Initialized
DEBUG - 2016-07-01 22:52:16 --> CRSF cookie Set
DEBUG - 2016-07-01 22:52:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:52:16 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:16 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('144317a19f824b9882a675d51e82cec4', '114.111.166.13', '2016-07-01', '22:52:16', '120340234', '/admin/order/traffic', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:52:16 --> 查询待发货订单
DEBUG - 2016-07-01 22:52:16 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='2'  order by create_date_time asc
DEBUG - 2016-07-01 22:52:16 --> Total execution time: 0.0936
DEBUG - 2016-07-01 22:52:16 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384736
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:18 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:52:18 --> Security Class Initialized
DEBUG - 2016-07-01 22:52:18 --> CRSF cookie Set
DEBUG - 2016-07-01 22:52:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:52:18 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:18 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6230f98493574dba8551b8b2467f7d4a', '114.111.166.13', '2016-07-01', '22:52:18', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:52:18 --> 查询需求订单
DEBUG - 2016-07-01 22:52:18 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-01 22:52:19 --> Total execution time: 0.2028
DEBUG - 2016-07-01 22:52:19 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384739
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:21 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:52:21 --> Security Class Initialized
DEBUG - 2016-07-01 22:52:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:52:21 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:21 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('31463fd68a514b84a6d20cac5dedacfb', '114.111.166.13', '2016-07-01', '22:52:21', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:52:21 --> 查询需求订单
DEBUG - 2016-07-01 22:52:21 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-01 22:52:21 --> Total execution time: 0.1092
DEBUG - 2016-07-01 22:52:21 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384741
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:31 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:52:31 --> Security Class Initialized
DEBUG - 2016-07-01 22:52:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:52:32 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:32 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('de8314b6bdc9465bb430b0c0d6bfab9b', '114.111.166.13', '2016-07-01', '22:52:32', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:52:32 --> 查询需求订单
DEBUG - 2016-07-01 22:52:32 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-07-01 00:00:00' 
ERROR - 2016-07-01 22:52:32 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-01 22:52:32 --> Query error: [Microsoft][ODBC SQL Server Driver][SQL Server]�ڹؼ��� 'and' �������﷨���� - Invalid query: select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-07-01 00:00:00' 
ERROR - 2016-07-01 22:52:32 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Order_model.php 85
DEBUG - 2016-07-01 22:52:32 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384752
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:37 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:52:37 --> Security Class Initialized
DEBUG - 2016-07-01 22:52:37 --> CRSF cookie Set
DEBUG - 2016-07-01 22:52:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:52:37 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:37 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('9656508cd6bc44fe9e9e184691bf6600', '114.111.166.13', '2016-07-01', '22:52:37', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:52:37 --> 查询需求订单
DEBUG - 2016-07-01 22:52:37 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-01 22:52:37 --> Total execution time: 0.0936
DEBUG - 2016-07-01 22:52:37 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384757
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:42 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:52:42 --> Security Class Initialized
DEBUG - 2016-07-01 22:52:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:52:43 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:43 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('a2efbeee6e424460bbfcfd09791d22f1', '114.111.166.13', '2016-07-01', '22:52:43', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:52:43 --> 查询需求订单
DEBUG - 2016-07-01 22:52:43 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-06-24 00:00:00' and create_date_time<'2016-07-01 23:59:59' 
ERROR - 2016-07-01 22:52:43 --> Severity: Warning --> odbc_exec():  D:\xampp\htdocs\system\database\drivers\odbc\odbc_driver.php 139
ERROR - 2016-07-01 22:52:43 --> Query error: [Microsoft][ODBC SQL Server Driver][SQL Server]�ڹؼ��� 'and' �������﷨���� - Invalid query: select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 and create_date_time>'2016-06-24 00:00:00' and create_date_time<'2016-07-01 23:59:59' 
ERROR - 2016-07-01 22:52:43 --> Severity: Error --> Call to a member function result_array() on a non-object D:\xampp\htdocs\admin\models\Order_model.php 85
DEBUG - 2016-07-01 22:52:43 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384763
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:44 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:52:44 --> Security Class Initialized
DEBUG - 2016-07-01 22:52:44 --> CRSF cookie Set
DEBUG - 2016-07-01 22:52:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:52:44 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:52:45 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('3ada4d6ba60c4dc4b623c95441e66f2b', '114.111.166.13', '2016-07-01', '22:52:45', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c')
DEBUG - 2016-07-01 22:52:45 --> 查询需求订单
DEBUG - 2016-07-01 22:52:45 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-01 22:52:45 --> Total execution time: 0.1092
DEBUG - 2016-07-01 22:52:45 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384765
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:53:19 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:53:19 --> Security Class Initialized
DEBUG - 2016-07-01 22:53:19 --> CRSF cookie Set
DEBUG - 2016-07-01 22:53:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:53:19 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:53:19 --> [执行的SQL语句]##############DELETE FROM apsos_sessions
WHERE id = 'aa9a6924b8e3337a51f14b9d4365d0aeda111c7c'
DEBUG - 2016-07-01 22:53:19 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('4d6f365d16c64c5b8b6e2b9ee9d857a2', '114.111.166.13', '2016-07-01', '22:53:19', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff')
DEBUG - 2016-07-01 22:53:19 --> 查询需求订单
DEBUG - 2016-07-01 22:53:19 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-01 22:53:19 --> Total execution time: 0.1248
DEBUG - 2016-07-01 22:53:19 --> [执行的SQL语句]##############INSERT INTO apsos_sessions (id, ip_address, timestamp, data) VALUES ('8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff', '114.111.166.13', 1467384799, '__ci_last_regenerate|i:1467384799;admin_user|O:8:"stdClass":16:{s:4:"uuid";s:9:"120340234";s:10:"login_code";s:3:"bwh";s:9:"login_pwd";s:64:"c1437b3992fd172ca55a676e5d6e44593e48ba1784d6597561fdc3a7c9ba78bd";s:5:"phone";s:11:"13774388214";s:5:"email";s:16:"whilewon@163.com";s:2:"qq";s:9:"736835275";s:9:"user_name";s:6:"�����";s:6:"enable";s:1:"Y";s:8:"add_time";N;s:9:"last_time";N;s:7:"last_ip";N;s:10:"login_type";N;s:9:"user_type";N;s:11:"visit_count";N;s:5:"alias";N;s:8:"group_id";N;}')
DEBUG - 2016-07-01 22:53:25 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:53:25 --> Security Class Initialized
DEBUG - 2016-07-01 22:53:25 --> CRSF cookie Set
DEBUG - 2016-07-01 22:53:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:53:25 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
DEBUG - 2016-07-01 22:53:25 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f603d2c2c7df4838a887730e7799e5a5', '114.111.166.13', '2016-07-01', '22:53:25', '120340234', '/admin/order/requirement', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff')
DEBUG - 2016-07-01 22:53:25 --> 查询需求订单
DEBUG - 2016-07-01 22:53:25 --> [执行的SQL语句]##############select  t1.lno,t2.subattrib01,product_name,product_type1,count(1) as require_num,
        sum(product_num) as total_product_num from
        apsos_requirement_order_detail t1,t_substock t2  where t1.product_id=t2.id
        group by t1.lno,product_name,product_type1,t2.subattrib01 
DEBUG - 2016-07-01 22:53:25 --> Total execution time: 0.0936
DEBUG - 2016-07-01 22:53:25 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384805
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
DEBUG - 2016-07-01 22:53:29 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:53:29 --> Security Class Initialized
DEBUG - 2016-07-01 22:53:29 --> CRSF cookie Set
DEBUG - 2016-07-01 22:53:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:53:29 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
DEBUG - 2016-07-01 22:53:29 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('f829861daa6b4bcbbe9de237e80b486a', '114.111.166.13', '2016-07-01', '22:53:29', '120340234', '/admin/order/check', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff')
DEBUG - 2016-07-01 22:53:29 --> 查询待审核订单
DEBUG - 2016-07-01 22:53:29 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  and order_status='1'  order by create_date_time asc
DEBUG - 2016-07-01 22:53:29 --> Total execution time: 0.1248
DEBUG - 2016-07-01 22:53:29 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384809
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
DEBUG - 2016-07-01 22:53:34 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:53:34 --> Security Class Initialized
DEBUG - 2016-07-01 22:53:34 --> CRSF cookie Set
DEBUG - 2016-07-01 22:53:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:53:34 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
DEBUG - 2016-07-01 22:53:35 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('b56a2e09f7b84ab29c490206e48cb7ed', '114.111.166.13', '2016-07-01', '22:53:35', '120340234', '/admin/user', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff')
DEBUG - 2016-07-01 22:53:35 --> [执行的SQL语句]##############select  * from admin_user where 1=1 
DEBUG - 2016-07-01 22:53:35 --> Total execution time: 0.1092
DEBUG - 2016-07-01 22:53:35 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384815
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
DEBUG - 2016-07-01 22:53:39 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:53:39 --> Security Class Initialized
DEBUG - 2016-07-01 22:53:39 --> CRSF cookie Set
DEBUG - 2016-07-01 22:53:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:53:39 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
DEBUG - 2016-07-01 22:53:39 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('dc75c3b5deae4a6ba1de8b44abca19a1', '114.111.166.13', '2016-07-01', '22:53:39', '120340234', '/admin/guest', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff')
DEBUG - 2016-07-01 22:53:39 --> [执行的SQL语句]##############
        Select top 20 a.code as guest_id, a.name as guest_name,  a.telephone as contract_user_telphone,
         a.contactperson as contract_user_name, a.sex, a.birthday, a.handphonebp as contract_user_phone,
          b.email as contract_user_email, a.qq as contract_user_qq,b.*,(select user_name from admin_user d where d.uuid=b.admin_user_id) as admin_user_name
          from t_guest a left join apsos_user b on a.code = b.uuid where 1=1 order by enable desc
DEBUG - 2016-07-01 22:53:39 --> Total execution time: 0.2184
DEBUG - 2016-07-01 22:53:39 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384819
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
DEBUG - 2016-07-01 22:53:50 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:53:50 --> Security Class Initialized
DEBUG - 2016-07-01 22:53:50 --> CRSF cookie Set
DEBUG - 2016-07-01 22:53:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:53:50 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
DEBUG - 2016-07-01 22:53:50 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('7cc54809eecd4c70a02b08d629a414cf', '114.111.166.13', '2016-07-01', '22:53:50', '120340234', '/admin/order/index', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff')
DEBUG - 2016-07-01 22:53:50 --> 查询订单
DEBUG - 2016-07-01 22:53:50 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-01 22:53:50 --> Total execution time: 0.1092
DEBUG - 2016-07-01 22:53:50 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384830
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
DEBUG - 2016-07-01 22:54:05 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:54:05 --> Security Class Initialized
DEBUG - 2016-07-01 22:54:05 --> CRSF cookie Set
DEBUG - 2016-07-01 22:54:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:54:06 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
DEBUG - 2016-07-01 22:54:06 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('d1f2c1b1f6bb4718b508140cb8658fe2', '114.111.166.13', '2016-07-01', '22:54:06', '120340234', '/admin/order/index', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff')
DEBUG - 2016-07-01 22:54:06 --> 查询订单
DEBUG - 2016-07-01 22:54:06 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-01 22:54:06 --> Total execution time: 0.1248
DEBUG - 2016-07-01 22:54:06 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384846
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
DEBUG - 2016-07-01 22:54:10 --> UTF-8 Support Enabled
DEBUG - 2016-07-01 22:54:10 --> Security Class Initialized
DEBUG - 2016-07-01 22:54:10 --> CRSF cookie Set
DEBUG - 2016-07-01 22:54:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-07-01 22:54:10 --> [执行的SQL语句]##############SELECT data
FROM apsos_sessions
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
DEBUG - 2016-07-01 22:54:10 --> [执行的SQL语句]##############INSERT INTO apsos_accesslog (uuid, ip, ip_date, ip_time, user_id, func_code, terminal_info, session_id) VALUES ('6c647bf022db4937ab5923a202fb4079', '114.111.166.13', '2016-07-01', '22:54:10', '120340234', '/admin/order/index', 'Mozilla/5.0 (Linux; Android 5.0.2; CHE-TL00H Build/HonorCHE-TL00H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36', '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff')
DEBUG - 2016-07-01 22:54:10 --> 查询订单
DEBUG - 2016-07-01 22:54:10 --> [执行的SQL语句]##############select top 20 t.*,t1.company,t1.user_name  from apsos_order t,apsos_user t1 where t.order_status in('1','2','3','8') and t.user_id=t1.uuid  order by create_date_time asc
DEBUG - 2016-07-01 22:54:10 --> Total execution time: 0.0936
DEBUG - 2016-07-01 22:54:10 --> [执行的SQL语句]##############UPDATE apsos_sessions SET timestamp = 1467384850
WHERE id = '8a70531e4bfc2fcf5c83d5cc48cdcf5953a592ff'
