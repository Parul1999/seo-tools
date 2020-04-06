<?php include 'header.php'?>
<div class="row pt-4 pb-4 bg-info text-white">  
<div class="col-md-12 text-center">
<H2>Color Converter</H2>
</div>
</div>
</br>
<br/>
<div class="container">
<div class="row mt-2">
<div class ="col-md-4">
<H4 class="text-center">HEX TO RGB</H4>
<p align="center">This color code converter will convert the hex (E.g.(#000000)) color code to rgb (E.g(000,000,000)) color code </p><br />
<form action="" method="post">
<input type="text" name="hex" class="form-control"  placeholder="eg: #000000" required="required"/>
<br />
<input type="submit" value="To RGB" name="sub1" class="btn btn-block btn-outline-info" />
</form>
<hr/>
<?php
if(isset($_POST['sub1'])){
	$hex=$_POST['hex'];
	list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
	echo "<h5> Input Code : </h5>";
	echo "<p> HEX :".$hex."</p>";
	echo "<h5> Result : </h5>";
	echo "<p> RGB : rgb(".$r.",".$g.",".$b.")</p>"; // rgb(122,122,233)
	echo "<p style='padding:15px; background-color:".$hex."'> </p>";

}
?>
</div>
<div class ="col-md-4">
<H4 class=" text-center">RGB to HEX</H4>
<p align="center"> This color code converter will convert the rgb (E.g 000,000,000) color code to hex(E.g.#000000) color code.</p><br />
<form action="" method="post">
<input type="text" name="rgb" class="form-control"  placeholder="eg: 000,000,000" required="required"/>
<br />
<input type="submit" value="To HEX" name="sub2" class="btn btn-block btn-outline-info" />
</form>
<hr/>
<?php
if(isset($_POST['sub2'])){
		$rgb=$_POST['rgb'];
		echo "<h5> Input Code : </h5>";
		echo "<p> RGB :".$rgb."</p>";
		echo "<h5> Result : </h5>";
		$rgbarr = explode(",",$rgb,3);
		echo "<p> HEX :".sprintf("#%02x%02x%02x", $rgbarr[0], $rgbarr[1], $rgbarr[2])."</p>";
		echo "<p style='padding:15px; background-color:rgb(".$rgb.")'> </p>";

}
?>
</div>
<div class ="col-md-4">
<H4 class="text-center">COLOR CODE</H4>
<p align="center"> This color code converter will show you both rgb(E.g 000,000,000) and hex(E.g.#000000) color code of the color you select.</p><br />
<form action="" method="post">
<input type="color" name="color" class="form-control" style="height:40px; padding-top:3px; padding-bottom:3px" required="required"/>
<br />
<input type="submit" value="Get Code" name="sub3" class="btn btn-block btn-outline-info" />
</form>
<hr/>
<?php
if(isset($_POST['sub3'])){
		$color=$_POST['color'];
	list($r, $g, $b) = sscanf($color, "#%02x%02x%02x");
	echo "<h5> Input Color : </h5>";
	echo "<p style='padding:15px; background-color:".$color."'> </p>";
	echo "<h5> Result : </h5>";
	echo "<p> HEX :".$color."</p>";
	echo "<p> RGB : rgb(".$r.",".$g.",".$b.")</p>"; // rgb(122,122,233)
	
}
?>
<!-- in color code hex main color print krvaa rae hai  cuz color bydefault hex main hi hota hai-->
</div>
</div>
</div>
<?php include 'footer.php' ?>