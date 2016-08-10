<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh_CN">
<head>
    <base href="<?php echo DOMAIN_BASE_URL; ?>">
    <meta charset="utf-8">
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
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">-->
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/adminlte/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/adminlte/css/skins/skin-blue.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
    <!--头 -->
    <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b><img style="width: 30px;height: 30px;" src="assets/myapp/images/logo.png"></b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>A<img style="width: 18px;height: 18px;" src="assets/myapp/images/logo.png">SOS</b>控制台</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <!--
                      <a class="navbar-brand" href="#">网站管理</a>
                      <a class="navbar-brand" href="#">商城管理</a>
                      <a class="navbar-brand" href="#">商家系统</a>
                      -->
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">你有4条消息</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <!--div class="pull-left">
                                                <img src=".dist/img/user2-160x160.jpg" class="img-circle" alt="用户头像">
                                            </div-->
                                            <h4>
                                                支持团队
                                                <small><i class="fa fa-clock-o"></i> 5 分钟</small>
                                            </h4>
                                            <p>为什么不买一个awesome主题?</p>
                                        </a>
                                    </li><!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src=".dist/img/user3-128x128.jpg" class="img-circle" alt="用户头像">
                                            </div>
                                            <h4>
                                                设计团队
                                                <small><i class="fa fa-clock-o"></i> 2小时</small>
                                            </h4>
                                            <p>为什么不买一个awesome主题?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src=".dist/img/user4-128x128.jpg" class="img-circle" alt="用户头像">
                                            </div>
                                            <h4>
                                                开发团队
                                                <small><i class="fa fa-clock-o"></i> 今天</small>
                                            </h4>
                                            <p>为什么不买一个awesome主题?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src=".dist/img/user3-128x128.jpg" class="img-circle" alt="用户头像">
                                            </div>
                                            <h4>
                                                销售部门
                                                <small><i class="fa fa-clock-o"></i> 昨天</small>
                                            </h4>
                                            <p>为什么不买一个awesome主题?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src=".dist/img/user4-128x128.jpg" class="img-circle" alt="用户头像">
                                            </div>
                                            <h4>
                                                评审们
                                                <small><i class="fa fa-clock-o"></i> 2 天</small>
                                            </h4>
                                            <p>为什么不买一个awesome主题?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">查看所有</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">你有10个通知</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 新生成5
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> 新生成5
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i>出售25
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i>修改过姓名
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">查看所有</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">你有 9个任务</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                设置按钮
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% 完成</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                创建一个漂亮风格
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% 完成</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                待完成任务
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% 完成</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                漂亮的过度
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% 完成</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">所有任务</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src=".dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">白走己</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src=".dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                <p>
                                    开人员
                                    <small>就职2008</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
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
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">个人信息</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- 左边列。 包含logo和工具条 -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel
            <div class="user-panel">
                <div class="pull-left image">
                   <!--img src=".dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>白走己</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
                </div>
            </div>-->
            <!-- search form
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="搜索...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>-->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">主要功能</li>
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>网站配置</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="./pages/sellermgr/profile.html"><i class="fa fa-info"></i> 基础信息</a></li>
                        <li><a href="index.html"><i class="fa fa-envelope"></i> 邮件配置</a></li>
                        <li><a href="index.html"><i class="fa fa-bomb"></i> IP黑白名单</a></li>
                        <li><a href="index.html"><i class="fa fa-bell"></i> 发送通知配置</a></li>
                        <li><a href="index.html"><i class="fa fa-database"></i> 数据库备份还原</a></li>
                        <li><a href="index.html"><i class="fa fa-refresh"></i> 缓存管理</a></li>
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>账号权限</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="pages/layout/top-nav.html"><i class="fa fa-group"></i> 用户组管理</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-users"></i> 用户管理</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-user-times"></i> 权限配置</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-registered"></i>
                        <span>会员积分</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-star"></i> 会员管理</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-star"></i> 会员等级设置</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-star"></i> 积分规则设置</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>内容管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="pages/layout/top-nav.html"><i class="fa fa-file-o"></i> 文章管理</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-file-o"></i> 公示管理</a></li>
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>商城系统</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="pages/layout/top-nav.html"><i class="fa fa-file"></i> 产品分类</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-file"></i> 广告管理</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-file"></i> 求租模板</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-file"></i> 回复求租模板</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-sun-o"></i> 收藏管理</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-shopping-cart"></i> 查看购物车</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-truck"></i> 物流管理</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-credit-card"></i> 支付方式管理</a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>商家系统</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="assets/pages/layout/top-nav.html"><i class="fa fa-file-o"></i> 产品管理</a></li>
                        <li><a href="assets/pages/layout/boxed.html"><i class="fa fa-file-o"></i> 订单管理</a></li>
                        <li><a href="assets/pages/layout/boxed.html"><i class="fa fa-file-o"></i> 订单管理</a></li>
                        <li><a href="assets/pages/layout/boxed.html"><i class="fa fa-file-o"></i> 促销管理</a></li>
                        <li><a href="assets/pages/layout/boxed.html"><i class="fa fa-file-o"></i> 广告管理</a></li>
                    </ul>
                </li>


                <li class="treeview">
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


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>网站监控</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/charts/chartjs.html"><i class="fa fa-info-circle"></i> 日志监控</a></li>
                        <li><a href="pages/charts/morris.html"><i class="fa fa-eye"></i> 访问监控</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- 内容包装器. 包含页面内容 -->
    <div class="content-wrapper">
        <!-- 内容头部 -->
        <section class="content-header">
            <h1>
                仪表
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> 主页</a></li>
                <li class="active">仪表</li>
            </ol>
        </section>

        <!-- 主内容 -->
        <section class="content">
            <!-- Info boxes -->
            <div class="row">

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150</h3>
                            <p>新订单</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">更多 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                            <p>销售</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">更多 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>44</h3>
                            <p>注册用户</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">更多 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65</h3>
                            <p>造访人次</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">更多 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
            </div><!-- /.row -->
            <!-- 月报 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">月报告</h3>
                            <!--
                            <div class="box-tools pull-right">
                              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                              <div class="btn-group">
                                <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>
                              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                            -->
                        </div><!-- /.box-header -->

                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                                        <h5 class="description-header">￥35,210.43</h5>
                                        <span class="description-text">总收益</span>
                                    </div><!-- /.description-block -->
                                </div><!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                                        <h5 class="description-header">￥10,390.90</h5>
                                        <span class="description-text">总成本</span>
                                    </div><!-- /.description-block -->
                                </div><!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                                        <h5 class="description-header">￥24,813.53</h5>
                                        <span class="description-text">总利润</span>
                                    </div><!-- /.description-block -->
                                </div><!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block">
                                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                                        <h5 class="description-header">1200</h5>
                                        <span class="description-text">完成目标</span>
                                    </div><!-- /.description-block -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.box-footer -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->

            <!-- 主行 -->
            <div class="row">
                <!-- 左列 col -->
                <div class="col-md-8">
                    <!-- TABLE: 最新订单 -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">最近订单</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                    <tr>
                                        <th>订单号</th>
                                        <th>产品名</th>
                                        <th>状态</th>
                                        <th>时间</th>
                                        <th>人气</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                        <td>绿萝</td>
                                        <td><span class="label label-success">发货</span></td>
                                        <td>2015-08-10 01 01 01</td>
                                        <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                        <td>仙人球</td>
                                        <td><span class="label label-warning">未审核</span></td>
                                        <td>2015-08-10 01 01 01</td>
                                        <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>发财树</td>
                                        <td><span class="label label-danger">到货</span></td>
                                        <td>2015-08-10 01 01 01</td>
                                        <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>滴水观音</td>
                                        <td><span class="label label-info">处理</span></td>
                                        <td>2015-08-10 01 01 01</td>
                                        <td><div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                        <td>紫竹兰</td>
                                        <td><span class="label label-warning">未审核</span></td>
                                        <td>2015-08-10 01 01 01</td>
                                        <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>合欢</td>
                                        <td><span class="label label-danger">到货</span></td>
                                        <td>2015-08-10 01 01 01</td>
                                        <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                        <td>白掌</td>
                                        <td><span class="label label-success">发货</span></td>
                                        <td>2015-08-10 01 01 01</td>
                                        <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <!--a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left"></a-->
                            <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">查看所有订单</a>
                        </div><!-- /.box-footer -->
                    </div><!-- /.box -->
                </div><!-- /.col -->

                <div class="col-md-4">
                    <!-- Info Boxes Style 2 -->
                    <div class="info-box bg-yellow">
                        <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">库存</span>
                            <span class="info-box-number">10</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 10%"></div>
                            </div>
                  <span class="progress-description">
                    	本月涨幅10%
                  </span>
                        </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">已售</span>
                            <span class="info-box-number">80</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 20%">20</div>
                            </div>
                  <span class="progress-description">
                    	本月涨幅20%
                  </span>
                        </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                    <div class="info-box bg-red">
                        <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">退货</span>
                            <span class="info-box-number">1</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 1%"></div>
                            </div>
                  <span class="progress-description">
                    	本月涨幅1%
                  </span>
                        </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">退款</span>
                            <span class="info-box-number">0</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 0%"></div>
                            </div>
                  <span class="progress-description">
                    本月没有
                  </span>
                        </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->

                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <!-- 脚-->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>版本</b>1.0.1
        </div>
        <strong>Copyright &copy; 2015-2016 <a href="http://taopenhua.com">淘盆花</a>.</strong> 版权所有.
    </footer>

    <!-- 控制工具条 -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">最新动态</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">xx的生日</h4>
                                <p>1987-01-01</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-user bg-yellow"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">白邹忌更新个人信息</h4>
                                <p>手机：13131313131</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                <p>whilewon@163.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                <p>执行时间5秒</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                定制模板设计
                                <span class="label label-danger pull-right">70%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Laravel 集成
                                <span class="label label-warning pull-right">50%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->

            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            普通设置选项
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            其他可用选项
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            允许用户显示名称
                        </p>
                    </div><!-- /.form-group -->

                    <h3 class="control-sidebar-heading">聊天设置</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            显示在线
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            关闭通知
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            删除聊天记录
                            <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div><!-- ./wrapper -->
<!-- jQuery 2.1.4 -->
<script src="assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="assets/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/adminlte/js/app.min.js"></script>
<!-- Sparkline -->
<script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- SlimScroll 1.3.0 -->
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1
<script src="plugins/chartjs/Chart.min.js"></script>-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--script src=".dist/js/pages/dashboard2.js"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="assets/adminlte/js/demo.js"></script>
</body>
</html>
