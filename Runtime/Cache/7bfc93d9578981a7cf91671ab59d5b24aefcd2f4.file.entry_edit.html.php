<?php /* Smarty version Smarty-3.1.6, created on 2018-05-10 20:03:46
         compiled from "../Tpl/admin\Entry\entry_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:121705af434f3e86b67-64506320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bfc93d9578981a7cf91671ab59d5b24aefcd2f4' => 
    array (
      0 => '../Tpl/admin\\Entry\\entry_edit.html',
      1 => 1525953810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121705af434f3e86b67-64506320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af434f4032c2',
  'variables' => 
  array (
    'list' => 0,
    'show' => 0,
    'sel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af434f4032c2')) {function content_5af434f4032c2($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\weixin-two\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_radios.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo @HOME_CSS_URL;?>
/bootstrap-3.3.7/dist/css/bootstrap.min.css" />
    <script src="<?php echo @HOME_JS_URL;?>
/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo @HOME_CSS_URL;?>
/bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" />
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
        #username ,#pass,#userpass,#time,#old,#salt{
            color:red;
        }
        
        </style>
        <script type="text/javascript">
        
        $("document").ready(function(){
            $("#entry_imgthumn").change(function(){
                var work_img = document.getElementById("entry_imgthumn").files[0];
                var imgs = document.getElementById('imagess');
                imgs.src = window.URL.createObjectURL(work_img);
            });
        });
        
    </script>
</head>
<body>
    <table class="table table-bordered">
        <form action="<?php echo @__URL__;?>
/edit" method="post" enctype="multipart/form-data">
        <thead>
            <tr>
                <th colspan="3" class="header_style"><a href="<?php echo @__URL__;?>
/entry" class="header_style_a" >频道入口列表</a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>入口名称</td>
                <td><input type="text" class="form-control" name="entry_name" id="entry_name" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['entry_name'];?>
" /></td>
                <td id="username"></td>
            </tr>
            <tr>
                <td>入口地址</td>
                <td><input type="text" class="form-control" name="entry_url" id="entry_url" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['entry_url'];?>
" /></td>
                <td id="url"></td>
            </tr>
            <tr>
                <td>图片</td>
                <td><input type="file" name="entry_imgthumn" id="entry_imgthumn" /></td>
                <td><img id="imagess" src="<?php echo @UPLOAD_DIR;?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['entry_images'];?>
" style="max-height:100px;max-width:100px;" /><input type="hidden" name="img_images" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['entry_images'];?>
" /></td>
            </tr>
            <tr>
                <td>添加时间</td>
                <td><input type="text" class="form-control"  name="entry_time" value="<?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['list']->value['entry_time']);?>
" disabled id="entry_time" /></td>
                <td id="time"></td>
            </tr>
            <tr>
                <td>是否显示</td>
                <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['show']->value,'selected'=>$_smarty_tpl->tpl_vars['sel']->value,'name'=>'entry_show'),$_smarty_tpl);?>
</td>
                <td id="show"></td>
            </tr>
            <tr>
                <td>排序</td>
                <td><input type="text" class="form-control" name="entry_order" id="entry_order" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['entry_order'];?>
" /></td>
                <td id="userpass"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['entry_id'];?>
" name="entry_id" id="entry_id" />
                <td colspan="3"><button type="reset" class="btn btn-danger" name="entry_ap_res" id="entry_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="entry_ap_sub" id="entry_ap_sub" >修改</button></td>
            </tr>
        </tfoot>
        </form>
        </table>
</body>
</html><?php }} ?>