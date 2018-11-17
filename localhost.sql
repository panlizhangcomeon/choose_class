-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `edu` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `edu`;

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `cid` varchar(3) NOT NULL COMMENT '课程编号',
  `tid` varchar(6) NOT NULL COMMENT '教师编号',
  `cname` varchar(50) NOT NULL COMMENT '课程名称',
  `credit` decimal(2,1) NOT NULL COMMENT '课程学分',
  `term` varchar(100) NOT NULL COMMENT '学年学期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='课程表';

INSERT INTO `course` (`id`, `cid`, `tid`, `cname`, `credit`, `term`) VALUES
(1,	'001',	'100036',	'C语言程序设计',	3.0,	'2018年下学期'),
(2,	'002',	'100036',	'java程序设计实践',	4.0,	'2019年上学期'),
(3,	'003',	'100033',	'数据库系统概念',	2.5,	'2019年下学期'),
(4,	'004',	'100030',	'高等数学',	6.0,	'2018年下学期'),
(5,	'005',	'100020',	'大学英语视听说教程',	1.0,	'2018年下学期'),
(6,	'006',	'100036',	'C++程序实践',	4.5,	'2018年下学期'),
(7,	'007',	'100030',	'离散数学',	3.0,	'2018年下学期'),
(8,	'008',	'100020',	'大学英语读写',	3.0,	'2019年上学期'),
(9,	'009',	'100033',	'数据库索引优化',	3.0,	'2018年下学期'),
(10,	'010',	'100010',	'大学体育',	2.0,	'2018年下学期');

DROP TABLE IF EXISTS `course_student`;
CREATE TABLE `course_student` (
  `sid` varchar(10) NOT NULL COMMENT '学号',
  `cid` varchar(3) NOT NULL COMMENT '课程编号'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `course_student` (`sid`, `cid`) VALUES
('2015551427',	'006'),
('2015551401',	'010'),
('2015551401',	'005'),
('2015551403',	'001'),
('2015551401',	'001'),
('2015551427',	'001'),
('2015551427',	'003'),
('2015551401',	'007'),
('2015551405',	'001'),
('2015551405',	'010'),
('2015551405',	'006'),
('2015551405',	'005'),
('2015551401',	'003'),
('2015551427',	'005'),
('2015551427',	'008'),
('2015551403',	'010'),
('2015551403',	'006'),
('2015551403',	'004');

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `sid` varchar(10) NOT NULL COMMENT '学号',
  `sname` varchar(100) NOT NULL COMMENT '姓名',
  `password` varchar(20) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='学生表';

INSERT INTO `student` (`id`, `sid`, `sname`, `password`) VALUES
(1,	'2015551427',	'潘俚璋',	'123456'),
(2,	'2015551401',	'柏强',	'123456'),
(3,	'2015551405',	'孙佳宁',	'123456'),
(4,	'2015551402',	'朱文武',	'123456'),
(5,	'2015551417',	'吴弥鑫',	'123456'),
(8,	'2015551403',	'林滨',	'123456');

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `id` int(10) unsigned NOT NULL COMMENT 'id',
  `tname` varchar(100) NOT NULL COMMENT '教师姓名',
  `tel` varchar(11) NOT NULL COMMENT '教师电话'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `teacher` (`id`, `tname`, `tel`) VALUES
(100036,	'李志清',	'13202025580'),
(100033,	'刘新',	'15278781111'),
(100030,	'王凯',	'15865657821'),
(100020,	'胡军',	'13867602550'),
(100010,	'张强',	'13203213554');

-- 2018-11-17 08:14:58
