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
              <h1 class="m-0 text-dark">DATA JENJANG PENDIDIKAN</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <div class="card">
        <div class="card-header">

          <button type="button" href="#" name="profile" data-toggle="modal" data-target="#karyawanTokoModal" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah Pendidikan</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>KODE PENDIDIKAN</th>
                <th>JENJANG PENDIDIKAN</th>
                <th>KETERANGAN</th>
                <th>JUMLAH WARGA</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql_tampil = "select *,count(tb_warga.nik) as jml from tb_pendidikan join tb_warga
								on tb_warga.id_pendidikan=tb_pendidikan.id_pendidikan where tb_pendidikan.status='ADA' group by tb_pendidikan.id_pendidikan";
              // Query untuk menampilkan semua data buku  
              $query_tampil = mysqli_query($conn, $sql_tampil);
              while ($data = mysqli_fetch_assoc($query_tampil)) {
              ?>
                <tr>

                  <td><?php echo $data['id_pendidikan'] ?></td>
                  <td><?php echo $data['jenjang_pendidikan'] ?></td>
                  <td><?php echo $data['ket'] ?></td>
                  <td><?php echo $data['jml'] ?></td>
                  <td>
                    <a href="#" class='btn btn-sm btn-warning shadow-sm open_modal' id='<?php echo $data['id_pendidikan']; ?>'>Detail </a>
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
            <h5 class="modal-title" id="exampleModalLabel">Tambah Jenjang Pendidikan</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="../sql_query.php" enctype="multipart/form-data" method="POST">
              <fieldset>
                <div class="form-group">
                  <label for="jenjang_pendidikan">Jenjang Pendidikan<span>
                      <font color="red"> *</font>
                    </span></label>
                  <input type="text" name="jenjang_pendidikan" class="form-control" id="jenjang_pendidikan" placeholder="Jenjang Pendidikan" required>
                </div>
                <div class="form-group">
                  <label for="no_hp">KETERANGAN<span>
                      <font color="red"> *</font>
                    </span></label>
                  <textarea type="text" name="ket" class="form-control" id="ket" placeholder="Ket Pendidikan" required></textarea>
                </div>
                <div class="input-group">
                  <input type="text" value="<?php echo date('Y-m-d'); ?>" hidden name="tgl_daftar">
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button id="tambahPendidikan" name="tambahPendidikan" type="submit" class="btn btn-success">Simpan</button>
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
      $('body').on('click', ".open_modal", function(e) {
        var m = $(this).attr("id");
        $.ajax({
          url: "rinci_pendidikan.php",
          type: "GET",
          data: {
            id_pendidikan: m,
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