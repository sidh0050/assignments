<?php

$planet='';

 if(isset($_GET['planet'])){
		 $planet=strtolower($_GET['planet']);
		 
 }
 ?>
 
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Progressive enhancement</title>
<link href="css/general.css" rel="stylesheet">
</head>

<body>

<nav>
<ul>
<li <?php if(($planet!='mars')&&($planet!='jupiter')&&($planet!='venus')&&($planet!='saturn')){?>class="current"<?php }?>><a href="?planet=earth">Earth</a></li>
<li<?php if($planet == 'mars'){ ?> class="current"<?php }?>><a href="?planet=Mars"> Mars</a></li>
<li<?php if($planet =='jupiter'){ ?> class="current"<?php } ?>><a href="?planet=Jupiter"> Jupiter</a></li>
<li<?php if ($planet =='venus'){ ?> class="current"<?php } ?>><a href="?planet=venus"> Venus</a></li>
<li<?php if ($planet =='saturn'){ ?> class="current"<?php } ?>><a href="?planet=saturn"> saturn</a></li>
</ul>
</nav>

<article>
<?php

   
	 switch($planet) {
		 
	
	 
	 
	 case 'mars' :
		 include 'includes/mars.php';
		 break;
		 
		 case 'jupiter' :
		 include 'includes/jupiter.php';
		 break;
		 
		 case 'venus' :
		 include 'includes/venus.php';
		 break;
		 
		  
		 case 'saturn' :
		 include 'includes/saturn.php';
		 break;
		 
		 case 'earth':
		 default:
	 include 'includes/earth.php';
	 break;
	 
 }
?>
</article>
</body>
</html>