CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `article` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章编号',
  `title` char(100) NOT NULL DEFAULT '' COMMENT '文章标题',
  `author` char(50) NOT NULL DEFAULT '' COMMENT '文章作者',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '文章简介',
  `content` text NOT NULL COMMENT '文章内容',
  `deteline` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '发布时间',
  `grounps` char(50) NOT NULL DEFAULT '' COMMENT '文章类别',
  `tag` char(50) NOT NULL DEFAULT '' COMMENT '文章标签',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章表';

