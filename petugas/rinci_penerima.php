<?php
include('../koneksi.php');
$id_penerima = $_GET['id_penerima'];
$result=mysqli_query($conn, "select * from tb_penerima where id_penerima='".$id_penerima."'");
$row=mysqli_fetch_array($result);
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel"> 
			<?php
				if($row['status'] == 'INFO' ){?>
					Bantuan Telah Di Konfirmasi!
			<?php }?>
			<?php
				if($row['status'] == 'KONFIRMASI' ){?>
					Konfirmasi Bantuan Telah Di Proses!
			<?php }?>
			<?php
				if($row['status'] == 'PROSES' ){?>
					Konfirmasi Bantuan Telah Selesai!
			<?php }?>
			<?php
				if($row['status'] == 'SELESAI' ){?>
					Cetak Laporan Bantuan!
			<?php }?></h4>
</div>
<div class="modal-body">
				<form class="form-horizontal" action="../sql_query.php" name="modal-popup" enctype="multipart/form-data" method="POST" id="form-edit">			
                            <div class="modal-footer">
							<input hidden type="text" name="id_penerima" value="<?= $row['id_penerima'];?>" class="form-control" readonly id="id_penerima" placeholder="Jenjang Pendidikan" required>
												<div class="input-group">
						<input type="text" value="<?php echo date('Y-m-d'); ?>" hidden name="tgl_info" id="tgl_info"> 
					</div>
				<?php
				if($row['status'] == 'INFO' ){?>
				<input type="text" name="penerima" class="form-control" id="penerima" placeholder="NIK Warga Konfirmasi" required>
					<button type="submit" id="konfirmasiPenerima" name="konfirmasiPenerima" class="btn btn-success"><i class="icon-trash icon-white"></i> Konfirmasi</button>
				<?php }?>
				<?php
				if($row['status'] == 'KONFIRMASI' ){?>
					<button type="submit" id="prosesPenerima" name="prosesPenerima" class="btn btn-success"><i class="icon-trash icon-white"></i> Proses</button>
				<?php }?> 
				<?php
				if($row['status'] == 'PROSES' ){?>
					<button type="submit" id="selesaiPenerima" name="selesaiPenerima" class="btn btn-success"><i class="icon-trash icon-white"></i> Selesai</button>
				<?php }?> 				
							</div>
				</form>

        </div>
    </div>
</div>

