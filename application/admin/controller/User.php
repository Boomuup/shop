<?php

namespace app\admin\controller;

use think\Controller;
use think\Loader;
use think\Request;
use app\admin\model\User as UserModel;

class User extends Controller
{
    /**
     *  用户登录功能
     */
    public function login(){
        // 当提交时post提交时 进行 操作
        // 验证登陆 使用验证器
        // 在模型中进行验证
        if(request()->isPost()){

            $res = (new UserModel())->login(input('post.'));
            if ($res['valid']){
                // 当valid 为1时 成立 登陆成功 进行跳转
                $this->success($res['msg'],'admin/entry/index');
            }else{
                // 登陆失败
                $this->error($res['msg']);
                exit;
            }
        }

        return $this->fetch();
    }

    /**
     *  注销功能
     */
    public function logout(){

    }

    /**
     *  修改用户名功能
     */
    public function changePassword(){
        echo '修改密码';
    }

    /**
     *  用户注册功能
     */
    public function register(){

    }
}
