<?php
include('../session.php');
include('../koneksi.php');
$no_kk = $_GET['no_kk'];
$result = mysqli_query($conn, "select * from tb_kk inner join tb_warga on tb_kk.no_kk=tb_warga.no_kk
where tb_kk.no_kk='$no_kk'");
$row = mysqli_fetch_array($result);
?>
<html>
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">

			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Detail Kartu Keluarga</h5>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="modal-body">
			<form action="../sql_query.php" enctype="multipart/form-data" method="POST">
				<fieldset>
					<div class="form-group">
						<input type="text" name="no_kk" class="form-control" readonly value="<?= $row['no_kk']; ?>" id="no_kk" placeholder="Nomor Kartu Keluarga" required>
					</div>
					<div class="form-group">

						<input type="text" name="nik_kepala" readonly class="form-control" id="nik_kepala" value="<?= $row['nik_kepala']; ?>" placeholder="NIK Kepala Keluarga" required>
					</div>
					<div class="form-group">

						<input type="text" name="nm_kepala" class="form-control" id="nm_kepala" value="<?= $row['nm_kepala']; ?>" placeholder="Nama Kepala Keluarga" required>
					</div>
					<div class="form-group">

						<input type="text" hidden name="password" class="form-control" id="password" value="1234" required>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">

							<textarea type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat/Jalan" required><?= $row['alamat']; ?></textarea>
						</div>
						<div class="form-group col-md-2">

							<input type="text" name="rt" class="form-control" id="rt" placeholder="RT" value="<?= $row['rt']; ?>" required>
						</div>
						<div class="form-group col-md-2">

							<input type="text" name="rw" class="form-control" id="rw" placeholder="RW" value="<?= $row['rw']; ?>" required>
						</div>
					</div>
					<div class="input-group">
						<input type="text" value="<?php echo date('Y-m-d'); ?>" hidden name="tgl_daftar">
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<button id="updateKK" name="updateKK" type="submit" class="btn btn-success">Simpan</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>

</html>