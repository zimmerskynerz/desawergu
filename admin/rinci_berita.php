<?php
include('../koneksi.php');
$id_berita = $_GET['id_berita'];
$result = mysqli_query($conn, "select * from berita where id_berita='" . $id_berita . "'");
$row = mysqli_fetch_array($result);
?>
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<script language="javascript" type="text/javascript" src="ckeditor/ckeditor.js"></script>
<div class="modal-dialog col-md-12" role="document">
  <div class="modal-content col-md-12">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ubah Berita</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="../sql_query.php" enctype="multipart/form-data" method="POST">
        <div class="form-group">
          <label class="sr-only">Judul</label>
          <input name="judul" id="judul" type="text" class="form-control" placeholder="masukkan judul">
        </div>
        <div class="form-group">
          <label class="sr-only">Isi</label>
          <textarea name="isi" cols="65" rows="12" id="isi" class="ckeditor"></textarea>
        </div>
        <div class="form-group col-md-8">
          <label>Gambar Berita</label>
          <input type="file" name="file" class="form-control" id="file" required>
        </div>
        <div class="input-group">
          <input type="text" value="<?php echo date('Y-m-d'); ?>" hidden name="tgl_upload">
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button id="tambahBerita" name="tambahBerita" type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>