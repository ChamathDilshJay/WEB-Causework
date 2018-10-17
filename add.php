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
    echo "<h1><center>New record created successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
}
}
?>

<html>
<head>
<title>Add Data</title>
</head>

<body>
   
	<h2>Add new products from this menu</h2>
		<form action="add.php" method="POST">
			Product Name : <input type="text" name="pname" value="" required><br><br>
			Price : <input type="text" name="price" value="" required><br><br>
			Quantity Available : <input type="text" name="qty" value="" required><br>
	<br>
			<input type="submit" name="submit" value="Add"/></center><br><br>
			<a href='admin_panel.php'>Go back to Admin Panel</a>
</body>
</html>