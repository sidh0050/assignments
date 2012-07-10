<?php
require_once 'includes/db.php';

$sql =$db->query('SELECT id,Price,Items FROM lists ORDER BY id ASC');


var_dump($db->errorInfo());



$results=$sql->fetchAll();

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Web Application</title>
<link href="css/general.css" rel="stylesheet">
</head>

<body>











<form method="post" action="completelist.php">
		>
	-->
		<div class="buttons">

<button value="Create your Grocery List" >Create your Grocery List </button>
</div>
	
	
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js/form-validation.js"></script>
		</div>
		
		
		
		
		
		









<img src="images/logo.jpg" alt="Logo Image" >
<h1>Sidhuz Grocery List</h1>

<div class="navigation">
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="lists.php">Lists</a></li>
<li><a href="recipies.php">Recipes</a></li>
</ul>
</div>


<p>Please select your grocery items</p>



 





 <table border="5">
<tr>
<th>Items</th>
<th>Price</th>
</tr>

<?php foreach($results as $lists): ?>


<tr>
    
		
		
	<td><input type="checkbox" name="item[]" value="<?php echo $lists['Items'];?>"  /><?php echo $lists['Items'];?></td>
	<td><?php echo $lists['Price'];?></td>		
</tr>
<?php endforeach; ?>
</table>


	</form>



 



<div class="footerhome">
<ul>
<a href="home.php">Home</a>
<p>Make grocery list free</p>
<p>Available items</p>
<p>Information about items</p>
</ul>
</div>

<div class="footerlists">
<ul>
<a href="lists.php">Lists</a>
<p>Grocery lists</p>
<p>Different items list</p>
<p>Available items list</p>
</ul>
</div>

<div class="footerrecipies">
<ul>
<a href="recipies.php">Recipes</a>
<p>Free recipes</p>
<p>Free recipes books</p>
<p>Recipes List</p>
</ul>
</div>

<div class="copyright">
<p>copyrightme@satti 2009-2012</p>
</div>
</div>

 
 
 
 

</body>
</html>
