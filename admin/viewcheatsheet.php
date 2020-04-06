<?php include 'header.php' ?>
<?php
$sql="select *FROM cheatsheet where sheetid='$_GET[id]'";
$result=$conn->query($sql);
if($result->num_rows>0)
$row=$result->fetch_assoc();
$vid=$row['sheetid'];
?>
<div class = "row">
<div class = "col-md-9">
<h4><?php echo $row['sheetid']?></h4>
<br/>
<h4 class="text-info">User detail</h4><br/>
<p> Sheet ID:<?php echo $row['sheetid']?></p>
<p> Title:<?php echo $row['title']?></p>
<p> Description:<?php echo $row['desp']?></p>
<p> Posted On:<?php echo $row['postedon']?></p>
</div>
<div class="col-md-3">
<?php echo "<td><img src = '".$row['image']."'width='100%' height='150px'></td>";?>
</div>
</div>
</div>
<div class="col-md-2"><?php echo "<a href='?id=$vid'></a>";?></div>
</div>
<?php include 'footer.php' ?>