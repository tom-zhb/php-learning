<?php
$server_name = "localhost";
$user_name = "root";
$password = "root";

// 创建连接
$conn = mysqli_connect($server_name, $user_name, $password);

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "连接成功";
?>