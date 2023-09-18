<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Galeri Foto</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
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
            max-width: 800px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .mb-4 {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 14px;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <?php include('include/header.php'); ?>
    <div class="container">
        <h1 class="mb-4">Daftar Galeri Foto</h1>
        <a href="<?= site_url('galeri_foto/create'); ?>" class="btn btn-primary mb-3">Tambah Foto</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($galeri_foto as $foto): ?>
                    <tr>
                        <td><?= $foto['id']; ?></td>
                        <td>
                            <img src="<?= base_url('upload/' . $foto['foto']); ?>" width="100" height="100" alt="Foto">
                        </td>
                        <td>
                            <a href="<?= site_url('galeri_foto/edit/' . $foto['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?= site_url('galeri_foto/delete/' . $foto['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap 5 JavaScript (optional, if you need JavaScript components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
