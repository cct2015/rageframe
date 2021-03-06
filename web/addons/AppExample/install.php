<?php

$sql = "
DROP TABLE IF EXISTS `yl_addon_app_example_curd`;
CREATE TABLE `yl_addon_app_example_curd` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '标题',
  `cate_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '分类ID(单选)',
  `manager_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `sort` int(255) DEFAULT '0' COMMENT '排序',
  `position` int(11) NOT NULL DEFAULT '0',
  `sex` tinyint(4) NOT NULL DEFAULT '1' COMMENT '性别1男2女',
  `content` text NOT NULL COMMENT '内容',
  `cover` varchar(100) NOT NULL DEFAULT '' COMMENT '图片',
  `covers` varchar(1500) NOT NULL DEFAULT '' COMMENT '图片组',
  `attachfile` varchar(100) NOT NULL DEFAULT '' COMMENT '附件',
  `keywords` varchar(100) NOT NULL DEFAULT '' COMMENT '关键字',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `price` float(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '价格',
  `views` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击',
  `stat_time` int(10) DEFAULT '0' COMMENT '开始时间',
  `end_time` int(10) DEFAULT '0' COMMENT '结束时间',
  `status` tinyint(4) DEFAULT '1' COMMENT '状态',
  `email` varchar(60) DEFAULT '',
  `provinces` varchar(10) DEFAULT '',
  `city` varchar(10) DEFAULT '',
  `area` varchar(10) DEFAULT '',
  `ip` varchar(16) DEFAULT '' COMMENT 'ip',
  `append` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='插件_curd';
";

//执行sql
Yii::$app->getDb()->createCommand($sql)->execute();