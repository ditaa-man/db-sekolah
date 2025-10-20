<?php 
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM mapel WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mapel</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h2>Edit Data Mapel</h2>
<form method="post">
    <table>
        <tr><td>Nama</td><td><input type="text" name="nama_mapel" value="<?= $d['nama_mapel'] ?>" required></td></tr>
        <tr><td>Kelas</td><td><input type="text" name="kelas" value="<?= $d['kelas'] ?>" required></td></tr>
        <tr><td>Guru Pengajar</td><td><input type="text" name="guru_pengajar" value="<?= $d['guru_pengajar'] ?>" required></td></tr>
        <tr><td colspan="2"><button type="submit" name="update">Simpan Perubahan</button></td></tr>
    </table>
</form>

<?php
if(isset($_POST['update'])){
    mysqli_query($koneksi, "UPDATE mapel SET 
        nip='$_POST[nama_mapel]', 
        nama='$_POST[kelas]', 
        mapel='$_POST[guru_pengajar]' 
        WHERE id='$id'");
    echo "<script>alert('Data mapel berhasil diperbarui');window.location='index.php';</script>";
}
?>
</body>
</html>
