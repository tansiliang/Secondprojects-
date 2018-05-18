$("document").ready(function(){
    // 获取当前商品的个数
    // 减
    var num = $('.num_val').val();
    var jg = $(".info_price span").text();
    $(".minus").click(function(){
        if(num == 1){
            return false;
        }
        $(".num_val").val(--num);
        values = num * jg;
        $(".price_span").text(values.toFixed(2));
    });
    // 加
    $(".plus").click(function(){
        $(".num_val").val(++num);
        values = num * jg;
        $(".price_span").text(values.toFixed(2));
    });


    // 页面加载时获取价格
    values = num * jg;
    $(".price_span").text(values.toFixed(2));
});