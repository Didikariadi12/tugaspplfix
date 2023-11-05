<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BandingkanWaktu1Controller extends Controller
{
        //
        public function index()
    {
        $hasil_akar =User::orderby('id')->paginate();
        return view('total-login-userplsql', ['hasil_akar'=> $hasil_akar]);
    }
}
