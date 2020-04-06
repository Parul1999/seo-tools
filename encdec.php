<?php include 'header.php' ?>
<?php include 'dbfile.php' ?>
<script>
function myFunction() {
  var copyText = document.getElementById("dec");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value)
}
</script>
<div class="row pt-4 pb-4 bg-info text-white">  
<div class="col-md-12 text-center">
<H2>Encrypt and Decrypt Text</H2>
</div>
</div>
<div class="container mt-5 pt-3">
<div class="row">
<div class="col-md-12">
<p>With this online tool, you can encrypt or decrypt any text according to the Advanced Encryption Standard (AES). The also Rijndael called algorithm provides a very high level of security. For example, it is approved in the US for documents with the highest secrecy level. By using this tool sensitive data can be exchanged safely. Just paste your text in the form below, enter key, press Encrypt/Decrypt button, and you get resulted text.</p>
</div>
</div>
</div>
<div class="container pt-4 mt-4">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<form action="" method="post">
<h5>Type Your Text Here(3000 char max)</h5>
<textarea rows=6  name="text" class="form-control" placeholder="Write Something" required  maxlength="3000"></textarea></>
<div class="row">
<div class="col-md-4">
<br/>
<input type="password" class="form-control" name="key" placeholder='Enter Key Here' required /><br/>
</div>
<div class="col-md-8 text-right">
<br/>
<button type="submit" name="keysub" class="btn btn-dark">Encrypt Data</button>
<button type="submit" name="sub" class="btn btn-dark">Decrypt Data</button>
<button type="submit" name="sub1" class="btn btn-info color:#fff;">Reset</button>
</div>
</div>

<?php 
if(isset($_POST['keysub'])){
	$key=$_POST['key'];

$string=$_POST['text'];

$res=base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,md5($key),$string,MCRYPT_MODE_CBC,md5(md5($key))));	
}
else if(isset($_POST['sub'])){
		$key=$_POST['key'];

$string=$_POST['text'];

$res=rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256,md5($key),base64_decode($string),MCRYPT_MODE_CBC,md5(md5($key))),"\0");
}
else
$res=' ';

?>
	
<h5> Result </h5>
<textarea id="dec" rows=6  name="text1" class="form-control" readonly="readonly">
<?php echo $res; ?></textarea>
<br/>
<button onclick="myFunction()" class="btn btn-dark">Copy text</button>
<div class="col-md-2">
</div>
</div>
</div></br>
</form>
<div class="row">
<div class="col-md-12">
<b>How to use AES encryption?</b>
<p>If you want to encrypt a text put it in the white textarea above, set the key of the encryption then push the Encrypt button.</p>
<b>When is helpful to use AES encryption?</b>
<p>When you want to encrypt a confidential text into a decryptable format, for example when you need to send sensitive data in e-mail. The decryption of the encrypted text it is possible only if you know the right password.</p>
<b>What is AES encryption?</b>
<p>AES (acronym of Advanced Encryption Standard) is a symmetric encryption algorithm.The algorithm was developed by two Belgian cryptographer Joan Daemen and Vincent Rijmen.AES was designed to be efficient in both hardware and software, and supports a block length of 128 bits and key lengths of 128, 192, and 256 bits.</p>
<b>How secure is AES encryption algorithm?</b>
<p>AES encryption is used by U.S. for securing sensitive but unclassified material, so we can say it is enough secure.</p>
</div>
</div>
</div><br/>
<?php include 'footer.php' ?>