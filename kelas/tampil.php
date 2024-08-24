<?php 	
include('koneksi.php');
$db = new database_kelas();
$kelas = $db->tampil_data();
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
                <th>No.</th>
                <th>Nama Kelas</th>
                <th>Tahun Akademik</th>
                <th>Nama Prodi</th>
                <th>Action</th>
                </tr>
                <?php 
                $no = 1;
                foreach($kelas as $row){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama_kelas']; ?></td>
                        <td><?php echo $row['thn_akademik']; ?></td>
                        <td><?php echo $row['nama_prodi']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id_kls']; ?>">Update</a>
                            <a href="simpan.php?action=delete&id=<?php echo $row['id_kls']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
        </table>
</body>
</html>