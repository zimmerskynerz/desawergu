<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<head>
<body>
<div class="jumbotron">

<?php
include ("config.php");
       $a="select * from profil where id_profil='124'";
      $b=mysqli_query($GLOBALS["___mysqli_ston"], $a);
      $c=mysqli_fetch_array($b)
        ?>
 <?php echo "$c[konten]"; ?>
           
       
   
   
      

</div>
</body>
</html>
			   
                     
  
           