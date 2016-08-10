<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-2-27
 * Time: 下午1:54
 */
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('form');
$total_total_price = 0.00;
?>
<div class="container">
    <div class="panel">

        <div class="panel-head icon-list">
            <strong> 所购产品列表</strong>
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
                    <!--th>库存</th-->
                    <th>数量</th>
                    <th>小计(元)</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cart_products as $item): ?>
                    <tr <?php if ((int)$item['onhandfreeqty'] < (int)$item['product_num']) {
                        echo "class='disabled-word'";
                    } ?>>
                        <td><input type="checkbox" name="product_item"
                                   value="<?php echo $item['uuid'] ?>"
                                   product_id="<?php echo $item['product_id'] ?>"
                                />
                        </td>
                        <td><?php echo $item['partsno'] ?></td>
                        <td><?php echo $item['lno'] ?></td>
                        <td><?php echo iconv("GB2312", "UTF-8", $item['type1code']); ?></td>
                        <td><?php echo iconv("GB2312", "UTF-8", $item['descrition']); ?></td>
                        <td><?php echo iconv("GB2312", "UTF-8", $item['subattrib01']); ?></td>
                        <td><?php echo $item['nowprice']; ?></td>
                        <!--td><?php echo (int)$item['onhandfreeqty']; ?><?php if ((int)$item['onhandfreeqty'] < (int)$item['product_num']) {
                                echo "&nbsp;<span class='tag bg-red'>不足</span>";
                            } ?></td-->
                        <td>
                            <?php
                            $attributes = array('method' => 'post');
                            //$hidden
                            echo form_open('cart/addProduct', $attributes);
                            ?>

                            <input type="hidden" id="product_uuid" name="product_uuid"
                                   value="<?php echo $item['uuid'] ?>"/>
                            <button class="button button-little bg-main icon-minus-square" id="minus_num"></button>
                            <input type="text" style="width:50px;text-align:center" id="product_num_event"
                                   name="product_num" max_product_num="<?php echo (int)$item['onhandfreeqty']; ?>"
                                   oldvalue="<?php echo $item['product_num']; ?>"
                                   value="<?php echo $item['product_num']; ?>" length="10" size="10"/>
                            <button class="button button-little bg-main icon-plus-square" id="plus_num"></button>
                            </form>
                        </td>
                        <td>
                            <?php echo (int)$item['product_num']*(float)$item['nowprice'];?>
                        </td>
                        <td>
                            <button id="delproduct" class="button button-little border-yellow dialogs"
                                    data-target="#mydialog" data-mask="1" data-width="50%"> 删除
                            </button>
                        </td>
                        <?php $total_total_price = $total_total_price + $item['total_price']; ?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-right"><label>合计：</label><span><?php echo $total_total_price; ?></span> 元</div>
    <div align="right">
        <button type="button" class="button border-yellow" id="patch_del"> 批量删除</button>
        <button type="button" class="button bg-main" redirect_url="<?php echo site_url() . 'order/detail/' ?>"
                url="<?php echo site_url() . 'order/addOrder.html' ?>" id="batch_order">提交订单
        </button>
    </div>
    <div id="mydialog">
        <div class="dialog">
            <div class="dialog-head">
                <span class="close rotate-hover"></span>
                <strong>删除购物车产品</strong></div>
            <div class="dialog-body"> 确定要删除吗？</div>
            <div class="dialog-foot">
                <button class="button dialog-close"> 取消</button>
                <button class="button bg-green" id=""> 确认</button>
            </div>
        </div>
    </div>
