<?php

namespace app\admin\model;

use think\Model;

class Category extends Model
{
    // 制定表主键 如果符合TP规范 可以不指定
    protected $pk='cid';
    // 设置当前模型对应的完整数据表名称
    protected $table='shop_category';

    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'datetime';
}
