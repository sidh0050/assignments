<?php
require_once'includes/db.php';
$errors=array();

$id=filter_input(INPUT_GET,'movie_id',FILTER_SANITIZE_NUMBER_INT);
$movie_name=filter_input(INPUT_POST,'movie_name',FILTER_SANITIZE_STRING);
$director_name=filter_input(INPUT_POST,'director_name',FILTER_SANITIZE_STRING);
$actor_name=filter_input(INPUT_POST,'actor_name',FILTER_SANITIZE_STRING);
$actress_name=filter_input(INPUT_POST,'actress_name',FILTER_SANITIZE_STRING);
$release_date=filter_input(INPUT_POST,'release_date',FILTER_SANITIZE_NUMBER_INT);


if($_SERVER['REQUEST_METHOD']=='POST'){
	if (strlen($movie_name) <1 ||strlen($movie_name) >256 ){
		$errors['movie_name']=true;
	}
	if(empty($director_name)) {
		$errors['director_name']=true;
	}
	if(empty($actor_name)) {
		$errors['actor_name']=true;
	}
	
	if(empty($actress_name)) {
		$errors['actress_name']=true;
	}
	if(empty($release_date)) {
		$errors['release_date']=true;
	}
	
	
	if(empty($errors)){
	require_once 'includes/db.php';
	
	$sql = $db->prepare('INSERT INTO movies(movie_name,director_name,actor_name,actress_name,release_date)
	VALUES(:movie_name,:director_name,:actor_name,:actress_name,:release_date)');
	
	$sql->bindValue(':movie_name',$movie_name,PDO::PARAM_STR);
	$sql->bindValue(':director_name',$director_name,PDO::PARAM_STR);
	$sql->bindValue(':actor_name',$actor_name,PDO::PARAM_STR);
	$sql->bindValue(':actress_name',$actress_name,PDO::PARAM_STR);
	$sql->bindValue(':release_date',$release_date,PDO::PARAM_INT);
	
	$sql->execute();
	
	header('Location:index.php');
	exit;
	
	
	
	}
}

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add New Movie In Database</title>
</head>

<body>

<h1>Add New Movie In Database</h1>

<form method="post" action="add.php">

<div>
<label for="movie_name">
Movie Name
<?php if(isset($errors['movie_name'])):?>
<strong class="errors"> Movie Name is required</strong>
<?php endif; ?>
</label>

<input id="movie_name" name="movie_name" required value="<?php echo $movie_name; ?>">
</div>





<div>
<label for="director_name">
Director Name
<?php if(isset($errors['director_name'])):?>
<strong class="errors">Director name is required</strong>
<?php endif; ?>
</label>
<input id="director_name" name="director_name" required value="<?php echo $director_name; ?>">
</div>


<div>
<label for="actor_name">
Director Name
<?php if(isset($errors['actor_name'])):?>
<strong class="errors">Actor name is required</strong>
<?php endif; ?>
</label>
<input id="actor_name" name="actor_name" required value="<?php echo $actor_name; ?>">
</div>



<div>
<label for="actor_name">
Actor Name
<?php if(isset($errors['actor_name'])):?>
<strong class="errors">Actor name is required</strong>
<?php endif; ?>
</label>
<input id="actor_name" name="actor_name" required value="<?php echo $actor_name; ?>">
</div>



<div>
<label for="actor_name">
Actress Name
<?php if(isset($errors['actress_name'])):?>
<strong class="errors">Actress name is required</strong>
<?php endif; ?>
</label>
<input id="actress_name" name="actress_name" required value="<?php echo $actress_name; ?>">
</div>



<div>
<label for="release">
Release Date
<?php if(isset($errors['release_date'])):?>
<strong class="errors">Release Date is required</strong>
<?php endif; ?>
</label>
<input id="release_date" name="release_date" required value="<?php echo $release_date; ?>">
</div>









<button type="submit">Add</button>
</form>
</body>
</html>