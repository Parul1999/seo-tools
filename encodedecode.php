<?php include 'header.php'?>
<?php include 'dbfile.php'?>
<div class="row pt-4 pb-4 bg-info text-white">  
<div class="col-md-12 text-center">
<H2>URL Encode and Decode online</H2>
</div>
</div>
</br>
<div class="container mt-5 pt-3">
<div class="row">
<div class="col-md-12">
<p>Above free online tool helps to encode or decode the string. Basically, it is used for URL Encoding where characters outside the ASCII set is converted into a valid ASCII format. This URL Encoding process does two things at the time of encoding.</p>
<h5> <a href="#" data-toggle="modal" data-target="#exampleModalLong" style="color:#17a2b8"> Know More About URL Encoding </a> </h5>
</div>
</div>
</div></br>
<div class="container-fluid">
<form action="" method="post">
<div class="row  pt-1 pb-2" style="background-color:#e8e8e8">
<div class="col-md-2">
</div>
<div class="col-md-1">
<label>Enter URL</label><br/>
</div>
<div class="col-md-5">
<input type="text" name="url1" class="form-control"  maxlength="200" required/>
</div>
<div class="col-md-2">
<button type="submit" name="en" class=" btn" style="background-color:#17a2b8; color:#fff;">Encode</button>
<button type="submit" name="de" class=" btn btn-dark" >Decode</button>
</div>
<div class="col-md-2">
</div>
</div>
</form>
<?php
if(isset($_POST['en']))
{
$userinput=$_POST['url1']; 
$res=urlencode($userinput);	
echo "<div class='alert bg-dark text-white mt-4 p-4'>";
echo "<p> <b> EnteredUrl : </b>".$userinput."</p>";
echo "<p><b> Encoded Url :</b> ".$res."</p></div>";

}
else if(isset($_POST['de']))
{

$userinput=$_POST['url1']; 
$res=urldecode($userinput);

echo "<div class='alert bg-dark text-white mt-4 p-4'>";
echo "<p> <b> EnteredUrl : </b>".$userinput."</p>";
echo "<p><b> Decoded Url :</b> ".$res."</p></div>";}
else
{
$res=''; 
}
?>
</div><br/>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAIL OF URL ENCODING </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<h5>What is URL Encoding?</h5>
<p>URL Encoding also known as Percent-encoding, convert characters into a format that can be transmitted over the internet. URL Encoding basically used within the main Uniform Resource Identifier (URI) which include both Uniform Resource Locator (URL) and Uniform Resource Name (URN).</p>

<p>In URL Encoding, all non-alphanumeric character except -_. have been replaced with a percent (%) sign followed by two hex digits and spaces encoded as plus (+) sign.</p>

<h5>Why and when would you use URL Encoding?</h5>
<p>When the URL contain a character from the Reserved Character, then the character must be encoded. It is necessary and you should always encode any special characters found in URL.</p>

<p>Reserved Characters and Encoded Values
The reserved characters and after encoding value is given below.</p>

<b>! (Exclamation mark) becomes %21</b><br/>
<b># (Number sign) becomes %23</b><br/>
<b>$ (Dollar sign) becomes %24</b><br/>
<b>& (Ampersand) becomes %26</b><br/>
<b>' (Apostrophe) becomes %27</b><br/>
<b>( (Parentheses) becomes %28</b><br/>
<b>) (Parentheses) becomes %29</b><br/>
<b>* (Asterisk) becomes %2A</b><br/>
<b>+ (Plus sign) becomes %2B</b><br/>
<b>, (Comma) becomes %2C</b><br/>
<b>/ (Slash) becomes %2F</b><br/>
<b>: (Colon) becomes %3A</b><br/>
<b>; (Semicolon) becomes %3B</b><br/>
<b>= (Equals sign) becomes %3D</b><br/>
<b>? (Question mark) becomes %3F</b><br/>
<b>@ (At sign) becomes %40</b><br/>
<b>[ (Square brackets) becomes %5B</b><br/>
<b>] (Square brackets) becomes %5D</b><br/>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
  </div>
<div class="container mt-1 pt-1">
<div class="row">
<div class="col-md-12">
<p>Replaces all unsafe ASCII characters with a “%” followed by two hexadecimal digits . Replaces a space with a plus (+) sign or with %20 . For example given string: @codex world, would be encoded as: %40codex+world .</p>
</div>
</div>
</div>

<?php include 'footer.php' ?>
