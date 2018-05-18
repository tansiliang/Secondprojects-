<?php /* Smarty version Smarty-3.1.6, created on 2018-05-09 10:50:07
         compiled from "../Tpl/admin\Index\Index.html" */ ?>
<?php /*%%SmartyHeaderCode:212035af261df155fe4-99416825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70725b461aeb2ce316742f24261649cdc98dacc9' => 
    array (
      0 => '../Tpl/admin\\Index\\Index.html',
      1 => 1525787400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212035af261df155fe4-99416825',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af261df1deb8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af261df1deb8')) {function content_5af261df1deb8($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台首页</title>
    <link rel="stylesheet" href="<?php echo @HOME_CSS_URL;?>
/bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="<?php echo @HOME_JS_URL;?>
/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo @HOME_CSS_URL;?>
/bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="<?php echo @HOME_CSS_URL;?>
font_ico/iconfont.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo @HOME_CSS_URL;?>
home.css" />
    <script src="<?php echo @HOME_JS_URL;?>
home.js">
    </script>
    <style type="text/css">
    
        .header_left_die{
            color:rgb(165, 167, 167);
            display:inline-block;
            border-radius: 5px; 
            color:white;
            padding:0 10px;
        }
        #frame{
            border:0;
            width:100%;
        }
    
    </style>
</head>
<body>
    <div id="bodys">
        <div id="header">
            <div class="header_row">
                <div id="header_form">
                    <div id="header_left">
                        <a class="header_left_die" href="<?php echo @__URL__;?>
/admin.html" style="
                        background:red;">退出
                        </a>
                        <a class="header_left_die" href="<?php echo @__URL__;?>
/index.html" title="当前管理员" style="background:blue;">nihao
                        </a>
                    </div>
                    <div class="home_top">
                        <span style="font-size:18px;font-weight:bold;">后台页面</span>
                    </div>
                    <div id="header_right">
                            <span class="iconfont icon-gengduo" id="header_right_ico" style="color:rgb(165, 167, 167);"></span>
                        <ul class="header_right_ul">
                            <span class="glyphicon glyphicon-eject" id="header_span"></span>
                            <li><a class="glyphicon glyphicon-home"></a><a href="<?php echo @__URL__;?>
/admin.html" target="content">管理员信息</a></li>
                            <li><a class="glyphicon glyphicon-share"></a><a href="<?php echo @__URL__;?>
/classify.html" target="content">分类搜索</a></li>
                            <li><a class="glyphicon glyphicon-shopping-cart"></a><a href="<?php echo @__URL__;?>
/shopcart.html" target="#content">购物车</a></li>
                            <li><a class="glyphicon glyphicon-user"></a><a href="<?php echo @SITE_URL;?>
index.php/admin/Login/login.html" target="#content">后台</a></li>
                            <li><a class="glyphicon glyphicon-globe"></a><a href="" target="#content">我的足迹</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
    
    <iframe name="content" src="<?php echo @__URL__;?>
/admin.html" width="100%" style="height:1350px;" id="frame" frameborder="0" seamless>
    </iframe>
</div>
</body>
</html><?php }} ?>