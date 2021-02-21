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
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
  </head>
  <!-- bagian body -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include 'content_header.php';
       ?>
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
			        <li class="active"><a href="matakuliah.php"><i class="fa fa-book"></i><span>Matakuliah</span></a></li>
			        <li><a href="jurusan.php"><i class="fa fa-university"></i><span>Jurusan</span></a></li>
			        <li><a href="jenjang.php"><i class="fa fa-graduation-cap"></i><span>Jenjang</span></a></li>
					<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
					<li><a href="user.php"><i class="fa fa-user-circle-o"></i><span>User</span></a></li>
			        <li><a href="about.php"><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
          </ul>
        </section>
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Matakuliah
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-book"></i> Matakuliah</li>
          </ol>
        </section>

        <!-- konten -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div>
                <div class="box-body">
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_matakuliah.php";
						?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
		<!-- dialog tambah -->
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Matakuliah</h4>
					</div>
					<div class="modal-body">
						<form action="matakuliah_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<!-- kode matkul -->
							<div class="form-group">
								<label>Kode Matakuliah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<input name="Kode_Matakuliah" type="text" class="form-control" placeholder="Kode Matakuliah"/>
									</div>
							</div>
							<!-- matkul -->
							<div class="form-group">
								<label>Matakuliah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<input name="Nama_Matakuliah" type="text" class="form-control" placeholder="Matakuliah"/>
									</div>
							</div>
							<!-- sks -->
							<div class="form-group">
								<label>SKS</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<input name="SKS" type="text" class="form-control" placeholder="SKS"/>
									</div>
							</div>
							<!-- tombol  -->
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Tambah
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Batal
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- pop up edit-->
		<div id="ModalEditMatakuliah" class="modal fade" tabindex="-1" role="dialog"></div>
		<!-- pop up hapus-->
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Apa kamu yakin ingin menghapus data ini ?</h4>
					</div>
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Hapus</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
					</div>
				</div>
			</div>
		</div>
    </div>
    <?php
		include	"content_footer.php";
	?>
    </div>
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
