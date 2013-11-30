<?php
require_once dirname(__FILE__)."/database.class.php";
class product_category extends Database{
	function _assign($product_id,$category_id){
		$result = $this->connection->prepare("INSERT INTO `product_category` (`product_id`,`category_id`) VALUES (?,?);");
		$result -> execute(array($product_id,$category_id));
		echo "inserted";
		return $result;
	}
	function _unassign($product_id,$category_id){
		$result = $this->connection->prepare("DELETE FROM `product_category` WHERE `product_id`=? AND `category_id`=?;");
		$result -> execute(array($product_id,$category_id));
		return $result;
	}
	function _getAll($product_id){
		$result = $this->connection->prepare("SELECT * FROM  `product_category` where `product_id`=?");
		$result -> execute(array($product_id));
		$result=$result->fetchAll();
		if (count($result)==0) return false;
		return $result;
	}
}
$product_category = new product_category();
?>