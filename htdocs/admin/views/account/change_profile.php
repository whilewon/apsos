<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-2-27
 * Time: 下午1:58
 */

defined('BASEPATH') OR exit('No direct script access allowed');
$curr_user=$this->session->userdata('admin_user');
?>

<section class="content-header">
    <h1>
        我的信息
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:;"><i class="fa fa-dashboard"></i> 首页</a></li>
        <li class="active">我的信息</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <!--div class="col-md-3">

            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

                    <h3 class="profile-username text-center">白走己</h3>

                    <p class="text-muted text-center">软件工程师</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>待办订单数</b> <a class="pull-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                            <b>在办订单数</b> <a class="pull-right">13,287</a>
                        </li>
                        <li class="list-group-item">
                            <b>已办订单数</b> <a class="pull-right">543</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>-->
        <!-- /.col -->
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#settings" data-toggle="tab">修改密码</a></li>
                    <!--li ><a href="#activity" data-toggle="tab">基本信息</a></li-->
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="activity">
                        <form class="form-horizontal" action="<?php echo DOMAIN_ADMIN_URL; ?>acount/doChangeProfile" method="post">
                            <input type="hidden" name="tab" value="activity">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">用户名</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="user_name" id="inputName" placeholder="用户名">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">帐号</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="login_code" id="inputEmail" placeholder="帐号">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">手机号</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="phone" id="inputName" placeholder="手机号">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputExperience" class="col-sm-2 control-label">QQ</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="qq" id="inputName" placeholder="QQ">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">保存</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="active tab-pane" id="settings">
                        <form class="form-horizontal"  action="<?php echo DOMAIN_ADMIN_URL; ?>Account/doChangepwd" method="post">

                            <?php
                               if(!empty($ret)){
                                if ($ret['state']) {
                                    ?>
                                    <div class="alert alert-success" role="alert">
                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <?php echo $ret['msg']; ?> </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="alert alert-danger" role="alert">
                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <?php echo $ret['msg']; ?> </div>
                                <?php }}?>
                            <div class="form-group">

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="oldpwd" id="inputName" placeholder="旧密码">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="newpwd" id="inputEmail" placeholder="新密码">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="renewpwd" id="renew_pwd" placeholder="确认密码">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">保存</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>