<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$product_count = $this->session->userdata('product_count')->product_count;
if ($product_count == 0) {
    $product_count = '';
}
?>
<html lang="zh_CN">
<head>
    <base href="<?php echo DOMAIN_BASE_URL; ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=G"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <title>{pagetitle}</title>
    <script>
        var jspath = '<?php echo DOMAIN_BASE_URL;?>';
        var product_count = '<?php echo $product_count;?>';
    </script>
    <!--[if lt IE 8]>
    <script src="assets/js/browser-not-supported.js"></script>
    <![endif]-->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/plugins/layer/layer.js"></script>
    <script src="assets/js/common.js"></script>

    <script>

        /**
         * 刷新购物车
         * @param pcount
         */
        function freshcart(pcount){

            var newVal=(pcount=='0'||pcount=='')?'':pcount;
            if(newVal!==''){
                $('#menu_cart').html('购物车<span class="badge bg-sub">'+newVal+'</span>');
            }else{
                $('#menu_cart').html('购物车');
            }
        }
        $(document).ready(function(){

            /**
             * 天气预报
             */
            function findWeather() {
                var cityUrl = 'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js';
                $.getScript(cityUrl, function(script, textStatus, jqXHR) {
                    var citytq = remote_ip_info.city ;// 获取城市
                    var url = "http://php.weather.sina.com.cn/iframe/index/w_cl.php?code=js&city=" + citytq + "&day=0&dfc=3";
                    $.ajax({
                        url : url,
                        dataType : "script",
                        scriptCharset : "gbk",
                        success : function(data) {
                            var _w = window.SWther.w[citytq][0];
                            var _f= _w.f1+"_0.png";
                            if(new Date().getHours() > 17){
                                _f= _w.f2+"_1.png";
                            }
                            var img = "<img width='16px' height='16px' src='http://i2.sinaimg.cn/dy/main/weather/weatherplugin/wthIco/20_20/" +_f
                                + "' />";
                            var tq = citytq + " " + img + " " + _w.s1 + " " + _w.t1 + "℃～" + _w.t2 + "℃  " + _w.d1 + _w.p1 + "级";
                            $('#weather').html(tq);
                        }
                    });
                });
            }

            freshcart(product_count);
            if($('#active_tab').val()!=''){
                $('#tab-body-id').removeClass("hidden");
                var active_tab_li=$('#'+$('#active_tab').val());
                $showtabs(active_tab_li);
            }
        });

    </script>
    <link rel="stylesheet" href="assets/pintuer/css/pintuer.css">
    <link rel="stylesheet" href="assets/myapp/css/core.css">
    <link rel="stylesheet" href="assets/pintuer/css/admin.css">
    <link type="image/x-icon" href="assets/myapp/images/favicon.ico" rel="shortcut icon"/>
    <link href="assets/myapp/images/favicon.ico" rel="bookmark icon"/>
</head>
<body>

<div class="layout bg"> <!---black bg-inverse-->
    <div class="container height-large">
				<span class="float-right text-main hidden-l">

                    {site_owner_phone}
					<a class="{class}" target="_blank" href="#">
                        {label}
                    </a>
					{/site_owner_phone}
					{site_owner_qq}
					<a class="{class}" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={value}&site=qq&menu=yes">
                        {label}
                    </a>
					{/site_owner_qq}

                    <div class="button-group ">
                        <button type="button" class="button button-small dropdown-hover text-main"><?php echo iconv('GBK','UTF-8',$this->session->userdata('curr_user')->user_name);?>
                            <span class="downward"></span>
                        </button>
                        <ul class="drop-menu">
                            <li><a class="icon-gear button-small text-main" href="account/changeprofile.html">个人资料</a></li>
                            <li><a class="icon-key button-small text-main" href="account/changepwd.html">修改密码</a></li>
                            <li><a class="icon-sign-out button-small text-main" href="UserLogin/logout.html">退出</a></li>
                        </ul>
                    </div>
                    <a class="button button-small win-favorite icon-star text-main" href="#"> 加入收藏</a>
				</span>
        <h4>{pagetitle}</h4>
        <!--iframe style="margin-top: 9px;" width="280" scrolling="no" height="40" frameborder="0" allowtransparency="true"
        src="http://i.tianqi.com/index.php?c=code&id=34&icon=1&num=3"></iframe-->
    </div>
</div>
<div class="layout bg-main bg-inverse fixed" style="z-index: 9;">
    <div class="container-layout">
        <div class="navbar">
            <div class="navbar-head">
                <button class="button icon-navicon  float-right" data-target="#navbar1">
                </button>
                <a href="">
                    <strong class="text-big">A</strong>
                    <img width="30px" height="30px" src="assets/myapp/images/logo.png" class="radius"/>
                    <strong class="text-big">SOS</strong>
                </a>
            </div>
            <div class="navbar-body nav-navicon" id="navbar1">
                <ul class="nav nav-inline nav-menu">
                    {menubar}
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="toolbar">
    <!--a href="###" class="toolbar-item toolbar-item-weixin">
        <span class="toolbar-layer"></span>
    </a>
    <a href="###" class="toolbar-item toolbar-item-feedback"></a>
    <a href="###" class="toolbar-item toolbar-item-app">
        <span class="toolbar-layer"></span>
    </a-->
    <a href="javascript:scroll(0,0)" id="top" class="toolbar-item toolbar-item-top"></a>
</div>
<!--内容-->
{content}
<!-- 底部-->
{footer}

<script src="assets/pintuer/js/pintuer.js"></script>
<script src="assets/js/respond.min.js"></script>

</body>
</html>

