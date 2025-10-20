<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Ekstrakulikuler - SMK TI Bali Global Denpasar</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header><h2>Data Ekstrakulikuler</h2></header>
<nav>
    <a href="../index.php">Home</a>
    <a href="tambah.php" class="btn">Tambah Ekstrakulikuler</a>
</nav>

<table>
<tr>
    <th>id</th>
    <th>Nama</th>
    <th>Jadwal</th>
    <th>Guru Ekstrakulikuler</th>
    <th>Aksi</th>
</tr>
<?php
$id = 1;
$data = mysqli_query($koneksi, "SELECT * FROM ekskul");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $id++; ?></td>
    <td><?= $d['nama_ekstra']; ?></td>
    <td><?= $d['jadwal']; ?></td>
    <td><?= $d['guru_ekstra']; ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id']; ?>" class="btn">Edit</a>
        <a href="hapus.php?id=<?= $d['id']; ?>" class="btn" style="background:red;">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
</body>
</html>
