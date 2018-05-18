<?php /* Smarty version Smarty-3.1.6, created on 2018-05-11 08:30:59
         compiled from "../Tpl/admin\Category\Category.html" */ ?>
<?php /*%%SmartyHeaderCode:149915af2ddcc30ef22-37478063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '291c2bba191e4060a4b0ba8301ec5e0423ecc3e2' => 
    array (
      0 => '../Tpl/admin\\Category\\Category.html',
      1 => 1525866663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149915af2ddcc30ef22-37478063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af2ddcc43bbe',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af2ddcc43bbe')) {function content_5af2ddcc43bbe($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品分类列表</title>
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
            <th colspan="2" class="header_style">商品分类列表</th>
            <th colspan="2" class="header_style"><a href="<?php echo @__URL__;?>
/category_add.html" class="header_style_a" >添加商品分类信息</a></th>
        </tr>
        <tr>
            <th>用户名</th>
            <th>排序</th>
            <th>是否显示</th>
            <th>操作</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <tr>
            <td style="text-align:left;"><?php echo str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['row']->value['dree']);?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['category_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['category_order'];?>
</td>
            <td><img src="<?php echo @ADMIN_IMG_URL;?>
<?php if ($_smarty_tpl->tpl_vars['row']->value['category_show']==1){?>yes<?php }else{ ?>no<?php }?>.gif" /></td>
            <td><a href="<?php echo @__URL__;?>
/category_edit/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
">编辑</a><a onclick="if(window.confirm('是否确定删除？？？')){ location.href='<?php echo @__URL__;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
'}" >删除</a></td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html><?php }} ?>