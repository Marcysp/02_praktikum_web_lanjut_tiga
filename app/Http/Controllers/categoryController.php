<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    //
    public function bekel(){
        return 'bola bekel merupaka permainan trasional dengan melatih kelincahan';
    }
    public function gobak(){
        return 'gobak sodor merupaka permainan trasional yang diperlukan lebih dari 2 pemain';
    }
    public function dakon(){
        return 'dakon merupaka permainan trasional dengan memindahkan biji dengan peraturan tertentu';
    }
}
