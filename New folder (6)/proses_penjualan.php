<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan Kendaraan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
        }
        .data {
            margin-top: 20px;
        }
        .data label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Penjualan Kendaraan</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo "<p>Tidak ada data yang dikirim.</p>";
            exit;
        }
        $merk = $_POST['merk'];
        $model = $_POST['model'];
        $tahun = $_POST['tahun'];
        $harga = $_POST['harga'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        if(empty($merk) || 
            empty($model) || 
            empty($tahun) ||
            empty($harga) || 
            empty($nama) ||
            empty($email)) {
                echo "<p>Semua kolom harus diisi.</p>";
            } else {
                ?>
                <div class="data">
                    <label>Merk:</label>
                    <span><?php echo $merk; ?></span><br>
                    <label>Model:</label>
                    <span><?php echo $model; ?></span><br>
                    <label>Tahun:</label>
                    <span><?php echo $tahun; ?></span><br>
                    <label>Harga:</label>
                    <span><?php echo $harga; ?></span><br>
                    <label>Nama Penjual:</label>
                    <span><?php echo $nama; ?></span><br>
                    <label>Email Penjual:</label>
                    <span><?php echo $email; ?></span><br>
                </div>
                <?php
            }
        ?>
    </div>
</body>
</html>
