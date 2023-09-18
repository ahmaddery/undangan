<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Add Bootstrap 5 CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add SweetAlert 2 CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
  
</head>
<style>
    body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
    }

    .container {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    /* Besarkan kotak pesan */
    .ck.ck-editor__editable {
        min-height: 200px;
    }
</style>
<body>
    <div class="container mt-5">
        <form method="POST" action="<?= site_url('admin/email') ?>">
            <div class="form-group">
                <label>Email Tujuan</label>
                <input type="text" name="email_tujuan" class="form-control">
            </div>

            <div class="form-group">
                <label>Subject</label>
                <input type="text" name="subject" class="form-control">
            </div>
            <div class="form-group">
                <label>Pesan</label>
                <textarea rows="6" id="editor" name="pesan" class="form-control"></textarea>
            </div>

            <!-- Include CKEditor initialization -->
            <script src="https://cdn.ckeditor.com/ckeditor5/45.2.0/classic/ckeditor.js"></script>
            <script>
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .then(editor => {
                        console.log('Editor berhasil dimuat.', editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            </script>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Kirim Email</button>
            </div>
        </form>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <!-- Load SweetAlert 2 script and initialize it -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.all.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '<?= session()->getFlashdata('success') ?>',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
            });
        </script>
    <?php endif; ?>

    
    <!-- Add Bootstrap 5 JavaScript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php include('include/scripts.php'); ?>
<?php include('include/footer.php'); ?>
