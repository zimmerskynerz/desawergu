<?php
session_start();    //memulai session
                    
if (isset($_SESSION['id'])=="") {    //jika session ses_email kosong / belum login maka...
    echo"<meta http-equiv='refresh' content='0;url=login_user.php'>"; //merefresh ke halaman login
} else {    //jika session ses_email tidak kosong / sudah login maka...

require_once "config.php";

$sql3 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT id_penerima, nama, NIK, password, gender, alamat, telepon FROM user_penerima where id_penerima=".$_SESSION['id']."") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
while ($data = mysqli_fetch_array($sql3)) {	  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kayen Desa Makmur</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
      <marquee><h4><font color="f6f6f6">SELAMAT DATANG <?php echo $data['nama']; ?> DI SISTEM INFORMASI PEMESANAN ROTI JOHN 99 KUDUS</font></h4></marquee>
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-danger ">
          
          <a class="navbar-brand" href="index.php"><img src="img/kadema.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
          <a class="nav-link" href="index_user_penerima.php"> <button type="button" class="btn btn-outline-light">Beranda</button> <span class="sr-only">(current)</span></a>
		 
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="post_user_penerima.php?page=danabantuan"> <button type="button" class="btn btn-outline-light">Jenis Bantuan</button></a>
        
      </li>
        <li class="nav-item ">
        <a class="nav-link" href="post_user_penerima.php?page=profil_penerima"> <button type="button" class="btn btn-outline-light">Profil Penerima</button></a>
        
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="post_user_penerima.php?page=hubungi"> <button type="button" class="btn btn-outline-light">User Penerima</button></a>
      </li>
      
      
	  <li class="nav-item ">
        <a class="nav-link" href="logout.php"> <button type="button" class="btn btn-outline-light">Logout</button></a>
        
      </li>
    </ul>
      
  </div>
</nav>
      

<div class="jumbotron">
<?php
  require_once "config.php";

$id	= $_GET["id_penerima"];

	
	
	$sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM user_penerima WHERE id_penerima='$id'")
		or die (mysql_eror());
	
$user = mysqli_fetch_array($sql);
		;


?>
<div class="row">
  <center><div class="title" style="margin-left: ;"><h3>Silahkan Edit Profil Penerima Anda...</h3></div></center>
           <form class="form-horizontal" method="post" action="proses_ubah_profil_penerima.php" enctype="multipart/form-data">
<table style="font-style: oblique; font-weight: bold; margin-left: 140px;">
<tr>
<td width="150">Kode Customer</td>
<td width="30">:</td>
<td width="550"><input type="text" name="id_penerima" value="<?php echo $user["id_penerima"]; ?>" size="30" class="required" minlength="3" placeholder="Kode Customer" readonly/></td>
</tr>
<tr>
<td width="150">Nama</td>
<td width="30">:</td>
<td width="550"><input type="text" name="nama" value="<?php echo $user["nama"]; ?>" size="30" class="required" minlength="3" placeholder="Nama Anda" /></td>
</tr>
<tr>
<td width="150">Email</td>
<td width="30">:</td>
<td width="550"><input type="text" name="NIK" size="30" value="<?php echo $user["NIK"]; ?>" class="required email" minlength="3" placeholder="Alamat Email" /></td>
</tr>
<tr>
<td width="150">Password</td>
<td width="30">:</td>
<td width="550"><input type="text" name="password" value="<?php echo $user["password"]; ?>" size="30" class="required" minlength="3" placeholder="Password " /></td>
</tr>
<tr>
<td width="150">Gender</td>
<td width="30">:</td>
<td width="550"><select name="gender" class="form-control">
                             <option value="Pilih Gender">--Pilih Gender--</option>
                     <option value="Laki-Laki" <?php if ($user["gender"]=='Laki-Laki') {echo "selected";} ?>>Laki-Laki</option>
                              <option value="Perempuan" <?php if ($user["gender"]=='Perempuan') {echo "selected";} ?>>Perempuan</option>
							  </select></td>
</tr>
<tr>
<td width="150">Alamat</td>
<td width="30">:</td>
<td width="550"><textarea name="alamat" size="30"  minlength="3" placeholder="Alamat" /><?php echo $user["alamat"]; ?></textarea></td>
</tr>

<tr>
<td width="150">Telepon</td>
<td width="30">:</td>
<td width="550"><input type="text" name="telepon" size="30" value="<?php echo $user["telepon"]; ?>" class="required email" minlength="3" placeholder="Telepon" /></td>
</tr>

<tr>
<td width="150">Gambar</td>
<td width="30">:</td>
<td width="550"><input type="text" name="gambar" size="30" value="<?php echo $user["gambar"]; ?>" class="required email" minlength="3" placeholder="Telepon" /></td>
</tr>

<tr>
<td width="150"></td>
<td width="30"></td>
<td width="550">
<input class="btn btn-xs btn-danger" type="submit" value="Edit"/>
<button type="reset" class="btn btn-xs btn-warning" name="btnBatal" onClick="window.location.href='profil.php'">Batal</button>

</td>

</tr>
</table>
</form>
  



</div>

       
   
   
      

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
<br>

<p class="text-center">Copy Right Info Kadema 2019</p>

</div>
</div>
<?php
}
}
?>

  </body>
</html>

			   