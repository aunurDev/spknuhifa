<?php

namespace App\Controllers;

use App\Models\mAlterKrit;

class Master extends BaseController
{
    public function index()
    {
        $dbAlterKrit    = new mAlterKrit;
        $data = [
            'foto' => $dbAlterKrit->findAll()
        ];
        return view('masterFoto', $data);
    }


    public function masterSiswa()
    {
        //read data nilai bobot db
        $dbAlterKrit    = new mAlterKrit;

        $data = [
            'alterKrit' => $dbAlterKrit->findAll()
        ];

        return view('masterSiswa', $data);
    }
}
