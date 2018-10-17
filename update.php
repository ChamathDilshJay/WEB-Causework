<?php
 
include 'dbconn.php';
 error_reporting(0);
  $id = $_POST['id'];
  $pname = $_POST['pname'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
  
if(!$_POST['submit']){
	
  echo " ";
  
}

else {

$sql = "UPDATE data SET pname='$pname', price='$price', qty='$qty' WHERE id='$id' ";

if (mysqli_query($dbcon, $sql)) {
    echo "<h1 style='color:red;'><center>The product updated successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
}
}
?>

<html>
<head>
<title>Update Data</title>
	<link rel="stylesheet" type="text/css" href="style_admin.css">
</head>

<body>
   
	<h2>Update products from this menu</h2>
		<form action="update.php" method="POST">
		<table>
			<tr>
			<td>ID : </td><td><input type="text" name="id" value="" required></td>
			</tr>
			<tr>
			<td>Product Name : </td><td><input type="text" name="pname" value="" required></td>
			</tr>
			<tr>
			<td>Price : </td><td><input type="text" name="price" value="" required></td>
			</tr>
			<tr>
			<td>Quantity Available : </td><td><input type="text" name="qty" value="" required></td>
			</tr>
			<tr>
			<td></td><td><input type="submit" name="submit" value="Update"/></td>
			</tr>
		</table>
			<br><br><br><a id='goadmin' href='admin_panel.php'>Go back to Admin Panel</a>
</body>
</html>