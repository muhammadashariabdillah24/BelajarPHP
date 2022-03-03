<?php

    function tugas_3_1($jarak,$kecepatan)
    {
        $res1 = $jarak / $kecepatan;

        return $res1;
        
    }

    print_r(tugas_3_1(360,90));


    echo "<br><br>";



    function tugas_3_2($bunga, $jml_tabungan_awal)
    {
        $res1 = floatval($bunga) * floatval($jml_tabungan_awal);

        $res2 = floatval($jml_tabungan_awal) + floatval($res1);

        return floatval($res2);
    }

    $b = '12.5';
    $ja = '150.000';

    print_r(tugas_3_2($b,$ja))

?>