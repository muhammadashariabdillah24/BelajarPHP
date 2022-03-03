<!-- Operator Logika Ada 6 yaitu -->
<!-- and,  or,  xor,  !,  &&,  || -->

<?php

    // Cara 1
    $logika_and = (true and false);

    var_dump($logika_and);

    echo "<br>";

    $logika_or = (true or false);

    var_dump($logika_or);

    echo "<br>";

    $logika_1 = ('niomic' and false);

    var_dump($logika_1);


    echo "<br><br>";

    // Cara 2

    $umurDeni = 21;
    $punyaKTP = true;

    if ($umurDeni >= 18 && $punyaKTP) {
        
        echo "Boleh Beli Motor Di Dealer";
        
    } else {

        echo "Tidak Boleh Beli Motor Di Dealer";

    }

    echo "<br>";

    // Untuk Operator Logika XOR
    // Akan bernilai true jika salah satu operan bernilai true
    // Dan akan bernilai false jika kedua operan bernilai true

    $menguasaiPHP = true;
    $menguasaiJAVASCRIPT = true;

    if ($menguasaiPHP || $menguasaiJAVASCRIPT) {
        
        echo "Izal Bisa Membuat Aplikasi Web Atau Mobile";

    } else {

        echo "Izal Tidak Bisa Membuat Aplikasi Web Atau Mobile";
    }

    echo "<br>";

    $ngodingCepat = false;
    $ngodingRapih = false;

    if ($ngodingCepat xor $ngodingRapih) {
        
        echo "Setuju";

    } else {

        echo "Tidak Setuju";
    }

?>