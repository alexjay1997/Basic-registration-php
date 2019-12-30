<?php

	session_start();
 
//	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	//	header('location:main_page.php');
	//	exit();
	//}

	if (isset($_SESSION['id']) && $_SESSION['id'] == true) {
   
} else {
    header('Location: login_page.php');
}
	
	
	
	

$conn=mysqli_connect("localhost","root","","insert");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}


	$query=mysqli_query($conn,"select * from user where userId='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);

?>

<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">

<title>test</title>

<style>
*{
	margin:0px;
}

	body{
		background-image:url("img/pexel.jpg");
	background-size:cover;
	}
	
	#first{color:#ffffff;}

</style>
</head>
<body>

 <?php

  if(isset($_POST['save']))
{
	
	//start..  check if the data or user is already exist in the database before inserting!!
$check="SELECT * FROM person WHERE username = '$_POST[username]'";
$result = mysqli_query($conn,$check);
$data = mysqli_fetch_array($result, MYSQLI_NUM);
if($data[0] > 1) {
   // echo "User Already in Exists <br/>";
   
   echo '<script type="text/javascript">alert("User already exist!");</script>';
}
    //end.. check if the data is already exist in the database
else
{	
	
	

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];

//para sa encryption ng password ---
$EncryptPassword = md5($password);
//end encrypt

//no encryption not secure ---!
   // $sql = "INSERT INTO person (username, password, email) VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";
   // no encryption  end!
   
       $sql = ("INSERT INTO person (fname,lname,username, password, email) VALUES ('$fname','$lname','$username','$EncryptPassword','$email')");

    $result = mysqli_query($conn,$sql);
}
//end of inserting data to database!---
}
?>

<?php
//funtion for searching data from database and display in table---
if (isset($_POST['search-btn']))
{	
$search_text = $_POST['search_text'];
    // search in all table columns

	
 $query = "SELECT * FROM `person` WHERE CONCAT(`id`,`fname`,`lname`,`username`, `password`, `email`) LIKE '%".$search_text."%'";
    $search_result = filterTable($query);


}	
else{
	
	$query = "SELECT * FROM `person`";
	$search_result = filterTable($query);
	
	

	
}

function filterTable($query)
{

	$conn=mysqli_connect("localhost","root","","insert");
	$filter_Result =mysqli_query($conn, $query);
	return $filter_Result;

}
?>


<div class="header" style="background:rgba(32, 32, 32, 0.76);overflow:hidden;">
	<div class="logo" style="width:55%;padding:20px;margin:0px auto;float:left;">
		<h2 style="font-family:calibri;text-align:center;color:white;padding-left:120px;">Basic Registration System</h2>
		
		</div>
		
		<!--logout button start-->
	<div class="user_logout_button" style="width:35%;float:right;line-height:70px;color:#ffffff;font-family:calibri;">
	<?php echo $row['username']; ?>&nbsp;&nbsp;
	
	<a href="logout_function.php"style="text-decoration:none;border:1px solid grey;padding-left:20px;padding-right:20px;padding-top:10px;padding-bottom:10px;color:#ffffff;border-radius:20px;width:500px;">Logout</a>
	</div>
	<!--logout button end!!-->
	
			</div>

<div class="register" id="registration" style="box-shadow: 2px 7px 3px #1d1d1d;background:rgba(70,70,70,0.69);width:20%; border:0px solid #eee;margin:0 auto;justify-content:center;align-items:center;display:flex;position:relative;top:40px;padding:30px;">


<form action="index.php" method="post" style="border;"> 
<h2 style="font-family:calibri;text-align:center;color:#ffffff;">Register</h2><br>


<input type="text" name="fname" placeholder="Firstname" style="width:30vh;padding:5px;border:1px solid #EEE;" required/><br/><br/>

<input type="text" name="lname" placeholder="Lastname" style="width:30vh;padding:5px;border:1px solid #EEE;" required/><br/><br/>

<input type="text" name="username" placeholder="Username"style="width:30vh;padding:5px;border:1px solid #EEE;" required/><br/><br/>


<input type="password" name="password" placeholder="Password" style="width:30vh;padding:5px;border:1px solid #EEE;" required/><br/><br/>

