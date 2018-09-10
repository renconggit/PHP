<?php 
//通过 PHP，有两种在浏览器输出文本的基础指令：echo 和 print。
echo '123456789';// 可以输出一个或多个字符串
print '123456';//只允许输出一个字符串，返回值总为 
//echo 输出的速度比 print 快， echo 没有返回值，print有返回值1。
?>
<?php 
//变量以 $ 符号开始，后面跟着变量的名称
//变量名必须以字母或者下划线字符开始
//变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）
//变量名不能包含空格
//变量名是区分大小写的（$y 和 $Y 是两个不同的变量）
$abc = "glb";
$ABC = "RC";
// PHP 变量作用域
// 变量的作用域是脚本中变量可被引用/使用的部分。

// PHP 有四种不同的变量作用域：
// local 在所有函数外部定义的变量，拥有全局作用域。除了函数外，全局变量可以被脚本中的任何部分访问，要在一个函数中访问一个全局变量，需要使用 global 关键字。
// 在 PHP 函数内部声明的变量是局部变量，仅能在函数内部访问：

// global
// global 关键字用于函数内访问全局变量。// 在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字：
$x = 5;
$y = 10;
function myTest()
{
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // 输出 15

// static
// 当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。 要做到这一点，请在您第一次声明变量时使用 static 关键字： 该变量仍然是函数的局部变量。
function ststicTest()
{
    static $x = 0;
    echo $x;
    $x++;
}
ststicTest();//0
ststicTest();//1
ststicTest();//2
// parameter
//参数是通过调用代码将值传递给函数的局部变量。参数是在参数列表中声明的，作为函数声明的一部分：
function parameterTest($x)
{
    echo $x;
}
parameterTest(5);
?>
<?php
// 1. 必须后接分号，否则编译通不过。
// 2. EOF 可以用任意其它字符代替，只需保证结束标识与开始标识一致。
// 3. 结束标识必须顶格独自占一行(即必须从行首开始，前后不能衔接任何空白和字符)。
// 4. 开始标识可以不带引号或带单双引号，不带引号与带双引号效果一致，解释内嵌的变量和转义符号，带单引号则不解释内嵌的变量和转义符号。
// 5. 当内容需要内嵌引号（单引号或双引号）时，不需要加转义符，本身对单双引号转义，此处相当与q和qq的用法。

echo <<<EOF
    <h1>我的第一个标题</h1>
    <p>我的第一个段落。</p>
EOF;

echo <<<aa
    <h1>我的第一个标题</h1>
    <p>我的第一个段落。</p>
aa;
// 结束需要独立一行且前后不能空格

?>
<?php
//String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）。
var_dump('321456'); //返回数组类型和值

$arr = array('glb', 'rc');
var_dump($arr);// array (size=2)
//   0 => string 'glb' (length=3)
//   1 => string 'rc' (length=2)

print_r($arr); //只返回值;
?>

<?php 
//PHP 常量
define("changliang", "php学习");
echo changliang;
//strlen常常用在循环和其他函数中，因为那时确定字符串何时结束是很重要的 。不支持数组
strlen('z123456');
//strpos() 函数 查找字符串中的某个字符的开始位置；

strpos("我是中国人", "中国");

// sort() - 对数组进行升序排列
// rsort() - 对数组进行降序排列
// asort() - 根据关联数组的值，对数组进行升序排列
// ksort() - 根据关联数组的键，对数组进行升序排列
// arsort() - 根据关联数组的值，对数组进行降序排列
// krsort() - 根据关联数组的键，对数组进行降序排列

//__construct 构造函数
//__destruct  析构函数
//extends  继承
// public（公有）：公有的类成员可以在任何地方被访问。
// protected（受保护）：受保护的类成员则可以被其自身以及其子类和父类访问。
// private（私有）：私有的类成员则只能被其定义所在的类访问。
//interface 接口 interface iTemplate{}
//implements  class Template implements iTemplate{}

//     抽象类 abstract 
// 任何一个类，如果它里面至少有一个方法是被声明为抽象的，那么这个类就必须被声明为抽象的。

// 定义为抽象的类不能被实例化。

// 被定义为抽象的方法只是声明了其调用方式（参数），不能定义其具体的功能实现。

// 继承一个抽象类的时候，子类必须定义父类中的所有抽象方法；另外，这些方法的访问控制必须和父类中一样（或者更为宽松）。例如某个抽象方法被声明为受保护的，那么子类中实现的方法就应该声明为受保护的或者公有的，而不能定义为私有的。
// 此外，子类方法可以包含父类抽象方法中不存在的可选参数。 

// Static 关键字
// 声明类属性或方法为 static(静态)，就可以不实例化类而直接访问。

// 静态属性不能通过一个类已实例化的对象来访问（但静态方法可以）。

// 由于静态方法不需要通过对象即可调用，所以伪变量 $this 在静态方法中不可用。

// 静态属性不可以由对象通过 -> 操作符来访问。  ::调用静态属性

// Final 关键字
// PHP 5 新增了一个 final 关键字。如果父类中的方法被声明为 final，则子类无法覆盖该方法。如果一个类被声明为 final，则不能被继承。

// 调用父类构造方法
// PHP 不会在子类的构造方法中自动的调用父类的构造方法。要执行父类的构造方法，需要在子类的构造方法中调用 parent::__construct() 。

// $_GET 
//$_POST

// PHP include 和 require 语句  比较严谨require 报错既不执行  include报错生成警告后继续执行

// r	只读。在文件的开头开始。 文件必须存在
// r+	读/写。在文件的开头开始。文件必须存在
// w	只写。打开并清空文件的内容；如果文件不存在，则创建新文件。
// w+	读/写。打开并清空文件的内容；如果文件不存在，则创建新文件。
// a	追加。打开并向文件末尾进行写操作，如果文件不存在，则创建新文件。
// a+	读/追加。通过向文件末尾写内容，来保持文件内容。
// x	只写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。
// x+	读/写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。

// PHP_EOL 为换行符。

?>
<?php 
setcookie("username", "rc", time() + 3600);//必须放在html 标签前面 并且时间必须注意time()
echo $_COOKIE["username"];//获取cookie
//注释：在发送 cookie 时，cookie 的值会自动进行 URL 编码，在取回时进行自动解码。（为防止 URL 编码，请使用 setrawcookie() 取而代之。）

print_r($_COOKIE); //查看所有cookie

// session_start();
// $_SESSION["sessions"]=100;
// echo "浏览量：". $_SESSION['views'];

// session_start() //函数必须位于 <html> 标签之前：

//isset() 判断是否设置某个值
?>
<?php
//session_start();

if (isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views'] + 1;
} else {
    $_SESSION['views'] = 1;
}
echo "浏览量：" . $_SESSION['views'];
//如果您希望删除某些 session 数据，可以使用 unset() 或 session_destroy() 函数。 注释：session_destroy() 将重置 session，您将失去所有已存储的 session 数据。
//报错的基本处理
die("文件不存在");
?>
<?php 
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "脚本结束";
    die();
}
set_error_handler("customError");//设置定义错误的方法
trigger_error('231');
?>
<?php 
$int = 'http://www.baidu.com';
if (!filter_var($int, FILTER_VALIDATE_URL)) {
    echo ("不是一个合法的url");
} else {
    echo ("是个合法的url");
}
// FILTER_VALIDATE_URL url验证

