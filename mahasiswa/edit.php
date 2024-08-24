<?php
include('koneksi.php');
$db = new database();
$id_mhs = $_GET['id'];
if(! is_null($id_mhs))
{
    $data_mhs = $db->get_by_id($id_mhs);
} else
{
    header('location:tampil.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Mahasiswa</h3>
<hr/>
<form method="post" action="simpan.php?action=update">
<input type="hidden" name="id_mhs" value="<?php echo $data_mhs['id_mhs']; ?>"/>
<table>
	<tr>
		<td>NPM</td>
		<td>:</td>
		<td><input type="number" name="npm" value="<?php echo $data_mhs['npm']; ?>"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama_mhs" value="<?php echo $data_mhs['nama_mhs']; ?>"/></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="alamat" id=""><?php echo $data_mhs['alamat']; ?></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>