
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mempelai Wanita</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-size: 16px;
        }
        .container {
            margin-top: 20px;
            max-width: 100%;
            padding: 0 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        .add-link {
            margin-bottom: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .img-thumbnail {
            max-width: 100px;
            height: auto;
        }
        .actions {
            white-space: nowrap;
        }
        .actions a {
            display: inline-block;
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .container {
                padding: 0 10px;
            }
            .add-link {
                display: block;
                width: 100%;
                text-align: center;
            }
            table {
                font-size: 14px;
            }
            .img-thumbnail {
                max-width: 80px;
            }
            .actions a {
                display: block;
                margin-bottom: 5px;
                margin-right: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <?php include('include/header.php'); ?>

        <h1>Daftar Mempelai Wanita</h1>
        <a href="<?= site_url('/mempelai_wanita/create') ?>" class="add-link">Tambah Mempelai Wanita</a>
        <table>
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
                                <img src="<?= base_url('upload/' . $item['foto']) ?>" alt="Foto" class="img-thumbnail">
                            <?php endif; ?>
                        </td>
                        <td class="actions">
                            <a href="<?= site_url('/mempelai_wanita/edit/') ?><?= $item['id'] ?>">Edit</a>
                            <a href="<?= site_url('/mempelai_wanita/delete/') ?><?= $item['id'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
