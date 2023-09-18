<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mempelai Pria</title>
    
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <style>
        body {
            background-color: #f4f4f4;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .container {
            max-width: 500px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        img {
            max-width: 100px;
            height: auto;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php include('include/header.php'); ?>
        <h1>Edit Mempelai Pria</h1>
        <form action="<?= site_url('/mempelai_pria/update/') ?><?= $mempelai['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $mempelai['nama'] ?>" required>
            </div>
            
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"><?= $mempelai['deskripsi'] ?></textarea>
            </div>
            
            <div class="form-group">
                <label for="orangtua">Orang Tua:</label>
                <input type="text" class="form-control" id="orangtua" name="orangtua" value="<?= $mempelai['orangtua'] ?>">
            </div>
            
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" class="form-control" id="foto" name="foto">
                <input type="hidden" name="old_foto" value="<?= $mempelai['foto'] ?>">
            </div>
            
            <?php if ($mempelai['foto']) : ?>
                <img src="<?= base_url('upload/' . $mempelai['foto']) ?>" alt="Foto">
            <?php endif; ?>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
