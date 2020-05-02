
# 此文件用于部署项目时导入数据库
# 在实际上线时，不应公开此文件，以避免重要信息泄露

# 创建数据库
CREATE DATABASE `php_album`;

# 选择数据库
USE `php_album`;

# 相册表
CREATE TABLE `album` (
  `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  `pid` INT UNSIGNED DEFAULT 0 NOT NULL COMMENT '上级相册id',
  `path` TEXT NOT NULL COMMENT '相册路径',
  `name` VARCHAR(12) DEFAULT '' NOT NULL COMMENT '相册名',
  `cover` VARCHAR(255) DEFAULT '' NOT NULL COMMENT '封面图地址',
  `total` INT UNSIGNED DEFAULT 0 NOT NULL COMMENT '图片数'
) DEFAULT CHARSET=utf8;

# 图片表
CREATE TABLE `picture` (
  `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  `pid` INT UNSIGNED DEFAULT 0 NOT NULL COMMENT '所属相册id',
  `name` VARCHAR(80) DEFAULT '' NOT NULL COMMENT '图片名',
  `save` VARCHAR(255) DEFAULT '' NOT NULL COMMENT '保存地址'
) DEFAULT CHARSET=utf8;

# 插入相册记录
INSERT INTO `album` (`id`,`pid`,`path`,`name`,`cover`,`total`) VALUES
(1, 0, '0,',   '风景', '', 1),
(2, 1, '0,1,', '天空', '', 1),
(3, 1, '0,1,', '草原', '', 0);

# 插入图片记录
INSERT INTO `picture` (`id`,`pid`,`name`,`save`) VALUES
(1, 0, 'Trees', 'demo1.jpg'),
(2, 2, 'sky',    'demo2.jpg'),
(3, 0, 'Valley', 'demo3.jpg');