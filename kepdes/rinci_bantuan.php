<?php
include('../koneksi.php');
$id_bantuan = $_GET['id_bantuan'];
$result=mysqli_query($conn, "select *,tb_bantuan.id_user as id_user, tb_user.nm_user as nm_user
 from tb_bantuan inner join tb_user on tb_bantuan.id_user=tb_user.id_user where id_bantuan='$id_bantuan'");
$row=mysqli_fetch_array($result);
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Rinci Data Bantuan</h4>
</div>
<div class="modal-body">
				<form class="form-horizontal" action="../sql_query.php" name="modal-popup" enctype="multipart/form-data" method="POST" id="form-edit">
					<div class="form-group">
					<label>Kode Bantuan</label>
					<input type="text" name="id_bantuan" readonly class="form-control" id="id_bantuan" value="<?= $row['id_bantuan'];?>" required>
					</div>	
					<div class="form-group">
					<label>Nama Bantuan</label>
					<input type="text" name="nm_bantuan" class="form-control" id="nm_bantuan" value="<?= $row['nm_bantuan'];?>" required>
					</div>
					<div class="form-group">
					<label>Keterangan bantuan</label>
					<textarea type="text" name="ket_bantuan" class="form-control" id="ket_bantuan"><?= $row['ket_bantuan'];?></textarea>
					</div>
					<div class="form-group">
					<label>Kuota Bantuan</label>
					<input type="text" name="kuota_bantuan" class="form-control" id="kuota_bantuan" value="<?= $row['kuota_bantuan'];?>" required>
					</div>
					<div class="form-group">
					<select class="form-control" id="id_user" name="id_user">
					<option value="<?= $row['id_user'];?>"><?= $row['nm_user'];?></option>
					<?php
								$userr = mysqli_query($conn, "Select * from tb_user where jabatan='PETUGAS'");
								// Query untuk menampilkan semua data anggota
								if(mysqli_num_rows($userr) == 0){
									echo "<option>Tidak ada Petugas </option>";
								}else{
								while($row = mysqli_fetch_assoc($userr)){
									echo "
									<option value=".$row['id_user'].">".$row['id_user']." - ".$row['nm_user']."</option>";
								}
								}
								?>
					</select>
					</div>					
                            <div class="modal-footer">
								<button type="submit" id="updateBantuan" name="updateBantuan" class="btn btn-success"><i class="icon-edit icon-white"></i> Ubah</button>
                            </div>
					</form>

        </div>
    </div>
</div>

