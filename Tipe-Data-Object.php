<?php

    class jurusanit{
        public $nama_jurusan;
        public $predikat;

        function printJurusan()
        {
            return $this->nama_jurusan;
        }
    }

    $NamaJurusan = new jurusanit;

    $NamaJurusan->nama_jurusan = "Front End Developer";
    $NamaJurusan->predikat = "A";

    print_r($NamaJurusan);
?>