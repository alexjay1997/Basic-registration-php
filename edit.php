<?php
//start connection
$conn=mysqli_connect("localhost","root","","insert");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
// end connection
?>


    <?php
    	
		
    	$id=$_GET['id'];
    	$query=mysqli_query($conn,"select * from `person` where Id='$id'");
    	$row=mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Edit info</title>
    </head>
    <body>
    	<h2>Edit</h2>
    	<form method="POST" action="update.php?id=<?php echo $id; ?>">
    		<label>Username:</label><input type="text" value="<?php echo $row['username']; ?>" name="username"></br>
    		<label>password:</label><input type="password" value="<?php echo $row['password']; ?>" name="password"></br>
    		<label>Email:</label><input type="email" value="<?php echo $row['email']; ?>" name="email"></br>
    		<input type="submit" name="submit" value="update"></br>
    		<a href="index.php">Back</a>
    	</form>
    </body>
    </html>