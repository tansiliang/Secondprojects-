<?php /* Smarty version Smarty-3.1.6, created on 2018-05-11 08:40:18
         compiled from "../Tpl/home\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:305655af03f4730b737-04206085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '077691865e5c4174a9e7fca43a7d73e21867960a' => 
    array (
      0 => '../Tpl/home\\Index\\index.html',
      1 => 1525999215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305655af03f4730b737-04206085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af03f47418ff',
  'variables' => 
  array (
    'rota_list' => 0,
    'rota_row' => 0,
    'rota_rows' => 0,
    'entry_list' => 0,
    'entry' => 0,
    'goods_list' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af03f47418ff')) {function content_5af03f47418ff($_smarty_tpl) {?><!-- 谭思良 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商城</title>
    <link rel="stylesheet" href="<?php echo @HOME_CSS_URL;?>
/bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="<?php echo @HOME_JS_URL;?>
/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo @HOME_CSS_URL;?>
/bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?php echo @HOME_CSS_URL;?>
/index.css" type="text/css" />
    <script src="<?php echo @HOME_JS_URL;?>
/index.js"></script>
    <script>
        
        $("document").ready(function(){
            $(".sousuo").focus(function(){
                $(this).css({'opacity': '1',});
                $("#header").css({'opacity':'1'});
            });
            $(".sousuo").blur(function(){
                $(this).css({'opacity':'0.5',});
                
            })
            $("#index_content_list").scroll(function(){
                $('#header').css({'opacity':'1'});
            });

            var divs = $(".item");
            var lis = $('.carousel-indicators li');
            for(var i = 0; i < divs.length; i++){
                divs.eq(0).addClass("active");
                lis.eq(0).addClass("active");
            }
        });
        
    </script>
</head>
<body style="font-size:0;">
    <div style="max-width:640px; height:auto; margin:auto;">
    <!-- 头部搜索框 -->
<div id="header" class="" >
    <div class="header_row">
        <div id="header_form">
            <div id="header_left">
                <a href="<?php echo @__URL__;?>
/classify.html" style="color:rgb(165, 167, 167);">
                <span class="glyphicon glyphicon-th-list"></span>
                </a>
            </div>
            <from class="bs-example bs-example-form" role="form">
                <input type="text" class="form-control sousuo " placeholder="搜索" ><button type="submit" class=" header_tp btn btn-default"><span class="glyphicon glyphicon-search"></span>
                </button>
            </from>
            <div id="header_right">
                <a href="<?php echo @__URL__;?>
/home.html" style="color:rgb(165, 167, 167);">
                    <span class="glyphicon glyphicon-user"><br/></span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- 图片轮播 -->
<div id="index_content">
    <div id="index_content_list">
    <div id="sowing" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php  $_smarty_tpl->tpl_vars['rota_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rota_row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rota_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['rota_row']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['rota_row']->key => $_smarty_tpl->tpl_vars['rota_row']->value){
$_smarty_tpl->tpl_vars['rota_row']->_loop = true;
 $_smarty_tpl->tpl_vars['rota_row']->index++;
?>
                <?php if ($_smarty_tpl->tpl_vars['rota_row']->value['rota_show']==1&&$_smarty_tpl->tpl_vars['rota_row']->index<4){?>
                <li data-target="#sowing" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['rota_row']->index;?>
"></li>
                <?php }?>
            <?php } ?>
        </ol>
        <div class="carousel-inner">
            <?php  $_smarty_tpl->tpl_vars['rota_rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rota_rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rota_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['rota_rows']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['rota_rows']->key => $_smarty_tpl->tpl_vars['rota_rows']->value){
$_smarty_tpl->tpl_vars['rota_rows']->_loop = true;
 $_smarty_tpl->tpl_vars['rota_rows']->index++;
?>
            <?php if ($_smarty_tpl->tpl_vars['rota_rows']->value['rota_show']==1&&$_smarty_tpl->tpl_vars['rota_rows']->index<4){?>
            <div class="item">
                <img src="<?php echo @UPLOAD_DIR;?>
<?php echo $_smarty_tpl->tpl_vars['rota_rows']->value['rota_images'];?>
" alt="">
            </div>
            <?php }?>
            <?php } ?>
        </div>
        <a class="left carousel-control " href="#sowing" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control"  href="#sowing" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    <div id="content">
            <div class="content_div">
                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['entry']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['entry']->index++;
?>
                    <?php if ($_smarty_tpl->tpl_vars['entry']->value['entry_show']==1&&$_smarty_tpl->tpl_vars['entry']->index<10){?>
                    <a class="thumbnail spans" href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['entry_url'];?>
">
                        <img src="<?php echo @UPLOAD_DIR;?>
<?php echo $_smarty_tpl->tpl_vars['entry']->value['entry_images'];?>
" />
                            <span><?php echo $_smarty_tpl->tpl_vars['entry']->value['entry_name'];?>
</span>
                    </a>
                    <?php }?>
                <?php } ?>
                    
            </div>
            <div >
                <h4 class="text-center goods">推荐商品</h4>
                <div class="tuiju">
                    <?php  $_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goods']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->key => $_smarty_tpl->tpl_vars['goods']->value){
$_smarty_tpl->tpl_vars['goods']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['goods']->value['goods_groom']==1&&$_smarty_tpl->tpl_vars['goods']->value['goods_show']==1){?>
                    <div class="thumbnail reco">
                        <span class=" glyphicon glyphicon-remove" style="float:right;" onclick="getRemo(this)"></span>
                        <a class="" href="<?php echo @__URL__;?>
/list.html">
                                <img src="<?php echo @UPLOAD_DIR;?>
<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_images'];?>
" />
                                <ul>
                                    <li class="reco_li_j"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_desc'];?>
 </li>
                                    <li class="reco_li_m">￥<span><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
</span></li>
                                </ul>
                                
                        </a>
                    </div>
                    <?php }?>
                    <?php } ?>
                </div>
                
                
            </div>
    </div>
    </div>
</div>
<div id="footer">
    <div class="container-fluid navbar-fixed-bottom footer_div">
        <ul class="nav nav-pills">
                <li class="footer_li" onclick="get(0)"><a href="<?php echo @__URL__;?>
/index.html" class="glyphicon glyphicon-home"><br/>首页</a></li>
                <li class="active footer_li" onclick="get(1)"><a href="<?php echo @__URL__;?>
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