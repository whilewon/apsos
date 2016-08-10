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
        <li><a href="javascript:;"><i class="fa fa-user-secret"></i> 客户管理</a></li>
        <li class="active">客户信息管理</li>
    </ol>
</section>
<!-- 主内容 -->
<section class="content">
<form action='<?php echo site_url()?>guest/index' method="post">
<div class="row">

    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label" for="guest_name">客户名称</label>
            <input type="text" id="guest_name" name="guest_name" value="<?php  echo $form_data['guest_name'];?>" placeholder="客户名称" class="form-control">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label" for="contract_user_name">联系人</label>
            <input type="text" id="contract_user_name" name="contract_user_name" value="<?php  echo $form_data['contract_user_name'];?>" placeholder="联系人" class="form-control">
        </div>
    </div>
	  <!--div class="col-sm-2">
	        <div class="form-group">
	            <label class="control-label" for="enable">有效标志</label>
	            <select id="enable" name="enable" class="form-control">
	            	<option value="Y" <?php if($form_data['enable']=='Y') echo "selected"?> >有效</option>
                <option value="" <?php if($form_data['enable']=='') echo "selected"?> >所有</option>
                
            	</select>
	        </div>
	    </div-->
    <div class="col-sm-4">
        <label class="control-label" ></label>
        <div class="input-group">
            <button  class="btn btn-primary " type="submit">查询</button>

        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">客户信息列表</h3>
 								--><lable>只显示20条</lable>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th width="60px">序号</th>
                        <th width="120px">客户名称</th>
                        <!--th width="50px">客户电话</th-->
                        <th width="90px">联系人</th>
                        <th width="80px">联系人手机号</th>
                        <th width="60px">联系人Email</th>
                        <th width="90px">客户类别</th>
                        <th width="80px">客户帐号</th>
                        <th width="80px">有效状态</th>
                        <th width="90px">所属操作员</th>
                        <th width="70px">操作</th>
                    </tr>
                    <?php
                    $i=0;
                    foreach($guests as $guest):
                        $i=$i+1;

                        ?>
                        <tr>
                            <th><?php echo $i;?></td>
                            <td><?php echo iconv('GBK','UTF-8',$guest['guest_name']);?></td>
                            <!--td><?php echo iconv('GBK','UTF-8',$guest['contract_user_telphone']);?></td-->
                            <td><?php echo iconv('GBK','UTF-8',$guest['contract_user_name']);?> </td>
                            <td><?php echo iconv('GBK','UTF-8',$guest['contract_user_phone']);?></td>
                            <td><?php echo iconv('GBK','UTF-8',$guest['contract_user_email']);?></td>
                            <td><?php
                                if($guest['user_type']=='A'){
                                    echo '特约经销商';
                                }else if($guest['user_type']=='B'){
                                    echo '普通经销商';
                                }else if($guest['user_type']=='C'){
                                    echo '修理厂';
                                }else{
                                    echo '无';
                                }
                                ?></td>
                            <td><?php echo $guest['login_code'];?></td>
                            <td><?php
                                  if($guest['enable']=='Y'){
                                      echo '<span class="label label-success">有效</span>';
                                  }else{
                                      echo '<span class="label label-danger">无效</span>';
                                  }
                                ?></td>
                            <td><?php echo iconv('GBK','UTF-8',$guest['admin_user_name']);?> </td>
                            <td><a href="<?php echo site_url()?>guest/edit/<?php echo $guest['guest_id'];?>">编辑</a></td>
                        </tr>
                    <?php endforeach;?>

                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->
</section>
