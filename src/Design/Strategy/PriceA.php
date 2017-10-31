<?php
namespace Design\Strategy;

/* 
 * 返回正常价格
 */
class PriceA implements Strategy{
    public function getPrice($price){
        return $price;
    }
}