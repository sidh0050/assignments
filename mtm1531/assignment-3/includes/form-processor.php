<?php 
$errors=array();

$name = filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);

$email =filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

$Username = filter_input(INPUT_POST, 'Username',FILTER_SANITIZE_STRING);

$password=filter_input(INPUT_POST,'password',FILTER_UNSAFE_RAW);

$message =filter_input(INPUT_POST,'message',FILTER_SANITIZE_STRING);

$information =filter_input(INPUT_POST,'information',FILTER_SANITIZE_NUMBER_INT);

$language=filter_input(INPUT_POST,'language',FILTER_SANITIZE_STRING);

$notes =filter_input(INPUT_POST,'notes',FILTER_SANITIZE_STRING);



if($_SERVER['REQUEST_METHOD']== 'POST') {
	
	//0 is considered empty
	//empty:0,false,null,'',array(),'0'
	if(empty($name)) {
		$errors['name']=true;
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$errors['email']=true;
	}
	
	if(empty($Username)) {
		$errors['User name']=true;
	}
	if(mb_strlen($Username)<0 ||mb_strlen($Username)>25){
		$errors['User name']=true;
	}
	
	
	
	
	if(!array_key_exists($information,$possible_information)){
		$errors['information']=true;
	}
	
	
	
	
	
	if(mb_strlen($message)<5 ||mb_strlen($message)>100){
		$errors['message']=true;
	}
	
	
	
	
	//this is the way to represent info in checkbox to display an error messages
	if(!isset($_POST['terms'])){
		$errors['terms']=true;
	}
	
	
	if($language!='English' ||$language !='French' ||$language!='Spanish'){
		$errors['language']=true;
		
		if(empty($notes)) {
		$errors['notess']=true;
	}
	}
	
	if(empty($password)) {
		$errors['password']=true;
	}
	
	
	
	
	
	
	if (empty($errors)){
		$headers ='From:=' .$name. '<' .$email. '>';
		mail('sidh0050@algonquincollege.com',$possible_subjects[$subject],$message,$headers);
	}
}