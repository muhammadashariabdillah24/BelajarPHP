<?php

    
    $arr = array(1,3,8,2,5,7,4,0);

    echo "Sebelum Di Sorting";
    echo "<br>";

    print_r($arr);

    // for ($i=1; $i < count($arr); $i++) { 
        
    //     for ($j=count($arr) - 1; $j >= $i; $j--) { 
            
    //         if ($arr[$j] < $arr[$j - 1]) {
                
    //             $temp = $arr[$j];
    //             $arr[$j] = $arr[$j - 1];
    //             $arr[$j - 1] = $temp;

    //         }

    //     }

    // }

    echo "<br>";
    echo "Sesudah Di Sorting";
    echo "<br>";
    // print_r($arr);
    sort($arr);
    print_r($arr);


?>