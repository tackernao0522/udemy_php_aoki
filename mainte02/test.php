<?php
// パスワードを記録したファイルの場所
// echo __FILE__;
// /Applications/MAMP/htdocs/php_test/mainte02/test.php

// パスワード(暗号化)
// echo '<br>';
// echo(password_hash('password234', PASSWORD_BCRYPT)) . '<br>';
// $2y$10$3B1p.eaUGL28ByRa3/uFgOz1jV0tfTJ90n57PivrprAGlKQQZthly (設定したら消しておく)

$contactFile = '.contact.dat';

// ファイル丸ごと読み込み
$fileContents = file_get_contents($contactFile);

// echo $fileContents;

// ファイルに書き込み(上書き)
// file_put_contents($contactFile, 'テストです');

$addText = 'テストです' . "\n";

// ファイルに書き込み(追記)
// file_put_contents($contactFile, $addText, FILE_APPEND);

// 配列 file ,区切る explode, foreach
$allData = file($contactFile);

foreach ($allData as $lineData) {
  $lines = explode(',', $lineData);
  echo $lines[0] . '<br>';
  echo $lines[1] . '<br>';
  echo $lines[2] . '<br>';
  echo $lines[3] . '<br>';
  // foreach($lines as $line) {
  //   echo $line . '<br>';
  // }
}
