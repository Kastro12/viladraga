$(document).ready(function(){

$('a[href^="#"]').click(function(e){

	var linkHref = $(this).attr('href');
	
	$('html, body').animate({
		scrollTop: $(linkHref).offset().top}, 1000);

	e.preventDefault();
});

});