<?php
/**
 * 创建数据库
 */
$servername = "localhost";
$username = "root";
$password = "root";

try {
$conn = new PDO("mysql:host=$servername", $username, $password);
// 设置PDO 错误模式为异常
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE myDBPDO";
// 使用exec(), 因为没有结果返回
$conn->exec($sql);
echo  "创建数据库成功<br>";
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
