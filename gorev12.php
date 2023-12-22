<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastgele Sayılar Tablosu</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $satir_sayisi = $_POST["satir"];
    $sutun_sayisi = $_POST["sutun"];

    echo "<table border='1'>";
    for ($i = 1; $i <= $satir_sayisi; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $sutun_sayisi; $j++) {
            $rastgele_sayi = rand(1, 100);
            echo "<td>{$rastgele_sayi}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "
    <form method='post' action='{$_SERVER["PHP_SELF"]}'>
        <label for='satir'>Satır Sayısı:</label>
        <input type='number' name='satir' id='satir' required min='1'><br>
        <label for='sutun'>Sütun Sayısı:</label>
        <input type='number' name='sutun' id='sutun' required min='1'><br>
        <input type='submit' value='Tabloyu Oluştur'>
    </form>";
}
?>

</body>
</html>
