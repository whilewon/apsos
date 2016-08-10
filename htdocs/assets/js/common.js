/**
 * Created by Administrator on 16-5-15.
 */
// 对Date的扩展，将 Date 转化为指定格式的String
// 月(M)、日(d)、小时(h)、分(m)、秒(s)、季度(q) 可以用 1-2 个占位符，
// 年(y)可以用 1-4 个占位符，毫秒(S)只能用 1 个占位符(是 1-3 位的数字)
// 例子：
// (new Date()).Format("yyyy-MM-dd hh:mm:ss.S") ==> 2006-07-02 08:09:04.423
// (new Date()).Format("yyyy-M-d h:m:s.S")      ==> 2006-7-2 8:9:4.18
Date.prototype.Format = function(fmt)
{ //author: meizz
    var o = {
        "M+" : this.getMonth()+1,                 //月份
        "d+" : this.getDate(),                    //日
        "h+" : this.getHours(),                   //小时
        "m+" : this.getMinutes(),                 //分
        "s+" : this.getSeconds(),                 //秒
        "q+" : Math.floor((this.getMonth()+3)/3), //季度
        "S"  : this.getMilliseconds()             //毫秒
    };
    if(/(y+)/.test(fmt))
        fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));
    for(var k in o)
        if(new RegExp("("+ k +")").test(fmt))
            fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));
    return fmt;
}

/**
 * 操作后的友好提示
 * @param flag
 * @param msg
 */
function showtip(flag,msg){
   /* var $mytip=null;
    var baseStyle="left: 50%;top: 40%;position: absolute;border-radius: 5px;padding: 15px;border: 1px solid #DDD; background-color: #F5F5F5;";
    if(typeof ($('#mytop').html())!=='undefined'){
        $mytip.remove();
    }*/

    if(flag=='error')
    {
        layer.msg(msg, {icon: 2});

        /*var msg_el='<strong>错误：</strong><span>'+msg+'</span>';
        var color_el='color: #E33;border-color: #FDC;background-color: #FDC;';
        $mytip = $("<div id='mytip' style='"+baseStyle+color_el+"'>"
            +msg_el+
            "</div>");
        $mytip.appendTo('body');
        $mytip.fadeOut(3600);*/
    }
    else if(flag=='warn')
    {
        /*var msg_el='<strong>警告：</strong><span>'+msg+'</span>';
        var color_el='color: #F60;border-color: #FEC;background-color: #FEC;';
        $mytip = $("<div id='mytip' style='"+baseStyle+color_el+"'>"
            +msg_el+
            "</div>");
        $mytip.appendTo('body');
        $mytip.fadeOut(2000);*/
        layer.msg(msg, {icon: 0});
    }
    else if(flag=='info')
    {
        /*var msg_el='<strong>提示：</strong><span>'+msg+'</span>';
        var color_el='color: #0AE; border-color: #DEF; background-color: #DEF;';
        $mytip = $("<div id='mytip' style='"+baseStyle+color_el+"'>"
            +msg_el+
            "</div>");
        $mytip.appendTo('body');
        $mytip.fadeOut(2000);*/
        layer.msg(msg);
    }
    else if(flag=='success')
    {
        /*var msg_el='<strong>恭喜：</strong><span>'+msg+'</span>';
        var color_el='color: #2c7;border-color: #cfa;background-color: #cfa;';
        $mytip = $("<div id='mytip' style='"+baseStyle+color_el+"'>"
            +msg_el+
            "</div>");
        $mytip.appendTo('body');
        $mytip.fadeOut(1800);*/
        layer.msg(msg, {icon: 1});
    }

}

layer.config({
    extend: ['skin/pintuer/style.css'], //加载新皮肤
    skin: 'layer-ext-pintuer' //采用pintuer皮肤。
});