<?php
class TB_PROJECT implements iMySQL {
private $_project_id;
private $_project_name;
private $_project_location;
private $_isdone;
private $_project_date;
private $_project_picture_intro;
private $_project_picture_details;
private $_detail;
private $_project_categories_id;
private $_list = array();
public function get() {
$sql = "SELECT * FROM TB_PROJECT;"; 
return $sql; }

public function toList($result)
{ if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$var = new TB_PROJECT();
$var->setPROJECT_ID($row['project_id']);
$var->setPROJECT_NAME($row['project_name']);
$var->setPROJECT_LOCATION($row['project_location']);
$var->setISDONE($row['isdone']);
$var->setPROJECT_DATE($row['project_date']);
$var->setPROJECT_PICTURE_INTRO($row['project_picture_intro']);
$var->setPROJECT_PICTURE_DETAILS($row['project_picture_details']);
$var->setDETAIL($row['detail']);
$var->setPROJECT_CATEGORIES_ID($row['project_categories_id']);
array_push($this->_list,$var);
}
}
return $this->_list;
}

public function insert()
{
$sql = "INSERT INTO 'TB_PROJECT'(project_id,project_name,project_location,isdone,project_date,project_picture_intro,project_picture_details,detail,project_categories_id) VALUES ($this->getPROJECT_ID,$this->getPROJECT_NAME,$this->getPROJECT_LOCATION,$this->getISDONE,$this->getPROJECT_DATE,$this->getPROJECT_PICTURE_INTRO,$this->getPROJECT_PICTURE_DETAILS,$this->getDETAIL,$this->getPROJECT_CATEGORIES_ID);";
return $sql;
}

public function update(){}
public function remove(){}
public function getPROJECT_ID(){

return $this->_project_id;
}
public function getPROJECT_NAME(){

return $this->_project_name;
}
public function getPROJECT_LOCATION(){

return $this->_project_location;
}
public function getISDONE(){

return $this->_isdone;
}
public function getPROJECT_DATE(){

return $this->_project_date;
}
public function getPROJECT_PICTURE_INTRO(){

return $this->_project_picture_intro;
}
public function getPROJECT_PICTURE_DETAILS(){

return $this->_project_picture_details;
}
public function getDETAIL(){

return $this->_detail;
}
public function getPROJECT_CATEGORIES_ID(){

return $this->_project_categories_id;
}
public function setPROJECT_ID($var){

$this->_project_id=$var;
}
public function setPROJECT_NAME($var){

$this->_project_name=$var;
}
public function setPROJECT_LOCATION($var){

$this->_project_location=$var;
}
public function setISDONE($var){

$this->_isdone=$var;
}
public function setPROJECT_DATE($var){

$this->_project_date=$var;
}
public function setPROJECT_PICTURE_INTRO($var){

$this->_project_picture_intro=$var;
}
public function setPROJECT_PICTURE_DETAILS($var){

$this->_project_picture_details=$var;
}
public function setDETAIL($var){

$this->_detail=$var;
}
public function setPROJECT_CATEGORIES_ID($var){

$this->_project_categories_id=$var;
}}