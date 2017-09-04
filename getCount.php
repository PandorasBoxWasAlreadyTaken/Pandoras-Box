<?php

$fp = fopen('count.txt', 'c+');
flock($fp, LOCK_EX);

$count = (string)fread($fp, filesize('count.txt'));

echo $count;