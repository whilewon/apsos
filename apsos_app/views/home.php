<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('form');

?>

<!--面包屑
<ul class="bread bg">
    <li><a href="#" class="icon-home">首页</a> </li>
</ul>-->
<!--产品分类-->


<div class="banner" data-style="border-white">
    <div class="carousel">
        <div  class="item">
            <div class="keypoint" style="height:200px;background: #ABC5E0;color:dimgrey">
                <h1>凯洱奇汽车配件自助订单系统</h1>
                <p>热烈庆祝汽配零配件自助下单系统正式上线！</p>
                <p>欢迎广大经销商朋友，在使用过程中，提出宝贵意见。</p>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php require_once('theme/product_category_tmp.php'); ?>
    <hr class="space">
    <div class="panel">
        <form method="post" class="form-inline" id="search_form"
              action="<?php echo DOMAIN_BASE_URL; ?>home/getStockProducts">
            <input type="hidden" id="category1" name="category1" value="">
            <input type="hidden" id="active_tab" name="active_tab"
                   value="<?php echo $search_condition['active_tab']; ?>">
            <div class="form-group">
                <div class="label"><label>标准码：</label></div>
                <div class="field">
                    <input type="text" class="input" id="standard_code" name="standard_code"
                           value="<?php echo $search_condition['standard_code']; ?>" size="20" placeholder="请输入标准码"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label"><label>OE码：</label></div>
                <div class="field">
                    <input type="text" class="input" id="product_code" name="product_code"
                           value="<?php echo $search_condition['product_code']; ?>" size="20" placeholder="请输入OE码"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label"><label>产品名称：</label></div>
                <div class="field">
                    <input type="text" class="input" id="product_name" name="product_name"
                           value="<?php echo $search_condition['product_name']; ?>" size="20" placeholder="请输入产品名称"/>
                </div>
            </div>
            <div class="form-button">
                <button class="button bg-main button-middle icon-search" type="button" id="search_product"> 查询</button>
            </div>
        </form>
        <div class="panel-head icon-list">
            <strong>产品列表</strong>
        </div>

        <!--div class="text-right"> <button  type="button" class="button bg-main" id="batch_add_cart">
                批量加入购物车
            </button>
        </div-->
        <?php if (!empty($pagination)): ?>
            <?php echo $pagination; ?>
        <?php endif; ?>
        <div class="table-responsive">  <!--style="overflow:auto;height: 400px;"-->
            <table class="table table-striped table-hover">
                <thead>  <!--background-color: #87CEFA-->
                <tr>
                    <th>标准编码</th>
                    <th>OE码</th>
                    <th>产品类型</th>
                    <th>产品名称</th>
                    <th>车型</th>
                    <th>单价(元)</th>
                    <!--th>库存</th-->
                    <th>数量</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody id="product_list">
                <?php foreach ($stock_products as $item): ?>
                    <tr>

                        <td><?php echo $item['partsno'] ?></td>
                        <td><?php echo $item['lno'] ?></td>
                        <td><?php echo iconv("GB2312", "UTF-8", $item['type1code']); ?></td>
                        <td><?php echo iconv("GB2312", "UTF-8", $item['descrition']); ?></td>
                        <td><?php echo iconv("GB2312", "UTF-8", $item['subattrib01']); ?></td>
                        <td>&#65509;<?php echo substr_replace($item['firstprice'], '', -3, -1); ?></td>
                        <!--td><?php echo (int)$item['onhandfreeqty']; ?> </td-->
                        <td>
                            <?php
                            $attributes = array('id' => 'form' . $item['id'], 'method' => 'post');
                            //$hiddenz = array('product_id' => $item['ID']);
                            echo form_open('cart/addProduct', $attributes);
                            ?>
                            <input type="hidden" id="product_id" name="product_id" value="<?php echo $item['id'] ?>">

                            <div class="field">
                                <div class="input-group">
                                    <input type="text" style="width: 50px" class="product_num" id="product_num"
                                           name="product_num" length="10" size="10"
                                           max_product_num="<?php echo (int)$item['onhandfreeqty']; ?>"/>
                                    <?php echo iconv("GB2312", "UTF-8", $item['unit']); ?>
                                </div>
                            </div>
                            </form>
                        </td>
                        <td>
                            <button type="button" class="button bg-main button-little" id="add_cart">
                                加入购物车
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php if (!empty($pagination)): ?>
            <?php echo $pagination; ?>
        <?php endif; ?>
    </div>
</div>
<script>
    $(function() {
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
         * 加入购物车
         */
        $("button[id='add_cart']").each(function () {
            var curr_el = $(this);
            curr_el.click(function () {  //>>>>>>>>>>>>>>click
                //验证
                var trel = $(this).closest('tr');
                var product_num_el = $('#product_num', trel);
                var product_num_val = product_num_el.val();
                if (!checkProductNum(product_num_el)) {
                    return false;
                }
                $.ajax({ ////>>>>>>>>>>>>>ajax
                    type: "POST",     //提交方式
                    //contentType: "application/json; charset=utf-8",   //内容类型
                    dataType: "text",     //类型
                    url: $('form', trel).attr('action'),    //提交的页面，方法名
                    data: {"product_num": product_num_val, "product_id": $('#product_id', trel).val()},
                    success: function (retjson) {
                        retjson = eval("(" + retjson + ")");
                        if (retjson.json_header.state) {
                            freshcart(retjson.json_data.product_count);
                            showtip('success', retjson.json_header.msg);
                        } else {
                            showtip('error', retjson.json_header.msg);
                        }
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        showtip('error', '加入购物车异常');
                    }
                });//<<<<<<<<<<<ajax
                product_num_el.val('');

            }); //<<<<<<<<<<<<< click
        });

        //点击 产品大类
        $('.tab .tab-nav li').click(function () {
            $('#active_tab').val($(this).attr('id'));
        })

        //点击 产品分类
        $('a[name=apsos_category1]').click(function () {

            var pre_active_tab = $('#active_tab').val();
            $('input', $('#search_form')).val('');
            $('#category1').val($(this).html());
            $('#active_tab').val(pre_active_tab)
            //$(this).addClass("active button button-small")
            $('#search_form').submit();
        })

        //产品列表 查询按钮
        $('#search_product').click(function () {
            $('#search_form').submit();
        });
    });
</script>