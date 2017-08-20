<?php

namespace app\api\controller;

use helper\Cart;
use think\Controller;
use think\Request;
use think\Session;

class Api extends Controller
{
    /**
     * 购物车
     *
     * @return \think\Response
     */
    public function cart()
    {
        // 获取购物车数据
        $goods = Session::get('cart.goods');
        $cart = json_encode($goods,JSON_UNESCAPED_UNICODE| JSON_UNESCAPED_SLASHES);
        echo $cart;
        exit;
    }

    /**
     * 删除指定资源
     *
     * @param  int $id
     *
     * @return \think\Response
     */
    public function delete() {
        $sid = input('get.sid');
        $cart = new Cart();
        $cart->del($sid);
        // 在返回 购物车信息
        $this->cart();
    }

    // 添加购物车
    /**
     *  添加购物车
     */
    public function add() {
        $data = input('post.data');
        $data =json_decode($data,true);

        $cart = new \helper\Cart();
        $cart->add( $data );
        // 在返回 购物车信息
        $this->cart();
    }


}
