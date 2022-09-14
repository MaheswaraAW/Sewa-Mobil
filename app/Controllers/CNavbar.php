<?php

namespace App\Controllers;
use App\Models\ModelMobil;

class CNavbar extends BaseController
{
    public function index()
    {
        return view('navbar/VIndexAdmin');
    }

    public function tentang_kami()
    {
        echo view('template/header');
        echo view('navbar/VTentang_kami');
        echo view('template/footer');
        // return view('navbar/VTentang_kami');
    }

    public function faqs()
    {
        echo view('template/header');
        echo view('navbar/VFaqs');
        echo view('template/footer');
        // return view('navbar/VTentang_kami');
    }

    public function login()
    {
        echo view('template/header');
        echo view('navbar/VLogin');
        echo view('template/footer');
        // return view('navbar/VTentang_kami');
    }
}