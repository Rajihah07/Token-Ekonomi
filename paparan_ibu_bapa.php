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

// Semak jenis pengguna
$is_parent = isset($_SESSION['role']) && $_SESSION['role'] === 'ibu_bapa';

// Ambil data dari pangkalan data berdasarkan tarikh dan jenis pengguna
$selected_date = isset($_POST['selected_date']) ? $_POST['selected_date'] : date('Y-m-d');
$sql = "SELECT * FROM penandaan WHERE tarikh = ? ORDER BY tarikh DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $selected_date);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paparan Data</title>
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
        .btn-delete {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        .date-dropdown {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<h2>Program Token Ekonomi</h2>

<?php
// Papar nama murid dan kelas
if (isset($_SESSION['nama_murid']) && isset($_SESSION['kelas'])) {
    echo "<h3>Nama Murid: " . $_SESSION['nama_murid'] . "</h3>";
    echo "<h3>Kelas: " . $_SESSION['kelas'] . "</h3>";
    // Hapuskan session setelah dipaparkan
    unset($_SESSION['nama_murid']);
    unset($_SESSION['kelas']);
}
?>

<form method="POST" action="" class="date-dropdown">
    <label for="date">Pilih Tarikh:</label>
    <input type="date" name="selected_date" value="<?php echo $selected_date; ?>" required>
    <button type="submit">Cari</button>
</form>

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
            <?php if (!$is_parent): ?>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['nama_murid']; ?></td>
                    <td><?php echo $row['kelas']; ?></td>
                    <td><?php echo $row['menumpukan_perhatian']; ?></td>
                    <td><?php echo $row['membawa_peralatan']; ?></td>
                    <td><?php echo $row['bertanya_soalan']; ?></td>
                    <td><?php echo $row['bercakap_sopan']; ?></td>
                    <td><?php echo $row['tidak_dimarahi']; ?></td>
                    <td><?php echo $row['menyiapkan_latihan']; ?></td>
                    <td><?php echo $row['tarikh']; ?></td>
                    <?php if (!$is_parent): ?>
                    <?php endif; ?>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="10">Tiada data tersedia.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
