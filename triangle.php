<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700"
	rel="stylesheet">
<title>Triangle</title>
</head>
<body>

<?php  include 'meniu.php';?>
<h1>Check your Triangle!</h1>

	<form action="triangle.php" method="post" class="forma">

		<label for="fname">A:</label><br>
		<input type="text" name="a" class="triangleInput"><br> 
		<label for="fname">B:</label><br>
		<input type="text" name="b" class="triangleInput"><br>
		<label for="fname">C:</label><br>
		<input type="text" name="c" class="triangleInput"><br>
		<input  type="submit" name="submit" value="Submit"><br>
</form>
<div class="price">
	<?php
		if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])&& $_POST['a']!="" && $_POST['b']!="" && $_POST['c']!="")   {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
        
        if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) { 
            echo "Yes, this is a triangle!";
        } else {
            echo "No, this is not a triangle!";}}
       
        ?> </div>
	
</body>
</html>