<?php

/**
 * 什么是 PHP SimpleXML？
 * SimpleXML 是 PHP 5 中的新特性。
 *
 * SimpleXML 扩展提供了一种获取 XML 元素的名称和文本的简单方式。
 *
 * 与 DOM 或 Expat 解析器相比，SimpleXML 仅仅用几行代码就可以从 XML 元素中读取文本数据。
 *
 * SimpleXML 可把 XML 文档（或 XML 字符串）转换为对象，比如：
 *   1: 元素被转换为 SimpleXMLElement 对象的单一属性。当同一级别上存在多个元素时，它们会被置于数组中。
 *   2: 属性通过使用关联数组进行访问，其中的索引对应属性名称。
 *   3: 元素内部的文本被转换为字符串。如果一个元素拥有多个文本节点，则按照它们被找到的顺序进行排列。
 *
 * 当执行类似下列的基础任务时，SimpleXML 使用起来非常快捷：
 *   1:读取/提取 XML 文件/字符串的数据
 *   2:编辑文本节点或属性
 * 然而，在处理高级 XML 时，比如命名空间，最好使用 Expat 解析器或 XML DOM。
 */
// 1: 输出 $xml 变量（是 SimpleXMLElement 对象）的键和元素：
$xml = simplexml_load_file("test.xml");
print_r($xml);

echo "\n=============================================\n";

// 2: 输出 XML 文件中每个元素的数据：
$xml = simplexml_load_file("test.xml");
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body;

echo "\n=============================================\n";

//3: 输出每个子节点的元素名称和数据：
$xml = simplexml_load_file("test.xml");
echo $xml->getName() . "<br>";

foreach ($xml->children() as $child) {
    echo $child->getName() . ": " . $child . "<br>";
}
?>