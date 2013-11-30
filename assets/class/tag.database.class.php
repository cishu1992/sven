<?php
require_once dirname(__FILE__)."/database.class.php";
class tag extends Database{
	function _add($name){
		$result = $this->connection->prepare("INSERT INTO `tag` (`name`) VALUES (?);");
		$result -> execute(array($name));
		
		return $result;
	}
	function _getAll(){
		$result = $this->connection->prepare("SELECT * FROM `tag`");
		$result -> execute();
		$result =$result->fetchAll();
		return $result;
	}
}
$tag = new tag();

?>