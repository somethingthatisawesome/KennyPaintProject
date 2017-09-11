<?php
include_once("/../Database/KennyPaintDatabase.php");
include_once("/../Database/IMySQL.php");
include_once("/../Database/Color.php");
$id = $_GET['id'];
$group = $_GET['group'];
$hex = $_GET['hex'];
$db = new KennyPaintDatabase();
$color = new Color();
$color->setID($id);
$color->setHex($hex);
$color->setGroup($group);
$db->insert($color);
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;