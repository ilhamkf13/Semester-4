<?php
$host = "localhost"; 
$user = "root";       
$pass = "";           
$database = "ilham_db"; 

$conn = new mysqli($host, $user, $pass, $database);

// if ($conn->connect_error) {
//     die("Koneksi gagal: " . $conn->connect_error);
// }

// if (!$conn) {
//     die("Gagal koneksi ke database: " . mysqli_connect_error());
// } else {
//     echo "Koneksi berhasil!";
//     exit(); 
// }

?>
