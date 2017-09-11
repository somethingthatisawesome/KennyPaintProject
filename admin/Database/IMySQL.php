<?php
interface iMySQL
{
	public function get();
    public function insert();
	public function update();
    public function remove();
	public function toList($result);
}
?>