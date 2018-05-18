<?php /* Smarty version Smarty-3.1.6, created on 2018-05-11 14:45:44
         compiled from "../Tpl/home\Index\home.html" */ ?>
<?php /*%%SmartyHeaderCode:129855af03f553ba767-14030161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7a5ffb326b2bb3437cc9221d219a9ea6a3e5ba9' => 
    array (
      0 => '../Tpl/home\\Index\\home.html',
      1 => 1526021125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129855af03f553ba767-14030161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af03f5549151',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af03f5549151')) {function content_5af03f5549151($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo @HOME_CSS_URL;?>
/bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="<?php echo @HOME_JS_URL;?>
/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo @HOME_CSS_URL;?>
/bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="<?php echo @HOME_CSS_URL;?>
font_ico/iconfont.css" /> 
    <title>我的商城</title>
    <link rel="stylesheet" type="text/css" href="<?php echo @HOME_CSS_URL;?>
home.css" />
    <script src="<?php echo @HOME_JS_URL;?>
home.js">
    </script>
</head>
<body>
    <div id="bodys">
        <div id="header" class="" >
            <div class="header_row">
                <div id="header_form">
                    <div id="header_left">
                        <a href="<?php echo @__URL__;?>
/index.html" style="color:rgb(165, 167, 167);">
                            <span class="glyphicon glyphicon-chevron-left"><br/></span>
                        </a>
                    </div>
                    <div class="home_top">
                        <span>我的商城</span>
                    </div>
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
                            <li><a class="glyphicon glyphicon-user"></a><a href="<?php echo @SITE_URL;?>
index.php/admin/Login/login.html">后台</a></li>
                            <li><a class="glyphicon glyphicon-globe"></a><a href="">我的足迹</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div id="content_top">
                <div id="top_set"><a href="<?php echo @__GROUP__;?>
/User/account">
                    <span class="glyphicon glyphicon-cog">账户管理</span>
                    </a>
                </div>
                <ul id="content_top_ul">
                    <?php if (isset($_SESSION['insider_name'])){?>
                        <li id="top_ul_li">
                            <a href="<?php echo @__GROUP__;?>
/home/User/account">
                                <img src="<?php echo @UPLOAD_DIR;?>
<?php echo $_SESSION['insider']['insider_images'];?>
" />
                            </a>
                            <div id="pet_div"><?php echo $_SESSION['insider']['insider_nick'];?>
</div>
                            <div id="user_div">用户名：<span><?php echo $_SESSION['insider']['insider_name'];?>
</span></div>
                            <div id="login_div"><span></div>
                        </li>
                    <?php }else{ ?>
                        <li id="top_ul_li">
                            <a href="<?php echo @__GROUP__;?>
/home/User/account">
                                <img src="<?php echo @HOME_IMG_URL;?>
yifu3.jpg" />
                            </a>    
                            <div id="pet_div"></div>
                            <div id="user_div"><a href="<?php echo @__GROUP__;?>
/User/login">登录/注册>></a></div>
                            <div id="login_div"><span></div>
                        </li>
                    <?php }?>
                </ul>
            </div>
            <div id="content_goods">
                <div id="goods_order">
                    <div >
                        <span class="glyphicon glyphicon-credit-card orderform"></span><br/>
                        <span>待付款</span>
                    </div>
                    <div>
                        <span class="glyphicon glyphicon-send orderform"></span><br/><span>待收货</span>
                    </div>
                    <div >
                        <span class="glyphicon glyphicon-phone-alt orderform"></span><br/><span>退换/售后</span>
                    </div>
                    <div >
                        <span class="glyphicon glyphicon-list-alt orderform_span"></span><br/><span>我的订单</span>
                    </div>
                </div>
            </div>
            <div id="content_goods">
                <div id="goods_order">
                        <div>
                                <span >0</span><br/>
                                <span>收藏的商品</span>
                            </div>
                            <div >
                                <span>0</span><br/><span>收藏的店铺</span>
                            </div>
                            <div >
                                <span>0</span><br/><span>我的足迹</span>
                            </div>
                </div>
            </div>
        </div>
        <div id="nick_bg"></div>
        <div id="footers">
            <div id="footer_logo">编辑微商城的账号信息</div>
                <form action="">
                    <div id="footer_content">
                    <div id="content_name">
                        <div id="login_name">
                            用户名
                        </div>
                        <input type="text" class="" name="username" id="username" value="<?php echo $_SESSION['insider']['insider_name'];?>
" placeholder="" disabled />
                    </div>
                    <div id="form_name">
                        <span>用户名不能修改</span>
                    </div>
                    <div id="content_nick">
                        <div id="login_nick">
                            昵称
                        </div>
                        <input type="text" class="" name="nick" id="nick" placeholder="" value="<?php echo $_SESSION['insider']['insider_nick'];?>
" />
                        
                    </div>
                    <div id="form_nick">
                        <span>4-20个字符，可由英文、数字、"-"、"_"组成</span>
                    </div>
                </div>
                    <div id="nick_button">
                        <div id="nick_div">
                            <input type="button" name="footer_button" value="取消" id="foot_but" />
                            <input type="submit" name="foot_sub" id="foot_sub" value="保存" />
                        </div>
                    </div>
                </form>
        </div>
        <div id="footer">
            <div class="container-fluid navbar-fixed-bottom footer_div">
                <ul class="nav nav-pills">
                        <li class="active footer_li" onclick="get(0)"><a href="<?php echo @__URL__;?>
/index.html" class="glyphicon glyphicon-home"><br/>首页</a></li>
                        <li class="active footer_li" onclick="get(1)"><a href="<?php echo @__URL__;?>
/classify.html" class="glyphicon glyphicon-share"><br/>分类</a></li>
                        <li class=" active footer_li" onclick="get(2)"><a href="<?php echo @__URL__;?>
/shopcart.html" class="glyphicon glyphicon-shopping-cart" onclick="get(3)"><br/>购物车</a></li>
                        <li class=" footer_li" onclick="get(3)"><a href="<?php echo @__URL__;?>
/home.html" class="glyphicon glyphicon-user"><br/>我的</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html><?php }} ?>