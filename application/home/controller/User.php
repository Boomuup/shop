<?php

namespace app\home\controller;

use think\Controller;

class User extends Controller
{
    /**
     *  前台用户登陆
     */
    public function login(){
        echo '用户登陆';
        return view('');
    }

    /**
     * 前台用户退出
     */
    public function logout(){
        echo '用户退出';
        return view('');
    }

    /**
     *  用户注册
     */
    public function register(){
        if(request()->isPost()){
            halt(input('post.'));
        }
        return view('');
    }

    /**
     *  用户修改密码
     */
    public function changePassword(){
        echo "用户修改密码";
        return view('');
    }
}
