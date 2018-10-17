<?php
 
include 'dbconn.php';
 error_reporting(0);
  $pname = $_POST['pname'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
  
if(!$_POST['submit']){
	
  echo " ";
  
}

else {

$sql = "INSERT INTO data (pname,price,qty)
VALUES ('$pname', '$price', '$qty')";

if (mysqli_query($dbcon, $sql)) {
    echo "<h1 style='color:red;'><center>New product added successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
}
}
?>

<html>
<head>
<title>Add Data</title>
	<link rel="stylesheet" type="text/css" href="style_admin.css">
</head>

<body>
   
	<h2>Add new products from this menu</h2>
		<form action="add.php" method="POST">
		<table>
			<tr>
			<td>Product Name : </td><td><input type="text" name="pname" value="" required></td>
			</tr>
			<tr>
			<td>Price : </td><td><input type="text" name="price" value="" required></td>
			</td>
			<tr>
			<td>Quantity Available : </td><td><input type="text" name="qty" value="" required></td>
			</tr>
			<tr>
			<td></td><td><input type="submit" name="submit" value="Add"/></td>
			</tr>
		</table>
			<br><br><br><a id='goadmin' href='admin_panel.php'>Go back to Admin Panel</a>
</body>
</html>