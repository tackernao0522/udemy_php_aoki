<?php
// パスワードを記録したファイルの場所
echo __FILE__;
// /Applications/MAMP/htdocs/php_test/mainte/test.php

// パスワード(暗号化)
echo '<br>';
echo(password_hash('password123', PASSWORD_BCRYPT));
// $2y$10$l3y3FwEGd0mJcVljVBKd4.Sw85lx91UAeZvxeLhdN4TzDCvfBO8nm (設定したら消しておく)
