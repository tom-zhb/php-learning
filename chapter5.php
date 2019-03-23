<?php
/**
 *  bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )
 * 该函数有三个参数:
 * name：必选参数，常量名称，即标志符。
 * value：必选参数，常量的值。
 * case_insensitive ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。
 */
// 区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com");
echo GREETING;    // 输出 "欢迎访问 Runoob.com"
echo "\r\n";

//echo greeting;   // 输出 "greeting"

echo "\r\n";
function myTest() {
    echo GREETING;
}
myTest();    // 输出 "欢迎访问 Runoob.com"

?>