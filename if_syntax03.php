<?php

$height = 91;

// if ($height >= 91) {
//   echo '身長は' . $height . 'cmです。';
// }

// if ($height <= 90) {
//   echo '身長は' . $height . 'cmになります。';
// }

// != と !== がある
if ($height !== 90) {
  echo '身長は90cmではありません。';
}

echo '<br>';

// データが入っているかどうか
// isset empty is_null

$test = '1';

// if (!empty($test)) { // 空の場合trueだがこの場合変数は入っておりfalseになるが!があるとfalseが否定されtrueになる
//   echo '変数は空ではありません。';
// }

if (empty($test)) {
  echo '変数は空です。';
} else {
  echo '変数は空ではありません。';
}

echo '<br>';

// AND と OR

$signal_1 = 'red';
$signal_2 = 'blue';

if ($signal_1 === 'red' && $signal_2 === 'blue') {
  echo '赤と青です。';
}

echo '<br>';

$fruit_1 = 'grape';
$fruit_2 = 'peach';

if ($fruit_1 === 'orange' || $fruit_2 === 'peach') {
  echo '果物は桃です。';
}

echo '<br>';

// 三項演算子
// 条件 ? 真 : 偽

$math = 80;

$comment = $math > 80 ? 'Good' : 'Not good';

echo $comment;
