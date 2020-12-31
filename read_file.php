<?php

require __DIR__ . '/common/common.php'; // エラーが出たとき処理されず止まる
// include 'common/common.php'; エラーではなく警告が出て処理できるものは処理される

echo $commonVariable . '<br>';

echo __DIR__ . '<br>'; // 絶対パスが表示される
echo __FILE__ . '<br>'; // このファイルの絶対パス

commonTest();
