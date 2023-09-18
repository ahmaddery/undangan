<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: url('path/to/your/image.jpg') no-repeat center center fixed;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .login-heading {
            text-align: center;
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: 500;
        }
        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        

        .form-control:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-block {
            display: block;
            width: 100%;
        }
        .login-links {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
        .login-links a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.2s ease-in-out;
        }
        .login-links a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="login-heading">Welcome Back!</h2>
        <?= form_open('auth/login'); ?>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" required>
            </div>

            <?php if (isset($message)): ?>
                            <?php if ($message === 'Email atau kata sandi salah.'): ?>
                                <!-- Display SweetAlert2 Toast for login failure -->
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: '<?= $message ?>',
                                            toast: true,
                                            position: 'top-end',
                                            showConfirmButton: false,
                                            timer: 3000
                                        });
                                    });
                                </script>
                            <?php elseif ($message === 'Login berhasil.'): ?>
                                <!-- Display SweetAlert2 Toast for successful login -->
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success!',
                                            text: '<?= $message ?>',
                                            toast: true,
                                            position: 'top-end',
                                            showConfirmButton: false,
                                            timer: 3000
                                        });
                                    });
                                </script>
                            <?php elseif ($message === 'Akun belum terverifikasi.'): ?>
                                <!-- Display SweetAlert2 Toast for unverified account -->
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        Swal.fire({
                                            icon: 'info',
                                            title: 'Info',
                                            text: '<?= $message ?>',
                                            toast: true,
                                            position: 'top-end',
                                            showConfirmButton: false,
                                            timer: 3000
                                        });
                                    });
                                </script>
                            <?php endif; ?>
                        <?php endif; ?>





            <button class="btn btn-primary btn-block" type="submit">Login</button>
        </form>
        <div class="login-links">
            <a href="auth/forgot-password">Forgot Password?</a>
            <span class="mx-2">|</span>
            <a href="register_form">Create an Account</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
</body>
</html>
