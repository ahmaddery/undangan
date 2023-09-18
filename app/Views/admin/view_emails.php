<!DOCTYPE html>
<html>
<head>
    <title>Daftar Email</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Include SweetAlert 2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css">

<!-- Include SweetAlert 2 JS (optional, you can include it at the end of the body if you prefer) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.js"></script>

    <!-- Your custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 30px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .alert {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            vertical-align: middle;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <?php include('include/header.php'); ?>
    <?php include('include/navbar.php'); ?>

    <div class="container">
        <h1>Daftar Email Terkirim</h1>

        <?php if (session()->has('success')) : ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '<?= session('success') ?>',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        });
    </script>
<?php endif ?>


        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Penerima</th>
                    <th>Subjek</th>
                    <th>Terkirim Pada</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($emails as $email) : ?>
                    <tr>
                        <td><?= $email['id'] ?></td>
                        <td><?= $email['penerima'] ?></td>
                        <td><?= $email['subjek'] ?></td>
                        <td><?= $email['terkirim_pada'] ?></td>
                        <td>
                            <a href="<?= site_url('admin/delete_email/' . $email['id']) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <?php include('include/scripts.php'); ?>
    <?php include('include/footer.php'); ?>

    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.js"></script>
    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
