<?php 	
include('koneksi.php');
$db = new database_kelas();
$id_kls = $_GET['id'];
    if(! is_null($id_kls)){
        $kelas = $db->get_by_id($id_kls);
    }else{
        header('location:tampil.php');
    }
include('../prodi/koneksi.php');
$prodi = new database_prodi;
$data_prodi = $prodi->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data kelas</title>
</head>
<body>
	<h3>Update Data kelas</h3>
		<hr/>
		<form method="post" action="simpan.php?action=update">
<input type="hidden" name="id_kls" value="<?php echo $kelas['id_kls']; ?>"/>
<table>
<tr>
	<tr>
		<td>Nama Kelas</td>
		<td>:</td>
		<td><input type="text" name="nama_kelas" value="<?php echo $kelas['nama_kelas']; ?>"/></td>
	</tr>
	<tr>
		<td>Tahun Akademik</td>
		<td>:</td>
		<td><input type="number" name="thn_akademik" value="<?php echo $kelas['thn_akademik']; ?>"/></td>
	</tr>
	<td>ID Prodi</td>
	<td>:</td>
	<td><select name="id_prodi">
	<?php
	foreach ($data_prodi as $row){
	echo '<option value="' . $row['id_prodi'] . '"' . ($row['id_prodi'] == $data_kls['id_prodi'] ? ' selected' : '') . '>' . $row['nama_prodi'] . '</option>';							}
	?></td>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
			</form>
</body>
</html>