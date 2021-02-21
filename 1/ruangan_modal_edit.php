<?php
include "../koneksi.php";
$Kode_Ruangan	= $_GET["Kode_Ruangan"];
$queryruangan = mysqli_query($konek, "SELECT * FROM ruangan WHERE Kode_Ruangan='$Kode_Ruangan'");
if($queryruangan == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($ruangan = mysqli_fetch_array($queryruangan)){
?>
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- script halaman -->
    <script>
      $(function () {
		// pemilih tanggal
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
			<!-- dialog edit -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Ruangan</h4>
					</div>
					<div class="modal-body">
						<form action="ruangan_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
	  						<!-- kode ruangan -->
							<div class="form-group">
								<label>Kode Ruangan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<input name="Kode_Ruangan" type="text" class="form-control" value="<?php echo $ruangan["Kode_Ruangan"]; ?>" readonly />
									</div>
							</div>
							<!-- ruangan -->
							<div class="form-group">
								<label>Ruangan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<input name="Nama_Ruangan" type="text" class="form-control" value="<?php echo $ruangan["Nama_Ruangan"]; ?>"/>
									</div>
							</div>
							<!-- tombol -->
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Simpan
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Hapus
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
<?php
			}
?>