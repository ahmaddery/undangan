<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Include SweetAlert 2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Your custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 80px;
            text-align: center;
        }
        .reset-password-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
    <!-- Include SweetAlert 2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="reset-password-form">
                    <h2 class="text-center mb-4">Reset Password</h2>
                    <?= form_open('auth/reset-password'); ?>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input class="form-control" type="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="reset_code">Reset Code:</label>
                            <input class="form-control" type="text" name="reset_code" required>
                            <small class="text-muted">Silakan periksa email Anda untuk kode reset.</small>
                        </div>
                        <div class="form-group">
                            <label for="new_password">New Password:</label>
                            <input class="form-control" type="password" name="new_password" required>
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
                        <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                    <?= form_close(); ?>
                    <div class="mt-3">
                        <a href="<?= base_url('login_form'); ?>">Back to Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
</body>
</html>
