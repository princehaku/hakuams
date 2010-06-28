-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 06 月 28 日 02:43
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `hakuams`
--

-- --------------------------------------------------------

--
-- 表的结构 `hakuams_user`
--

CREATE TABLE IF NOT EXISTS `hakuams_user` (
  `id` int(100) NOT NULL auto_increment COMMENT '编号',
  `username` varchar(20) NOT NULL COMMENT '用户登录时的账户',
  `password` varchar(32) NOT NULL COMMENT '密码(经过md5)',
  `name` text NOT NULL,
  `sex` text NOT NULL,
  `qq` int(12) default NULL,
  `email` text,
  `permission` int(11) NOT NULL default '0' COMMENT '权限',
  `alcat` text NOT NULL COMMENT '允许发表文章的目录',
  `lastlogin` int(20) NOT NULL COMMENT '上次登录时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6030239 ;

--
-- 导出表中的数据 `hakuams_user`
--

INSERT INTO `hakuams_user` (`id`, `username`, `password`, `name`, `sex`, `qq`, `email`, `permission`, `alcat`, `lastlogin`) VALUES
(1, 'superroot', '63a9f0ea7bb98050796b649e85481845', 'admin', '男', 0, '', 1, '', 1277692982);
