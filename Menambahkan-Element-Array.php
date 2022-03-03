<?php

    // $pesantren_it = array(99.5,25,"Pasti Bisa","Tiga Puluh Empat");

    // $pesantren_it[5] = "Sembilan puluh sembilan koma 5";
    // $pesantren_it[6] = "Dua Puluh Lima";
    // $pesantren_it[7] = "Pesantren IT, Bisa Gak Bisa Harus Bisa";
    // $pesantren_it[8] = 34;

    // print_r($pesantren_it);

    class X {

        protected $s = 'Hallo';

        public function __construct()
        {
            echo $this->s;

            $this->s = 'Iyaa';

            echo $this->s;
        }

        public function change()
        {
            $this->s = 'jjj';

            echo $this->s;
        }


    }

    $new = new X();

    $new;

?>