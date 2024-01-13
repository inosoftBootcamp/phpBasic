<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>number 1</title>
</head>
<body>
<?php

    function luasLingkaran($jariJari) {
        return round(M_PI * $jariJari**2, 2);
    }

    function kelilingLingkaran($jariJari) {
        return round(2 * M_PI * $jariJari, 2);
    }

    function luasPersegi($panjang, $lebar) {
        return round($panjang * $lebar, 2);
    }

    for ($angka = 1; $angka <= 100; $angka++) {
        if ($angka % 3 == 0 && $angka % 5 == 0) {
            $panjang = $angka / 3;
            $lebar = $angka / 5;
            $hasil = luasPersegi($panjang, $lebar);
            echo "Angka: $angka, Luas Persegi: $hasil\n </br>";
        } elseif ($angka % 3 == 0) {
            $jariJari = $angka / 3;
            $hasil = luasLingkaran($jariJari);
            echo "Angka: $angka, Luas Lingkaran: $hasil\n </br>";
        } elseif ($angka % 5 == 0) {
            $jariJari = $angka / 5;
            $hasil = kelilingLingkaran($jariJari);
            echo "Angka: $angka, Keliling Lingkaran: $hasil\n </br>";
        } else {
            echo "Angka: $angka\n";
        }
    }

?>
</body>
</html>