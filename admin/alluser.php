<?php include 'header.php'?>
<h4>All User</h4>
<hr/>
<div class="container mt-2 pt-2">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="table-responsive">
<table class="table  table-striped table-light">
<th>username</th>
<th>email id</th>
<th>Registered On</th>
<th>detail</th>

<?php
$sql="select *FROM userregister";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
$vid=$row['userid'];
echo"<tr>";
echo"<td>".$row['username']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['registeron']."</td>";
echo"<td><a href='viewuser.php?id=$vid'><i class='icofont icofont-list'></i></a></td>";
echo"</tr>";

}
}?>
</table></div>
<div class="col-md-2"></div>
</div>