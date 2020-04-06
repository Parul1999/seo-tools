<?php include 'header.php'?>
<h4>All Helpmessages</h4>
<hr />
<div class="container mt-2 pt-2">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="table-responsive">
<table class="table table-striped table-sm table-light">
<th>Subject</th>
<th>Message</th>
<th>Message On</th>

<?php
$sql="select *FROM supportnservices";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
$vid=$row['supportid'];
echo"<tr>";
echo"<td>".$row['subject']."</td>";
echo"<td>".$row['message']."</td>";
echo"<td>".$row['msgon']."</td>";
echo"</tr>";

}
}?>
</table></div></div>
<div class="col-md-2"></div>
</div>
</body>
</html>