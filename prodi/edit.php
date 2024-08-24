<?php
include('koneksi.php');
$prodi = new database_prodi();
$id_prodi = $_GET['id'];
if(! is_null($id_prodi))
{
    $data_prodi = $prodi->get_by_id($id_prodi);
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
<h3>Tambah Data Prodi</h3>
<hr/>
<form method="post" action="simpan.php?action=update">
<input type="hidden" name="id_prodi" value="<?php echo $data_prodi['id_prodi']; ?>"/>
<table>
	<tr>
		<td>Nama Prodi</td>
		<td>:</td>
		<td><input type="text" name="nama_prodi" value="<?php echo $data_prodi['nama_prodi']; ?>"/></td>
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