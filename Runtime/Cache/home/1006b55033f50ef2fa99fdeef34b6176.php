<?php if (!defined('THINK_PATH')) exit();?><!-- 谭思良 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商城</title>
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>/bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="<?php echo (HOME_JS_URL); ?>/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo (HOME_CSS_URL); ?>/bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>/index.css" type="text/css" />
    <script src="<?php echo (HOME_JS_URL); ?>/index.js"></script>
    <script>
        $("document").ready(function(){
            $(".sousuo").focus(function(){
                $(this).css({'opacity': '1',});
                $("#header").css({'opacity':'1'});
            });
            $(".sousuo").blur(function(){
                $(this).css({'opacity':'0.5',});
                
            })
            $("#index_content_list").scroll(function(){
                $('#header').css({'opacity':'1'});
            });
        });
    </script>
</head>
<body>
    <div style="max-width:640px; height:auto; margin:auto;">
    <!-- 头部搜索框 -->
<div id="header" class="" >
    <div class="header_row">
        <div id="header_form">
            <div id="header_left">
                <a href="<?php echo (__URL__); ?>/classify.html" style="color:rgb(165, 167, 167);">
                <span class="glyphicon glyphicon-th-list"></span>
                </a>
            </div>
            <from class="bs-example bs-example-form" role="form">
                <input type="text" class="form-control sousuo " placeholder="搜索" ><button type="submit" class=" header_tp btn btn-default"><span class="glyphicon glyphicon-search"></span>
                </button>
            </from>
            <div id="header_right">
                <a href="<?php echo (__URL__); ?>/home.html" style="color:rgb(165, 167, 167);">
                    <span class="glyphicon glyphicon-user"><br/></span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- 图片轮播 -->
