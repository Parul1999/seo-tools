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

<h3>Admin Login</h3>
<p> Enter Account Details To Login </p> <br />

<form action="" method="post">
<input type="text" style="border-color:#000" placeholder="Username" class="form-control" name="us" autofocus="autofocus"required="required" /><br />
<input type="password" style="border-color:#000" placeholder="Password" class="form-control" name="pw" required="required" /><br />
<button type="submit" class="btn btn-block btn-outline-info" name="lo">Login</button></div>

<?php
if(isset($_POST['lo']))
{
$sql ="select * FROM admin WHERE username='$_POST[us]'AND password='$_POST[pw]'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	$_SESSION['ad']=$_POST['us'];
	echo"<script>window.location='admin/dashboard.php';</script>";
}
	else
	{
		echo"<br/><div class='alert alert-info'>Invalid Username or Password</div>";
}
}


?>
</form>
</div>
<div class="col-sm-4"></div>
</div>
<script src="js/JQ.JS"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>

