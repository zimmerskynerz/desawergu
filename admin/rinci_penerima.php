<?php
include('../koneksi.php');
$id_penerima = $_GET['id_penerima'];
$result = mysqli_query($conn, "select * from tb_penerima where id_penerima='" . $id_penerima . "'");
$row = mysqli_fetch_array($result);
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Apakah ingin membatalkan bantuan?</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" action="../sql_query.php" name="modal-popup" enctype="multipart/form-data" method="POST" id="form-edit">
                <div class="modal-footer">
                    <input hidden type="text" name="id_penerima" value="<?= $row['id_penerima']; ?>" class="form-control" readonly id="id_penerima" placeholder="Jenjang Pendidikan" required>
                    <button type="submit" id="hapusPenerima" name="hapusPenerima" class="btn btn-danger"><i class="icon-trash icon-white"></i> Hapus</button>
                </div>
            </form>

        </div>
    </div>
</div>