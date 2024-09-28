<?php

namespace app\controller;

use app\BaseController;
use app\model\User;

class Link extends BaseController
{
    public function index()
    {
        // 主表
        $user = User::find(45);
        // 访问关联从表
        return json($user->profile);

    }
}