<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GambarController extends Controller
{
    public function gambar()
    {
         // Cek apakah user sudah terautentikasi atau belum
     
        $email = Auth::user()->email;
        
        return view('buktiPengambilan', [
            'Gambar'=>\App\Models\Gambar::where('email', $email)->first()
        ]);

    }
}