$(document).ready(function() {
	
	$.get('includes/earth.php',function(data){
		$(#gethtml).prepend(data);
	});
	
	

	
	$('#mars').on('click',function(e){
			e.preventDefault();
		$(gethtml).load('includes/mars.php');
		
	
		
	});
	

	
	$('#saturn').on('click',function(e){
		e.preventDefault();
		$(gethtml).load('includes/saturn.php');
		
	
		
	});
	
	$('#venus').on('click',function(e){
		e.preventDefault();
		$(gethtml).load('includes/venus.php');
		
	
		
	});
	

	
	$('#jupiter').on('click',function(e){
		e.preventDefault();
		$(gethtml).load('includes/jupiter.php');
		
	
	});
});