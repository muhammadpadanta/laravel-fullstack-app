<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    public function listBarang()
    {
        return view('listBarang');
    }
}
