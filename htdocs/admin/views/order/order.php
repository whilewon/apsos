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
        <li><i class="fa fa-home"></i>订单管理</li>
        <li class="active">订单查询</li>
    </ol>
</section>
<!-- 主内容 -->
<section class="content">
    <form action='<?php echo site_url()?>order/index' method="post">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label" for="out_order_id">订单号</label>
                <input type="text" id="out_order_id" name="out_order_id" value="<?php  echo $form_data['out_order_id'];?>" placeholder="订单号" class="form-control">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label" for="company">下单客户</label>
                <input type="text" id="company" name="company" value="<?php  echo $form_data['company'];?>" placeholder="下单客户" class="form-control">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label" for="order_status">订单状态</label>

                <select id="order_status" name="order_status" class="form-control">
                    <option value="">--请选择--</option>
                    <?php
                    $GLOBAL_ORDER_STATUS_SELECT=eval(ORDER_STATUS);
                    foreach($GLOBAL_ORDER_STATUS_SELECT as $key=>$value):
                        ?>
                        <option <?php if($form_data['order_status']==$key) echo "selected";?> value="<?php echo $key;?>"><?php echo $value;?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label" for="start_date_time">下单开始日期</label>
                <div class="input-group date">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <input id="start_date_time" name="start_date_time" class="form-control" readonly data-date-format="yyyy-mm-dd" value="<?php  echo $form_data['start_date_time'];?>" type="text">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label" for="end_date_time">下单结束日期</label>
                <div class="input-group date">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <input id="end_date_time" name="end_date_time" class="form-control" readonly data-date-format="yyyy-mm-dd" value="<?php  echo $form_data['end_date_time'];?>" type="text" size="10">
                </div>
            </div>
        </div>

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
                <h3 class="box-title">订单查询</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>序号</th>
                        <th>订单号</th>
                        <th>订单总金额</th>
                        <th>下单客户</th>
                        <th>下单人</th>
                        <th>订单状态</th>
                        <th>下单时间</th>
                        <th>客户备注</th>
                        <th>客服备注</th>
                        <th>操作</th>
                    </tr>
                    <?php
                    $GLOBAL_ORDER_STATUS=eval(ORDER_STATUS);
                    $i=0;
                    foreach($orders as $order):
                        $i=$i+1;
                        ?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $order['out_order_id']?></td>
                            <td><?php echo $order['order_total_price']?></td>
                            <td><?php echo iconv("GB2312", "UTF-8", $order['company']); ?>
                             </td>
                            <td><?php echo iconv("GB2312", "UTF-8", $order['user_name']); ?>
                            </td>
                            <td>
                                <span
                                    <?php
                                    if($order['order_status']=='1'){
                                        echo 'class="label label-primary"';
                                    }else if($order['order_status']=='2'){
                                        echo 'class="label label-success"';
                                    }else if($order['order_status']=='3'){
                                        echo 'class="label label-success"';
                                    }else if($order['order_status']=='4'){
                                        echo 'class="label label-success"';
                                    }else if($order['order_status']=='5'){
                                        echo 'class="label label-success"';
                                    }else if($order['order_status']=='6'){
                                        echo 'class="label-plain"';
                                    }else if($order['order_status']=='7'){
                                        echo 'class="label-plain"';
                                    }else if($order['order_status']=='8'){
                                        echo 'class="label label-danger"';
                                    }
                                    ?>
                                    >
                                    <?php echo $GLOBAL_ORDER_STATUS[$order['order_status']];?>
                                </span>

                            </td>
                            <td><?php echo $order['create_date_time'];?></td>
                            <td><?php echo iconv('GBK','UTF-8',$order['remark']);?></td>
                            <td><?php echo iconv('GBK','UTF-8',$order['remark1']);?></td>
                            <td>
                                <a  class="button button-little bg-main"  href="<?php echo site_url()?>order/index/<?php echo  $order['uuid']?>" >详细</a>
                            </td>
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

</script>
