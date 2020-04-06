<?php include 'header.php'?>
<?php include 'dbfile.php' ?>
<h3 class="pt-4 pb-4 text-center bg-info text-light" >Create Zip files </h3> 
<div class="container mt-5 pt-3">
<div class="row">
<div class="col-md-12">
<p>Zip files (.zip or .zipx) are single files, sometimes called "archives", that contain one or more compressed files. Zip files make it easy to keep related files together and make transporting, e-mailing, downloading and storing data and software faster and more efficient.  </p>
<p>Zip File  tool allows you to make zip file  without any hassle. You can upload image, audio and video files to compress and make a zip file This tool makes it easy for Windows users to work with archives. this tool features a standard  interface for viewing, running, extracting, adding, deleting, and testing files in Zip files.</p></br>
</div>
</div>
</div><br/>
<div class="container-fluid">
<form action="" method="post" enctype="multipart/form-data">
<div class="row  pt-2 pb-2" style="background-color:#e8e8e8">
<div class="col-md-3">
</div>
<div class="col-md-2"><h5> Select Files for Zip </h5> </div>
<div class="col-md-4"><input type="file" name="img[]" class="form-control border-info" multiple  required/></div> 
<div class="col-md-2"><button type="submit" class="btn btn-info " name="sv">Upload Zip Files </button> </div> 
 <div class="col-md-1"></div>
</div><br/><hr/>
</form>
<?php
if(isset($_POST['sv']))
{		
@unlink('myArchive.zip');
$noofimg=count(($_FILES["img"]["name"]));
$i=0;
$target_dir="upload/";
while($i<$noofimg){
$target_file=$target_dir.basename($_FILES["img"]["name"][$i]);
if(move_uploaded_file($_FILES["img"]["tmp_name"][$i],$target_file)) {
echo " ";
 } 
$i++;
}
function createZIP($files = array(),$output = '',$overwrite = false) {
//if the zip file already exists and overwrite is false, return false
if(file_exists($output) && !$overwrite) { return false; }
$zip = new ZipArchive();
if($zip->open($output,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
return false;
}
if(count($files))
{
//add the files to zip
foreach($files as $file) {
$zip->addFile($file,$file);
} 
//close the zip
$zip->close();
//check to make sure the output zip file creaded and exists
return file_exists($output);
}
else
{
return false; //no files provided to create zip file
}

}
$files_to_zip = array();
$i=0;
while($i<$noofimg){
$files_to_zip[$i] =$target_dir.basename($_FILES["img"]["name"][$i]) ;
$i++;
}
//if true, good; if false, zip creation failed
$result = createZIP($files_to_zip,'myArchive.zip');
$fn='myArchive.zip';
echo "<a href='$fn' download> Download Zip </a>";
}
?>

</div>
</div> 
</div><br/></br>
<?php include 'footer.php'?>

