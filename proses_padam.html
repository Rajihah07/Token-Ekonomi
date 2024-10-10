<?php
session_start();

// Sambung ke pangkalan data
$conn = new mysqli('localhost:3307', 'root', '', 'kelakuan_murid');

// Semak sambungan
if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}

// Semak jika pengguna sudah log masuk dan mempunyai akses
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'guru') {
    header("Location: login.php"); // Arahkan semula jika tidak log masuk atau bukan guru
    exit();
}

// Semak jika ID dipadam dihantar
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Keluarkan data berdasarkan ID
    $sql = "DELETE FROM penandaan WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    // Laksanakan kueri dan semak jika berjaya
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Data berjaya dipadam.";
    } else {
        $_SESSION['error_message'] = "Gagal untuk memadam data.";
    }

    // Arahkan semula ke halaman paparan data
    header("Location: paparan_data.php");
    exit();
} else {
    $_SESSION['error_message'] = "Tiada ID disertakan untuk dipadam.";
    header("Location: paparan_data.php");
    exit();
}
?>
