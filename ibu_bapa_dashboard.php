<?php
session_start();

// Sambung ke pangkalan data
$conn = new mysqli('localhost:3307', 'root', '', 'kelakuan_murid');

// Semak sambungan
if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}

// Semak jika pengguna sudah log masuk
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Arahkan ke halaman log masuk jika tidak log masuk
    exit();
}

// Ambil maklumat pengguna
$username = $_SESSION['username'];
$sql = "SELECT * FROM pengguna WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Ambil maklumat kelakuan anak
$anak_sql = "SELECT * FROM penandaan WHERE nama_murid = ?"; // Anda mungkin perlu mengubah suai ini
$anak_stmt = $conn->prepare($anak_sql);
$anak_stmt->bind_param("s", $user['nama_murid']);
$anak_stmt->execute();
$anak_result = $anak_stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Ibu Bapa</title>
    <link rel="stylesheet" href="kelakuan.css">
    <style>
        body {
            background-color: #e6f0ff;
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 50px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #007bff;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

<h2>Selamat Datang, <?php echo htmlspecialchars($user['username']); ?>!</h2>

<h3>Maklumat Anak Anda</h3>

<table>
    <thead>
        <tr>
            <th>Nama Murid</th>
            <th>Kelas</th>
            <th>Menumpukan Perhatian</th>
            <th>Membawa Peralatan</th>
            <th>Bertanya Soalan</th>
            <th>Bercakap Sopan</th>
            <th>Tidak Dimarahi</th>
            <th>Menyiapkan Latihan</th>
            <th>Tarikh</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($anak_result->num_rows > 0): ?>
            <?php while($row = $anak_result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['nama_murid']); ?></td>
                    <td><?php echo htmlspecialchars($row['kelas']); ?></td>
                    <td><?php echo htmlspecialchars($row['menumpukan_perhatian']); ?></td>
                    <td><?php echo htmlspecialchars($row['membawa_peralatan']); ?></td>
                    <td><?php echo htmlspecialchars($row['bertanya_soalan']); ?></td>
                    <td><?php echo htmlspecialchars($row['bercakap_sopan']); ?></td>
                    <td><?php echo htmlspecialchars($row['tidak_dimarahi']); ?></td>
                    <td><?php echo htmlspecialchars($row['menyiapkan_latihan']); ?></td>
                    <td><?php echo htmlspecialchars($row['tarikh']); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="9">Tiada data kelakuan untuk anak anda.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<a href="logout.php">Log Keluar</a>

</body>
</html>
