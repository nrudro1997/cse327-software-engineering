<?php
	Error_reporting (1);

	$con=Mysqli_connect("localhost","root","","librarysystem");
	if ($con==false)
   	{
		echo "The connection of database is unsuccessfull"; // error message
	}
?>