// filter_var() - 通过一个指定的过滤器来过滤单一的变量
// filter_var_array() - 通过相同的或不同的过滤器来过滤多个变量
// filter_input - 获取一个输入变量，并对它进行过滤
// filter_input_array - 获取多个输入变量，并通过相同的或不同的过滤器对它们进行过滤

if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
    echo "不是一个合法的 E-Mail";
} else {
    echo "是一个合法的 E-Mail";
}


    // json_encode 对变量进行 JSON 编码
    // json_decode 对 JSON 格式的字符串进行解码，转换为 PHP 变量
    // json_last_error 返回最后发生的错误



?>
<?php 
//创建数据库
$servername = "localhost:3306";
$username = "root";
$password = "";
$db = "mydb";
// 创建连接 面向对象
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} else {
    echo "连接成功";
    $sql = "create database mydb";
    if ($conn->query($sql) === true) {
        echo "创建数据库成功";

    } else {
        echo "创建数据库失败";
    }
}
$conn->close();  //关闭数据库链接

?>
<?php 
////创建数据库表
$servername = "localhost:3306";
$username = "root";
$password = "";
$db = "mydb";
// 创建连接 面向对象
$conn = new mysqli($servername, $username, $password, $db);
$querysql = "create table myguests (
            id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname nvarchar(50) not null,
            lastname nvarchar(50) not null,
            email nvarchar(50) not null,
            reg_date  TIMESTAMP  default CURRENT_TIMESTAMP 
        )";//时间类型   TIMESTAMP default CURRENT_TIMESTAMP
if ($conn->query($querysql) === true) {
    echo "创建表成功";
} else {
    echo "创建表失败" . $conn->error;;
}
$conn->close();
?>
<?php
//插入多行数据
$servername = "localhost:3306";
$username = "root";
$password = "";
$db = "mydb";
// 创建连接 面向对象
$conn = new mysqli($servername, $username, $password, $db);
$sql = " insert into myguests (firstname,lastname,email,phone) values ('guo','xing','305596979@qq.com','15989590793');";//时间类型   TIMESTAMP default CURRENT_TIMESTAMP
$sql .= " insert into myguests (firstname,lastname,email,phone) values ('g','lb','305596979@qq.com','15989590793');";
$sql .= " insert into myguests (firstname,lastname,email,phone) values ('r','lb','865506898@qq.com','18219172687')";
if ($conn->multi_query($sql) === true) {
    echo "插入数据成功";
} else {
    echo "插入数据失败" . $conn->error;;
}
$conn->close();
?>