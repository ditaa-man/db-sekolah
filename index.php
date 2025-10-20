<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Sekolah</title>
  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #e3f2fd, #bbdefb);
      color: #333;
      overflow-x: hidden;
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    header {
      background: #0d47a1;
      color: white;
      padding: 40px 20px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      animation: slideDown 1s ease;
    }

    @keyframes slideDown {
      from { transform: translateY(-100%); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    h1 {
      margin: 0;
      font-size: 2.2em;
    }

    p.subtitle {
      margin-top: 10px;
      font-size: 1.1em;
      opacity: 0.8;
    }

    .content {
      max-width: 1000px;
      margin: 40px auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      animation: fadeIn 1.2s ease;
    }

    .card {
      background: white;
      width: 250px;
      padding: 25px;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      background: #e3f2fd;
    }

    .card h3 {
      color: #0d47a1;
      margin-bottom: 10px;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #0d47a1;
      color: white;
      margin-top: 50px;
      font-size: 0.9em;
    }
  </style>
</head>
<body>

  <header>
    <h1>Selamat Datang di Sistem Informasi Sekolah</h1>
    <p class="subtitle">Kelola data siswa, guru, jurusan, dan lainnya dengan mudah dan cepat</p>
  </header>

  <div class="card" onclick="location.href='siswa/index.php'">
    <h3>👩‍🎓 Data Siswa</h3>
    <p>Lihat dan kelola semua data siswa dengan mudah.</p>
</div>

<div class="card" onclick="location.href='guru/index.php'">
    <h3>👨‍🏫 Data Guru</h3>
    <p>Kelola data guru dan informasi pengajar di sekolah.</p>
</div>

<div class="card" onclick="location.href='jurusan/index.php'">
    <h3>🏫 Data Jurusan</h3>
    <p>Informasi lengkap mengenai jurusan yang tersedia.</p>
</div>

<div class="card" onclick="location.href='mapel/index.php'">
    <h3>📘 Mata Pelajaran</h3>
    <p>Manajemen daftar mata pelajaran secara efisien.</p>
</div>

<div class="card" onclick="location.href='ekskul/index.php'">
    <h3>🎯 Ekstrakurikuler</h3>
    <p>Atur kegiatan dan jadwal ekstrakurikuler siswa.</p>
</div>


  <footer>
    &copy; 2025 SMK TI Bali Global Denpasar. Semua hak dilindungi.
  </footer>

</body>
</html>
