<?php

require_once 'includes/db.php';

$Name= filter_input(INPUT_GET,'Name', FILTER_SANITIZE_NUMBER_INT);
$Content= filter_input(INPUT_GET,'Content', FILTER_SANITIZE_NUMBER_INT);



$sql=$db->prepare('SELECT Name,Content FROM planet WHERE name=:name');


$sql->bindValue(':Name' ,$Name, PDO:: PARAM_INT);
$sql->execute();
$results=$sql->fetch();


?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><title><?php $results['Name']; ?>&middot; Planet/title>
</title>
</head>

<body>
<h1><?php echo $results['name']; ?></h1>

<dl>
    <dt>Content</dt>
		<dd><?php echo $results['Content']; ?></dd>
		
</dl>

<a href="delete.php?id=<?php echo $id; ?>">Delete</a>
<a href="edit.php?id=<?php echo $id; ?>">Edit</a>
</body>
</html>