<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "Georgi123";
	$db = "mydata";

	$con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to Server\n");
	if(!$con){
		echo "Error : Unable to open database\n";
	}
?>
