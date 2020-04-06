<?php include 'header.php' ?>
<?php 
$sql="select *FROM userregister where userid='$_GET[id]'";
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
<img src='../user/<?php echo $row['image']?>' width='100%' height="200px" /><br/><br/>
        </div>
</div>
</div></div>
<?php include 'footer.php'?>
