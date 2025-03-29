<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once(__DIR__ . "/../config/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "MASUK SINI";
    $nama = isset($_POST["nama"]) ? htmlspecialchars($_POST["nama"]) : null;
    $email = isset($_POST["email"]) ? filter_var($_POST["email"], FILTER_SANITIZE_EMAIL) : null;
    $umur = isset($_POST["umur"]) ? filter_var($_POST["umur"], FILTER_VALIDATE_INT) : null;

    if ($nama && $email && $umur) {
        $stmt = $conn->prepare("INSERT INTO users (nama, email, umur) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $nama, $email, $umur);

        if ($stmt->execute()) {
            header("Location: ../views/confirm.php?status=success");
            exit();
        } else {
            header("Location: ../views/confirm.php?status=error");
            exit();
        }
    } else {
        echo "MASUK SINI 2";
        header("Location: ../views/confirm.php?status=invalid");
        echo "MASUK SINI 3";
        echo "Data berhasil ditambahkan!";

    }
}
?>
