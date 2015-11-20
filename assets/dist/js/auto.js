/**
 * Site : http:www.smarttutorials.net
 * @author muni
 */
	      
 $(".delete").on('click', function() {
	$('.case:checkbox:checked').parents("tr").remove();
	$('.check_all').prop("checked", false); 
	check();
});
var i=$('table tr').length;

$(".addmore").on('click',function(){
	count=$('table tr').length;
	
    var data="<tr><td><input type='checkbox' class='case'/></td>";
    data +="<td><input class='form-control' type='text' id='txtkdbarang_"+i+"' name='txtkdbarang[]' readonly='readonly'/></td>"+
    		"<td><input class='form-control' type='text' id='txtnmbarang_"+i+"' name='txtnmbarang[]' autofocus/></td>"+
    		"<td><input class='form-control' type='text' id='txtsatuan_"+i+"' name='txtsatuan[]'/></td>"+
    		"<td><input class='form-control' type='text' id='txtqty_"+i+"' name='txtqty[]'/></td>"+
    		"<td><input class='form-control' type='text' id='txtharga_"+i+"' name='txtharga[]'/></td>"+
    		"<td><input class='form-control' type='text' id='txtjumlah_"+i+"' name='txtjumlah[]'/></td></tr>";
	$('table').append(data);
	row = i ;
	$('#txtnmbarang_'+i).autocomplete({
  	source: function( request, response ) {
  		$.ajax({
  			url : BASE_URL+'assets/include/ajax.php',
  			dataType: "json",
  			method: 'post',
			data: {
			   name_startsWith: request.term,
			   type: 'produk_table',
			   row_num : row
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						label: code[1],
						value: code[1],
						data : item
					}
				}));
			}
  		});
  	},
  	autoFocus: true,	      	
  	minLength: 0,
  	select: function( event, ui ) {
		var names = ui.item.data.split("|");
		id_arr = $(this).attr('id');
  		id = id_arr.split("_");					
		$('#txtkdbarang_'+id[1]).val(names[0]);
		$('#txtsatuan_'+id[1]).val(names[2]);
		$('#txtqty_'+id[1]).val(names[3]);
		$('#txtharga_'+id[1]).val(names[4]);
		$('#txtjumlah_'+id[1]).val(names[5]);
	}		      	
  });
  
  $('#txtkdbarang_'+i).autocomplete({
  	source: function( request, response ) {
  		$.ajax({
  			url : BASE_URL+'assets/include/ajax.php',
  			dataType: "json",
  			method: 'post',
			data: {
			   name_startsWith: request.term,
			   type: 'produk_table',
			   row_num : row
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						label: code[0],
						value: code[0],
						data : item
					}
				}));
			}
  		});
  	},
  	autoFocus: true,	      	
  	minLength: 0,
  	select: function( event, ui ) {
		var names = ui.item.data.split("|");
        id_arr = $(this).attr('id');
  		id = id_arr.split("_");			
		$('#txtnmbarang_'+id[1]).val(names[1]);	
		$('#txtsatuan_'+id[1]).val(names[2]);
		$('#txtqty_'+id[1]).val(names[3]);
		$('#txtharga_'+id[1]).val(names[4]);
		$('#txtjumlah_'+id[1]).val(names[5]);	
	}		      	
  });

  $('#txtsatuan_'+i).autocomplete({
  	source: function( request, response ) {
  		$.ajax({
  			url : BASE_URL+'assets/include/ajax.php',
  			dataType: "json",
  			method: 'post',
			data: {
			   name_startsWith: request.term,
			   type: 'produk_table',
			   row_num : row
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						label: code[2],
						value: code[2],
						data : item
					}
				}));
			}
  		});
  	},
  	autoFocus: true,	      	
  	minLength: 0,
  	select: function( event, ui ) {
		var names = ui.item.data.split("|");
        id_arr = $(this).attr('id');
  		id = id_arr.split("_");			
		$('#txtnmbarang_'+id[1]).val(names[0]);	
		$('#txtkdbarang_'+id[1]).val(names[1]);
		$('#txtqty_'+id[1]).val(names[3]);
		$('#txtharga_'+id[1]).val(names[4]);
		$('#txtjumlah_'+id[1]).val(names[5]);	
	}		      	
  });

  $('#txtqty_'+i).autocomplete({
  	source: function( request, response ) {
  		$.ajax({
  			url : BASE_URL+'assets/include/ajax.php',
  			dataType: "json",
  			method: 'post',
			data: {
			   name_startsWith: request.term,
			   type: 'produk_table',
			   row_num : row
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						label: code[3],
						value: code[3],
						data : item
					}
				}));
			}
  		});
  	},
  	autoFocus: true,	      	
  	minLength: 0,
  	select: function( event, ui ) {
		var names = ui.item.data.split("|");
        id_arr = $(this).attr('id');
  		id = id_arr.split("_");			
		$('#txtnmbarang_'+id[1]).val(names[0]);	
		$('#txtkdbarang_'+id[1]).val(names[1]);
		$('#txtsatuan_'+id[1]).val(names[2]);
		$('#txtharga_'+id[1]).val(names[4]);
		$('#txtjumlah_'+id[1]).val(names[5]);	
	}		      	
  });

  $('#txtharga_'+i).autocomplete({
  	source: function( request, response ) {
  		$.ajax({
  			url : BASE_URL+'assets/include/ajax.php',
  			dataType: "json",
  			method: 'post',
			data: {
			   name_startsWith: request.term,
			   type: 'produk_table',
			   row_num : row
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						label: code[4],
						value: code[4],
						data : item
					}
				}));
			}
  		});
  	},
  	autoFocus: true,	      	
  	minLength: 0,
  	select: function( event, ui ) {
		var names = ui.item.data.split("|");
        id_arr = $(this).attr('id');
  		id = id_arr.split("_");			
		$('#txtnmbarang_'+id[1]).val(names[0]);	
		$('#txtkdbarang_'+id[1]).val(names[1]);
		$('#txtsatuan_'+id[1]).val(names[2]);
		$('#txtqty_'+id[1]).val(names[3]);
		$('#txtjumlah_'+id[1]).val(names[5]);	
	}		      	
  });

  $('#txtjumlah_'+i).autocomplete({
  	source: function( request, response ) {
  		$.ajax({
  			url : BASE_URL+'assets/include/ajax.php',
  			dataType: "json",
  			method: 'post',
			data: {
			   name_startsWith: request.term,
			   type: 'produk_table',
			   row_num : row
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						label: code[5],
						value: code[5],
						data : item
					}
				}));
			}
  		});
  	},
  	autoFocus: true,	      	
  	minLength: 0,
  	select: function( event, ui ) {
		var names = ui.item.data.split("|");
        id_arr = $(this).attr('id');
  		id = id_arr.split("_");			
		$('#txtnmbarang_'+id[1]).val(names[0]);	
		$('#txtkdbarang_'+id[1]).val(names[1]);
		$('#txtsatuan_'+id[1]).val(names[2]);
		$('#txtqty_'+id[1]).val(names[3]);
		$('#txtharga_'+id[1]).val(names[4]);	
	}		      	
  });
  
	i++;
});
				
