<?php include 'dbfile.php' ?>
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

<h3>Create an account</h3>
<p> Enter Details to register to our website </p> <br />
<form action="" method="post">
<br />
<div class="input-group">
<span class="input-group-addon"> <i class="icofont icofont-user-alt-5"></i></span>
<input type="text"  style="border-color:#000" placeholder="First Name" class="form-control" name="fn" autofocus="autofocus" required="required"/></div><br />
<div class="input-group">
<span class="input-group-addon"> <i class="icofont icofont-email"></i></span>
<input type="email"style="border-color:#000" placeholder="Email Adress" class="form-control" name="ea" required="required" /></div><br />
<div class="input-group">
<span class="input-group-addon"> <i class="icofont icofont-ui-lock"></i></span>
<input type="password" style="border-color:#000" placeholder="Password" class="form-control" name="pwd" required="required" /></div><br />
<div class="input-group">
<span class="input-group-addon"> <i class="icofont icofont-ui-unlock"></i></span>
<input type="password" style="border-color:#000" placeholder="Confirm Password" class="form-control" name="cpw" required="required"/></div><br />
<button type="Submit" class="btn btn-block btn-outline-info" name="reg"><b>SIGN UP</b></button>
<a href="login.php"><p align="center"><font color="#000">Already Registered?</font></p></a>
<?php
if(isset($_POST['reg']))
{
$sql="select *from userregister where email='$_POST[ea]'";
$result=$conn ->query($sql);

if($result->num_rows>0)
echo"Email Id Already Exist";
else
{
	if($_POST['pwd']==$_POST['cpw'])
	
	{$dp='user/default.png';
	
$sql ="INSERT INTO userregister(username,email,password,image,registeron)values('$_POST[fn]','$_POST[ea]','$_POST[pwd]','$dp','$dt');";
if($conn->query($sql)==TRUE)
{
	$us=$_POST['fn'];
require 'PHPMailer-master/PHPMailerAutoload.php';
$email = "bhatiamegha19@gmail.com";
$password = "fakeaccount";
$to_id =$_POST['ea'];
$subject ='Thank you for starting';
$message = "Hello".$us.",

Thank you for your interest in [your product]. I appreciate you taking the time to test out our tools to [main benefit of your tool].

Here are some additional resources that you can use to get the most out of [your product]: [First resource topic], [Second resource topic], [Third resource topic]  

If you have any questions our support team is available to help you [hours your support team is available].

Sincerely,

[Your name]";
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo"<script>window.location='login.php';</script>";
}}

else
{echo "Error".$sql."".$conn->error;
	
	
}}

echo "Retype Password does not match";
	}}
?>
<!--echo "<div class ='alert alert-success' style='padding:2px;'>Registered Successfully </div>"; write this instead of 
echo"<script>window.location='login.php';</script>"; if you dont want to redirect instead just show that registered successfully-->
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