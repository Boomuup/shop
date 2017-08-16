<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Goods as GoodsModel;
use app\admin\model\Category;

class Goods extends Controller
{
    /**
     * 显示商品列表
     *
     * @return \think\Response
     */
    public function index()
    {
        // 获取商品 以 pid 进行分类:

        $model = new GoodsModel();
        $data = $model->select();

       return view('index',compact('data'));
    }

    /**
     * 显示 商品添加页面
     *
     * @return \think\Response
     */
    public function create()
    {
        // 获取商品的所有分类:

        $cData = (new Category())->getTreeData();
        return view('create',compact('cData'));
    }

    /**
     * 保存添加的商品
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
         //halt(input('post.'));
        //TODO:: 保存数据
        // 1. 创建模型 通过模型 进行数据验证
        // 2. 然后判断是否保存成功

        // 简化
        if (request()->isPost()){
            $db = new GoodsModel();
            $db->gname = input('post.gname');
            $db->pid = input('post.pid');
            $db->gprice = input('post.gprice');
            $db->mprice = input('post.mprice');
            $db->atlas = input('post.atlas');
            $db->details = input('post.details');
            $db->cover = input('post.cover');
            $db->click = input('post.click');

            $db->save();
            $this->success( '添加成功');
            exit;
        }

    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        // 获取旧数据
        $oldData = GoodsModel::get($id);
        // 获取商品分类
        $cData = (new Category())->getTreeData();
       return view('',compact('oldData','cData'));
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        if (request()->isPost()){
            $db = GoodsModel::get($id);
            $db->gname = input('post.gname');
            $db->pid = input('post.pid');
            $db->gprice = input('post.gprice');
            $db->mprice = input('post.mprice');
            $db->atlas = input('post.atlas');
            $db->details = input('post.details');
            $db->cover = input('post.cover');
            $db->click = input('post.click');

            $db->save();
            $this->success( '修改成功','admin/goods/index');
            exit;
        }
        $this->error('请求非法');
        exit;
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        // 送数据库删除数据
        // 判断是否为顶级栏目
        //  获取旧数据
        GoodsModel::destroy($id);
        $this->success('删除成功');
        exit();

    }
}
