<?php
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST["nama"]) ? htmlspecialchars($_POST["nama"]) : null;
    $email = isset($_POST["email"]) ? filter_var($_POST["email"], FILTER_SANITIZE_EMAIL) : null;
    $umur = isset($_POST["umur"]) ? filter_var($_POST["umur"], FILTER_VALIDATE_INT) : null;

    // Pastikan variabel tidak null sebelum masuk ke query
    if ($nama && $email && $umur) {
        $sql = "INSERT INTO users (nama, email, umur) VALUES ('$nama', '$email', '$umur')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<h2>Data berhasil disimpan!</h2>";
        } else {
            echo "<p style='color:red;'>Error: " . $conn->error . "</p>"; // Debug error
        }
    } else {
        echo "<p style='color:red;'>Data tidak valid!</p>";
    }
}
?>
