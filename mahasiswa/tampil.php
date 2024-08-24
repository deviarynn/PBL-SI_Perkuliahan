<?php 	
include('koneksi.php');
$db = new database();
$data_mhs = $db->tampil_mhs();
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
			<th>No</th>
			<th>NPM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_mhs as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['npm']; ?></td>
				<td><?php echo $row['nama_mhs']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id_mhs']; ?>">Edit</a>
					<a href="simpan.php?action=delete&id=<?php echo $row['id_mhs']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>