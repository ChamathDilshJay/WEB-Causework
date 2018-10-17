<?php
 
include 'connection.php';
 error_reporting(0);
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $pass = $_POST['Pass'];
  
if(!$_POST['submit']){
	
  echo "All feilds must be filled";
  
}

else {
 
$sql = "INSERT INTO data (name,email,pass)
VALUES ('$name', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>New record created successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<html>
<head>
<title>Add Data</title>
</head>

<body>
   
	<h2>Add Updates from this menu</h2>
		<form action="add.php" method="POST">
			Name: <input type="text" name="Name" value="" required><br><br>
			Email: <input type="email" name="Email" value="" required><br><br>
			Password: <textarea rows="4" cols="50" name="Pass" value="" required></textarea><br>
	<br>
			<input type="submit" name="submit" value="add"/></center>
</body>
</html>