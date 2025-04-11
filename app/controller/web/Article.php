<?php

namespace app\controller\web;

use app\controller\Base as BaseController;
use think\facade\Db;

class Article extends BaseController
{
    public function index()
    {
    	$db = Db::name('article')->select();
        dump($db);
        $this->view->assign('data', 'this is data');
        return $this->view->fetch('./article');
    	// return 'article' . $this->request->param('id');
    }

}