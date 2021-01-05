<?php
// 可変引数
// 複数の変数をまとめて指定できる
function combine(string ...$name): string // return $combineNameがstring
{
  $combineName = '';
  for ($i = 0; $i < count($name); $i++) {
    $combineName .= $name[$i];
    if ($i != count($name) - 1) {
      $combineName .= '・';
    }
  }
  return $combineName;
}

$lName = '名前';
$fName = '苗字';
$name1 = combine($fName, $lName);

echo '結合結果: ' . $name1;
echo '<br>';

$variableLength = combine('テスト1', 'テスト2', 'テスト3');
echo $variableLength;