function select_all() {
	$('input[class=case]:checkbox').each(function(){ 
		if($('input[class=check_all]:checkbox:checked').length == 0){ 
			$(this).prop("checked", false); 
		} else {
			$(this).prop("checked", true); 
		} 
	});
}

function check(){
	obj=$('table tr').find('span');
	$.each( obj, function( key, value ) {
		id=value.id;
		$('#'+id).html(key+1);
	});
}
										
$('#txtnmbarang_1').autocomplete({
	source: function( request, response ) {
		$.ajax({
			url : BASE_URL+'assets/include/ajax.php',
			dataType: "json",
			method: 'post',
			data: {
			   name_startsWith: request.term,
			   type: 'produk_table',
			   row_num : 1
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						label: code[1],
						value: code[1],
						data : item
					}
				}));
			}
		});
	},
	autoFocus: true,	      	
	minLength: 0,
	select: function( event, ui ) {
		var names = ui.item.data.split("|");						
		$('#txtkdbarang_1').val(names[0]);
		$('#txtsatuan_1').val(names[2]);
		$('#txtqty_1').val(names[3]);
		$('#txtharga_1').val(names[4]);
		$('#txtjumlah_1').val(names[5]);
	}		      	
});
			      
$('#txtkdbarang_1').autocomplete({
  	source: function( request, response ) {
  		$.ajax({
  			url : BASE_URL+'assets/include/ajax.php',
  			dataType: "json",
  			method: 'post',
			data: {
			   name_startsWith: request.term,
			   type: 'txtkdbarang',
			   row_num : 1
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						label: code[0],
						value: code[0],
						data : item
					}
				}));
			}
  		});
  	},
  	autoFocus: true,	      	
  	minLength: 0,
  	select: function( event, ui ) {
		var names = ui.item.data.split("|");					
		$('#txtnmbarang_1').val(names[1]);
		$('#txtsatuan_1').val(names[2]);
		$('#txtqty_1').val(names[3]);
		$('#txtharga_1').val(names[4]);
		$('#txtjumlah_1').val(names[5]);	
	},
	open: function() {
		$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
	},
	close: function() {
		$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
	}		      	
 });

