<?php
$kiloan = [
    ["Cuci Setrika",    "3 Kg", ["8.000", "9.000", "13.000"], ["2 Hari", "1 Hari", "5 Jam"]],
    ["Cuci Lipat Rapi", "3 Kg", ["6.000", "8.000", "10.000"], ["1 Hari", "5 Jam", "3 Jam"]],
    ["Setrika Wangi",   "3 Kg", ["6.000", "7.000", "8.000"],  ["3 Hari", "2 Hari", "1 Hari"]],
];

$selfService = [
    ["Cuci Saja",   "6 Kg", ["11.000"], ["30 Menit"]],
    ["Kering Saja", "6 Kg", ["11.000"], ["30 Menit"]],
];

$detail = $_GET["detail"] ?? "";

function tampilTabel($data) {
    echo "<table border='1' cellpadding='8' cellspacing='0' align='center' width='100%'>";
    echo "<tr><th>No</th><th>Layanan</th><th>Minimal</th><th>Harga</th><th>Estimasi Waktu</th><th>Detail</th></tr>";

    foreach ($data as $i => $row) {
        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . implode("<br>", $row[2]) . "</td>";
        echo "<td>" . implode("<br>", $row[3]) . "</td>";
        echo "<td><a href='detail.php'>Detail</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan & Tarif</title>
</head>
<body>

<h1 class="judul">Layanan & Tarif</h1>
<h3>Layanan Kiloan</h3>
<?php tampilTabel($kiloan); ?>
<h3>Self Service</h3>
<?php tampilTabel($selfService); ?>

</body>
</html>