<div id="index_content">
    <div id="index_content_list">
    <div id="sowing" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#sowing" data-slide-to="0" class="active"></li>
            <li data-target="#sowing" data-slide-to="1" ></li>
            <li data-target="#sowing" data-slide-to="2" ></li>
            <li data-target="#sowing" data-slide-to="3" ></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo (HOME_IMG_URL); ?>two_5.png" sizes="(max-width:900px) 900px" style="height:auto;" alt="">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="<?php echo (HOME_IMG_URL); ?>two_2.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?php echo (HOME_IMG_URL); ?>two_2.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?php echo (HOME_IMG_URL); ?>two_5.png" alt="">
            </div>
        </div>
        <a class="left carousel-control " href="#sowing" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control"  href="#sowing" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    <div id="content">
            <div class="content_div">
                    <a class="thumbnail spans" href="">
                        <img src="<?php echo (HOME_IMG_URL); ?>ico/ico_1.jpg" />
                            <span>数码</span>
                    </a>
                    <a class="thumbnail spans" href="">
                                <img src="<?php echo (HOME_IMG_URL); ?>ico/ico_3.jpg" />
                                <span>家具</span>
                    </a>
                    <a class="thumbnail spans" href="">
                                <img src="<?php echo (HOME_IMG_URL); ?>ico/ico_4.jpg" />
                                <span>E连</span>
                    </a>
                    <a class="thumbnail spans" href="">
                                    <img src="<?php echo (HOME_IMG_URL); ?>ico/ico_5.jpg" />
                                    <span>高原</span>
                    </a>
                    <a class="thumbnail spans" href="">
                                    <img src="<?php echo (HOME_IMG_URL); ?>ico/ico_6.jpg" />
                                    <span>辣先生</span>
                    </a>
            </div>
            <div class="content_div">
                    <a class="thumbnail spans" href="">
                            <img src="<?php echo (HOME_IMG_URL); ?>ico/ico_7.png" />
                            <span>微商城</span>
                    </a>
                    <a class="thumbnail spans" href="">
                                    <img src="<?php echo (HOME_IMG_URL); ?>ico/ico_8.png" />
                                    <span>豆类</span>
                    </a>
                    <a class="thumbnail spans" href="">
                                    <img src="<?php echo (HOME_IMG_URL); ?>ico/ico_9.jpg" />
                                    <span>购物</span>
                    </a>
                    <a class="thumbnail spans" href="">
                                    <img src="<?php echo (HOME_IMG_URL); ?>ico/ico_10.jpg" />
                                    <span>贡茶</span>
                    </a>
                    <a class="thumbnail spans" href="">
                                    <img src="<?php echo (HOME_IMG_URL); ?>ico/ico_11.jpg" />
                                    <span>易淘</span>
                    </a>
            </div>
            <div >
                <h4 class="text-center goods">推荐商品</h4>
                <div class="tuiju">
                    <div class="thumbnail reco">
                        <span class=" glyphicon glyphicon-remove" style="float:right;" onclick="getRemo(this)"></span>
                        <a class="" href="<?php echo (__URL__); ?>/list.html">
                                <img src="<?php echo (HOME_IMG_URL); ?>yifu2.jpg" />
                                <ul>
                                    <li class="reco_li_j">MR&MRS FUR 代购 17FW秋冬款 短款 黑色浣熊毛领 外套 MP036R </li>
                                    <li class="reco_li_m">￥399.00</li>
                                </ul>
                                
                        </a></div>
                        <div class="thumbnail reco">
                                <span class=" glyphicon glyphicon-remove" style="float:right;" onclick="getRemo(this)"></span>
                        <a class="" href="list.html">
                                <img src="<?php echo (HOME_IMG_URL); ?>yifu.jpg" />
                                <ul>
                                    <li class="reco_li_j">Marc Jacobs马克雅各布/欧美潮牌/男士羊毛夹克飞行员外套棒球服</li>
                                    <li class="reco_li_m">￥399.00</li>
                                </ul>
                        </a>
                        
                        </div>
                        <div class="thumbnail reco">
                                <span class=" glyphicon glyphicon-remove" style="float:right;" onclick="getRemo(this)"></span>
                        <a class="" href="">
                                <img src="<?php echo (HOME_IMG_URL); ?>yifu3.jpg" />
                                <ul>
                                    <li class="reco_li_j">Moschino 兔子小熊图案毛衣</li>
                                    <li class="reco_li_m">￥399.00</li>
                                </ul>
                                
                        </a>
                        </div>
                        <div class="thumbnail reco">
                                <span class=" glyphicon glyphicon-remove" style="float:right;" onclick="getRemo(this)"></span>
                        <a class="" href="">
                                <img src="<?php echo (HOME_IMG_URL); ?>yifu3.jpg" />
                                <ul>
                                    <li class="reco_li_j">Moschino 兔子小熊图案毛衣</li>
                                    <li class="reco_li_m">￥399.00</li>
                                </ul>
                                
                        </a>
                        </div>
                        <div class="thumbnail reco">
                                <span class=" glyphicon glyphicon-remove" style="float:right;" onclick="getRemo(this)"></span>
                        <a class="" href="">
                                <img src="<?php echo (HOME_IMG_URL); ?>yifu3.jpg" />
                                <ul>
                                    <li class="reco_li_j">Moschino 兔子小熊图案毛衣</li>
                                    <li class="reco_li_m">￥399.00</li>
                                </ul>
                                
                        </a>
                        </div>
                </div>
                
                
            </div>
    </div>
    </div>
</div>
<div id="footer">
    <div class="container-fluid navbar-fixed-bottom footer_div">
        <ul class="nav nav-pills">
                <li class="footer_li" onclick="get(0)"><a href="<?php echo (__URL__); ?>/index.html" class="glyphicon glyphicon-home"><br/>首页</a></li>
                <li class="active footer_li" onclick="get(1)"><a href="<?php echo (__URL__); ?>/classify.html" class="glyphicon glyphicon-share"><br/>分类</a></li>
                <li class=" active footer_li" onclick="get(2)"><a href="<?php echo (__URL__); ?>/shopcart.html" class="glyphicon glyphicon-shopping-cart" onclick="get(3)"><br/>购物车</a></li>
                <li class=" active footer_li" onclick="get(3)"><a href="<?php echo (__URL__); ?>/home.html" class="glyphicon glyphicon-user"><br/>我的</a></li>
        </ul>
    </div>
</div>

</body>
</html>