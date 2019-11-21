<!DOCTYPE html>
<html>
<head>
<style>
	a{
	font-family: sans-serif;
	size: 20px;
	color: #CC3333;
	}
	body{
		background-color: #99CCFF
	}
	button:hover{
		transition: 1s;
		background-color: grey;
		border-style: none;
		cursor: pointer;
		box-shadow: 1px 1px 10px black;
	}
</style>
	<title>Hello World</title>
</head>
<body bgcolor="white">
	<center>
	<h1>
	<?php
	echo "Hello, World!";?><br>
	</h1>
	
	<a href="welcome.php" style="color: green">  Welcome </a>
		
		<p style="size: 16px; font-family: initial; color: #993333">Choose a page you desire.</p> <br>
		<div style="border:1px solid black; position: center; box-shadow: 1px 1px 10px black; color: #33FF66; width: 300px;">
		<a href="welcome.php"><button> Welcome </button></a><br><br>
		<a href="string.php"><button>String 1 </button></a><br><br>
		<a href="string2.php"><button> String 2 </button></a><br><br>
		<a href="string3.php"><button> String 3 </button></a><br><br>
		<a href="wspace.php"><button> WSpace </button></a><br><br>
		<a href="loop.php"><button> Loop </button></a><br><br>
		<a href="getpost.php"><button> GetPost</button></a><br><br>
		<a href="displaymethod.php"><button> Display Method </button></a><br><br>
		<a href="condition.php"><button> Condition </button></a><br><br>
		</div>
		</center>
</body>
</html>