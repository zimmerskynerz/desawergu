<?php
include('../session.php');

include('../koneksi.php');
$id_berita = $_GET['id_berita'];
$result = mysqli_query($conn, "select * from berita where id_berita='" . $id_berita . "'");
$row = mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>PEMDES WERGU WETAN || ADMINISTRASI</title>
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <script language="javascript" type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../admin" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ADMINISTRASI DESA</span>
      </a>

      <!-- Sidebar -->
      <?php include('inc/sidebar.php') ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">BERITA DAN PENGUMUMAN</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <div class="card">
        <!-- /.card-header -->
        <form action="../sql_query.php" enctype="multipart/form-data" method="POST">
          <div class="form-group">
            <label class="sr-only">Judul</label>
            <input name="judul" id="judul" type="text" class="form-control" value="<?= $row['judul']; ?>" placeholder="masukkan judul">
            <input name="id_berita" id="id_berita" type="text" class="form-control" value="<?= $row['id_berita']; ?>" hidden placeholder="masukkan judul">
          </div>
          <div class="form-group">
            <label class="sr-only">Isi</label>
            <textarea name="isi" cols="65" rows="12" id="isi" class="ckeditor"><?= $row['isi']; ?></textarea>
          </div>
          <div class="form-group col-md-8">
            <label>Gambar Berita</label>
            <input type="file" name="file" class="form-control" id="file">
          </div>
          <div class="input-group">
            <input type="text" value="<?php echo date('Y-m-d'); ?>" hidden name="tgl_upload">
          </div>
          <div class="modal-footer">
            <button id="cancelBerita" name="cancelBerita" type="submit" class="btn btn-secondary">Cancel</button>
            <button id="hapusBerita" name="hapusBerita" type="submit" class="btn btn-danger">Hapus</button>
            <button id="ubahBerita" name="ubahBerita" type="submit" class="btn btn-success">Ubah</button>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="karyawanTokoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog col-md-12" role="document">
      <div class="modal-content col-md-12">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
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
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include('inc/footer.php') ?>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="dist/js/demo.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="plugins/raphael/raphael.min.js"></script>
  <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- DataTables -->
  <script src="plugins/datatables/jquery.dataTables.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <script>
    $(function() {
      // Summernote
      $('.textarea').summernote()
    })
  </script>
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".open_modal").click(function(e) {
        var m = $(this).attr("id");
        $.ajax({
          url: "rinci_berita.php",
          type: "GET",
          data: {
            id_berita: m,
          },
          success: function(ajaxData) {
            $("#ModalEdit").html(ajaxData);
            $("#ModalEdit").modal('show', {
              backdrop: 'true'
            });
          }
        });
      });
    });
  </script>
  <!-- PAGE SCRIPTS -->
  <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>