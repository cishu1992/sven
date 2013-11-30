<?php
require_once dirname(__FILE__)."/database.class.php";
class product_tag extends Database{
	function _assign($product_id,$tag_id){
		$result = $this->connection->prepare("INSERT INTO `product_tag` (`product_id`,`tag_id`) VALUES (?,?);");
		$result -> execute(array($product_id,$tag_id));
		
		return $result;
	}
	function _unassign($product_id,$tag_id){
		$result = $this->connection->prepare("DELETE FROM `product_tag` WHERE `product_id`=? AND `tag_id`=?;");
		$result -> execute(array($product_id,$tag_id));
		return $result;
	}
	function _getAll($product_id){
		$result = $this->connection->prepare("SELECT * FROM  `tag` as a,`product_tag` as b where b.`product_id`=? AND a.`id`=b.`tag_id` group by `tag_id`");
		$result -> execute(array($product_id));
		$result=$result->fetchAll();
		if (count($result)==0) return false;
		return $result;
	}
}
$product_tag = new product_tag();
?>