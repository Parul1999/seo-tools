<?php include 'dbfile.php' ?> 
<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/icofont.css" rel="stylesheet" />
</head>
<body>
<div class="row pt-1" style="background-color:#000;" >
<div class="col-md-3">
<h2><b><a href="index.php" style="text-decoration:none; color:#fff;">W-Tool Studio</a></b></h2>
</div>
<div class="col-md-3"></div>
<div class="col-md-6" style="color:#FFF; text-align:right">
<i class="icofont icofont-earth">wtoolstudio@gmail.com</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i class="icofont icofont-mobile-phone">18008998098</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<!--after 1st row-->
<div class="container-fluid bg-info  pt-5 pb-5">
<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">

<div class="bg-white p-5 rounded">

<h3> Sign In</h3>
<p> Enter Account Details To Login </p> <br />

<form action="" method="post">
<br/>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-user-alt-6"></i></span>
<input type="email" placeholder="Email Address" class="form-control" name="ea" autofocus="autofocus"required="required" /></div><br />
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-lock"></i></span>
<input type="password" placeholder="Password" class="form-control" name="pw" required="required" /></div><br />
<button type="submit" class="btn btn-block btn-outline-info"  name="lo">Login</button><br/>
<a href="forgetpassword.php">Forgot Password?</a><br/>
<a href="register.php">Are you new to our Website?</a>
<?php
if(isset($_POST['lo']))
{
$sql ="select *FROM userregister WHERE email='$_POST[ea]'AND password='$_POST[pw]'";
$result=$conn->query($sql);
if($result->num_rows>0){
	$row=$result->fetch_assoc();
	$_SESSION['un']=$_POST['ea'];
	$_SESSION['nm']=$row['username'];
if(isset($_GET['t'])){
	if($_GET['t']=='key')
	echo"<script>window.location='keyword.php';</script>";
	if($_GET['t']=='link')
	echo"<script>window.location='linkextractor.php';</script>";
	if($_GET['t']=='source')
	echo"<script>window.location='viewsource.php';</script>";
	}
else
	echo"<script>window.location='user/myprofile.php';</script>";
}
	else

		echo"<br/><div class='alert alert-info'>Invalid Username or Password</div>";

}


?>
</form> 

</div>
</div>
</div>
</div>
</div>

<script src="js/JQ.JS"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>

