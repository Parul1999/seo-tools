<?php include 'header.php'?>
<?php include 'sidebar.php'?>

<h4>Support and Services</h4>
<hr />

<div class="container mt-2 pt-2">
<div class="row">
<div class="col-md-3"></div><div class="col-md-6">
<h6>HOW CAN WE HELP? </h6>
<p>Thank You for sending us a message.We will get back to you shortly.</p>
<form action="" method="post">
<input type="text" placeholder="Subject" name="sub" class="form-control" autofocus required/>
 <br/>
<textarea placeholder="Message" class="form-control" rows="9" name="msg" required></textarea><br/>
<button type="submit" class="btn btn-block btn-outline-info"  name="submit"><b>SUBMIT</b></button>
</form>
<?php

if(isset($_POST['submit']))
{
$sql="INSERT INTO supportnservices(subject,message,msgon)values('$_POST[sub]','$_POST[msg]','$dt');";
if($conn->query($sql)==TRUE)
{
echo"<br/><div class='alert alert-success'>We will come back to you.</div>";
}else{
echo"Error:".$sql."<br>".$conn->error;
}}

?></div>
<div class="col-md-2"></div>
</div>
<?php include 'footer.php'?>

