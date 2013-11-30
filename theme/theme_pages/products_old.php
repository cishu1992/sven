<style type="text/css">
		
	.category_menu > li {
		width: auto;
		line-height: 20px;
		font-size: 12px;
		height: 20px;
		padding: 0px 5px;
		border: 0px !important;
		border-left: 1px solid #e0e0e0 !important;
	}

	.category_menu > li:first-child {
		border-left: 0px !important
	}

	.category_menu a {
		line-height: 20px !important;
		width: 100% !important;
		height: 100% !important;
		padding: 0px 3px !important;
	}

	.category_menu {
		border-top: 1px solid #c7dcea;
		border-bottom: 1px solid #c7dcea;
		padding: 4px 0px;
	}

	th {
		min-width: 30px;
		text-align: left !important;
		padding: 2px;
	}

	td {
		min-width: 30px;
		text-align: center !important;
		padding: 2px;
	}
		
</style>
	
<ol class="breadcrumb" style="background-color: white;font-size: 12px;padding-left: 0px;">
	<li>Avaleht</li>
	<li>Tooted</li>	
	<li>Omblustehnika</li>	
	<li class="active">Omblusmasin</li>
</ol>

<ul class="nav category_menu">
	  	
  	<li>
  		<a href="#">Kõik</a>
  	</li>
 	<li>
  		<a href="#">Õmblusmasin</a>
 	</li>
	<li>
		<a href="#">Overlok</a>
	</li>
	<li>
		<a href="#">Tikkimismasin</a>
	</li>
	<li>
		<a href="#">Kattemasin</a>
	</li>
	<li>
		<a href="#">Viltimismasin</a>
	</li>
	<li>
		<a href="#">Kastatud Tehnika</a>
	</li>
	<li>
		<a href="#">Link</a>
	</li>

</ul>
    	
<div id="wrap">
	<div class="container" style="padding:0;margin-top:25px;">	
		<div class="row">
			<div class="col-md-4" style="float:left;width:300px">
		   		<div class="input-group">
					  <span class="input-group-addon" style="border: none;background: none;">Otsi / filtreeri:</span>
					  <div id="search" class="form-group" style="margin-bottom:0px"></div>        
				</div>
			</div>
			<div class="col-md-4" style="float:left;width:300px;margin-left:150px;">
			   	<p style="float:left;margin-top:5px">Kuva veerge</p>
			   	<img src=".//assets/img/images_01.png" style="margin-top: -5px;margin-left: 10px;" >
			</div>
			<div class="col-md-4" style="float:right;">
		   		<button type="button" class="btn btn-default" style="width: 80px;">Lisa</button>
		   		<button type="button" class="btn btn-default" style="width: 80px;">Kopeeri</button>
		   		<button type="button" class="btn btn-default" style="width: 80px;">Kustuta</button>
			</div>
    	</div>
    </div>

	<div class="container">
	  	<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
				
				<thead>

					<tr>
						<th></th>
						<th></th>
						<th>Jrk</th>
						<th>Pilt</th>
						<th>Toote nimi</th>
						<th>Tootja</th>
						<th>Url nimi</th>
						<th>Lisatekst</th>
						<th>Hind</th>
						<th>Soodus</th>
						<th>Ostukorv</th>	
						<th>Hind</th>
						<th>Soodushind</th>
						<th>Status</th>
						<th>Muda</th>
					</tr>
				</thead>

				<tbody>

					<tr>

						<td class="movable">
							<img src=".//assets/img/images_19.png">
						</td>
					
						<td>
					    	<input type="checkbox">
						</td>

						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td>7</td>
						<td><input type="checkbox" class="custom"></td>
						<td><input type="checkbox" class="custom"></td>
						<td><input type="checkbox" class="custom"></td>
						<td><input type="checkbox" class="custom"></td>
						<td>9</td>	
						<td>10</td>
						<td><input type="checkbox" class="custom"></td>
						<td>15</td>
					
					</tr>

					<tr>

						<td class="movable">
							<img src=".//assets/img/images_19.png">
						</td>
						
						<td>
					    	<input type="checkbox" id="box1">
						</td>

						<td>lolol</td>
						<td>lolol</td>
						<td>lolol</td>
						<td>lolol</td>
						<td>lolol</td>
						<td><input type="checkbox" class="custom"></td>
						<td><input type="checkbox" class="custom"></td>
						<td><input type="checkbox" class="custom"></td>
						<td><input type="checkbox" class="custom"></td>
						<td>9</td>	
						<td>10</td>
						<td><input type="checkbox" class="custom"></td>
						<td>lolol</td>

					</tr>

				</tbody>

		</table>	
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function() {

		jQuery.fn.removeAttributes = function() {
		  	return this.each(function() {
		    	var attributes = $.map(this.attributes, function(item) {
		      		return item.name;
		    	});
		    var el = $(this);
		    $.each(attributes, function(i, item) {
		    	el.removeAttr(item);
		    	});
		  	});
		}

   		jQuery.fn.createCustomCheckbox = function() {
   			var el = $(this);
   			var custom;

      		$(this).css('display', 'none');
      		if (el.prop('checked'))
      			custom = $('<img src=".//assets/img/images_26.png">');
      		else
      			custom = $('<img src=".//assets/img/images_26.png">');
      		custom.checked = true;
      		custom.on('click', function () {
      			if (custom.checked) {
      				custom.attr('src', './/assets/img/images_24.png');
      				el.removeAttr('checked');
      				custom.checked = false;
      			}
      			else {
      				custom.attr('src', './/assets/img/images_26.png');
      				el.attr('checked', '');
      				custom.checked = true;
      			}
      		});
      		el.parent().append(custom);
   		}

		$('.datatable').dataTable();	
		$('.datatable').each(function(){
			var datatable = $(this);
			// SEARCH - Add the placeholder for Search and Turn this into in-line form control
			var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
			search_input.attr('placeholder', '');
			search_input.addClass('form-control input-sm');
			$('#search').append(search_input);
			// LENGTH - Inline-Form control
			var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select').parent();
			length_sel.css('float', 'left');
			length_sel.css('width', '170px');
			length_sel.css('margin', '20px 0');
		});

		$('th:first-child, th:nth-child(2)').removeAttributes();
		$('th:first-child, th:nth-child(2)').css('width', '40px');
		$('th:first-child, th:nth-child(2)').addClass('sorting');
		$('th:first-child, th:nth-child(2)').off('click');

		$('.custom').each(function () {
			$(this).createCustomCheckbox();
		});

		$('.datatable').tableDnD();

	});
	</script>