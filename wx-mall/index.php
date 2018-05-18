<?php
header("Content-Type:text/html;charset=utf8");
define("APP_PATH","../");//生成ThinkPHP文件的位置
define("APP_DEBUG",true);//设置开发模式为调试模式
define("SITE_URL","http://www.wxmall.com/");//将css、图片、js路径定义为常量
define("HOME_CSS_URL",SITE_URL.'public/home/css/');//样式路径
define("HOME_IMG_URL",SITE_URL.'public/home/images/');//图片路径
define("HOME_JS_URL",SITE_URL.'public/home/js/');#js文件路径
define("ADMIN_CSS_URL",SITE_URL.'public/admin/css/');
define("ADMIN_IMG_URL",SITE_URL.'public/admin/images/');
define("ADMIN_JS_URL",SITE_URL.'public/admin/js/');
// var_dump(time());
//图片保存的位置
define("UPLOADED_DIR",__DIR__.'/public/upload/');
//页面读取图片的路径
define("UPLOAD_DIR",SITE_URL."public/upload/");
/**调试函数 */
// die(var_dump(__DIR__));
function show_bug($name){
    echo "<pre style='color:red;'>";
    var_dump($name);
    echo "</pre>";
}

require "../ThinkPHP/ThinkPHP.php";