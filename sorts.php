<?php
use Mysort\Quick;
use Mysort\Insert;
use Mysort\Bubble;
use Mysort\Select;
use Mysort\Count;
use Mysort\Shell;
use Mysort\Merge;

require_once __DIR__.'/autoload.php';

$data = [1,34,20,44,12,85,23,45,55,93,29,39,-5,12,80];

Insert::show($data);
//$res = Select::sort($data);
//$res = Bubble::sort($data);
//$res = Insert::sort($data);
//$res = Count::sort($data);
//$res = Shell::sort($data);
$res = Merge::sort($data);
//$res = Quick::sort($data);

Insert::show($res);
