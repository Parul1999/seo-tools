<link href="../css/icofont.css" rel="stylesheet" />
<link href="../css/sidebar.css" rel="stylesheet" />
<div class="row bg-info text-white pt-4 pb-2"> <div class="col-md-3"><a href="../index.php" style="color:#FFF"><h3>W-ToolStudio</h3></a></div>
<div class="col-md-9 text-right"><a href="logout.php" style="color:#FFF"> Log Out</a> </div></div>
<div class="row d-flex d-md-block flex-nowrap wrapper">
<div class="col-md-2 float-left col-1 pl-0 pr-0 collapse width show text-center pt-2" id="sidebar" style="border-right:thin solid #E2E2E2">
<?php 
$sql="select  username,image FROM userregister where email='$_SESSION[un]'";
$result=$conn->query($sql);
if($result->num_rows>0)
$row=$result->fetch_assoc();
?>
<img src='<?php echo $row['image']?>' width='150' height="150" class="rounded-circle" />
<h5 class='pt-1 pb-2'> <?php echo $row['username'];?> </h5>
<div class="list-group border-0 card text-center text-md-left">
<a href="myprofile.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="icofont icofont-users-alt-5"></i> <span class="d-none d-md-inline">My Profile</span></a>
                  <a href="editmyprofile.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="icofont icofont-user-alt-1"></i> <span class="d-none d-md-inline">Edit My Profile</span></a>

 <a href="changepwd.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="icofont icofont-lock"></i> <span class="d-none d-md-inline">Change Password</span></a>
  <a href="supportnservices.php"class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="icofont icofont-question"></i> <span class="d-none d-md-inline">Ask a Question</span></a>
 <a href="review.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="icofont icofont-black-board"></i> <span class="d-none d-md-inline">Review</span></a>
 <a href="toolused.php"class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="icofont icofont-tools"></i> <span class="d-none d-md-inline">Tools Used</span></a>
 <a href="logout.php"class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="icofont icofont-logout"></i> <span class="d-none d-md-inline">Logout</span></a>
</div>
        </div></div>
        <div class="col-md-10 float-left col px-5 pl-md-2 pt-2 main">

      
           
        
        
