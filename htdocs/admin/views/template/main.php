<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$curr_user=$this->session->userdata('admin_user');
?>
<!DOCTYPE html>
<html lang="zh_CN">
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APSOS控制台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo DOMAIN_BASE_URL; ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo DOMAIN_BASE_URL; ?>assets/fonts/font-awesome/4.5.0/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo DOMAIN_BASE_URL; ?>assets/fonts/ionicons/ionicons.min.css">
    <!-- jvectormap
    <link rel="stylesheet" href="<?php echo DOMAIN_BASE_URL; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    -->
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo DOMAIN_BASE_URL; ?>assets/adminlte/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo DOMAIN_BASE_URL; ?>assets/adminlte/css/skins/_all-skins.min.css">
    <style>
        .active_li{
            background: #F39C12;
        }
        .active_li a{
            color:black;
        }

    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo DOMAIN_BASE_URL; ?>assets/js/html5shiv.min.js"></script>
    <script src="<?php echo DOMAIN_BASE_URL; ?>assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo DOMAIN_BASE_URL; ?>assets/js/jquery.js"></script>
	<script src="<?php echo DOMAIN_BASE_URL; ?>assets/plugins/layer/layer.js"></script>
    <script src="<?php echo DOMAIN_BASE_URL; ?>assets/js/common.js"></script>
    <script>
        var base_url='<?php echo DOMAIN_ADMIN_URL; ?>';
    </script>
</head>
<body class="hold-transition  skin-green sidebar-mini">
<div class="wrapper">
    <!--头 -->
    <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo DOMAIN_ADMIN_URL; ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b><img style="width: 30px;height: 30px;" src="<?php echo DOMAIN_BASE_URL; ?>assets/myapp/images/logo.png"></b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>A<img style="width: 18px;height: 18px;" src="<?php echo DOMAIN_BASE_URL; ?>assets/myapp/images/logo.png">SOS</b>控制台</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown">
                            &nbsp;<!--img src="<?php echo DOMAIN_BASE_URL; ?>assets/adminlte/img/user2-160x160.jpg" class="user-image" alt="用户头像"-->
                            <span class="hidden-xs glyphicon glyphicon-user"><?php echo iconv('GBK','UTF-8',$curr_user->user_name);?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <!--li class="user-header">
                                <img src="<?php echo DOMAIN_BASE_URL; ?>assets/adminlte/img/user2-160x160.jpg" class="img-circle" alt="用户头像">
                                <p>
                                    用户组：技术部
                                    <small>就职2008</small>
                                </p>
                            </li-->
                            <!-- Menu Body
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">跟随者</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">销售</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">朋友</a>
                                </div>
                            </li>-->

                            <li class="user-header">
                                <!--img src="<?php echo DOMAIN_BASE_URL; ?>assets/adminlte/img/user2-160x160.jpg" class="img-circle" alt="用户头像"-->
                                <p>
                                    所属部门： <?php
                                    $GLOBAL_ADMIN_DEPT=eval(ADMIN_DEPT);
                                    if(!empty($curr_user->group_id)){
                                        echo $GLOBAL_ADMIN_DEPT[$curr_user->group_id];
                                    }
                                    ?>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo DOMAIN_ADMIN_URL; ?>account/changeProfile" class="btn btn-default btn-flat">修改密码</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo DOMAIN_ADMIN_URL; ?>AdminUserLogin/logout" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>-->
                </ul>
            </div>
        </nav>
    </header>
    <!-- 左边列。 包含logo和工具条 -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">主要功能</li>
                <li class="treeview" id="guestmng">
                    <a href="#">
                        <i class="fa fa-user-secret"></i> <span>客户管理</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo DOMAIN_ADMIN_URL; ?>guest"><i class="fa"></i> 客户信息管理</a></li>
                    </ul>
                </li>
                <li class="treeview" id="ordermng">
                    <a href="#">
                        <i class="fa fa-barcode"></i> <span>订单管理</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo DOMAIN_ADMIN_URL; ?>order/index"><i class="fa"></i> 所有订单查询</a></li>
                        <li><a href="<?php echo DOMAIN_ADMIN_URL; ?>order/check"><i class="fa"></i> 待审核订单查询</a></li>
                        <li><a href="<?php echo DOMAIN_ADMIN_URL; ?>order/traffic"><i class="fa"></i> 待发货订单查询</a></li>
                        <li><a href="<?php echo DOMAIN_ADMIN_URL; ?>order/requirement"><i class="fa"></i> 需求订单查询</a></li>

                    </ul>
                </li>
                <li class="treeview" demo="true" id="checkbillmng">
                    <a href="#">
                        <i class="fa fa-jpy"></i> <span>对账管理</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo DOMAIN_ADMIN_URL; ?>order/checkInBill"><i class="fa"></i> 进货对账</a></li>
                        <li><a href="<?php echo DOMAIN_ADMIN_URL; ?>order/checkOutBill"><i class="fa"></i> 仓库对账</a></li>
                    </ul>
                </li>
                <li class="treeview" id="account_auth_mng">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>帐号权限管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li demo="true"><a href="<?php echo DOMAIN_ADMIN_URL; ?>group"><i class="fa"></i> 组管理</a></li>
                        <li><a href="<?php echo DOMAIN_ADMIN_URL; ?>user"><i class="fa"></i> 操作员管理</a></li>
                        <li demo="true"><a href="<?php echo DOMAIN_ADMIN_URL; ?>auth"><i class="fa"></i> 权限配置</a></li>
                    </ul>
                </li>

                <li class="treeview" demo="true" id="statistic">
                    <a href="#">
                        <i class="fa fa-line-chart"></i>
                        <span>统计</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="assets/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> 收藏统计</a></li>
                        <li><a href="assets/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> 用户统计</a></li>
                        <li><a href="assets/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> 销量统计</a></li>
                        <li><a href="assets/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> 产品统计</a></li>
                        <li><a href="assets/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> 退货统计</a></li>
                        <li><a href="assets/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> 点击量统计</a></li>
                    </ul>
                </li>
                <li class="treeview" demo="true" id="logmng">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>日志管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo DOMAIN_ADMIN_URL; ?>log/backlog"><i class="fa fa-info-circle"></i> 操作员访问日志</a></li>
                        <li><a href="<?php echo DOMAIN_ADMIN_URL; ?>log/frontlog"><i class="fa fa-eye"></i>客户访问监控</a></li>
                        <li><a href="<?php echo DOMAIN_ADMIN_URL; ?>log/systemlog"><i class="fa fa-info-circle"></i> 系统日志</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- 内容包装器. 包含页面内容 -->
    <div class="content-wrapper">
        {content}
    </div><!-- /.content-wrapper -->
    <!-- 脚-->
    {footer}
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div><!-- ./wrapper -->

