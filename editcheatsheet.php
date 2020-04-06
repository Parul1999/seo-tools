<?php include 'header.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="admin/css/bootstrap.min.css.map" />
<link href="admin/css/icofont.css" />
<title>Untitled Document</title>
</head>
<body>
<?php
$sql="select *FROM user where userid='$_GET[id]'";
$result=$conn->query($sql);
if($result->num_rows>0)
$row=$result->fetch_assoc();
$vid=$row['userid'];
?>
<?php
if(isset($_POST['save']))
{
	$sql="update addcheatsheet set title='$_POST[tle]',description='$_POST[dsc]'where userid='$_GET[id]';";
    		if($conn->query($sql)==TRUE)
			{
			echo"<br><div>"; 
			}
			else
			{
			echo"error:".$sql."</br>".$conn->error;
		}
		}
		?>


	
</body>
</html>