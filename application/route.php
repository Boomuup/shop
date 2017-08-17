<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

////如果有定义绑定后台模块则禁用路由规则
//if (defined('BIND_MODULE') && BIND_MODULE == 'admin')
//    return [];

use think\Route;

Route::rule('/','home/Entry/index');

Route::group(['ext'=>'html'],function(){
    // method ：请求方法
    Route::rule('register','home/User/register');
    Route::rule('login','home/User/login');
    Route::rule('logout','home/User/logout');
    Route::rule('user','home/User/user');
});

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];


