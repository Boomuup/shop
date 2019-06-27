# 基于thinkPHP5 和vue2.0 的商城项目 
演示网址:[http://shop.hdboy.top](http://shop.hdboy.top) 

### 记录
* 删除 `public/static/package-lock.json` gethub 会提示漏洞
* 垃圾代码，快看不下去了 😝

## 安装
* 下载代码  
```
git clone https://github.com/fengzhongyun1992/shop.git
```

* composer安装
```
cd shop

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
* 服务器入口地址是 `publuc`目录
* url + admin/Login/login 如: `http://shop.top/admin/Login/login`
* 后台账号：admin 
* 密码：admin123

## 本地测试环境

* phpstudy2018 
* 版本：7.2.10-nts + apache
* mysql版本: 5.5.53

## 演示网址：
* centos 7.2
* 宝塔 --lamp
* php : 7.1
* mysql :5.6

## 遇到问题  
* 如遇到 `解决PHP5.6版本“No input file specified”的问题` ,修改 `.htaccess`文件，本次已修改
* cart 问题时：
    * composer dump
    * 或者重启服务器

## 尚未完成功能
* 搜索功能未做
