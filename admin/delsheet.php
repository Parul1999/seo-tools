<?php
include '../dbfile.php';

  $sql="DELETE from cheatsheet where sheetid='$_GET[id]' ";
  if($conn->query($sql)==TRUE)
  {
     echo "<script> window.alert('Record Deleted Successfully');
           window.location='allcheatsheets.php';</script>";
  }
  else
  {
     echo"Error:".$sql."<br>".$conn->error;
  }

?>