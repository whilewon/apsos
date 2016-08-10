/**
 * Created by Administrator on 16-3-3.
 */



$(document).ready(function(){

    $('.passcode').click(function(){
        fresh_checkcode();
    });

    $('#freshCheckCode').click(function(){
        fresh_checkcode();
    });
});

function fresh_checkcode(){
    var checkcode_el=$('.passcode');
    var checkcode_src=checkcode_el.attr('src');
    checkcode_el.attr('src',checkcode_src.substring(0,checkcode_src.indexOf('?')+1)+Math.random());

}
