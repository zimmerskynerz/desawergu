
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
        <a class="nav-link" href="index.php">Beranda </a>
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
<div class="container">
	<div class="row">
	  <div class="col-sm-12">
  
		 <?php
		@$page=$_GET[page];
		@$page="$page.php";
		if(file_exists($page))
			include "$page";
		else
			include "user_penerima.php";
	?>
	  </div>

	  
    


	</div>

</div>

<script>
 $(document).ready(function(){
	 $('#NIK').keyup(function(){
		 this.value = this.value.replace(/[^0-9.]/g,'');
	 });
	 
 });
</script>

  </body>
</html>