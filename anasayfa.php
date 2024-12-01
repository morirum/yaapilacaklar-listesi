<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List Ana Sayfa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <a href="logout.php" class="nav-button">Çıkış Yap</a>
        </div>
        <div class="nav-right">
            <img src="logo.png" alt="Logo" class="logo">
        </div>
    </nav>

    <div class="container">
        <h1>Hoş geldin, <?php echo $_SESSION['username']; ?>!</h1>
        <a href="gorev_lis_olustur.php" class="button">Yapılacaklar Listesi Oluştur</a>
    </div>
</body>
</html>
