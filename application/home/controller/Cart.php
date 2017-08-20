<?php

namespace app\home\controller;

use app\common\model\Goods;
use app\common\model\Subgoods;
use think\Controller;
use think\Request;
use think\Session;

class Cart extends Controller {
    /**
     * 直接购买商品
     *
     * @return \think\Response
     */
    public function index() {
            // 当时post 提交时 显示单一的商品
            // 将商品加入购物车中

            $data = input('post.data');
            $data = json_decode($data,true);
            // 获取就商品信息
            $goods = Goods::get($data['id']);
            if (is_null($goods)){

                return $this->redirect('/');
            }
            $goods = $goods->toArray();
            // 获取商品属性
            $sub = Subgoods::where('goods_id',$data['id'])->select();
            foreach ($sub as $k=>$v){
                if($v['sname'] == $data['options'][0]['sname']){
                    $goods['sub'] =$sub[$k];
                    break;
                }
            }


             //halt($goods);
            $cart = json_encode($data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
            $goods1 = json_encode($goods,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
            // 将该信息返回到 购物车页面
            return view('',compact('data','goods','cart','goods1'));

    }

    public function list(){
        $data = Session::get('cart.goods');
        // 将商品信息添加
        foreach ($data as $k=>$v){
            $info = Goods::get($v['id'])->toArray();
            $data[$k]['info'] = $info;
        }
        $data = json_encode($data,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        return view('',compact('data'));
    }

    /**
     *  添加购物车
     */
    public function add() {
        $data = input('post.data');
        $data =json_decode($data,true);

//        $data = [
//            'id'      => 1, // 商品 ID
//            'name'    => ' 后盾网 PHP 视频教程光盘 ',
//            'num'     => 1,
//            'price'   => 988,
//            'options' => '红色',
//        ];
        $cart = new \helper\Cart();
        $cart->add( $data );
        $goods = Session::get('cart');
        $msg = ['goods'=>$goods,'code'=>1];
        echo json_encode($msg,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        exit;
    }


    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     *
     * @return \think\Response
     */
    public function update( Request $request ) {
        $Data = [
            "sid" => '027c9134',               // 商品的唯一SID，不是商品的ID
            "num" => 10,                       // 商品数量
        ];
        $cart = new \helper\Cart();
        $cart->update($Data);
        $this->success('修改成功','index');
    }

    /**
     * 删除指定资源
     *
     * @param  int $id
     *
     * @return \think\Response
     */
    public function delete() {
        $cart = new \helper\Cart();
        $cart->flush();
        $this->success( 'yes', 'index' );
    }
}