```php
<?php
// Data pesanan laundry
<?php
require "koneksi.php";

$result = mysqli_query($koneksi, "SELECT * FROM pelanggan ORDER BY id_pelanggan");
?> = [
    [
        "no_pesanan" => "001",
        "nama_pelanggan" => "Nasy",
        "no_telepon" => "081387001121",
        "satuan" => "2.1 Kg",
        "harga" => "8.000",
        "estimasi" => "1 Hari",
        "alamat" => "Jl. Telekomunikasi"

    ],
    [
        "no_pesanan" => "002",
        "nama_pelanggan" => "Kirana",
        "no_telepon" => "082105700117",
        "satuan" => "5.0 Kg",
        "harga" => "8.000",
        "estimasi" => "1 Hari",
        "alamat" => "Jl. Suka Maju"
    ],
    [
        "no_pesanan" => "003",
        "nama_pelanggan" => "Irena",
        "no_telepon" => "089985002210",
        "satuan" => "8.0 Kg",
        "harga" => "10.000",
        "estimasi" => "2 Hari",
        "alamat" => "Jl. Pandeglang"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <title>Data Pesanan Laundry</title>
</head>

<body>

<div class="container mt-4">

    <h1 class="h3 mb-4">Data Pesanan Laundry</h1>

    <div id="tabel3" class="table-responsive">

        <table class="table table-bordered table-striped">

            <thead class="table-light">
                <tr>
                    <th scope="col">No Pesanan</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Estimasi Waktu</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($pesanan as $data): ?>

                    <tr>
                        <th scope="row">
                            <?= htmlspecialchars($data["no_pesanan"]) ?>
                        </th>

                        <td>
                            <?= htmlspecialchars($data["nama_pelanggan"]) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data["satuan"]) ?>
                        </td>

                        <td>
                            Rp<?= htmlspecialchars($data["harga"]) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data["estimasi"]) ?>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
```