<!-- Bootstrap 3.3.5 -->
<script src="<?php echo DOMAIN_BASE_URL; ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo DOMAIN_BASE_URL; ?>assets/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo DOMAIN_BASE_URL; ?>assets/adminlte/js/app.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo DOMAIN_BASE_URL; ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap
<script src="<?php echo DOMAIN_BASE_URL; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo DOMAIN_BASE_URL; ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
-->
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo DOMAIN_BASE_URL; ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1
<script src="plugins/chartjs/Chart.min.js"></script>-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--script src=".dist/js/pages/dashboard2.js"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo DOMAIN_BASE_URL; ?>assets/adminlte/js/demo.js"></script>
</body>
</html>
<script>

    $(document).ready(function(){
        /*var active_tree_len=$('.treeview active').length;
        if(active_tree_len==0){
            $('#ordermng').addClass('active');
        }*/
        //var sidebar_menu_el=$('.sidebar-menu');
        $('a').each(function(){
            var _this=$(this);
            var curr_href=_this.attr('href');
            if( curr_href != '' && curr_href != '#' && curr_href!==base_url && location.href.indexOf(curr_href)!==-1){

                _this.closest('li').addClass('active active_li');
                _this.closest('.treeview').addClass('active');

            }
        });

        $('li[demo=true]').each(function(){
            var li_demo=$(this).hide();
            /*$('a',li_demo).click(function(event){
                 alert('该功能目前没有完成开发，作为演示节点，展示');
                 return false;
            });*/
        });
    });
</script>

