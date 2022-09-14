<?php

namespace App\Controllers;
use App\Models\ModelAkun;
use App\Models\ModelMobil;
use App\Models\ModelSewa;

class CClient extends BaseController
{
    public function index_rental_client($id)
    {
        $nama=session()->get('Nama');
        $status=session()->get('Status');
        $data1= [
            'Nama' => $nama,
            'Status' => $status,
            'Id_Mobil' => $id
        ];

        session()->set($data1);

        $ModelMobil = new ModelMobil();
        $SQLModelMobil = $ModelMobil->where('idmobil', $id)->findAll();
        $data = [
            'dtmobil' => $SQLModelMobil,
        ];
        echo view('template/header');
        echo view('client/VIndexRentalClient', $data);
        echo view('template/footer');
    }
    public function tambah_sewa()
    {
        $M_Sewa = new ModelSewa();

        $tgl_sewa=$this->request->getPost('tgl_sewa');
        $tgl_selesai=$this->request->getPost('tgl_selesai');
        $nama=session()->get('Nama');
        $bukti_transfer_file=$this->request->getFile('bukti_transfer');
        $bukti_transfer_file->move('./assets/bukti_transfer');
        $bukti_transfer=$bukti_transfer_file->getName();
        $no_rekening=$this->request->getPost('no_rekening');
        $status_sewa=$this->request->getPost('status_sewa');
        $idmobil=$this->request->getPost('idmobil');//$id
        $hari=$this->request->getPost('waktu_sewa');
        $total_harga=$this->request->getPost('total_harga');

        $M_Sewa->save([
            'tgl_sewa' => $tgl_sewa,
            'tgl_selesai' => $tgl_selesai,
            'nama' => $nama,
            'bukti_transfer' => $bukti_transfer,
            'no_rekening' => $no_rekening,
            'status_sewa' =>  $status_sewa,
            'idmobil' => $idmobil,
            'hari' => $hari,
            'harga_total' => $total_harga
        ]);

        $M_Mobil = new ModelMobil();
        $M_Mobil->where('idmobil', $idmobil)
        ->set('status', 0)->update();

        // $nama=session()->get('Nama');
        $status=session()->get('Status');
        $data1= [
            'Nama' => $nama,
            'Status' => $status,
        ];
        session()->set($data1);

        // else{
            // $ModelMobil = new ModelMobil();
            // $SQLModelMobil = $ModelMobil->findAll();
            // $data = [
            //     'dtmobil' => $SQLModelMobil,
            // ];
            session()->setFlashdata('msgclient', 'Pembayaran berhasil, Tunggu selama max 1 hari kami akan menghubungi anda melalui whatsapp');

            // echo view('template/header');
            // echo view('client/VIndexClient', $data);
            // echo view('template/footer');
            return redirect()->to(base_url() . '/client/VIndexClient');
        // }        
    }

    public function hapus($id)
    {
        $nama=session()->get('Nama');
        $status=session()->get('Status');
        $data1= [
            'Nama' => $nama,
            'Status' => $status,
        ];
        session()->set($data1);

        $M_Mobil = new ModelMobil();
        $M_Mobil->where('idmobil', $id)->delete();
        $SQLModelMobil = $M_Mobil->findAll();
        $data = [
            'dtmobil' => $SQLModelMobil,
        ];

        echo view('template/header');
        echo view('admin/VIndexAdmin', $data);
        echo view('template/footer');
    }

    public function detail($id)
    {
        $nama=session()->get('Nama');
        $status=session()->get('Status');
        $data1= [
            'Nama' => $nama,
            'Status' => $status,
        ];
        session()->set($data1);

        $M_Mobil = new ModelMobil();
        $M_Mobil->where('idmobil', $id);
        $SQLModelMobil = $M_Mobil->findAll();
        $data = [
            'dtmobil' => $SQLModelMobil,
        ];

        echo view('template/header');
        echo view('admin/VDetailMobilAdmin', $data);
        echo view('template/footer');
    }

    public function index_edit($id)
    {
        $nama=session()->get('Nama');
        $status=session()->get('Status');
        $data1= [
            'Nama' => $nama,
            'Status' => $status,
        ];
        session()->set($data1);

        $M_Mobil = new ModelMobil();
        $M_Mobil->where('idmobil', $id);
        $SQLModelMobil = $M_Mobil->findAll();
        $data = [
            'dtmobil' => $SQLModelMobil,
        ];

        echo view('template/header');
        echo view('admin/VEditMobilAdmin', $data);
        echo view('template/footer');
    }
    public function edit_mobil($id)
    {
        $nama=session()->get('Nama');
        $status=session()->get('Status');
        $data1= [
            'Nama' => $nama,
            'Status' => $status,
        ];
        session()->set($data1);

        $M_Mobil = new ModelMobil();
        $foto_mobil_file=$this->request->getFile('foto_mobil');
        $foto_mobil_file->move('./assets/mobil');
        $foto_mobil=$foto_mobil_file->getName();
        $type_mobil=$this->request->getPost('type_mobil');
        $merk=$this->request->getPost('merk');
        $no_polisi=$this->request->getPost('no_polisi');
        $harga=$this->request->getPost('harga');
        $status_m=$this->request->getPost('status');

        $data=[
            'foto_mobil' => $foto_mobil,
            'type_mobil' => $type_mobil,
            'merk' =>  $merk,
            'no_polisi' => $no_polisi,
            'harga' => $harga,
            'status' => $status_m
        ];

        // $SQLModelMobil = $M_Mobil->findAll();
        // $data = [
        //     'dtmobil' => $SQLModelMobil,
        // ];
        $M_Mobil->where('idmobil', $id)
        ->set($data)->update();

        $SQLModelMobil = $M_Mobil->findAll();
        $datab = [
            'dtmobil' => $SQLModelMobil,
        ];
        

        echo view('template/header');
        echo view('admin/VIndexAdmin', $datab);
        echo view('template/footer');
    }
}