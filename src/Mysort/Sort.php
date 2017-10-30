<?php
namespace Mysort;
use Mysort\SortInterface;

/* 
 * 抽象类
 */
abstract class Sort implements SortInterface{
    /* 
     * 格式化输出数组内容
     */
    public static function show(array $arr){
        foreach($arr as $val){
            printf("%7s",$val);
        }
        printf("\n");
    }

    public static function swap(&$param1,&$param2){
        $tmp = $param1;
        $param1 = $param2;
        $param2 = $tmp;
    }
}