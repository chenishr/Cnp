<?php
namespace Design\Observer;

use Design\Observer\Subject;
use Design\Observer\Observer;

class MySubject extends Subject{
    private $name;
    // 需要被观察的内容
    private $content;

    public function __construct($name){
        $this->name = $name;
    }

    // 更新内容并且通知观察者
    public function setContent($content){
        $this->content = $content;
        $this->notify();
    }

    public function getContent(){
        return $this->content." from ".$this->name;
    }

    // 添加观察者
    public function attach(Observer $obs){
        $this->objects[] = $obs;
    }

    // 删除观察者
    public function detach(Observer $obs){
        // 搜索数组中是否存在某个值的元素
        $key = array_search($obs,$this->objects, true);
        if($key){
            unset($this->objects[$key]);
        }
    }

    // 通知
    public function notify(){
        foreach($this->objects as $val){
            $val->update($this);
        }

    }
}