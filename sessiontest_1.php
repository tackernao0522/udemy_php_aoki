<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
</head>

<body>
  <?php
  if (!isset($_SESSION['visited'])) {
    echo '初回訪問です';

    $_SESSION['visited'] = 1;
    $_SESSION['date'] = date('c');
  } else {
    $visited = $_SESSION['visited'];
    $visited++;
    $_SESSION['visited'] = $visited;

    echo $_SESSION['visited'] . '回目の訪問です<br>';

    if (isset($_SESSION['date'])) {
      echo '前回訪問は' . $_SESSION['date'] . 'です';
      $_SESSION['date'] = date('c');
    }

    // setcookie("id", 'aaa', time() - 1800, '/');

    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

    echo '<pre>';
    var_dump($_COOKIE);
    echo '</pre>';
  }
  ?>
</body>

</html>
