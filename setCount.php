<?php

$fp = fopen('count.txt', 'c+');
flock($fp, LOCK_EX);

$count = (int)fread($fp, filesize('count.txt'));
ftruncate($fp, 0);
fseek($fp, 0);
fwrite($fp, $count + 1);

flock($fp, LOCK_UN);
fclose($fp);