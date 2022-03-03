<?php

    // Bilangan Fibonacci
    $angka_sebelumnya = 0;
    $angka_sekarang = 1;

    echo "$angka_sebelumnya $angka_sekarang";

    for ($i=0; $i < 20; $i++) { 
        
        $output = $angka_sekarang + $angka_sebelumnya;
        echo " $output";

        $angka_sebelumnya = $angka_sekarang;
        $angka_sekarang = $output;
    }

    echo "<br><br>";

    // Bilangan Prima
    for ($i=1; $i <= 200; $i++) { 
        
        $t = 0;

        for ($j=1; $j <= $i; $j++) { 
            
            if ($i % $j == 0) {
                
                $t++;

            }

        }

        if ($t == 2) {
            
            echo "",$i,",";

        }
    }


?>
