<?php
namespace Mysort;

use Mysort\Sort;

/*
 * 快速排序
 */
//class Quick implements Sort{
class Quick extends Sort{
    private static function quick_sort(array &$arr,$left,$right){
        if($left >= $right){
            return ;
        }

        // 选择走边的一个作为标兵
        $flag = $arr[$left];

        // 
        $i = $left;
        $j = $right;
        while($i < $j){
            while($i < $j && $arr[$j] >= $flag){
                $j--;
            }

            if($i < $j){
                $arr[$i] = $arr[$j];
                $i ++;
            }

            while($i < $j && $arr[$i] <= $flag){
                $i++;
            }

            if($i < $j){
                $arr[$j] = $arr[$i];
                $j--;
            }
        }
        $arr[$i] = $flag;

        // 继续递归排序
        // 下标 $i 是分割点
        self::quick_sort($arr,$left,$i - 1);
        self::quick_sort($arr,$i + 1,$right);
    }
    public static function sort(array $arr){
        self::quick_sort($arr,0,count($arr) - 1);

        return $arr;
    }
}