<?php
// ini_set("display_errors", 1); php.iniでセット済み
// error_reporting(E_ALL);

function defaultValue($string = null) // デフォルト値
{
  echo $string . 'です';
}

// 引数なし
defaultValue();
echo '<br>';

// 引数あり
defaultValue('テスト');
