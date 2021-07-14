<?php
$filename = 'D:/Demo/test.txt';
file_put_contents($filename, 'test');
echo file_get_contents($filename);