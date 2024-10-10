<?php
session_start();
session_destroy(); // Hapuskan sesi pengguna
header("Location: login.php"); // Arahkan semula ke halaman log masuk
exit();
?>
