<?php

$height = '90'; // 文字列

var_dump($height);

if ($height === 90) { // 条件は数字 この場合falseになる
  echo '身長は' . $height . 'cmです';
}

// == 一致
// === 型も一致
