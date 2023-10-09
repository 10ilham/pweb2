<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>

<body>
    <form method="post">
        <label for="x">Masukkan Nilai x:</label>
        <input type="text" name="x">
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
        echo "Nilai x = $x </br></br>";
        if ($x > 0) {
            echo "$x adalah Bilangan Positif";
        } elseif ($x < 0) {
            echo "$x adalah Bilangan Negatif";
        } else {
            echo "$x adalah Bilangan Nol";
        }
    }
    ?>
</body>

</html>