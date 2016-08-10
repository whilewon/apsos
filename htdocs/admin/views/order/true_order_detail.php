<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-2-27
 * Time: 下午1:58
 */

defined('BASEPATH') OR exit('No direct script access allowed');
$GLOBAL_ORDER_STATUS=eval(ORDER_STATUS);
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
        <li class="active">实发货单详细</li>
    </ol>
</section>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">实发货单详细</h3>
        <label class="pull-right">实发货总金额(元)：<?php echo $one_order['true_total_price'];?></label>
    </div>

    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tr>
                <th>序号</th>
                <th>OE码</th>
                <th>产品名称</th>
                <th>产品类型</th>
                <th>价格</th>
                <th>实发数</th>
                <th>实发金额小计(元)</th>
            </tr>
            <?php
            $i=0;
            foreach($order_details as $detail):
                if(empty($detail['true_product_num'])){
                    continue;
                }
                $i=$i+1;
                ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $detail['lno'];?></td>
                    <td><?php echo iconv("GB2312","UTF-8",$detail['product_name']);?></td>
                    <td><?php echo iconv("GB2312","UTF-8",$detail['product_type1']);?></td>
                    <td><?php echo $detail['product_price'];?></td>
                    <td><?php echo $detail['true_product_num'];?></td>
                    <td>
                        <?php echo $detail['product_num']*(float)$detail['product_price'];?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <!-- /.box-body -->
</div>

