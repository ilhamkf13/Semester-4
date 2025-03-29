<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="/PraktikumPemrogramanWeb/assets/css/style.css">

</head>
<body>
    <div class="container">
        <h2>Yang Sudah Input Boleh Pulang</h2>
        <form action= "/PraktikumPemrogramanWeb/controllers/controller.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="umur">Umur:</label>
            <input type="number" name="umur" id="umur" required>

            <button type="submit">Kirim</button>
        </form>

        <div class="view-data-container">
            <a href="/PraktikumPemrogramanWeb/views/viewdata.php" class="view-data">Lihat Data</a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.24/vanta.waves.min.js"></script>
    <script src="/PraktikumPemrogramanWeb/assets/js/script.js"></script>
</body>
</html>
