<?php
require_once dirname(__FILE__)."/database.class.php";
class category extends Database{
	function _add($name){
		$result = $this->connection->prepare("INSERT INTO `category` (`name`) VALUES (?);");
		$result -> execute(array($name));
		
		return $result;
	}
	function _getAll(){
		$result = $this->connection->prepare("SELECT * FROM `category`");
		$result -> execute();
		$result =$result->fetchAll();
		return $result;
	}
}
$category = new category();

?>