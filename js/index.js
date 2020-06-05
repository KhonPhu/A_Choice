function myFunction() {
    alert("WELCOME TO ONLINE PHONE ACCESSORIES STORE");
  }


$(document).ready(function(){  
    
	$( "#price_range" ).slider({
		range: true,
		min: 0,
		max: 20000,
		values: [ <?php echo $minimum_range; ?>, <?php echo $maximum_range; ?> ],
		slide:function(event, ui){
			$("#minimum_range").val(ui.values[0]);
			$("#maximum_range").val(ui.values[1]);
			load_product(ui.values[0], ui.values[1]);
		}
	});
	
	load_product(<?php echo $minimum_range; ?>, <?php echo $maximum_range; ?>);
	
	function load_product(minimum_range, maximum_range)
	{
		$.ajax({
			url:"function.php",
			method:"POST",
			data:{minimum_range:minimum_range, maximum_range:maximum_range},
			success:function(data)
			{
				$('#load_product').fadeIn('slow').html(data);
			}
		});
	}
	
});  