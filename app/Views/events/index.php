<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event List</title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <!-- Your Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 70px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .actions a {
            margin-right: 10px;
        }

           /* Additional content styling */
    .mt-4 {
        margin-top: 2rem; /* Increased margin for spacing */
        padding: 20px; /* Add padding to the content */
        background-color: #f9f9f9; /* Add a subtle background color */
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .mt-4 p {
        font-size: 16px;
        line-height: 1.6;
        color: #333; /* Darken the text color for better contrast */
        margin-bottom: 1.5rem; /* Add margin at the bottom for spacing */
    }

    .mt-4 img {
        max-width: 50%; /* Allow the image to fill its container */
        height: auto;
        display: block;
        margin-top: 1rem;
        margin-bottom: 1.5rem; /* Add margin at the bottom for spacing */
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .jumbotron {
            padding: 5rem 1rem;
            margin-bottom: 3rem;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    </style>
</head>
<body>
<div class="container">
        <div class="jumbotron">
        <h1>Event List</h1>
        <a href="<?= site_url('events/create') ?>" class="btn btn-primary">Create New Event</a>

        <?php include('include/header.php'); ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                    <tr>
                        <td><?= $event['tanggal'] ?></td>
                        <td><?= $event['lokasi'] ?></td>
                        <td class="actions">
                            <a href="<?= site_url('events/edit/') ?><?= $event['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="<?= site_url('/events/delete/') ?><?= $event['id'] ?>" class="btn btn-danger" onclick="return confirmDelete(event)">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="mt-4">
    <p>catatan* :Mohon hanya membuat satu set data untuk menghindari bentrok pada data yang ada</p>
    <p>Gambar Dibawah Merupakan Contoh Hasil Dari Inputan di atas</p>
</div>
    <div class="mt-4">
    <img src="<?= site_url('img/acara.png') ?>" alt="Image Description" style="max-width: 90%; display: block; margin: 0 auto;">
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.all.min.js"></script>
<script>
    function confirmDelete(event) {
        event.preventDefault(); // Mencegah tindakan default link

        // Menampilkan SweetAlert2 toast untuk konfirmasi
        Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengkonfirmasi, lanjutkan dengan mengarahkan ke URL delete
                window.location.href = event.target.getAttribute('href');
            }
        });
    }
</script>
    <!-- Bootstrap 5 JS (you might need to include jQuery and Popper.js as well) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
