<?php
session_start();    //memulai session
                    
if (isset($_SESSION['id'])=="") {    //jika session ses_email kosong / belum login maka...
    echo"<meta http-equiv='refresh' content='0;url=login_user.php'>"; //merefresh ke halaman login
} else {    //jika session ses_email tidak kosong / sudah login maka...

require_once "config.php";

$sql3 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT id_warga, no_kk,nik,nama, alamat, rt , rw ,kecamatan , kabupaten , password  FROM data_warga where id_warga=".$_SESSION['id']."") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
while ($data = mysqli_fetch_array($sql3)) {	  
$id_warga= $data['id_warga'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>"Sugeng Rawuh Warga Kayen"</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>

       <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark ">
          <a class="navbar-brand" href="index_user_penerima.php"><img src="img/logokayen3.png"></a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index_user_penerima.php">Beranda</a>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" href="post_user_penerima.php?page=jenisbantuan">Jenis Bantuan</a>
      </li>
	  
        <li class="nav-item ">
        <a class="nav-link" href="post_user_penerima.php?page=profil_penerima">Profil Penerima</a> 
      </li>
	  
      <li class="nav-item ">
        <a class="nav-link" href="post_user_penerima.php?page=total_penerima_bantuan">Total Penerima Bantuan</a>
      </li>
	  
	  <li class="nav-item ">
        <a class="nav-link" href="post_user_penerima.php?page=data_penerima_bantuan">Data Penerima Bantuan</a>
      </li>
	  
	  <li class="nav-item ">
        <a class="nav-link" href="logout.php">Logout</a>
      </div>
	  </li>
    </ul>
      
  </div>
</nav>
      <br>
      <br>
      <br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="img/header1.png" alt="First slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="img/header2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="img/hoax.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
	<div class="row">
	  <div class="col-sm-12">
  
		 <?php
		@$page=$_GET[page];
		@$page="$page.php";
		if(file_exists($page))
			include "$page";
		else
			include "error.php";
	?>
	  </div>

	  
    


	</div>

</div>

<?php
}
}
?>

  </body>
</html>