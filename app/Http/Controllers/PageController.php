<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama: Sherly Lutfi Azkiah Sulistyawati <br> NIM: 2341720241';
    }

    public function articles($id) {
        return 'Halaman artikel dengan ID '.$id;
    }
}
