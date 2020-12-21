<?php 
include 'config.php'; //ngoneksi data base yg sudah dibuat di koneksi.php

@$nama	        = $_POST["nama"];
@$NIK			= $_POST["NIK"];
@$password		= $_POST["password"];
@$gender		= $_POST["pilihan"];
@$alamat		= $_POST["alamat"];
@$telepon		= $_POST["telepon"];
@$gambar        = 'user.jpeg';

$simpan= mysqli_query($GLOBALS["___mysqli_ston"], "insert into user_penerima values ('','$nama','$NIK','$password','$gender','$alamat','$telepon','$gambar')"); // query insert
if ($simpan) {
	?>
	<script language="JavaScript">
	alert('Data berhasil disimpan, Silahkan Login Menggunakan NIK dan Password'); //scrip peringatan
	document.location='post.php?page=user_penerima'; //scrip blayune bar di proses
	</script>
	<?php
}else{
echo "Data Galal Tersimpan";
}
?>
