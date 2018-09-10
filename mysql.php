<?php
//--------------------------------创建数据库
// $servername = "localhost:3306";
// $username = "root";
// $password = "";
// $db = "mydb";
// // 创建连接 面向对象
// $conn = new mysqli($servername, $username, $password);
 
// // 检测连接
// if ($conn->connect_error) {
//     die("连接失败: " . $conn->connect_error);
// } else {
//     echo "连接成功";
//     $sql = "create database mydb";
//     if ($conn->query($sql) === true) {
//         echo "创建数据库成功";

//     } else {
//         echo "创建数据库失败";
//     }
// }
// $conn->close();  //关闭数据库链接
//--------------------------------- 创建表
// $servername = "localhost:3306";
// $username = "root";
// $password = "";
// $db = "mydb";
// // 创建连接 面向对象
// $conn = new mysqli($servername, $username, $password, $db);
// $querysql = "create table myguests (
//             id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//             firstname nvarchar(50) not null,
//             lastname nvarchar(50) not null,
//             email nvarchar(50) not null,
//             reg_date  TIMESTAMP  default CURRENT_TIMESTAMP 
//         )";//时间类型   TIMESTAMP default CURRENT_TIMESTAMP
// if ($conn->query($querysql) === true) {
//     echo "创建表成功";
// } else {
//     echo "创建表失败" . $conn->error;;
// }
// $conn->close();
//--------------------------------数据多行插入
// $servername = "localhost:3306";
// $username = "root";
// $password = "";
// $db = "mydb";
// // 创建连接 面向对象
// $conn = new mysqli($servername, $username, $password, $db);
// $sql = " insert into myguests (firstname,lastname,email,phone) values ('guo','xing','305596979@qq.com','15989590793');";//时间类型   TIMESTAMP default CURRENT_TIMESTAMP
// $sql .= " insert into myguests (firstname,lastname,email,phone) values ('g','lb','305596979@qq.com','15989590793');";
// $sql .= " insert into myguests (firstname,lastname,email,phone) values ('r','lb','865506898@qq.com','18219172687')";
// if ($conn->multi_query($sql) === true) {
//     echo "插入数据成功";
// } else {
//     echo "插入数据失败" . $conn->error;;
// }
// $conn->close();

//----------------------PDO链接数据库
// $local = "localhost:3306";
// $user = "root";
// $pwd = "";
// try {
//     $conn = new PDO("mysql:host=$local", $user, $pwd);//链接对象
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//     //SQL语句
//     $sql = "create database mypdodb";
//     $conn->exec($sql);
//     echo '创建成功';

// } catch (PDOException $msg) {
//     echo $sql . "<br>" . $msg->getMessage();
// }


//-----------------------------------pdo创建表
// $servername = "localhost";
// $username = "root";
// $password = "123456";
// $dbname = "mypdodb";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // 设置 PDO 错误模式，用于抛出异常
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // 使用 sql 创建数据表
//     $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//     )";

//     // 使用 exec() ，没有结果返回 
//     $conn->exec($sql);
//     echo "数据表 MyGuests 创建成功";
// } catch (PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;
//----------------------------多行事物插入数据
// $servername = "localhost";
// $username = "root";
// $password = "123456";
// $dbname = "mypdodb";
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// //设置错误信息
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $conn->beginTransaction();
//     $conn->exec("insert into myguests(firstname, lastname, email, phone) values('guo', 'xing', '305596979@qq.com', '15989590793')");
//     $conn->exec("insert into myguests(firstname, lastname, email, phone) values('ren', 'cong', '865506898@qq.com', '18219172687')");
//     $conn->exec("insert into myguests(firstname, lastname, email, phone) values('guo', 'xing', '305596979@qq.com', '15989590793')");
//     //提交事务
//     $conn->commit();
//     echo "批量插入成功";
// } catch (PDOException $err) {
//     echo $err->getMessage();
// }

//-------------------------------------使用预处理语句
// $servername = "localhost";
// $username = "root";
// $password = "123456";
// $dbname = "mydb";

// //创建连接
// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("数据库连接失败");
// } else {
//     echo "数据库连接成功" . PHP_EOL;
//     $sql = "insert into myguests (firstname,lastname,email,age) values (?,?,?,?)";
//     //初始化 statement 对象
//     $stmt = mysqli_stmt_init($conn);
//      //预处理语句
//     echo $s = mysqli_stmt_prepare($stmt, $sql);
//     if ($s) {
//         echo "预处理" . PHP_EOL;
//         mysqli_stmt_bind_param($stmt, 'sssi', $firstname, $lastname, $email, $age);
//         //i - integer（整型）
//         //d - double（双精度浮点型）
//         //s - string（字符串）
//         //b - BLOB（binary large object : 二进制大对象）
//         // 设置参数并执行
//         $firstname = 'John';
//         $lastname = 'Doe';
//         $email = 'john@example.com';
//         $age = 24;
//         mysqli_stmt_execute($stmt);