</div>
<script>
    function checkProductNum(product_num_el){
        var product_num_val=product_num_el.val();
        if(/^[0-9]*[1-9][0-9]*$/.test(product_num_val)){
            return true;
        }else{
            showtip('error','请输入正确的数量');
            product_num_el.val('');
            product_num_el.focus();
            return false;
        }
    }
    /**
     * 购物车 减少
     */
    $('button[id=minus_num]').click(function(){
        var trel=$(this).closest('tr');
        var product_num_el=$('#product_num_event',trel);
        var product_uuid_el=$('#product_uuid',trel);
        if(!checkProductNum(product_num_el)){
            return false;
        }
        var oldProductNumVal=parseInt(product_num_el.val());
        product_num_el.val(oldProductNumVal-1);
        /*if(parseInt(product_num_el.val())>parseInt(product_num_el.attr('max_product_num'))){
            showtip('error','数量不能大于库存');
            location.href= location.href;
            return false;
        }*/
        if(product_num_el.val()==0){
            if(confirm('确定要从购物车移除吗？'))
            {
                if(delproduct(product_uuid_el.val())){
                    trel.fadeOut();
                    location.href= location.href;
                }
            }else{
                product_num_el.val(oldProductNumVal);
            }
            return false;
        }
        editproduct(product_uuid_el.val(),product_num_el.val());
        return false;
    });

    /**
     * 购物车 增加
     */
    $('button[id=plus_num]').click(function(){

        var trel=$(this).closest('tr');
        var product_num_el=$('#product_num_event',trel);
        var product_uuid_el=$('#product_uuid',trel);

        if(!checkProductNum(product_num_el)){
            return false;
        }
        var oldProductNumVal=parseInt(product_num_el.val());

        product_num_el.val(oldProductNumVal+1);
        if(product_num_el.val()>0){
            $('#minus_num',trel).attr('disabled',false);
        }
        //如果数量大于库存
        /*if(parseInt(product_num_el.val()) > parseInt( product_num_el.attr('max_product_num') ) ){
            showtip('error','数量不能大于库存');
            location.href= location.href;
            return false;
        }*/
        editproduct(product_uuid_el.val(),product_num_el.val());
        return false;
    });
    /**
     * 购物车  数量 输入框
     */
    $('input[id=product_num_event]').blur(function () {
        var trel = $(this).closest('tr');
        var product_num_el = $(this);
        var product_uuid_el = $('#product_uuid', trel);
        if (product_num_el.attr('oldvalue') == product_num_el.val()) {
            return false;//未改变
        }
        if (!checkProductNum(product_num_el)) {
            return false;
        }
        if (product_num_el.val() == 0) {
            if (confirm('确定要从购物车移除吗？')) {
                if (delproduct(product_uuid_el.val())) {
                    trel.remove();
                }
            } else {
                location.href = location.href;
            }
            return false;
        }
        //如果数量大于库存
        if (parseInt(product_num_el.val()) > parseInt(product_num_el.attr('max_product_num'))) {
            showtip('error', '数量不能大于库存');
            location.href = location.href;
            return false;
        }
        editproduct(product_uuid_el.val(), product_num_el.val());
        product_num_el.attr('oldvalue', product_num_el.val());
        return false;
    });

    /**
     * 购物车 删除
     */
    $('button[id=delproduct]').each(function(){
        $(this).bind('click',function(){
            var trel=$(this).closest('tr');
            var product_uuid_el=$('#product_uuid',trel);
            if(confirm('确定要删除吗？')){
                delproduct(product_uuid_el.val());
            }
            return false;
        });
    });

    /**
     * 购物车 更新操作
     * @param uuid
     * @param num
     */
    function editproduct(uuid,num){
        $.ajax({ ////>>>>>>>>>>>>>ajax
            type: "POST",     //提交方式
            dataType: "text",     //类型
            url: "cart/editProduct",    //提交的页面，方法名
            data:  {"product_num": num, "product_uuid": uuid},
            success: function (retjson) {
                retjson=eval("("+retjson+")");
                if (retjson.json_header.state)
                {
                    freshcart(retjson.json_data.product_count);
                    showtip('success',retjson.json_header.msg);
                } else {
                    showtip('error',retjson.json_header.msg);
                }
                location.href= location.href;
            },
            error: function (err) {
                showtip('error',"更新购物车异常");
            }
        });

        //<<<<<<<<<<<ajax
    }

    function delproduct(uuid){
        var retVal=false;
        $.ajax({ ////>>>>>>>>>>>>>ajax
            type: "POST",     //提交方式
            dataType: "text",     //类型
            url: "cart/delProduct",    //提交的页面，方法名
            data:  {"product_uuid": uuid},
            async:false,
            success: function (retjson) {
                retjson=eval("("+retjson+")");
                if (retjson.json_header.state) {
                    showtip('success',retjson.json_header.msg);
                    freshcart(retjson.json_data.product_count);
                    retVal= true;
                } else {
                    showtip('error',retjson.json_header.msg);
                    retVal= false;
                }
                location.href= location.href;
            },
            error: function (err) {
                showtip('error','删除产品异常');
                retVal= false;
            }
        });//<<<<<<<<<<<ajax
        return retVal;
    }

    /**
     * 删除多条购物车记录
     * @param uuids
     * @returns {boolean}
     */
    function delMoreProduct(uuids){
        var retVal=false;
        $.ajax({ ////>>>>>>>>>>>>>ajax
            type: "POST",     //提交方式
            dataType: "text",     //类型
            url: "cart/delMoreProduct",    //提交的页面，方法名
            data:  {"product_uuids": uuids},
            async:false,
            success: function (retjson) {
                retjson=eval("("+retjson+")");
                if (retjson.json_header.state) {
                    freshcart(retjson.json_data.product_count);
                    showtip('success',retjson.json_header.msg);
                    retVal= true;
                } else {
                    showtip('error',retjson.json_header.msg);
                    retVal= false;
                }
                location.href= location.href;
            },
            error: function (err) {
                showtip('error',"删除产品发生异常，请重试");
                retVal= false;
            }
        });//<<<<<<<<<<<ajax
        return retVal;
    }

    /**
     * 购物车批量删除 界面删除多条记录
     */
    $('button[id=patch_del]').bind('click',function(){
        var tableel=$('#cart_product_table');
        var checkedEls=$('input[name="product_item"]:checked',tableel);
        if(checkedEls.length==0){
            showtip('error','请勾选产品');
            return false;
        }
        var uuids='';
        checkedEls.each(function(){
            uuids=uuids+$(this).val()+',';
        });
        uuids=uuids.substring(0,uuids.length-1);
        if(confirm('确定要删除吗？')){
            delMoreProduct(uuids);
        }
        return false;
    });
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

</script>