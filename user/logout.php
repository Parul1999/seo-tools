<?php include '../dbfile.php' ?>

<?php
session_start(); 
unset($_SESSION['un']);
session_destroy();
echo"<script>window.location='../login.php';</script>";
?>