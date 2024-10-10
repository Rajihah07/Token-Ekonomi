<?php
session_start();

// Sambung ke pangkalan data
$conn = new mysqli('localhost:3307', 'root', '', 'kelakuan_murid');

// Semak sambungan
if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}

// Proses pendaftaran
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash kata laluan
    $role = $_POST['role']; // Ambil peranan dari borang

    // Semak jika nama pengguna sudah wujud
    $sql = "SELECT * FROM pengguna WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error = "Nama pengguna sudah wujud. Sila pilih nama lain.";
    } else {
        // Masukkan pengguna baru
        $sql = "INSERT INTO pengguna (username, password, role) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $password, $role);
        if ($stmt->execute()) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            $error = "Ralat dalam pendaftaran. Sila cuba lagi.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna - Sistem Kelakuan Murid</title>
    <link rel="stylesheet" href="kelakuan.css">
    <style>
        body {
            background-color: #f4f7fc; /* Latar belakang putih lembut */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: #2a3d66; /* Biru gelap yang lembut */
            color: white;
            padding: 30px 0;
            position: relative;
            border-bottom: 5px solid #1f2a3d; /* Garisan biru gelap lebih pekat */
        }
        h1 {
            margin: 0;
            font-size: 40px;
            font-weight: 600;
        }
        .register-container {
            width: 350px;
            margin: 40px auto;
            padding: 20px;
            border: 1px solid #007bff;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #007bff; /* Warna biru */
        }
        .error {
            color: red;
        }
        input[type="text"], input[type="password"], select {
            width: 90%; /* Kecilkan lebar kotak */
            padding: 10px; /* Kecilkan padding */
            margin: 10px 0;
            border: 1px solid #007bff; /* Biru */
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
        }
        button {
            padding: 12px;
            background-color: #007bff; /* Biru */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3; /* Biru lebih gelap */
        }
        footer {
            background-color: #2a3d66; /* Biru gelap yang lembut */
            color: white;
            padding: 15px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            font-size: 14px;
        }
    </style>
</head>
<body>


<div class="register-container">
    <h2>Daftar Pengguna Baru</h2>
    <?php if (isset($error)) { echo '<p class="error">' . $error . '</p>'; } ?>
    <form method="POST" action="">
        <label for="username">Nama Pengguna:</label>
        <input type="text" name="username" required>
        
        <label for="password">Kata Laluan:</label>
        <input type="password" name="password" required>
        
        <label for="role">Peranan:</label>
        <select name="role" required>
            <option value="">Pilih Peranan</option>
            <option value="ibu_bapa">Ibu Bapa</option>
            <option value="guru">Guru</option>
        </select>
        
        <button type="submit">Daftar</button>
    </form>
</div>

</body>
</html>
