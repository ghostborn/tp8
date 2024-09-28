<?php

namespace app\controller;

use app\BaseController;
use app\model\UserBak;


class TestUser extends BaseController
{
    public function index()
    {
//        $user = new UserBak();
//        return $user->saveAll([
//            [
//                "name" => "赵六",
//                "age" => 19,
//                "gender" => "男"
//            ],
//            [
//                "name" => "钱七",
//                "age" => 22,
//                "gender" => "男",
//                "details" => "我很有钱，排行老七！"
//            ]
//        ]);

//        $user = UserBak::create([
//            "name" => "李逍遥",
//            "age" => 18,
//            "gender" => "男",
//            "details" => "我是一代主角"
//        ], ["name", "age", "gender", "details"], false);
//
//
//        return $user->id;

//        return UserBak::destroy([43, 44]);

//        $user = UserBak::find(19);
//        $user->details = "我是诗仙！";
//        $user->force()->save();
//        return UserBak::count();

//        protected
//        $readonly = ["age", "details"];
//
//        return UserBak::update(["id" => 17, "age" => 22, "name" => "李逍遥2", "details" => "沧海一声笑"]);

        $user = UserBak::select();
        return json($user);

//        $user = UserBak::find(1);
//        echo $user->getData("status");

//        $user = UserBak::select()->withAttr("age", function ($value) {
//            return $value + 100;
//        });
//        return json($user);

//        return UserBak::create([
//            "name" => "酒剑仙",
//            "age" => 58,
//            "gender" => "男",
//            "details" => "我是隐藏主角！"
//        ]);

//        $user = UserBak::withSearch(["name", "create_time"], ["name" => "酒", "create_time" => ["2024-09-27 09:12:10", "2024-09-27 09:12:10"]])->select();
//        return json($user);


//        return json(UserBak::onlyTrashed()->select());

//        $user = UserBak::onlyTrashed()->find(45);
//        $user->restore();


    }
}