<?php
use PHPUnit\Framework\TestCase;
use Mysort\Bubble;
use Mysort\Select;
use Mysort\Insert;
use Mysort\Quick;
use Mysort\Shell;
use Mysort\Merge;

require_once dirname(__FILE__).'/../autoload.php';

/*
* @covers Sort
*/
class SortTest extends TestCase{
    private $data;
    private $sorted;
    public function __construct(){
        $this->data = unserialize(file_get_contents(dirname(__FILE__).'/unsortData.txt'));
        $this->sorted = unserialize(file_get_contents(dirname(__FILE__).'/sortedData.txt'));
    }

    /*
     * 测试归并排序
     */
    public function testMergeSort(){
        $begin = $this->getTime();
        $result = Merge::sort($this->data);
        echo "\t" . __METHOD__ ."\t". ($this->getTime() - $begin) . "\n" ;

        $this->assertEquals(true, $this->theSame($this->sorted,$result));
    }

    /*
     * 测试快速排序
     */
    public function testQuickSort(){
        $begin = $this->getTime();
        $result = Quick::sort($this->data);
        echo "\t" . __METHOD__ ."\t". ($this->getTime() - $begin) . "\n" ;

        $this->assertEquals(true, $this->theSame($this->sorted,$result));
    }

    /*
     * 测试希尔排序
     */
    public function testShelltSort(){
        $begin = $this->getTime();
        $result = Shell::sort($this->data);
        echo "\t" . __METHOD__ ."\t". ($this->getTime() - $begin) . "\n" ;

        $this->assertEquals(true, $this->theSame($this->sorted,$result));
    }

    /*
     * 测试插入排序
     */
    public function testInsertSort(){
        $begin = $this->getTime();
        $result = Insert::sort($this->data);
        echo "\t" . __METHOD__ ."\t". ($this->getTime() - $begin) . "\n" ;

        $this->assertEquals(true, $this->theSame($this->sorted,$result));
    }

    /*
     * 测试选择排序
     */
    public function testSelectSort(){
        $begin = $this->getTime();
        $result = Select::sort($this->data);
        echo "\t" . __METHOD__ ."\t". ($this->getTime() - $begin) . "\n" ;

        $this->assertEquals(true, $this->theSame($this->sorted,$result));
    }

    /*
     * 测试冒泡排序
     */
    public function testBubbleSort(){
        $begin = $this->getTime();
        $result = Bubble::sort($this->data);
        echo "\t" . __METHOD__ ."\t". ($this->getTime() - $begin) . "\n" ;

        $this->assertEquals(true, $this->theSame($this->sorted,$result));
    }

    /*
    * 定义用户自定义的比较函数
    */
    private function theSame(array $arr,array $brr){
        $arrLength = count($arr);
        $brrLength = count($brr);

        if($arrLength != $brrLength){
            return false;
        }

        for($i = 0; $i < $arrLength; $i ++){
            if($arr[$i] != $brr[$i]){
                return false;
            }
        }

        return true;
    }

    /*
     * 统计时间
     */
    private function getTime(){
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }
}