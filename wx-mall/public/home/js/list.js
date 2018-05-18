$("document").ready(function(){
    $("#header_right_ico").click(function(){
        $(".header_right_ul").toggle();
    });

    //头部中间的位置
    $(".zh_span").click(function(){
        // $(this).addClass("top_navigate");
        $('.xl_span').removeClass("top_navigate");
        $('.jg_span').removeClass("top_navigate");
        $('.sx_span').removeClass("top_navigate");
        $(this).toggleClass("top_navigate");
        $("#top_zh_ul").toggle();
        $(".zh_span i").toggleClass("glyphicon-chevron-down");
        var text = $(this).text();//获得当前元素的文本信息
        var zh_texts = $(".zh").text();
        var xp_texts = $(".xp").text();
        var pj_texts = $(".pj").text();
        if(text == zh_texts){
            $('.zh').addClass(' action');
            $(".zh span").addClass("glyphicon glyphicon-ok");
            $('.xp').removeClass('action');
            $('.pj').removeClass('action');
        }else if(text == xp_texts){
            $('.xp').addClass('action');
            $(".xp span").addClass("glyphicon glyphicon-ok");
            $('.zh').removeClass('action');
            $('.pj').removeClass('action');
        }else if(text == pj_texts){
            $(".pj span").addClass("glyphicon glyphicon-ok");
            $('.pj').addClass('action');
            $('.zh').removeClass('action');
            $('.xp').removeClass('action');
        }
    });
    $(".zh").click(function(){
        var text = $(this).text();
        $(".zh_span").html(text+'<i class="glyphicon glyphicon-chevron-down"></i>');
        $("#top_zh_ul").css({display:'none'});
        $('.zh').addClass('action');
        $(".zh span").addClass("glyphicon glyphicon-ok");
        $(".xp span").removeClass("glyphicon glyphicon-ok");
        $(".pj span").removeClass("glyphicon glyphicon-ok");
        $('.xp').removeClass('action');
        $('.pj').removeClass('action');
    });
    $(".xp").click(function(){
        var text = $(this).text();
        $(".zh_span").text(text);
        $("#top_zh_ul").css({display:'none'});
        $(".zh_span").html(text+'<i class="glyphicon glyphicon-chevron-down"></i>');
        $('.xp').addClass('action');
        $(".xp span").addClass("glyphicon glyphicon-ok");
        $(".zh span").removeClass("glyphicon glyphicon-ok");
        $(".pj span").removeClass("glyphicon glyphicon-ok");
        $('.zh').removeClass('action');
        $('.pj').removeClass('action');
    });
    $(".pj").click(function(){
        var text = $(this).text();
        $(".zh_span").text(text);
        $("#top_zh_ul").css({display:'none'});
        $(".zh_span").html(text+'<i class="glyphicon glyphicon-chevron-down"></i>');
        $('.pj').addClass('action');
        $(".pj span").addClass("glyphicon glyphicon-ok");
        $(".zh span").removeClass("glyphicon glyphicon-ok");
        $(".xp span").removeClass("glyphicon glyphicon-ok");
        $('.zh').removeClass('action');
        $('.xp').removeClass('action');
    });

    $(".xl_span").click(function(){
        $(this).addClass("top_navigate");
        $('.zh_span').removeClass("top_navigate");
        $('.jg_span').removeClass("top_navigate");
        $('.sx_span').removeClass("top_navigate");
        $("#top_zh_ul").hide();
        $(".zh_span i").addClass("glyphicon glyphicon-chevron-down");
    });
    $(".jg_span").click(function(){
        $(this).addClass("top_navigate");
        $('.zh_span').removeClass("top_navigate");
        $('.xl_span').removeClass("top_navigate");
        $('.sx_span').removeClass("top_navigate");
        $("#top_zh_ul").hide();
        $(".zh_span i").addClass("glyphicon glyphicon-chevron-down");
    });
    $(".sx_span").click(function(){
        $(this).addClass("top_navigate");
        $('.zh_span').removeClass("top_navigate");
        $('.jg_span').removeClass("top_navigate");
        $('.xl_span').removeClass("top_navigate");
        $("#top_zh_ul").hide();
        $(".zh_span i").addClass("glyphicon glyphicon-chevron-down");
    });

    $("#div_bottom_ul span a").click(function(){
        $(this).toggleClass("bottom_a");
    });


    //当鼠标滚动的时候执行
    $("#content").scroll(function(event){
        var scroll_top =$(this).scrollTop();//当前滚动条滚动的距离
        var scroll_height = $(this).height();//获得当前滚动窗口的高度
        // alert(scroll_top);
        if(scroll_top > 100){
            $("#header_batten").fadeIn().css({position:'fixed',top:'-80px',width:'100%'});
            $(this).css({top:'40px'});
        }else if(scroll_top < 100){
            $("#header_batten").css({position:'static',width:'100%'});
            $(this).css({top:'120px'});
        }
    });
    

});