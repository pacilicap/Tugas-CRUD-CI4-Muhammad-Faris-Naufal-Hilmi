<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ngetesaja extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Coba Ae",
            "name" => "Pacil"
        ];

        echo view('index', $data);
    }
}