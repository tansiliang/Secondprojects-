// 谭思良
/**
 * 当点击当前的按钮时，更换当前按钮的样式
 */
function get(i){
    var li = document.getElementsByClassName('footer_li');
    if(i == 1){
        li[1].className = "footer_li";
        li[0].className = "active footer_li";
        li[2].className = "active footer_li";
        li[3].className = "active footer_li";
    }else if(i == 0){
        li[0].className = "footer_li";
        li[1].className = "active footer_li";
        li[2].className = "active footer_li";
        li[3].className = "active footer_li";
    }else if(i == 2){
        li[2].className = "footer_li";
        li[0].className = "active footer_li";
        li[1].className = "active footer_li";
        li[3].className = "active footer_li";
    }else if(i == 3){
        li[3].className = "footer_li";
        li[0].className = "active footer_li";
        li[1].className = "active footer_li";
        li[2].className = "active footer_li";
    }
}

$("document").ready(function(){

    var values_num = $(".values").text();
    var pric = $("#goods_pric").text(); 
    //减少商品
    $(".minus").click(function(){
        //值最少为1，不能为负数
        if(values_num == 1){
            return false;
        }
        values_num--;
         $(".values").text(values_num);
         if($("[name='select']").prop("checked") == true){
             total = pric * values_num;
            $("#footer_total").text(total.toFixed(2));
         }
    });
    // 添加商品
    $(".add").click(function(){
        $(".values").text(++values_num);
        if($("[name='select']").prop("checked") == true){
            total = pric * values_num;
           $("#footer_total").text(total.toFixed(2));
        }
        
    });

    //全选功能
    $("[name='check_all']").click(function(){
        if($(this).is(':checked') && $(".div_button").text() != "删除"){
            // $("[name='select']").get(0).checked = true ;
            $("[name='select']").prop("checked",true);
            if($("[name='select']").prop("checked") == true){
                total = pric * values_num;
               $("#footer_total").text(total.toFixed(2));
            }
            $("#content").removeClass("del");
        }else{
            $("[name='select']").prop("checked",false);
            // $("[name='select']").get(0).checked = false; //只能执行一次
            if($("[name='select']").prop("checked") == false){
                $("#footer_total").text('0.00');
            }
            $("#content").removeClass("del");
        }
        if($(this).is(':checked') && $(".div_button").text() == "删除"){
            $("[name='select']").prop("checked",true);
            $("#content").addClass("del");
        }
    });

    //选择店铺的时候勾选商品或勾选商品时同时勾选店铺
    $(".check_parent").click(function(){
        var pric = $("#goods_pric").text();
        var num = $(".values").text();
        var total = pric * num;
        if($(this).is(":checked") && $(".div_button").text() != "删除"){
            // $(".check_child").prop("checked",true);
            $(".check_child").get(0).checked = true;
            $("#footer_total").text(total.toFixed(2));
            $("#content").removeClass("del");
        }else{
            // $(".check_child").prop("checked",false);
            $(".check_child").get(0).checked = false;
            var ts = $("#footer_total").text();
            val = ts - pric * values_num;
            $("#footer_total").text(val.toFixed(2));
            $("[name='check_all']").prop("checked",false);
            $("#content").removeClass("del");
        }
        if($(this).is(":checked") && $(".div_button").text() == "删除"){
            $(".check_child").get(0).checked = true;
            $("#content").addClass("del");//当选中是给需要删除的元素添加一个删除类
        }
    });

    $(".check_child").click(function(){
        var pric = $("#goods_pric").text();
        var num = $(".values").text();
        var total = pric * num;
        if($(this).is(":checked") && $(".div_button").text() != "删除"){
            $(".check_parent").get(0).checked = true;
            $("#footer_total").text(total.toFixed(2));
            $("#content").removeClass("del");
        }else{
            $(".check_parent").get(0).checked = false;
            var ts = $("#footer_total").text();
            val = ts - pric * values_num;
            $("#footer_total").text(val.toFixed(2));
            $("#content").removeClass("del");
        }
        if($(this).is(":checked") && $(".div_button").text() == "删除"){
            $(".check_parent").get(0).checked = true;
            $("#content").addClass("del");
        }
    });

    //编辑功能
    $(".edit").click(function(){
        
        if($(this).text() == "完成"){
            $(this).text("编辑").css({color:'#000'});
            $("#footer_total_s").html("合计：￥<strong id='footer_total'>0.00</strong>").css({background:'#fff',color:'#000',textAlign:'center'});
            $(".div_button").html("去结算");
        }else{
            $(this).text("完成").css({color:'red'});
            $("#footer_total_s").text("移至收藏").css({background:'rgb(248, 115, 6)',color:'#fff',textAlign:'center'});
            $(".div_button").text("删除");
        }
    });

    //删除功能
    //判断当前的位置是否是删除的文本，如果是则执行
    
    $(".div_button").click(function(){
        var texts = $(".div_button").text();
        //判断当前点击的按钮是否为删除按钮，并且判断需要删除的元素是否选中
        if(texts == "删除" && $('.check_parent').is(":checked") && $("#content").prop('class') == 'del'){
            if(window.confirm('是否确定删除？？？')){
                $(".del").remove();
            }
        }
        if(texts == "去结算" && $('.check_parent').is(":checked")){
            window.location.href = "orderform.html";
        }else{
            alert("没有选中商品！！！");
        }
        
    });
    
});