<?php

namespace app\controller;

use app\controller\Base as BaseController;

// 单应用模式 全模块 父 空控制器
class Error extends BaseController
{
    public function __call($method, $args)
    {
    	return 'error request!';
    }
}