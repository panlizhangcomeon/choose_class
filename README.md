choose_class
原生PHP实现学生选课,使用phpmyaqmin 或 phpadminer 执行 localhost.sql 即可导入数据库 

有老师和课程的数据表存储，不需要界面实现录入，预插入部分数据即可

每门课程有1个老师教学，1个老师可教学多门课程

学生可选择多门课程

学生首先需要注册系统，并登录系统。

已选择课程不能再选择，已选择课程可显示给用户查看

登录，注册数据先插入到数据库，成功后存储到redis 中的hash表中 ， 实现 redis 和 MySQL 的数据同步，加快登录注册访问速度
