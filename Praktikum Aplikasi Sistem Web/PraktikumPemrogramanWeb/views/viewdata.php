<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
    <link rel="stylesheet" href="/PraktikumPemrogramanWeb/assets/css/styledata.css">
</head>
<body>

<div class="container">
    <h2>Data Pengguna</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Umur</th>
        </tr>
        <?php include '../controllers/getData.php'; ?>
    </table>
    <a href="index.php">Kembali</a>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.24/vanta.waves.min.js"></script>
    <script src="/PraktikumPemrogramanWeb/assets/js/script.js"></script>
</body>
</html>
