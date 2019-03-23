<?php
/**
 * 创建数据库
 */
$server_name = "localhost";
$user_name = "root";
$password = "root";

// 创建连接
$conn = mysqli_connect($server_name, $user_name, $password);
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}

// 创建数据库
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
