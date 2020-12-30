<?php

// for 繰り返す数が決まっている場合
for ($i = 0; $i < 10; $i++) {
  echo $i . '<br>';
}

echo '<br>';

// break
for ($i = 0; $i < 10; $i++) {
  if ($i === 5) { // 5になるとき止まる
    break;
  }
  echo $i . '<br>';
}

echo '<br>';

// continue
for ($i = 0; $i < 10; $i++) {
  if ($i === 5) { // 5はスキップされる
    continue;
  }
  echo $i . '<br>';
}

echo '<br>';

// while 繰り返す数が決まってないとき
$j = 0;

while ($j < 5) {
  echo $j . '<br>';
  $j++;
}

echo '<br>';

// do while ほとんど使わない
$j = 0;
do {
  echo $j . '<br>';
  $j++;
} while ($j < 5);
