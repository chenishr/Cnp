<?php
namespace Design\Strategy;

/* 
 * 返回打九折的价格
 */
class PriceB implements Strategy{
    public function getPrice($price){
        return $price * 0.9;
    }
}