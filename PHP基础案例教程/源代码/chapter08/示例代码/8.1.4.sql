# 1、登录与退出MySQL
mysql -h localhost -u root    # 登录
exit                          # 退出
quit                          # 退出

# 2、设置密码
SET PASSWORD FOR 'root'@'localhost' = PASSWORD('123456');

mysql –h localhost -u root -p123456   # 有密码登录
mysql –h localhost -u root -p         # 有密码登录

# 3、设置字符集
SET NAMES gbk;

# 4、操作数据库
SHOW DATABASES;                             # 查看数据库
CREATE DATABASE `itheima`;                  # 创建数据库
CREATE DATABASE IF NOT EXISTS `itheima`;    # 创建数据库
USE `itheima`;                              # 选择数据库
DROP DATABASE `itheima`;                    # 删除数据库
DROP DATABASE IF EXISTS `itheima`;          # 删除数据库

# 5、操作数据表
CREATE DATABASE IF NOT EXISTS `itheima`;
USE `itheima`;

#创建数据表
CREATE TABLE IF NOT EXISTS `student` (
  `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT COMMENT '学号',
  `name` VARCHAR(32) NOT NULL COMMENT '姓名',
  `gender` ENUM('男', '女') DEFAULT '男' NOT NULL COMMENT '性别'
) DEFAULT CHARSET=utf8;

SHOW TABLES;                                         # 查看数据表
DESC `student`;                                      # 查看表结构：指定表的字段信息
DESC `student` `name`;                               # 查看表结构：指定表的某一列信息
SHOW CREATE TABLE `student`\G                        # 查看表结构：创建语句和字符编码
SHOW COLUMNS FROM `student`;                         # 查看表的结构
ALTER TABLE `student` ADD `area` VARCHAR(100);       # 修改表结构：添加字段
ALTER TABLE `student` CHANGE `area` `desc` CHAR(50); # 修改表结构：修改字段名称
ALTER TABLE `student` MODIFY `desc` VARCHAR(255);    # 修改表结构：修改字段类型
ALTER TABLE `student` DROP `desc`;                   # 修改表结构：删除指定字段
ALTER TABLE `student` RENAME `stu`;                  # 修改表结构：修改数据表名称
RENAME TABLE `stu` TO `student`;                     # 重命名
DROP TABLE IF EXISTS `student`;                      # 删除数据表


# 6、数据管理

# 添加数据
INSERT INTO `student` (`name`, `gender`) VALUES # 指定字段插入
('Tom', '男'), ('Lucy', '女'), ('Jimmy', '男'), ('Amy', '女');
INSERT INTO `student` VALUES                    # 省略字段插入
(NULL, 'Elma', '女'), (NULL, 'Ruth', '女');

# 查询数据
SELECT * FROM `student`;                        # 查询表中所有数据
SELECT `name` FROM `student`;                   # 查询表中指定字段
SELECT * FROM `student` WHERE `id`=2;           # 查询id等于2的学生信息
SELECT * FROM `student` WHERE `id`IN(4,5);      # 查询id为4或5的学生信息
SELECT * FROM `student` WHERE NAME LIKE '%y';   # 查询名字以y结尾的学生信息
SELECT * FROM `student` ORDER BY `name` ASC;    # 将查询结果按照名字升序排序
SELECT * FROM `student` LIMIT 1, 2;             # 查询结果从第2个开始，至多有2个
SELECT `gender`, COUNT(*) FROM `student` GROUP BY `gender`;  # 按性别查询男女各有多少人

# 修改数据
UPDATE `student` SET `name`='Tess' WHERE `id`=6;    # 有条件修改
UPDATE `student` SET `name`='Tess';                 # 无条件修改

# 删除数据
DELETE FROM `student` WHERE `gender`='女';          # 删除部分数据
DELETE FROM `student`;                              # 删除全部数据
TRUNCATE `student`;                                 # 清空数据表