//         $firstname = 'Mary';
//         $lastname = 'Moe';
//         $email = 'mary@example.com';
//         $age = 28;
//         mysqli_stmt_execute($stmt);

//         $firstname = 'Julie';
//         $lastname = 'Dooley';
//         $email = 'julie@example.com';
//         $age = 30;
//         mysqli_stmt_execute($stmt);

//         echo "新记录插入成功";

//         $stmt->close();
//         $conn->close();
//     } else {
//         echo '出现错误';
//     }
// }
//---------------预处理练习
// $servername = "localhost";
// $username = "root";
// $password = "123456";
// $dbname = "mydb";
// $conn = new mysqli($servername, $username, $password, $dbname);
// echo '数据库连接成功';
// $sql = "insert into myguests (firstname,lastname,email,phone,age) values (?,?,?,?,?)";
// $stmt = mysqli_stmt_init($conn);
// if (mysqli_stmt_prepare($stmt, $sql)) {
//     mysqli_stmt_bind_param($stmt, 'ssssi', $firstname, $lastname, $email, $phone, $age);

//     // 设置参数并执行
//     $firstname = 'John';
//     $lastname = 'Doe';
//     $email = 'john@example.com';
//     $phone = '18219172687';
//     $age = 28;
//     mysqli_stmt_execute($stmt);

//     $firstname = 'Mary';
//     $lastname = 'Moe';
//     $email = 'mary@example.com';
//     $phone = '18219172687';
//     $age = 28;
//     mysqli_stmt_execute($stmt);

//     $firstname = 'Julie';
//     $lastname = 'Dooley';
//     $email = 'julie@example.com';
//     $phone = '18219172687';
//     $age = 28;
//     mysqli_stmt_execute($stmt);
//     echo '数据插入成功';
// } else {
//     echo '绑定出错';
// }


//-----------------------------MySQLi 预处理语句
// $servername = "localhost";
// $username = "root";
// $password = "123456";
// $dbname = "mydb";

// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("连接数据库失败");
// }
// $stmt = $conn->prepare("insert into myguests (firstname,lastname,email,phone,age) values (?,?,?,?,?)");
// $stmt->bind_param("ssssi", $firstname, $lastname, $email, $phone, $age);
// // 设置参数并执行
// $firstname = "John";
// $lastname = "Doe";
// $email = "john@example.com";
// $phone = "135888945321";
// $age = 60;
// $stmt->execute();

// echo '执行成功';
// $stmt->close();
// $conn->close();


//------------------------------PDO 中的预处理语句
// $servername = "localhost";
// $username = "root";
// $password = "123456";
// $dbname = "mypdodb";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $conn->prepare("insert into myguests (firstname,lastname,email,phone,age) values (:firstname,:lastname,:email,:phone,:age)");
//     $stmt->bindParam(":firstname", $firstname);
//     $stmt->bindParam(":lastname", $lastname);
//     $stmt->bindParam(":email", $email);
//     $stmt->bindParam(":phone", $phone);
//     $stmt->bindParam(":age", $age);


//     // 插入行
//     $firstname = "John";
//     $lastname = "Doe";
//     $email = "john@example.com";
//     $phone = "15512345678";
//     $age = 28;
//     $stmt->execute();
//     echo '插入数据成功';

// } catch (PDOException $e) {
//     echo 'error:' . $e->getMessage();
// }


//------------------------------ 使用 MySQLi读取数据
// $servername = "localhost";
// $username = "root";
// $password = "123456";
// $dbname = "mydb";


// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("数据库连接失败");
// }
// $sql = "select * from myguests";
// $res = $conn->query($sql);
// if ($res->num_rows > 0) {
//     while ($rows = $res->fetch_assoc()) {
//         echo 'id:' . $rows["id"] . "_name " . $rows["firstname"] . " " . $rows["lastname"] . "<br>";
//     }
// } else {
//     echo '未查询到数据';
// }

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator
{
    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current()
    {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
    }

    function beginChildren()
    {
        echo "<tr>";
    }

    function endChildren()
    {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "mypdodb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
    $stmt->execute();
 
    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
        echo $v;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

?>
