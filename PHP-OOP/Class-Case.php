<?php

// Case 1
class Car {

    public $jenisMobil;
    public $warnaMobil;

    function __construct($jenisMobil, $warnaMobil)
    {
        $this->jenisMobil = $jenisMobil;
        $this->warnaMobil = $warnaMobil;
    }

    function menyalakanMesin()
    {
        echo "Mberemmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm...bremmmmmmmmmmmmmmmm...bremmmmmm";
    }

}

$mobilAvanza = new Car("Avanza","Abu-Abu");
$mobilXenia = new Car("Xenia","Putih");
$mobilAlphard = new Car("Alphard","Hitam");

echo "<p> Mobil Saya ".$mobilAlphard->jenisMobil." Dan berwarna ".$mobilAlphard->warnaMobil."</p>";
echo "<p> Mobil Tetangga Saya ".$mobilXenia->jenisMobil." Dan Berwarna ".$mobilXenia->warnaMobil."</p>";
echo "<p> Mobil Saudara Saya ".$mobilAvanza->jenisMobil. "Dan Berwarna ".$mobilAvanza->warnaMobil."</p>";
echo "<br><br>";
echo "Mobil Telah Menyala = ";
echo $mobilAlphard->menyalakanMesin();

echo "<br><br>";

// Case 2

class Handphone {

    public $kualitasKamera;
    public $namaHandphone;

    function __construct($kualitasKamera, $namaHandphone){

        $this->kualitasKamera = $kualitasKamera;
        $this->namaHandphone = $namaHandphone;
    }

    function ambilFoto()
    {
        echo "Cekrekk";
    }
}

$hp = new Handphone("150PX","Realme Indonesia");

echo "Kualitas Kamera ".$hp->kualitasKamera." Nama Handphone ".$hp->namaHandphone;


?>