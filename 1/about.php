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
	<link rel="shortcut icon" type="image/icon" href="image/icon-sisfo.png">
  <!-- css -->
	<?php
		include "bundle_css.php";
	?>
  <!-- head -->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include 'content_header.php';
       ?>
      <!-- side bar -->
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div>
          <ul class="sidebar-menu">
              <li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
			        <li><a href="dosen.php"><i class="fa fa-user"></i><span>Dosen</span></a></li>
			        <li><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Mahasiswa</span></a></li>
			        <li><a href="ruangan.php"><i class="fa fa-columns"></i><span>Ruangan</span></a></li>
			        <li><a href="matakuliah.php"><i class="fa fa-book"></i><span>Matakuliah</span></a></li>
			        <li><a href="jurusan.php"><i class="fa fa-university"></i><span>Jurusan</span></a></li>
			        <li><a href="jenjang.php"><i class="fa fa-graduation-cap"></i><span>Jenjang</span></a></li>
					<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
					<li><a href="user.php"><i class="fa fa-user-circle-o"></i><span>User</span></a></li>
			        <li class="active"><a href="about.php"><i class="fa fa-info-circle"></i><span>Tentang</span></a></li>
          </ul>
        </section>
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Tentang Website
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-info-circle"></i> Tentang</li>
          </ol>
        </section>
        <!-- konten utama -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
					<h1><center><b>Sistem Informasi Akademik - Admin</b></center></h1>
					<center><img src="../aset/foto/SIA.png" width="225" height="225" /></center>
					<center><h2><b>Kelompok 2, Copyright &copy;  <?php echo date ('Y') ?></b></h2></center>
					<center><h4><b>Dibuat untuk memenuhi Tugas Besar UAS Mata Kuliah Information Security & Network Security</b></h4></center>
                </div>
                <div class="box-body">
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>
  <!-- sertakan footer -->
	<?php
		include	"content_footer.php";
	?>
    </div>
	<!-- script -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
