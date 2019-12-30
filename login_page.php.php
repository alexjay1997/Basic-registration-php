<?php
    	session_start();
    	//start connection
$conn=mysqli_connect("localhost","root","","insert");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
// end connection
    ?>
	
    <!DOCTYPE html>
    <html>
    <head>
    <title>Login page</title>
    </head>
    <body>
    	<h2>Login Form</h2>
    	<form method="POST" action="login_function.php">
    	<label>Username:</label> <input type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username">
    	<label>Password:</label> <input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password"><br><br>
    	<input type="checkbox" name="remember"> Remember me <br><br>
    	<input type="submit" value="Login" name="login">
    	</form>
     
    	<span>
    	<?php
    		if (isset($_SESSION['message'])){
    			echo $_SESSION['message'];
    		}
    		unset($_SESSION['message']);
    	?>
    </span>
    </body>
    </html>