<?php if (isset($_POST['tambahKK'])) {
	include "koneksi.php";


	$no_kk			= $_POST['no_kk'];
	$nik_kepala		= $_POST['nik_kepala'];
	$nm_kepala		= $_POST['nm_kepala'];
	$password		= md5($_POST['no_hp']);
	$alamat			= $_POST['alamat'];
	$rt				= $_POST['rt'];
	$rw				= $_POST['rw'];

	$query = "INSERT INTO tb_kk
VALUES('" . $no_kk . "','" . $nik_kepala . "','" . $nm_kepala . "','" . $password . "')";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		$query2 = "INSERT INTO `tb_warga`(`no_kk`,`nik`,`nm_lengkap`,`st_hubungan`, `alamat`,`rt`, `rw`, `desa`, `kecamatan`,`kab`, `provinsi`, `kode_pos`) 
	VALUES ('" . $no_kk . "','" . $nik_kepala . "','" . $nm_kepala . "','KEPALA KELUARGA','" . $alamat . "','" . $rt . "','" . $rw . "','Wergu Wetan','Kota','Kudus','Jawa Tengah','59171')";
		$sql2 = mysqli_query($conn, $query2);
		if ($sql2) {
			header("location:admin/kartu_keluarga.php");
		} else {
			header("location:admin/kartu_keluarga.php?pesan=gagal");
		}
	} else {
		header("location:admin/kartu_keluarga.php?pesan=gagal2");
	}
}
?>

<?php if (isset($_POST['updateKK'])) {
	include "koneksi.php";


	$no_kk			= $_POST['no_kk'];
	$nik_kepala		= $_POST['nik_kepala'];
	$nm_kepala		= $_POST['nm_kepala'];
	$password		= md5($_POST['no_hp']);
	$alamat			= $_POST['alamat'];
	$rt				= $_POST['rt'];
	$rw				= $_POST['rw'];

	$query = "UPDATE `tb_kk` SET nik_kepala='" . $nik_kepala . "',nm_kepala='" . $nm_kepala . "' where no_kk='" . $no_kk . "'";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		$query2 = "UPDATE `tb_warga` SET `nik`='" . $nik_kepala . "',
	`nm_lengkap`='" . $nm_kepala . "',
	 `alamat`='" . $alamat . "',
	 `rt`='" . $rt . "',
	 `rw`='" . $rw . "'	where `no_kk`='" . $no_kk . "'";
		$sql2 = mysqli_query($conn, $query2);
		if ($sql2) {
			header("location:admin/kartu_keluarga.php");
		} else {
			header("location:admin/kartu_keluarga.php?pesan=gagal");
		}
	} else {
		header("location:admin/kartu_keluarga.php?pesan=gagal2");
	}
}
?>

