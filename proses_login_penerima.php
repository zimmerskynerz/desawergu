<?php
include "config.php";
@$username = $_POST['nik'];
@$password = $_POST['password'];

$query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM data_warga
                      WHERE nik='$username' AND password='$password'");
$data = mysqli_fetch_array($query);

$ketemu=mysqli_num_rows($query);

if ($ketemu > 0){
	session_start();
	$_SESSION['nik'] = $username;
	$nama=$data["nama"];	
	$_SESSION["id"]=$data["id_warga"];	
    //$_SESSION['password']    = $password;

	echo "<script>alert('Selamat datang $nama'); window.location = 'index_user_penerima.php'</script>";	
} else {
	echo "<script>alert('Username dan Password tidak valid.'); window.location = 'login_user.php'</script>";	
}
?>