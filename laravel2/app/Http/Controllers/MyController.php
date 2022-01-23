<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        // Menuju ke view beranda
        return view('beranda');
    }
}
