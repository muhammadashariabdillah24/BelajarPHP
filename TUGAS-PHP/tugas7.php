<?php
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

?>
<h1>Tabel Bilangan</h1>
<table border="1">
    <tr>
        <td>Bilangan</td>
        <td>Jenis</td>
    </tr>
    <tr>
        <td><?php echo "$angka[0]" ?></td>
        <td>
            <?php
            echo "Bilangan Ganjil";
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[1]" ?></td>
        <td>
            <?php
            echo "Bilangan Genap";
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[2]" ?></td>
        <td>
            <?php
            echo "Bilangan Ganjil";
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[3]" ?></td>
        <td>
            <?php
            echo "Bilangan Genap";
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[4]" ?></td>
        <td>
            <?php
            echo "Bilangan Ganjil";
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[5]" ?></td>
        <td>
            <?php
            echo "Bilangan Genap";
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[6]" ?></td>
        <td>
            <?php
            echo "Bilangan Ganjil";
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[7]" ?></td>
        <td>
            <?php
            echo "Bilangan Genap";
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[8]" ?></td>
        <td>
            <?php
            echo "Bilangan Ganjil";
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[9]" ?></td>
        <td>
            <?php
            echo "Bilangan Genap";
            ?>
        </td>
    </tr>
</table>


<?php echo "<br><br>" ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7</title>
</head>

<body>

    <h1>Tabel Bilangan 2</h1>

    <table border=2>

        <tr>

            <th>Billangan</th>
            <th>Jenis</th>

        </tr>

        <?php

        for ($i = 1; $i <= 10; $i++) {

            $str = '';
            $num = 0;

            if ($i % 2 == 1) {

                $str = 'Bilangan Ganjil';
                $num = $i;
            } else if ($i % 2 == 0) {

                $str = 'Bilangan Genap';
                $num = $i;
            }



        ?>

            <tr>

                <td><?php echo $num ?></td>
                <td><?php echo $str ?></td>

            </tr>


        <?php } ?>

    </table>
</body>

</html>