<?php

// 文字列の長さ
$text = 'abc';

echo strlen($text) . '<br>'; // 3

// 日本語の場合 マルチバイト
// SJIS, UTF-8 3バイトから6バイト 例）'あ'の場合 3バイト
$japanese = 'あいうえお';

echo mb_strlen($japanese) . '<br>';

// 文字列の置換
$subject = "私はTAKAです";
$search = "TAKA";
$replace = "たか";
echo str_replace($search, $replace, $subject) . '<br>';
