<html lang="en">
<?php
require '../koneksi.php';
$id_penerima = $_GET['id_penerima'];

$data_penerima = mysqli_query($conn, "select *, DATE_FORMAT(tgl_selesai, '%d %M %Y') as tgl_selesai from tb_penerima where id_penerima='" . $id_penerima . "'");
$penerima = mysqli_fetch_array($data_penerima);
$no_kk = $penerima['no_kk'];

$data_kk = mysqli_query($conn, "select * from tb_kk where no_kk='" . $no_kk . "'");
$kk = mysqli_fetch_array($data_kk);


$id_bantuan    = $penerima['id_bantuan'];
$data_bantuan = mysqli_query($conn, "select * from tb_bantuan where id_bantuan='" . $id_bantuan . "'");
$bantuan = mysqli_fetch_array($data_bantuan);

$id_user = $bantuan['id_user'];
$data_petugas = mysqli_query($conn, "select * from tb_user where id_user='" . $id_user . "'");
$petugas = mysqli_fetch_array($data_petugas);
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WERGU WETAN</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
    <link href="../assets/vendors/dataTable/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/mystyle.css">
    <link rel="stylesheet" href="../assets/vendors/chosen-master/chosen.css">
    <link rel="stylesheet" href="../assets/jquery-ui/jquery-ui.css">
    <!-- endinject -->
</head>

<body>

    <div class="main-panel">
        <div class="content-wrapper">

            <!-- <div class="row">
    <div class="col-lg-9">
        <h1>
            Pelayanan
            <small>Pengadilan Agama</small>
        </h1>
    </div>
    <div class="col-lg-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="#">Pembayaran</a></li>
                <li class="breadcrumb-item active"><a href="#">Cek</a></li>
            </ol>
        </nav>
    </div>
</div> -->
            <style>
                hr {
                    display: block;
                    margin-top: 0.1em;
                    margin-bottom: 0.5em;
                    margin-left: auto;
                    margin-right: auto;
                    border-style: double;
                    border-width: 2px;
                }

                table,
                th,
                td {
                    padding: 8px 10px;
                }
            </style>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1 mb-2">
                                        <img src="../assets/images/pati.png" width="100px" alt="">
                                    </div>
                                    <div class="col-md-11 mt-2">
                                        <center>
                                            <h3>PEMERINTAHAN DESA WERGU WETAN</h3>
                                            <h6>Jl. Wergu Wetan (Kota), Kudus, Jawa Tengah</h6>
                                            <p>Telp/Fax : (0291) 438385</p>
                                        </center>
                                    </div>
                                </div>
                                <hr class="mb-4">

                                <center>
                                    <h4>TANDA PENERIMAAN BANTUAN</h4>
                                    <h6>Kode Penerima Bantuan : No. <?= $penerima['id_penerima']; ?>/2020/<?= $bantuan['id_bantuan']; ?>/Wergu Wetan</h6>
                                    <img src="../assets/images/logo11.png" width="50%" alt="">
                                    <h4>DEMI KEADILAN SOSIAL BAGI SELURUH RAKYAT INDONESIA<h4>
                                </center>
                                <br>
                                <h5 style="text-indent: 60px; font-weight: normal; line-height: 2;">Pemerintah desa Wergu Wetan, yang terletak pada kecamatan kota kabupaten kudus - jawa tengah memberikan bantuan <?= $bantuan['nm_bantuan']; ?> kepada beberapa warga yang memang kurang mampu adanya :</h5>
                                <table>
                                    <tr>
                                        <td style="width:300px">No Kartu Keluarga</td>
                                        <td>:</td>
                                        <td><?= $penerima['no_kk']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:300px">Nama Kepala Keluarga</td>
                                        <td>:</td>
                                        <td><?= $kk['nm_kepala']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:300px">Di Terima pada</td>
                                        <td>:</td>
                                        <td><?= $penerima['tgl_selesai']; ?></td>
                                    </tr>
                                </table>
                                <h5 style="text-indent: 60px; font-weight: normal; line-height: 2;">Dengan adanya surat tanda penerimaan ini, bantuan telah tersalurkan atau telah diterima oleh warga yang bersangkutan. Jika setelah diterbitkannya surat ini ada kecurangan dalam penyelenggaraan dari warga atau pemerintahan daerah, maka akan diproses secara hukum yang berlaku di Indonesia.</h5>
                                <table colspan="2" width="100%">
                                    <thead>
                                        <tr>
                                            <td align="center"></td>
                                            <td align="center">Kudus, <?= date('d F Y'); ?></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="center">Kepala Wergu Wetan,</td>
                                            <td align="center">Petugas Pelaksana,</td>
                                            <td align="center">Penerima Bantuan,</td>
                                        </tr>
                                        <tr>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">[Materai 6000]</td>
                                        </tr>
                                        <tr colspan="3">
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        <tr>
                                            <td align="center"><u>SUMARNO</u><br>
                                            <td align="center"><u><?= $petugas['nm_user'] ?></u><br>
                                            <td align="center"><u><?= $kk['nm_kepala']; ?></u><br>
                                        </tr>
                                    </thead>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        window.print();
    </script>
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../assets/js/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="../assets/js/jquery-3.1.1.min.js"></script>
    <script src="../assets/vendors/chosen-master/chosen.jquery.js"></script>
    <script src="../assets/vendors/dataTable/jquery.dataTables.min.js"></script>
    <script src="../assets/vendors/dataTable/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/panjar.js"></script>
    <script src="../assets/js/panjar2.js"></script>
    <script src="../assets/js/gugatan.js"></script>
    <script src="../assets/jquery-ui/jquery-ui.js"></script>
</body>

</html>