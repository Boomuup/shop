<?php

namespace app\admin\model;

use think\Loader;
use think\Model;

class User extends Model
{
    // 制定表主键 如果符合TP规范 可以不指定
    protected $pk='uid';
    // 设置当前模型对应的完整数据表名称
    protected $table='shop_user';

    /**
     * 用户登陆功能
     * @param $data array 传入数据 这里时post提交过来的用户登陆数据
     */
    public function login($data){
        // 引入验证器
        $validate = Loader::validate('Auth');

        // 当验证不通过时
        if (!$validate->check($data)){
            return ['valid'=>0,'msg'=>$validate->getError()];
        }

        // 验证密码是否正确
        // 获取 数据库中用户的信息
        $userInfo = $this->where('username',$data['username'])->find();
        // 当$userInfo为空时 表示没有找到对应的用户名用户名
        if (!$userInfo){
            return ['valid'=>0,'msg'=>'用户名不存在'];
        }
        // 验证密码是否正确
        if(!password_verify($data['password'],$userInfo['password'])){
            return ['valid'=>0,'msg'=>'密码不正确'];
        }
        // 将用户信息存入到session中
        session('user.user_id',$userInfo['uid']);
        session('user.user_username',$userInfo['username']);

        // 返回成功信息
        return ['valid'=>1,'msg'=>'登陆成功'];
    }
}
