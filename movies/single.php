<?php

require_once 'includes/db.php';

$id= filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);



$sql=$db->prepare('SELECT movie_id,movie_name,director_name,actor_name,actress_name,release_date FROM movies WHERE movie_id=:id');

//bind VAlue(placeholder,variables,datatype)
$sql->bindValue(':id' ,$id, PDO:: PARAM_INT);
$sql->execute();
$results=$sql->fetch();


?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><title><?php $results['movie_name']; ?>&middot; movies</title>
</title>
</head>

<body>
<h1><?php echo $results['movie_name']; ?></h1>

<dl>
    <dt>Movie id</dt>
		<dd><?php echo $results['movie_id']; ?></dd>
		<dt>Movie name</dt>
		<dd><?php echo $results['movie_name'];?></dd>
		<dt>Director name</dt>
		<dd><?php echo $results['director_name'];?></dd>
		<dt>Actor name</dt>
		<dd><?php echo $results['actor_name'];?></dd>
		<dt>Actress name</dt>
		<dd><?php echo $results['actress_name'];?></dd>
		<dt>Release date</dt>
		<dd><?php echo $results['release_date'];?></dd>
		
</dl>

<a href="delete.php?id=<?php echo $id; ?>">Delete</a>
</body>
</html>