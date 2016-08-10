<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-2-27
 * Time: 下午1:58
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>



<div class="container">
    <hr class="space" />
    <ul class="bread bg">
        <li><a href="javascript:;">账户管理</a></li>
        <li><a href="javascript:;">个人资料</a></li>
    </ul>
    <?php
    if (!empty($ret)) {
        if ($ret['state']) {
            $curr_user=$this->session->userdata('curr_user');
            $curr_user->email=$account['email'];
            $this->session->set_userdata('curr_user', $curr_user);
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
    }else{
    ?>
        <div class="alert alert-yellow">
            <strong> 温馨提示：请完善您的个人信息</strong>
        </div>
        <?php
    } ?>

    <form action="<? echo base_url('', null) ?>account/doChangeProfile.html" method="post">
        <div class="panel">

            <div class="panel-body" style="padding: 30px;">

                <div class="form-group">
                    <label>登录帐号</label>

                    <div class="field field-icon-right">
                        <input type="text" class="input" name="login_code"
                               value="<?php echo $account['login_code']; ?>" data-validate="required:帐号不能为空"/>
                        <span class="icon icon-user"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label>用户名</label>

                    <div class="field field-icon-right">

                        <input type="text" class="input" name="user_name"
                               value="<?php echo iconv("GB2312", "UTF-8", $account['user_name']); ?>"/>
                        <span class="icon icon-key"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label>手机号</label>

                    <div class="field field-icon-right">

                        <input type="text" class="input" name="phone"
                               value="<?php echo $account['phone']; ?>"/>
                        <span class="icon icon-phone"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label>邮箱</label>

                    <div class="field field-icon-right">

                        <input type="text" class="input" name="email"
                               value="<?php echo $account['email']; ?>" data-validate="required:邮箱不能为空,email:请输入正确的邮箱"/>
                        <span class="icon icon-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="panel-foot text-center">
                <button class="button button-block bg-main text-big" id="saveProfile">
                    保存
                </button>
            </div>
            <script>

            </script>
    </form>
</div>