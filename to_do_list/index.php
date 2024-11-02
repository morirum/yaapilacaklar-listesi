<?php
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <a href="giris_yap.php" class="nav-button">Giriş Yap</a>
            <a href="uye_ol.php" class="nav-button">Üye Ol</a>
        </div>
        <div class="nav-right">
            <img src="logo.png" alt="Logo" class="logo"> <!-- Logo yerleştir -->
        </div>
    </nav>

    <div class="content">
        <h1>Yapılacaklar Listesi Uygulaması</h1>
        <p>Giriş yapmadığınız için yapılan tasarımların sadece görünüşü gösterilmektedir.</p>
        <p>Giriş yaptıktan sonra yapacaklar listenizi oluşturabilirsiniz!</p>
    </div>
</body>
</html>
