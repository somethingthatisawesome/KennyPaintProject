<?php
spl_autoload_register(function ($class_name) {
    include_once $class_name . '.php';
});

$db = new KennyPaintDatabase();

$sanpham = new Product();
$sanphamList = $db->get($sanpham);
foreach ($sanphamList as $value)
{
	echo $value->getName();
	echo $value->getDescription();
}