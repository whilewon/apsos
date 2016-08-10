<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-2-27
 * Time: 下午1:58
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-2-27
 * Time: 下午1:58
 */

defined('BASEPATH') OR exit('No direct script access allowed');
$this->session->unset_userdata("curr_user");
$this->session->unset_userdata("curr_guest");
?>

<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?php echo DOMAIN_BASE_URL; ?>assets/css/pintuer.css">
    <link rel="stylesheet" href="<?php echo DOMAIN_BASE_URL; ?>assets/css/pintuerAdmin.css">
    <script src="<?php echo DOMAIN_BASE_URL; ?>assets/js/jquery.js"></script>
    <script src="<?php echo DOMAIN_BASE_URL; ?>assets/js/pintuer.js"></script>

    <link type="image/x-icon" href="<?php echo DOMAIN_BASE_URL; ?>assets/icons/favicon.ico" rel="shortcut icon"/>
    <link href="<?php echo DOMAIN_BASE_URL; ?>assets/icons/favicon.ico" rel="bookmark icon"/>

</head>

<body>
<div class="container">
    <div class="line">
        <div class="xs6 xm4 xs3-move xm4-move">
            <br/>
            <br/>

            <div class="media media-y">
                <img src="<?php echo DOMAIN_BASE_URL; ?>assets/images/40.png" class="radius"/>

                <h1>
                    <?php echo $title; ?>
                </h1>
            </div>
            <br/>
            <br/>

            <form action="<? echo base_url('userlogin/dofindpwd.html'); ?>" method="post">
                <div class="panel">
                    <div class="panel-body" style="padding: 30px;">

                        <div class="form-group ">
                            通过邮箱找回
                            <div class="field field-icon-right">

                                <input type="input" class="input" name="email"
                                       placeholder="邮箱"
                                       data-validate="required:请填写邮箱"/>
                                <span class="icon icon-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-foot text-center">
                        <button class="button button-block bg-main text-big">
                            发送
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
