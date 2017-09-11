<?php
class Color implements iMySQL
{
	private $_id;
	private $_group;
	private $_hex;
	private $_list = array();
	public function set($Name,$Hex) {
       $this->setName($Name);
	   $this->setHex($Hex);
   }
	public function get()
	{
		$sql = "SELECT * FROM color";
		return $sql;
	}
	public function toList($result)
	{
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$color = new Color();
				$color->setID($row["ID"]);
				$color->setHex($row["HEX"]);
				$color->setGroup($row["ColorGroup"]);
				array_push($this->_list,$color);
			}
		}
		return $this->_list;
	}
	public function insert()
	{
		$sql =  "INSERT INTO `Color`(ID,HEX,ColorGroup) VALUES ('".$this->getID()."','".$this->getHex()."','".$this->getGroup()."');";
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
	public function getGroup()
	{
		return $this->_group;
	}
	public function getHex()
	{
		return $this->_hex;
	}
	public function getID()
	{
		return $this->_id;
	}
	public function setID($value)
	{
		$this->_id = $value;
	}
	public function setHex($value)
	{
		$this->_hex = $value;
	}
	public function setGroup($value)
	{
		$this->_group = $value;
	}
}
?>