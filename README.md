# 基于thinkPHP5 和vue2.0 的商城项目 
演示网址:[http://shop.hdboy.top](http://shop.hdboy.top)

## 安装
* 下载代码  
```
 git clone https://github.com/fengzhongyun1992/shop.git

```

* composer安装
```
composer install
```

* 导入sql 

将 `doc/sql/shop.sql` 导入数据库 

* 配置数据库

修改 `application/database.php`

```
 'hostname'        => '127.0.0.1',
    // 数据库名
    'database'        => 'shop',
    // 用户名
    'username'        => 'root',
    // 密码
    'password'        => 'root',

```

## 后台登陆地址 

* url + admin/Login/login
* 后台账号：admin 
* 密码：admin123