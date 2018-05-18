<?php /* Smarty version Smarty-3.1.6, created on 2018-05-11 07:47:03
         compiled from "../Tpl/admin\Rotation\rotation_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:161855af4156b59aa11-72063556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cea79d3d5ed74df24564e11c561e0d309c7034d5' => 
    array (
      0 => '../Tpl/admin\\Rotation\\rotation_edit.html',
      1 => 1525995393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161855af4156b59aa11-72063556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af4156b64e53',
  'variables' => 
  array (
    'list' => 0,
    'show' => 0,
    'sel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af4156b64e53')) {function content_5af4156b64e53($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\weixin-two\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_radios.php';
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
            $("#rota_imgthumn").change(function(){
                var work_img = document.getElementById("rota_imgthumn").files[0];
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
/admin.html" class="header_style_a" >图片轮播列表</a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>图片名称</td>
                <td><input type="text" class="form-control" name="rota_name" id="rota_name" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['rota_name'];?>
" /></td>
                <td id="username"></td>
            </tr>
            <tr>
                <td>图片</td>
                <td><input type="file" name="rota_imgthumn" id="rota_imgthumn" /></td>
                <td><img id="imagess" src="<?php echo @UPLOAD_DIR;?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['rota_images'];?>
" style="max-height:100px;max-width:100px;" /><input type="hidden" name="rota_images" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['rota_images'];?>
" /><input type="hidden" name="rota_thumn" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['rota_thumn'];?>
" /></td>
            </tr>
            <tr>
                <td>添加时间</td>
                <td><input type="text" class="form-control"  name="rota_time" value="<?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['list']->value['rota_time']);?>
" disabled id="rota_time" /></td>
                <td id="time"></td>
            </tr>
            <tr>
                <td>是否显示</td>
                <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['show']->value,'selected'=>$_smarty_tpl->tpl_vars['sel']->value,'name'=>'rota_show'),$_smarty_tpl);?>
</td>
                <td id="show"></td>
            </tr>
            <tr>
                <td>排序</td>
                <td><input type="text" class="form-control" name="rota_order" id="rota_order" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['rota_order'];?>
" /></td>
                <td id="userpass"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['rota_id'];?>
" name="rota_id" id="rota_id" />
                <td colspan="3"><button type="reset" class="btn btn-danger" name="rota_ap_res" id="rota_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="rota_ap_sub" id="rota_ap_sub" >修改</button></td>
            </tr>
        </tfoot>
        </form>
        </table>
</body>
</html><?php }} ?>