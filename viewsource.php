<?php  include 'header.php'?>

<div class="row pt-4 pb-4 bg-info text-white">  
<div class="col-md-12 text-center">
<H2> HTML Source Viewer </H2>
</div>
</div>
</br>
<div class="container">

<p align="justify"> The HTML Source Viewer is a simple yet powerful utility for in-depth viewing and analyzing of any web page source code. This simple tool shows how things are.There are many times you may want to view the HTML of a website to find out more about the page. HTML Source Viewer is a simple yet useful utility for viewing the actual HTML source code for a given webpage. </p>
<h6> <a href="#" data-toggle="modal" data-target="#exampleModalLong"> Know More About source code of webpage </a> </h6>
</div>
<div class="container-fluid">
<form action="" method="post">
<div class="row  pt-2 pb-2" style="background-color:#e8e8e8">
<div class="col-md-2">
</div>
<div class="col-md-1">
<label><b>Enter URL</b></label><br/>
</div>
<div class="col-md-5">
<input type="url" name="src" class="form-control"  required/>
</div>
<div class="col-md-2">
<button type="submit" name="sub" class=" btn btn-block btn-info">Submit</button>
</div>
</div>
</form>
</div>
<div class="container-fluid">

<?php
if(isset($_POST['sub'])){
	@$data= file_get_contents($_POST['src']);
	@$html_encoded=htmlentities($data);
	echo $html_encoded;}
	?>
 </div>
 <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">GET SOURCE CODE </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
<h5> About Get Source Code of Webpage </h5>
<p class="text-justify p-2"> Underneath a professionally designed website, lies your page source code. It is the code that your browser transforms into a rich experience for users. Search engines like Google, "read" this code to figure out where your site pages should show up in their indexes for a given search query. </p>


<h6> <b> Why Do I Need To Get Source Code Of WebPage? </b></h6>
<p class="text-justify p-2"> You might be wondering that why would you need a source code of a webpage, right? By reading the source code file of a website, you can quickly determine many important things, let's read what are the most important uses of web page source code for webmasters.</p>

<p class="text-justify p-2"> 
<b> Title Tag: </b> Title Tags are so much important for On-Page SEO, and these are the titles that Google displays for different websites when you search for something. Using this tool, you can check whether the tag is included in the source code or not. If you don't have a title tag in the source code, then you are not going to get any rankings in Google. The title tag is usually displayed near the top of your source code and starts and ends with </title>. </p>

<p class="text-justify p-2">  <b>Meta Description: </b> Meta Description is a 160 character snippet, displayed underneath the title of your page in search engines. There are some websites which completely ignore meta descriptions and as a result, they don't get their desired rankings. You can use our free Web Page Source Code viewer tool to check whether the meta is displaying in the source code or not.</p>

<p class="text-justify p-2"> <b> Check For NoFollow & DoFollow Links: </b> You can view the source code of the page to check whether the link on a web page is nofollow or dofollow. If you find this type of code rel=’external nofollow’, then it means the web page includes no follow links, and if you find the similar type of code with 'do follow' word in it, then it means the site includes do follow links. It is very helpful when making backlinks for your site. </p>

<p class="text-justify p-2"> Using our Get Source Code of Webpage, you can also find out many things such as site's meta name, Google Analytics code, Image Alt Tags, Google Adsense code and much more. </p>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
  <?php include 'footer.php'?>