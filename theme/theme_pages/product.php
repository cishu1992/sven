			<?php 
		if (isset($_GET['id'])){
			$pid=$_GET['id'];
			$pictures = $product_picture->_getAll($pid);
			$tags=$product_tag->_getAll($pid);
			$tag_list=$tag->_getAll();
			$category_list=$category->_getAll();
			$manuf=$manufacturer->_getAll();
			$atrib=$product->_get($pid);
			$descrip=$product_description->_get($pid);
			

		}
			
		var_dump($tag_list);	
		?>


		
		<script type="text/javascript">
		$(document).ready(function() {
		    <span class="comment">// Initialise the table</span>
		    $("#tablerelated").tableDnD();
		});
		</script>
		
		

		<style>
		.name_tag{float: left;font-weight: bold;font-size: 18px;color: #2b7bb2;}
		.button_pl{
			float:right;
		}
		.r_princ{border-top:1px solid #ececec; border-bottom:1px solid #ececec;padding-bottom:25px; margin-top:25px;min-height:500px; }
		.cat_title{margin-top:25px;background-color:#e5e5e5;border-bottom: 1px solid #bebebe;font-weight:bold;color:#808080;}
		.input_boxes{margin-top:10px; padding-bottom: 10px;margin-bottom: 10px;border-bottom: 1px dotted #d3d3d3;}
		.inp_gr_ad_1{border: none;background: none;min-width: 120px;}
		.inp_gr_ad_2{border: none;background: none; text-align:left;width:0%;}
		.inp_gr_ad_3{border: none;background: none;margin-top:5px}
		.r_menu{display:inline-block;margin-left: 30px;font-weight: bold;font-size: 13px;margin-top:10px}
		.tab_class{float:left;width:58%;margin-top:20px; margin-left:10px;border-left:1px solid #d3d3d3}
		.r_kuva{margin-top:10px; padding-bottom: 10px;margin-bottom: 10px;}
		.r_toote{float:left;width:45%; margin:0}
		.r_toote2{float:left;width:45%;margin-left:40px}
		</style>
		<form action="./post/update_atributes.php" method="post">
		<input type="text" name="pid" value="<?=$pid;?>" style="visibility:hidden;">

		<div class="row">
			<?php
		  echo	'<div class="col-md-2 name_tag" style="">'.$atrib['product'].'</div>';
		  ?>
		  <div class="col-md-8" ></div>
		  <div class="col-md-1 button_pl" >
		  		<button type="submit" class="btn btn-default" name="submit" value="saveandexit" style="background-color:#d5e4f0">Salvesta ja jätka</button>
		  		
		   </div>
		   <div class="col-md-1 button_pl" >
		   		<button type="submit" class="btn btn-default" name="submit" value="save" style="background-color:#d5e4f0">Salvesta</button>
		   		
		   </div>
		</div>
		

		<div class="row r_princ" >
		  <div class="col-md-12" >
		  		 <div class="col-md-4"style="width:40%;float:left" >
		  		 	<div class="row  cat_title" >
		  		 		<div class="col-md-12"  >
		  		 			TOOTEINFO
		  		 		</div>
		  		 	</div>
		  		 	<div class="row input_boxes">
			  		 	<div class="input-group" style="margin-right: 40px;">
							  <span class="input-group-addon  inp_gr_ad_1" >Toode:</span>
							  <input type="text" class="form-control" name="product_name" placeholder="name" value="<?=$atrib['product'];?>" style="float:left">
							  <span class="input-group-addon" style="border: none;background: none;">
							        <input type="checkbox" name="enable_prod"  <?=($atrib['show_product']?'checked':'');?>>

										
							      </span>
						</div>
			  		 </div>
			  		 <div class="row input_boxes">
			  		 	<div class="input-group" style="margin-right: 80px;">
							  <span class="input-group-addon inp_gr_ad_1" >Tootja:</span>
							 
							   
							   <select class="form-control" name"select_manuf">
								  <?php 
								  	foreach($manuf as $mnf){
								  		
								 			echo '<option value="'.$mnf['id'].'"'.(($mnf['id']==$atrib['man_id'])?"selected":"").'>'.$mnf['name'].'</option>';
								 			//echo"<option  value='".$mnf['id'].">".$mnf['name'].'</option>';
								 	}
								  ?>
								</select>
							
						</div>
			  		 </div>
			  		 <div class="row input_boxes">
			  		 	<div class="input-group" style="margin-right: 40px;">
							  <span class="input-group-addon inp_gr_ad_1" >Hind:</span>
							  <input type="text" class="form-control" placeholder="price" name="price" value="<?=$atrib['price']?>"  style="float:left">
							  <span class="input-group-addon" style="border: none;background: none;">
							        <input type="checkbox" name="enable_price"  <?=($atrib['show_price']?'checked':'');?> >

										

							      </span>
						</div>
			  		 </div>
			  		 <div class="row input_boxes">
			  		 	<div class="input-group" style="margin-right: 40px;">
							  <span class="input-group-addon inp_gr_ad_1" >Soodushind:</span>
							  <input type="text" class="form-control" placeholder="Discount price" name="discount" value="<?echo $atrib['discount']?>" style="float:left">
							  <span class="input-group-addon" style="border: none;background: none;">
							        <input type="checkbox" name="enable_disc_price" <?=($atrib['show_discount']?'checked':'');?>>

										
							      </span>
						</div>
			  		 </div>
			  		 <div class="row input_boxes">
			  		 	<div class="input-group">
							  <span class="input-group-addon inp_gr_ad_2" >Kuva Ostukorvi:</span>
							  
							  <span class="input-group-addon" style="border: none;background: none;float:left; padding-left:0px">
							        <input type="checkbox" name="prod_available"  <?=($atrib['show_cart']?'checked':'');?>>


							      </span>
						</div>
			  		 </div>

			  		 <div class="row input_boxes">
			  		 	<div class="input-group" style="margin-right: 80px;">
							  <span class="input-group-addon inp_gr_ad_1" >Kategooria:</span>
							 
							   <select id="categ" class="form-control" name"select_categ">
								 <?php
								 	foreach($category_list as $ctg){
								 		echo '<option value="'.$ctg['id'].'" '.(($ctg['id']==$atrib['category_id']) ? 'selected' : '').'>'.$ctg['name'].'</option>';
								 		

								 		
								 	}
								 ?>
								</select>
						</div>
			  		 </div>	
			  		 <div class="row input_boxes">
			  		 	<div class="input-group" style="margin-right: 80px;">
							  <span class="input-group-addon inp_gr_ad_1" >Soorterimine:</span>
							 
							   
							  <select id="candy" class="form-control">
								  	<?php
								  		foreach($tag_list as $tg){
								  			echo '<option value="'.$tg['id'].'">'.$tg['name'].'</option>';
								  		}
								  	?>
								</select>
							  
							  	
					          
							
						</div>
						<div class="row" style="margin-left:120px">
						 	<input id="tags_input" type="text" value="" data-role="tagsinput" placeholder="Add tags">
						</div>
			  		 </div>

			  		 <div class="row  cat_title" >
		  		 		<div class="col-md-12"  >
		  		 			PILDID
		  		 		</div>
		  		 	</div>

		  			<table class="table table-striped pildid" id="photosTable">
		  			<?php 
		  				if (count($pictures)==0) {
		  					echo "No pictures added to this product yet.";
		  				} else {
		  					foreach($pictures as $pic) {
		  			?>
 						<tr id="container_photo_<?=$pic['picture_id'];?>">
 							<td style="width: 10%;padding-top: 10px;border:none;">
		 						<span class="input-group-addon inp_gr_ad_3" >
									        <input type="checkbox" value="<?=$pic['picture_id'];?>" name="picture[]" class="photos" id="photo_<?=$pic['picture_id'];?>">
								</span>
							</td>
							<td style="border:none;">
								<a href="./product_photos/<?=$pic['path'];?>" target="_blank" class="thumbnail" style="width: 40px;">
							      <img src="./product_photos/<?=$pic['path'];?>" alt="<?=$pic['path'];?>">
							    </a>

							</td>
							<td style="border:none;">
								<div class="row" style="margin-top:10px">
									<div class="col-md-12">
										<?=$pic['path'];?>
									</div>
								</div>
							</td>
						</tr>
						<? } ?>
					<? } ?>
					</table>
					<div class="row r_menu" >
						<div class="col-md-12" style="float:left;padding:0">
							<a  href="javscript:void(0);" id="upload_photo">Lisa </a>
						</div>
						<div class="col-md-12" style="float:left;padding: 0 4px;">
							|
						</div>
						<div class="col-md-12" style="float:left;padding:0">
							<a href="javscript:void(0);" onclick="deletePhotos()">Kustuta</a>
						</div>
						<div class="col-md-12" style="float:left;padding: 0 4px;">
							|
						</div>
						<div class="col-md-12" style="float:left;padding:0">
							Vali põhipildiks
						</div>
					</div>
					<div class="row cat_title" >
		  		 		<div class="col-md-12"  >
		  		 			SIDUSTOOTED
		  		 		</div>
		  		 	</div>
		  		 	
		  		 	<div class="row input_boxes">
			  		 	<div class="input-group">
							  <span class="input-group-addon" style="border: none;background: none;">Otsi toodet:</span>
							   <div class="form-group" style="margin-bottom:0px">
					              <input type="text" class="col-md-3" id="typeahead" data-provide="typeahead">
					            </div>
					            
						</div>
					</div>
					<table class="tablerelated table table-striped "  >
						<tr id="row">
							<td style="width: 10%;padding-top: 10px;border:none">
		 						<span class="input-group-addon inp_gr_ad_3" >
									        <input type="checkbox">
								</span>
							</td>
							<td style="border:none;">
								<div class="row" >
									<div class="col-md-12">
										<img src=".//assets/img/images_19.png">
									</div>
								</div>
							</td>
							<td style="border:none;">
								<div class="row" style="margin-top:5px">
									<div class="col-md-12">
										Janome 1
									</div>
								</div>
							</td>
						</tr>
						<tr id="row1">
							<td style="width: 10%;padding-top: 10px;border:none">
		 						<span class="input-group-addon inp_gr_ad_3" >
									        <input type="checkbox">
								</span>
							</td>
							<td style="border:none;">
								<div class="row" >
									<div class="col-md-12">
										<img src=".//assets/img/images_19.png">
									</div>
								</div>
							</td>
							<td style="border:none;">
								<div class="row" style="margin-top:5px">
									<div class="col-md-12">
										Janome 2
									</div>
								</div>
							</td>
						</tr>
						<tr id="row2">
							<td style="width: 10%;padding-top: 10px;border:none">
		 						<span class="input-group-addon inp_gr_ad_3" >
									        <input type="checkbox">
								</span>
							</td>
							<td style="border:none;">
								<div class="row" >
									<div class="col-md-12">
										<img src=".//assets/img/images_19.png">
									</div>
								</div>
							</td>
							<td style="border:none">
								<div class="row" style="margin-top:5px">
									<div class="col-md-12">
										Janome 3
									</div>
								</div>
							</td>
						</tr >
						<tr id="row3">
							<td style="width: 10%;padding-top: 10px;border:none">
		 						<span class="input-group-addon inp_gr_ad_3" >
									        <input type="checkbox">
								</span>
							</td>
							<td style="border:none;">
								<div class="row" >
									<div class="col-md-12">
										<img src=".//assets/img/images_19.png">
									</div>
								</div>
							</td>
							<td style="border:none;">
								<div class="row" style="margin-top:5px">
									<div class="col-md-12">
										Janome 4
									</div>
								</div>
							</td>
						</tr>
						<tr id="row5">
							<td style="width: 10%;padding-top: 10px; border:none">
		 						<span class="input-group-addon inp_gr_ad_3" >
									        <input type="checkbox">
								</span>
							</td>
							<td style="border:none;">
								<div class="row" >
									<div class="col-md-12">
										<img src=".//assets/img/images_19.png">
									</div>
								</div>
							</td>
							<td style="border:none;">
								<div class="row" style="margin-top:5px">
									<div class="col-md-12">
										Janome 5
									</div>
								</div>
							</td>
						</tr>
					</table>

					<div class="row r_menu" >
						<div class="col-md-12" style="float:left;padding:0">
							Lisa 
						</div>
						<div class="col-md-12" style="float:left;padding: 0 4px;">
							|
						</div>
						<div class="col-md-12" style="float:left;padding:0">
							Kustuta
						</div>
					</div>
		  		 </div>



		  		 <div class="col-md-8 tab_class"  >
		  		 	<ul id="tabs" class="nav nav-tabs">
				        <li class="active" style="border: none;height: 100%;"><a href="#est" data-toggle="tab" style="padding:0px" >EST</a></li>
				        <li style="border: none;height: 100%;"><a href="#eng" data-toggle="tab" style="padding:0px">ENG</a></li>
				        <li style="border: none;height: 100%;"><a href="#rus" data-toggle="tab" style="padding:0px">RUS</a></li>
				        <li style="border: none;height: 100%;"> <a href="#fin" data-toggle="tab" style="padding:0px">FIN</a></li>
				        
				    </ul>
				    <div id="my-tab-content" class="tab-content">
				    <?php 
				    	$languages = array("est","eng","rus","fin");
				    	foreach ($languages as $k=>$l){ ?>
				        <div class="tab-pane <?=(($k==0)?'active':'');?>" id="<?=$l;?>">
							<div id="container_short_desc_<?=$l;?>"  style="width:100%;margin-top:25px">
								 
								  <textarea name="short_desc_<?=$l;?>"  style="width:100%;min-height:200px;">
								      <?
								       		foreach($descrip as $dscp){
								       		if (($dscp['language']==$l)&($dscp['type']==1))
								       				{
								       					echo $dscp['description'];
								       				}
								       			}
								       ?>
								</textarea>

							</div>
				           <div class="row r_kuva" >
			  		 			<div class="input-group">
									  <span class="input-group-addon inp_gr_ad_2" >Kuva Ostukorvi:</span>
									  
									  <span class="input-group-addon" style="border: none;background: none;float:left">
							        <input type="checkbox" name="enable_long_desc_<?=$l;?>" <?=($atrib['show_long_desc']?'checked':'');?>>
							      </span>
								</div>
				       		 </div>
				       		 
				       		<div id="container_long_desc_<?=$l;?>" style="width:100%;margin-top:25px">
								 
								  <textarea name="long_desc_<?=$l;?>" style="width:100%;min-height:400px;">
								       <?
								       		foreach($descrip as $dscp){
								       		if (($dscp['language']==$l)&($dscp['type']==2))
								       				{
								       					echo $dscp['description'];
								       				}
								       			}
								       ?>
								</textarea>
								
							</div>

				           	<div class="row r_toote"  >
				           		<div class="col-md-12"  >
						           	<div class="row">
						           		<div class="col-md-12" style="margin:10px 0px;" >
						           			Toote võtmesõnad(META)
						           		</div>
						           	</div>
						           	<div class="row"  >
						           		<div id="container_meta_keywords_long_desc_<?=$l;?>" tyle="margin-top:25px" >
											 
											  <textarea name="meta_keywords_<?=$l;?>" style="width:100%">
											       <?
								       		foreach($descrip as $dscp){
								       		if (($dscp['language']==$l)&($dscp['type']==3))
								       				{
								       					echo $dscp['description'];
								       				}
								       			}
								       ?>
											</textarea><br />
										</div>
						           	</div>
						        </div>
						    </div>
						     <div class="row r_toote2" >
						    	<div class="col-md-12"  >
						           	<div class="row">
						           		<div class="col-md-12" style="margin:10px 0px;" >
						           			Toote võtmesõnad(META)
						           		</div>
						           	</div>
						           	<div class="row"  >
						           		<div id="container_meta_desc_<?=$l;?>"  >
								 
											  <textarea name="meta_description_<?=$l;?>"  style="width:100%">
											        <?
											       		foreach($descrip as $dscp){
											       		if (($dscp['language']==$l)&($dscp['type']==4))
											       				{
											       					echo $dscp['description'];
											       				}
											       			}
											       ?>
											</textarea><br />
										</div>
						           	</div>
						        </div>
						    </div>

				        
				        </div>
				       <? } ?>
				     
				    </div>

		  		 </div>

		  	</div>
		  </div>
		 
	<div class="row" style="margin-top:10px">
		<div class="col-md-12">
			<div  class="col-md-1 button_pl" >
		  		<button type="submit" class="btn btn-default" name="submit" value="saveandexit"  style="background-color:#d5e4f0">Salvesta ja jätka</button>
		   </div>
		   <div  class="col-md-1 button_pl" >
		   		<button type="submit" class="btn btn-default" name="submit" value="save" style="background-color:#d5e4f0">Salvesta</button>
		   </div>

		</div>
	</div>
	</form>
	
	
	<script type="text/javascript">
		$( "#candy" )
		  .change(function () {
		    var str = "";
		    $( "#candy option:selected" ).each(function() {
		      str = $( this ).text()+'<input type="hidden" name="tag[]" value="'+$(this).val()+'"/>';
		      $('#tags_input').tagsinput('add', str);
		    });
		  })
		  .change();

		  function deletePhotos(){
		  		$(".photos").each(
		  			function(i,ob){
		  					var pic=$(ob);
		  					if(pic.is(':checked')){
		  						var pic_id=pic.attr('id');
		  						$("#container_"+pic_id).remove();
		  					}
		  			});

		  }
		  function addNewPhotoLine(id,path){
		  			$("#photosTable").append('<tr id="container_photo_'+id+'">'+
	 							'<td style="width: 10%;padding-top: 10px;border:none;">'+
			 					'	<span class="input-group-addon inp_gr_ad_3" >'+
								'		        <input type="checkbox" value="'+id+'" name="picture[]" class="photos" id="photo_'+id+'">'+
								'	</span>'+
								'</td>'+
								'<td style="border:none;">'+
								'	<a href="./product_photos/'+path+'" target="_blank" class="thumbnail" style="width: 40px;">'+
								'      <img src="./product_photos/'+path+'" alt="'+path+'">'+
								'    </a>'+
								'</td>'+
								'<td style="border:none;">'+
								'	<div class="row" style="margin-top:10px">'+
								'		<div class="col-md-12">'+
								'			'+path+''+
								'		</div>'+
								'	</div>'+
								'</td>'+
							'</tr>');
		  }
		  				
		   var uploader = document.getElementById('upload_photo');

		   upclick(
		     {
		      element: uploader,
		      action: './php/photo_uploader.php', 
		      onstart:
		        function(filename)
		        {
		          //alert('Start upload: '+filename);
		        },
		      oncomplete:
		        function(response_data) 
		        {
		          //alert(response_data);
		          if(response_data!='error'){
		          	var resp=eval('('+response_data+')');
		          	addNewPhotoLine(resp.id,resp.title);
		          } else {
		          	alert('An error has occured while uploading the photo');
		          }
		        }
		     });

		   var tags=<?=json_encode($tags);?>;
		   for(i in tags){
		   		str = tags[i].name+'<input type="hidden" name="tag[]" value="'+tags[i].tag_id+'"/>';
		      	$('#tags_input').tagsinput('add', str);
		   }
	</script>

	