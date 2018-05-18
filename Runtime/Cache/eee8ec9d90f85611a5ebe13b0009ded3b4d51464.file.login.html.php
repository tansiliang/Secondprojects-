<?php /* Smarty version Smarty-3.1.6, created on 2018-05-11 12:52:10
         compiled from "../Tpl/home\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:81415af04bff7b9879-72172441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eee8ec9d90f85611a5ebe13b0009ded3b4d51464' => 
    array (
      0 => '../Tpl/home\\User\\login.html',
      1 => 1526012315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81415af04bff7b9879-72172441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af04bffb0d23',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af04bffb0d23')) {function content_5af04bffb0d23($_smarty_tpl) {?><!DOCTYPE html>
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
    <title>登录页面</title>
    <link rel="stylesheet" type="text/css" href="<?php echo @HOME_CSS_URL;?>
login.css" />
    <script src="<?php echo @HOME_JS_URL;?>
login.js"></script>
</head>
<body>
    <div id="bodys">
        <header id="header">
            <div id="header_form"><a onclick="location.href='<?php echo @__GROUP__;?>
/Index/index'" class="glyphicon glyphicon-chevron-left"></a>
                <span class="header_text">商城登录</span>
            </div>
        </header>
        <div id="content">
            <form action="<?php echo @__URL__;?>
/account" method="post">
            <div id="content_name">
                <div id="login_name">
                    账号
                </div>
                <input type="text" class="" name="username" id="username" placeholder="用户名/已验证手机" />
                <i class="glyphicon glyphicon-remove-sign ico name_ico" style="display:none;"></i>
            </div>
            <div id="content_pass">
                <div id="login_pass">
                    密码
                </div>
                <input type="password" placeholder="请输入密码" name="userpass" id="userpass" />
                <i class=" glyphicon glyphicon-remove-sign pass_ico ico" style="display:none;"></i>
                <label class="glyphicon ico_exe ico glyphicon-eye-close"></label>
            </div>
            <div id="login_submit">
                <input type="submit" class="" name="log_submit" id="log_submit" value="登录" />
            </div>
            <div id="login_bottom">
                <ul class="login_bottom_ul">
                    <li class="bottom_li">
                        <span><a href="">忘记密码?</a></span>
                        <span><a href="enroll.html">注册</a></span>
                    </li>
                </ul>
            </div>
        </form>
        </div>
    </div>
</body>
</html><?php }} ?>