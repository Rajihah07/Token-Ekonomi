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

// Semak jika borang dihantar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data daripada borang
    $nama_murid = $_POST['nama_murid'];
    $kelas = $_POST['kelas'];
    $tarikh = $_POST['tarikh'];
    
    // Ambil nilai untuk setiap perkara (Ya atau Tidak)
    $menumpukan_perhatian = isset($_POST['menumpukan_perhatian']) ? $_POST['menumpukan_perhatian'] : 'Tidak';
    $membawa_peralatan = isset($_POST['membawa_peralatan']) ? $_POST['membawa_peralatan'] : 'Tidak';
    $bertanya_soalan = isset($_POST['bertanya_soalan']) ? $_POST['bertanya_soalan'] : 'Tidak';
    $bercakap_sopan = isset($_POST['bercakap_sopan']) ? $_POST['bercakap_sopan'] : 'Tidak';
    $tidak_dimarahi = isset($_POST['tidak_dimarahi']) ? $_POST['tidak_dimarahi'] : 'Tidak';
    $menyiapkan_latihan = isset($_POST['menyiapkan_latihan']) ? $_POST['menyiapkan_latihan'] : 'Tidak';

    // SQL untuk menyimpan data ke dalam pangkalan data
    $sql = "INSERT INTO penandaan (nama_murid, kelas, tarikh, menumpukan_perhatian, membawa_peralatan, bertanya_soalan, bercakap_sopan, tidak_dimarahi, menyiapkan_latihan)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $nama_murid, $kelas, $tarikh, $menumpukan_perhatian, $membawa_peralatan, $bertanya_soalan, $bercakap_sopan, $tidak_dimarahi, $menyiapkan_latihan);

    // Semak jika penyimpanan berjaya
    if ($stmt->execute()) {
        echo "<script>alert('Penandaan berjaya disimpan!');</script>";
    } else {
        echo "<script>alert('Ralat semasa menyimpan penandaan.');</script>";
    }

    // Tutup penyambungan
    $stmt->close();
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Tandakan</title>
    <link rel="stylesheet" href="kelakuan.css">
    <style>
        /* Gaya umum untuk keseluruhan halaman */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff; /* Warna biru lembut */
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: #4a90e2; /* Biru lembut */
            font-weight: bold;
            margin-bottom: 20px;
        }

        label {
            font-size: 1.1em;
            margin-top: 10px;
            display: block;
            color: #555;
        }

        /* Mengecilkan kotak input dan select */
        input[type="text"], select, input[type="date"] {
            width: 50%; /* Kurangkan lebar kepada 50% */
            padding: 8px; /* Pad yang lebih kecil */
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background-color: #f9f9f9;
        }

        .table-container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f9f9f9;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #e3f2fd;
            color: #333;
        }

        td input[type="checkbox"] {
            transform: scale(1.5);
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        button {
            background-color: #4a90e2;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
        }

        button:hover {
            background-color: #357abd;
        }

        .data-button {
            display: inline-block;
            background-color: #50c3e1;
            color: white;
            padding: 10px 15px;
            margin-left: 10px;
            border-radius: 6px;
            text-decoration: none;
        }

        .data-button:hover {
            background-color: #41a8b8;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Program Token Ekonomi</h2>
    <form method="POST" action="">
        <label for="nama_murid">Nama Murid:</label>
        <input type="text" name="nama_murid" required>

        <label for="kelas">Kelas:</label>
        <select name="kelas" required>
            <option value="Tahun 1">Tahun 1</option>
            <option value="Tahun 2">Tahun 2</option>
            <option value="Tahun 3">Tahun 3</option>
            <option value="Tahun 4">Tahun 4</option>
            <option value="Tahun 5">Tahun 5</option>
            <option value="Tahun 6">Tahun 6</option>
        </select>

        <label for="tarikh">Tarikh:</label>
        <input type="date" name="tarikh" required>

        <div class="table-container">
            <table>
                <tr>
                    <th>Perkara</th>
                    <th>Ya</th>
                    <th>Tidak</th>
                </tr>
                <tr>
                    <td>Menumpukan Perhatian</td>
                    <td><input type="checkbox" name="menumpukan_perhatian" value="Ya"></td>
                    <td><input type="checkbox" name="menumpukan_perhatian" value="Tidak"></td>
                </tr>
                <tr>
                    <td>Membawa Peralatan</td>
                    <td><input type="checkbox" name="membawa_peralatan" value="Ya"></td>
                    <td><input type="checkbox" name="membawa_peralatan" value="Tidak"></td>
                </tr>
                <tr>
                    <td>Bertanya Soalan</td>
                    <td><input type="checkbox" name="bertanya_soalan" value="Ya"></td>
                    <td><input type="checkbox" name="bertanya_soalan" value="Tidak"></td>
                </tr>
                <tr>
                    <td>Bercakap Sopan</td>
                    <td><input type="checkbox" name="bercakap_sopan" value="Ya"></td>
                    <td><input type="checkbox" name="bercakap_sopan" value="Tidak"></td>
                </tr>
                <tr>
                    <td>Tidak Dimarahi</td>
                    <td><input type="checkbox" name="tidak_dimarahi" value="Ya"></td>
                    <td><input type="checkbox" name="tidak_dimarahi" value="Tidak"></td>
                </tr>
                <tr>
                    <td>Menyiapkan Latihan</td>
                    <td><input type="checkbox" name="menyiapkan_latihan" value="Ya"></td>
                    <td><input type="checkbox" name="menyiapkan_latihan" value="Tidak"></td>
                </tr>
            </table>
        </div>

        <div class="button-container">
            <button type="submit">Simpan Penandaan</button>
            <a href="paparan_data.php" class="data-button">Lihat Data</a>
        </div>
    </form>
</div>

</body>
</html>
