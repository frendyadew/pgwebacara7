<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PHP Switch Frendy</title>
</head>
<body>
    <?php
    $hari = 4;

    switch ($hari) {
        case 1:
            echo "Hari ini adalah Senin.";
            break;
        case 2:
            echo "Hari ini adalah Selasa.";
            break;
        case 3:
            echo "Hari ini adalah Rabu.";
            break;
        default:
            echo "Hari tidak valid.";
    }
    ?>
</body>
</html>
