<?php /* Smarty version Smarty-3.1.6, created on 2018-05-09 09:21:07
         compiled from "../Tpl/admin\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:110545af03c938244f1-14782242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c8875cc72e450a682122822aa28611e118fa89d' => 
    array (
      0 => '../Tpl/admin\\Login\\login.html',
      1 => 1525828865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110545af03c938244f1-14782242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af03c93acff1',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af03c93acff1')) {function content_5af03c93acff1($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="<?php echo @ADMIN_JS_URL;?>
jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo @ADMIN_CSS_URL;?>
bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <title>后台登录页面</title>
    <link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_CSS_URL;?>
login.css" />
    <script src="<?php echo @ADMIN_JS_URL;?>
login.js"></script>
</head>
<body>
    <div id="bodys">
        <header id="header">
            <div id="header_form"><a onclick="location.href='<?php echo @SITE_URL;?>
index.php/ADMIN/Index/index'" class="glyphicon glyphicon-chevron-left"></a>
                <span class="header_text">商城后台登录</span>
            </div>
        </header>
        <div id="content">
            <form action="<?php echo @__GROUP__;?>
/Index" method="post">
            <div id="content_name">
                <div id="login_name">
                    账号
                </div>
                <input type="text" class="" name="ad_username" id="username" placeholder="用户名/已验证手机" />
                <i class="glyphicon glyphicon-remove-sign ico name_ico" style="display:none;"></i>
            </div>
            <div id="content_pass">
                <div id="login_pass">
                    密码
                </div>
                <input type="password" placeholder="请输入密码" name="ad_userpass" id="userpass" />
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
                    </li>
                </ul>
            </div>
        </form>
    </div>
    </div>
</body>
</html><?php }} ?>