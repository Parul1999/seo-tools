<?php include 'header.php'?>
<div class="row pt-4 pb-4 bg-info text-white">  
<div class="col-md-12 text-center">
<H2>Date Calculator</H2>
</div>
</div>
</br>
<div class="container">
<div class="row mt-2">
<div class ="col-md-6">
<H4 class="text-center">Date Difference</H4>
<p align="center">To calculate the difference between two dates </p><br />
<form action="" method="post">
<b>DATE 1 </b><input type="date" class="form-control" name="dt1" required="required" /><br />
<b>DATE 2</b><input type="date" class="form-control" name="dt2" required="required" /><br />
<button type="Submit" class="btn btn-block btn-outline-info" name="sub"><b>GET THE DIFFERENCE</b></button>
</form>
<hr/>
<?php
if(isset($_POST['sub']))
{
	$dt1=$_POST['dt1'];
	$dt2=$_POST['dt2'];
	echo "<h5> Input : </h5>";
	echo "<p> First Date : ".$dt1."</p>";
	echo "<p> Second Date : ".$dt2."</p>";
	$date1=date_create($dt1);
	$date2=date_create($dt2);
	$diff=date_diff($date1,$date2);
	echo "<h5> Result : </h5>";
	echo "Date Difference :".$diff->format('%R%a days');
}
?>
</div>

<div class ="col-md-6">
<H4 class="text-center">Date Calculator</H4>
<p align="center">To calculate the number of days</p><br />
<form action="" method="post">
<b>DATE 1 </b><input type="date" class="form-control" name="dt" required="required" /><br />
<b>Days</b><input type="number" class="form-control" name="n" required="required" /><br />
<button type="Submit" class="btn btn-block btn-outline-info" name="sub1"><b>SUBMIT</b></button>
</form>
<hr/>
<?php
if(isset($_POST['sub1'])){
	$sv=$_POST['dt'];
	$rv=$_POST['n']." days";
	
$date=date_create($sv);
date_add($date,date_interval_create_from_date_string($rv));


	echo "<h5> Inuput : </h5>";
	
	echo "<p>Date 1:  ".$sv."</p>";
	echo "<p>Date 2:  ".$rv."</p>";
	
	echo "<p><h5> Result : </h5></p>";
	echo "Output Date is :  ".date_format($date,"d-m-y");
	
}

?>
</div>
</div>
</div>
<?php include 'footer.php' ?>