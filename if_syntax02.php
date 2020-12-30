<?php

$height = 90;

var_dump($height);

echo '<br>';

if ($height >= 91) {
  echo '身長は' . $height . 'cmです';
}

if ($height <= 90) {
  echo '身長は' . $height . 'cmになります。';
}

else {
  echo '身長は' . $height . 'cmではありません';
}

echo '<br>';

$signal = 'blue';

if ($signal === 'red') {
  echo '止まれ';
} else if ($signal === 'yellow') {
  echo '一旦停止';
} else {
  echo '進む';
}

echo '<br>';

$speed = 80;

if ($signal === 'blue') {
  if ($speed >= 90) { // ネスト
    echo 'スピード違反';
  }
}
