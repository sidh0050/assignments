<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add New Dinosaur</title>
</head>

<body>

<h1>Add New Dinosaur</h1>

<form method="post" action="add.php">

<div>

<label for="dino_name">Dinosaur Name</label>
<input id="dino_nmae" name="dino_name" required>
</div>

<fieldset>
<legend>Relationship With Meat</legend>
<input type="radio" id="love" name="loves_meat" value="1">
<label for="love">Loves Meat</label>

<input type="radio" id="hate" name="loves_meat" value="0">
<label for="hate">Hates Meat</label>
</fieldset>

<div>
<input type="checkbox" id="in_jurassic_park" name="in_jurassic_park">
<label for="in_jurassic_park">In Jurassic Park?</label>
</div>

<button type="submit">Add</button>
</form>
</body>
</html>