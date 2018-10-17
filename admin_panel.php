<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="style_admin.css">
</head>


<body>



<div id="header">
<center><img src="admin_icon.png">
<h3>Aura Mobile Admin Panel</h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="add.php"> Add a Product </a></li>
	<li><a href="delete.php"> Delete a Product </a></li>
	<li><a href="update.php"> Update a Product </a></li>
 </ul>
 <br>
 <div align='center'>	
 <a id="button1" href='index.php'>Logout</a>
</div>
 <br><br><br>

</div>

<div id="data">
<br><br>


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
</div>
</body>
</html>