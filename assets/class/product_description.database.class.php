<?php
require_once dirname(__FILE__)."/database.class.php";
class product_description extends Database{
	
	function _add($product_id,$language,$type){
		$result = $this->connection->prepare("INSERT INTO `product_description` (`product_id`,`language`,`type`) VALUES (?,?,?);");
		$result -> execute(array($product_id,$language,$type));
		
		return $result;
	}

	function _delete($pid){

		$result = $this->connection->prepare("DELETE FROM `product_description` WHERE `product_id`=?;");
		$result -> execute(array($pid));
		return $result;
	}

	function _assign($product_id,$language,$type,$description){
		$result = $this->connection->prepare("INSERT INTO `product_description` (`product_id`,`language`,`type`,`description`) VALUES (?,?,?,?);");
		$result -> execute(array($product_id,$language,$type,$description));
		
		return $result;
	}


	function _unassign($product_id,$language,$type,$description){
		$result = $this->connection->prepare("DELETE FROM `product_description` WHERE `product_id`=? AND `language`=? AND `type`=? AND `description`=?");
		$result -> execute(array($product_id,$language,$type,$description));
		return $result;
	}
	function _update($product_id,$language,$type,$description){
		$result=$this->connection->prepare("UPDATE `product_description` SET  `description`=? WHERE `product_id`=? AND `language`=? AND `type`=?");
		$result->execute(array($description,$product_id,$language,$type));
		return $result;
	
		}
	
	function _get($pid){
		$result = $this->connection->prepare("SELECT * FROM `product_description` Where `product_id`=?");
		$result -> execute(array($pid));
		$result =$result->fetchAll();
		return $result;
	}
}
$product_description = new product_description();




?>