<?php include 'header.php' ?>
<?php include 'sidebar.php'?>

<?php
$sql="SELECT * From userregister Where email='$_SESSION[un]'";
$result=$conn->query($sql);
if($result->num_rows>0)
$row=$result->fetch_assoc();
?>
<h4>Edit Profile</h4>
<hr />
<div class="container mt-2 pt-2">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">

<div class="row">
<div class="col-md-12">

<form action="" method="post">
<div class="row">
<div class="col-md-6">
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-user"></i></span>
<input type="text" value="<?php echo $row['username'];?>" name="fn" placeholder="Full Name" class="form-control" />  
</div>
</div>
<div class="col-md-6">
<input type="date" value="<?php echo $row['dob'];?>" name="dob" placeholder="D.O.B" class="form-control"  />
</div>
 <br /><br />
 
 <div class="col-md-12">
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-address-book"></i></span>
<input type="text" value="<?php echo $row['address'];?>" name="ad" placeholder="Address" class="form-control"  />
</div>
</div>
 <br /><br />
 
 <div class="col-md-6">
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
<input type="number" value="<?php echo $row['phone'];?>" name="ph" placeholder="Phone No." class="form-control"  />
</div>
</div>
 <br /><br />
 
 <div class="col-md-6">
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
<input type="text" value="<?php echo $row['city'];?>" name="ct" placeholder="Enter City" class="form-control"  />
</div>
</div>
 <br /><br />
 <div class="col-md-6">
 <div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-pin"></i></span>
<input type="text" value="<?php echo $row['pincode'];?>" name="pin" placeholder="Pincode" class="form-control" />
</div>
</div>
 <br /><br />

<div class="col-md-6">
 <input type="text" value="<?php echo $row['gender'];?>" class="form-control" placeholder="Gender" name="rd"/>
 </div>
<br /><br />


 <div class="col-md-12">
<label> <b>About : </b></label>
<textarea  class="form-control" name="abt" rows="5" maxlength="500"  ><?php echo $row['about'];?> </textarea> <br /> 
<button type="Submit" class="btn btn-block btn-outline-info" name="sbmt"><b>SUBMIT</button></b><br /><br />
</form>
<?php
if(isset($_POST['sbmt']))
{
	$sql="UPDATE  userregister set username='$_POST[fn]', address='$_POST[ad]', phone='$_POST[ph]', city='$_POST[ct]', pincode='$_POST[pin]', dob='$_POST[dob]',gender='$_POST[rd]', about='$_POST[abt]' Where email='$_SESSION[un]';";
	if($conn->query($sql)===true){
		echo "<br> <script> window.location='editmyprofile.php';</script></div>";
	}
	else{
		echo "<br> <div class='alert alert-danger'>
		<i class='icofont icofont-2x icofont-delete'></i>&nbsp;&nbsp; Error".$sql."".$conn->error."</div>";
	}}
	?>
    </div>
    <div class="col-md-2"></div>
</div></div>
    <?php include 'footer.php' ?>
