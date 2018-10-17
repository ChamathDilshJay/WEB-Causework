<!DOCTYPE html>
<html>
<head>
	<title>Aura Mobile</title>
	<link rel="stylesheet" type="text/css" href="style_index.css">
</head>
<body>
	<center><h1>Aura Mobile</h1>
	<h3>The Online Mobile Store</h3>
	<a href="login.php"><img src="adm_login.png"></a><br></center>

	<?php
    include 'dbconn.php'; 
	
	$sql = "SELECT * FROM data";
	$result = mysqli_query($dbcon, $sql);
echo "<h2>Available product list</h2>";
if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {	
    echo "ID: " . $row["id"]. "<br>" . "  Product Name: " . $row["pname"].  " <br> " .  "Price : " . $row["price"] .  "<br>" . "Quantity Available : " . $row["qty"]. "<br><br><br>";
	 }
} else {
    echo "<h3><center>No products available!<center></h3>";
}
?>



</body>
</html>