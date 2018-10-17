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
    echo "<h1><center>The record updated successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
}
}
?>

<html>
<head>
<title>Update Data</title>
</head>

<body>
   
	<h2>Update products from this menu</h2>
		<form action="update.php" method="POST">
			ID : <input type="text" name="id" value="" required><br><br>
			Product Name : <input type="text" name="pname" value="" required><br><br>
			Price : <input type="text" name="price" value="" required><br><br>
			Quantity Available : <input type="text" name="qty" value="" required><br>
	<br>
			<input type="submit" name="submit" value="Update"/></center><br><br>
			<a href='admin_panel.php'>Go back to Admin Panel</a>
</body>
</html>