<!-- This tool is used so that if a password or any secured data we want to send so we can convert text to image so that the data hacking becomes tough-->
<?php include 'header.php' ?>

<h3 class="pt-4 pb-4 text-center"  style="background-color:#17a2b8; color:#fff;"> Image Converter </h3>
<div class="container">
<div class="row">
<div class="col-md-8 pt-4 pb-4">
<form  action="text2image.php" method="post"/>
<h5> Type your Text</h5><br/>
<input type="text" name="txt1" class="form-control inpt" required  maxlength="50" / ><br/>
<input type="text" name="txt2" class="form-control inpt"  maxlength="50" / ><br/>
<input type="text" name="txt3" class="form-control inpt"  maxlength="50"  / ><br/>
<div class="input-group">
<span class="input-group-addon">Backcolor</span>
<input type="color" name="bg" class="form-control"  style='height:40px; padding-top:3px; padding-bottom:3px;' />
<span class="input-group-addon">Forecolor</span>
<input type="color" class="form-control" name="fg"  style='height:40px; padding-top:3px; padding-bottom:3px;' /></div><br/>
<br/>

<button type="submit" class=" btn btn-info" >Generate Image</button>
<button type="reset" class=" btn btn-dark" name="set">Reset Form</button>
</form>
</div>

<div class="col-md-4"><br/><br/>
<p><p>Our Text To Image Converter converts your text online to the graphics image.Generate online an image from text you supply. You then download the image file. You can have text up to 50 characters per line.</p>
<p>With Text to Image Converter Easily create an image online from text. You can use your own background color, font color.</p>
<p>The Image parameters that can be changed are:</p>
<ul>
<li>Image Background Color</li>
<li>Text Color</li>
</ul>
</div>
</div>

</div>

<?php include 'footer.php' ?> 