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
    	//include('conn.php');
    	$id=$_GET['id'];
     
    	$username=$_POST['username'];
    	$password=$_POST['password'];
    	$email=$_POST['email'];
		$EncryptPassword = md5($password);
     
    	mysqli_query($conn,"update `person` set username='$username', password='$EncryptPassword', email='$email' where Id='$id'");
    	header('location:index.php');
    ?>