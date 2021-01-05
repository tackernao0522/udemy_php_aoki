<?php
// declare(strict_types=1); // 強い型指定

echo 'タイプヒンティングテスト' . '<br>';
/**
 * @param $string
 */
function noTypeHint($string)
{
  var_dump($string);
}

noTypeHint(['テスト']); // 引数string予定に 配列-> エラーは出ない
echo '<br>';

// タイプヒンティング(引数に型を指定。型が違うとエラー)
function typeTest(string $string) // 引数stringの他に、 array, callable, bool, float, int, object, クラス名, インターフェース名
{
  var_dump($string);
}

typeTest(['配列文字']);
// 引数にstringと指定しているのに 配列->こちらはエラー
