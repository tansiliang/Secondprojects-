<?php /* Smarty version Smarty-3.1.6, created on 2018-05-10 20:16:45
         compiled from "../Tpl/admin\Entry\entry_add.html" */ ?>
<?php /*%%SmartyHeaderCode:19905af4309d161552-93359807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1ac761f520a5ade61c8cca0e8be31fdbb27fd82' => 
    array (
      0 => '../Tpl/admin\\Entry\\entry_add.html',
      1 => 1525952722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19905af4309d161552-93359807',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af4309d24000',
  'variables' => 
  array (
    'list' => 0,
    'show' => 0,
    'sel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af4309d24000')) {function content_5af4309d24000($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\weixin-two\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_radios.php';
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
                var name = $("#entry_name").val();
                if(name == ""){
                    e.preventDefault();
                    alert("填写信息不符合,请更改不符合的信息！！！");
                }
            });
            //二进制图片
            $("#entry_images").change(function(){
                var work_img = document.getElementById("entry_images").files[0];
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
/entry'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>图片列表</button></th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>入口名称</td>
                <td><input type="text" placeholder="" class="form-control" name="entry_name" id="entry_name" value="" /></td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>入口地址</td>
                <td><input type="text" placeholder="" class="form-control" name="entry_url" id="entry_url" value="" /></td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>入口图标</td>
                <td><input type="file" name="entry_images" id="entry_images" /></td>
                <td id=""><img id="imagess" src='<?php echo @UPLOAD_DIR;?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['entry_images'];?>
' style="max-height:100px;max-width:100px;" /></td>
            </tr>
            <tr>
                <td>是否显示</td>
                <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['show']->value,'selected'=>$_smarty_tpl->tpl_vars['sel']->value,'name'=>'entry_show'),$_smarty_tpl);?>
</td>
                <td id="show"></td>
            </tr>
            <tr>
                <td>排序</td>
                <td><input type="text" class="form-control" placeholder="" name="entry_order" id="entry_order" value="1" /></td>
                <td id="order"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"><button type="reset" class="btn btn-danger" name="entry_ap_res" id="entry_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="entry_ap_sub" id="entry_ap_sub" >创建</button></td>
            </tr>
        </tfoot>
        </form>
    </table>
</body>
</html><?php }} ?>