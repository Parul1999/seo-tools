<?php

date_default_timezone_set('asia/calcutta');
$d=date("y-m-d");
$dt=date("y-m-d h:i:sa");

$servername="localhost";
$username="root";
$password="";
$dbname="wtools";
$conn=new mysqli($servername,$username,$password,$dbname);
if(!$conn){
die("connection failed:".mysqli_connection_error());}
?>
