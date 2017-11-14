<?php
// 例：basename をかけてファイル名のみにする
echo file_get_contents('/var/log/apt/'.basename($_GET['filename']));
