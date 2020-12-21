<?php
include('../koneksi.php');
include('../session.php');

$jml_mck = mysqli_query($conn, "SELECT * FROM `tb_penerima` WHERE id_bantuan='MCK'");

$jml_bpnt = mysqli_query($conn, "SELECT * FROM `tb_penerima` WHERE id_bantuan='BNPT'");

$jml_rtlh = mysqli_query($conn, "SELECT * FROM `tb_penerima` WHERE id_bantuan='RTLH'");

$jml_bpkh = mysqli_query($conn, "SELECT * FROM `tb_penerima` WHERE id_bantuan='BPKH'");

?>

<script language=javascript>
	function printWindow() {
		bV = parseInt(navigator.appVersion);
		if (bV >= 4) window.print();
	}
	printWindow();
</script>
<table align="center">
	<thead>
		<tr>
			<th><a style="font-family: arial; font-size: 26px; padding-top: 10px; padding-bottom: 10px" colspan="2">LAPORAN PENERIMAAN BANTUAN</a><br>
				<a style="font-family: arial; font-size: 26px; padding-top: 10px; padding-bottom: 10px" colspan="2">DESA Wergu Wetan, KEC. Kota</a><br>
				<a style="font-family: arial; font-size: 26px padding-top: 10px; padding-bottom: 10px" colspan="2">KAB. Kudus - JAWATENGAH</a><br>
				<a style="font-family: arial; font-size: 10px; padding-top: 10px; padding-bottom: 10px" colspan="2">BPKH : <?= mysqli_num_rows($jml_bpkh); ?>; RTLH : <?= mysqli_num_rows($jml_rtlh); ?>; BPNT : <?= mysqli_num_rows($jml_bpnt); ?>; MCK : <?= mysqli_num_rows($jml_mck); ?>;</a>
			</th>
		</tr>
		<tr>
			<td colspan="2">
				<a style="font-family: arial;  padding-top: 10px; padding-bottom: 10px" colspan="2">===========================================================================================================</a><br>
			</td>
		</tr>
	</thead>
	<tbody>
		<table align="center" width="1000">
			<tr>
				<th><i class="fa fa-truck"></i> Nomor KK</th>
				<th><i class="fa fa-truck"></i> Kepala Keluarga</th>
				<th><i class="fa fa-tags"></i> Tanggal Konfirmasi</th>
				<th><i class="fa fa-tags"></i> NIK Penerima</th>
				<th><i class="fa fa-bookmark"></i> Kode Bantan</th>
				<th><i class="fa fa-bookmark"></i> Tanggal Selesai</th>
				<th><i class=" fa fa-edit"></i> Nama Petugas</th>
				<th></th>
			</tr>
			<?php

			$sql_tampil = "select tb_kk.no_kk, tb_kk.nm_kepala,DATE_FORMAT(tb_penerima.tgl_konfirmasi, '%d %M %Y') as tgl_konfirmasi,tb_penerima.diterima_oleh as penerima,tb_penerima.id_bantuan as id_bantuan, tb_bantuan.nm_bantuan as nm_bantuan, DATE_FORMAT(tb_penerima.tgl_selesai, '%d %M %Y') as tgl_selesai, tb_user.nm_user as nm_petugas from tb_user JOIN tb_bantuan on tb_bantuan.id_user=tb_user.id_user join tb_penerima on tb_penerima.id_bantuan=tb_bantuan.id_bantuan join tb_kk on tb_kk.no_kk=tb_penerima.no_kk 
								";

			// Query untuk menampilkan semua data buku  
			$query_tampil = mysqli_query($conn, $sql_tampil);
			while ($data = mysqli_fetch_assoc($query_tampil)) {
			?>
				<tr>
					<td align="center"><?php echo $data['no_kk'] ?></td>
					<td align="center"><?php echo $data['nm_kepala'] ?></td>
					<td align="center"><?php echo $data['tgl_konfirmasi'] ?></td>
					<td align="center"><?php echo $data['penerima'] ?></td>
					<td align="center"><?php echo $data['id_bantuan'] ?></td>
					<td align="center"><?php echo $data['tgl_selesai'] ?></td>
					<td align="center"><?php echo $data['nm_petugas'] ?></td>
				</tr>
			<?php

			}
			?>
			</tr>
		</table>
		<table align="center">
			<thead>
				<table align="center">
					<thead>
						<tr>
							<td colspan="2">
								<a style="font-family: arial;  padding-top: 10px; padding-bottom: 10px" colspan="2">===========================================================================================================</a>
							</td>
						</tr>
				</table>
		</table>