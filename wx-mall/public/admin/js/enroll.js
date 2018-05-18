$("document").ready(function(){
    // 账号：获得焦点时显示小图标
    $("#username").focus(function(){
        $(".name_ico").css({display:'inline'});
        $(".pass_ico").css({display:'none'});
        $(".nick_ico").css({display:'none'});
        $(".password_ico").css({display:'none'});
        $(".email_ico").css({display:'none'});
    });
    //失去焦点时
    $("#username").blur(function(){
        //点击sign图标是清除表单里的东西
        var values = $("#username").val();
    $(".name_ico").click(function(){
        $("#username").val("");
        $(".name_ico").hide();
    });
    });
    // 昵称：获得焦点时显示小图标
    $("#nick").focus(function(){
        $(".nick_ico").css({display:'inline'});
        $(".pass_ico").css({display:'none'});
        $(".name_ico").css({display:'none'});
        $(".password_ico").css({display:'none'});
        $(".email_ico").css({display:'none'});
    });
    //失去焦点时
    $("#nick").blur(function(){
        //点击sign图标是清除表单里的东西
        var values = $("#nick").val();
    $(".name_ico").click(function(){
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
        $(".name_ico").css({display:'none'});
        $(".nick_ico").css({display:'none'});
        $(".password_ico").css({display:'none'});
        $(".email_ico").css({display:'none'});
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
        $(".name_ico").css({display:'none'});
        $(".nick_ico").css({display:'none'});
        $(".pass_ico").css({display:'none'});
        $(".email_ico").css({display:'none'});
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

    
    // 邮箱：获得焦点时显示小图标
    $("#email").focus(function(){
        $(".email_ico").css({display:'inline'});
        $(".name_ico").css({display:'none'});
        $(".pass_ico").css({display:'none'});
        $(".nick_ico").css({display:'none'});
        $(".password_ico").css({display:'none'});
    });
    //失去焦点时
    $("#email").blur(function(){
        //点击sign图标是清除表单里的东西
        var values = $("#email").val();
    $(".email_ico").click(function(){
        $("#email").val("");
        $(".email_ico").hide();
    });
    });

    //判断提交事件
    $("form").submit(function(){
        var name = $("#username").val();//账号
        var nick = $("#nick").val();//昵称
        var pass = $("#userpass").val();//密码
        var password = $("#userpassword").val();//确定密码
        var email = $("#email").val();//邮箱
        pass_reg = /^(\w){6,20}$/;//6-20个数字、下划线、字符
        email_reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+$/;
        if(name == "" || pass == "" || password == ""){
            alert("账号或密码、确认密码不能为空！！！");
            return false;
        }else if(nick == ""){
            alert("昵称不能为空！！！");
            return false;
        }else if(email == ""){
            alert("邮箱不能为空！！！");
            return false;
        }else if(!pass_reg.test(pass)){
            alert("输入的密码格式不正确，请重新输入！！！");
            return false;
        }else if(pass != password){
            alert("两次密码不一致，请重新输入！！！");
            return false;
        }else if(!email_reg.test(email)){
            alert("邮箱的格式不正确，请重新输入！！！");
            return false;
        }
    });
});