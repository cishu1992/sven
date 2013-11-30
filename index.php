<?php
session_start();

$router = array(
	'product' => 'theme/theme_pages/product.php',
	'products' => 'theme/theme_pages/products.php',
	'products_old' => 'theme/theme_pages/products_old.php',

	// 'permalink' => 'path/to/file'
	);




include "theme/header.php";

if (isset($router[$_GET['route']])) {
		include $router[$_GET['route']];
	} else if ($_GET['route']!=""){
		include "theme/theme_pages/404.php";
	} else {
		include "theme/theme_pages/home.php";
	}
include "theme/footer.php";
?>