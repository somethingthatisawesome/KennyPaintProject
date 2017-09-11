<?php
class KennyPaintDatabase
{
  private $_userName = "root";
  private $_password = "";
  private $_dbName="kennypaint";
  private $_serverName="localhost";
  private $_conn;
  public function __construct () {
	$this->connect();
  }
  function __destruct() {
      $this->disconnect();
   }
   //Kết nối vào cơ sở dữ liệu
   private function connect()
  {
	  // Create connection
		
		$conn = new mysqli($this->_serverName, $this->_userName, $this->_password, $this->_dbName);
		$conn->set_charset("utf8");
		// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	$this->_conn = $conn;
	return $conn;
  }
  //Hủy kết nối
  private function disconnect()
  {
	  $this->_conn->close();
  }
  public function get($obj)
  {
	  $result = $this->_conn->query($obj->get());
	  return $obj->toList($result);
  }
  public function insert($obj)
  {
	  return $this->_conn->query($obj->insert());
  }
   public function remove($obj)
  {
	 return $this->_conn->query($obj->remove());
  }
  public function update($obj)
  {
	 return $this->_conn->query($obj->update());
  }
  
}

?>