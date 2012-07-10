$(document).ready(function() {
		
	$('#earth').on('click',function(e){
			e.preventDefault();
	$('fillme').load('earth.php');
	});
	
	

	
	$('#mars').on('click',function(e){
			e.preventDefault();
	$('fillme').load('mars.php');
		
	
		
	});
	

	
	$('#saturn').on('click',function(e){
		e.preventDefault();
		$('fillme').load('saturn.php');
		
	
		
	});
	
	$('#venus').on('click',function(e){
		e.preventDefault();
		$('fillme').load('venus.php');
		
	
		
	});
	

	
	$('#jupiter').on('click',function(e){
		e.preventDefault();
		$('fillme').load('jupiter.php');
		
	
	});
});