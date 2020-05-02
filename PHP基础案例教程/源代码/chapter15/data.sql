CREATE DATABASE `sess_storage`;      # 创建数据库
USE `sess_storage`;                  # 选择数据库
CREATE TABLE `session` (             # 创建用于保存Session的数据表
  `id` VARCHAR(255) PRIMARY KEY COMMENT 'SessionID',
  `expires` INT UNSIGNED NOT NULL COMMENT '过期时间',
  `data` BLOB COMMENT '数据'
) DEFAULT CHARSET=utf8;
