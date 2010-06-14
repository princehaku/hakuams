-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 06 月 14 日 15:28
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `stupub`
--

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `upcat` int(3) NOT NULL COMMENT '上级目录的id',
  `type` int(1) NOT NULL COMMENT '目录的类型',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=240 ;

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `data` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(20) NOT NULL auto_increment,
  `cateid` int(20) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `shortcontent` text NOT NULL COMMENT '用于图片新闻的简略描述',
  `picurl` text NOT NULL,
  `writer` text NOT NULL COMMENT '文章发布者',
  `data` int(20) NOT NULL,
  `exam` int(1) NOT NULL default '0' COMMENT '是否授权',
  `doctype` int(1) NOT NULL default '0' COMMENT '文档类型',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=824 ;

-- --------------------------------------------------------

--
-- 表的结构 `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `user` text NOT NULL,
  `ltime` int(30) NOT NULL COMMENT '登陆时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `url`
--

CREATE TABLE IF NOT EXISTS `url` (
  `name` text NOT NULL,
  `url` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL auto_increment COMMENT '学号',
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6030238 ;
