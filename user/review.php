<?php include 'header.php'?>
<?php include 'sidebar.php'?>

<h4>Review</h4>
<hr />

<div class="container mt-2 pt-2">
<div class="row">
<div class="col-md-3"></div><div class="col-md-6">
<h6>WE'D LOVE TO HEAR YOUR FEEDBACK </h6>
<p>Your feedback will help us continue to improve our services, organization and support.</p>
<p>If you wish to receive a response to your feedback, please fill in the following fields.</p>
<form action="" method="post">
<input type="text" placeholder="Subject" name="sub" class="form-control" autofocus required/>
 <br/>
<textarea placeholder="Message" class="form-control" rows="9" name="msg" required></textarea><br/>
<button type="submit" class="btn btn-block btn-outline-info"  name="submit"><b>Send Review</b></button>



</form>
<?php

if(isset($_POST['submit']))
{
$sql="INSERT INTO review(subject,message,msgon)values('$_POST[sub]','$_POST[msg]','$dt');";
if($conn->query($sql)==TRUE)
{
echo"<br/><div class='alert alert-success'>THANK YOU!!!</div>";
}else{
echo"Error:".$sql."<br>".$conn->error;
}}

?></div>
<div class="col-md-4"></div>
</div>
<?php include 'footer.php'?>

