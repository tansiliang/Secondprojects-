-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 05 月 18 日 11:28
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `wxmall`
--

-- --------------------------------------------------------

--
-- 表的结构 `wx_admin_user`
--

CREATE TABLE IF NOT EXISTS `wx_admin_user` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `ad_username` varchar(50) DEFAULT NULL COMMENT '用户名',
  `ad_userpass` varchar(32) DEFAULT NULL COMMENT '用户密码',
  `ad_email` varchar(30) DEFAULT NULL COMMENT '邮箱',
  `ad_addtime` int(11) DEFAULT NULL COMMENT '用户添加时间',
  `ad_updatetime` int(11) DEFAULT NULL COMMENT '最后登录的时间',
  `ad_salt` varchar(50) DEFAULT NULL,
  `ad_ip` int(11) DEFAULT NULL COMMENT '登录的ip地址',
  `ad_power` text COMMENT '权限',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `wx_admin_user`
--

INSERT INTO `wx_admin_user` (`ad_id`, `ad_username`, `ad_userpass`, `ad_email`, `ad_addtime`, `ad_updatetime`, `ad_salt`, `ad_ip`, `ad_power`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1398599250@qq.com', 1525696508, 1525696508, 'sdfsf', 1270, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `wx_category`
--

CREATE TABLE IF NOT EXISTS `wx_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `category_name` varchar(30) NOT NULL COMMENT '分类名',
  `category_number` int(11) DEFAULT NULL COMMENT '数量',
  `category_order` int(11) DEFAULT '1' COMMENT '排序',
  `category_show` int(11) DEFAULT '0' COMMENT '是否显示',
  `category_parentid` int(11) NOT NULL COMMENT '父类id',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `wx_category`
--

INSERT INTO `wx_category` (`category_id`, `category_name`, `category_number`, `category_order`, `category_show`, `category_parentid`) VALUES
(1, '手机类型', 20, 1, 0, 0),
(2, '电器', 25, 1, 1, 0),
(3, '大功率电器', 26, 1, 1, 2),
(4, '苹果手机', 100, 100, 0, 1),
(5, '服装', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `wx_entry`
--

CREATE TABLE IF NOT EXISTS `wx_entry` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `entry_name` varchar(30) DEFAULT NULL COMMENT '入口名',
  `entry_url` varchar(50) DEFAULT NULL COMMENT '入口路径',
  `entry_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `entry_order` int(11) DEFAULT '1' COMMENT '排序',
  `entry_show` int(11) DEFAULT '1' COMMENT '是否显示',
  `entry_images` varchar(100) DEFAULT NULL COMMENT '图标',
  PRIMARY KEY (`entry_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `wx_entry`
--

INSERT INTO `wx_entry` (`entry_id`, `entry_name`, `entry_url`, `entry_time`, `entry_order`, `entry_show`, `entry_images`) VALUES
(4, '家具', 'www.baidu.com', 1525954666, 2, 1, 'Entry/20180510/entry_5af4386a30819.jpg'),
(3, '数码', 'www.baidu.com', 1525954628, 1, 1, 'Entry/20180510/entry_5af44a79e1606.jpg'),
(5, 'E连', '', 1525959340, 3, 1, 'Entry/20180510/entry_5af44aac4fd71.jpg'),
(6, '高原', '', 1525959360, 4, 1, 'Entry/20180510/entry_5af44ac037374.jpg'),
(7, '辣先生', '', 1525959383, 5, 1, 'Entry/20180510/entry_5af44ad74341a.jpg'),
(8, '商城', '', 1525959404, 6, 1, 'Entry/20180510/entry_5af44aec80d51.png'),
(9, '豆类', '', 1525959426, 7, 1, 'Entry/20180510/entry_5af44b0222686.png'),
(10, '购物', '', 1525959447, 8, 1, 'Entry/20180510/entry_5af44b178f598.jpg'),
(11, '贡茶', '', 1525959468, 9, 1, 'Entry/20180510/entry_5af44b2c1d227.jpg'),
(12, '易淘', '', 1525959485, 10, 1, 'Entry/20180510/entry_5af44b3d550a0.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `wx_goods`
--

CREATE TABLE IF NOT EXISTS `wx_goods` (
  `goods_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `goods_name` varchar(50) NOT NULL COMMENT '商品名称',
  `goods_sn` varchar(10) DEFAULT NULL COMMENT '货号',
  `goods_cateid` int(10) unsigned DEFAULT NULL COMMENT '分类id',
  `goods_price` decimal(10,2) DEFAULT NULL COMMENT '商品价格',
  `goods_desc` text COMMENT '商品详细描述',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `goods_number` int(11) DEFAULT NULL COMMENT '库存',
  `goods_images` varchar(255) DEFAULT NULL COMMENT '商品上传的文件地址',
  `goods_thumn` varchar(255) DEFAULT NULL COMMENT '商品缩略图',
  `goods_stutas` int(11) DEFAULT NULL COMMENT '商品状态，采用位运算',
  `goods_show` tinyint(1) DEFAULT NULL COMMENT '1表示上架，0表示没有',
  `goods_groom` int(11) DEFAULT '0' COMMENT '是否为推荐',
  `goods_updatetime` int(11) DEFAULT NULL COMMENT '更新的时间',
  `goods_order` int(11) DEFAULT '1' COMMENT '排序',
  PRIMARY KEY (`goods_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `wx_goods`
--

INSERT INTO `wx_goods` (`goods_id`, `goods_name`, `goods_sn`, `goods_cateid`, `goods_price`, `goods_desc`, `add_time`, `goods_number`, `goods_images`, `goods_thumn`, `goods_stutas`, `goods_show`, `goods_groom`, `goods_updatetime`, `goods_order`) VALUES
(1, 'iPhone8', '123456789', 1, '9999.99', 'iPhone8手机值得你们拥有，走过路过不要错过啦', 1525696508, 10, 'Goods/20180511/goods_5af4defa592d8.jpg', 'Goods/20180511/goods_5af4defa592d8_thumb.jpg', 4, 0, 1, 1526029168, 1),
(2, 'iPhone9', '12345672', 1, '9999.00', '走过路过不要错过啊，过了这个村没了这个店哈', 1525796508, 10, 'Goods/20180511/goods_5af4e4d34a6fc.jpg', 'Goods/20180511/goods_5af4e4d34a6fc_thumb.jpg', 1, 0, 1, 1526029185, 2),
(3, '黑色浣熊毛领外套', '123456', 5, '450.00', 'MR&MRS FUR 代购 17FW秋冬款 短款 黑色浣熊毛领 外套 MP036R', 1525998426, 50, 'Goods/20180511/goods_5af4e69557cd2.jpg', 'Goods/20180511/goods_5af4e69557cd2_thumb.jpg', 1, 1, 1, 1525999253, 3),
(4, '男士羊毛夹克', '12345670', 5, '500.00', 'Marc Jacobs马克雅各布/欧美潮牌/男士羊毛夹克飞行员外套棒球服', 1525998520, 1000, 'Goods/20180511/goods_5af4e3b818186.jpg', 'Goods/20180511/goods_5af4e3b818186_thumb.jpg', 2, 1, 1, 1525998715, 4),
(5, '毛衣', '12345671', 5, '40.00', 'Moschino 兔子小熊图案毛衣', 1525998614, 1200, 'Goods/20180511/goods_5af4e4160989b.jpg', 'Goods/20180511/goods_5af4e4160989b_thumb.jpg', 4, 1, 1, 1525998696, 5);

-- --------------------------------------------------------

--
-- 表的结构 `wx_insider`
--

CREATE TABLE IF NOT EXISTS `wx_insider` (
  `insider_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '会员信息id',
  `insider_name` varchar(50) NOT NULL COMMENT '会员名',
  `insider_pass` varchar(32) NOT NULL COMMENT ' 密码md5',
  `insider_nick` varchar(30) DEFAULT NULL COMMENT '昵称',
  `insider_email` varchar(30) DEFAULT NULL COMMENT '邮箱',
  `insider_images` varchar(100) DEFAULT NULL COMMENT '图片',
  `insider_time` int(11) NOT NULL COMMENT '创建时间',
  `insider_power` text COMMENT '权限',
  PRIMARY KEY (`insider_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `wx_insider`
--

INSERT INTO `wx_insider` (`insider_id`, `insider_name`, `insider_pass`, `insider_nick`, `insider_email`, `insider_images`, `insider_time`, `insider_power`) VALUES
(1, 'root', 'c5f6f584b79463f58c223f18fef206ef', 'fangzhengjiuxihao', 'zhangsan@qq.com', 'Insider/20180510/insider_5af3fd9d4e0d9.JPG', 1525696508, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `wx_rotation`
--

CREATE TABLE IF NOT EXISTS `wx_rotation` (
  `rota_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `rota_name` varchar(50) DEFAULT NULL COMMENT '轮播图名称',
  `rota_images` varchar(100) DEFAULT NULL COMMENT '轮播图',
  `rota_thumn` varchar(100) DEFAULT NULL COMMENT '轮播图缩略图',
  `rota_time` int(11) DEFAULT NULL COMMENT '时间',
  `rota_show` int(11) DEFAULT '0' COMMENT '是否显示',
  `rota_order` int(11) DEFAULT '1' COMMENT '排序',
  PRIMARY KEY (`rota_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `wx_rotation`
--

INSERT INTO `wx_rotation` (`rota_id`, `rota_name`, `rota_images`, `rota_thumn`, `rota_time`, `rota_show`, `rota_order`) VALUES
(4, '商城1', 'Rotation/20180510/rota_5af44997b245d.png', 'Rotation/20180510/rota_5af44997b245d_thumb.png', 1525959063, 1, 3),
(2, '商城', 'Rotation/20180510/rota_5af4124a21cc5.jpg', 'Rotation/20180510/rota_5af4124a21cc5_thumb.jpg', 1525944906, 1, 2),
(3, '活动', 'Rotation/20180510/rota_5af41264589b9.png', 'Rotation/20180510/rota_5af41264589b9_thumb.png', 1525944932, 1, 1),
(5, '活动1', 'Rotation/20180510/rota_5af449abd18f4.jpg', 'Rotation/20180510/rota_5af449abd18f4_thumb.jpg', 1525959083, 1, 4);

-- --------------------------------------------------------

--
-- 表的结构 `wx_session`
--

CREATE TABLE IF NOT EXISTS `wx_session` (
  `sess_name` varchar(32) NOT NULL,
  `sess_data` text COMMENT '入库信息',
  `expact` int(11) DEFAULT NULL COMMENT '获得入库的时间戳',
  PRIMARY KEY (`sess_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
