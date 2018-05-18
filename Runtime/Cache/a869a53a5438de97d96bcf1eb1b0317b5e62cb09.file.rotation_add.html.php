<?php /* Smarty version Smarty-3.1.6, created on 2018-05-10 21:30:41
         compiled from "../Tpl/admin\Rotation\rotation_add.html" */ ?>
<?php /*%%SmartyHeaderCode:195065af40a373ae410-79977250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a869a53a5438de97d96bcf1eb1b0317b5e62cb09' => 
    array (
      0 => '../Tpl/admin\\Rotation\\rotation_add.html',
      1 => 1525952530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195065af40a373ae410-79977250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af40a377a208',
  'variables' => 
  array (
    'list' => 0,
    'show' => 0,
    'sel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af40a377a208')) {function content_5af40a377a208($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\weixin-two\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_radios.php';
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
    <style>
        
        .table tbody tr td,.table tfoot tr td{
            text-align:center;
            vertical-align:middle;
        }
        .table-bordered thead tr th,.table-bordered tbody tr td{
            border-bottom-width: 0;
            border:1px solid #B5CFD9;
        }
        #username ,#pass,#order,#url,#old,#salt{
            color:red;
        }
        
        </style>
        <script>
            
            $("deocument").ready(function(){
            $("form").submit(function(e){
                var name = $("#rota_name").val();
                if(name == ""){
                    e.preventDefault();
                    alert("填写信息不符合,请更改不符合的信息！！！");
                }
            });
            //二进制图片
            $("#rota_images").change(function(){
                var work_img = document.getElementById("rota_images").files[0];
                var imgs = document.getElementById('imagess');
                imgs.src = window.URL.createObjectURL(work_img);
            });
        });
            
        </script>
</head>
<body>
    <table class="table table-bordered">
        <form action="<?php echo @__URL__;?>
/add" method="post" enctype="multipart/form-data">
            <thead>
                <tr>
                    <th colspan="3"><button type="button" onclick="location.href='<?php echo @__URL__;?>
/rotation'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>图片列表</button></th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>图片名称</td>
                <td><input type="text" placeholder="" class="form-control" name="rota_name" id="rota_name" value="" /></td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>商品图片</td>
                <td><input type="file" name="rota_images" id="rota_images" /></td>
                <td id=""><img id="imagess" src='<?php echo @UPLOAD_DIR;?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['rota_images'];?>
' style="max-height:100px;max-width:100px;" /><input type="hidden" name="img_thumn" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['rota_images'];?>
" /></td>
            </tr>
            <tr>
                <td>是否显示</td>
                <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['show']->value,'selected'=>$_smarty_tpl->tpl_vars['sel']->value,'name'=>'rota_show'),$_smarty_tpl);?>
</td>
                <td id="show"></td>
            </tr>
            <tr>
                <td>排序</td>
                <td><input type="text" class="form-control" placeholder="" name="rota_order" id="rota_order" value="1" /></td>
                <td id="order"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"><button type="reset" class="btn btn-danger" name="rota_ap_res" id="rota_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="rota_ap_sub" id="rota_ap_sub" >创建</button></td>
            </tr>
        </tfoot>
        </form>
    </table>
</body>
</html><?php }} ?>