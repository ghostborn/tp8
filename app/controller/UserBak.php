<?php

namespace app\controller;

use app\BaseController;
use think\facade\Db;

// 引入Db数据库类

class UserBak extends BaseController
{
    public function index()
    {
        return "用户";
    }

    public function get()
    {
        // 连接user表, 查询
        //$user = Db::table("tp_user")->where("age", 14)->select();
        //$user = Db::name("user")->column("name,age", "id");

//        $data = [
//            "id" => 4,
//            "name" => "王三狗",
//            "age" => "13",
//            "details" => "我是三狗子！"
//        ];

        // 变量
        //$age = 15;
        //$gender = "女";

        // 预处理机制
        //$user = Db::name("user")->whereRaw("age>:age AND gender=:gender", [
        //"age" => $age,
        //"gender" => $gender
        //])->select();

//        $user = Db::name("user")->withoutField("details")->select();
//        return json($user);

//        Db::name("user")->alias("a")->select();
//        return Db::getLastSql();

//        $user = Db::name("user")->where("id", "IN", function ($query) {
//            $query->name("user")->field("id")->where("age", ">", 18);
//        })->select();
//        return json($user);

//        $user = Db::name("user")->withAttr("age", function ($value, $data) {
//            // NULL 不处理
//            if ($value != null) {
//                return strtoupper($value);
//            }
//        })->select();

//        $user = Db::name("user")->where("age", ">", 15)->where("gender", "男")->select();

//        $user = Db::name("user")->where([
//            ["age", ">", "15"],
//            ["gender", "=", "男"]
//        ])->select();

//        $user = Db::name("user")->where([
//            "age" => 15,
//            "gender" => "男"
//        ])->select();

        $user = Db::name("user")->where([
            ["id", ">", "5"],
            ["gender", "=", "女"],
            ["age", "<=", 150],
            ["details", "like", "%我%"]
        ])->select();


        return json($user);


    }
}