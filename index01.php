<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>"Sugeng Rawuh Warga Kayen"</title>
    <link href="berita/css/bootstrap.min.css" rel="stylesheet">
	<link href="berita/css/style.css" rel="stylesheet">
    <script src="berita/js/jquery.js"></script>
    <script src="berita/js/bootstrap.min.js"></script>
  </head>
  <body>
      
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark ">
          <a class="navbar-brand" href="index.php"><img src="berita/img/logokayen3.png"></a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="post.php?page=jenisbantuan">Jenis Bantuan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="post.php?page=laporanbantuan">Data Penerima Bantuan</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
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
        <img class="d-block w-100" src="berita/img/header1.png" alt="First slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="berita/img/header2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="berita/img/hoax.png" alt="Third slide">
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
<section id="headlinegray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">                          
				<h3 class="pageTitle">Tentang Informasi Program Bantuan Desa</h3>
                               
			</div>
		</div>
	</div>
    
</section
<article class="card-post">
	<div class="container-fluid">
		 <div class="row">
		 <div class="col-md-9">
		   <div class="jumbotron">
           
<?php 
 include ("config.php");
       $a="select * from profil where id_profil='197'";
      $b=mysqli_query($GLOBALS["___mysqli_ston"], $a);
      $c=mysqli_fetch_array($b)
        ?>
<?php echo "$c[konten]"; ?>
   
      

</div>
		 
		 </div>
		 <div class="col-md-3">
		    <div class="jumbotron">
			   
			   <?php 
			   include 'config.php';
               $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM berita order by id_berita desc LIMIT 2");
					while ($r=mysqli_fetch_array($sql)){ 
				?>
	<div class="row">	   
		<div class="card-deck">
		  <div class="card">
			<img src="berita/gambar/berita/<?php echo $r['gambar']; ?>" height="200" width="100" class="card-img-top" alt="...">
			<div class="card-body">
			  <a href="post.php?page=berita&id_berita=<?php echo $r['id_berita']; ?>"><h5 class="card-title"><?php echo $r['judul']; ?></h5></a>
			  
			</div>
			<div class="card-footer">
			  <small class="text-muted">Tanggal Post : <?php echo $r['tanggal']; ?></small>
			</div>
		</div>
		</div>
		<br>
	</div>
	<?php } ?> 
			</div>
			
		 
		 </div>
		 



</div>
	
	</div>

</article


</div>

<div class="footer">
  <div class="container">
    <div class="row footer-div">
      <div class="col-md-4">
        <h4 class="text-left">Kontak Kami</h4>
        <br>
        <h5 class="text-left">Dinas Komunikasi dan Informatika Kab. Pati</h5>
        <br>
        <h6 class="text-left">JL. RA. Kartini No. 1A PATI Kode Pos 59111 E-mail: info@diskominfo.patikab.go.id</h6>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h4 class="text-left">Link Cepat</h4>
        <br>
        <h6 class="text-left">
          <a href="post.php?page=visimisi">VISI DAN MISI</a>
          <br>
          <br>
          <a href="post.php?page=strukorg">STRUKTUR ORGANISASI</a>
          <br>
          <br>
          <a href="post.php?page=tupoksi">TUPOKSI</a>
          <br>
          <br>
          <a href="post.php?page=pegawai">INFO KEPEGAWAIAN</a>
        </h6>
      </div>
    </div>
  </div>
</div>

<p class="text-center">Copy Right Info Program Bantuan Sosial Desa Kayen 2019</p>

</div>
</div>


  </body>
</html>
<footer></footer>