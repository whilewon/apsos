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
        <li>订单提交审核</li>
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
                                <?php
                                if($check['remark']){
                                   echo '<label style="color: red">'.iconv("GB2312", "UTF-8", $check['remark']).'</label>';
                                }
                                ?>
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

            </div>

            <!-- /.box-header -->

            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>序号</th>
                        <th>OE码</th>
                        <th>产品名称</th>
                        <th>产品类型</th>
                        <th>价格</th>
                        <th>购买数</th>

                    </tr>
                    <?php
                    $i = 0;
                    foreach ($order_details as $detail):
                        $i = $i + 1;
                        ?>
                        <tr>

                            <td><?php echo $i ?></td>
                            <td><?php echo $detail['lno']; ?></td>
                            <td><?php echo iconv("GB2312", "UTF-8", $detail['product_name']); ?></td>
                            <td><?php echo iconv("GB2312", "UTF-8", $detail['product_type1']); ?></td>
                            <td><?php echo $detail['product_price']; ?></td>
                            <td><?php echo $detail['product_num']; ?></td>
                          
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div><!-- /.row -->
<div>
    <?php
    if ($one_order['order_status'] == '2') {
        ?>
        <!--button id="check_no" class="btn btn-primary"
                url="<?php echo site_url() ?>order/checkOrder" order_id="<?php echo $one_order['uuid']; ?>" status="8">
            审核不通过
        </button-->
        <?php
    } else if ($one_order['order_status'] == '1') {
        ?>
        <button id="check_ok" class="btn btn-primary"   url="<?php echo site_url() ?>order/checkOrder"
                order_id="<?php echo $one_order['uuid']; ?>" status="2">确认
        </button>
        <!--button id="check_no" class="btn btn-primary"
                url="<?php echo site_url() ?>order/checkOrder" order_id="<?php echo $one_order['uuid']; ?>" status="8">
            审核不通过
        </button-->
        <?php
    }
    ?>
</div>


<div class="modal fade" id="confirm_dialog" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">审核确认窗口</h4></div>
            <div class="modal-body"><p>审核通过则会改变库存，确定吗？</p></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="check_status_2">确定</button>
            </div>
        </div>
        </div>
</div>
<div class="modal fade" id="process_dialog" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">审核确认窗口</h4></div>
            <div class="modal-body">
                理由：<input type="text" id="remark1" name="remark1" size="50" maxlength="50" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="check_status_8">确定</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#check_status_2').click(function(){
        var curr_el=$('#check_ok');
        $('#confirm_dialog').modal('hide');
        process(curr_el,'');
        return false;
    });
    $('#check_status_8').click(function(){
        var curr_el=$('#check_no');
        var process_dialog_el=$('#process_dialog');
        var remark1_val=$('#remark1').val();
        if(remark1_val==''){
            showtip('error', '请输入理由');
            return false;
        }
        process_dialog_el.modal('hide');
        process(curr_el,remark1_val);
    });


    $('#check_ok').click(function () {
        $('#confirm_dialog').modal('show');
        return false;
    });
    $('#check_no').click(function () {
        $('#process_dialog').modal('show');
        return false;
    });


    function process(curr_el,remark1_val){

        $.ajax({ ////>>>>>>>>>>>>>ajax
            type: "POST",
            dataType: "text",
            url: curr_el.attr('url'),
            data: {"order_id": curr_el.attr('order_id'), "remark1":remark1_val, "status": curr_el.attr('status')},
            success: function (retjson) {
                retjson = eval("(" + retjson + ")");
                if (retjson.json_header.state) {
                    showtip('success', retjson.json_header.msg);
                } else {
                    showtip('error', retjson.json_header.msg);
                }
                location.href=location.href;
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                showtip('error', '审核异常');

            }
        });//<<<<<<<<<<<ajax

    }
</script>