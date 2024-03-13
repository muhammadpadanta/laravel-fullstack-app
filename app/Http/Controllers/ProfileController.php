<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('profile');
    }
    public function pembayaran(){
        return view('pembayaran');
    }
    public function editProfile(){
        return view('editProfile');
    }
}
