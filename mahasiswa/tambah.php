<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Mahasiswa</h3>
<hr/>
<form method="post" action="simpan.php?action=add">
<table>
	<tr>
		<td>NPM</td>
		<td>:</td>
		<td><input type="number" name="npm"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama_mhs"/></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
        <td><textarea name="alamat" id="" value=""></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>