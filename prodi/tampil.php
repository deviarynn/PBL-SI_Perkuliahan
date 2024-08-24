<?php 	
include('koneksi.php');
$db = new database_prodi();
$data_prodi = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="../index.html">halaman utama</a> <br>
<a href="tambah.php">Tambah Data Mahasiswa</a>
<table border="1">
		<tr>
  		<th>ID Prodi</th>
			<th>Nama Prodi</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_prodi as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_prodi']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id_prodi']; ?>">Edit</a>
					<a href="simpan.php?action=delete&id=<?php echo $row['id_prodi']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>