<?php

namespace App\Controllers;
use App\Models\ModelAkun;

class CDaftarAkun extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('VDaftarAkun');
        echo view('template/footer');
        // $ModelMobil = new ModelMobil();
        // $SQLModelMobil = $ModelMobil->findAll();
        // $data = [
        //     'dtmobil' => $SQLModelMobil,
        //     ];
        // return view('VIndexAdmin.php', $data);
    }

    public function daftar()
    {
        echo view('template/header');
        echo view('VDaftarAkun');
        echo view('template/footer');
        // $ModelMobil = new ModelMobil();
        // $SQLModelMobil = $ModelMobil->findAll();
        // $data = [
        //     'dtmobil' => $SQLModelMobil,
        //     ];
        // return view('VIndexAdmin.php', $data);
    }

    public function tambah_akun()
    {
        $akun = new ModelAkun();

        $nama=$this->request->getPost('nama');
        $email=$this->request->getPost('email');
        $password=$this->request->getPost('password');
        $alamat=$this->request->getPost('alamat');
        $no_telepon=$this->request->getPost('No_Telepon');
        $ktp_file=$this->request->getFile('ktp');
        $ktp_file->move('./assets/ktp');
        $ktp=$ktp_file->getName();
        $status=$this->request->getPost('status');

        $akun->save([
            'Nama' => $nama,
            'Email' => $email,
            'Password' =>  $password,
            'Alamat' => $alamat,
            'No_Telepon' => $no_telepon,
            'KTP' => $ktp,
            'Status' => $status
        ]);

        echo view('template/header');
        
        session()->setFlashdata('message', 'Berhasil Daftar');
        echo view('navbar/VLogin');
        echo view('template/footer');
        // $ModelMobil = new ModelMobil();
        // $SQLModelMobil = $ModelMobil->findAll();
        // $data = [
        //     'dtmobil' => $SQLModelMobil,
        //     ];
        // return view('VIndexAdmin.php', $data);
    }

}