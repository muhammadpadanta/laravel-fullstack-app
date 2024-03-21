<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('components.profile');
    }
    public function pembayaran(){
        return view('components.pembayaran');
    }
    public function editProfile(){
        return view('components.editProfile');
    }
}
