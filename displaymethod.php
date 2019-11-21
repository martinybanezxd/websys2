<?php
if (isset($_REQUEST["lname"]) || isset($_REQUEST["age"]) || isset($_REQUEST["pass"])) 
	if (preg_match("/[^A-Za-z'-]/",$_REQUEST['pass'] )) {
     echo "Welcome ". $_REQUEST['lname']. "<br />";
     echo "You are ". $_REQUEST['age']. " years old.". "<br />" ;
     echo "Your password is ".$_REQUEST['pass']." is safe.". "<br / >";
  }
  else{
  		die("Password complexity does not meet. Your password must contain 1 Uppercase and 1 lowercase and 1 number.");

  }

?>

<a href="index.php"> Back </a>
