<script src="editor/ckeditor.js"></script>

<?php include 'mainheader.php' ?>

<?php include 'database.php' ?>
<h3 class="pt-4 pb-4 text-center"  style="background-color:#e2b13c; color:#fff;"> Text to Html Converter </h3> 
<div class="container">
<div class="row">
<div class="col-md-12 pt-2">
<p>This conversion tool takes blocks of regular text and wraps HTML paragraph tags around them so you can publish the text online. It works with plain text by converting text line breaks into HTML paragraph code.Convert text to an HTML format that is displayable in a Web or other HTML-readable format. This can include formatting such as bold and italics as well as bulleted and numbered lists, plus centered text.</p>
</div>
</div>
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-10"><br/><br/><br/>
<form action="" method="post">
<div class="row">
<div class="col-md-6">
<h5>Enter title (50 char max )</h5>
<input type="text" class="form-control"  name="titl" required pattern='[A-Z a-z]{2,50}'/>
</div>
<div class="col-md-6" >
<h5>Enter File Name</h5>
<input type="text" class="form-control" name="fle" required pattern='[A-Za-z0-9]{2,20}' title="Special Symbols and space's are not allowed" />
</div>
</div>

<h5>Type your content here (2000 char max)</h5>

<textarea  rows="8" name="txteditor" class="form-control" maxlength="2000" required> Type Here ... </textarea><br/>
<button type="submit" name="btn" class="btn btn-dark" >Submit</button>
<button type="reset" name="subt" class="btn" style="background-color:#e2b13c; color:#fff;" >Reset</button>
</form>
<?php
if(isset($_POST['btn'])){
$ht=$_POST['txteditor'];
$fn=$_POST['fle'].".html";
$t=$_POST['titl'];
$ht="<html> <head> <title>" .$t."</title> </head> <body>".$ht."</body> </html>"; 
fopen($fn,"w");
file_put_contents($fn,$ht);

echo "<a href='$fn' download> Download HTML File </a>";


}
?>
</div>
<div class="col-md-1">
</div>
</div>
</div><br/>
<div class="container">
<div class="row">
<div class="col-md-12">
<p>The tool takes blocks of text and places HTML tags in the text. Called formatting tags, these HTML tags can include formatting text, for example, to bold or italic. In addition to bold and italic, other code can include font color, font size, font style, text color, tables, images, colors, links, comments, background, music and video codes, forms.</p>
<p>Examples of what codes look like are and .  Angle brackets show the tags, and typically the tags come in pairs such and to show paragraph markers.</p>
</div>
</div>
</div>



<script> CKEDITOR.replace( 'txteditor' ); </script>

<?php include 'mainfooter.php' ?>