<?php
include "../koneksi.php";
$Kode_Matakuliah	= $_GET["Kode_Matakuliah"];
$querymatakuliah = mysqli_query($konek, "SELECT * FROM matakuliah WHERE Kode_Matakuliah='$Kode_Matakuliah'");
if($querymatakuliah == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($matakuliah = mysqli_fetch_array($querymatakuliah)){
?>
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- script halaman -->
    <script>
      $(function () {
		// Pemilih tanggal
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
			<!-- Edit dialog -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Matakuliah</h4>
					</div>
					<div class="modal-body">
						<form action="matakuliah_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
	  						<!-- kode matkul -->
							<div class="form-group">
								<label>Kode Matakuliah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<input name="Kode_Matakuliah" type="text" class="form-control" value="<?php echo $matakuliah["Kode_Matakuliah"]; ?>" readonly />
									</div>
							</div>
							<!-- matkul -->
							<div class="form-group">
								<label>Matakuliah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<input name="Nama_Matakuliah" type="text" class="form-control" value="<?php echo $matakuliah["Nama_Matakuliah"]; ?>"/>
									</div>
							</div>
							<!-- sks -->
							<div class="form-group">
								<label>SKS</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<input name="SKS" type="text" class="form-control" value="<?php echo $matakuliah["SKS"]; ?>"/>
									</div>
							</div>
							<!-- tombol -->
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Simpan
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Batal
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
<?php
			}
?>