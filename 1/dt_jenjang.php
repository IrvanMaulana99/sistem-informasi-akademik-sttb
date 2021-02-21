				<!-- tabel jenjang -->
				<thead>
					<tr>
						<th>Kode Jenjang</th>
						<th>Jenjang</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						// sql
						$queryjenjang = mysqli_query ($konek, "SELECT * FROM jenjang");
						if($queryjenjang == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($jenjang = mysqli_fetch_array ($queryjenjang)){
							echo "
								<tr>
									<td>$jenjang[Kode_Jenjang]</td>
									<td>$jenjang[Nama_Jenjang]</td>
									<td>
										<a href='#' class='open_modal' id='$jenjang[Kode_Jenjang]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"jenjang_delete.php?Kode_Jenjang=$jenjang[Kode_Jenjang]\")'>Hapus</a>
									</td>
								</tr>";
						}
					?>
				</tbody>