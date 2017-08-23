<?php

namespace app\admin\controller;

use app\common\model\User as UserModel;

class User extends Common
{
    /**
     *  注销功能
     */
    public function logout(){
        // 清除session
        session(null);
        // 跳转到登陆页面
       return redirect('admin/login/login');
    }

    /**
     *  修改用户名功能
     */
    public function changePassword(){
        if(request()->isPost()){
            $res = (new UserModel())->changePassword(input('post.'));
            if ($res['valid']){
                // 清除session 跳转到登陆页面
                session(null);
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
     *  用户注册功能
     */
    public function register(){
        $this->error('暂未开放注册功能');
    }
}
