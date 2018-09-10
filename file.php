<?php 
if ($file=fopen('test1.txt','r+')) {
    echo '123456777';
} else {
    exit('123400');
}
fclose($file);//fclose() 函数用于关闭打开的文件
?>
