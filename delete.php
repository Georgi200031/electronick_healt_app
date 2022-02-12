<?php
	include("connection.php"); 
	$con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to server\n");
	$egn = $_REQUEST['egn'];
    $query ="DELETE FROM patien WHERE egn = '$egn'";
	$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
	header('Location: view_and_delete_patient.php');
	pg_close($con);
?>
