<?php

namespace app\model;

use think\Model;
use think\model\concern\SoftDelete;


class UserBak extends Model
{
//    public static function init()
//    {
//        echo "初始化";
//    }

    use SoftDelete;

    protected static function onAfterRead($user)
    {
//        echo "执行了查询! " . $user->id;
    }

    public function getStatusAttr($value): string
    {
        $status = [-1 => "删除", 0 => "冻结", 1 => "正常", 2 => "待审核"];
        return $status[$value];
    }

    public function setAgeAttr($value)
    {
        return $value + 100;
    }

    // 搜索器，模糊查找姓名
    public function searchNameAttr($query, $value, $data): void
    {
        $query->where("name", "like", "%" . $value . "%");
    }

    // 搜索器,限定时间
    public function searchCreateTimeAttr($query, $value, $data): void
    {
        $query->whereBetweenTime("create_time", $value[0], $value[1]);
    }


}