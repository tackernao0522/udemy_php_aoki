<?php

$globalVariable = 'グローバル変数です';

function checkScope($str)
{
  $localVariable = 'ローカル変数です';
  echo $localVariable . '<br>';
  // global $globalVariable; ほとんど使わない
  echo $str . '<br>';
}

echo $globalVariable . '<br>';
echo $localVariable . '<br>'; // 表示されない

checkScope($globalVariable); // ローカル変数使える
