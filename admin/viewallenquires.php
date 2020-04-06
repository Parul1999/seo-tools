<?php include 'header.php' ?>
<?php
$sql="select *FROM contactus where enquiryid='$_GET[id]'";
$result=$conn->query($sql);
if($result->num_rows>0)
$row=$result->fetch_assoc();
$vid=$row['enquiryid'];
?>
<div class = "row">
<div class = "col-md-9">
<h4><?php echo $row['enquiryid']?></h4>
<br/>
<h4 class="text-info">User detail</h4><br/>
<p> Enquiry Id :<?php echo $row['enquiryid']?></p>
<p> Username :<?php echo $row['username']?></p>
<p> Email :<?php echo $row['email']?></p>
<p> Contact number :<?php echo $row['phone']?></p>
<p> Subject :<?php echo $row['subject']?></p>
<p> Message:<?php echo $row['message']?></p>
<p> Posted On:<?php echo $row['enquiryon']?></p>
</div>
<div class="col-md-3">
<?php echo "<td><img src = '".$row['image']."'width='100%' height='150px'></td>";?>
</div>
</div>
</div>
<div class="col-md-2"><?php echo "<a href='?id=$vid'></a>";?></div>
</div>
<?php include 'footer.php' ?>