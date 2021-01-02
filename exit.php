<?php

$test = 123;
$test_2 = 456;

echo $test . '<br>';
var_dump($test); // ここまでで止められる
exit; // 処理を止める
echo $test_2 .'<br>'; // 表示されない
