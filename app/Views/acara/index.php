<?php include('include/header.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Acara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KuEeExjJwn8/LNHi4/OG6sWjxzWw7bdk7tZOw2E+9JGFfFxn4SMbJxU+nk9W6W" crossorigin="anonymous">
    <style>
    body {
        padding: 20px;
    }

    h1 {
        margin-bottom: 20px;
    }

    .container {
        margin-top: 50px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    .event-time {
        font-weight: bold;
    }

    .btn-container {
        display: flex;
        justify-content: flex-start;
        gap: 10px;
    }

    .action-btn {
        background-color: red;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .action-btn:hover {
        background-color: darkred;
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
</style>

</head>
<body>
    <div class="container">
        <h1 class="mt-3">Daftar Acara</h1>

        <!-- Flash message -->
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

        <p>Jam sekarang: <span id="current-time"></span></p>

        <!-- Button for adding new event -->
        <div class="btn-container mb-3">
            <a href="<?= site_url('acara/create') ?>" class="btn action-btn">Tambah Acara Baru</a>
        </div>

        <!-- Event list table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mempelai</th>
                    <th>Tanggal dan Jam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through events -->
                <?php foreach ($acaraList as $acara): ?>
                    <tr>
                        <td><?= esc($acara['id']) ?></td>
                        <td><?= esc($acara['nama_mempelai']) ?></td>
                        <td>
                            <span class="event-time" data-event-time="<?= esc($acara['tanggal_jam']) ?>">
                                Loading...
                            </span>
                        </td>
                        <td>
                            <div class="btn-container">
                                <a href="<?= site_url('acara/edit/' . esc($acara['id'])) ?>" class="btn action-btn">Edit</a>
                                <a href="<?= site_url('acara/delete/' . esc($acara['id'])) ?>" class="btn action-btn">Hapus</a>
                            </div>
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




    <!-- JavaScript -->
    <script>
        function updateCurrentTime() {
            const currentTimeElement = document.getElementById('current-time');
            const now = new Date();
            currentTimeElement.textContent = now.toLocaleTimeString('id-ID');
        }

        function updateEventTimes() {
            const eventTimeElements = document.querySelectorAll('.event-time');
            eventTimeElements.forEach(function(element) {
                const eventTime = new Date(element.dataset.eventTime);
                const currentTime = new Date();
                const intervalInSeconds = Math.floor((eventTime - currentTime) / 1000);
                const days = Math.floor(intervalInSeconds / (60 * 60 * 24));
                const hours = Math.floor((intervalInSeconds % (60 * 60 * 24)) / (60 * 60));
                const minutes = Math.floor((intervalInSeconds % (60 * 60)) / 60);
                const seconds = intervalInSeconds % 60;

                const timeString = days > 0 ? `${days} hari ${hours} jam ${minutes} menit ${seconds} detik lagi` :
                                              hours > 0 ? `${hours} jam ${minutes} menit ${seconds} detik lagi` :
                                              minutes > 0 ? `${minutes} menit ${seconds} detik lagi` :
                                              `${seconds} detik lagi`;
                element.textContent = timeString;
            });
        }

        // Update time every second
        setInterval(updateCurrentTime, 1000);
        setInterval(updateEventTimes, 1000);
    </script>
    <script>

        
    </script>





</body>
</html>
