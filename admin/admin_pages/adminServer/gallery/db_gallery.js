
// UNOS NOVIH SLIKA

$(document).ready(function(){
	$('#insert').on('click', function(){
	//	console.log('radii');
	
		$('.modal').modal();
		$('#save').on('click', function(){

			var dataArray ={
				"img_name": $('#img_name').val(),
				"category": $('#category option:selected').val(),
				"title": $('#title').val()
			};
			
			//var jsonString = JSON.stringify(dataArray);

			$('.modal').modal('hide');

			$.ajax({
				url:'/admin/admin_pages/adminServer/gallery/insert_img.php',
				method: 'POST',
			//	dataType: 'JSON',
				data: {data: dataArray},
				success: function(data){
					window.location.reload();
				},
				error: function(data){
					console.log('ne salje');
				}
			});

		});

			$('#close').on('click', function(){
				dataArray=undefined;
				window.location.reload();
			});


	});  	
});

		//BRISANJE SLIKA

$(document).ready(function(){
	$(document).on('click', '#delete_img', function(){
		var element = this;
		var img = $(element).attr('value');

		if (confirm('Are You Sure?')){
   		//	console.log(img);

   		$.ajax({
   			url: '/admin/admin_pages/adminServer/gallery/delete_img.php',
   			method: 'GET',
   			data: {image: img},
   			success: function(data)
   			{
   				
   					window.location.reload();
   			},
   			error: function(data)
   			{
   				alert('greska');
   			}
   		});


			}
			else
			{ 
				img = undefined;
				
				
			}

	}); 
});