<?php

namespace App\Controllers;
use App\Models\ModelMobil;

class CTRAdmin extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('navbar/VIndexAdmin');
        echo view('template/header');
        // $ModelMobil = new ModelMobil();
        // $SQLModelMobil = $ModelMobil->findAll();
        // $data = [
        //     'dtmobil' => $SQLModelMobil,
        //     ];
        // return view('VIndexAdmin.php', $data);
    }

}