<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="style_admin.css">
</head>


<body>



<div id="header">
<center><img src="admin_icon.png">
<h3>Welcome to Admin Panel</h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="add.php" target="_blank"> Add a Product </a></li>
	<li><a href="delete.php" target="_blank"> Delete a Product </a></li>
	<li><a href="update.php" target="_blank"> Update a Product </a></li>
 </ul>	
</div>

<div id="data">
<br><br>


<?php
    include 'dbconn.php'; 
	
	
	$sql = "SELECT * FROM data";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo "<h4>ID: </h4>" . $row["id"]. "<br>" . "  Name: " . $row["name"].  " <br> " .  "Email: " . $row["email"] .  "<br>" . "Password: " . $row["pass"]. "<br><br><br>";
	 }
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
?>
</div>
</body>
</html>