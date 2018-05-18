<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="./js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="./css/bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <title>登录页面</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css" />
    <script src="./js/login.js"></script>
</head>
<body>
    <div id="bodys">
        <header id="header">
            <div id="header_form"><a onclick="location.href='index.html'" class="glyphicon glyphicon-chevron-left"></a>
                <span class="header_text">商城登录</span>
            </div>
        </header>
        <div id="content">
            <form action="">
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
</html>