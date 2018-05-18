<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODUEL'=>1,//设置路由模式、0基本模式、1(pathinfo路径方式)、 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
	#项目分组设定，多个组之间用逗号分隔，例子如下
	'APP_GROUP_LIST'=>'home,admin',
	//默认分组，默认访问的是前台
	'DEFAULT_GROUP'=>'home',//默认的访问前台

	/* 数据库设置 */
	'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'wxmall',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'root',          // 密码
    'DB_PORT'               => '3306',        // 端口
    'DB_PREFIX'             => 'wx_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    => false,       // 是否进行字段类型检查
	'DB_FIELDS_CACHE'       => true,        // 启用字段缓存,开发调试模式下使用不了

	'TMPL_ENGINE_TYPE' => 'Smarty',//默认模板引擎
	
	//显示系统运行日志
	'SHOW_PAGE_TRACE' => true, //显示trace
);
?>