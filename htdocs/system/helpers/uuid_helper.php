<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-3-7
 * Time: 上午5:57
 */

if (!function_exists('com_create_guid')) {

    function com_create_guid()
    {
        //
        return sprintf('%04x%04x%04x%04x%04x%04x%04x%04x',
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff));
    }
}