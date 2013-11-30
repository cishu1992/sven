<?php

session_start();
include "./assets/class/database.class.php";

include "assets/class/category.database.class.php";
include "assets/class/picture.database.class.php";
include "assets/class/manufacturer.database.class.php";
include "assets/class/tag.database.class.php";


include "assets/class/product.database.class.php";
include "assets/class/product_category.database.class.php";
include "assets/class/product_picture.database.class.php";
include "assets/class/product_description.database.class.php";
include "assets/class/product_tag.database.class.php";
include "assets/class/product_related.database.class.php";

include "assets/class/functions.php";

var_dump($_POST);


if ($_POST['submit']=="save"){
	if (isset($_POST['product_name'])){
		_updateName($pid,$_POST['product_name']);

	}

	if (isset($_POST['enable_prod'])){
		_updateShowProduct($pid,$_POST['enable_prod']);

	}
	
	if (isset($_POST['select_manuf'])){
		_updateManuf($pid,$_POST['select_manuf']);

	}
	if (isset($_POST['price'])){
		_updatePrice($pid,$_POST['price']);

	}
	
	if (isset($_POST['enable_price'])){
		_updateShowPrice($pid,$_POST['enable_price']);

	}

	if (isset($_POST['discount'])){
		_updateDiscount($pid,$_POST['discount']);

	}
	if (isset($_POST['enable_disc_price'])){
		_updateShowDiscount($pid,$_POST['enable_disc_price']);

	}
	if (isset($_POST['prod_available'])){
		_updateShowCart($pid,$_POST['prod_available']);

	}
	if (isset($_POST['select_categ'])){
		_updateCateg($pid,$_POST['select_categ']);

	}
}

?>
