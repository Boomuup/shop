<?php

namespace app\admin\model;

use think\Model;

class Goods extends Model
{
    // 主键
    protected $pk = 'gid';
    // 表名
    protected $table = 'shop_goods';

    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'datetime';
}
