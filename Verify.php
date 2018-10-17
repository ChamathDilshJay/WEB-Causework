<?php 
include 'dbconn.php';
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="Select * from loginform where username='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($dbcon,$sql);
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
	echo"<hr>";
	
	echo "Go To Admin Page";
	
	echo"<hr>";
	echo "<a href='admin_panel.php'>Admin Panel</a>";
        exit();
    }
    else{
        echo " You Have Incorrect Details";
	echo '<hr>';	
	echo "Retry By Clicking The link below";
	
	echo '<hr>';	
	echo "<a href='Login.php'>Go Back</a>";
 
        exit();
    }
        
}
?>
