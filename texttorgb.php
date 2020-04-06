<?php include 'header.php'?>
<?php include 'dbfile.php'?>
<script>
function myFunction() {
  var copyText = document.getElementById("re");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value)
}
</script>
<div class="row pt-4 pb-4 bg-info text-white">  
<div class="col-md-12 text-center">
<H2>Text Case Convertor</H2>
</div>
</div>
</br>

<div class="container">
<div class="row">
<div class="col-md-12 pt-1">

<p> <b> Accidentally left the caps lock on and typed something, but can't be bothered to start again and retype it all?</b></p>
Simply enter your text and choose the case you want to convert it to.
</div>
</div>
<div class="row">
<div class="col-md-6"><br/>
<form action=' ' method="post">
<label><h5>Type your content here (3000 character max)</h5></label><br/>
<textarea  rows=8 name="text" class="form-control" required="required" maxlength="3000" ></textarea><br/>
<button type="submit" name="upr" class="btn btn-outline-info" >Uppercase</button>
<button type="submit" name="lwr" class="btn btn-outline-info" >Lowercase</button>
<button type="submit" name="cap" class="btn btn-outline-info" >Capitalize</button>
<button type="reset" name="set" class="btn btn-outline-danger" >Reset</button>
</form>
</div>
<?php

if(isset($_POST['upr'])){
	$txt=$_POST['text'];
$res=strtoupper($txt);
} 
else if(isset($_POST['lwr'])){
	$st=$_POST['text'];
	$res=strtolower($st);
}
else if(isset($_POST['cap'])){
	$wt=$_POST['text'];
	$res=ucwords($wt);
}
else
$res='Result Content Are Shown Here ... ';
	
?>
<div class="col-md-6"><br/>
<h5> Results </h5>
<textarea id="re" rows=8 class="form-control" readonly="readonly"><?php echo $res; ?></textarea><br/>
<button onclick="myFunction()" class="btn btn-dark">Copy text</button>
</div>

</div><br/>
<div class="row">
<div class="col-md-12">
<p>Case Converter is a simple free online tool that converts any text to either lower case, upper case, title case.Text case converter is a handy web application that allows you to change text case of any text easily to upper case, lower case, or title case . Simply paste the text you want to convert into the text area below, click on one of the buttons and let the tool to do th work for you.
</p>
</div>
</div>
</div>
<?php include 'footer.php'?>