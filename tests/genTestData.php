<?php
define("COUNT",3000);

$data = [];
for($i = 0; $i < COUNT; $i ++){
    $data[] = rand(0,999999);
}

file_put_contents(dirname(__FILE__).'/unsortData.txt',serialize($data));

sort($data);
file_put_contents(dirname(__FILE__).'/sortedData.txt',serialize($data));
