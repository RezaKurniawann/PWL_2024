<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index () {
        return 'Selamat Datang';
    }

    public function about () {
        return 'Nama : Reza Kurniawan <br> NIM : 2241760059';

    }

    public function articles ($articleID) {
        return 'Halaman artikel dengan Id {'.$articleID. '}';        
    }
}
