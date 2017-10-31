<?php
namespace Design\Strategy;

/*
 * 策略模式的接口
 */
interface Strategy{
    public function getPrice($price);
}