<?php

namespace app\common\model;

use think\Model;

class Order extends Model
{
    // 主键
    protected $pk = 'id';
    // 表名
    protected $table = 'shop_order';
}
