<?php

function tugas_2_1($jumW,$jumTK,$jumN)
{
    $w = $jumW;
    $tk = $jumTK;

    $res1 = $w * $tk;

    $result = $res1 / $jumN;

    return $result;
}

var_dump(tugas_2_1(36,12,24));

echo "<br><br>";

function tugas_2_2($hJual,$hBeli)
{
    $res1 = $hJual - $hBeli;
    
    $res2 = ($res1 / $hBeli) * 100;
    
    return $res2;
}

var_dump(tugas_2_2(80000, 50000));

?>