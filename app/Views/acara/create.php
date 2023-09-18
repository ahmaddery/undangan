
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Acara Baru</title>
    <!-- Tambahkan link untuk CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 400px;
            margin: 100px auto; /* Menambahkan margin atas yang lebih besar */
            background-color: #ffffff;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<?php include('include/header.php'); ?>

<body>

    <div class="container">
        <div class="form-container">
            <h1 class="mb-4">Tambah Acara Baru</h1>
            <?= form_open('acara/create'); ?>
                <div class="mb-3">
                    <label for="nama_mempelai" class="form-label">Nama Mempelai:</label>
                    <input type="text" name="nama_mempelai" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_jam" class="form-label">Tanggal dan Jam:</label>
                    <input type="datetime-local" name="tanggal_jam" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Acara</button>
            <?= form_close(); ?>
        </div>
    </div>

    <!-- Tambahkan script untuk JavaScript Bootstrap jika diperlukan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
