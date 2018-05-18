$("document").ready(function(){
    // 账号：获得焦点时显示小图标
    
    $("#username").focus(function(){
        
        $(".name_ico").css({display:'inline'});
        $(".pass_ico").css({display:'none'});
    });
    
    //失去焦点时
    $("#username").blur(function(){
        //点击sign图标是清除表单里的东西
        var values = $("#username").val();
    $(".name_ico").click(function(){
        $("#username").val("");
        $(".name_ico").hide();
        $("#log_submit").css({background:'#DDDDDD',color:'#858383'});
    });
        // $(".name_ico").css({display:'none'});
   
    });


    // 是否显示密码
    $(".ico_exe").click(function(){
        
        // alert();
        if($(this).attr('class') == "glyphicon ico_exe ico glyphicon-eye-close"){
            $(this).addClass("glyphicon-eye-open");
        $(this).removeClass("glyphicon-eye-close");
        $("#userpass").attr("type","text");
        }else{
            $(this).addClass("glyphicon-eye-close");
        $(this).removeClass("glyphicon-eye-open");
        $("#userpass").attr("type","password");
        }
        
    });
    // 密码显示清空图标
    $("#userpass").focus(function(){
        $(".pass_ico").css({display:'inline'});
        $(".name_ico").css({display:'none'});
    });
    
    //失去焦点时
    $("#userpass").blur(function(){
        //点击sign图标是清除表单里的东西
        var values = $("#userpass").val();
    $(".pass_ico").click(function(){
        $("#userpass").val("");
        $("#log_submit").css({background:'#DDDDDD',color:'#858383'});
        $(".pass_ico").hide();
    });
        // $(".name_ico").css({display:'none'});
        
    });

    // 账号和密码不为空的时候显示登录按钮的颜色
    $("#userpass").keyup(function(){
        var pass = $("#userpass").val();
        var name = $("#username").val();
        if(pass != "" && name != ""){
            $("#log_submit").css({background:'red',color:'#fff'});
        }else{
            $("#log_submit").css({background:'#DDDDDD',color:'#858383'});
        }
    });
    $("#username").keyup(function(){
        var pass = $("#userpass").val();
        var name = $("#username").val();
        if(pass != "" && name != ""){
            $("#log_submit").css({background:'red',color:'#fff'});
        }else{
            $("#log_submit").css({background:'#DDDDDD',color:'#858383'});
        }
    });

    
    //判断提交事件
    $("form").submit(function(){
        var name = $("#username").val();
        var pass = $("#userpass").val();
        pass_reg = /^(\w){4,20}$/;//4-20个数字、下划线、字符
        if(name == "" || pass == ""){
            alert("账号或密码不能为空！！！");
            return false;
        }else if(!pass_reg.test(pass)){
            alert("输入的密码格式不正确，请重新输入！！！");
            return false;
        }
        // alert("xioayang");
    });


});