<?php
namespace Mysort;
use Mysort\Sort;

/*
 * 冒泡排序
 */
class Bubble extends Sort{
    public static function sort(array $arr){
        $length = count($arr);

        for($i = 0; $i < $length; $i ++){
            for($j = $i; $j < $length; $j ++){
                if($arr[$i] > $arr[$j]){
                    Bubble::swap($arr[$i] , $arr[$j]);
                }
            }
        }

        return $arr;
    }
}