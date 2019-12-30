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
    	//include('conn.php');
    	mysqli_query($conn,"delete from `person` where Id='$id'");
    	header('location:index.php');
    ?>