<?php if (isset($_POST['tambahWarga'])) {
	include "koneksi.php";


	$no_kk			= $_POST['no_kk'];
	$nik			= $_POST['nik'];
	$nm_lengkap		= $_POST['nm_lengkap'];
	$jk				= $_POST['jk'];
	$tmp_lahir		= $_POST['tmp_lahir'];
	$tgl_lahir		= $_POST['tgl_lahir'];
	$agama			= $_POST['agama'];
	$id_pendidikan	= $_POST['id_pendidikan'];
	$jpekerjaan		= $_POST['jpekerjaan'];
	$skawin			= $_POST['skawin'];
	$shubungan		= $_POST['shubungan'];
	$ayah			= $_POST['ayah'];
	$ibu			= $_POST['ibu'];
	$alamat			= $_POST['alamat'];
	$rt				= $_POST['rt'];
	$rw				= $_POST['rw'];

	$cek_rinci = mysqli_query($conn, "select * from tb_warga where nik='$nik'");
	$rincian = mysqli_fetch_array($cek_rinci);
	if ($rincian > 0) {
		$query2 = "UPDATE `tb_warga` SET
	jk = '" . $jk . "',
	tmp_lahir = '" . $tmp_lahir . "',
	tgl_lahir = '" . $tgl_lahir . "',
	agama = '" . $agama . "',
	id_pendidikan = '" . $id_pendidikan . "',
	jpekerjaan = '" . $jpekerjaan . "',
	st_kawin = '" . $skawin . "',
	ayah = '" . $ayah . "',
	ibu = '" . $ibu . "' where nik='$nik'";
		$sql2 = mysqli_query($conn, $query2);
		if ($sql2) {
			header("location:admin/warga.php");
		} else {
			header("location:admin/warga.php?pesan=gagal2");
		}
	} else {
		$query2 = "INSERT INTO `tb_warga`
	(`no_kk`, `nik`, `nm_lengkap`, `jk`, `tmp_lahir`, `tgl_lahir`, `agama`, `id_pendidikan`, `jpekerjaan`, `st_kawin`, `st_hubungan`, `ayah`, `ibu`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kab`, `provinsi`, `kode_pos`) VALUES 
	('" . $no_kk . "','" . $nik . "','" . $nm_lengkap . "','" . $jk . "','" . $tmp_lahir . "','" . $tgl_lahir . "','" . $agama . "','" . $id_pendidikan . "','" . $jpekerjaan . "','" . $skawin . "','" . $shubungan . "','" . $ayah . "','" . $ibu . "','" . $alamat . "','" . $rt . "','" . $rw . "','Kayen','Kayen','Pati','Jawa Tengah','59171')";
		$sql2 = mysqli_query($conn, $query2);
		if ($sql2) {
			header("location:admin/warga.php");
		} else {
			header("location:admin/warga.php?pesan=gagal1");
		}
	}
}
?>

<?php if (isset($_POST['tambahPendidikan'])) {
	include "koneksi.php";


	$jenjang_pendidikan			= $_POST['jenjang_pendidikan'];
	$ket						= $_POST['ket'];

	$query = "INSERT INTO tb_pendidikan VALUES ('','" . $jenjang_pendidikan . "','" . $ket . "','ADA')";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		header("location:admin/pendidikan.php");
	} else {
		header("location:admin/pendidikan.php?pesan=gagal");
	}
}
?>

<?php if (isset($_POST['updatePendidikan'])) {
	include "koneksi.php";

	$id_pendidikan				= $_POST['id_pendidikan'];
	$jenjang_pendidikan			= $_POST['jenjang_pendidikan'];
	$ket						= $_POST['ket'];

	$query = "UPDATE `tb_pendidikan` SET jenjang_pendidikan = '" . $jenjang_pendidikan . "',ket = '" . $ket . "' where id_pendidikan='" . $id_pendidikan . "'";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		header("location:admin/pendidikan.php");
	} else {
		header("location:admin/pendidikan.php?pesan=gagal");
	}
}
?>

<?php if (isset($_POST['hapusPendidikan'])) {
	include "koneksi.php";

	$id_pendidikan				= $_POST['id_pendidikan'];


	$query = "UPDATE `tb_pendidikan` SET status = 'HAPUS' where id_pendidikan='" . $id_pendidikan . "'";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		header("location:admin/pendidikan.php");
	} else {
		header("location:admin/pendidikan.php?pesan=gagal");
	}
}
?>

<?php if (isset($_POST['updateWarga'])) {
	include "koneksi.php";


	$no_kk			= $_POST['no_kk'];
	$nik			= $_POST['nik'];
	$nm_lengkap		= $_POST['nm_lengkap'];
	$jk				= $_POST['jk'];
	$tmp_lahir		= $_POST['tmp_lahir'];
	$tgl_lahir		= $_POST['tgl_lahir'];
	$agama			= $_POST['agama'];
	$id_pendidikan	= $_POST['id_pendidikan'];
	$jpekerjaan		= $_POST['jpekerjaan'];
	$skawin			= $_POST['skawin'];
	$shubungan		= $_POST['shubungan'];
	$ayah			= $_POST['ayah'];
	$ibu			= $_POST['ibu'];
	$alamat			= $_POST['alamat'];
	$rt				= $_POST['rt'];
	$rw				= $_POST['rw'];

	$query2 = "UPDATE `tb_warga` SET nm_lengkap='" . $nm_lengkap . "', jk = '" . $jk . "', tmp_lahir = '" . $tmp_lahir . "', tgl_lahir = '" . $tgl_lahir . "',
	agama = '" . $agama . "',
	id_pendidikan = '" . $id_pendidikan . "',
	jpekerjaan = '" . $jpekerjaan . "',
	st_kawin = '" . $skawin . "',
	st_hubungan = '" . $shubungan . "',
	ayah = '" . $ayah . "',
	ibu = '" . $ibu . "',
	alamat = '" . $alamat . "',
	rt = '" . $rt . "',
	rw = '" . $rw . "' where nik='$nik'";
	$sql2 = mysqli_query($conn, $query2);
	if ($sql2) {
		header("location:admin/warga.php");
	} else {
		header("location:admin/warga.php?pesan=gagal2");
	}
}
?>

<?php if (isset($_POST['hapusWarga'])) {
	include "koneksi.php";


	$no_kk			= $_POST['no_kk'];
	$nik			= $_POST['nik'];

	$query2 = "DELETE FROM `tb_warga` WHERE nik='$nik'";
	$sql2 = mysqli_query($conn, $query2);
	if ($sql2) {
		header("location:admin/warga.php");
	} else {
		header("location:admin/warga.php?pesan=gagal2");
	}
}
?>

<?php if (isset($_POST['tambahPetugas'])) {
	include "koneksi.php";


	$username			= $_POST['username'];
	$password			= md5($_POST['password']);
	$nm_user			= $_POST['nm_user'];
	$no_hp				= $_POST['no_hp'];
	$alamat				= $_POST['alamat'];

	$query = "INSERT INTO tb_user VALUES ('',
'" . $username . "',
'" . $password . "',
'" . $nm_user . "',
'" . $no_hp . "',
'" . $alamat . "',
'PETUGAS',
'ADA')";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		header("location:kepdes/petugas.php");
	} else {
		header("location:kepdes/petugas.php?pesan=gagal");
	}
}
?>

<?php if (isset($_POST['updateUser'])) {
	include "koneksi.php";

	$id_user			= $_POST['id_user'];
	$username			= $_POST['username'];
	$nm_user			= $_POST['nm_user'];
	$no_hp				= $_POST['no_hp'];
	$alamat				= $_POST['alamat'];

	$query = "UPDATE `tb_user` SET username='" . $username . "',
nm_user='" . $nm_user . "',
no_hp='" . $no_hp . "',
alamat='" . $alamat . "'
where id_user='" . $id_user . "'";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		header("location:kepdes/petugas.php");
	} else {
		header("location:kepdes/petugas.php?pesan=gagal");
	}
}
?>

<?php if (isset($_POST['hapusUser'])) {
	include "koneksi.php";

	$id_user			= $_POST['id_user'];


	$query = "UPDATE `tb_user` SET ket='HAPUS'
where id_user='" . $id_user . "'";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		header("location:kepdes/petugas.php");
	} else {
		header("location:kepdes/petugas.php?pesan=gagal");
	}
}
?>

<?php if (isset($_POST['tambahBantuan'])) {
	include "koneksi.php";


	$id_bantuan			= $_POST['id_bantuan'];
	$nm_bantuan			= $_POST['nm_bantuan'];
	$ket_bantuan		= $_POST['ket_bantuan'];
	$kuota_bantuan		= $_POST['kuota_bantuan'];
	$id_user			= $_POST['id_user'];

	$query = "INSERT INTO tb_bantuan VALUES ('" . $id_bantuan . "',
'" . $nm_bantuan . "',
'" . $ket_bantuan . "',
'" . $kuota_bantuan . "',
'" . $id_user . "')";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		header("location:kepdes/bantuan.php");
	} else {
		header("location:kepdes/bantuan.php?pesan=gagal");
	}
}
?>

<?php if (isset($_POST['updateBantuan'])) {
	include "koneksi.php";


	$id_bantuan			= $_POST['id_bantuan'];
	$nm_bantuan			= $_POST['nm_bantuan'];
	$ket_bantuan		= $_POST['ket_bantuan'];
	$kuota_bantuan		= $_POST['kuota_bantuan'];
	$id_user			= $_POST['id_user'];

	$query = "UPDATE `tb_bantuan` SET nm_bantuan='" . $nm_bantuan . "',
ket_bantuan='" . $ket_bantuan . "',
kuota_bantuan='" . $kuota_bantuan . "',
id_user='" . $id_user . "' where id_bantuan='" . $id_bantuan . "'";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		header("location:kepdes/bantuan.php");
	} else {
		header("location:kepdes/bantuan.php?pesan=gagal");
	}
}
?>

<?php if (isset($_POST['tambahPenerima'])) {
	include "koneksi.php";


	$no_kk			= $_POST['no_kk'];
	$id_bantuan		= $_POST['id_bantuan'];
	$tgl_info		= $_POST['tgl_info'];


	$query = "INSERT INTO `tb_penerima`(`id_penerima`,`no_kk`,`id_bantuan`,`tgl_info`,`status`) values
('','" . $no_kk . "','" . $id_bantuan . "','" . $tgl_info . "','INFO')";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		$query = "UPDATE `tb_bantuan` SET kuota_bantuan= kuota_bantuan - 1 where id_bantuan='" . $id_bantuan . "'";
		$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
		if ($sql) {
			header("location:admin/penerima.php");
		} else {
			header("location:admin/penerima.php?pesan=gagal");
		}
	} else {
		header("location:admin/penerima.php?pesan=gagal");
	}
}
?>

<?php if (isset($_POST['hapusPenerima'])) {
	include "koneksi.php";


	$id_penerima	= $_POST['id_penerima'];


	$query = "DELETE FROM `tb_penerima` where id_penerima='" . $id_penerima . "'";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		$query = "UPDATE `tb_bantuan` SET kuota_bantuan= kuota_bantuan + 1";
		$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
		if ($sql) {
			header("location:admin/penerima.php");
		} else {
			header("location:admin/penerima.php?pesan=gagal");
		}
	} else {
		header("location:admin/penerima.php?pesan=gagal");
	}
}
?>

<?php if (isset($_POST['konfirmasiPenerima'])) {
	include "koneksi.php";


	$id_penerima	= $_POST['id_penerima'];
	$tgl_info		= $_POST['tgl_info'];
	$penerima		= $_POST['penerima'];



	$query = "UPDATE `tb_penerima` SET tgl_konfirmasi= '" . $tgl_info . "',diterima_oleh='" . $penerima . "', status='KONFIRMASI'
	where id_penerima='" . $id_penerima . "'";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		header("location:petugas/");
	} else {
		header("location:petugas/?pesan=gagal");
	}
}
?>

<?php if (isset($_POST['prosesPenerima'])) {
	include "koneksi.php";


	$id_penerima	= $_POST['id_penerima'];
	$tgl_info		= $_POST['tgl_info'];



	$query = "UPDATE `tb_penerima` SET tgl_realisasi= '" . $tgl_info . "', status='PROSES'
	where id_penerima='" . $id_penerima . "'";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		header("location:petugas/konfirmasi.php");
	} else {
		header("location:petugas/konfirmasi.php?pesan=gagal");
	}
}
?>

<?php if (isset($_POST['selesaiPenerima'])) {
	include "koneksi.php";


	$id_penerima	= $_POST['id_penerima'];
	$tgl_info		= $_POST['tgl_info'];



	$query = "UPDATE `tb_penerima` SET tgl_selesai= '" . $tgl_info . "', status='SELESAI'
	where id_penerima='" . $id_penerima . "'";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		header("location:petugas/proses.php");
	} else {
		header("location:petugas/proses.php?pesan=gagal");
	}
}
?>

<?php if (isset($_POST['tambahBerita'])) {
	include "koneksi.php";

	$judul			= $_POST['judul'];
	$isi			= $_POST['isi'];
	$tgl_upload		= $_POST['tgl_upload'];

	// Cek apakah gambar berhasil diupload atau tidak  // Proses simpan ke Database
	$file = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];

	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$filebaru = date('dmYHis') . $file;
	// Set path folder tempat menyimpan fotonya
	$path = "berita/gambar/berita/" . $filebaru;

	if (move_uploaded_file($tmp, $path)) {
		// Cek apakah gambar berhasil diupload atau tidak  // Proses simpan ke Database
		$query = "INSERT INTO berita VALUES('',
'" . $judul . "',
'" . $isi . "',
'" . $filebaru . "',
'" . $tgl_upload . "')";
		$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
		if ($sql) {

			header("location: admin/berita.php");
		} else {
			header("location:admin/berita.php?pesan=gagal_tambah_barang");
		}
	} else {
		// Jika gambar gagal diupload, Lakukan :  
		$query = "INSERT INTO berita VALUES('',
'" . $judul . "',
'" . $isi . "',
'utama.jpg',
'" . $tgl_upload . "')";
		$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
		if ($sql) {

			header("location: admin/berita.php");
		} else {
			header("location:admin/berita.php?pesan=gagal_tambah_barang");
		}
	}
}
?>

<?php if (isset($_POST['ubahBerita'])) {
	include "koneksi.php";

	$id_berita		= $_POST['id_berita'];
	$judul			= $_POST['judul'];
	$isi			= $_POST['isi'];
	$tgl_upload		= $_POST['tgl_upload'];

	// Cek apakah gambar berhasil diupload atau tidak  // Proses simpan ke Database
	$file = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];

	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$filebaru = date('dmYHis') . $file;
	// Set path folder tempat menyimpan fotonya
	$path = "berita/gambar/berita/" . $filebaru;

	if (move_uploaded_file($tmp, $path)) {
		// Cek apakah gambar berhasil diupload atau tidak  // Proses simpan ke Database
		$query = "UPDATE `berita` SET judul='" . $judul . "', isi='" . $isi . "', gambar='" . $filebaru . "' where id_berita='" . $id_berita . "'";
		$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
		if ($sql) {

			header("location: admin/berita.php");
		} else {
			header("location:admin/berita.php?pesan=gagal_tambah_barang");
		}
	} else {
		// Jika gambar gagal diupload, Lakukan :  
		$query = "UPDATE `berita` SET judul='" . $judul . "', isi='" . $isi . "' where id_berita='" . $id_berita . "'";
		$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
		if ($sql) {

			header("location: admin/berita.php");
		} else {
			header("location:admin/berita.php?pesan=gagal_tambah_barang");
		}
	}
}
?>

<?php if (isset($_POST['hapusBerita'])) {
	include "koneksi.php";

	$id_berita		= $_POST['id_berita'];

	$query = "DELETE FROM `berita` where id_berita='" . $id_berita . "'";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {

		header("location: admin/berita.php");
	} else {
		header("location:admin/berita.php?pesan=gagal_tambah_barang");
	}
}
?>

<?php if (isset($_POST['cancelBerita'])) {
	header("location: admin/berita.php");
}
?>