<?php include 'mainheader.php' ?>

<?php include 'database.php' ?>
<h3 class="pt-4 pb-4 text-center"  style="background-color:#e2b13c; color:#fff;"> Text Analyser </h3> 
<div class="container">
<div class="row">
<div class="col-md-12 pt-2">
<p><b>This online counting tool is great for essays, PDFs and just about any kind of document.</b></p>  
Enter or paste your text to analyze in the box below then click on GO 
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6"><br/>
<form action="" method="post">
<label> <h5>Type your content here (2000 char max)</h5></label><br/>
<textarea  rows=8 name="text" class="form-control" maxlength="2000" required="required" ></textarea><br/>
<button type="submit" name="btn" class="btn btn-dark" >Submit</button>
<button type="submit" name="set" class="btn" style="background-color:#e2b13c; color:#fff;" >Reset</button>
</form>

<?php

if(isset($_POST['btn'])){
	$txt=$_POST['text'];
$ln=strlen($txt);
$wc=str_word_count($txt);
$sp=substr_count($txt,' ');

echo "<hr/> <h4> Result </h4> <hr/>";
echo "<h5> No of Characters: ".$ln;
echo "<h5> No of Words: ".$wc;
echo "<h5> Total Spaces:".$sp;

}

?>

</div>
<div class="col-md-3">
</div>
</div><br/>
<div class="container">
<div class="row">
<div class="col-md-12">
<p>This text analysis tool provides information on the readability and complexity of a text, as well as statistics on word frequency and character count. This can be useful when preparing text that needs to been a certain number of words or characters.  It can also help you determine information about the readability of text such as average word length. You can use this online word counter to not just count words, characters, spaces .</p> 
</div>
</div>
</div>



<?php include 'mainfooter.php' ?>