<?php
$filename = 'D:/Demo/test.txt';
//编写代码读取$filename的文件内容
$content = file_get_contents($filename);
echo $content.'<br \>';
if (file_exists($filename)){
    echo 'exist';
}else{
    echo'文件存在';
}
echo filesize($filename);