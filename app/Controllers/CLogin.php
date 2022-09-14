<?php

namespace App\Controllers;
use App\Models\ModelAkun;
use App\Models\ModelMobil;
use App\Models\ModelSewa;

class CLogin extends BaseController
{
    public function login()
    {
        $M_akun = new ModelAkun();

        $email=$this->request->getPost('email');
        $password=$this->request->getPost('password');

        // $modelmassage2 = new massagemodel();
        $sqlakun = $M_akun->where('Email', $email)
                    ->where('Password', $password)
                    ->findAll();
        $sqlnama = $M_akun
                    ->where('Email', $email)
                    ->where('Password', $password)
                    ->get()->getResult();
        $nama = array_column($sqlnama, 'Nama');
        $status = array_column($sqlnama, 'Status');
        // $nama = array_column($sqlnama, 'nama');
        if($sqlakun==NULL){
            session()->setFlashdata('message', 'Email/Password Salah');    
        }
        else{
            $ModelMobil = new ModelMobil();
            $SQLModelMobil = $ModelMobil->findAll();
            $ModelSewa = new ModelSewa();
            $SQLModelSewa = $ModelSewa->findAll();
            $data = [
                'dtmobil' => $SQLModelMobil,
                'dtsewa' => $SQLModelSewa,
            ];
            // $data0= [
            //     'dtakun' => $sqlakun,
            // ];
            $data1= [
                'Nama' => $nama[0],
                'Status' => $status[0],
            ];
            session()->set($data1);
            // echo "<script>console.log('.$nama[0].$status[0]')</script>";

            echo view('template/header');
            // echo view('template/header', $data0);
        // $session = session();
            // session()->setFlashdata('message', 'Berhasil Daftar');
            if($status[0]==0){
                echo view('admin/VIndexAdmin', $data);
            }
            if($status[0]==1){
                echo view('client/VIndexClient', $data);
            }
            echo view('template/footer');
        }
        
    }

    public function logout()
    {
        session()->remove('Nama');
        session()->remove('Status');

        return redirect()->to(base_url() . '/');
    }


}