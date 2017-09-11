<?php
class TB_PRODUCTS implements iMySQL {
private $_product_id;
private $_product_code;
private $_product_name;
private $_product_picture;
private $_product_createddate;
private $_product_volume;
private $_product_coverage;
private $_product_category_id;
private $_product_colorid_id;
private $_product_certificate;
private $_product_instruction;
private $_product_characteristics;
private $_list = array();
public function get() {
$sql = "SELECT * FROM TB_PRODUCTS;"; 
return $sql; }

public function toList($result)
{ if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$var = new TB_PRODUCTS();
$var->setPRODUCT_ID($row['product_id']);
$var->setPRODUCT_CODE($row['product_code']);
$var->setPRODUCT_NAME($row['product_name']);
$var->setPRODUCT_PICTURE($row['product_picture']);
$var->setPRODUCT_CREATEDDATE($row['product_createddate']);
$var->setPRODUCT_VOLUME($row['product_volume']);
$var->setPRODUCT_COVERAGE($row['product_coverage']);
$var->setPRODUCT_CATEGORY_ID($row['product_category_id']);
$var->setPRODUCT_COLORID_ID($row['product_colorid_id']);
$var->setPRODUCT_CERTIFICATE($row['product_certificate']);
$var->setPRODUCT_INSTRUCTION($row['product_instruction']);
$var->setPRODUCT_CHARACTERISTICS($row['product_characteristics']);
array_push($this->_list,$var);
}
}
return $this->_list;
}

public function insert()
{
$sql = "INSERT INTO 'TB_PRODUCTS'(product_id,product_code,product_name,product_picture,product_createddate,product_volume,product_coverage,product_category_id,product_colorid_id,product_certificate,product_instruction,product_characteristics) VALUES ($this->getPRODUCT_ID,$this->getPRODUCT_CODE,$this->getPRODUCT_NAME,$this->getPRODUCT_PICTURE,$this->getPRODUCT_CREATEDDATE,$this->getPRODUCT_VOLUME,$this->getPRODUCT_COVERAGE,$this->getPRODUCT_CATEGORY_ID,$this->getPRODUCT_COLORID_ID,$this->getPRODUCT_CERTIFICATE,$this->getPRODUCT_INSTRUCTION,$this->getPRODUCT_CHARACTERISTICS);";
return $sql;
}

public function update(){}
public function remove(){}
public function getPRODUCT_ID(){

return $this->_product_id;
}
public function getPRODUCT_CODE(){

return $this->_product_code;
}
public function getPRODUCT_NAME(){

return $this->_product_name;
}
public function getPRODUCT_PICTURE(){

return $this->_product_picture;
}
public function getPRODUCT_CREATEDDATE(){

return $this->_product_createddate;
}
public function getPRODUCT_VOLUME(){

return $this->_product_volume;
}
public function getPRODUCT_COVERAGE(){

return $this->_product_coverage;
}
public function getPRODUCT_CATEGORY_ID(){

return $this->_product_category_id;
}
public function getPRODUCT_COLORID_ID(){

return $this->_product_colorid_id;
}
public function getPRODUCT_CERTIFICATE(){

return $this->_product_certificate;
}
public function getPRODUCT_INSTRUCTION(){

return $this->_product_instruction;
}
public function getPRODUCT_CHARACTERISTICS(){

return $this->_product_characteristics;
}
public function setPRODUCT_ID($var){

$this->_product_id=$var;
}
public function setPRODUCT_CODE($var){

$this->_product_code=$var;
}
public function setPRODUCT_NAME($var){

$this->_product_name=$var;
}
public function setPRODUCT_PICTURE($var){

$this->_product_picture=$var;
}
public function setPRODUCT_CREATEDDATE($var){

$this->_product_createddate=$var;
}
public function setPRODUCT_VOLUME($var){

$this->_product_volume=$var;
}
public function setPRODUCT_COVERAGE($var){

$this->_product_coverage=$var;
}
public function setPRODUCT_CATEGORY_ID($var){

$this->_product_category_id=$var;
}
public function setPRODUCT_COLORID_ID($var){

$this->_product_colorid_id=$var;
}
public function setPRODUCT_CERTIFICATE($var){

$this->_product_certificate=$var;
}
public function setPRODUCT_INSTRUCTION($var){

$this->_product_instruction=$var;
}
public function setPRODUCT_CHARACTERISTICS($var){

$this->_product_characteristics=$var;
}
}