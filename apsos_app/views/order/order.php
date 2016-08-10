<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-2-27
 * Time: 下午1:58
 */

defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('date');

?>
<div class="container">
<div class="panel">
    <div class="alert alert-blue">
        <strong>下单正常流程：</strong>提交订单-->审核通过-->商品出库-->确认收货-->已完成
    </div>
    <form method="post" action="order.html" class="form-inline">
        <input type="hidden" name="start_date_time" value="">
        <input type="hidden" name="end_date_time"  value="">
        <!--div class="form-group">
            <div class="label"> <label for="username"> 时间段</label> </div>
             <div class="field">
                <select name="date_time_range" class="input">
                    <option value="">--请选择--</option>
                    <option <?php if($form_data['date_time_range']=='7') echo "selected";?> value="7">近7日</option>
                    <option <?php if($form_data['date_time_range']=='15') echo "selected";?> value="15">近15日</option>
                    <option <?php if($form_data['date_time_range']=='30') echo "selected";?> value="30">近30日</option>
                </select>
            </div>
        </div-->
        <div class="form-group">
            <div class="label"> <label for="order_status"> 订单状态</label> </div>
            <div class="field">
                <select  name="order_status" class="input">
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

        <div class="form-group">
            <div class="label"> <label for="start_date_time"> 下单开始日期</label> </div>
            <div class="field">
                <input name="start_date_time" class="input form-control" readonly data-date-format="yyyy-mm-dd" size="10" type="text" value="<?php  echo $form_data['start_date_time'];?>">
            </div>
        </div>
        <div class="form-group">
            <div class="label"> <label for="start_date_time"> 下单结束日期</label> </div>
            <div class="field">
                <input name="end_date_time" class="input form-control" readonly data-date-format="yyyy-mm-dd" size="10" type="text" value="<?php  echo $form_data['end_date_time'];?>">
            </div>
        </div>
        <div class="form-group">
            <div class="label"> <label for="uuid"> 订单号</label> </div>
            <div class="field">
                <input name="out_order_id" class="input"   size="16" placeholder="请输入订单号" type="text" value="<?php  echo $form_data['out_order_id'];?>">
            </div>
        </div>
        <div class="form-button">
            <button class="button bg-main button-middle icon-search" type="button" id="search_order"> 查询</button>
        </div>
    </form>
    <div class="panel-head icon-list">
        <strong>订单列表</strong>
    </div>
    <div class="table-responsive" id="cart_product_table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>序号</th>
                    <th>订单号</th>
                    <th>下单总金额(元)</th>
                    <th>发货总金额(元)</th>
                    <th>订单状态</th>
                    <th>下单时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $i=0;
                $GLOBAL_ORDER_STATUS=eval(ORDER_STATUS);
                foreach($orders as $order):
                $i=$i+1;
                ?>
                <tr <?php if($order['order_status']=='6'||$order['order_status']=='7') echo 'class="disabled-word"';?>>
                    <td><?php echo $i?></td>
                    <td><?php echo $order['out_order_id'];?></td>
                    <td><?php echo $order['order_total_price'];?></td>
                    <td><?php echo $order['true_total_price'];?></td>
                    <td><div><?php echo $GLOBAL_ORDER_STATUS[$order['order_status']];?></div></td>

                    <td><?php echo $order['create_date_time'];?></td>
                    <td>
                        <a  class="button button-little bg-main" href="<?php echo site_url()?>order/detail/<?php echo  $order['uuid']?>" >详细</a>
                        <?php if($order['order_status']=='1'){  ?>
                            <a style="margin-left: 25px" class="button button-little bg-yellow" name="cancel_order"  href="<?php echo site_url()?>order/cancelOrder" uuid="<?php echo  $order['uuid']?>" >取消</a>
                        <?php }?>
                        <!--
                        <?php if($order['order_status']=='6'){ ?>
                            <a style="margin-left: 25px"  class="button button-little bg-red" name="remove_order"   href="<?php echo site_url()?>order/removeOrder" uuid="<?php echo  $order['uuid']?>" >删除</a>
                        <?php  } ?>
                        -->
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
</div>
<link rel="stylesheet" href="assets/plugins/datepicker/datepicker3.css">
<script type="text/javascript" src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/plugins/datepicker/locales/bootstrap-datepicker.zh-CN.js" charset="UTF-8"></script>
<script>
    $(function(){
    /**
     * 删除订单
     */
    $('a[name=remove_order]').click(function(event){
        event.preventDefault();
        var trel=$(this).closest('tr');
        if(confirm('确定要删除该订单吗？')){
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
                        trel.fadeOut();
                    } else {
                        showtip('error',retjson.json_header.msg);
                    }
                    location.href= location.href;
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    showtip('error','删除订单异常');
                }
            });//<<<<<<<<<<<ajax
        }
        return false;
    });

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


    //查看订单  查询
    $('#search_order').click(function(){
        var curr_form=$(this).closest('form');
        /*var selectVal=$('select[name=date_time_range]',curr_form).val();

         if(selectVal!==''){
         var d = new Date();
         d.setTime(d.getTime()-(parseInt(selectVal)*24*60*60*1000));
         var time = d.Format("yyyy-MM-dd");
         $('input[name=start_date_time]',curr_form).val(time);
         }*/
        curr_form.submit();
    });

    $('.form-control').datepicker({
        autoclose:true,
        todayBtn: 'linked', //todayBtn: 'true' 设置后，点击“今天”不能返回值
        todayHighlight:true,
        language: "zh-CN"
    });
    });
</script>
