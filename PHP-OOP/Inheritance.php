<!-- Instance digunakan untuk mencetak atau mengambil atribut atau method dari Class Parent Ke Class Child -->

<?php

class SepedaDewasa {

    // Ini Yang Akan Kita Ambil Untuk Di Class SepedaAnakKecil
    public $warnaSepeda;
    public $ukuranBan;

    public function __construct($warnaSepeda, $ukuranBan)
    {
        $this->warnaSepeda = $warnaSepeda;
        $this->ukuranBan = $ukuranBan;
    }

    function cetakWarnaSepedaDewasa()
    {
        echo "Warna Sepeda Dewasa ".$this->warnaSepeda;
    }
}

class SepedaAnakKecil extends SepedaDewasa {

    public $kecepatan;

    // Ambil Atribut Dari Class Sepeda Dewasa
    public function __construct($warnaSepeda, $ukuranBan, $kecepatan)
    {
        // Fungsi Parent untuk mengambil sebuah atribut di kelas parent yaitu ( SepedaDewasa )
        parent::__construct($warnaSepeda, $ukuranBan);
        $this->kecepatan = $kecepatan;
    }

    function cetakKecepatanSepedaAnakKecil()
    {
        echo "Kecepatan Sepeda Anak Kecil ".$this->kecepatan;
    }
}

$sepedaDewasa = new SepedaDewasa("Putih Krem","10 Inci");

$sepedaAnakKecil = new SepedaAnakKecil("Pink","5 Inci","100 KM / JAM");

echo $sepedaDewasa->cetakWarnaSepedaDewasa();
echo "</p>Warna Sepeda Dewasa ".$sepedaDewasa->warnaSepeda."</p>";
echo "</p>Ukuran Sepeda Dewasa ".$sepedaDewasa->ukuranBan."</p>";
echo "<br><br>";
echo "</p>Warna Sepeda Anak Kecil ".$sepedaAnakKecil->warnaSepeda."</p>";
echo "</p>Ukuran Ban Sepeda Anak Kecil ".$sepedaAnakKecil->ukuranBan."</p>";
echo "</p>Kecepatan Sepeda Anak Kecil ".$sepedaAnakKecil->kecepatan."</p>";
echo $sepedaAnakKecil->cetakKecepatanSepedaAnakKecil();

?>