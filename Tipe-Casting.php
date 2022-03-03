<!-- Tipe Casting adalah sebuah proses untuk mengubah tipe data menjadi tipe data lainnya -->

<?php

    $angka = 100;
    var_dump($angka);

    echo "<br>";
    
    $str = "9";
    var_dump($str);

    echo "<br>";

    echo "Mengubah Angka Ke String";
    echo "<br>";

    $strangka = (string) $angka;
    var_dump($strangka);

    echo "<br>";

    echo "Mengubah String Ke Angka";
    echo "<br>";
    
    $angkastr = (int) $str;
    var_dump($angkastr);

?>