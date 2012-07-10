<?php

require_once 'includes/db.php';

$id= filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);



$sql=$db->prepare('SELECT recipes_id,recipes_ingredients,recipes_directions FROM recipies WHERE id=:id');

//bind VAlue(placeholder,variables,datatype)
$sql->bindValue(':id' ,$id, PDO:: PARAM_INT);
$sql->execute();
$results=$sql->fetch();


?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><title><?php $results['recipes_id']; ?>&middot; recipies</title>
</title>
</head>

<body>
<h1><?php echo $results['recipes_ingredients']; ?></h1>

<dl>
    <dt>Recipes id</dt>
		<dd><?php echo $results['recipes_id']; ?></dd>
		<dt>Recipes ingredients</dt>
		<dd><?php echo $results['recipes_ingredients'];?></dd>
		<dt>Recipes directions</dt>
		<dd><?php echo $results['recipes_directions'];?></dd>
		
		
		
</dl>

<a href="delete.php?id=<?php echo $id; ?>">Delete</a>

</body>

</html>