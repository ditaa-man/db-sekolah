<?php
session_start();
include "koneksi.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        header("location:index.php");
    } else {
        echo "<script>alert('Username atau Password salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Informasi Sekolah</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle at top left, #004aad, #001f4d);
            overflow: hidden;
        }

        /* Background glowing lines */
        .glow-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,72,173,0.1) 0%, rgba(0,204,255,0.1) 100%);
            backdrop-filter: blur(8px);
            z-index: 0;
            overflow: hidden;
        }

        .glow-bg::before, .glow-bg::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(0,150,255,0.3);
            filter: blur(120px);
            border-radius: 50%;
            animation: float 8s infinite alternate ease-in-out;
        }

        .glow-bg::after {
            top: 60%;
            left: 60%;
            background: rgba(0,255,255,0.3);
            animation-delay: 2s;
        }

        @keyframes float {
            from { transform: translateY(-40px); }
            to { transform: translateY(40px); }
        }

        /* Login box */
        .login-box {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.12);
            border: 2px solid rgba(0,140,255,0.6);
            box-shadow: 0 0 25px rgba(0,150,255,0.4);
            border-radius: 20px;
            padding: 40px 30px;
            width: 350px;
            text-align: center;
            backdrop-filter: blur(15px);
            animation: fadeIn 1.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        .login-box h2 {
            color: #ffffff;
            margin-bottom: 25px;
            font-size: 1.8rem;
            text-shadow: 0 0 10px rgba(0,170,255,0.6);
        }

        input {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1.5px solid rgba(0,140,255,0.5);
            background: rgba(255,255,255,0.15);
            color: white;
            outline: none;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input::placeholder {
            color: #bcdfff;
        }

        input:focus {
            border-color: #00bfff;
            box-shadow: 0 0 10px #00bfff;
            background: rgba(255,255,255,0.25);
        }

        button {
            background: linear-gradient(90deg, #007bff, #00c3ff);
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(0,180,255,0.4);
        }

        button:hover {
            box-shadow: 0 0 25px rgba(0,200,255,0.8);
            transform: scale(1.03);
        }

        /* School footer text */
        .footer-text {
            color: #bcdfff;
            margin-top: 25px;
            font-size: 0.85rem;
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="glow-bg"></div>
    <div class="login-box">
        <h2>Login Admin</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="login">Login</button>
        </form>
        <div class="footer-text">© 2025 SMK TI Bali Global Denpasar</div>
    </div>
</body>
</html>
