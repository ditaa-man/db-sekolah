<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mapel - SMK TI Bali Global Denpasar</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header><h2>Data Mapel</h2></header>
<nav>
    <a href="../index.php">Home</a>
    <a href="tambah.php" class="btn">Tambah Mapel</a>
</nav>

<table>
<tr>
    <th>id</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Guru Pengajar</th>
    <th>Aksi</th>
</tr>
<?php
$id = 1;
$data = mysqli_query($koneksi, "SELECT * FROM mapel");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $id++; ?></td>
    <td><?= $d['nama_mapel']; ?></td>
    <td><?= $d['kelas']; ?></td>
    <td><?= $d['guru_pengajar']; ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id']; ?>" class="btn">Edit</a>
        <a href="hapus.php?id=<?= $d['id']; ?>" class="btn" style="background:red;">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
</body>
</html>
