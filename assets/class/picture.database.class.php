<?php
require_once dirname(__FILE__)."/database.class.php";
class picture extends Database{
	function _add($path){
		$result = $this->connection->prepare("INSERT INTO `picture` (`path`) VALUES (?);");
		$result -> execute(array($path));
		
		return $this->connection->lastInsertId(); 
	}
	
}
$picture = new picture();
?>