<?php include 'header.php'?>
<?php include 'sidebar.php'?>

<h4>Tool Used</h4>
<!-- It only shows the tools which use internet because if someone is getting source code or links constantly of a site admin should also have the details of it for the security purpose rest of the tools can be used by anyone and it security doesnt matter in that --> 
<hr />
<div class="container mt-2 pt-2">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="table-responsive">
<table class="table  table-striped table-light">
<th>Name</th>
<th>Used On</th>
<th align="center">URL</th>
<?php
$sql="select *FROM toolused where usedby='$_SESSION[un]' order by  usedon DESC";
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

}
}?>
</table></div></div>
<div class="col-md-2"></div>
</div>
<?php include 'footer.php'?>