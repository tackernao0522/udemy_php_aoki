<?php

// 指定文字列で分割
$str_2 = '指定文字列で、分割します';
echo '<pre>';
$result = explode('、', $str_2);
echo '</pre>';
echo $result[0] . '<br>';
echo $result[1] . '<br>';

// implode
$pieces = ['赤', '青', '黄'];
$glue = ',';
echo implode($glue, $pieces) . '<br>'; // 赤,青,黄

// 正規表現
// 文字かどうか
// 数字かどうか
// 郵便番号
// メールアドレスか test@gmail.com
$str_3 = '特定の文字列が含まれるか確認する';

echo preg_match('/文字列/', $str_3) . '<br>'; // int or falseを返す

// 指定文字列から文字列を取得する
echo substr('abcde', 2) . '<br>'; // 'cde'と出力される

echo mb_substr('あいう', 2); // 文字化けしない
