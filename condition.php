<!DOCTYPE html>
<html>
<head>
	<title>Condition Example</title>
</head>
<body>
	<?php
		$a = 5;
		if($a < 10){
			echo "$a is less than 10";
		}
		else if($a == 5){
			echo "they are equal";
		}
		else{
			echo "10 is greater tan $a";
		}
	?>

	<?php
		echo "<p>";
		$letter = 'z';
		switch($letter){
			case 'a':
				echo "it is a";
				break;

			case 'b':
				echo "it is b";
				break;

			default:
				echo "not in the list";
				break;
		}
	?>

	<a href="welcome.php"> Back </a>
</body>
</html>