<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PHP Casting</title>
</head>
<body>
    <?php
    $stringAngka = "20";
    $angka = (int)$stringAngka; // Mengubah string menjadi integer
    echo "Hasil casting: " . ($angka + 10);
    ?>
</body>
</html>
