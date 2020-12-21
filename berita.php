<link href="css/bootstrap.min.css" rel="stylesheet">

<?php 
include 'config.php';
@$id_berita=$_GET['id_berita'];
@$sql = mysqli_query($GLOBALS["___mysqli_ston"], "select * from berita where id_berita='$id_berita'");
$r=mysqli_fetch_array($sql)
?>
<?php $konten = $r['isi'];?>
<div class="jumbotron">
  <h3><?php echo $r['judul']; ?></h3>
<button type="button" class="btn btn-success">
  Date <span class="badge badge-light"><?php echo $r['tanggal']; ?></span>
</button>
   <img class="img-thumbnail" src="berita/gambar/berita/<?php echo $r['gambar']; ?>" height="400" width="900">
  <p class="text-justify"><?php echo $konten; ?></p>

</div>