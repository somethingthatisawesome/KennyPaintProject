<?php
class TB_PROJECT_CATEGORIES implements iMySQL {
private $_project_categories_id;
private $_project_categories_name;
private $_project_categories_detail;
private $_list = array();
public function get() {
$sql = "SELECT * FROM TB_PROJECT_CATEGORIES;"; 
return $sql; }

public function toList($result)
{ if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$var = new TB_PROJECT_CATEGORIES();
$var->setPROJECT_CATEGORIES_ID($row['project_categories_id']);
$var->setPROJECT_CATEGORIES_NAME($row['project_categories_name']);
$var->setPROJECT_CATEGORIES_DETAIL($row['project_categories_detail']);
array_push($this->_list,$var);
}
}
return $this->_list;
}

public function insert()
{
$sql = "INSERT INTO 'TB_PROJECT_CATEGORIES'(project_categories_id,project_categories_name,project_categories_detail) VALUES ($this->getPROJECT_CATEGORIES_ID,$this->getPROJECT_CATEGORIES_NAME,$this->getPROJECT_CATEGORIES_DETAIL);";
return $sql;
}

public function update(){}
public function remove(){}
public function getPROJECT_CATEGORIES_ID(){

return $this->_project_categories_id;
}
public function getPROJECT_CATEGORIES_NAME(){

return $this->_project_categories_name;
}
public function getPROJECT_CATEGORIES_DETAIL(){

return $this->_project_categories_detail;
}
public function setPROJECT_CATEGORIES_ID($var){

$this->_project_categories_id=$var;
}
public function setPROJECT_CATEGORIES_NAME($var){

$this->_project_categories_name=$var;
}
public function setPROJECT_CATEGORIES_DETAIL($var){

$this->_project_categories_detail=$var;
}}