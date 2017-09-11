<?php
class TB_CATEGORY implements iMySQL {
private $_category_id;
private $_category_name;
private $_category_description;
private $_list = array();
public function get() {
$sql = "SELECT * FROM TB_CATEGORY;"; 
return $sql; }

public function toList($result)
{ if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$var = new TB_CATEGORY();
$var->setCATEGORY_ID($row['category_id']);
$var->setCATEGORY_NAME($row['category_name']);
$var->setCATEGORY_DESCRIPTION($row['category_description']);
array_push($this->_list,$var);
}
}
return $this->_list;
}

public function insert()
{
$sql = "INSERT INTO 'TB_CATEGORY'(category_id,category_name,category_description) VALUES ($this->getCATEGORY_ID,$this->getCATEGORY_NAME,$this->getCATEGORY_DESCRIPTION);";
return $sql;
}

public function update(){}
public function remove(){}
public function getCATEGORY_ID(){

return $this->_category_id;
}
public function getCATEGORY_NAME(){

return $this->_category_name;
}
public function getCATEGORY_DESCRIPTION(){

return $this->_category_description;
}
public function setCATEGORY_ID($var){

$this->_category_id=$var;
}
public function setCATEGORY_NAME($var){

$this->_category_name=$var;
}
public function setCATEGORY_DESCRIPTION($var){

$this->_category_description=$var;
}}