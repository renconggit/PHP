<?php

if ($_FILES["file"]["error"] > 0) {
    echo "错误：" . $_FILES["file"]["error"] . "<br>";
} else {
    $allowfile = array("jpg", "jpeg", "gif", "png", "bmp");
    $temp = explode(".", $_FILES["file"]["name"]);
    $houzhui = end($temp);
    if ($_FILES["file"]["size"] < 204800&&in_array($houzhui, $allowfile)) {
        echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
        echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
        echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"];
        $filename=iconv("utf-8","GB2312//IGNORE",$_FILES["file"]["name"]);
        if(file_exists('pic/'.$_FILES["file"]["name"])){
            echo $filename."已存在";
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],'pic/'.$filename);
            echo "文件存储在: " . "pic/" . $filename;
        }
    }else{
        echo '文件不合法或者文件太大';
    }
}
?>