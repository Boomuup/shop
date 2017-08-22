/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-08-22 11:37:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for shop_attachment
-- ----------------------------
DROP TABLE IF EXISTS `shop_attachment`;
CREATE TABLE `shop_attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT '文件名',
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '文件名',
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '相对路径',
  `createtime` int(11) NOT NULL COMMENT '上传时间',
  `extension` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '文件类型',
  `size` mediumint(9) NOT NULL COMMENT '文件大小',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for shop_category
-- ----------------------------
DROP TABLE IF EXISTS `shop_category`;
CREATE TABLE `shop_category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT COMMENT '目录id',
  `catname` char(30) NOT NULL COMMENT '栏目名称',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父级id',
  `iscover` int(11) NOT NULL DEFAULT '0' COMMENT '是否是封面栏目',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '栏目描述',
  `linkurl` varchar(255) NOT NULL DEFAULT '' COMMENT '栏目跳转地址',
  `orderby` smallint(6) NOT NULL DEFAULT '100' COMMENT '栏目排序',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '栏目缩略图',
  `create_time` datetime NOT NULL COMMENT '创建时间',
  `update_time` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_goods
-- ----------------------------
DROP TABLE IF EXISTS `shop_goods`;
CREATE TABLE `shop_goods` (
  `gid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品表中的id ',
  `gname` char(50) NOT NULL DEFAULT '' COMMENT '商品名称',
  `pid` int(255) unsigned NOT NULL DEFAULT '0' COMMENT '商品分类',
  `gprice` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '商城的销售的商品价格',
  `mprice` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '市场价个，是商城价的一个参考',
  `atlas` text NOT NULL COMMENT '商品图集 ，图片的url （用于放大镜出商品展示）',
  `details` text NOT NULL COMMENT '商品的描述 ',
  `cover` varchar(255) DEFAULT '' COMMENT '商品的封面图',
  `click` int(10) unsigned DEFAULT '0' COMMENT '商品的查看次数',
  `create_time` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  `description` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_order
-- ----------------------------
DROP TABLE IF EXISTS `shop_order`;
CREATE TABLE `shop_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `user_id` int(10) unsigned NOT NULL,
  `order_name` varchar(255) NOT NULL DEFAULT '' COMMENT '订单号列表',
  `phone` varchar(11) NOT NULL DEFAULT '' COMMENT '收货人电话',
  `username` varchar(20) NOT NULL DEFAULT '' COMMENT '收货人',
  `address_id` int(10) unsigned NOT NULL COMMENT '用户地址表 id',
  `goods_info` text COMMENT '商品信息',
  `status` enum('未发货','已发货','已签收') DEFAULT '未发货' COMMENT '订单状态',
  `price` decimal(10,2) unsigned NOT NULL COMMENT '订单总价',
  `note` varchar(255) NOT NULL DEFAULT '' COMMENT '订单备注 ',
  `create_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_order_list
-- ----------------------------
DROP TABLE IF EXISTS `shop_order_list`;
CREATE TABLE `shop_order_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `oid` int(10) unsigned NOT NULL COMMENT '订单号id',
  `number` int(10) unsigned NOT NULL COMMENT '该订单购买商品数量',
  `price` decimal(10,2) unsigned NOT NULL COMMENT '订单商品总价',
  `note` varchar(255) NOT NULL DEFAULT '' COMMENT '订单备注',
  `goods_id` int(11) NOT NULL COMMENT '商品id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_subgoods
-- ----------------------------
DROP TABLE IF EXISTS `shop_subgoods`;
CREATE TABLE `shop_subgoods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品子类 主键id',
  `sname` varchar(50) NOT NULL DEFAULT '' COMMENT '商品的不同属性的分类',
  `snum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '该种类的商品数量',
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属那个商品',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_user
-- ----------------------------
DROP TABLE IF EXISTS `shop_user`;
CREATE TABLE `shop_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '递增Id主键',
  `username` char(30) NOT NULL COMMENT '用户名长度30位',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `phone` char(11) NOT NULL DEFAULT '' COMMENT '手机号码',
  `email` varchar(60) NOT NULL DEFAULT '' COMMENT '邮箱注册用户',
  `password` varchar(255) NOT NULL COMMENT '密码长度，最长255',
  `create_time` datetime NOT NULL COMMENT '创建时间',
  `update_time` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `phone_UNIQUE` (`phone`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_userinfo
-- ----------------------------
DROP TABLE IF EXISTS `shop_userinfo`;
CREATE TABLE `shop_userinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL DEFAULT '',
  `uid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
