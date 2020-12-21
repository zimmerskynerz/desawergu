<?php
if (isset($_POST['login']))
		{ 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from tb_user where username='$username' and password='$password' and ket='ADA'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['jabatan']=="ADMINISTRASI"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jabatan'] = "ADMINISTRASI";
		// alihkan ke halaman dashboard admin
		header("location:admin/");
 
	// cek jika user login sebagai pegawai
	}else if($data['jabatan']=="KEPDES"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jabatan'] = "KEPDES";
		// alihkan ke halaman dashboard pegawai
		header("location:kepdes/");
 
	// cek jika user login sebagai pengurus
	}else if($data['jabatan']=="PETUGAS"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jabatan'] = "PETUGAS";
		// alihkan ke halaman dashboard pegawai
		header("location:petugas/");
 
	// cek jika user login sebagai pengurus
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal1");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
		}
?>