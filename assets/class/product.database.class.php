<?php
require_once dirname(__FILE__)."/database.class.php";
class product extends Database{
	function _add($product,$man_id,$price,$discount,$show_discount,$show_product,$show_cart,$show_price,$show_long_desc){
		$result = $this->connection->prepare("INSERT INTO `product` (`product`,`man_id`,`price`,`discount`,`show_discount`,`show_product`,`show_cart`,`show_price`,`show_long_desc`) VALUES (?,?,?,?,?,?,?,?,?);");
		$result -> execute(array($product,$man_id,$price,$discount,$show_discount,$show_product,$show_cart,$show_price,$show_long_desc));
		
		return $result;
	}
	function _addNewProduct($product){
		$result = $this->connection->prepare("INSERT INTO `product` (`product`) VALUES (?);");
		$result -> execute(array($product));
		
		return $result;
	
	}
	function _remove($product,$man_id,$price,$discount,$show_discount,$show_product,$show_cart,$show_price,$show_long_desc){
		$result = $this->connection->prepare("DELETE FROM `product` WHERE `product`=? AND `man_id`=? AND `price`=? AND `discount`=? AND `show_discount`=? AND `show_product`=? AND `show_cart`=? AND `show_price`=? AND `show_long_desc`=?;");
		$result -> execute(array($product,$man_id,$price,$discount,$show_discount,$show_product,$show_cart,$show_price,$show_long_desc));
		return $result;
	}
	function _removeProd($id){
		$result = $this->connection->prepare("DELETE FROM `product` WHERE `id`=?;");
		$result -> execute(array($id));
		return $result;
	}
	function _update($id,$product,$man_id,$price,$discount,$show_discount,$show_product,$show_cart,$show_price,$show_long_desc){
		$result = $this->connection->prepare("UPDATE `product` SET  `product`=?,`man_id`=?, `price`=? , `discount`=? , `show_discount`=? , `show_product`=? , `show_cart`=? , `show_price`=? , `show_long_desc`=? where `id`=?");
		$result -> execute(array($product,$man_id,$price,$discount,$show_discount,$show_product,$show_cart,$show_price,$show_long_desc,2));
		
	}
	function _updateCateg($id,$category_id){

		$result=$this->connection->prepare("UPDATE `product` SET `category_id`=? where `id`=?");
		$result->execute(array($category_id,$id));
	}
	function _updateManuf($id,$man_id){

		$result=$this->connection->prepare("UPDATE `product` SET `man_id`=? where `id`=?");
		$result->execute(array($man_id,$id));
	}
	function _updateName($id,$product){

		$result=$this->connection->prepare("UPDATE `product` SET `product`=? where `id`=?");
		$result->execute(array($product,$id));
	}

	function _updatePrice($id,$price){

		$result=$this->connection->prepare("UPDATE `product` SET `price`=? where `id`=?");
		$result->execute(array($price,$id));
	}
	function _updateShowPrice($id,$show_price){

		$result=$this->connection->prepare("UPDATE `product` SET `show_price`=? where `id`=?");
		$result->execute(array($show_price,$id));

	}
	function _updateDiscount($id,$discount){

		$result=$this->connection->prepare("UPDATE `product` SET `discount`=? where `id`=?");
		$result->execute(array($discount,$id));

	}
	function _updateShowDiscount($id,$show_discount){

		$result=$this->connection->prepare("UPDATE `product` SET `show_discount`=? where `id`=?");
		$result->execute(array($show_discount,$id));

	}
	function _updateShowProduct($id,$show_product){

		$result=$this->connection->prepare("UPDATE `product` SET `show_product`=? where `id`=?");
		$result->execute(array($show_product,$id));

	}
	function _updateShowCart($id,$show_cart){

		$result=$this->connection->prepare("UPDATE `product` SET `show_cart`=? where `id`=?");
		$result->execute(array($show_cart,$id));

	}
	function _updateShowLongDesc($id,$show_long_desc){

		$result=$this->connection->prepare("UPDATE `product` SET `show_long_desc`=? where `id`=?");
		$result->execute(array($show_long_desc,$id));

	}

	
	function _get($pid){
			$result = $this->connection->prepare("SELECT * FROM `product` Where `id`=?");
		$result -> execute(array($pid));
		$result =$result->fetchAll();
		return $result[0];
	}
	function _getAll(){
		$result = $this->connection->prepare("SELECT * FROM `product`");
		$result -> execute();
		$result =$result->fetchAll();
		return $result;
	}
	function _getid($product){

		$result=$this->connection->prepare("SELECT `id` FROM `product`   where `product`=?");
		$result->execute(array($product));
		$result =$result->fetchAll();
		return $result[0];
	}
}
$product = new product();
$product->_removeProd(18);

?>