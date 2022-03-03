<?php

    function mobilSaya()
    {
        echo "Mobil Saya Alphard";
        echo "<br>";
    }

    function mobilSaudaraSaya()
    {
        echo "Mobil Saudara Saya Terios";
        echo "<br>";
    }

    function mobilTetanggaSaya()
    {
        echo "Mobil Tetangga Saya Xenia";
        echo "<br>";
    }

    function cetakSemuaMobil($cetakMobilSaya, $cetakMobilSaudaraSaya, $cetakMobilTetanggaSaya)
    {
        echo $cetakMobilSaya;
        echo $cetakMobilSaudaraSaya;
        echo $cetakMobilTetanggaSaya;
    }

    cetakSemuaMobil(mobilSaya(),mobilSaudaraSaya(),mobilTetanggaSaya());

?>