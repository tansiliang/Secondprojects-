<?php /* Smarty version Smarty-3.1.6, created on 2018-05-10 13:19:53
         compiled from "../Tpl/admin\Category\category_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:288435af2e165e9ae32-82096528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fa891910808efd15059eed1f3874699f30a5f77' => 
    array (
      0 => '../Tpl/admin\\Category\\category_edit.html',
      1 => 1525910978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288435af2e165e9ae32-82096528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af2e1660103e',
  'variables' => 
  array (
    'list' => 0,
    'link' => 0,
    'row' => 0,
    'show' => 0,
    'sel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af2e1660103e')) {function content_5af2e1660103e($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\weixin-two\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_radios.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
/bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="<?php echo @ADMIN_JS_URL;?>
/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo @ADMIN_CSS_URL;?>
/bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <title>编辑页面</title>
    <style>
        
        .table tbody tr td,.table tfoot tr td{
            text-align:center;
            vertical-align:middle;
        }
        .table-bordered thead tr th,.table-bordered tbody tr td{
            border-bottom-width: 0;
            border:1px solid #B5CFD9;
        }
        #name ,#pass,#order,#url,#old,#salt{
            color:red;
        }
        
        </style>
        <script>
            
            $("document").ready(function(){
                 var values = true;
                $("#category_name").keyup(function(){
                    var name = $("#category_name").val();
                    if(name == ""){
                        $("#name").text("修改的分类名不能为空！！！");
                        values = false;
                        return values;
                    }
                });
                 $("form").submit(function(e){
                    var name = $("#category_name").val();
                    if(values == false || values == null || name == "" || url == ""){
                        e.preventDefault();
                        alert("填写信息不符合,请更改不符合的信息！！！");
                    }
                 });
            });
            
        </script>
</head>
<body>
    <table class="table table-bordered">
        <form action="<?php echo @__URL__;?>
/edit" method="post">
            <thead>
                <tr>
                    <th colspan="3"><button type="button" onclick="location.href='<?php echo @__URL__;?>
/category'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>管理员列表</button></th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>分类名</td>
                <td><input type="" placeholder="" class="form-control" name="category_name" id="category_name" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['category_name'];?>
" /></td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>数量</td>
                <td><input type="text" class="form-control"  name="category_number" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['category_number'];?>
" id="category_number" /></td>
                <td id="url"></td>
            </tr>
            <tr>
                <td>当前分类</td>
                <td>
                    <select name="category_parentid" class="form-control">
                        <option value="0">顶级分类</option>
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['category_id']==$_smarty_tpl->tpl_vars['list']->value['category_parentid']){?>selected<?php }?> ><?php echo str_repeat("&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['row']->value['dree']);?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['category_name'];?>
</option>
                        <?php } ?>
                    </select>
                </td>
                <td id="parent"></td>
            </tr>
            <tr>
                <td>是否显示</td>
                <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['show']->value,'selected'=>$_smarty_tpl->tpl_vars['sel']->value,'name'=>'category_show'),$_smarty_tpl);?>
</td>
                <td id="show"></td>
            </tr>
            <tr>
                <td>排序</td>
                <td><input type="text" class="form-control" placeholder="" name="category_order" id="category_order" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['category_order'];?>
" /></td>
                <td id="order"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['category_id'];?>
" name="category_id" id="category_id" />
                <td colspan="3"><button type="reset" class="btn btn-danger" name="category_ap_res" id="category_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="category_ap_sub" id="category_ap_sub" >修改</button></td>
            </tr>
        </tfoot>
        </form>
    </table>
</body>
</html><?php }} ?>