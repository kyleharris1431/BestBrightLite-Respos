<? session_start(); include('dAl.php');?>
<?php
$id='';
if (isset($_SESSION['id_num']))
{
     $id = $_SESSION['id_num'];
}
$user_data = DataAccessProtocol::runQueryWithRes("SELECT * FROM user_info_2 WHERE id = '".$id."';");

$port_text='';
$about_me='';

while($row = mysqli_fetch_array($user_data)) // fetch results as array and print data
{
 $port_text = $row['portfolio'];
 $about_me  = $row['about_me'];
}
     
?>
<!DOCTYPE html>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/kickstart.js"></script> <!-- KICKSTART -->
<link rel="stylesheet" href="css/kickstart.css" media="all" /> 
<link rel="stylesheet" href="css/style.css" media="all" />
<link rel="stylesheet" href="my_style.css" media="all" />

<script type="text/javascript" src="js/jQuery.js"></script>
</head>
<body>
  <?php include('heading.php'); ?>
  <hr>
  <h2 class="alt"><center>This is <strong>you.</strong>. Edit your information. </center></h2>
  
  <body> 
  
  <li>
  <?php 
     $res = DataAccessProtocol::runQueryWithRes("DESCRIBE user_info_2;");
     while($row = mysqli_fetch_array($res)) // fetch results as array and print data
     {
	     $fields = $row['Field'];
     
  ?>    
    <ul> <h3 class="alt"><center><?php echo $fields ?></center></h3></ul>
     <?php } ?>
     
 
  </body>
     