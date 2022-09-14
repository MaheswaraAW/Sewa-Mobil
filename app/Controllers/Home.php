<?php

namespace App\Controllers;
use App\Models\ModelMobil;
use App\Models\ModelSewa;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        $ModelMobil = new ModelMobil();
        $SQLModelMobil = $ModelMobil->findAll();
        $data = [
            'dtmobil' => $SQLModelMobil,
            ];
        echo view('template/header');
        echo view('welcome_message', $data);
        echo view('template/footer');
    }

    public function indexadmin()
    {
        // return view('welcome_message');
        $ModelMobil = new ModelMobil();
        $SQLModelMobil = $ModelMobil->findAll();
        $ModelSewa = new ModelSewa();
        $SQLModelSewa = $ModelSewa->findAll();
        $data = [
            'dtmobil' => $SQLModelMobil,
            'dtsewa' => $SQLModelSewa,
        ];
        $nama=session()->get('Nama');
        $status=session()->get('Nama');
        $data1= [
            'Nama' => $nama,
            'Status' => $status,
        ];
        // echo "<script>console.log('.$nama.$status')</script>";

        echo view('template/header', $data1);
        echo view('admin/VIndexAdmin', $data);
        echo view('template/footer');
    }

    public function indexclient()
    {
        // return view('welcome_message');
        $ModelMobil = new ModelMobil();
        $SQLModelMobil = $ModelMobil->findAll();
        $data = [
            'dtmobil' => $SQLModelMobil,
            ];
        $nama=session()->get('Nama');
        $status=session()->get('Status');
        $data1= [
            'Nama' => $nama,
            'Status' => $status,
        ];
        // echo "<script>console.log('.$nama.$status')</script>";
        
        echo view('template/header', $data1);
        echo view('client/VIndexClient', $data);
        echo view('template/footer');
    }

}