<?php

namespace app\home\controller;

use app\common\model\Category;
use app\common\model\Goods;
use think\Controller;

class Entry extends Controller
{

    private $categoryData;
    private $model;

    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub

        // 调取分类数据
        // 获取后台分类表数据
        $model = new Category();
        $this->categoryData = $model->where('pid',0)->select();
        $this->model=$model;
    }

    /**
     *  前台首页
     *
     *  首页需要数据：
     * 1.分类表数据
     * 2.商品表数据
     */
    public function index(){
        // 获取后台分类顶级分类表数据
        // select 选择数据集
        $categoryData = $this->categoryData;

        // 取出前台制定分类的数据 不是全部
        // 每个分类取出8条

        // 科技达人分类数据 cid = 2
        // 获取 子类的cid
        $subData = $this->model::where('pid',2)->column('cid');

        $teGoodsData = Goods::where('pid','in',$subData)->field('gid,gname,gprice,mprice,cover,click,description')->select();

        return view('',compact('categoryData','teGoodsData'));
    }

    /**
     *  商品分类
     * @param $id
     */
    public function category(){
        // 获取路由参数
       $cid = input('cid');

       // 分类数据
        $categoryData = $this->categoryData;

        // 获取该顶级分类 以及其全部分类
        $pcategoryData = $this->model->get($cid);
        // 分类的父级id  pid
        $pid = $pcategoryData['pid'];
        // 获取 子类
        $subCategoryData = $this->model->where('pid',$cid)->select();

        if(!$subCategoryData && $pid !=0){

            // 当是访问文件分类时，取出他的pid
            $subCategoryData = $this->model->where('pid',$pid)->select();
           // 获取单个子类数据
            $goodsData = Goods::where('pid',$cid)->field('gid,gname,gprice,mprice,cover,click,description')->select();


        }else{
            // 获取全部商品数据


            $subData = $this->model::where('pid',$cid)->column('cid');

            $goodsData = Goods::where('pid','in',$subData)->field('gid,gname,gprice,mprice,cover,click,description')->select();

        }

        // 取出商品数据
        // 1. 当商品是全部时 首先获取子分类 再取出数据
        // 当时子分类时 直接取出数据

        return view('',compact('categoryData','pcategoryData','subCategoryData','pid','goodsData'));
    }
}