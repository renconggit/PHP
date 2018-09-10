<?php

include "phpqrcode.php"; //引入PHP QR库文件

//定义纠错级别  纠错级别：L、M、Q、H

/*

L(QR_ECLEVEL_L，7%)，
M(QR_ECLEVEL_M，15%)，
Q(QR_ECLEVEL_Q，25%)，
H(QR_ECLEVEL_H，30%)

*/

$errorLevel = "L";

//定义生成图片宽度和高度;默认为3   1到10

$size = "10";

//定义生成内容

// $content="尝试一下内容测试";
// //调用QRcode类的静态方法png生成二维码图片//

// QRcode::png($content, false, $errorLevel, $size);


//控制生成二维码的空白区域大小  默认为4
$margin="1";


//保存二维码图片并显示出来，$outfile必须传递图片路径。
$saveandprint=false;

//生成网址类型

$url="https://www.baidu.com/";






//显示二维码图片
QRcode::png($url, false, $errorLevel, $size,$margin,$saveandprint);

//生成二维码图片   
#QRcode::png($url, "C:/Users/Mas/Desktop/StudentNote/php/damicms/404/code.png", $errorLevel, $size,$margin,$saveandprint);



//http://phpqrcode.sourceforge.net/examples/index.php?example=007

//QRcode :: png（'code data text'，'filename.png'）; //创建文件
//QRcode :: png（'some othertext 1234'）; //创建代码图像并将其直接输出到浏览器中


?>