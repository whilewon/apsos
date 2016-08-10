<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-5-6
 * Time: 下午11:06
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="content-header">
    <h1>
        &nbsp;
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:;"><i class="fa fa-user"></i> 帐号权限管理</a></li>
        <li><a href="javascript:;">操作员管理</a></li>
        <li class="active">添加操作员信息</li>
    </ol>
</section>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">添加操作员信息</h3>
                </div>
                <form role="form" method="post" action="<?php echo site_url()?>user/save">
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="form-group">
                            <label>用户名称</label>
                            <input type="text" name="user_name" class="form-control"  value=""  placeholder="请输入用户名称">
                        </div>
                        <div class="form-group">
                            <label>帐号</label>
                            <input type="text" name="login_code" class="form-control" value=""  placeholder="请输入帐号">
                        </div>
                        <div class="form-group">
                            <label>手机号</label>
                            <input type="text" name="phone" class="form-control" placeholder="请输入手机号" value="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="请输入Email" value="">
                        </div>
                        <div class="form-group">
                            <label>QQ</label>
                            <input type="text" name="qq" class="form-control"  placeholder="请输入QQ" value="">
                        </div>
                        <div class="form-group">
                            <label>用户组</label>
                            <select id="group_id" name="group_id" class="form-control">
                                <option value="">--请选择--</option>
                                <option value="1" >客服部</option>
                                <option value="2" >财务部</option>
                                <option value="3" >采购部</option>
                                <option value="4" >领导</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">

                        <button type="commit"  class="btn btn-primary">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


