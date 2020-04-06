<?php include 'header.php'?>
<?php include 'dbfile.php'?>
<div class="row pt-4 pb-4 bg-info text-white">  
<div class="col-md-12 text-center">
<H2>Text Analyser Tool</H2>
</div>
</div>
</br>
<div class="container">

<p align="justify">A powerful utility to find the detailed statistics of your text like number of words, characters, sentences, paragraphs and more in a text block This tool provides instant word,character count statistics based on the given text.You only need to enter the text or string and this Counter will count the given statistics.The online Text Analysis Tool is very helpful in many cases like the database, grammatical research, writing etc. It will help you to count the number of words or units in a text.</p>

<div class="row mt-2">
<div class ="col-md-9">
<form action="" method="post">
<label> <h5>Type your content here (2000 char max)</h5></label><br/>
<textarea  rows=8 name="text" class="form-control" maxlength="2000" required="required" ></textarea><br/>
<button type="submit" name="btn" class="btn  btn-info" >Submit</button>
<button type="submit" name="set" class="btn  btn-dark" >Reset</button>
</form>
<hr/>
</div>
<div class="col-md-3">
<?php

if(isset($_POST['btn'])){
	$txt=$_POST['text'];
$ln=strlen($txt);
$wc=str_word_count($txt);
$sp=substr_count($txt,' ');

echo "<br/><hr/> <h5 class='text-danger'> Result </h5> <hr/>";
echo "<h6> No of Characters: ".$ln."</h6>";
echo "<h6> No of Words: ".$wc."</h6>";
echo "<h6> Total Spaces:".$sp."</h6>";

}

?>
<!-- $sp=substr_count($txt,' '); it counts number of spaces. $sp=substr_count($txt,'a'); and this will count number of a-->
</div>
</div>
</div>
<?php include 'footer.php' ?>

