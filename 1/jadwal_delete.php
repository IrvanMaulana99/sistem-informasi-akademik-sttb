<?php
// sertakan koneksi.php
include "../koneksi.php";
// variabel jadwal
$Id_Jadwal	= $_GET["Id_Jadwal"];
// sql
if($delete = mysqli_query($konek, "DELETE FROM jadwal WHERE Id_Jadwal='$Id_Jadwal'")){
	header("Location: jadwal.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));
?>