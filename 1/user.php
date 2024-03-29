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
	<?php
		include "bundle_css.php";
	?>
  </head>
  <!-- body -->
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
			        <li><a href="matakuliah.php"><i class="fa fa-book"></i><span>Matakuliah</span></a></li>
			        <li><a href="jurusan.php"><i class="fa fa-university"></i><span>Jurusan</span></a></li>
			        <li><a href="jenjang.php"><i class="fa fa-graduation-cap"></i><span>Jenjang</span></a></li>
					<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
					<li class="active"><a href="user.php"><i class="fa fa-user-circle-o"></i><span>User</span></a></li>
			        <li><a href="about.php"><i class="fa fa-info-circle"></i><span>Tentang</span></a></li>
          </ul>
        </section>
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            User
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user-circle-o"></i> User</li>
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
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAddDosen" data-toggle="modal"><i class="fa fa-plus"></i> Add Dosen</button></a>
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAddMahasiswa" data-toggle="modal"><i class="fa fa-plus"></i> Add Mahasiswa</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_user.php";
						?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
		<!-- tambah user dosen -->
		<div id="ModalAddDosen" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah User Dosen</h4>
						<br />
						<h6 class="modal-title">Username Dan Password = NIP Dosen</h6>
					</div>
					<div class="modal-body">
						<form action="user_add_dosen.php" name="modal_popup" enctype="multipart/form-data" method="post">
						<!-- usergroup -->
							<div class="form-group">
								<label>Usergroup</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Id_Usergroup_User" class="form-control">
											<option value=2 selected>Dosen</option>
										</select>
									</div>
							</div>
							<!-- dosen -->
							<div class="form-group">
								<label>Dosen</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="User_Dosen" class="form-control">
											<?php
												$querydosen = mysqli_query($konek, "SELECT * FROM dosen");
												if($querydosen == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($dosen = mysqli_fetch_array($querydosen)){
													if($dosen["NIP"] != $_SESSION["Username"]){
														echo "<option value='$dosen[NIP]'>$dosen[Nama_Dosen], Tambah Dosen untuk User dengan NIP = $dosen[NIP]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<!-- tombol -->
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Buat akun
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
		<!-- tambah user mahasiswa -->
		<div id="ModalAddMahasiswa" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah User Mahasiswa</h4>
						<br />
						<h6 class="modal-title">Username Dan Password = NIM Mahasiswa</h6>
					</div>
					<div class="modal-body">
						<form action="user_add_mahasiswa.php" name="modal_popup" enctype="multipart/form-data" method="post">
						<!-- usergroup -->
							<div class="form-group">
								<label>Usergroup</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Id_Usergroup_User" class="form-control">
											<option value=3 selected>Mahasiswa</option>
										</select>
									</div>
							</div>
							<!-- mahasiswa -->
							<div class="form-group">
								<label>Mahasiswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="User_Mahasiswa" class="form-control">
											<?php
												$querymahasiswa = mysqli_query($konek, "SELECT * FROM mahasiswa");
												if($querymahasiswa == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($mhs = mysqli_fetch_array($querymahasiswa)){
													if($mhs["NIM"] != $_SESSION["Username"]){
														echo "<option value='$mhs[NIM]'>$mhs[Nama_Mahasiswa], Tambah Mahasiswa untuk User dengan NIM = $mhs[NIM]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<!-- tombol -->
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Buat Akun
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