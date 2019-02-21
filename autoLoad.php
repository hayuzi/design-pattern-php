<?php

/**
 * 自动加载类
 *
 * @param $className
 * @return bool
 */
function myAutoLoad($className)
{
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $file      = ROOT_PATH . '/' . $classPath . '.php';
    if (file_exists($file)) {
        require_once($file);
        if (class_exists($className, false)) {
            return true;
        }
    }
    return false;
}