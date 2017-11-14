<?php
// 例：escapeshellarg を使ってエスケープする
system('echo '.escapeshellarg($_GET['email']));
