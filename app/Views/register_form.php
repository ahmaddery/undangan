<!DOCTYPE html>
<html>
<head>
    <title>User Register</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Include SweetAlert 2 CSS -->
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
        .registration-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .form-group label {
            font-weight: 500;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out;
            margin-top: 15px; /* Adjust margin-top */
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-block {
            display: block;
            width: 100%;
        }
        .small-text {
            font-size: 12px;
            color: #6c757d;
        }
        .register-info {
            text-align: center;
            margin-top: 15px;
        }
    </style>
    <!-- Include SweetAlert 2 JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.js"></script>
</head>
<body>
    <div class="registration-form">
        <h2 class="text-center mb-4">User Registration</h2>
        <?= form_open('auth/register'); ?>
            <div class="form-group">
                <label for="username">Username:</label>
                <input class="form-control" type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" required>
                <small class="form-text small-text">Kami tidak akan pernah membagikan email Anda kepada orang lain.</small>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" required>
            </div>
            <script>
        <?php if (session()->getFlashdata('success')): ?>
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
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: '<?= session()->getFlashdata('error') ?>',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
            });
        <?php endif; ?>
        </script>
            <button class="btn btn-primary btn-block" type="submit">Register</button>
        <?= form_close(); ?>
        <div class="register-info">
            <p>Sudah memiliki akun? <a href="<?= base_url('login_form') ?>">Login here</a></p>
        </div>
    </div>
 
    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
