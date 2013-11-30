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


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-wysihtml5.css">
<link rel="stylesheet" type="text/css" href="assets/css/prettify.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatables.css">
<link rel="stylesheet" type="text/css" href="assets/css/docs.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-tagsinput.css">
<link rel="stylesheet" type="text/css" href="assets/css/app.css">


<script type="text/javascript"  src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript"  src="http://netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
<script type="text/javascript"  src="assets/js/bootstrap-wysihtml5.js"></script>
<script  type="text/javascript" src="assets/js/prettify.js"></script>
<script type="text/javascript"  src="assets/js/wysihtml5-0.3.0.js"></script>
<script type="text/javascript"  src="assets/js/jquery.dataTables.min.js"></script>
<script  type="text/javascript" src="assets/js/datatables.js"></script>
<script type="text/javascript"  src="assets/js/angular.min.js"></script>
<script type="text/javascript"  src="assets/js/bootstrap-tagsinput.js"></script>
<script  type="text/javascript" src="assets/js/bootstrap-tagsinput-angular.js"></script>
<script type="text/javascript"  src="assets/js/upclick.min.js"></script>
<script type="text/javascript"  src="assets/js/typeahead.min.js"></script>
<script type="text/javascript"  src="assets/js/jquery.tablednd.js"></script>

<!--
<script type="text/javascript" src="assets/js/dg-arrange-table-rows.js"></script>
-->

<style type="text/css" media="screen">
	.btn.jumbo {
		font-size: 20px;
		font-weight: normal;
		padding: 14px 24px;
		margin-right: 10px;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px;
	}
</style>
<script type="text/javascript"  src="assets/js/nicEdit.js"></script>
<!-- <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">-->
<script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
			


</head>
<body>

<div class="main_container" style="width:90%; margin:auto;">
			<nav class="navbar navbar-default" role="navigation">
		  <!-- Brand and toggle get grouped for better mobile display -->
		  

		  <!-- Collect the nav links, forms, and other content for toggling -->
		  
		    <ul class="nav navbar-nav navbar-left">
		      
		 	 <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tooted <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Õmblustehnica</a></li>
		          <li><a href="#">Kudumistehnika</a></li>
		          <li><a href="#">Lõngad</a></li>
		          <li><a href="#">Tööstuslik</a></li>
		          <li><a href="#">Nõelad</a></li>
		          <li><a href="#">Lisavarustus</a></li>
		          <li><a href="#">Lisa toode</a></li>

		        </ul>
		      </li>
		     
		      <li><a href="#">Sisulehed</a></li>
		      
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seaded <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Kategooriad</a></li>
		          <li><a href="#">Menüüd</a></li>
		          <li><a href="#">Poe seaded</a></li>
		          <li><a href="#">Bännerid</a></li>
		          
		        </ul>
		      </li>

		      <li><a href="#">Müük</a></li>

		      <li><a href="#">Statistika</a></li>

				    
		    
		  
		</nav>		
	<div class="page_container">