<input type="text" name="email" placeholder="Email"style="width:30vh;padding:5px;border:1px solid #EEE;" required/><br/>
</br>
<button type="submit" name="save" style="cursor:pointer;width:100%;padding:10px;background-color:#2da2d8;border:none;color:#ffffff;">Save</button>
<p  onclick="showdata()" style="cursor:pointer;padding:10px;background-color:#229b66;border:none;color:#ffffff;margin-top:7px;text-align:center;font-family:calibri;">View</p>

</form>

</br></br>

</div>


<br>
<br>
<br>
<br>
<!--display Info From database!!... start -->
<div id="info" style="border:0px solid #eee;position:relative;top:0px;width:80%;margin:0 auto;background:rgba(70,70,70,0.69);display:none;padding:10px;">
<br>
		

		<h2 style="text-align:center;font-family:calibri;color:#ffffff;">Personal Info</h2><p  onclick="hide_info()" style="float:right;position:relative;top:-46px; margin:10px;cursor:pointer;width:2.4%;padding:10px;background-color:#d73240;border:none;color:#ffffff;text-align:center;font-family:calibri;font-size:15px;">X</p></br>
		
		
		<form  action="index.php" method="post" style="border:0px solid red;align-items:center;justify-content:center;display:flex;">
		<input type ="text" name="search_text" style="padding:10px;width:30%;border-radius:4px;border:1px solid #eeee;"placeholder="Search..." />
		<input type="submit" name="search-btn" style="padding:10px;width:13%;color:#ffffff;background-color:#77b961;border:none;border-radius:4;font-family:calibri;margin-left:5px;" value="Search"></br>
		</form></br>
		<table  style="width:100%;padding:10px;overflow:auto;">
		
			<thead style="background-color:#eee;margin:0px;">
			
			<th style="padding:10px;text-align:center;">Id</th>
				<th style="padding:10px;text-align:center;">Firstname</th>
				<th style="padding:10px;text-align:center;">Lastname</th>
				<th style="padding:10px;text-align:center;">Username</th>
				<th style="padding:10px;text-align:center;">Password</th>
				<th style="padding:10px;text-align:center;">Email</th>
				<th style="padding:10px;text-align:center;">Action</th>
				
			</thead>
			<tbody>
				<?php
				
				// conncetion to database!! start 
				$conn=mysqli_connect("localhost","root","","insert");

				if(!$conn)
					{
				die("Connection failed: " . mysqli_connect_error());
				}
					// conncetion to database!! end 
				
				
					$query=mysqli_query($conn,"select * from `person`");
					while($row=mysqli_fetch_array($search_result)){
						?>
						<tr style="background-color:#eee;margin:0px;">
							<td style="padding:10px;text-align:center;"><?php echo $row['Id']; ?></td>
							<td style="padding:10px;text-align:center;"><?php echo $row['fname']; ?></td>
							<td style="padding:10px;text-align:center;"><?php echo $row['lname']; ?></td>
							
							<td style="padding:10px;text-align:center;"><?php echo $row['username']; ?></td>
							<td style="padding:10px;text-align:center;"><?php echo $row['password']; ?></td>
							<td style="padding:10px;text-align:center;"><?php echo $row['email']; ?></td>
							<td style="padding:10px;text-align:center;">
								<!--<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a> -->
								
								
								<!--edit and Delete Button-->
								<a href="edit.php?id=<?php echo $row['Id']; ?>" style="text-decoration:none;border:1px solid #eee;padding:5px;background-color:#2da2d8;margin:px;color:#ffffff;font-family:calibri;">Edit</a>
								<a href="delete.php?id=<?php echo $row['Id']; ?>" style="text-decoration:none;border:1px solid #eee;padding:5px;background-color:#df3564;margin:px;color:#ffffff;font-family:calibri;">Delete</a>
								
								<!--edit and Delete Button end!!-->
							</td>
						</tr>
						<?php
					}
				?>
				

			</tbody>
		</table>
		
		
</div>
<!--display end-->








<script>
function showdata(){
	
	document.getElementById("info").style.display="block";
	document.getElementById("registration").style.display="none";
	document.getElementById("hide_info").style.display="none";
	
	
	
}

function hide_info(){
	
	
	document.getElementById("info").style.display="none";
	document.getElementById("registration").style.display="flex";
	
	
}
	
</script>

</body>
</html>
