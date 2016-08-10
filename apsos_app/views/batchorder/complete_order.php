<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('form');
$this->load->helper('download');
$this->load->helper('url');
$total_total_price = 0.00;
?>
<div class="container">
    <div>

        <hr class="space">
        <hr class="space">

        <div class="step">
            <div class="step-bar complete" style="width: 33.3%;">
                <span class="step-point icon-check"></span><span class="step-text">第一步：上传excel</span></span>

            </div>
            <div class="step-bar complete" style="width: 33.3%;">
                <span class="step-point icon-check"></span><span class="step-text">第二步：核对所购产品</span>
            </div>
            <div class="step-bar complete" style="width: 33.3%;">
                <span class="step-point icon-check"></span><span class="step-text">第三步：完成下单</span>
            </div>
        </div>
        <div class="alert alert-green">
            <span class="close rotate-hover"></span><strong>恭喜：</strong>批量下单完成。
        </div>
    </div>
    <div class="panel">
        <div class="panel-head">
            <strong>订单详细</strong>

            <div class="text-right">订单号：<?php echo $order_id; ?></div>
        </div>
        <div class="table-responsive" id="cart_product_table">
            <table class="table table-hover">
                <thead>
                <th>序号</th>
                <th>产品名称</th>
                <th>产品类型</th>
                <th>价格</th>
                <th>数量</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                foreach ($order_details as $detail):
                    $i = $i + 1;
                    ?>
                    <tr>

                        <td><?php echo $i ?></td>
                        <td><?php echo iconv("GB2312", "UTF-8", $detail['product_name']); ?></td>
                        <td><?php echo iconv("GB2312", "UTF-8", $detail['product_type1']); ?></td>
                        <td><?php echo $detail['product_price']; ?></td>
                        <td><?php echo $detail['product_num']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>