<?php

/**
 * XML DOM 把上面的 XML 视为一个树形结构：
 * Level 1: XML 文档
 * Level 2: 根元素： <from>
 * Level 3: 文本元素： "Jani"
 */

$xmlDoc = new DOMDocument();
$xmlDoc->load("test.xml");

print $xmlDoc->saveXML();

// 遍历xml
$xmlDoc = new DOMDocument();
$xmlDoc->load("test.xml");

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
}

/*
 * 在上面的实例中，您看到了每个元素之间存在空的文本节点。
 * 当 XML 生成时，它通常会在节点之间包含空白。XML DOM 解析器把它们当作普通的元素，如果您不注意它们，有时会产生问题。
*/
?>