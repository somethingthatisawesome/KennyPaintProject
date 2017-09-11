<?php
class SanPhamPage implements iMySQL
{
	private $_id;
	private $_banner;
	private $_bannerImage;
	private $_list = array();
	public function set($bannertext,$bannerimage) {
       $this->setBanner($bannertext);
	   $this->setBannerImageUrl($bannerimage);
   }
	public function get()
	{
		$sql = "SELECT * FROM sanphampage";
		return $sql;
	}
	public function toList($result)
	{
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$sanphampage = new SanPhamPage();
				$sanphampage->setID($row["ID"]);
				$sanphampage->setBanner($row["BannerText"]);
				$sanphampage->setBannerImageUrl($row["BannerImageUrl"]);
				array_push($this->_list,$sanphampage);
			}
			
		}
		return $this->_list;
	}
	public function insert()
	{
		$banner  =$this->getBanner();
		$bannerUrl =$this->getBannerImageUrl();
		$sql =  "INSERT INTO `sanphampage`(`BannerText`, `BannerImageUrl`) VALUES ('$banner','$bannerUrl');";
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
	public function getBanner()
	{
		return $this->_banner;
	}
	public function getBannerImageUrl()
	{
		return $this->_bannerImage;
	}
	public function getID()
	{
		return $this->_ID;
	}
	public function setID($ID)
	{
		$this->_ID = $ID;
	}
	public function setBanner($banner)
	{
		$this->_banner = $banner;
	}
	public function setBannerImageUrl($bannerImageUrl)
	{
		$this->_bannerImage = $bannerImageUrl;
	}
}
?>