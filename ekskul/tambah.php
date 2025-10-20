<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Ekstrakulikuler</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h2>Tambah Data Ekstrakulikuler</h2>
<form method="post">
    <table>
        <tr><td>Nama</td><td><input type="text" name="nama_ekstra" required></td></tr>
        <tr><td>Jadwal</td><td><input type="text" name="jadwal" required></td></tr>
        <tr><td>Guru Ekstrakulikuler</td><td><input type="text" name="guru_ekstra" required></td></tr>
        <tr><td colspan="2"><button type="submit" name="simpan">Simpan</button></td></tr>
    </table>
</form>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($koneksi, "INSERT INTO ekskul (nama_ekstra,jadwal,guru_ekstra)
    VALUES ('$_POST[nama_ekstra]','$_POST[jadwal]','$_POST[guru_ekstra]')");
    echo "<script>alert('Data Ekstra berhasil disimpan');window.location='index.php';</script>";
}
?>
</body>
</html>
