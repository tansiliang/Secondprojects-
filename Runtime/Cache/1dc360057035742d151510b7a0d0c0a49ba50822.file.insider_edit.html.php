<?php /* Smarty version Smarty-3.1.6, created on 2018-05-10 19:08:37
         compiled from "../Tpl/admin\Insider\insider_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:84585af29b6ccf6b00-70783226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dc360057035742d151510b7a0d0c0a49ba50822' => 
    array (
      0 => '../Tpl/admin\\Insider\\insider_edit.html',
      1 => 1525945213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84585af29b6ccf6b00-70783226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5af29b6cdb61b',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af29b6cdb61b')) {function content_5af29b6cdb61b($_smarty_tpl) {?><!DOCTYPE html>
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
        #username ,#pass,#userpass,#email,#old,#salt{
            color:red;
        }
        
        </style>
        <script type="text/javascript">
        
        $("document").ready(function(){
            var values = TextTrackCue;
            //判断编辑页面的用户名
            $("#insider_name").keyup(function(){
                var name = $(this).val();
                if(name == ""){
                    $("#username").text("修改的用户名不能为空！！！");
                    values = false;
                    return values;
                }
                /* $.ajax({
                    url:"index.php?p=admin&c=Member&a=editajax",
                    data:"insider_name="+name+"&id={^$list['insider_id']$}",
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
                }); */
            });
            //判断编辑页面的电子邮箱
            $("#insider_email").keyup(function(){
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
                        
                        url:"index.php?m=Insider&a=ajaxpass",
                        data:"insider_pass="+old+"&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['insider_id'];?>
",
                        type:"post",
                        dataType:"html",
                        
                        success:function(info){
                            if(info == "输入的旧密码不正确，请重新输入！！！"){
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
           
            $("#insider_pass").keyup(function(){
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
            $("#insider_password").keyup(function(){
                var pass = $("#insider_pass").val();
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
                var name = $("#insider_name").val();
                var email = $("#insider_email").val();
                if(values == false || values == null || email == "" || name ==""){
                    event.preventDefault();//阻止表单提交
                    alert("填写信息不符合,请更改不符合的信息！！！");
                }else{
                }
            });
        });

        $("document").ready(function(){
            $("#insider_imgthumn").change(function(){
                var work_img = document.getElementById("insider_imgthumn").files[0];
                var imgs = document.getElementById('imagess');
                imgs.src = window.URL.createObjectURL(work_img);
            });
        });
        
    </script>
</head>
<body>
    <table class="table table-bordered">
        <form action="<?php echo @__GROUP__;?>
/Insider/edit" method="post" enctype="multipart/form-data">
        <thead>
            <tr>
                <th colspan="3" class="header_style"><a href="<?php echo @__URL__;?>
/admin.html" class="header_style_a" >会员列表</a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>用户名</td>
                <td><input type="text" placeholder="请输入用户名" class="form-control" name="insider_name" id="insider_name" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['insider_name'];?>
" /></td>
                <td id="username"></td>
            </tr>
            <tr>
                <td>昵称</td>
                <td><input type="text" class="form-control" name="insider_nick" id="insider_nick" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['insider_nick'];?>
" /></td>
                <td id="studentid"></td>
            </tr>
            <tr>
                <td>用户头像</td>
                <td><input type="file" name="insider_imgthumn" id="insider_imgthumn" /></td>
                <td><img id="imagess" src='<?php echo @UPLOAD_DIR;?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['insider_images'];?>
' style="max-height:100px;max-width:100px;" /><input type="hidden" name="img_thumn" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['insider_images'];?>
" /></td>
            </tr>
            <tr>
                <td>Email邮箱</td>
                <td><input type="text" placeholder="请输入邮箱" class="form-control"  name="insider_email" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['insider_email'];?>
" id="insider_email" /></td>
                <td id="email"></td>
            </tr>
            <tr>
                <td>旧密码</td>
                <td><input type="password" class="form-control" name="oldpass" id="oldpass" /><input type="hidden" name="insider_userpass" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['insider_pass'];?>
" /></td>
                <td id="old">如需更改密码，请输入旧密码</td>
            </tr>
            <tr>
                <td>新密码</td>
                <td><input type="password" class="form-control" placeholder="请输入密码" name="insider_pass" id="insider_pass" /></td>
                <td id="pass"></td>
            </tr>
            <tr>
                <td>确认密码</td>
                <td><input type="password" class="form-control" placeholder="请输入确认密码" name="insider_password" id="insider_password" /></td>
                <td id="userpass"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['insider_id'];?>
" name="insider_id" id="insider_id" />
                <td colspan="3"><button type="reset" class="btn btn-danger" name="insider_ap_res" id="insider_ap_res" >重置</button><span style="width:10px;display:inline-block;"></span><button class="btn btn-success" type="submit" name="insider_ap_sub" id="insider_ap_sub" >修改</button></td>
            </tr>
        </tfoot>
        </form>
        </table>
</body>
</html><?php }} ?>