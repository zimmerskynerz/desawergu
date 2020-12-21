<?php
include('../koneksi.php');
$id_user = $_GET['id_user'];
$result=mysqli_query($conn, "select * from tb_user where id_user='$id_user'");
$row=mysqli_fetch_array($result);
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Rincian Data Petugas</h4>
</div>
<div class="modal-body">
				<form class="form-horizontal" action="../sql_query.php" name="modal-popup" enctype="multipart/form-data" method="POST" id="form-edit">
					<div class="form-group">
					<label>Kode Petugas</label>
					<input type="text" name="id_user" readonly class="form-control" id="id_user" value="<?= $row['id_user'];?>" required>
					</div>	
					<div class="form-group">
					<label>USERNAME</label>
					<input type="text" name="username" class="form-control" id="username" value="<?= $row['username'];?>" required>
					</div>
					<div class="form-group">
					<label>Nama Petugas</label>
					<input type="text" name="nm_user" class="form-control" id="nm_user" value="<?= $row['nm_user'];?>" required>
					</div>	
					<div class="form-group">
					<label>Nomor Telepon</label>
					<input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $row['no_hp'];?>" required>
					</div>	
					<div class="form-group">
					<label>Alamat</label>
					<textarea type="text" name="alamat" class="form-control" id="alamat"><?= $row['alamat'];?></textarea>
					</div>										
                            <div class="modal-footer">
								
								<button type="submit" id="hapusUser" name="hapusUser" class="btn btn-danger"><i class="icon-trash icon-white"></i> Hapus</button>
								<button type="submit" id="updateUser" name="updateUser" class="btn btn-success"><i class="icon-edit icon-white"></i> Ubah</button>
                            </div>
					</form>

        </div>
    </div>
</div>

