<!-- Function adalah section of code yang menjalankan task yang spesifik -->

<?php

    $keranjangDodi = ["Telur","Daging","Sayur"];


    foreach($keranjangDodi as $cetakKeranjang) {

        echo $cetakKeranjang;
        echo "<br>";

    }

    echo "<br><br>";

    $warnaKelerengBudi = ["Hitam","Merah","Emas"];

    foreach($warnaKelerengBudi as $cetakWarnaKelereng) {

        echo $cetakWarnaKelereng;
        echo "<br>";

        if ($cetakWarnaKelereng == "Emas") {
            
            echo "<br><br>";
            echo "Ini Kelereng Mahal";
        }
    }

    

?>