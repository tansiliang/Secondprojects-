<?php /* Smarty version Smarty-3.1.6, created on 2018-05-11 15:14:22
         compiled from "../Tpl/home\User\account.html" */ ?>
<?php /*%%SmartyHeaderCode:66225af04c0dda08d0-53967618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b58e22ea84540d1ec0c5fd4e2186b054b6deaa05' => 
    array (
      0 => '../Tpl/home\\User\\account.html',
      1 => 1526022838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66225af04c0dda08d0-53967618',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af04c0de5828',
  'variables' => 
  array (
    'insider_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af04c0de5828')) {function content_5af04c0de5828($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo @HOME_CSS_URL;?>
bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="<?php echo @HOME_JS_URL;?>
/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo @HOME_CSS_URL;?>
bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="<?php echo @HOME_CSS_URL;?>
font_ico/iconfont.css" />
    <title>账号设置</title>
    <link rel="stylesheet" type="text/css" href="<?php echo @HOME_CSS_URL;?>
account_set.css" />
    <script src="<?php echo @HOME_JS_URL;?>
account_set.js"></script>
</head>
<body>
    <div id="bodys">
            <div id="header" class="" >
                <div class="header_row">
                    <div id="header_form">
                        <div id="header_left">
                            <a href="<?php echo @__GROUP__;?>
/home/Index/home.html" style="color:rgb(165, 167, 167);">
                                <span class="glyphicon glyphicon-chevron-left"><br/></span>
                            </a>
                        </div>
                        <div class="home_top">
                            <span>账号设置</span>
                        </div>
                        <div id="header_right">
                                <span class="iconfont icon-gengduo" id="header_right_ico" style="color:rgb(165, 167, 167);"></span>
                            <ul class="header_right_ul">
                                <span class="glyphicon glyphicon-eject" id="header_span"></span>
                                <li><a class="glyphicon glyphicon-home"></a><a href="<?php echo @__GROUP__;?>
/home/Index/index.html">首页</a></li>
                                <li><a class="glyphicon glyphicon-share"></a><a href="classify.html">分类搜索</a></li>
                                <li><a class="glyphicon glyphicon-shopping-cart"></a><a href="shopcart.html">购物车</a></li>
                                <li><a class="glyphicon glyphicon-user"></a><a href="home.html">我的</a></li>
                                <li><a class="glyphicon glyphicon-globe"></a><a href="">我的足迹</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content">
                <div id="content_top">
                    <div id="top">
                        <span>当前登录账号</span>
                    </div>
                </div>
                <ul id="content_top_ul">
                    <?php if (isset($_SESSION['insider_name'])){?>
                        <li class="top_ul_li">
                            <img class="content_top_ul_img" src="<?php echo @UPLOAD_DIR;?>
<?php echo $_SESSION['insider']['insider_images'];?>
" />   
                            <div id="pet_div"><?php echo $_SESSION['insider']['insider_nick'];?>
</div>
                            <div id="user_div">用户名：<span><?php echo $_SESSION['insider']['insider_name'];?>
</span></div>
                        </li>
                    <?php }else{ ?>
                    <li class="top_ul_li">
                            <img class="content_top_ul_img" src="<?php echo @UPLOAD_DIR;?>
<?php echo $_smarty_tpl->tpl_vars['insider_list']->value['insider_images'];?>
" />
                            <div id="pet_div"></div>
                            <div id="user_div"><a href="<?php echo @__GROUP__;?>
/User/Login">登录/注册</a></div>
                        </li>
                    <?php }?>
                </ul>
                <ul class="set_info">
                    <li class="info_form nick_form">
                        <span>修改昵称</span>
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </li><a href="alert.html">
                    <li class="info_form">
                        <span>修改登录密码</span>
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </li></a><a href="take.html">
                    <li class="info_form">
                            <span>收货地址管理</span>
                            <span class="glyphicon glyphicon-chevron-right"></span>
                    </li></a>
                </ul>
                <?php if (isset($_SESSION['insider_name'])){?>
                <div id="content_out">
                    <div id="out_div">
                        <button onclick="window.confirm('是否确定退出？？?')? location.href='<?php echo @__GROUP__;?>
/User/dies':null;">退出登录</button>
                    </div>
                </div>
                <?php }?>
            </div>
            <div id="nick_bg"></div>
            <div id="footer">
                <div id="footer_logo">编辑微商城的账号信息</div>
                    <form action="<?php echo @__URL__;?>
/edit_nick" method="post">
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
" /><input type="hidden" value="<?php echo $_SESSION['insider']['insider_name'];?>
" name="name" id="name" />
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
    </div>
</body>
</html><?php }} ?>