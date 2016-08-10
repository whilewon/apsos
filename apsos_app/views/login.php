<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-2-27
 * Time: 下午1:58
 */
defined('BASEPATH') OR exit('No direct script access allowed');
$this->session->unset_userdata("curr_user");
$input_uname='';
$input_upwd='';

if(empty($uname)==false){
    $input_uname=$uname;
}
if(empty($upwd)==false){
    $input_upwd=$upwd;
}
?>
<!DOCTYPE html>
<html>
<head>
    <base href="<?php echo DOMAIN_BASE_URL; ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="assets/pintuer/css/pintuer.css">
    <link rel="stylesheet" href="assets/pintuer/css/pintuerAdmin.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/pintuer/js/pintuer.js"></script>
    <script src="assets/myapp/js/login.js"></script>
    <!--[if lt IE 8]>
    <script src="assets/js/browser-not-supported.js"></script>
    <![endif]-->
    <link type="image/x-icon" href="assets/icons/favicon.ico" rel="shortcut icon"/>
    <link href="assets/icons/favicon.ico" rel="bookmark icon"/>
    <script>
        var error_info = '<?php if(isset($ret_error)){echo $ret_error;}?>'
        if (error_info) {
            alert(error_info);
        }
    </script>
</head>
<body>
<div class="container">
    <div class="line">
        &nbsp;
    </div>
    <div class="line">
        &nbsp;
    </div>
    <div class="line">
        &nbsp;
    </div>
    <div class="line">
        <div class="xs6 xm4 xs3-move xm4-move">
           <div style="text-align:center">
               <strong class="text-big">A</strong>
               <img width="25px" height="25px" src="assets/myapp/images/logo.png" class="radius"/>
               <strong class="text-big">SOS</strong>
           </div>
            <div style="text-align:center">
                <h3><?php echo $title; ?></h3>
            </div>
            <hr class="space">
            <form action="userlogin/dologin.html" method="post">
                <input type="hidden" name="dest_url" value="<?php echo $this->input->get("url")?>">
                <div class="panel">
                    <div class="panel-body" style="padding: 30px;">
                        <div class="form-group">
                            <div class="field field-icon">
                                <span class="icon icon-user"></span>
                                <input type="text" class="input" name="uname"
                                     value="<?php echo $input_uname;?>"  placeholder="手机/邮箱/账号"
                                       data-validate="required:请输入手机/邮箱/账号"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="field field-icon">
                                <span class="icon icon-key"></span>
                                <input type="password" class="input" name="upwd"
                                       value="<?php echo $input_upwd;?>" placeholder="请输入密码"
                                       data-validate="required:请输入密码"/> <!--length#>=8:密码长度不符合要求8位-->

                            </div>
                        </div>
                         <?php
                        if(IS_CAPTURE){
                        ?>
                        <div class="form-group">
                            <div class="field">
                                <input type="text" class="input" name="checkcode" id="checkcode" maxlength="4"
                                       placeholder="请输入右侧验证码" data-validate="required:请输入右侧验证码"/>

                                <img style="width: 80px;height: 32px;"
                                     src="<?php echo DOMAIN_BASE_URL; ?>UserLogin/getCheckcode.html?t=0"
                                     class="passcode"/>
                            </div>
                        </div>

                        <div>
                            <!--div class="field">
                                <label>
                                    <input name="rememberpwd" type="checkbox" value="Y">
                                    记住密码
                                </label>
                            </div
                            <div class="text-right ">
                                <a id="freshCheckCode" href="#">看不清</a>
                            </div>
-->
                            <!--div class="text-right ">
                                <a class="text-gray" target="_blank"
                                   href="userlogin/findPwd">忘记密码</a>
                            </div-->
                        </div>
                            <?php
                           }
                         ?>
                    </div>
                    <div class="panel-foot text-center">
                        <button class="button button-block bg-main text-big">
                            登录
                        </button>
                    </div>
				</div>	
            </form>
        </div>
    </div>
</div>
</body>
</html>