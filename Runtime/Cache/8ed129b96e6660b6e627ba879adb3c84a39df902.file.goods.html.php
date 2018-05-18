<?php /* Smarty version Smarty-3.1.6, created on 2018-05-09 21:13:40
         compiled from "../Tpl/admin\Goods\goods.html" */ ?>
<?php /*%%SmartyHeaderCode:179655af2eb7ce20c50-32461457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ed129b96e6660b6e627ba879adb3c84a39df902' => 
    array (
      0 => '../Tpl/admin\\Goods\\goods.html',
      1 => 1525871416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179655af2eb7ce20c50-32461457',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af2eb7cea1af',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af2eb7cea1af')) {function content_5af2eb7cea1af($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品列表</title>
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
/bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="<?php echo @ADMIN_JS_URL;?>
/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo @ADMIN_CSS_URL;?>
/bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" />
</head>
<body>
<div style="max-width:640px;margin:auto;">
    <table class="table table-bordered">
        <tr>
            <th colspan="2" class="header_style">商品列表</th>
            <th colspan="2" class="header_style"><a href="<?php echo @__URL__;?>
/goods_add" class="header_style_a" >添加商品信息</a></th>
        </tr>
        <tr>
            <th>商品名称</th>
            <th>价格</th>
            <th>上架</th>
            <th>操作</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['goods_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['goods_price'];?>
</td>
            <td><img src="<?php echo @ADMIN_IMG_URL;?>
<?php if ($_smarty_tpl->tpl_vars['row']->value['goods_show']==1){?>yes<?php }else{ ?>no<?php }?>.gif" /></td>
            <td><a href="<?php echo @__URL__;?>
/goods_edit/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['goods_id'];?>
">编辑</a><a onclick="if(window.confirm('是否确定删除？？？')){ location.href='<?php echo @__URL__;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['goods_id'];?>
'}" >删除</a></td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html><?php }} ?>