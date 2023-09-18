<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css">
    <!-- Your custom CSS -->
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            text-align: center;
        }
        .verification-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
        }
        .form-group label {
            font-weight: 500;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out;
            margin-top: 10px;
            display: block;
            width: 100%;
            padding: 8px 0; /* Adjust padding as needed */
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .small-text {
            font-size: 12px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="verification-form">
            <h2 class="mb-4">Email Verification</h2>
            <?= form_open('auth/verify'); ?>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" name="email" required>
                    <small class="small-text">Silakan masukkan alamat email Anda yang terdaftar.</small>
                </div>
                <div class="form-group">
                    <label for="verification_code">Verification Code:</label>
                    <input class="form-control" type="text" name="verification_code" required>
                    <small class="small-text">Periksa email Anda untuk mendapatkan kode verifikasi.</small>
                </div>
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
                <button class="btn btn-primary btn-block" type="submit">Verify</button>
            <?= form_close(); ?>
            <div class="mt-3">
                <p><a href="<?= base_url('login_form') ?>">Back to Login</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.js"></script>
    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.js"></script>
</body>
</html>
