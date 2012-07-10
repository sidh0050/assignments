$(document).ready(function() {
	
	$.get('includes/earth.html',function(data){
		$('#gethtml').prepend(data);
	});
	
	

	
	$('#mars').on('click',function(e){
			e.preventDefault();
		$('#gethtml').load('includes/mars.html');
		
	
		
	});
	

	
	$('#saturn').on('click',function(e){
		e.preventDefault();
		$('#gethtml').load('includes/saturn.html');
		
	
		
	});
	
	$('#venus').on('click',function(e){
		e.preventDefault();
		$('#gethtml').load('includes/venus.html');
		
	
		
	});
	
	$('#pluto').on('click',function(e){
		e.preventDefault();
		$('#gethtml').load('includes/pluto.html');
		
	
		
	});
	
	$('#sun').on('click',function(e){
		e.preventDefault();
		$('#gethtml').load('includes/sun.html');
		
	
	});
});