<?php

use think\facade\Route;

// 全局变量规则
// 系统默认的变量规则设置是\w+,只会匹配字母、数字和下划线字符,并不会匹配特殊符号和中文
Route::pattern([
    'id'		=>	'\d+',
    'page'		=>	'\d+',
    'seo'		=>	'[a-zA-Z0-9_-]+',
    'alphaNum'	=>	'\w+',
    'q'			=>	'[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*',
    'issue'		=>	'[a-zA-Z0-9_-]+',
    // 州
    'state'		=>	'[a-zA-Z0-9_-]+',
    // address = 某市/某县/某镇 混合的 区分是为city还是为country则判断匹配的字符串中是否包含country
    'address'	=>	'[a-zA-Z0-9_-]+',
]);

// 网站首页
Route::get('/', 'web/index/index');
Route::get('/article/:id', 'web/article/index')->ext('html');

// 开启多模块URL自动解析 `8.1+`版本开始支持
Route::auto();