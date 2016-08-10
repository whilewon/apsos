<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="content-header">
    <h1>
        &nbsp;
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:;"><i class="fa fa-user-secret"></i> 客户管理</a></li>
        <li><a href="javascript:;"> 客户信息管理</a></li>
        <li class="active">修改客户信息</li>
    </ol>
</section>

<?php
 if(empty($guest)){
?>
     <div class="alert alert-info alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
         <h4> 温馨提示:</h4>
         未找到该客户信息
     </div>
<?php }else{?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">修改客户信息</h3>
            </div>
            <form role="form" method="post">
            <!-- /.box-header -->
            <div class="box-body">
                    <input type="hidden" id="uuid" name="uuid" value="<?php echo $guest[0]['guest_id'];?>">
                    <div class="form-group">
                        <label>客户名称</label>
                        <input type="text" name="guest_name" class="form-control"  value="<?php echo iconv('GBK','UTF-8',$guest[0]['guest_name']);?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>联系人</label>
                        <input type="text" name="contract_user_name" class="form-control" value="<?php echo iconv('GBK','UTF-8',$guest[0]['contract_user_name']);?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>客户帐号</label>
                        <input type="text" class="form-control" rows="3" placeholder="请输入客户帐号" value="<?php echo iconv('GBK','UTF-8',$guest[0]['login_code']);?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>联系人手机号</label>
                        <input type="text" name="contract_user_phone" class="form-control" rows="3" placeholder="请输入联系人手机号" value="<?php echo iconv('GBK','UTF-8',$guest[0]['contract_user_phone']);?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>联系人Email</label>
                        <input type="text" class="form-control" rows="3" placeholder="请输入联系人Email" value="<?php echo iconv('GBK','UTF-8',$guest[0]['contract_user_email']);?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>客户类别</label>
                        <select id="user_type" name="user_type" class="form-control">
                            <option value="">--请选择--</option>
                            <option value="A" <?php if($guest[0]['user_type']=='A'){echo 'selected';}?>>特约经销商</option>
                            <option value="B" <?php if($guest[0]['user_type']=='B'){echo 'selected';}?>>普通经销商</option>
                            <option value="C" <?php if($guest[0]['user_type']=='C'){echo 'selected';}?>>修理厂</option>
                        </select>
                    </div>

                    <!-- select -->
                    <div class="form-group">
                        <label>是否有效</label>
                        <select id="enable" name="enable" class="form-control">
                            <option value="N" <?php if($guest[0]['enable']=='N'){echo 'selected';}?>>否</option>
                            <option value="Y" <?php if($guest[0]['enable']=='Y'){echo 'selected';}?>>是</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>所属操作员</label>
                        <select id="admin_user_id" name="admin_user_id" class="form-control">
                            <option value="">--请选择--</option>
                            <?php
                            foreach($admin_users as $admin_user):
                            ?>
                                <option value="<?php echo $admin_user['uuid']?>" <?php if($guest[0]['admin_user_id']==$admin_user['uuid']) echo "selected"?> ><?php echo iconv('GBK','UTF-8',$admin_user['user_name'])?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
            </div>
            <div class="box-footer">
                <button type="button" id="redirect_guest_list" class="btn btn-primary" redirect_url="<?php echo site_url()?>guest">返回列表</button>
                <button type="button" id="save_guest_info" class="btn btn-primary" url="<?php echo site_url()?>guest/save">保存</button>
                <button type="button" id="reset_guest_pwd" class="btn" url="<?php echo site_url()?>guest/resetpwd">重置密码</button>重置密码后的密码为：{default_guest_pwd}
            </div>
            </form>
        </div>
    </div>
</div>
<?php
 }
?>
<script>
    $(function() {
        /**
         * 返回客户列表
         * */
        $("#redirect_guest_list").click(function(){
             location.href=$(this).attr('redirect_url');
        });

        $("#reset_guest_pwd").click(function(){
            //验证
            var formEL = $(this).closest('form');
            if(!confirm('确定要重置客户密码吗？')){
                return false;
            }
            var uuid = $('#uuid').val();
            $.ajax({ ////>>>>>>>>>>>>>ajax
                type: "POST",     //提交方式
                dataType: "text",     //类型
                url: $(this).attr('url'),    //提交的页面，方法名
                data: {"uuid": uuid},
                success: function (retjson) {
                    retjson = eval("(" + retjson + ")");
                    if (retjson.json_header.state) {
                        showtip('success', retjson.json_header.msg);
                    } else {
                        showtip('error', retjson.json_header.msg);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    showtip('error', '更新客户密码异常');
                }
            });//<<<<<<<<<<<ajax
        });
        /**
         * 更新客户信息
         */
        $("#save_guest_info").click(function () {  //>>>>>>>>>>>>>>click

                //验证
                var formEL = $(this).closest('form');
                var user_type_val = $('#user_type').val();
                var admin_user_id = $('#admin_user_id').val();
                var enable = $('#enable').val();
                var uuid = $('#uuid').val();
                if (user_type_val=='') {
                    showtip("error","请选择客户类别");
                    return false;
                }
                $.ajax({ ////>>>>>>>>>>>>>ajax
                    type: "POST",     //提交方式
                    dataType: "text",     //类型
                    url: $(this).attr('url'),    //提交的页面，方法名
                    data: {"uuid": uuid, "enable":enable ,"user_type":user_type_val,"admin_user_id":admin_user_id},
                    success: function (retjson) {
                        retjson = eval("(" + retjson + ")");
                        if (retjson.json_header.state) {
                            showtip('success', retjson.json_header.msg);
                        } else {
                            showtip('error', retjson.json_header.msg);
                        }
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        showtip('error', '更新客户信息异常');
                    }
                });//<<<<<<<<<<<ajax

        }); //<<<<<<<<<<<<< click
    });
</script>
