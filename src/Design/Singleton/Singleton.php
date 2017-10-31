<?php
namespace Design\Singleton;

/*
 * 单例模式
 * 
 * 防止被克隆
 * 防止反序列化
 */ 
class Singleton{
    // 静态单例对象
    protected static $obj;
    public $name;

    // 私有的构造函数
    private function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    // 创建单例对象
    public static function getInstance($name){
        if(null === self::$obj){
            self::$obj = new Singleton($name);
        }

        return self::$obj;
    }

    // 防止克隆
    private function __clone(){

    }

    // 防止反序列化
    private function __wakeup(){

    }
}