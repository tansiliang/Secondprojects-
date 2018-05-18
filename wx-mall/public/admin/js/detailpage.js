$("document").ready(function(){

    var i = 1;
    $("#header_img").on("touchstart",function(coor){
        // console.info(coor.originalEvent.touches[0]);
        // alert(coor);
        var start_x = coor.touches[0].clientX;//获得当前点击位置的坐标
        var pullx;
        $(this).on("touchmove",function(move_coor){
            pullx = move_coor.touches[0].clientX;//获得移动后的坐标
        });
        
        $(this).on("touchend",function(e){
            // console.info(pullx);
             $(this).off("touchmove touchend");
            e.stopPropagation();
            page = start_x - pullx;
            if(page < -50 && i > 0 && i < 4){
                i++;
                this.src='./images/detailpage/datailpage_'+i+'.jpg';
            }else if(page > 50 && i <= 4 && i > 1 ){
                i--;
                this.src = './images/detailpage/datailpage_'+i+'.jpg';
            }
            // console.info(start_x,pullx,page,i);
        });
    });

    $(".footer_sc").click(function(){
        var clas = $("#spans").attr('class');
        if(clas == "glyphicon glyphicon-star-empty"){
            $("#spans").attr("class","glyphicon glyphicon-star");
            $("#sc").text("已收藏");
            $("#spans").css({color:'red'});
        }else if(clas == "glyphicon glyphicon-star"){
            $("#spans").attr("class","glyphicon glyphicon-star-empty");
            $("#sc").text("收藏");
            $("#spans").css({color:'rgb(185, 184, 184)'});
        }
    });

    // 滚动的时候显示商品导航  
     $(window).scroll(function(event){
        var scroll_top = $(window).scrollTop();//获取滚动的距离
        var scroll_height = $(window).height();//获得当前滚动区域的高度
        if(scroll_top < 300){
            // alert(scroll_top);
            
            $("#goods_div").css({display:'none'});
            $("#top_return_block").addClass("top_return_span");
            $("#top_return_block").removeClass("top_return_spans");
            $("#header_right_ico").addClass("top_return_ellip");
            $("#header_right_ico").removeClass("top_return_ellips");
        }else if(  300 < scroll_top < 500){
            // console.info(scroll_top);
            $("#goods_div").css({display:'block'});
            $("#top_return_block").addClass("top_return_spans");
            $("#top_return_block").removeClass("top_return_span");
            $("#header_right_ico").addClass("top_return_ellips");
            $("#header_right_ico").removeClass("top_return_ellip");
            
        }else if(520 < scroll_top < 600){
            // console.info(scroll_top);
            $("#goods_div").css({display:'block'});
            $("#top_return_block").addClass("top_return_spans");
            $("#top_return_block").removeClass("top_return_span");
            $("#header_right_ico").addClass("top_return_ellips");
            $("#header_right_ico").removeClass("top_return_ellip");
            
        }
    }); 

    // 滚动监听
    $(window).scroll(function(event){
        var top = $(window).scrollTop();
        if(top < 400){
            $(".goods_sp").addClass("active");
            $(".goods_pl").removeClass("active");
            $(".goods_xq").removeClass("active");
        }else if(409 < top < 500){
            $(".goods_pl").addClass("active");
            $(".goods_sp").removeClass("active");
            $(".goods_xq").removeClass("active");
        }else if(top > 500){
            $(".goods_xq").addClass("active");
            $(".goods_pl").removeClass("active");
            $(".goods_xq").removeClass("active");
        }
    });


    //锚点点击修改样式
    $(".goods_sp").click(function(){
        $(this).addClass("active");
        $(".goods_pl").removeClass("active");
        $(".goods_xq").removeClass("active");
    });
    $(".goods_pl").click(function(){
        $(this).addClass("active");
        $(".goods_sp").removeClass("active");
        $(".goods_xq").removeClass("active");
    });
    $(".goods_xq").click(function(){
        $(this).addClass("active");
        $(".goods_sp").removeClass("active");
        $(".goods_pl").removeClass("active");
    });
    $("#header_right_ico").click(function(){
        $(".header_right_ul").toggle();
    });

        var values_num = $(".values").text();
        $(".minus").click(function(){
            //值最少为1，不能为负数
            if(values_num == 1){
                return false;
            }
            $(".values").text(--values_num);
        });
        $(".add").click(function(){
            $(".values").text(++values_num);
        });

    // 点击购物车或直接购买显示
    $(".foot_shopcart").click(function(){
        $("#bottom_shopcart").show('show');
    });
    $(".foot_buy").click(function(){
        $("#bottom_shopcart").show('show');
    });
    $("#text_span").click(function(){
        $("#bottom_shopcart").hide('show');
    });

    //选择颜色
    $(".black").click(function(){
        $(this).toggleClass("action");
        $(".text_li2").text($(this).text());
        $(".white").removeClass("action");
        $(".red").removeClass("action");
        $(".red1").removeClass("action");
        $(".red2").removeClass("action");
    })
    $(".white").click(function(){
        $(this).toggleClass("action");
        $(".text_li2").text($(this).text());
        $(".black").removeClass("action");
        $(".red").removeClass("action");
        $(".red1").removeClass("action");
        $(".red2").removeClass("action");
    })
    $(".red").click(function(){
        $(this).toggleClass("action");
        $(".text_li2").text($(this).text());
        $(".black").removeClass("action");
        $(".white").removeClass("action");
        $(".red1").removeClass("action");
        $(".red2").removeClass("action");
    })
    $(".red1").click(function(){
        $(this).toggleClass("action");
        $(".text_li2").text($(this).text());
        $(".black").removeClass("action");
        $(".white").removeClass("action");
        $(".red").removeClass("action");
        $(".red2").removeClass("action");
    })
    $(".red2").click(function(){
        $(this).toggleClass("action");
        $(".text_li2").text($(this).text());
        $(".black").removeClass("action");
        $(".white").removeClass("action");
        $(".red").removeClass("action");
        $(".red1").removeClass("action");
    })
});