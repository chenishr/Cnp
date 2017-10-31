<?php
namespace Design\Singleton;

/*
 * 单例模式
 * 
 * 创建对象时需要加锁，防止高并发创建多个对象
 * 防止被克隆
 * 防止反序列化
 */ 
class Singleton{
    // 静态单例对象
    protected static $obj;

    // 私有的构造函数
    private function __construct(){

    }

    // 创建单例对象
    public static function getInstance(){
        if(null === self::$obj){
            // lock 阻塞
            $fp = fopen('/tmp/singleton_lock.txt','w+');
            if(flock($fp,LOCK_EX)){
                // 再判断
                if(null === self::$obj){
                    self::$obj = new Singleton();
                }
                // unlock
                flock($fp,LOCK_UN);
            }
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