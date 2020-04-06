<?php include '../dbfile.php' ?>
<?php session_start();
if(!isset($_SESSION['un']))
{
	echo "<script>window.location='../login.php'</script>";
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<link href="../css/icofont.css" rel="stylesheet" />
<link href="../css/sidebar.css" rel="stylesheet" />

</head>
<body>