$('#txtsatuan_1').autocomplete({
  	source: function( request, response ) {
  		$.ajax({
  			url : BASE_URL+'assets/include/ajax.php',
  			dataType: "json",
  			method: 'post',
			data: {
			   name_startsWith: request.term,
			   type: 'txtsatuan',
			   row_num : 1
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						label: code[2],
						value: code[2],
						data : item
					}
				}));
			}
  		});
  	},
  	autoFocus: true,	      	
  	minLength: 0,
  	select: function( event, ui ) {
		var names = ui.item.data.split("|");					
		$('#txtnmbarang_1').val(names[0]);
		$('#txtkdbarang_1').val(names[1]);
		$('#txtqty_1').val(names[3]);
		$('#txtharga_1').val(names[4]);
		$('#txtjumlah_1').val(names[5]);	
	},
	open: function() {
		$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
	},
	close: function() {
		$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
	}		      	
 });

$('#txtqty_1').autocomplete({
  	source: function( request, response ) {
  		$.ajax({
  			url : BASE_URL+'assets/include/ajax.php',
  			dataType: "json",
  			method: 'post',
			data: {
			   name_startsWith: request.term,
			   type: 'txtqty',
			   row_num : 1
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						label: code[3],
						value: code[3],
						data : item
					}
				}));
			}
  		});
  	},
  	autoFocus: true,	      	
  	minLength: 0,
  	select: function( event, ui ) {
		var names = ui.item.data.split("|");					
		$('#txtnmbarang_1').val(names[0]);
		$('#txtkdbarang_1').val(names[1]);
		$('#txtsatuan_1').val(names[2]);
		$('#txtharga_1').val(names[4]);
		$('#txtjumlah_1').val(names[5]);	
	},
	open: function() {
		$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
	},
	close: function() {
		$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
	}		      	
 });

$('#txtharga_1').autocomplete({
  	source: function( request, response ) {
  		$.ajax({
  			url : BASE_URL+'assets/include/ajax.php',
  			dataType: "json",
  			method: 'post',
			data: {
			   name_startsWith: request.term,
			   type: 'txtharga',
			   row_num : 1
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						label: code[4],
						value: code[4],
						data : item
					}
				}));
			}
  		});
  	},
  	autoFocus: true,	      	
  	minLength: 0,
  	select: function( event, ui ) {
		var names = ui.item.data.split("|");					
		$('#txtnmbarang_1').val(names[0]);
		$('#txtkdbarang_1').val(names[1]);
		$('#txtsatuan_1').val(names[2]);
		$('#txtqty_1').val(names[3]);
		$('#txtjumlah_1').val(names[5]);	
	},
	open: function() {
		$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
	},
	close: function() {
		$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
	}		      	
 });

$('#txtjumlah_1').autocomplete({
  	source: function( request, response ) {
  		$.ajax({
  			url : BASE_URL+'assets/include/ajax.php',
  			dataType: "json",
  			method: 'post',
			data: {
			   name_startsWith: request.term,
			   type: 'txtjumlah',
			   row_num : 1
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						label: code[5],
						value: code[5],
						data : item
					}
				}));
			}
  		});
  	},
  	autoFocus: true,	      	
  	minLength: 0,
  	select: function( event, ui ) {
		var names = ui.item.data.split("|");					
		$('#txtnmbarang_1').val(names[0]);
		$('#txtkdbarang_1').val(names[1]);
		$('#txtsatuan_1').val(names[2]);
		$('#txtqty_1').val(names[3]);
		$('#txtharga_1').val(names[4]);	
	},
	open: function() {
		$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
	},
	close: function() {
		$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
	}		      	
 });