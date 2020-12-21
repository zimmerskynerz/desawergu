
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kayen Desa Makmur</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  
  <body>

       <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-danger ">
          
          <a class="navbar-brand" href="index.php"><img src="img/kadema.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
          <a class="nav-link" href="bantuan.php?page=data_rtlh"> <button type="button" class="btn btn-outline-light">Tentang</button> <span class="sr-only">(current)</span></a>
     
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="bantuan.php?page=penerima_rtlh"> <button type="button" class="btn btn-outline-light">Data Warga Penerima</button></a>
        
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="post.php?page=danabantuan"> <button type="button" class="btn btn-outline-light">Kontak Petugas</button></a>
        
      </li>
      
    </ul>
      
  </div>
</nav>
      <br>
      <br>
      <br>

<div class="container">
	<div class="row">
	  <div class="col-sm-12">
  
		 <?php
		@$page=$_GET[page];
		@$page="$page.php";
		if(file_exists($page))
			include "$page";
		else
			include "artikel.php";
	?>
	  </div>

	  
    


	</div>

</div>



  </body>
</html>