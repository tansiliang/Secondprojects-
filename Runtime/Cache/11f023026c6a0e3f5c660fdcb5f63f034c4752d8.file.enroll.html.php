<?php /* Smarty version Smarty-3.1.6, created on 2018-05-11 14:39:14
         compiled from "../Tpl/home\User\enroll.html" */ ?>
<?php /*%%SmartyHeaderCode:321015af0f29388e031-63978046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11f023026c6a0e3f5c660fdcb5f63f034c4752d8' => 
    array (
      0 => '../Tpl/home\\User\\enroll.html',
      1 => 1526020724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321015af0f29388e031-63978046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af0f293935fe',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af0f293935fe')) {function content_5af0f293935fe($_smarty_tpl) {?><!DOCTYPE html>
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
    <title>注册页面</title>
    <link rel="stylesheet" type="text/css" href="<?php echo @HOME_CSS_URL;?>
enroll.css" />
    <script src="<?php echo @HOME_JS_URL;?>
enroll.js"></script>
</head>
<body>
    <div id="bodys">
        <header id="header">
            <div id="header_form"><a onclick="location.href='<?php echo @__GROUP__;?>
/Index/index.html'" class="glyphicon glyphicon-chevron-left"></a>
                <span class="header_text">微商城账号注册</span>
            </div>
        </header>
        <div id="content">
            <form action="<?php echo @__URL__;?>
/add" method="post">
            <div id="content_name">
                <div id="login_name">
                    用户名
                </div>
                <input type="text" class="" name="username" id="username" placeholder="用户名/已验证手机" />
                <i class="glyphicon glyphicon-remove-sign ico name_ico" style="display:none;"></i>
            </div>
            <div id="content_nick">
                <div id="login_nick">
                    昵称
                </div>
                <input type="text" class="" name="nick" id="nick" placeholder="请输入昵称" />
                <i class="glyphicon glyphicon-remove-sign ico nick_ico" style="display:none;"></i>
            </div>
            <div id="content_pass">
                <div id="login_pass">
                    密码
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
            <div id="content_email">
                <div id="login_email">
                    邮箱
                </div>
                <input type="text" class="" name="email" id="email" placeholder="请输入邮箱" />
                <i class="glyphicon glyphicon-remove-sign ico email_ico" style="display:none;"></i>
            </div>


            <div id="login_submit">
                <input type="submit" class="" name="login_submit" id="login_submit" value="注册" />
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