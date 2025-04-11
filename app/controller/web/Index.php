<?php

namespace app\controller\web;

use app\controller\Base as BaseController;
use think\facade\Db;

class Index extends BaseController
{
    public function index()
    {
    	dump(request());
        // return \think\facade\App::version();
        $data = Db::name('article')->select();
        dump($data);
    }
    
}