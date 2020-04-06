
<script src="../editor/ckeditor.js"></script>
<?php include 'header.php'?>
<h4>Add Cheatsheet</h4>
<hr />

<div class="container mt-2 pt-2">
<div class="row">
<div class="col-md-1"></div><div class="col-md-11">
<form action="" method="post" enctype="multipart/form-data">
<input type="text" name="title" placeholder="Title" class="form-control"/><br/>
<input type="file" name="image" class="form-control"/><br/>
<textarea type="text" name="editor" id="editor" placeholder="Description" class="form-control"></textarea><br/>
<button type="submit" class="btn btn-block btn-dark"  name="sve"><b>SUBMIT</b></button><br/>
</form>
<?php
if(isset($_POST['sve']))
{
	$target_dir="sheets/";
	$target_file=$target_dir.basename($_FILES["image"]["name"]);
	$uploadok=1;
	$imagefiletype= pathinfo($target_file,PATHINFO_EXTENSION);
	if($_FILES["image"]["size"]>5000000)
	{
		echo"Sorry,your file is too large to be uploaded.";
		$uploadok=0;
	}
	if($imagefiletype!="pdf")
	{
		echo"Sorry, only PDF files are allowed.";
		$uploadok=0;
	}
	if($uploadpk=0)
	{
		echo"Sorry, Your file was not uploaded.";
	}
	else
	{
		if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
		echo "the file".basename ($_FILES["image"]["name"])."has been uploaded";
		else
		
		echo "sorry , there is error in uploading file .";
		$text=addslashes($_POST['editor']);
		$sql="INSERT INTO cheatsheet(title,image,desp,postedon)values('$_POST[title]','$target_file','$text','$dt');";
		if($conn->query($sql)===TRUE)
		{
			echo"<br/> <script> window.alert('New Reord Created Successfully') </script></div>";
		}
		else
		{
			echo"error:".$sql."<br/>".$conn->error;
		}
	}
}
?>
</div>

<script> CKEDITOR.replace('editor');</script>
<?php include  'footer.php'?>





	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
