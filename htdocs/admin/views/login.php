<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-5-9
 * Time: 上午7:46
 */
defined('BASEPATH') OR exit('No direct script access allowed');
$this->session->unset_userdata("admin_user");
$input_uname='';
$input_upwd='';

if(empty($uname)==false){
    $input_uname=$uname;
}
if(empty($upwd)==false){
    $input_upwd=$upwd;
}
?><!DOCTYPE html>
<html lang="zh_CN">
<head>
    <base href="<?php echo DOMAIN_BASE_URL; ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APSOS控制台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fonts/font-awesome/4.5.0/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/fonts/ionicons/ionicons.min.css">
    <!-- jvectormap
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    -->
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/adminlte/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/adminlte/css/skins/_all-skins.min.css">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">

        <a href="<?php echo DOMAIN_ADMIN_URL; ?>" class="logo">
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>A<img style="width: 30px;height: 30px;" src="assets/myapp/images/logo.png">SOS</b>控制台</span>
        </a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><?php if(isset($ret_error)){echo '<font color="red">'.$ret_error.'</font>';} else{ echo '开始登录';}?></p>

        <form action="<?php echo DOMAIN_ADMIN_URL; ?>AdminUserLogin/doLogin" method="post">
            <input type="hidden" name="dest_url" value="<?php echo $this->input->get("url")?>">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="帐号" name="admin_uname">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="密码" name="admin_upwd">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!--div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> 记住我
                        </label>
                    </div>
                </div-->
                <!-- /.col -->

                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div><!-- /.col -->

            </div>
        </form>

        <!--div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div-->

        <!-- /.social-auth-links

        <a href="#">忘记密码</a><br>
        <a href="register.html" class="text-center">注册一个新帐号</a>
-->
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<!-- jQuery 2.1.4 -->
<script src="assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>-->
<script>
    $(function () {
        $('input[name=admin_uname]').focus();
    });
</script>
</body>
</html>


