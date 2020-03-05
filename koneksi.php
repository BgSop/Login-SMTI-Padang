<?php 
	//$base_url = "http://localhost/SMTI%20PROGRAMMING/SMTI%20MYSQLI/";
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$db 	= "db_smti_program";

	$koneksi = mysqli_connect($host,$user,$pass,$db) or die(mysqli_connect_error());
 ?>