<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Resepsi</title>

    
    <style>
        body {
            background-color: #f4f4f4;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php include('include/header.php'); ?>
    <div class="container">
        <h1>Edit Resepsi</h1>
        <form method="post" action="<?= site_url('/resepsi/update/') ?><?= $resepsi['id']; ?>">
            <label for="pukul">Pukul:</label>
            <input type="text" name="pukul" value="<?= $resepsi['pukul']; ?>" required>
            <br>

            <label for="tanggal">Tanggal:</label>
            <input type="text" name="tanggal" value="<?= $resepsi['tanggal']; ?>" required>
            <br>

            <input type="submit" value="Simpan Perubahan">
        </form>
    </div>

</body>
</html>
