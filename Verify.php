<!DOCTYPE html>
<html>
<head>
    <title>Aura Mobile</title>
    <link rel="stylesheet" type="text/css" href="style_index.css">
</head>
<body>

<?php 
include 'dbconn.php';
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="Select * from loginform where username='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($dbcon,$sql);
    if(mysqli_num_rows($result)==1){
        echo "<h2>You Have Successfully Logged in</h2>";
	    echo "<br><br><a id='verify' href='admin_panel.php'>Continue to Admin Panel >></a>";

        exit();
    }
    else{
        echo "<h2><img src='stop.png' height='22px' width='22px'> Incorrect Username or Password</h2>";
        echo "<br><br><a id='verify' href='login.php'><< Go back to Login</a>";
 
        exit();
    }
        
}
?>

</body>
</html>
