<?php


        echo "<table align='center'><tr><td align='center'>";

        for ($i=0; $i <= 10; $i++) { 
            
            for ($a=$i; $a >= 0; $a--) { 
                
                echo "x";

            }

            echo "<br>";
        }

        for ($z=0; $z <= 9; $z++) { 
                
            for ($x=$z; $x <= 9 ; $x++) { 
                
                echo "x";

            }

            echo "<br>";
        }

        echo "</td></tr></table>";

?>