<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <style>
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .alert {
            margin-bottom: 1rem;
            border-radius: 0.25rem;
        }

        /* Use Bootstrap alert classes */
        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>User List</h1>
        <?php if (session()->has('success')) : ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '<?= session('success') ?>',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>
        <?php endif; ?>
        <?php if (session()->has('error')) : ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '<?= session('error') ?>',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>
        <?php endif; ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Dibuat </th>
                    <th>Diupdate </th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['id']; ?></td>
                        <td><?= $user['username']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td><?= $user['created_at']; ?></td>
                        <td><?= $user['updated_at']; ?></td>
                        <td>
            <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?= $user['id']; ?>)">Delete</button>
        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- Include SweetAlert2 JS at the end of the body -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
        <!-- At the end of the <body> section -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
<script>
    function confirmDelete(userId) {
        Swal.fire({
            title: 'Hapus pengguna',
            text: 'Apakah Anda yakin ingin menghapus pengguna ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                // You can redirect to a delete URL or perform an AJAX request here
                window.location.href = '<?= base_url('user/delete/' . $user['id']); ?>'; // Replace with actual delete URL
            }
        });
    }
</script>

    </div>
</body>
</html>

<?php include('include/scripts.php'); ?>
<?php include('include/footer.php'); ?>
