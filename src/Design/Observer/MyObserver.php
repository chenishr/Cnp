<?php
namespace Design\Observer;

class MyObserver extends Observer{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }
    public function update(Subject $sub){
        printf($this->name." recives %s\n",$sub->getContent());
    }
}