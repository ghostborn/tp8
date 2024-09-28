<?php

namespace app\model;

use think\Model;

class User extends Model
{
    public function profile()
    {
        // 一对一关联
        //参数1: 关联的表模型
        //参数2: 默认为user_id(外键)
        return $this->hasOne(Profile::class);
    }
}