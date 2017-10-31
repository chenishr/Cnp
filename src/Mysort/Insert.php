<?php
namespace Mysort;

/*
 * 插入排序
 */
class Insert extends Sort{
    public static function sort(array $arr){
        $length = count($arr);

        for($i = 1; $i < $length; $i ++){

            // 保存待插入的值
            $tmp = $arr[$i];
            $j = $i;

            // 挪动到需要插入的位置
            while($j > 0 && $arr[$j - 1] > $tmp){
                $arr[$j] = $arr[$j - 1];
                $j--;
            }
            $arr[$j] = $tmp;
        }

        return $arr;
    }
}