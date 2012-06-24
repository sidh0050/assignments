<?php

require_once 'includes/db.php';

$movie_id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

if(empty($movie_id)){
	header('Location:index.php');
	exit;
}

$sql= $db->prepare('DELETE FROM movies WHERE movie_id=:movie_id');
$sql->bindValue(':movie_id',$movie_id,PDO::PARAM_INT);
$sql->execute();


header('Location:index.php');
exit;
