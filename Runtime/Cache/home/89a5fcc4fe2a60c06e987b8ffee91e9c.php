<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="<?php echo (HOME_JS_URL); ?>/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo (HOME_CSS_URL); ?>bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>shopcart.css" type="text/css" />
    <script src="<?php echo (HOME_JS_URL); ?>/shopcart.js" ></script>
    <title>购物车</title>
</head>
<body>
    <div id="bodys">
        <div id="header">
            <div id="header_top">
                <div id="header_top_info">
                    <span></span>
                    <span class="gwc">购物车<a href="" class="glyphicon glyphicon-map-marker"></a></span>
                    <span class="edit">编辑</span>
                </div>
            </div>
        </div>
        <div id="content">
            <div id="content_top">
                <div id="content_top_shop">
                    <span><input type="checkbox" name="select" value="1" class="check_parent" id="top_shop_input" class="" />店铺名称</span>
                    <span><a href="">优惠卷</a></span>
                </div>
            </div>
            <div id="content_goods">
                <div id="goods_content">
                    <div id="goods_content_text" class="row" style="margin-left:0;margin-right:0;">
                        <div id="goods_input" class="col-sm-2 col-xs-2">
                            <input type="checkbox" class="check_child" value="1" name="select" />
                        </div><a href="<?php echo (__URL__); ?>/detailpage.html">
                        <div id="goods_img" class="col-sm-4 col-xs-4">
                            <img src="<?php echo (HOME_IMG_URL); ?>shopcart/shopcart_1.jpg" width="auto;" height="105px" />
                        </div>
                        <div id="goods_text" class="col-sm-6 col-xs-6">
                                <div id="goods_info">
                                    <span>【官方授权 送好礼】华为honor/荣耀 荣耀v9 play手机荣耀V9paly 解放了大咖科技傅雷家书反倒是尽快发牢骚发生的发生</span>
                                </div></a>
                            <div id="goods_info_size">
                            <span>0.505 KG 黑色 64G</span>
                            <span>选服务</span>
                            </div>
                            <div id="goods_info_bar">
                            <span>白条6期免息</span>
                            </div>
                            <div id="goods_info_m">
                                <div>￥<strong id="goods_pric">2999.00</strong></div>
                                <div>
                                    <span class="minus glyphicon glyphicon-minus"> </span>
                                    <span class="values">1</span>
                                    <span class="add glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
                <div id="footer_yunsuan" class="navbar-fixed-bottom">
                    <div id="footer_js">
                        <div id="footer_button">
                            <div id="footer_check"><input type="checkbox" value="1" name="check_all" id="" />全选</div>
                            <div id="footer_total_s">合计：￥<strong id="footer_total">0.00</strong></div>
                            <div>
                                <button class="div_button" type="button">去结算</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="container-fluid navbar-fixed-bottom footer_div">
                    <ul class="nav nav-pills">
                            <li class="footer_li active" onclick="get(0)"><a href="<?php echo (__URL__); ?>/index.html" class="glyphicon glyphicon-home"><br/>首页</a></li>
                            <li class="active footer_li" onclick="get(1)"><a href="<?php echo (__URL__); ?>/classify.html" class="glyphicon glyphicon-share"><br/>分类</a></li>
                            <li class=" footer_li" onclick="get(2)"><a href="<?php echo (__URL__); ?>/shopcart.html" class="glyphicon glyphicon-shopping-cart" onclick="get(3)"><br/>购物车</a></li>
                            <li class=" active footer_li" onclick="get(3)"><a href="<?php echo (__URL__); ?>/home.html" class="glyphicon glyphicon-user"><br/>我的</a></li>
                    </ul>
                </div>
            </div>
    </div>
</body>
</html>