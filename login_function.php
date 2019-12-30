<?php
    	if(isset($_POST['login'])){
     
    		session_start();
			
    		    	//start connection
$conn=mysqli_connect("localhost","root","","insert");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
// end connection
     
    		$username=$_POST['username'];
    		$password=$_POST['password'];
     
    		$query=mysqli_query($conn,"select * from `user` where username='$username' && password='$password'");
     
    		if (mysqli_num_rows($query) == 0){
    			
				 $_SESSION['message']="";
				
	
				
    			header('location:login_page.php');

    		}
    		else{
    			$row=mysqli_fetch_array($query);
     
    			if (isset($_POST['remember'])){
    				//set up cookie
    				setcookie("user", $row['username'], time() + (86400 * 30)); 
    				setcookie("pass", $row['password'], time() + (86400 * 30)); 
    			}
     
    			$_SESSION['id']=$row['userId'];
    			header('location:index.php');
    		}
    	}
    	else{
    		header('location:login_page.php');
    		$_SESSION['message']="Please Login!";
    	}
    ?>