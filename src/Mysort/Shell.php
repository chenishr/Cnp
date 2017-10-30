<?php
namespace Mysort;
use Mysort\Sort;

/*
 * 希尔排序
 */
class Shell extends Sort{
    public static function sort(array $arr){
        $step = 5;

        while($step >= 1){
            self::shellSort($arr,$step);
            $step = floor($step / 2);
        }

        return $arr;
    }

    private static function shellSort(array &$arr,$step){
        $length = count($arr);
        for($i = 0; $i < $length; $i += $step){
            $tmp = $arr[$i];
            $j = $i;
            while($j > 0  &&  $arr[$j - $step] > $tmp){
                $arr[$j] = $arr[$j - $step];
                $j -= $step;
            }
            $arr[$j] = $tmp;
        }
    }
}