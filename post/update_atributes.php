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


if ($_POST['submit']=="save"){
	
	
	if (isset($_POST['product_name'])){

		$product->_updateName($_POST['pid'],$_POST['product_name']);

}
	
	if (isset($_POST['enable_prod'])){
		$product->_updateShowProduct($_POST['pid'],1);

	}
	else{$product->_updateShowProduct($_POST['pid'],0);}
	
	


	if (isset($_POST['select_manuf'])){
		$product->_updateManuf($_POST['pid'],$_POST['select_manuf']);

	}
	if (isset($_POST['price'])){
		$product->_updatePrice($_POST['pid'],$_POST['price']);

	}
	
	if (isset($_POST['enable_price'])){
		$product->_updateShowPrice($_POST['pid'],1);
		}
		else{
			$product->_updateShowPrice($_POST['pid'],0);
		}

	if (isset($_POST['discount'])){
		$product->_updateDiscount($_POST['pid'],$_POST['discount']);

	}
	if (isset($_POST['enable_disc_price'])){
		$product->_updateShowDiscount($_POST['pid'],1);
			}
			else{
				$product->_updateShowDiscount($_POST['pid'],0);
			}
	if (isset($_POST['prod_available'])){
		$product->_updateShowCart($_POST['pid'],1);
		}
		else{
		$product->_updateShowCart($_POST['pid'],0);	
		}

	if (isset($_POST['select_categ'])){
		$product->_updateCateg($_POST['pid'],$_POST['select_categ']);

	}
	
	
	$languages = array("est","eng","rus","fin");
		foreach ($languages as $k=>$l){
			$sd="short_desc_".$l;
			$ld="long_desc_".$l;
			$mk="meta_keywords_".$l;
			$md="meta_description_".$l;		
			$edp="enable_disc_price".$l;
			if (isset($_POST[$edp])){
			$product->_updateShowLongDesc($_POST['pid'],1);
			}
			else{
				$product->_updateShowLongDesc($_POST['pid'],0);
			}
			
			if (isset($_POST[$sd])){
				$product_description->_update($_POST['pid'],$l,1,$_POST[$sd]);

				}
			if (isset($_POST[$ld])){
				$product_description->_update($_POST['pid'],$l,2,$_POST[$ld]);

				}
			if (isset($_POST[$mk])){
				$product_description->_update($_POST['pid'],$l,3,$_POST[$mk]);

				}
			if (isset($_POST[$md])){
				$product_description->_update($_POST['pid'],$l,4,$_POST[$md]);

				}

			}
	$url="http://dev.codemyworld.com/sven/product?id=".$_POST['pid'];
	var_dump($_POST['pid']);
	var_dump($url);
	header('Location:'.$url);	
}

if ($_POST['submit']=="saveandexit"){
	
	
	if (isset($_POST['product_name'])){

		$product->_updateName($_POST['pid'],$_POST['product_name']);

}
	
	if (isset($_POST['enable_prod'])){
		$product->_updateShowProduct($_POST['pid'],1);

	}
	else{$product->_updateShowProduct($_POST['pid'],0);}
	
	


	if (isset($_POST['select_manuf'])){
		$product->_updateManuf($_POST['pid'],$_POST['select_manuf']);

	}
	if (isset($_POST['price'])){
		$product->_updatePrice($_POST['pid'],$_POST['price']);

	}
	
	if (isset($_POST['enable_price'])){
		$product->_updateShowPrice($_POST['pid'],1);
		}
		else{
			$product->_updateShowPrice($_POST['pid'],0);
		}

	if (isset($_POST['discount'])){
		$product->_updateDiscount($_POST['pid'],$_POST['discount']);

	}
	if (isset($_POST['enable_disc_price'])){
		$product->_updateShowDiscount($_POST['pid'],1);
			}
			else{
				$product->_updateShowDiscount($_POST['pid'],0);
			}
	if (isset($_POST['prod_available'])){
		$product->_updateShowCart($_POST['pid'],1);
		}
		else{
		$product->_updateShowCart($_POST['pid'],0);	
		}

	if (isset($_POST['select_categ'])){
		$product->_updateCateg($_POST['pid'],$_POST['select_categ']);

	}
	
	
	$languages = array("est","eng","rus","fin");
		foreach ($languages as $k=>$l){
			$sd="short_desc_".$l;
			$ld="long_desc_".$l;
			$mk="meta_keywords_".$l;
			$md="meta_description_".$l;		
			$edp="enable_disc_price".$l;
			if (isset($_POST[$edp])){
			$product->_updateShowLongDesc($_POST['pid'],1);
			}
			else{
				$product->_updateShowLongDesc($_POST['pid'],0);
			}
			
			if (isset($_POST[$sd])){
				$product_description->_update($_POST['pid'],$l,1,$_POST[$sd]);

				}
			if (isset($_POST[$ld])){
				$product_description->_update($_POST['pid'],$l,2,$_POST[$ld]);

				}
			if (isset($_POST[$mk])){
				$product_description->_update($_POST['pid'],$l,3,$_POST[$mk]);

				}
			if (isset($_POST[$md])){
				$product_description->_update($_POST['pid'],$l,4,$_POST[$md]);

				}

}
	header("Location: http://dev.codemyworld.com/sven/products");
}

?>
