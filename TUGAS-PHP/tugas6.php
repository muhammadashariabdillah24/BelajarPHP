<?php

    function tugas_6_1()
    {
        $hitUsiaAji = 4 + 21;
        $hitUsiaHabib = 21;
        $hitUsiaBintan = 21 + 7;

        echo "
            ======================================================================================
            <br>
            Usia Habib = $hitUsiaHabib Tahun
            <br>
            Usia Aji = $hitUsiaAji Tahun
            <br>
            Usia Bintan = $hitUsiaBintan Tahun
            <br>
            =====================================================================================

        ";
    }

    tugas_6_1();

    echo "<br><br>";


    function tugas_6_2()
    {
        $hitungKG = 6 * 5;
        $hitungHargaPerKG = $hitungKG * 15;
        $hitungKardusYangDiJual = 6 * 2;

        $hasil = $hitungHargaPerKG + $hitungKardusYangDiJual;

        echo "
        =====================================================================================
        <br>
        Harga Jambu = Rp 15000 / Kg
        <br>
        Harga Kardus = Rp 2000 / pcs
        <br>
        Total Penjualan (Dus dan Jambu) = $hasil
        <br>
        =====================================================================================

        ";
        // echo "$hasil";
    }

    tugas_6_2()

?>