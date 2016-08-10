<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('form');
$this->load->helper('download');
$curr_error = array('0001' => '上传的excel文件未发现正确的数据');
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
            <div class="step-bar active" style="width: 33.3%;">
                <span class="step-point">2</span><span class="step-text">第二步：核对所购产品</span>
            </div>
            <div class="step-bar" style="width: 33.3%;">
                <span class="step-point">3</span><span class="step-text">第三步：完成下单</span>
            </div>
        </div>
        <div class="alert alert-blue">
            <span class="close rotate-hover"></span><strong>提示：</strong>标识<label class="text-red">红色</label>的记录是存在异常的，点“查看异常”了解详细异常。
        </div>

    </div>
    <div class="panel">
        <div class="panel-head icon-list">
            <strong>导入产品列表</strong>
        </div>

        <div class="table-responsive" id="cart_product_table">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th><label for="cart_products_checkall"><input type="checkbox" scope="table" id="cart_products_checkall" name="checkall" class="checkall"
                                                                   checkfor="product_item"/>选择</label></th>
                    <th>标准编码</th>
                    <th>OE号</th>
                    <th>产品类型</th>
                    <th>产品名称</th>
                    <th>车型</th>
                    <th>单价(元)</th>
                    <th>数量</th>
                    <th>小计(元)</th>
                    <th>异常信息</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($upload_products as $item): ?>
                    <tr <?php if (!empty($item['error'])): ?>
                        class="alert-red"
                    <?php endif; ?>
                        >
                        <td><input type="checkbox"
                                   name="<?php echo $item['product_id'] == '' ? 'product_item1' : 'product_item' ?>"
                                   product_id="<?php echo $item['product_id']; ?>"
                                   product_num=" <?php echo $item['product_num']; ?>"
                                   value="" <?php if (!empty($item['error'])) {
                                echo "disabled='true'";
                            } ?> >
                        </td>
                        <td><?php echo $item['partsno']; ?></td>
                        <td><?php echo $item['lno']; ?></td>
                        <td><?php echo iconv("GB2312", "UTF-8", $item['type1code']); ?></td>
                        <td><?php echo iconv("GB2312", "UTF-8", $item['descrition']); ?></td>
                        <td><?php echo iconv("GB2312", "UTF-8", $item['subattrib01']); ?></td>
                        <td><?php echo $item['nowprice']; ?></td>
                        <td>
                            <?php echo $item['product_num']; ?>
                        </td>
                        <td>
                            <?php echo (int)$item['product_num']*(float)$item['nowprice'];?>
                        </td>
                        <td>
                            <?php if (!empty($item['error'])): ?>
                                <button class="button button-small text-red tips"
                                        data-toggle="click" data-place="top" data-style="bg-yellow border-red"
                                        title="<?php echo $item['error']; ?>">查看异常
                                </button>
                            <?php endif; ?>
                        </td>

                        <td>
                            <button id="delproduct" class="button button-small dialogs border-yellow"
                                    onclick="$(this).closest('tr').remove()"> 删除
                            </button>
                        </td>
                    </tr>
                    <?php $total_total_price = $total_total_price + $item['total_price']; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-right"><label>合计：</label><span><?php echo $total_total_price; ?></span> 元</div>
    <div align="right">
        <button type="button" class="button bg-main" redirect_url="<?php echo site_url() . 'order/detail/' ?>"
                url="<?php echo site_url() . 'batchorder/addOrder.html' ?>" id="batch_order">提交订单
        </button>
    </div>
</div>
<script>
$(function () {
    /**
     * 批量下单 提交
     */
    $('#batch_order').click(function(){
        var tableel=$('#cart_product_table');
        var checkedEls=$('input[name="product_item"]:checked',tableel);

        if(checkedEls.length==0){
            showtip('error','请勾选产品');
            return false;
        }

        if(!confirm('确定要提交订单吗？')){
            return false;
        }

        var product_ids='',product_nums='';
        checkedEls.each(function(){
            product_ids=product_ids+$(this).attr('product_id')+',';
            product_nums=product_nums+$(this).attr('product_num')+',';
        });
        product_ids=product_ids.substring(0,product_ids.length-1);
        var redirect_url=$(this).attr("redirect_url");

        $.ajax({ ////>>>>>>>>>>>>>ajax
            type: "POST",     //提交方式
            dataType: "text",     //类型
            url: $(this).attr('url'),    //提交的页面，方法名
            data:  {"product_ids": product_ids,'product_nums':product_nums},
            async:false,
            success: function (retjson) {
                retjson=eval("("+retjson+")");
                if (retjson.json_header.state) {
                    showtip('success',retjson.json_header.msg);
                    location.href=redirect_url+'/'+retjson.json_header.key;
                    retVal= true;
                } else {
                    showtip('error',retjson.json_header.msg);

                    retVal= false;
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                showtip('error','生成订单异常');
                retVal= false;
            }
        });//<<<<<<<<<<<ajax

    });
});
</script>