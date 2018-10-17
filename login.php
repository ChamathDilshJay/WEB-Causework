<!DOCTYPE html>
<html>
	<head>
 		<title> Login</title>
 			<link rel="stylesheet" type="text/css" href="style_login.css">
	</head>
	<body>
 		<div class="container">
 			<img src="login.png"/>
 			<form method="POST" action="Verify.php">
 				<div class="form-input">
 			<input type="text" name="username" placeholder="Enter the username"/> 
 				</div>
 				<div class="form-input">
 					<input type="password" name="password" placeholder="Enter the password"/><br><br>
 				</div>
 				<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
 			</form>
 		</div>
	</body>
</html>
