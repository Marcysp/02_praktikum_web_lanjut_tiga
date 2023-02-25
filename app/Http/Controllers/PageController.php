<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Alvina Marcy Syakirah Permata/2141720017';
    }
    public function articles($id){
        return "Halaman Artikel dengan ID $id";
    }
    public function hello(){
        return view('halaman.hello',['name' => 'Alvina Marcy with Controller']);
    }
}
