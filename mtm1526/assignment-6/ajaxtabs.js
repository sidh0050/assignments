$(document).ready(function() {
	
	$.get('includes/earth.php',function(data){
		$().prepend(data);
	});
	
	

	
	$('#mars').on('click',function(e){
			e.preventDefault();
		$().load('includes/mars.php');
		
	
		
	});
	

	
	$('#saturn').on('click',function(e){
		e.preventDefault();
		$().load('includes/saturn.php');
		
	
		
	});
	
	$('#venus').on('click',function(e){
		e.preventDefault();
		$().load('includes/venus.php');
		
	
		
	});
	

	
	$('#jupiter').on('click',function(e){
		e.preventDefault();
		$().load('includes/jupiter.php');
		
	
	});
});