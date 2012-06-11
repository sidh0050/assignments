<?php

	require_once'includes/db.php';
$errors=array();

$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$dino_name=filter_input(INPUT_POST,'dino_name',FILTER_SANITIZE_STRING);
$loves_meat=filter_input(INPUT_POST,'loves_meat',FILTER_SANITIZE_NUMBER_INT);
$in_jurassic_park=(isset($_POST['in_jurassic_park']))?1:0;

if($_SERVER['REQUEST_METHOD']=='POST'){
	if (strlen($dino_name) <1 ||strlen($dino_name) >256 ){
		$errors['dino_name']=true;
	}
	
	if(!in_array($loves_meat,array(0,1))){
		$errors['loves_meat']=true;
	}
	
	if(empty($errors)){

	
	$sql = $db->prepare('INSERT INTO dinosaurs(dino_name,loves_meat,in_jurassic_park)
	VALUES(:dino_name,:loves_meat,:in_jurassic_park)');
	
	$sql->bindValue(':dino_name',$dino_name,PDO::PARAM_STR);
	$sql->bindValue('loves_meat',$loves_meat,PDO::PARAM_INT);
	$sql->bindValue('in_jurassic_park',$in_jurassic_park,PDO::PARAM_INT);
	$sql->execute();
	
	header('Location:index.php');
	exit;
	
	
	}
}else {

	$sql=$db->prepare('
	SELECT dino_name,loves_meat,in_jurassic_park
	FROM dinosaurs
	WHERE id=:id
	');
	$sql->bindValue(':id',$id,PDO::PARAM_INT);
	$sql-execute();
	$results=$sql->fetch();
	
	$dino_name=$results['dino_name'];
	$dino_name=$results['loves_meat'];
	$dino_name=$results['in_jurassic_park'];
	
}

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add New Dinosaur</title>
</head>

<body>

<h1>Add New Dinosaur</h1>

<form method="post" action="add.php">

<div>
<label for="dino_name">
Dinosaur Name
<?php if(isset($errors['dino_name'])):?>
<strong class="errors">is required</strong>
<?php endif; ?>
</label>

<input id="dino_name" name="dino_name" required value="<?php echo $dino_name; ?>">
</div>

<fieldset>
<legend>
Relationship With Meat
<?php if(isset($errors['loves_meat'])):?>
<strong class="error">is required</strong>
<?php endif; ?>

</legend>
<input type="radio" id="love" name="loves_meat" value="1"
<?php if($loves_meat==1): ?>checked<?php endif;?>>
<label for="love">Loves Meat</label>

<input type="radio" id="hate" name="loves_meat" value="0"
<?php if($loves_meat==0): ?>checked<?php endif;?>>
<label for="hate">Hates Meat</label>
</fieldset>

<div>
<input type="checkbox" id="in_jurassic_park" name="in_jurassic_park">
<?php if($in_jurassic_park==1): ?>checked<?php endif;?>
<label for="in_jurassic_park">In Jurassic Park?</label>
</div>

<button type="save">Save</button>
</form>
</body>
</html>