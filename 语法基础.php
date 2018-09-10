
<?php
    /*---PHP Debug--*/
    //PHP Intelephense
    //--安装暂时跳过
    //php语法
echo 'php输出';
print '打印输出';
echo '11';
?>
  
<?php 
$a = 5;
$b = 6.5;
$z = $a + $b;
echo $z;
?>
 
<?php 
// 2.PHP 变量作用域 
// local global static parameter

//方法内要使用全局变量 要加上global声明一次 $GLOBALS['y']也可以用

$textglobal = '21332';
$x = 5;
$y = 10;
$z = 15;
//global $d=100;
function testfun()
{
    $test = 10;//局部变量
    echo '</br>';
    global $x, $y;
    echo '<p>测试函数内变量:' . $test . '</p>';
    echo '</br>';
    echo '变量 x 为:' . $test;
    echo '</br>';
    echo '-----' . $x + $y;
    echo '</br>';
    global $z;
    echo $z;
    echo '</br>';
    echo $GLOBALS['y'];
    echo '</br>';
}
testfun();
echo '变量x为: $textglobal';//无法输出
echo '</br>';
echo '变量x为: ' . $textglobal;//输入需要.
//echo $test;      //无法访问局部变量
?>


<?php 
//Static 静态作用域
function fun()
{
    static $var = 1;
    echo $var + 1;
    $var++;
}
fun();
fun();
fun();
fun();
?>
<?php 
//parameter 参数作用域
function myTest($x)
{
    echo $x;
}
myTest(5);
?>



<?php 
// 1、定义在函数外部的就是全局变量，它的作用域从定义处一直到文件结尾。
// 2、函数内定义的变量就是局部变量，它的作用域为函数定义范围内。
// 3、函数之间存在作用域互不影响。
// 4、函数内访问全局变量需要 global 关键字或者使用 $GLOBALS[index] 数组
//echo 或 echo()。 print 或 print()。
//print 有返回值
$a = 100;
$cars = array("Volvo", "BMW", "Toyota", 1, 2, 3, 4);
print 'print-' . $cars[0];
?>
<?php 
// 1. 必须后接分号，否则编译通不过。
// 2. EOF 可以用任意其它字符代替，只需保证结束标识与开始标识一致。
// 3. 结束标识必须顶格独自占一行(即必须从行首开始，前后不能衔接任何空白和字符)。
// 4. 开始标识可以不带引号或带单双引号，不带引号与带双引号效果一致，解释内嵌的变量和转义符号，带单引号则不解释内嵌的变量和转义符号。
// 5. 当内容需要内嵌引号（单引号或双引号）时，不需要加转义符，本身对单双引号转义，此处相当与q和qq的用法。

$a = '<h3>h3我的第一个标题</h3>';
echo
    <<<EOF
<h1>我的第一个标题</h1>
    <p>我的第一个段落。</p>
    $a
EOF;
echo
    <<<hh
<h1>我的第一个标题</h1>
    <p>我的第一个段落。</p>
    $a
hh;
?>

<?php 
//数据类型String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）。
//var_dump() 返回参数的类型和值
var_dump('3213');//string '3213' (length=4)
var_dump(047);//int 39
var_dump(8E-5);//float 8.0E-5
$cars = array("Volvo", "BMW", "Toyota");//array (size=3)
                                    // 0 => string 'Volvo' (length=5)
                                    // 1 => string 'BMW' (length=3)
                                    // 2 => string 'Toyota' (length=6)
var_dump($cars)
?>




<?php 

// => 是数组成员访问符号--
// -> 是对象成员访问符号--
// 比如：
// $array = array("site map"=>"map.php"); //定义了一个数组，包含一个数组成员：键名为site map，值为map.php
// $this->$name = $value
// $this 在php语言里是个特定的变量，它代表了类本身，->是访问其类成员的操作符，$this->$name = $value，这句代码意思是：将当前类的name变量的值设置为 $value.

// array_keys array_values

class Car
{
    var $color;
    function __construct($color = "green")
    {
        $this->color = $color;
    }
    function what_color()
    {
        return $this->color;
    }
}
function print_vars($obj)
{
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}
// 实例一个对象
$herbie = new Car("white");

// 显示 herbie 属性
echo "\therbie: Properties\n";
print_vars($herbie);
?>

<?php
// define("GREETING", "欢迎访问 Runoob.com", true);// 1必选参数，常量名称，即标志符。 2必选参数，常量的值。 3可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的
// -----常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。
// --------------
define("constx", '老板啊啊', true);
function mytest1()
{
    return constx;
}
    //strlen() 函数返回字符串的长度（字符数）。
