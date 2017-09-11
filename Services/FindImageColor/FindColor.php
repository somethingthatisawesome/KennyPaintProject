<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
$db = new KennyPaintDatabase();
$color = new Color();
$colors = $db->get($color);
$str = array();
foreach($colors as $color)
{
	$hex = $color->getHex();
	array_push($str,"#".$hex);;
}
$im = new Imagick('1.png');
$im->scaleImage(300, 0);
$src= $im;
$image = new ColorsOfImage(json_encode($str),$src, 15,12 );
$colors=$image->getColorMap();
foreach($colors as  $val)
{
	echo "<div style='background-color:".$val.";width:30px;height:30px;'></div>";
}
?>