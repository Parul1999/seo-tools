<?php include 'header.php'?>
<div class="container">

<div class="row">

<?php
$sql="select *FROM cheatsheet";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
?>


<div class="col-md-6 pb-2" style="border-bottom:medium solid #FF972F;">
<div class="row">
<div class="col-md-5"><br />
<h5><?php echo $row['title']?></h5>
</div>

<div class="col-md-7">
<p> <?php echo $row['desp']?></p>
<a href="admin/<?php echo $row['image']?>" target='_blank'> <i class="icofont icofont-file-pdf"></i> View PDF </a>
<a href="admin/<?php echo $row['image']?>" download><i class="icofont  icofont-file-pdf"></i>  Download PDF</a>

</div></div></div>
<?php }}?>
</div></div>
<?php include 'footer.php'?>
