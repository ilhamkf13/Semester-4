<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>PHP CRUD</h2>
        <form action= "controller.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="umur">Umur:</label>
            <input type="number" name="umur" id="umur" required>

            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>

