<?php
// show /var/log/apt/history.log
echo file_get_contents('/var/log/apt/'.$_GET['filename']);
