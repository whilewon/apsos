<?php


define('IN_DILICMS', TRUE);

define('DILICMS_VERSION', 'V2.4.0');

define('DILICMS_SHARE_PATH', BASEPATH . '../shared/');

define('DILICMS_EXTENSION_PATH', BASEPATH . '../extensions/');

defined('DOMAIN_BASE_URL') OR define('DOMAIN_BASE_URL','http://192.168.0.251:9999/'); //http://127.0.0.1/SPSOS 58.34.221.38
defined('DOMAIN_ADMIN_URL') OR define('DOMAIN_ADMIN_URL','http://192.168.0.251:9999/admin/'); //http://127.0.0.1/SPSOS 58.34.221.38
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'production'); //production 如果是开发环境，则书写development

defined('IS_CAPTURE') OR define('IS_CAPTURE',FALSE);

defined('ORDER_STATUS') OR define('ORDER_STATUS','return array("1"=>"提交订单","2"=>"审核通过","3"=>"商品出库","4"=>"等待收货","5"=>"已完成","6"=>"已取消","8"=>"审核不通过");');
defined('ADMIN_DEPT') OR define('ADMIN_DEPT','return array("1"=>"客服部","2"=>"财务部","3"=>"采购部","4"=>"领导办公室");');
switch (ENVIRONMENT)
{
    case 'development':
        error_reporting(-1);
        ini_set('display_errors', 1);
        break;

    case 'testing':
    case 'production':
        ini_set('display_errors', 0);
        if (version_compare(PHP_VERSION, '5.3', '>='))
        {
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
        }
        else
        {
            error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
        }
        break;

    default:
        header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
        echo 'The application environment is not set correctly.';
        exit(1); // EXIT_ERROR
}
