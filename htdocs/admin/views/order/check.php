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
        <li>待审核订单查询</li>
    </ol>
</section>
<!-- 主内容 -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box">

                <div class="box-header">
                    <h3 class="box-title">待审核订单查询</h3>
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
                                        echo 'class="label label-warning"';
                                    }else if($order['order_status']=='7'){
                                        echo 'class="label label-danger"';
                                    }
                                    ?>
                                    >
                                    <?php echo $GLOBAL_ORDER_STATUS[$order['order_status']];?>
                                </span>

                                </td>
                                <td><?php echo $order['create_date_time'];?></td>
                                <td>
                                    <a  class="button button-little bg-main"  href="<?php echo site_url()?>order/check/<?php echo  $order['uuid']?>" >审核</a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
    </div><!-- /.row -->
</section>
