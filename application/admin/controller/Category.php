<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Category as CategoryModel;

class Category extends Common
{
    protected $db;

    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub

        $this->db = new CategoryModel();
    }

    /**
     * 显示资源列表
     *
     * 分类列表显示
     *
     * @return \think\Response
     */
    public function index()
    {
        // 获取所有分类数据
        $data = $this->db::all();
        // 没有任何参数调用 fetch
        return view('index',compact('data'));
    }

    /**
     * 显示创建资源表单页.
     *
     *  添加分类列表
     *
     * @return \think\Response
     */
    public function create()
    {
        // 做二级分类 获取所有pid为0 的分类
        $data = $this->db::all(['pid'=>0]);
        return view('create',compact('data'));
    }

    /**
     * 保存新建的资源
     * 保存分类列表
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        if (request()->isPost()){
            $this->db->catname = input('post.catname');
            $this->db->thumb = input('post.thumb');
            $this->db->pid = input('post.pid');
            $this->db->description = input('post.description');
            $this->db->linkurl = input('post.linkurl');
            $this->db->orderby = input('post.orderby');
            if (input('?post.iscover')){
                $this->db->iscover = 1;
            }else{
                $this->db->iscover = 0;
            }
            $this->db->save();
            $this->success( '添加成功');
            exit;
        }

    }

    /**
     * 显示指定的资源
     * 显示制定分类的详细信息
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     * 编辑分类列表
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        // 获取所有分类数据
        $data = $this->db::all(['pid'=>0]);
        // 获取旧数据
        $oldData = $this->db::find($id);
        // 没有任何参数调用 fetch
        return view('edit',compact('data','oldData'));
    }

    /**
     * 保存更新的资源
     * 保存分类修改后的功能
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        if (request()->isPost()){
            $db = $this->db::find($id);
            $db->catname = input('post.catname');
            $db->thumb = input('post.thumb');
            $db->pid = input('post.pid');
            $db->description = input('post.description');
            $db->linkurl = input('post.linkurl');
            $db->orderby = input('post.orderby');
            if (input('?post.iscover')){
                $db->iscover = 1;
            }else{
                $db->iscover = 0;
            }
            $db->save();
            $this->success( '修改成功','admin/category/index');
            exit;
        }
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
        $oldData = $this->db::find($id);
        if ($this->db::get(['pid'=>$oldData['cid']])){
            $this->error('请先移除子栏目');
            exit();
        }
        $oldData->delete();
        $this->success('删除成功');
        exit();

    }
}
