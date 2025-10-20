<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mapel</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h2>Tambah Data Mapel</h2>
<form method="post">
    <table>
        <tr><td>Nama</td><td><input type="text" name="nama_mapel" required></td></tr>
        <tr><td>Kelas</td><td><input type="text" name="kelas" required></td></tr>
        <tr><td>Guru Pengajar</td><td><input type="text" name="guru_pengajar" required></td></tr>
        <tr><td colspan="2"><button type="submit" name="simpan">Simpan</button></td></tr>
    </table>
</form>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($koneksi, "INSERT INTO mapel (nama_mapel,kelas,guru_pengajar)
    VALUES ('$_POST[nama_mapel]','$_POST[kelas]','$_POST[guru_pengajar]')");
    echo "<script>alert('Data mapel berhasil disimpan');window.location='index.php';</script>";
}
?>
</body>
</html>
