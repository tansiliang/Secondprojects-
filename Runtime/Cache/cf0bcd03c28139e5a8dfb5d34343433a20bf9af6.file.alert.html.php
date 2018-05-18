<?php /* Smarty version Smarty-3.1.6, created on 2018-05-11 16:13:06
         compiled from "../Tpl/home\User\alert.html" */ ?>
<?php /*%%SmartyHeaderCode:21035af138c45a4a27-22365059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf0bcd03c28139e5a8dfb5d34343433a20bf9af6' => 
    array (
      0 => '../Tpl/home\\User\\alert.html',
      1 => 1526026292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21035af138c45a4a27-22365059',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af138c462974',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af138c462974')) {function content_5af138c462974($_smarty_tpl) {?><!DOCTYPE html>
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
    <title>修改页面</title> 
    <link rel="stylesheet" type="text/css" href="<?php echo @HOME_CSS_URL;?>
alert.css" />
    <script src="<?php echo @HOME_JS_URL;?>
alert.js" ></script>
</head>
<body>
    <div id="bodys">
        <header id="header">
            <div id="header_form"><a href="<?php echo @__URL__;?>
/account" class="glyphicon glyphicon-chevron-left"></a>
                <span class="header_text">修改密码</span>
            </div>
        </header>
        <div id="content">
            <form action="<?php echo @__URL__;?>
/editPass" method="post">
            <div id="content_name">
                <div id="login_name">
                    账号
                </div>
                <input type="text" class="" value="<?php echo $_SESSION['insider']['insider_name'];?>
" disabled name="username" id="username" placeholder="用户名/已验证手机" />
            </div>
            <div id="name_text">
                <span>用户名不能修改</span>
            </div>
            <div id="content_nick">
                <div id="login_nick">
                    昵称
                </div><input type="hidden" value="<?php echo $_SESSION['insider']['insider_name'];?>
" name="name" id="name" />
                <input type="text" class="" name="nick" id="nick" value="<?php echo $_SESSION['insider']['insider_nick'];?>
" placeholder="请输入昵称" />
                <i class="glyphicon glyphicon-remove-sign ico nick_ico" style="display:none;"></i>
            </div>
            <div id="content_oldpass">
                <div id="login_oldpass">
                    旧密码
                </div>
                <input type="password" class="" name="oldpass" id="oldpass" placeholder="请输入旧密码" />
                <i class="glyphicon glyphicon-remove-sign ico oldpass_ico" style="display:none;"></i>
                <label class="glyphicon ico ico_exes glyphicon-eye-close"></label>
            </div>
            <div id="content_pass">
                <div id="login_pass">
                    新密码
                </div>
                <input type="password" placeholder="请输入密码" name="userpass" id="userpass" />
                <i class=" glyphicon glyphicon-remove-sign pass_ico ico" style="display:none;"></i>
                <label class="glyphicon ico_exe ico glyphicon-eye-close"></label>
            </div>
            <div id="content_password">
                <div id="login_password">
                    确认密码
                </div>
                <input type="password" placeholder="请输入确认密码" name="userpassword" id="userpassword" />
                <i class=" glyphicon glyphicon-remove-sign password_ico ico" style="display:none;"></i>
                <label class="ico_eye ico glyphicon glyphicon-eye-close"></label>
            </div>
            <div id="login_submit">
                <input type="submit" class="" name="login_submit" id="login_submit" value="保存" />
            </div>
            <div id="login_bottom">
                <!-- <ul class="login_bottom_ul">
                    <li class="bottom_li">
                        <span><a href="">忘记密码?</a></span>
                        <span><a href="enroll.html">注册</a></span>
                    </li>
                </ul> -->
            </div>
        </form>
        </div>
    </div>
</body>
</html><?php }} ?>