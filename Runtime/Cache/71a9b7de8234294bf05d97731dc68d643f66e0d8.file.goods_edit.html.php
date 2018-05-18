<?php /* Smarty version Smarty-3.1.6, created on 2018-05-11 08:07:38
         compiled from "../Tpl/admin\Goods\goods_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:108365af388473acf61-85683580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71a9b7de8234294bf05d97731dc68d643f66e0d8' => 
    array (
      0 => '../Tpl/admin\\Goods\\goods_edit.html',
      1 => 1525997236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108365af388473acf61-85683580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af388473b8ae',
  'variables' => 
  array (
    'list' => 0,
    'link' => 0,
    'row' => 0,
    'show' => 0,
    'sel' => 0,
    'groom' => 0,
    'groom_sel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af388473b8ae')) {function content_5af388473b8ae($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\PHPStudy\\WWW\\weixin-two\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_radios.php';
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
                $("#goods_imgthumn").change(function(){
                var work_img = document.getElementById("goods_imgthumn").files[0];
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
                    <th colspan="3"><button type="button" onclick="location.href='<?php echo @__URL__;?>
/goods'" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" style="font-size:10px;margin-right:2px;"></span>商品列表</button></th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>分类名</td>
                <td><input type="" placeholder="" class="form-control" name="goods_name" id="goods_name" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['goods_name'];?>
" /></td>
                <td id="name"></td>
            </tr>
            <tr>
                <td>库存</td>
                <td><input type="text" class="form-control"  name="goods_number" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['goods_number'];?>
" id="goods_number" /></td>
                <td id="url"></td>
            </tr>
            <tr>
                <td>货号</td>
                <td><input type="text" class="form-control"  name="goods_sn" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['goods_sn'];?>
" id="goods_sn" /></td>
                <td id="sn"></td>
            </tr>
            <tr>
                <td>当前分类</td>
                <td>
                    <select name="goods_cateid" class="form-control">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['category_id']==$_smarty_tpl->tpl_vars['list']->value['goods_cateid']){?>selected<?php }?> ><?php echo str_repeat("&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['row']->value['dree']);?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['category_name'];?>
</option>
                        <?php } ?>
                    </select>
                </td>
                <td id="parent"></td>
            </tr>
            <tr>
                    <td>商品描述</td>
                    <td>
                        <textarea rows="3" class="form-control" cols="10" id="goods_desc" name="goods_desc"><?php echo $_smarty_tpl->tpl_vars['list']->value['goods_desc'];?>
</textarea>
                    </td>
                    <td id="price"></td>
                </tr>
                <tr>
                    <td>价格</td>
                    <td><input type="text" placeholder="" class="form-control" name="goods_price" id="goods_price" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['goods_price'];?>
" /></td>
                    <td id="price"></td>
                </tr>
                <tr>
                    <td>图片</td>
                    <td><input type="file" name="goods_imgthumn" id="goods_imgthumn" /></td>
                    <td><img id="imagess" src="<?php echo @UPLOAD_DIR;?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['goods_images'];?>
" style="max-height:100px;max-width:100px;" /><input type="hidden" name="goods_images" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['goods_images'];?>
" /><input type="hidden" name="goods_thumn" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['goods_thumn'];?>
" /></td>
                </tr>
                <tr>
                    <td>商品状态</td>
                    <td><input type="checkbox" name="is_best" value="1" <?php if (1&$_smarty_tpl->tpl_vars['list']->value['goods_stutas']){?>checked<?php }?> />精品 <input type="checkbox" name="is_new" value="2" <?php if (2&$_smarty_tpl->tpl_vars['list']->value['goods_stutas']){?>checked<?php }?>/>新品 <input type="checkbox" name="is_hot" value="4" <?php if (4&$_smarty_tpl->tpl_vars['list']->value['goods_stutas']){?>checked<?php }?>/>热销</td>
                    <td id="number"></td>
                </tr>
            <tr>
                <td>是否上架</td>
                <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['show']->value,'selected'=>$_smarty_tpl->tpl_vars['sel']->value,'name'=>'goods_show'),$_smarty_tpl);?>
</td>
                <td id="show"></td>
            </tr>
            <tr>
                <td>是否推荐</td>
                <td><?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['groom']->value,'selected'=>$_smarty_tpl->tpl_vars['groom_sel']->value,'name'=>'goods_groom'),$_smarty_tpl);?>
</td>
                <td id="show"></td>
            </tr>
            <tr>
                <td>创建时间</td>
                <td><input type="text" class="form-control" name="add_time" id="" value="<?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['list']->value['add_time']);?>
" disabled/></td>
                <td id=""></td>
            </tr>
            <tr>
                <td>更新时间</td>
                <td><input type="text" class="form-control" name="goods_updatetime" id="" value="<?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['list']->value['goods_updatetime']);?>
" disabled/></td>
                <td id=""></td>
            </tr>
            <tr>
                <td>排序</td>
                <td><input type="text" class="form-control" placeholder="" name="goods_order" id="goods_order" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['goods_order'];?>
" /></td>
                <td id="order"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['goods_id'];?>
" name="goods_id" id="goods_id" />
                <td colspan="3"><button type="reset" class="btn btn-danger" name="goods_ap_res" id="goods_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="goods_ap_sub" id="goods_ap_sub" >修改</button></td>
            </tr>
        </tfoot>
        </form>
    </table>
</body>
</html><?php }} ?>