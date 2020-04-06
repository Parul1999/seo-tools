<?php include 'header.php'?>
<h4>Tools Used</h4>
<hr/>
<div class="container mt-2 pt-2">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="table-responsive">
<table class="table  table-striped table-light table-sm">
<th>Name</th>
<th>Used On</th>
<th align="center">URL</th>
<?php
$sql="select *FROM toolused order by usedon DESC limit 30";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo"<tr>";
echo"<td>".$row['name']."</td>";
echo"<td>".$row['usedon']."</td>";
echo"<td>".$row['url']."</td>";
echo"</tr>";
}}
?>
</table></div></div>
<div class="col-md-2"></div>
</div>
<?php include 'footer.php'?>