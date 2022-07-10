<?php

namespace App\Controllers;

class Master extends BaseController
{
    public function index()
    {
        return view('masterFoto');
    }
    public function masterSiswa()
    {
        return view('masterSiswa');
    }
}
