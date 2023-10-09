<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <?php
    function persegi_panjang($p, $l)
    {
        return $p * $l;
    }
    function lingkaran($r)
    {
        return 3.14 * $r * $r;
    }
    ?>

    <form method="post">
        <input type="text" name="panjang" placeholder="Masukkan Panjang">
        <input type="text" name="lebar" placeholder="Masukkan Lebar">
        <input type="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['panjang']) && isset($_POST['lebar'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        echo "Luas Persegi Panjang= " . persegi_panjang($panjang, $lebar) . "</br>";
        echo "Luas Lingkaran = " . lingkaran($panjang) . "</br>";
    }
    ?>
</body>
</html>
