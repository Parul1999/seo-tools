<?php include 'header.php'?>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="table-responsive">
<table class="table table-striped table-light">

<th>Title</th>
<th>Description</th>

<?php
$sql="select *FROM cheatsheet";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
$vid=$row['sheetid'];
echo"<tr>";

echo"<td>".$row['title']."</td>";
echo"<td>".$row['desp']."</td>";
echo "<td> <a href='".$row['image']. "' target='_blank'> <i class='icofont icofont-file-pdf'></i> </a></td>";
echo "<td> <a href='".$row['image']. "' download> <i class='icofont icofont-download'></i> </a></td>";
echo "<td> <a href='delsheet.php?id=$vid'> <i class='icofont icofont-delete'></i> </a></td>";

echo"</tr>";

}
}?>
</table></div></div>
<div class="col-md-2"></div>
</div>
</body>
</html>