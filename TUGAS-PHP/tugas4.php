<?php

    function tugas_4_1($beli,$jual,$untung)
    {
        $res1 = $beli - $jual;

        $res2 = $res1 / $untung;

        return ceil($res2);
    }

    print_r(tugas_4_1(8000, 7500, 300));

    echo "<br><br>";

    function tugas_4_2($liter, $cabang)
    {
        $res1 = $liter / $cabang;

        return $res1;
    }

    print_r(tugas_4_2(8891,523))

?>