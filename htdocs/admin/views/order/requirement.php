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
        <li><a href=""><i class="fa fa-home"></i> 订单管理</a></li>
        <li class="active">需求订单查询</li>
    </ol>
</section>
<!-- 主内容 -->
<section class="content">
    <form action='<?php echo site_url()?>order/requirement' method="post">
        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label class="control-label" for="date_time_range">近一段时间</label>
                    <div class="input-group">

                        <select id="date_time_range" name="date_time_range" class="form-control">
                            <option value="">--请选择--</option>
                            <option  value="1">近一周</option>
                            <option  value="2">近两周</option>
                            <option  value="3">近三周</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="start_date_time">起始日期</label>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input id="start_date_time" name="start_date_time" class="form-control" readonly data-date-format="yyyy-mm-dd" value="<?php  echo $form_data['start_date_time'];?>" type="text">
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="end_date_time">截止日期</label>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input id="end_date_time" name="end_date_time" class="form-control" readonly data-date-format="yyyy-mm-dd" value="<?php  echo $form_data['end_date_time'];?>" type="text" size="10">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label class="control-label" for="product_name">产品名称</label>
                    <input type="text" id="guest_name" name="product_name" value="<?php  echo $form_data['product_name'];?>" placeholder="产品名称" class="form-control">
                </div>
            </div>
            <div class="col-sm-1">
                <label class="control-label" ></label>
                <div class="input-group">
                    <button id="search" class="btn btn-primary " type="submit">查询</button>
                </div>
            </div>
        </div>
    </form>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">需求订单查询</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>序号</th>
                        <th>标准码</th>
                        <th>OE码</th>
                        <th>产品名称</th>
                        <th>产品类型</th>
                        <th>车型</th>
                        <th>需求发生次数</th>
                        <th>需求量</th>
                    </tr>
                    <?php
                    $i=0;
                    $total_product_num=0;
                    foreach($orders as $order):
                        $i=$i+1;
                        $total_product_num=$total_product_num+(int)$order['total_product_num'];
                        ?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $order['partsno']?></td>
                            <td><?php echo $order['lno']?></td>
                            <td><?php echo iconv("GB2312", "UTF-8", $order['product_name']); ?></td>
                            <td><?php echo iconv("GB2312", "UTF-8", $order['product_type1']); ?></td>
                            <td><?php echo iconv("GB2312", "UTF-8", $order['subattrib01']); ?></td>
                            <td><?php echo $order['require_num'];?></td>
                            <td><?php echo $order['total_product_num'];?></td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->

    </div><!-- /.col -->
</div><!-- /.row -->
</section>
<link rel="stylesheet" href="assets/plugins/datepicker/datepicker3.css">
<script type="text/javascript" src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/plugins/datepicker/locales/bootstrap-datepicker.zh-CN.js" charset="UTF-8"></script>
<script>
    $('#end_date_time').datepicker({
        autoclose:true,
        todayBtn: 'linked', //todayBtn: 'true' 设置后，点击“今天”不能返回值
        todayHighlight:true,
        language: "zh-CN"
    });
    $('#start_date_time').datepicker({
        autoclose:true,
        todayBtn: 'linked', //todayBtn: 'true' 设置后，点击“今天”不能返回值
        todayHighlight:true,
        language: "zh-CN"
    });
    //查看订单  查询
    $('#date_time_range').change(function(){

        var curr_form=$(this).closest('form');
        var selectVal=$('select[name=date_time_range]',curr_form).val();

         if(selectVal!==''){
             var d = new Date();
             d.setTime(d.getTime()-(parseInt(selectVal)*7*24*60*60*1000));
             var time = d.Format("yyyy-MM-dd");
             $('input[name=start_date_time]',curr_form).val(time);
             $('input[name=end_date_time]',curr_form).val(new Date().Format("yyyy-MM-dd"));
         }else{
             $('input[name=start_date_time]',curr_form).val("");
             $('input[name=end_date_time]',curr_form).val("");
         }
    });
</script>