echo strlen(mytest1()); 
    //strpos() 函数用于在字符串内查找一个字符或一段指定的文本。 
    //如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置(从0索引开始)。如果未找到匹配，则返回 FALSE。 
echo '' . strpos("hello     glb", 'sglb');
var_dump(strpos('nihao glb', 'ggg'));
echo false . '1';
echo '</br>';
$x = 5;
$y = 2;
echo $x + $y;//x 和 y 的和
echo '</br>';
echo $x - $y;//x 和 y 的差
echo '</br>';
echo $x * $y;//x 和 y 的积
echo '</br>';
echo $x / $y;//x 和 y 的商
echo '</br>';
echo $x % $y;//x 除以 y 的余数
echo '</br>';
echo $x . $y;//x .是拼接
echo '</br>';
echo -$x;//取反
?>


<?php
//elseif 和 else if 完全同效果，elseif 是 PHP 为 else if 专门做到容错版。更准确更严格到写法为后者: else if
if (1 == 2)
    echo '1=1';
else if (1 == 1)
    echo '1=2';
else
    echo '1=2'

?>

<?php

//必须要注意break的书写
$n = "色";
switch ($n) {
    case '黄色':
        echo '值为黄色';
        break;
    case '绿色':
        echo '值为绿色';
        break;
    default:
        echo '默认色';
}

?>
----
<?php
//数组定义需要加上array
$array = array("glb", "glbmeizi", "glbwife");
echo $array[1] . '是' . $array[0] . '的' . $array[2];
?>

<?php
//关联数组是使用您分配给数组的指定的键的数组。
$newarray = array("glb" => 28, "rc" => 26, "glbwife" => 10, "rcwife" => 27);
$newarraykey = array_keys($newarray);
$newarrayval = array_values($newarray);
for ($i = 0; $i < count($newarray); $i++) {
    if ($i % 2 == 0) {
        echo "<br>------";
        echo $i;
        echo $newarraykey[$i] . '比' . $newarraykey[$i + 1] . '大' . ($newarrayval[$i] - $newarrayval[$i + 1]);
    }
}
foreach ($newarray as $key => $value) {
    echo "<br>------";
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}
?>


<?php
//关联数组是使用您分配给数组的指定的键的数组。  //unset 移除数组某个值 普通数组直接安索引  关联数组按键移除
$newarray = array("glb" => 28, "rc" => 26, "glbwife" => 10, "rcwife" => 27);
unset($newarray["glbwife"]);
//sort对数组进行升序排列 rsort对数组进行降序排列
//asort() - 根据关联数组的值，对数组进行升序排列
//ksort() - 根据关联数组的键，对数组进行升序排列
//arsort() - 根据关联数组的值，对数组进行降序排列
//krsort() - 根据关联数组的键，对数组进行降序排列
ksort($newarray);
foreach ($newarray as $key => $value) {
    echo "<br>------";
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}
?>
<!-- <?php
// 从大到小排序
    $numArray = array(3, 2, 6, 5, 8, 10);
    $numCount = count($numArray);
    for ($i = $numCount - 1; $i >= 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            if ($numArray[$j] < $numArray[$j + 1]) {
                $aa = $numArray[$j + 1];
                $numArray[$j + 1] = $numArray[$j];
                $numArray[$j] = $aa;
            }
        }
    }

    print_r($numArray);
    ?> -->


<?php 
$a = 100;
echo $GLOBALS["a"];
?>
<?php 
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];

echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
//echo str_replace("id=","",$_SERVER['QUERY_STRING']);
if (!empty($_REQUEST)) {
    echo $_REQUEST["id"];
}
?>

<?php 
//----while  while 循环将重复执行代码块，直到指定的条件不成立。
$a = 0;
while ($a <= 10) {
    echo $a;
    $a++;
}
?>

<?php 
//-----语句会至少执行一次代码，然后检查条件，只要条件成立，就会重复进行循环。
$a = 0;
do {
    echo "glb";
    $a++;
} while ($a <= 10);
?>

<?php 
//--- 循环执行代码块指定的次数
for ($i = 0; $i <= 100; $i++) { 
    # code...
    echo '<br>';
    echo $i;
}
?>

