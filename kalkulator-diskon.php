<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Diskon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 50px;
        }
        .container {
            max-width: 400px;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background: #e9ecef;
            border-radius: 4px;
        }
        .result p {
            margin: 5px 0;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Kalkulator Diskon</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="harga">Harga Asli (Rp):</label>
            <input type="number" id="harga" name="harga" required min="0" step="any">
        </div>
        <div class="form-group">
            <label for="diskon">Persentase Diskon (%):</label>
            <input type="number" id="diskon" name="diskon" required min="0" max="100" step="any">
        </div>
        <button type="submit" name="hitung">Hitung Diskon</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $harga_asli = $_POST['harga'];
        $persen_diskon = $_POST['diskon'];

        // Proses perhitungan
        $besar_diskon = $harga_asli * ($persen_diskon / 100);
        $harga_akhir = $harga_asli - $besar_diskon;
    ?>
        <div class="result">
            <h3>Hasil Perhitungan:</h3>
            <p>Harga Asli: <strong>Rp <?php echo number_format($harga_asli, 0, ',', '.'); ?></strong></p>
            <p>Diskon (<?php echo $persen_diskon; ?>%): <strong>Rp <?php echo number_format($besar_diskon, 0, ',', '.'); ?></strong></p>
            <p>Harga Akhir: <strong style="color: #28a745;">Rp <?php echo number_format($harga_akhir, 0, ',', '.'); ?></strong></p>
        </div>
    <?php } ?>
</div>

</body>
</html>