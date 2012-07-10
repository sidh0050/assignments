<?php
require_once 'includes/db.php';

$sql =$db->query('SELECT recipes_id,recipes_ingredients,recipes_directions FROM recipies ORDER BY recipes_id ASC');


var_dump($db->errorInfo());



$results=$sql->fetchAll();

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Recipies Page</title>
<link href="css/general.css" rel="stylesheet">
</head>

<body>



<img src="images/logo.jpg" alt="Logo Image" >
<h1>Sidhuz Grocery List</h1>

<div class="navigation">
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="lists.php">Lists</a></li>
<li><a href="recipies.php">Recipies</a></li>
</ul>
</div>

<div class="images">
<img src="images/noodles.jpg" alt="Noodles Image" >
<img src="images/tikka.jpg" alt="Tikka Image" >

</div>


<div class="maincontent">
<h1>Ingredients</h1>
<ol>
<li>Boneless Chicken 1 kg</li>
<li>Garlic (crushed) 2 tsp</li>
<li>Salt as per taste</li>
<li>Onions (sliced) 3 medium</li>
<li>Tomatoes (boiled and blended) 3 medium</li>
<li>Yogurt (whipped) 1/2 cup</li>
<li>Red Chilli Powder 1 tbsp</li>
<li>Salt</li>
<li>Red peeper-one</li>
<li>Green pepper-one</li>
<li>Hing-1 spoon</li>

</ol>

<h1>Directions</h1>
<p>To make the stock, boil 1/2 kg chicken bones in pot with 6-8 cups of water<br>
 until only two cups of stoke remain.To avoid heek,add one small whole pe<br>
eled onion and 2-4 black pepper corns when it comes to a boil.In a earthen<br>
ware pot,boil one onion and 1 teaspoon of garlic in the stock.</p>
<h1>Ingredients</h1>
<ol>
<li>1 cup (2 sticks, 8 ounces) unsalted butter</li>
<li>1 1/2 teaspoons salt</li>
<li>2 teaspoons vanilla extract</li>
<li>1 tablespoon baking powder</li>
<li>1 1/2 cups (10 1/2 ounces) sugar</li>
<li>3 large eggs</li>
<li>4 1/2 cups (19 ounces) King Arthur Unbleached All-Purpose Flour</li>
<li>1 cup (8 ounces) milk</li>
</ol>
<h1>Directions</h1>
<p>Add the flour to the wet ingredients alternately with the milk, beginning<br>
 and ending with the flour. Do this gently; there’s no need to beat the batter.<br>
Using a muffin scoop, drop the dough onto the prepared cookie sheets. Flat<br>
ten each mound of dough to a circle about 1 ½" across; wet your fingers or<br> 
a knife, or grease the bottom of a drinking glass or measuring cup to do this<br>
. Leave 2" to 2 1⁄2" between each cookie, for expansion.<br>
</p>
</div>

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
<a href="recipies.php">Recipies</a>
<p>Free recipies</p>
<p>Free recipies books</p>
<p>Recipies List</p>
</ul>
</div>

<div class="copyright">
<p>copyrightme@satti 2009-2012</p>
</div>



<div class="recipes">
	
<a href="add.php">Add A New Recipe</a>

<?php foreach($results as $recipes): ?>
<h2><a href="single.php?id=<?php echo $recipes['recipes_id']; ?>">
<?php echo $recipes['recipes_ingredients']; ?>
</a>
</h2>
<dl>
    <dt>recipies id</dt>
		<dd><?php echo $recipes['recipes_id']; ?></dd>
		<dt><?php echo $recipes['recipes_ingredients'];?></dt>
		<dd><?php echo $recipes['recipes_directions'];?></dd>
		
</dl>
<?php endforeach; ?>
</div>


</body>

</html>