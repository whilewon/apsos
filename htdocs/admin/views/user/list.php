<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-5-6
 * Time: 下午10:30
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- 内容头部-->
<section class="content-header">
    <h1>
        &nbsp;
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:;"><i class="fa fa-user"></i> 帐号权限管理</a></li>
        <li class="active">操作员管理</li>
    </ol>
</section>
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">操作员信息列表</h3>
                <a class="pull-right" href="<?php echo site_url(); ?>user/add" >添加</a>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>序号</th>
                        <th>用户名称</th>
                        <th>帐号</th>
                        <th>手机号</th>
                        <th>Email</th>
                        <th>QQ</th>
                        <th>用户组</th>

                    </tr>
                    <?php
                     $i=0;
                     $GLOBAL_ADMIN_DEPT=eval(ADMIN_DEPT);
                     foreach($users as $user):
                        $i=$i+1;
                    ?>
                    <tr>
                        <th><?php echo $i;?></td>
                        <td><?php echo iconv('GBK','UTF-8',$user['user_name']);?></td>
                        <td><?php echo $user['login_code'];?></td>
                        <td><?php echo $user['phone'];?></td>
                        <td><?php echo $user['email'];?></td>
                        <td><?php echo $user['qq'];?></td>
                        <td>
                            <?php
                                if(!empty($user['group_id'])){
                                    echo $GLOBAL_ADMIN_DEPT[$user['group_id']];
                                }
                            ?>
                        </td>

                    </tr>
                    <?php endforeach;?>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->

    </div><!-- /.col -->
</div><!-- /.row -->
</section>