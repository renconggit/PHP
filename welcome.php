<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $file = fopen('test.txt', 'r') or exit("无法打开文件");//fopen() 函数用于在 PHP 中打开文件。
    while(!feof($file)){//feof() 函数检测是否已到达文件末尾（EOF）。
       echo fgets($file).'<br>';//fgetc() 函数用于从文件中逐字符地读取文件。       注释：在调用该函数之后，文件指针会移动到下一个字符。
    }
    fclose($file);//fclose() 函数用于关闭打开的文件
    ?>
</body>
</html>