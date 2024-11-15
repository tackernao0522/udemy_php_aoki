<?php
require 'db_connection.php';

// ユーザー入力がなし query
// $sql = 'select * from contacts where id = 2';
// $stmt = $pdo->query($sql); // sql実行 ステートメント

// $result = $stmt->fetchall();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

// ユーザー入力あり prepare, bind, execute 悪意ユーザ delete * SQLインジェクション対策
$sql = 'select * from contacts where id = :id'; // 名前付きプレースホルダ
$stmt = $pdo->prepare($sql); // プリペアードステートメント
$stmt->bindValue('id', 3, PDO::PARAM_INT); // 紐付け
$stmt->execute(); // 実行

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';
