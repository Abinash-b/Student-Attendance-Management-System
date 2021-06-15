<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.bg-image
{background-color:rgb(157, 205, 255);
 background-image:url(https://images.static-collegedunia.com/public/college_data/images/appImage/15528_VESIT.jpg);
 background-repeat:no-repeat;
 background-position: center;
 background-size:cover;
 filter: blur(2px);
 -webkit-filter: blur(8px);
 height: 100%; 
}
.bg-text
{ 
  top: 55%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 100%;
  
}
p{
font-size:400%;
}
</style>
<body>
	<div class="bg-image " ></div>
	<div class="bg-text" >
	<center>
	   <p><b>ATTENDANCE MANAGER</b></p>
		

		<img src="https://th.bing.com/th/id/OIP.XKdZgJT9MaVBqYDg-5JlvgAAAA?pid=ImgDet&rs=1" class="mt-4" alt="admin logo" height="150" width="150"> 
		<br>
		<br>
		<div class="container-sm">
		<form method="POST">
			<div >
			<h2><b> Admin Login</b></h2>
			</div>
			<br>
			<div class="input-group mb-3 mt-3" style="width:400px;">
			<div class="input-group-prepend">
				<span class="input-group-text">Email:</span>
			</div>
			<input type="email" class="form-control" name="email" reqired="Please fill this" placeholder="Year.Example@ves.ac.in">
			</div>

			<div class="input-group mb-3" style="width:400px;">
			<div class="input-group-prepend">
				<span class="input-group-text">Password:</span>
			</div>
			<input type="password" class="form-control" name="password" reqired="Please fill this">
			</div>
		
			<br>
			<input class="btn btn-primary btn-lg" name="Login" value="Submit" type="submit">
		</form>
		</div>
		
		<br>
		<div style="margin-top:7%;">
		<marquee style="background-color: YELLOW; color:RED; font-size:200%;">Please fill with your VESIT email id</marquee>
		</div>
		
    
</center>
</div>
	
</body>
<?php
include 'connection.php';
if(isset($_POST['Login']))
{ $email=$_POST['email'];
  $pass=$_POST['password'];
  $select="select a_id from admin_data where email= '$email' AND password ='$pass';";
$ros=mysqli_query($con,$select);
$rows=mysqli_num_rows($ros);
if($rows>0)
{ 
	$_SESSION['aid']=mysqli_fetch_array(mysqli_query($con,$select))[0];
  echo "<script>alert('login succesful');</script>";
  
  header("Location:Admin_Homepage.php");
}
else
{

  echo "<script>alert('login unsuccesful check credentials');</script>";
}
}?>

</html>
