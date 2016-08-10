<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-2-27
 * Time: 下午1:58
 */

defined('BASEPATH') OR exit('No direct script access allowed');
$curr_user = $this->session->userdata('curr_user');
?>


<div class="container">
    <hr class="space" />
    <ul class="bread bg">
        <li><a href="javascript:;">账户管理</a></li>
        <li><a href="javascript:;">修改密码</a></li>
    </ul>
    <?php
    if (!empty($ret)) {
        if ($ret['state']) {
            ?>
            <div class="alert alert-green">
                <span class="close rotate-hover"></span><strong> <?php echo $ret['msg']; ?></strong>
            </div>
            <?php
        } else {
            ?>
            <div class="alert alert-red">
                <span class="close rotate-hover"></span><strong> <?php echo $ret['msg']; ?></strong>
            </div>
        <?php }
    } ?>
    <form action="<? echo base_url('', null) ?>account/doChangepwd.html" method="post">
        <input type="hidden" name="uid" value="<?php echo $curr_user->uuid; ?>"/>

        <div class="panel">
            <div class="panel-body" style="padding: 30px;">

                <div class="form-group">
                    <label>旧密码</label>

                    <div class="field field-icon-right">
                        <input type="password" class="input" name="oldpwd"
                               placeholder="旧密码"
                               data-validate="required:请填写密码"/>
                        <span class="icon icon-key"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label>新密码</label>

                    <div class="field field-icon-right">

                        <input type="password" class="input" name="newpwd"
                               placeholder="新密码"
                               data-validate="required:请输入新密码,length#>8:要求密码长度大于8位"/>
                        <span class="icon icon-key"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label>确认密码</label>

                    <div class="field field-icon-right">

                        <input type="password" class="input" name="renewpwd"
                               placeholder="再次输入新密码"
                               data-validate="required:再次输入新密码,length#>8:要求密码长度大于8位"/>
                        <span class="icon icon-key"></span>
                    </div>
                </div>

            </div>
            <div class="panel-foot text-center">
                <button class="button button-block bg-main text-big" id="save">
                    保存
                </button>
            </div>
    </form>
</div>