<?php

namespace app\home\controller;

use app\common\model\Category;
use think\Controller;

class Entry extends Controller
{
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
        $categoryData = (new Category())->where('pid',0)->select();

        return view('',compact('categoryData'));
    }
}
