<?php include 'header.php'?>

<?php include 'dbfile.php' ?>
<h3 class="pt-4 pb-4 text-center bg-info text-light" >Link Extractor </h3> 
<div class="container mt-5 pt-3">
<div class="row">
<div class="col-md-12">

<p>This SEO tool let you get a list of the links of a web page.The link text and the link line in your page html code are showed. Its important to have knowledge about all link on your webpage. Extract all internal/external links from any webpage.</p>
</div>
</div>
</div><br/>
<div class="container-fluid">
<form action="" method="post">
<div class="row  pt-2 pb-2" style="background-color:#e8e8e8">
<div class="col-md-2">
</div>
<div class="col-md-1">
<label><b>Enter URL</b></label>
</div>
<div class="col-md-5">
<input type="url" name="link" class="form-control"  required="require" placeholder="E.g. http://abc.com"/>
</div>
<div class="col-md-2">
<button type="submit" name="save" class=" btn btn-info" >Submit</button>
</div>
<div class="col-md-2">
</div>

</div>
</form>
</div><br/>

<div class="container">
<?php
if(isset($_POST['save'])){
 if(!isset($_SESSION['un']))
{
echo "<script>window.location='login.php?t=link';</script>";
}
else{

	$url=$_POST['link'];
	$sql="Insert into toolused (name,usedon,usedby,url)values('linkextractor','$dt','$_SESSION[un]','$_POST[link]')";
	if($conn->query($sql)==TRUE)
	{
	echo"";
	}
	else
	echo "ERROR".$sql."<br/>".$conn->error;
@$html = file_get_contents($url);
@$doc = new DOMDocument();
@$doc->loadHTML($html);
@$tags = $doc->getElementsByTagName('a');
foreach ($tags as $tag) {
$l=$tag->getAttribute('href');
if(substr($l,0,4)=="http")
 echo "<br/> <a href='".$l."' target='_blank'>".$l."</a>";
}}
}
?>
</div>
<div class="container">
<div class="row">
<div class="col-md-12">

<h5>What is Link Extractor ?</h5>
<p>Like other SEO tools here it completely scrape content from user inputed url/webpage. All the anchor text & linked webpage from the inputed webpage get into a order one by one. It shows all link on a webpage. It will help in a way like you can see structure of webpages which may be a wrong way for SEO purpose.</p>
</div>
</div><br/>
</div>


<?php include 'footer.php' ?>
