<?php

/**
 *
 * chapter2: echo 和 print 区别:
 * echo - 可以输出一个或多个字符串
 * print - 只允许输出一个字符串，返回值总为 1
 */

$txt1="学习 PHP";
$txt2="RUNOOB.COM";
$cars=array("Volvo","BMW","Toyota");

echo $txt1, "哒哒哒哒哒哒";
echo "<br>";
echo "在 $txt2 学习 PHP ";
echo "<br>";
echo "我车的品牌是 {$cars[0]}";


$txt1="学习 PHP";
$txt2="RUNOOB.COM";
$cars=array("Volvo","BMW","Toyota");

print $txt1;
print "<br>";
print "在 $txt2 学习 PHP ";
print "<br>";
print "我车的品牌是 {$cars[0]}";
