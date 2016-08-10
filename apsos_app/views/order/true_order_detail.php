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

<div class="container">
    <hr class="space">
    <ul class="bread bg">
        <li><a href="javascript:;">订单详细列表</a></li>
        <li><a href="javascript:;">实发货单</a></li>
        <li><a href="javascript:;"><?php echo $one_order['out_order_id'];?></a></li>
    </ul>
    <div class="panel border-mix bg-back">
        <div class="panel-head icon-list">
            <strong>订单详细列表</strong>
            <label class="float-right">实发货总金额(元)：<?php echo $one_order['true_total_price'];?></label>
        </div>

        <div class="table-responsive" id="cart_product_table">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>OE码</th>
                    <th>产品名称</th>
                    <th>产品类型</th>
                    <th>单价(元)</th>
                    <th>实发数</th>
                    <th>实发金额小计(元)</th>
                </tr>
                </thead>
                <tbody>
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
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
