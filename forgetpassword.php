<?php include 'dbfile.php' ?> 
<?php session_start();?>
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

<h3>Forget Password</h3>
<p> Enter the following details and check your email-id.</p> <br />
<form action="" method="post">
<input type="email" placeholder="Email id" class="form-control" name="ea" /><br/>
<button type="submit" class="btn btn-block btn-outline-info" name="fp">Send Link</button>
<a href="login.php">Back to login page</a>
</form>
<?php
if(isset($_POST['fp'])){
$code=rand(1000,9999);
$_SESSION['code']=$code;
$eid=$_POST['ea'];
require 'PHPMailer-master/PHPMailerAutoload.php';
$email = "bhatiamegha19@gmail.com";
$password = "fakeaccount";
$to_id =$eid;
$subject ='Recover Password';
$message = "<p><a href='http://localhost/fproject/recoverpassword.php?id=$eid'>Click here</a>To recover your password and your verify code is </p>".$code."<p><b>Regards</b></p><p>WEB OF TOOLS</p>";
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
echo "<div class ='alert alert-success' style='padding:2px;'> Link Sent.. Check Your Email-Id..</div>";
}}
?>
</div>
</div>
</div>
</div></div>

<?php include 'footer.php'?>
