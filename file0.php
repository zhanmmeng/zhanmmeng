<?php
$filename = 'D:/Demo/test.txt';
//��д�����ȡ$filename���ļ�����
$content = file_get_contents($filename);
echo $content.'<br \>';
if (file_exists($filename)){
    echo 'exist';
}else{
    echo'�ļ�����';
}
echo filesize($filename);