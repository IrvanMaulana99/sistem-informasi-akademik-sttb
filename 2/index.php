<?php
session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <!-- judul -->
    <title>Sistem Informasi Akademik</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../favicon.ico">
    <!-- responsifitas -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../aset/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../aset/plugins/datatables/dataTables.bootstrap.css">
    <!-- admin LTE -->
    <link rel="stylesheet" href="../aset/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../aset/dist/css/skins/_all-skins.min.css">
  </head>
  <!-- Bagian Body -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include "content_header.php";
       ?>
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div>
          <ul class="sidebar-menu">
					<li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
					<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
					<li><a href="nilai.php"><i class="fa fa-book"></i><span>Nilai Mahasiswa</span></a></li>
					<li><a href="about.php"><i class="fa fa-info-circle"></i><span>Tentang</span></a></li>
          </ul>
        </section>
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Dashboard Dosen
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i> Dashboard</li>
          </ol>
        </section>
        <!-- konten -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <h1><center><b>Sistem Informasi Akademik - Sesi Dosen</b></center></h1>
					<center><img src="../aset/foto/SIA.png" width="225" height="225" /></center>
					<center><h2><b>Kelompok 2 - TIF-RP 18 CNS A</b></h2></center>
					<center><h4><b>Sistem Informasi Akademik </b></h4></center>
          <center><h5><b>Sistem Web & Ketua  : 18111167 - Irvan Maulana</b></h5></center>
          <center><h5><b>Laporan             : 18111101 - Muhamad Abim Wildan Pratama</b></h5></center>
          <center><h5><b>Laporan             : 18111042 - Eli Siti Solihah</b></h5></center>
          <center><h5><b>Diagram & Struktur  : 18111143 - Rivania Rohana</b></h5></center>
          <center><h5><b>Diagram & Struktur  : 18111004 - Agnes Andrianti</b></h5></center>
                </div>
                <div class="box-body">
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>
    <?php
		include	"content_footer.php";
	?>
    </div>
    <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
  </body>
</html>
