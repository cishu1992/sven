<?php
require_once dirname(__FILE__)."/database.class.php";
class product_related extends Database{
	function _assign($product_id,$related,$ord){
		$result = $this->connection->prepare("INSERT INTO `product_related` (`product_id`,`related`,`ord`) VALUES (?,?,?);");
		$result -> execute(array($product_id,$related,$ord));
		
		return $result;
	}
	function _unassign($product_id,$related,$ord){
		$result = $this->connection->prepare("DELETE FROM `product_related` WHERE `product_id`=? AND `related`=? AND `ord`=? ;");
		$result -> execute(array($product_id,$related,$ord));
		return $result;
	}
	function _getAll($product_id){
		$result = $this->connection->prepare("SELECT * FROM  `product_related` where `product_id`=?");
		$result -> execute(array($product_id));
		$result=$result->fetchAll();
		if (count($result)==0) return false;
		return $result;
	}
}
$product_related = new product_related();
?>