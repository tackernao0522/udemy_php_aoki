<?php

// 複数の値 foreach

$members = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー',
];

// バリューのみ表示
foreach ($members as $member) {
  echo $member . '<br>';
}

echo '<br>';

// キーとバリューそれぞれ表示
foreach($members as $key => $value) {
  echo $key . 'は' . $value . 'です。' . '<br>';
}

echo '<br>';

// 多段階の配列を展開
$members2 = [
  '本田' => [
    'height' => 170,
    'hobby' => 'サッカー',
  ],
  '香川' => [
    'height' => 165,
    'hobby' => 'サッカー',
  ],
];

foreach ($members2 as $key => $value) {
  foreach ($value as $key2 => $value2) {
    echo $key . 'の' . $key2 . 'は' . $value2 . 'です。' . '<br>';
  }
}
