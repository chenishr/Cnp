<?php
/*
 * 计数排序
 */
namespace Mysort;
use Mysort\Sort;

/*
 * 计数排序
 * 
 * 注意：
 * 不能包含重复的元素
 * 元素之间的跨度最好不要太大
 */
class Count extends Sort{
    public static function sort(array $arr){
        $tmp = [];
        $max = 0;
        $min = 0;

        foreach($arr as $val){
            $tmp[$val] = 1;
            if($val > $max){
                $max = $val;
            } else if($val < $min){
                $min = $val;
            }
        }
        unset($arr);

        for($i = $min; $i <= $max; $i ++){
            if(isset($tmp[$i]) && 1 == $tmp[$i]){
                $result[] = $i;
            }
        }
        unset($tmp);

        return $result;
    }   
}