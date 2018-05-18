<?php /* Smarty version Smarty-3.1.6, created on 2018-05-10 20:29:09
         compiled from "../Tpl/admin\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:275365af13a5fdefd56-08665060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3456010401a714fe8cbce73798780a06c82c758' => 
    array (
      0 => '../Tpl/admin\\Index\\index.html',
      1 => 1525952136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275365af13a5fdefd56-08665060',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af13a5fe1eb6',
  'variables' => 
  array (
    'lists' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af13a5fe1eb6')) {function content_5af13a5fe1eb6($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台首页</title>
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
/bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="<?php echo @ADMIN_JS_URL;?>
/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo @ADMIN_CSS_URL;?>
/bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_CSS_URL;?>
font_ico/iconfont.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_CSS_URL;?>
home.css" />
    <script src="<?php echo @ADMIN_JS_URL;?>
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
        #header_right .header_right_ul{
            height:300px;
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
/dies" style="
                        background:red;">退出
                        </a>
                        <a class="header_left_die" href="<?php echo @__URL__;?>
/admin_edit/id/<?php echo $_smarty_tpl->tpl_vars['lists']->value['ad_id'];?>
" title="当前管理员" style="background:blue;" target="content"><?php echo $_smarty_tpl->tpl_vars['lists']->value['ad_username'];?>

                        </a>
                    </div>
                    <div class="home_top">
                        <span style="font-size:18px;font-weight:bold;">后台页面</span>
                    </div>
                    <div id="header_right">
                        <a href="<?php echo @SITE_URL;?>
index.php/home/Index/index" class="header_left_die" style="background:rgb(99, 201, 3);">前台首页</a>
                            <span class="iconfont icon-gengduo" id="header_right_ico" style="color:rgb(165, 167, 167);"></span>
                        <ul class="header_right_ul">
                            <span class="glyphicon glyphicon-eject" id="header_span"></span>
                            <li><a href="<?php echo @__URL__;?>
/admin.html" target="content">管理员信息</a></li>
                            <li><a href="<?php echo @__GROUP__;?>
/Insider/insider.html" target="content">会员信息</a></li>
                            <li><a href="<?php echo @__GROUP__;?>
/Category/category.html" target="content">商品分类</a></li>
                            <li><a href="<?php echo @__GROUP__;?>
/Goods/goods.html" target="content">商品列表</a></li>
                            <li><a href="<?php echo @__GROUP__;?>
/Rotation/rotation.html" target="content">首页轮播图</a></li>
                            <li><a href="<?php echo @__GROUP__;?>
/Entry/entry" target="content">频道入口</a></li>
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