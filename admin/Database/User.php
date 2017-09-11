<?php
class User implements iMySQL {
private $_username;
private $_email;
private $_password;
private $_create_time;
private $_list = array();
public function get() {
$sql = "SELECT * FROM User;"; 
return $sql; }

public function toList($result)
{ if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$var = new User();
$var->setUSERNAME($row['username']);
$var->setEMAIL($row['email']);
$var->setPASSWORD($row['password']);
$var->setCREATE_TIME($row['create_time']);
array_push($this->_list,$var);
}
}
return $this->_list;
}

public function insert()
{
$sql = "INSERT INTO `User`(username,email,password,create_time) VALUES ($this->getUSERNAME,$this->getEMAIL,$this->getPASSWORD,$this->getCREATE_TIME);";
return $sql;
}

public function update(){};
public function remove(){};
public function getUSERNAME(){

return $this->_username;
}
public function getEMAIL(){

return $this->_email;
}
public function getPASSWORD(){

return $this->_password;
}
public function getCREATE_TIME(){

return $this->_create_time;
}
public function setUSERNAME($var){

$this->_username=$var;
}
public function setEMAIL($var){

$this->_email=$var;
}
public function setPASSWORD($var){

$this->_password=$var;
}
public function setCREATE_TIME($var){

$this->_create_time=$var;
}
?>