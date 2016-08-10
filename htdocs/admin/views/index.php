<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-4-24
 * Time: ����11:29
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- 内容头部-->
        <section class="content-header">
            <h1>
                &nbsp;
            </h1>
            <ol class="breadcrumb">
                <li><a href="javascript:;"><i class="fa fa-home"></i> 首页</a></li>
                <li class="active">扩展功能演示</li>
            </ol>
        </section>
<!-- 主内容 -->
<section class="content">
    <div>
        <h3>演示功能集</h3>
    </div>
<!-- Info boxes -->
<div class="row">

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>150</h3>
                <p>日新订单</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">更多 <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>日销售</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">更多 <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>230</h3>
                <p>客户总数</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">更多 <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>65</h3>
                <p>日访问人次</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">更多 <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- ./col -->
</div><!-- /.row -->
<!-- 月报 -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">月报告</h3>
                <!--
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  <div class="btn-group">
                    <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                -->
            </div><!-- /.box-header -->

            <div class="box-footer">
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                            <h5 class="description-header">￥35,210.43</h5>
                            <span class="description-text">总收益</span>
                        </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                            <h5 class="description-header">￥10,390.90</h5>
                            <span class="description-text">总成本</span>
                        </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                            <h5 class="description-header">￥24,813.53</h5>
                            <span class="description-text">总利润</span>
                        </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="description-block">
                            <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                            <h5 class="description-header">1200</h5>
                            <span class="description-text">完成目标</span>
                        </div><!-- /.description-block -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->

<!-- 主行 -->
<div class="row">
    <!-- 左列 col -->
    <div class="col-md-8">
        <!-- TABLE: 最新订单 -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">热销产品排行</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>OE码</th>
                            <th>产品名</th>
                            <th>总销量</th>
                            <th>购买次数</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="pages/examples/invoice.html">0001</a></td>
                            <td>产品A</td>
                            <td>20000</span></td>
                            <td><div class="sparkbar" data-color="#00a65a" data-height="20">5000</div></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">0002</a></td>
                            <td>产品B</td>
                            <td>18000</td>
                            <td><div class="sparkbar" data-color="#00a65a" data-height="20">5000</div></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">0003</a></td>
                            <td>产品C</td>
                            <td>15000</td>
                            <td><div class="sparkbar" data-color="#00a65a" data-height="20">5000</div></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">0004</a></td>
                            <td>产品D</td>
                            <td>13000</td>
                            <td><div class="sparkbar" data-color="#00a65a" data-height="20">5000</div></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">0005</a></td>
                            <td>产品E</td>
                            <td>10000</td>
                            <td><div class="sparkbar" data-color="#00a65a" data-height="20">5000</div></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">0006</a></td>
                            <td>产品F</td>
                            <td>9000</td>
                            <td><div class="sparkbar" data-color="#00a65a" data-height="20">5000</div></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">0007</a></td>
                            <td>产品G</td>
                            <td>8000</td>
                            <td><div class="sparkbar" data-color="#00a65a" data-height="20">5000</div></td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <!--a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left"></a-->
                <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">查看所有订单</a>
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
    </div><!-- /.col -->

    <div class="col-md-4">
        <!-- Info Boxes Style 2 -->
        <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">库存</span>
                <span class="info-box-number">10</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 10%"></div>
                </div>
                  <span class="progress-description">
                    	本月涨幅10%
                  </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
        <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text"></span>
                <span class="info-box-number">已售</span>
                <span class="info-box-number">80</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 20%">20</div>
                </div>
                  <span class="progress-description">
                    	本月涨幅20%
                  </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
        <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">退货</span>
                <span class="info-box-number">1</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 1%"></div>
                </div>
                  <span class="progress-description">
                    	本月涨幅1%
                  </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">退款</span>
                <span class="info-box-number">0</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 0%"></div>
                </div>
                  <span class="progress-description">
                    本月没有
                  </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->

    </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->