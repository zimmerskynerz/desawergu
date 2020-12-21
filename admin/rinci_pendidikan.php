<?php
include('../koneksi.php');
$id_pendidikan = $_GET['id_pendidikan'];
$result = mysqli_query($conn, "select * from tb_pendidikan where id_pendidikan='" . $id_pendidikan . "'");
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
					<label for="id_pendidikan">Kode Pendidikan<span>
							<font color="red"> *</font>
						</span></label>
					<input type="text" name="id_pendidikan" value="<?= $row['id_pendidikan']; ?>" class="form-control" readonly id="id_pendidikan" placeholder="Jenjang Pendidikan" required>
				</div>
				<div class="form-group">
					<label for="jenjang_pendidikan">Jenjang Pendidikan<span>
							<font color="red"> *</font>
						</span></label>
					<input type="text" name="jenjang_pendidikan" value="<?= $row['jenjang_pendidikan']; ?>" class="form-control" id="jenjang_pendidikan" placeholder="Jenjang Pendidikan" required>
				</div>
				<div class="form-group">
					<label for="no_hp">KETERANGAN<span>
							<font color="red"> *</font>
						</span></label>
					<textarea type="text" name="ket" class="form-control" id="ket" placeholder="Ket Pendidikan" required> <?= $row['ket']; ?></textarea>
				</div>
				<div class="modal-footer">
					<button type="submit" id="updatePendidikan" name="updatePendidikan" class="btn btn-success"><i class="icon-edit icon-white"></i> Ubah</button>
					<button type="submit" id="hapusPendidikan" name="hapusPendidikan" class="btn btn-danger"><i class="icon-trash icon-white"></i> Hapus</button>
				</div>
			</form>

		</div>
	</div>
</div>