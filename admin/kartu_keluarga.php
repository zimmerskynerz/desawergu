<?php
include('../koneksi.php');
include('../session.php');

$result = mysqli_query($conn, "select * from tb_user where username='$session_id'") or die('Error In Session');
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
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
              <h1 class="m-0 text-dark">DATA KARTU KELUARGA</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <div class="card">
        <div class="card-header">

          <button type="button" href="#" name="profile" data-toggle="modal" data-target="#karyawanTokoModal" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah Nomer KK</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No Kartu Keluarga</th>
                <th>NIK KEPALA KELUARGA</th>
                <th>Nama Kepala Keluarga</th>
                <th>Tanggungan Keluarga</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql_tampil = "Select *,count(nik) as jml_tanggungan
from tb_kk inner join tb_warga on tb_kk.no_kk=tb_warga.no_kk group by tb_warga.no_kk";
              // Query untuk menampilkan semua data buku  
              $query_tampil = mysqli_query($conn, $sql_tampil);
              while ($data = mysqli_fetch_assoc($query_tampil)) {
              ?>
                <tr>

                  <td><?php echo $data['no_kk'] ?></td>
                  <td><?php echo $data['nik_kepala'] ?></td>
                  <td><?php echo $data['nm_kepala'] ?></td>
                  <td><?php echo $data['jml_tanggungan'] ?></td>
                  <td>
                    <a href="#" class='btn btn-sm btn-warning shadow-sm open_modal' id='<?php echo $data['no_kk']; ?>'>Detail </a>
                  </td>
                </tr>
              <?php

              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.content -->
    </div>
    <div class="modal fade" id="karyawanTokoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kartu Keluarga</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="../sql_query.php" enctype="multipart/form-data" method="POST">
              <fieldset>
                <div class="form-group">
                  <input type="text" name="no_kk" class="form-control" id="no_kk" placeholder="Nomor Kartu Keluarga" required>
                </div>
                <div class="form-group">

                  <input type="text" name="nik_kepala" class="form-control" id="nik_kepala" placeholder="NIK Kepala Keluarga" required>
                </div>
                <div class="form-group">

                  <input type="text" name="nm_kepala" class="form-control" id="nm_kepala" placeholder="Nama Kepala Keluarga" required>
                </div>
                <div class="form-group">

                  <input type="text" hidden name="password" class="form-control" id="password" value="1234" required>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-8">

                    <textarea type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat/Jalan" required></textarea>
                  </div>
                  <div class="form-group col-md-2">

                    <input type="text" name="rt" class="form-control" id="rt" placeholder="RT" required>
                  </div>
                  <div class="form-group col-md-2">

                    <input type="text" name="rw" class="form-control" id="rw" placeholder="RW" required>
                  </div>
                </div>
                <div class="input-group">
                  <input type="text" value="<?php echo date('Y-m-d'); ?>" hidden name="tgl_daftar">
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button id="tambahKK" name="tambahKK" type="submit" class="btn btn-success">Simpan</button>
                </div>
              </fieldset>
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
          url: "rinci_kk.php",
          type: "GET",
          data: {
            no_kk: m,
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