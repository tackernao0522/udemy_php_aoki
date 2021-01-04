<?php
// echo __FILE__;
// /Applications/MAMP/htdocs/php_test/mainte03/test.php
// echo '<br>';
// echo(password_hash('takaki', PASSWORD_BCRYPT)) . '<br>';
// $2y$10$P0Qr/20VE.ktcuX/2kUItuLaeEolhDIe/n0Hvn6TlMyrXz0tZ/vSS

$contactFile = '.contact.dat';

// stream型
$contents = fopen($contactFile, 'a+'); // 追記

$addText = '1行追記' . "\n";

fwrite($contents, $addText);

fclose($contents);
