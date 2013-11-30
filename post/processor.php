<?php



if (isset($_GET['pid']) && isset($_GET['show_price'])){
		$product->_updateShowPrice($_GET['pid'],$_GET['show_price']);
}
if (isset($_GET['pid']) && isset($_GET['show_discount'])){
		$product->_updateShowDiscount($_GET['pid'],$_GET['show_discount']);
}
if (isset($_GET['pid']) && isset($_GET['prod_available'])){
		$product->_updateShowCart($_GET['pid'],$_GET['prod_available']);
}


?>