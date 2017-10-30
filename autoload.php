<?php

// 尝试自动注册没定义的类
spl_autoload_register(function($class){
    $file = __DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
    if(is_file($file)){
        require_once $file;
    }
});
