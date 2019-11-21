<!DOCTYPE html>
<html>
<head>
	<title>Loop</title>
	<style>
		
	</style>
</head>
<body bgcolor="lavender">
	<p style="color: darkgrey; font-family: sans-serif; font-size: 16;">
	<?php //For Loop statement
		$a = 0;
		$b = 0;

		for($i=0; $i < 2; $i++){
			$a += 10;
			$b += 5;
		}
		echo "At the end of te loop a = $a and b = $b.";
	?>
	<br><br>
	<?php //While loop
		$i = 0;
		$num = 5;
		while($i < 2){
		$num--;
		$i++;
		}
		echo "Loop stopped at i = $i and num = $num.";
	?>
	<br><br>
	<?php //Do While loop
	$i = 0;
	$num = 0;
	do{
		$i++;
	}while($i < 10);
		echo "Loop stopped at i = $i.";
	?>
	<br><br>
	<?php //Foreach loop
		$fruits = array ('Guava','Apple','Mango','Orange');
		foreach($fruits as $fruit){
			echo "List of fruits: $fruit<br>";
		}
	?>
	</p>
	<br>
	<a href="welcome.php"> Back </a>
</body>
</html>