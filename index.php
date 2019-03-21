<?php

// 基础加载定义
use Lib\Sample;

date_default_timezone_set('Asia/Shanghai');

define('ROOT_PATH', __DIR__);
require_once('./autoLoad.php');
spl_autoload_register('myAutoLoad');


// 调用脚本. 请到run方法中查看具体调用
Sample::run();