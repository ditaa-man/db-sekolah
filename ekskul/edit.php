<?php 
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM mapel WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Ekstrakulikuler</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h2>Edit Data Ekstrakulikuler</h2>
<form method="post">
    <table>
        <tr><td>Nama</td><td><input type="text" name="nama_ekstra" value="<?= $d['nama_ekstra'] ?>" required></td></tr>
        <tr><td>Jadwal</td><td><input type="text" name="jadwal" value="<?= $d['jadwal'] ?>" required></td></tr>
        <tr><td>Guru Ekstrakulikuler</td><td><input type="text" name="guru_ekstra" value="<?= $d['guru_ekstra'] ?>" required></td></tr>
        <tr><td colspan="2"><button type="submit" name="update">Simpan Perubahan</button></td></tr>
    </table>
</form>

<?php
if(isset($_POST['update'])){
    mysqli_query($koneksi, "UPDATE ekskul SET 
        nip='$_POST[nama_ekstra]', 
        nama='$_POST[jadwal]', 
        mapel='$_POST[guru_ekstra]' 
        WHERE id='$id'");
    echo "<script>alert('Data mapel berhasil diperbarui');window.location='index.php';</script>";
}
?>
</body>
</html>
