<?php
namespace Mysort;

use Mysort\Sort;

/*
 * 选择排序
 */
class Select extends Sort{
    public static function sort(array $arr){
        $length = count($arr);

        for($i = 0; $i < $length; $i ++){
            $min = $i;
            
            // 找到剩下的最小元素的下标
            for($j = $i + 1; $j < $length; $j ++){
                if($arr[$min] > $arr[$j]){
                    $min = $j;
                }
            }

            if($min != $i){
                Select::swap($arr[$i],$arr[$min]);
            }
        }

        return $arr;
    }
}