<!DOCTYPE html>
<html>
<head>
    <title>Forget Password</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Include SweetAlert 2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
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
        .forgot-password-form {
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
            margin-bottom: 15px;
            display: block;
            width: 100%;
            margin-top: 15px; /* Adjust margin-top */
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
    <!-- Include SweetAlert 2 JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="forgot-password-form">
            <h2 class="mb-4">Forget Password</h2>
            <?= form_open('auth/forgot-password'); ?>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" name="email" required>
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
                <button class="btn btn-primary btn-block" type="submit">Send Reset Code</button>
            <?= form_close(); ?>
            <small class="form-text small-text mt-3">
            Pastikan untuk memeriksa folder spam Anda jika Anda tidak melihat email di kotak masuk Anda.
            </small>
            <div class="mt-3">
                <p>Ingat kata sandi Anda?  <a href="<?= base_url('login_form') ?>">Log in</a></p>
            </div>
        </div>
    </div>
        <!-- Include Bootstrap JS (optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
