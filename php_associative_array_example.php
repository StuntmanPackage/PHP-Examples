<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP associative array example</title>
	<style>
		.card {
			background: #808080;
			color: #FFFFFF;
			padding: 20px;
			margin: 20px;
			border-radius: 5px;
		}
	</style>
</head>

<body>

<?php
/**
 * Have fun, made by StuntmanPackage 
 * Date: February 17 2021 
 */

	$posts = array(
		["title" => "My first blog", "date" => "February 15 2021", "author" => " John"], 
		["title" => "My second blog", "date" => "February 16 2021", "author" => " Thomas"],
		["title" => "My  third blog", "date" => "February 17 2021", "author" => " Caroline"]
	);
?>

	<?php
	for ($i = 0; $i < count($posts); $i++): 
	/** 
	*You can see I'm using a : instead of a ; 
	* It's because I still need to use the for-loop in the div below. 
	*/ 
	?> 

	<div class="card"> <?php echo $posts[$i]['title']; echo "<br/>" . " Written by: " . $posts[$i]['author']; ?> </div>
	<?php endfor; 	
	/** Because I did use the : 
	* I have to use an endfor; to end the code block of the for loop.
	* Assignment: display the date on-screen using the for loop.
	*/ 
	?>

	

</body>

</html>

