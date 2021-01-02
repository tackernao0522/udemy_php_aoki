<?php
// スーパーグローバル変数 phpの場合は9種類ある
// 連想配列
if (!empty($_POST)) { // 空ではなければ中身がが表示される
  echo '<pre>';
  var_dump($_POST); // 送信結果が表示される
  echo '</pre>';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Lesson</title>
</head>

<body>
  <form method="POST" action="input.php">
    氏名
    <input type="text" name="your_name">
    <br>
    <input type="checkbox" name="sports[]" value="野球">野球
    <input type="checkbox" name="sports[]" value="サッカー">サッカー
    <input type="checkbox" name="sports[]" value="バスケ">バスケ

    <input type="submit" value="送信">
  </form>
</body>

</html>
