<?php
namespace Design\Observer;

abstract class Observer{
    abstract public function update(Subject $sub);
}