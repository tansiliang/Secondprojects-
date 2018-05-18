<?php /* Smarty version Smarty-3.1.6, created on 2018-05-09 13:19:17
         compiled from "../Tpl/admin\Index\admin_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:247735af262f7dece47-23027001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29c4c5af9b3d9bc9512df19bf7c3161a354cf441' => 
    array (
      0 => '../Tpl/admin\\Index\\admin_edit.html',
      1 => 1525838420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247735af262f7dece47-23027001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af262f7e94df',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af262f7e94df')) {function content_5af262f7e94df($_smarty_tpl) {?><!DOCTYPE html>
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
        #username ,#pass,#userpass,#email,#old,#salt{
            color:red;
        }
        
        </style>
        <script type="text/javascript">
        
        $("document").ready(function(){
            var values = TextTrackCue;
            //判断编辑页面的用户名
            $("#ad_username").keyup(function(){
                var name = $(this).val();
                if(name == ""){
                    $("#username").text("修改的用户名不能为空！！！");
                    values = false;
                    return values;
                }
                $.ajax({
                    url:"index.php?p=admin&c=Admin&a=editajax",
                    data:"ad_username="+name+"&id={^$list['ad_id']$}",
                    type:"post",
                    dataType:"html",
                    success:function(info){
                        if(info == "更改的用户名已经存在，请重新输入！！！"){
                            $("#username").text(info);
                            values = false;
                            return values;
                        }else{
                            $("#username").html(info);
                            values = true;
                            return values;
                        }
                    }
                });
            });
            //判断编辑页面的电子邮箱
            $("#ad_email").keyup(function(){
                var email = $(this).val();
                var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+$/;
                if(email == ""){
                    $("#email").text("修改的邮箱不能为空！！！");
                    values = false;
                    return values;
                }else if(!reg.test(email)){
                    $("#email").text("修改的邮箱格式不正确！！！");
                    values = false;
                    return values;
                }else {
                    $("#email").html("<img src='./app/view/admin/images/yes.gif' />");
                    values = true;
                    return values;
                }
            });
            $("#oldpass").keyup(function(){
                var old = $(this).val();
                if(old != ""){
                    $.ajax({
                        
                        url:"index.php?p=admin&c=Admin&a=ajaxedit",
                        data:"ad_userpass="+old+"&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['ad_id'];?>
",
                        type:"post",
                        dataType:"html",
                        
                        success:function(info){
                            if(info == "输入的旧密码不正确"){
                                $("#old").text(info);
                                values = false;
                                return values;
                            }else{
                                $("#old").html(info);
                                values = true;
                                return values;
                            }
                        }
                    });
                }
            });
           
            $("#ad_pass").keyup(function(){
                var old = $("#oldpass").val(); 
                //判断旧密码是否为空，为空则不用执行新密码，不为空则需要判断
                if(old != ""){
                    var pass = $(this).val();
                    var reg = /^(\w){4,16}$/;//4-16个字母、数字、下划线
                    if(pass == ""){
                        $("#pass").text("修改密码不能为空！！！");
                        values = false;
                        return values;
                    }
                    if(!reg.test(pass)){
                        $("#pass").text("修改的密码格式不正确！！！");
                        values = false;
                        return values;
                    }else{
                        $("#pass").html("<img src='./app/view/admin/images/yes.gif' />");
                        values = true;
                        return values;
                    }
                }
                
            });
            //判断那两次密码是否正确
            $("#ad_userpass").keyup(function(){
                var pass = $("#ad_pass").val();
                var userpass = $(this).val();
                if(pass != userpass){
                    $("#userpass").text("两次密码不一致！！！");
                    values = false;
                    return values;
                }else{
                    $("#userpass").html("<img src='./app/view/admin/images/yes.gif' />");
                    values = true;
                    return values;
                }
            });
            $("form").submit(function(event){
                var name = $("#ad_username").val();
                var email = $("#ad_email").val();
                // alert(values);
                if(values == false || values == null || email == "" || name ==""){
                    event.preventDefault();//阻止表单提交
                    // alert(pass,email,name);
                    alert("填写信息不符合,请更改不符合的信息！！！");
                }else{
                    // alert("执行成功！！！");
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
                <th colspan="3" class="header_style"><a href="<?php echo @__URL__;?>
/admin.html" class="header_style_a" >管理员列表</a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>用户名</td>
                <td><input type="" placeholder="请输入用户名" class="form-control" name="ad_username" id="ad_username" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['ad_username'];?>
" /></td>
                <td id="username"></td>
            </tr>
            <tr>
                <td>Email邮箱</td>
                <td><input type="text" placeholder="请输入邮箱" class="form-control"  name="ad_email" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['ad_email'];?>
" id="ad_email" /></td>
                <td id="email"></td>
            </tr>
            <tr>
                <td>旧密码</td>
                <td><input type="password" class="form-control" name="oldpass" id="oldpass" /><input type="hidden" name="ad_userpass" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['ad_userpass'];?>
" /></td>
                <td id="old">需改密码，请输入旧密码</td>
            </tr>
            <tr>
                <td>新密码</td>
                <td><input type="password" class="form-control" placeholder="请输入密码" name="ad_pass" id="ad_pass" /></td>
                <td id="pass"></td>
            </tr>
            <tr>
                <td>确认密码</td>
                <td><input type="password" class="form-control" placeholder="请输入确认密码" name="ad_password" id="ad_password" /></td>
                <td id="userpass"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['ad_id'];?>
" name="ad_id" id="ad_id" />
                <td colspan="3"><button type="reset" class="btn btn-danger" name="ad_ap_res" id="ad_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="ad_ap_sub" id="ad_ap_sub" >修改</button></td>
            </tr>
        </tfoot>
        </form>
        </table>
</body>
</html><?php }} ?>