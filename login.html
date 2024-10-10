<?php
session_start();

// Sambung ke pangkalan data
$conn = new mysqli('localhost:3307', 'root', '', 'kelakuan_murid');

// Semak sambungan
if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Semak pengguna dalam pangkalan data
    $sql = "SELECT * FROM pengguna WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Semak kata laluan
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            
            // Arahkan ke halaman yang sesuai berdasarkan role pengguna
            if ($user['role'] === 'ibu_bapa') {
                header("Location: paparan_ibu_bapa.php"); // Ibu bapa akan ke paparan_data.php
            } else {
                header("Location: proses_tandakan.php"); // Guru akan ke dashboard_guru.php
            }
            exit();
        } else {
            $error_message = "Kata laluan salah.";
        }
    } else {
        $error_message = "Pengguna tidak ditemui.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Masuk</title>
    <link rel="stylesheet" href="kelakuan.css">
    <style>
        body {
            background-color: #e6f0ff; /* Latar belakang lembut biru */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 50px;
            text-align: center;
        }
        .login-container {
            width: 350px;
            margin: auto;
            padding: 40px;
            border: 1px solid #007bff;
            border-radius: 15px;
            background-color: #ffffff;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }
        .login-container:hover {
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }
        h2 {
            color: #004085; /* Biru gelap */
            font-size: 28px;
            margin-bottom: 25px;
            font-weight: bold;
        }
        input[type="text"], input[type="password"] {
            margin: 15px 0;
            width: 100%;
            padding: 12px;
            border: 1px solid #007bff;
            border-radius: 10px;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #0056b3;
            box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        button {
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
            margin-top: 15px;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3; /* Biru lebih gelap pada hover */
        }
        .error {
            color: #dc3545; /* Merah terang untuk mesej ralat */
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Log Masuk</h2>
    <form method="POST" action="">
        <label for="username">Nama Pengguna:</label>
        <input type="text" name="username" required placeholder="Masukkan nama pengguna">

        <label for="password">Kata Laluan:</label>
        <input type="password" name="password" required placeholder="Masukkan kata laluan">

        <?php if (isset($error_message)) { ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php } ?>

        <button type="submit">Log Masuk</button>
    </form>
</div>

</body>
</html>
