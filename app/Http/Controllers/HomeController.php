<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gambar;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if ($role== '0'){

            return view('dashboard');
        }

        if ($role== '1'){

            return view('listrumah', [
            'user'=>\App\Models\User::all()->where('status', 'bayar')
            ]);
        }

        else{
            return view('dashboard');
        }
    }


    public function upload()
    {
        return view('uploadbukti',);
    }

    public function storeUpload(request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image','mimes:jpeg,png,jpg,gif,svg', 'max:255'],
        ]);
        
        // $request->validate([
        //     'email' => ['required', 'string', 'max:255'],
        //     'image' => ['required', 'image','mimes:jpeg,png,jpg,gif,svg', 'max:255'],
        // ]);
       
        $Gambar = new Gambar;
        $Gambar->email=$request->email;
        $Gambar->image=$request->image;
        $Gambar->image=$request->file('image')->store();
        $Gambar->save();

        return redirect()->action([HomeController::class, 'index']);
    }


    public function ambilList($id){
       
        return view('uploadbukti', [
            'user'=>\App\Models\User::all()->where('id', $id)
            ]);
        
    }



}