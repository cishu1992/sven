<?php
require_once dirname(__FILE__)."/database.class.php";
class product_picture extends Database{
	function _assign($product_id,$picture_id){
		$result = $this->connection->prepare("INSERT INTO `product_picture` (`product_id`,`picture_id`) VALUES (?,?);");
		$result -> execute(array($product_id,$picture_id));
		
		return $result;
	}
	function _unassign($product_id,$picture_id){
		$result = $this->connection->prepare("DELETE FROM `product_picture` WHERE `product_id`=? AND `picture_id`=?;");
		$result -> execute(array($product_id,$picture_id));
		return $result;
	}
	function _getAll($product_id){
		$result = $this->connection->prepare("SELECT  `path` ,  `created_at` ,  `picture_id` 
											  FROM  `picture` AS a,  `product_picture` AS b
											  WHERE b.`product_id` =?
											  AND b.`picture_id` = a.`id` 
											  GROUP BY  `picture_id` ");
		$result -> execute(array($product_id));
		$result=$result->fetchAll();
		if (count($result)==0) return false;
		return $result;
	}
}
$product_picture = new product_picture();
$product_picture->_assign(2,2);
?>