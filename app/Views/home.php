<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Latar belakang tetap putih */
            color: #333;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .landing-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%; /* Memastikan kontainer mengisi tinggi penuh */
            width: 100%;
        }
        .landing-box {
            background-color: #fff;
            padding: 40px; /* Menambah padding untuk konten */
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px; /* Lebar lebih besar */
            width: 90%; /* Menyesuaikan dengan lebar layar perangkat */
            height: 90vh; /* Menambah tinggi agar lebih memanjang */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Mengatur konten di tengah */
        }
        .landing-box img {
            width: 200px; /* Ukuran gambar lebih besar */
            height: auto;
            margin: 0 auto 20px auto; /* Gambar di tengah */
        }
        .landing-box .btn {
            width: 100%;
            margin-bottom: 15px; /* Menambah jarak antara tombol-tombol */
            border-radius: 50px;
            padding: 14px 0;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease; /* Animasi transisi pada hover */
        }
        .landing-box .btn-danger {
            background-color: #CC0000;
            border: none;
        }
        .landing-box .btn-danger:hover {
            background-color: #CC0000;
        }
        .landing-box .btn-white {
            background-color: #fff;
            color: #e74c3c; /* Warna teks merah untuk tombol Sign Up */
            border: 2px solid #e74c3c; /* Border merah pada tombol Sign Up */
        }
        .landing-box .btn-white:hover {
            background-color: #f0f0f0;
            color: #e74c3c; /* Warna teks merah saat di-hover */
            border: 2px solid #e74c3c; /* Tetap border merah saat di-hover */
        }
        .landing-box .info-text {
            font-size: 16px;
            color: #333;
        }
        .landing-box .info-text p {
            margin: 10px 0; /* Menambah jarak antara baris teks */
        }
    </style>
</head>
<body>
    <div class="landing-container">
        <div class="landing-box">
            <img src="/img/logo1.png" alt="Gambar Utama">
            <a href="/login" class="btn btn-danger">Login</a>
            <a href="/register" class="btn btn-white">Sign Up</a>
            <div class="info-text">
                <p>- Sistem Informasi Aset Perusahaan -</p>
                <p>Holding Industri Pertahanan C ver 1.1123</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
