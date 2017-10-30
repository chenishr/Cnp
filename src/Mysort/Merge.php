<?php
namespace Mysort;
use Mysort\Sort;

/*
 * 归并排序
 */
class Merge extends Sort{
    public static function sort(array $arr){
        $left = 0;
        $right = count($arr) - 1;

        self::mSort($arr,$left,$right);

        return $arr;
    }

    private static function mSort(array &$arr,$left,$right){
        if($left >= $right){
            return ;
        }

        $mid = floor(($left + $right) / 2);

        self::mSort($arr,$left,$mid);
        self::mSort($arr,$mid + 1,$right);
        self::merge($arr,$left,$mid,$right);
    }

    private static function merge(array &$arr,$left,$mid,$right){
        $tmp = [];
        $index = 0;

        $i = $left;
        $j = $mid + 1;
        while($i <= $mid  &&  $j <= $right){
            if($arr[$i] > $arr[$j]){
                $tmp[$index] = $arr[$j];
                $j++;
            }else{
                $tmp[$index] = $arr[$i];
                $i++;
            }

            $index ++;
        }

        while($i <= $mid){
            $tmp[$index] = $arr[$i];
            $i ++;
            $index ++;
        }

        while($j <= $right){
            $tmp[$index] = $arr[$j];
            $j ++;
            $index ++;
        }

        $length = $right - $left;
        for($k = 0; $k <= $length; $k ++){
            $arr[$left + $k] = $tmp[$k];
        }
    }
}