----<?php 
    for ($i = 0; $i <= 100; $i++) { 
    # code...
        echo '<br>';
        echo $i;
    }
    $array = array("1", "4", "7");
    for ($i = 0; $i < count($array); $i++) { 
    # code...
        echo '<br>';
        echo $array[$i];
    };
    foreach ($array as $value) {
        echo '<br>';
        echo $value;
    }
    $x = array("one", "two", "three");
    foreach ($x as $value) {
        echo '<br>';
        echo $value;
    }

    echo '这是第 " ' . __LINE__ . ' " 行';

    ?>

---
<?php 
echo '这是第 " ' . __LINE__ . ' " 行<br>';//__LINE__文件中的当前行号。
echo "文件位于" . __FILE__ . '<br>';//__FILE__文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。
echo "所在目录" . __DIR__ . '<br>';//__DIR__文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。它等价于 dirname(__FILE__)。
function aaa($var)
{
    echo __FUNCTION__ . '<br>';//返回方法名
}
aaa('1');

class myclass
{
    function aaa($var)
    {
        echo __class__ . '<br>';//返回方法名
    }
}
$t = new myclass();
$t->aaa('11');
?>


<?php 
//namespace 必须第一行
// namespace testname\test1\test2{
//     const CONNECT_OK = 1;
//     function strlen($a) {
//         return 10;
//     }
//     echo \strlen(CONNECT_OK);//调用全局变量
//     echo '<br>';
//     echo strlen(CONNECT_OK);//默认先找命名空间里面的  然后在调用全局
// }
?>
<?php 
echo $_SERVER["PHP_SELF"] . '<br>';
echo htmlspecialchars('<\'');
echo $_POST["fname"] . PHP_EOL;
echo $_POST["age"] . PHP_EOL;

    //trim 函数去除用户输入数据中不必要的字符 (如：空格，tab，换行)。
echo trim('    123     ') . '<br>';
    //stripslashes 函数去除用户输入数据中的反斜杠 (\)
echo stripslashes('23132\s\2    ') . '<br>';
    // htmlspecialchars转义字符
echo htmlspecialchars('<3132\s\2    ') . '<br>';

    //preg_match — 进行正则表达式匹配。
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
    $nameErr = "只允许字母和空格";
}


//     何时使用 method="get"？
// 在 HTML 表单中使用 method="get" 时，所有的变量名和值都会显示在 URL 中。

// 注释：所以在发送密码或其他敏感信息时，不应该使用这个方法！

// 然而，正因为变量显示在 URL 中，因此可以在收藏夹中收藏该页面。在某些情况下，这是很有用的。

// 注释：HTTP GET 方法不适合大型的变量值。它的值是不能超过 2000 个字符的。
?>

 <?php 
echo date("l") . "<br>";//小写L
echo date("z") . "<br>";
echo date("y") . "<br>";
echo date("Y/n/j/") . "<br>";

   //require 生成一个致命错误（E_COMPILE_ERROR），在错误发生后脚本会停止执行。
   //include 生成一个警告（E_WARNING），在错误发生后脚本会继续执行。
?>

<?php 
echo date("l") . "<br>";//小写L
echo date("z") . "<br>";
echo date("y") . "<br>";
echo date("Y/n/j/") . "<br>";

   //require 生成一个致命错误（E_COMPILE_ERROR），在错误发生后脚本会停止执行。
   //include 生成一个警告（E_WARNING），在错误发生后脚本会继续执行。

//    include 和 require 的区别

// require 一般放在 PHP 文件的最前面，程序在执行前就会先导入要引用的文件；
// include 一般放在程序的流程控制中，当程序执行时碰到才会引用，简化程序的执行流程。
// require 引入的文件有错误时，执行会中断，并返回一个致命错误；
// include 引入的文件有错误时，会继续执行，并返回一个警告。
?>
<?php 
    // setcookie() 函数用于设置 cookie。注释：setcookie() 函数必须位于 <html> 标签之前。
    // 注释：在发送 cookie 时，cookie 的值会自动进行 URL 编码，在取回时进行自动解码。（为防止 URL 编码，请使用 setrawcookie() 取而代之。）

    //setcookie(name, value, expire, path, domain);
?>
    <?php 
    echo filter_var("865506898", FILTER_VALIDATE_EMAIL);
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
    echo var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6));
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
        echo '是';
    } else {
        echo '否';
    }
    ?>
    <?php 
    $url = "http://www.baidu.com?userid=100";
    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo ("$url 是一个合法的 URL");
    } else {
        echo ("$url 不是一个合法的 URL");
    }
    declare (strict_types = 1);//开启严格模式
    ?>
    