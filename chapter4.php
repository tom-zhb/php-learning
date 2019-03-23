<?php
/**
 * chapter4: 数据类型
 * String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）。
 */

//var_dump() 函数返回变量的数据类型和值：
$x = 5985;
var_dump($x);
echo "\r\n";

$x = -345; // 负数
var_dump($x);
echo "\r\n";

$x = 0x8C; // 十六进制数
var_dump($x);
echo "\r\n";

$x = 047; // 八进制数
var_dump($x);
echo "\r\n";

$x="Hello world!";
$x=null;
var_dump($x);

echo "\r\n";

$cars=array("Volvo","BMW","Toyota");
var_dump($cars);


// 对象
class Car
{
    var $color;
    function __construct($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}
?>