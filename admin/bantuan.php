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
              <h1 class="m-0 text-dark">DATA JENIS BANTUAN</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
          <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>KODE BANTUAN</th>
                <th>NAMA BANTUAN</th>
                <th>KETERANGAN</th>
                <th>KUOTA BANTUAN</th>
                <th>NAMA PETUGAS</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql_tampil = "select *,tb_user.nm_user as nm_user 
								from tb_bantuan inner join tb_user on tb_bantuan.id_user=tb_user.id_user";
              // Query untuk menampilkan semua data buku  
              $query_tampil = mysqli_query($conn, $sql_tampil);
              while ($data = mysqli_fetch_assoc($query_tampil)) {
              ?>
                <tr>

                  <td><?php echo $data['id_bantuan'] ?></td>
                  <td><?php echo $data['nm_bantuan'] ?></td>
                  <td><?php echo $data['ket_bantuan'] ?></td>
                  <td><?php echo $data['kuota_bantuan'] ?></td>
                  <td><?php echo $data['nm_user'] ?></td>
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
                  <label for="no_kk">Jenjang Pendidikan<span>
                      <font color="red"> *</font>
                    </span></label>
                  <input type="text" name="no_kk" class="form-control" id="no_kk" placeholder="Nomor Kartu Keluarga" required>
                </div>
                <div class="form-group">
                  <label for="no_hp">KETERANGAN<span>
                      <font color="red"> *</font>
                    </span></label>
                  <textarea type="text" name="alamat" class="form-control" id="alamat" placeholder="Keterangan Pendidikan" required></textarea>
                </div>
                <div class="input-group">
                  <input type="text" value="<?php echo date('Y-m-d'); ?>" hidden name="tgl_daftar">
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button id="tambahPenguji" name="tambahPenguji" type="submit" class="btn btn-success">Simpan</button>
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
          url: "rinci_relawan.php",
          type: "GET",
          data: {
            id_identitas: m,
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