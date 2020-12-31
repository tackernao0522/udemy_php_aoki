<?php

// switch
// if文の方が良い 見やすい
// == (switchの場合 ===ではなく ==の方が走ってしまう)

$data = 3;

switch ($data) {
  case 1:
    echo '1です';
    break;
  case 2:
    echo '2です';
    break;
  case 3:
    echo '3です';
    break;
  default:
    echo '1-3ではありません。';
}

echo '<br><br>';

$num = '1';

switch ($num) {
  case $num === 1:
    echo '1です';
    break;
  case $num === 2:
    echo '2です';
    break;
  case $num === 3:
    echo '3です';
    break;
  default:
    echo '1-3ではありません。文字列です。';
}
