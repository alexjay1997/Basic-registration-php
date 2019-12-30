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
	<style>
	
	body{background-image:url("img/pexel.jpg");
	background-size:cover;}
	</style>
    </head>
    <body>
		<div class="login" style="border:1px solid #eeee;padding:20px;width:250px;margin:0px auto;position:relative;top:140px;font-family:calibri;box-shadow:10,10,10,10;background:rgba(70,70,70,0.5);">
    	<h2 style="color:#ffffff;">Admin login</h2>
    	<form method="POST" action="login_function.php" style="width:35%;">
    	<label style="color:#ffffff;"></label> <input style="width:230px;padding:5px;border:1px solid grey;" placeholder="Username" type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username"></br></br>
    	<label style="color:#ffffff;"></label> <input style="width:230px;padding:5px;border:1px solid grey;" placeholder="Password" type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password"><br><br>
		
		<div style="width:200px;">
    	<input type="checkbox" name="remember" ><span style="color:#ffffff;">Remember me </span><br><br>
		</div>
    	<input type="submit" value="Login" style="border:1px solid white;width:130px;padding:7px;font-family:calibri;margin-left:55px;background:rgba(0,0,0,0);color:#ffffff;font-size:16px;border-radius:20px;cursor:pointer;" name="login">
    	</form>
     
    	<span>
    	<?php
    		if (isset($_SESSION['message'])){
    			echo $_SESSION['message'];
				echo '<script type="text/javascript">alert("Login Failed!");</script>';
    		}
    		unset($_SESSION['message']);
    	?>
    </span>
		</div>
    </body>
    </html>