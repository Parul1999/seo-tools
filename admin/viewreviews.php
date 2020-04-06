<?php include 'header.php' ?>
<?php
$sql="select *FROM review where reviewid='$_GET[id]'";
$result=$conn->query($sql);
if($result->num_rows>0)
$row=$result->fetch_assoc();
$vid=$row['reviewid'];
?>
<div class = "row">
<div class = "col-md-9">
<h4><?php echo $row['reviewid']?></h4>
<br/>
<h4 class="text-info">User detail</h4><br/>
<p> Review Id :<?php echo $row['reviewid']?></p>
<p> Subject :<?php echo $row['subject']?></p>
<p> Message:<?php echo $row['message']?></p>
<p> Posted On:<?php echo $row['msgon']?></p>
</div>
<div class="col-md-3">
<?php echo "<td><img src = '".$row['image']."'width='100%' height='150px'></td>";?>
</div>
</div>
</div>
<div class="col-md-2"><?php echo "<a href='?id=$vid'></a>";?></div>
</div>
<?php include 'footer.php' ?>