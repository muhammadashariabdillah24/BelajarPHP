<!-- Class Adalah sebuah blueprint atau rancangan dari sebuah objek yang akan dibuat -->
<!-- Constructor adalah sebuah function dimana dia akan dipanggil pertama setelah pembuatan objek -->

<?php

    class Kucing {

        public $warnaKucing;
        public $jenisKucing;
        public $warnaMata;

        function __construct($warnaKucing, $jenisKucing, $warnaMata)
        {
            $this->warnaKucing = $warnaKucing;
            $this->jenisKucing = $jenisKucing;
            $this->warnaMata = $warnaMata;
        }



        function mengeong()
        {
            echo "Ngeongggggggggggggggg";
        }

    }

    $panggilKucing = new Kucing("Hitam","Biasa","Kuning Kehitam Hitaman");
    $panggilKucingAnggora = new Kucing("Oren","Anggora","Oren Kehitam Hitaman");
    $panggilKucingKampung = new Kucing("Putih","Kampung","Kecoklatan");

    // echo $panggilKucing->mengeong();
    echo "<p>Saya Punya Kucing ".$panggilKucing->jenisKucing." dan berwarna ".$panggilKucing->warnaKucing." serta punya warna mata ".$panggilKucing->warnaMata."</p>";
    echo "<p>Saya Punya Kucing ".$panggilKucingAnggora->jenisKucing." dan berwarna ".$panggilKucingAnggora->warnaKucing." serta punya warna mata ".$panggilKucingAnggora->warnaMata."</p>";
    echo "<p>Saya Punya Kucing ".$panggilKucingKampung->jenisKucing." dan berwarna ".$panggilKucingKampung->warnaKucing." serta punya warna mata ".$panggilKucingKampung->warnaMata."</p>";

?>