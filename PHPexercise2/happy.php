<!DOCTYPE html>
<head>
<title>Feelings</title>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
	img {
		width: 100%;
	}
</style>
</head>
<body>
<header class="w3-container w3-purple">
<h1>Hurrah, I'm so glad you're feeling happy!</h1> 
</header>
<div class="w3-content w3-image">
<img src="happy.jpg" class="w3-image"> 
<div class="w3-title w3-text-white">
<?php
	print "<p>time</p>";
	date("l jS \of F Y h:i:s A");

// display a series of random images - PHP form solution 

// (c) 2004 David Pankhurst - use freely, but please leave in my credit 

$images=array( "happy.jpg","sad.jpg","fruity.jpg"); 
$selected =([0,1,2]);  
    print $images; 
    print $selected;	
?>
	 
</div>
<footer class="w3-container w3-purple w3-row w3-row-padding w3-large">
	<div class="w3-card-16 w3-white w3-third w3-center">
		<a href="happy.php">Click here to feel happy!</a>
	</div>
	<div class="w3-card-16 w3-white w3-third w3-center">
		<a href="sad.php">Click here to feel sad!</a>
	</div>
	<div class="w3-card-16 w3-white w3-third w3-center">
		<a href="fruity.php">Click here to feel fruity!</a>
	</div>
</footer>
</body>
</html>

