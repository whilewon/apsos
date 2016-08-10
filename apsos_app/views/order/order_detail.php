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
    <hr class="space" />
    <ul class="bread bg">
        <li><a href="javascript:;">查看订单</a></li>
        <li><a href="javascript:;"><?php echo $one_order['out_order_id'];?></a></li>
    </ul>
    <div class="panel border-mix bg-back">
        <div class="panel-head"> <strong>订单信息</strong></div>
        <div class="panel-body">
            <ul class="list-group ">
                <li>订单号：<?php echo $one_order['out_order_id'];?></li>
                <li>订单状态：<?php echo $GLOBAL_ORDER_STATUS[$one_order['order_status']];?></li>
                <li>下单总金额(元)：<?php echo $one_order['order_total_price'];?></li>
                <li>发货总金额(元)：<?php echo $one_order['true_total_price'];?></li>
                <li>下单时间：<?php echo $one_order['create_date_time'];?></li>
            </ul>
         </div>
    </div>
    <hr class="space">
    <div class="panel border-mix bg-back">
        <div class="panel-head"><strong>订单跟踪信息</strong></div>
        <div class="panel-body">
            <ul class="list-group ">
                <?php
                foreach($order_check as $check):
                ?>
                <li><span><?php echo $check['create_date_time'];?></span>
                    <span style="margin-left: 20px;"><?php echo $GLOBAL_ORDER_STATUS[$check['order_status']];?></span>
                    <span style="margin-left: 20px;">
                        <?php
                        if($check['remark']){
                            echo '<label style="color: red">'.iconv("GB2312", "UTF-8", $check['remark']).'</label>';
                        }
                        ?>
                    </span>
                </li>
                <?php endforeach;?>
                <li><span><?php echo $one_order['create_date_time'];?></span><span style="margin-left: 20px;">下单成功</span> <span></span></li>
            </ul>
        </div>
    </div>
    <hr class="space">
    <div class="panel  border-mix bg-back" >
        <div class="panel-head"> <strong>收货人信息</strong>
            <!--button <?php if($one_order['order_status']<>'1'){echo 'disabled';}?> class="button bg-main dialogs" data-toggle="click" data-target="#mydialog" data-mask="1" data-width="50%">添加</button-->
        </div>
        <div class="panel-body">
            <form class="form-inline">
                <input type="hidden" name="uuid" value="<?php echo $one_order['uuid'];?>">
                <div class="form-group">
                    <div class="field">
                        <input name="consignee_name" <?php if($one_order['order_status']<>'1'){echo 'disabled';}?>
                               class="input" type="text" placeholder="收货人"
                               value="<?php echo iconv('GBK','UTF-8',$one_order['receive_user_name'])?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <input name="telphone" <?php if($one_order['order_status']<>'1'){echo 'disabled';}?>
                               class="input" type="text"  placeholder="收货人手机"
                               value="<?php echo iconv('GBK','UTF-8',$one_order['receive_user_phone'])?>"></div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <input name="address" <?php if($one_order['order_status']<>'1'){echo 'disabled';}?>
                               class="input" type="text" size="60" placeholder="收货人地址"
                               value="<?php echo iconv('GBK','UTF-8',$one_order['to_where'])?>"></div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <button <?php if($one_order['order_status']<>'1'){echo 'disabled';}?>
                            class="button bg-main" id="saveconsineeinfo"
                            url="<?php site_url()?>order/updateOrderConsigneeInfo">
                            保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr class="space">
    <div class="panel border-mix bg-back">
        <div class="panel-head icon-list">
            <strong>订单详细列表</strong>

            <a target="_blank" class="button button-small bg-main float-right <?php if(empty($one_order['true_total_price'])){echo 'hidden';}?>" href="<?php site_url()?>order/true/<?php echo  $one_order['uuid']?>">查看实发货单</a>
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
                        <th>购买数</th>
                        <th>实发数</th>
                        <th>实发金额小计(元)</th>
                    </tr>
                </thead>
                <tbody>
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
                                    if(empty($detail['true_product_num'])==false){
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
                </tbody>
            </table>
        </div>
    </div>

       <?php if($one_order['order_status']=='1'){?>
        <div align="right">
        <a  class="button bg-yellow"
            name="cancel_order"
            href="<?php echo site_url();?>order/cancelOrder"
            uuid="<?php echo  $one_order['uuid'];?>" >取消订单</a>
        </div>
        <?php } ?>
</div>
<div id="mydialog">
    <div class="dialog">
        <div class="dialog-head">
            <span class="close rotate-hover"></span>
            <strong>添加收货人信息</strong></div>
        <div class="dialog-body">
            <form>
                <form class="form-inline" >
                    <div class="form-group">
                        <div class="field"><input  class="input" type="text" placeholder="收货人"></div>
                    </div>
                    <div class="form-group">
                        <div class="field"><input  class="input" type="text"  placeholder="手机"></div>
                    </div>
                    <div class="form-group">

                        <div class="field"><input  class="input" type="text" size="60" placeholder="地址"></div>
                    </div>

                </form>
            </form>
        </div>
        <div class="dialog-foot">
            <button class="button dialog-close"> 取消</button>
            <button class="button bg-green" id=""> 确认</button>
        </div>
    </div>
</div>
<script>
    $(function(){
        /**
         * 取消订单
         */
        $('a[name=cancel_order]').click(function(event){
            event.preventDefault();
            if(confirm('确定要取消该订单吗？')){
                $.ajax({ ////>>>>>>>>>>>>>ajax
                    type: "POST",     //提交方式
                    dataType: "text",     //类型
                    url: $(this).attr('href'),    //提交的页面，方法名
                    data:  {"uuid": $(this).attr('uuid')},
                    async:false,
                    success: function (retjson) {
                        retjson=eval("("+retjson+")");
                        if (retjson.json_header.state) {
                            showtip('success',retjson.json_header.msg);
                        } else {
                            showtip('error',retjson.json_header.msg);
                        }
                        location.href= location.href;
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        showtip('error','取消订单异常');
                    }
                });//<<<<<<<<<<<ajax
            }
            return false;
        });
        /**
         * 更新订单收货人信息
         */
        $('#saveconsineeinfo').click(function(event){
            event.preventDefault();
            var formel=$(this).closest('form');
            var uuid_el=$('input[name=uuid]',formel);
            var consignee_name_el=$('input[name=consignee_name]',formel);
            var telphone_el=$('input[name=telphone]',formel);
            var address_el=$('input[name=address]',formel);
            if($.trim(consignee_name_el.val())==''||
                $.trim(telphone_el.val())==''||
                $.trim(address_el.val())==''||
                $.trim(uuid_el.val())==''
            ){
                showtip('error','收货人信息不能为空');
                return false;
            }

            $.ajax({ ////>>>>>>>>>>>>>ajax
                type: "POST",     //提交方式
                dataType: "text",     //类型
                url: $(this).attr('url'),    //提交的页面，方法名
                data:  {"uuid": uuid_el.val(),"consignee_name":consignee_name_el.val(),"telphone":telphone_el.val(),"address":address_el.val()},
                async:false,
                success: function (retjson) {
                    retjson=eval("("+retjson+")");
                    if (retjson.json_header.state) {
                        showtip('success',retjson.json_header.msg);
                    } else {
                        showtip('error',retjson.json_header.msg);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    showtip('error','保存收货人信息异常');
                }
            });//<<<<<<<<<<<ajax
        });
    });
</script>
