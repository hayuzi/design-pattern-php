<?php

// 基础加载定义
define('ROOT_PATH', __DIR__);
require_once('./autoLoad.php');
spl_autoload_register('myAutoLoad');


// 调用脚本