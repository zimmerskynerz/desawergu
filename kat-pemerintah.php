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

<article class="card-post">
  <div class="container">
     <div class="row">
<?php 
include 'config.php';
?>

<?php 
  $perhalaman=6;
  $data=mysqli_query($GLOBALS["___mysqli_ston"], "select * from post");
  $jum=mysqli_num_rows($data);
  $halaman=ceil($jum/$perhalaman);

  
  $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM post where idkategori=2");
          while ($r=mysqli_fetch_array($sql)){ 
          ?>
         
                <div class="col-sm-4">
                    <div class="card-post card-deck">
                        <div class="card">
                            <a class="card-post-link" href="post.php?page=artikel&id_post=<?php echo $r['id_post']; ?>">
                            <img class="card-img-top" src="gambar/berita/<?php echo $r['gambar']; ?>" height="200" width="700px" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $r['judul']; ?></h5>
                            </div>
                            </a>
                        </div>
          </div>
          
         </div>   
<?php } ?> 

</div>
  
  </div>

</article>





</body>
</html>
			   