<!DOCTYPE html>
<html>
<head>
	<title>Aura Mobile</title>
	<link rel="stylesheet" type="text/css" href="style_index.css">
</head>
<body>
	<div>
	<center><h1>Aura Mobile</h1>
	<h3>The Online Mobile Store</h3>
	</div>
	<a href="login.php"><img src="adm_login.png" height="75px" width="75px"></a><br></center>

	<?php
    include 'dbconn.php'; 
	
	$sql = "SELECT * FROM data";
	$result = mysqli_query($dbcon, $sql);
echo "<h2>Our Products</h2><br><br>";
if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {	
    echo "<table><tr><td>" . "<img src='mobile.png' height='150px' width='75px'></td><td>" . "<br>" . "ID: " . $row["id"]. "<br>" . "  Product Name: " . "<span id='prname'>" .$row["pname"]. "</span>" . " <br> " .  "Price : " . $row["price"] .  "<br>" . "Quantity Available : " . $row["qty"]. "<br>" . "<a id='buynow' href='#'>Buy Now</a>" . "</td></tr></table><br><br>";
	 }
} else {
    echo "<h3><center>No products available!<center></h3>";
}
?>

</body>
</html>