<?php
include('../koneksi.php');
$nik = $_GET['nik'];
$result = mysqli_query($conn, "select * from tb_warga inner join tb_pendidikan on tb_pendidikan.id_pendidikan=tb_warga.id_pendidikan where nik='" . $nik . "'");
$row = mysqli_fetch_array($result);
?>

<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">Rincian Data Warga</h4>
		</div>
		<div class="modal-body">
			<form class="form-horizontal" action="../sql_query.php" name="modal-popup" enctype="multipart/form-data" method="POST" id="form-edit">
				<div class="form-group">
					<label>Nomor Kartu Keluarga</label>
					<input type="text" name="no_kk" readonly class="form-control" id="no_kk" value="<?= $row['no_kk']; ?>" required>
				</div>
				<div class="form-group">
					<label>Nomor Induk Kependudukan</label>
					<input type="text" name="nik" class="form-control" id="nik" readonly value="<?= $row['nik']; ?>" placeholder="NOMOR INDUK KEPENDUDUKAN" required>
				</div>
				<div class="form-group">
					<input type="text" name="nm_lengkap" class="form-control" id="nm_lengkap" value="<?= $row['nm_lengkap']; ?>" placeholder="Nama Lengkap" required>
				</div>
				<div class="form-group">
					<select class="form-control" id="jk" name="jk">
						<option value="<?= $row['jk']; ?>"><?= $row['jk']; ?></option>
						<option value="LAKI-LAKI">LAKI-LAKI</option>
						<option value="PEREMPUAN">PEREMPUAN</option>
					</select>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir" value="<?= $row['tmp_lahir']; ?>" placeholder="Tempat Lahir" required>
					</div>
					<div class="form-group col-md-8">
						<input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?= $row['tgl_lahir']; ?>" placeholder="Tanggal Lahir" required>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-5">
						<select class="form-control" id="agama" name="agama">
							<option value="<?= $row['agama']; ?>"><?= $row['agama']; ?></option>
							<option value="ISLAM">ISLAM</option>
							<option value="KRISTEN">KRISTEN</option>
							<option value="KATHOLIK">KATHOLIK</option>
							<option value="HINDU">HINDU</option>
							<option value="BUDDHA">BUDDHA</option>
							<option value="KONGHUCU">KONGHUCU</option>
						</select>
					</div>
					<div class="form-group col-md-7">
						<select class="form-control" id="id_pendidikan" name="id_pendidikan">
							<option value="<?= $row['id_pendidikan']; ?>"><?= $row['jenjang_pendidikan']; ?></option>
							<?php
							$userr = mysqli_query($conn, "Select * from tb_pendidikan where status='ADA'");
							// Query untuk menampilkan semua data anggota
							if (mysqli_num_rows($userr) == 0) {
								echo "<option>Tidak ada </option>";
							} else {
								while ($data = mysqli_fetch_assoc($userr)) {
									echo "
									<option value=" . $data['id_pendidikan'] . ">" . $data['jenjang_pendidikan'] . "</option>";
								}
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<input type="text" name="jpekerjaan" value="<?= $row['jpekerjaan']; ?>" class="form-control" id="jpekerjaan" placeholder="Pekerjaan" required>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<select class="form-control" id="skawin" name="skawin">
							<option value="<?= $row['st_kawin']; ?>"><?= $row['st_kawin']; ?></option>
							<option value="KAWIN">KAWIN</option>
							<option value="BELUM KAWIN">BELUM KAWIN</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<select class="form-control" id="shubungan" name="shubungan">
							<option value="<?= $row['st_hubungan']; ?>"><?= $row['st_hubungan']; ?></option>
							<option value="ISTRI">ISTRI</option>
							<option value="ANAK">ANAK</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<input type="text" name="ayah" class="form-control" value="<?= $row['ayah']; ?>" id="ayah" placeholder="Nama Ayah" required>
					</div>
					<div class="form-group col-md-6">
						<input type="text" name="ibu" class="form-control" value="<?= $row['ibu']; ?>" id="ibu" placeholder="Nama Ibu" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<textarea type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat/Jalan" required><?= $row['alamat']; ?></textarea>
					</div>
					<div class="form-group col-md-3">
						<input type="text" name="rt" class="form-control" value="<?= $row['rt']; ?>" id="rt" placeholder="RT" required>
					</div>
					<div class="form-group col-md-3">
						<input type="text" name="rw" class="form-control" value="<?= $row['rw']; ?>" id="rw" placeholder="RW" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" id="updateWarga" name="updateWarga" class="btn btn-success"><i class="icon-edit icon-white"></i> Ubah</button>
					<button type="submit" id="hapusWarga" name="hapusWarga" class="btn btn-danger"><i class="icon-trash icon-white"></i> Hapus</button>
				</div>
			</form>

		</div>
	</div>
</div>