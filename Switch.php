<!-- Switch adalah percabangan yang memeriksa sebuah variable lalu menjalan perintah sesuai dengan varibel yang diperiksa  -->

<?php

    $banding = 5;

    switch ($banding) {
        case 1:
            
            echo "Senin";
            break;

        case 2:

            echo "Selasa";
            break;

        case 3:

            echo "Rabu";
            break;

        case 4:

            echo "Kamis";
            break;

        case 5:

            echo "Jum'at";
            break;

        case 6:

            echo "Sabtu";
            break;

        case 7:

            echo "Minggu";
            break;
        
        default:
            echo "Tidak Ditemukan";
            break;
    }

?>