<?php
// echo __FILE__;
// /Applications/MAMP/htdocs/php_test/mainte04/test.php
// echo '<br>';
// echo(password_hash('5t5a7k3a', PASSWORD_BCRYPT)). '<br>';
// $2y$10$2uq9nteQMDRiJCbee9Y/be0rrie6/QghJnHdDod4ysJKrGdaBfppy

$contactFile = '.contact.dat';

// stream型
$contents = fopen($contactFile, 'a+'); // 追記

$addText = '1行追記' . "\n";

fwrite($contents, $addText);

fclose($contents);
