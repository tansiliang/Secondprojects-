<?php /* Smarty version Smarty-3.1.6, created on 2018-05-11 08:52:07
         compiled from "../Tpl/home\Index\classify.html" */ ?>
<?php /*%%SmartyHeaderCode:176675af03f4e3b1164-44597409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a136b136c2ba8775dedefe18288ea750a63ede4' => 
    array (
      0 => '../Tpl/home\\Index\\classify.html',
      1 => 1525999926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176675af03f4e3b1164-44597409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af03f4e5f33e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af03f4e5f33e')) {function content_5af03f4e5f33e($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo @HOME_CSS_URL;?>
bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="<?php echo @HOME_JS_URL;?>
jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo @HOME_CSS_URL;?>
bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?php echo @HOME_CSS_URL;?>
classify.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo @HOME_CSS_URL;?>
font_ico/iconfont.css" /> 
    <script src="<?php echo @HOME_JS_URL;?>
index.js"></script>
    <title>分类</title>
    <script>
        $("document").ready(function(){
            $("#header_right_ico").click(function(){
                $(".header_right_ul").toggle();
            });
        });
    </script>
</head>
<body>
    <div style="max-width:640px; height:auto; margin:auto;">
        <div id="header" class="" >
            <div class="header_row">
                <div id="header_form">
                        <div id="header_left">
                            <a href="index.html" style="color:rgb(165, 167, 167);">
                                <span class="		glyphicon glyphicon-chevron-left"><br/></span>
                            </a>
                        </div>
                    <from class="bs-example bs-example-form" role="form">
                        <input type="text" class="form-control sousuo " placeholder="搜索"><button type="submit" class=" header_tp btn btn-default"><span class="glyphicon glyphicon-search"></span>
                        </button>
                    </from>
                    <div id="header_right">
                            <span class="iconfont icon-gengduo" id="header_right_ico" style="color:rgb(165, 167, 167);"></span>
                        <ul class="header_right_ul">
                            <span class="glyphicon glyphicon-eject" id="header_span"></span>
                            <li><a class="glyphicon glyphicon-home"></a><a href="<?php echo @__URL__;?>
/index.html">首页</a></li>
                            <li><a class="glyphicon glyphicon-share"></a><a href="<?php echo @__URL__;?>
/classify.html">分类搜索</a></li>
                            <li><a class="glyphicon glyphicon-shopping-cart"></a><a href="<?php echo @__URL__;?>
/shopcart.html">购物车</a></li>
                            <li><a class="glyphicon glyphicon-user"></a><a href="<?php echo @__URL__;?>
/home.html">我的</a></li>
                            <li><a class="glyphicon glyphicon-globe"></a><a href="">我的足迹</a></li>
                        </ul>
                    </div>
                </div>
            </div>
         </div>
    <div id="content" class="navbar-absolute">
        <!-- 分类导航 -->
        <div id="left">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active content_left">
                    <a href="#classify" data-toggle="tab">
                         推荐分类
                    </a>
                </li>
                <li class="content_left"><a href="#market" data-toggle="tab">京东超市</a></li>
                <li class="content_left"><a href="#brand" data-toggle="tab">国际名牌</a></li>
                <li class="content_left"><a href="#luxury" data-toggle="tab">奢侈品</a></li>
                <li class="content_left"><a href="#global" data-toggle="tab">全球购</a></li>
                <li class="content_left"><a href="#clothing" data-toggle="tab">男装</a></li>
                <li class="content_left"><a href="#suit" data-toggle="tab">女装</a></li>
                <li class="content_left"><a href="#gloves" data-toggle="tab">箱包手套</a></li>
                <li class="content_left"><a href="#electrical" data-toggle="tab">家用电器</a></li>
                <li class="content_left"><a href="#electrical" data-toggle="tab">电器</a></li>
            </ul>
        </div>
        <!-- 显示内容 -->
        <div id="right" class="tab-content">
            <div class="tab-pane fade active in" id="classify">
                    <img src="<?php echo @HOME_IMG_URL;?>
classify/classfiy_2.png" width="100%" height="auto" />
                    <p class="remen"><strong>热门分类</strong></p>
                    <div id="classify_content">
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_5.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_4.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_10.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_11.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                    </div>
                    <p class="remen"><strong>热门分类</strong></p>
                    <div id="classify_content">
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_5.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_4.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_10.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_11.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                    </div>
                    <p class="remen"><strong>热门分类</strong></p>
                    <div id="classify_content">
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_5.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_4.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_10.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_11.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                    </div>
                    <p class="remen"><strong>热门分类</strong></p>
                    <div id="classify_content">
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_5.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_4.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_10.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_11.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                    </div>
            </div>
            <div class="tab-pane fade" id="market">
                    <img src="<?php echo @HOME_IMG_URL;?>
classify/classfiy_1.png" width="100%" height="auto" />
                    <p class="remen"><strong>热门分类</strong></p>
                    <div id="classify_content">
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_5.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_4.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_10.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_11.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                    </div>
            </div>
            <div class="tab-pane fade" id="brand">
                    <img src="<?php echo @HOME_IMG_URL;?>
classify/classfiy_3.png" width="100%" height="auto" />
                    <p class="remen"><strong>热门分类</strong></p>
                    <div id="classify_content">
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_5.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_4.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_10.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_11.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                    </div>
            </div>
            <div class="tab-pane fade" id="luxury">
                    <img src="<?php echo @HOME_IMG_URL;?>
classify/classfiy_4.png" width="100%" height="auto" />
                    <p class="remen"><strong>热门分类</strong></p>
                    <div id="classify_content">
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_5.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_4.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_10.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_11.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                    </div>
            </div>
            <div class="tab-pane fade" id="global">
                    <img src="<?php echo @HOME_IMG_URL;?>
classify/classfiy_4.png" width="100%" height="auto" />
                    <p class="remen"><strong>热门分类</strong></p>
                    <div id="classify_content">
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_5.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_4.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_10.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_11.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                    </div>
            </div>
            <div class="tab-pane fade" id="clothing">
                    <img src="<?php echo @HOME_IMG_URL;?>
classify/classfiy_4.png" width="100%" height="auto" />
                    <p class="remen"><strong>热门分类</strong></p>
                    <div id="classify_content">
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_5.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_4.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_10.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_11.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                    </div>
            </div>
            <div class="tab-pane fade" id="suit">
                    <img src="<?php echo @HOME_IMG_URL;?>
classify/classfiy_1.png" width="100%" height="auto" />
                    <p class="remen"><strong>热门分类</strong></p>
                    <div id="classify_content">
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_5.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_4.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_10.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_11.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                    </div>
            </div>
            <div class="tab-pane fade" id="gloves">
                    <img src="<?php echo @HOME_IMG_URL;?>
classify/classfiy_4.png" width="100%" height="auto" />
                    <p class="remen"><strong>热门分类</strong></p>
                    <div id="classify_content">
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_5.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_4.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_10.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_11.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                    </div>
            </div>
            <div class="tab-pane fade" id="electrical">
                    <img src="<?php echo @HOME_IMG_URL;?>
classify/classfiy_4.png" width="100%" height="auto" />
                    <p class="remen"><strong>热门分类</strong></p>
                    <div id="classify_content">
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_5.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_4.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_10.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                            <dvi class="thumbnail classify_content_a">
                                <a class="" href="">
                                        <img src="<?php echo @HOME_IMG_URL;?>
ico/ico_11.jpg" />
                                        <ul>
                                            <li class="reco_li_j">数码</li>
                                        </ul>
                                </a></dvi>
                    </div>
            </div>
        </div>
    </div>
    <div id="footer">
            <div class="container-fluid navbar-fixed-bottom footer_div">
                <ul class="nav nav-pills">
                        <li class="active footer_li" onclick="get(0)"><a href="<?php echo @__URL__;?>
/index.html" class="glyphicon glyphicon-home"><br/>首页</a></li>
                        <li class="footer_li" onclick="get(1)"><a href="<?php echo @__URL__;?>
/classify.html" class="glyphicon glyphicon-share"><br/>分类</a></li>
                        <li class=" active footer_li" onclick="get(2)"><a href="<?php echo @__URL__;?>
/shopcart.html" class="glyphicon glyphicon-shopping-cart" onclick="get(3)"><br/>购物车</a></li>
                        <li class=" active footer_li" onclick="get(3)"><a href="<?php echo @__URL__;?>
/home.html" class="glyphicon glyphicon-user"><br/>我的</a></li>
                </ul>
            </div>
        </div>
</body>
</html><?php }} ?>