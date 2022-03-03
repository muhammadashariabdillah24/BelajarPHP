<?php


function tugas_5_1($input1,$input2,$input3,$input4)
{

    $one = printf($input1 and $input2);
    $two = printf($input1 or $input2);
    $three = printf($input3 and $input4);
    $four = printf($input3 or $input4);


    echo "
        
        <table border=2>
            
            <tr>
                <th>Input 1</th>
                <th>Input 2</th>
                <th>AND</th>
                <th>OR</th>
            </tr>
    
            <tr>
                <td>$one</td>
                <td>$two</td>
                <td>$three</td>
                <td>$four</td>
            </tr>
    
        </table>
    
        ";
}

tugas_5_1(true,false,true,false);

echo "<br><br>";

function tugas_5_2($input1,$input2,$input3,$input4)
{
    $str1 = $input1;
    $str2 = $input2;
    $str3 = $input3;
    $str4 = $input4;

    $gabung = $str1.' '.$str2;
    $gabung2 = $str3.' '.$str4;

    echo "
    
        <table border=2>
        
            <tr>
            
                <th>Input1</th>
                <th>Input2</th>
                <th>Hasil</th>

            </tr>

            <tr>
            
                <td>$str1</td>
                <td>$str2</td>
                <td>$gabung</td>

            </tr>

            <tr>
            
                <td>$str3</td>
                <td>$str4</td>
                <td>$gabung2</td>

            </tr>

        </table>
    
    "; 
}

tugas_5_2('Ayo','Belajar','Bersama','Niomic');

?>