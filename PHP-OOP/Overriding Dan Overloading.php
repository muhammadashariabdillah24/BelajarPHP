<!-- Overriding mengganti statement dari function -->

<?php

    class Kuda {

        public $jenisKuda;
        public $warnaKuda;

        public function __construct($jenisKuda, $warnaKuda)
        {
            $this->jenisKuda = $jenisKuda;
            $this->warnaKuda = $warnaKuda;
        }

        // Akan Kita Overriding
        public function suaraNya()
        {
            echo "Ngekkkkkk...kkkkk";
        }

        // Akan Kita Overloading
        public function rambutNya($rambut)
        {
            echo "Rambut = ".$rambut;
        }
    }

    class AnakKuda extends Kuda {

        public $anakKe;

        public function __construct($jenisKuda, $warnaKuda, $anakKe)
        {
            parent::__construct($jenisKuda, $warnaKuda);
            $this->anakKe = $anakKe;
        }

        // Overridingnya
        public function suaraNya()
        {
            echo "Ahii....Ahiiiiyaa";
        }

        // Overloading
        public function rambutNya($rambut)
        {
            echo "Rambut = ".$rambut;
        }

    }

    $kuda = new Kuda("Smolly Horse","Coklat Terang");

    $anakKuda = new AnakKuda("Smolly Horse Baby","Putih Kecoklatan","1");

    // Area Overriding

    echo "<p> Jenis Kuda ".$kuda->jenisKuda." Warna Kuda ".$kuda->warnaKuda."</p>";

    echo "<p> Jenis Anak Kuda ".$anakKuda->jenisKuda. "Warna Anak Kuda ".$anakKuda->warnaKuda." Anak Ke ".$anakKuda->anakKe."</p>";

    echo "<br><br>";

    echo "Suara Kuda ";
    echo $kuda->suaraNya();

    echo "<br>";

    echo "Suara Anak Kuda ";
    echo $anakKuda->suaraNya();

    // Area Overloading
    echo "<br><br>";

    echo $kuda->rambutNya("Panjang Dan Berwarna Kecoklatan");
    echo "<br>";
    echo $anakKuda->rambutNya("Tipis Dan Berwana Abu - Abu");

?>