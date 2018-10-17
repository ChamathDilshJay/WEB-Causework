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
    echo "<h1 style='color:red;'><center>The product deleted successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
}
}
?>

<html>
<head>
<title>Delete Data</title>
	<link rel="stylesheet" type="text/css" href="style_admin.css">
</head>

<body>
   
	<h2>Delete products from this menu</h2>
		<form action="delete.php" method="POST">
		<table>
			<tr>
			<td>ID : </td><td><input type="text" name="id" value="" required></td>
			</tr>
			<tr>
			<td></td><td><input type="submit" name="submit" value="Delete"/></td>
			</tr>
		</table>
			<br><br><br><a id='goadmin' href='admin_panel.php'>Go back to Admin Panel</a>
</body>
</html>