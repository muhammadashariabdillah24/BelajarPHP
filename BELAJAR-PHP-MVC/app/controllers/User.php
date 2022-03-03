<?php

class User extends Controller {

    public function index()
    {
        $this->view("user/index");
    }

    public function profile($nama = "Ari", $pekerjaan = "Developer")
    {
        $data["nama"] = $nama;

        $data["pekerjaan"] = $pekerjaan;

        $this->view("user/profile", $data);
    }
}