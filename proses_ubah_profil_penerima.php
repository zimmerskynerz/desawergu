
<?php
include 'config.php';
$id_penerima	= $_POST["id_penerima"];
$nama	= $_POST["nama"];
$NIK			= $_POST["NIK"];
$password		= $_POST["password"];
$gender		= $_POST["gender"];
$alamat			= $_POST["alamat"];
$telepon		= $_POST["telepon"];
$gambar		= $_POST["gambar"];

$update=mysqli_query($GLOBALS["___mysqli_ston"], "update user_penerima set nama='$nama',NIK='$NIK',password='$password',gender='$gender',alamat='$alamat',telepon='$telepon',gambar='$gambar' where id_penerima='$id_penerima'");
if($update){
?>
	<script language="JavaScript">
	alert('Berhasil Diupdate');
	document.location='post_user_penerima.php?page=profil_penerima';
	</script>
<?php 
}else{
echo 'Gagal Di Edit';
}
?>