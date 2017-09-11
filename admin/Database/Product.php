<?php
class Product implements iMySQL
{
	private $_id;
	private $_name;
	private $_description;
	private $_Category_ID;
	private $_Image;
	private $_list = array();
	public function set($name,$description,$category_id,$image) {
   }
	public function get()
	{
		$sql = "SELECT * FROM Product;";
		return $sql;
	}
	public function toList($result)
	{
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$product = new Product();
				$product->setID($row["ID"]);
				$product->setName($row["Name"]);
				$product->setDescription($row["Description"]);
				$product->setImage($row["Image"]);
				$product->setCategoryID($row["Category_ID"]);
				array_push($this->_list,$product);
			}
			
		}
		return $this->_list;
	}
	public function insert()
	{
		$sql =  "INSERT INTO `Product`(Name,Description,Image,Category_ID) VALUES ('"+$this->getName+"','"+$this->getDescription+"'
		,'"+$this->getImage+"','"+$this->getCategoryID+"');";
		return $sql;
	}
	public function update()
	{
		$sql = "";
		return $sql;
	}
    public function remove()
	{
		
	}
	public function getID()
	{
		return $this->_id;
	}
	public function getName()
	{
		return $this->_name;
	}
	public function getImage()
	{
		return $this->_Image;
	}
	public function getCategoryID()
	{
		return $this->_Category_ID;
	}
	public function getDescription()
	{
		return $this->_description;
	}
	public function setID($var)
	{
		$this->_id = $var;
	}
	public function setName($var)
	{
		$this->_name = $var;
	}
	public function setImage($var)
	{
		$this->_Image = $var;
	}
	public function setCategoryID($var)
	{
		$this->_Category_ID = $var;
	}
	public function setDescription($var)
	{
		$this->_description = $var;
	}

}
?>