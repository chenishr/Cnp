<?php
namespace Design\Observer;

abstract class Subject{
    protected $objects;

    abstract public function attach(Observer $obs);
    abstract public function detach(Observer $obs);
    abstract public function notify();
}