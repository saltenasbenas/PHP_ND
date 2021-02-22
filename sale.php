<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700"
	rel="stylesheet">
<title>Sales</title>
</head>
<body>

<?php  include 'meniu.php';?>
<h1>Check your Price!</h1>

	<form action="sale.php" method="post" class="formaSale">

		<label for="fname">How many you will buy? You can get 3% discount from 1000 pcs and 4% discount from 2000 pcs:</label><br>
		<input type="text" name="a" class="triangleInput"><br> 
		
		<input  type="submit" name="submit" value="Submit"><br>
</form>
	<div class="price">
	<?php
		
		if (isset($_POST['a']) && $_POST['a']!="" )   {
        
		$a = $_POST['a'];
     
       
        if ($a >= 1000)  { 
            
            echo ( $a*0.28)*0.97;}
            else if($a >= 2000){
                echo($a*0.28)*0.96;}
                else if($a <1000){
                    echo $a*0.28;}
           
        }?> </div>	

</body>
</html>