<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PHP Operator Frendy</title>
</head>
<body>
    <?php
    $x = 15;
    $y = 5;
    $x += $y; // x = x + y
    echo "Nilai x setelah ditambah y: $x <br>";

    if ($x == 20) {
        echo "x sama dengan 20 (equal). <br>";
    }

    if ($x === 15) {
        echo "x identik dengan 15 (identical).";
    }
    ?>
</body>
</html>
