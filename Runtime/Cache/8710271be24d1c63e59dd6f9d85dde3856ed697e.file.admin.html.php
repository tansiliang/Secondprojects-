<?php /* Smarty version Smarty-3.1.6, created on 2018-05-09 15:52:02
         compiled from "../Tpl/ADMIN\Index\admin.html" */ ?>
<?php /*%%SmartyHeaderCode:180075af2a8a23e40d7-27201174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8710271be24d1c63e59dd6f9d85dde3856ed697e' => 
    array (
      0 => '../Tpl/ADMIN\\Index\\admin.html',
      1 => 1525848055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180075af2a8a23e40d7-27201174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af2a8a25013a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af2a8a25013a')) {function content_5af2a8a25013a($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员列表</title>
    <link rel="stylesheet" href="<?php echo @HOME_CSS_URL;?>
/bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="<?php echo @HOME_JS_URL;?>
/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo @HOME_CSS_URL;?>
/bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" />
</head>
<body>
<div style="max-width:640px;margin:auto;">
    <table class="table table-bordered">
        <tr>
            <th colspan="2" class="header_style">管理员列表</th>
            <th colspan="2" class="header_style"><a href="<?php echo @__URL__;?>
/admin_add.html" class="header_style_a" >添加管理员信息</a></th>
        </tr>
        <tr>
            <th>编号</th>
            <th>用户名</th>
            <th>登录日期</th>
            <th>操作</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->iteration;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ad_username'];?>
</td>
            <td><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['row']->value['ad_addtime']);?>
</td>
            <td><a href="<?php echo @__URL__;?>
/admin_edit/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['ad_id'];?>
">编辑</a><a onclick="if(window.confirm('是否确定删除？？？')){ location.href='<?php echo @__URL__;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['ad_id'];?>
'}" >删除</a></td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html><?php }} ?>