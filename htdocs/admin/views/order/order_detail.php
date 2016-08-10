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
        <li>
            <i class="fa fa-barcode"></i> 订单管理
        </li>
        <li><a href="<?php echo site_url()?>order">所有订单查询</a></li>
        <li class="active">详细</li>
    </ol>
</section>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">订单信息</h3>
            </div>
            <div class="box-body no-padding">
                <table class="table table-condensed">
                    <tbody>
                    <tr>
                        <td>下单客户：<?php echo iconv("GB2312", "UTF-8", $one_order['company']); ?></td><td>下单人：<?php echo iconv("GB2312", "UTF-8", $one_order['user_name']); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">订单号：<?php echo $one_order['out_order_id'];?></td>
                    </tr>
                    <tr>
                        <td colspan="2">订单状态：<?php $GLOBAL_ORDER_STATUS=eval(ORDER_STATUS); echo $GLOBAL_ORDER_STATUS[$one_order['order_status']];?></td>
                    </tr>
                    <tr>
                        <td colspan="2">总金额(元)：<?php echo $one_order['order_total_price'];?></td>
                    </tr>
                    <tr>
                        <td colspan="2">发货总金额(元)：<?php echo $one_order['true_total_price'];?></td>
                    </tr>
                    <tr>
                        <td colspan="2">下单时间：<?php echo $one_order['create_date_time'];?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">订单跟踪信息</h3>
            </div>
            <div class="box-body no-padding">
                <table class="table table-condensed">
                    <tbody>
                    <tr><th>时间</th><th>状态</th><th>描述信息</th><th>处理人</th></tr>
                    <?php
                    foreach($order_check as $check):
                        ?>
                        <tr>
                            <td>
                                <?php echo $check['create_date_time'];?>
                            </td>
                            <td>
                                <?php echo $GLOBAL_ORDER_STATUS[$check['order_status']];?>
                            </td>
                            <td>
                                <?php echo iconv("GB2312", "UTF-8", $check['remark']); ?>
                            </td>
                            <td>
                                <?php echo iconv("GB2312", "UTF-8", $check['user_name']); ?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    <tr>
                        <td>
                            <?php echo $one_order['create_date_time'];?>
                        </td>
                        <td >
                            下单成功
                        </td>
                        <td></td><td><?php echo iconv("GB2312", "UTF-8", $one_order['user_name']); ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">收货人信息</h3>
            </div>
            <div class="box-body no-padding">
                <form>
                    <input type="hidden" name="uuid" value="<?php echo $one_order['uuid'];?>">

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label" for="consignee_name">收货人</label>
                            <div class="input-group">
                                <input name="consignee_name" <?php if($one_order['order_status']<>'1'){echo 'disabled';}?>
                                       class="form-control" type="text" placeholder="收货人"
                                       value="<?php echo iconv('GBK','UTF-8',$one_order['receive_user_name'])?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label" for="telphone">收货人手机</label>
                            <div class="input-group">
                                <input name="telphone" <?php if($one_order['order_status']<>'1'){echo 'disabled';}?>
                                       class="form-control" type="text"  placeholder="收货人手机"
                                       value="<?php echo iconv('GBK','UTF-8',$one_order['receive_user_phone'])?>">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="form-group">
                            <label class="control-label" for="address">收货人地址</label>
                            <div class="input-group">
                                <input name="address" <?php if($one_order['order_status']<>'1'){echo 'disabled';}?>
                                       class="form-control" type="text" size="60" placeholder="收货人地址"
                                       value="<?php echo iconv('GBK','UTF-8',$one_order['to_where'])?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group">
                            <label class="control-label">&nbsp;</label>
                            <div class="input-group">
                                <button <?php if($one_order['order_status']<>'1'){echo 'disabled';}?>
                                    id="saveconsineeinfo" class="btn btn-primary"
                                    url="<?php site_url()?>order/updateOrderConsigneeInfo">
                                    保存</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">订单详细</h3>
                <a target="_blank" class="btn pull-right <?php if(empty($one_order['true_total_price'])){echo 'hidden';}?>" href="<?php echo site_url()?>order/true/<?php echo  $one_order['uuid']?>">查看实发货单</a>
            </div><!-- /.box-header -->

            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>序号</th>
                        <th>OE码</th>
                        <th>产品名称</th>
                        <th>产品类型</th>
                        <th>价格</th>
                        <th>购买数</th>
                        <th>实发数</th>
                        <th>实发金额小计(元)</th>
                    </tr>
                    <?php
                    $i=0;
                    foreach($order_details as $detail):
                        $i=$i+1;
                        ?>
                        <tr>

                            <td><?php echo $i?></td>
                            <td><?php echo $detail['lno'];?></td>
                            <td><?php echo iconv("GB2312","UTF-8",$detail['product_name']);?></td>
                            <td><?php echo iconv("GB2312","UTF-8",$detail['product_type1']);?></td>
                            <td><?php echo $detail['product_price'];?></td>
                            <td><?php echo $detail['product_num'];?></td>

                            <td><?php
                                if(!empty($one_order['true_total_price'])){
                                    if(!empty($detail['true_product_num'])){
                                        echo '<span class="badge bg-green">'.$detail["true_product_num"].'</span>';
                                    }else{
                                        echo '<span class="badge bg-red">缺货</span>';
                                    }
                                }
                                ;?>
                            </td>
                            <td><?php

                                if(empty($detail['true_product_num'])==false){
                                    echo intval($detail["true_product_num"])*floatval($detail['product_price']);
                                }
                                ;?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->