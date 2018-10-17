<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db 	= "Sales";
	
	$conn = new mysqli ($dbhost,$dbuser,$dbpass,$db);
	
	
	if($conn->connect_error){
		echo "Connection was failed";
	}
	
	
	else{
		
		echo "Connection made";
		
	}
?>