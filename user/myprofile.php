<?php include 'header.php' ?>
<?php include 'sidebar.php'?>
<?php 
$sql="select *FROM userregister where email='$_SESSION[un]'";
$result=$conn->query($sql);
if($result->num_rows>0)
$row=$result->fetch_assoc();
?>
<h4>Profile Information</h4>
<hr /> <br />
<div class="container mt-2 pt-2">
<div class="row">
<div class="col-md-8">
<p> UserName :  <?php echo $row['username'];?></p>
<p><i class="icofont icofont-calendar text-info "></i> Registered on :  <?php echo $row['registeron'];?></p> 
 <i class="icofont icofont-female text-info"></i>Gender : <?php echo $row['gender'];?> &nbsp; &nbsp;
 <i class="icofont icofont-baby text-info"></i> Date of Birth: <?php echo $row['dob'];?> </p><hr />
<h5> Contact Info : </h5> <hr />
<p> <i class="icofont icofont-email text-info"></i> Email ID <?php echo $row['email'];?> </p>
<hr />
<p> <i class="icofont icofont-phone text-info"></i> Phone No <?php echo $row['phone'];?> </p>
<hr />
<h6> Address </h6>
<p> <i class="icofont icofont-location-pin text-info"></i> <?php echo $row['address'];?> </p>
<hr />
<p>  <?php echo $row['city'];?> &nbsp; &nbsp; Pincode : <?php echo $row['pincode'];?> </p>

</div>
<div class="col-md-4">
<img src='<?php echo $row['image']?>' width='100%' height="200px" /><br/><br/>
<form action="" method="post">
<button type="submit" name="chg" class="btn btn-outline-info">Click here to change Image</button>
</form>
<?php
if(isset($_POST['chg']))
{?>
<form action="" method="post" enctype="multipart/form-data">
<br/><input type="file" name="image" class=" form-control btn-outline-info" /><br/>
<button name="upload" type="submit" class="btn btn-info">Upload</button>
</form>
<?php
}
if (isset($_POST['upload']))
{
	$target_dir="upload/";
	$target_file=$target_dir.basename($_FILES["image"]["name"]);
	$filesize=$_FILES["image"]["size"];
	$filetype=pathinfo($target_file,PATHINFO_EXTENSION);
	$upload_ok=1;
	if($filesize>2097152)
	{
		$upload_ok=0;
		echo"File is too large";
	}
	if($filetype!="jpg"&& filetype!="png" && filetype!="jpeg")
	{
		echo" Sorry, only JPG,PNG,JPEG are allowed";
		$upload_ok=0;
	}
	if($upload_ok==1)
	{
		if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
		{
		echo "the file".basename ($_FILES["image"]["name"])."has been uploaded";
		}
		else
		{
		echo "sorry , there is error in uploading file .";
		}
		$sql="UPDATE userregister set image='$target_file' where email='$_SESSION[un]';";
		
		if($conn->query($sql)===TRUE)
		{
			echo"<br/> <script> window.location='myprofile.php'; </script></div>";
		}
		else
		{
			echo"<br> <div class='alert alert_danger'><i class='icofont icofont-2x icofont-delete'></i>&nbsp;&nbsp; Error".$sql."".$conn->error."</div>";
			
		}
}}
 		?>
        </div>
</div>
</div></div>
<?php include 'footer.php'?>
