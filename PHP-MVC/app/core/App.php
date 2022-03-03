<?php

class App {

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];


    public function __construct()
    {
     
        // Ini Area Controller
        // jalankan method parseURL didalam construct supaya dijalankan saat aplikasi dibuka / di jalankan
        $url = $this->parseURL();

        // var_dump($url);

        if ( file_exists('../app/controllers' . $url[0] . '.php') ) {

            $this->controller = $url[0];

            unset($url[0]);

        }


        // require_once '../app/controllers/' . $this->controller . '.php';

        // $this->controller = new $this->controller;

        
        // // Method
        // if ( isset($url[1]) ) {
            
        //     if (method_exists($this->controller, $url[1])) {
                
        //         $this->method = $url[1];
        //         unset($url[1]);
                
        //     }
            
        // }

        // if (!empty($url)) {
            
        //     var_dump($url);

        // }
        
        var_dump($url);

    }

    public function parseURL()
    {
        // Jika ada string didalam url makan akan dijalankan
        if (isset($_GET['url'])) {
            
            // Menghapus karakter ( / ) pada akhir url
            $url = rtrim($_GET['url'], '/');

            // Memfilter kata kata tak jelas pada url supaya aman dari serangan hacker
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Pecah url menjadi sebuah data array dengan explode
            $url = explode('/', $url);

            // kembalikan nilai yang ada didalam varable url
            return $url;

        }
    }
}