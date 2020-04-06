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

<h3> Recover Password</h3>
<p>Enter the OTP sent on your Email-Id and then enter your new password.</p> <br />

<form action="" method="post">
<input type="text" placeholder="OTP" class="form-control" name="otp" /><br/>
<input type="password" placeholder="New Password" class="form-control" name="np" /><br/>
<input type="password" placeholder="Confirm Password" class="form-control" name="cp" /><br/>
<button type="Submit" class="btn btn-block btn-outline-info" name="reg"><b>DONE</b></button>
</form>
<?php
if(isset($_POST['reg']))
	{
		if($_POST['otp']==$_SESSION['code'])
		{
			if($_POST['np']==$_POST['cp'])
			{
				$sql="UPDATE userregister set password='$_POST[np]' where
				email='$_GET[id]';";
				if($conn->query($sql)==true)
				{
					echo"<script>window.alert('Password Changed Successfully');</script>";
				}
				else
				{
					echo"Error:".sql."<br>".$conn->error;
				}
			}
				else
				{
					echo"Password not Matched";
				}
			}
			else
				{
					echo"Enter Correct OTP";
				}
		}
?>
</div>
</div>
</div>
</div>
</div>
</div>
<div style='margin-top:-20px'> 
<?php include 'footer.php'?></div>
