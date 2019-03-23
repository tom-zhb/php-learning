<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "myDBPDO";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置PDO错误模式，用于抛出异常
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 使用sql创建数据库
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    // 使用exec(), 没有结果返回
    $conn -> exec($sql);
    echo "数据表MyGuests 创建成功";
}
catch (PDOException $e) {
    echo  $sql . "<br>" . $e ->getMessage();
}

$conn = null;
?>