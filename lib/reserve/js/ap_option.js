
$(document).ready(function(){
	$('#ap_option').change(load_new_content());
});

function load_new_content()
{
	var selected_option_value=$("#ap_option option:selected").val(); //pokupio selektovanu vrednost
//	alert(selected_option_value);
//	var jsonString = JSON.stringify(selected_option_value);
	$.ajax({
		url: "lib/reserve/db_price.php",
		type: "POST",
	//    dataType: "text",
	    cache: false,
		data: {data: selected_option_value},
		success: function(data){

		$('#price').val(data);

		},
		error: function(data)
		{
			console.log('error');
		}
	});

		$.ajax({
		url: "lib/reserve/db_calendar.php",
		type: "POST",
		cache: false,
		data: {calendar: selected_option_value},
		success: function(data)
		{
			console.log(data);
			$('#lock_days').val(data);
		//	$('#lock_days').val();
		//	$('#dp2').val(calendar);
		
		},
		error: function(data)
		{
			console.log('error');
		}
	});

}