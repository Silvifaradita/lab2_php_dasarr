<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    echo "Hello World";
    ?>
</body>
<body>
    <h2> Menggunakan Variable</h2>
    <?php
    $nim= "0411500400";
    $nama = 'Abdullah';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
</body>
<body>
    <h3> predefine Variable $_get</h3>
    <?php
    echo 'Selamat Datang ' . $_GET['nama'];
    ?>
</body>
</html>