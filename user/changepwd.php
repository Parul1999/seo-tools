<?php include 'header.php'?>
<?php include 'sidebar.php'?>
<h4>Change Password</h4>
<hr />

<div class="container mt-2 pt-2">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<p align="center">If you'd like to change your password, enter your current and new passwords here. Otherwise, leave them all blank. </p>
  <form action="" method="post">
    <br /> 
<input type="password" style="border-color:#000" placeholder="Current Password" class="form-control" name="epwd" required="required" /><br />
<input type="password" style="border-color:#000" placeholder="New Password" class="form-control" name="npwd" required="required"/><br />
<input type="password" style="border-color:#000" placeholder="Confirm Password" class="form-control" name="rpwd" required="required"/><br />
<button type="Submit" class="btn btn-block btn-outline-info" name="reg"><b>SUBMIT</b></button>
</form>
<?php
if(isset($_POST['reg']))
{
	$sql="SELECT password from userregister WHERE email='$_SESSION[un]';";
    $result=$conn->query($sql);
	if($result->num_rows>0)
	$row=$result->fetch_assoc();
	$pwd=$row['password'];
	if($_POST['epwd']==$pwd)
	{
		if($_POST['npwd']==$_POST['rpwd'])
		{
			$sql="update userregister set password='$_POST[npwd]' where email='$_SESSION[un]';";
			if($conn->query($sql)==TRUE)
			echo"<script>window.alert('Password Changed Successfully');</script>";
			else
			echo"error:".$sql."</br>".$conn->error;
		}
		else
		echo"<script>window.alert('Retype Password Not Matched');</script>";
	}
	else
	echo"<script>window.alert('Existing Password Not Matched');</script>";
}
?>
	</div>
</div>
<script src="../js/JQ.JS"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>