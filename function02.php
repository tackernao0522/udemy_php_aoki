<?php

// インプット引数 なし
// アウトプット戻り値 なし

function test()
{
  // 処理
  echo 'テスト' . '<br>';
}

test();

// インプット引数 あり
// アウトプット戻り値 なし

$comment = 'コメント2';

function getComment($string)
{
  echo $string . '<br>';
}

getComment($comment);

// インプット引数 なし
// アウトプット戻り値 あり

function getNumberOfComment()
{
  return 5;
}

$commentNumber = getNumberOfComment();
echo $commentNumber . '<br>';

// 引数2つ
// 戻り値あり

function sumPrice($int1, $int2)
{
  $int3 = $int1 + $int2;
  return $int3;
}

$total = sumPrice(3, 5);

echo $total . '<br>';
