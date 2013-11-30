<?php
require_once dirname(__FILE__)."/database.class.php";
class manufacturer extends Database{
	function _add($name){
		$result = $this->connection->prepare("INSERT INTO `manufacturer` (`name`) VALUES (?);");
		$result -> execute(array($name));
		
		return $result;
	}
	function _getAll(){
		$result = $this->connection->prepare("SELECT * FROM `manufacturer`");
		$result -> execute();
		$result =$result->fetchAll();
		return $result;
	}
}
$manufacturer = new manufacturer();

?>