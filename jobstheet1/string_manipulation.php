<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>

<body>
    <?php
    $date = "02-05-2023";
    $x = "Selamat belajar PHP!";
    // echo $x;
    // echo strtoupper($x); KAPITAL
    //echo strtolower($x); kecil
    echo substr($x, 8); //Pemotong string

    // Memotong tahun (misalnya: 2023)
    // $year = substr($date, 6, 4);

    // // Memotong bulan (misalnya: 05)
    // $bulan = substr($date, 3, 2);

    // // Memotong hari (misalnya: 02)
    // $hari = substr($date, 0, 2);

    // echo "<br>Hari: $hari";
    // echo "<br>Bulan: $bulan";
    // echo "<br>Tahun: $year";
    ?>

</body>

</html>