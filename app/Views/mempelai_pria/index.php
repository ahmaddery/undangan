
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mempelai Pria</title>
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
            max-width: 800px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .add-button {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
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

        img {
            max-width: 100px;
            height: auto;
        }

        .action-links a {
            margin-right: 10px;
            text-decoration: none;
            color: #007bff;
        }

        .action-links a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php include('include/header.php'); ?>
        <h1>Daftar Mempelai Pria</h1>
        <a href="<?= site_url('/mempelai_pria/create') ?>" class="btn btn-primary add-button">Tambah Mempelai Pria</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Orang Tua</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mempelai as $item) : ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['deskripsi'] ?></td>
                        <td><?= $item['orangtua'] ?></td>
                        <td>
                            <?php if ($item['foto']) : ?>
                                <img src="<?= base_url('upload/' . $item['foto']) ?>" alt="Foto">
                            <?php endif; ?>
                        </td>
                        <td class="action-links">
                            <a href="<?= site_url('/mempelai_pria/edit/') ?><?= $item['id'] ?>">Edit</a> 
                            <a href="<?= site_url('/mempelai_pria/delete/') ?><?= $item['id'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
