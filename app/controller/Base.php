<?php

namespace app\controller;

use think\App;

// 单应用模式 全模块 父 基础控制器
class Base
{
    protected $app;

    protected $request;

    protected $view;

    public function __construct(App $app)
    {
        $this->app     = $app;
        $this->request = $this->app->request;
        $this->view = $this->app->view;

        // 控制器初始化
        $this->initialize();
    }

    // 初始化
    protected function initialize()
    {}

}