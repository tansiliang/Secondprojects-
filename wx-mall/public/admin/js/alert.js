$("document").ready(function(){
    
    // 昵称：获得焦点时显示小图标
    $("#nick").focus(function(){
        $(".nick_ico").css({display:'inline'});
        $(".pass_ico").css({display:'none'});
        $(".password_ico").css({display:'none'});
        $(".oldpass_ico").css({display:'none'});
    });
    //失去焦点时
    $("#nick").blur(function(){
        //点击sign图标是清除表单里的东西
        var values = $("#nick").val();
    $(".nick_ico").click(function(){
        $("#nick").val("");
        $(".nick_ico").hide();
    });
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
        
        $(".nick_ico").css({display:'none'});
        $(".password_ico").css({display:'none'});
        $(".oldpass_ico").css({display:'none'});
    });
    
    //失去焦点时
    $("#userpass").blur(function(){
        //点击sign图标是清除表单里的东西
        var values = $("#userpass").val();
    $(".pass_ico").click(function(){
        $("#userpass").val("");
        $(".pass_ico").hide();
    });
    });


    // 是否显示确认密码
    $(".ico_eye").click(function(){
        if($(this).attr('class') == "ico_eye ico glyphicon glyphicon-eye-close"){
            $(this).addClass("glyphicon-eye-open");
            $(this).removeClass("glyphicon-eye-close");
            $("#userpassword").attr("type","text");
        }else{
            $(this).addClass("glyphicon-eye-close");
            $(this).removeClass("glyphicon-eye-open");
            $("#userpassword").attr("type","password");
        }
    });
    // 密码显示清空图标
    $("#userpassword").focus(function(){
        $(".password_ico").css({display:'inline'});
        
        $(".nick_ico").css({display:'none'});
        $(".pass_ico").css({display:'none'});
        $(".oldpass_ico").css({display:'none'});
    });
    
    //失去焦点时
    $("#userpassword").blur(function(){
        //点击sign图标是清除表单里的东西
        var values = $("#userpassword").val();
    $(".password_ico").click(function(){
        $("#userpassword").val("");
        $(".password_ico").hide();
    });
    });

    
    // 旧密码：获得焦点时显示小图标
    $("#oldpass").focus(function(){
        $(".oldpass_ico").css({display:'inline'});
        $(".pass_ico").css({display:'none'});
        $(".nick_ico").css({display:'none'});
        $(".password_ico").css({display:'none'});
    });
    //失去焦点时
    $("#oldpass").blur(function(){
        //点击sign图标是清除表单里的东西
        var values = $("#oldpass").val();
    $(".oldpass_ico").click(function(){
        $("#oldpass").val("");
        $(".oldpass_ico").hide();
    });
    });
    //是否显示旧密码
    $(".ico_exes").click(function(){
        if($(this).attr('class') == "glyphicon ico ico_exes glyphicon-eye-close"){
            $(this).addClass("glyphicon-eye-open");
            $(this).removeClass("glyphicon-eye-close");
            $("#oldpass").attr("type","text");
        }else{
            $(this).addClass("glyphicon-eye-close");
            $(this).removeClass("glyphicon-eye-open");
            $("#oldpass").attr("type","password");
        }
    });

    //判断提交事件
    $("form").submit(function(){
        var nick = $("#nick").val();//昵称
        var pass = $("#userpass").val();//密码
        var password = $("#userpassword").val();//确定密码
        var oldpass = $("#oldpass").val();//邮箱
        pass_reg = /^(\w){6,20}$/;//6-20个数字、下划线、字符
        if( pass == "" || password == ""){
            alert("密码、确认密码不能为空！！！");
            return false;
        }else if(nick == ""){
            alert("昵称不能为空！！！");
            return false;
        }else if(oldpass == ""){
            alert("旧密码不能为空！！！");
            return false;
        }else if(!pass_reg.test(pass)){
            alert("输入的密码格式不正确，请重新输入！！！");
            return false;
        }else if(pass != password){
            alert("两次密码不一致，请重新输入！！！");
            return false;
        }
    });
});