<?php


    function jenisWarna($dataWarna)
    {
        foreach($dataWarna as $cetakDataWarna) {

            echo $cetakDataWarna;
            echo "<br>";

        }

        echo "<br> ================================================================ <br><br>";

        unset($dataWarna[0]);

        foreach($dataWarna as $hapusDataWarna) {

            echo $hapusDataWarna;
            echo "<br>";

        }
    }

    function dataWarna()
    {
        $arrayDataWarna = ["Hitam","Putih","Hijau","Kuning","Merah","Biru"];

        jenisWarna($arrayDataWarna);
    }

    dataWarna();

    echo "<br><br>";


    function buatFunctionDenganReturnStatement()
    {
        return 'Hallo Perkenalkan Namaku Muhmmad Ashari Abdillah';
    }

    echo buatFunctionDenganReturnStatement();


?>