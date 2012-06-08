<?php
require_once 'includes/db.php';

$sql =$db->query('SELECT movie_id,movie_name,director_name,actor_name,actress_name,release_date FROM movies ORDER BY movie_id ASC');


var_dump($db->errorInfo());



$results=$sql->fetchAll();

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Movie Browser</title>
</head>

<body>

<?php foreach($results as $movies): ?>
<h2><a href="single.php?id=<?php echo $movies['movie_id']; ?>">
<?php echo $movies['movie_name']; ?>
</a>
</h2>
<dl>
    <dt>Movie id</dt>
		<dd><?php echo $movies['director_name']; ?></dd>
		<dt><?php echo $movies['actor_name'];?></dt>
		<dd><?php echo $movies['actress_name'];?></dd>
		<dt><?php echo $movies['release_date'];?></dt>
</dl>
<?php endforeach; ?>


</body>
</html>