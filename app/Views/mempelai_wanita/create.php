<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Mempelai Wanita</title>
    
    <!-- Tautan ke Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS Styles -->
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

        .mb-3 {
            margin-bottom: 20px;
        }

        .form-label {
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
    </style>
</head>
<body>
    <div class="container">
        <?php include('include/header.php'); ?>
        <h1 class="mb-4">Create Mempelai Wanita</h1>
        <form action="/mempelai_wanita/store" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
            </div>
            
            <div class="mb-3">
                <label for="orangtua" class="form-label">Orang Tua:</label>
                <input type="text" id="orangtua" name="orangtua" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label>
                <input type="file" id="foto" name="foto" class="form-control" required>
            </div>
            
            <input type="hidden" name="old_foto" value="">
            
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    
    <!-- Tautan ke Bootstrap 5 JavaScript (opsional, jika Anda memerlukan komponen JavaScript) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
