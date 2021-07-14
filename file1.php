<?php
function getsize($size,$format='kb'){
    $p = 0;
    if($format == 'kb'){
        $p = 1;
    }
    if($format == 'mb'){
        $p = 2;
    }
    if($format == 'gb'){
        $p = 3;
    }
    $size /= pow(1024,$p);
    return number_format($size,3);
}
$filename = 'D:/Demo/test.txt';
$size = filesize($filename);
$size = getsize($size,'kb');
echo $size.'kb';