<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "kelakuan_murid";

// Buat sambungan
$conn = new mysqli($servername, $username, $password, $dbname);

// Semak sambungan
if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}
?>
