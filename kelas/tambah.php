<?php
include('../prodi/koneksi.php');
$prodi = new database_prodi;
$data_prodi = $prodi->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Tambah Data Kelas</h3>
		<hr/>
			<form method="post" action="simpan.php?action=add" enctype="multipart/form-data">
				<table>
				<tr>
		<td>Nama Kelas</td>
		<td>:</td>
		<td><input type="text" name="nama_kelas"></td>
	</tr>
	<tr>
		<td>Tahun Akademik</td>
		<td>:</td>
		<td><input type="number" name="thn_akademik"></td>
	</tr>
	<td>Prodi</td>
	<td>:</td>
	<td><select name="id_prodi">
			<option value="">Pilih Prodi</option>
		<?php
		foreach ($data_prodi as $row){
			echo '<option value="' . $row['id_prodi'] . '">' . $row['nama_prodi'] . '</option>';
		}
		?></td>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" name="tombol" value="Simpan"/></td>
					</tr>
				</table>
			</form>
</body>
</html>