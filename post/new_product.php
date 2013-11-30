<?php 
require_once "../assets/class/database.class.php";

require_once "../assets/class/category.database.class.php";
require_once "../assets/class/picture.database.class.php";
require_once "../assets/class/manufacturer.database.class.php";
require_once "../assets/class/tag.database.class.php";


require_once "../assets/class/product.database.class.php";
require_once "../assets/class/product_category.database.class.php";
require_once "../assets/class/product_picture.database.class.php";
require_once "../assets/class/product_description.database.class.php";
require_once "../assets/class/product_tag.database.class.php";
require_once "../assets/class/product_related.database.class.php";

require_once "../assets/class/functions.php";
 $prods=$product->_getAll();

if ($_POST['submit']=="add") {
	$nameid=rand(10,500);
	$product->_addNewProduct("Newproduct".$nameid);
	$pid=$product->_getid("Newproduct".$nameid);
	

	$languages = array("est","eng","rus","fin");
	foreach ($languages as $k=>$l){
		$product_description->_add($pid[0],$l,1);
		$product_description->_add($pid[0],$l,2);
		$product_description->_add($pid[0],$l,3);
		$product_description->_add($pid[0],$l,4);

	}
	
	$url="http://dev.codemyworld.com/sven/product?id=".$pid[0];
	header('Location:'.$url);
	}



if ($_POST['submit']=="delete"){
	foreach ($prods as $prd){
		$check='prod_selected'.$prd['id'];

		if (($_POST[$check])==1){
			$product->_removeProd($prd['id']);
			$product_description->_delete($prd['id']);

			}
	
	}
$url="http://dev.codemyworld.com/sven/products";
		header('Location:'.$url);
}
	

if ($_POST['submit']=="copy"){
	foreach ($prods as $prd){
		$check='prod_selected'.$prd['id'];

		var_dump($prd);

		if (($_POST[$check])==1){
			$product->_add($prd['product'],$prd['man_id'],$prd['price'],$prd['discount'],$prd['show_discount'],$prd['show_product'],$prd['show_cart'],$prd['show_price'],$prd['show_long_desc']);
			$languages = array("est","eng","rus","fin");
			foreach ($languages as $k->$l){
				$product_description->_add($prd['id'],$k,1);
				$product_description->_add($prd['id'],$k,2);
				$product_description->_add($prd['id'],$k,3);
				$product_description->_add($prd['id'],$k,4);

				}
			}
	}
$url="http://dev.codemyworld.com/sven/products";
		header('Location:'.$url);
		
}   				
?>