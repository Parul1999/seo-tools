<?php session_start(); ?>
<?php include 'dbfile.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/icofont.css" rel="stylesheet" />
</head>
<body>

<div class="row bg-dark text-white pt-2 pb-1" style="margin-top:auto">
<div class="col-md-3">
<h3><b><a href="index.php" style="text-decoration:none" class="text-light">W-Tool Studio</a></b></h3>
</div>
<div class="col-md-9 text-right">
<i class="icofont icofont-earth">&nbsp;wtoolstudio@gmail.com</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i class="icofont icofont-mobile-phone">18008998098</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-white ">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link text-info" href="date.php">
          Date Calculator</a>
      </li>
            <li class="nav-item">
        <a class="nav-link  text-info" href="encdec.php">Encrypt and Decrypt Text</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SEO Tools
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          
          <a class="dropdown-item  text-info" href="viewsource.php">Get Source Code</a>   
          <a class="dropdown-item  text-info" href="linkextractor.php">Link Extractor</a>
          <a class="dropdown-item  text-info" href="keyword.php">Keyword Extractor</a>
        <a class="dropdown-item  text-info" href="encodedecode.php">Encoder and Decoder</a>
          
        </div>
      </li>
      
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle  text-info" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Text Tools
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item  text-info" href="textanalyse.php">Text Analysis Tool</a>
          <a class="dropdown-item  text-info" href="texttorgb.php">Text Case Converter Tool</a>
          <a class="dropdown-item  text-info" href="converterimage.php">Text to Image Converter</a>
        </div>
      
      </li>
    <li class="nav-item">
        <a class="nav-link  text-info" href="color.php">Color Converter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-info" href="html.php">
          HTML Converter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-info" href="createzip.php">
          Zip Creator</a>
      </li>
    </ul> 
    
    <ul class="navbar-nav ml-auto">
       <li class="nav-item">
        <a class="nav-link text-info" href="cheatsheet.php">
          Cheatsheet
        </a>

      </li>
    
       <li class="nav-item">
       
<?php if(!isset($_SESSION['un'])) { ?>
      
        <a class="nav-link text-info" href="login.php">
          My Account
        </a>
        <?php } else { ?>
        
        
        <a class="nav-link text-info" href="user/myprofile.php">
          Hi <?php echo $_SESSION['nm']; ?> ..
        </a>
        
        <?php } ?>

      </li>
      
    </ul>
    
  </div>
</nav>
</div>
