
<?php include 'mainheader.php' ?>

<?php include 'database.php' ?>
<h3 class="pt-4 pb-4 text-center"  style="background-color:#e2b13c; color:#fff;"> Keyword Extractor </h3> 
<div class="container">
<div class="row">
<div class="col-md-12">
<p>This free online SEO health checker tool checks meta tags of your website and provide the report. Simply enter your website URL and this SEO Analyzer Tool will extract SEO meta tags from the given URL. This tool will generate a search engine health report based on the meta title , meta keywords , and description . Also, the preview of your website in Search Engines would appear under the SEO health report. This SEO meta tags analysis report is applicable for all search engines, like Google, Yahoo, Bing, etc.</p></div>
<h5> <a href="#" data-toggle="modal" data-target="#exampleModalLong"> Know More About Keyword Extractor </a> </h5>
</div>
</div><br/>
<div class="container-fluid">
<form action="" method="post">
<div class="row  pt-2 pb-2" style="background-color:#e8e8e8">
<div class="col-md-2">
</div>
<div class="col-md-1">
<label>Enter URL</label><br/>
</div>
<div class="col-md-5">
<input type="url" name="url2" class="form-control" required />
</div>
<div class="col-md-2">
<button type="submit" name="save" class=" btn" style="background-color:#e2b13c; color:#fff;">search</button>
</div>
<div class="col-md-2">
</div>

</div>
</form>

<?php
if(isset($_POST['save'])){
	 if(!isset($_SESSION['uid']))
{
echo "<script>window.location='login.php?t=key';</script>";
}
else{

	$url=$_POST['url2'];
	$sql="Insert into toolused (name,usedon,usedby,url)values('keyword-extractor','$dt','$_SESSION[uid]','$_POST[url2]')";
	if($conn->query($sql)==TRUE)
	{
	echo"<br/><div class='alert alert-success'>Sent Successfully;</div>";
	}
	else
	echo "ERROR".$sql."<br/>".$conn->error;

function getmeta($l){

$tags = get_meta_tags($l);
if(isset($tags['keywords']))
echo "<br/>keyword : ".$tags['keywords'];  
else
echo "<br/>keyword :  ---- ";  

if(isset($tags['description']))
echo "<br/>Description : ".$tags['description'];  
else
echo "<br/>Description :  ---- ";  

}

$url=$_POST['url2'];
$html = file_get_contents($url);
$doc = new DOMDocument();
@$doc->loadHTML($html);
$tags = $doc->getElementsByTagName('a');
foreach ($tags as $tag) {
$l=$tag->getAttribute('href');
if(substr($url,0,12)==substr($l,0,12)){
echo "$url".$l;
 getmeta($l);
}}}
}
?>
</div>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">GET KEYWORDS </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<h5>What are the Meta Tags?</h5>
<p>Meta tags are snippets of text that describe the web page content. Meta tags don’t display in the web page, it is used by the search engines. The Meta tags help search engines (Google, Yahoo, Bing, etc.) to understand about the web page.</p>

<h5>How Meta Tags Help SEO?</h5>
<p>For SEO main 3 meta tags are used, title, keywords, and description. When the user searches a term in Google search, Google finds the website with the relevant content and list the relevant sites in the search result. The Meta tags help Google to know about the web page content and list the relevant website based on search.</p>

<h4>Major used meta tags for SEO are described below.</h4>

<p><b> Title Tag:</b> The &lt;title&gt; tag tells the users and search engines about the topic of a web page. It appears at the top of the browser and search listing. Use a brief and descriptive title for better search engines visibility. Google basically display first 50-60 characters of a title tag, so, keep title length under 60 characters.</p>

<p><b>Description Meta Tag:</b> The description meta tag gives Google and other search engines a brief description about a web page. It appears in the search listing under the title. Google basically display first 150-160 characters of a description tag, so, keep description length under 160 characters.</p>

<p><b>Keywords Meta Tag:</b> The keywords meta tag tells the topic of a website to search engines. Keywords are a group of words separated by a comma (,) and works behind the scene. Keep keywords length under 10 words for a better result.</p>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div><br/><br/>

<?php include 'mainfooter.php'?>

