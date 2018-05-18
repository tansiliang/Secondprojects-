$("document").ready(function(){

    $("#header_right_ico").click(function(){
        $(".header_right_ul").toggle();
    });

     // 点击显示修改昵称的信息
     $("#pet_div").click(function(){
        $("#nick_bg").show();
        $("#footers").show();
    });

    // 取消时返回设置页面，将背景和修改信息隐藏
    $("#foot_but").click(function(){
        $("#nick_bg").hide();
        $("#footers").hide();
    });

    // 点击保存时验证表单的信息
    $("#foot_sub").click(function(){
        var nick = $("#nick").val();
        var reg = /^(\w){4,20}$/;
        if(!reg.test(nick)){
            alert("输入的昵称格式不正确请重新输入!!!");
            return false;
        }else if(nick == ""){
            alert("修改的昵称名不能为空！！！");
            return false;
        }else{
            $("#nick_bg").hide();
            $("#footers").hide();
            alert("修改成功");
        }
        
    });
});