<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guide Penggunaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        h1 {
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        .image {
            text-align: center;
            margin-bottom: 30px;
            cursor: pointer;
        }
        .image img {
            max-width: 300px;
            height: auto;
            border: 3px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
            transition: transform 0.2s ease-in-out;
        }
        .image img:hover {
            transform: scale(1.1);
        }
        .caption {
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
        }
        /* Tambahkan gaya untuk overlay */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 999;
        }
        .overlay img {
            max-width: 80%;
            max-height: 80%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 3px solid #fff;
            border-radius: 5px;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
        }
        .image-info {
            text-align: center;
            padding: 10px;
        }
        .image-info p {
            margin: 5px 0;
        }
        .image-info .detail {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <header>
    <?php include('include/header.php'); ?>
    </header>
    <div class="container">
   
        <div class="image">
            <img src="<?= site_url('img/guide1.png') ?>" alt="Gambar 1" onclick="showImage('<?= site_url('img/guide1.png') ?>', 'Gambar 1: Langkah 1')">
            <p class="caption">1.1 Halaman Acara</p>
            <p class="detail">Silakan tambahkan satu informasi tambahan di sini, cukup dengan satu entri data saja  untuk menghindari data agar tidak double.</p>
        </div>
        <div class="image">
            <img src="<?= site_url('img/acara.png') ?>" alt="Gambar 1" onclick="showImage('<?= site_url('img/acara.png') ?>', 'Gambar 1: Langkah 1')">
            <p class="caption">1.2 Hasil dari Inputan acara</p>
            <p class="detail">Apabila Anda memasukkan dua data, maka dua data juga akan ditampilkan.</p>
        </div>
        <div class="image">
            <img src="<?= site_url('img/guide2.png') ?>" alt="Gambar 1" onclick="showImage('<?= site_url('img/guide2.png') ?>', 'Gambar 1: Langkah 1')">
            <p class="caption">1.3 Halaman event</p>
        </div>
        <div class="image">
            <img src="<?= site_url('img/guide21.png') ?>" alt="Gambar 1" onclick="showImage('<?= site_url('img/guide21.png') ?>', 'Gambar 1: Langkah 1')">
            <p class="caption">1.4  hasil inputan dari halaman event</p>
        </div>
        <div class="image">
            <img src="<?= site_url('img/guide3.png') ?>" alt="Gambar 1" onclick="showImage('<?= site_url('img/guide3.png') ?>', 'Gambar 1: Langkah 1')">
            <p class="caption">1.5 Halaman Mempelai Pria & Wanita</p>
        </div>
        <div class="image">
            <img src="<?= site_url('img/guide23.png') ?>" alt="Gambar 1" onclick="showImage('<?= site_url('img/guide23.png') ?>', 'Gambar 1: Langkah 1')">
            <p class="caption">1.6 Hasil dari inputan  Halaman Mempelai Pria & Wanita</p>
        </div>
        <div class="image">
            <img src="<?= site_url('img/guide4.png') ?>" alt="Gambar 1" onclick="showImage('<?= site_url('img/guide4.png') ?>', 'Gambar 1: Langkah 1')">
            <p class="caption">1.7 Halaman Akad nikah & resepsi</p>
        </div>
        <div class="image">
            <img src="<?= site_url('img/guide24.png') ?>" alt="Gambar 1" onclick="showImage('<?= site_url('img/guide24.png') ?>', 'Gambar 1: Langkah 1')">
            <p class="caption">1.8 Hasil dari inputan  Halaman Akad nikah & resepsi</p>
        </div>
        <div class="image">
            <img src="<?= site_url('img/guide5.png') ?>" alt="Gambar 1" onclick="showImage('<?= site_url('img/guide5.png') ?>', 'Gambar 1: Langkah 1')">
            <p class="caption">1.7 Halaman galeri foto</p>
            <p class="detail">Di halaman ini anda bebas menambahakan foto sebanyak mungkin </p>
        </div>
        <div class="image">
            <img src="<?= site_url('img/guide24.png') ?>" alt="Gambar 1" onclick="showImage('<?= site_url('img/guide24.png') ?>', 'Gambar 1: Langkah 1')">
            <p class="caption">1.8 Hasil dari inputan  Halaman galeri foto</p>
        </div>
        <!-- Sisipkan gambar-gambar lainnya di sini -->
    </div>
    
 <!-- Tambahkan overlay untuk tampilan gambar besar -->
<div class="overlay" id="overlay">
    <span class="close-btn" onclick="closeImage()">&times;</span>
    <img id="largeImage" src="<?= site_url('img/1.jpg') ?>" alt="">
</div>

    
    <script>
        function showImage(src, caption) {
            const overlay = document.getElementById("overlay");
            const largeImage = document.getElementById("largeImage");

            largeImage.src = src;
            largeImage.alt = caption;

            overlay.style.display = "block";
        }

        function closeImage() {
            const overlay = document.getElementById("overlay");
            overlay.style.display = "none";
        }
    </script>
</body>
</html>
