<?php
$server_name = "localhost";
$username = "root";
$password = "root";

// 创建连接
$conn = new mysqli($server_name, $username, $password);

if ($conn -> connect_error) {
    die("连接失败: " . $conn -> connect_error);
}
echo "连接成功"


/*注意在以上面向对象的实例中 $connect_error 是在 PHP 5.2.9 和 5.3.0 中添加的。如果你需要兼容更早版本 请使用以下代码替换:
if (mysqli_connect_error()) {
    die("数据库连接失败: " . mysqli_connect_error());
}
*/
?>