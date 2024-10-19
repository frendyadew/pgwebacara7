<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Mobil dan Warna by Frendy</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Daftar Mobil dan Warna</h2>
    <table border="1">
        <tr>
            <th>Mobil</th>
            <th>Warna</th>
        </tr>

        <?php
        // Mendefinisikan array mobil dan warna
        $cars = array("Toyota", "Honda", "Suzuki");
        $colors = array("Merah", "Hitam", "Putih");

        // Menggunakan loop untuk mencetak satu mobil dan satu warna per baris
        for ($i = 0; $i < count($cars); $i++) {
            echo "<tr>";
            echo "<td>" . $cars[$i] . "</td>";
            echo "<td>" . $colors[$i] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
