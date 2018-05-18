// 谭思良


$("document").ready(function(){
    $('.carousel').carousel({
        interval:2000   //让图片播放的速度
    });  
});

/**
 * 当点击当前的按钮时，更换当前按钮的样式
 */
function get(i){
    var li = document.getElementsByClassName('footer_li');
    if(i == 1){
        li[1].className = "footer_li";
        li[0].className = "active footer_li";
        li[2].className = "active footer_li";
        li[3].className = "active footer_li";
    }else if(i == 0){
        li[0].className = "footer_li";
        li[1].className = "active footer_li";
        li[2].className = "active footer_li";
        li[3].className = "active footer_li";
    }else if(i == 2){
        li[2].className = "footer_li";
        li[0].className = "active footer_li";
        li[1].className = "active footer_li";
        li[3].className = "active footer_li";
    }else if(i == 3){
        li[3].className = "footer_li";
        li[0].className = "active footer_li";
        li[1].className = "active footer_li";
        li[2].className = "active footer_li";
    }
}

/**
 * 删除当前元素的父元素
 */
function getRemo(obj){
    obj.parentNode.parentNode.removeChild(obj.parentNode);
}