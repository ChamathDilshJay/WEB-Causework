<?php
 
include 'dbconn.php';
 error_reporting(0);
  $id = $_POST['id'];
  
if(!$_POST['submit']){
	
  echo " ";
  
}

else {

$sql = "DELETE FROM data WHERE id='$id' ";

if (mysqli_query($dbcon, $sql)) {
    echo "<h1><center>The record deleted successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
}
}
?>

<html>
<head>
<title>Delete Data</title>
</head>

<body>
   
	<h2>Delete products from this menu</h2>
		<form action="delete.php" method="POST">
			ID : <input type="text" name="id" value="" required><br><br>
	<br>
			<input type="submit" name="submit" value="Delete"/></center><br><br>
			<a href='admin_panel.php'>Go back to Admin Panel</a>
</body>
</html>