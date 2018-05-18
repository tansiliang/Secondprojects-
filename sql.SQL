-- 微商城的数据库
create database wxmall;
set names utf8;
use wxmall
-- 后台管理员表
create table wx_admin_user(
ad_id int not null primary key auto_increment comment 'id',
ad_username varchar(50) comment '用户名',
ad_userpass varchar(32) comment '用户密码',
ad_email varchar(30) comment '邮箱',
ad_addtime int(11) comment '用户添加时间',
ad_updatetime int (11) comment '最后登录的时间',
ad_salt varchar(50),
ad_ip int(11) comment '登录的ip地址',
ad_power text comment '权限'
)charset=utf8;
insert into wx_admin_user values(null,'admin',md5('admin'),'1398599250@qq.com','1525696508','1525696508','sdfsf','127.0.0.1',null);
-- 前台用户登录的信息
create table wx_insider(
insider_id int not null primary key auto_increment comment '会员信息id',
insider_name varchar(50) not null comment '会员名',
insider_pass varchar(32) not null comment ' 密码md5',
insider_nick varchar(30) comment '昵称',
insider_email varchar(30) comment '邮箱',
insider_images varchar(100) comment '图片',
insider_time int(11) not null comment '创建时间',
insider_power text comment '权限'
)charset=utf8;
insert into wx_insider values(null,'root',md5('root'),'fdskjk','123456789@qq.com',null,'1525696508',null);
insert into wx_insider values(null,'roots',md5('roots'),'fdskjk','lisi@qq.com',null,'1525696508',null);
-- 商品分类 需要每个分类对要带一张图片，还有一个自动生成id名
create table wx_category(
category_id int not null primary key auto_increment comment 'id',
category_name varchar(30) not null comment '分类名',
category_number int comment '数量',
category_order int default '1' comment '排序',
category_show int default '0' comment '是否显示',
category_images varchar(100) comment '分类图片',
category_string varchar(10) comment "用户点击事件的",
category_parentid int not null comment '父类id'
)charset=utf8;
insert into wx_category values(1,'手机类型','20','1','0',0);
insert into wx_category values(2,'电器','25','1','1',0);
insert into wx_category values(3,'大功率电器','26','1','1',2);
-- 商品列表
create table wx_goods(
goods_id int not null primary key auto_increment comment 'id',
goods_name varchar(50) not null comment '商品名称',
goods_sn varchar(10) comment '货号',
goods_cateid int unsigned comment '分类id',
goods_price DECIMAL(10,2) comment '商品价格',
goods_desc text comment '商品详细描述',
add_time int comment '添加时间',
goods_number int comment '库存',
goods_images varchar(255) comment '商品上传的文件地址',
goods_thumn varchar(255) comment '商品缩略图',
goods_stutas int comment '商品状态，采用位运算',
goods_show TINYINT(1) comment '1表示上架，0表示没有',
goods_groom int default '0' comment '是否为推荐',
goods_updatetime int(11) comment '更新的时间',
goods_order int default '1' comment '排序'
)charset=utf8;
insert into wx_goods values(null,'iPhone8','dfsfd','1','9999.99','反正就系好犀利','1525696508','10',null,null,'2','0',1,'1525696508',1);
insert into wx_goods values(null,'iPhone9','kgffl;d','2','9999.00','反正就系','1525796508','10',null,null,'2','0',1,'1525796508',1);
-- 订单管理
create table wx_orderform(
form_id int not null primary key auto_increment comment '订单id',
form_wail int(11) comment '订单号',
form_addtime int(11) comment '下单时间',
form_receiver varchar(50) comment '收货人',
form_money varchar(20) comment '金额',
form_payable varchar(20) comment '应付金额',
form_stutas int comment '订单状态',

)charset=utf8;

-- 首页轮播图管理
create table wx_rotation(
rota_id int not null primary key auto_increment comment 'id',
rota_name varchar(50) comment '轮播图名称',
rota_images varchar(100) comment '轮播图',
rota_thumn varchar(100) comment "轮播图缩略图",
rota_time int(11) comment '时间',
rota_show int default '0' comment '是否显示',
rota_order int default '1' comment '排序'
)charset=utf8;
insert into wx_rotation values(null,'小样',null,null,'1525696508','0','1');

-- 频道入口
create table wx_entry(
entry_id int not null primary key auto_increment comment 'id',
entry_name varchar(30) comment '入口名',
entry_url varchar(50) comment '入口路径',
entry_time int(11) comment '创建时间',
entry_order int default '1' comment '排序',
entry_show int default '1' comment '是否显示',
entry_images varchar(100) comment '图标'
)charset=utf8;
insert into wx_entry values (null,'haha','https://baidu.com','1525696508',1,1,null);

-- session入库
CREATE TABLE IF NOT EXISTS `wx_session` (
  `sess_name` varchar(32) NOT NULL,
  `sess_data` text COMMENT '入库信息',
  `expact` int(11) DEFAULT NULL COMMENT '获得入库的时间戳',
  PRIMARY KEY (`sess_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
