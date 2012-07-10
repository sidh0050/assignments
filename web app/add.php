<?php
require_once 'includes/db.php';
$errors=array();

$id=filter_input(INPUT_GET,'recipes_id',FILTER_SANITIZE_NUMBER_INT);
$recipes_ingredients=filter_input(INPUT_POST,'recipes_ingredients',FILTER_SANITIZE_STRING);
$recipes_directions=filter_input(INPUT_POST,'recipes_directions',FILTER_SANITIZE_STRING);


if($_SERVER['REQUEST_METHOD']=='POST'){
	
		//$errors['recipes_ingredients']=true;
	}
	if(empty($recipes_directions)) {
		$errors['recipes_directions']=true;
	}
	
	
	
	if(empty($errors)){
	require_once 'includes/db.php';
	
	$sql = $db->prepare('INSERT INTO recipies(recipes_id,recipes_ingredients,recipes_directions)
	VALUES(:recipes_id,:recipes_ingredients,:recipes_directions)');
	
	$sql->bindValue(':recipes_id',$recipies_id,PDO::PARAM_STR);
	$sql->bindValue(':recipes_ingredients',$recipes_ingredients,PDO::PARAM_STR);
	$sql->bindValue(':recipes_directions',$recipes_directions,PDO::PARAM_STR);
	
	
	$sql->execute();
	
	header('Location:recipies.php');
	exit;
	
	
	
	}


?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add New recipie</title>


<link href="css/general.css" rel="stylesheet">
</head>

<body>
<div class="addrecipie">
<h1>Add New Recipe </h1>





<form method="post" action="add.php">

<div>
<label for="recipes_ingredients">
Recipies Ingredients 
<?php if(isset($errors['recipes_ingredients'])):?>
<strong class="errors">Recipes ingredients  are required</strong>
<?php endif; ?>
</label>

<input id="recipes_ingredients" name="recipes_ingredients" required value="<?php echo $recipes_ingredients; ?>">
</div>





<div>
<label for="recipes_directions">
Recipes Directions 
<?php if(isset($errors['recipes_directions'])):?>
<strong class="errors"></strong>
<?php endif; ?>
</label>
<input id="recipes_directions" name="recipes_directions" required value="<?php echo $recipes_directions; ?>">
</div>











<button type="add">Add</button>
</form>
</div>
</body>
</html>