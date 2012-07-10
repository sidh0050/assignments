<?php 

require_once 'includes/db.php';

$sql =$db->query('SELECT Name,Content FROM planet ORDER BY Name ASC');


var_dump($db->errorInfo());



$results=$sql->fetchAll();


?>


<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>AJAX tabs</title>
<link href="css/general.css" rel="stylesheet">

</head>

<body>
<nav>


<ul class="planets">
<li id="earth"><a href="includes/earth.html">Earth</a></li>
<li id="venus"><a href="includes/venus.html">Venus</a></li>
<li id="pluto"><a href="includes/pluto.html">Pluto</a></li>
<li id="mars"><a href="includes/mars.html">Mars</a></li>
<li id="saturn"><a href="includes/saturn.html">Saturn</a></li>
<li id="sun"> <a href="includes/sun.html">Sun</a></li>

<div id="gethtml"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/ajaxtabs.js"></script>


</body>
</html>
